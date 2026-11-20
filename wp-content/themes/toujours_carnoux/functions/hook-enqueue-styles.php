<?php
/* Add front theme CSS */
function adding_front_end_css() {
    wp_register_style('theme', get_template_directory_uri() . "/assets/css/theme.min.css");
    wp_enqueue_style('theme');
    wp_register_style( 'greycliff-font', 'https://use.typekit.net/izy7lkx.css', array(), null );
    wp_enqueue_style( 'greycliff-font' );
}
add_action('wp_enqueue_scripts', 'adding_front_end_css');

/* Add back ACF builder & custom CSS */
function adding_backend_css() {
    wp_register_style( 'custom', get_template_directory_uri() . '/assets/css/bo-custom.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/bo-custom.css') );
    wp_enqueue_style( 'custom' );
    wp_register_style( 'builder', get_template_directory_uri() . '/assets/css/bo-render.css' );
    wp_enqueue_style( 'builder' );
}
add_action( 'admin_enqueue_scripts', 'adding_backend_css', 0 );