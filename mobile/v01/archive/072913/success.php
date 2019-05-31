<?php
include "lib/common.php";
include "lib/conn_data.php";

$full_name = $_GET["full_name"];
$birth = $_GET["birth"];

$citizenship = $_GET["citizenship"];
$program_name = $_GET["program_name"];
	
$abroad_program_contact = $_GET["abroad_program_contact"];
$abroad_program_address = $_GET["abroad_program_address"];
$abroad_program_tel = $_GET["abroad_program_tel"];
$abroad_program_mobile = $_GET["abroad_program_mobile"];
$abroad_program_email = $_GET["abroad_program_email"];

$abroad_housing_contact = $_GET["abroad_housing_contact"];
$abroad_housing_address = $_GET["abroad_housing_address"];
$abroad_housing_tel = $_GET["abroad_housing_tel"];
$abroad_housing_mobile = $_GET["abroad_housing_mobile"];
$abroad_housing_email = $_GET["abroad_housing_email"];

$home_campus_contact = $_GET["home_campus_contact"];
$home_campus_address = $_GET["home_campus_address"];
$home_campus_tel = $_GET["home_campus_tel"];
$home_campus_mobile = $_GET["home_campus_mobile"];
$home_campus_email = $_GET["home_campus_email"];

$family_contact = $_GET["family_contact"];
$family_address = $_GET["family_address"];
$family_tel = $_GET["family_tel"];
$family_mobile = $_GET["family_mobile"];
$family_email = $_GET["family_email"];

$insurance_company = $_GET["insurance_company"];
$policy_number = $_GET["policy_number"];
$emergency_phone = $_GET["emergency_phone"];

$embassy_consulate = $_GET["embassy_consulate"];
$embassy_consulate_address = $_GET["embassy_consulate_address"];
$embassy_consulate_tel = $_GET["embassy_consulate_tel"];		
$equivalent_911_abroad = $_GET["equivalent_911_abroad"];

$nearest_hospital_abroad_address = $_GET["nearest_hospital_abroad_address"];
$nearest_hospital_abroad_tel = $_GET["nearest_hospital_abroad_tel"];

$passport_number = $_GET["passport_number"];
$blood_type = $_GET["blood_type"];
$medical_conditions = $_GET["medical_conditions"];
$wishes = $_GET["wishes"];
$personal_email = $_GET["personal_email"];

$country_code = $_GET["country_code"];

$to_email = $personal_email;
$from_email = "GuyThreepwood@studentsabroad.com";
$subject = "Your Emergency Card";
							
//***************************************************main function**************************************************************

$page_name = "Emergency Card ".$country_code." Study Abroad Student Handbook";
$menu = 1;

printHeader($page_name, $menu);
printBody();
printFooter();

//***************************************************end of main function*******************************************************
function printBody() {
global $page_name;
print_r($_GET);
//bad global variables!!! replace with OOP!
global $full_name, $birth,$citizenship,$program_name;
							
global $abroad_program_contact,$abroad_program_address,$abroad_program_tel,$abroad_program_mobile,$abroad_program_email;

global $abroad_housing_contact,$abroad_housing_address,$abroad_housing_tel,$abroad_housing_mobile,$abroad_housing_email;

global $home_campus_contact,$home_campus_address,$home_campus_tel,$home_campus_mobile,$home_campus_email;

global $family_contact,$family_address,$family_tel,$family_mobile,$family_email;

global $insurance_company,$policy_number,$emergency_phone;

global $embassy_consulate,$embassy_consulate_addres,$embassy_consulate_tel,$equivalent_911_abroad;

global $nearest_hospital_abroad_address,$nearest_hospital_abroad_tel;

global $passport_number,$blood_type,$medical_conditions,$wishes,$personal_email;	
?>
<div id="wrapper">
	<div id="main-content">
        <div class="highlight">
        	<div class="student-handbook">
            	<div class="title sh-gradient sh-top-corner"><?php echo $page_name;?></div>
            </div>
        </div>
        <div id="scroller">      
            <div id="content">
            	<div>
                    <div id="actual_content">
                        <h1 id="title">Emergency Card</h1>
                        <div id="content_container">
                        <?php
						if($_GET['special_code'] == "CenterGlobal8") {							
							printEmergencyCard($to_email, $from_email, $subject);
						}
						?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of mainnavigation -->
        </div>
        <div id="sponsor">
            <?php printBannerSponsor() ?>
        </div> 
    </div>
<?php
}

