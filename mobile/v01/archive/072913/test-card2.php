<?php 
//session_start();

include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$page_name = "Emergency Card";
$parent_name = "Study Abroad Student Handbook";
$menu = 2;

if ( isset($_GET['country']) || isset($_POST['country_name'])){
	 $country_name = ucwords($_GET['country']); 
	
	if ($country_name == "General") {
		$country_name = "Worldwide";	
		$country_param = "General";
	}
}

printHeader($page_name." - ".$parent_name, $menu, $country_name);
printBody();
printFooter();

function printBody() {
	global $country_name;
	global $country_param;

	//if ( isset($_POST['submit']) && $_GET['special_code'] == "CenterGlobal8"){	
		//print_r($_POST);
		$full_name = "Guybrush Threepwood";
		$birth_month = "07";
		$birth_date = "10";
		$birth_year = "2013";
		//$birth = $birth_month."/".$birth_date."/".$birth_year;
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
		
		$personal_email = "jamesvales226@gmail.com";
		
		$wishes = "Wishes to get Treasure";
		$wishes_address = "Tri-Island Area";
		$wishes_tel = "0987654321";
		$wishes_mobile = "0987654321";
		$wishes_email = "Rapp.Scallion@islandcook.edu";
	
		/**
		 * start: create card
		 */
		$file = "card/emergencycard.jpg";
		list($width, $height) = getimagesize($file);
		$center = $width / 2;	
		$center_y = $height / 2;
		$source = imageCreateFromjpeg($file);
		$textcolor = imagecolorallocate($source, 51, 51, 51);
		$font = 'card/arial.ttf';
		$fontsize = 9;
		$fontsize_sm = 7;
	
		imagettftext($source, $fontsize, 0, 132, 82, $textcolor, $font, $full_name);
		imagettftext($source, $fontsize, 0, 158, 95, $textcolor, $font, $birth_month);
		imagettftext($source, $fontsize, 0, 178, 95, $textcolor, $font, $birth_date);
		imagettftext($source, $fontsize, 0, 198, 95, $textcolor, $font, $birth_year);	
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
	
		/**
		 * end: create card
		 */
	
		/**
		 * start: send email
		 */
		$to_email = $personal_email;
		$from_email = "grhodes@globaled.us";
		$subject = "StudentsAbroad.com: Your Emergency Card";
	
		sendEmail($source, $to_email, $from_email, $subject, $full_name);
		/**
		 * end: send email
		 */
	//}		

?> 

<div id="wrapper_tier2">
<div id="main-content">
    <div class="country"> <span class="flag"><img class="country-flag" width="47px" height="26px" alt="<?php echo $country_name?>" src="handbook/images/country-flag/<?php echo $country_name?>-flag.gif" /></span> &nbsp;<span class="label"><?php echo $country_name?></span> </div>
    <div class="highlight">
        <div class="student-handbook">
            <div class="title sh-gradient sh-corner-top">Study Abroad<br />
                Student Handbook</div>
        </div>
    </div>
    <div id="scroller">
        <div id="content">
            <div>
                <div id="actual_content">
                    <h1 id="title">Emergency Card</h1>
                    <div id="content_container">
                        <p>Print out the Emergency Card. Fill it in. Leave a copy with your U.S. emergency contacts, with your abroad emergency contacts, and keep a copy with you at all times.</p>
                        <div id="emergency-card">
                            <?php sendEmail($source, $to_email, $from_email, $subject, $full_name) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of mainnavigation -->
    </div>
    <div id="sponsor"> <?php printBannerSponsor() ?> </div>
</div>
<?php
}

