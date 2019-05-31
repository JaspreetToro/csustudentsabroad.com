<?php
/* home u.s. campus contact */
$home_campus_contact = $_GET["home_campus_contact"];
$home_campus_address = $_GET["home_campus_address"];
$home_campus_tel = $_GET["home_campus_tel"];
$home_campus_mobile = $_GET["home_campus_mobile"];
$home_campus_email = $_GET["home_campus_email"];

/* closest u.s. embassy/ consulate */
$embassy_consulate = $_GET["embassy_consulate"];
$embassy_consulate_address = $_GET["embassy_consulate_address"];
$embassy_consulate_tel = $_GET["embassy_consulate_tel"];
$embassy_consulate_mobile = $_GET["embassy_consulate_mobile"];
$embassy_consulate_email = $_GET["embassy_consulate_email"];

printEmergencyCard($home_campus_contact, $home_campus_address, $home_campus_tel, $home_campus_mobile, $home_campus_email,$embassy_consulate, $embassy_consulate_address, $embassy_consulate_tel, $embassy_consulate_mobile, $embassy_consulate_email);

function printEmergencyCard($home_campus_contact, $home_campus_address, $home_campus_tel, $home_campus_mobile, $home_campus_email,$embassy_consulate, $embassy_consulate_address, $embassy_consulate_tel, $embassy_consulate_mobile, $embassy_consulate_email) {	

	/*$home_campus_contact = "Stan Stanman";
	$home_campus_address = "Tri-Island Area";
	$home_campus_tel = "1234567890";
	$home_campus_mobile = "1234567890";
	$home_campus_email = "Stan.Stanman@thesalesman.edu";
	
	$embassy_consulate = "Tri-Island Area Embassy";
	$embassy_consulate_address = "Tri-Island Area";
	$embassy_consulate_tel = "0987654321";	
	$embassy_consulate_mobile = "0987654321";	
	$embassy_consulate_email = "embassy@tri.island.area.edu";*/
		
	$file = "card/ecstep5.png";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFrompng($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 12;
	
	header('Content-type: image/png');
	imagettftext($source, $fontsize, 0, 90, 52, $textcolor, $font, $home_campus_contact);
	imagettftext($source, $fontsize, 0, 90, 74, $textcolor, $font, $home_campus_address);
	imagettftext($source, $fontsize, 0, 90, 97, $textcolor, $font, $home_campus_tel);
	imagettftext($source, $fontsize, 0, 90, 120, $textcolor, $font, $home_campus_mobile);
	imagettftext($source, $fontsize, 0, 90, 142, $textcolor, $font, $home_campus_email);

	imagettftext($source, $fontsize, 0, 90, 194, $textcolor, $font, $embassy_consulate);
	imagettftext($source, $fontsize, 0, 90, 218, $textcolor, $font, $embassy_consulate_address);
	imagettftext($source, $fontsize, 0, 90, 242, $textcolor, $font, $embassy_consulate_tel);
	imagettftext($source, $fontsize, 0, 90, 264, $textcolor, $font, $embassy_consulate_mobile);
	imagettftext($source, $fontsize, 0, 90, 286, $textcolor, $font, $embassy_consulate_email);

	imagepng($source);
	imagedestroy($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>