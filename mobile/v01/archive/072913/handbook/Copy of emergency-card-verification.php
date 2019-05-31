<?php
	/* http://www.broculos.net/en/article/how-make-simple-html-template-engine-php */
	
	include("template.class.php");
	//include("lib/common-array.php");
	include_once("lib/common-func.php");
	include("lib/conn-data.php");

	/* Page Title and Header */
	$pageTitle = "Emergency Card";
	/* 
	 * Students Abroad Handbook Category: 
	 * 0 = Understanding Study Abroad
	 * 1 = Choosing a Program
	 * 2 = Practical Information
	 * 3 = Health and Safety
	 * 4 = Coming Home
	 * 5 = Tools for Planning
	 */
	$handbook_category = 5;	
	try {
		/**
		 * Loop through the users and creates a template for each one.
		 * Because each user is an array with key/value pairs defined, 
		 * we made our template so each key matches a tag in the template,
		 * allowing us to directly replace the values in the array.
		 * We save each template in the $usersTemplates array.
		 */
        if (!isset($_GET['country'])) throw new Exception("country does not pass in");
        $country_name = ucwords($_GET['country']);           
        $conn = connect_db();
		
		/* form validation */		
		if(isset($_POST['Next'])){		
			$special_code = trim($_POST['special_code']);
		
			if( empty($special_code) ) {	
				//print_r ($_POST);
				
				/* Student Information */
				$full_name = trim($_POST["full_name"]);  
				$birth_month = trim($_POST["birth_month"]);
				$birth_date = trim($_POST["birth_day"]);				
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
				
				/* required */
					if(strlen($full_name) < 0 || $full_name == "") {
						$full_name_error = '<span class="error">Enter your name</span>';
						$req_error .= $full_name_error;
					}
					
					if( strlen($birth_month) < 0 || strlen($birth_date) < 0 || strlen($birth_year < 0 ) {
						$date_of_birth_error = '<span class="error">Enter a valid date of birth</span>';
						$req_error .= $date_of_birth_error;
					} elseif ( !isNumeric($birth_month) || !isNumeric($birth_date) || !isNumeric($birth_year) ) {
						$date_of_birth_error = '<span class="error">Enter a valid date of birth</span>';
						$req_error .= $date_of_birth_error;
					}
					
					if(strlen($citizenship) < 0 || $citizenship == "") {
						$citizenship_error = '<span class="error">Enter your citizenship</span>';
						$req_error .= $citizenship_error;
					}
					if(strlen($passport_number) < 0 || $$passport_number == "") {
						$passport_number_error = '<span class="error">Enter your citizenship</span>';
						$req_error .= $passport_number_error;
					}
					if(strlen($program_name) < 0 || $program_name == "") {
						$program_name_error = '<span class="error">Enter your program name</span>';
						$req_error .= $program_name_error;
					}
					
					/* Primary */
					if(strlen($wishes) < 0 || $wishes == "") {
						$wishes_error = '<span class="error">Enter your primary contact</span>';
						$req_error .= $wishes_error;
					}
					if(strlen($wishes_tel) < 0 || $wishes_tel == "") {
						if(!preg_match("/^[0-9]+$/", $wishes_tel))
						{
							$wishes_tel_error = '<span class="error">Enter valid primary contact phone number</span>';
							$req_error .= $wishes_tel_error;
						}
					}					
					if(!preg_match("/^[0-9]+$/", $wishes_mobile))
					{
						$wishes_mobile_error = '<span class="error">Enter valid primary contact mobile phone number</span>';
						$error .= $wishes_mobile_error;	
					}					
					if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $wishes_email))
					{
						$wishes_email_error = '<span class="error">Enter valid primary contact email</span>';
						$error .= $wishes_email_error;
					}
				
					/* Secondary */
					if(strlen($family_contact) < 0 || $family_contact == "") {
						$family_error = '<span class="error">Enter your secondary contact</span>';
						$req_error .= $family_contact_error;
					}
					if(strlen($family_tel) < 0 || $family_tel == "") {
						if(!preg_match("/^[0-9]+$/", $family_tel))
						{
							$family_tel_error = '<span class="error">Enter your secondary contact phone number</span>';
							$req_error .= $family_tel_error;			
						}
					}					
					if(!preg_match("/^[0-9]+$/", $family_mobile))
					{
						$family_mobile_error = '<span class="error">Enter valid secondary contact mobile phone number</span>';
						$error .= $family_mobile_error;
					}					
					if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $family_email))
					{
						$family_email '<span class="error">Enter valid secondary contact email</span>';
						$error .= $family_email_error;
					}
					
					/* insurance */
					if(strlen($insurance_company) < 0 || $insurance_company == "") {
						$insurance_company_error = '<span class="error">Enter your insurance company</span>';
						$req_error .= $insurance_company_error;
					}
					if(strlen($policy_number) < 0 || $policy_number == "") {
						$policy_number_error = '<span class="error">Enter your policy number</span>';
						$req_error .= $policy_number_error;
					}
					if(strlen($emergency_phone) < 0 || $emergency_phone == "") {
						if(!preg_match("/^[0-9]+$/", $emergency_phone))
						{
							$emergency_phone_error = '<span class="error">Enter 24 hour emergency phone number</span>';
							$req_error .= $emergency_phone_error;			
						}
					}
					
					/* abroad/on-site program contact */
					if(strlen($abroad_program_contact) < 0 || $abroad_program_contact == "") {
						$abroad_program_error = '<span class="error">Enter your abroad program contact</span>';
						$req_error .= $abroad_program_error;
					}
					if(strlen($abroad_program_tel) < 0 || $abroad_program_tel == "") {
						if(!preg_match("/^[0-9]+$/", $abroad_program_tel))
						{
							$abroad_program_tel_error = '<span class="error">Enter your abroad program phone number</span>';
							$req_error .= $abroad_program_tel_error;			
						}
					}					
					if(!preg_match("/^[0-9]+$/", $abroad_program_mobile))
					{
						$abroad_program_mobile_error = '<span class="error">Enter valid abroad program mobile phone number</span>';
						$error .= $abroad_program_mobile_error;
					}					
					if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $abroad_program_email))
					{
						$abroad_program_email '<span class="error">Enter valid abroad program email</span>';
						$error .= $abroad_program_email_error;
					}
				
					/* home u.s. campus contact */
					if(strlen($home_campus_contact) < 0 || $home_campus_contact == "") {
						$home_campus_contact_error = '<span class="error">Enter your U.S. campus contact</span>';
						$req_error .= $home_campus_contact_error;
					}
					if(strlen($home_campus_tel) < 0 || $home_campus_tel == "") {
						if(!preg_match("/^[0-9]+$/", $home_campus_tel))
						{
							$home_campus_tel_error = '<span class="error">Enter your U.S. campus phone number</span>';
							$req_error .= $home_campus_tel_error;			
						}
					}					
					if(!preg_match("/^[0-9]+$/", $home_campus_mobile))
					{
						$home_campus_mobile_error = '<span class="error">Enter valid U.S. campus mobile phone number</span>';
						$error .= $home_campus_mobile_error;
					}					
					if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $home_campus_email))
					{
						$home_campus_email '<span class="error">Enter valid U.S. campus email</span>';
						$error .= $home_campus_email_error;
					}
					
				
					/* closest u.s. embassy/ consulate */
					if(strlen($embassy_consulate) < 0 || $embassy_consulate == "") {
						$embassy_consulate_error = '<span class="error">Enter your embassy/consulate contact</span>';
						$req_error .= $embassy_consulate_error;
					}
					if(strlen($embassy_consulate_tel) < 0 || $embassy_consulate_tel == "") {
						if(!preg_match("/^[0-9]+$/", $embassy_consulate_tel))
						{
							$embassy_consulate_tel_error = '<span class="error">Enter your embassy/consulate phone number</span>';
							$req_error .= $embassy_consulate_tel_error;			
						}
					}					
					if(!preg_match("/^[0-9]+$/", $embassy_consulate_mobile))
					{
						$embassy_consulate_mobile_error = '<span class="error">Enter valid embassy/consulate mobile phone number</span>';
						$error .= $embassy_consulate_mobile_error;
					}					
					if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $embassy_consulate_email))
					{
						$embassy_consulate_email '<span class="error">Enter valid embassy/consulate email</span>';
						$error .= $embassy_consulate_email_error;
					}
					
					/* equivalent 911 */
					if(!preg_match("/^[0-9]+$/", $equivalent_911_abroad))
					{
						$equivalent_911_abroad_error = '<span class="error">Enter equivalient of 9-1-1 emergency abroad</span>';
						$req_error .= $equivalent_911_abroad_error;
					}	
					
					/* if required, no error */
					if ($req_error == "" ) {
						
					}
				/* end required */
				
			} throw new Exception ("There was a problem creating your Emergency Card. Please contact us so we can further assist you. Thank you.");
		}
		/* end form validation */
		
		
		
		/**
		 * Defines the main template and sets the users' content.
		 */
		$country = query_all_country_table($country_name); 
        if (empty($country)) throw new Exception("country does not exist");
		$emergencyCardContent  = new Template("content/emergency-card-verification-content.tpl");
		
		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
			$emergencyCardContent->set("country", "the ".$country['country_name']);
			$emergencyCardContent->set("country_param", $country_name);	
        }
		else {
			$emergencyCardContent->set("country", $country['country_name']);
			$emergencyCardContent->set("country_param", $country_name);
		}		
		
		
		
		
		
		
		
		/**
		 * Loads our layout template, settings its title and content.
		 */
		include("lib/sponsors.php");
		$layout = new Template("lib/layout-theme.tpl");
		$layout->set("title", "Emergency Card");
		$layout->set("header", "Emergency Card");

		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
			$layout->set("category_menu", print_category_menu($handbook_category, $country_name, $country['primary_language'], "in the ".$country['country_name']));
            $layout->set("country_menu", "in the ".$country['country_name']);   
			$layout->set("language", $country['primary_language']);
			
            $layout->set("country", $country_name);
			$layout->set("country_banner", str_replace(" ","_",$country_name));
			$layout->set("flag_class", "country-flag");		
			
			$layout->set("student_handbook_title", $country_name);
        }
		elseif ($country_name == "General") {
			$layout->set("category_menu", print_category_menu($handbook_category, $country_name, "a Language", "Abroad"));
			 $layout->set("country_menu", "Abroad");
			 $layout->set("language", "a Language");

            $layout->set("country", "Worldwide"); 
			$layout->set("country_banner", "Worldwide");
			$layout->set("flag_class", "worldwide-flag");
			
			$layout->set("student_handbook_title", "Study Abroad");  
		}
		else {
			$layout->set("category_menu", print_category_menu($handbook_category, $country_name, $country['primary_language'], "in ".$country['country_name']));
			$layout->set("country_menu", "in ".$country['country_name']);
			$layout->set("language", $country['primary_language']);

            $layout->set("country", $country_name);
			$layout->set("country_banner", str_replace(" ","_",$country_name));
			$layout->set("flag_class", "country-flag");
			
			$layout->set("student_handbook_title", $country_name);
		} 
		
        $layout->set("country_option_menu", generate_country_specific_menu(($country_name)));
		$layout->set("country_link", $country_name);
        
		$layout->set("sponsors", get_main_sponsor($country_name));
		$layout->set("subsponsors", get_sub_sponsor($country_name));
		/* lead sponsors 
		   $lead_count_MAX => Number of boxes to appear in a row
		*/
		$lead_box_count = 1;
		$lead_count_MAX = 1;//MAX count Boxes
		$layout->set("lead_sponsors".$lead_box_count."", get_lead_sponsor2($country_name, $lead_box_count, $lead_count_MAX));
		
        /* main sponsors 
			$main_count_MAX => Number of boxes to appear in a row
		*/		
		
		$main_box_count = 1;
		$main_count_MAX = 3;//MAX count Boxes
		$layout->set("main_sponsors", print_main_sponsor2($country_name, $main_box_count, $main_count_MAX));
		
		/* subsponsors 
		   $sub_count_MAX => Number of boxes to appear in a row
		*/
		$sub_box_count = 1;
		$sub_count_MAX = 2;//MAX count Boxes
		$layout->set("subsponsors".$sub_box_count."", print_sub_sponsor2($country_name, $sub_box_count, $sub_count_MAX));
		$layout->set("content", $emergencyCardContent->output());
		
		/**
		 * Finally we can output our final page.
		 */
		echo $layout->output();	
	} catch (Exception $e) {
	    redirect_to_general();
	}		
?>