function sendEmail($source, $to_email, $from_email, $subject, $full_name) {
	//bad global variables!!! replace with OOP!
	global $full_name, $birth, $birth_month, $birth_date, $birth_year, $citizenship, $passport_number, $program_name;
	
	global $blood_type, $medical_conditions;
	
	global $wishes, $wishes_address, $wishes_tel, $wishes_mobile, $wishes_email;
	
	global $family_contact, $family_address, $family_tel, $family_mobile, $family_email;
	
	global $insurance_company, $policy_number, $emergency_phone;
	
	global $abroad_program_contact, $abroad_program_address, $abroad_program_tel, $abroad_program_mobile, $abroad_program_email;

	global $home_campus_contact, $home_campus_address, $home_campus_tel, $home_campus_mobile, $home_campus_email;
	
	global $embassy_consulate, $embassy_consulate_address, $embassy_consulate_tel, $embassy_consulate_mobile, $embassy_consulate_email;	

	global $nearest_hospital_abroad, $nearest_hospital_abroad_address, $nearest_hospital_abroad_tel, $equivalent_911_abroad;

	global $abroad_housing_contact, $abroad_housing_address, $abroad_housing_tel, $abroad_housing_mobile, $abroad_housing_email;
	
	//source: http://www.php.net/manual/en/ref.outcontrol.php
	//source: http://stackoverflow.com/questions/3409430/emailing-a-dynamically-created-image
	$to = $to_email;
	$from = $from_email;
	$subject = $subject;
	$name = $full_name;
	$random_hash = md5(date('r', time()));
    $headers .= "From: $from_email";
    $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";
	
	ob_start();
	imagejpeg($source);
	imagedestroy($source);
	$i = ob_get_contents();
	$attachment = chunk_split(base64_encode($i));
	ob_clean();
?>
--PHP-mixed-<?php echo $random_hash; ?> 
Content-Type: multipart/alternative; boundary="PHP-alt-<?php echo $random_hash; ?>"

--PHP-alt-<?php echo $random_hash; ?> 
Content-Type: text/plain; charset="iso-8859-1"
Content-Transfer-Encoding: 7bit

Hello <?php echo $name ?>!

Thank you for using StudentsAbroad.com!  Attached is a copy of your personalized emergency card based on the information you provided on our website.  **Please check this information before you depart and update it if anything changes.

Safe travels!

The Center for Global Education at UCLA is not responsible for any information on this template. Please double-check this information with your program coordinator to ensure that country emergency and hospital information is correct.  The user assumes any risk associated with this information at all times.

Student Information
<?php if(!empty($full_name)) { echo 'Student Name: "'.$full_name.'"<br />'; } ?> 
<?php echo 'Date of Birth: "'.$birth_month."/".$birth_date."/".$birth_year.'"<br />'; ?> 
<?php if(!empty($citizenship)) { echo 'Citizenship: "'.$citizenship.'"<br />'; } ?> 
<?php if(!empty($passport_number)) { echo 'Passport Number: "'.$passport_number.'"<br />'; } ?> 
<?php if(!empty($program_name)) { echo 'Program Name: "'.$program_name.'"<br />'; } ?>    
Medical Information
<?php if(!empty($blood_type)) { echo 'Blood Type: "'.$blood_type.'"<br />'; } ?> 
<?php if(!empty($medical_conditions)) { echo 'Medical Conditions: "'.$medical_conditions.'"<br />'; } ?>   
Primary Personal Contact
<?php if(!empty($wishes)) { echo 'Name: "'.$wishes.'"<br />'; } ?> 
<?php if(!empty($wishes_address)) { echo 'Address: "'.$wishes_address.'"<br />'; } ?> 
<?php if(!empty($wishes_tel)) { echo 'Phone: "'.$wishes_tel.'"<br />'; } ?> 
<?php if(!empty($wishes_mobile)) { echo 'Mobile: "'.$wishes_mobile.'"<br />'; } ?> 
<?php if(!empty($wishes_email)) { echo 'Email: "'.$wishes_email.'"<br />'; } ?> 
Secondary Personal Contact
<?php if(!empty($family_contact)) { echo 'Name: "'.$family_contact.'"<br />'; } ?> 
<?php if(!empty($family_address)) { echo 'Address: "'.$family_address.'"<br />'; } ?> 
<?php if(!empty($family_tel)) { echo 'Phone: "'.$family_tel.'"<br />'; } ?> 
<?php if(!empty($family_mobile)) { echo 'Mobile: "'.$family_mobile.'"<br />'; } ?> 
<?php if(!empty($family_email)) { echo 'Email: "'.$family_email.'"<br />'; } ?> 
Insurance Company
<?php if(!empty($insurance_company)) { echo 'Name: "'.$insurance_company.'"<br />'; } ?> 
<?php if(!empty($policy_number)) { echo 'Policy Number: "'.$policy_number.'"<br />'; } ?> 
<?php if(!empty($emergency_phone)) { echo '24 Hour Emergency Phone: "'.$emergency_phone.'"<br />'; } ?> 	
Abroad/ On-site Program Information
<?php if(!empty($abroad_program_contact)) { echo 'Name: "'.$abroad_program_contact.'"<br />'; } ?> 
<?php if(!empty($abroad_program_address)) { echo 'Address: "'.$abroad_program_address.'"<br />'; } ?> 
<?php if(!empty($abroad_program_tel)) { echo 'Phone: "'.$abroad_program_tel.'"<br />'; } ?> 
<?php if(!empty($abroad_program_mobile)) { echo 'Mobile: "'.$abroad_program_mobile.'"<br />'; } ?> 
<?php if(!empty($abroad_program_email)) { echo 'Email: "'.$abroad_program_email.'"<br />'; } ?> 
Home (U.S.) Campus Information
<?php if(!empty($home_campus_contact)) { echo 'Name: "'.$home_campus_contact.'"<br />'; } ?> 
<?php if(!empty($home_campus_address)) { echo 'Address: "'.$home_campus_address.'"<br />'; } ?> 
<?php if(!empty($home_campus_tel)) { echo 'Phone: "'.$home_campus_tel.'"<br />'; } ?> 
<?php if(!empty($home_campus_mobile)) { echo 'Mobile: "'.$home_campus_mobile.'"<br />'; } ?> 
<?php if(!empty($home_campus_email)) { echo 'Email: "'.$home_campus_email.'"<br />'; } ?> 
Closest U.S. Embassy/ Consulate to Program Location
<?php if(!empty($embassy_consulate)) { echo 'Name: "'.$embassy_consulate.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_address)) { echo 'Address: "'.$embassy_consulate_address.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_tel)) { echo 'Phone: "'.$embassy_consulate_tel.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_mobile)) { echo 'Mobile: "'.$embassy_consulate_mobile.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_email)) { echo 'Email: "'.$embassy_consulate_email.'"<br />'; } ?> 	
Nearest Hospital Abroad
<?php if(!empty($nearest_hospital_abroad)) { echo 'Name: "'.$nearest_hospital_abroad.'"<br />'; } ?>
<?php if(!empty($nearest_hospital_abroad_address)) { echo 'Address: "'.$nearest_hospital_abroad_address.'"<br />'; } ?> 
<?php if(!empty($nearest_hospital_abroad_tel)) { echo 'Phone: "'.$nearest_hospital_abroad_tel.'"<br />'; } ?> 
Equivalent of 9𢴏 Emergency Abroad
<?php if(!empty($equivalent_911_abroad)) { echo 'Phone: "'.$equivalent_911_abroad.'"<br />'; } ?> 
Abroad Housing Information
<?php if(!empty($abroad_housing_contact)) { echo 'Name: "'.$abroad_housing_contact.'"<br />'; } ?> 
<?php if(!empty($abroad_housing_address)) { echo 'Address: "'.$abroad_housing_address.'"<br />'; } ?> 
<?php if(!empty($abroad_housing_tel)) { echo 'Phone: "'.$abroad_housing_tel.'"<br />'; } ?> 
<?php if(!empty($abroad_housing_mobile)) { echo 'Mobile: "'.$abroad_housing_mobile.'"<br />'; } ?> 
<?php if(!empty($abroad_housing_email)) { echo 'Email: "'.$abroad_housing_email.'"<br />'; } ?> 
--PHP-alt-<?php echo $random_hash; ?> 
Content-Type: text/html; charset="iso-8859-1"
Content-Transfer-Encoding: 7bit
<p>Hello <?php echo $name ?>!</p>
<p>Thank you for using StudentsAbroad.com!  Attached is a copy of your personalized emergency card based on the information you provided on our website.  **Please check this information before you depart and update it if anything changes.</p>
<p>Safe travels!</p>
<p>The Center for Global Education at UCLA is not responsible for any information on this template. Please double-check this information with your program coordinator to ensure that country emergency and hospital information is correct.  The user assumes any risk associated with this information at all times.</p>
<p>
<b>Student Information</b><br/>
<?php if(!empty($full_name)) { echo 'Student Name: "'.$full_name.'"<br />'; } ?> 
<?php echo 'Date of Birth: "'.$birth_month."/".$birth_date."/".$birth_year.'"<br />'; ?> 
<?php if(!empty($citizenship)) { echo 'Citizenship: "'.$citizenship.'"<br />'; } ?> 
<?php if(!empty($passport_number)) { echo 'Passport Number: "'.$passport_number.'"<br />'; } ?> 
<?php if(!empty($program_name)) { echo 'Program Name: "'.$program_name.'"<br />'; } ?> 
</p>	
<p>    
<b>Medical Information</b><br/>
<?php if(!empty($blood_type)) { echo 'Blood Type: "'.$blood_type.'"<br />'; } ?> 
<?php if(!empty($medical_conditions)) { echo 'Medical Conditions: "'.$medical_conditions.'"<br />'; } ?> 
</p>	
<p>    
<b>Primary Personal Contact</b><br/>
<?php if(!empty($wishes)) { echo 'Name: "'.$wishes.'"<br />'; } ?> 
<?php if(!empty($wishes_address)) { echo 'Address: "'.$wishes_address.'"<br />'; } ?> 
<?php if(!empty($wishes_tel)) { echo 'Phone: "'.$wishes_tel.'"<br />'; } ?> 
<?php if(!empty($wishes_mobile)) { echo 'Mobile: "'.$wishes_mobile.'"<br />'; } ?> 
<?php if(!empty($wishes_email)) { echo 'Email: "'.$wishes_email.'"<br />'; } ?> 
</p>
<p>
<b>Secondary Personal Contact</b><br/>
<?php if(!empty($family_contact)) { echo 'Name: "'.$family_contact.'"<br />'; } ?> 
<?php if(!empty($family_address)) { echo 'Address: "'.$family_address.'"<br />'; } ?> 
<?php if(!empty($family_tel)) { echo 'Phone: "'.$family_tel.'"<br />'; } ?> 
<?php if(!empty($family_mobile)) { echo 'Mobile: "'.$family_mobile.'"<br />'; } ?> 
<?php if(!empty($family_email)) { echo 'Email: "'.$family_email.'"<br />'; } ?> 
</p>
<p>	
<b>Insurance Company</b><br/>
<?php if(!empty($insurance_company)) { echo 'Name: "'.$insurance_company.'"<br />'; } ?> 
<?php if(!empty($policy_number)) { echo 'Policy Number: "'.$policy_number.'"<br />'; } ?> 
<?php if(!empty($emergency_phone)) { echo '24 Hour Emergency Phone: "'.$emergency_phone.'"<br />'; } ?> 
</p>
<p>	
<b>Abroad/ On-site Program Information</b><br/>
<?php if(!empty($abroad_program_contact)) { echo 'Name: "'.$abroad_program_contact.'"<br />'; } ?> 
<?php if(!empty($abroad_program_address)) { echo 'Address: "'.$abroad_program_address.'"<br />'; } ?> 
<?php if(!empty($abroad_program_tel)) { echo 'Phone: "'.$abroad_program_tel.'"<br />'; } ?> 
<?php if(!empty($abroad_program_mobile)) { echo 'Mobile: "'.$abroad_program_mobile.'"<br />'; } ?> 
<?php if(!empty($abroad_program_email)) { echo 'Email: "'.$abroad_program_email.'"<br />'; } ?> 
</p>
<p>
<b>Home (U.S.) Campus Information</b><br/>
<?php if(!empty($home_campus_contact)) { echo 'Name: "'.$home_campus_contact.'"<br />'; } ?> 
<?php if(!empty($home_campus_address)) { echo 'Address: "'.$home_campus_address.'"<br />'; } ?> 
<?php if(!empty($home_campus_tel)) { echo 'Phone: "'.$home_campus_tel.'"<br />'; } ?> 
<?php if(!empty($home_campus_mobile)) { echo 'Mobile: "'.$home_campus_mobile.'"<br />'; } ?> 
<?php if(!empty($home_campus_email)) { echo 'Email: "'.$home_campus_email.'"<br />'; } ?> 
</p>
<p>
<b>Closest U.S. Embassy/ Consulate to Program Location</b><br/>
<?php if(!empty($embassy_consulate)) { echo 'Name: "'.$embassy_consulate.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_address)) { echo 'Address: "'.$embassy_consulate_address.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_tel)) { echo 'Phone: "'.$embassy_consulate_tel.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_mobile)) { echo 'Mobile: "'.$embassy_consulate_mobile.'"<br />'; } ?> 
<?php if(!empty($embassy_consulate_email)) { echo 'Email: "'.$embassy_consulate_email.'"<br />'; } ?> 
</p>
<p>	
<b>Nearest Hospital Abroad</b><br/>
<?php if(!empty($nearest_hospital_abroad)) { echo 'Name: "'.$nearest_hospital_abroad.'"<br />'; } ?></p>
<p> 
<?php if(!empty($nearest_hospital_abroad_address)) { echo 'Address: "'.$nearest_hospital_abroad_address.'"<br />'; } ?> 
<?php if(!empty($nearest_hospital_abroad_tel)) { echo 'Phone: "'.$nearest_hospital_abroad_tel.'"<br />'; } ?> 
<b>Equivalent of 9𢴏 Emergency Abroad</b><br/>
<?php if(!empty($equivalent_911_abroad)) { echo 'Phone: "'.$equivalent_911_abroad.'"<br />'; } ?> 
</p>
<p>	
<b>Abroad Housing Information</b><br/>
<?php if(!empty($full_namename)) { echo 'Name: "'.$abroad_housing_contact.'"<br />'; } ?> 
<?php if(!empty($full_namename)) { echo 'Address: "'.$abroad_housing_address.'"<br />'; } ?> 
<?php if(!empty($full_namename)) { echo 'Phone: "'.$abroad_housing_tel.'"<br />'; } ?> 
<?php if(!empty($full_namename)) { echo 'Mobile: "'.$abroad_housing_mobile.'"<br />'; } ?> 
<?php if(!empty($full_namename)) { echo 'Email: "'.$abroad_housing_email.'"<br />'; } ?> 
</p>
--PHP-alt-<?php echo $random_hash; ?>--

--PHP-mixed-<?php echo $random_hash; ?> 
Content-Type: image/jpeg; name="emergencycard.jpg" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

<?php echo $attachment; ?>
--PHP-mixed-<?php echo $random_hash; ?>--
<?php
	$message = ob_get_clean();
	$mail_sent = @mail( $to_email, $subject, $message, $headers );
	if($mail_sent == true) {
		printSuccess();
	} else {
		printFailed();
	};			
}

function printSuccess() {
?>
	<div class="form-step"><span>Step 2 of 2</span></div>
            <div class="form-instruction"><p>Your emergency card has been created successfully. We will contact you as soon as possible. Thank you for your interest in StudentsAbroad.com.</p></div>
<?php
}

function printFailed() {
?>
	<div class="form-step"><span>Step 2 of 2</span></div>
            <div class="form-instruction"><p>There was a problem creating your emergency card. Please <a href="contact.php">contact us</a> so we can further assist you. Thank you for your interest in StudentsAbroad.com.</p></div>
<?php
}
?>
