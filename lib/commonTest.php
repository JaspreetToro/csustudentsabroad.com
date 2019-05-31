<?php
define("WEBNAME", "CSU StudentsAbroad.com");
define("URLNAME", "http://CSUStudentsabroad.com");

function printHeader($tab, $title, $ext = "", $body = "")
{
	$id1 = "";
	$id2 = "";
	$id3 = "";
	$id4 = "";
	$id5 = "";
	$id6 = "";
	$id7 = "";
	$id8 = "";
	
	if($tab == 1)
		$id1 = "current";
	else if($tab == 2)
		$id2 = "current";
	else if($tab == 3)
		$id3 = "current";
	else if($tab == 4)
		$id4 = "current";
	else if($tab == 5)
		$id5 = "current";
	else if($tab == 6)
		$id6 = "current";
	else if($tab == 7)
		$id7 = "current";	
	else if($tab == 8)
		$id8 = "current";	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=900, maximum-scale=1.0" />
    <meta name="keywords" content="Global education, study abroad, international education, international education safety, cross-cultural awareness, internationalization of higher education, gary Rhodes, study abroad programs, study abroad articles, online courses, pre-departure abroad, abroad handbooks, country guide, country description, country info" />
    <meta name="description" content="Studying abroad can be a reality! Tips are available from experienced mentors, including study abroad administrators, counselors, former abroad students and parents. Some of the most popular resources include: study abroad handbooks, online courses, emergency and program selection information." />
<title><?php echo WEBNAME." - ".$title?></title>
<link rel="icon" href="/favicon.png" type="image/png" />
<link type="text/css" href="styles/studentabroad-stylesTest.css" rel="stylesheet" />
<script type="text/javascript" src="javascript/analytics.js"></script>
<script type="text/javascript" src="javascript/general.js"></script>

<!-- orbit jquery plugin -->
<link rel="stylesheet" href="styles/test-orbit-1.2.3.css"/>
<!-- accordion package -->
<link rel="stylesheet" href="styles/easing.accordion.css"/>
<!-- navigation bar package
<link rel="stylesheet" type="text/css" href="styles/droplinebar.css" />
 -->
<?php echo $ext?>
<!--[if IE]>
    <style type="text/css">
        p.iepara{ /*Conditional CSS- For IE (inc IE7), create 1em spacing between menu and paragraph that follows*/
        padding-top: 1em;
    }
    </style>
    <![endif]-->    
<!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="styles/iestyles.css" />
    <![endif]-->
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="styles/ie7styles.css" />
    <![endif]-->
<!--[if gte IE 7]>
    <link rel="stylesheet" type="text/css" href="styles/ie8styles.css" />
    <![endif]-->
</head>
<body <?php echo $body?>>
<div id="background_top">
    <div id="maincontainer_top">
        <div id="header">
            <div id="left_header" style="display: inline-block">
                <script type="text/javascript" language="javascript">renderDiv(6);</script>
                <div id="left_header_logo"><a href="<?php echo URLNAME?>"><img style="padding: 10px 0px 20px 0px;" alt="student abroad logo" src="images/csulogoTest.jpg" /></a></div>
                <script type="text/javascript" language="javascript">renderDiv(10);</script>
                <div id="left_header_menu_home" >
                    <div id="glowingtabs">
                        <ul>
                            <li <?php if (!empty($id1)) echo "id=".$id1; ?>>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="index.php" title="Home: Welcome to StudenstAbroad.com" class="home_link">Home</a></div>
                                        <!--<div class="menu_subtitle"><a href="index.php" title="Home: Welcome to StudenstAbroad.com" class="home_link">The Main Page</a></div>-->
                                    </div>
                                </div>
                            </li>
                            <li <?php if (!empty($id2)) echo "id=".$id2; ?>>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="search.php" title="Program Search: Explore Your Options" class="why_us_subnav_link">Program Search</a></div>
                                        <!--<div class="menu_subtitle"><a href="search.php" title="Program Search: Explore Your Options" class="why_us_subnav_link">Explore Your Options</a></div>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="handbook/introduction.php?country=General" title="Student Handbooks: How to Get There and Back" class="apply_subnav_link">Student Handbooks</a></div>
                                        <!--<div class="menu_subtitle"><a href="handbook/introduction.php?country=General" title="Student Handbooks: How to Get There and Back" class="apply_subnav_link">How to Get There and Back</a></div>-->
                                    </div>
                                </div>
                            </li>
                            <!--<li <?php if (!empty($id4)) echo "id=".$id4; ?>>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="featured-programs.php?country=General" title="Featured Programs: Options Around the World" class="finance_subnav_link">Featured Programs</a></div>
                                        <div class="menu_subtitle"><a href="featured-programs.php?country=General" title="Featured Programs: Options Around the World" class="finance_subnav_link">Options Around the World</a></div>
                                    </div>
                                </div>
                            </li>-->
                            <li <?php if (!empty($id6)) echo "id=".$id6; ?>>
                                   <div>
                                    <div>
                                        <div class="padding13"><a href="about_us.php" title="About Us" class="apply_subnav_link">About Us</a></div>
                                        <!--<div class="menu_subtitle"><a href="about_us.php" title="About Us" class="apply_subnav_link">Who We Are</a></div>-->
                                    </div>
                                    </div>
                                </li>
                                <li <?php if (!empty($id7)) echo "id=".$id7; ?>>
                                   <div>
                                    <div>
                                        <div class="padding13"><a href="contact_us.php" title="Contact Us" class="apply_subnav_link">Contact Us</a></div>
                                        <!--<div class="menu_subtitle"><a href="contact_us.php" title="Contact Us" class="apply_subnav_link">For More Information</a></div>-->
                                    </div>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
                <!-- end of left_header_menu -->
            </div>
            <!-- end of left_header -->
            <div id="middle_header" style="display: inline-block"></div>
            <div id="right_header" style="display: inline-block"><div id="right_header_logo"><a><span style="position:relative;z-index: 2">STUDY ABROAD PROGRAMS</span><img src="images/TheCaliforniaStateUniversity.jpg" style="margin:-10px -5px 0px 0px;"/></a></div>
                <script type="text/javascript" language="javascript">renderDiv(20);</script>
                <div id="right_header_center_logo"></div>
                <div id="right_header_center_networking_logo_home"></div>
                <script type="text/javascript" language="javascript">renderDiv(10);</script>
                <div id="right_header_bottom_home">
                    <div id="community_tab">
                        <!--<div id="glowingtabs_orange" style="position: relative;top:27px">
                            <ul>
                            	 <li <?php if (!empty($id8)) echo "id=".$id8; ?>>
                                    <div>
                                        <div class="padding13"><a href="sponsor/info.php" title="Support">Support</a></div>
                                    </div> 
                                </li>
                                <li <?php if (!empty($id6)) echo "id=".$id6; ?>>
                                    <div>
                                        <div class="padding13"><a href="about_us.php" title="About Us">About Us</a></div>
                                    </div>
                                </li>
                                <li <?php if (!empty($id7)) echo "id=".$id7; ?>>
                                    <div>
                                        <div class="padding13"><a href="contact_us.php" title="Contact Us">Contact Us</a></div>
                                    </div>
                                </li> 
                                
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- end of right_header -->
        </div>
    </div>
    <!-- end of maincontainer_top -->
</div>
<!-- end of background_top -->
<div id="background_bottom">
    <div id="maincontainer_bottom">
        <?php 
		}
		//end of printHeader function
		
		function printFooter()
		{
		?>
        <div id="footer">
            <div id="left_footer">
                <div id="left_footer_content_left" class="small_white_bold"> <a href="contact_us.php" class="small_white_bold">Contact Us</a> | <a href="about_us.php" class="small_white_bold">About</a> | <a href="http://globaled.us/giving.asp" class="small_white_bold">Support CGE</a> | <a href="sitemap.php" class="small_white_bold">Site Map</a> | <a href="http://globaled.us" class="small_white_bold">Center for Global Education</a> </div>
                <div id="left_footer_content_right" class="small_white_bold"> All rights reserved&nbsp;<?php echo date("Y")?>&nbsp;|&nbsp;<a href="terms-of-use.php" class="small_white_bold">Terms of Use</a> </div>
            </div>
            <!-- end of left_footer -->
            <div id="middlefooter"></div>
            <div id="right_footer"></div>
        </div>
        <!-- end of footer -->
        <p></p>
    </div>
    <!--end of  maincontainer_bottom -->
    <p></p>
</div>
<!-- background bottom -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="javascript/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="javascript/jquery.accordion.js"></script>
<script src="javascript/droplinemenu.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
// <![CDATA[
			
$(document).ready(function() {
	droplinemenu.buildmenu("nav-bar");
	var numitems = $("#sponsors_list li").length;
	if ($("#sponsors_list li a").attr('href') == '') {
		$("#sponsors2").addClass("none");
		$("#sponsors_bar").addClass("none");
	}
	if (numitems <= 0) {
		$("#sponsors2").addClass("none");
		$("#sponsors_bar").addClass("none");
	}
	if( !$.trim( $('#main_sponsors_featured3').html() ).length) {
		$("#main_sponsors_featured3").addClass("none");
	}
});

$(window).load(function () {
	/*$(".sponsors_banner").css("cssText", "visibility: visible !important; display: inline-block !important;");
	$(".sponsors_banner img").css("cssText", "visibility: visible !important; display: inline-block !important;");*/	
		
	$('li.button a').eq(0).click();
    $('#featured').orbit({
        //timer: false,
		animationSpeed: 800,
		timer: true,
		advanceSpeed: 8000,
		bullets: false
    });

	$('#main_sponsors_featured').orbit({
		//timer: false,
		animation: 'fade',
		animationSpeed: 800,
		timer: true,
		advanceSpeed: 3000,
		bullets: false,
		directionalNav: false
	});
	
	var height = $("#right_content").height() - 26;
	$("#fp_container").css("cssText", "min-height:" + height + "px !important;");
});

// ]]>
//-->	
</script>
</body>
</html>
<?php
}
//end of printFooter function

function printSubpageFooter()
{
?>
<div id="subpage_footer">
    <div id="subpage_left_footer">
        <div id="subpage_left_footer_content_left" class="small_white_bold"><a href="contact_us.php" class="small_white_bold">Contact Us</a> | <a href="about_us.php" class="small_white_bold">About</a> | <a href="http://globaled.us/giving.asp" class="small_white_bold">Support CGE</a> | <a href="sitemap.php" class="small_white_bold">Site Map</a> | <a href="http://globaled.us" class="small_white_bold">Center for Global Education</a></div>
        <div id="left_footer_content_right" class="small_white_bold">All rights reserved&nbsp;<?php echo date("Y")?>&nbsp;|&nbsp;<a href="terms-of-use.php" class="small_white_bold">Terms of Use</a></div>
    </div>
    <!-- end of left_footer -->
    <div id="subpage_middlefooter"></div>
    <div id="subpage_right_footer"></div>
</div>
<!-- end of footer -->
<p></p>
</div>
<!--end of  maincontainer_bottom -->
<p></p>
</div>
<!-- background bottom -->
</body>
</html>
<?php
}
//end of printSubpageFooter function

