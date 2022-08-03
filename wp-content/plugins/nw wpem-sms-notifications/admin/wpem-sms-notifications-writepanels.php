<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( ! class_exists( 'WP_Event_Manager_Writepanels' ) && defined( 'EVENT_MANAGER_PLUGIN_DIR' ) ) {
	include( EVENT_MANAGER_PLUGIN_DIR . '/admin/wp-event-manager-writepanels.php' );
}

/**
 * WPEM_Pluginslug_Writepanels class.
 */
if ( class_exists( 'WP_Event_Manager_Writepanels' ) ) 
{
	class WPEM_Pluginslug_Writepanels extends WP_Event_Manager_Writepanels {

		/**
		 * Post Type Flag
		 * @var string
		 */
		private $post_type = 'event_pluginslug';

		/**
		 * Constructor - get the plugin hooked in and ready
		 */
		public function __construct() {}


			
	}

	new WPEM_Pluginslug_Writepanels();
}
