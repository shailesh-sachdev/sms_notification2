<?php
class WPEM_Sms_Notifications_Admin {

	/**
	 * Constructor - get the plugin hooked in and ready
	 */
	public function __construct() {

		include_once( WPEM_SMS_NOTIFICATIONS_PLUGIN_DIR . '/admin/wpem-sms-notifications-writepanels.php' );
		
		add_action( 'admin_menu', array( $this, 'admin_menu' ), 12 );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	/**
	 * admin_menu function.
	 * register menu in admin side
	 * @access public
	 * @param 
	 * @return 
	 * @since 1.0.0
	 */
	public function admin_menu() 
	{
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
	 * admin_enqueue_scripts function.
	 * enqueue style and script for admin
	 * @access public
	 * @param 
	 * @return 
	 * @since 1.0.0
	 */
	public function admin_enqueue_scripts() 
	{
		wp_enqueue_style( 'admin_styles', plugin_dir_url( __FILE__ ) .'assets/css/admin.css', array(), null, 'all' );
		wp_enqueue_script( 'admin_script', plugin_dir_url( __FILE__ ) .'assets/js/admin.js', array(), null, false );
	}
	public function register_credentials(){
		register_setting( 'credentials', 'sid' );
		register_setting( 'credentials', 'auth' );
		register_setting('twilioCredentials' , 'phone');


	}
	
}


new WPEM_Sms_Notifications_Admin();

