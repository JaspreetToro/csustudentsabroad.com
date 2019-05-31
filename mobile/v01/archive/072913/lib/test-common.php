<?php
define("WEBNAME", "StudentsAbroad.com");
define("URLNAME", "http://Studentsabroad.com");

function printHeader($tab, $title, $ext = "", $body = "")
{
	$id1 = "";
	$id2 = "";
	$id3 = "";
	$id4 = "";
	$id5 = "";
	$id7 = "";
	$id6 = "";
	
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo WEBNAME." - ".$title?></title>
<link rel="icon" href="/favicon.png" type="image/png" />
<link type="text/css" href="styles/test-styles.css" rel="stylesheet" />
<!--<script type="text/javascript" src="javascript/analytics.js"></script>-->
<script type="text/javascript" src="javascript/general.js"></script>
<!--[if IE]>
    <style type="text/css">
        p.iepara{ /*Conditional CSS- For IE (inc IE7), create 1em spacing between menu and paragraph that follows*/
        padding-top: 1em;
    }
    </style>
    <![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- orbit jquery plugin -->
<link rel="stylesheet" href="styles/test-orbit-1.2.3.css"/>
<script type="text/javascript" src="javascript/jquery.orbit-1.2.3.min.js"></script>
<link rel="stylesheet" href="styles/easing.accordion.css"/>
<script type="text/javascript" src="javascript/jquery.accordion.js"></script>
<!-- Navigation bar package -->
<link rel="stylesheet" type="text/css" href="styles/droplinebar.css" />
<script src="javascript/droplinemenu.js" type="text/javascript"></script>
<?php echo $ext?>
<script type="text/javascript" language="javascript">
    if (document.images) {
        img1 = new Image();
        img2 = new Image();
        img3 = new Image();
        img4 = new Image();
        img1.src = "images/home_button_1_selected.jpg";
        img2.src = "images/home_button_2_selected.jpg"
        img1.src = "images/home_button_3_selected.jpg";
        img2.src = "images/home_button_4_selected.jpg"
    }
    </script>
<!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="styles/iestyles.css" />
    <![endif]-->
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="styles/ie7styles.css" />
    <![endif]-->
</head>
<body <?php echo $body?>>
<div id="background_top">
    <div id="maincontainer_top">
        <div id="header">
            <div id="left_header">
                <script type="text/javascript" language="javascript">renderDiv(6);</script>
                <div id="left_header_logo"><a href="<?php echo URLNAME?>"><img alt="student abroad logo" src="images/studentsabroad-logo.jpg" /></a></div>
                <script type="text/javascript" language="javascript">renderDiv(10);</script>
                <div id="left_header_menu" >
                    <div id="glowingtabs">
                        <ul>
                            <li <?php if (!empty($id1)) echo "id=".$id1; ?>>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="index.php" title="Home: Welcome to StudenstAbroad.com" class="home_link">Home</a></div>
                                        <div class="menu_subtitle"><a href="index.php" title="Home: Welcome to StudenstAbroad.com" class="home_link">The Main Page</a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SimpleSearch" title="Program Search: Explore Your Options" class="why_us_subnav_link">Program Search</a></div>
                                        <div class="menu_subtitle"><a href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SimpleSearch" title="Program Search: Explore Your Options" class="why_us_subnav_link">Explore Your Options</a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="handbook/introduction.php?country=General" title="Student Handbooks: How to Get There and Back" class="apply_subnav_link">Student Handbooks</a></div>
                                        <div class="menu_subtitle"><a href="handbook/introduction.php?country=General" title="Student Handbooks: How to Get There and Back" class="apply_subnav_link">How to Get There and Back</a></div>
                                    </div>
                                </div>
                            </li>
                            <li <?php if (!empty($id4)) echo "id=".$id4; ?>>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="featured-programs.php?country=General" title="Featured Programs: Options Around the World" class="finance_subnav_link">Featured Programs</a></div>
                                        <div class="menu_subtitle"><a href="featured-programs.php?country=General" title="Featured Programs: Options Around the World" class="finance_subnav_link">Options Around the World</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of left_header_menu -->
            </div>
            <!-- end of left_header -->
            <div id="middle_header"></div>
            <div id="right_header">
                <script type="text/javascript" language="javascript">renderDiv(20);</script>
                <div id="right_header_center_logo"><a href="http://globaled.us"><img src="images/cge-logo.jpg" alt="CGE logo" border="0" /></a></div>
                <div id="right_header_center_networking_logo"><a href="http://www.facebook.com/pages/US-Study-Abroad-Students/173578856077334"><img src="images/facebook.png" alt="Facebook logo" border="0" /></a><a href="https://twitter.com/#!/UStudyabroad"><img src="images/twitter.png" alt="Twitter logo" border="0" /></a></div>
                <script type="text/javascript" language="javascript">renderDiv(10);</script>
                <div id="right_header_bottom">
                    <div id="community_tab">
                        <div id="glowingtabs_orange">
                            <ul>
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
                        </div>
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
                <div id="left_footer_content_left" class="small_white_bold"> <a href="contact_us.php" class="small_white_bold">Contact Us</a> | <a href="about_us.php" class="small_white_bold">About</a> | <a href="http://globaled.us/giving.asp" class="small_white_bold">Support CGE</a> | <a href="http://globaled.us" class="small_white_bold">Center for Global Education</a> </div>
                <div id="left_footer_content_right" class="small_white_bold"> All rights reserved <?php echo date("Y")?> | CGE </div>
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
<script type="text/javascript">
<!--
// <![CDATA[
			
$(document).ready(function () {
    droplinemenu.buildmenu("nav-bar");
});

$(window).load(function () {
						
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
        <div id="subpage_left_footer_content_left" class="small_white_bold"><a href="contact_us.php" class="small_white_bold">Contact Us</a>|<a href="about_us.php" class="small_white_bold">About</a>|<a href="http://globaled.us/giving.asp" class="small_white_bold">Support CGE</a>|<a href="http://globaled.us" class="small_white_bold">Center for Global Education</a></div>
        <div id="left_footer_content_right" class="small_white_bold">All rights reserved<?php echo date("Y")?>| CGE</div>
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
?>
<div id="program_search_form">
    <form name="searchForm" method="get" action="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SimpleSearch" class="ps_form">
        <div class="box_left_form">
            <input id="rdoTypeID_0" name="Program_Type_ID" value="O" type="hidden"/>
            <div class="ps_country">
                <div class="ps_label">
                    <label for="selProgCntry">Select A Country</label>
                </div>
                <div class="ps_list">
                    <select name="pc" id="selProgCntry">
                        <option value="" selected="selected">Any/All Countries</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Atlantic Ocean">Atlantic Ocean</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Croatia, Republic of">Croatia, Republic of</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Korea, South">Korea, South</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Multiple">Multiple</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Palestinian Territories">Palestinian Territories</option>
                        <option value="Panama">Panama</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Russia">Russia</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Spain">Spain</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Tibet">Tibet</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Various">Various</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                    </select>
                </div>
            </div>
            <div class="ps_term">
                <div class="ps_label">
                    <label for="selProgTerm">Select A Term</label>
                </div>
                <div class="ps_list">
                    <select name="pt" id="selProgTerm">
                        <option value="" selected="selected">Any/All Terms</option>
                        <option value="Summer IV">Summer IV</option>
                        <option value="Summer I">Summer I</option>
                        <option value="Summer III">Summer III</option>
                        <option value="Winter">Winter</option>
                        <option value="Summer">Summer</option>
                        <option value="Semester">Semester</option>
                        <option value="Trimester">Trimester</option>
                        <option value="Spring">Spring</option>
                        <option value="Jan Term">Jan Term</option>
                        <option value="Academic Year">Academic Year</option>
                        <option value="Summer II">Summer II</option>
                        <option value="Fall">Fall</option>
                        <option value="May Term">May Term</option>
                        <option value="Calendar Year">Calendar Year</option>
                    </select>
                </div>
            </div>
            <div class="ps_region">
                <div class="ps_label">
                    <label for="selProgRegion">Select A Region</label>
                </div>
                <div class="ps_list">
                    <select name="pr" id="selProgRegion">
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
            </div>
            <div class="ps_area">
                <div class="ps_label">
                    <label for="selProg49">Select An Area of Study</label>
                </div>
                <div class="ps_list">
                    <select id="selProg49" name="p_10003">
                        <option value="" selected="selected">Any/All Areas of Study</option>
                        <option value="Aboriginal Studies">Aboriginal Studies</option>
                        <option value="Accessories Design">Accessories Design</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Acting/Performance Art">Acting/Performance Art</option>
                        <option value="Advertising">Advertising</option>
                        <option value="African Studies">African Studies</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="American Studies">American Studies</option>
                        <option value="Anthropology">Anthropology</option>
                        <option value="Arabic">Arabic</option>
                        <option value="Arabic Language &amp; Literature">Arabic Language &amp; Literature</option>
                        <option value="Archaeology">Archaeology</option>
                        <option value="Architectural History">Architectural History</option>
                        <option value="Architecture">Architecture</option>
                        <option value="Art">Art</option>
                        <option value="Art History">Art History</option>
                        <option value="Arts">Arts</option>
                        <option value="Asian Studies">Asian Studies</option>
                        <option value="Astronomy">Astronomy</option>
                        <option value="Biochemistry">Biochemistry</option>
                        <option value="Biology">Biology</option>
                        <option value="Botany">Botany</option>
                        <option value="Business">Business</option>
                        <option value="Business Design">Business Design</option>
                        <option value="Business Information Systems">Business Information Systems</option>
                        <option value="Catalan Language &amp; Literature">Catalan Language &amp; Literature</option>
                        <option value="Celtic/Irish Studies">Celtic/Irish Studies</option>
                        <option value="Central Asian Studies">Central Asian Studies</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Child Development">Child Development</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Classical Studies">Classical Studies</option>
                        <option value="Communication">Communication</option>
                        <option value="Communication Design">Communication Design</option>
                        <option value="Communications">Communications</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Creative Writing">Creative Writing</option>
                        <option value="Criminology">Criminology</option>
                        <option value="Culinary Arts">Culinary Arts</option>
                        <option value="Culture">Culture</option>
                        <option value="Culture,">Culture,</option>
                        <option value="Czech Language &amp; Literature">Czech Language &amp; Literature</option>
                        <option value="Dance">Dance</option>
                        <option value="Developmental Sciences">Developmental Sciences</option>
                        <option value="Dietetics &amp; Nutrition">Dietetics &amp; Nutrition</option>
                        <option value="Earth Science">Earth Science</option>
                        <option value="Eastern European Studies">Eastern European Studies</option>
                        <option value="Ecology">Ecology</option>
                        <option value="Economics">Economics</option>
                        <option value="Education">Education</option>
                        <option value="Educational Administration">Educational Administration</option>
                        <option value="Engineering">Engineering</option>
                        <option value="English">English</option>
                        <option value="Enology">Enology</option>
                        <option value="Entrepreneurship">Entrepreneurship</option>
                        <option value="Environmental Studies">Environmental Studies</option>
                        <option value="European Studies">European Studies</option>
                        <option value="Fashion Design">Fashion Design</option>
                        <option value="Fashion Merchandising">Fashion Merchandising</option>
                        <option value="Film">Film</option>
                        <option value="Finance">Finance</option>
                        <option value="Fine Art">Fine Art</option>
                        <option value="Food Communications">Food Communications</option>
                        <option value="Food Technology and Management">Food Technology and Management</option>
                        <option value="Foresty">Foresty</option>
                        <option value="French">French</option>
                        <option value="Gastronomy">Gastronomy</option>
                        <option value="Gender Studies">Gender Studies</option>
                        <option value="Geography">Geography</option>
                        <option value="Geology">Geology</option>
                        <option value="German">German</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Greek">Greek</option>
                        <option value="Hausa">Hausa</option>
                        <option value="Health &amp; Human Services">Health &amp; Human Services</option>
                        <option value="Hebrew">Hebrew</option>
                        <option value="History">History</option>
                        <option value="Hospitality Management">Hospitality Management</option>
                        <option value="Human Resources Management">Human Resources Management</option>
                        <option value="Humanities">Humanities</option>
                        <option value="Hungarian Language &amp; Literature">Hungarian Language &amp; Literature</option>
                        <option value="Iberian Studies">Iberian Studies</option>
                        <option value="Independent Study">Independent Study</option>
                        <option value="Interdisciplinary Design">Interdisciplinary Design</option>
                        <option value="Interior Architecture">Interior Architecture</option>
                        <option value="Interior Design">Interior Design</option>
                        <option value="International Business">International Business</option>
                        <option value="International Relations">International Relations</option>
                        <option value="International Studies">International Studies</option>
                        <option value="Internships">Internships</option>
                        <option value="Italian">Italian</option>
                        <option value="Italian Language &amp; Literature">Italian Language &amp; Literature</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Jewish Studies">Jewish Studies</option>
                        <option value="Journalism">Journalism</option>
                        <option value="Korean">Korean</option>
                        <option value="Latin">Latin</option>
                        <option value="Latin American Studies">Latin American Studies</option>
                        <option value="Law">Law</option>
                        <option value="Liberal Arts">Liberal Arts</option>
                        <option value="Linguistics">Linguistics</option>
                        <option value="Literature">Literature</option>
                        <option value="Management">Management</option>
                        <option value="Mandarin">Mandarin</option>
                        <option value="Maori Studies">Maori Studies</option>
                        <option value="Marine Science">Marine Science</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Mass Communications">Mass Communications</option>
                        <option value="Math/Statistics">Math/Statistics</option>
                        <option value="Mathematics &amp; Statistics">Mathematics &amp; Statistics</option>
                        <option value="Media Studies">Media Studies</option>
                        <option value="Middle Eastern Studies">Middle Eastern Studies</option>
                        <option value="Minority Studies">Minority Studies</option>
                        <option value="Molecular Biology">Molecular Biology</option>
                        <option value="Music">Music</option>
                        <option value="Music Studio Art">Music Studio Art</option>
                        <option value="Nigerian Studies">Nigerian Studies</option>
                        <option value="Other Language &amp; Literature">Other Language &amp; Literature</option>
                        <option value="Peace &amp; Conflict Studies">Peace &amp; Conflict Studies</option>
                        <option value="Peace Studies">Peace Studies</option>
                        <option value="Philosophy">Philosophy</option>
                        <option value="Photography">Photography</option>
                        <option value="Physics">Physics</option>
                        <option value="Polish Language &amp; Literature">Polish Language &amp; Literature</option>
                        <option value="Political Science">Political Science</option>
                        <option value="Portuguese">Portuguese</option>
                        <option value="Pre-Health">Pre-Health</option>
                        <option value="Pre-Law">Pre-Law</option>
                        <option value="Print Making">Print Making</option>
                        <option value="Product Design">Product Design</option>
                        <option value="Psychology">Psychology</option>
                        <option value="Public Health">Public Health</option>
                        <option value="Public Relations">Public Relations</option>
                        <option value="Religion/Theology">Religion/Theology</option>
                        <option value="Russian">Russian</option>
                        <option value="Russian Literature">Russian Literature</option>
                        <option value="Russian Studies">Russian Studies</option>
                        <option value="Sciences">Sciences</option>
                        <option value="Serbo-Croatian">Serbo-Croatian</option>
                        <option value="Service Learning">Service Learning</option>
                        <option value="Shoe Design">Shoe Design</option>
                        <option value="Siberian Studies">Siberian Studies</option>
                        <option value="Social Policy &amp; Administration">Social Policy &amp; Administration</option>
                        <option value="Social Work">Social Work</option>
                        <option value="Sociology">Sociology</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Sports">Sports</option>
                        <option value="Sports Science">Sports Science</option>
                        <option value="Studio Art">Studio Art</option>
                        <option value="Studio Arts">Studio Arts</option>
                        <option value="Tagalog">Tagalog</option>
                        <option value="Textile Design">Textile Design</option>
                        <option value="Thai">Thai</option>
                        <option value="Theater/Drama">Theater/Drama</option>
                        <option value="Tourism">Tourism</option>
                        <option value="Ukrainian">Ukrainian</option>
                        <option value="Ukrainian Language &amp; Culture">Ukrainian Language &amp; Culture</option>
                        <option value="Urban Studies">Urban Studies</option>
                        <option value="Vietnamese Language &amp; Culture">Vietnamese Language &amp; Culture</option>
                        <option value="Women's Studies">Women's Studies</option>
                        <option value="Writing">Writing</option>
                        <option value="Zarma">Zarma</option>
                        <option value="Zoology">Zoology</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="box_right_form">
            <div class="box_button">
                <input name="Program_Name" id="txtProgramName" value="" type="hidden"/>
                <input type="hidden" name="pi" value="" />
                <input type="image" name="btnSubmit" src="images/search_button_blue.gif" alt="Search" align="middle" title="Search"/>
                <input type="hidden" name="FuseAction" value="Programs.SearchResults"/>
                <input type="hidden" name="SimpleSearch" value="1"/>
            </div>
            <div class="box_advanced"><a href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.AdvancedSearch" class="small_dark_blue_bold">Advanced Search</a></div>
        </div>
        <div class="box_bottom_form"><a href="http://terradotta.com/"><img alt="Terradotta Logo" src="images/poweredbyterradotta.png" width="198" height="45" border="0"/></a></div>
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
                        <?php printCountryOption(); ?>
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
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>-->
<option value="India">India</option>
<!-- <option value="Indonesia">Indonesia</option>-->
<option value="Ireland">Ireland</option>
<!--<option value="Israel">Israel</option>-->
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
                    <li><a href="top-10-health-and-safety-issues.php?=general">Top 10 Health and Safety Issues</a></li>
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
				$main_sponsors[$count] =  "<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$size] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
				$count++;
				
			}
		}
	}
	//print_r($main_sponsors);
	//return $main_sponsors;
	shuffle($main_sponsors);
	return $main_sponsors[0];
	
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
				
				$sub_sponsors[$count] =  "<li><a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'>".$SPONSORS[$main_sponsor_name]['title']."</a></li>";
				
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
				
				$banner[$count] =  "<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name]['banner_1'] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
				$count++;
            }
        }
    }
	//print_r($banner);
	//return $banner;
	shuffle($banner);
	return $banner[0];
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
				
				$lead_sponsors[$count] =  "<a target='blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$sponsor_type] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
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
?>