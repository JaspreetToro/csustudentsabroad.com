<?php

define("WEBNAME", "StudyUS.org");
define("URLNAME", "http://StudyUS.org");
define('PHPBB_ROOT_PATH', "forum/");

define("STATUS_SAVED", 0);
define("STATUS_PUBLISHED", 1);

define("NUM_STORY_PER_PAGE", 12); //make sure it is divisible by 3 
define("NUM_SCHOOL_PER_PAGE", 10); 

//This is the definition of all the ranges, must be updated yearly to keep it current

define("RANGE_SCHOOL_SIZE_SMALL", "500 - 8,000 students");
define("RANGE_SCHOOL_SIZE_MEDIUM", "8,000 - 20,000 students");
define("RANGE_SCHOOL_SIZE_LARGE", "20,000+ students");

define("RANGE_TUITION_LOW", "$1,000 - $13,000");
define("RANGE_TUITION_MEDIUM", "$13,000 - $25,000");
define("RANGE_TUITION_HIGH", "$25,000+");

function printHeader($tab, $title, $ext = "", $body = "")
{

	$id1 = "";
	$id2 = "";
	$id3 = "";
	$id4 = "";
	$id5 = "";
	
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=WEBNAME." - ".$title?></title>
<link rel="icon" href="/favicon.png" type="image/png">
<link type="text/css" href="styles/styles.css" rel="stylesheet" >
<script type="text/javascript" src="javascript/general.js"></script>
<!--[if IE]>
<style type="text/css">
p.iepara{ /*Conditional CSS- For IE (inc IE7), create 1em spacing between menu and paragraph that follows*/
padding-top: 1em;
}
</style>
<![endif]-->
<link rel="stylesheet" type="text/css" href="styles/contentslider.css" >
<script type="text/javascript" src="javascript/stscode.js"></script>
<script type="text/javascript" src="javascript/contentslider.js"></script>
<?=$ext?>
<SCRIPT LANGUAGE = JAVASCRIPT>
if (document.images) 
{
   img1 = new Image();
   img2 = new Image();
   img3 = new Image();
   img4 = new Image();
   img1.src = "images/home_button_1_selected.jpg";
   img2.src = "images/home_button_2_selected.jpg"
   img1.src = "images/home_button_3_selected.jpg";
   img2.src = "images/home_button_4_selected.jpg"
}
</SCRIPT>

<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="styles/iestyles.css" />
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="styles/ie7styles.css" />
<![endif]-->
</head>

<body <?=$body?>  >
<div id="background_top">
	<div id="maincontainer_top">
		<div id="header">
			<div id="left_header">
				<script language="javascript">renderDiv(6);</script>
				<div id="left_header_logo"><a href="<?=URLNAME?>"><img src="images/logo.jpg" /></a></div>
				<script language="javascript">renderDiv(10);</script>
				<div id="left_header_menu" >
					<div id="glowingtabs">
						<ul>
							<li id="<?=$id1?>"><a href="<?=URLNAME?>" title="Home" id="home_link"><span><div class="padding13">Home</div></span></a></li>
							<li id="<?=$id2?>"><a href="study_abroad.php" title="CSS Library" id="why_us_subnav_link" onmouseover="showsubnav('why_us_subnav');" onmouseout="hidesubnav('why_us_subnav');"><span><div class="padding13">Why U.S.</div></span></a></li>
							<li id="<?=$id3?>"><a href="us_education_system.php" title="Help Forums" id="apply_subnav_link" onmouseover="showsubnav('apply_subnav');" onmouseout="hidesubnav('apply_subnav');"><span><div class="padding13">Apply</div></span></a></li>
							<li id="<?=$id4?>"><a href="assessing_cost.php" title="Webmaster Tools" id="finance_subnav_link" onmouseover="showsubnav('finance_subnav');" onmouseout="hidesubnav('finance_subnav');"><span><div class="padding13">Finance</div></span></a></li>
							
							<li id="<?=$id5?>"><a href="visa.php" title="JavaScript tutorials and scripts" id="resource_subnav_link" onmouseover="showsubnav('resource_subnav');" onmouseout="hidesubnav('resource_subnav');"><span><div class="padding13">Resources</div></span></a></li>
						</ul>
						
					</div>
					
					
					<div id="apply_subnav" class="subnav_noshow" onmouseover="showsubnav('apply_subnav');" onmouseout="hidesubnav('apply_subnav');">
						<script language="javascript">renderDiv(10);</script>
						<div class="inner_subnav_apply_subnav">
							
							
								<ul class="list_mainsubnav">
									<li class="list_mainsubnav_item"><A href="us_education_system.php" class="<?php if($_SERVER['PHP_SELF'] == "/us_education_system.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; U.S. Education System</A></li>
									<li class="list_mainsubnav_item"><A href="school_ranking.php" class="<?php if($_SERVER['PHP_SELF'] == "/school_ranking.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; School Ranking</A></li>
									<li class="list_mainsubnav_item">
										<span class="medium_white"><img src="../images/arrow_white.gif" />&nbsp; Location</span>
										<ul class="list_3rdlevel">
											<li><A href="find_your_city.php" class="<?php if($_SERVER['PHP_SELF'] == "/find_your_city.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Find Your City</A></li>
											<li><A href="city_detail.php" class="<?php if($_SERVER['PHP_SELF'] == "/city_detail.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;City Introduction</A></li>
											<li><A href="college_detail.php" class="<?php if($_SERVER['PHP_SELF'] == "/college_detail.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;College Search by State</A></li>
											<li><A href="college_campus_tour.php" class="<?php if($_SERVER['PHP_SELF'] == "/college_campus_tour.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Campus Tours</A></li>
										</ul>
									</li>
									<li class="list_mainsubnav_item">
										<span class="medium_white"><img src="../images/arrow_white.gif" />&nbsp; Campus Life</span>
										<ul class="list_3rdlevel">
											<li><A href="campus_setting.php" class="<?php if($_SERVER['PHP_SELF'] == "/campus_setting.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Campus Setting</A></li>
											<li><A href="school_size.php" class="<?php if($_SERVER['PHP_SELF'] == "/school_size.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;School Size</A></li>
											<li><A href="housing.php" class="<?php if($_SERVER['PHP_SELF'] == "/housing.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Housing</A></li>
											<li><A href="campus_live_video.php" class="<?php if($_SERVER['PHP_SELF'] == "/campus_live_video.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Video: Campus Life</A></li>
										</ul>
									</li>
									
									<li class="list_mainsubnav_item"><A href="choose_school_video.php" class="<?php if($_SERVER['PHP_SELF'] == "/choose_school_video.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>" ><img src="../images/arrow_white.gif" />&nbsp; Video: Choose a School</A></li>
									
									<li class="list_mainsubnav_item"><A href="select_program.php" class="<?php if($_SERVER['PHP_SELF'] == "/select_program.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>" ><img src="../images/arrow_white.gif" />&nbsp; Discover Your School</A></li>
									
									<li class="list_mainsubnav_item">
										<span class="medium_white"><img src="../images/arrow_white.gif" />&nbsp; Academics</span>
										<ul class="list_3rdlevel">
											<li><A href="time_line_quiz.php" class="<?php if($_SERVER['PHP_SELF'] == "/time_line_quiz.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Timeline Checklist</A></li>
											<li><A href="app_requirement.php" class="<?php if($_SERVER['PHP_SELF'] == "/app_requirement.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Application Requirements</A></li>
											<li><A href="choose_major.php" class="<?php if($_SERVER['PHP_SELF'] == "/choose_major.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Choose a Major</A></li>
											<li><A href="selectivity.php" class="<?php if($_SERVER['PHP_SELF'] == "/selectivity.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Selectivity</A></li>
										</ul>
									</li>	
									<li class="list_mainsubnav_item">
										<A href="apply_interview.php" class="<?php if($_SERVER['PHP_SELF'] == "/apply_interview.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; Video: Applying</A>
									</li>	
								</ul>
						</div>
						<div class="inner_subnav_bottom">
						</div>
					</div><!-- end of apply_subnav -->
					
					<div id="why_us_subnav" class="subnav_noshow" onmouseover="showsubnav('why_us_subnav');" onmouseout="hidesubnav('why_us_subnav');">
						<script language="javascript">renderDiv(10);</script>
						<div class="inner_subnav_why_us_subnav">
							
							
								<ul class="list_mainsubnav">
									<li class="list_mainsubnav_item"><A href="study_abroad.php" class="<?php if($_SERVER['PHP_SELF'] == "/study_abroad.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>" ><img src="../images/arrow_white.gif" />&nbsp; Study Abroad</A></li>
									<li class="list_mainsubnav_item"><A href="choosing_us.php" class="<?php if($_SERVER['PHP_SELF'] == "/choosing_us.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; Choose the U.S.</A></li>
									
									
									<li class="list_mainsubnav_item">
										<span class="medium_white"><img src="../images/arrow_white.gif" />&nbsp; Language</span>
										<ul class="list_3rdlevel">
											<li><A href="learning_english.php" class="<?php if($_SERVER['PHP_SELF'] == "/learning_english.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Learning English</A></li>
											<li><A href="english_resources.php" class="<?php if($_SERVER['PHP_SELF'] == "/english_resources.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;English Resources</A></li>
											<li><A href="language_importance_video.php" class="<?php if($_SERVER['PHP_SELF'] == "/language_importance_video.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Video: Language Barrier</A></li>
										</ul>
									</li>	
									
									<li class="list_mainsubnav_item"><A href="why_us_interview.php" class="<?php if($_SERVER['PHP_SELF'] == "/why_us_interview.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; Video: Why the U.S.</A></li>
								
								</ul>
							
						</div>
						<div class="inner_subnav_bottom">
						</div>
					</div><!-- end of why_us_subnav -->
					
					
					<div id="finance_subnav" class="subnav_noshow" onmouseover="showsubnav('finance_subnav');" onmouseout="hidesubnav('finance_subnav');">
						<script language="javascript">renderDiv(10);</script>
						<div class="inner_subnav_finance_subnav">
							
							
								<ul class="list_mainsubnav">
									<li class="list_mainsubnav_item"><A href="assessing_cost.php" class="<?php if($_SERVER['PHP_SELF'] == "/assessing_cost.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>" ><img src="../images/arrow_white.gif" />&nbsp; Assessing Costs</A></li>
									<li class="list_mainsubnav_item"><A href="financial_assistance.php" class="<?php if($_SERVER['PHP_SELF'] == "/financial_assistance.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; Financial Assistance</A></li>
									<li class="list_mainsubnav_item">
										<span class="medium_white"><img src="../images/arrow_white.gif" />&nbsp; Working on Campus</span>
										<ul class="list_3rdlevel">
											<li><A href="type_of_jobs.php" class="<?php if($_SERVER['PHP_SELF'] == "/type_of_jobs.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Types of Jobs</A></li>
											<li><A href="job_resources.php" class="<?php if($_SERVER['PHP_SELF'] == "/job_resources.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Job Resources</A></li>
											<li><A href="oncampus_work_video.php" class="<?php if($_SERVER['PHP_SELF'] == "/oncampus_work_video.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Video: Working on Campus</A></li>
											
										</ul>
									</li>
							
									<li class="list_mainsubnav_item"><A href="money.php" class="<?php if($_SERVER['PHP_SELF'] == "/money.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; Manage Your Money</A></li>
								
								</ul>
							
								
						</div>
						<div class="inner_subnav_bottom">
						</div>
					</div><!-- end of finance_subnav -->
					
					<div id="resource_subnav" class="subnav_noshow" onmouseover="showsubnav('resource_subnav');" onmouseout="hidesubnav('resource_subnav');">
						<script language="javascript">renderDiv(10);</script>
						<div class="inner_subnav_resource_subnav">
							
								<ul class="list_mainsubnav">
									<li class="list_mainsubnav_item">
										<span class="medium_white"><img src="../images/arrow_white.gif" />&nbsp; Getting into the country</span>
										<ul class="list_3rdlevel">
											<li><A href="visa.php" class="<?php if($_SERVER['PHP_SELF'] == "/visa.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Student Visas</A></li>
											<li><A href="visa_application.php" class="<?php if($_SERVER['PHP_SELF'] == "/visa_application.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Visa Application</A></li>
										</ul>
									</li>
									
									
									<li class="list_mainsubnav_item"><A href="us_law.php" class="<?php if($_SERVER['PHP_SELF'] == "/us_law.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; Staying out of trouble </A></li>
									<li class="list_mainsubnav_item"><A href="communication.php" class="<?php if($_SERVER['PHP_SELF'] == "/communication.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; Keeping in touch with home</A></li>
									
									<li class="list_mainsubnav_item">
										<span class="medium_white"><img src="../images/arrow_white.gif" />&nbsp; Maintaining your health</span>
										<ul class="list_3rdlevel">
											<li><A href="insurance.php" class="<?php if($_SERVER['PHP_SELF'] == "/insurance.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Insurance</A></li>
											<li><A href="health.php" class="<?php if($_SERVER['PHP_SELF'] == "/health.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Health</A></li>
											<li><A href="health_video.php" class="<?php if($_SERVER['PHP_SELF'] == "/health_video.php") echo "small_dark_blue_bold"; else  echo "small_white"; ?>">-&nbsp;Video: Health Issues</A></li>
											
										</ul>
									</li>
									
										
									<li class="list_mainsubnav_item"><A href="story_detail.php" class="<?php if($_SERVER['PHP_SELF'] == "/story_detail.php") echo "medium_dark_blue_bold"; else  echo "medium_white"; ?>"><img src="../images/arrow_white.gif" />&nbsp; StudyUS News</A></li>
								</ul>
							
						</div>
						<div class="inner_subnav_bottom">
						</div>
					</div><!-- end of resource_subnav -->
					
					
				</div><!-- end of left_header_menu -->	
			</div><!-- end of left_header -->
				
			<div id="middle_header"></div>
				
			<div id="right_header">
				<script language="javascript">renderDiv(20);</script>
				<div id="right_header_center_logo"><img src="images/center_logo.jpg" /></div>
				<script language="javascript">renderDiv(37);</script>
				<div id="right_header_bottom">
					<div id="community_tab">
						<div id="glowingtabs_orange">
							<ul>
								<li><a href="forum" title="Community" target="_blank"><span><div class="padding13">Community</div></span></a></li>
							</ul>
						</div>
					</div>
					<div id="search_div">
						<script language="javascript">renderDiv(8);</script>
						<form action="search_result.php" method="get" onsubmit="if(getElementById('search_box').value.length < 2){alert('Please Insert at least one keyword');return false;}">
							<input type="submit" value="Search" id="search_button" /><input type="text" id="search_box" name="query" />
						</form>
					</div>
				</div>
				
			</div><!-- end of right_header -->
		</div>
	</div><!-- end of maincontainer_top -->
</div><!-- end of background_top -->

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
				<div id="left_footer_content_left" class="small_white_bold">
					<a href="contact_us.php" class="small_white_bold">Contact Us</a> | 
					<a href="about_us.php" class="small_white_bold">About</a> | 
					<a href="http://globaled.us/giving.asp" class="small_white_bold">Support CGE</a> | 
					<a href="http://globaled.us" class="small_white_bold">Center for Global Education</a>
				</div>
				<div id="left_footer_content_right" class="small_white_bold">
					All rights reserved <?=date("Y")?> | CGE
				</div>
			</div><!-- end of left_footer -->
			
			<div id="middlefooter"></div>
			<div id="right_footer"></div>
			
			
		</div><!-- end of footer -->
		<p></p>
	</div><!--end of  maincontainer_bottom -->
	<P></P>
</div> <!-- background bottom -->

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
				<div id="subpage_left_footer_content_left" class="small_white_bold">
					<a href="contact_us.php" class="small_white_bold">Contact Us</a> | 
					<a href="about_us.php" class="small_white_bold">About</a> | 
					<a href="http://globaled.us/giving.asp" class="small_white_bold">Support CGE</a> | 
					<a href="http://globaled.us" class="small_white_bold">Center for Global Education</a>
				</div>
				<div id="left_footer_content_right" class="small_white_bold">
					All rights reserved <?=date("Y")?> | CGE
				</div>
			</div><!-- end of left_footer -->
			
			<div id="subpage_middlefooter"></div>
			<div id="subpage_right_footer"></div>
			
			
		</div><!-- end of footer -->
		<p></p>
	</div><!--end of  maincontainer_bottom -->
	<P></P>
</div> <!-- background bottom -->

</body>
</html>

<?php
}
//end of printSubpageFooter function




