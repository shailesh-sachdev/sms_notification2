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
	{}

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
		// wp_enqueue_style( 'style-name', get_stylesheet_uri('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css') );
		wp_enqueue_style( 'bootstrap.css', plugin_dir_url( __FILE__ ) .'/assets/css/bootstrap.css');
		wp_enqueue_script( 'bootstrap.js', plugin_dir_url( __FILE__ ) .'/assets/js/bootstrap.js');


		// wp_enqueue_style( 'wpdocs-bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' );
		// wp_enqueue_style( 'wpdocs-datatables-bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css' );
		 
		// // Enqueue my scripts.
		// wp_enqueue_script( 'wpdocs-bootstrap-bundle-script', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js', array(), null, true );
		// wp_enqueue_script( 'wpdocs-datatables-bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js', array(), null, true );
		// wp_enqueue_script( 'wpdocs-jquery-datatables-script', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js', array(), null, true );    
		 
	}
}

new WPEM_Sms_Notifications_Admin();

