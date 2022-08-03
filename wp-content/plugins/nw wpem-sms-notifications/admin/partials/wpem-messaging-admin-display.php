<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wpem_Messaging
 * @subpackage Wpem_Messaging/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="px-5 py-2 border border-3 mx-3">
<form action="options.php" method="post" style="margin:15px;">
<?php 
settings_fields( 'twilioCredentials' );
do_settings_sections( 'twilioCredentials' );


?>

    <div style="width:250px;height:30px;">
    <label for="sid" style="font-size:25px;" >Twilio Account SID</label>
</div>
    <input type="text" name="sid" id="" style="width:450px;" value="<?php echo get_option('sid')?>" class="input-group mb-3 w-75 mt-2">
    <br>
    <div style="height:30px; margin-top:20px;">
    <label for="auth" style="font-size:25px;">Auth </label>
    </div>
    <input type="text" name="auth" id="" style="width:450px;" value="<?php echo get_option('auth')?>" class="input-group mb-3 w-75 mt-2">
    <br>
    <div style="height:30px; margin-top:20px;">
    <label for="auth" style="font-size:25px;">Phone Number Aloted to you By Twilio</label>
    </div>
    <input type="text" name="phone" id="" style="width:450px;" value="<?php echo get_option('phone')?>" class="input-group mb-3 w-75 mt-2">
    <br>
    <br>
    <button type="submit" class="submit-btn btn btn-success btn-lg w-75">Submit</button>
</form>


<?php
$sid = get_option('sid');
$auth = get_option('auth');
$phone = get_option('phone');



if ((empty($sid))){
    echo "Sid and auth are not set correctly";
}
elseif (isset($sid)){
    echo "Sid and auth are set successfully";
}
else{
    echo "there has been an error please contact support";
}
?><br>
</div>