function printProgramSearchForm()
{
	$htmlSearch = file_get_contents('http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SearchResults&Program_Name=csu&Program_Type_ID=1&pi=%7F&pc=%7F&pr=%7F&pt=%7F&p_10000=%7F&p_10000_t=MULTI&p_10001=%7F&p_10001_t=MULTI&p_10002=%7F&p_10002_t=MULTI&p_10003=%7F&p_10003_t=MULTI&p_10004=%7F&p_10004_t=MULTI&p_10005=%7F&p_10005_t=MINIM&p_10006=%7F&p_10006_t=MINIM&p_10007=%7F&p_10007_t=MULTI&Sort=Program_Name&Order=asc&pp=10000%2C10001%2C10002%2C10003%2C10004%2C10005%2C10006%2C10007');
	
	$htmlStart = strrpos($htmlSearch, "table-responsive") + 18;
	
	$htmlEnd = strrpos($htmlSearch, "/table") + 7;
	
	$htmlLength = $htmlEnd - $htmlStart;
	
	$htmlTemp = substr($htmlSearch, $htmlStart, $htmlLength);
	
	$htmlRows = explode("<tr>", $htmlTemp);
	
	$htmlCity = $htmlCountry = $htmlRegion = $htmlSponsor = "";
	
	for($i = 0; $i < count($htmlRows); $i++){
		$htmlClass = explode("<td class=\"compact-column\">", $htmlRows[$i]);
		$htmlCity[$i] = substr($htmlClass[1], 0, -14);
		$htmlCountry[$i] = trim(substr($htmlClass[2], 0, -14)," ");
		$htmlRegion[$i] = $htmlClass[3];
		$htmlSponsor[$i] = $htmlClass[4];
	}
	
	$htmlCity2 = array_unique($htmlCity);
	$htmlCountry2 = array_unique($htmlCountry);
	$htmlRegion2 = array_unique($htmlRegion);
	$htmlSponsor2 = array_unique($htmlSponsor);
	
	sort($htmlCountry2);
	$htmlString = "";
	foreach($htmlCity as $value){
		$htmlString = $htmlString . $value;
	}
?>
<div id="program_search_form">
     <form method="post" action="searchTest.php">
            <div class="box_left_form">
                        <input id="rdoTypeID_0" name="Program_Type_ID" value="1" type="hidden"/>
                        <div class="ps_country" style="position:relative;display:inline-block;">
                <div class="ps_label">
                    <label for="selProgCntry">Select A Country</label>
                </div>
                <div class="ps_list">
                    <select name="pc" id="selProgCntry" class="form-control" onchange="document.forms['searchForm'].elements['pi'].selectedIndex = 0; document.forms['searchForm'].elements['pr'].selectedIndex = 0;">
                        <option value="" selected="selected">Any/All Countries</option>
                        <?php for($i = 1; $i < count($htmlCountry2); $i++){
		echo '<option value="'.trim($htmlCountry2[$i],"\r\n\t").'">'.trim($htmlCountry2[$i],"\r\n\t").'</option>';  
	  }?>
                    </select>
                </div>
            </div><br />
            <div class="ps_term" style="position:relative;display:inline-block;">
                <div class="ps_label">
                    <label for="selProgTerm">Select A Term</label>
                </div>
                <div class="ps_list">
                    <select name="pt" id="selProgTerm" class="form-control">
                    <option value="" selected="selected">Any</option>

                        <option value="Academic Year">Academic Year</option>
                		
							<option value="Calendar Year">Calendar Year</option>
						
							<option value="Fall">Fall</option>
						
							<option value="J-Term">J-Term</option>
						
							<option value="Jan Term">Jan Term</option>
						
							<option value="Janterm">Janterm</option>
						
							<option value="May Term">May Term</option>
						
							<option value="Semester">Semester</option>
						
							<option value="Spring">Spring</option>
						
							<option value="Summer">Summer</option>
						
							<option value="Summer I">Summer I</option>
						
							<option value="Summer II">Summer II</option>
						
							<option value="Summer III">Summer III</option>
						
							<option value="Summer IV">Summer IV</option>
						
							<option value="Trimester">Trimester</option>
						
							<option value="Winter">Winter</option>

                    </select>
                </div>
            </div>                        
                
            
<br />
            <div class="ps_region" style="position:relative;display:inline-block;">
                <div class="ps_label">
                    <label for="selProgRegion">Select A Region</label>
                </div>
                <div class="ps_list">
                    <select name="pr" id="selProgRegion" class="form-control" onchange="document.forms['searchForm'].elements['pc'].selectedIndex = 0; document.forms['searchForm'].elements['pi'].selectedIndex = 0;">
                        <option value="" selected="selected">Any/All Regions</option>
                        <option value="Africa">Africa</option>
                        <option value="Asia">Asia</option>
                        <option value="At Sea">At Sea</option>
                        <option value="Australia/Pacific Islands">Australia/Pacific Islands</option>
                        <option value="Caribbean">Caribbean</option>
                        <option value="Central America">Central America</option>
                        <option value="Europe">Europe</option>
                        <option value="Latin America">Latin America</option>
                        <option value="Middle East">Middle East</option>
                        <option value="Multiple">Multiple</option>
                        <option value="North America">North America</option>
                        <option value="South America">South America</option>
                        <option value="Various">Various</option>
                        <option value="West Indies">West Indies</option>
                    </select>
                </div>
          
           <div class="ps_region" style="position:relative;display:inline-block;">
					<div class="ps_label" style="margin:10px 0px 0px 0px">
						<label for="selProgCity">Select A City</label>
					</div>
            <div class="ps_list" >
        			<select name="pi" id="selProgCity" class="form-control" onchange="document.forms['searchForm'].elements['pc'].selectedIndex = 0; document.forms['searchForm'].elements['pr'].selectedIndex = 0;">
						<option value="" selected="selected">Any</option>
						
							<option value="Aachen">Aachen</option>
						
							<option value="Aalborg">Aalborg</option>
						
							<option value="Aarhus">Aarhus</option>
						
							<option value="Aberdeen">Aberdeen</option>
						
							<option value="Abo">Abo</option>
						
							<option value="Accra">Accra</option>
						
							<option value="Addis Ababa">Addis Ababa</option>
						
							<option value="Adelaide">Adelaide</option>
						
							<option value="Agen">Agen</option>
						
							<option value="Agra">Agra</option>
						
							<option value="Ahmedabad">Ahmedabad</option>
						
							<option value="Aix en Provence">Aix en Provence</option>
						
							<option value="Aix-en-Provence">Aix-en-Provence</option>
						
							<option value="Akita">Akita</option>
						
							<option value="Akumal">Akumal</option>
						
							<option value="Alajuela">Alajuela</option>
						
							<option value="Alanya">Alanya</option>
						
							<option value="Albi">Albi</option>
						
							<option value="Albury-Wodonga">Albury-Wodonga</option>
						
							<option value="Alcala">Alcala</option>
						
							<option value="Aleppo">Aleppo</option>
						
							<option value="Alexandria">Alexandria</option>
						
							<option value="Algerciras">Algerciras</option>
						
							<option value="Alicante">Alicante</option>
						
							<option value="Alice">Alice</option>
						
							<option value="Alice Springs">Alice Springs</option>
						
							<option value="Almeria">Almeria</option>
						
							<option value="Almería">Almería</option>
						
							<option value="Alnarp">Alnarp</option>
						
							<option value="Amboise">Amboise</option>
						
							<option value="Amherst, MA">Amherst, MA</option>
						
							<option value="Amiens">Amiens</option>
						
							<option value="Amman">Amman</option>
						
							<option value="Amsterdam">Amsterdam</option>
						
							<option value="An Giang">An Giang</option>
						
							<option value="Andros Island">Andros Island</option>
						
							<option value="Angers">Angers</option>
						
							<option value="Ankara">Ankara</option>
						
							<option value="Annecy">Annecy</option>
						
							<option value="Ansung City">Ansung City</option>
						
							<option value="Antananarivo">Antananarivo</option>
						
							<option value="Antayla">Antayla</option>
						
							<option value="Antibes">Antibes</option>
						
							<option value="Antigua">Antigua</option>
						
							<option value="Antofagasta">Antofagasta</option>
						
							<option value="Antwerp">Antwerp</option>
						
							<option value="Apia">Apia</option>
						
							<option value="Archamps">Archamps</option>
						
							<option value="Arenal Volcano">Arenal Volcano</option>
						
							<option value="Arequipa">Arequipa</option>
						
							<option value="Arezzo">Arezzo</option>
						
							<option value="Arica">Arica</option>
						
							<option value="Arles">Arles</option>
						
							<option value="Armidale">Armidale</option>
						
							<option value="Arromanches">Arromanches</option>
						
							<option value="Arusha">Arusha</option>
						
							<option value="As">As</option>
						
							<option value="Asahikawa">Asahikawa</option>
						
							<option value="Asan">Asan</option>
						
							<option value="Ascoli Piceno">Ascoli Piceno</option>
						
							<option value="Ashikaga">Ashikaga</option>
						
							<option value="Assisi">Assisi</option>
						
							<option value="Asuncion">Asuncion</option>
						
							<option value="Atenas">Atenas</option>
						
							<option value="Atheniou">Atheniou</option>
						
							<option value="Athens">Athens</option>
						
							<option value="Atherton Tablelands">Atherton Tablelands</option>
						
							<option value="Atlanta, GA">Atlanta, GA</option>
						
							<option value="Auckland">Auckland</option>
						
							<option value="Aurangabad">Aurangabad</option>
						
							<option value="Auroville">Auroville</option>
						
							<option value="Auxerre">Auxerre</option>
						
							<option value="Aveiro">Aveiro</option>
						
							<option value="Avignon">Avignon</option>
						
							<option value="Avila">Avila</option>
						
							<option value="Ayacucho">Ayacucho</option>
						
							<option value="Ayers Rock">Ayers Rock</option>
						
							<option value="Azay-le-Rideau">Azay-le-Rideau</option>
						
							<option value="Bahia">Bahia</option>
						
							<option value="Bahía de Caráquez">Bahía de Caráquez</option>
						
							<option value="Bahia Magdalena">Bahia Magdalena</option>
						
							<option value="Ballarat">Ballarat</option>
						
							<option value="Ballyvaughan">Ballyvaughan</option>
						
							<option value="Bamako">Bamako</option>
						
							<option value="Bandung">Bandung</option>
						
							<option value="Bangalore">Bangalore</option>
						
							<option value="Bangkok">Bangkok</option>
						
							<option value="Bangor">Bangor</option>
						
							<option value="Baotou">Baotou</option>
						
							<option value="Barcelona">Barcelona</option>
						
							<option value="Bariloche">Bariloche</option>
						
							<option value="Barranquilla">Barranquilla</option>
						
							<option value="Bath">Bath</option>
						
							<option value="Bathurst">Bathurst</option>
						
							<option value="Bedford">Bedford</option>
						
							<option value="Bedulu">Bedulu</option>
						
							<option value="Beer Sheva">Beer Sheva</option>
						
							<option value="Beijing">Beijing</option>
						
							<option value="Beirut">Beirut</option>
						
							<option value="Belém">Belém</option>
						
							<option value="Belfast">Belfast</option>
						
							<option value="Belfort">Belfort</option>
						
							<option value="Belgrade">Belgrade</option>
						
							<option value="Belize City">Belize City</option>
						
							<option value="Bellville">Bellville</option>
						
							<option value="Belmopan">Belmopan</option>
						
							<option value="Belo Horizonte">Belo Horizonte</option>
						
							<option value="Bendigo">Bendigo</option>
						
							<option value="Benin">Benin</option>
						
							<option value="Beppu">Beppu</option>
						
							<option value="Bequia">Bequia</option>
						
							<option value="Bergen">Bergen</option>
						
							<option value="Berlin">Berlin</option>
						
							<option value="Bern">Bern</option>
						
							<option value="Besancon">Besancon</option>
						
							<option value="Biarritz">Biarritz</option>
						
							<option value="Bielefeld">Bielefeld</option>
						
							<option value="Bilbao">Bilbao</option>
						
							<option value="Bioko Island">Bioko Island</option>
						
							<option value="Birmingham">Birmingham</option>
						
							<option value="Bishkek">Bishkek</option>
						
							<option value="Blagoevgrad">Blagoevgrad</option>
						
							<option value="Bloemfontein">Bloemfontein</option>
						
							<option value="Bluefields">Bluefields</option>
						
							<option value="Bocas del Toro">Bocas del Toro</option>
						
							<option value="Bodh Gaya">Bodh Gaya</option>
						
							<option value="Bodo">Bodo</option>
						
							<option value="Bodrum">Bodrum</option>
						
							<option value="Bogota">Bogota</option>
						
							<option value="Bologna">Bologna</option>
						
							<option value="Bombay">Bombay</option>
						
							<option value="Bonaire">Bonaire</option>
						
							<option value="Bonn">Bonn</option>
						
							<option value="Bordeaux">Bordeaux</option>
						
							<option value="Boston, MA">Boston, MA</option>
						
							<option value="Bournemouth">Bournemouth</option>
						
							<option value="Bradford">Bradford</option>
						
							<option value="Bratislava">Bratislava</option>
						
							<option value="Braunau">Braunau</option>
						
							<option value="Braunschweig">Braunschweig</option>
						
							<option value="Brazilia">Brazilia</option>
						
							<option value="Bregenz">Bregenz</option>
						
							<option value="Bremen">Bremen</option>
						
							<option value="Brest">Brest</option>
						
							<option value="Brighton">Brighton</option>
						
							<option value="Brisbane">Brisbane</option>
						
							<option value="Bristol">Bristol</option>
						
							<option value="Brittany">Brittany</option>
						
							<option value="Brixen">Brixen</option>
						
							<option value="Brno">Brno</option>
						
							<option value="Brunswick, ME">Brunswick, ME</option>
						
							<option value="Brussels">Brussels</option>
						
							<option value="Budapest">Budapest</option>
						
							<option value="Buea">Buea</option>
						
							<option value="Buena Vista">Buena Vista</option>
						
							<option value="Buenavista">Buenavista</option>
						
							<option value="Buenos Aires">Buenos Aires</option>
						
							<option value="Bulawayo">Bulawayo</option>
						
							<option value="Bundoora">Bundoora</option>
						
							<option value="Burgos">Burgos</option>
						
							<option value="Busan">Busan</option>
						
							<option value="Bushbuckridge">Bushbuckridge</option>
						
							<option value="Byron Bay">Byron Bay</option>
						
							<option value="Cachan">Cachan</option>
						
							<option value="Cadir Hoyuk">Cadir Hoyuk</option>
						
							<option value="Cadiz">Cadiz</option>
						
							<option value="Caen">Caen</option>
						
							<option value="Cagliari">Cagliari</option>
						
							<option value="Cairns">Cairns</option>
						
							<option value="Cairo">Cairo</option>
						
							<option value="Calabash Caye">Calabash Caye</option>
						
							<option value="Calakmul">Calakmul</option>
						
							<option value="Calgary">Calgary</option>
						
							<option value="Callaghan">Callaghan</option>
						
							<option value="Cambridge">Cambridge</option>
						
							<option value="Campeche">Campeche</option>
						
							<option value="Campinas">Campinas</option>
						
							<option value="Can Tho">Can Tho</option>
						
							<option value="Canberra">Canberra</option>
						
							<option value="Cannes">Cannes</option>
						
							<option value="Canterbury">Canterbury</option>
						
							<option value="Cape Coast">Cape Coast</option>
						
							<option value="Cape Town">Cape Town</option>
						
							<option value="Capri">Capri</option>
						
							<option value="Caracas">Caracas</option>
						
							<option value="Cardiff">Cardiff</option>
						
							<option value="Carlow">Carlow</option>
						
							<option value="Carriacou">Carriacou</option>
						
							<option value="Cartagena">Cartagena</option>
						
							<option value="Cartago">Cartago</option>
						
							<option value="Casablanca">Casablanca</option>
						
							<option value="Castiglion Fiorentino">Castiglion Fiorentino</option>
						
							<option value="Catania">Catania</option>
						
							<option value="Cayenne">Cayenne</option>
						
							<option value="Central Anatolia">Central Anatolia</option>
						
							<option value="Cergy-pontoise">Cergy-pontoise</option>
						
							<option value="Cha-am">Cha-am</option>
						
							<option value="Chainat">Chainat</option>
						
							<option value="Chaing Mai">Chaing Mai</option>
						
							<option value="Chambery">Chambery</option>
						
							<option value="Changchun">Changchun</option>
						
							<option value="Changsha">Changsha</option>
						
							<option value="Chartres">Chartres</option>
						
							<option value="Cheltenham">Cheltenham</option>
						
							<option value="Chengde">Chengde</option>
						
							<option value="Chengdu">Chengdu</option>
						
							<option value="Chennai">Chennai</option>
						
							<option value="Chesapeake Bay">Chesapeake Bay</option>
						
							<option value="Chester">Chester</option>
						
							<option value="Cheverny">Cheverny</option>
						
							<option value="Chiang Mai">Chiang Mai</option>
						
							<option value="Chiapas">Chiapas</option>
						
							<option value="Chiba">Chiba</option>
						
							<option value="Chicago">Chicago</option>
						
							<option value="Chichicastenango">Chichicastenango</option>
						
							<option value="Chicoutimi">Chicoutimi</option>
						
							<option value="Chillan">Chillan</option>
						
							<option value="Chisinau">Chisinau</option>
						
							<option value="Cholet">Cholet</option>
						
							<option value="Cholula, Puebla">Cholula, Puebla</option>
						
							<option value="Chon Buri">Chon Buri</option>
						
							<option value="Chongqing">Chongqing</option>
						
							<option value="Christchurch">Christchurch</option>
						
							<option value="Chuncheon">Chuncheon</option>
						
							<option value="Cienfuegos">Cienfuegos</option>
						
							<option value="Ciudad de Mexico">Ciudad de Mexico</option>
						
							<option value="Coastal Kenya">Coastal Kenya</option>
						
							<option value="Cochabamba">Cochabamba</option>
						
							<option value="Cockburn Harbour">Cockburn Harbour</option>
						
							<option value="Coimbra">Coimbra</option>
						
							<option value="Colchester">Colchester</option>
						
							<option value="Coleraine">Coleraine</option>
						
							<option value="Collonges-sous-Saleve">Collonges-sous-Saleve</option>
						
							<option value="Cologne">Cologne</option>
						
							<option value="Colombo">Colombo</option>
						
							<option value="Colorado Beach">Colorado Beach</option>
						
							<option value="Compiegne">Compiegne</option>
						
							<option value="Concepcion">Concepcion</option>
						
							<option value="Copán">Copán</option>
						
							<option value="Copenhagen">Copenhagen</option>
						
							<option value="Coquimbo">Coquimbo</option>
						
							<option value="Cordoba">Cordoba</option>
						
							<option value="Córdoba">Córdoba</option>
						
							<option value="Cork">Cork</option>
						
							<option value="Coronado">Coronado</option>
						
							<option value="Corrientes">Corrientes</option>
						
							<option value="Cortona">Cortona</option>
						
							<option value="Cottbus">Cottbus</option>
						
							<option value="Courtauld">Courtauld</option>
						
							<option value="Coventry">Coventry</option>
						
							<option value="Crete">Crete</option>
						
							<option value="Cuenca">Cuenca</option>
						
							<option value="Cuernavaca">Cuernavaca</option>
						
							<option value="Cuper">Cuper</option>
						
							<option value="Curitiba">Curitiba</option>
						
							<option value="Cuzco">Cuzco</option>
						
							<option value="Czestochowa">Czestochowa</option>
						
							<option value="Daegu">Daegu</option>
						
							<option value="Daejeon">Daejeon</option>
						
							<option value="Dakar">Dakar</option>
						
							<option value="Dalian">Dalian</option>
						
							<option value="Damascus">Damascus</option>
						
							<option value="Danang">Danang</option>
						
							<option value="Dangriga">Dangriga</option>
						
							<option value="Dar es Salaam">Dar es Salaam</option>
						
							<option value="Darmstadt">Darmstadt</option>
						
							<option value="Dartington">Dartington</option>
						
							<option value="Darwin">Darwin</option>
						
							<option value="Debrecen">Debrecen</option>
						
							<option value="Delft">Delft</option>
						
							<option value="Delhi">Delhi</option>
						
							<option value="Delos">Delos</option>
						
							<option value="Delphi">Delphi</option>
						
							<option value="Den Haag">Den Haag</option>
						
							<option value="Denia">Denia</option>
						
							<option value="Denpasar">Denpasar</option>
						
							<option value="Derry">Derry</option>
						
							<option value="Dhaka">Dhaka</option>
						
							<option value="Dharamsala">Dharamsala</option>
						
							<option value="Dhrangadhra">Dhrangadhra</option>
						
							<option value="Differdange">Differdange</option>
						
							<option value="Dijon">Dijon</option>
						
							<option value="Doha">Doha</option>
						
							<option value="Dongfang">Dongfang</option>
						
							<option value="Dorchester">Dorchester</option>
						
							<option value="Dorset">Dorset</option>
						
							<option value="Dortmund">Dortmund</option>
						
							<option value="Dresden">Dresden</option>
						
							<option value="Dschang">Dschang</option>
						
							<option value="Dubai">Dubai</option>
						
							<option value="Dublin">Dublin</option>
						
							<option value="Dubrovnik">Dubrovnik</option>
						
							<option value="Duisburg">Duisburg</option>
						
							<option value="Dundee">Dundee</option>
						
							<option value="Dunedin">Dunedin</option>
						
							<option value="Durban">Durban</option>
						
							<option value="Durham">Durham</option>
						
							<option value="Dusseldorf">Dusseldorf</option>
						
							<option value="East Sussex">East Sussex</option>
						
							<option value="Eastbourne">Eastbourne</option>
						
							<option value="Easter Island">Easter Island</option>
						
							<option value="Ecoversidade">Ecoversidade</option>
						
							<option value="Edfu">Edfu</option>
						
							<option value="Edinburgh">Edinburgh</option>
						
							<option value="Edmonton">Edmonton</option>
						
							<option value="Eichstatt">Eichstatt</option>
						
							<option value="Elba">Elba</option>
						
							<option value="Eldoret">Eldoret</option>
						
							<option value="Epernay">Epernay</option>
						
							<option value="Epidauros">Epidauros</option>
						
							<option value="Erlangen-Nurnberg">Erlangen-Nurnberg</option>
						
							<option value="Esbjerg">Esbjerg</option>
						
							<option value="Estado de Mexico">Estado de Mexico</option>
						
							<option value="Exeter">Exeter</option>
						
							<option value="Exmouth">Exmouth</option>
						
							<option value="Falmouth">Falmouth</option>
						
							<option value="Famagusta">Famagusta</option>
						
							<option value="Faro">Faro</option>
						
							<option value="Fenyan">Fenyan</option>
						
							<option value="Ferrara">Ferrara</option>
						
							<option value="Fez">Fez</option>
						
							<option value="Findhorn">Findhorn</option>
						
							<option value="Flamingo Beach">Flamingo Beach</option>
						
							<option value="Florence">Florence</option>
						
							<option value="Florianopolis">Florianopolis</option>
						
							<option value="Fontainebleau">Fontainebleau</option>
						
							<option value="Fora">Fora</option>
						
							<option value="Fort Dauphin">Fort Dauphin</option>
						
							<option value="Fortaleza">Fortaleza</option>
						
							<option value="Frankfurt">Frankfurt</option>
						
							<option value="Fraser Island">Fraser Island</option>
						
							<option value="Frederiksberg">Frederiksberg</option>
						
							<option value="Freiburg">Freiburg</option>
						
							<option value="Fremantle">Fremantle</option>
						
							<option value="Fribourg">Fribourg</option>
						
							<option value="Fukuoka">Fukuoka</option>
						
							<option value="Futuroscope">Futuroscope</option>
						
							<option value="Fuzhou">Fuzhou</option>
						
							<option value="Gaborone">Gaborone</option>
						
							<option value="Galapagos">Galapagos</option>
						
							<option value="Galashiels">Galashiels</option>
						
							<option value="Gallipoli">Gallipoli</option>
						
							<option value="Galway">Galway</option>
						
							<option value="Gangtok">Gangtok</option>
						
							<option value="Gap">Gap</option>
						
							<option value="Geelong">Geelong</option>
						
							<option value="Geneva">Geneva</option>
						
							<option value="Genoa">Genoa</option>
						
							<option value="Getafe">Getafe</option>
						
							<option value="Ghent">Ghent</option>
						
							<option value="Gibraltar">Gibraltar</option>
						
							<option value="GieBen">GieBen</option>
						
							<option value="Giessen">Giessen</option>
						
							<option value="Girona">Girona</option>
						
							<option value="Glasgow">Glasgow</option>
						
							<option value="Gold Coast">Gold Coast</option>
						
							<option value="Gottingen">Gottingen</option>
						
							<option value="Grado">Grado</option>
						
							<option value="Grahamstown">Grahamstown</option>
						
							<option value="Granada">Granada</option>
						
							<option value="Grantham">Grantham</option>
						
							<option value="Graz">Graz</option>
						
							<option value="Great Barrier Reef">Great Barrier Reef</option>
						
							<option value="Greater Sudbury">Greater Sudbury</option>
						
							<option value="Grenoble">Grenoble</option>
						
							<option value="Groningen">Groningen</option>
						
							<option value="Guadalajara">Guadalajara</option>
						
							<option value="Guanacaste">Guanacaste</option>
						
							<option value="Guanajuato">Guanajuato</option>
						
							<option value="Guangzhou">Guangzhou</option>
						
							<option value="Guatemala">Guatemala</option>
						
							<option value="Guayaquil">Guayaquil</option>
						
							<option value="Guilin">Guilin</option>
						
							<option value="Guiyang City">Guiyang City</option>
						
							<option value="Gulu">Gulu</option>
						
							<option value="Gwangju">Gwangju</option>
						
							<option value="Gyeongsan">Gyeongsan</option>
						
							<option value="Hai Phong">Hai Phong</option>
						
							<option value="Haifa">Haifa</option>
						
							<option value="Haikou">Haikou</option>
						
							<option value="Haimen">Haimen</option>
						
							<option value="Hainan">Hainan</option>
						
							<option value="Halifax">Halifax</option>
						
							<option value="Halong Bay">Halong Bay</option>
						
							<option value="Hamburg">Hamburg</option>
						
							<option value="Hamilton">Hamilton</option>
						
							<option value="Handan">Handan</option>
						
							<option value="Hangzhou">Hangzhou</option>
						
							<option value="Hannover">Hannover</option>
						
							<option value="Hanoi">Hanoi</option>
						
							<option value="Harbin">Harbin</option>
						
							<option value="Hartford, CT">Hartford, CT</option>
						
							<option value="Hat Yai">Hat Yai</option>
						
							<option value="Havana">Havana</option>
						
							<option value="Haworth">Haworth</option>
						
							<option value="Heidelberg">Heidelberg</option>
						
							<option value="Helsinki">Helsinki</option>
						
							<option value="Heraklion">Heraklion</option>
						
							<option value="Heredia">Heredia</option>
						
							<option value="Hermosillo">Hermosillo</option>
						
							<option value="Herradura">Herradura</option>
						
							<option value="Hervey Bay">Hervey Bay</option>
						
							<option value="Hikone">Hikone</option>
						
							<option value="Hirakata City">Hirakata City</option>
						
							<option value="Hiratsuka">Hiratsuka</option>
						
							<option value="Hiroshima">Hiroshima</option>
						
							<option value="Ho">Ho</option>
						
							<option value="Ho Chi Minh City">Ho Chi Minh City</option>
						
							<option value="Hobart">Hobart</option>
						
							<option value="Hohenheim">Hohenheim</option>
						
							<option value="Hong Kong">Hong Kong</option>
						
							<option value="Honolulu, HI">Honolulu, HI</option>
						
							<option value="Hsinchu">Hsinchu</option>
						
							<option value="Huddersfield">Huddersfield</option>
						
							<option value="Hue">Hue</option>
						
							<option value="Huia">Huia</option>
						
							<option value="Hull">Hull</option>
						
							<option value="Hyderabad">Hyderabad</option>
						
							<option value="Hyeres">Hyeres</option>
						
							<option value="Ifrane">Ifrane</option>
						
							<option value="Ilheus">Ilheus</option>
						
							<option value="Imbituba">Imbituba</option>
						
							<option value="Innsbruck">Innsbruck</option>
						
							<option value="Inverness">Inverness</option>
						
							<option value="Ioannina">Ioannina</option>
						
							<option value="Iquitos">Iquitos</option>
						
							<option value="Irbid">Irbid</option>
						
							<option value="Iringa">Iringa</option>
						
							<option value="Irkutsk">Irkutsk</option>
						
							<option value="Istanbul">Istanbul</option>
						
							<option value="Izmir">Izmir</option>
						
							<option value="Jackson">Jackson</option>
						
							<option value="Jaco Beach">Jaco Beach</option>
						
							<option value="Jaipur">Jaipur</option>
						
							<option value="Jakar">Jakar</option>
						
							<option value="Jakarta">Jakarta</option>
						
							<option value="Jarabacoa">Jarabacoa</option>
						
							<option value="Jena">Jena</option>
						
							<option value="Jerusalem">Jerusalem</option>
						
							<option value="Jiamusi">Jiamusi</option>
						
							<option value="Jilin">Jilin</option>
						
							<option value="Jinan">Jinan</option>
						
							<option value="João Pessoa">João Pessoa</option>
						
							<option value="Joensuu">Joensuu</option>
						
							<option value="Johannesburg">Johannesburg</option>
						
							<option value="Jordanstown">Jordanstown</option>
						
							<option value="Juiz de Fora">Juiz de Fora</option>
						
							<option value="Jyvaskyla">Jyvaskyla</option>
						
							<option value="Jyväskylä">Jyväskylä</option>
						
							<option value="Kaiaua">Kaiaua</option>
						
							<option value="Kakadu">Kakadu</option>
						
							<option value="Kalambaka">Kalambaka</option>
						
							<option value="Kalmar">Kalmar</option>
						
							<option value="Kamloops">Kamloops</option>
						
							<option value="Kampala">Kampala</option>
						
							<option value="Kanazawa">Kanazawa</option>
						
							<option value="Kanchipuram">Kanchipuram</option>
						
							<option value="Kandy">Kandy</option>
						
							<option value="Karlsruhe">Karlsruhe</option>
						
							<option value="Karlstad">Karlstad</option>
						
							<option value="Kasugai">Kasugai</option>
						
							<option value="Kata Tjuta">Kata Tjuta</option>
						
							<option value="Kathmandu">Kathmandu</option>
						
							<option value="Kauai">Kauai</option>
						
							<option value="Kawasaki">Kawasaki</option>
						
							<option value="Keele">Keele</option>
						
							<option value="Kent">Kent</option>
						
							<option value="Kerala">Kerala</option>
						
							<option value="Khabarovsk">Khabarovsk</option>
						
							<option value="Khajuraho">Khajuraho</option>
						
							<option value="Kham">Kham</option>
						
							<option value="Kharkiv">Kharkiv</option>
						
							<option value="Khon Kaen">Khon Kaen</option>
						
							<option value="Kibbutz Ketura">Kibbutz Ketura</option>
						
							<option value="Kiel">Kiel</option>
						
							<option value="Kiev">Kiev</option>
						
							<option value="Kigali">Kigali</option>
						
							<option value="Kilimanjaro">Kilimanjaro</option>
						
							<option value="Kilimanjaro Bush Camp">Kilimanjaro Bush Camp</option>
						
							<option value="Kimasi">Kimasi</option>
						
							<option value="Kingston">Kingston</option>
						
							<option value="Kingston-upon-Hull">Kingston-upon-Hull</option>
						
							<option value="Kingston-upon-Thames">Kingston-upon-Thames</option>
						
							<option value="Kisumu">Kisumu</option>
						
							<option value="Kitzbuhel">Kitzbuhel</option>
						
							<option value="Klagenfurt">Klagenfurt</option>
						
							<option value="Kobe">Kobe</option>
						
							<option value="Kochi">Kochi</option>
						
							<option value="Kolding">Kolding</option>
						
							<option value="Kolkata">Kolkata</option>
						
							<option value="Konstanz">Konstanz</option>
						
							<option value="Koobi Fora">Koobi Fora</option>
						
							<option value="Koupio">Koupio</option>
						
							<option value="Kowloon">Kowloon</option>
						
							<option value="Krakow">Krakow</option>
						
							<option value="Kristianstad">Kristianstad</option>
						
							<option value="Kuala Lumpur">Kuala Lumpur</option>
						
							<option value="Kuching">Kuching</option>
						
							<option value="Kumasi">Kumasi</option>
						
							<option value="Kunming">Kunming</option>
						
							<option value="Kyiv">Kyiv</option>
						
							<option value="Kyoto">Kyoto</option>
						
							<option value="Kyoto City">Kyoto City</option>
						
							<option value="Kyrenia">Kyrenia</option>
						
							<option value="La Ceiba">La Ceiba</option>
						
							<option value="La Coruna">La Coruna</option>
						
							<option value="La Manzanilla">La Manzanilla</option>
						
							<option value="La Milpa">La Milpa</option>
						
							<option value="La Napoule">La Napoule</option>
						
							<option value="La Paz">La Paz</option>
						
							<option value="La Rochelle">La Rochelle</option>
						
							<option value="La Romana">La Romana</option>
						
							<option value="La Rosiere">La Rosiere</option>
						
							<option value="La Serena">La Serena</option>
						
							<option value="La Suerte">La Suerte</option>
						
							<option value="Ladakh">Ladakh</option>
						
							<option value="Lake Atitlan">Lake Atitlan</option>
						
							<option value="Lamanai">Lamanai</option>
						
							<option value="Lamu">Lamu</option>
						
							<option value="Lancashire">Lancashire</option>
						
							<option value="Lancaster">Lancaster</option>
						
							<option value="Lappeenranta">Lappeenranta</option>
						
							<option value="Larnaca">Larnaca</option>
						
							<option value="Launceston">Launceston</option>
						
							<option value="Lausanne">Lausanne</option>
						
							<option value="Le Havre">Le Havre</option>
						
							<option value="Le Mans">Le Mans</option>
						
							<option value="Lebon">Lebon</option>
						
							<option value="Lecce">Lecce</option>
						
							<option value="Leeds">Leeds</option>
						
							<option value="Legon">Legon</option>
						
							<option value="Leicester">Leicester</option>
						
							<option value="Leiden">Leiden</option>
						
							<option value="Leipzig">Leipzig</option>
						
							<option value="Lemgo">Lemgo</option>
						
							<option value="Lennoxville">Lennoxville</option>
						
							<option value="Leoben">Leoben</option>
						
							<option value="Lesotho">Lesotho</option>
					
							<option value="Leuven">Leuven</option>
						
							<option value="Leysin">Leysin</option>
						
							<option value="Lhasa">Lhasa</option>
						
							<option value="Lianyungang">Lianyungang</option>
						
							<option value="Libertador San Martin">Libertador San Martin</option>
						
							<option value="Liege">Liege</option>
						
							<option value="Lille">Lille</option>
						

							<option value="Lima">Lima</option>
						
							<option value="Limassol">Limassol</option>
						
							<option value="Limerick">Limerick</option>
						
							<option value="Limpopo">Limpopo</option>
						
							<option value="Linz">Linz</option>
						
							<option value="Lisbon">Lisbon</option>
					
							<option value="Lisieux">Lisieux</option>
					
							<option value="Lismore">Lismore</option>
						
							<option value="Little Cayman">Little Cayman</option>
						
							<option value="Liverpool">Liverpool</option>
						
							<option value="Livingstone">Livingstone</option>
						
							<option value="Ljubljana">Ljubljana</option>
						
							<option value="Logrono">Logrono</option>
						
							<option value="Loire Valley">Loire Valley</option>
						
							<option value="London">London</option>
						
							<option value="Londonderry">Londonderry</option>
						
							<option value="Lopburi">Lopburi</option>
						
							<option value="Los Angeles">Los Angeles</option>
						
							<option value="Louvain">Louvain</option>
						
							<option value="Luang Prabang">Luang Prabang</option>
						
							<option value="Lublin">Lublin</option>
						
							<option value="Lucca">Lucca</option>
						
							<option value="Lucerne">Lucerne</option>
						
							<option value="Lugano">Lugano</option>
						
							<option value="Lulea">Lulea</option>
						
							<option value="Lund">Lund</option>
						
							<option value="Lüneburg">Lüneburg</option>
						
							<option value="Luoyang">Luoyang</option>
						
							<option value="Luxembourg">Luxembourg</option>
						
							<option value="Luxor">Luxor</option>
						
							<option value="Lviv">Lviv</option>
						
							<option value="Lyngby">Lyngby</option>
						
							<option value="Lyon">Lyon</option>
						
							<option value="Lyttleton">Lyttleton</option>
						
							<option value="Maastricht">Maastricht</option>
						
							<option value="Macarthur">Macarthur</option>
						
							<option value="Macau">Macau</option>
						
							<option value="Maceio">Maceio</option>
						
							<option value="Macon">Macon</option>
						
							<option value="Madaba">Madaba</option>
						
							<option value="Madras">Madras</option>
						
							<option value="Madrid">Madrid</option>
						
							<option value="Madurai">Madurai</option>
						
							<option value="Magee">Magee</option>
						
							<option value="Magnetic Island">Magnetic Island</option>
						
							<option value="Mahabalipuram">Mahabalipuram</option>
						
							<option value="Mahe">Mahe</option>
						
							<option value="Mainz">Mainz</option>
						
							<option value="Malabo">Malabo</option>
						
							<option value="Malaga">Malaga</option>
						
							<option value="Mallorca">Mallorca</option>
						
							<option value="Malmo">Malmo</option>
						
							<option value="Mana">Mana</option>
						
							<option value="Managua">Managua</option>
						
							<option value="Manaus">Manaus</option>
						
							<option value="Manchester">Manchester</option>
						
							<option value="Manila">Manila</option>
						
							<option value="Manilla">Manilla</option>
						
							<option value="Manipal">Manipal</option>
						
							<option value="Manizales">Manizales</option>
						
							<option value="Mannheim">Mannheim</option>
						
							<option value="Manu">Manu</option>
						
							<option value="Manuel Antonio">Manuel Antonio</option>
						
							<option value="Mar del Plata">Mar del Plata</option>
						
							<option value="Marbella">Marbella</option>
						
							<option value="Marburg">Marburg</option>
						
							<option value="Mariana">Mariana</option>
						
							<option value="Maroochydore">Maroochydore</option>
						
							<option value="Marrakech">Marrakech</option>
						
							<option value="Marseille">Marseille</option>
						
							<option value="Masstricht">Masstricht</option>
						
							<option value="Maun">Maun</option>
						
							<option value="Maynooth">Maynooth</option>
						
							<option value="Mazatlan">Mazatlan</option>
						
							<option value="Medellin">Medellin</option>
						
							<option value="Meknes">Meknes</option>
						
							<option value="Melbourne">Melbourne</option>
						
							<option value="Mendoza">Mendoza</option>
						
							<option value="Menorca">Menorca</option>
						
							<option value="Merida">Merida</option>
						
							<option value="Metz">Metz</option>
						
							<option value="Mexico City">Mexico City</option>
						
							<option value="Middlesbrough">Middlesbrough</option>
						
							<option value="Middletown, CT">Middletown, CT</option>
						
							<option value="Milan">Milan</option>
						
							<option value="Mildura">Mildura</option>
						
							<option value="Mindo">Mindo</option>
						
							<option value="Minneapolis–Saint Paul">Minneapolis–Saint Paul</option>
						
							<option value="Mishima">Mishima</option>
						
							<option value="Mitaka City">Mitaka City</option>
						
							<option value="Mittweida">Mittweida</option>
						
							<option value="Mojo Hill Camp">Mojo Hill Camp</option>
						
							<option value="Mombasa">Mombasa</option>
						
							<option value="Monrovia">Monrovia</option>
						
							<option value="Mont-St-Michel">Mont-St-Michel</option>
						
							<option value="Montañita">Montañita</option>
						
							<option value="Montbard">Montbard</option>
						
							<option value="Monte Carlo">Monte Carlo</option>
						
							<option value="Monterrey">Monterrey</option>
						
							<option value="Monteverde">Monteverde</option>
						
							<option value="Montevideo">Montevideo</option>
						

							<option value="Montpellier">Montpellier</option>
						
							<option value="Montreal">Montreal</option>
						
							<option value="Montreux">Montreux</option>
						
							<option value="Moorea">Moorea</option>
						
							<option value="Morelia">Morelia</option>
						
							<option value="Morioka">Morioka</option>
						
							<option value="Morogoro">Morogoro</option>
						
							<option value="Moscow">Moscow</option>
						
							<option value="Moshi">Moshi</option>
						
							<option value="Moyo Hill Camp">Moyo Hill Camp</option>
						
							<option value="Msida">Msida</option>
						
							<option value="Mt. Buller">Mt. Buller</option>
						
							<option value="Muak Lek">Muak Lek</option>
						
							<option value="Mulhouse">Mulhouse</option>
						
							<option value="Multiple">Multiple</option>
						
							<option value="Mumbai">Mumbai</option>
						
							<option value="Munchen">Munchen</option>
						
							<option value="Munich">Munich</option>
						
							<option value="Munster">Munster</option>
						
							<option value="Murcia">Murcia</option>
						
							<option value="Muscat">Muscat</option>
						
							<option value="Mwanza">Mwanza</option>
						
							<option value="Mycenae">Mycenae</option>
						
							<option value="Mykonos">Mykonos</option>
						
							<option value="Mysore">Mysore</option>
						
							<option value="Mystic, CT">Mystic, CT</option>
					
							<option value="Nafplion">Nafplion</option>
						
							<option value="Nagano">Nagano</option>
						
							<option value="Nagasaki">Nagasaki</option>
						
							<option value="Nagoya">Nagoya</option>
						
							<option value="Nairobi">Nairobi</option>
						
							<option value="Nakajo">Nakajo</option>
						
							<option value="Nakhon Pathon">Nakhon Pathon</option>
						
							<option value="Nakhon Ratchasima">Nakhon Ratchasima</option>
						
							<option value="Nakuru">Nakuru</option>
						
							<option value="Nancy">Nancy</option>
						
							<option value="Nanjing">Nanjing</option>
						
							<option value="Nantes">Nantes</option>
						
							<option value="Napier">Napier</option>
						
							<option value="Naples">Naples</option>
						
							<option value="Napo Region">Napo Region</option>
						
							<option value="Nara">Nara</option>
						
							<option value="Nassau">Nassau</option>
						
							<option value="Naxos">Naxos</option>
						
							<option value="New Delhi">New Delhi</option>
						
							<option value="New London, CT">New London, CT</option>
						
							<option value="New York">New York</option>
						
							<option value="Newcastle">Newcastle</option>
						
							<option value="Newton Abbot">Newton Abbot</option>
						
							<option value="Newtownabbey">Newtownabbey</option>
						
							<option value="Niamey">Niamey</option>
						
							<option value="Nice">Nice</option>
						
							<option value="Nicosia">Nicosia</option>
						
							<option value="Niigata">Niigata</option>
						
							<option value="Nijmegen">Nijmegen</option>
						
							<option value="Nimes">Nimes</option>
						
							<option value="Ningbo">Ningbo</option>
						
							<option value="Nis">Nis</option>
						
							<option value="Nishinomiya">Nishinomiya</option>
						
							<option value="Niteroi">Niteroi</option>
						
							<option value="Nizhny Novgorod">Nizhny Novgorod</option>
						
							<option value="Normandy">Normandy</option>
						
							<option value="North Island">North Island</option>
						
							<option value="North Ryde">North Ryde</option>
						
							<option value="Northampton, MA">Northampton, MA</option>
						
							<option value="Norton, MA">Norton, MA</option>
						
							<option value="Norwich">Norwich</option>
						
							<option value="Nottingham">Nottingham</option>
						
							<option value="Novgorod The Great">Novgorod The Great</option>
						
							<option value="Novosibirsk">Novosibirsk</option>
						
							<option value="Nuku Hiva">Nuku Hiva</option>
						
							<option value="Nungua">Nungua</option>
						
							<option value="Nyon">Nyon</option>
						
							<option value="Oahu, Hawaii">Oahu, Hawaii</option>
						
							<option value="Oaxaca">Oaxaca</option>
						
							<option value="Odense">Odense</option>
						
							<option value="Odessa">Odessa</option>
						
							<option value="Oestrich-winkel">Oestrich-winkel</option>
						
							<option value="Oita">Oita</option>
						
							<option value="Okoyama">Okoyama</option>
						
							<option value="Olomouc">Olomouc</option>
						
							<option value="Olympia">Olympia</option>
						
							<option value="Orbetello">Orbetello</option>
						
							<option value="Orebro">Orebro</option>
						
							<option value="Orellana">Orellana</option>
						
							<option value="Orleans">Orleans</option>
						
							<option value="Ormskirk">Ormskirk</option>
						
							<option value="Orsay">Orsay</option>
						
							<option value="Osaka">Osaka</option>
						
							<option value="Oslo">Oslo</option>
						
							<option value="Osnabrück">Osnabrück</option>
						
							<option value="Otago">Otago</option>
						
							<option value="Otavalo">Otavalo</option>
						
							<option value="Ottawa">Ottawa</option>
						
							<option value="Ouagadougou">Ouagadougou</option>
						
							<option value="Oulu">Oulu</option>
						
							<option value="Ouro Preto">Ouro Preto</option>
						
							<option value="Oviedo">Oviedo</option>
						
							<option value="Oxford">Oxford</option>
						
							<option value="Paderno del Grappa">Paderno del Grappa</option>
						
							<option value="Padova">Padova</option>
						
							<option value="Padua">Padua</option>
						
							<option value="Palma de Mallorca">Palma de Mallorca</option>
						
							<option value="Palmerston North">Palmerston North</option>
						
							<option value="Pamplona">Pamplona</option>
						
							<option value="Panamá">Panamá</option>
						
							<option value="Panama City">Panama City</option>
						
							<option value="Papeete, Tahiti">Papeete, Tahiti</option>
						
							<option value="Paphos">Paphos</option>
						
							<option value="Parana">Parana</option>
						
							<option value="Paranagua">Paranagua</option>
						
							<option value="Parati">Parati</option>
						
							<option value="Paris">Paris</option>
						
							<option value="Paros">Paros</option>
						
							<option value="Patagonia">Patagonia</option>
						
							<option value="Pau">Pau</option>
						
							<option value="Pavia">Pavia</option>
						
							<option value="Pearl River Delta">Pearl River Delta</option>
						
							<option value="Penang">Penang</option>
						
							<option value="Pergamum">Pergamum</option>
						
							<option value="Perpignan">Perpignan</option>
						
							<option value="Perth">Perth</option>
						
							<option value="Perugia">Perugia</option>
						
							<option value="Phang Nga">Phang Nga</option>
						
							<option value="Philadelphia">Philadelphia</option>
						
							<option value="Phnom Penh">Phnom Penh</option>
						
							<option value="Phuket">Phuket</option>
						
							<option value="Piacenza">Piacenza</option>
						
							<option value="Pichelemu">Pichelemu</option>
						
							<option value="Pietermaritzburg">Pietermaritzburg</option>
						
							<option value="Pingyao">Pingyao</option>
						
							<option value="Piracicaba">Piracicaba</option>
						
							<option value="Piraeus">Piraeus</option>
						
							<option value="Pisa">Pisa</option>
						
							<option value="Pistoia">Pistoia</option>
						
							<option value="Playa del Carmen">Playa del Carmen</option>
						
							<option value="Playa Tamarindo">Playa Tamarindo</option>
						
							<option value="Plymouth">Plymouth</option>
						
							<option value="Podgorica">Podgorica</option>
						
							<option value="Pohang">Pohang</option>
						
							<option value="Pointe a Pitre">Pointe a Pitre</option>
						
							<option value="Poitiers">Poitiers</option>
						
							<option value="Pokhara">Pokhara</option>
						
							<option value="Pompeii">Pompeii</option>
						
							<option value="Pondicherry">Pondicherry</option>
						
							<option value="Ponta Grossa">Ponta Grossa</option>
						
							<option value="Pontlevoy">Pontlevoy</option>
						
							<option value="Port Antonio">Port Antonio</option>
						
							<option value="Port Elizabeth">Port Elizabeth</option>
						
							<option value="Port Louis">Port Louis</option>
						
							<option value="Port Said">Port Said</option>
						
							<option value="Porto">Porto</option>
						
							<option value="Porto Alegre">Porto Alegre</option>
						
							<option value="Poughkeepsie, NY">Poughkeepsie, NY</option>
						
							<option value="Poznan">Poznan</option>
						
							<option value="Prague">Prague</option>
						
							<option value="Praia das Macas">Praia das Macas</option>
						
							<option value="Preston">Preston</option>
						
							<option value="Pretoria">Pretoria</option>
						
							<option value="Prien">Prien</option>
						
							<option value="Puebla City">Puebla City</option>
						
							<option value="Puerto Morelos">Puerto Morelos</option>
						
							<option value="Puerto Penasco">Puerto Penasco</option>
						
							<option value="Puerto Quetzal">Puerto Quetzal</option>
						
							<option value="Puerto San Carlos">Puerto San Carlos</option>
						
							<option value="Puerto Vallarta">Puerto Vallarta</option>
						
							<option value="Pune">Pune</option>
						
							<option value="Punta Gorda">Punta Gorda</option>
						
							<option value="Puntarenas">Puntarenas</option>
						
							<option value="Pusan">Pusan</option>
						
							<option value="Qingdao">Qingdao</option>
						
							<option value="Qinhuangdao">Qinhuangdao</option>
						
							<option value="Quebec">Quebec</option>
						
							<option value="Queensland">Queensland</option>
						
							<option value="Queenstown">Queenstown</option>
						
							<option value="Quepos">Quepos</option>
						
							<option value="Queretaro">Queretaro</option>
						
							<option value="Quetzaltenango">Quetzaltenango</option>
						
							<option value="Quezon City">Quezon City</option>
						
							<option value="Qufu">Qufu</option>
						
							<option value="Quito">Quito</option>
						
							<option value="Rabat">Rabat</option>
						
							<option value="Raiatea">Raiatea</option>
						
							<option value="Rajasthan">Rajasthan</option>
						
							<option value="Randers">Randers</option>
						
							<option value="Rarotonga">Rarotonga</option>
						
							<option value="Ras Al Khaimah">Ras Al Khaimah</option>
						
							<option value="Reading">Reading</option>
						
							<option value="Reap">Reap</option>
						
							<option value="Recife">Recife</option>
						
							<option value="Regensberg">Regensberg</option>
						
							<option value="Regensburg">Regensburg</option>
						
							<option value="Reggio Emilia">Reggio Emilia</option>
						
							<option value="Rennes">Rennes</option>
						
							<option value="Reutlingen">Reutlingen</option>
						
							<option value="Reykjavik">Reykjavik</option>
						
							<option value="Rhodes">Rhodes</option>
						
							<option value="Richards Bay">Richards Bay</option>
						
							<option value="Riga">Riga</option>
						
							<option value="Rio de Janeiro">Rio de Janeiro</option>
						
							<option value="Rio Grande">Rio Grande</option>
						
							<option value="Rio Piedras">Rio Piedras</option>
						
							<option value="Roatan Island">Roatan Island</option>
						
							<option value="Robina">Robina</option>
						
							<option value="Rockhampton">Rockhampton</option>
						
							<option value="Rome">Rome</option>
						
							<option value="Ronda">Ronda</option>
						
							<option value="Rosario">Rosario</option>
						
							<option value="Roskilde">Roskilde</option>
						
							<option value="Rotorua">Rotorua</option>
						
							<option value="Rotterdam">Rotterdam</option>
						
							<option value="Roubaix">Roubaix</option>
						
							<option value="Rouen">Rouen</option>
						
							<option value="Royan">Royan</option>
						
							<option value="Rwinkwavu">Rwinkwavu</option>
						
							<option value="Sabara">Sabara</option>
						
							<option value="Saint-Laurent-du-Var">Saint-Laurent-du-Var</option>
						
							<option value="Saint-Louis">Saint-Louis</option>
						
							<option value="Salamanca">Salamanca</option>
						
							<option value="Salaya">Salaya</option>
						
							<option value="Salta">Salta</option>
						
							<option value="Salvador">Salvador</option>
						
							<option value="Salvador da Bahia">Salvador da Bahia</option>
						
							<option value="Salzburg">Salzburg</option>
						
							<option value="Samana">Samana</option>
						
							<option value="Samara">Samara</option>
						
							<option value="Samraong">Samraong</option>
						
							<option value="San Carlos de Bariloche">San Carlos de Bariloche</option>
						
							<option value="San Cristobal">San Cristobal</option>
						
							<option value="San Diego. CA">San Diego. CA</option>
						
							<option value="San Francisco, CA">San Francisco, CA</option>
						
							<option value="San Ignacio">San Ignacio</option>
						
							<option value="San Joaquin">San Joaquin</option>
						
							<option value="San Jose">San Jose</option>
						
							<option value="San Juan">San Juan</option>
						
							<option value="San Luis Potosi">San Luis Potosi</option>
						
							<option value="San Luis Valley">San Luis Valley</option>
						
							<option value="San Miguel de Allende">San Miguel de Allende</option>
						
							<option value="San Miguel de Tucuman">San Miguel de Tucuman</option>
						
							<option value="San Pedro">San Pedro</option>
						
							<option value="San Pedro de Atacama">San Pedro de Atacama</option>
						
							<option value="San Ramon">San Ramon</option>
						
							<option value="San Salvador">San Salvador</option>
						
							<option value="San Sebastian">San Sebastian</option>
						
							<option value="Sanremo">Sanremo</option>
						
							<option value="Santa Ana">Santa Ana</option>
						
							<option value="Santa Cruz">Santa Cruz</option>
						
							<option value="Santander">Santander</option>
						
							<option value="Santarem">Santarem</option>
						
							<option value="Santiago">Santiago</option>
						
							<option value="Santiago de Compostela">Santiago de Compostela</option>
						
							<option value="Santiago de Cuba">Santiago de Cuba</option>
						
							<option value="Santo Domingo">Santo Domingo</option>
						
							<option value="Santorini">Santorini</option>
						
							<option value="Santos">Santos</option>
						
							<option value="Sao Paulo">Sao Paulo</option>
						
							<option value="São Paulo">São Paulo</option>
						
							<option value="Sapporo">Sapporo</option>
						
							<option value="Saskatoon">Saskatoon</option>
						
							<option value="Schoelcher">Schoelcher</option>
						
							<option value="Schwabish Hall">Schwabish Hall</option>
						
							<option value="Seam">Seam</option>
						
							<option value="Segovia">Segovia</option>
						
							<option value="Sendai">Sendai</option>
						
							<option value="Seoul">Seoul</option>
						
							<option value="Seta">Seta</option>
						
							<option value="Sevilla">Sevilla</option>
						
							<option value="Seville">Seville</option>
						
							<option value="Shandong">Shandong</option>
						
							<option value="Shanghai">Shanghai</option>
						
							<option value="Shantou">Shantou</option>
						
							<option value="Sharjah">Sharjah</option>
						
							<option value="Sharm El Sheikh">Sharm El Sheikh</option>
						
							<option value="Shatin">Shatin</option>
						
							<option value="Sheffield">Sheffield</option>
						
							<option value="Shenyang">Shenyang</option>
						
							<option value="Shenzhen">Shenzhen</option>
						
							<option value="Sherbrooke">Sherbrooke</option>
						
							<option value="Shijiazhuang">Shijiazhuang</option>
						
							<option value="Shilong">Shilong</option>
						
							<option value="Sichuan">Sichuan</option>
						
							<option value="Sicily">Sicily</option>
						
							<option value="Siem Reap">Siem Reap</option>
						
							<option value="Siena">Siena</option>
						
							<option value="Sinai">Sinai</option>
						
							<option value="Singapore">Singapore</option>
						
							<option value="Singburi">Singburi</option>
						
							<option value="Siphnos">Siphnos</option>
						
							<option value="Skopelos">Skopelos</option>
						
							<option value="Skopje">Skopje</option>
						
							<option value="Sonderborg">Sonderborg</option>
						
							<option value="Sophia Antipolis">Sophia Antipolis</option>
						
							<option value="Sorrento">Sorrento</option>
						
							<option value="Sosua">Sosua</option>
						
							<option value="Sosúa">Sosúa</option>
						
							<option value="South Caicos">South Caicos</option>
						
							<option value="South Hadley, MA">South Hadley, MA</option>
						
							<option value="Southampton">Southampton</option>
						
							<option value="Spiti">Spiti</option>
						
							<option value="St Petersburg">St Petersburg</option>
						
							<option value="St. Andrews">St. Andrews</option>
						
							<option value="St. Augustine">St. Augustine</option>
						
							<option value="St. Catherines">St. Catherines</option>
						
							<option value="St. Croix">St. Croix</option>
						
							<option value="St. Denis">St. Denis</option>
						
							<option value="St. Etienne">St. Etienne</option>
						
							<option value="St. George's">St. George's</option>
						
							<option value="St. Louis">St. Louis</option>
						
							<option value="St. Lucia">St. Lucia</option>
						
							<option value="St. Malo">St. Malo</option>
						
							<option value="St. Petersburg">St. Petersburg</option>
						
							<option value="Stafford">Stafford</option>
						
							<option value="Staffordshire">Staffordshire</option>
						
							<option value="Stellenbosch">Stellenbosch</option>
						
							<option value="Stirling">Stirling</option>
						
							<option value="Stockholm">Stockholm</option>
						
							<option value="Stolat">Stolat</option>
						
							<option value="Stone Town">Stone Town</option>
						
							<option value="Strasbourg">Strasbourg</option>
						
							<option value="Stratford-upon-Avon">Stratford-upon-Avon</option>
						
							<option value="Strobl">Strobl</option>
						
							<option value="Stuttgart">Stuttgart</option>
						
							<option value="Sucre">Sucre</option>
						
							<option value="Sudbury">Sudbury</option>
						
							<option value="Sunderland">Sunderland</option>
						
							<option value="Sunshine Coast">Sunshine Coast</option>
						
							<option value="Suva">Suva</option>
						
							<option value="Suwon">Suwon</option>
						
							<option value="Suzhou">Suzhou</option>
						
							<option value="Swansea">Swansea</option>
						
							<option value="Swaziland">Swaziland</option>
						
							<option value="Sydney">Sydney</option>
						
							<option value="Syracuse">Syracuse</option>
						
							<option value="Tacloban City">Tacloban City</option>
						
							<option value="Taegu">Taegu</option>
						
							<option value="Tahiti">Tahiti</option>
						
							<option value="Taichung">Taichung</option>
						
							<option value="Taipei">Taipei</option>
						
							<option value="Takoradi">Takoradi</option>
						
							<option value="Tallinn">Tallinn</option>
						
							<option value="Talloires">Talloires</option>
						
							<option value="Tamil Nadu">Tamil Nadu</option>
						
							<option value="Tampere">Tampere</option>
						
							<option value="Tangier">Tangier</option>
						
							<option value="Tangshan">Tangshan</option>
						
							<option value="Taormina">Taormina</option>
						
							<option value="Taoyuan">Taoyuan</option>
						
							<option value="Taradale">Taradale</option>
						
							<option value="Tarragona">Tarragona</option>
						
							<option value="Tartu">Tartu</option>
						
							<option value="Tasmania">Tasmania</option>
						
							<option value="Tauranga">Tauranga</option>
						
							<option value="Taxco">Taxco</option>
						
							<option value="Tbilisi">Tbilisi</option>
						
							<option value="Tel Aviv">Tel Aviv</option>
						
							<option value="Tell es-Sweyhat">Tell es-Sweyhat</option>
						
							<option value="Temuco">Temuco</option>
						
							<option value="Tena">Tena</option>
						
							<option value="Tenerife">Tenerife</option>
						
							<option value="Tetouan">Tetouan</option>
						
							<option value="Thanjavur">Thanjavur</option>
						
							<option value="The Hague">The Hague</option>
						
							<option value="Thessaloniki">Thessaloniki</option>
						
							<option value="Thimphu">Thimphu</option>
						
							<option value="Thiruvananthapuram">Thiruvananthapuram</option>
						
							<option value="Thy">Thy</option>
						
							<option value="Tianjin">Tianjin</option>
						
							<option value="Tiburon Island">Tiburon Island</option>
						
							<option value="Tilburg">Tilburg</option>
						
							<option value="Tjele">Tjele</option>
						
							<option value="Togo">Togo</option>
						
							<option value="Tokyo">Tokyo</option>
						
							<option value="Toledo">Toledo</option>
						
							<option value="Toluca">Toluca</option>
						
							<option value="Tonnerre">Tonnerre</option>
						
							<option value="Toowoomba">Toowoomba</option>
						
							<option value="Tordesillas">Tordesillas</option>
						
							<option value="Toronto">Toronto</option>
						
							<option value="Tortuguero">Tortuguero</option>
						
							<option value="Totnes">Totnes</option>
						
							<option value="Toulouse">Toulouse</option>
						
							<option value="Tours">Tours</option>
						
							<option value="Townsville">Townsville</option>
						
							<option value="Toyama">Toyama</option>
						
							<option value="Trang">Trang</option>
						
							<option value="Trentino">Trentino</option>
						
							<option value="Trento">Trento</option>
						
							<option value="Trier">Trier</option>
						
							<option value="Trieste">Trieste</option>
						
							<option value="Trivandrum">Trivandrum</option>
						
							<option value="Troia">Troia</option>
						
							<option value="Trollhättan">Trollhättan</option>
						
							<option value="Troy">Troy</option>
						
							<option value="Troyes">Troyes</option>
						
							<option value="Tsinghua">Tsinghua</option>
						
							<option value="Tsukuba">Tsukuba</option>
						
							<option value="Tubingen">Tubingen</option>
						
							<option value="Tulum">Tulum</option>
						
							<option value="Tunis">Tunis</option>
						
							<option value="Turin">Turin</option>
						
							<option value="Turku">Turku</option>
						
							<option value="Turrialba">Turrialba</option>
						
							<option value="Tuscania">Tuscania</option>
						
							<option value="Tuscany">Tuscany</option>
						
							<option value="Tygerberg">Tygerberg</option>
						
							<option value="Ubud">Ubud</option>
						
							<option value="Ulaanbaatar">Ulaanbaatar</option>
						
							<option value="Ulm">Ulm</option>
						
							<option value="Uluru">Uluru</option>
						
							<option value="Uppsala">Uppsala</option>
						
							<option value="Urbino">Urbino</option>
						
							<option value="Urubamba">Urubamba</option>
						
							<option value="Ushuaia">Ushuaia</option>
						
							<option value="Utrecht">Utrecht</option>
						
							<option value="Vaasa">Vaasa</option>
						
							<option value="Vaduz">Vaduz</option>
						
							<option value="Valdivia">Valdivia</option>
						
							<option value="Valencia">Valencia</option>
						
							<option value="Valladolid">Valladolid</option>
						
							<option value="Vallendar">Vallendar</option>
						
							<option value="Valparaiso">Valparaiso</option>
						
							<option value="Vancouver">Vancouver</option>
						
							<option value="Varadero">Varadero</option>
						
							<option value="Varanasi">Varanasi</option>
						
							<option value="Various">Various</option>
						
							<option value="Various Cities">Various Cities</option>
						
							<option value="Various Locations">Various Locations</option>
						
							<option value="Varna">Varna</option>
						
							<option value="Vasteras">Vasteras</option>
						
							<option value="Vaxjo">Vaxjo</option>
						
							<option value="Veliko Tarnovo">Veliko Tarnovo</option>
						
							<option value="Venice">Venice</option>
						
							<option value="Vernon">Vernon</option>
						
							<option value="Verona">Verona</option>
						
							<option value="Versailles">Versailles</option>
						
							<option value="Vestfold">Vestfold</option>
						
							<option value="Vezelay">Vezelay</option>
						
							<option value="Vic">Vic</option>
						
							<option value="Vicenza">Vicenza</option>
						
							<option value="Vichy">Vichy</option>
						
							<option value="Viçosa">Viçosa</option>
						
							<option value="Victoria">Victoria</option>
						
							<option value="Vienna">Vienna</option>
						
							<option value="Vigo">Vigo</option>
						
							<option value="Ville Franche">Ville Franche</option>
						
							<option value="Vilnius">Vilnius</option>
						
							<option value="Vina del Mar">Vina del Mar</option>
						
							<option value="Viterbo">Viterbo</option>
						
							<option value="Vitora">Vitora</option>
						
							<option value="Vitoria">Vitoria</option>
						
							<option value="Vladimir">Vladimir</option>
						
							<option value="Vladivostok">Vladivostok</option>
						
							<option value="Volos">Volos</option>
						
							<option value="Vung Tau">Vung Tau</option>
						
							<option value="Wageningen">Wageningen</option>
						
							<option value="Wagga Wagga">Wagga Wagga</option>
						
							<option value="Waikato">Waikato</option>
						
							<option value="Walvis Bay">Walvis Bay</option>
						
							<option value="Warrnambool">Warrnambool</option>
						
							<option value="Warsaw">Warsaw</option>
						
							<option value="Washington DC">Washington DC</option>
						
							<option value="Waterford">Waterford</option>
						
							<option value="Waterford, CT">Waterford, CT</option>
						
							<option value="Weimar">Weimar</option>
						
							<option value="Wellesley, MA">Wellesley, MA</option>
						
							<option value="Wellington">Wellington</option>
						
							<option value="Wenzhou">Wenzhou</option>
						
							<option value="Westport">Westport</option>
						
							<option value="Whitby">Whitby</option>
						
							<option value="Whitehorse">Whitehorse</option>
						
							<option value="Wiener Neustadt">Wiener Neustadt</option>
						
							<option value="Windhoek">Windhoek</option>
						
							<option value="Wolin">Wolin</option>
						
							<option value="Wollongong">Wollongong</option>
						
							<option value="Wolverhampton">Wolverhampton</option>
						
							<option value="Woods Hole MA">Woods Hole MA</option>
						
							<option value="Worthing">Worthing</option>
						
							<option value="Wroclaw">Wroclaw</option>
						
							<option value="Wroxton">Wroxton</option>
						
							<option value="Wuhan">Wuhan</option>
						
							<option value="Xalapa">Xalapa</option>
						
							<option value="Xi'an">Xi'an</option>
						
							<option value="Xiamen">Xiamen</option>
						
							<option value="Xingang">Xingang</option>
						
							<option value="Yallahs">Yallahs</option>
						
							<option value="Yamato-machi">Yamato-machi</option>
						
							<option value="Yangon">Yangon</option>
						
							<option value="Yangshuo">Yangshuo</option>
						
							<option value="Yantai">Yantai</option>
						
							<option value="Yaounde">Yaounde</option>
						
							<option value="Yaroslavl">Yaroslavl</option>
						
							<option value="Yiwu">Yiwu</option>
						
							<option value="Yokohama">Yokohama</option>
						
							<option value="York">York</option>
						
							<option value="Zagreb">Zagreb</option>
						
							<option value="Zamorano">Zamorano</option>
						
							<option value="Zanskar">Zanskar</option>
						
							<option value="Zanzibar">Zanzibar</option>
						
							<option value="Zentsuji">Zentsuji</option>
						
							<option value="Zhangjiang">Zhangjiang</option>
						
							<option value="Zhangzhou">Zhangzhou</option>
						
							<option value="Zhongdian">Zhongdian</option>
						
							<option value="Zurich">Zurich</option>
						
					</select>
			</div>
				</div><br /><br /></div></div>
          <div class="box_right">
           <input type="image" name="submit" src="../images/search_button_blue.gif" alt="Search" title="Search" value="submit"/>
           <div class="box_advanced"><a href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.AdvancedSearch" class="small_dark_blue_bold">Advanced Search</a></div>
           </div>
		</form>
</div>
<?php
}
function printCountryHandbooks()
{
?>
<div id="student_handbooks_form">
    <form name="pch_searchForm" method="get" action="" onsubmit="return validateCountry();" class="pch_form">
        <div class="pch_select_container">
            <div class="pch_country">
                <div class="pch_label">
                    <label for="pch_selProgCntry">Select A Country</label>
                </div>
                <div class="pch_list">
                    <select name="country" id="pch_selProgCntry">
                        <?php getCountryOption(); ?>
                    </select>
                </div>
            </div>
            <div class="pch_search_button">
                <input type="image" name="btnSubmit" src="images/search_button_gold.gif" alt="Go" title="Go"/>
            </div>
        </div>
    </form>
</div>
<?php
}

