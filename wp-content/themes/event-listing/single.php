<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                        if ('post' === get_post_type()) :
                            ?>
                            <div class="entry-meta">
                                <?php
                                while (have_posts()) :
                                    the_post();
                                    event_listing_posted_on();
                                    event_listing_posted_by();
                                endwhile; // End of the loop.
                                ?>
                            </div><!-- .entry-meta -->
                        <?php endif;
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

                                ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <?php event_listing_post_thumbnail(); ?>

                                    <div class="entry-content">
                                        <?php
                                        the_content(sprintf(
                                            wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'event-listing'),
                                                array(
                                                    'span' => array(
                                                        'class' => array(),
                                                    ),
                                                )
                                            ),
                                            get_the_title()
                                        ));

                                        wp_link_pages(array(
                                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'event-listing'),
                                            'after' => '</div>',
                                        ));
                                        ?>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer">
                                        <?php event_listing_entry_footer(); ?>
                                    </footer><!-- .entry-footer -->
                                </article><!-- #post-<?php the_ID(); ?> -->
                                <?php

                                the_post_navigation();

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
