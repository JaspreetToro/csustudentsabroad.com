<?php
if($_GET['special_code'] == "CenterGlobal7") {	
	//print_r ($_GET);
	
	// this is bad! need to replace :)
	
	/* Student Information */
	$full_name = $_GET["full_name"];    
	$birth = $_GET["birth"];
	$citizenship = $_GET["citizenship"];
	$passport_number = $_GET["passport_number"];
	$program_name = $_GET["program_name"];
	
	/* Medical Information */
	$blood_type = $_GET["blood_type"];
	$medical_conditions = $_GET["medical_conditions"];
	
	/* Primary */
	$wishes = $_GET["wishes"];
	$wishes_contact = $_GET["wishes_contact"];
	$wishes_address = $_GET["wishes_address"];
	$wishes_tel = $_GET["wishes_tel"];
	$wishes_mobile = $_GET["wishes_mobile"];
	$wishes_email = $_GET["wishes_email"];

	/* Secondary */
	$family_contact = $_GET["family_contact"];
	$family_address = $_GET["family_address"];
	$family_tel = $_GET["family_tel"];
	$family_mobile = $_GET["family_mobile"];
	$family_email = $_GET["family_email"];
	
	/* insurance */
	$insurance_company = $_GET["insurance_company"];
	$policy_number = $_GET["policy_number"];
	$emergency_phone = $_GET["emergency_phone"];
	
	/* abroad/on-site program contact */
	$abroad_program_contact = $_GET["abroad_program_contact"];
	$abroad_program_address = $_GET["abroad_program_address"];
	$abroad_program_tel = $_GET["abroad_program_tel"];
	$abroad_program_mobile = $_GET["abroad_program_mobile"];
	$abroad_program_email = $_GET["abroad_program_email"];

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
	
	/* nearest hospital */
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

	//$personal_email = $_GET["personal_email"];
}?>