function printBanner()
{
?>

<div id="slider1" class="contentslide">
<div class="opacitylayer">

	<div class="contentdiv">
		<script language="javascript">renderDiv(9);</script>
		<div class="contentdiv_inside">
			<div class="feature_divider8">
			</div>
			<div id="image_feature1" onclick="window.location='city_detail.php';">
			</div>
			<div class="feature_divider">
			</div>
			<div class="content_text">
				<div class="content_text_top"><script language="javascript">renderDiv(7);</script><div class="padding7">Choose a City</div></div>
				<div class="content_text_middle">
					<script language="javascript">renderDiv(12);</script>
					<div class="padding7">
						Learn about which U.S. city is the best fit for you<script language="javascript">renderDiv(20);</script>
						<a href="city_detail.php" class="big_white_bold">&gt; City Intro</a>
					</div>
				</div>
				<div class="content_text_bottom"></div>
			</div>
			<div class="feature_divider8">
			</div>	
		</div>
		
	</div>
	
	<div class="contentdiv">
		<script language="javascript">renderDiv(9);</script>
		<div class="contentdiv_inside">
			<div class="feature_divider8">
			</div>
			<div id="image_feature2" onclick="window.location='select_program.php';">
			</div>
			<div class="feature_divider">
			</div>
			<div class="content_text">
				<div class="content_text_top"><script language="javascript">renderDiv(7);</script><div class="padding7">Discover Your School</div></div>
				<div class="content_text_middle">
					<script language="javascript">renderDiv(12);</script>
					<div class="padding7">
						Learn about universities that will meet your needs and goals 
						<script language="javascript">renderDiv(20);</script>
						<a href="select_program.php" class="big_white_bold">&gt; Take a Quiz</a><BR />
						<a href="college_detail.php" class="big_white_bold">&gt; Browse Colleges</a><BR />
					</div>
				</div>
				<div class="content_text_bottom"></div>
			</div>
			<div class="feature_divider8">
			</div>	
		</div>
	</div>
	
	<div class="contentdiv">
		<script language="javascript">renderDiv(9);</script>
		<div class="contentdiv_inside">
			<div class="feature_divider8">
			</div>
			<div id="image_feature3" onclick="window.location='assessing_cost.php';">
			</div>
			<div class="feature_divider">
			</div>
			<div class="content_text">
				<div class="content_text_top"><script language="javascript">renderDiv(7);</script><div class="padding7">Financing Education</div></div>
				<div class="content_text_middle">
					<script language="javascript">renderDiv(12);</script>
					<div class="padding7">
						Find out how to finance your U.S. education
						<script language="javascript">renderDiv(20);</script>
						<a href="assessing_cost.php" class="big_white_bold">&gt; Assess Cost</a><BR />
						<a href="financial_assistance.php" class="big_white_bold">&gt; Financial Assistance</a>
					</div>
				</div>
				<div class="content_text_bottom"></div>
			</div>
			<div class="feature_divider8">
			</div>	
		</div>
	</div>
	
	<div class="contentdiv">
		<script language="javascript">renderDiv(9);</script>
		<div class="contentdiv_inside">
			<div class="feature_divider8">
			</div>
			<div id="image_feature4" onclick="window.location='/forum';" >
			</div>
			<div class="feature_divider">
			</div>
			<div class="content_text">
				<div class="content_text_top"><script language="javascript">renderDiv(7);</script><div class="padding7">Join Community</div></div>
				<div class="content_text_middle">
					<script language="javascript">renderDiv(12);</script>
					<div class="padding7">
						Get advice and share experiences with other people about studying in the U.S. 
						<script language="javascript">renderDiv(20);</script>
						<a href="/forum" class="big_white_bold">&gt; Join Now</a>
					</div>
				</div>
				<div class="content_text_bottom"></div>
			</div>
			<div class="feature_divider8">
			</div>	
		</div>
	</div>

</div>
</div>

<div class="pagination" id="paginate-slider1"></div>

<script type="text/javascript">
var linktext=["Choose a City", "Discover your School", "Finance Education", "Join Community"]
//Define: ContentSlider("slider_ID", [autorotate_miliseconds], [custompaginatelinkstext], [customnextlinktext])

ContentSlider("slider1", "", linktext )
//OR ContentSlider("slider1", 3000)
//OR ContentSlider("slider1", 3000, linktextarray)
//OR ContentSlider("slider1", 3000, linktextarray, "Foward")
//OR ContentSlider("slider1", "", linktextarray)
//OR ContentSlider("slider1", "", "", "Foward")
</script>


<?php
}
//end of printBanner


