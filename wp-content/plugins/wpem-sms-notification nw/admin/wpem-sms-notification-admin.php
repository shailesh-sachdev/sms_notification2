<?php
class WPEM_Sms_Notification_Admin {

	/**
	 * Constructor - get the plugin hooked in and ready
	 */
	public function register_credentials(){
		register_setting( 'credentials', 'sid' );
		register_setting( 'credentials', 'auth' );

	}
	public function __construct() {
		

		include_once( WPEM_SMS_NOTIFICATION_PLUGIN_DIR . '/admin/wpem-sms-notification-writepanels.php' );
		
		add_action( 'admin_menu', array( $this, 'admin_menu' ), 12 );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		wp_enqueue_script( 'sms_notification_js', plugin_dir_url( __FILE__ ) . 'assets/js/index.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_style( 'sms_notification_css', plugin_dir_url( __FILE__ ) . 'assets/css/style.css');

		include_once( WPEM_SMS_NOTIFICATION_PLUGIN_DIR . '/db_file.php	' );
		register_activation_hook( __FILE__, 'create_db' );
		register_activation_hook( __FILE__, 'create_table');
	
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
		add_menu_page( 'WPEM Message Notification', 'WPEM Message Notification', 'manage_options', 'plugin-name/mainsettings.php', array($this , 'sms_notifications_page'), '', 250 );

	}
	public function sms_notifications_page()
	{
		require_once('partials\menu_page.php');
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
		require_once('assets/js/index.js');

	}

}

new WPEM_Sms_Notification_Admin();

