<?php
$family_contact = $_GET["family_contact"];
$family_address = $_GET["family_address"];
$family_tel = $_GET["family_tel"];
$family_mobile = $_GET["family_mobile"];
$family_email = $_GET["family_email"];

printEmergencyCard($family_contact, $family_address, $family_tel, $family_mobile, $family_email);

function printEmergencyCard($family_contact, $family_address, $family_tel, $family_mobile, $family_email) {	
	/*$family_contact = "Elaine Marley";
	$family_address = "Tri Island Area";
	$family_tel = "0987654321";
	$family_mobile = "0987654321";
	$family_email = "Elaine.Marley@islandgovernor.edu";*/
	
	$file = "card/ecstep3.png";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFrompng($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 12;	

	imagettftext($source, $fontsize, 0, 100, 64, $textcolor, $font, $family_contact);
	imagettftext($source, $fontsize, 0, 100, 90, $textcolor, $font, $family_address);
	imagettftext($source, $fontsize, 0, 100, 115, $textcolor, $font, $family_tel);
	imagettftext($source, $fontsize, 0, 100, 140, $textcolor, $font, $family_mobile);
	imagettftext($source, $fontsize, 0, 100, 165, $textcolor, $font, $family_email);

	imagepng($source);
	imagedestroy($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>