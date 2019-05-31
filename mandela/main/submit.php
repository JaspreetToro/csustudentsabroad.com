<?php
$error = array();
$data = array();

if (empty($_POST['name'])) {
	$errors['name'] = 'Name is required.'; }
if (empty($_POST['email'])) {
	$errors['email'] = 'Email is required.'; }
if (!empty($_POST['email'])) {	
	if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $_POST['email'])) {
		$errors['email'] = "Email is invalid"; }		
}
if (empty($_POST['comment'])) {
	$errors['comment'] = 'Comment is required.'; }

if ( ! empty($errors)) {
	$data['success'] = false;
	$data['errors']  = $errors;
} else {
	
	$to = 'uniworldwide.org@globaled.us';

	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$institution = filter_var($_POST['institution'], FILTER_SANITIZE_STRING);
	$department = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$subject = "Message from ".$name. " about UniWorldWide.org ";
	
	$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
	
	$email_message = "Name: $name <br /> Email: $email <br />";
	
	if(strcmp($institution, "") != 0)
		$email_message .= "Institution: $institution<br />"; 
	if(strcmp($department, "") != 0)
		$email_message .= "Department: $department<br />"; 
	if(strcmp($comment, "") != 0)
		$email_message .= "Comment: $comment<br />"; 
	
	$sent = email($to, $email, $name, $subject, $email_message);
	if ($sent) {
		$data['emailsuccess'] = 'Thank you! We have received your message';
	} else {
		$data['emailsuccess'] = 'Sorry, unexpected error. Please try again later!';
	}

	$data['success'] = true;
	$data['message'] = "<div class='success-block'>Thank you! We have received your message</div>";
}

echo json_encode($data);

function email($to, $from_mail, $from_name, $subject, $email_message){
	$header = array();
	$header[] = "MIME-Version: 1.0";
	$header[] = "From: {$from_name}<{$from_mail}>";
	$header[] = "Content-type:text/html; charset=iso-8859-1";
	//$header[] = "Content-Transfer-Encoding: 7bit";
	if( mail($to, $subject, $email_message, implode("\r\n", $header)) ) return true; 
}
?>