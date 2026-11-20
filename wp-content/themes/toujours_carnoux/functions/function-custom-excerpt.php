<?php
add_filter('excerpt_length', 'excerpt_length');

function excerpt_length($length)
{
    return 9999;
}

add_filter('excerpt_more', 'auto_excerpt_more');

function auto_excerpt_more($more)
{
    if (!is_admin()) {
        return '';
    }
    return $more;
}

add_filter('get_the_excerpt', 'custom_excerpt_more');

function custom_excerpt_more($output)
{
    if (has_excerpt() && !is_attachment() && !is_admin()) {
        $output .= '';
    }
    return $output;
}

function excerpt($limit,$post_id = false){

    $excerpt = explode(' ', get_the_excerpt($post_id), $limit);



    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return "<p>" . $excerpt . "</p>";
}

function get_custom_excerpt( $word_count = 20, $post = null ) {
	$post = get_post( $post );
    if ( ! $post ) {
        return '';
    }
	$word_count = (int) $word_count;
	if ( strlen($post->post_excerpt) > 0 ) {
		$post_excerpt = wp_trim_words( wp_strip_all_tags($post->post_excerpt), $word_count );
	} else {
		$post_excerpt = wp_trim_words( wp_strip_all_tags($post->post_content), $word_count );
	}
	return $post_excerpt;
}
add_filter( 'get_the_excerpt', 'get_custom_excerpt' );