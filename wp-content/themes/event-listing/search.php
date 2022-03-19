<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                        <h1 class="page-title">
                            <?php
                            /* translators: %s: search query. */
                            printf(esc_html__('Search Results for: %s', 'event-listing'), '<span>' . get_search_query() . '</span>');
                            ?>
                        </h1>
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

                                    /**
                                     * Run the loop for the search to output the results.
                                     * If you want to overload this in a child theme then include a file
                                     * called content-search.php and that will be used instead.
                                     */
                                    get_template_part('template-parts/content', 'search');

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
