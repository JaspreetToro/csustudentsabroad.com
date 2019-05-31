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

	if ( isset($_POST['submit']) ){	
		//print_r($_POST);
		
		$full_name = trim($_POST["full_name"]);  
		//$_SESSION['full_name'] = trim($_POST["full_name"]);
		$birth_month = trim($_POST["birth_month"]);
		$birth_date = trim($_POST["birth_date"]);				
		$birth_year = trim($_POST["birth_year"]);
		$citizenship = trim($_POST["citizenship"]);
		$passport_number = trim($_POST["passport_number"]);
		$program_name = trim($_POST["program_name"]);
		
		/* Medical Information */
		$blood_type = trim($_POST["blood_type"]);
		$medical_conditions = trim($_POST["medical_conditions"]);
		
		/* Primary */
		$wishes = trim($_POST["wishes"]);
		$wishes_contact = trim($_POST["wishes_contact"]);
		$wishes_address = trim($_POST["wishes_address"]);
		$wishes_tel = trim($_POST["wishes_tel"]);
		$wishes_mobile = trim($_POST["wishes_mobile"]);
		$wishes_email = trim($_POST["wishes_email"]);
		
		/* Secondary */
		$family_contact = trim($_POST["family_contact"]);
		$family_address = trim($_POST["family_address"]);
		$family_tel = trim($_POST["family_tel"]);
		$family_mobile = trim($_POST["family_mobile"]);
		$family_email = trim($_POST["family_email"]);
		
		/* insurance */
		$insurance_company = trim($_POST["insurance_company"]);
		$policy_number = trim($_POST["policy_number"]);
		$emergency_phone = trim($_POST["emergency_phone"]);
		
		/* abroad/on-site program contact */
		$abroad_program_contact = trim($_POST["abroad_program_contact"]);
		$abroad_program_address = trim($_POST["abroad_program_address"]);
		$abroad_program_tel = trim($_POST["abroad_program_tel"]);
		$abroad_program_mobile = trim($_POST["abroad_program_mobile"]);
		$abroad_program_email = trim($_POST["abroad_program_email"]);
		
		/* home u.s. campus contact */
		$home_campus_contact = trim($_POST["home_campus_contact"]);
		$home_campus_address = trim($_POST["home_campus_address"]);
		$home_campus_tel = trim($_POST["home_campus_tel"]);
		$home_campus_mobile = trim($_POST["home_campus_mobile"]);
		$home_campus_email = trim($_POST["home_campus_email"]);
		
		/* closest u.s. embassy/ consulate */
		$embassy_consulate = trim($_POST["embassy_consulate"]);
		$embassy_consulate_address = trim($_POST["embassy_consulate_address"]);
		$embassy_consulate_tel = trim($_POST["embassy_consulate_tel"]);
		$embassy_consulate_mobile = trim($_POST["embassy_consulate_mobile"]);
		$embassy_consulate_email = trim($_POST["embassy_consulate_email"]);
		
		/* nearest hospital */
		$nearest_hospital_abroad = trim($_POST["nearest_hospital_abroad"]);
		$nearest_hospital_abroad_address = trim($_POST["nearest_hospital_abroad_address"]);
		$nearest_hospital_abroad_tel = trim($_POST["nearest_hospital_abroad_tel"]);	
		/* equivalent 911 */
		$equivalent_911_abroad = trim($_POST["equivalent_911_abroad"]);
		
		/* abroad housing emergency contact */
		$abroad_housing_contact = trim($_POST["abroad_housing_contact"]);
		$abroad_housing_address = trim($_POST["abroad_housing_address"]);
		$abroad_housing_tel = trim($_POST["abroad_housing_tel"]);
		$abroad_housing_mobile = trim($_POST["abroad_housing_mobile"]);
		$abroad_housing_email = trim($_POST["abroad_housing_email"]);						
		
		$special_code = trim($_POST["special_code"]);	
		
		/* required */
		if (strlen($full_name) < 0 || $full_name == "") {
			$full_name_error = '<span class="error">Enter your name</span>';
			$req_error .= $full_name_error;
		}
		
		if ( strlen($birth_month) < 0 || strlen($birth_date) < 0 || strlen($birth_year < 0) ) {
			$date_of_birth_error = '<span class="error">Enter a valid date of birth</span>';
			$req_error .= $date_of_birth_error;
		} elseif ( !is_numeric($birth_month) || !is_numeric($birth_date) || !is_numeric($birth_year) ) {
			$date_of_birth_error = '<span class="error">Enter a valid date of birth</span>';
			$req_error .= $date_of_birth_error;
		}
		
		if (strlen($citizenship) < 0 || $citizenship == "") {
			$citizenship_error = '<span class="error">Enter your citizenship</span>';
			$req_error .= $citizenship_error;
		}
		if (strlen($passport_number) < 0 || $passport_number == "") {
			$passport_number_error = '<span class="error">Enter your passport number</span>';
			$req_error .= $passport_number_error;
		}
		if (strlen($program_name) < 0 || $program_name == "") {
			$program_name_error = '<span class="error">Enter your program name</span>';
			$req_error .= $program_name_error;
		}
		
		/* Primary */
		if (strlen($wishes) < 0 || $wishes == "") {
			$wishes_error = '<span class="error">Enter your primary contact</span>';
			$req_error .= $wishes_error;
		}
		if (strlen($wishes_tel) < 0 || $wishes_tel == "") {
			if (!preg_match("/^[0-9]+$/", $wishes_tel))
			{
				$wishes_tel_error = '<span class="error">Enter valid primary contact phone number</span>';
				$req_error .= $wishes_tel_error;
			}
		}		
		if (strlen($wishes_mobile) > 0 || $wishes_mobile != "") {
			if (!preg_match("/^[0-9]+$/", $wishes_mobile))
			{
				$wishes_mobile_error = '<span class="error">Enter valid primary contact mobile phone number</span>';
				$req_error .= $wishes_mobile_error;	
			}					
		}
		if (strlen($wishes_email) > 0 || $wishes_email != "") {
			if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $wishes_email))
			{
				$wishes_email_error = '<span class="error">Enter valid primary contact email</span>';
				$req_error .= $wishes_email_error;
			}
		}
	
		/* Secondary */
		if (strlen($family_contact) < 0 || $family_contact == "") {
			$family_contact_error = '<span class="error">Enter your secondary contact</span>';
			$req_error .= $family_contact_error;
		}
		if (strlen($family_tel) < 0 || $family_tel == "") {
			if (!preg_match("/^[0-9]+$/", $family_tel))
			{
				$family_tel_error = '<span class="error">Enter your secondary contact phone number</span>';
				$req_error .= $family_tel_error;			
			}
		}	
		if (strlen($family_mobile) > 0 || $family_mobile != "") {
			if (!preg_match("/^[0-9]+$/", $family_mobile))
			{
				$family_mobile_error = '<span class="error">Enter valid secondary contact mobile phone number</span>';
				$req_error .= $family_mobile_error;
			}
		}
		if (strlen($family_email) > 0 || $family_email != "") {
			if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $family_email))
			{
				$family_email_error = '<span class="error">Enter valid secondary contact email</span>';
				$req_error .= $family_email_error;
			}
		}
		/* insurance */
		if (strlen($insurance_company) < 0 || $insurance_company == "") {
			$insurance_company_error = '<span class="error">Enter your insurance company</span>';
			$req_error .= $insurance_company_error;
		}
		if (strlen($policy_number) < 0 || $policy_number == "") {
			$policy_number_error = '<span class="error">Enter your policy number</span>';
			$req_error .= $policy_number_error;
		}
		if (strlen($emergency_phone) < 0 || $emergency_phone == "") {
			if (!preg_match("/^[0-9]+$/", $emergency_phone))
			{
				$emergency_phone_error = '<span class="error">Enter 24 hour emergency phone number</span>';
				$req_error .= $emergency_phone_error;			
			}
		}
		
		/* abroad/on-site program contact */
		if (strlen($abroad_program_contact) < 0 || $abroad_program_contact == "") {
			$abroad_program_contact_error = '<span class="error">Enter your abroad program contact</span>';
			$req_error .= $abroad_program_contact_error;
		}
		if (strlen($abroad_program_tel) < 0 || $abroad_program_tel == "") {
			if (!preg_match("/^[0-9]+$/", $abroad_program_tel))
			{
				$abroad_program_tel_error = '<span class="error">Enter your abroad program phone number</span>';
				$req_error .= $abroad_program_tel_error;			
			}
		}		
		if (strlen($abroad_program_mobile) > 0 || $abroad_program_mobile != "") {
			if (!preg_match("/^[0-9]+$/", $abroad_program_mobile))
			{
				$abroad_program_mobile_error = '<span class="error">Enter valid abroad program mobile phone number</span>';
				$req_error .= $abroad_program_mobile_error;
			}
		}
		if (strlen($abroad_program_email) > 0 || $abroad_program_email != "") {
			if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $abroad_program_email))
			{
				$abroad_program_email_error = '<span class="error">Enter valid abroad program email</span>';
				$req_error .= $abroad_program_email_error;
			}
		}
		/* home u.s. campus contact */
		if (strlen($home_campus_contact) < 0 || $home_campus_contact == "") {
			$home_campus_contact_error = '<span class="error">Enter your U.S. campus contact</span>';
			$req_error .= $home_campus_contact_error;
		}
		if (strlen($home_campus_tel) < 0 || $home_campus_tel == "") {
			if (!preg_match("/^[0-9]+$/", $home_campus_tel))
			{
				$home_campus_tel_error = '<span class="error">Enter your U.S. campus phone number</span>';
				$req_error .= $home_campus_tel_error;			
			}
		}	
		if (strlen($home_campus_mobile) > 0 || $home_campus_mobile != "") {
			if (!preg_match("/^[0-9]+$/", $home_campus_mobile))
			{
				$home_campus_mobile_error = '<span class="error">Enter valid U.S. campus mobile phone number</span>';
				$req_error .= $home_campus_mobile_error;
			}					
		}
		if (strlen($home_campus_email) > 0 || $home_campus_email != "") {
			if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $home_campus_email))
			{
				$home_campus_email_error = '<span class="error">Enter valid U.S. campus email</span>';
				$req_error .= $home_campus_email_error;
			}
		}	
	
		/* closest u.s. embassy/ consulate */
		if (strlen($embassy_consulate) < 0 || $embassy_consulate == "") {
			$embassy_consulate_error = '<span class="error">Enter your embassy/consulate contact</span>';
			$req_error .= $embassy_consulate_error;
		}
		if (strlen($embassy_consulate_tel) < 0 || $embassy_consulate_tel == "") {
			if (!preg_match("/^[0-9]+$/", $embassy_consulate_tel))
			{
				$embassy_consulate_tel_error = '<span class="error">Enter your embassy/consulate phone number</span>';
				$req_error .= $embassy_consulate_tel_error;			
			}
		}	
		if (strlen($embassy_consulate_mobile) > 0 || $embassy_consulate_mobile != "") {
			if (!preg_match("/^[0-9]+$/", $embassy_consulate_mobile))
			{
				$embassy_consulate_mobile_error = '<span class="error">Enter valid embassy/consulate mobile phone number</span>';
				$req_error .= $embassy_consulate_mobile_error;
			}					
		}
		if (strlen($embassy_consulate_email) > 0 || $embassy_consulate_email != "") {
			if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $embassy_consulate_email))
			{
				$embassy_consulate_email_error = '<span class="error">Enter valid embassy/consulate email</span>';
				$req_error .= $embassy_consulate_email_error;
			}
		}
		
		/* equivalent 911 */
		if (strlen($equivalent_911_abroad) < 0 || $equivalent_911_abroad == "") {	
			if (!preg_match("/^[0-9]+$/", $equivalent_911_abroad))
			{
				$equivalent_911_abroad_error = '<span class="error">Enter equivalient of 9-1-1 emergency abroad</span>';
				$req_error .= $equivalent_911_abroad_error;
			}	
		}

		if (strlen($abroad_housing_tel) > 0 || $abroad_housing_tel != "") {
			if (!preg_match("/^[0-9]+$/", $abroad_housing_tel))
			{
				$abroad_housing_tel_error = '<span class="error">Enter your embassy/consulate phone number</span>';
				$req_error .= $abroad_housing_tel_error;			
			}
		}	
		if (strlen($abroad_housing_mobile) > 0 || $abroad_housing_mobile != "") {
			if (!preg_match("/^[0-9]+$/", $embassy_consulate_mobile))
			{
				$abroad_housing_mobile_error = '<span class="error">Enter valid embassy/consulate mobile phone number</span>';
				$req_error .= $abroad_housing_mobile_error;
			}					
		}
		if (strlen($abroad_housing_email) > 0 || $abroad_housing_email != "") {
			if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $abroad_housing_email))
			{
				$abroad_housing_email_error = '<span class="error">Enter valid embassy/consulate email</span>';
				$req_error .= $abroad_housing_email_error;
			}
		}
		
		if (strlen($confirm_personal_email) < 0 || $confirm_personal_email == "") {
			if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $confirm_personal_email))
			{
				$confirm_personal_email_error = '<span class="error">Enter valid email</span>';
				$req_error .= $confirm_personal_email_error;
			}
		}
		
		if($personal_email != $confirm_personal_email) { 
			$compare_email_error = '<span class="error">Please enter the same email above</span>';
			$req_error .= $compare_email_error;
		} 
				
		if ( $req_error == "" ) {
			$no_error = true;
			echo "<h2>success</h2>";
			//$action = 'action="order-emergency-card.php?country='.$country_param.'"';		
			

		}	
	}										
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
                        <p>* Required information</p>
                        <div id="emergency-card">
                            <div class="form-step">
								<?php 
									echo '<span>Step 1 of 2</span>'; 
                                ?>                            	
                            </div>
                            <div class="form-instruction">
                            	<?php 
									echo '<p>Sign up for an Emergency Card.</p>'; 
                                ?>                                 
                            </div>
                            <div class="emergency-card-form">
                                <form id="shEmergencyCardForm" name="shEmergencyCardForm" method="post" onsubmit="return validateForm('shEmergencyCardForm','getCard')" action="ec-card-verification.php?country=<?php if ($country_name == "Worldwide") { echo "General"; } else { echo $country_name; } ?>">
                               	<div>
                                        <h2>Student Information</h2>
                                        <label for="full_name">Student Name*</label>
                                        <input type="text" id="full_name" name="full_name" <?php if (isset($full_name)) { echo 'value="'.$full_name.'"'; } ?> placeholder="Your full name" maxlength="34" />
                                        <?php if (isset($full_name_error)) { echo '<div>'.$full_name_error.'</div>'; } ?>
                                        <div class="date-of-birth">
                                            <label for="birth" id="birth">Date of Birth*</label>
                                            <div class="dob_container">
                                                <div class="dob_month">
                                                    <input type="text" id="birth_month" name="birth_month" placeholder="Month" maxlength="2" <?php if (!empty($birth_month)) { echo 'value="'.$birth_month.'"'; } ?> />
                                                </div>
                                                <div class="dob_day">
                                                    <input type="text" id="birth_date" name="birth_date" placeholder="Day" maxlength="2" <?php if (!empty($birth_date)) { echo 'value="'.$birth_date.'"'; } ?> />
                                                </div>
                                                <div class="dob_year">
                                                    <input type="text" id="birth_year" name="birth_year" placeholder="Year" maxlength="4" <?php if (!empty($birth_year)) { echo 'value="'.$birth_year.'"'; } ?> />
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        <?php if ($date_of_birth_error != "") { echo '<div>'.$date_of_birth_error.'</div>'; } ?>
                                        </div>
                                        <div class="citizenship">
                                        <label for="citizenship">Citizenship*</label>
                                        <input type="text" id="citizenship" name="citizenship" <?php if (!empty($citizenship)) { echo 'value="'.$citizenship.'"'; } ?> placeholder="Your citizenship"  maxlength="34" />
                                        <?php if ($citizenship_error != "") { echo '<div>'.$citizenship_error.'</div>'; } ?>
													 </div>	                                    
                                    </div>
                                    <div>
                                        <label for="passport_number">Passport Number*</label>
                                        <input type="text" id="passport_number" name="passport_number" <?php if (!empty($passport_number)) { echo 'value="'.$passport_number.'"'; } ?> placeholder="Your passport number"  maxlength="34" />
                                        <?php if ($passport_number_error != "") { echo '<div>'.$passport_number_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <label for="program_name">Study Abroad Program Name*</label>
                                        <input type="text" id="program_name" name="program_name" <?php if (!empty($program_name)) { echo 'value="'.$program_name.'"'; } ?> placeholder="Your study abroad program name"  maxlength="34" />
                                        <?php if ($program_name_error != "") { echo '<div>'.$program_name_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Medical Information</h2>
                                        <label for="blood_type">Blood Type (A, B, AB, O)</label>
                                        <input type="text" id="blood_type" name="blood_type" <?php if (!empty($blood_type)) { echo 'value="'.$blood_type.'"'; } ?> placeholder="Your blood type"  maxlength="2" />
                                        <label for="medical_conditions">Special Medical Conditions</label>
                                        <input type="text" id="medical_conditions" name="medical_conditions" <?php if (!empty($medical_conditions)) { echo 'value="'.$medical_conditions.'"'; } ?> placeholder="List of special medical conditions"  maxlength="34" />
                                    </div>
                                    <div>
                                        <h2>Primary Personal Contact</h2>
                                        <label for="wishes">Name*</label>
                                        <input type="text" id="wishes" name="wishes" <?php if (!empty($wishes)) { echo 'value="'.$wishes.'"'; } ?> placeholder="Primary contact" />
                                        <?php if ($wishes_error != "") { echo '<div>'.$wishes_error.'</div>'; } ?>
                                        <label for="wishes_address">Address</label>
                                        <input type="text" id="wishes_address" name="wishes_address" <?php if (!empty($wishes_address)) { echo 'value="'.$wishes_address.'"'; } ?> placeholder="Primary contact address"  maxlength="45" />
                                        <label for="wishes_tel">Phone*</label>
                                        <input type="tel" id="wishes_tel" name="wishes_tel" <?php if (!empty($wishes_tel)) { echo 'value="'.$wishes_tel.'"'; } ?> placeholder="Primary contact phone"  maxlength="34" />
                                        <?php if ($wishes_tel_error != "") { echo '<div>'.$wishes_tel_error.'</div>'; } ?>
                                        <label for="wishes_mobile">Mobile</label>
                                        <input type="tel" id="wishes_mobile" name="wishes_mobile" <?php if (!empty($wishes_mobile)) { echo 'value="'.$wishes_mobile.'"'; } ?> placeholder="Primary contact mobile"  maxlength="34" />
                                        <?php if ($wishes_mobile_error != "") { echo '<div>'.$wishes_mobile_error.'</div>'; } ?>
                                        <label for="wishes_email">Email</label>
                                        <input type="text" id="wishes_email" name="wishes_email" <?php if (!empty($wishes_email)) { echo 'value="'.$wishes_email.'"'; } ?> placeholder="Primary contact email"  maxlength="34" />
                                        <?php if ($wishes_email_error != "") { echo '<div>'.$wishes_email_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Secondary Personal Contact</h2>
                                        <label for="family_contact">Name*</label>
                                        <input type="text" id="family_contact" name="family_contact" <?php if (!empty($family_contact)) { echo 'value="'.$family_contact.'"'; } ?> placeholder="Secondary contact"  maxlength="34" />
                                        <?php if ($family_contact_error != "") { echo '<div>'.$family_contact_error.'</div>'; } ?>
                                        <label for="family_address">Address</label>
                                        <input type="text" id="family_address" name="family_address" <?php if (!empty($family_address)) { echo 'value="'.$family_address.'"'; } ?> placeholder="Secondary contact address"  maxlength="45" />
                                        <label for="family_tel">Phone*</label>
                                        <input type="tel" id="family_tel" name="family_tel" <?php if (!empty($family_tel)) { echo 'value="'.$family_tel.'"'; } ?> placeholder="Secondary contact phone"  maxlength="34" />
                                        <?php if ($family_tel_error != "") { echo '<div>'.$family_tel_error.'</div>'; } ?>
                                        <label for="family_mobile">Mobile</label>
                                        <input type="tel" id="family_mobile" name="family_mobile" <?php if (!empty($family_mobile)) { echo 'value="'.$family_mobile.'"'; } ?> placeholder="Secondary contact mobile"  maxlength="34" />
                                        <?php if ($family_mobile_error != "") { echo '<div>'.$family_mobile_error.'</div>'; } ?>
                                        <label for="family_email">Email</label>
                                        <input type="email" id="family_email" name="family_email" <?php if (!empty($family_email)) { echo 'value="'.$family_email.'"'; } ?> placeholder="Secondary contact email"  maxlength="34" />
                                        <?php if ($family_email_error != "") { echo '<div>'.$family_email_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Insurance Company</h2>
                                        <label for="insurance_company">Name*</label>
                                        <input type="text" id="insurance_company" name="insurance_company" <?php if (!empty($insurance_company)) { echo 'value="'.$insurance_company.'"'; } ?> placeholder="Your insurance company"  maxlength="34" />
                                        <?php if ($insurance_company_error != "") { echo '<div>'.$insurance_company_error.'</div>'; } ?>
                                        <label for="policy_number">Policy Number*</label>
                                        <input type="text" id="policy_number" name="policy_number" <?php if (!empty($policy_number)) { echo 'value="'.$policy_number.'"'; } ?> placeholder="Your policy number"  maxlength="34" />
                                        <?php if ($policy_number_error != "") { echo '<div>'.$policy_number_error.'</div>'; } ?>
                                        <label for="emergency_phone">24 Hour Emergency Phone*</label>
                                        <input type="tel" id="emergency_phone" name="emergency_phone" <?php if (!empty($emergency_phone)) { echo 'value="'.$emergency_phone.'"'; } ?> placeholder="24 hour emergency phone"  maxlength="34" />
                                        <?php if ($emergency_phone_error != "") { echo '<div>'.$emergency_phone_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Abroad/ On&ndash;Site Program Information</h2>
                                        <label for="abroad_program_contact">Name*</label>
                                        <input type="text" id="abroad_program_contact" name="abroad_program_contact" <?php if (!empty($abroad_program_contact)) { echo 'value="'.$abroad_program_contact.'"'; } ?> placeholder="Abroad program contact"  maxlength="34" />
                                        <?php if ($abroad_program_contact_error != "") { echo '<div>'.$abroad_program_contact_error.'</div>'; } ?>
                                        <label for="abroad_program_address">Address</label>
                                        <input type="text" id="abroad_program_address" name="abroad_program_address" <?php if (!empty($abroad_program_address)) { echo 'value="'.$abroad_program_address.'"'; } ?> placeholder="Abroad program address"  maxlength="45" />
                                        <label for="abroad_program_tel">Phone*</label>
                                        <input type="tel" id="abroad_program_tel" name="abroad_program_tel" <?php if (!empty($abroad_program_tel)) { echo 'value="'.$abroad_program_tel.'"'; } ?> placeholder="Abroad program phone"  maxlength="34" />
                                        <?php if ($abroad_program_tel_error != "") { echo '<div>'.$abroad_program_tel_error.'</div>'; } ?>
                                        <label for="abroad_program_mobile">Mobile</label>
                                        <input type="tel" id="abroad_program_mobile" name="abroad_program_mobile" <?php if (!empty($abroad_program_mobile)) { echo 'value="'.$abroad_program_mobile.'"'; } ?> placeholder="Abroad program mobile"  maxlength="34" />
                                        <?php if ($abroad_program_mobile_error != "") { echo '<div>'.$abroad_program_mobile_error.'</div>'; } ?>
                                        <label for="abroad_program_email">Email</label>
                                        <input type="email" id="abroad_program_email" name="abroad_program_email" <?php if (!empty($abroad_program_email)) { echo 'value="'.$abroad_program_email.'"'; } ?> placeholder="Abroad program email"  maxlength="34" />
                                        <?php if ($abroad_program_email_error != "") { echo '<div>'.$abroad_program_email_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Home (U.S.) Campus Information</h2>
                                        <label for="home_campus_contact">Name*</label>
                                        <input type="text" id="home_campus_contact" name="home_campus_contact" <?php if (!empty($home_campus_contact)) { echo 'value="'.$home_campus_contact.'"'; } ?> placeholder="U.S. campus contact"   maxlength="34" />
                                        <?php if ($home_campus_contact_error != "") { echo '<div>'.$home_campus_contact_error.'</div>'; } ?>
                                        <label for="home_campus_address">Address</label>
                                        <input type="text" id="home_campus_address" name="home_campus_address" <?php if (!empty($home_campus_address)) { echo 'value="'.$home_campus_address.'"'; } ?> placeholder="U.S. campus address"  maxlength="45" />
                                        <label for="home_campus_tel">Phone*</label>
                                        <input type="tel" id="home_campus_tel" name="home_campus_tel" <?php if (!empty($home_campus_tel)) { echo 'value="'.$home_campus_tel.'"'; } ?> placeholder="U.S. campus phone"  maxlength="34" />
                                        <?php if ($home_campus_tel_error != "") { echo '<div>'.$home_campus_tel_error.'</div>'; } ?>
                                        <label for="home_campus_mobile">Mobile</label>
                                        <input type="tel" id="home_campus_mobile" name="home_campus_mobile" <?php if (!empty($home_campus_mobile)) { echo 'value="'.$home_campus_mobile.'"'; } ?> placeholder="U.S. campus mobile"  maxlength="34" />
                                        <?php if ($home_campus_mobile_error != "") { echo '<div>'.$home_campus_mobile_error.'</div>'; } ?>
                                        <label for="home_campus_email">Email</label>
                                        <input type="email" id="home_campus_email" <?php if (!empty($home_campus_email)) { echo 'value="'.$home_campus_email.'"'; } ?> name="home_campus_email" placeholder="U.S. campus email"  maxlength="34" />
                                        <?php if ($home_campus_email_error != "") { echo '<div>'.$home_campus_email_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Closest U.S. Embassy/ Consulate to Program Location</h2>
                                        <p class="note">Note: If you are not a U.S. Citizen, use the information of Embassy/ Consulate from your country of citizenship.</p>
                                        <label for="embassy_consulate">Name</label>
                                        *
                                        <input type="text" id="embassy_consulate" name="embassy_consulate" <?php if (!empty($embassy_consulate)) { echo 'value="'.$embassy_consulate.'"'; } ?> placeholder="Embassy/consulate"  maxlength="34" />
                                        <?php if ($embassy_consulate_error != "") { echo '<div>'.$embassy_consulate_error.'</div>'; } ?>
                                        <label for="embassy_consulate_address">Address</label>
                                        <input type="text" id="embassy_consulate_address" name="embassy_consulate_address" <?php if (!empty($embassy_consulate_address)) { echo 'value="'.$embassy_consulate_address.'"'; } ?> placeholder="Embassy/consulate address"  maxlength="45" />
                                        <label for="embassy_consulate_tel">Phone</label>
                                        *
                                        <input type="tel" id="embassy_consulate_tel" name="embassy_consulate_tel" <?php if (!empty($embassy_consulate_tel)) { echo 'value="'.$embassy_consulate_tel.'"'; } ?> placeholder="Embassy/consulate phone"  maxlength="34" />
                                        <?php if ($embassy_consulate_tel_error != "") { echo '<div>'.$embassy_consulate_tel_error.'</div>'; } ?>
                                        <label for="embassy_consulate_email">Email</label>
                                        <input type="email" id="embassy_consulate_email" name="embassy_consulate_email" <?php if (!empty($embassy_consulate_email)) { echo 'value="'.$embassy_consulate_email.'"'; } ?> placeholder="Embassy/consulate email" maxlength="34" />
                                        <?php if ($embassy_consulate_email_error != "") { echo '<div>'.$embassy_consulate_email_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Nearest Hospital Abroad</h2>
                                        <label for="nearest_hospital_abroad">Name</label>
                                        <input type="text" id="nearest_hospital_abroad" name="nearest_hospital_abroad" placeholder="Nearest hospital abroad" <?php if (!empty($nearest_hospital_abroad)) { echo 'value="'.$nearest_hospital_abroad.'"'; } ?> maxlength="34" />
                                        <label for="nearest_hospital_abroad_address">Address</label>
                                        <input type="text" id="nearest_hospital_abroad_address" name="nearest_hospital_abroad_address" <?php if (!empty($nearest_hospital_abroad_address)) { echo 'value="'.$nearest_hospital_abroad_address.'"'; } ?> placeholder="Nearest hospital abroad address"  maxlength="45" />
                                        <label for="nearest_hospital_abroad_tel">Phone</label>
                                        <input type="tel" id="nearest_hospital_abroad_tel" name="nearest_hospital_abroad_tel" <?php if (!empty($nearest_hospital_abroad_tel)) { echo 'value="'.$nearest_hospital_abroad_tel.'"'; } ?> placeholder="Nearest hospital abroad phone"  maxlength="34" />
                                    </div>
                                    <div>
                                        <h2>Equivalent of 9&ndash;1&ndash;1 Emergency Abroad</h2>
                                        <label for="equivalent_911_abroad">Phone</label>
                                        <input type="tel" id="equivalent_911_abroad" name="equivalent_911_abroad" <?php if (!empty($equivalent_911_abroad)) { echo 'value="'.$equivalent_911_abroad.'"'; } ?> placeholder="Equivalent 9&ndash;1&ndash;1 abroad phone"  maxlength="34" />
                                        <?php if ($equivalent_911_abroad_error != "") { echo '<div>'.$equivalent_911_abroad_error.'</div>'; } ?>
                                    </div>
                                    <div>
                                        <h2>Abroad Housing Information</h2>
                                        <label for="abroad_housing_contact">Name</label>
                                        <input type="text" id="abroad_housing_contact" name="abroad_housing_contact" <?php if (!empty($abroad_housing_contact)) { echo 'value="'.$abroad_housing_contact.'"'; } ?> placeholder="Abroad housing contact"  maxlength="34" />
                                        <label for="abroad_housing_address">Address</label>
                                        <input type="text" id="abroad_housing_address" name="abroad_housing_address" <?php if (!empty($abroad_housing_address)) { echo 'value="'.$abroad_housing_address.'"'; } ?> placeholder="Abroad housing address"  maxlength="45" />
                                        <label for="abroad_housing_tel">Phone</label>
                                        <input type="tel" id="abroad_housing_tel" name="abroad_housing_tel" <?php if (!empty($abroad_housing_tel)) { echo 'value="'.$abroad_housing_tel.'"'; } ?> placeholder="Abroad housing phone"  maxlength="34" />
                                        <label for="abroad_housing_mobile">Mobile</label>
                                        <input type="tel" id="abroad_housing_mobile" name="abroad_housing_mobile" <?php if (!empty($abroad_housing_mobile)) { echo 'value="'.$abroad_housing_mobile.'"'; } ?> placeholder="Abroad housing mobile"  maxlength="34" />
                                        <label for="abroad_housing_email">Email</label>
                                        <input type="email" id="abroad_housing_email" name="abroad_housing_email" <?php if (!empty($abroad_housing_email)) { echo 'value="'.$abroad_housing_email.'"'; } ?> placeholder="Abroad housing email"  maxlength="34" />
                                    </div>
                                    
                                    <div class="send_information">
                                        <h2>Send Information to</h2>
                                        <label for="personal_email">Email*</label>
                                        <input type="email" id="personal_email" name="personal_email" placeholder="Your personal email"  maxlength="34" <?php if (!empty($personal_email)) { echo 'value="'.$personal_email.'"'; } ?> />
                                        <?php if ($personal_email_error != "") { echo '<div>'.$personal_email_error.'</div>'; } ?>
                                        <label for="confirm_personal_email">Confirm Email*</label>
                                        <input type="email" id="confirm_personal_email" name="confirm_personal_email" placeholder="Confirm your personal email" maxlength="34" equalTo="#personal_email" <?php if (!empty($confirm_personal_email)) { echo 'value="'.$confirm_personal_email.'"'; } ?> />
                                        <?php if ($confirm_personal_email_error != "") { echo '<div>'.$confirm_personal_email_error.'</div>'; } ?>
                                        <?php if ($compare_email_error != "") { echo '<div>'.$compare_email_error.'</div>'; } ?>
                                    </div>
                                    
                                    <div class="sh_box_button">
                                        <input class="sh_button" type="submit" name="submit" id="submitButton" value="Submit Information" title="Click here to submit your information!" />
                                        <input type="hidden" id="country_name" name="country_name" value="<?php echo $country_param ?>" />
                                        <input type="hidden" id="special_code" name="special_code" value="CenterGlobal8" />
                                    </div>                                    
                                </form>
                            </div>
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
?>
