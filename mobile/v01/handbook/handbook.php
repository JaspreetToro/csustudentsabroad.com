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
		"Belize",
		/*"Benin",
		"Bhutan",
		"Bolivia",
		"Bosnia and Herzegovina",*/
		"Botswana",
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
		"Croatia",*/
		"Cuba",
		//"Cyprus",
		"Czech Republic",
		"Denmark",
		/*"Djibouti",
		"Dominica",*/
		"Dominican Republic",
		//"East Timor (Timor Timur)",
		"Ecuador",
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
		"Ghana",
		"Greece",
		/*"Grenada",*/
		"Guatemala",
		/*"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",*/
		"Hungary",
		/*"Iceland",
		"India",
		/*"Indonesia",
		"Iran",
		"Iraq",*/
		"Ireland",
		"Israel",
		"Italy",
		//"Jamaica",
		"Japan",
		"Jordan",
		//"Kazakhstan",
		"Kenya",
		/*"Kiribati",
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
		"Mongolia",*/
		"Morocco",
		/*"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepa",*/
		"Netherlands",
		"New Zealand",
		"Nicaragua",
		/*"Niger",
		"Nigeria",*/
		"Norway",
		/*"Oman",
		"Pakistan",
		"Palau",
		"Panama",
		"Papua New Guinea",
		"Paraguay",*/
		"Peru",
		/*"Philippines",
		"Poland",*/
		"Portugal",
		/*"Qatar",
		"Romania",*/
		"Russia",
		/*"Rwanda",
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
		"Switzerland",
		/*"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",*/
		"Thailand",
		/*"Togo",
		"Tonga",
		"Trinidad and Tobago",
		"Tunisia",*/
		"Turkey",
		/*"Turkmenistan",
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
		.left {
			float: left;
			width: 200px;
			word-wrap:break-word;
			font: 13px Arial, Helvetica, sans-serif;
		}
		.left ul {
			padding:0;margin: 0;	
		}
		.left li:nth-child(even) {
			background-color:#666;
		}
		.left li:nth-child(even) a{
			color:#FFF;
			text-decoration:none;
		}
		.left li:nth-child(even) a:hover{
			color:#CCC;
			text-decoration:none;
		}
		.left li:nth-child(odd) a{
			text-decoration:none;
		}
		.left li:nth-child(odd) a:hover{
			color:#06F;
			text-decoration:none;
		}
		.right{
			float: left;
			padding: 75px 0 0 0;
			margin: 0;
		}
		.table_menu {
			padding: 0; margin: 0;
		}
		.table_menu a{
			text-decoration:underline;
		}
		.table_menu a:hover{
			color:#06F;
			text-decoration:none;
		}
        </style>
	</head>
	<body>
    	<h1>View by Country</h1>
        <table cellpadding="5px" cellspacing="5px" class="table_menu">
        <?php
		$columns = 15;
		$counter = 1;
		
		foreach ($country_list as $countries) {
			if ($counter == 1) {
			?>
				<tr>
			<?php		
			}	
			?>
        	<td><a href="/handbook/test-handbook.php?country=<?=$countries?>"><?=$countries?></a></td>
            <?php if ($counter == $columns) {
			?>
            	</tr>
            <?php $counter = 1;
			} else {
				$counter++;
			}
			?>
        <?php } ?>    
        </table>
        
    	<div class="menu">
    	<ul>
        	<!--<li><a href="http://studyus.org/studentsabroad/template/new/index.php">General</a></li>-->
        <?php
			//foreach ($country_list as $countries) {
		?>		
				<!--<li><a href="/handbook/test-handbook.php?country=<?=$countries?>"><?=$countries?></a></li>-->
		<?php	//}
		?>
        	<!--<li><a href="/handbook/index.php?country=Australia">Australia</a></li>
            <li><a href="/handbook/index.php?country=Austria">Austria</a></li>-->
        </ul>
        </div>
		
        <div class="left">
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
			$test = substr($file, 0, 4);
			if($test == "test") {	
				if(strpos($file, '.php')){
					if(!strpos($file, 'class.php')){
						echo "<li><a href=\"$file?country=".ucwords($country)."\" target=\"frame1\">$file</a></li>\n";
					}
				}
			}
        }
        
        echo "</ul>\n";
        ?>
		</div>
        <div class="right">
        	<?php
				if ($_GET[country] == "") {
			?>
        			<iframe src="http://studentsabroad.com/handbook/test-adjustments-and-culture-shock.php?country=<?=$_GET[country]?>" width="1024px" height="2048px" frameborder="1" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="yes" noresize></iframe>
			<?php		
				}else{
			?>		
					<iframe width="1024px" height="2048px" name="frame1" frameborder="1" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="yes" noresize></iframe>
			<?php		
				}
			?>
        </div>	
	</body>
</html>