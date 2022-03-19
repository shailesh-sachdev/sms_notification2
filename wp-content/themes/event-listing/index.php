<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Event_Listing
 */

get_header();
?>
<?php if (have_posts()) : ?>
    <?php
    if (is_home() && !is_front_page()) :
        ?>
        <section class="page-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="column column-12">


                        <header class="page-header">
                            <h1 class="page-title"><?php single_post_title(); ?></h1>
                        </header><!-- .page-header -->


                    </div> <!-- .column -->
                </div> <!-- .row -->
            </div> <!-- .container -->

        </section>
    <?php
    endif;
    ?>
    <section class="main-contain-wrapper">
        <div class="container">
            <div class="row">
                <div class="<?php echo event_listing_primary_column_class(); ?>">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="blog-list">
                                <?php


                                /* Start the Loop */
                                while (have_posts()) :
                                    the_post();

                                    /*
                                     * Include the Post-Type-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                     */
                                    get_template_part('template-parts/content', get_post_type());

                                endwhile;


                                ?>
                            </div> <!-- .blog-list -->
                            <?php
                            the_posts_navigation();
                            ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->


                </div> <!-- .column -->
                <?php do_action('event_listing_sidebar'); ?>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section>
<?php
endif;
get_footer();

