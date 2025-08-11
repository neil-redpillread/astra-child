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
