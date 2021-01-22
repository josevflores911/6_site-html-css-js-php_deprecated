<?php 
	// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","mail.example.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'example@YourDomain.com');

	
	$to = $_POST['to'];
	$from = $_POST['from'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$body = "This is an automated message. Please don´t reply to this email. \n\n $message";

	$from_new = "From: $from";

	mail($to,$subject,$body,$from_new);

	echo "Message Sent! <a href='index.html'> Click here</a> to send another email";
 ?>