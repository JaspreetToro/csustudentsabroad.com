<?php

function printName($name, $file)
{
	header('Content-type: image/jpeg');
	list($width, $height) = getimagesize($file);
	$source = imageCreateFromjpeg($file);
	$center = $width / 2;
	$length = strlen($name);
	
	//echo "center $center";	
	
	// white background and blue text
	//$bg = imagecolorallocate($source, 255, 255, 255);
	
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	
	$font = 'timesbd.ttf';
	$text = $name;
	$y = 82;
	$fontsize = 10;
	//$start = $center - (($length/2) * ($fontsize - 36) );
	
	//x = $start
	$start = 115;
	imagettftext($source, $fontsize, 0, $start, $y, $textcolor, $font, $text);
	
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'arial.ttf';
	$text = date("F j, Y"); 
	$y = 2315;
	$x = 2590;
	$fontsize = 31;
	
	imagettftext($source, $fontsize, 0, $x, $y, $textcolor, $font, $text);
	
	//imagejpeg($source);
	imagepng($source);
	imagedestroy($source);
}

if($_GET['special_code'] == "CenterGlobal7") 
	
	$full_name = $_GET["full_name"];
	$birth = $_GET["birth"];
	$citizenship = $_GET["citizenship"];
	$program_name = $_GET["program_name"];
	
	$abroad_program_address = $_GET["abroad_program_address"];
	$abroad_program_tel = $_GET["abroad_program_tel"];
	$abroad_program_mobile = $_GET["abroad_program_mobile"];
	$abroad_program_email = $_GET["abroad_program_email"];
	
	$abroad_housing_address = $_GET["abroad_housing_address"];
	$abroad_housing_tel = $_GET["abroad_housing_tel"];
	$abroad_housing_mobile = $_GET["abroad_housing_mobile"];
	$abroad_housing_email = $_GET["abroad_housing_email"];
	
	$home_campus_address = $_GET["home_campus_address"];
	$home_campus_tel = $_GET["home_campus_tel"];
	$home_campus_mobile = $_GET["home_campus_mobile"];
	$home_campus_email = $_GET["home_campus_email"];
	
	$family_address = $_GET["family_address"];
	$family_tel = $_GET["family_tel"];
	$family_mobile = $_GET["family_mobile"];
	$family_email = $_GET["family_email"];
	
	$insurance_company = $_GET["insurance_company"];
	$policy_number = $_GET["policy_number"];
	$emergency_phone = $_GET["emergency_phone"];
	
	$embassy_consulate_address = $_GET["embassy_consulate_address"];
	$embassy_consulate_tel = $_GET["embassy_consulate_tel"];
	
	$equivalent_911_abroad = $_GET["equivalent_911_abroad"];
	
	$nearest_hospital_abroad_address = $_GET["nearest_hospital_abroad_address"];
	$nearest_hospital_abroad_tel = $_GET["nearest_hospital_abroad_tel"];
	
	$passport_number = $_GET["passport_number"];
	$blood_type = $_GET["blood_type"];
	$medical_conditions = $_GET["medical_conditions"];
	$wishes = $_GET["wishes"];
	
	printName($_GET["full_name"], "emergencycard.jpg");
	/*$to =	 'jamesvales226@gmail.com';
	$subject =	 'PHP Mail Attachment Test';
	$bound_text =	"jimmyP123";
	$bound =	"--".$bound_text."\r\n";
	$bound_last =	"--".$bound_text."--\r\n";
		 
	$headers =	"From: admin@server.com\r\n";
	$headers .=	"MIME-Version: 1.0\r\n"
		."Content-Type: multipart/mixed; boundary=\"$bound_text\"";
		 
	$message .=	"If you can see this MIME than your client doesn't accept MIME types!\r\n"
		.$bound;
		 
	$message .=	"Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
		."Content-Transfer-Encoding: 7bit\r\n\r\n"
		."hey my <b>good</b> friend here is a picture of regal beagle\r\n"
		.$bound;
		 
	$file =	file_get_contents(printName($_GET["full_name"], "emergencycard.jpg"));
		 
	$message .=	"Content-Type: image/jpg; name=\"regal_004.jpg\"\r\n"
		."Content-Transfer-Encoding: base64\r\n"
		."Content-disposition: attachment; file=\"regal_004.jpg\"\r\n"
		."\r\n"
		.chunk_split(base64_encode($file))
		.$bound_last;
	
	mail($to, $subject, $message, $headers)*/

?>