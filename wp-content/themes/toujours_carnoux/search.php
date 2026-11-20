<?php
/**
 * Default search resuts template
 *
 * @package churchill
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
$post_id = get_the_ID();

// En-tête
$titre = __('Résultat de la recherche pour : ', 'festival_f5c'). ' <span style="background-color: #ea5e34;">' .get_search_query(). '</span>';
$texte = '';
?>
<?php get_header(); ?>

    <main id="main_wrapper">

        <div class="pb-5 pb-lg-70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php get_template_part('components/en-tete/defaut', '', array('context' => $post_id, 'titre' => $titre, 'texte' => $texte)); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if( have_posts() ) { ?>

            <section class="mb-70 mb-lg-120">
                <div class="search-results">
                    <div class="container">
                        <div class="row gy-4 justify-content-center">

                            <?php while(have_posts()) : the_post(); ?>
                                                
                                <div class="col-md-6 col-lg-4">

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
                                                <?php } else { ?>
                                                    <div class="default-thumbnail"></div>
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

                                    <?php } else if ( get_post_type() == 'ressource-externe' ) { ?>

                                        <?php
                                            $post_id = get_the_ID();
                                            $term = get_post_primary_category($post_id);
                                        ?>

                                        <div class="card-actualite highlight">
                                            <div class="card-body">
                                                <?php if ( $thumbnail = get_the_post_thumbnail($post_id, 'medium') ) { ?>
                                                    <div class="img-container">
                                                        <?php echo $thumbnail; ?>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="default-thumbnail"></div>
                                                <?php } ?>
                                                <div class="text-container">
                                                    <?php if ( $term ) { ?>
                                                        <div class="meta">
                                                            <div class="term"><?php echo $term['primary_category']->name; ?></div>
                                                        </div>
                                                    <?php } ?>
                                                    <h3 class="title"><?php echo get_the_title($post_id); ?></h3>
                                                    <a href="<?php echo get_field('url', $post_id); ?>" title="<?php echo __('Voir la ressource', 'festival_f5c').' : '.get_the_title($post_id); ?>" target="_blank" class="link"></a>
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
                                                <?php } else { ?>
                                                    <div class="default-thumbnail"></div>
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

                                    <?php } else if  ( get_post_type() == 'page' ) { ?>

                                        <?php
                                            $post_id = get_the_ID();
                                            $parent_page_id = wp_get_post_parent_id($post_id);

                                        ?>

                                        <div class="card-actualite">
                                            <div class="card-body">
                                                <?php if ( $thumbnail = get_the_post_thumbnail($post_id, 'medium') ) { ?>
                                                    <div class="img-container">
                                                        <?php echo $thumbnail; ?>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="default-thumbnail"></div>
                                                <?php } ?>
                                                <div class="text-container">
                                                    <?php if ( $parent_page_id ) { ?>
                                                        <div class="meta">
                                                            <div class="term"><?php echo get_the_title($parent_page_id); ?></div>
                                                        </div>
                                                    <?php } ?>
                                                    <h3 class="title"><?php echo get_the_title($post_id); ?></h3>
                                                    <a href="<?php echo get_the_permalink($post_id); ?>" title="<?php echo __('Voir la', 'festival_f5c').' : '.get_the_title($post_id); ?>" class="link"></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                    
                                </div>

                            <?php endwhile;?>

                        </div>
                    </div>
                </div>
            </section>

        <?php } else { ?>

            <section class="mb-70 mb-lg-120">
                <div class="search-results">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center"><?php _e('Aucun résultat ne correspond à votre recherche', 'festival_f5c')?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        <section class="my-70 my-lg-120">
            <div class="pagination">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <?php pagination();?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>