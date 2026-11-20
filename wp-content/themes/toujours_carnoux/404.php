<?php get_header();?>

<main id="main_wrapper">

    <section>
        <div class="component-404 py-60 py-lg-120">
            <div class="container">
                <div class="py-3 d-flex text-center justify-content-center align-items-center">
                    <div>
                        <h1 class="d-flex align-items-center justify-content-center">404</h1>
                        <p class="mb-5">
                            <?php _e("La page que vous recherchez n’existe pas.")?>
                        </p>
                        <a data-label="<?php _e("Retour à la page d’accueil")?>" class="btn btn-primary btn-icon-arrow mx-2 mb-3" href="<?php bloginfo("url")?>">
                            <?php _e("Retour à la page d’accueil")?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer();?>