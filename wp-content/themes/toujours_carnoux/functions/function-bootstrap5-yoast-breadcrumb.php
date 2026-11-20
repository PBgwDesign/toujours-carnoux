<?php
function wps_yoast_breadcrumb_bootstrap()
{
    if (function_exists('yoast_breadcrumb')) {
        $breadcrumb = yoast_breadcrumb(
            '<ul class="breadcrumb"><li class="breadcrumb-item">',
            '</li></ul>',
            false
        );

        echo str_replace(
            '§',
            '</li><li class="breadcrumb-item">',
            $breadcrumb
        );
    } else {
        echo '<ul class="breadcrumb"><li>Missing function "yoast_breadcrumb"</li></ul>';
    }
}


function yoast_seo_breadcrumb_append_link( $links ) {
    global $post;

    $actualite_page_id = get_field('actualite_page_id', 'options');
    $ressources_page_id = get_field('ressources_page_id', 'options');
    $successstories_page_id = get_field('successstories_page_id', 'options');

    // Actualités
    if ( $actualite_page_id && is_singular( 'post' ) ) {
        $term = get_post_primary_category(get_the_ID());
        $breadcrumb[] = array(
            'url' => get_permalink($actualite_page_id),
            'text' => get_the_title($actualite_page_id),
        );
        if ( $term ) {
            $breadcrumb[] = array(
                'url' => get_term_link($term['primary_category']->term_id),
                'text' => $term['primary_category']->name,
            );
        }
        array_splice( $links, 1, -2, $breadcrumb );
    }

    // Catégories
    if ( $actualite_page_id && is_category() ) {
        $breadcrumb[] = array(
            'url' => get_permalink($actualite_page_id),
            'text' => get_the_title($actualite_page_id),
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }

    // Ressources
    if ( $ressources_page_id && is_singular( 'ressource' ) ) {
        $breadcrumb[] = array(
            'url' => get_permalink($ressources_page_id),
            'text' => get_the_title($ressources_page_id),
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }

    // Catégorie de ressource
    if ( $ressources_page_id && is_tax('categorie_ressource') ) {
        $breadcrumb[] = array(
            'url' => get_permalink($ressources_page_id),
            'text' => get_the_title($ressources_page_id),
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }

    // Success stories
    if ( $successstories_page_id && is_singular( 'success-story' ) ) {
        $breadcrumb[] = array(
            'url' => get_permalink($successstories_page_id),
            'text' => get_the_title($successstories_page_id),
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }

    // Levier
    if ( $successstories_page_id && is_tax('levier') ) {
        $breadcrumb[] = array(
            'url' => get_permalink($successstories_page_id),
            'text' => get_the_title($successstories_page_id),
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }

    return $links;
}
add_filter( 'wpseo_breadcrumb_links', 'yoast_seo_breadcrumb_append_link' );