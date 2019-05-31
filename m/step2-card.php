<?php
$blood_type = $_GET["blood_type"];
$medical_conditions = $_GET["medical_conditions"];

/* Primary */
$wishes = $_GET["wishes"];
$wishes_address = $_GET["wishes_address"];
$wishes_tel = $_GET["wishes_tel"];
$wishes_mobile = $_GET["wishes_mobile"];
$wishes_email = $_GET["wishes_email"];
		
printEmergencyCard($blood_type, $medical_conditions,$wishes, $wishes_address, $wishes_tel, $wishes_mobile, $wishes_email);

function printEmergencyCard($blood_type, $medical_conditions,$wishes, $wishes_address, $wishes_tel, $wishes_mobile, $wishes_email) {	

	/*$blood_type = "AB";
	$medical_conditions = "LeChuck Syndrome";		
	
	$wishes = "Rap Scallion";
	$wishes_address = "Tri-Island Area";
	$wishes_tel = "0987654321";
	$wishes_mobile = "0987654321";
	$wishes_email = "Rapp.Scallion@islandcook.edu";	*/

	$file = "card/ecstep2.png";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFrompng($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 12;
	
	header('Content-type: image/png');
	imagettftext($source, $fontsize, 0, 120, 65, $textcolor, $font, $blood_type);
	imagettftext($source, $fontsize, 0, 34, 110, $textcolor, $font, $medical_conditions);
	
	imagettftext($source, $fontsize, 0, 100, 170, $textcolor, $font, $wishes);
	imagettftext($source, $fontsize, 0, 100, 196, $textcolor, $font, $wishes_address);
	imagettftext($source, $fontsize, 0, 100, 221, $textcolor, $font, $wishes_tel);
	imagettftext($source, $fontsize, 0, 100, 246, $textcolor, $font, $wishes_mobile);
	imagettftext($source, $fontsize, 0, 100, 271, $textcolor, $font, $wishes_email);
	
	imagepng($source);
	imagedestroy($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>