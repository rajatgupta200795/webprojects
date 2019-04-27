<?php

	// Account details
	$apiKey = urlencode('m9afpPgwpRQ-zmOMZK9dkGSauVZ7TSS1JgRN2gvSAp');
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/balance/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	$k = json_decode($response);
	$balance = $k->balance->sms;
	
echo'
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-1"><a href="home.php" class="btn btn-default"><span class="glyphicon glyphicon-home"></span> Home</a></div>
	<div class="col-sm-1"><a href="all_class.php" class="btn btn-default"><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span> Class</a></div>
	<div class="col-sm-6"><a href="new_student.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> New Student</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="student_identity_card.php" class="btn btn-default"><span class="glyphicon glyphicon-list-alt
"></span> ID Card</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="messege_to_student.php" class="btn btn-default"><span class="glyphicon glyphicon-phone"></span> SMS ('.$balance.')</a></div>
	<div class="col-sm-2"><a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a></div>
</div>
';

?>
