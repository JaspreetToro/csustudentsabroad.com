<?php

global $country_list;
$country_list = array(
		"General",			  
		/*"Afghanistan",
		"Albania",
		"Algeria",
		"Andorra",
		"Angola",
		"Antigua and Barbuda",*/
		"Argentina",
		//"Armenia",
		"Australia",
		"Austria",
		/*"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",*/
		"Belgium",
		/*"Belize",
		"Benin",
		"Bhutan",
		"Bolivia",
		"Bosnia and Herzegovina",
		"Botswana",*/
		"Brazil",
		/*"Brunei",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",*/
		"Canada",
		/*"Cape Verde",
		"Central African Republic",
		"Chad",*/
		"Chile",
		"China",
		/*"Colombi",
		"Comoros",
		"Congo (Brazzaville)",
		"Congo",*/
		"Costa Rica",
		/*"Cote d'Ivoire",
		"Croatia",
		"Cuba",
		"Cyprus",*/
		"Czech Republic",
		"Denmark",
		/*"Djibouti",
		"Dominica",
		"Dominican Republic",
		"East Timor (Timor Timur)",
		"Ecuador",*/
		"Egypt",
		/*"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Fiji",*/
		"Finland",
		"France",
		/*"Gabon",
		"Gambia, The",
		"Georgia",*/
		"Germany",
		//"Ghana",
		"Greece",
		/*"Grenada",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",
		"Hungary",
		"Iceland",*/
		"India",
		"Indonesia",
		/*"Iran",
		"Iraq",
		"Ireland",
		"Israel",*/
		"Italy",
		//"Jamaica",
		"Japan",
		"Jordan",
		/*"Kazakhstan",
		"Kenya",
		"Kiribati",
		"Kuwait",
		"Kyrgyzstan",
		"Laos",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Libya",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"Macedonia",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marshall Islands",
		"Mauritania",
		"Mauritius",*/
		"Mexico",
		/*"Micronesia",
		"Moldova",
		"Monaco",
		"Mongolia",
		"Morocco",
		"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepa",*/
		"Netherlands",
		"New Zealand",
		/*"Nicaragua",
		"Niger",
		"Nigeria",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Poland",*/
		"Portugal",
		/*"Qatar",
		"Romania",
		"Russia",
		"Rwanda",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Saint Vincent",
		"Samoa",
		"San Marino",
		"Sao Tome and Principe",
		"Saudi Arabia",
		"Senegal",
		"Serbia and Montenegro",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",*/
		"South Africa",
		"South Korea",
		"Spain",
		/*"Sri Lanka",
		"Sudan",
		"Suriname",
		"Swaziland",*/
		"Sweden",
		/*"Switzerland",
		"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",
		"Thailand",
		"Togo",
		"Tonga",
		"Trinidad and Tobago",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",*/
		"United Kingdom",
		"United States"
		/*"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Vatican City",
		"Venezuela",
		"Vietnam",
		"Yemen",
		"Zambia",
		"Zimbabwe"*/
	);
?>
<html>
	<head>
		<title>Index : Directory Listing</title>
        <style>
        .menu ul{
			margin-left: 0;
			padding-left: 0;
			display: inline;}
		.menu ul li{
			margin-left: 0;
			padding: 3px 15px;
			border-left: 1px solid #000;
			list-style: none;
			display: inline;}
        </style>
	</head>
	<body>
    	<h1>View by Country</h1>
    	<div class="menu">
    	<ul>
        	<!--<li><a href="http://studyus.org/studentsabroad/template/new/index.php">General</a></li>-->
        <?php
			foreach ($country_list as $countries) {
		?>		
				<li><a href="/handbook/index.php?country=<?=$countries?>"><?=$countries?></a></li>
		<?php	}
		?>
        	<!--<li><a href="/handbook/index.php?country=Australia">Australia</a></li>
            <li><a href="/handbook/index.php?country=Austria">Austria</a></li>-->
        </ul>
        </div>
		
		<!--<ul>
			<?php
			//$country = "Australia";
			
			//if ($handle = opendir('.')) {
				/* This is the correct way to loop over the directory. */
				//while (false !== ($entry = readdir($handle))) {
					//echo '<li><a href="' . $entry . '?country='.$country.'" target="_blank">' . $entry . "</a>\n";
				//}
				//closedir($handle);
			//}
			?>
         </ul>  --> 
		<?php
        $country = $_GET["country"];
        ?>
        <h2>Directory Listing for <?=$country ?></h2>
        <?php
		
		$country = strtolower($_GET["country"]);
		
        if ($handle = opendir('.')) {
            /* This is the correct way to loop over the directory. */
            while (false !== ($entry = readdir($handle))) {
                //echo '<li><a href="' . $entry . '?country='.$country.'" target="_blank">' . $entry . "</a>\n";
                $files[] = $entry;
            }
            closedir($handle);
        }
        
        sort($files);
            
        echo "<ul>\n";
        
        foreach($files as $file) {
			if(strpos($file, '.php')){
				if(!strpos($file, 'class.php')){
            		echo "<li><a href=\"$file?country=$country\" target=\"_blank\">$file</a></li>\n";
				}
			}
        }
        
        echo "</ul>\n";
        ?>
			
	</body>
</html>