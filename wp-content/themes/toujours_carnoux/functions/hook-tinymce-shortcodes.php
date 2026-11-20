<?php
function add_tinymce_button($buttons) {
    array_push($buttons, 'add_mce_shortcode_button');
    array_push($buttons, 'add_mce_shortcode_table');
    array_push($buttons, 'add_mce_shortcode_video');
    array_push($buttons, 'add_mce_shortcode_list_check');
    return $buttons;
}
add_filter('mce_buttons', 'add_tinymce_button');

function register_tinymce_js($plugin_array) {
    $plugin_array['add_mce_shortcode_button'] = get_bloginfo("template_url") . "/assets/js/backoffice.min.js";
    $plugin_array['add_mce_shortcode_table'] = get_bloginfo("template_url") . "/assets/js/backoffice.min.js";
    $plugin_array['add_mce_shortcode_video'] = get_bloginfo("template_url") . "/assets/js/backoffice.min.js";
    $plugin_array['add_mce_shortcode_list_check'] = get_bloginfo("template_url") . "/assets/js/backoffice.min.js";
    return $plugin_array;
}
add_filter('mce_external_plugins', 'register_tinymce_js');

function button_shortcode($atts) {
    $atts = is_array($atts) ? $atts : '';
    $target = array_key_exists('new_tab', $atts) ? $atts["new_tab"] : false;
    $target = $target == true ? 'target="_blank"' : '';
    $download = array_key_exists('download', $atts) ? $atts["download"] : false;
    $download = $download == true ? 'download' : '';
    return '<a data-label="'.$atts["text"].'" href="' . $atts["href"] . '" ' . $target . ' ' . $download . ' class="btn btn-icon-arrow btn-'.$atts["class"].'">' . $atts["text"] . '</a>';
}
add_shortcode('button', 'button_shortcode');

function video_shortcode($atts) {
    if($video = $atts["url"] && $image = $atts["image"]){
        $html = '<a class="d-block video-shortcode" href="'.$atts["url"].'" data-fancybox="video">';
        $html .= '<img class="img-fluid" src="'.$atts["image"].'" />';
        $html .='</a>';
        return $html;
    }
}
add_shortcode('modal_video', 'video_shortcode');

function list_check_shortcode($atts, $content = null) {
    $content = preg_replace('/<ul(\s[^>]*)?>/', '<ul class="list-check"$1>', $content);
    return do_shortcode($content);
}
add_shortcode('list_check', 'list_check_shortcode');

