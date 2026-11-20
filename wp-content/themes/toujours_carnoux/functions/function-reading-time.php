<?php
/* Reading time functions */

function get_reading_time($post = 0) {
	$post = get_post( $post );
	$id = isset( $post->ID ) ? $post->ID : 0;
	$word_count = preg_match_all("/[a-z']+/i", html_entity_decode(strip_tags(get_the_content(null, false, $id)), ENT_QUOTES));
	$reading_time = ceil($word_count / 150);
	return $reading_time;
}

function the_reading_time($before = '', $after = '', $echo = true) {
	$reading_time = get_reading_time();
    if ( strlen( $reading_time ) == 0 ) {
        return;
    }
    $reading_time = $before . $reading_time . $after;
    if ( $echo ) {
        echo $reading_time;
    } else {
        return $reading_time;
    }
}