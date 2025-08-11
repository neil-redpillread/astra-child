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
  // limit to the portfolio page/template
  if ( ! is_page('portfolio') && ! is_page_template('portfolio-page.php') ) return;

  wp_enqueue_style('swiper-bundle','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',[], '11');
  wp_enqueue_script('swiper-bundle','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',[], '11', true);

  // your JS (matches your screenshot)
  $js_path = get_stylesheet_directory() . '/assets/js/carousel.js';
  $js_uri  = get_stylesheet_directory_uri() . '/assets/js/carousel.js';
  $ver     = file_exists($js_path) ? filemtime($js_path) : null;

  wp_enqueue_script('portfolio-carousel', $js_uri, ['swiper-bundle'], $ver, true);
});
