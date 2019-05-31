<div id="actual_content">
    <h1 id="title">Emergency Card</h1>
    <div id="content_container">
        <p>Print out the Emergency Card. Fill it in. Leave a copy with your U.S. emergency contacts, with your abroad emergency contacts, and keep a copy with you at all times.</p>
        <p>* Required information</p>
        <!-- <div class="img_container"><a href="images/country_img/emergencycard.jpg" target="_blank"><img src="images/country_img/emergencycard.jpg" width="575" height="385" alt="Student Emergency Information Card" /></a></div> -->
        <div id="emergency-card">
        	<div class="form-step"><span>Step 1 of 3</span></div>
            <div class="form-instruction"><p>Sign up for an Emergency Card.</p></div>
            <div class="emergency-card-form">
                <form id="myEmergencyCardForm" name="myEmergencyCardForm" method="post" action="../emergency-card.php?country=[@country_param]">
                    <div>
                        <h2>Student Information</h2>
                        <label for="full_name">Student Name*</label>
                        <input type="text" id="full_name" name="full_name" placeholder="Your full name" maxlength="40" />
                        <div class="date-of-birth">
                            <label for="birth">Date of Birth*</label>
                            <input type="text" id="birth_month" name="birth_month" placeholder="Month" maxlength="2" />
                            <input type="text" id="birth_date" name="birth_date" placeholder="Day" maxlength="2" />
                            <input type="text" id="birth_year" name="birth_year" placeholder="Year" maxlength="4" />
                        </div>
                        <label for="citizenship">Citizenship*</label>
                        <input type="text" id="citizenship" name="citizenship" placeholder="Your citizenship" maxlength="40" />
                    </div>
                    <div>
                        <label for="passport_number">Passport Number*</label>
                        <input type="text" id="passport_number" name="passport_number" placeholder="Your passport number" maxlength="40" />
                    </div>
                    <div>
                        <label for="program_name">Study Abroad Program Name*</label>
                        <input type="text" id="program_name" name="program_name" placeholder="Your study abroad program name" maxlength="40" />
                    </div>
                    <div>
                        <h2>Medical Information</h2>
                        <label for="blood_type">Blood Type</label>
                        <input type="text" id="blood_type" name="blood_type" placeholder="Your blood type" maxlength="40" />
                        <label for="medical_conditions">Special Medical Conditions</label>
                        <input type="text" id="medical_conditions" name="medical_conditions" placeholder="List of special medical conditions" maxlength="40" />
                    </div>
                    <div>
                        <h2>Primary Personal Contact</h2>
                        <label for="wishes">Name*</label>
                        <input type="text" id="wishes" name="wishes" placeholder="Primary personal contact name" maxlength="40" />
                        <label for="wishes_address">Address</label>
                        <input type="text" id="wishes_address" name="wishes_address" placeholder="Primary personal contact address" maxlength="45" />
                        <label for="wishes_tel">Phone*</label>
                        <input type="tel" id="wishes_tel" name="wishes_tel" placeholder="Primary personal contact phone number" maxlength="40" />
                        <label for="wishes_mobile">Mobile</label>
                        <input type="text" id="wishes_mobile" name="wishes_mobile" placeholder="Primary personal contact mobile phone number" maxlength="40" />
                        <label for="wishes_email">Email</label>
                        <input type="text" id="wishes_email" name="wishes_email" placeholder="Primary personal contact email" maxlength="40" />
                    </div>
                    <div>
                        <h2>Secondary Personal Contact</h2>
                        <label for="family_contact">Name*</label>
                        <input type="text" id="family_contact" name="family_contact" placeholder="Secondary personal name" maxlength="40" />
                        <label for="family_address">Address</label>
                        <input type="text" id="family_address" name="family_address" placeholder="Secondary personal address" maxlength="45" />
                        <label for="family_tel">Phone*</label>
                        <input type="tel" id="family_tel" name="family_tel" placeholder="Secondary personal phone number" maxlength="40" />
                        <label for="family_mobile">Mobile</label>
                        <input type="tel" id="family_mobile" name="family_mobile" placeholder="Secondary personal mobile phone number" maxlength="40" />
                        <label for="family_email">Email</label>
                        <input type="email" id="family_email" name="family_email" placeholder="Secondary personal email" maxlength="40" />
                    </div>
                    <div>
                        <h2>Insurance Company</h2>
                        <label for="insurance_company">Name*</label>
                        <input type="text" id="insurance_company" name="insurance_company" placeholder="Your insurance company" maxlength="40" />
                        <label for="policy_number">Policy Number*</label>
                        <input type="text" id="policy_number" name="policy_number" placeholder="Your policy number" maxlength="40" />
                        <label for="emergency_phone">24 Hour Emergency Phone*</label>
                        <input type="tel" id="emergency_phone" name="emergency_phone" placeholder="Your 24 hour phone number" maxlength="40" />
                    </div>
                    <div>
                        <h2>Abroad/ On&ndash;Site Program Information</h2>
                        <label for="abroad_program_contact">Name*</label>
                        <input type="text" id="abroad_program_contact" name="abroad_program_contact" placeholder="Abroad program contact" maxlength="40" />
                        <label for="abroad_program_address">Address</label>
                        <input type="text" id="abroad_program_address" name="abroad_program_address" placeholder="Abroad program address" maxlength="45" />
                        <label for="abroad_program_tel">Phone*</label>
                        <input type="tel" id="abroad_program_tel" name="abroad_program_tel" placeholder="Abroad program phone number" maxlength="40" />
                        <label for="abroad_program_mobile">Mobile</label>
                        <input type="tel" id="abroad_program_mobile" name="abroad_program_mobile" placeholder="Abroad program mobile phone number" maxlength="40" />
                        <label for="abroad_program_email">Email</label>
                        <input type="email" id="abroad_program_email" name="abroad_program_email" placeholder="Abroad program email" maxlength="40" />
                    </div>
                    <div>
                        <h2>Home (U.S.) Campus Information</h2>
                        <label for="home_campus_contact">Name*</label>
                        <input type="text" id="home_campus_contact" name="home_campus_contact" placeholder="U.S. campus contact" maxlength="40" />
                        <label for="home_campus_address">Address</label>
                        <input type="text" id="home_campus_address" name="home_campus_address" placeholder="U.S. campus contact address" maxlength="45" />
                        <label for="home_campus_tel">Phone*</label>
                        <input type="tel" id="home_campus_tel" name="home_campus_tel" placeholder="U.S. campus phone number" maxlength="40" />
                        <label for="home_campus_mobile">Mobile</label>
                        <input type="tel" id="home_campus_mobile" name="home_campus_mobile" placeholder="U.S. campus mobile phone number" maxlength="40" />
                        <label for="home_campus_email">Email</label>
                        <input type="email" id="home_campus_email" name="home_campus_email" placeholder="U.S. campus email" maxlength="40" />
                    </div>
                    <div>
                        <h2>Closest U.S. Embassy/ Consulate to Program Location</h2>
                        <p class="note">Note: If you are not a U.S. Citizen, use the information of Embassy/ Consulate from your country of citizenship.</p>
                        <label for="embassy_consulate">Name*</label>
                        <input type="text" id="embassy_consulate" name="embassy_consulate" placeholder="Embassy/consulate name" maxlength="40" />
                        <label for="embassy_consulate_address">Address</label>
                        <input type="text" id="embassy_consulate_address" name="embassy_consulate_address" placeholder="Embassy/consulate address" maxlength="45" />
                        <label for="embassy_consulate_tel">Phone*</label>
                        <input type="tel" id="embassy_consulate_tel" name="embassy_consulate_tel" placeholder="Embassy/consulate phone number" maxlength="40" />
                        <label for="embassy_consulate_email">Email</label>
                        <input type="email" id="embassy_consulate_email" name="embassy_consulate_email" placeholder="Embassy/consulate email" maxlength="40" />
                    </div>                    
                    <div>
                        <h2>Nearest Hospital Abroad</h2>
                        <label for="nearest_hospital_abroad">Name</label>
                        <input type="text" id="nearest_hospital_abroad" name="nearest_hospital_abroad" placeholder="Nearest hospital abroad" maxlength="40" />
                        <label for="nearest_hospital_abroad_address">Address</label>
                        <input type="text" id="nearest_hospital_abroad_address" name="nearest_hospital_abroad_address" placeholder="Nearest hospital abroad address" maxlength="45" />
                        <label for="nearest_hospital_abroad_tel">Phone</label>
                        <input type="tel" id="nearest_hospital_abroad_tel" name="nearest_hospital_abroad_tel" placeholder="Nearest hospital abroad phone number" maxlength="40" />
                    </div>
                    <div>
                        <h2>Equivalent of 9&ndash;1&ndash;1 Emergency Abroad</h2>
                        <label for="equivalent_911_abroad">Phone*</label>
                        <input type="tel" id="equivalent_911_abroad" name="equivalent_911_abroad" placeholder="Equivalent 9&ndash;1&ndash;1 abroad phone number" maxlength="40" />
                    </div>
                    <div>
                        <h2>Abroad Housing Information</h2>
                        <label for="abroad_housing_contact">Name</label>
                        <input type="text" id="abroad_housing_contact" name="abroad_housing_contact" placeholder="Abroad housing contact" maxlength="40" />
                        <label for="abroad_housing_address">Address</label>
                        <input type="text" id="abroad_housing_address" name="abroad_housing_address" placeholder="Abroad housing contact address" maxlength="45" />
                        <label for="abroad_housing_tel">Phone</label>
                        <input type="tel" id="abroad_housing_tel" name="abroad_housing_tel" placeholder="Abroad housing phone number" maxlength="40" />
                        <label for="abroad_housing_mobile">Mobile</label>
                        <input type="tel" id="abroad_housing_mobile" name="abroad_housing_mobile" placeholder="Abroad housing mobile phone number" maxlength="40" />
                        <label for="abroad_housing_email">Email</label>
                        <input type="email" id="abroad_housing_email" name="abroad_housing_email" placeholder="Abroad housing email" maxlength="40" />
                    </div>
                    
                    <!-- <div class="send_information">
                        <h2>Send Information to</h2>
                        <label for="personal_email">Email*</label>
                        <input type="email" id="personal_email" name="personal_email" placeholder="Your personal email"  maxlength="40" />
                        
                        <label for="confirm_personal_email">Confirm Email*</label>
                        <input type="email" id="confirm_personal_email" name="confirm_personal_email" placeholder="Confirm your personal email" maxlength="40" equalTo="#personal_email" />
                    </div> -->
                    
                    <div class="sh_box_button">
                        <input class="sh_button" type="submit" name="Next" value="Next" />
                        <input type="hidden" id="special_code" name="special_code" value="CenterGlobal8" />
                  
                    </div>
        
                    <!-- <div class="sh_box_button">
                        <input class="sh_button" type="submit" value="Next" />
                        <input type="hidden" id="special_code" name="special_code" value="CenterGlobal7" />
                    </div>-->
                </form>
                
            </div>
        </div>
    </div>
</div>