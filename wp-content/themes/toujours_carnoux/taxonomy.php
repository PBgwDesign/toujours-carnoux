<?php
/**
 * Default category template
 *
 * @package churchill
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$queried_object = get_queried_object();
$post_types = get_taxonomy($taxonomy)->object_type;
$term_taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
$actualite_page_id = get_field('actualite_page_id', 'options');

// En-tête
$titre = get_field("titre_h1", "category_" . $term_id) ? get_field("titre_h1", "category_" . $term_id) : $queried_object->name;
$texte = category_description();

// Widget categorie
$widget_cat_1_titre = get_field('widget_cat_1_titre', $actualite_page_id);
$widget_cat_1_exclude_cat = get_field('widget_cat_1_exclude_category', $actualite_page_id);

// Widget newsletter
$widget_newsletter_1_titre = get_field('widget_newsletter_1_titre', $actualite_page_id);
$widget_newsletter_1_texte = get_field('widget_newsletter_1_texte', $actualite_page_id);
$widget_newsletter_1_formulaire = get_field('widget_newsletter_1_formulaire', $actualite_page_id);

// Liste d'actualités paginée
$posts_per_page = get_option( 'posts_per_page' );
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
?>
<?php get_header(); ?>

    <main id="main_wrapper">

        <div class="py-5 py-lg-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-xl-3">
                        <div class="sticky-lg-top">

                            <?php
                                $args = array(
                                    'is_tax'         => $term_taxonomy,
                                    'hide_empty'        => false,
                                    'exclude_cat'       => $widget_cat_1_exclude_cat,
                                    'titre'             => $widget_cat_1_titre,
                                );
                                get_template_part( 'components/widget-categorie', '', $args );
                            ?>

                            <?php if ( !wp_is_mobile() ) { ?>
                            <?php
                                $args = array(
                                    'titre'             => $widget_newsletter_1_titre,
                                    'texte'             => $widget_newsletter_1_texte,
                                    'formulaire'        => $widget_newsletter_1_formulaire,
                                );
                                get_template_part( 'components/widget-newsletter', '', $args );
                            ?>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">

                        <div class="row">
                            <div class="col-12">
                                <?php get_template_part('components/en-tete/defaut', '', array('context' => $post_id, 'titre' => $titre, 'texte' => $texte)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                                <div class="component-listedepublicationpaginee my-70 my-lg-120">
                                    <div class="container">
                                        <div class="row justify-content-center">

                                            <div class="col-12 mt-4 order-2 order-lg-3">
                                                <div class="row gy-4">

                                                    <?php
                                                        $args = array(
                                                            'post_type'         => $post_types,
                                                            'posts_per_page'    => $posts_per_page,
                                                            'paged'             => $paged,
                                                            'orderby'           => 'date',
                                                            'order'             => 'DESC',
                                                        );
                                                        $args['tax_query'] = array( array(
                                                            'taxonomy' 	=> $term_taxonomy,
                                                            'field' 	=> 'term_id',
                                                            'terms' 	=> array($term_id),
                                                        ));
                                                        $wp_query = new WP_Query($args);
                                                    ?>

                                                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                                                        <div class="col-lg-4">

                                                            <?php if ( get_post_type() == 'post' ) { ?>

                                                                <?php
                                                                    $post_id = get_the_ID();
                                                                    $term = get_post_primary_category($post_id);
                                                                    $highlight = get_field('highlighting_post', $post_id);
                                                                ?>
                                                                <div class="card-actualite<?php echo ( $highlight == true ) ? ' highlight' : ''; ?>">
                                                                    <div class="card-body">
                                                                        <?php if ( $thumbnail = get_the_post_thumbnail($post_id, 'medium') ) { ?>
                                                                            <div class="img-container">
                                                                                <?php echo $thumbnail; ?>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <div class="text-container">
                                                                            <?php if ( $term ) { ?>
                                                                                <div class="meta">
                                                                                    <div class="term"><?php echo $term['primary_category']->name; ?></div>
                                                                                </div>
                                                                            <?php } ?>
                                                                            <h3 class="title"><?php echo get_the_title($post_id); ?></h3>
                                                                            <a href="<?php echo get_the_permalink($post_id); ?>" title="<?php echo __('Voir l\'actualité', 'festival_f5c').' : '.get_the_title($post_id); ?>" class="link"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php } else if ( get_post_type() == 'success-story' ) { ?>

                                                                <?php
                                                                    $post_id = get_the_ID();
                                                                    $terms = get_the_terms($post_id, 'levier');
                                                                ?>
                                                                <div class="card-successstory">
                                                                    <div class="card-body">
                                                                        <div class="img-container">
                                                                            <div class="bg-white">
                                                                                <div class="logo">
                                                                                    <span><?php _e('Success story', 'festival_f5c'); ?></span>
                                                                                    <?php if ( $logo = get_field('logo', $post_id) ) { ?>
                                                                                        <div><?php echo wp_get_attachment_image($logo, 'medium'); ?></div>
                                                                                    <?php } ?>
                                                                                </div>
                                                                                <?php if ( $resume = get_field('resume', $post_id) ) { ?>
                                                                                    <div class="resume">
                                                                                        <?php echo $resume; ?>
                                                                                    </div>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-container">
                                                                            <h3 class="title"><?php echo get_the_title($post_id); ?></h3>
                                                                            <?php if ( $terms ) { ?>
                                                                                <div class="meta">
                                                                                    <?php foreach ( $terms as $term ) : ?>
                                                                                        <div class="term"><?php echo $term->name; ?></div>
                                                                                    <?php endforeach; ?>
                                                                                </div>
                                                                            <?php } ?>
                                                                            <a href="<?php echo get_the_permalink($post_id); ?>" title="<?php echo __('Voir la success story', 'festival_f5c').' : '.get_the_title($post_id); ?>" class="link"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php } else if ( get_post_type() == 'ressource' ) { ?>

                                                                <?php
                                                                    $post_id = get_the_ID();
                                                                    $terms = get_the_terms($post_id, 'categorie_ressource');
                                                                ?>
                                                                <div class="card-ressource">
                                                                    <div class="card-body">
                                                                        <?php if ( $thumbnail = get_the_post_thumbnail($post_id, 'medium') ) { ?>
                                                                            <div class="img-container">
                                                                                <?php echo $thumbnail; ?>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <div class="text-container">
                                                                            <?php if ( $terms ) { ?>
                                                                                <div class="meta">
                                                                                    <?php foreach ( $terms as $term ) : ?>
                                                                                        <div class="term"><?php echo $term->name; ?></div>
                                                                                    <?php endforeach; ?>
                                                                                </div>
                                                                            <?php } ?>
                                                                            <h3 class="title"><?php echo get_the_title($post_id); ?></h3>
                                                                            <a href="<?php echo get_the_permalink($post_id); ?>" title="<?php echo __('Voir la ressource', 'festival_f5c').' : '.get_the_title($post_id); ?>" class="link"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php } ?>

                                                        </div>

                                                    <?php endwhile; ?>

                                                    <?php if ( $wp_query->found_posts > $paginated_list_1_posts_per_page ) { ?>
                                                        <div id="pagination" class="col-12 mt-5 mt-lg-70">
                                                            <?php pagination(); ?>
                                                        </div>
                                                    <?php } ?>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <?php if ( wp_is_mobile() ) { ?>
                                <?php
                                    $args = array(
                                        'titre'             => $widget_newsletter_1_titre,
                                        'texte'             => $widget_newsletter_1_texte,
                                        'formulaire'        => $widget_newsletter_1_formulaire,
                                    );
                                    get_template_part( 'components/widget-newsletter', '', $args );
                                ?>
                                <?php } ?>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </main>

<?php get_footer(); ?>