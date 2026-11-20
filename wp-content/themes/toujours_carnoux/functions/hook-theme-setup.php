<?php

function setup_theme() {
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');

    register_nav_menus(array(
        'principal' => __('Menu principal', 'general'),
        'copyright' => __('Copyright', 'general'),
    ));

    add_image_size('rectangle_246_374', 246, 374, false);

}
add_action('after_setup_theme', 'setup_theme');

add_action('init', function(){
    register_taxonomy('post_tag', []);
});

function hide_menu_items() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'hide_menu_items', 999 );