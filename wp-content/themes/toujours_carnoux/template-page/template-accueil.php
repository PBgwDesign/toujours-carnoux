<?php
/**
 * Template Name: Accueil
 *
 * @package churchill
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>

<main id="page_wrapper" class="wrapper" data-bs-spy="scroll" data-bs-target="#main-menu">

    <section id="hero">
        <div class="component-entete">
            <div class="container">
                <div class="row pb-6 py-lg-60 py-xl-120">

                    <div class="col-12 order-2 order-md-1 mt-4 mt-md-0">
                        <div class="component-body">
                            <?php if ( $surtitre_entete = get_field('surtitre_entete') ) { ?><div class="component-surtitle"><?php echo $surtitre_entete; ?></div><?php } ?>
                            <?php if ( $titre_entete = get_field('titre_entete') ) { ?><h1 class="h1 component-title nobreak-lg"><?php echo $titre_entete; ?></h1><?php } ?>
                        </div>
                    </div>

                    <div class="col-md-6 order-3 order-md-2">
                        <div class="component-body">

                            <?php if ( $texte_entete = get_field('texte_entete') ) { ?><div class="component-text text nobreak-lg"><?php echo $texte_entete; ?></div><?php } ?>
                            <?php if ( get_field('display_download_btn') || get_field('display_play_btn') ) { ?>

                                <?php
                                    $download_btn_file = get_field('download_btn_file');
                                    $play_btn_url = get_field('play_btn_url');
                                ?>

                                <div class="btn-container">
                                    <?php if ( get_field('display_download_btn') && $download_btn_file ) { ?>
                                        <a href="<?php echo wp_get_attachment_url($download_btn_file); ?>" class="btn btn-tertiary me-3" title="<?php echo get_field('download_btn_text') ? get_field('download_btn_text') : 'Télécharger'; ?>" download="download"><?php echo get_field('download_btn_text') ? get_field('download_btn_text') : 'Télécharger'; ?><i class="bi bi-download ms-2"></i></a>
                                    <?php } ?>
                                    <?php if ( get_field('display_play_btn') && $play_btn_url ) { ?>
                                        <a href="<?php echo $play_btn_url; ?>" class="btn-link btn-primary" title="<?php echo get_field('play_btn_text') ? get_field('play_btn_text') : 'Lire la vidéo'; ?>" data-fancybox><?php echo get_field('play_btn_text') ? get_field('play_btn_text') : 'Lire la vidéo'; ?><i class="bi bi-play-fill ms-2"></i></a>
                                    <?php } ?>
                                </div>

                            <?php } ?>

                        </div>
                    </div>

                    <div class="col-md-6 component-img order-1 order-md-3">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/toujours_carnoux_nicolas_bouland_hero.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
                                                 
    </section>

    <?php if ( get_field('display_valeurs') == 1 ) { ?>
        <section id="valeurs">
            <div class="component-cartesaveccouleur py-6 py-lg-120">
                <div class="container">
                    <div class="row card-container">

                        <div class="col-12">
                            <?php if ( $titre_valeurs = get_field('titre_valeurs') ) { ?><h2 class="component-title mb-4 mb-lg-6"><?php echo $titre_valeurs; ?></h2><?php } ?>
                        </div>
                        
                        <?php if ( $cardcolor_rows_valeurs = get_field('cardcolor_rows_valeurs') ) { ?>
                            <?php foreach ( $cardcolor_rows_valeurs as $card_color ) : ?>

                                <?php if ( $card_color['titre'] ) { ?>

                                    <?php
                                        $couleur = $card_color['couleur'];
                                        $titre = $card_color['titre'];
                                        $texte = $card_color['texte'];
                                    ?>

                                    <div class="col-12">
                                        <div class="card-color">
                                            <div class="card-body bg-<?php echo $couleur; ?>">
                                                <div class="text-container">
                                                    <?php if ( $titre ) { ?><h3 class="title text-secondary"><span><?php echo $titre; ?></span></h3><?php } ?>
                                                    <?php if ( $texte ) { ?><div class="text"><?php echo $texte; ?></div><?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            <?php endforeach; ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if ( get_field('display_parcours') == 1 ) { ?>
        <section id="parcours">
            <div class="component-biographie">
                <div class="container">
                    <div class="row justify-content-start py-6 py-xl-120">

                        <div class="col-md-8 order-2 order-md-1">
                            <div class="component-body">

                                <?php if ( $titre_parcours = get_field('titre_parcours') ) { ?><h2 class="component-title"><?php echo $titre_parcours; ?></h2><?php } ?>
                                <?php if ( $texte_parcours = get_field('texte_parcours') ) { $i = 1; ?>

                                    <?php
                                        preg_match_all('/<p[^>]*>(.*?)<\/p>/is', $texte_parcours, $matches);
                                        $paragraphes = $matches[0];
                                        $total_paragraphes = count($paragraphes);
                                    ?>

                                    <div class="row row-cols-2 row-cols-xl-3">
                                        <?php foreach ( $paragraphes as $paragraphe ) : ?>

                                            <?php if ( $i == $total_paragraphes ) { ?>
                                                <div class="col-12"><?php echo $paragraphe; ?></div>
                                            <?php } else { ?>
                                                <div class="col-12 col-sm"><?php echo $paragraphe; ?></div>
                                            <?php } ?>

                                        <?php $i++; endforeach; ?>
                                    </div>

                                <?php } ?>

                            </div>
                        </div>
                        
                        <?php if ( $image_parcours = get_field('image_parcours') ) { ?>
                            <div class="col-md-4 ps-xl-6 component-img order-1 order-md-2 mb-5 mb-md-0">
                                <div class="img-container"><?php echo wp_get_attachment_image($image_parcours, 'full'); ?></div>
                            </div>
                        <?php } ?>

                        <div class="col-12 order-3">
                            <div class="component-footer mt-3 mt-xl-60">

                                <?php if ( $display_btn_parcours = get_field('display_btn_parcours') ) { ?>

                                    <?php
                                        $btn_type_parcours = get_field('btn_type_parcours');
                                        $default_btn_parcours = get_field('default_btn_parcours');
                                        $download_btn_file = get_field('download_btn_file_parcours');
                                        $play_btn_url = get_field('download_btn_text_parcours');
                                    ?>

                                    <?php if ( $display_btn_parcours && $btn_type_parcours == 'default' && $default_btn_parcours ) { ?>
                                        <a href="<?php echo $default_btn_parcours['url']; ?>" class="btn btn-tertiary me-3" title="<?php echo $default_btn_parcours['title']; ?>" target="<?php echo $default_btn_parcours['target']; ?>"><?php echo $default_btn_parcours['title']; ?><i class="bi bi-arrow-right ms-2"></i></a>
                                    <?php } ?>
                                    <?php if ( $display_btn_parcours && $btn_type_parcours == 'download' && $download_btn_file ) { ?>
                                        <a href="<?php echo wp_get_attachment_url($download_btn_file); ?>" class="btn btn-tertiary me-3" title="<?php echo get_field('download_btn_text') ? get_field('download_btn_text') : 'Télécharger'; ?>" download="download"><?php echo get_field('download_btn_text') ? get_field('download_btn_text') : 'Télécharger'; ?><i class="bi bi-download ms-2"></i></a>
                                    <?php } ?>

                                <?php } ?>

                                <?php if ( $cardsquarecolor_rows_pacours = get_field('cardsquarecolor_rows_pacours') ) { $i = 1; ?>
                                    <div class="card-container">
                                        <?php foreach ( $cardsquarecolor_rows_pacours as $cardsquare_color ) : ?>

                                            <?php
                                                switch ( $i ) {
                                                    case '1' : $color = 'white'; break;
                                                    case '2' : $color = 'tertiary'; break;
                                                    case '3' : $color = 'primary'; break;
                                                    default : $color = 'primary';
                                                }
                                            ?>

                                            <div class="card-square-color">
                                                <div class="card-body bg-<?php echo $color; ?>">
                                                    <div class="text-container">
                                                        <?php if ( $texte = $cardsquare_color['texte'] ) { ?><div class="text"><?php echo $texte; ?></div><?php } ?>
                                                        <?php if ( $chiffre = $cardsquare_color['chiffre'] ) { ?><div class="text-big"><?php echo $chiffre; ?></div><?php } ?>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php $i++; endforeach; ?>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if ( get_field('display_orientations') == 1 ) { ?>

        <?php
            $type_orientation = get_field('type_orientation');
            if ( $type_orientation == 'blocks' ) {
                if ( $cardlights = get_field('cardlights_rows') ) {
                    $half_count = round(count($cardlights) / 2);
                    $cardlights_1 = $cardlights ? array_slice($cardlights, 0, $half_count) : '';
                    $cardlights_2 = $cardlights ? array_slice($cardlights, $half_count) : '';    
                }
            }
            if ( $type_orientation == 'accordions' ) {
                if ( $accordions = get_field('accordions_light') ) {
                    $half_count = round(count($accordions) / 2);
                    $accordions_1 = $accordions ? array_slice($accordions, 0, $half_count) : '';
                    $accordions_2 = $accordions ? array_slice($accordions, $half_count) : '';  
                }
            }
        ?>

        <section id="orientations">
            <div class="component-orientations">
                <div class="container">
                    <div class="row justify-content-center py-6 py-lg-120">
                        <div <?php echo ( $type_orientation == 'accordions' ) ? 'id="programme" ' : ''; ?>class="col-xl-10 col-xxl-9<?php echo ( $type_orientation == 'accordions' ) ? ' accordion' : ''; ?>">
                            <div class="row gx-md-6">

                                <div class="col-lg-6 order-2 order-lg-1">
                                    <div class="row<?php echo ( $type_orientation == 'blocks' ) ? ' card-container' : ''; ?>">

                                        <?php if ( !empty($cardlights_1) && $type_orientation == 'blocks' ) { ?>
                                            <?php foreach ( $cardlights_1 as $cardlight ) : ?>
                                            
                                                <div class="col-6 col-sm-4 col-lg-6">
                                                    <div class="card-light">
                                                        <div class="card-body">
                                                            <div class="text-container">
                                                                <?php if ( $titre = $cardlight['titre'] ) { ?><h3 class="title"><?php echo $titre; ?></h3><?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach;?>
                                        <?php } ?>

                                        <?php if ( !empty($accordions_1) && $type_orientation == 'accordions' ) { $i = 1; ?>
                                            <?php foreach ( $accordions_1 as $accordion ) : ?>
                                            
                                                <div class="col-12">
                                                    <div class="accordion-item<?php echo ($i == 1) ? ' active' : ''; ?>">
                                                        <?php if ( $titre = $accordion['titre'] ) { ?>
                                                            <h3 class="accordion-header">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#programme-collapse-<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>" aria-controls="programme-collapse-<?php echo $i; ?>" data-count="<?php echo ($i <= 10) ? '0'.$i : $i; ?>"><?php echo $titre; ?></button>
                                                            </h3>
                                                        <?php } ?>
                                                        <?php if ( $texte = $accordion['texte'] ) { ?>
                                                            <div id="programme-collapse-<?php echo $i; ?>" class="accordion-collapse collapse<?php echo ($i == 1) ? ' show' : ''; ?>" data-bs-parent="#programme">
                                                                <div class="accordion-body">
                                                                    <div class="text"><?php echo $texte; ?></div>
                                                                    <?php if ( $btn = $accordion['btn'] ) { ?>
                                                                        <a href="<?php echo $btn['url']; ?>" class="btn-link btn-tertiary mt-3" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>"><?php echo $btn['title']; ?></a>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            <?php $i++; endforeach;?>
                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="col-lg-6 d-flex flex-column justify-content-end order-1 order-lg-2">

                                    <div class="component-body mb-4 mb-lg-6">
                                        <?php if ( $titre_orientations = get_field('titre_orientations') ) { ?><h2 class="component-title"><?php echo $titre_orientations; ?></h2><?php } ?>
                                        <?php if ( $texte_orientations = get_field('texte_orientations') ) { ?><div class="text"><?php echo $texte_orientations; ?></div><?php } ?>
                                        <?php if ( get_field('display_btn_download_orientations') ) { ?>

                                            <?php
                                                $download_btn_file = get_field('download_btn_file_orientations');
                                            ?>

                                            <?php if ( get_field('display_btn_download_orientations') && $download_btn_file ) { ?>
                                                <a href="<?php echo wp_get_attachment_url($download_btn_file); ?>" class="btn btn-tertiary" title="<?php echo get_field('download_btn_text_orientations') ? get_field('download_btn_text_orientations') : 'Télécharger'; ?>" download="download"><?php echo get_field('download_btn_text_orientations') ? get_field('download_btn_text_orientations') : 'Télécharger'; ?><i class="bi bi-download ms-2"></i></a>
                                            <?php } ?>

                                        <?php } ?>
                                    </div>

                                    <div class="row<?php echo ( $type_orientation == 'blocks' ) ? ' card-container' : ''; ?>">
                                        <?php if ( !empty($cardlights_2) && $type_orientation == 'blocks' ) { ?>
                                            <?php foreach ( $cardlights_2 as $cardlight ) : ?>
                                            
                                                <div class="col-6 col-sm-4 col-lg-6">
                                                    <div class="card-light">
                                                        <div class="card-body">
                                                            <div class="text-container">
                                                                <?php if ( $titre = $cardlight['titre'] ) { ?><h3 class="title"><?php echo $titre; ?></h3><?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach;?>
                                        <?php } ?>
                                        <?php if ( !empty($accordions_2) && $type_orientation == 'accordions' ) { ?>
                                            <?php foreach ( $accordions_2 as $accordion ) : ?>
                                            
                                                <div class="col-12">
                                                    <div class="accordion-item">
                                                        <?php if ( $titre = $accordion['titre'] ) { ?>
                                                            <h3 class="accordion-header">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#programme-collapse-<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>" aria-controls="programme-collapse-<?php echo $i; ?>" data-count="<?php echo ($i <= 10) ? '0'.$i : $i; ?>"><?php echo $titre; ?></button>
                                                            </h3>
                                                        <?php } ?>
                                                        <?php if ( $texte = $accordion['texte'] ) { ?>
                                                            <div id="programme-collapse-<?php echo $i; ?>" class="accordion-collapse collapse<?php echo ($i == 1) ? ' show' : ''; ?>" data-bs-parent="#programme">
                                                                <div class="accordion-body">
                                                                    <div class="text"><?php echo $texte; ?></div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            <?php $i++; endforeach;?>
                                        <?php } ?>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if ( get_field('display_film') == 1 ) { ?>
        <?php if ( $image_film = get_field('image_film') ) { ?>
            <section id="film">
                <div class="component-film">
                    <?php if ( $url_film = get_field('url_film') ) { ?>
                        <?php $play_btn_text_film = get_field('play_btn_text_film') ? get_field('play_btn_text_film') : ''; ?>
                        <a href="<?php echo $url_film; ?>" title="<?php echo $play_btn_text_film; ?>" data-fancybox class="component-img">
                            <div class="btn-container">
                                <span class="btn btn-square btn-lg btn-primary"><i class="bi bi-play-fill"></i></span><span class="text-white fw-bold"><?php echo $play_btn_text_film; ?></span>
                            </div>
                            <div class="img-container">
                                <?php echo wp_get_attachment_image($image_film, 'full'); ?>
                            </div>
                        </a>
                    <?php } ?>

                    <?php if (  get_field('display_appelaaction_film') == 1 ) { ?>
                        <div class="container">
                            <div class="row justify-content-center">

                                <div class="col-lg-10 position-relative">
                                    <div class="component-body">
                                        <div class="text-container">
                                            <?php if ( $titre_appelaaction_film = get_field('titre_appelaaction_film') ) { ?><h2 class="component-title"><?php echo $titre_appelaaction_film; ?></h2><?php } ?>
                                            <?php if ( $texte_appelaaction_film = get_field('texte_appelaaction_film') ) { ?><div class="text"><?php echo $texte_appelaaction_film; ?></div><?php } ?>
                                        </div>
                                        <?php if ( $display_btn_appelaaction_film = get_field('display_btn_appelaaction_film') ) { ?>

                                            <?php
                                                $btn_type_appelaaction_film = get_field('btn_type_appelaaction_film');
                                                $default_btn_appelaaction_film = get_field('btn_appelaaction_film');
                                                $download_btn_file_appelaaction_film = get_field('download_btn_file_appelaaction_film');
                                            ?>

                                            <?php if ( $display_btn_appelaaction_film && $btn_type_appelaaction_film == 'default' && $default_btn_appelaaction_film ) { ?>
                                                <a href="<?php echo $default_btn_appelaaction_film['url']; ?>" class="btn btn-white" title="<?php echo $default_btn_appelaaction_film['title']; ?>" target="<?php echo $default_btn_appelaaction_film['target']; ?>"><?php echo $default_btn_appelaaction_film['title']; ?><i class="bi bi-arrow-right ms-2"></i></a>
                                            <?php } ?>
                                            <?php if ( $display_btn_appelaaction_film && $btn_type_appelaaction_film == 'download' && $download_btn_file_appelaaction_film ) { ?>
                                                <a href="<?php echo wp_get_attachment_url($download_btn_file_appelaaction_film); ?>" class="btn btn-white" title="<?php echo get_field('download_btn_texte_appelaaction_film') ? get_field('download_btn_texte_appelaaction_film') : 'Télécharger'; ?>" download="download"><?php echo get_field('download_btn_texte_appelaaction_film') ? get_field('download_btn_texte_appelaaction_film') : 'Télécharger'; ?><i class="bi bi-download ms-2"></i></a>
                                            <?php } ?>

                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>

                </div>
            </section>
        <?php } ?>
    <?php } ?>

    <?php if ( get_field('display_actualites') == 1 ) { ?>
        <section id="actualites">
            <div class="component-actualites splide splide-arrows">
                <div class="container">
                    <div class="row py-6 py-lg-120">

                        <div class="col-md-4 pe-lg-6">
                            <div class="component-title">
                                <?php if ( $titre_actualites = get_field('titre_actualites') ) { ?><h2 class="component-title"><?php echo $titre_actualites; ?></h2><?php } ?>
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev"><i class="bi bi-arrow-left"></i></button>
                                    <button class="splide__arrow splide__arrow--next"><i class="bi bi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 mt-5 mt-md-0">

                            <?php
                                $posts_per_page_actualite = get_field('posts_per_page_actualite') ? get_field('posts_per_page_actualite') : -1 ;
                                $args = array(
                                    'post_type'         => 'actualite-externe',
                                    'posts_per_page'    => $posts_per_page_actualite,
                                    'orderby'           => 'date',
                                    'order'             => 'DESC',
                                );
                                $wp_query = new WP_Query($args);
                            ?>

                            <?php if ( $wp_query->have_posts() && $posts_per_page_actualite != 0 ) { ?>
                                <div class="splide__track">
                                    <div class="splide__list">
                                        
                                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                                        <?php
                                            $post_id = get_the_ID();
                                        ?>

                                        <?php if ( $title = get_the_title($post_id) ) { ?>
                                            <div class="splide__slide card-actualite">
                                                <div class="card-body">
                                                    <div class="text-container">
                                                        <div class="meta-container">
                                                            <?php if ( $source_actualites = get_field('source_actualites', $post_id) ) { ?><div class="source"><?php echo $source_actualites; ?></div><?php } ?>
                                                            <?php if ( $date = get_the_date('d M Y', $post_id) ) { ?><div class="date"><?php echo $date; ?></div><?php } ?>
                                                        </div>
                                                        <h3 class="title"><?php echo $title; ?></h3>
                                                        <?php if ( $url_actualites = get_field('url_actualites', $post_id) ) { ?><a href="<?php echo $url_actualites; ?>" target="_blank" title="Lire l'actualité" class="link stretched-link"></a><?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    <?php endwhile; ?>

                                    </div>
                                </div>
                            <?php } wp_reset_query(); ?>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if ( get_field('display_agenda') == 1 ) { ?>
        <section id="agenda">
            <div class="component-agenda">
                <div class="container">
                    <div class="row mb-6 mb-lg-120">

                        <div class="col-12">
                            <div class="component-body">
                                <div class="card-container">

                                    <?php if ( $titre_gauche_agenda = get_field('titre_gauche_agenda') ) { ?><h2 class="component-title"><?php echo $titre_gauche_agenda; ?></h2><?php } ?>

                                    <?php
                                        $args = array(
                                            'post_type'         => 'evenement',
                                            'posts_per_page'    => 6,
                                            'orderby'           => 'date',
                                            'order'             => 'DESC',
                                        );
                                        $wp_query = new WP_Query($args);
                                    ?>

                                    <?php if ( $wp_query->have_posts() && $posts_per_page_actualite != 0 ) { $i = 1; ?>
                                        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                                        <?php
                                            $post_id = get_the_ID();
                                        ?>

                                        <?php if ( $date_evenement = get_field('date_evenement', $post_id) ) { ?>

                                            <?php
                                                $date = DateTime::createFromFormat('dmY', $date_evenement);
                                                if ( $date_evenement_end = get_field('date_fin_evenement', $post_id) ) {
                                                    $date_end = DateTime::createFromFormat('dmY', $date_evenement_end);
                                                }
                                            ?>

                                            <div class="card-agenda<?php echo ( $i == 1) ? ' active' : ''; ?>">
                                                <div class="card-body">
                                                    <div class="meta-container">
                                                        <div class="date">
                                                            <?php if ( $date ) { ?><span><?php echo $date->format('d'); ?><?php if ( $date_evenement_end ) { ?>-<?php echo $date_end->format('d'); ?><?php } ?></span><?php } ?>
                                                            <?php if ( $date ) { ?><span><?php echo $date->format('M'); ?></span><?php } ?>
                                                        </div>
                                                        <?php if ( $heure_evenement = get_field('heure_evenement', $post_id) ) { ?><div class="hour"><?php echo $heure_evenement; ?></div><?php } ?>
                                                    </div>
                                                    <div class="text-container">
                                                        <?php if ( $title = get_the_title($post_id) ) { ?><h3 class="title"><?php echo $title; ?></h3><?php } ?>
                                                        <?php if ( $texte_evenement = get_field('texte_evenement', $post_id) ) { ?><div class="text"><?php echo $texte_evenement; ?></div><?php } ?>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>

                                        <?php $i++; endwhile; ?>
                                    <?php } wp_reset_query(); ?>
                                    
                                    <?php if ( $titre_droite_agenda = get_field('titre_droite_agenda') ) { ?><div class="h2 component-text"><?php echo $titre_droite_agenda; ?></div><?php } ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if ( get_field('display_team') == 1 ) { ?>
        <section id="team">
            <div class="component-team splide splide-arrows">
                <div class="container">
                    <div class="row mb-6 mb-lg-120">

                        <?php
                            $args = array(
                                'post_type'         => 'equipe',
                                'posts_per_page'    => -1,
                                'orderby'           => 'date',
                                'order'             => 'DESC',
                            );
                            $wp_query = new WP_Query($args);
                        ?>

                        <?php if ( $wp_query->have_posts() ) { ?>
                            <div class="col-12 order-2 order-sm-1">
                                <div class="splide__track">
                                    <div class="splide__list">

                                        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                                            <?php
                                                $post_id = get_the_ID();
                                            ?>

                                            <div class="splide__slide">
                                                <div class="card-team">
                                                    <div class="card-body">
                                                        <?php if ( $img = get_the_post_thumbnail($post_id, 'rectangle_246_374') ) { ?>
                                                            <div class="img-container"><?php echo $img; ?></div>
                                                        <?php } ?>
                                                        <div class="text-container">
                                                            <?php if ( $fonction = get_field('fonction', $post_id) ) { ?><div class="function"><?php echo $fonction; ?></div><?php } ?>
                                                            <div class="title"><?php echo get_the_title($post_id); ?></div>
                                                        </div>
                                                        <div class="hover-container">
                                                            <div class="text"><?php the_content(); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endwhile; ?>

                                    </div>
                                </div>
                            </div>
                        <?php } wp_reset_query(); ?>

                        <div class="col-12 order-1 order-sm-2">
                            <div class="component-body">
                                <?php if ( $titre_team = get_field('titre_team') ) { ?><div class="h2 component-title"><?php echo $titre_team; ?></div><?php } ?>
                                <?php if ( $texte_team = get_field('texte_team') ) { ?><div class="text"><?php echo $texte_team; ?></div><?php } ?>
                                <?php if ( get_field('display_btn_appelaaction_team') ) { ?>

                                    <?php
                                        $btn_appelaaction_team = get_field('btn_appelaaction_team');
                                    ?>

                                    <?php if ( get_field('display_btn_appelaaction_team') && $btn_appelaaction_team ) { ?>
                                        <a href="<?php echo $btn_appelaaction_team['url']; ?>" class="btn btn-white" title="<?php echo $btn_appelaaction_team['title']; ?>"><?php echo $btn_appelaaction_team['title']; ?></a>
                                    <?php } ?>

                                <?php } ?>
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev"><i class="bi bi-arrow-left"></i></button>
                                    <button class="splide__arrow splide__arrow--next"><i class="bi bi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

</main>

<?php get_footer(); ?>