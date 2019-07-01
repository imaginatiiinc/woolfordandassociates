<?php

require_once('inc/class.phpmailer.php');
require_once('inc/class.smtp.php');

$errors = array();

// Test with your own email first
// $myemail = 'troy@lamproslabs.com';

// Then test with the client's email before changing to client
// $myemail = 'sbutler@blueskyci.com';

// Client email
$myemail = 'lwoolford@woolfordandassociates.com';

if(empty($_POST['name'])  || 
	empty($_POST['company']) ||
	empty($_POST['email']) || 
	empty($_POST['phone']) ||
	empty($_POST['comments'])) {
	$errors[] = "All fields are required";
}
 
$name = isset($_POST['name']) ? $_POST['name'] : '';
$company = isset($_POST['company']) ? $_POST['company'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$comments = isset($_POST['comments']) ? $_POST['comments'] : ''; 
 
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email))
{
	$errors[] = "Invalid email address";
}

header("content-type:application/json");

if( empty($errors)) {
	$mail = new PHPMailer();
	$mail->AddReplyTo("noreply@woolfordandassociates.com","Woolford and Associates");
	$mail->SetFrom('noreply@woolfordandassociates.com', 'Woolford and Associates');
	$mail->AddAddress($myemail);
	$mail->Subject    = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
		" Here are the details:\n Name: $name \n ".
		"Company: $company \n " .
		"Email: $email\n " .
		"Phone: $phone\n " .
		"Comments \n $comments";
	$mail->Body = $email_body;

	if(!$mail->Send()) {
		echo json_encode(array('status' => 'Error sending email, please try again later.'));
	} else {
		echo json_encode(array('status' => "ok"));
	}
} else {
	echo json_encode(array('status' => $errors));
}

?>