<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wpem_Messaging
 * @subpackage Wpem_Messaging/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wpem_Messaging
 * @subpackage Wpem_Messaging/admin
 * @author     Your Name <email@example.com>
 */
class Wpem_Messaging_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wpem_messaging    The ID of this plugin.
	 */
	private $wpem_messaging;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wpem_messaging       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wpem_messaging, $version ) {

		$this->wpem_messaging = $wpem_messaging;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpem_Messaging_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpem_Messaging_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wpem_messaging, plugin_dir_url( __FILE__ ) . 'css/wpem-messaging-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->wpem_messaging, plugin_dir_url( __FILE__ ) . 'css/bootstrap.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpem_Messaging_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpem_Messaging_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wpem_messaging, plugin_dir_url( __FILE__ ) . 'js/wpem-messaging-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->wpem_messaging, plugin_dir_url( __FILE__ ) . 'js/bootstrap.js', array( 'jquery' ), $this->version, false );

	}

	public function my_admin_menu(){
		add_menu_page( 'WPEM Messaging', 'WPEM Messaging', 'manage_options', 'wpem-messaging/mainsettings.php', array($this , 'myplugin_admin_page'), '', 250 );
		add_submenu_page( 'wpem-messaging/mainsettings.php', "Admin Page", "Admin Page", "manage_options", "wpem_admin_menu", array($this , 'wpem_admin_page'),251  );
		add_submenu_page( 'wpem-messaging/mainsettings.php', "Attendee Page", "Attendee Page", "manage_options", "wpem_attendee_menu", array($this , 'wpem_attendee_page'),252  );
		add_submenu_page( 'wpem-messaging/mainsettings.php', "Organizer Page", "Organizer Page", "manage_options", "wpem_organizer_menu", array($this , 'wpem_organizer_page'),253  );
		
	}
	public function myplugin_admin_page(){
		//return views
		require_once('partials\wpem-messaging-admin-display.php');
	}
	public function wpem_admin_page(){
		require_once('partials\wpem-admin-page.php');
	}
	public function wpem_attendee_page(){
		require_once('partials\wpem-attendee-page.php');
	}
	public function wpem_organizer_page(){
		require_once('partials\wpem-organizer-page.php');
	}
/**
	 * Register settings in the options page.
	 *
	 * @since    1.0.0
	 */
	public function register_credentials(){
		register_setting('twilioCredentials' , 'sid');
		register_setting('twilioCredentials' , 'auth');
		register_setting('twilioCredentials' , 'phone');
	}



}
