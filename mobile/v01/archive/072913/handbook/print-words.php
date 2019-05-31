<?php
	include_once("lib/common-func.php");
    include("lib/conn-data.php");
	/* Page Title and Header */
	$pageTitle = "Words To Know";
	
printEmergencyCard();

function printEmergencyCard() {	
	
	$file = "card/emergencycard.jpg";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFromjpeg($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 9;
	$fontsize_sm = 7;
	
	header('Content-type: image/jpeg');
	imagettftext($source, $fontsize, 0, 122, 94, $textcolor, $font, $full_name);
	imagettftext($source, $fontsize, 0, 122, 106, $textcolor, $font, $birth);
	imagettftext($source, $fontsize, 0, 122, 118, $textcolor, $font, $citizenship);
	imagettftext($source, $fontsize, 0, 122, 130, $textcolor, $font, $passport_number);
	imagettftext($source, $fontsize, 0, 48, 155, $textcolor, $font, $program_name);

	imagettftext($source, $fontsize, 0, 122, 184, $textcolor, $font, $blood_type);
	imagettftext($source, $fontsize, 0, 48, 210, $textcolor, $font, $medical_conditions);
	
	imagettftext($source, $fontsize, 0, 122, 240, $textcolor, $font, $wishes);
	imagettftext($source, $fontsize, 0, 122, 252, $textcolor, $font, $wishes_address);
	imagettftext($source, $fontsize, 0, 122, 264, $textcolor, $font, $wishes_tel);
	imagettftext($source, $fontsize, 0, 122, 276, $textcolor, $font, $wishes_mobile);
	imagettftext($source, $fontsize_sm, 0, 122, 288, $textcolor, $font, $wishes_email);

	imagettftext($source, $fontsize, 0, 122, 318, $textcolor, $font, $family_contact);
	imagettftext($source, $fontsize, 0, 122, 330, $textcolor, $font, $family_address);
	imagettftext($source, $fontsize, 0, 122, 342, $textcolor, $font, $family_tel);
	imagettftext($source, $fontsize, 0, 122, 354, $textcolor, $font, $family_mobile);
	imagettftext($source, $fontsize_sm, 0, 122, 366, $textcolor, $font, $family_email);

	imagettftext($source, $fontsize, 0, 122, 396, $textcolor, $font, $insurance_company);
	imagettftext($source, $fontsize, 0, 122, 408, $textcolor, $font, $policy_number);
	imagettftext($source, $fontsize, 0, 122, 420, $textcolor, $font, $emergency_phone);
	
	imagettftext($source, $fontsize, 0, $center+80, 94, $textcolor, $font, $abroad_program_contact);
	imagettftext($source, $fontsize, 0, $center+80, 106, $textcolor, $font, $abroad_program_address);
	imagettftext($source, $fontsize, 0, $center+80, 118, $textcolor, $font, $abroad_program_tel);
	imagettftext($source, $fontsize, 0, $center+80, 130, $textcolor, $font, $abroad_program_mobile);
	imagettftext($source, $fontsize_sm, 0, $center+80, 142, $textcolor, $font, $abroad_program_email);

	imagettftext($source, $fontsize, 0, $center+80, 168, $textcolor, $font, $home_campus_contact);
	imagettftext($source, $fontsize, 0, $center+80, 180, $textcolor, $font, $home_campus_address);
	imagettftext($source, $fontsize, 0, $center+80, 192, $textcolor, $font, $home_campus_tel);
	imagettftext($source, $fontsize, 0, $center+80, 204, $textcolor, $font, $home_campus_mobile);
	imagettftext($source, $fontsize_sm, 0, $center+80, 216, $textcolor, $font, $home_campus_email);
	
	/*imagettftext($source, $fontsize, 0, $start, $y, $textcolor, $font, $embassy_consulate);*/
	imagettftext($source, $fontsize, 0, $center+80, 244, $textcolor, $font, $embassy_consulate);
	imagettftext($source, $fontsize, 0, $center+80, 256, $textcolor, $font, $embassy_consulate_address);
	imagettftext($source, $fontsize, 0, $center+80, 268, $textcolor, $font, $embassy_consulate_tel);
	//imagettftext($source, $fontsize, 0, $center+80, 278, $textcolor, $font, $embassy_consulate_mobile);
	imagettftext($source, $fontsize_sm, 0, $center+80, 280, $textcolor, $font, $embassy_consulate_email);
	
	imagettftext($source, $fontsize, 0, $center+80, 312, $textcolor, $font, $nearest_hospital_abroad);
	imagettftext($source, $fontsize, 0, $center+80, 322, $textcolor, $font, $nearest_hospital_abroad_address);
	imagettftext($source, $fontsize, 0, $center+80, 334, $textcolor, $font, $nearest_hospital_abroad_tel);
	imagettftext($source, $fontsize, 0, $center+134, 346, $textcolor, $font, $equivalent_911_abroad);
	
	imagettftext($source, $fontsize, 0, $center+80, 374, $textcolor, $font, $abroad_housing_contact);
	imagettftext($source, $fontsize, 0, $center+80, 386, $textcolor, $font, $abroad_housing_address);
	imagettftext($source, $fontsize, 0, $center+80, 398, $textcolor, $font, $abroad_housing_tel);
	imagettftext($source, $fontsize, 0, $center+80, 410, $textcolor, $font, $abroad_housing_mobile);
	imagettftext($source, $fontsize_sm, 0, $center+80, 422, $textcolor, $font, $abroad_housing_email);	
	
	/*imagettftext($source, $fontsize, 0, $center+, $y, $textcolor, $font, $personal_emai);*/

	imagejpeg($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>