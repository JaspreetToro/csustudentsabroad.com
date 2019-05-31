<?php
	/* http://www.broculos.net/en/article/how-make-simple-html-template-engine-php */
	
	include_once("template.class.php");
	//include_once("lib/common-array.php");
	include_once("lib/common-func.php");
    include("lib/conn-data.php");
	/* Page Title and Header */
	$pageTitle = "Words To Know";

    
	try {
        if (!isset($_GET['country'])) {
            throw new Exception("country name is not specified");
        }

        // get country name
        $country_name = ucwords($_GET['country']);                   
        $conn = connect_db();
                
        $words = query_all_words_table($country_name);

        /* Word to Know */
        // When add new words (use google doc)
        // sed -e 's/^/"/' file | sed -e 's/$/"/' | tr '\r\n' ',' > news
        $englishWord = array(1 => "Airport","ATM","Bank","Bus","Consulate","Embassy","Emergency Room","Fire","Food","Hospital","Hotel","Internet","Lawyer","Market","Metro","Money","Pharmacy","Police Station","Restaurant","Store","Suitcase","Telephone","Train","Translation","University","Ambulance","Baggage Claim","Bathroom","Computer","Doctor","Emergency","Exchange Rate","Fire Station","Help","Hostel","Insurance","Law","Luggage","Medicine","Metro Station","Nurse","Police","Post Office","Station","Street","Taxi","Thief","Train Station","Translator","Water");
        $wordList = array();            				
		foreach ($englishWord as $translationKey => $english) {
			$row = new Template("content/words-to-know-list.tpl");
            $row->set("english", $english);
			$row->set("counter", (($translationKey+1)%2?'odd':'even'));
            $row->set("translation", $words['word' . $translationKey]);
			$wordsList[] = $row;
		}
		
		/**
		 * Merges all our users' templates into a single variable.
		 * This will allow us to use it in the main template.
		 */
		$wordsListTemplate = Template::merge($wordsList);
		
		/**
		 * Defines the main template and sets the users' content.
		 */
		$country = query_all_country_table($country_name);
        if (empty($country)) throw new Exception("country does not exist");
		$wordsToKnowTemplate  = new Template("content/words-to-know-content.tpl");
		
		
		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
			$wordsToKnowTemplate->set("country", "the ".$country['country_name']);
        }
		else {
			$wordsToKnowTemplate->set("country", $country['country_name']);
		}
		
		$wordsToKnowTemplate->set("wordsToKnow", $wordsListTemplate);	

		/**
		 * Loads our layout template, settings its title and content.
		 */
		include("lib/sponsors.php");
		 
		$layout = new Template("lib/layout-theme-print.tpl");
		$layout->set("title", $pageTitle);
		$layout->set("header", $pageTitle);

		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
            $layout->set("country_menu", "in the ".$country['country_name']);   
			$layout->set("language", $country['primary_language']);
			
            $layout->set("country", $country_name);
			$layout->set("country_banner", str_replace(" ","_",$country_name));
			$layout->set("flag_class", "country-flag");		
			
			$layout->set("student_handbook_title", $country_name);
        }
		elseif ($country_name == "General") {
			 $layout->set("country_menu", "Abroad");
			 $layout->set("language", "a Language");

            $layout->set("country", "Worldwide"); 
			$layout->set("country_banner", "Worldwide");
			$layout->set("flag_class", "worldwide-flag");
			
			$layout->set("student_handbook_title", "Study Abroad");  
		}
		else {
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
		$layout->set("content", $wordsToKnowTemplate->output());
				
		/**
		 * Finally we can output our final page.
		 */
        disconnect_db($conn);		 
		echo $layout->output();	
	} catch (Exception $ex) {
        redirect_to_general();
	}
?>