function printLoginDiv()
{
	global $user;
?>	
	<script language="javascript">renderDiv(3);</script>
		<?php
					if($user->data['user_id'] == ANONYMOUS)
					{
		?>
						<form action="<?=append_sid('forum/ucp.php?mode=login')?>" method="post" id="login">
						<table cellpadding="1" cellspacing="0" border="0" class="small_dark_grey_bold" width="100%">
							<TR>
								<TD>User Name: </TD><TD></TD>
							</TR>
							<TR>
								<TD><input type="text" name="username" id="username" size="25" class="small_dark_grey" maxlength="20" /></TD><TD><img src="images/button_login.jpg" onclick="document.getElementById('login').submit();" class="pointer" /></TD>
							</TR>
							<TR>
								<TD>Password: </TD><TD align="center">or&nbsp;&nbsp;</TD>
							</TR>
							<TR>
								<TD><input id="password" name="password" size="25" class="small_dark_grey" type="password" /></TD><TD><a href="forum/ucp.php?mode=register"><img src="images/button_register.jpg" class="pointer"  /></a></TD>
							</TR>	
							<TR>
								<TD colspan="2">
									<script language="javascript">renderDiv(5);</script>
									<input type="checkbox" name="autologin" id="autologin" tabindex="4" /> Remember me
									<input type="hidden" name="redirect" value="<?=append_sid(URLNAME."/".$_SERVER['PHP_SELF'])?>" />
									<input type="hidden" name="sid" value="<?=$user->data['session_id']?>" />
									<input type="hidden" name="login" tabindex="6" value="Login" class="button1" />
								</TD>
							</TR>
							
						</table>
						</form>
		<?php
					}
					else
					{
						echo "<div class=\"medium_dark_grey_bold\">
								
								
								<div id=\"login_div_form_left\">
									<script language=\"javascript\">renderDiv(10);</script>
									<div>
										<img src=\"images/icon_home.gif\"> &nbsp;WELCOME!
										<script language=\"javascript\">renderDiv(3);</script>
										<div style=\"margin: 0 0 0 26px;\"><a href=\"/forum/ucp.php\" class=\"medium_dark_grey\">".$user->data['username']."</a></div>
										
									</div>
									<script language=\"javascript\">renderDiv(10);</script>
									<div>
										<a href=\"/forum/ucp.php\" class=\"medium_dark_grey\"><img src=\"images/icon_ucp.gif\"> &nbsp;User Control Panel</a>
										<script language=\"javascript\">renderDiv(3);</script>
										<div style=\"margin: 0 0 0 22px;\"><a href=\"/forum/ucp.php?i=pm&folder=inbox\" class=\"medium_dark_grey\">(".$user->data['user_new_privmsg']." new messages)</a></div>
									</div>
								</div>
								<div id=\"login_div_form_right\">
									<script language=\"javascript\">renderDiv(10);</script>
									<div>
										<a href=\"/forum\"><img src=\"images/button_back.jpg\"></a>
										<script language=\"javascript\">renderDiv(10);</script>
										<a href=\"forum/ucp.php?mode=logout&sid=".$user->data['session_id']."\"><img src=\"images/button_logout.jpg\"></a>
									</div>
								</div>
								
							
						</div>";
					}
					
}
//end of printLoginDiv()

