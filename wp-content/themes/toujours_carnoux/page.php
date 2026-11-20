<?php
/**
 * Default wordpress template
 *
 * @package churchill
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>

    <main id="main_wrapper">

        <section>
            <div class="component-entete bg-light">
                <div class="container">
                    <div class="row justify-content-center py-6">
                        <div class="col-lg-9">
                            <dvi class="component-title">
                                <h1 class="title"><?php the_title(); ?></h1>
                            </dvi>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="component-article">
                <div class="container">
                    <div class="row justify-content-center py-6 py-lg-120">
                        <div class="col-lg-9">
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

<?php get_footer(); ?>