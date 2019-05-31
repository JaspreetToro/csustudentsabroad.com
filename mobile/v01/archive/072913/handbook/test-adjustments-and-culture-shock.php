<?php
	/* http://www.broculos.net/en/article/how-make-simple-html-template-engine-php */
	
	include("template.class.php");
	//include("lib/common-array.php");
	include_once("lib/common-func.php");
	include("lib/conn-data.php");
	
	/* Page Title and Header */
	$pageTitle = "Adjustments and Culture Shock";

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
        
        $cultureShockLinkTemplates = array();    
		
		$links = query_all_links_table($country_name);
		
		foreach ($links as $key => $value) {

			$row = new Template("content/handbook/health-and-safety/adjustments-and-culture-shock-links.tpl");
			
            if (preg_match("/_t_text$/", $key)) {
    			$row->set("title", $value);
                /*
                echo "KEY: " . $key . "<br>";
                echo "title: " .$value. "<br>";
                echo "KEY: " . substr($key, 0, -5) . "<br>";
                echo "URL: " . $links[substr($key, 0, -5)] . "<br>";
                */
				$row->set("URL", $links[substr($key, 0, -5)]);
                $cultureShockLinkTemplates[] = $row;   
            }
			
		}
		
		/**
		 * Merges all our users' templates into a single variable.
		 * This will allow us to use it in the main template.
		 */
		
		$cultureShockLinkContents = Template::merge($cultureShockLinkTemplates);
		
		/**
		 * Defines the main template and sets the users' content.
		 */
		$country = query_all_country_table($country_name);
		if (empty($country)) throw new Exception("country does not exist");
        
		$cultureShockList  = new Template("content/handbook/health-and-safety/adjustments-and-culture-shock-content.tpl");
		
		
		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
			$cultureShockList->set("country", "the ".$country['country_name']);       
        }
		else {
			$cultureShockList->set("country", $country['country_name']);
		}
		
		$cultureShockList->set("nationality1", $country['nationality']);
		$cultureShockList->set("countryPrimaryLanguage", $country['country_name']);
		$cultureShockList->set("linksToRemember", $cultureShockLinkContents);	
		
		/**
		 * Loads our layout template, settings its title and content.
		 */
		include("lib/sponsors.php");
		$layout = new Template("lib/test-layout-theme.tpl");
		$layout->set("title", $pageTitle);
		$layout->set("header", $pageTitle);
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
        $layout->set("language", $country['primary_language']);
        
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

		$layout->set("content", $cultureShockList->output());        
		
		/**
		 * Finally we can output our final page.
		 */
		echo $layout->output();
	} catch (Exception $e) {	
		redirect_to_general();		
	}	
?>