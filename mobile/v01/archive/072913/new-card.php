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
	
	$abroad_program_contact = "LeChuck";
	$abroad_program_address = "Seven Seas";
	$abroad_program_tel = "1234567890";
	$abroad_program_mobile = "1234567890";
	$abroad_program_email = "LeChuck@fearsomepirate.edu";
	
	$abroad_housing_contact = "Elaine Marley";
	$abroad_housing_address = "Tri-Island Area";
	$abroad_housing_tel = "0987654321";
	$abroad_housing_mobile = "0987654321";
	$abroad_housing_email = "Elaine.Marley@islandgovernor.edu";
	
	$home_campus_contact = "Stan Stanman";
	$home_campus_address = "Tri-Island Area";
	$home_campus_tel = "1234567890";
	$home_campus_mobile = "1234567890";
	$home_campus_email = "Stan.Stanman@thesalesman.edu";

	$family_contact = "Elaine Marley";
	$family_address = "Tri-Island Area";
	$family_tel = "0987654321";
	$family_mobile = "0987654321";
	$family_email = "Elaine.Marley@islandgovernor.edu";

	$insurance_company = "Life Insurance";
	$policy_number = "stan1234567890";
	$emergency_phone = "0987654321";
	
	$embassy_consulate = "Tri-Island Area Embassy";
	$embassy_consulate_address = "Tri-Island Area";
	$embassy_consulate_tel = "0987654321";	
	$embassy_consulate_mobile = "0987654321";	
	$embassy_consulate_email = "embassy@tri.island.area.edu";	
	
	$equivalent_911_abroad = "STAN911";
	
	$nearest_hospital_abroad = "Tri-Island Area Hospital";
	$nearest_hospital_abroad_address = "Tri-Island Area";
	$nearest_hospital_abroad_tel = "1800SKELETON";
	
	$passport_number = "S0T0A0N0";
	$blood_type = "Blood";
	$medical_conditions = "LeChuck Syndrome";	
	
	$personal_email = "Guybrush.Threepwood@monkeyisland.edu";
	
	$wishes = "Wishes to get Treasure";
	$wishes_address = "Tri-Island Area";
	$wishes_tel = "0987654321";
	$wishes_mobile = "0987654321";
	$wishes_email = "Rapp.Scallion@islandcook.edu";
	
	
	$file = "card/emergencycard.jpg";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFromjpeg($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 10;
	$fontsize_sm = 7;
	
	header('Content-type: image/jpg');
	imagettftext($source, $fontsize, 0, 132, 82, $textcolor, $font, $full_name);
	imagettftext($source, $fontsize, 0, 158, 95, $textcolor, $font, $birth);
	//imagettftext($source, $fontsize, 0, 158, 95, $textcolor, $font, $birth_month);
	//imagettftext($source, $fontsize, 0, 178, 95, $textcolor, $font, $birth_date);
	//imagettftext($source, $fontsize, 0, 198, 95, $textcolor, $font, $birth_year);	
	imagettftext($source, $fontsize, 0, 154, 109, $textcolor, $font, $citizenship);
	imagettftext($source, $fontsize, 0, 148, 122, $textcolor, $font, $passport_number);
	imagettftext($source, $fontsize, 0, 105, 148, $textcolor, $font, $program_name);

	imagettftext($source, $fontsize, 0, 68, 209, $textcolor, $font, $blood_type);
	imagettftext($source, $fontsize, 0, 19, 234, $textcolor, $font, $medical_conditions);
	
	imagettftext($source, $fontsize, 0, 58, 270, $textcolor, $font, $wishes);
	imagettftext($source, $fontsize, 0, 58, 283, $textcolor, $font, $wishes_address);
	imagettftext($source, $fontsize, 0, 58, 298, $textcolor, $font, $wishes_tel);
	imagettftext($source, $fontsize, 0, 58, 312, $textcolor, $font, $wishes_mobile);
	imagettftext($source, $fontsize, 0, 58, 327, $textcolor, $font, $wishes_email);

	imagettftext($source, $fontsize, 0, 58, 379, $textcolor, $font, $family_contact);
	imagettftext($source, $fontsize, 0, 58, 393, $textcolor, $font, $family_address);
	imagettftext($source, $fontsize, 0, 58, 408, $textcolor, $font, $family_tel);
	imagettftext($source, $fontsize, 0, 58, 422, $textcolor, $font, $family_mobile);
	imagettftext($source, $fontsize, 0, 58, 437, $textcolor, $font, $family_email);

	imagettftext($source, $fontsize, 0, $center+80, 32, $textcolor, $font, $insurance_company);
	imagettftext($source, $fontsize, 0, $center+80, 45, $textcolor, $font, $policy_number);
	imagettftext($source, $fontsize, 0, $center+80, 58, $textcolor, $font, $emergency_phone);
	
	imagettftext($source, $fontsize, 0, $center+50, 107, $textcolor, $font, $abroad_program_contact);
	imagettftext($source, $fontsize, 0, $center+50, 120, $textcolor, $font, $abroad_program_address);
	imagettftext($source, $fontsize, 0, $center+50, 133, $textcolor, $font, $abroad_program_tel);
	imagettftext($source, $fontsize, 0, $center+50, 146, $textcolor, $font, $abroad_program_mobile);
	imagettftext($source, $fontsize, 0, $center+50, 159, $textcolor, $font, $abroad_program_email);

	imagettftext($source, $fontsize, 0, $center+50, 201, $textcolor, $font, $home_campus_contact);
	imagettftext($source, $fontsize, 0, $center+50, 214, $textcolor, $font, $home_campus_address);
	imagettftext($source, $fontsize, 0, $center+50, 227, $textcolor, $font, $home_campus_tel);
	imagettftext($source, $fontsize, 0, $center+50, 240, $textcolor, $font, $home_campus_mobile);
	imagettftext($source, $fontsize, 0, $center+50, 253, $textcolor, $font, $home_campus_email);
	
	/*imagettftext($source, $fontsize, 0, $start, $y, $textcolor, $font, $embassy_consulate);*/
	imagettftext($source, $fontsize, 0, $center+50, 282, $textcolor, $font, $embassy_consulate);
	imagettftext($source, $fontsize, 0, $center+50, 295, $textcolor, $font, $embassy_consulate_address);
	imagettftext($source, $fontsize, 0, $center+50, 308, $textcolor, $font, $embassy_consulate_tel);
	imagettftext($source, $fontsize, 0, $center+50, 323, $textcolor, $font, $embassy_consulate_mobile);
	imagettftext($source, $fontsize, 0, $center+50, 335, $textcolor, $font, $embassy_consulate_email);
	
	imagettftext($source, $fontsize, 0, $center+50, 372, $textcolor, $font, $nearest_hospital_abroad);
	imagettftext($source, $fontsize, 0, $center+50, 385, $textcolor, $font, $nearest_hospital_abroad_address);
	imagettftext($source, $fontsize, 0, $center+50, 398, $textcolor, $font, $nearest_hospital_abroad_tel);
	imagettftext($source, $fontsize, 0, $center+85, 411, $textcolor, $font, $equivalent_911_abroad);
	
	imagettftext($source, $fontsize, 0, $center+50, 455, $textcolor, $font, $abroad_housing_contact);
	imagettftext($source, $fontsize, 0, $center+50, 468, $textcolor, $font, $abroad_housing_address);
	imagettftext($source, $fontsize, 0, $center+50, 481, $textcolor, $font, $abroad_housing_tel);
	imagettftext($source, $fontsize, 0, $center+50, 494, $textcolor, $font, $abroad_housing_mobile);
	imagettftext($source, $fontsize, 0, $center+50, 507, $textcolor, $font, $abroad_housing_email);	
	
	/*imagettftext($source, $fontsize, 0, $center+, $y, $textcolor, $font, $personal_emai);*/

	imagepng($source);
	//sendEmail($source, $to_email, $from_email, $subject, $full_name);
}
?>