<?php
add_action('user_register', 'demo_functon');
function demo_function(){
    echo "<html><head><body><script>alert('working');</script></body></head></html>";
    print_r("HI");
}


?>
<div class="px-5 py-2 border border-3 mx-3">

<h3 class="display-6">Attendee Notification Settings</h3>
<input type="checkbox" name="registration-recieved" id="">Registration Recieved</input><br>
<input type="checkbox" name="registration-recieved" id="">Registration Confirmed</input><br>
<input type="checkbox" name="registration-recieved" id="">Event Started</input><br>
<input type="checkbox" name="registration-recieved" id="">Event Ended</input><br>
<input type="checkbox" name="registration-recieved" id="">Checkins</input><br>
<input type="checkbox" name="registration-recieved" id="">Alert</input><br>
<input type="checkbox" name="registration-recieved" id="">Order Placed</input><br>
<input type="checkbox" name="registration-recieved" id="">Order Processed</input><br>
<input type="checkbox" name="registration-recieved" id="">Order Confirmed</input><br>

</div>
<?php
