<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Event_Listing
 */

get_header();
?>
<?php if (have_posts()) : ?>
    <section class="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="column column-12">
                    <header class="page-header">
                        <?php
                        the_archive_title('<h1 class="page-title">', '</h1>');
                        the_archive_description('<div class="archive-description">', '</div>');
                        ?>
                    </header><!-- .page-header -->
                </div> <!-- .column -->
            </div> <!-- .row -->
        </div> <!-- .container -->

    </section>

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
