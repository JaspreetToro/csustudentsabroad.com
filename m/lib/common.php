<?php
define("WEBNAME", "StudentsAbroad.com");
define("URLNAME", "http://Studentsabroad.com");

function printHeader($page_name, $menu, $country_name) {
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width" />
<title><?php echo $page_name; ?> - <?=WEBNAME?></title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
 
</head>
<body>
<div id="header" class="header-bg">
    <!-- <div id="logo"><a href=""><img src="images/logo.png" border="0" width="234"></a></div> -->
    <div id="logo"><a href="index.php"><img src="images/sa-logo.png" border="0" ></a></div>
    
	<?php if ($menu == 0) { ?>
    <p><a href="#" ><img src="images/contact-icon.png" border="0" ></a></p>
	<?php } elseif ($menu == 1) {?>
    <p><a href="#" id="menu_icon"><img src="images/menu-icon.png"></a></p>	
	<?php } elseif ($menu == 2) {?>
    <p><a href="#" id="menu_icon"><img src="images/menu-icon.png"></a></p>	
	<?php } else {?>
    <p><a href="#" ><img src="images/contact-icon.png" border="0" ></a></p>	
	<?php } ?>
</div>
<div id="navigation_tier2" class="sub-navigation-wrapper">
<?php
if ($menu == 2 ) {
	printSubNav($country_name);
} else {
	printSubNavHome();
}
?>
</div>

<?php	
}

function printSlider() {
?>
<div id="banner">
    <div class="flexslider">
      <ul class="slides">
        <li>
          <a href="country.php?name=General"><img src="images/SA-Slide-GH.png" /></a>
        </li>
        <li>
          <a href="student-handbook.php"><img src="images/SA-Slide-CSH.png" /></a>
        </li>
        <li>
          <a href="program-search.php"><img src="images/SA-Slide-PS.png" /></a>
        </li>
      </ul>
    </div>
</div>
<?php
}

function printBreadCrumb() {
?>

<?php
}

function printFooter() {
?>
	<div id="footer" class="footer-bg">
        <div id="footer_link"><a href="#" id="goto_fullsite">Full Site</a></div>
        <div id="sub_footer_link"><a href="#top">Back to Top</a></div>
        <div id="social_media_div">
            <div class="social_media_icon"> <a href="http://www.facebook.com/pages/US-Study-Abroad-Students/173578856077334" target="_blank"><img src="images/icon-facebook.png" border="0" ></a> </div>
            <div class="social_media_icon"> <a href="https://twitter.com/#!/UStudyabroad" target="_blank"><img src="images/icon-twitter.png" border="0" ></a> </div>
        </div>
        <!-- end of social_media_div -->
    	
    </div>
    <div id="sub_footer">
    	<div><a href="http://globaled.us">&copy;2013 CGE</a></div>
        <div><a href="terms-of-use.php">Conditions of Use</a></div>        
    </div>
    </div>
    <!-- End of footer -->
</div>
<!-- End of wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/general.js" type="text/javascript"></script>
</body>
</html>
<?php
}

function printFooterA() {
?>
	<div id="footer" class="footer-bg">
        <div id="footer_link"></div>
        <div id="sub_footer_link"><a href="#top">Back to Top</a></div>
        <div id="social_media_div">
            <div class="social_media_icon"> <a href="http://www.facebook.com/pages/US-Study-Abroad-Students/173578856077334" target="_blank"><img src="images/icon-facebook.png" border="0" ></a> </div>
            <div class="social_media_icon"> <a href="https://twitter.com/#!/UStudyabroad" target="_blank"><img src="images/icon-twitter.png" border="0" ></a> </div>
        </div>
        <!-- end of social_media_div -->
    	
    </div>
    <div id="sub_footer">
    	<div><a href="http://globaled.us">&copy;2013 CGE</a></div>
        <div><a href="terms-of-use.php">Conditions of Use</a></div>        
    </div>
    </div>
    <!-- End of footer -->
</div>
<!-- End of wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/general.js" type="text/javascript"></script>
</body>
</html>
<?php
}

