<?php
    /* http://www.broculos.net/en/article/how-make-simple-html-template-engine-php */
    
    include_once("template.class.php");
    include_once("lib/common-func.php");
    include("lib/conn-data.php");

    /* Page Title and Header */
    $pageTitle = "Resources";

    /**
     * Loop through the users and creates a template for each one.
     * Because each user is an array with key/value pairs defined, 
     * we made our template so each key matches a tag in the template,
     * allowing us to directly replace the values in the array.
     * We save each template in the $artsAndCultureList array.
     */
    
    try {
        if (!isset($_GET['country'])) throw new Exception("country does not pass in");        
        $country_name = ucwords($_GET['country']);           

 
 /*		if ($country_name == "the country of your choice") {
			$country_name = "General";
		}
 */
        $conn = connect_db();
                        
        $country = query_all_country_table($country_name);
        if (empty($country)) throw new Exception("country does not exist");
        
        $mainTemplate = new Template("content/resources-content.tpl");
         
		if ($country_name == "United States" || $country_name == "United Kingdom" || $country_name == "Czech Republic" || $country_name == "Dominican Republic") {
			$mainTemplate->set("country", "the ".$country['country_name']); 
        }
		else {
			$mainTemplate->set("country", $country['country_name']); 
		}
		
		/* Takes care of US Embassy URLs) */
		if ($country['country_name'] == "United States") {
			$mainTemplate->set("country_URLs", "usembassy.gov");  
		} else if ($country['country_name'] == "South Korea") {
			$mainTemplate->set("country_URLs", "seoul.usembassy.gov");  	
		} else if ($country['country_name'] == "Cuba") {
			$mainTemplate->set("country_URLs", "havana.usint.gov/");  	
		} else {
			$str_country_URLs = str_replace(" ", "", $country['country_name']);
			$mainTemplate->set("country_URLs", $str_country_URLs.".usembassy.gov");
		}
		
		
		
        $mainTemplate->set("countryPrimaryLanguage", $country['primary_language']);
        $mainTemplate->set("nationality1", $country['nationality']);        
        
        $resources = query_all_resources_table($country_name);
        
        $mapCategory = array("Arts and Culture" => "artsAndCultureList", 
                     "Background Information" => "backgroundInformationList",
                     "Consulate and Embassies" => "consulateAndEmbassiesList",
                     "Government and Politics" => "governmentAndPoliticsList",
                     "Medical" => "medicalList",
                     "Travel Advisories" => "travelList");
                
        foreach ($resources as $key => $value) {
            if (preg_match("/_category$/", $key)) {
                $row = new Template("content/resources-list.tpl");
                $category = substr($key, 0, -8);
                $categoryName = $value;
                $row->set("category", $categoryName);
                 
                $resourcesListTemplates = array();
                for ($i = 1; isset($resources[$category . 'url' . $i]); ++$i) {
                    $itemRow = new Template("content/resources-item.tpl");
                    $itemRow->set("title", $resources[$category . 'url' . $i . "_text"]);
                    $itemRow->set("description", $resources[$category . 'url' . $i . "_description" ]);
                    $itemRow->set("URL", $resources[$category . 'url' . $i]);
                    $resourcesListTemplates[] = $itemRow;                    
                
                }                
				
                // at least one item for resource list, otherwise don't output
                if (count($resourcesListTemplates) > 0) {
                    $categoryMergedList = Template::merge($resourcesListTemplates);
                    $row->set('itemList', $categoryMergedList);
                    
                    // set category into main template
                    $mainTemplate->set($mapCategory[$categoryName], $row->output());
                }
				else {
                    $row->set('itemList', '');
                    // set category into main template
                    $mainTemplate->set($mapCategory[$categoryName], $row->output());
				}
            }                       
        }
               
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
		$layout->set("content", $mainTemplate->output());
                
        /**
         * Finally we can output our final page.
         */
        echo $layout->output(); 
    } catch (Exception $e) {    
        output_error_page($e);
    }
?>