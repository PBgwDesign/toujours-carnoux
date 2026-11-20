<?php
/* Rename Posts in admin menu */
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Articles';
    $submenu['edit.php'][5][0] = 'Toutes les Articles';
    $submenu['edit.php'][10][0] = 'Ajouter un nouveau';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Articles';
    $labels->singular_name = 'Article';
    $labels->add_new = 'Ajouter nouveau';
    $labels->add_new_item = 'Ajouter un nouveau';
    $labels->edit_item = 'Modifier l\'article';
    $labels->new_item = 'Article';
    $labels->view_item = 'Voir l\'article';
    $labels->search_items = 'Rechercher Article';
    $labels->not_found = 'Aucune article trouvé';
    $labels->not_found_in_trash = 'Aucune article trouvé dans la corbeille';
    $labels->all_items = 'Tous les articles';
    $labels->menu_name = 'Articles';
    $labels->name_admin_bar = 'Article';
}
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );