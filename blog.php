<?php
/* Template Name: Blog Page */
get_header();
?>

<div class="blog-header">
    <h1>The Ultimate SEO Library</h1>
    <p>All things SEO, digital PR, and link building. Learn to build authoritative backlinks and brand mentions that improve your rankings and revenue.</p>
</div>

<div class="blog-filters">
    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="active">All Posts</a>
    <?php
        $categories = get_categories(['orderby' => 'name','hide_empty' => false]);
        foreach ($categories as $category) {
            echo '<a href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a>';
        }
    ?>
</div>

<div class="blog-grid">
    <?php
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 9,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="blog-post">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium_large'); ?>
                    </a>
                <?php endif; ?>

                <?php
                $category = get_the_category();
                if ($category) {
                    echo '<span class="category">' . esc_html($category[0]->name) . '</span>';
                }
                ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="date"><?php echo get_the_date(); ?></div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
