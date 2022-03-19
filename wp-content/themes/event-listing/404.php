<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Event_Listing
 */

get_header();
?>
    <div class="container error-404" id="primary">
        <h1 class="page-title"><?php esc_html_e( '404', 'event-listing' ); ?></h1>
        <h2><?php esc_html_e( 'Page Not Found', 'event-listing' ); ?></h2>
        <p><?php esc_html_e( 'Opps! This does not seem to be the web page you are searching for.', 'event-listing' ); ?></p>
        <a href="<?php echo esc_url(home_url()); ?>" title="Goto Home" class="btn">
            <?php _e('Homepage', 'event-listing'); ?>
        </a>
    </div> <!-- .container -->
<?php
get_footer();
