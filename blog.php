<?php
/* Template Name: Blog Page */
get_header();
?>

<div class="blog-header">
    <h1>The Ultimate SEO Library</h1>
    <p>All things SEO, digital PR, and link building. Learn to build authoritative backlinks and brand mentions that improve your rankings and revenue.</p>
</div>

<div class="blog-filters">
    <button class="filter-button" data-cat="0">All Posts</button>
    <?php
    $categories = get_categories(array(
        'orderby' => 'name',
        'hide_empty' => false
    ));
    foreach ($categories as $category) {
        echo '<button class="filter-button" data-cat="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</button>';
    }
    ?>
</div>

<div class="blog-grid">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="blog-post">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
    </a>
    </div>
        <?php endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
