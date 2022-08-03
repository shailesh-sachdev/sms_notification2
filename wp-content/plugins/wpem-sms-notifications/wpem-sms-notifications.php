<?php
/**
Plugin Name: WP Event Manager - SMS Notifications 2
Plugin URI: https://www.wp-eventmanager.com
Description: Plugin description.
Author: WP Event Manager
Author URI: https://www.wp-eventmanager.com
Text Domain: wpem-sms-notifications
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
function pre_check_before_installing_sms_notifications() 
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
           echo __( 'WP Event Manager is require to use WP Event Manager Plugin Name' , 'wpem-sms-notifications');
           echo '</p></div>';	
    	}
    	return true;
	}

}
add_action( 'admin_notices', 'pre_check_before_installing_sms_notifications' );

/**
 * WP_Event_Manager_Sms_Notifications class.
 */
class WP_Event_Manager_Sms_Notifications extends WPEM_Updater{

	/**
	 * The single instance of the class.
	 *
	 * @var self
	 * @since 1.0.0
	 */
	private static $_instance = null;

	/**
	 * Main WP Event Manager Sms Notifications Instance.
	 *
	 * Ensures only one instance of WP Event Manager is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see WPEM_Sms_Notifications()
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
		define( 'WPEM_SMS_NOTIFICATIONS_VERSION', '1.0.4' );
		define( 'WPEM_SMS_NOTIFICATIONS_PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
		define( 'WPEM_SMS_NOTIFICATIONS_PLUGIN_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ) );
		
		include( 'wpem-sms-notifications-functions.php' );		
		include( 'wpem-sms-notifications-template.php' );
		
		//post type
		include('includes/wpem-sms-notifications-post-types.php');
		//shortcodes
		include( 'shortcodes/wpem-sms-notifications-shortcodes.php' );
		
		//external 
		include('external/external.php');


		// Activation / deactivation - works with symlinks
		register_activation_hook( basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ ), array( $this, 'activate' ) );
		register_deactivation_hook( basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ ), array( $this, 'deactivate' ) );

		// Actions
		add_action( 'after_setup_theme', array( $this, 'load_plugin_textdomain' ) );

		add_action( 'admin_init', array( $this, 'updater' ) );


		if(is_admin()){
			include('admin/wpem-sms-notifications-admin.php');
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
		//WPEM_Sms_Notifications_Install::install();
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
		/*if ( version_compare( WPEM_SMS_NOTIFICATIONS_VERSION, get_option( 'wpem_sms_notifications_version' ), '>' ) ) {

			//WPEM_Sms_Notifications_Install::update();
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

		$domain = 'wpem-sms-notifications';   

        $locale = apply_filters('plugin_locale', get_locale(), $domain);

		load_textdomain( $domain, WP_LANG_DIR . "/wpem-sms-notifications/".$domain."-" .$locale. ".mo" );

		load_plugin_textdomain($domain, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}	
}

/**
 * Main instance of WP Event Manager Zoom.
 *
 * Returns the main instance of WP Event Manager Zoom to prevent the need to use globals.
 *
 * @since 1.0.0
 * @return WP_Event_Manager_Sms_Notifications
 */
function WPEM_Sms_Notifications() { 
	// phpcs:ignore WordPress.NamingConventions.ValidFunctionName

	/*
	* Check weather WP Event Manager is installed or not. If WP Event Manger is not installed or active then it will give notification to admin panel
	*/
	if ( is_plugin_active( 'wp-event-manager/wp-event-manager.php') ) 
	{
		return WP_Event_Manager_Sms_Notifications::instance();
	}
}

$GLOBALS['event_manager_sms_notifications'] = WPEM_Sms_Notifications();


add_action( 'admin_menu', 'admin_menu_function', 10);

function admin_menu_function(){
	 add_menu_page( 'WPEM SMS Notifications', 'WPEM SMS', 'manage_options', 'wpem-sms-notifications', 'menu_function', 'dashicons-smartphone', 100 );
}

function menu_function(){
	require_once('admin\partials\menu-landing.php');
}

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

function sms_send($to,$msg){
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC73a9fa4ced868d90d42918e12d1c766e';
$auth_token = '216298a298219665b2c454826feb2b55';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+18624658057";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    $to,
    array(
        'from' => $twilio_number,
        'body' => $msg
    )
);
}


add_action( 'event_zoom_meeting_started_text', 'zoom_start' );
function zoom_start(){
	$to = '+917720848000';
	$msg = 'Zoom Meeting Started';
	sms_send($to , $msg);
}