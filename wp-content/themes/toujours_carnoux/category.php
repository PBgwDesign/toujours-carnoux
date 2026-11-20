<?php
/**
 * Default category template
 *
 * @package churchill
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$queried_object = get_queried_object();
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
                                <?php get_template_part('components/en-tete/defaut', '', array('context' => $actualite_page_id, 'titre' => $titre, 'texte' => $texte)); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                                <div class="component-listedepublicationpaginee my-70 my-lg-120">
                                    <div class="container">
                                        <div class="row justify-content-center">

                                            <div class="col-12 mt-4 order-2 order-lg-3">
                                                <div class="row gy-4">

                                                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                                                        <?php
                                                            $post_id = get_the_ID();
                                                            $term = get_post_primary_category($post_id);
                                                            $highlight = get_field('highlighting_post', $post_id);
                                                        ?>

                                                        <div class="col-lg-4">
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
                                                        </div>

                                                    <?php endwhile; ?>

                                                    <?php if ( $wp_query->found_posts > $posts_per_page ) { ?>
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