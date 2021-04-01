<?php

// Jquery validation in custom.js

$name = '';
$email = '';
$msg = '';
$subject = "Message from NispotWorks Site"; 

if($_POST) {
	// collect all input and trim to remove leading and trailing whitespaces
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$msg = trim($_POST['message']);  
	$btn = trim($_POST['btn']);  
	$ip = $_SERVER['REMOTE_ADDR'];

  
	/* Change Here Your Email Address*/
	$to = "nicoarichu@gmail.com";

	// Prepare message
	$message = "You have received email from: ".$name.", ".$email.".<br />";
	$message .= "Message: <br />".$msg."<br /><br />";
	$message .= "IP: ".$ip."<br />";
	$headers = "From: info@nispotworks.com \n";
	$headers .= "Reply-To: $email \n";
	$headers .= "MIME-Version: 1.0 \n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1 \n";

	// Email Sent
	if(mail($to, $subject,$message, $headers)){
		if($btn=="Submit"){
			echo "Submit";
		}
		if($btn=="Enviar"){
			echo "Enviar";
		}
	}
	// Error Message
	else{ 
		if($btn=="Submit"){
			echo "NoSubmit";
		}
		if($btn=="Enviar"){
			echo "NoEnviar";
		}
	}
  
}

?>