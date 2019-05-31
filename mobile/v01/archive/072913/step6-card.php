<?php
$nearest_hospital_abroad = $_GET["nearest_hospital_abroad"];
$nearest_hospital_abroad_address = $_GET["nearest_hospital_abroad_address"];
$nearest_hospital_abroad_tel = $_GET["nearest_hospital_abroad_tel"];	
/* equivalent 911 */
$equivalent_911_abroad = $_GET["equivalent_911_abroad"];

/* abroad housing emergency contact */
$abroad_housing_contact = $_GET["abroad_housing_contact"];
$abroad_housing_address = $_GET["abroad_housing_address"];
$abroad_housing_tel = $_GET["abroad_housing_tel"];
$abroad_housing_mobile = $_GET["abroad_housing_mobile"];
$abroad_housing_email = $_GET["abroad_housing_email"];

printEmergencyCard($nearest_hospital_abroad, $nearest_hospital_abroad_address, $nearest_hospital_abroad_tel, $equivalent_911_abroad,$abroad_housing_contact, $abroad_housing_address, $abroad_housing_tel, $abroad_housing_mobile, $abroad_housing_email);

function printEmergencyCard($nearest_hospital_abroad, $nearest_hospital_abroad_address, $nearest_hospital_abroad_tel, $equivalent_911_abroad,$abroad_housing_contact, $abroad_housing_address, $abroad_housing_tel, $abroad_housing_mobile, $abroad_housing_email) {		
	
	/*$nearest_hospital_abroad = "Tri-Island Area Hospital";
	$nearest_hospital_abroad_address = "Tri-Island Area";
	$nearest_hospital_abroad_tel = "1800SKELETON";
	$equivalent_911_abroad = "911ABROAD";
	
	$abroad_housing_contact = "Elaine Marley";
	$abroad_housing_address = "Tri-Island Area";
	$abroad_housing_tel = "0987654321";
	$abroad_housing_mobile = "0987654321";
	$abroad_housing_email = "Elaine.Marley@islandgovernor.edu";*/
	
	$file = "card/ecstep6.png";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFrompng($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 12;
	
	header('Content-type: image/png');	
	imagettftext($source, $fontsize, 0, 90, 52, $textcolor, $font, $nearest_hospital_abroad);
	imagettftext($source, $fontsize, 0, 90, 74, $textcolor, $font, $nearest_hospital_abroad_address);
	imagettftext($source, $fontsize, 0, 90, 97, $textcolor, $font, $nearest_hospital_abroad_tel);
	imagettftext($source, $fontsize, 0, 150, 120, $textcolor, $font, $equivalent_911_abroad);
	
	imagettftext($source, $fontsize, 0, 90, 194, $textcolor, $font, $abroad_housing_contact);
	imagettftext($source, $fontsize, 0, 90, 218, $textcolor, $font, $abroad_housing_address);
	imagettftext($source, $fontsize, 0, 90, 242, $textcolor, $font, $abroad_housing_tel);
	imagettftext($source, $fontsize, 0, 90, 264, $textcolor, $font, $abroad_housing_mobile);
	imagettftext($source, $fontsize, 0, 90, 286, $textcolor, $font, $abroad_housing_email);	

	imagepng($source);
	imagedestroy($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>