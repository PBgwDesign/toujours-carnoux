<?php

function adding_js(){
    wp_register_script('theme-js', get_template_directory_uri() . "/assets/js/theme.min.js", array('jquery'), '1.1', true);
    wp_enqueue_script('theme-js');
}
add_action('wp_enqueue_scripts', 'adding_js');

function adding_backend_js() {
    $php_vars = array();
    wp_enqueue_script( 'backoffice', get_template_directory_uri() . "/assets/js/backoffice.min.js", array('jquery', 'acf-input'), '1.0' );
    wp_localize_script( 'backoffice', 'php_vars', $php_vars );
}
add_action( 'admin_enqueue_scripts', 'adding_backend_js' );
