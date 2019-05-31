<?php

function printName()
{
	global $full_name, $birth, $citizenship, $program_name;	
	
	$name = $full_name;
	echo "<h1>".$name."</h1>";
	
	//header('Content-type: image/jpeg');
	$file = "card/emergencycard.jpg";
	list($width, $height) = getimagesize($file);
	$source = imageCreateFromjpeg($file);
	$center = $width / 2;
	$length = strlen($name);
	
	//echo "center $center";	
	
	// white background and blue text
	//$bg = imagecolorallocate($source, 255, 255, 255);
	
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	
	$font = 'card/timesbd.ttf';
	$text = $name;
	$y = 82;
	$fontsize = 10;
	//$start = $center - (($length/2) * ($fontsize - 36) );
	
	//x = $start
	$start = 115;
	imagettftext($source, $fontsize, 0, $start, $y, $textcolor, $font, $text);
	
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$text = date("F j, Y"); 
	$y = 2315;
	$x = 2590;
	$fontsize = 31;
	
	imagettftext($source, $fontsize, 0, $x, $y, $textcolor, $font, $text);
	
	imagejpeg($source);
	//imagepng($source);
	imagedestroy($source);
	echo "<img src=$source>";
}

function printEmergencyCard() {
	global $full_name, $birth, $citizenship, $program_name;
	
	echo $full_name;
	//Get the blank coupon
	
	//header('Content-type: image/jpeg');
	$file = "card/emergencycard.jpg";
	$source = imageCreateFromjpeg($file);
	
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$text = $name;
	$y = 82;
	$fontsize = 10;
	//$start = $center - (($length/2) * ($fontsize - 36) );
	
	//x = $start
	$start = 115;	
	imagettftext($source, $fontsize, 0, $start, $y, $textcolor, $font, $full_name);
	/*
	//define the receiver of the email
	$to = '$email_address';
	//define the subject of the email
	$subject = 'Your coupon';
	//create a boundary string. It must be unique
	//so we use the MD5 algorithm to generate a random hash
	$random_hash = md5(date('r', time()));
	//define the headers we want passed. Note that they are separated with \r\n
	$headers = "From: joe@joesomebody.com\r\nReply-To: joe@joesomeboy.com";
	//add boundary string and mime type specification
	$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";
	//read the atachment file contents into a string,
	//encode it with MIME base64,
	//and split it into smaller chunks*/
	
	//ob_start();
	imagejpeg($source);
	//$i = ob_get_contents();
	//$attachment = chunk_split(base64_encode($i));
		//define the body of the message.
	//ob_clean();	
	
	
}

if($_POST['special_code'] == "CenterGlobal7") {
	
	$full_name = $_POST["full_name"];
	$birth = $_POST["birth"];
	$citizenship = $_POST["citizenship"];
	$program_name = $_POST["program_name"];
	
	//$student_info = array($full_name, $birth, $citizenship, $program_name);
	
	$abroad_program_address = $_POST["abroad_program_address"];
	$abroad_program_tel = $_POST["abroad_program_tel"];
	$abroad_program_mobile = $_POST["abroad_program_mobile"];
	$abroad_program_email = $_POST["abroad_program_email"];
	
	//$abroad_program_info = array($abroad_program_address, $abroad_program_tel, $abroad_program_mobil, $abroad_program_email);
	
	$abroad_housing_address = $_POST["abroad_housing_address"];
	$abroad_housing_tel = $_POST["abroad_housing_tel"];
	$abroad_housing_mobile = $_POST["abroad_housing_mobile"];
	$abroad_housing_email = $_POST["abroad_housing_email"];
	
	//$abroad_housing_info = array($abroad_housing_address, $abroad_housing_tel, $abroad_housing_mobil, $abroad_housing_email);
	
	$home_campus_address = $_POST["home_campus_address"];
	$home_campus_tel = $_POST["home_campus_tel"];
	$home_campus_mobile = $_POST["home_campus_mobile"];
	$home_campus_email = $_POST["home_campus_email"];

	//$home_campus_info = array($home_campus_address, $home_campus_tel, $home_campus_mobil, $home_campus_email);

	$family_address = $_POST["family_address"];
	$family_tel = $_POST["family_tel"];
	$family_mobile = $_POST["family_mobile"];
	$family_email = $_POST["family_email"];

	//$family_info = array($family_address, $family_tel, $family_mobil, $family_email);

	$insurance_company = $_POST["insurance_company"];
	$policy_number = $_POST["policy_number"];
	$emergency_phone = $_POST["emergency_phone"];
	
	//$insurance_info = array($insurance_company, $policy_number, $emergency_phone);
	
	$embassy_consulate_address = $_POST["embassy_consulate_address"];
	$embassy_consulate_tel = $_POST["embassy_consulate_tel"];		
	$equivalent_911_abroad = $_POST["equivalent_911_abroad"];
	
	//$embassy_info = array($embassy_consulate_address, $embassy_consulate_tel, $equivalent_911_abroad);
	
	$nearest_hospital_abroad_address = $_POST["nearest_hospital_abroad_address"];
	$nearest_hospital_abroad_tel = $_POST["nearest_hospital_abroad_tel"];
	
	//$nearest_hospital_info = array($nearest_hospital_abroad_address, $earest_hospital_abroad_tel);
	
	$passport_number = $_POST["passport_number"];
	$blood_type = $_POST["blood_type"];
	$medical_conditions = $_POST["medical_conditions"];
	$wishes = $_POST["wishes"];
	$personal_email = $_POST["personal_email"];

	//$personal_info = array($passport_number, $blood_type, $medical_conditions, $wishes, $personal_email);
	
	printEmergencyCard();
}?>