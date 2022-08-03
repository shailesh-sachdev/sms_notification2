<?php

// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// $sidO = get_option('sid');
$sidO = 'AC73a9fa4ced868d90d42918e12d1c766e';
$authO = '216298a298219665b2c454826feb2b55';
$phoneO = '+18624658057';
// $authO = get_option('auth');
// $phoneO = get_option('phone');

function user_reg_func($user_id){

// Your Account SID and Auth Token from twilio.com/console
$sid = $sidO;
$token = $authO;
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+917720848000',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => $phoneO,
        // the body of the text message you'd like to send
        'body' => "Hey shail! Good luck for the plugin!"
    ]
);
}

function messaging($to , $msg){
    // Your Account SID and Auth Token from twilio.com/console
$sid = $sidO;
$token = $authO;
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $to,
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => $phoneO,
        // the body of the text message you'd like to send
        'body' => $msg
    ]
);
}

add_action( 'user_register', 'user_reg_func');
