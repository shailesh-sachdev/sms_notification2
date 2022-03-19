<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Event_Listing
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function event_listing_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'event_listing_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function event_listing_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'event_listing_pingback_header' );




function event_listing_ocdi_import_files() {
  return [
	[
      'import_file_name'             => 'Birthday',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/birthday/birthday-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/birthday/birthday-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/birthday/event-listing-child-birthday-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/birthday/birthday.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/birthday/',
    ],
    [
      'import_file_name'             => 'Charity',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/charity/charity-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/charity/charity-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/charity/event-listing-child-charity-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/charity/charity.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/charity/',
    ],
	[
      'import_file_name'             => 'Conference',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/conference/conference-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/conference/conference-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/conference/event-listing-child-conference-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/conference/conference.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/conference/',
    ],
	[
      'import_file_name'             => 'DJ party',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/dj-party/dj-party-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/dj-party/dj-party-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/dj-party/event-listing-child-dj-party-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/dj-party/dj-party.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/dj-party/',
    ],
	[
      'import_file_name'             => 'Festival',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/festival/festival-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/festival/festival-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/festival/event-listing-child-festival-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/festival/festival.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/festival/',
    ],
	[
      'import_file_name'             => 'Learning',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/learning/learning-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/learning/learning-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/learning/event-listing-child-learning-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/learning/learning.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/learning/',
    ],
	[
      'import_file_name'             => 'Marathon',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/marathon/marathon-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/marathon/marathon-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/marathon/event-listing-child-marathon-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/marathon/marathon.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/marathon/',
    ],
	[
      'import_file_name'             => 'Theater',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/theater/theater-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/theater/theater-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/theater/event-listing-child-theater-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/theater/theater.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/theater/',
    ],
	[
      'import_file_name'             => 'Virtual Event',
      'categories'                   => [ 'Virtual' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/virtual-event/virtual-event-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/virtual-event/virtual-event-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/virtual-event/event-listing-child-virtual-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/virtual-event/virtual-event.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/virtual-event-demo/',
    ],
	
	[
      'import_file_name'             => 'Wedding',
      'categories'                   => [ 'Hybrid' ],
      'import_file_url'            => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/wedding/wedding-event-content.xml',
      'import_widget_file_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/wedding/wedding-event-demo-widgets.wie',
      'import_customizer_file_url' => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/wedding/event-listing-child-wedding-event.dat',
      'import_preview_image_url'     => 'https://demo.wp-eventmanager.com/wp-content/uploads/dummy-data/wedding/wedding.png',
      'preview_url'                  => 'https://demo.wp-eventmanager.com/wedding/',
    ],
  ];
}
add_filter( 'ocdi/import_files', 'event_listing_ocdi_import_files' );

/* After Import Custom Code Execution */
function event_listing_ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
 
    set_theme_mod( 'nav_menu_locations', [
            'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
        ]
    );
 
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
 
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
 
}
add_action( 'ocdi/after_import', 'event_listing_ocdi_after_import_setup' );



function event_listing_ocdi_register_plugins( $plugins ) {

  $theme_plugins = [
    [ // A WordPress.org plugin repository 
      'name'     => 'WP Event Manager', // Name of the plugin.
      'slug'     => 'wp-event-manager', 
      'required' => true,                   
    ],
    [ // A WordPress.org plugin repository example.
      'name'     => 'Elementor', // Name of the plugin.
      'slug'     => 'elementor', 
      'required' => true,                   
    ],
  ];
 
  return $theme_plugins;
}
add_filter( 'ocdi/register_plugins', 'event_listing_ocdi_register_plugins' );

