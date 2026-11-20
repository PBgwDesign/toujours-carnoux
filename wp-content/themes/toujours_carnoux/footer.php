<?php
/**
 * Footer
 *
 * @package churchill
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

        <footer id="footer_wrapper" class="bg-tertiary">

            <section id="footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-xl-3 order-2 order-md-1">
                            <div class="footer-logo">
                                <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/toujours_carnoux_nicolas_bouland_logo_footer.svg" alt="<?php bloginfo("name"); ?>"/>
                                <div class="baseline nobreak-md">Une histoire, <br>un nouvel <br><span class="text-primary">avenir</span></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4 order-1 order-md-2">
                            <div class="footer-text">
                                <div class="text-white">Élections municipales Carnoux-en-Provence 2026</div>
                            </div>
                        </div>

                        <div class="col-xl-5 order-3">
                            <div class="btn-container">
                                <div class="btn-social">
                                    <span class="text-white fw-bold">Suivez-nous : </span>
                                    <a href="https://www.facebook.com/nicolas.bouland/" class="btn btn-square btn-white" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/nicolas_bouland_carnoux/" class="btn btn-square btn-white" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/nicolas-bouland-625251135/" class="btn btn-square btn-white" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <a href="https://www.helloasso.com/associations/toujours-carnoux/adhesions/adhesion" title="Soutenir" target="_blank" class="btn btn-white">Soutenir</a>
                                <a href="<?php echo get_permalink(494); ?>" title="Contactez-nous" class="btn btn-white">Contactez-nous</a>
                            </div>
                        </div>

                        <div class="col-12 mt-2 order-4">
                            <div class="copyright">
                                <span class="text">© <?php echo date('Y'); ?> Tous droits réservés</span>
                                <ul class="navbar-nav">
                                    <?php wp_nav_menu( array( 'theme_location' => 'copyright', 'container' => '', 'items_wrap'=>'%3$s', 'walker'=> new bootstrap_5_wp_nav_menu_walker )); ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </footer>

        <?php wp_footer(); ?>

    </body>
</html>