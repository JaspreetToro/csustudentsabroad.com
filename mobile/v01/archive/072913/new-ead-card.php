<?php

printEmergencyCard();

function printEmergencyCard() {	

	$full_name = "Guybrush Threepwood";
	$birth_month = "07";
	$birth_date = "10";
	$birth_year = "2013";
	$birth = $birth_month."/".$birth_date."/".$birth_year;
	$citizenship = "Pirate";
	$program_name = "Monkey Island";
	$passport_number = "S0T0A0N0";
	
	$file = "card/eapstepscard.jpg";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFromjpeg($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 12;
	
	header('Content-type: image/jpg');
	imagettftext($source, $fontsize, 0, 70, 143, $textcolor, $font, $full_name);
	imagettftext($source, $fontsize, 0, 110, 166, $textcolor, $font, $birth);
	//imagettftext($source, $fontsize, 0, 110, 166, $textcolor, $font, $birth_month);
	//imagettftext($source, $fontsize, 0, 130, 166, $textcolor, $font, $birth_date);
	//imagettftext($source, $fontsize, 0, 148, 166, $textcolor, $font, $birth_year);	
	imagettftext($source, $fontsize, 0, 100, 190, $textcolor, $font, $citizenship);
	imagettftext($source, $fontsize, 0, 98, 215, $textcolor, $font, $passport_number);
	imagettftext($source, $fontsize, 0, 18, 260, $textcolor, $font, $program_name);

	/*imagettftext($source, $fontsize, 0, $center+, $y, $textcolor, $font, $personal_emai);*/

	imagejpeg($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>