function printSubpageLoginDiv()
{
	global $user;
?>	
	<script language="javascript">renderDiv(3);</script>
		<?php
					if($user->data['user_id'] == ANONYMOUS)
					{
		?>
						<div style="padding: 0 0 0 3px;">
							<form action="<?=append_sid('forum/ucp.php?mode=login')?>" method="post" id="login">
							<table cellpadding="1" cellspacing="0" border="0" class="small_dark_grey_bold" width="100%">
								<TR>
									<TD>User Name: </TD>
								</TR>
								<TR>
									<TD><input type="text" name="username" id="username" class="small_dark_grey" size="15" maxlength="20" /></TD>
								</TR>
								<TR>
									<TD>Password: </TD>
								</TR>
								<TR>
									<TD><input id="password" name="password" size="15" class="small_dark_grey" type="password" /></TD>
								</TR>
								<TR>
									<TD>
										<script language="javascript">renderDiv(5);</script>
										<input type="checkbox" name="autologin" id="autologin" tabindex="4" /> Remember me
										<input type="hidden" name="redirect" value="<?=append_sid(URLNAME."/".$_SERVER['PHP_SELF'])?>" />
										<input type="hidden" name="sid" value="<?=$user->data['session_id']?>" />
										<input type="hidden" name="login" tabindex="6" value="Login" class="button1" />
									</TD>
								</TR>
								
								<TR>
									<TD align="center">
										<script language="javascript">renderDiv(5);</script>
										<img src="images/button_login.jpg" onclick="document.getElementById('login').submit();" class="pointer" />
									</TD>
								</TR>
								<TR>
									<TD align="center">
										<script language="javascript">renderDiv(5);</script>
										<a href="forum/ucp.php?mode=register"><img src="images/button_register.jpg" class="pointer"  /></a>
									</TD>
								</TR>		
								
							</table>
							</form>
						</div>
		<?php
					}
					else
					{
						echo "<div class=\"medium_dark_grey_bold\">
								
								
								<div style=\"padding: 0 0 0 3px\" >
									<script language=\"javascript\">renderDiv(5);</script>
									<div>
										<img src=\"images/icon_home.gif\"> &nbsp;WELCOME!
										<script language=\"javascript\">renderDiv(3);</script>
										<div style=\"margin: 0 0 0 26px;\"><a href=\"/forum/ucp.php\" class=\"medium_dark_grey\">".$user->data['username']."</a></div>
										
									</div>
									<script language=\"javascript\">renderDiv(10);</script>
									<div>
										<a href=\"/forum/ucp.php\" class=\"medium_dark_grey\"><img src=\"images/icon_ucp.gif\"> &nbsp;User Ctrl Panel</a>
										<script language=\"javascript\">renderDiv(3);</script>
										<div style=\"margin: 0 0 0 12px;\"><a href=\"/forum/ucp.php?i=pm&folder=inbox\" class=\"medium_dark_grey\">(".$user->data['user_new_privmsg']." new messages)</a></div>
									</div>
								</div>
								<div style=\"width: 100%; text-align: center\">
									<script language=\"javascript\">renderDiv(10);</script>
									<div style=\"width: 100%; text-align: center\">
										<a href=\"/forum\"><img src=\"images/button_back.jpg\"></a>
										<script language=\"javascript\">renderDiv(5);</script>
										<a href=\"forum/ucp.php?mode=logout&sid=".$user->data['session_id']."\"><img src=\"images/button_logout.jpg\"></a>
									</div>
								</div>
								
							
						</div>";
					}
					
}
//end of printLoginDiv()


