<?php
$wp_customize->add_panel( 'event_listing_settings_panel', array(
    'priority' => 25,
    'capability' => 'edit_theme_options',
    'title' => __( 'Theme Options', 'event-listing' ),
) );

//Header
$wp_customize->add_section('event_listing_header_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Header Setting', 'event-listing'),
    'panel' => 'event_listing_settings_panel',
));
/*Header Phone*/
$wp_customize->add_setting('event_listing_options[event-listing-header-phone]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-header-phone'],
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('event_listing_options[event-listing-header-phone]', array(
    'label' => __('Telephone Number', 'event-listing'),
    'description' => __('Enter Telephone Number.', 'event-listing'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-header-phone]',
    'type' => 'text',
    'priority' => 15,
));
/*Header Email*/
$wp_customize->add_setting('event_listing_options[event-listing-header-email]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-header-email'],
    'sanitize_callback' => 'sanitize_email'
));

$wp_customize->add_control('event_listing_options[event-listing-header-email]', array(
    'label' => __('Email Address', 'event-listing'),
    'description' => __('Enter Email.', 'event-listing'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-header-email]',
    'type' => 'text',
    'priority' => 15,
));

/*Social Menu*/
$wp_customize->add_setting('event_listing_options[event-listing-header-social]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-header-social'],
    'sanitize_callback' => 'event_listing_sanitize_checkbox'
));

$wp_customize->add_control('event_listing_options[event-listing-header-social]', array(
    'label' => __('Show Social Icons', 'event-listing'),
    'description' => __('Go to Appearance > Menus and make the social menus using custom link and assign it to Social.', 'event-listing'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-header-social]',
    'type' => 'checkbox',
    'priority' => 15,
));

/*Search*/
$wp_customize->add_setting('event_listing_options[event-listing-header-search]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-header-search'],
    'sanitize_callback' => 'event_listing_sanitize_checkbox'
));

$wp_customize->add_control('event_listing_options[event-listing-header-search]', array(
    'label' => __('Show Search Icons', 'event-listing'),
    'description' => __('Search Icon will appear in the menu section.', 'event-listing'),
    'section' => 'event_listing_header_section',
    'settings' => 'event_listing_options[event-listing-header-search]',
    'type' => 'checkbox',
    'priority' => 15,
));

//footer
$wp_customize->add_section('event_listing_footer_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Footer Setting', 'event-listing'),
    'panel' => 'event_listing_settings_panel',
));
/*Copyright Setting*/
$wp_customize->add_setting('event_listing_options[event-listing-footer-copyright]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-footer-copyright'],
    'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control('event_listing_options[event-listing-footer-copyright]', array(
    'label' => __('Copyright Text', 'event-listing'),
    'description' => __('Enter your own copyright text.', 'event-listing'),
    'section' => 'event_listing_footer_section',
    'settings' => 'event_listing_options[event-listing-footer-copyright]',
    'type' => 'text',
    'priority' => 15,
));
$wp_customize->add_setting('event_listing_options[event-listing-footer-row]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-footer-row'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-footer-row]', array(
    'choices' => array(
        '1' => __('One Column', 'event-listing'),
        '2' => __('Two Column', 'event-listing'),
        '3' => __('Three Column', 'event-listing'),
        '4' => __('Four Column', 'event-listing'),
    ),
    'label' => __('Select Footer Widget Row', 'event-listing'),
    'description' => __('You need to add the widgets on Appearance > Widgets', 'event-listing'),
    'section' => 'event_listing_footer_section',
    'settings' => 'event_listing_options[event-listing-footer-row]',
    'type' => 'select',
    'priority' => 15,
));
/*footer social*/
$wp_customize->add_setting('event_listing_options[event-listing-footer-social]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-footer-social'],
    'sanitize_callback' => 'event_listing_sanitize_checkbox'
));

$wp_customize->add_control('event_listing_options[event-listing-footer-social]', array(
    'label' => __('Show Social Icons', 'event-listing'),
    'description' => __('Show social icons in the footer.', 'event-listing'),
    'section' => 'event_listing_footer_section',
    'settings' => 'event_listing_options[event-listing-footer-social]',
    'type' => 'checkbox',
    'priority' => 15,
));

