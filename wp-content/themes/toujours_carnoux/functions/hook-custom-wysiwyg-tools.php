<?php

add_filter( 'mce_buttons_2', function( $buttons ) {
    array_unshift( $buttons, 'fontsizeselect' );
    return $buttons;
});

/**
 * Function name: remove_h1_from_editor()
 * Description: Remove the h1 tag from the WordPress editor
 * @version 1.0
 */
function remove_h1_from_editor( $settings ) {
    $settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Preformatted=pre;';
    return $settings;
}
add_filter( 'tiny_mce_before_init', 'remove_h1_from_editor' );