function printSubNavHome() {
?>
<div class="sub-navigation">
    <div class="menu">
    	<div class="home"><a href="index.php" class="icon1">Home</a></div>
    </div>
    <div class="menu">
    	<div class="m-program-search"><a href="program-search.php" class="icon6">Program Search</a></div>
    </div>
    <div class="menu">
    	<div class="m-student-handbooks"><a href="student-handbook.php" class="icon5">Student Handbooks</a></div>
    </div>
    <div class="menu">
    	<div class="featured-programs"><a href="featured-programs.php" class="icon2">Featured Programs</a></div>
    </div>
    <div class="menu">
    	<div class="about"><a href="about.php" class="icon4">About</a></div>
    </div>
    <div class="menu">
    	<div class="contact"><a href="contact.php" class="icon3">Contact</a></div>
    </div>
    <div class="menu last bottom">
    	<div class="support"><a href="support.php" class="icon7">Support</a></div>
    </div>
</div>
<?php
}

function printSubNav1() {
?>
<div class="sub-navigation">
    <div class="menu">
    	<div class="home"><a href="index.php" class="icon1">Home</a></div>
    </div>
    <div class="menu">
    	<div class="about"><a href="about.php" class="icon2">About</a></div>
    </div>
    <div class="menu">
    	<div class="contact"><a href="contact.php" class="icon3">Contact</a></div>
    </div>
    <div class="menu">
    	<div class="support"><a href="support.php" class="icon4">Support</a></div>
    </div>
    <div class="menu">
    	<div class="student-handbook sh-gradient"><a href="student-handbook.php" class="icon5">Student Handbooks</a></div>
    </div>
    <div class="menu last botom">
    	<div class="program-search ps-gradient ps-corner-bottom"><a href="program-search.php" class="icon6">Program Search</a></div>
    </div>
</div>
<?php	
}