function printEmergencyCard($to_email, $from_email, $subject) {	
	//bad global variables!!! replace with OOP!
	global $full_name, $birth,$citizenship,$program_name;
	
	global $abroad_program_contact,$abroad_program_address,$abroad_program_tel,$abroad_program_mobile,$abroad_program_email;
	
	global $abroad_housing_contact,$abroad_housing_address,$abroad_housing_tel,$abroad_housing_mobile,$abroad_housing_email;
	
	global $home_campus_contact,$home_campus_address,$home_campus_tel,$home_campus_mobile,$home_campus_email;

	global $family_contact,$family_address,$family_tel,$family_mobile,$family_email;

	global $insurance_company,$policy_number,$emergency_phone;
	
	global $embassy_consulate,$embassy_consulate_addres,$embassy_consulate_tel,$equivalent_911_abroad;
	
	global $nearest_hospital_abroad_address,$nearest_hospital_abroad_tel;
	
	global $passport_number,$blood_type,$medical_conditions,$wishes,$personal_email;	
	/*$full_name = "Guybrush Threepwood";
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
	$equivalent_911_abroad = "STAN911";
	
	$nearest_hospital_abroad_address = "Tri-Island Area Hospital";
	$nearest_hospital_abroad_tel = "1800SKELETON";
	
	$passport_number = "S0T0A0N0";
	$blood_type = "Blood";
	$medical_conditions = "LeChuck Syndrome";
	$wishes = "Wishes to get Treasure";
	$personal_email = "Guybrush.Threepwood@monkeyisland.edu";*/
	
	$file = "card/emergencycard.jpg";
	list($width, $height) = getimagesize($file);
	$center = $width / 2;	
	$center_y = $height / 2;
	$source = imageCreateFromjpeg($file);
	$textcolor = imagecolorallocate($source, 51, 51, 51);
	$font = 'card/arial.ttf';
	$fontsize = 9;
	$fontsize_sm = 7;
	
	//header('Content-type: image/jpeg');
	imagettftext($source, $fontsize, 0, 115, 82, $textcolor, $font, $full_name);
	imagettftext($source, $fontsize, 0, 115, 94, $textcolor, $font, $birth);
	/*imagettftext($source, $fontsize, 0, 115, 94, $textcolor, $font, $birth_month);
	imagettftext($source, $fontsize, 0, 145, 94, $textcolor, $font, $birth_date);
	imagettftext($source, $fontsize, 0, 175, 94, $textcolor, $font, $birth_year);*/
	imagettftext($source, $fontsize, 0, 104, 105, $textcolor, $font, $citizenship);
	imagettftext($source, $fontsize, 0, 50, 127, $textcolor, $font, $program_name);

	imagettftext($source, $fontsize, 0, 50, 149, $textcolor, $font, $abroad_program_contact);
	imagettftext($source, $fontsize, 0, 50, 183, $textcolor, $font, $abroad_program_address);
	imagettftext($source, $fontsize_sm, 0, 50, 202, $textcolor, $font, $abroad_program_tel);
	imagettftext($source, $fontsize_sm, 0, 50, 210, $textcolor, $font, $abroad_program_mobile);
	imagettftext($source, $fontsize_sm, 0, 50, 216, $textcolor, $font, $abroad_program_email);

	imagettftext($source, $fontsize, 0, 50, 248, $textcolor, $font, $abroad_housing_contact);
	imagettftext($source, $fontsize, 0, 50, 260, $textcolor, $font, $abroad_housing_address);
	imagettftext($source, $fontsize_sm, 0, 50, 278, $textcolor, $font, $abroad_housing_tel);
	imagettftext($source, $fontsize_sm, 0, 50, 286, $textcolor, $font, $abroad_housing_mobile);
	imagettftext($source, $fontsize_sm, 0, 50, 293, $textcolor, $font, $abroad_housing_email);

	imagettftext($source, $fontsize, 0, 50, 323, $textcolor, $font, $home_campus_contact);
	imagettftext($source, $fontsize, 0, 50, 336, $textcolor, $font, $home_campus_address);
	imagettftext($source, $fontsize_sm, 0, 50, 356, $textcolor, $font, $home_campus_tel);
	imagettftext($source, $fontsize_sm, 0, 50, 364, $textcolor, $font, $home_campus_mobile);
	imagettftext($source, $fontsize_sm, 0, 50, 370, $textcolor, $font, $home_campus_email);
	
	imagettftext($source, $fontsize, 0, $center+8, 94, $textcolor, $font, $family_contact);
	imagettftext($source, $fontsize, 0, $center+8, 105, $textcolor, $font, $family_address);
	imagettftext($source, $fontsize_sm, 0, $center+8, 126, $textcolor, $font, $family_tel);
	imagettftext($source, $fontsize_sm, 0, $center+8, 134, $textcolor, $font, $family_mobile);
	imagettftext($source, $fontsize_sm, 0, $center+8, 142, $textcolor, $font, $family_email);

	imagettftext($source, $fontsize, 0, $center+95, 165, $textcolor, $font, $insurance_company);
	imagettftext($source, $fontsize, 0, $center+46, 177, $textcolor, $font, $policy_number);
	imagettftext($source, $fontsize, 0, $center+66, 189, $textcolor, $font, $emergency_phone);
	
	/*imagettftext($source, $fontsize, 0, $start, $y, $textcolor, $font, $embassy_consulate);*/
	imagettftext($source, $fontsize, 0, $center+8, 224, $textcolor, $font, $embassy_consulate_address);
	imagettftext($source, $fontsize, 0, $center+95, 200, $textcolor, $font, $embassy_consulate_tel);
	imagettftext($source, $fontsize, 0, $center+115, 248, $textcolor, $font, $equivalent_911_abroad);
	
	imagettftext($source, $fontsize, 0, $center+8, 295, $textcolor, $font, $nearest_hospital_abroad_address);
	imagettftext($source, $fontsize, 0, $center+114, 272, $textcolor, $font, $nearest_hospital_abroad_tel);
	
	imagettftext($source, $fontsize, 0, $center+56, 318, $textcolor, $font, $passport_number);
	imagettftext($source, $fontsize, 0, $center+56, 330, $textcolor, $font, $blood_type);
	imagettftext($source, $fontsize, 0, $center+8, 354, $textcolor, $font, $medical_conditions);
	imagettftext($source, $fontsize, 0, $center+8, 377, $textcolor, $font, $wishes);
	/*imagettftext($source, $fontsize, 0, $center+, $y, $textcolor, $font, $personal_emai);*/

	sendEmail($source, $to_email, $from_email, $subject, $full_name);
}

