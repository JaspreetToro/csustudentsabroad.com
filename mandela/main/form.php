<?php
/*
* Ajax form submit
*/

# request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
	if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['institution']) AND isset($_POST['department']) AND isset($_POST['message'])) {
		$to = 'jamesvales226@gmail.com';

		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$institution = filter_var($_POST['institution'], FILTER_SANITIZE_STRING);
		$department = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$subject = "Message from ".$name. " about UniWorldWide.org ";
		
		$comment = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		
		$message = "Name: $name \n Institution: $institution \n Email: $email \n";
		$message .= "Institution: $institution\n"; 
		$message .= "Department: $department\n"; 
		$message .= "Message: $comment\n"; 
		
		$sent = email($to, $email, $name, $subject, $message);
		if ($sent) {
			echo 'Thank you! We have received your message';
		} else {
			echo 'Sorry, unexpected error. Please try again later!';
		}
	}
	else {
		echo 'All Fields are required';
	}
	return;
}

/**
 * email function
 *
 * @return bool | void
 **/
function email($to, $from_mail, $from_name, $subject, $message){
	$header = array();
	$header[] = "MIME-Version: 1.0";
	$header[] = "From: {$from_name}<{$from_mail}>";
	/* Set message content type HTML*/
	$header[] = "Content-type:text/html; charset=iso-8859-1";
	$header[] = "Content-Transfer-Encoding: 7bit";
	if( mail($to, $subject, $message, implode("\r\n", $header)) ) return true; 
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>UniWorldWide: International Higher Education Collabrotion - Get Involved! - Contact Form</title>
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body id="form_container">
	<div id="form_wrapper">
		<div class="alert"></div>
		<form id="form" action="" method="post">
        	<section>
                <div>
                    <label for="name"><span>Name*:</span></label>
                    <input placeholder="Name" type="text" name="name" required>                    
                </div>
                <div>
                    <label for="institition"><span>Institution*:</span></label>
                    <input placeholder="Institution" type="text" name="institution" required>                   
                </div>
                <div>
                    <label for="department"><span>Department*:</span></label>
                    <input placeholder="Department" type="text" name="department" required>                   
                </div>
                <div>
                    <label for="email"><span>Email*:</span></label>
                    <input placeholder="Email address" type="email" name="email" required>
                    
                </div>
                <div>
                    <label for="message"><span>Message*:</span></label>
                    <textarea placeholder="Type your message here...." name="message" required></textarea>
                    
                </div>                
            </section>
            <section>
                <div>
                    <button name="submit" type="submit" id="submit">Send Email</button>
                </div>
            </section>
            
		</form>
		<p class="required">Note: * Fields are required</p>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="javascript/form.js"></script>    
</body>
</html>