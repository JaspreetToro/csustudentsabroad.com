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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" href="styles/studentabroad-styles.css" rel="stylesheet" />
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
                                        <div class="padding13"><a href="advancedsearch.php" title="Program Search: Explore Your Options" class="why_us_subnav_link">Program Search</a></div>
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
?>
<div id="program_search_form">
      <form method="post" action="search.php">
            <div class="box_left_form">
                        <input id="rdoTypeID_0" name="Program_Type_ID" value="1" type="hidden"/>
                        <div class="ps_country" style="position:relative;display:inline-block;">
                <div class="ps_label">
                    <label for="selProgCntry">Select A Country</label>
                </div>
                <div class="ps_list">
                    <select name="pc" id="selProgCntry" class="form-control" onChange="document.forms['searchForm'].elements['pi'].selectedIndex = 0; document.forms['searchForm'].elements['pr'].selectedIndex = 0;">
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
            </div><br />
            <div class="ps_term" style="position:relative;display:inline-block;">
                <div class="ps_label">
                    <label for="selProgTerm">Select A Term</label>
                </div>
                <div class="ps_list">
                    <select name="pt" id="selProgTerm" class="form-control">
                    <option value="" selected="selected">Any/All Terms</option>

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
                    <select name="pr" id="selProgRegion" class="form-control" onChange="document.forms['searchForm'].elements['pc'].selectedIndex = 0; document.forms['searchForm'].elements['pi'].selectedIndex = 0;">
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
						<label for="selProgCity">Select An Area Of Study</label>
					</div>
            <div class="ps_list" style="margin:0px 0px 10px 0px" >
        			<select id="selProg51" name="p_10003" class="form-control" >
        			
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
												
													<option value="Arabic Language & Literature">Arabic Language & Literature</option>
												
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
												
													<option value="Caribbean Studies">Caribbean Studies</option>
												
													<option value="Catalan Language & Literature">Catalan Language & Literature</option>
												
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
												
													<option value="Czech Language & Literature">Czech Language & Literature</option>
												
													<option value="Dance">Dance</option>
												
													<option value="Design">Design</option>
												
													<option value="Developmental Sciences">Developmental Sciences</option>
												
													<option value="Dietetics & Nutrition">Dietetics & Nutrition</option>
												
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
												
													<option value="Government">Government</option>
												
													<option value="Graphic Design">Graphic Design</option>
												
													<option value="Greek">Greek</option>
												
													<option value="Hausa">Hausa</option>
												
													<option value="Health & Human Services">Health & Human Services</option>
												
													<option value="Health Science">Health Science</option>
												
													<option value="Hebrew">Hebrew</option>
												
													<option value="Hindi">Hindi</option>
												
													<option value="History">History</option>
												
													<option value="Hospitality Management">Hospitality Management</option>
												
													<option value="Human Resources Management">Human Resources Management</option>
												
													<option value="Human Rights">Human Rights</option>
												
													<option value="Humanities">Humanities</option>
												
													<option value="Hungarian Language & Literature">Hungarian Language & Literature</option>
												
													<option value="Iberian Studies">Iberian Studies</option>
												
													<option value="Independent Study">Independent Study</option>
												
													<option value="Information Design">Information Design</option>
												
													<option value="Interdisciplinary Design">Interdisciplinary Design</option>
												
													<option value="Interior Architecture">Interior Architecture</option>
												
													<option value="Interior Design">Interior Design</option>
												
													<option value="International Business">International Business</option>
												
													<option value="International Relations">International Relations</option>
												
													<option value="International Studies">International Studies</option>
												
													<option value="Internships">Internships</option>
												
													<option value="Italian">Italian</option>
												
													<option value="Italian Language & Literature">Italian Language & Literature</option>
												
													<option value="Japanese">Japanese</option>
												
													<option value="Jewish Studies">Jewish Studies</option>
												
													<option value="Journalism">Journalism</option>
												
													<option value="Kinesiology">Kinesiology</option>
												
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
												
													<option value="Mathematics & Statistics">Mathematics & Statistics</option>
												
													<option value="Media Studies">Media Studies</option>
												
													<option value="Middle Eastern Studies">Middle Eastern Studies</option>
												
													<option value="Minority Studies">Minority Studies</option>
												
													<option value="Molecular Biology">Molecular Biology</option>
												
													<option value="Music">Music</option>
												
													<option value="Music Studio Art">Music Studio Art</option>
												
													<option value="Neuroscience">Neuroscience</option>
												
													<option value="Nigerian Studies">Nigerian Studies</option>
												
													<option value="Other Language & Literature">Other Language & Literature</option>
												
													<option value="Peace & Conflict Studies">Peace & Conflict Studies</option>
												
													<option value="Peace Studies">Peace Studies</option>
												
													<option value="Philosophy">Philosophy</option>
												
													<option value="Photography">Photography</option>
												
													<option value="Physical Therapy/Rehabilitation">Physical Therapy/Rehabilitation</option>
												
													<option value="Physics">Physics</option>
												
													<option value="Polish Language & Literature">Polish Language & Literature</option>
												
													<option value="Political Science">Political Science</option>
												
													<option value="Politics">Politics</option>
												
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
												
													<option value="Social Policy & Administration">Social Policy & Administration</option>
												
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
												
													<option value="Tibetan">Tibetan</option>
												
													<option value="Tourism">Tourism</option>
												
													<option value="Ukrainian">Ukrainian</option>
												
													<option value="Ukrainian Language & Culture">Ukrainian Language & Culture</option>
												
													<option value="Urban Design">Urban Design</option>
												
													<option value="Urban Studies">Urban Studies</option>
												
													<option value="Vietnamese Language & Culture">Vietnamese Language & Culture</option>
												
													<option value="Women\'s Studies">Women's Studies</option>
												
													<option value="Womens Studies">Womens Studies</option>
												
													<option value="Writing">Writing</option>
												
													<option value="Zarma">Zarma</option>
												
													<option value="Zoology">Zoology</option>
												
											</select>
			</div>
				</div><br /></div>   
                
                
                
              
                
                
                </div>
          <div class="box_right_form">
          <div class="box_button">
           <input type="image" name="submit" src="../images/search_button_blue.gif" alt="Search" title="Search" value="submit"/>
			  </div>
        <div style="margin:0px 0px -10px 0px;" class="small_dark_blue_bold"><a href="/advancedsearch.php">Advanced Search</a></div>
        </div>
        <br /> <div class="box_bottom_form" style="margin:-5px 0px -5px 0px; float:right;"><a href="http://terradotta.com/"><img alt="Terradotta Logo" src="images/poweredbyterradotta.png" width="198" height="45" border="0"/></a></div>
		</form>
    <!--    <div class="box_advanced"><a href="advancedsearch.php" class="small_dark_blue_bold">Advanced Search</a></div> -->
        

       
</div>
<?php
}
function printCountryHandbooks()
{
?>
<div id="student_handbooks_form">
    <form name="pch_searchForm" method="get" action="" onSubmit="return validateCountry();" class="pch_form">
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
            <li class="button"><a href="#" class="dropdown_button" id="select_active">Understanding Study Abroad
                <span>
                </span>
                </a></li>
            <li class="dropdown" style="display: list-item;">
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
            <li class="dropdown" style="display: list-item;">
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
            <li class="dropdown" style="display: list-item;">
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
            <li class="dropdown" style="display: list-item;">
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
            <li class="dropdown" style="display: list-item;">
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
            <li class="dropdown" style="display: list-item;">
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