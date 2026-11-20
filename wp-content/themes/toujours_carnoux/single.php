<?php
/**
 * Default single post template
 *
 * @package churchill
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
$post_id = get_the_ID();

// Bannière newsletter
$banniere_newsletter_bg_color = get_field('banniere_newsletter_bg_color', 'post_options');
$banniere_newsletter_chapeau = get_field('banniere_newsletter_chapeau', 'post_options');
$banniere_newsletter_titre = get_field('banniere_newsletter_titre', 'post_options');
$banniere_newsletter_texte = get_field('banniere_newsletter_texte', 'post_options');
$banniere_newsletter_bouton = get_field('banniere_newsletter_bouton', 'post_options');
$banniere_newsletter_formulaire = get_field('banniere_newsletter_formulaire', 'post_options');

// Suggestion d'actualités
$suggestion_actualites_chapeau = get_field('suggestion_actualites_chapeau', 'post_options');
$suggestion_actualites_titre = get_field('suggestion_actualites_titre', 'post_options');
$suggestion_actualites_texte = get_field('suggestion_actualites_texte', 'post_options');
$suggestion_actualites_bouton = get_field('suggestion_actualites_bouton', 'post_options');
$suggestion_actualites_list_auto = false;
?>
<?php get_header(); ?>

<main id="main_wrapper">

    <?php get_template_part('components/en-tete/single'); ?>

    <section class="post-thumbnail my-5 mt-lg-6 mb-lg-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php if ( get_the_post_thumbnail() ) { ?>
                        <div class="img-container">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
                        </div>
                    <?php } else { ?>
                        <div class="default-thumbnail"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php if ( $introduction = get_field('introduction') ) { ?>
    <section class="post-introduction my-5 my-lg-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-lightalt">
                        <div class="text"><?php echo $introduction; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="post-content mt-5 mt-lg-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $args = array(
            'bg_color'          => $banniere_newsletter_bg_color,
            'chapeau'           => $banniere_newsletter_chapeau,
            'titre'             => $banniere_newsletter_titre,
            'texte'             => $banniere_newsletter_texte,
            'bouton'            => $banniere_newsletter_bouton,
            'formulaire'        => $banniere_newsletter_formulaire,
        );
        get_template_part('components/banniere-newsletter', '', $args);
    ?>

    <?php
        $post_categories = get_post_primary_category( $post_id );
        $args = array(
            'post_type'             => 'post',
            'posts_per_page'        => 3,
            'post__not_in'          => array($post_id),
            'fields'                => 'ids',
        );
        if ( $post_categories ) {
            $tax_query = array(
                array(
                    'taxonomy'      => 'category',
                    'field'         => 'term_id',
                    'terms'         => $post_categories['primary_category']->term_id
                )
            );
            $args['tax_query'] = $tax_query;
        }
        $suggestion_actualites_custom_list = get_posts($args);
    ?>

    <?php if ( !empty($suggestion_actualites_custom_list) ) { ?>

        <?php
            $args = array(
                'chapeau'           => $suggestion_actualites_chapeau,
                'titre'             => $suggestion_actualites_titre,
                'texte'             => $suggestion_actualites_texte,
                'bouton'            => $suggestion_actualites_bouton,
                'list_auto'         => $suggestion_actualites_list_auto,
                'custom_list'       => $suggestion_actualites_custom_list,
            );
            get_template_part('components/actualites', '', $args);
        ?>

    <?php } ?>

</main>

<?php get_footer(); ?>