<?php
	require_once("template.class.php");
	
	function output_empty_page($pageTitle) {
		$layout = new Template("lib/layout-theme.tpl");
		$layout->set("title", $pageTitle);
		$layout->set("header", $pageTitle);
        $layout->set("country", '');	 
		$layout->set("content", "Error 404 - Country not found" );
        echo $layout->output();
    }

	function print_category_menu($category, $country_name, $language, $country_menu) {
		$language = (string)$language;
		$country_menu = (string)$country_menu;
		$html = "";
		$html = "<div class=\"sub-navigation\">"; 
		$html = $html. "<div class=\"menu\">"; 
		$html = $html. "<a class=\"category\" href=\"#\">Understanding Study Abroad</a>"; 
		$html = $html. "<div class=\"dropdown category-wrapper\" style=\"display: none;\">"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"introduction.php?country=$country_name\">Introduction</a></li>"; 
		$html = $html. "<li><a href=\"why-study-abroad.php?country=$country_name\">Why Study Abroad?</a></li>"; 
		$html = $html. "<li><a href=\"why-learn-a-language.php?country=$country_name\">Why Learn a Language?</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"advice-for-parents.php?country=$country_name\">Advice for Parents</a></li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</div>"; 
		$html = $html. "</div>"; 
			
		$html = $html. "<div class=\"menu\">"; 
		$html = $html. "<a class=\"category\" href=\"#\">Choosing a Program</a>"; 
		$html = $html. "<div class=\"dropdown category-wrapper\" style=\"display: none;\">"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"finding-quality-program.php?country=$country_name\">Finding a Quality Program</a></li>"; 
		$html = $html. "<li><a href=\"select-the-right-program.php?country=$country_name\">Selecting the Right Program for You</a></li>"; 
		$html = $html. "<li><a href=\"who-runs-your-program.php?country=$country_name\">Who Runs Your Program</a></li>"; 
		$html = $html. "<li><a href=\"\">Financing Study Abroad</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"application-process.php?country=$country_name\">Application Process</a></li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</div>"; 
		$html = $html. "</div>"; 
			
		$html = $html. "<div class=\"menu\">"; 
		$html = $html. "<a class=\"category\" href=\"#\">Practical Information</a>"; 
		$html = $html. "<div class=\"dropdown category-wrapper\" style=\"display: none;\">"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"pre-departure-planning.php?country=$country_name\">Pre-Departure Planning</a></li>"; 
		$html = $html. "<li><a href=\"how-foreign-laws-apply-to-you.php?country=$country_name\">How Foreign Law Apply to You</a></li>"; 
		$html = $html. "<li><a href=\"communication-while-abroad.php?country=$country_name\">Communication While Abroad</a></li>"; 
		$html = $html. "<li><a href=\"housing.php?country=$country_name\">Housing</a></li>"; 
		$html = $html. "<li><a href=\"packing.php?country=$country_name\">Packing</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"expectations.php?country=$country_name\">Expectations</a></li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</div>"; 
		$html = $html. "</div>"; 
		$html = $html. "<div class=\"menu\">"; 
		$html = $html. "<a class=\"category\" href=\"#\">Health and Safety</a>"; 
		$html = $html. "<div class=\"dropdown category-wrapper\" style=\"display: none;\">"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"medical-care-and-insurance.php?country=$country_name\">Medical Care and Insurance</a></li>"; 
		$html = $html. "<li><a href=\"basic-health-and-safety.php?country=$country_name\">Basic Health and Safety</a></li>"; 
		$html = $html. "<li><a href=\"strategies-to-reduce-risk.php?country=$country_name\">Risk Factors and Strategies to Reduce Risk</a></li>"; 
		$html = $html. "<li><a href=\"special-issues.php?country=$country_name\">Special Issues</a></li>"; 
		$html = $html. "<li><a href=\"crisis-management.php?country=$country_name\">Crisis Management</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"adjustments-and-culture-shock.php?country=$country_name\">Adjustments and Culture Shock</a></li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</div>"; 
		$html = $html. "</div>"; 
		$html = $html. "<div class=\"menu\">"; 
		$html = $html. "<a class=\"category\" href=\"#\">Coming Home</a>"; 
		$html = $html. "<div class=\"dropdown category-wrapper\" style=\"display: none;\">"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"airport-procedures.php?country=$country_name\">Airport Safety, Duties, and Customs</a></li>"; 
		$html = $html. "<li><a href=\"reverse-culture-shock.php?country=$country_name\">Reverse Culture Shock</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"continuing-benefits-of-study-abroad.php?country=$country_name\">Continuing Benefits of Study Abroad</a></li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</div>"; 
		$html = $html. "</div>"; 
		$html = $html. "<div class=\"menu\">"; 
		$html = $html. "<a class=\"category\" href=\"#\">Tools for Planning</a>"; 
		$html = $html. "<div class=\"dropdown category-wrapper\" style=\"display: none;\">"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><span class=\"title\">Resources Tools</span>"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"questions.php?country=$country_name\">Questions</a></li>"; 
		$html = $html. "<li><a href=\"checklist.php?country=$country_name\">Checklist</a></li>"; 
		$html = $html. "<li><a href=\"resources.php?country=$country_name\">Resources</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"top-10-health-and-safety-issues.php?country=$country_name\">Top 10 Health and Safety Issues</a></li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</li>"; 
		$html = $html. "<li><span class=\"title\">Communication Tools</span>"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"communication-info-sheets.php?country=$country_name\">Communication Info Sheet</a></li>"; 
		$html = $html. "<li><a href=\"words-to-know.php?country=$country_name\">Words to Know</a></li>"; 
		$html = $html. "<li><a href=\"phrases-to-know.php?country=$country_name\">Phrases to Know</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"help-images.php?country=$country_name\">Help Images</a></li>"; 
		$html = $html. "</ul>    ";     
		$html = $html. "</li>"; 
		$html = $html. "<li class=\"last\"><span class=\"title\">Emergency Tools</span>"; 
		$html = $html. "<ul>"; 
		$html = $html. "<li><a href=\"emergency-planning.php?country=$country_name\">Emergency Planning</a></li>"; 
		$html = $html. "<li><a href=\"emergency-action-plan-steps.php?country=$country_name\">Emergency Action Plan Steps</a></li>"; 
		$html = $html. "<li><a href=\"personal-emergency-action-plan.php?country=$country_name\">Personal Emergency Action Plan</a></li>"; 
		$html = $html. "<li class=\"last\"><a href=\"../emergency-card.php?country=$country_name\">Emergency Card</a></li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</li>"; 
		$html = $html. "</ul>"; 
		$html = $html. "</div>"; 
		$html = $html. "</div>"; 
		$html = $html. "<div class=\"menu\"><div class=\"home\"><a href=\"../index.php\" class=\"icon1\">Home</a></div></div>";
		$html = $html. "<div class=\"menu\"><div class=\"student-handbook sh-gradient\"><a href=\"../student-handbook.php\" class=\"icon5\">Student Handbook</a></div></div>";
		$html = $html. "<div class=\"menu last botom\"><div class=\"program-search ps-gradient ps-corner-bottom\"><a href=\"../program-search.php\" class=\"icon6\">Program Search</a></div></div>";
		$html = $html. "</div> 	"; 
		/* $html = $html."<div style=\"background:white;color:red;\">";
		$html = $html."<strong>TEST MENU</strong><br>";
		$html = $html."category:".$category."<br>";
		$html = $html."country name:".$country_name."<br>";
		$html = $html."language:".$language."<br>";
		$html = $html."country menu:".$country_menu."<br>";
		$html = $html."</div>"; */
		return $html;	
	}
	
	function print_category_menu_orig($category, $country_name, $language, $country_menu) {
		$language = (string)$language;
		$country_menu = (string)$country_menu;
		$html = "";
		if($category == 0) {
			$html = "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Understanding Study Abroad</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"introduction.php?country=$country_name\">Introduction</a> </li>";
			$html = $html . "<li> <a href=\"why-study-abroad.php?country=$country_name\">Why Study <span>$country_menu</span></a> </li>";
			$html = $html . "<li> <a href=\"why-learn-a-language.php?country=$country_name\">Why Learn <span>$language</span></a> </li>";
			$html = $html . "<li> <a href=\"advice-for-parents.php?country=$country_name\">Advice for Parents</a> </li>";
			$html = $html . "</ul>";
			$html = $html . "</div>	";   	
		} elseif($category == 1) {
			$html = "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Choosing a Program</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"begin-program-search.php?country=$country_name\">Begin Program Search</a> </li>";
			$html = $html . "<li> <a href=\"select-the-right-program.php?country=$country_name\">Selecting the Right Program for You</a> </li>";
			$html = $html . "<li> <a href=\"who-runs-your-program.php?country=$country_name\">Who Runs Your Program</a> </li>";
			$html = $html . "<li> <a href=\"financing-study-abroad-program.php?country=$country_name\">Financing Study Abroad</a> </li>";
			$html = $html . "<li> <a href=\"application-process.php?country=$country_name\">Application Process</a> </li>";
			$html = $html . "</ul>";
			$html = $html . "</div>	";			
		} elseif($category == 2) {
			$html = "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Practical Information</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"pre-departure-planning.php?country=$country_name\">Pre-Departure Planning</a> </li>";
			$html = $html . "<li> <a href=\"how-foreign-laws-apply-to-you.php?country=$country_name\">How Foreign Laws Apply to You</a> </li>";
			$html = $html . "<li> <a href=\"communication-while-abroad.php?country=$country_name\">Communication While Abroad</a> </li>";
			$html = $html . "<li> <a href=\"housing.php?country=$country_name\">Housing Arrangements</a> </li>";
			$html = $html . "<li> <a href=\"packing.php?country=$country_name\">Packing</a> </li>";
			$html = $html . "<li> <a href=\"expectations.php?country=$country_name\">Expectations</a> </li>";
			$html = $html . "</ul>";			
		} elseif($category == 3) {
			$html = "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Health &amp; Safety</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"basic-health-and-safety.php?country=$country_name\">Basic Health and Safety</a> </li>";
			$html = $html . "<li> <a href=\"top-10-health-and-safety-issues.php?country=$country_name\">Top 10 Health and Safety Issues</a> </li>";
			$html = $html . "<li> <a href=\"medical-care-and-insurance.php?country=$country_name\">Medical Care and Insurance</a> </li>";
                                                        
			$html = $html . "<li> <a href=\"strategies-to-reduce-risk.php?country=$country_name\">Risk Factors and Strategies to Reduce Risk</a> </li>";
			$html = $html . "<li> <a href=\"special-issues.php?country=$country_name\">Special Issues</a> </li>";
			$html = $html . "<li> <a href=\"crisis-management.php?country=$country_name\">Crisis Management</a> </li>";
			$html = $html . "<li> <a href=\"adjustments-and-culture-shock.php?country=$country_name\">Adjustments and Culture Shock</a> </li>";
			$html = $html . "</ul>";
			$html = $html . "</div>	";			
		} elseif($category == 4) {
			$html = "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Coming Home</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"airport-procedures.php?country=$country_name\">Airport Safety, Duties and Customs</a> </li>";
			$html = $html . "<li> <a href=\"reverse-culture-shock.php?country=$country_name\">Reverse Culture Shock</a> </li>";
			$html = $html . "<li> <a href=\"continuing-benefits-of-study-abroad.php?country=$country_name\">Continuing Benefits of Study Abroad</a> </li>";
			$html = $html . "</ul>";	
			$html = $html . "</div>";
		} elseif($category == 5) {
			$html = "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Resources Tools</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"questions.php?country=$country_name\">Questions You Should Ask Yourself</a> </li>";
			$html = $html . "<li> <a href=\"checklist.php?country=$country_name\">Study Abroad Checklist</a> </li>";
			$html = $html . "<li> <a href=\"resources.php?country=$country_name\">Study Abroad Resources</a> </li>";
			$html = $html . "<li> <a href=\"top-10-health-and-safety-issues.php?country=$country_name\">Top 10 Health and Safety Issues</a> </li>";
			$html = $html . "</ul>";
			$html = $html . "</div>	";
			$html = $html . "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Communication Tools</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"communication-info-sheets.php?country=$country_name\">Communication Info Sheets</a> </li>";
			$html = $html . "<li> <a href=\"words-to-know.php?country=$country_name\">Words You Should Know</a> </li>";
			$html = $html . "<li> <a href=\"phrases-to-know.php?country=$country_name\">Phrases You Should Know</a> </li>";
			$html = $html . "<li> <a href=\"help-images.php?country=$country_name\">Images You Should Know</a> </li>";
			$html = $html . "</ul>";
			$html = $html . "</div>";
			$html = $html . "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Emergency Tools</div>";
			$html = $html . "<ul>";
			$html = $html . "<li> <a href=\"emergency-planning.php?country=$country_name\">Emergency Planning</a> </li>";
			$html = $html . "<li> <a href=\"emergency-action-plan-steps.php?country=$country_name\">Emergency Action Plan Steps</a> </li>";
			$html = $html . "<li> <a href=\"../emergency-card.php?country=$country_name\">Emergency Card</a> </li>";
			$html = $html . "<li> <a href=\"personal-emergency-action-plan.php?country=$country_name\">Personal Emergency Action Plan</a> </li>";
			$html = $html . "</ul>";
			$html = $html . "</div>	";	
		} else {
			$html = "<div class=\"row\">";
			$html = $html . "<div class=\"category-title\">Understanding Study Abroad</div>";
			$html = $html . "<li> <a href=\"introduction.php?country=$country_name\">Introduction</a> </li>";
			$html = $html . "<li> <a href=\"why-study-abroad.php?country=$country_name\">Why Study <span>$country_menu</span></a> </li>";
			$html = $html . "<li> <a href=\"why-learn-a-language.php?country=$country_name\">Why Learn <span>$language</span></a> </li>";
			$html = $html . "<li> <a href=\"advice-for-parents.php?country=$country_name\">Advice for Parents</a> </li>";
			$html = $html . "</ul>";
			$html = $html . "</div>	";	  	
		}
		
		/* $html = $html."<div style=\"background:white;color:red;\">";
		$html = $html."<strong>TEST MENU</strong><br>";
		$html = $html."category:".$category."<br>";
		$html = $html."country name:".$country_name."<br>";
		$html = $html."language:".$language."<br>";
		$html = $html."country menu:".$country_menu."<br>";
		$html = $html."</div>"; */
		return $html;	
	}

	function get_main_sponsor1($country_name) {
        // NOTE: the path of the include file!!!
        include("../lib/sponsors_array.php");
        $html = "";
        foreach ($COUNTRY_SPONSORS as $INFO) {
            if ($INFO['country'] == $country_name) {
                foreach ($INFO['main_sponsors'] as $main_sponsor_name) {
					if ($SPONSORS[$main_sponsor_name]['logo_full'] == "yes") {
                    $size = "logo_xl";
                }
                if ($SPONSORS[$main_sponsor_name]['logo_lg'] == "yes") {
                    $size = "logo_l";
                }
                if ($SPONSORS[$main_sponsor_name]['logo_med'] == "yes") {
                    $size = "logo_m";
                }
                if ($SPONSORS[$main_sponsor_name]['logo_sm'] == "yes") {
                    $size = "logo_s";
                }
					
					$html = $html . "b[n++] = \"<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$size] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>\";";
                }
            }
        }
        return $html;
    }
	
	/* get_main_sponsor2 uses shuffle */
	function get_main_sponsor2($country_name, $sponsor_key)
	{
		// NOTE: the path of the include file!!!	
		include "../lib/sponsors_array.php";
		
		$html = "";
		$count = 0;
		$main_count = 1;
		
		global $main_sponsors;		
		$main_sponsors = array();
		
		foreach ($COUNTRY_SPONSORS as $INFO) {
			if ($INFO['country'] == $country_name) {
				foreach ($INFO['main_sponsors'.$sponsor_key] as $main_sponsor_name) {
					if ($SPONSORS[$main_sponsor_name]['logo_full'] == "yes") {
						$size = "logo_xl";
					}
					if ($SPONSORS[$main_sponsor_name]['logo_lg'] == "yes") {
						$size = "logo_l";
					}
					if ($SPONSORS[$main_sponsor_name]['logo_med'] == "yes") {
						$size = "logo_m";
					}
					if ($SPONSORS[$main_sponsor_name]['logo_sm'] == "yes") {
						$size = "logo_s";
					}
					
					if(!empty($main_sponsor_name)) {
					$main_sponsors[$count] =  "<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$size] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
					$count++;
					}
				}
			}
			
		}
		//print_r($main_sponsors);
		//return $main_sponsors;
		shuffle($main_sponsors);
		return $main_sponsors[0];
		
	}
	
	function print_main_sponsor2($country_name, $box_count, $count_MAX) 
	{		
		while ($box_count <= $count_MAX){
			
			$html = $html . "<div class='main_sponsors_featured'>";
			$now = get_main_sponsor2($country_name, $box_count);
			$html = $html . $now;
			$html = $html . "</div>";
			$box_count++;
		}
		return $html;
	}
	
	function get_sub_sponsor2($country_name, $sponsor_key) {
        // NOTE: the path of the include file!!!
        include("../lib/sponsors_array.php");
		$html = "";
		$count = 0;
	
		global $sub_sponsors;
		$sub_sponsors = array();
		
        //$html = "<ul>";
        foreach ($COUNTRY_SPONSORS as $INFO) {
            if ($INFO['country'] == $country_name) {
                foreach ($INFO['sub_sponsors'.$sponsor_key] as $main_sponsor_name) {
				
					if(!empty($main_sponsor_name)) {
						$sub_sponsors[$count] =  "<div class='sponsors_featured'><a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'>".$SPONSORS[$main_sponsor_name]['title']."</a></div>";
						
						$count++;	
					}
                }
            }
        }
        //$html = $html . "</ul>";
        //return $html;     
		
		//print_r($main_sponsors);
		//return $main_sponsors;
		shuffle($sub_sponsors);
		return $sub_sponsors[0];
    }
	
	function print_sub_sponsor2($country_name, $box_count, $count_MAX) 
	{
		while ($box_count <= $count_MAX){
			$now = get_sub_sponsor2($country_name, $box_count);
			$html = $html . $now;
			$box_count++;
		}
		return $html;
	}
	
	function get_sponsors_banner($country_name)
	{
		// NOTE: the path of the include file!!!	
		include "../lib/sponsors_array.php";
		$count = 0;
	
		global $banner;
		$banner = array();
		
		foreach ($SPONSORS_BANNER as $INFO) {
			if ($INFO['country'] == $country_name) {
				foreach ($INFO['main_sponsors'] as $main_sponsor_name) {
				
					if(!empty($main_sponsor_name)) {
						$banner[$count] =  "<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name]['banner_1'] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
						
						$count++;
					
					}
				}
			}
		}
		//print_r($banner);
		return $banner;
		
	}
	
	function get_lead_sponsor2($country_name, $sponsor_key)
	{
		// NOTE: the path of the include file!!!	
		include "../lib/sponsors_array.php";
		
		$html = "";
		$count = 0;
	
		global $lead_sponsors;		
		$lead_sponsors = array();
		
		foreach ($COUNTRY_LEAD_SPONSOR as $INFO) {
			if ($INFO['country'] == $country_name) {
				foreach ($INFO['main_sponsors'.$sponsor_key] as $main_sponsor_name) {
					if ($SPONSORS[$main_sponsor_name]['logo_lead_sponsor'] == "yes") {
						$sponsor_type = "logo_ls";
					}
					
					if(!empty($main_sponsor_name)) {
						$lead_sponsors[$count] =  "<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$sponsor_type] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
						
						$count++;
					}
				}
			}
		}
		//print_r($main_sponsors);
		//return $main_sponsors;
		shuffle($lead_sponsors);
		return $lead_sponsors[0];
		
	}
	
	function print_lead_sponsor2($country_name, $box_count, $count_MAX) 
	{
		while ($box_count <= $count_MAX){
			$now = get_lead_sponsor2($country_name, $box_count);
			$html = $html . $now;
			$box_count++;
		}
		return $html;
	}
	
    function get_main_sponsor($country_name) {
        // NOTE: the path of the include file!!!
        include("../lib/sponsors_array.php");
        $html = "";
        foreach ($COUNTRY_SPONSORS as $INFO) {
            if ($INFO['country'] == $country_name) {
                foreach ($INFO['main_sponsors'] as $main_sponsor_name) {					
                    $html = $html . "<a target='blank' href='" .$SPONSORS[$main_sponsor_name]['url']. "'>";
                    $html = $html . "<img src='".$SPONSORS[$main_sponsor_name]['logo']."' alt='".$SPONSORS[$main_sponsor_name]['title_desc']."' /></a>";
                }
            }
        }
        return $html;
    }
    
    function get_sub_sponsor($country_name) {
        // NOTE: the path of the include file!!!
        include("../lib/sponsors_array.php");
        foreach ($COUNTRY_SPONSORS as $INFO) {
            if ($INFO['country'] == $country_name) {
                foreach ($INFO['sub_sponsors'] as $main_sponsor_name) {
                    $html = $html . "<div><a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'>";
                    $html = $html . $SPONSORS[$main_sponsor_name]['title'];
                    $html = $html . "</a></div>";
                }
            }
        }
        return $html;        
    }

    function generate_option($value, $name, $selected) {
        $option_str = "<option value='" . $value;
        if ($selected) {
            $option_str = $option_str . "' selected='selected'";
        }
        else {
            $option_str = $option_str . "'";
        }
        $option_str = $option_str . ">" .$name . "</option>";
        return $option_str;
    }

    function generate_country_specific_menu($selected_country) {
            $all_country_array = array("Choose" => "Choose One",
                                        "General" => "Worldwide",
                                        "Argentina" => "Argentina",
                                        "Australia" => "Australia",
                                        "Austria" => "Austria",
                                        //"Bahamas" => "Bahamas",
                                        //"Bangladesh" => "Bangladesh",
                                        "Belgium" => "Belgium",
                                        "Belize" => "Belize",
                                        //"Bermuda" => "Bermuda",
                                        //"Bhutan" => "Bhutan",
                                        //"Bolivia" => "Bolivia",
                                        "Botswana" => "Botswana",
                                        "Brazil" => "Brazil",
                                        //"Bulgaria" => "Bulgaria",
                                        //"Cambodia" => "Cambodia",
                                        //"Cameroon" => "Cameroon",
                                        "Canada" => "Canada",
                                        "Chile" => "Chile",
                                        "China" => "China",
                                        //"Colombia" => "Colombia",
                                        "Costa Rica" => "Costa Rica",
                                        //"Croatia" => "Croatia",
                                        //"Croatia, Republic of" => "Croatia, Republic of",
                                        "Cuba" => "Cuba",
                                        //"Cyprus" => "Cyprus",
                                        "Czech Republic" => "Czech Republic",
                                        "Denmark" => "Denmark",
                                        "Dominican Republic" => "Dominican Republic",
                                        "Ecuador" => "Ecuador",
                                        "Egypt" => "Egypt",
                                        //"El Salvador" => "El Salvador",
                                        //"Estonia" => "Estonia",
                                        //"Ethiopia" => "Ethiopia",
                                        //"Fiji" => "Fiji",
                                        "Finland" => "Finland",
                                        "France" => "France",
                                        //"French Guiana" => "French Guiana",
                                        //"French Polynesia" => "French Polynesia",
                                        "Germany" => "Germany",
                                        "Ghana" => "Ghana",
                                        "Greece" => "Greece",
                                        //"Guadeloupe" => "Guadeloupe",
                                        "Guatemala" => "Guatemala",
                                        //"Honduras" => "Honduras",
                                        //"Hong Kong" => "Hong Kong",
                                        "Hungary" => "Hungary",
                                        //"Iceland" => "Iceland",
                                        "India" => "India",
                                        // "Indonesia" => "Indonesia",
                                        "Ireland" => "Ireland",
                                        "Israel" => "Israel",
                                        "Italy" => "Italy",
                                        //"Jamaica" => "Jamaica",
                                        "Japan" => "Japan",
                                        "Jordan" => "Jordan",
                                        "Kenya" => "Kenya",
                                        //"Kyrgyzstan" => "Kyrgyzstan",
                                        //"Latvia" => "Latvia",
                                        //"Lithuania" => "Lithuania",
                                        //"Madagascar" => "Madagascar",
                                        //"Malaysia" => "Malaysia",
                                        //"Mali" => "Mali",
                                        //"Malta" => "Malta",
                                        //"Martinique" => "Martinique",
                                        "Mexico" => "Mexico",
                                        //"Mongolia" => "Mongolia",
                                        //"Montserrat" => "Montserrat",
                                        "Morocco" => "Morocco",
                                        //"Multiple" => "Multiple",
                                        //"Namibia" => "Namibia",
                                        //"Nepal" => "Nepal",
                                        "Netherlands" => "Netherlands",
                                        //"Netherlands Antilles" => "Netherlands Antilles",
                                        "New Zealand" => "New Zealand",
                                        "Nicaragua" => "Nicaragua",
                                        //"Niger" => "Niger",
                                        "Norway" => "Norway",
                                        //"Oman" => "Oman",
                                        //"Panama" => "Panama",
                                        //"Paraguay" => "Paraguay",
                                        "Peru" => "Peru",
                                        //"Philippines" => "Philippines",
                                        //"Poland" => "Poland",
                                        "Portugal" => "Portugal",
                                        //"Puerto Rico" => "Puerto Rico",
                                        //"Qatar" => "Qatar",
                                        "Russia" => "Russia",
                                        //"Russian Federation" => "Russian Federation",
                                        //"Rwanda" => "Rwanda",
                                        //"Samoa" => "Samoa",
                                        //"Senegal" => "Senegal",
                                        //"Serbia" => "Serbia",
                                        //"Singapore" => "Singapore",
                                        "South Africa" => "South Africa",
                                        "South Korea" => "South Korea",
                                        "Spain" => "Spain",
                                        "Sweden" => "Sweden",
                                        "Switzerland" => "Switzerland",
                                        //"Syria" => "Syria",
                                        //"Taiwan" => "Taiwan",
                                        //"Tanzania" => "Tanzania",
                                        "Thailand" => "Thailand",
                                        //"Tunisia" => "Tunisia",
                                        "Turkey" => "Turkey",
                                        //"Turks and Caicos Islands" => "Turks and Caicos Islands",
                                        //"U.S. Virgin Islands" => "U.S. Virgin Islands",
                                        //"Uganda" => "Uganda",
                                        //"Ukraine" => "Ukraine",
                                        //"United Arab Emirates" => "United Arab Emirates",
                                        "United Kingdom" => "United Kingdom",
                                        "United States" => "United States"
                                        //"Uruguay" => "Uruguay",
                                        //"Venezuela" => "Venezuela",
                                        //"Vietnam" => "Vietnam"
                                        );
                
                $menu_string = "";
                foreach ($all_country_array as $key => $value) {
                    $menu_string = $menu_string . generate_option($key, $value, $key == $selected_country);
                }
                return $menu_string;
            }

            function output($str) {
            echo $str;
            }

            function redirect_to_general() {
            redirect(403, getCurURL() .
 '?country=general');
    }
	
    function getCurURL() {
        $pageURL = 'http';
        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["PATH_INFO"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["PATH_INFO"];
        }
        return $pageURL;
    }

    function redirect($num, $url){
       static $http = array (
           100 => "HTTP/1.1 100 Continue",
           101 => "HTTP/1.1 101 Switching Protocols",
           200 => "HTTP/1.1 200 OK",
           201 => "HTTP/1.1 201 Created",
           202 => "HTTP/1.1 202 Accepted",
           203 => "HTTP/1.1 203 Non-Authoritative Information",
           204 => "HTTP/1.1 204 No Content",
           205 => "HTTP/1.1 205 Reset Content",
           206 => "HTTP/1.1 206 Partial Content",
           300 => "HTTP/1.1 300 Multiple Choices",
           301 => "HTTP/1.1 301 Moved Permanently",
           302 => "HTTP/1.1 302 Found",
           303 => "HTTP/1.1 303 See Other",
           304 => "HTTP/1.1 304 Not Modified",
           305 => "HTTP/1.1 305 Use Proxy",
           307 => "HTTP/1.1 307 Temporary Redirect",
           400 => "HTTP/1.1 400 Bad Request",
           401 => "HTTP/1.1 401 Unauthorized",
           402 => "HTTP/1.1 402 Payment Required",
           403 => "HTTP/1.1 403 Forbidden",
           404 => "HTTP/1.1 404 Not Found",
           405 => "HTTP/1.1 405 Method Not Allowed",
           406 => "HTTP/1.1 406 Not Acceptable",
           407 => "HTTP/1.1 407 Proxy Authentication Required",
           408 => "HTTP/1.1 408 Request Time-out",
           409 => "HTTP/1.1 409 Conflict",
           410 => "HTTP/1.1 410 Gone",
           411 => "HTTP/1.1 411 Length Required",
           412 => "HTTP/1.1 412 Precondition Failed",
           413 => "HTTP/1.1 413 Request Entity Too Large",
           414 => "HTTP/1.1 414 Request-URI Too Large",
           415 => "HTTP/1.1 415 Unsupported Media Type",
           416 => "HTTP/1.1 416 Requested range not satisfiable",
           417 => "HTTP/1.1 417 Expectation Failed",
           500 => "HTTP/1.1 500 Internal Server Error",
           501 => "HTTP/1.1 501 Not Implemented",
           502 => "HTTP/1.1 502 Bad Gateway",
           503 => "HTTP/1.1 503 Service Unavailable",
           504 => "HTTP/1.1 504 Gateway Time-out"
       );
       header($http[$num]);
       header ("Location: $url");
    }    
    
	function output_error_page($message) {
		$layout = new Template("lib/layout-theme.tpl");
		$layout->set("title", "Error Page");
		$layout->set("header", "Error Page");
        $layout->set("country", '');
		$layout->set("content", $message);
        echo $layout->output();
	}
	
	// http://stackoverflow.com/questions/834303/php-startswith-and-endswith-functions
	function starts_with($haystack, $needle)
	{
		$length = strlen($needle);
		return (substr($haystack, 0, $length) === $needle);
	}

	function ends_with($haystack, $needle)
	{
		$length = strlen($needle);
		$start  = $length * -1; //negative
		return (substr($haystack, $start) === $needle);
	}
	
	// recursively function
	function list_files($dirname) {
		
		$files = array();
		
		// opendir return false if dir doesn't exist
		if ($dh = opendir($dirname)) {
			while ($filename = readdir($dh)) {
				if ($filename != "." && $filename != ".." && $filename[0] != ".") {
					$fullpathname = $dirname . "/" . $filename;
					if (is_dir($fullpathname)) {
						$inner_files = list_files($fullpathname);
						if (is_array($inner_files)) {
							$files = array_merge($files, $inner_files);
						}
					}
					else {
						$files[$filename] = $fullpathname;
					}				
				}			
			}
		}
		return $files;
	}  	
?>