function getCountryOption() {
	// NOTE: the path of the include file!!!	
	include "common_array.php";
	$count = 0;

	echo	"<option value='Choose' selected='selected'>Choose One</option>";
    echo	"<option value='General'>Worldwide</option>";
	
	foreach ($country_array as $country_name) {
		echo "<option value='$country_name'>$country_name</option>";		
		$count++;
	}
}

function printCountryOption() {
?>
                        <option value="Choose" selected="selected">Choose One</option>
                        <option value="General">Worldwide</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <!--<option value="Bahamas">Bahamas</option>
                        <option value="Bangladesh">Bangladesh</option>-->
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <!--<option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>-->
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <!--<option value="Bulgaria">Bulgaria</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>-->
                        <option value="Canada">Canada</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <!--<option value="Colombia">Colombia</option>-->
                        <option value="Costa Rica">Costa Rica</option>
                        <!--<option value="Croatia">Croatia</option>
                        <option value="Croatia, Republic of">Croatia, Republic of</option>-->
                        <option value="Cuba">Cuba</option>
                        <!--<option value="Cyprus">Cyprus</option>-->
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <!--<option value="El Salvador">El Salvador</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>-->
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <!--<option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>-->
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <!--<option value="Guadeloupe">Guadeloupe</option>-->
                        <option value="Guatemala">Guatemala</option>
                        <!--<option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>-->
                        <option value="Hungary">Hungary</option>
                        <!--<option value="Iceland">Iceland</option>-->
                        <option value="India">India</option>
                        <!-- <option value="Indonesia">Indonesia</option>-->
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <!--<option value="Jamaica">Jamaica</option>-->
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kenya">Kenya</option>
                        <!--<option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Martinique">Martinique</option>-->
                        <option value="Mexico">Mexico</option>
                        <!--<option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>-->
                        <option value="Morocco">Morocco</option>
                        <!--<option value="Multiple">Multiple</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nepal">Nepal</option>-->
                        <option value="Netherlands">Netherlands</option>
                        <!--<option value="Netherlands Antilles">Netherlands Antilles</option>-->
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <!--<option value="Niger">Niger</option>-->
                        <option value="Norway">Norway</option>
                        <!--<option value="Oman">Oman</option>
                        <option value="Panama">Panama</option>
                        <option value="Paraguay">Paraguay</option>-->
                        <option value="Peru">Peru</option>
                        <!--<option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>-->
                        <option value="Portugal">Portugal</option>
                        <!--<option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>-->
                        <option value="Russia">Russia</option>
                        <!--<option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Singapore">Singapore</option>-->
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Spain">Spain</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <!--<option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tanzania">Tanzania</option>-->
                        <option value="Thailand">Thailand</option>
                        <!--<option value="Tunisia">Tunisia</option>-->
                        <option value="Turkey">Turkey</option>
                        <!--<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>-->
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <!--<option value="Uruguay">Uruguay</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>-->	
<?php	
}

