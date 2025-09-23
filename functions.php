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
    $redirect_pages = ['blog', 'services', 'consultation'];
    if ( is_page($redirect_pages) ) {
        wp_redirect( home_url('/under-construction/'), 302 );
        exit;
    }
}
add_action('template_redirect', 'wp_redirect_under_construction_pages');