function printCityDiv()
{
	global $city_list;
	
	$conn = connectDatabase(); // connect to database
	if(!$conn)
	{
		echo "ERROR, Datababase Connection failed!\n";
		exit;
	}
	
	//grab 5 featured city info and put them into an array
	$sql = "SELECT city, state, student_population, cost, climate, overview, C.city_id as city_id, picid 
			FROM handbook_city C, handbook_picture P 
			WHERE C.city_id = P.city_id AND status = ".STATUS_PUBLISHED." AND C.featured = 1 AND P.featured = 1 
			ORDER BY city
			LIMIT 0, 5";
	//echo "sql: $sql<BR>";
	$result = queryDatabase($sql);
	
	$city_list = array();

	if($result)
	{
		$i = 1;
		while($city = fetchDatabase($result))
		{
			$city_list[$i] = $city;
			$i++;
		}
	}
	
	disconnectDatabase($conn);
	
	$featured_index = rand(1, 5);
	$number_of_city = count($city_list);
	
	
	?>
						<script language="javascript">renderDiv(20);</script>
						<div>
							<?php renderColumn(13, 180);?>
							<div id="featured_city">
								<div id="featured_city_top">
									<script language="javascript">renderDiv(8);</script>
									<div id="featured_city_top_content">
										<img src="images/arrow_blue.gif" /> &nbsp;<a href="#" class="small_dark_blue_bold">City Intro:</a> <a href="city_detail.php?city_id=<?=$city_list[$featured_index]['city_id']?>" class="small_white_bold"><?=$city_list[$featured_index]['city']?>, <?=$city_list[$featured_index]['state']?></a>
									</div>
								</div>
								<div id="featured_city_bottom">
									<script language="javascript">renderDiv(6);</script>
									<div id="featured_city_bottom_content" class="small_dark_grey">
										<a href="city_detail.php?city_id=<?=$city_list[$featured_index]['city_id']?>" ><img src="show_picture.php?picid=<?=$city_list[$featured_index]['picid']?>" style="float:left; margin: 0 7px 7px 0" /></a>	
										<?=wraper($city_list[$featured_index]['overview'], 220)?>
									</div>
								</div>
								<div style="text-align: right">
									<a href="city_detail.php?city_id=<?=$city_list[$featured_index]['city_id']?>" class="small_dark_blue_bold"><i>read more...</i></a>&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
							</div>
							<?php renderColumn(14, 180);?>
							<div id="list_city">
								<div id="list_city_top" class="small_dark_blue_bold">
									<script language="javascript">renderDiv(6);</script>
									<img src="images/arrow_blue.gif" /> &nbsp;<a href="city_detail.php" class="small_dark_blue_bold">More Cities</a>
								</div>
								<?php
								$k = 1;
								foreach($city_list as $index => $city)
								{
									if($index != $featured_index)
									{
										if($k != 4) //the first 3 cities
										{
											?>
											<script language="javascript">renderDiv(1);</script>
											<div class="list_city_middle"><script language="javascript">renderDiv(4);</script><a href="city_detail.php?city_id=<?=$city['city_id']?>" class="small_white"><?=$city['city']?></a></div>	
											<?php
										}
										else//the last one
										{
											?>
											<script language="javascript">renderDiv(1);</script>
											<div id="list_city_bottom"><script language="javascript">renderDiv(4);</script><a href="city_detail.php?city_id=<?=$city['city_id']?>" class="small_white"><?=$city['city']?></a></div>
											<?php
										}
										
										$k++;
									}
									
									
								}
								?>
							</div>
							<?php renderColumn(13, 180);?>
						</div>
<?php
}
//end of printCityDiv()



