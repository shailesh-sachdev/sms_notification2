<?php
// add_action( 'user_register', 'sms_send1');

// function sms_Send1(){
// 	$numbers = array('+917720848000');
// 	foreach ($numbers as $num) {
//  	$x = "'" . $num . "'";
//  	sms_send($x , "Hey Wassup");
// }

	
// }

$sid = $_GET['sid'];
echo($sid);
if(get_option( 'sid') === null){
	add_option('sid',$sid);
	update_option('sid',$sid);

}
update_option('sid',$sid);
print_r($sid);
?>
<div class="card">
	<div class="card-header">
		<h5 class="h5">
			Welcome to WPEM SMS Notifications Plugin <br>
			Please Fill the TWILIO SID & Auth code 
		</h5>
		<form action="" method="get">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<label for="sid">SID</label>
					<input type="text" name="sid" value=<?php echo($sid);?>>
				</li>
				<li class="list-group-item">
					<label for="auth">AUTH</label>
					<input type="text" name="auth">
				</li>
				<li class="list-group-item">
					<input type="submit" value="SAVE" class="btn btn-success w-3">
				</li>
			</form>
		</ul>
	</div>
</div>