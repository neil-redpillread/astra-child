<?php get_header(); ?>

<main class="single-post-wrapper">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="custom-post-header">

                <!-- CATEGORY -->
                <div class="post-categories">
                    <?php
                    $categories = get_the_category();
                    $category_links = [];
                    foreach ($categories as $cat) {
                        $category_links[] = '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a>';
                    }
                    echo implode(', ', $category_links);
                    ?>
                </div>

                <!-- TITLE -->
                <h1 class="post-title"><?php the_title(); ?></h1>

                <!-- AUTHOR, DATE, READ TIME -->
                <div class="post-meta">
                    <span class="author">By Neil Joseph</span>
                    <span class="separator">|</span>
                    <span class="date"><?php echo get_the_date(); ?></span>
                    <span class="separator">|</span>
                    <span class="read-time">
                        <?php
                        $word_count = str_word_count(strip_tags(get_post_field('post_content', get_the_ID())));
                        $read_time = ceil($word_count / 200);
                        echo $read_time . ' min read';
                        ?>
                    </span>
                </div>

                <!-- CONTENT -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
