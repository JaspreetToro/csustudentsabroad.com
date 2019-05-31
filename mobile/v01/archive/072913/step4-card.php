<?php
/* insurance */
$insurance_company = $_GET["insurance_company"];
$policy_number = $_GET["policy_number"];
$emergency_phone = $_GET["emergency_phone"];

/* abroad/on-site program contact */
$abroad_program_contact = $_GET["abroad_program_contact"];
$abroad_program_address = $_GET["abroad_program_address"];
$abroad_program_tel = $_GET["abroad_program_tel"];
$abroad_program_mobile = $_GET["abroad_program_mobile"];
$abroad_program_email = $_GET["abroad_program_email"];

printEmergencyCard($insurance_company, $policy_number, $emergency_phone,$abroad_program_contact, $abroad_program_address, $abroad_program_tel, $abroad_program_mobile, $abroad_program_email);

function printEmergencyCard($insurance_company, $policy_number, $emergency_phone,$abroad_program_contact, $abroad_program_address, $abroad_program_tel, $abroad_program_mobile, $abroad_program_email) {	
	/*$insurance_company = "Life Insurance";
	$policy_number = "life1234567890";
	$emergency_phone = "0987654321";
	
	$abroad_program_contact = "LeChuck";
	$abroad_program_address = "Seven Seas";
	$abroad_program_tel = "1234567890";
	$abroad_program_mobile = "1234567890";
	$abroad_program_email = "LeChuck@fearsomepirate.edu";*/
	
	$file = "card/ecstep4.png";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFrompng($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 12;
	
	header('Content-type: image/png');
	imagettftext($source, $fontsize, 0, 132, 55, $textcolor, $font, $insurance_company);
	imagettftext($source, $fontsize, 0, 86, 78, $textcolor, $font, $policy_number);
	imagettftext($source, $fontsize, 0, 140, 101, $textcolor, $font, $emergency_phone);

	imagettftext($source, $fontsize, 0, 90, 186, $textcolor, $font, $abroad_program_contact);
	imagettftext($source, $fontsize, 0, 90, 210, $textcolor, $font, $abroad_program_address);
	imagettftext($source, $fontsize, 0, 90, 232, $textcolor, $font, $abroad_program_tel);
	imagettftext($source, $fontsize, 0, 90, 254, $textcolor, $font, $abroad_program_mobile);
	imagettftext($source, $fontsize, 0, 90, 278, $textcolor, $font, $abroad_program_email);
	imagepng($source);
	imagedestroy($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>