function printSubNav($country_name) {	
?>

    <div class="sub-navigation">
        <div class="menu">
          <a class="category" href="#">Understanding Study Abroad</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/introduction.php?country=<?php echo $country_name ?>">Introduction</a></li>
                <li><a href="handbook/why-study-abroad.php?country=<?php echo $country_name ?>">Why Study Abroad?</a></li>
                <li><a href="handbook/why-learn-a-language.php?country=<?php echo $country_name ?>">Why Learn a Language?</a></li>
                <li class="last"><a href="handbook/advice-for-parents.php?country=<?php echo $country_name ?>">Advice for Parents</a></li>
            </ul>
          </div>
        </div>
        
        <div class="menu">
          <a class="category" href="#">Choosing a Program</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/finding-quality-program.php?country=<?php echo $country_name ?>">Finding a Quality Program</a></li>
                <li><a href="handbook/select-the-right-program.php?country=<?php echo $country_name ?>">Selecting the Right Program for You</a></li>
                <li><a href="handbook/who-runs-your-program.php?country=<?php echo $country_name ?>">Who Runs Your Program</a></li>
                <li><a href="handbook/">Financing Study Abroad</a></li>
                <li class="last"><a href="handbook/application-process.php?country=<?php echo $country_name ?>">Application Process</a></li>
            </ul>
          </div>
        </div>
        
        <div class="menu">
          <a class="category" href="#">Practical Information</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/pre-departure-planning.php?country=<?php echo $country_name ?>">Pre-Departure Planning</a></li>
                <li><a href="handbook/how-foreign-laws-apply-to-you.php?country=<?php echo $country_name ?>">How Foreign Law Apply to You</a></li>
                <li><a href="handbook/communication-while-abroad.php?country=<?php echo $country_name ?>">Communication While Abroad</a></li>
                <li><a href="handbook/housing.php?country=<?php echo $country_name ?>">Housing</a></li>
                <li><a href="handbook/packing.php?country=<?php echo $country_name ?>">Packing</a></li>
                <li class="last"><a href="handbook/expectations.php?country=<?php echo $country_name ?>">Expectations</a></li>
            </ul>
          </div>
        </div>
        <div class="menu">
          <a class="category" href="#">Health and Safety</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/medical-care-and-insurance.php?country=<?php echo $country_name ?>">Medical Care and Insurance</a></li>
                <li><a href="handbook/basic-health-and-safety.php?country=<?php echo $country_name ?>">Basic Health and Safety</a></li>
                <li><a href="handbook/strategies-to-reduce-risk.php?country=<?php echo $country_name ?>">Risk Factors and Strategies to Reduce Risk</a></li>
                <li><a href="handbook/special-issues.php?country=<?php echo $country_name ?>">Special Issues</a></li>
                <li><a href="handbook/crisis-management.php?country=<?php echo $country_name ?>">Crisis Management</a></li>
                <li class="last"><a href="handbook/adjustments-and-culture-shock.php?country=<?php echo $country_name ?>">Adjustments and Culture Shock</a></li>
            </ul>
          </div>
        </div>
        <div class="menu">
          <a class="category" href="#">Coming Home</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/airport-procedures.php?country=<?php echo $country_name ?>">Airport Safety, Duties, and Customs</a></li>
                <li><a href="handbook/reverse-culture-shock.php?country=<?php echo $country_name ?>">Reverse Culture Shock</a></li>
                <li class="last"><a href="handbook/continuing-benefits-of-study-abroad.php?country=<?php echo $country_name ?>">Continuing Benefits of Study Abroad</a></li>
            </ul>
          </div>
        </div>
        <div class="menu">
          <a class="category" href="#">Tools for Planning</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
              <li><span class="title">Resources Tools</span>
                <ul>
                    <li><a href="handbook/questions.php?country=<?php echo $country_name ?>">Questions</a></li>
                    <li><a href="handbook/checklist.php?country=<?php echo $country_name ?>">Checklist</a></li>
                    <li><a href="handbook/resources.php?country=<?php echo $country_name ?>">Resources</a></li>
                    <li class="last"><a href="handbook/top-10-health-and-safety-issues.php?country=<?php echo $country_name ?>">Top 10 Health and Safety Issues</a></li>
                </ul>
              </li>
              <li><span class="title">Communication Tools</span>
                <ul>
                    <li><a href="handbook/communication-info-sheets.php?country=<?php echo $country_name ?>">Communication Info Sheet</a></li>
                    <li><a href="handbook/words-to-know.php?country=<?php echo $country_name ?>">Words to Know</a></li>
                    <li><a href="handbook/phrases-to-know.php?country=<?php echo $country_name ?>">Phrases to Know</a></li>
                    <li class="last"><a href="handbook/help-images.php?country=<?php echo $country_name ?>">Help Images</a></li>
                </ul>        
              </li>
              <li class="last"><span class="title">Emergency Tools</span>
                <ul>
                    <li><a href="handbook/emergency-planning.php?country=<?php echo $country_name ?>">Emergency Planning</a></li>
                    <li><a href="handbook/emergency-action-plan-steps.php?country=<?php echo $country_name ?>">Emergency Action Plan Steps</a></li>
                    <li><a href="handbook/personal-emergency-action-plan.php?country=<?php echo $country_name ?>">Personal Emergency Action Plan</a></li>
                    <li class="last"><a href="handbook/emergency-card.php?country=<?php echo $country_name ?>">Emergency Card</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        
		<div class="menu"><div class="home"><a href="../index.php" class="icon1">Home</a></div></div>
		<div class="menu"><div class="student-handbook sh-gradient"><a href="../student-handbook.php" class="icon5">Student Handbook</a></div></div>
		<div class="menu last botom"><div class="program-search ps-gradient ps-corner-bottom"><a href="../program-search.php" class="icon6">Program Search</a></div></div>     
        
    </div>
<?php 
}