function printStudentHandbookMenu()
{
?>
<ul class="student_handbook_container">
    <li class="menu">
        <ul>
            <li class="button"><a href="#" class="dropdown_button">Understanding Study Abroad
                <span>
                </span>
                </a></li>
            <li class="dropdown">
                <ul>
                    <li><a href="/handbook/introduction.php?country=General">Introduction</a></li>
                    <li><a href="/handbook/why-study-abroad.php?country=general">Why Study Abroad?</a></li>
                    <li><a href="/handbook/why-learn-a-language.php?country=general">Why Learn a Language?</a></li>
                    <li class="last"><a href="/handbook/advice-for-parents.php?country=general">Advice for Parents</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="menu">
        <ul>
            <li class="button"><a href="#" class="dropdown_button">Choosing a Program
                <span>
                </span>
                </a></li>
            <li class="dropdown">
                <ul>
                    <li><a href="/handbook/finding-quality-program.php?country=general">Finding a Quality Program</a></li>
                    <li><a href="/handbook/select-the-right-program.php?country=general">Selecting the Right Program for You</a></li>
                    <li><a href="/handbook/who-runs-your-program.php?country=general">Who Runs Your Program</a></li>
                    <li><a href="/handbook/">Financing Study Abroad</a></li>
                    <li class="last"><a href="/handbook/application-process.php?country=general">Application Process</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="menu">
        <ul>
            <li class="button"><a href="#" class="dropdown_button">Practical Information
                <span>
                </span>
                </a></li>
            <li class="dropdown">
                <ul>
                    <li><a href="/handbook/pre-departure-planning.php?country=general">Pre-Departure Planning</a></li>
                    <li><a href="/handbook/how-foreign-laws-apply-to-you.php?country=general">How Foreign Law Apply to You</a></li>
                    <li><a href="/handbook/communication-while-abroad.php?country=general">Communication While Abroad</a></li>
                    <li><a href="/handbook/housing.php?country=general">Housing</a></li>
                    <li><a href="/handbook/packing.php?country=general">Packing</a></li>
                    <li class="last"><a href="/handbook/expectations.php?country=general">Expectations</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="menu">
        <ul>
            <li class="button"><a href="#" class="dropdown_button">Health and Safety
                <span>
                </span>
                </a></li>
            <li class="dropdown">
                <ul>
                    <li><a href="/handbook/medical-care-and-insurance.php?country=general">Medical Care and Insurance</a></li>
                    <li><a href="/handbook/basic-health-and-safety.php?country=general">Basic Health and Safety</a></li>
                    <li><a href="/handbook/strategies-to-reduce-risk.php?country=general">Risk Factors and Strategies to Reduce Risk</a></li>
                    <li><a href="/handbook/special-issues.php?country=general">Special Issues</a></li>
                    <li><a href="/handbook/crisis-management.php?country=general">Crisis Management</a></li>
                    <li class="last"><a href="/handbook/adjustments-and-culture-shock.php?country=general">Adjustments and Culture Shock</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="menu">
        <ul>
            <li class="button"><a href="#" class="dropdown_button">Coming Home
                <span>
                </span>
                </a></li>
            <li class="dropdown">
                <ul>
                    <li><a href="/handbook/airport-procedures.php?country=general">Airport Safety, Duties, and Customs</a></li>
                    <li><a href="/handbook/reverse-culture-shock.php?country=general">Reverse Culture Shock</a></li>
                    <li class="last"><a href="/handbook/continuing-benefits-of-study-abroad.php?country=general">Continuing Benefits of Study Abroad</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="menu">
        <ul>
            <li class="button"><a href="#" class="dropdown_button">Tools for Planning
                <span>
                </span>
                </a></li>
            <li class="dropdown">
                <div class="submenu_title">Resources Tools</div>
                <ul>
                    <li><a href="/handbook/questions.php?country=general">Questions</a></li>
                    <li><a href="/handbook/checklist.php?country=general">Checklist</a></li>
                    <li><a href="/handbook/resources.php?country=general">Resources</a></li>
                    <li><a href="/handbook/top-10-health-and-safety-issues.php?country=General">Top 10 Health and Safety Issues</a></li>
                </ul>
                <div class="submenu_title">Communication Tools</div>
                <ul>
                    <li><a href="/handbook/communication-info-sheets.php?country=general">Communication Info Sheet</a></li>
                    <li><a href="/handbook/words-to-know.php?country=general">Words to Know</a></li>
                    <li><a href="/handbook/phrases-to-know.php?country=general">Phrases to Know</a></li>
                    <li><a href="/handbook/help-images.php?country=general">Help Images</a></li>
                </ul>
                <div class="submenu_title">Emergency Tools</div>
                <ul>
                    <li><a href="/handbook/emergency-planning.php?country=general">Emergency Planning</a></li>
                    <li><a href="/handbook/emergency-action-plan-steps.php?country=general">Emergency Action Plan Steps</a></li>
                    <li><a href="/handbook/personal-emergency-action-plan.php?country=general">Personal Emergency Action Plan</a></li>
                    <li class="last"><a href="/handbook/emergency-card.php?country=general">Emergency Card</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<div class="clear"></div>
<?php
}

