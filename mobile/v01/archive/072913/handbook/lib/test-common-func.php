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

    function get_main_sponsor($country_name) {
        // NOTE: the path of the include file!!!
        include("../lib/sponsors_array.php");
        $html = "";
        foreach ($COUNTRY_SPONSORS as $INFO) {
            if ($INFO['country'] == $country_name) {
                foreach ($INFO['main_sponsors'] as $main_sponsor_name) {
                    $html = $html . "<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'>";
                    $html = $html . "<img src='" . $SPONSORS[$main_sponsor_name]['logo'] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc']  . "'/></a>";
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
                                        //"Belize" => "Belize",
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
                                        //"Guatemala" => "Guatemala",
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
                                        //"Kenya Coast Republic" => "Kenya Coast Republic",
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