function printStoryDiv()
{
	global $story_list;
	
	$conn = connectDatabase(); // connect to database
	if(!$conn)
	{
		echo "ERROR, Datababase Connection failed!\n";
		exit;
	}
	
	//grab 5 featured story info and put them into an array
	$sql = "SELECT title, full_description, C.story_id as story_id, spicid 
			FROM handbook_story C, handbook_story_picture P 
			WHERE C.story_id = P.story_id AND status = ".STATUS_PUBLISHED." AND C.featured = 1 AND P.featured = 1 
			ORDER BY title
			LIMIT 0, 5";
	//echo "sql: $sql<BR>";
	$result = queryDatabase($sql);
	
	$story_list = array();

	if($result)
	{
		$i = 1;
		while($story = fetchDatabase($result))
		{
			$story_list[$i] = $story;
			$i++;
		}
	}
	
	disconnectDatabase($conn);
	
	$featured_index = rand(1, 5);
	$number_of_story = count($story_list);
	
	
	?>
						<script language="javascript">renderDiv(20);</script>
						<div>
							<?php renderColumn(13, 180);?>
							<div id="featured_story">
								<div id="featured_story_top">
									<script language="javascript">renderDiv(8);</script>
									<div id="featured_story_top_content" >
										<img src="images/arrow_blue.gif" /> &nbsp;<a href="story_detail.php" class="small_dark_blue_bold">Featured Story:</a>&nbsp;<a href="story_detail.php?story_id=<?=$story_list[$featured_index]['story_id']?>" class="small_white_bold"><?=$story_list[$featured_index]['title']?></a>
									</div>
								</div>
								<div id="featured_story_bottom">
									<script language="javascript">renderDiv(6);</script>
									<div id="featured_story_bottom_content" class="small_dark_grey">
											
										<?=wraper(removeEvilTags($story_list[$featured_index]['full_description']), 350)?>										
									</div>
								</div>
								<div style="text-align: right">
									<a href="story_detail.php?story_id=<?=$story_list[$featured_index]['story_id']?>" class="small_dark_blue_bold"><i>read more...</i></a>&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
							</div>
							<?php renderColumn(14, 180);?>
							<div id="list_story">
								<div id="list_story_top" class="small_dark_blue_bold">
									<script language="javascript">renderDiv(6);</script>
									<img src="images/arrow_blue.gif" /> &nbsp;<a href="story_detail.php" class="small_dark_blue_bold">More Featured Stories</a>
								</div>
								<?php
								$k = 1;
								foreach($story_list as $index => $story)
								{
									if($index != $featured_index)
									{
										if($k != 4) //the first 3 cities
										{
											?>
											<script language="javascript">renderDiv(1);</script>
											<div class="list_city_middle"><script language="javascript">renderDiv(4);</script><a href="story_detail.php?story_id=<?=$story['story_id']?>" class="small_white"><?=$story['title']?></a></div>	
											<?php
										}
										else//the last one
										{
											?>
											<script language="javascript">renderDiv(1);</script>
											<div id="list_city_bottom"><script language="javascript">renderDiv(4);</script><a href="story_detail.php?story_id=<?=$story['story_id']?>" class="small_white"><?=$story['title']?></a></div>
											<?php
										}
										
										$k++;
									}
									
									
								}
								?>
							</div>
							<?php renderColumn(13, 180);?>
						</div>
<?php
}
//end of printStoryDiv()



