<?php


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
	
	function count_sub_sponsors($country_name) {
		include("../../lib/sponsors_array.php");
		
		$test_array = array();
		
		foreach ($COUNTRY_SPONSORS as $INFO) {
            if ($INFO['country'] == $country_name) {
				//foreach($INFO['sub_sponsors1'] as $sub_sponsors_name) {
					//echo count ($INFO['sub_sponsors1']);	
					$test_array[] = $INFO['sub_sponsors1'];
					
					echo count($INFO['sub_sponsors1']);
					if (empty($INFO['sub_sponsors1'])) {
						echo 'empty';	
					} else {
						echo 'not empty';
					}
					echo is_array($test_array) ? 'Array' : 'not an Array';
				//}				
			}
		}
	}
	
	count_sub_sponsors("General");
	
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
			
			$html = $html . "<div id='main_sponsors_featured".$box_count."'>";
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
						$sub_sponsors[$count] =  "<li><a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'>".$SPONSORS[$main_sponsor_name]['title']."</a></li>";
						
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
        $html = "<ul>";
        foreach ($COUNTRY_SPONSORS as $INFO) {
            if ($INFO['country'] == $country_name) {
                foreach ($INFO['sub_sponsors'] as $main_sponsor_name) {
                    $html = $html . "<li><a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'>";
                    $html = $html . $SPONSORS[$main_sponsor_name]['title'];
                    $html = $html . "</a></li>";
                }
            }
        }
        $html = $html . "</ul>";
        return $html;        
    }
	
?>