function printHomeNav($country_name) {	
?>

    <div class="sub-navigation">
        <div class="menu">
          <a class="category" href="#">Understanding Study Abroad</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/introduction.php?country=<?php echo $country_name ?>">Introduction</a></li>
                <li><a href="handbook/why-study-abroad.php?country=<?php echo $country_name ?>">Why Study Abroad?</a></li>
                <li><a href="handbook/why-learn-a-language.php?country=<?php echo $country_name ?>">Why Learn a Language?</a></li>
                <li class="last"><a href="handbook/advice-for-parents.php?country=<?php echo $country_name ?>">Advice for Parents</a></li>
            </ul>
          </div>
        </div>
        
        <div class="menu">
          <a class="category" href="#">Choosing a Program</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/finding-quality-program.php?country=<?php echo $country_name ?>">Finding a Quality Program</a></li>
                <li><a href="handbook/select-the-right-program.php?country=<?php echo $country_name ?>">Selecting the Right Program for You</a></li>
                <li><a href="handbook/who-runs-your-program.php?country=<?php echo $country_name ?>">Who Runs Your Program</a></li>
                <li><a href="handbook/">Financing Study Abroad</a></li>
                <li class="last"><a href="handbook/application-process.php?country=<?php echo $country_name ?>">Application Process</a></li>
            </ul>
          </div>
        </div>
        
        <div class="menu">
          <a class="category" href="#">Practical Information</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/pre-departure-planning.php?country=<?php echo $country_name ?>">Pre-Departure Planning</a></li>
                <li><a href="handbook/how-foreign-laws-apply-to-you.php?country=<?php echo $country_name ?>">How Foreign Law Apply to You</a></li>
                <li><a href="handbook/communication-while-abroad.php?country=<?php echo $country_name ?>">Communication While Abroad</a></li>
                <li><a href="handbook/housing.php?country=<?php echo $country_name ?>">Housing</a></li>
                <li><a href="handbook/packing.php?country=<?php echo $country_name ?>">Packing</a></li>
                <li class="last"><a href="handbook/expectations.php?country=<?php echo $country_name ?>">Expectations</a></li>
            </ul>
          </div>
        </div>
        <div class="menu">
          <a class="category" href="#">Health and Safety</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/medical-care-and-insurance.php?country=<?php echo $country_name ?>">Medical Care and Insurance</a></li>
                <li><a href="handbook/basic-health-and-safety.php?country=<?php echo $country_name ?>">Basic Health and Safety</a></li>
                <li><a href="handbook/strategies-to-reduce-risk.php?country=<?php echo $country_name ?>">Risk Factors and Strategies to Reduce Risk</a></li>
                <li><a href="handbook/special-issues.php?country=<?php echo $country_name ?>">Special Issues</a></li>
                <li><a href="handbook/crisis-management.php?country=<?php echo $country_name ?>">Crisis Management</a></li>
                <li class="last"><a href="handbook/adjustments-and-culture-shock.php?country=<?php echo $country_name ?>">Adjustments and Culture Shock</a></li>
            </ul>
          </div>
        </div>
        <div class="menu">
          <a class="category" href="#">Coming Home</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
                <li><a href="handbook/airport-procedures.php?country=<?php echo $country_name ?>">Airport Safety, Duties, and Customs</a></li>
                <li><a href="handbook/reverse-culture-shock.php?country=<?php echo $country_name ?>">Reverse Culture Shock</a></li>
                <li class="last"><a href="handbook/continuing-benefits-of-study-abroad.php?country=<?php echo $country_name ?>">Continuing Benefits of Study Abroad</a></li>
            </ul>
          </div>
        </div>
        <div class="menu last bottom">
          <a class="category" href="#">Tools for Planning</a>
          <div class="dropdown category-wrapper" style="display: none;">
            <ul>
              <li><span class="title">Resources Tools</span>
                <ul>
                    <li><a href="handbook/questions.php?country=<?php echo $country_name ?>">Questions</a></li>
                    <li><a href="handbook/checklist.php?country=<?php echo $country_name ?>">Checklist</a></li>
                    <li><a href="handbook/resources.php?country=<?php echo $country_name ?>">Resources</a></li>
                    <li class="last"><a href="handbook/top-10-health-and-safety-issues.php?country=<?php echo $country_name ?>">Top 10 Health and Safety Issues</a></li>
                </ul>
              </li>
              <li><span class="title">Communication Tools</span>
                <ul>
                    <li><a href="handbook/communication-info-sheets.php?country=<?php echo $country_name ?>">Communication Info Sheet</a></li>
                    <li><a href="handbook/words-to-know.php?country=<?php echo $country_name ?>">Words to Know</a></li>
                    <li><a href="handbook/phrases-to-know.php?country=<?php echo $country_name ?>">Phrases to Know</a></li>
                    <li class="last"><a href="handbook/help-images.php?country=<?php echo $country_name ?>">Help Images</a></li>
                </ul>        
              </li>
              <li class="last"><span class="title">Emergency Tools</span>
                <ul>
                    <li><a href="handbook/emergency-planning.php?country=<?php echo $country_name ?>">Emergency Planning</a></li>
                    <li><a href="handbook/emergency-action-plan-steps.php?country=<?php echo $country_name ?>">Emergency Action Plan Steps</a></li>
                    <li><a href="handbook/personal-emergency-action-plan.php?country=<?php echo $country_name ?>">Personal Emergency Action Plan</a></li>
                    <li class="last"><a href="handbook/emergency-card.php?country=<?php echo $country_name ?>">Emergency Card</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>  
        
    </div>
<?php 
}
function printBannerSponsor() {
	global $SPONSORS;
	global $COUNTRY_SPONSORS;	
	global $SPONSORS_BANNER;
	
	global $main_sponsors;
	global $banner;	
?>
        <div class="sponsors_banner">
            <?php
            /* sponsors banner
            */
            $box_count = 1;
            //$count_MAX = 3;
            $count_MAX = 1;
            
            while ($box_count <= $count_MAX){
                get_banner_sponsor2("General", $box_count);
                echo $banner[0];
                $box_count++;
            }
            ?>
        </div>  
<?php
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

function printSponsor() {
	global $SPONSORS;
	global $COUNTRY_SPONSORS;	
	global $SPONSORS_BANNER;
	
	global $main_sponsors;
	global $banner;	
?>
        <div class="sponsors">
			<?php
			/* main sponsors */
			$box_count = 1;
			//$count_MAX = 5;
			$count_MAX = 2;
			
			while ($box_count <= $count_MAX){
			?>
			<div id="main_sponsors_<?=$box_count?>">
				<?php
				get_main_sponsor2("General_Home", $box_count);
				echo $main_sponsors[0];
				$box_count++;
			?>
			</div>
			<?php
			}
			?>
        </div>  
<?php
}

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

function printProgramSearchForm()
{
?>
<div class="program-search-form">
    <form name="searchForm" method="get" action="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SimpleSearch" class="ps_form">
        <div class="box_left_form">
            <input id="rdoTypeID_0" name="Program_Type_ID" value="O" type="hidden"/>
            <div class="ps_country">
                <div class="ps_label">
                    <label for="selProgCntry">Select a country</label>
                </div>
                <div class="ps_list">
                    <select class="style" name="pc" id="selProgCntry">
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
                    <label for="selProgTerm">Select a term</label>
                </div>
                <div class="ps_list">
                    <select class="style" name="pt" id="selProgTerm">
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
                    <label for="selProgRegion">Select a region</label>
                </div>
                <div class="ps_list">
                    <select class="style" name="pr" id="selProgRegion">
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
                    <label for="selProg49">Select an area of study</label>
                </div>
                <div class="ps_list">
                    <select class="style" id="selProg49" name="p_10003">
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
                <input type="submit" name="btnSubmit" class="btnSubmit" alt="Search" align="middle" title="Search" value="Search" />
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
?>