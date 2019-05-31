<?php
	/* http://www.broculos.net/en/article/how-make-simple-html-template-engine-php */
	
	include("template.class.php");
	//include("lib/common-array.php");
	include_once("lib/common-func.php");
	include("lib/conn-data.php");

	/* Page Title and Header */
	$pageTitle = "Basic Health and Safety";

	try {
		/**
		 * Loop through the users and creates a template for each one.
		 * Because each user is an array with key/value pairs defined, 
		 * we made our template so each key matches a tag in the template,
		 * allowing us to directly replace the values in the array.
		 * We save each template in the $usersTemplates array.
		 */
        if (!isset($_GET['country'])) {
            throw new Exception("country name is not specified");
        }
		
        $country_name = ucwords($_GET['country']);           
        $conn = connect_db();
        $basicHealthAndSafetyLinkTemplates = array();    
		$transportationDescriptionLinkTemplates= array(); 
		$links = query_all_links_table($country_name);
		$country_health_safety = query_all_country_table($country_name);
		$count_type = 1;
		$count_desc = 1;

		foreach ($links as $key => $value) {
			$row = new Template("content/handbook/health-and-safety/basic-health-and-safety-links.tpl");
			
            if (preg_match("/_p_text$/", $key)) {
    			$row->set("title", $value);
				$row->set("URL", $links[substr($key, 0, -5)]);
                $basicHealthAndSafetyLinkTemplates[] = $row;
            }
		}		
				
		foreach ($country_health_safety as $key => $value) {
			$row = new Template("content/handbook/health-and-safety/basic-health-and-safety-transportation.tpl");
			
            if (preg_match("/_type$/", $key)) {
    			$row->set("title", $country_health_safety[$key]);
				$row->set("description", $country_health_safety[substr($key, 0, -4) . 'description']);
				$transportationDescriptionLinkTemplates[] = $row;
            }
			
		}
		
		/**
		 * Merges all our users' templates into a single variable.
		 * This will allow us to use it in the main template.
		 */
		
		$basicHealthAndSafetyLinkContents = Template::merge($basicHealthAndSafetyLinkTemplates);
		$transportationDescriptionContents = Template::merge($transportationDescriptionLinkTemplates);
		
		/**
		 * Defines the main template and sets the users' content.
		 */
		$country = query_all_country_table($country_name);
        if (empty($country)) throw new Exception("country does not exist");        
		$basicHealthAndSafetyList  = new Template("content/handbook/health-and-safety/basic-health-and-safety-content.tpl");
		
		
		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
			$basicHealthAndSafetyList->set("country", "the ".$country['country_name']);
        }
		else {
			$basicHealthAndSafetyList->set("country", $country['country_name']);
		}
		
		$basicHealthAndSafetyList->set("countrySafetyURLAustralian", $country['safety_country1_URL']);
		$basicHealthAndSafetyList->set("countrySafetyURLCanada", $country['safety_country2_URL']);
		$basicHealthAndSafetyList->set("countrySafetyURLUK", $country['safety_country3_URL']);
		$basicHealthAndSafetyList->set("transportationDescription", $transportationDescriptionContents);
		$basicHealthAndSafetyList->set("linksToRemember", $basicHealthAndSafetyLinkContents);	
		
		/**
		 * Loads our layout template, settings its title and content.
		 */
		include("lib/sponsors.php");
		$layout = new Template("lib/test-layout-theme.tpl");
		$layout->set("title", $pageTitle);
		$layout->set("header", $pageTitle);
		//layout->set("country", strtolower ($country_health_safety['country_name']));
        $layout->set("country", $country['country_name']);
		
		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
            $layout->set("country_menu", "the ".$country['country_name']);          
        }
		else {
			$layout->set("country_menu", $country['country_name']);
		}
		
		if ($country_name == "General") {
            $layout->set("student_handbook_title", "Study Abroad");      
			$layout->set("country", "Worldwide"); 
			$layout->set("country_banner", "Worldwide");
			$layout->set("flag_class", "worldwide-flag");
        }
        else {
            $layout->set("student_handbook_title", $country_name);
			$layout->set("country", $country_name);
			$layout->set("country_banner", str_replace(" ","_",$country_name));
			$layout->set("flag_class", "country-flag");
        }
        $layout->set("country_option_menu", generate_country_specific_menu(($country_name)));   		
        $layout->set("country_link", $country_name);
        $layout->set("language", $country_health_safety['primary_language']);
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
		$main_count_MAX = 2;//MAX count Boxes
		$layout->set("main_sponsors", print_main_sponsor2($country_name, $main_box_count, $main_count_MAX));
		
		/* subsponsors 
		   $sub_count_MAX => Number of boxes to appear in a row
		*/
		$sub_box_count = 1;
		$sub_count_MAX = 2;//MAX count Boxes
		$layout->set("subsponsors".$sub_box_count."", print_sub_sponsor2($country_name, $sub_box_count, $sub_count_MAX));
		$layout->set("content", $basicHealthAndSafetyList->output());
		
		/**
		 * Finally we can output our final page.
		 */
		echo $layout->output();
	} catch (Exception $e) {	
        redirect_to_general();
	}	
?>