function sendEmail($source, $to_email, $from_email, $subject, $full_name) {
	//source: http://www.php.net/manual/en/ref.outcontrol.php
	//source: http://stackoverflow.com/questions/3409430/emailing-a-dynamically-created-image
	$to = $to_email;
	$from = $from_email;
	$subject = $subject;
	$name = $full_name;
	$random_hash = md5(date('r', time()));
	$headers = "From: $from_email\r\nReply-To: $from_email";
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

Hello <?php echo $name ?>!!!
StudentsAbroad.com: Emergency card message here.

--PHP-alt-<?php echo $random_hash; ?> 
Content-Type: text/html; charset="iso-8859-1"
Content-Transfer-Encoding: 7bit

<h2>Hello <?php echo $name ?>!!!</h2>
<p><b>StudentsAbroad.com:</b> Emergency card message here</p>

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
		printFailed;
	};		
}


function printSuccess() {
	echo 'sent';
}

function printFailed() {
	echo 'failed';
}

if($_GET['special_code'] == "CenterGlobal7") {	
	$full_name = $_GET["full_name"];
	$birth = $_GET["birth"];
	$birth_month = $_GET["birth_month"];
	$birth_day = $_GET["birth_day"];
	$birth_year = $_GET["birth_year"];
	$citizenship = $_GET["citizenship"];
	$program_name = $_GET["program_name"];
		
	$abroad_program_contact = $_GET["abroad_program_contact"];
	$abroad_program_address = $_GET["abroad_program_address"];
	$abroad_program_tel = $_GET["abroad_program_tel"];
	$abroad_program_mobile = $_GET["abroad_program_mobile"];
	$abroad_program_email = $_GET["abroad_program_email"];
	
	$abroad_housing_contact = $_GET["abroad_housing_contact"];
	$abroad_housing_address = $_GET["abroad_housing_address"];
	$abroad_housing_tel = $_GET["abroad_housing_tel"];
	$abroad_housing_mobile = $_GET["abroad_housing_mobile"];
	$abroad_housing_email = $_GET["abroad_housing_email"];
	
	$home_campus_contact = $_GET["home_campus_contact"];
	$home_campus_address = $_GET["home_campus_address"];
	$home_campus_tel = $_GET["home_campus_tel"];
	$home_campus_mobile = $_GET["home_campus_mobile"];
	$home_campus_email = $_GET["home_campus_email"];

	$family_contact = $_GET["family_contact"];
	$family_address = $_GET["family_address"];
	$family_tel = $_GET["family_tel"];
	$family_mobile = $_GET["family_mobile"];
	$family_email = $_GET["family_email"];

	$insurance_company = $_GET["insurance_company"];
	$policy_number = $_GET["policy_number"];
	$emergency_phone = $_GET["emergency_phone"];
	
	$embassy_consulate = $_GET["embassy_consulate"];
	$embassy_consulate_address = $_GET["embassy_consulate_address"];
	$embassy_consulate_tel = $_GET["embassy_consulate_tel"];		
	$equivalent_911_abroad = $_GET["equivalent_911_abroad"];
	
	$nearest_hospital_abroad_address = $_GET["nearest_hospital_abroad_address"];
	$nearest_hospital_abroad_tel = $_GET["nearest_hospital_abroad_tel"];
	
	$passport_number = $_GET["passport_number"];
	$blood_type = $_GET["blood_type"];
	$medical_conditions = $_GET["medical_conditions"];
	$wishes = $_GET["wishes"];
	$personal_email = $_GET["personal_email"];
}?>