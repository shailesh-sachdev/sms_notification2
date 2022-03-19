<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Event_Listing
 */
global $event_listing_theme_options;
$copyright = wp_kses_post($event_listing_theme_options['event-listing-footer-copyright']);
$social = absint($event_listing_theme_options['event-listing-footer-social']);
$column_no = absint($event_listing_theme_options['event-listing-footer-row']);
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" <?php event_listing_do_microdata('footer'); ?>>
    <?php
    if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) {

        if ($column_no == 1) {
            $column_class = 'column column-12';
        } else if ($column_no == 2) {
            $column_class = 'column column-12 column-sm-6';
        } else if ($column_no == 3) {
            $column_class = 'column column-12 column-sm-6 column-t-4';
        } else {
            $column_class = 'column column-12 column-sm-6 column-t-3';
        }
        ?>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <?php
                    if (is_active_sidebar('footer-1')) {
                        ?>
                        <div class="<?php echo $column_class; ?>">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div> <!-- .column -->
                        <?php
                    }
                    ?>
                    <?php
                    if (is_active_sidebar('footer-2')) {
                        ?>
                        <div class="<?php echo $column_class; ?>">
                            <?php dynamic_sidebar('footer-2'); ?>
                        </div> <!-- .column -->
                        <?php
                    }
                    ?>
                    <?php
                    if (is_active_sidebar('footer-3')) {
                        ?>
                        <div class="<?php echo $column_class; ?>">
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div> <!-- .column -->
                        <?php
                    }
                    ?>
                    <?php
                    if (is_active_sidebar('footer-4')) {
                        ?>
                        <div class="<?php echo $column_class; ?>">
                            <?php dynamic_sidebar('footer-4'); ?>
                        </div> <!-- .column -->
                        <?php
                    }
                    ?>
                </div><!-- .row -->
            </div><!-- .container -->
        </div> <!-- .footer-top -->
        <?php
    }
    ?>

    <div class="footer-bottom">
        <div class="container">
            
                <?php
                if (has_nav_menu('social-menu') && $social == 1):
                    ?>
                    <div class="footer-social-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'social-menu',
                            'menu_id' => 'menu-social-1',
                            'container' => 'ul',
                            'menu_class' => 'event-social-menu'
                        ));
                        ?>
                    </div> <!-- .column -->
                <?php
                endif;
                ?>
               
                    <div class="copyright">
                        <?php echo $copyright; ?>
                    </div>
                    <div class="site-info">Powered by
                        <a href="<?php echo esc_url(__('https://wordpress.org/themes/event-listing/', 'event-listing')); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf(esc_html__('Event Listing WordPress Theme %s', 'event-listing'), '');
                            ?>
                        </a>
                        <span class="sep"> | </span>
                        <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf(esc_html__('%1$s %2$s.', 'event-listing'), '', '<a href="https://wp-eventmanager.com/">WP Event Manager</a>');
                        ?>
                    </div><!-- .site-info -->
               
            
        </div><!-- .container -->
    </div> <!-- .footer-bottom -->

</footer><!-- #colophon -->
</div><!-- #page -->

<a id="goTop" class="go-to-top" href="#" title="<?php esc_attr_e('Go to Top', 'event-listing'); ?>">
    <i class="fa fa-angle-double-up"></i>
</a>

<?php wp_footer(); ?>

</body>
</html>
