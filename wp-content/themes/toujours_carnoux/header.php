<?php
/**
 * Header
 *
 * @package churchill
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class('front'); ?>>

    <header id="header_wrapper" class="fixed-top autohide">
        
        <nav class="navbar navbar-expand-lg d-block">
            <div class="container align-items-center">

                <a class="navbar-brand ms-xxl-0" href="<?php bloginfo("url")?>" title="<?php bloginfo("name"); ?>">
                    <img class="navbar-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/toujours_carnoux_nicolas_bouland_logo_header.svg" alt="<?php bloginfo("name"); ?>"/>
                </a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Afficher le menu">
                    <div>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </div>
                </button>

                <div id="primary-menu" class="collapse navbar-collapse">
                    <div class="menu-container">
                        
                        <ul id="main-menu" class="navbar-nav me-auto mb-2 mb-lg-0 main-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'principal', 'container' => '', 'menu_class'=>'menu', 'menu_id'=>'menu-main-menu', 'link_before'=>'', 'link_after'=>'', 'items_wrap'=>'%3$s', 'walker'=> new bootstrap_5_wp_nav_menu_walker) ); ?>
                        </ul>

                        <div class="cta-menu ms-lg-4">
                            <?php $locations = get_nav_menu_locations();?>
                            <?php $menu_id   = $locations['principal'] ;?>
                            <?php if( $boutons = get_field("boutons",wp_get_nav_menu_object($menu_id)) ) : $i = 1; ?>
                                <?php foreach($boutons as $bouton):?>
                                    <a href="<?php echo $bouton["lien"]["url"]?>" class="btn<?php echo ($i == 1) ? ' btn-primary text-white' : ' btn-outline-black'; ?>" target="<?php echo $bouton["lien"]["target"]?>"><?php echo $bouton["lien"]["title"]?><?php echo ($bouton["lien"]["title"] == "Soutenir") ? '<i class="bi bi-heart ms-2"></i>' : ''; ?></a>
                                <?php $i++; endforeach;?>
                            <?php endif;?>
                        </div>

                    </div>
                </div>

            </div>
        </nav>

    </header>