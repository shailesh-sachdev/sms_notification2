<?php

?>
<div class="px-5 py-2 border border-3 mx-3">
    <form action="get">
<h1 class="display-5">Admin Controls</h1>
<br>
<div class="input-group mb-3 w-75">
    <input type="text" class="form-control" placeholder="Number For Sending SMS" aria-label="Recipient's username" aria-describedby="button-addon2" id="abc" value="<?php echo get_option('phone')?>">
    <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
</div>
<h3 class="display-6">Admin Notification Settings</h3>
<input type="checkbox" name="event-created" id="ecnc" onclick="textarea()">Event Created</input><br>
<div id="ecnt">
    <h3 class="h6">Event Created Custom SMS</h3>
    <textarea name="event-created-notification-text" cols="100" rows="5"></textarea><br >
</div>
<input type="checkbox" name="registration-recieved" id="epnc" onclick="textarea2()">Event Published</input><br>
<div id="epnt" style="display:none;">
    <h3 class="h6">Event Published Custom SMS</h3>
    <textarea name="event-published-notification-text" cols="100" rows="5"></textarea><br >
</div>
<input type="checkbox" name="registration-recieved" id="ecanc" onclick="textarea3()">Event Cancelled</input><br>
<div id="ecant" style="display:none;">
    <h3 class="h6">Event Cancelled Custom SMS</h3>
    <textarea name="event-published-notification-text" cols="100" rows="5"></textarea><br >
</div>
<input type="checkbox" name="registration-recieved" id="ernc" onclick="textarea4()">Event Rescheduled</input><br>
<div id="ernt" style="display:none;">
    <h3 class="h6">Event Rescheduled Custom SMS</h3>
    <textarea name="event-published-notification-text" cols="100" rows="5"></textarea><br >
</div>
<input type="submit"></input>
</form>
</div>
<?php
$ecnc = $_GET['event-created'];
if(isset($ecnc)){
print_r($ecnc . "Hello");
}
?>