//site layout
$wp_customize->add_section('event_listing_site_layout_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Site Layout Setting', 'event-listing'),
    'panel' => 'event_listing_settings_panel',
));
/*Boxed and full width*/
$wp_customize->add_setting('event_listing_options[event-listing-full-boxed]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-full-boxed'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-full-boxed]', array(
	'choices' => array(
        'full-width' => __('Full Width', 'event-listing'),
        'boxed' => __('Boxed', 'event-listing'),
    ),
    'label' => __('Full Width or Boxed', 'event-listing'),
    'description' => __('Select the Site Layout.', 'event-listing'),
    'section' => 'event_listing_site_layout_section',
    'settings' => 'event_listing_options[event-listing-full-boxed]',
    'type' => 'select',
    'priority' => 15,
));

/*Site Sidebar*/
$wp_customize->add_setting('event_listing_options[event-listing-site-sidebar]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-site-sidebar'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-site-sidebar]', array(
	'choices' => array(
        'right-sidebar' => __('Right Sidebar', 'event-listing'),
        'left-sidebar' => __('Left Sidebar', 'event-listing'),
        'no-sidebar' => __('No Sidbear', 'event-listing'),
    ),
    'label' => __('Global Sidebar Setting', 'event-listing'),
    'description' => __('Select the Site Layout.', 'event-listing'),
    'section' => 'event_listing_site_layout_section',
    'settings' => 'event_listing_options[event-listing-site-sidebar]',
    'type' => 'select',
    'priority' => 15,
));


/*Mobile Sidebar*/
$wp_customize->add_setting('event_listing_options[event-listing-mobile-sidebar]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-mobile-sidebar'],
    'sanitize_callback' => 'event_listing_sanitize_select'
));

$wp_customize->add_control('event_listing_options[event-listing-mobile-sidebar]', array(
	'choices' => array(
        'content-first' => __('Content First', 'event-listing'),
        'sidebar-first' => __('Sidebar First', 'event-listing'),
    ),
    'label' => __('Mobile - Sidebar first or content Setting', 'event-listing'),
    'description' => __('Select the option for the sidebar in the mobile devices.', 'event-listing'),
    'section' => 'event_listing_site_layout_section',
    'settings' => 'event_listing_options[event-listing-mobile-sidebar]',
    'type' => 'select',
    'priority' => 15,
));

//Slider page selection
$wp_customize->add_section('event_listing_site_slider_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Slider Setting', 'event-listing'),
    'panel' => 'event_listing_settings_panel',
));
/*slider one*/
$wp_customize->add_setting('event_listing_options[event-listing-slider-page-one]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-slider-page-one'],
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('event_listing_options[event-listing-slider-page-one]', array(
    'label' => __('Select Page', 'event-listing'),
    'description' => __('First Page for the first Slider.', 'event-listing'),
    'section' => 'event_listing_site_slider_section',
    'settings' => 'event_listing_options[event-listing-slider-page-one]',
    'type' => 'dropdown-pages',
    'priority' => 15,
));
/*slider two*/
$wp_customize->add_setting('event_listing_options[event-listing-slider-page-two]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-slider-page-two'],
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('event_listing_options[event-listing-slider-page-two]', array(
    'label' => __('Select Page', 'event-listing'),
    'description' => __('First Page for the second Slider.', 'event-listing'),
    'section' => 'event_listing_site_slider_section',
    'settings' => 'event_listing_options[event-listing-slider-page-two]',
    'type' => 'dropdown-pages',
    'priority' => 15,
));
/*slider three*/
$wp_customize->add_setting('event_listing_options[event-listing-slider-page-three]', array(
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'default' => $default['event-listing-slider-page-three'],
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('event_listing_options[event-listing-slider-page-three]', array(
    'label' => __('Select Page', 'event-listing'),
    'description' => __('First Page for the third Slider.', 'event-listing'),
    'section' => 'event_listing_site_slider_section',
    'settings' => 'event_listing_options[event-listing-slider-page-three]',
    'type' => 'dropdown-pages',
    'priority' => 15,
));