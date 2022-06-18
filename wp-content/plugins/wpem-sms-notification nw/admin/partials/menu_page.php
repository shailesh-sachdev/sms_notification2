<?php
?>

<form action="options.php" method="post" style="margin:15px;">
<?php 
settings_fields( 'credentials' );
do_settings_sections( 'credentials' )
?>

    <div style="width:250px;height:30px;">
    <label for="sid" style="font-size:25px;" >Twilio Account SID</label>
</div>
    <input type="text" name="sid" id="" style="width:450px;">
    <br>
    <div style="height:30px; margin-top:20px;">
    <label for="auth" style="font-size:25px;">Auth </label>
    </div>
    <input type="text" name="auth" id="" style="width:450px;">
    <br>
    <br>
    <button type="submit" class="submit-btn">Submit</button>
</form>
