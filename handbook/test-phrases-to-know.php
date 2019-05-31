<?php
	/* http://www.broculos.net/en/article/how-make-simple-html-template-engine-php */
	
	include_once("template.class.php");
	include_once("lib/common-func.php");
    include_once("lib/conn-data.php");
    
	/* Page Title and Header */
	$pageTitle = "Phrases To Know";

	/**
	 * Loop through the users and creates a template for each one.
	 * Because each user is an array with key/value pairs defined, 
	 * we made our template so each key matches a tag in the template,
	 * allowing us to directly replace the values in the array.
	 * We save each template in the $phrasesList array.
	 */
	
	try {
        $conn = connect_db();
        if (!isset($_GET['country'])) throw new Exception("country does not pass in");
        $country_name = ucwords($_GET['country']);           
		if ($country_name == "the country of your choice") {
			$country_name = "General";
		}
        $phrase_category_map = array("a" => "Arrest",
                                     "b" => "Food and Water",
                                     "c" => "General Information",
                                     "d" => "Help",
                                     "e" => "Medical",
                                     "f" => "Money",
                                     "g" => "Transportation");
                                     
        $english_translation = array("Arrest" => array("I am an United States citizen.",
                                                       "Please call the United States Embassy/Consulate immediately.",
                                                       "I have a right to call the United States Embassy/Consulate."),
                                     "Food and Water" => array("Where is the market?",
                                                           "Where can I get something to eat?",
                                                           "I am allergic to ...",
                                                           "Is this safe drinking water?",
                                                           "I can't/don't eat meat/pork, etc."),
                                     "General Information" => array("My name is ...", 
                                                                    "Please speak slowly.",
                                                                    "Where is the nearest (bathroom, telephone, bank, internet café, ...)?",
                                                                    "Where can I find information about ...?",
                                                                    "Can you show me on this map?",
                                                                    "Can you contact this person for me?",
                                                                    "I don't understand.",
                                                                    "What (time, date, day) is it?",
                                                                    "Can you give me directions to ...?",
                                                                    "Can you write this down for me?",
                                                                    "I'm lost."),
                                     "Help" => array("This is an emergency.",
                                                     "I need help.",
                                                     "Where is the police station?",
                                                     "Where can I get help?",
                                                     "Please help me!",
                                                     "Stop! Thief!"),
                                     "Medical" => array("My blood type is ...",
                                                        "Please take me to the hospital/doctor.",
                                                        "I'm allergic to penicillin/aspirin.etc.",
                                                        "I'm not feeling well.",
                                                        "How do I get to the (doctor, hospital)?",
                                                        "I am diabetic, etc."),
                                     "Money" => array("Do you take travelers' checks?",
                                                      "Do you take credit cards?",
                                                      "Where can I exchange money?",
                                                      "Where is the closest ATM?",
                                                      "I need a cash advance from my credit card.",
                                                      "What is the exchange rate for (dollars) to (local currency)?",
                                                      "How much does this cost?"),
                                     "Transportation" => array("How long is the trip?",
                                                               "How much is the ticket?",
                                                               "Can you take me to a (bus,taxi,train,metro)?",
                                                               "Please take me to the airport.",
                                                               "Does this bus/metro stop at...?",
                                                               "Are there student rates?",
                                                               "Where can I get a (bus, taxi, train, metro)?",
                                                               "Where can I rent a car?",
                                                               "What is the fare?")
                                    );
                                    
                                    
         
        $phrases = query_all_phrases_table($country_name);
        
        foreach ($phrase_category_map as $categoryKey => $category) {
            $categoryRow = new Template("content/phrases-to-know-list.tpl");
            // extract key associate with key
            $categoryRow->set('category', $category);
                 
            // unset previous list
            unset($phrasesList);
            
            for ($i = 1; $i <= count($english_translation[$category]); ++$i) {
                    $row = new Template("content/phrases-to-know-item.tpl");
                    
                    $row->set("english", $english_translation[$category][$i-1]);
                    $row->set("translation", $phrases['phrase' . $i . '_' . $categoryKey . '_' . 'text']);
                    
                    $phrasesList[] = $row;
            }
            
            $categoryMergedList = Template::merge($phrasesList);
            $categoryRow->set('phrasesToKnow', $categoryMergedList);            
            $categoryList[] = $categoryRow;
                
        }
		
		/**
		 * Merges all our users' templates into a single variable.
		 * This will allow us to use it in the main template.
		 */
		$phrasesListTemplate = Template::merge($categoryList);
		
		/**
		 * Defines the main template and sets the users' content.
		 */
		$country = query_all_country_table($country_name);
        if (empty($country)) throw new Exception("country does not exist");
		$phrasesToKnowTemplate  = new Template("content/phrases-to-know-content.tpl");
		
		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
			$phrasesToKnowTemplate->set("country", "the ".$country['country_name']);
        }
		else {
			$phrasesToKnowTemplate->set("country", $country['country_name']);
		}
		
		$phrasesToKnowTemplate->set("phrasesLists", $phrasesListTemplate);	

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
		$layout->set("content", $phrasesToKnowTemplate->output());
				
		/**
		 * Finally we can output our final page.
		 */
		disconnect_db($conn);
		echo $layout->output();	
	} catch (Exception $e) {
	   redirect_to_general();
	}
?>