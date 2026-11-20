<?php

/* Register Custom Post Type Ressource externe */
if ( ! function_exists('custom_post_type_actualite_externe') ) {
    function custom_post_type_actualite_externe() {
        $labels = array(
            'name'                  => _x( 'Actualités externes', 'Post Type General Name', 'toujourscarnoux' ),
            'singular_name'         => _x( 'Actualité externe', 'Post Type Singular Name', 'toujourscarnoux' ),
            'menu_name'             => __( 'Actualités externes', 'toujourscarnoux' ),
            'name_admin_bar'        => __( 'Actualité externe', 'toujourscarnoux' ),
            'archives'              => __( 'Archives des actualités externes', 'toujourscarnoux' ),
            'attributes'            => __( 'Attributs de l\'actualité externe', 'toujourscarnoux' ),
            'parent_item_colon'     => __( 'Parent de l\'actualité externe :', 'toujourscarnoux' ),
            'all_items'             => __( 'Toutes les actualités externes', 'toujourscarnoux' ),
            'add_new_item'          => __( 'Ajouter une nouvelle actualité externe', 'toujourscarnoux' ),
            'add_new'               => __( 'Ajouter une nouvelle actualité externe', 'toujourscarnoux' ),
            'new_item'              => __( 'Nouvelle actualité externe', 'toujourscarnoux' ),
            'edit_item'             => __( 'Modifier l\'actualité externe', 'toujourscarnoux' ),
            'update_item'           => __( 'Mettre à jour l\'actualité externe', 'toujourscarnoux' ),
            'view_item'             => __( 'Voir l\'actualité externe', 'toujourscarnoux' ),
            'view_items'            => __( 'Voir les actualités externes', 'toujourscarnoux' ),
            'search_items'          => __( 'Rechercher une actualité externe', 'toujourscarnoux' ),
            'not_found'             => __( 'Aucune actualité externe trouvée', 'toujourscarnoux' ),
            'not_found_in_trash'    => __( 'Aucune actualité externe trouvée dans la corbeille', 'toujourscarnoux' ),
            'featured_image'        => __( 'Image mise en avant', 'toujourscarnoux' ),
            'set_featured_image'    => __( 'Définir l\'image mise en avant', 'toujourscarnoux' ),
            'remove_featured_image' => __( 'Supprimer l\'image mise en avant', 'toujourscarnoux' ),
            'use_featured_image'    => __( 'Utiliser comme image mise en avant', 'toujourscarnoux' ),
            'insert_into_item'      => __( 'Insérer dans l\'actualité externe', 'toujourscarnoux' ),
            'uploaded_to_this_item' => __( 'Téléchargé sur cette actualité externe', 'toujourscarnoux' ),
            'items_list'            => __( 'Liste d\'actualité externe', 'toujourscarnoux' ),
            'items_list_navigation' => __( 'Navigation dans la liste d\'actualité externe', 'toujourscarnoux' ),
            'filter_items_list'     => __( 'Filtrer la liste d\'actualité externe', 'toujourscarnoux' ),
        );
        $args = array(
            'label'                 => __( 'Actualité externe', 'toujourscarnoux' ),
            'description'           => __( 'Description de l\'actualité externe', 'toujourscarnoux' ),
            'menu_icon'             => 'dashicons-external',
            'labels'                => $labels,
            'supports'              => array( 'title', 'revisions' ),
            'taxonomies'            => array( 'category' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => false,
            'capability_type'       => 'page',
            'rewrite'               => array(
                'slug' => 'actualiteexterne',
                'with_front' => false
            )
        );
        register_post_type( 'actualite-externe', $args );
    }
    add_action( 'init', 'custom_post_type_actualite_externe', 0 );
}


/* Register Custom Post Type Événement */
if ( ! function_exists('custom_post_type_evenement') ) {
    function custom_post_type_evenement() {
        $labels = array(
            'name'                  => _x( 'Événements', 'Post Type General Name', 'toujourscarnoux' ),
            'singular_name'         => _x( 'Événement', 'Post Type Singular Name', 'toujourscarnoux' ),
            'menu_name'             => __( 'Événements', 'toujourscarnoux' ),
            'name_admin_bar'        => __( 'Événement', 'toujourscarnoux' ),
            'archives'              => __( 'Archives des événements', 'toujourscarnoux' ),
            'attributes'            => __( 'Attributs de l\'événement', 'toujourscarnoux' ),
            'parent_item_colon'     => __( 'Parent de l\'événement :', 'toujourscarnoux' ),
            'all_items'             => __( 'Tous les événements', 'toujourscarnoux' ),
            'add_new_item'          => __( 'Ajouter un nouvel événement', 'toujourscarnoux' ),
            'add_new'               => __( 'Ajouter un nouvel événement', 'toujourscarnoux' ),
            'new_item'              => __( 'Nouvel événement', 'toujourscarnoux' ),
            'edit_item'             => __( 'Modifier l\'événement', 'toujourscarnoux' ),
            'update_item'           => __( 'Mettre à jour l\'événement', 'toujourscarnoux' ),
            'view_item'             => __( 'Voir l\'événement', 'toujourscarnoux' ),
            'view_items'            => __( 'Voir les événements', 'toujourscarnoux' ),
            'search_items'          => __( 'Rechercher un événement', 'toujourscarnoux' ),
            'not_found'             => __( 'Aucune événement trouvé', 'toujourscarnoux' ),
            'not_found_in_trash'    => __( 'Aucune événement trouvé dans la corbeille', 'toujourscarnoux' ),
            'featured_image'        => __( 'Image mise en avant', 'toujourscarnoux' ),
            'set_featured_image'    => __( 'Définir l\'image mise en avant', 'toujourscarnoux' ),
            'remove_featured_image' => __( 'Supprimer l\'image mise en avant', 'toujourscarnoux' ),
            'use_featured_image'    => __( 'Utiliser comme image mise en avant', 'toujourscarnoux' ),
            'insert_into_item'      => __( 'Insérer dans l\'événement', 'toujourscarnoux' ),
            'uploaded_to_this_item' => __( 'Téléchargé sur cet événement', 'toujourscarnoux' ),
            'items_list'            => __( 'Liste d\'événement', 'toujourscarnoux' ),
            'items_list_navigation' => __( 'Navigation dans la liste d\'événement', 'toujourscarnoux' ),
            'filter_items_list'     => __( 'Filtrer la liste d\'événement', 'toujourscarnoux' ),
        );
        $args = array(
            'label'                 => __( 'événement', 'toujourscarnoux' ),
            'description'           => __( 'Description de l\'événement', 'toujourscarnoux' ),
            'menu_icon'             => 'dashicons-calendar',
            'labels'                => $labels,
            'supports'              => array( 'title', 'revisions' ),
            //'taxonomies'            => array( 'category' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => false,
            'capability_type'       => 'page',
            'rewrite'               => array(
                'slug' => 'evenement',
                'with_front' => false
            )
        );
        register_post_type( 'evenement', $args );
    }
    add_action( 'init', 'custom_post_type_evenement', 0 );
}



if ( ! function_exists('custom_post_type_equipe') ) {
    function custom_post_type_equipe() {
        $labels = array(
            'name'                  => _x( 'Équipes', 'Post Type General Name', 'toujourscarnoux' ),
            'singular_name'         => _x( 'Membre d\'équipe', 'Post Type Singular Name', 'toujourscarnoux' ),
            'menu_name'             => __( 'Équipes', 'toujourscarnoux' ),
            'name_admin_bar'        => __( 'Membre d\'équipe', 'toujourscarnoux' ),
            'archives'              => __( 'Archives des équipes', 'toujourscarnoux' ),
            'attributes'            => __( 'Attributs du membre d\'équipe', 'toujourscarnoux' ),
            'parent_item_colon'     => __( 'Parent du membre d\'équipe :', 'toujourscarnoux' ),
            'all_items'             => __( 'Tous les membres', 'toujourscarnoux' ),
            'add_new_item'          => __( 'Ajouter un nouveau membre d\'équipe', 'toujourscarnoux' ),
            'add_new'               => __( 'Ajouter un nouveau membre d\'équipe', 'toujourscarnoux' ),
            'new_item'              => __( 'Nouveau membre d\'équipe', 'toujourscarnoux' ),
            'edit_item'             => __( 'Modifier le membre d\'équipe', 'toujourscarnoux' ),
            'update_item'           => __( 'Mettre à jour le membre d\'équipe', 'toujourscarnoux' ),
            'view_item'             => __( 'Voir le membre d\'équipe', 'toujourscarnoux' ),
            'view_items'            => __( 'Voir les membres d\'équipe', 'toujourscarnoux' ),
            'search_items'          => __( 'Rechercher un membre d\'équipe', 'toujourscarnoux' ),
            'not_found'             => __( 'Aucun membre d\'équipe trouvé', 'toujourscarnoux' ),
            'not_found_in_trash'    => __( 'Aucun membre d\'équipe trouvé dans la corbeille', 'toujourscarnoux' ),
            'featured_image'        => __( 'Image mise en avant', 'toujourscarnoux' ),
            'set_featured_image'    => __( 'Définir l\'image mise en avant', 'toujourscarnoux' ),
            'remove_featured_image' => __( 'Supprimer l\'image mise en avant', 'toujourscarnoux' ),
            'use_featured_image'    => __( 'Utiliser comme image mise en avant', 'toujourscarnoux' ),
            'insert_into_item'      => __( 'Insérer dans le membre d\'équipe', 'toujourscarnoux' ),
            'uploaded_to_this_item' => __( 'Téléchargé sur ce membre d\'équipe', 'toujourscarnoux' ),
            'items_list'            => __( 'Liste de membre d\'équipe', 'toujourscarnoux' ),
            'items_list_navigation' => __( 'Navigation dans la liste des membres d\'équipe', 'toujourscarnoux' ),
            'filter_items_list'     => __( 'Filtrer la liste de membre', 'toujourscarnoux' ),
        );
        $args = array(
            'label'                 => __( 'Membre d\'équipe', 'toujourscarnoux' ),
            'description'           => __( 'Description du membre d\'équipe', 'toujourscarnoux' ),
            'menu_icon'             => 'dashicons-admin-users',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
            //'taxonomies'            => array( 'category' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => false,
            'capability_type'       => 'page',
            'rewrite'               => array(
                'slug' => 'equipe',
                'with_front' => false
            )
        );
        register_post_type( 'equipe', $args );
    }
    add_action( 'init', 'custom_post_type_equipe', 0 );
}