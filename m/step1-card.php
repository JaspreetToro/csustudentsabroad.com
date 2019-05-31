<?php

$full_name = $_GET["full_name"];    
$birth = $_GET["birth"];
$birth_month = $_GET["birth_month"];
$birth_date = $_GET["birth_date"];
$birth_year = $_GET["birth_year"];
$citizenship = $_GET["citizenship"];
$passport_number = $_GET["passport_number"];
$program_name = $_GET["program_name"];

printEmergencyCard($full_name, $birth, $birth_month, $birth_date, $birth_year, $citizenship, $passport_number, $program_name);

function printEmergencyCard($full_name, $birth, $birth_month, $birth_date, $birth_year, $citizenship, $passport_number, $program_name) {	
	$birth = $birth_month."/".$birth_date."/".$birth_year;
	/*$full_name = "Guybrush Threepwood";
	$birth_month = "07";
	$birth_date = "10";
	$birth_year = "2013";
	$birth = $birth_month."/".$birth_date."/".$birth_year;
	$citizenship = "Pirate";
	$passport_number = "P5I6R7A8T9E";
	$program_name = "Monkey Island";*/	
	
	$file = "card/ecstep1.png";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFrompng($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 12;
	
	header('Content-type: image/png');
	imagettftext($source, $fontsize, 0, 230, 143, $textcolor, $font, $full_name);
	imagettftext($source, $fontsize, 0, 274, 166, $textcolor, $font, $birth);
	/*imagettftext($source, $fontsize, 0, 158, 95, $textcolor, $font, $birth_month);
	imagettftext($source, $fontsize, 0, 178, 95, $textcolor, $font, $birth_date);
	imagettftext($source, $fontsize, 0, 198, 95, $textcolor, $font, $birth_year);*/	
	imagettftext($source, $fontsize, 0, 264, 190, $textcolor, $font, $citizenship);
	imagettftext($source, $fontsize, 0, 258, 213, $textcolor, $font, $passport_number);
	imagettftext($source, $fontsize, 0, 184, 258, $textcolor, $font, $program_name);	

	imagepng($source);
	imagedestroy($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>
