<?php
add_theme_support('editor-color-palette', array(
    array(
        'name'  => 'primary',
        'slug'  => 'primary',
        'color' => '#00B13C',
        'font' => '#ffffff'
    ),
    array(
        'name'  => 'secondary',
        'slug'  => 'secondary',
        'color' => '#4B5EAE',
        'font' => '#ffffff'
    ),
    array(
        'name'  => 'tertiary',
        'slug'  => 'tertiary',
        'color' => '#0E1E86',
        'font' => '#ffffff'
    ),
));

function set_tiny_mce_colors($init){

    $custom_colors = '
          "00B13C", "primary",
          "4B5EAE", "secondary",
          "0E1E86", "tertiary",
      ';
    $init['textcolor_map'] = '[' . $custom_colors . ']';

    $init['textcolor_rows'] = 1;

    return $init;
}
add_filter('tiny_mce_before_init', 'set_tiny_mce_colors');