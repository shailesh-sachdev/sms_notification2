<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Wpem_Messaging
 *
 * @wordpress-plugin
 * Plugin Name:       WP Event Manager - Messaging
 * Plugin URI:        https://www.wp-eventmanager.com
 * Description:       This plugin provides sms & whatsapp notifications on certain events.
 * Version:           1.0.0
 * Author:            WP Event Manager
 * Author URI:        https://www.wp-eventmanager.com
 * Copyright:         2020 WP Event Manager
 * Requires WordPress Version at least: 4.1
 * License:           GNU General Public License v3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       wpem_messaging
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPEM_MESSAGING_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpem-messaging-activator.php
 */
function activate_wpem_messaging() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpem-messaging-activator.php';
	Wpem_Messaging_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpem-messaging-deactivator.php
 */
function deactivate_wpem_messaging() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpem-messaging-deactivator.php';
	Wpem_Messaging_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpem_messaging' );
register_deactivation_hook( __FILE__, 'deactivate_wpem_messaging' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpem-messaging.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpem_messaging() {

	$plugin = new Wpem_Messaging();
	$plugin->run();

}
run_wpem_messaging();

function sanitizing_messages($post_id) {
	$post_status =	get_post_status($post= $post_id);
	if ( $post_status == "draft" ){
		return $final_var = 0;
	}
	else{
		if ( $post_status == "publish" && is_event_cancelled($post = $post_id) == true){

			return $final_var = 1;
		}
		else{

			return $final_var = 2;
		}
	}

}
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

add_action( 'draft_event_listing' , 'draft_event_listing_notification' );
function draft_event_listing_notification(){
	sanitizing_messages($post_id);

		if($final_var = 0){
				
				// Your Account SID and Auth Token from twilio.com/console
				$sid = get_option('sid');
				$token = get_option('auth');
				$client = new Client($sid, $token);
			
			
			
				// Use the client to do fun stuff like send text messages!
				$client->messages->create(
					// the number you'd like to send the message to
					'+917720848000',
					[
						// A Twilio phone number you purchased at twilio.com/console
						'from' => get_option('phone'),
						// the body of the text message you'd like to send
						'body' => 'Event ' . $post_id . ' is drafted'
					]
				);
		}
		else{
			exit('draft worked');
		}

}

add_action ('save_event_listing' , 'event_listing_updated_notification');
function event_listing_updated_notification($post_id){
	sanitizing_messages($post_id);

	if($final_var = 1){
									// Your Account SID and Auth Token from twilio.com/console
									$sid = get_option('sid');
									$token = get_option('auth');
									$client = new Client($sid, $token);
								
								
								
									// Use the client to do fun stuff like send text messages!
									$client->messages->create(
										// the number you'd like to send the message to
										'+917720848000',
										[
											// A Twilio phone number you purchased at twilio.com/console
											'from' => get_option('phone'),
											// the body of the text message you'd like to send
											'body' => 'Event ' . $post_id . ' is cancelled'
										]
									);
						
	}
	else{
		exit('update worked');
	}
	
}

add_action( 'publish_event_listing', 'publish_post_notification');

function publish_post_notification($post_id) {
	sanitizing_messages($post_id);
	 if($final_var = 2){
							// Your Account SID and Auth Token from twilio.com/console
	$sid = get_option('sid');
	$token = get_option('auth');
	$client = new Client($sid, $token);



	// Use the client to do fun stuff like send text messages!
	$client->messages->create(
		// the number you'd like to send the message to
		'+917720848000',
		[
			// A Twilio phone number you purchased at twilio.com/console
			'from' => get_option('phone'),
			// the body of the text message you'd like to send
			'body' => 'Event ' . $post_id . ' is published'
		]
	);

	 }
	 else{
		 exit( 'publish worked');
	 }

}
add_action( 'user_register', 'register_user_notification');

function register_user_notification($user_id) {
	
	 
							// Your Account SID and Auth Token from twilio.com/console
	$sid = get_option('sid');
	$token = get_option('auth');
	$client = new Client($sid, $token);



	// Use the client to do fun stuff like send text messages!
	$client->messages->create(
		// the number you'd like to send the message to
		'+917720848000',
		[
			// A Twilio phone number you purchased at twilio.com/console
			'from' => get_option('phone'),
			// the body of the text message you'd like to send
			'body' => 'user ' . $user_id . ' is registered'
		]
	);


}
add_action( 'profile_update', 'profile_update_notification');

function profile_update_notification($user_id) {
	
	 
							// Your Account SID and Auth Token from twilio.com/console
	$sid = get_option('sid');
	$token = get_option('auth');
	$client = new Client($sid, $token);



	// Use the client to do fun stuff like send text messages!
	$client->messages->create(
		// the number you'd like to send the message to
		'+917720848000',
		[
			// A Twilio phone number you purchased at twilio.com/console
			'from' => get_option('phone'),
			// the body of the text message you'd like to send
			'body' => 'user ' . $user_id . ' profile is updated'
		]
	);


}
