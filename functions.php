<?php
// Enqueue the parent and child theme styles
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
    // Load parent style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Load child style AFTER parent style
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', function () {
  if ( ! is_page_template('portfolio-page.php') ) return;

  // Swiper CSS + JS
  wp_enqueue_style(
    'swiper-bundle',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    [], null
  );
  wp_enqueue_script(
    'swiper-bundle',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    [], null, true
  );

  // Your carousel.js
  $js_file = get_stylesheet_directory() . '/assets/js/carousel.js';
  wp_enqueue_script(
    'portfolio-carousel',
    get_stylesheet_directory_uri() . '/assets/js/carousel.js',
    ['swiper-bundle'],
    file_exists($js_file) ? filemtime($js_file) : null,
    true
  );
});
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script(
    'skills-bars',
    get_stylesheet_directory_uri() . '/assets/js/skills-bars.js',
    [],
    null,
    true
  );
});
function load_swiper_assets() {
  wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'load_swiper_assets');

function wp_redirect_under_construction_pages() {
    $redirect_pages = ['consultation'];
    if ( is_page($redirect_pages) ) {
        wp_redirect( home_url('/under-construction/'), 302 );
        exit;
    }
}
add_action('template_redirect', 'wp_redirect_under_construction_pages');
// Enqueue blog filter script
function blog_filter_scripts() {
    wp_enqueue_script('blog-filter', get_stylesheet_directory_uri() . '/assets/js/blog-filter.js', ['jquery'], null, true);
    wp_localize_script('blog-filter', 'blog_ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'blog_filter_scripts');
// Handle AJAX filter requests
function filter_blog_posts() {
    $cat_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;

    error_log('AJAX category_id: ' . $cat_id); // TEMP: Debug

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
    );

    if ($cat_id !== 0) {
        $args['cat'] = $cat_id;
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
        <div class="blog-post">
    <a href="<?php the_permalink(); ?>" class="blog-post-link">
        <div class="blog-post-thumbnail">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('medium_large'); // you can adjust the size
            } else {
                echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/placeholder.jpg" alt="Placeholder">';
            } ?>
        </div>
        <div class="blog-post-content">
            <h3 class="blog-post-title"><?php the_title(); ?></h3>
            <p class="blog-post-date"><?php echo get_the_date(); ?></p>
        </div>
    </a>
    </div>
        <?php endwhile;
    else :
        echo '<p>No posts found for this category.</p>';
    endif;

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_filter_blog_posts', 'filter_blog_posts');
add_action('wp_ajax_nopriv_filter_blog_posts', 'filter_blog_posts');