/* get_main_sponsor2 uses shuffle */
function get_main_sponsor2($country_name, $sponsor_key)
{
	// NOTE: the path of the include file!!!	
	include "lib/sponsors_array.php";
	
	$html = "";
	$count = 0;

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
				$main_sponsors[$count] =  "<a target='_blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$size] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
				$count++;
				
			}
		}
	}
	//print_r($main_sponsors);
	//return $main_sponsors;
	shuffle($main_sponsors);
	return $main_sponsors[0];
	
}

function printCSUschools()
{
	echo '<img width="290px" src="images/csu_map.gif" alt="Map of California State Universities"><br />
		<div style="padding:20px">
                <div class="col-sm-12 col-md-12 col-lg-12">
				<section class="col-sm-4 col-md-3 col-lg-3 list">
					<h2>Office of the Chancellor</h2>
						<ul>
							<li><a href="https://www2.calstate.edu/" target="_blank" aria-label="Cal State">The California State University</a></li>
						</ul>
					</section>
					<section class="col-sm-4 col-md-3 col-lg-3 list">
                        <h2>Study Abroad Programs</h2>
                        <ul>
                            <li><a href="http://csuip.calstate.edu/index.cfm?FuseAction=Abroad.Home" target="_blank" aria-label="CSU IP">
							CSU International Programs</a></li>
                        </ul>
                    </section>
                    <section class="col-sm-4 col-md-3 col-lg-3 list">
                        <h2>Northern Campuses</h2>
                        <ul>
                            <li><a href="http://www.csuchico.edu/studyabroad/index.shtml" target="_blank" aria-label="Chico Campus">
							Chico</a></li>
                            <li><a href="http://www.csueastbay.edu/cie/studyabroad/index.html" target="_blank" aria-label="East Bay Campus">
							East Bay</a></li>
                            <li><a href="http://humboldt-international.terradotta.com/" target="_blank" aria-label="Humboldt Campus">
							Humboldt</a></li>
                            <li><a href="https://www.csum.edu/web/academics/exchange/international-programs" target="_blank" aria-label="Maritime Academy Campus">
							Maritime Academy</a></li>
                            <li><a href="http://www.csus.edu/ipge/study%20abroad/index.html" target="_blank" aria-label="Sacramento Campus">
							Sacramento</a></li>
                            <li><a href="http://oip.sfsu.edu/sfstateabroad" target="_blank" aria-label="San Francisco Campus">
							San Francisco</a></li>
                            <li><a href="http://www.sjsu.edu/studyabroad/" target="_blank" aria-label="San Jos&eacute; Campus">
							San José</a></li>

                            <li><a href="http://web.sonoma.edu/cie/study-abroad/" target="_blank" aria-label="Sonoma Campus">
							Sonoma</a></li>
                        </ul>
                    </section>

                    <section class="col-sm-4 col-md-3 col-lg-3 list">
                        <h2>Central Campuses</h2>
                        <ul>
                            <li><a href="http://www.csub.edu/isp/study_abroad/index.html" target="_blank" aria-label="Bakersfield Campus">
							Bakersfield</a></li>
                            <li><a href="http://www.fresnostate.edu/cge/international/abroad/" target="_blank" aria-label="Fresno Campus">
							Fresno</a></li>
                            <li><a href="https://csumb.edu/educationabroad" target="_blank" aria-label="Monterey Bay Campus">
							Monterey Bay</a></li>
                            <li><a href="http://abroad.calpoly.edu/index.cfm?FuseAction=Abroad.Home" target="_blank" aria-label="San Luis Obispo Campus">
							San Luis Obispo</a></li>
                            <li><a href="https://www.csustan.edu/office-international-education/study-abroad" target="_blank" aria-label="Stanislaus Campus">
							Stanislaus</a></li>
                        </ul>
                    </section>

                    <section class="col-sm-4 col-md-6 col-lg-6 list-single">
                        <h2>Southern Campuses</h2>
                        <ul class="no-space">
                            <li><a href="https://www.csuci.edu/international/" target="_blank" aria-label="Channel Islands Campus">
							Channel Islands</a></li>
                            <li><a href="http://www.csudh.edu/studyabroad" target="_blank" aria-label="Dominguez Hills Campus">
							Dominguez Hills</a></li>
                            <li><a href="https://international.fullerton.edu/study-abroad/" target="_blank" aria-label="Fullerton Campus">
							Fullerton</a></li>
                            <li><a href="http://global.ccpe.csulb.edu/" target="_blank" aria-label="Long Beach Campus">
							Long Beach</a></li>
                            <li><a href="http://www.calstatela.edu/international/study-abroad" target="_blank" aria-label="Los Angeles Campus">
							Los Angeles</a></li>
                            <li><a href="http://www.csun.edu/international/study-abroad" target="_blank" aria-label="Northridge Campus">
							Northridge</a></li>
                            <li><a href="http://www.cpp.edu/~international/study-abroad/index.shtml" target="_blank" aria-label="Pomona Campus">
							Pomona</a></li>
                            <li><a href="http://international.csusb.edu/StudyAbroad.aspx" target="_blank" aria-label="San Bernardino Campus">
							San Bernardino</a></li>
                            <li><a href="http://go.sdsu.edu/student_affairs/isc/studyabroad.aspx" target="_blank" aria-label="San Diego Campus">
							San Diego</a></li>
                            <li><a href="http://www.csusm.edu/global/studyabroad/" target="_blank" aria-label="San Marcos Campus">
							San Marcos</a></li>
                        </ul>
                    </section>
                </div>
            </div>'
;
	
}