//this function can wrap a sentence appropriately based on the max length given
function wraper($sentence, $max_length)
{
	$string = "";
	$count =0;
	
	for($i = 0; $i < strlen($sentence); $i++)
	{
		if($count == $max_length)
		{
			for($j = $i; $j >= 0; $j--)
			{
				if(strcmp($sentence[$j],' ') == 0)
				{
					$string = substr($sentence, 0 , $j)."...";
					break;
				}
			} 
			break;
			//$count = 0;
		}
		$count++;
	}
	
	if(strcmp($string, "") == 0)
		$string = $sentence; 
	
	
	return $string;
}//end of function


function printSubpageSponsor()
{

}
//end of printSubpageSponsor

//escape function for a string in mysql statement
function quote_smart($value)
{
   // Stripslashes
   if (get_magic_quotes_gpc()) 
   {
       $value = stripslashes($value);
   }
   
   // Quote if not a number or a numeric string
   if (!is_numeric($value)) 
   {
       $value = "'" . mysql_real_escape_string($value) . "'";
   }
   return $value;
}//end quote_smart function

function renderColumn($width, $height = 0)
{
	echo("<div class=\"floatleft\" style=\"width:".$width."px;");
	
	 if($height > 0)
	 	echo("height: ".$height."px \"");
	 
	 echo("></div>");
}
//end of renderColumnfunction

//This function will take any html tags
function removeEvilTags($source)
{
   $allowedTags = '';
   $source = strip_tags(stripslashes($source), $allowedTags);
   return trim(preg_replace('/<(.*?)>/ie', "'<'.removeEvilStyles('\\1').'>'", $source));
}

//given a string time, it will format it as we desired
function formatDate($string)
{
	$ret = date("M j, Y", mktime((substr($string,11, 2)-1), substr($string, 14, 2), substr($string, 17, 2), substr($string, 5, 2), substr($string, 8, 2), substr($string, 0, 4)));
	return $ret;
}


?>
