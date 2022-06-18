<?php
/**
Plugin Name: WP Event Manager - SMS & Whatsapp Notification
Plugin URI: https://www.wp-eventmanager.com
Description: This plugin provides sms & whatsapp notifications on certain events
Author: WP Event Manager
Author URI: https://www.wp-eventmanager.com
Text Domain: wpem-sms-notification
Domain Path: /languages
Version: 1.0.0
Since: 1.0.0
Requires WordPress Version at least: 4.1
Copyright: 2020 WP Event Manager
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
**/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
}

if ( ! class_exists( 'WPEM_Updater' ) ) 
{
	include( 'autoupdater/wpem-updater.php' );
}

include_once(ABSPATH.'wp-admin/includes/plugin.php');
function pre_check_before_installing_sms_notification() 
{	
	/*
	* Check weather WP Event Manager is installed or not. If WP Event Manger is not installed or active then it will give notification to admin panel
	*/
	if ( !is_plugin_active( 'wp-event-manager/wp-event-manager.php') ) 
	{
        global $pagenow;
    	if( $pagenow == 'plugins.php' )
    	{
           echo '<div id="error" class="error notice is-dismissible"><p>';
           echo __( 'WP Event Manager is require to use WP Event Manager Plugin Name' , 'wpem-sms-notification');
           echo '</p></div>';	
    	}
    	return true;
	}

}
add_action( 'admin_notices', 'pre_check_before_installing_sms-notification' );

/**
 * WP_Event_Manager_Sms class.
 */
class WP_Event_Manager_Sms_Notification extends WPEM_Updater{

	/**
	 * The single instance of the class.
	 *
	 * @var self
	 * @since 1.0.0
	 */
	private static $_instance = null;

	/**
	 * Main WP Event Manager Sms_Notification Instance.
	 *
	 * Ensures only one instance of WP Event Manager is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see WPEM_Sms_Notification()
	 * @return self Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Constructor - get the plugin hooked in and ready
	 */
	public function __construct() {

		//if wp event manager not active return from the plugin
		if ( !is_plugin_active( 'wp-event-manager/wp-event-manager.php') )
			return;

		// Define constants
		define( 'WPEM_SMS_NOTIFICATION_VERSION', '1.0.4' );
		define( 'WPEM_SMS_NOTIFICATION_PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
		define( 'WPEM_SMS_NOTIFICATION_PLUGIN_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ) );
		
		include( 'wpem-sms-notification-functions.php' );		
		include( 'wpem-sms-notification-template.php' );
		
		//post type
		include('includes/wpem-sms-notification-post-types.php');
		//shortcodes
		include( 'shortcodes/wpem-sms-notification-shortcodes.php' );
		
		//external 
		include('external/external.php');


		// Activation / deactivation - works with symlinks
		register_activation_hook( basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ ), array( $this, 'activate' ) );
		register_deactivation_hook( basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ ), array( $this, 'deactivate' ) );

		// Actions
		add_action( 'after_setup_theme', array( $this, 'load_plugin_textdomain' ) );

		add_action( 'admin_init', array( $this, 'updater' ) );


		if(is_admin()){
			include('admin/wpem-sms-notification-admin.php');
		}


		// Init license updates
		$this->init_updates( __FILE__ );

		
	}

	/**
     * activate function.
     *
     * @access public
     * @param 
     * @return 
     * @since 1.0.0
     */
	public function activate() {
		//installation process after activating
		//WPEM_Sms_Notification_Install::install();
	}

	/**
     * deactivate function.
     *
     * @access public
     * @param 
     * @return 
     * @since 1.0.0
     */
	public function deactivate() {

	}

	/**
     * updater function.
     *
     * @access public
     * @param 
     * @return 
     * @since 1.0.0
     */
	public function updater() {
		/*if ( version_compare( WPEM_SMS_NOTIFICATION_VERSION, get_option( 'wpem_sms-notification_version' ), '>' ) ) {

			//WPEM_Sms_Notification_Install::update();
			//flush_rewrite_rules();
		}*/
	}

	/**
	* load_plugin_textdomain function.
	*
	* @access public
	* @param
	* @return 
	* @since 1.0.0
	*/
	public function load_plugin_textdomain() {

		$domain = 'wpem-sms-notification';   

        $locale = apply_filters('plugin_locale', get_locale(), $domain);

		load_textdomain( $domain, WP_LANG_DIR . "/wpem-sms-notification/".$domain."-" .$locale. ".mo" );

		load_plugin_textdomain($domain, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}	
	
}

/**
 * Main instance of WP Event Manager Zoom.
 *
 * Returns the main instance of WP Event Manager Zoom to prevent the need to use globals.
 *
 * @since 1.0.0
 * @return WP_Event_Manager_Sms_Notification
 */
function WPEM_Sms_Notification() { 
	// phpcs:ignore WordPress.NamingConventions.ValidFunctionName

	/*
	* Check weather WP Event Manager is installed or not. If WP Event Manger is not installed or active then it will give notification to admin panel
	*/
	if ( is_plugin_active( 'wp-event-manager/wp-event-manager.php') ) 
	{
		return WP_Event_Manager_Sms_Notification::instance();
	}
}

$GLOBALS['event_manager_sms-notification'] = WPEM_Sms_Notification();



// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;


add_action( 'user_register', 'publish_post_notification');

function publish_post_notification($user_id) {
	// Your Account SID and Auth Token from twilio.com/console
	$sid = 'AC73a9fa4ced868d90d42918e12d1c766e';
	$token = '216298a298219665b2c454826feb2b55';
	$client = new Client($sid, $token);

	// Use the client to do fun stuff like send text messages!
	$client->messages->create(
		// the number you'd like to send the message to
		'+917720848000',
		[
			// A Twilio phone number you purchased at twilio.com/console
			'from' => '+18624658057',
			// the body of the text message you'd like to send
			'body' => 'Hey Jenny! Good luck on the bar exam! ' . $user_id . ' is added'
		]
	);

}