function get_sub_sponsor2($country_name, $sponsor_key) {
	// NOTE: the path of the include file!!!
	include("lib/sponsors_array.php");
	$html = "";
	$count = 0;

	global $sub_sponsors;
	$sub_sponsors = array();
	
	//$html = "<ul>";
	foreach ($COUNTRY_SPONSORS as $INFO) {
		if ($INFO['country'] == $country_name) {
			foreach ($INFO['sub_sponsors'.$sponsor_key] as $main_sponsor_name) {
				
				$sub_sponsors[$count] =  "<li><a target='_blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'>".$SPONSORS[$main_sponsor_name]['title_desc']."</a></li>";
				
				$count++;	
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

function get_banner_sponsor2($country_name, $sponsors_key)
{
	// NOTE: the path of the include file!!!	
    include "lib/sponsors_array.php";
	$count = 0;
	
	global $banner;
	$banner = array();
	
    foreach ($SPONSORS_BANNER as $INFO) {
        if ($INFO['country'] == $country_name) {
            foreach ($INFO['main_sponsors'.$sponsors_key] as $main_sponsor_name) {
				
				$banner[$count] =  "<a target='_blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name]['banner_1'] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
				$count++;
            }
        }
    }
	//print_r($banner);
	//return $banner;
	shuffle($banner);
	return $banner[0];
}

function print_banner_sponsor2($country_name, $box_count, $count_MAX) 
{		

	/*echo $country_name."<br>";
	echo $box_count."<br>";
	echo $count_MAX."<br>";*/
	while ($box_count <= $count_MAX){
		$now = get_banner_sponsor2($country_name, $box_count);
		$html = $html . $now;
		$box_count++;
	}
	return $html;
}
function get_lead_sponsor2($country_name, $sponsor_key)
{
	// NOTE: the path of the include file!!!	
	include "lib/sponsors_array.php";
	
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
				
				$lead_sponsors[$count] =  "<a target='_blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$sponsor_type] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
				$count++;
				
			}
		}
	}
	//print_r($lead_sponsors);
	//return $main_sponsors;
	shuffle($lead_sponsors);
	return $lead_sponsors[0];
	
}
//this function can wrap a sentence appropriately based on the max length given
function wraper($sentence, $max_length) {
    $string = "";
    $count = 0;

    for ($i = 0; $i < strlen($sentence); $i++) {
        if ($count == $max_length) {
            for ($j = $i; $j >= 0; $j--) {
                if (strcmp($sentence[$j], ' ') == 0) {
                    $string = substr($sentence, 0, $j)."...";
                    break;
                }
            }
            break;
            //$count = 0;
        }
        $count++;
    }
    if (strcmp($string, "") == 0) $string = $sentence;
    return $string;
} //end of function

//escape function for a string in mysql statement
function quote_smart($value) {
    // Stripslashes
    if (get_magic_quotes_gpc()) {
        $value = stripslashes($value);
    }

    // Quote if not a number or a numeric string
    if (!is_numeric($value)) {
        $value = "'".mysql_real_escape_string($value)."'";
    }
    return $value;
} //end quote_smart function
function renderColumn($width, $height = 0) {
    echo("<div class=\"floatleft\" style=\"width:".$width."px;");
    if ($height > 0) echo("height: ".$height."px \"");
    echo("></div>");
}
//end of renderColumnfunction
//This function will take any html tags
function removeEvilTags($source) {
    $allowedTags = '';
    $source = strip_tags(stripslashes($source), $allowedTags);
    return trim(preg_replace('/<(.*?)>/ie', "'<'.removeEvilStyles('\\1').'>'", $source));
}

//given a string time, it will format it as we desired
function formatDate($string) {
    $ret = date("M j, Y", mktime((substr($string, 11, 2) - 1), substr($string, 14, 2), substr($string, 17, 2), substr($string, 5, 2), substr($string, 8, 2), substr($string, 0, 4)));
    return $ret;
}

function redirect_to_general() {
	redirect(403, getCurPageURL() .'?country=general');
}

function getCurPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["SCRIPT_NAME"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
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
?>
<?php

function formData(){

$html = file_get_contents('http://directory.studentsabroad.com/index.cfm?Program_Type_ID=1&Program_Name=csu&pt=%7F&pi=%7F&pc=%7F&pr=%7F&FuseAction=Programs.SearchResults&SimpleSearch=1');
	
	 $posStart = strpos($html, "<table");

		 $posEnd = strpos($html, "</table") +8;

		 $posLength = $posEnd - $posStart;

		 $html = substr($html,$posStart,$posLength);

		 $posStart = strpos($html, ">") +1;

		 $posLength = strlen($html) -8;

		 $html = substr($html,$posStart,$posLength);

		 $posStart = strpos($html, "</tr>") +5;

		 $posLength = strlen($html) -5;

		 $html = substr($html,$posStart,$posLength);

		 $rtable = explode("<tr>",$html);

		 return $rtable; 
} ?>