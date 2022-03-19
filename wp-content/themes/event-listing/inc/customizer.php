<?php
/**
 * Event Listing Theme Customizer
 *
 * @package Event Listing
 */

if ( !function_exists('event_listing_default_theme_options_values') ) :

    function event_listing_default_theme_options_values() {

        $default_theme_options = array(

            /*Paragraph Options*/
            'event-listing-font-family-url'               => 'Roboto:400,500,300,700,400italic',
            'event-listing-font-paragraph-font-size'      => 16,
            'event-listing-font-paragraph-line-height'    => 28,
            'event-listing-font-paragraph-letter-spacing' => 0,
            'event-listing-font-paragraph-font-weight'    => 400,

            /* H1 Options */
            'event-listing-h1-font-family-url'     => 'Roboto:400,500,300,700,400italic',
            'event-listing-font-h1-font-size'      => 30,
            'event-listing-font-h1-line-height'    => 34,
            'event-listing-font-h1-letter-spacing' => 0,
            'event-listing-font-h1-font-weight'    => 700,

            /* H2 Options */
            'event-listing-h2-font-family-url'     =>'Roboto:400,500,300,700,400italic',
            'event-listing-font-h2-font-size'      => 24,
            'event-listing-font-h2-line-height'    => 36,
            'event-listing-font-h2-letter-spacing' => 0,
            'event-listing-font-h2-font-weight'    => 600,

            /* H3 Options */
            'event-listing-h3-font-family-url'     => 'Roboto:400,500,300,700,400italic',
            'event-listing-font-h3-font-size'      => 20,
            'event-listing-font-h3-line-height'    => 26,
            'event-listing-font-h3-letter-spacing' => 0,
            'event-listing-font-h3-font-weight'    => 500,

            /* H4 Options */
            'event-listing-h4-font-family-url'     => 'Roboto:400,500,300,700,400italic',
            'event-listing-font-h4-font-size'      => 18,
            'event-listing-font-h4-line-height'    => 24,
            'event-listing-font-h4-letter-spacing' => 0,
            'event-listing-font-h4-font-weight'    => 400,

            /* H5 Options */
            'event-listing-h5-font-family-url'    => 'Roboto:400,500,300,700,400italic',
            'event-listing-font-h5-font-size'      => 16,
            'event-listing-font-h5-line-height'    => 20,
            'event-listing-font-h5-letter-spacing' => 0,
            'event-listing-font-h5-font-weight'    => 400,

            /* H6 Options */
            'event-listing-h6-font-family-url'     => 'Roboto:400,500,300,700,400italic',
            'event-listing-font-h6-font-size'      => 14,
            'event-listing-font-h6-line-height'    => 18,
            'event-listing-font-h6-letter-spacing' => 0,
            'event-listing-font-h6-font-weight'    => 400,


            /* Colors */
            'event_listing_primary_color'     => '#0096ff',
            'event_listing_secondary_color'     => '#111111',
            'event_listing_button_color'     => '#0096ff',
            'event_listing_button_text_color'=>'#ffffff',
            'event_listing_link_color'     => '#0096ff',
            'event_listing_link_hover_color'     => '#111111',
            'event_listing_page_content_color'     => '#ffffff',

            /* footer */
            'event-listing-footer-copyright'=> esc_html__('Your Copyright Text', 'event-listing'),
            'event-listing-footer-row'=> 4,
            'event-listing-footer-social'=> 1,

            /*layout*/
            'event-listing-full-boxed' => 'full-width',
            'event-listing-site-sidebar'=> 'right-sidebar',
            'event-listing-mobile-sidebar'=> 'content-first',

            /*Header*/
            'event-listing-header-phone' => '',
            'event-listing-header-email'=> '',
            'event-listing-header-social'=> 0,
            'event-listing-header-search'=> 0,

            /*Slider*/
            'event-listing-slider-page-one'=> 0,
            'event-listing-slider-page-two'=> 0,
            'event-listing-slider-page-three'=> 0,
        );
        return apply_filters( 'event_listing_default_theme_options_values', $default_theme_options );
    }
endif;
/**
 *  Event Listing Theme Options and Settings
 *
 * @since Event Listing 1.0.0
 *
 * @param null
 * @return array event_listing_get_options_value
 *
 */
if ( !function_exists('event_listing_get_options_value') ) :
    function event_listing_get_options_value() {
        $event_listing_default_theme_options_values = event_listing_default_theme_options_values();
        $event_listing_get_options_value = get_theme_mod( 'event_listing_options');
        if( is_array( $event_listing_get_options_value )){
            return array_merge( $event_listing_default_theme_options_values, $event_listing_get_options_value );
        }
        else{
            return $event_listing_default_theme_options_values;
        }
    }
endif;
/**
 * Event Listing Theme Customizer
 *
 * @package Event_Listing
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function event_listing_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'event_listing_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'event_listing_customize_partial_blogdescription',
		) );
	}

	$default = event_listing_default_theme_options_values();
	require get_template_directory() . '/inc/functions/customizer-fonts.php';
    require get_template_directory() . '/inc/functions/customizer-color.php';
    require get_template_directory() . '/inc/functions/customizer-settings.php';
}
add_action( 'customize_register', 'event_listing_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function event_listing_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function event_listing_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function event_listing_customize_preview_js() {
	wp_enqueue_script( 'event-listing-customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'event_listing_customize_preview_js' );