<div class="emergency-card-form">
    <div class="form-step"><span>Step 2 of 3</span></div>
    <div class="form-instruction"><p>To ensure that your emergency card is complete, please read and review the information below.</p></div>
    <form id="myEmergencyCardForm2" name="myEmergencyCardForm2" method="post" >
        <div>
            <h2>Student Information</h2>
            <label for="full_name">Student Name*</label>
            <input type="text" id="full_name" name="full_name" <?php if(!empty($full_name)) { echo 'value="'.$full_name.'"'; } ?> placeholder="Your full name"  maxlength="40" />
            <label for="birth">Date of Birth*</label>
            <input type="text" id="birth" name="birth" <?php if(!empty($birth)) { echo 'value="'.$birth.'"'; } ?> placeholder="Your date of birth"  maxlength="40" />
            <label for="citizenship">Citizenship*</label>
            <input type="text" id="citizenship" name="citizenship" <?php if(!empty($citizenship)) { echo 'value="'.$citizenship.'"'; } ?> placeholder="Your citizenship"  maxlength="40" />
        </div>
        <div>
            <label for="passport_number">Passport Number*</label>
            <input type="text" id="passport_number" name="passport_number" <?php if(!empty($passport_number)) { echo 'value="'.$passport_number.'"'; } ?> placeholder="Your passport number"  maxlength="40" />
        </div>
        <div>
            <label for="program_name">Study Abroad Program Name*</label>
            <input type="text" id="program_name" name="program_name" <?php if(!empty($program_name)) { echo 'value="'.$program_name.'"'; } ?> placeholder="Your study abroad program name"  maxlength="40" />
        </div>
        <div>
            <h2>Medical Information</h2>
            <label for="blood_type">Blood Type</label>
            <input type="text" id="blood_type" name="blood_type" <?php if(!empty($blood_type)) { echo 'value="'.$blood_type.'"'; } ?> placeholder="Your blood type"  maxlength="40" />
            <label for="medical_conditions">Special Medical Conditions</label>
            <input type="text" id="medical_conditions" name="medical_conditions" <?php if(!empty($medical_conditions)) { echo 'value="'.$medical_conditions.'"'; } ?> placeholder="List of special medical conditions"  maxlength="40" />
        </div>
        <div>
            <h2>Primary Personal Contact</h2>
            <label for="wishes">Name*</label>
            <input type="text" id="wishes" name="wishes" <?php if(!empty($wishes)) { echo 'value="'.$wishes.'"'; } ?> placeholder="Personal emergency contact" required="required"/>
            <label for="wishes_address">Address</label>
            <input type="text" id="wishes_address" name="wishes_address" <?php if(!empty($wishes_address)) { echo 'value="'.$wishes_address.'"'; } ?> placeholder="Personal emergency contact address"  maxlength="45" />
            <label for="wishes_tel">Phone*</label>
            <input type="text" id="wishes_tel" name="wishes_tel" <?php if(!empty($wishes_tel)) { echo 'value="'.$wishes_tel.'"'; } ?> placeholder="Personal emergency contact phone number"  maxlength="40" />
            <label for="wishes_mobile">Mobile</label>
            <input type="text" id="wishes_mobile" name="wishes_mobile" <?php if(!empty($wishes_mobile)) { echo 'value="'.$wishes_mobile.'"'; } ?> placeholder="Personal emergency contact mobile phone number"  maxlength="40" />
            <label for="wishes_email">Email</label>
            <input type="text" id="wishes_email" name="wishes_email" <?php if(!empty($wishes_email)) { echo 'value="'.$wishes_email.'"'; } ?> placeholder="Personal emergency contact email"  maxlength="40" />
        </div>
        <div>
            <h2>Secondary Personal Contact</h2>
            <label for="family_contact">Name*</label>
            <input type="text" id="family_contact" name="family_contact" <?php if(!empty($family_contact)) { echo 'value="'.$family_contact.'"'; } ?> placeholder="Family contact"  maxlength="40" />
            <label for="family_address">Address</label>
            <input type="text" id="family_address" name="family_address" <?php if(!empty($family_address)) { echo 'value="'.$family_address.'"'; } ?> placeholder="Family address"  maxlength="45" />
            <label for="family_tel">Phone*</label>
            <input type="tel" id="family_tel" name="family_tel" <?php if(!empty($family_tel)) { echo 'value="'.$family_tel.'"'; } ?> placeholder="Family phone number"  maxlength="40" />
            <label for="family_mobile">Mobile</label>
            <input type="tel" id="family_mobile" name="family_mobile" <?php if(!empty($family_mobile)) { echo 'value="'.$family_mobile.'"'; } ?> placeholder="Family mobile phone number"  maxlength="40" />
            <label for="family_email">Email</label>
            <input type="email" id="family_email" name="family_email" <?php if(!empty($family_email)) { echo 'value="'.$family_email.'"'; } ?> placeholder="Family email"  maxlength="40" />
        </div>
        <div>
            <h2>Insurance Company</h2>
            <label for="insurance_company">Name*</label>
            <input type="text" id="insurance_company" name="insurance_company" <?php if(!empty($insurance_company)) { echo 'value="'.$insurance_company.'"'; } ?> placeholder="Your insurance company"  maxlength="40" />
            <label for="policy_number">Policy Number*</label>
            <input type="number" id="policy_number" name="policy_number" <?php if(!empty($policy_number)) { echo 'value="'.$policy_number.'"'; } ?> placeholder="Your policy number"  maxlength="40" />
            <label for="emergency_phone">24 Hour Emergency Phone*</label>
            <input type="tel" id="emergency_phone" name="emergency_phone" <?php if(!empty($emergency_phone)) { echo 'value="'.$emergency_phone.'"'; } ?> placeholder="Your 24 hour phone number"  maxlength="40" />
        </div>
        <div>
            <h2>Abroad/ On&ndash;Site Program Information</h2>
            <label for="abroad_program_contact">Name*</label>
            <input type="text" id="abroad_program_contact" name="abroad_program_contact" <?php if(!empty($abroad_program_contact)) { echo 'value="'.$abroad_program_contact.'"'; } ?> placeholder="Abroad program contact"  maxlength="40" />
            <label for="abroad_program_address">Address</label>
            <input type="text" id="abroad_program_address" name="abroad_program_address" <?php if(!empty($abroad_program_address)) { echo 'value="'.$abroad_program_address.'"'; } ?> placeholder="Abroad program address"  maxlength="45" />
            <label for="abroad_program_tel">Phone*</label>
            <input type="tel" id="abroad_program_tel" name="abroad_program_tel" <?php if(!empty($abroad_program_tel)) { echo 'value="'.$abroad_program_tel.'"'; } ?> placeholder="Abroad program phone number"  maxlength="40" />
            <label for="abroad_program_mobile">Mobile</label>
            <input type="tel" id="abroad_program_mobile" name="abroad_program_mobile" <?php if(!empty($abroad_program_mobile)) { echo 'value="'.$abroad_program_mobile.'"'; } ?> placeholder="Abroad program mobile phone number"  maxlength="40" />
            <label for="abroad_program_email">Email</label>
            <input type="email" id="abroad_program_email" name="abroad_program_email" <?php if(!empty($abroad_program_email)) { echo 'value="'.$abroad_program_email.'"'; } ?> placeholder="Abroad program email"  maxlength="40" />
        </div>
        <div>
            <h2>Home (U.S.) Campus Information</h2>
            <label for="home_campus_contact">Name*</label>
            <input type="text" id="home_campus_contact" name="home_campus_contact" <?php if(!empty($home_campus_contact)) { echo 'value="'.$home_campus_contact.'"'; } ?> placeholder="U.S. campus contact"   maxlength="40" />
            <label for="home_campus_address">Address</label>
            <input type="text" id="home_campus_address" name="home_campus_address" <?php if(!empty($home_campus_address)) { echo 'value="'.$home_campus_address.'"'; } ?> placeholder="U.S. campus contact address"  maxlength="45" />
            <label for="home_campus_tel">Phone*</label>
            <input type="tel" id="home_campus_tel" name="home_campus_tel" <?php if(!empty($home_campus_tel)) { echo 'value="'.$home_campus_tel.'"'; } ?> placeholder="U.S. campus phone number"  maxlength="40" />
            <label for="home_campus_mobile">Mobile</label>
            <input type="tel" id="home_campus_mobile" name="home_campus_mobile" <?php if(!empty($home_campus_mobile)) { echo 'value="'.$home_campus_mobile.'"'; } ?> placeholder="U.S. campus mobile phone number"  maxlength="40" />
            <label for="home_campus_email">Email</label>
            <input type="email" id="home_campus_email" <?php if(!empty($home_campus_email)) { echo 'value="'.$home_campus_email.'"'; } ?> name="home_campus_email" placeholder="U.S. campus email"  maxlength="40" />
        </div>
        <div>
            <h2>Closest U.S. Embassy/ Consulate to Program Location</h2>
            <p class="note">Note: If you are not a U.S. Citizen, use the information of Embassy/ Consulate from your country of citizenship.</p>
            <label for="embassy_consulate">Name</label>
            <input type="text" id="embassy_consulate" name="embassy_consulate" <?php if(!empty($embassy_consulate)) { echo 'value="'.$embassy_consulate.'"'; } ?> placeholder="Embassy/consulate"  maxlength="40" />
            <label for="embassy_consulate_address">Address</label>
            <input type="text" id="embassy_consulate_address" name="embassy_consulate_address" <?php if(!empty($embassy_consulate_address)) { echo 'value="'.$embassy_consulate_address.'"'; } ?> placeholder="Embassy/consulate address"  maxlength="45" />
            <label for="embassy_consulate_tel">Phone</label>
            <input type="tel" id="embassy_consulate_tel" name="embassy_consulate_tel" <?php if(!empty($embassy_consulate_tel)) { echo 'value="'.$embassy_consulate_tel.'"'; } ?> placeholder="Embassy/consulate phone number"  maxlength="40" />
            <label for="embassy_consulate_email">Email</label>
                        <input type="email" id="embassy_consulate_email" name="embassy_consulate_email" <?php if(!empty($embassy_consulate_email)) { echo 'value="'.$embassy_consulate_email.'"'; } ?> placeholder="Embassy/consulate email" maxlength="40" />
        </div>
        <div>
            <h2>Nearest Hospital Abroad</h2>
            <label for="nearest_hospital_abroad">Name</label>
                        <input type="text" id="nearest_hospital_abroad" name="nearest_hospital_abroad" placeholder="Nearest hospital abroad" <?php if(!empty($nearest_hospital_abroad)) { echo 'value="'.$nearest_hospital_abroad.'"'; } ?> maxlength="40" />
            <label for="nearest_hospital_abroad_address">Address</label>
            <input type="text" id="nearest_hospital_abroad_address" name="nearest_hospital_abroad_address" <?php if(!empty($nearest_hospital_abroad_address)) { echo 'value="'.$nearest_hospital_abroad_address.'"'; } ?> placeholder="Nearest hospital abroad address"  maxlength="45" />
            <label for="nearest_hospital_abroad_tel">Phone</label>
            <input type="tel" id="nearest_hospital_abroad_tel" name="nearest_hospital_abroad_tel" <?php if(!empty($nearest_hospital_abroad_tel)) { echo 'value="'.$nearest_hospital_abroad_tel.'"'; } ?> placeholder="Nearest hospital abroad phone number"  maxlength="40" />
        </div>
        <div>
            <h2>Equivalent of 9&ndash;1&ndash;1 Emergency Abroad</h2>
            <label for="equivalent_911_abroad">Phone</label>
            <input type="tel" id="equivalent_911_abroad" name="equivalent_911_abroad" <?php if(!empty($equivalent_911_abroad)) { echo 'value="'.$equivalent_911_abroad.'"'; } ?> placeholder="Equivalent 9&ndash;1&ndash;1 abroad phone number"  maxlength="40" />
        </div>
        <div>
            <h2>Abroad Housing Information</h2>
            <label for="abroad_housing_contact">Name</label>
            <input type="text" id="abroad_housing_contact" name="abroad_housing_contact" <?php if(!empty($abroad_housing_contact)) { echo 'value="'.$abroad_housing_contact.'"'; } ?> placeholder="Abroad housing contact"  maxlength="40" />
            <label for="abroad_housing_address">Address</label>
            <input type="text" id="abroad_housing_address" name="abroad_housing_address" <?php if(!empty($abroad_housing_address)) { echo 'value="'.$abroad_housing_address.'"'; } ?> placeholder="Abroad housing contact address"  maxlength="45" />
            <label for="abroad_housing_tel">Phone</label>
            <input type="tel" id="abroad_housing_tel" name="abroad_housing_tel" <?php if(!empty($abroad_housing_tel)) { echo 'value="'.$abroad_housing_tel.'"'; } ?> placeholder="Abroad housing phone number"  maxlength="40" />
            <label for="abroad_housing_mobile">Mobile</label>
            <input type="tel" id="abroad_housing_mobile" name="abroad_housing_mobile" <?php if(!empty($abroad_housing_mobile)) { echo 'value="'.$abroad_housing_mobile.'"'; } ?> placeholder="Abroad housing mobile phone number"  maxlength="40" />
            <label for="abroad_housing_email">Email</label>
            <input type="email" id="abroad_housing_email" name="abroad_housing_email" <?php if(!empty($abroad_housing_email)) { echo 'value="'.$abroad_housing_email.'"'; } ?> placeholder="Abroad housing email"  maxlength="40" />
        </div>
        
        <div class="send_information">
            <h2>Send Information to</h2>
            <label for="personal_email">Email*</label>
            <input type="email" id="personal_email" name="personal_email" placeholder="Your personal email"  maxlength="40" />
            
            <label for="confirm_personal_email">Confirm Email*</label>
            <input type="email" id="confirm_personal_email" name="confirm_personal_email" placeholder="Confirm your personal email" maxlength="40" equalTo="#personal_email" />
        </div>
        
        <div class="sh_box_button">
            <input class="sh_button" type="submit" value="Submit Information" />
            <input type="hidden" id="special_code" name="special_code" value="CenterGlobal8" />
        </div>
    </form>
</div>
