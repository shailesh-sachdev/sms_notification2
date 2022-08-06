<?php

?>
<div class="px-5 py-2 border border-3 mx-3">
<h1 class="display-5">Admin Controls</h1>
<br>
<div class="input-group mb-3 w-75">
    <input type="text" class="form-control" placeholder="Number For Sending SMS" aria-label="Recipient's username" aria-describedby="button-addon2" id="abc">
    <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
</div>
<h3 class="display-6">Admin Notification Settings</h3>
<form action="" method="post">
    <?php if(get_option('ecnc')=='true'){
        echo('<input type="checkbox" name="registration-recieved" id="ecnc" onclick="textarea()" checked>Event Created</input><br>');
    }
    else{
        echo('<input type="checkbox" name="registration-recieved" id="ecnc" onclick="textarea()" >Event Created</input><br>');
    }?>
<!-- <input type="checkbox" name="registration-recieved" id="ecnc" onclick="textarea()" >Event Created</input><br> -->
<?php add_option("ecnc");?>
<div id="ecnt" style="padding:10px;" class="border border-3">
    <h3 class="h6">Event Created Custom SMS</h3>
    <textarea name="event-created-notification-text" cols="100" rows="5"></textarea><br >
    <h3 class="h6">Send SMS To</h3>
    <input type="checkbox" name="admin" id="">Admin</input>
    <input type="checkbox" name="organizer" id="">Organizer</input>
</div>
<input type="checkbox" name="registration-recieved" id="epnc" onclick="textarea2()">Event Published</input><br>
<div id="epnt" style="display:none;padding:10px;" class="border border-3">
    <h3 class="h6">Event Published Custom SMS</h3>
    <textarea name="event-published-notification-text" cols="100" rows="5"></textarea><br >
    <h3 class="h6">Send SMS To</h3>
    <input type="checkbox" name="admin" id="">Admin</input>
    <input type="checkbox" name="organizer" id="">Organizer</input>
</div>
<input type="checkbox" name="registration-recieved" id="ecanc" onclick="textarea3()">Event Cancelled</input><br>
<div id="ecant" style="display:none; padding:10px;" class="border border-3">
    <h3 class="h6">Event Cancelled Custom SMS</h3>
    <textarea name="event-published-notification-text" cols="100" rows="5"></textarea><br >
    <h3 class="h6">Send SMS To</h3>
    <input type="checkbox" name="admin" id="">Admin</input>
    <input type="checkbox" name="organizer" id="">Organizer</input>
</div>
<input type="checkbox" name="registration-recieved" id="ernc" onclick="textarea4()">Event Rescheduled</input><br>
<div id="ernt" style="display:none; padding:10px;" class="border border-3">
    <h3 class="h6">Event Rescheduled Custom SMS</h3>
    <textarea name="event-published-notification-text" cols="100" rows="5"></textarea><br >
    <h3 class="h6">Send SMS To</h3>
    <input type="checkbox" name="admin" id="">Admin</input>
    <input type="checkbox" name="organizer" id="">Organizer</input>
</div>
<button type="submit" class="btn btn-success mb-3 w-75" style="margin-top:50px;">Save</button>
</div>
</form>
<?php
if(isset($_POST['registration-recieved'])){
    update_option('ecnc','true');
    echo(get_option('ecnc'));
}
else{
    update_option('ecnc','false');
    echo(get_option('ecnc'));

}

if(get_option('ecnc')=='true'){
    $x = 'checked';
}
else{
    $x = 'x';
}
?>