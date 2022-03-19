<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
                        the_title('<h1 class="entry-title">', '</h1>');
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

                            <?php
                            while (have_posts()) :
                                the_post();

                                get_template_part('template-parts/content', 'page');

                                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
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
