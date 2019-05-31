<?php

define("WEBNAME", "UniWorldWide.com");
define("URLNAME", "");

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1200, maximum-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>
<?=WEBNAME." - ".$title?>
</title>
<link rel="icon" href="/favicon.png" type="image/png" />
<script type="text/javascript" src="javascript/analytics.js"></script>
<script type="text/javascript" src="javascript/general.js"></script>
<link type="text/css" href="styles/styles.css" rel="stylesheet" />
<?=$ext?>
<!--[if lt IE 9]>
	<script type="text/javascript" src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>   
<![endif]-->
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400" /> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:700" /> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:400" />
 	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:300" />   
  	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400" />  
  	<style type="text/css">
	 @font-face {
		font-family: 'FontAwesome';
	 	src: url('../fonts/fontawesome-webfont.eot');
	} 	
	</style>	
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="styles/ie7styles.css" />
<![endif]-->
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="styles/iestyles.css" />
<![endif]-->
</head>
<body <?=$body?>>
<div id="search_box_container">
    <div id="translate_container">
        <div id="google_title_container">
            <div class="google_title">Translate this page</div>
        </div>
        <div id="google_translate">
            <div id="google_translate_element" style="text-align:right;"></div>
        </div>
    </div>
</div>
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
                            <li id="<?=$id1?>"><a href="index.php" title="Home" id="home_link"><span>
                                <div class="padding13">Home</div>
                                </span></a></li>
                            <li id="<?=$id2?>"><a href="about.php"><span>
                                <div class="padding13">About</div>
                                </span></a></li>
                            <li id="<?=$id3?>"><a href="resources.php"><span>
                                <div class="padding13">Resources</div>
                                </span></a></li>
                            <li id="<?=$id4?>"><a href="conferences.php"><span>
                                <div class="padding13">Conferences</div>
                                </span></a></li>
                            <li id="<?=$id5?>"><a href="contact.php"><span>
                                <div class="padding13">Contact</div>
                                </span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end of left_header_menu -->
            </div>
            <!-- end of left_header -->
            <div id="middle_header"></div>
            <div id="right_header">
                <script language="javascript">renderDiv(20);</script>
                <div id="right_header_center_logo"><img src="images/center_logo.jpg" /></div>
                <script language="javascript">renderDiv(37);</script>
                <div id="right_header_bottom">
                    <div id="community_tab">
                        <div id="glowingtabs_orange">
                            <ul>
                                <li id="<?=$id6?>"><a href="associations.php"><span>
                                    <div class="padding13">Associations</div>
                                    </span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="search_div"> </div>
                </div>
            </div>
            <!-- end of right_header -->
        </div>
    </div>
    <!-- end of maincontainer_top -->
</div>
<!-- end of background_top -->
<div id="background_bottom">
	<div id="tab_active_bar">
    </div>
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
                <div id="left_footer_content_right" class="small_white_bold"> All rights reserved
                    <?=date("Y")?>
                    | CGE </div>
            </div>
            <!-- end of left_footer -->
            <div id="middlefooter"></div>
            <div id="right_footer"></div>
        </div>
        <!-- end of footer -->
        <p></p>
    </div>
    <!--end of  maincontainer_bottom -->
    <P></P>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
$('.quote').hide();	
$( document ).ready(function () {
	$('.quote').fadeIn("1000");
	$('.home_info:gt(0)').hide();
	$('.event_information').hide();
	$('.association .description').hide();
	
	$('.home_date').click(function(e) {
		e.preventDefault();						   
    	$(this).next('.home_info').slideToggle('slow');
	});	
	$('.event_span').click(function(e) {
		e.preventDefault();							
    	$(this).next('.event_information').slideToggle('slow');
	});	
	$('.association .name').click(function(e) {
		e.preventDefault();								   
        $(this).next('.association .description').slideToggle('slow');
    });  
});

function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
</div>
<!-- background bottom -->
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
        <div id="left_footer_content_right" class="small_white_bold">All rights reserved
            <?=date("Y")?>
            | CGE</div>
    </div>
    <!-- end of left_footer -->
    <div id="subpage_middlefooter"></div>
    <div id="subpage_right_footer"></div>
</div>
<!-- end of footer -->
<p></p>
</div>
<!--end of  maincontainer_bottom -->
<P></P>
</div>
<!-- background bottom -->
</body>
</html>
<?php
}
//end of printSubpageFooter function
function printAssociationsOld ()
{
?>
<div class="association_container">
    <div class="association">
        <div class="name">Adapt IT</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/ADAPTIT.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Association of Arab Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/AARU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.aaru.edu.jo</div>
            <div class="sub_feature_more"><span class="en"><a href="http://www.aaru.edu.jo" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">AMPEI: Mexican Association for International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/AMPEI.png" /></div>
            <div class="brief">
                <p>AMPEI is a non-profit association whose mission is to assist in the strengthening of the academic quality of Mexican educational institutions through international cooperation.</p>
            </div>
            <div class="url">URL: www.ampei.org.mx/</div>
            <div class="sub_feature_more"><span class="en"><a href="http://www.ampei.org.mx/" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    
    <div class="association">
        <div class="name">Association of Brazilian Higher Education Institutions&#39; Offices for International Relations</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/FAUBAI.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: faubai.org.br</div>
            <div class="sub_feature_more"><span class="en"><a href="http://faubai.org.br" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Association of International Education Administrators</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/AIEA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    
    <div class="association">
        <div class="name">Canadian Bureau of International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/CBIE-BCEI.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Center for Global Education at the University of California, Los Angeles</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/GLOBALED.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Consortium for North American Higher Education Collaboration</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/CONAHEC.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">DAAD: German Academic Exchange Service</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/DAAD.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">European Association for International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/EAIE.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Institute of International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IIE.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Inter&ndash;University Council for East Africa</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IUCEA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Association of Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IAU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Education Association of Australia</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IEAA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Education Association of South Africa</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IEASA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Network of Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/INU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Japan Student Services Organisation</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/JASSO.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    
    <div class="association">
        <div class="name">NAFSA: Association of International Educators</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/NAFSA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">National Research Foundation</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/NRF.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Netherlands Organization for International Cooperation in Higher Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/NUFFIC.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Quacquarelli Symbols</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/QS.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Southern African&ndash;Nordic Centre</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/SANORD.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">The International Graduate Insight Group</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IGRADUATE.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">The International Network of Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/INU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Utrecht Summer Schools</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/SSU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
</div>
<?php
}
function getAssociation($status)
{
	// NOTE: the path of the include file!!!
	include("lib/association_array.php");
	$html  = "";
	$count = 0;
	//$status = "current";
	global $association;
	$association = array();
	foreach ($ASSOCIATION_MEMBERS as $ASSOCIATION_INFO)
	{
		//print_r($ASSOCIATION_INFO);
		if ($ASSOCIATION_INFO['group'] == $status) {
			foreach ((array) $ASSOCIATION_INFO['member'] as $ASSOCIATION_INFO_STUDENT)
			{
				echo" <div class=\"association\">\n
					<div class=\"name\">\n"; 
					if (strlen($ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['acronym']) > 0) 
					{
						echo $ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['acronym'] . ":&nbsp;";
					} 
					
				echo $ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['name']."</div>\n
					<div class=\"description\">\n
						<div class=\"logo\"><img src='".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['logo']."' \"></div>\n
						<div class=\"brief\">\n
							<p>".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['description']."</p>\n
						</div>\n
						<div class=\"url\">URL: ".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['url']."</div>\n
						<div class=\"sub_feature_more\"><span class=\"en\"><a target=\"blank\" href=".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['url'].">Visit Now&nbsp;<img src=\"images/arrow_blue.gif\"></a></span></div>\n
					</div>\n
				</div>\n";	
				$count++;
			}
		}
	} 
	//shuffle($association);
	//$html = $html . $association[0];
	//return $html;
}
//end getAssociation
//end of printAssociations function
function printAssociations ()
{
?>
<div class="association_container">
    <div class="association">
        <div class="name">Association of Arab Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/AARU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.aaru.edu.jo</div>
            <div class="sub_feature_more"><span class="en"><a href="http://www.aaru.edu.jo" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">AMPEI: Mexican Association for International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/AMPEI.png" /></div>
            <div class="brief">
                <p>AMPEI is a non-profit association whose mission is to assist in the strengthening of the academic quality of Mexican educational institutions through international cooperation.</p>
            </div>
            <div class="url">URL: www.ampei.org.mx/</div>
            <div class="sub_feature_more"><span class="en"><a href="http://www.ampei.org.mx/" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    
    <div class="association">
        <div class="name">Association of Brazilian Higher Education Institutions&#39; Offices for International Relations</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/FAUBAI.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: faubai.org.br</div>
            <div class="sub_feature_more"><span class="en"><a href="http://faubai.org.br" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Association of International Education Administrators</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/AIEA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    
    <div class="association">
        <div class="name">Canadian Bureau of International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/CBIE-BCEI.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    
    <div class="association">
        <div class="name">Consortium for North American Higher Education Collaboration</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/CONAHEC.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    
    <div class="association">
        <div class="name">European Association for International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/EAIE.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Institute of International Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IIE.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Inter&ndash;University Council for East Africa</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IUCEA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Association of Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IAU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Education Association of Australia</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IEAA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Education Association of South Africa</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IEASA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">International Network of Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/INU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>    
    <div class="association">
        <div class="name">NAFSA: Association of International Educators</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/NAFSA.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>	
    <div class="association">
        <div class="name">The International Network of Universities</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/INU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div> 


</div>
<?php
}
function printHEOtherGroup() {
?>
<div class="association_container">
	<div class="association">
        <div class="name">Adapt IT</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/ADAPTIT.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Center for Global Education at the University of California, Los Angeles</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/GLOBALED.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">DAAD: German Academic Exchange Service</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/DAAD.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Japan Student Services Organisation</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/JASSO.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">National Research Foundation</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/NRF.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Netherlands Organization for International Cooperation in Higher Education</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/NUFFIC.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Quacquarelli Symbols</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/QS.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Southern African&ndash;Nordic Centre</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/SANORD.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">The i&ndash;Graduate Insight Group</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/IGRADUATE.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>
    <div class="association">
        <div class="name">Utrecht Summer Schools</div>
        <div class="description">
            <div class="logo"><img src="images/associations/logo/SSU.png" /></div>
            <div class="brief">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="url">URL: www.url.org</div>
            <div class="sub_feature_more"><span class="en"><a href="#" target="blank">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
        </div>
    </div>    
</div>    
<?php	
}
function printBanner ()
{
?>
<div id="banner">
    <div class="banner_wrapper">
        <div class="bio">
            <div class="photo"><img src="images/photo/nelson-mandela.png" /></div>
            <div class="caption"></div>
            <div class="quote">
                <blockquote><span>
                    <?php
            $num = rand(1,3);
            switch($num)
            {
                case 1;
                echo "Education is the most powerful weapon which you can use to change the world.";
                break;
                case 2:
                echo "If you talk to a man in a language he understands, that goes to his head. If you talk to him in his language, that goes to his heart.";
                break;
                case 3:
                echo "No country can really develop unless its citizens are educated.";										
            }
        ?>
                    </span></blockquote>
            </div>
        </div>
    </div>
</div>
<?php
}
//end of printBanner()
function printStatements()
{
?>
<div class="left_row_wrapper">
    <div id="statements">
        <div class="statements_wrapper">
            <div class="label">
                <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Statements on Internationalization</a></span></div>
            </div>
            <div class="content">
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9</span><span class="title">Affirming Academic Values in Internationalization of Higher Education: A Call for Action</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                    <div class="sub_feature_more">
                        <div class="en">
                            <div class="read">Read article in</div>
                            <div class="read_lang">
                                <ul>
                                    <li><a href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=en">English&nbsp;<img src="images/arrow_blue.gif"></a></li>
                                    <li><a href="#">Afrikaans&nbsp;<img src="images/arrow_blue.gif"></a></li>
                                    <li><a href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=fr">French&nbsp;<img src="images/arrow_blue.gif"></a></li>
                                    <li><a href="#">Spanish&nbsp;<img src="images/arrow_blue.gif"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9</span><span class="title">The International Student Mobility Charter</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                    <div class="sub_feature_more"><span class="en"><a href="international-student-mobility-charter.php">Read More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
//end of printStatements
function printGlobalDialogue() 
{
?>
<div class="left_row_wrapper">
    <div id="statements">
        <div class="statements_wrapper">
            <div class="label">
                <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Global Dialogue</a></span></div>
            </div>
            <div class="content">
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9;</span><span class="title">Global Dialogue 2014 Declaration</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                    <div class="sub_feature_more"><span class="en"><a href="global-dialogue-2014-declaration.php">Read More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9;</span><span class="title">International HE associations call for global equity</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                    <div class="sub_feature_more"><span class="en"><a href="international-student-mobility-charter.php">Read More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
//end of printGlobalDialogue()
function printCalendarMain() 
{
?>
<div class="left_row_wrapper">
    <div id="events">
        <div class="events_wrapper">
            <div class="label">
                <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Upcoming Conferences</a></span></div>
            </div>
            <div class="content">
                <div class="main_event_container">
                    <div class="event_date">February 2014</div>
                    <div class="event_item_info">
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">02/01 - 02/19</span><span class="organization">AIEA</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Washington, DC, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.aieaworld.org/2014-conference" target="_blank">http://www.aieaworld.org/2014-conference</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>The rapid pace of innovation and the increasingly complex nature of the systems that manage and direct human experience has led to the gradual realization that not bullion or oil, but rather intellectual capital will become the most important commodity of the 21st century. This global recalibration of what is necessary to fuel human progress, push the boundaries of knowledge and even extend profits requires, as a fundamental enabler, international higher education. Nurturing and affording access to this increasingly desirable commodity therefore demands a robust and responsive international higher education sector. The most salient aspect of intellectual capital and the most consequential feature of its value is that it performs within a global context. And yet, notwithstanding this dynamic, there is a frightening disconnect between the demands of the world into which we are evolving and the commitments of colleges and universities to prepare their students, particularly
                                                undergraduates, to succeed in this new world.</p>
                                            <p>There are certainly pockets of awareness here and there. For example, accrediting bodies are increasingly calling for global learning experiences as part of the standards of education required in various disciplines. Despite various initiatives to address global learning at institutions around the world, the majority of institutions still accord global learning a marginal place in the curriculum (a single course or a single co-curricular workshop), if it is there at all. In short, there continues to be a conspicuous absence of a consensus for global learning in the curriculum as part of an intentional effort to align student learning with the demands of a global information age. Let us not forget that education is at the core of international higher education. Moreover, the character of such an education in the context of globalization must be global, where students have multiple, intentional and substantive encounters with global learning experiences throughout their
                                                respective programs of study.</p>
                                            <p>There is therefore an urgency to universalize global learning in the 21st century academy, meaning that all colleges and universities come to understand that part of what defines their mission in this historical moment is the need to prepare students for global realities. This commitment must be expressed, not merely in a menu of education abroad opportunities, but more importantly, throughout their specific fields of study, the curriculum in general, and the co-curriculum. In addition to the demands of government and industry, and taking into account what is needed to push the boundaries of knowledge, the fact remains that the greatest challenges facing humankind are global in nature. These challenges can only be resolved by graduates/citizens who are themselves globally competent. The case for global learning in the academy is overwhelming. Action is expected and required of all institutions, regardless of size, mission, history, wealth or location. In the end,
                                                each institution must commit to making global learning a central feature of a curriculum that will impart the skills, knowledge and dispositions necessary for life in a global information age.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">02/21 - 02/24</span><span class="organization">Community Colleges for International Development</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Las Vegas, Nevada, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.ccidinc.org/annualConference.html" target="_blank">http://www.ccidinc.org/annualConference.html</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>Community Colleges for International Development has been supporting member institutions from around the world, for almost 40 years, to provide access to quality, relevant higher education, and equip students with the competencies that the <strong>21st century workplace demands</strong>. The CCID Annual Conference is our signature event and is the only international conference dedicated fully to the advancement of global engagement at the community college level.</p>

                                            <p>CCID seeks participation of those international education professionals from institutions who are just starting to internationalize to those who are forerunners of campus internationalization efforts. We don't want you to miss out on this great opportunity. The CCID Annual Conference is where like-minded leaders in community and technical colleges, and further education from around the world convene to <strong>share knowledge, form new partnerships and develop solutions</strong> to the ever changing work-force demands of a globalized economy. CCID 2014 conference sponsors are an invaluable part of our success. The support and funding they provide allow us to create the best international education conference experience possible for attendees, exhibitors and global industry partners.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date">March 2014</div>
                    <div class="event_item_info">
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">03/10 - 03/14</span><span class="organization">Comparative International Education Society</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Toronto, Canada</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.cies.us/2014/" target="_blank">http://www.cies.us/2014/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>This year's theme, "Revisioning Education for All" will highlight cutting edge research on issues of equity and the right to education at all levels of learning. Held in Toronto, Canada – home to one of the most cosmopolitan populations of any major city in the world – this year’s program will include exciting keynote addresses and a range of events that will highlight the conference theme and engage all of our membership.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">3/13 - 3/14</span><span class="organization">IIE Best Practices</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;New York, New York, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.iie.org/bestpracticesconference2014" target="_blank">http://www.iie.org/bestpracticesconference2014</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p><strong>"Lead your Campus to the Top: Best Practices in Internationalizing the Campus"</strong><br />
                                                Please join us for the Annual IIE Best Practices in International Education Conference on March 13-14, 2014, in New York City. This event will cover many exciting keynote, plenary, and session themes, and will feature high-level experts, including presidents, provosts, and international education administrators from institutions around the world. In addition, a special awards portion of the conference will honor the winners of the 2014 IIE Andrew Heiskell Awards for Innovation in International Education.</p>
                                            <p>This year, AIEA members Steve Hanson (William & Mary) and Jeff Peck (Baruch) will be hosting a roundtable discussion on the “Impact of Globalization on International Education”, which will coincide with the publication of the Spring 2014 edition of IIENetworker magazine, also co-edited by Steve and Jeff.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   	 	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">3/17 - 3/20</span><span class="organization">APAIE</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp; TBA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp; TBA</div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp; TBA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">3/19 - 3/21</span><span class="organization">IAU-AIU</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Iquitos, Peru</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.iau-aiu.net/civicrm/event/info?reset=1&id=353" target="_blank">http://www.iau-aiu.net/civicrm/event/info?reset=1&amp;id=353</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>Organized in collaboration with the Universidad Científica del Perú located in Iquitos, Peru, it will focus on the theme:<br />
                                                <strong>Blending Higher Education and Traditional Knowledge for Sustainable Development.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date">April 2014</div>
                    <div class="event_item_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">04/02 - 04/05</span><span class="organization">Forum on Education Abroad</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;San Diego, California, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.forumea.org/SanDiego2014.cfm" target="_blank">http://www.forumea.org/SanDiego2014.cfm</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p><strong>"New and Emerging Paradigms for Education Abroad"</strong><br />
                                                Collegial..dynamic...challenging..focused...The Forum's annual conference is charged by an intellectual energy and a passion for ideas that advance the field of education abroad.</p>
                                            <p>This year's sessions address a range of topics that balance theory and practice, and promise to encourage rigorous reflection, stimulate lively dialogue and explore the new and emerging paradigms shaping education abroad.</p>
                                            <p>As the premier gathering for education abroad professionals and faculty, the annual conference brings together colleagues who value critical thinking, enrichingconversation, and a strong committment to the Standards of Good Practice for Education Abroad.</p>
                                            <p>New features this year include: The Big Think, additional sessions on Friday afternoon, expanded Exhibit Hall hours, and a closing Celebration Toast.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">4/13 - 4/16</span><span class="organization">FAUBAI</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Joinville, State of Santa Caterina, Brazil</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://faubai.org.br/conf/2014/" target="_blank">http://faubai.org.br/conf/2014/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>The FAUBAI Conference & Exhibition 2014 will be held from 13 to 16 April 2014 in Joinville , State of Santa Catarina, Brazil, with the central theme "Brazilian Higher Education: Building strategic partnerships"</p>
                                            <p>The main objectives of the event are to host discussions on policies for international education; facilitate contact between Brazilian and foreign institutions and share good practices.</p>
                                            <p>The event program includes workshops, lectures, plenary and parallel sessions and institutional matchmaking .</p>
                                            <p>FAUBAI - the Brazilian Association for International Education, founded in 1988, is a non-profit organization. With 250 institutional members, it is dedicated to help the internationalization of Brazilian higher education; to promote the diversity and potential of the Brazilian higher education system abroad and to the training of its members through:</p>
                                            <ul>
                                                <li>Exchange of experiences and information</li>
                                                <li>Conferences , seminars, workshops, courses and meetings</li>
                                                <li>Consultancy to higher education institutions</li>
                                                <li>Advocacy</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date">May 2014</div>
                    <div class="event_item_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">05/23 - 05/30</span><span class="organization">NAFSA</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;San Diego, California, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.nafsa.org/Attend_Events/Annual_Conference/" target="_blank">http://www.nafsa.org/Attend_Events/Annual_Conference/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>The NAFSA annual conference brings together more than 8,400 professionals in the field of international education for five packed days of training workshops, educational sessions, networking opportunities, and special events.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date">June 2014</div>
                    <div class="event_item_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">06/12 - 06/13</span><span class="organization">IEAA &amp; APAIE: Internationalisation of Higher Education in the Asia-Pacific Symposium</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Hong Kong, China</div>
                                    <div class="event_url"><strong>Conference Website: </strong>&nbsp;<a href="http://www.ieaa.org.au/professional-development/event/internationalisation-of-higher-education-in-the-asia-pacific-symposium-12-13-june-2014" target="_blank">http://www.ieaa.org.au/professional-development/event/internationalisation-of-higher-education-in-the-asia-pacific-symposium-12-13-june-2014</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>Hosted by IEAA in partnership with the Asia-Pacific Association for International Education (APAIE), this two-day symposium will be a uniquely collaborative forum aimed at developing mutual, long-term engagement between institutions in Australia and the Asia-Pacific.</p>
                                            <p>It will bring together university academics and professional staff, government representatives, business leaders and students for an open discussion on the two key themes of enhancing student mobility and fostering research collaboration.</p>
                                            <p>These key themes will cover:</p>
                                            <p><strong>Research collaboration</strong></p>
                                            <ul>
                                                <li>Ethics in research and the impact of funding</li>
                                                <li>Research support across different fields in the region</li>
                                                <li>Research collaboration between Australia and Asia – what is happening, what are the opportunities, why do we need to collaborate?</li>
                                            </ul>
                                            <p><strong>Student mobility</strong></p>
                                            <ul>
                                                <li>The current state of play in staff and student mobility across Australia and the Asia-Pacific</li>
                                                <li>The impact of short-term mobility versus long-term mobility</li>
                                                <li>Internships and business connections, preparing students for placements and employer perspectives.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date">August 2014</div>
                    <div class="event_item_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">08/20 - 08/23</span><span class="organization">IEASA</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp; Johannesberg, South Africa</div>
                                    <div class="event_url"><strong>Conference Website:</strong>  <a href="http://www.ieasa.studysa.org/" target="_blank">http://www.ieasa.studysa.org/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;TBA</div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date">September 2014</div>
                    <div class="event_item_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">09/16 - 09/19</span><span class="organization">EAIE Conference</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;  Prague, Czech Republic</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;  <a href="http://www.eaie.org/home/conference/prague.html" target="_blank">http://www.eaie.org/home/conference/prague.html</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Information about Conference:</strong>

<p><strong>Stepping into a new era</strong><br />
‘Stepping into a new era’ is the theme for the 26th Annual EAIE Conference. Internationalisation of higher education has gone from strength to strength over the last 25 years and higher education professionals are now looking to the next steps in internationalisation. This comes at a time when the dynamic field of international education is undergoing some of the greatest transformations ever, in all aspects of teaching, learning and administration. Will these transformations change the mould of the traditional higher education institution? What do the next 25 years have in store for us? The 2014 EAIE Conference will discuss these very questions as we take the next steps into a new era of international higher education.</p></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    <div class="event_date">October 2014</div>
                    <div class="event_item_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">10/07 - 10/10</span><span class="organization">Australian International Education Conference</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;  Brisbane, Australia</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;  <a href="http://aiec.idp.com/" target="_blank">http://aiec.idp.com/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Information about Conference:</strong>

<p>With a program featuring world leading experts, unique social events and an exhibition, all hosted in and around the Brisbane Convention & Exhibition Centre, this year’s AIEC will once again be the leading event on the international education calendar in Australia.</p>
<p>This year’s theme ‘Inventing the Future’, will challenge participants to imagine international education in new ways. The Committee is building a program which will showcase innovation in international education and focus on the practical impact it has on us as international education professionals and practitioners as well as on partnerships and collaboration.</p>
<p>The program will include plenary sessions, expert presentations, thematic grouped presentations and workshops. More relaxed sessions including café sessions and posters have been developed tp foster more interaction between attendees.</p>
<p>The conference venue, Brisbane Convention and Exhibition Centre is rated as one of the best facilities of its type in the world. Its central city location is makes it easy to participate in conference events while being within walking distance of hotels, cultural activities and entertainment venues.</p></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                	</div>
                    <div class="event_date">November 2014</div>
                    <div class="event_item_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">11/19 - 11/22</span><span class="organization">CBIE</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;  Ottawa, Ontario, Canada</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;  <a href="http://www.cbie-bcei.ca/events/future-conferences/" target="_blank">http://www.cbie-bcei.ca/events/future-conferences/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Information about Conference:</strong>&nbsp;TBA</div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}

function printCalendarHome() 
{
?>
<div class="left_row_wrapper">
    <div id="events">
        <div class="events_wrapper">
            <div class="label">
                <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Upcoming Conferences</a></span></div>
            </div>
            <div class="content">
            	<div class="main_event_container">
                	<div class="event_date home_date">February 2014</div>
                    <div class="event_item_info home_info">
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">02/01 - 02/19</span><span class="organization">AIEA</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Washington, DC, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.aieaworld.org/2014-conference" target="_blank">http://www.aieaworld.org/2014-conference</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>The rapid pace of innovation and the increasingly complex nature of the systems that manage and direct human experience has led to the gradual realization that not bullion or oil, but rather intellectual capital will become the most important commodity of the 21st century. This global recalibration of what is necessary to fuel human progress, push the boundaries of knowledge and even extend profits requires, as a fundamental enabler, international higher education. Nurturing and affording access to this increasingly desirable commodity therefore demands a robust and responsive international higher education sector. The most salient aspect of intellectual capital and the most consequential feature of its value is that it performs within a global context. And yet, notwithstanding this dynamic, there is a frightening disconnect between the demands of the world into which we are evolving and the commitments of colleges and universities to prepare their students, particularly
                                                undergraduates, to succeed in this new world.</p>
                                            <p>There are certainly pockets of awareness here and there. For example, accrediting bodies are increasingly calling for global learning experiences as part of the standards of education required in various disciplines. Despite various initiatives to address global learning at institutions around the world, the majority of institutions still accord global learning a marginal place in the curriculum (a single course or a single co-curricular workshop), if it is there at all. In short, there continues to be a conspicuous absence of a consensus for global learning in the curriculum as part of an intentional effort to align student learning with the demands of a global information age. Let us not forget that education is at the core of international higher education. Moreover, the character of such an education in the context of globalization must be global, where students have multiple, intentional and substantive encounters with global learning experiences throughout their
                                                respective programs of study.</p>
                                            <p>There is therefore an urgency to universalize global learning in the 21st century academy, meaning that all colleges and universities come to understand that part of what defines their mission in this historical moment is the need to prepare students for global realities. This commitment must be expressed, not merely in a menu of education abroad opportunities, but more importantly, throughout their specific fields of study, the curriculum in general, and the co-curriculum. In addition to the demands of government and industry, and taking into account what is needed to push the boundaries of knowledge, the fact remains that the greatest challenges facing humankind are global in nature. These challenges can only be resolved by graduates/citizens who are themselves globally competent. The case for global learning in the academy is overwhelming. Action is expected and required of all institutions, regardless of size, mission, history, wealth or location. In the end,
                                                each institution must commit to making global learning a central feature of a curriculum that will impart the skills, knowledge and dispositions necessary for life in a global information age.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">02/21 - 02/24</span><span class="organization">Community Colleges for International Development</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Las Vegas, Nevada, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.ccidinc.org/annualConference.html" target="_blank">http://www.ccidinc.org/annualConference.html</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>Community Colleges for International Development has been supporting member institutions from around the world, for almost 40 years, to provide access to quality, relevant higher education, and equip students with the competencies that the <strong>21st century workplace demands</strong>. The CCID Annual Conference is our signature event and is the only international conference dedicated fully to the advancement of global engagement at the community college level.</p>

                                            <p>CCID seeks participation of those international education professionals from institutions who are just starting to internationalize to those who are forerunners of campus internationalization efforts. We don't want you to miss out on this great opportunity. The CCID Annual Conference is where like-minded leaders in community and technical colleges, and further education from around the world convene to <strong>share knowledge, form new partnerships and develop solutions</strong> to the ever changing work-force demands of a globalized economy. CCID 2014 conference sponsors are an invaluable part of our success. The support and funding they provide allow us to create the best international education conference experience possible for attendees, exhibitors and global industry partners.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date home_date">March 2014</div>
                    <div class="event_item_info home_info">
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">03/10 - 03/14</span><span class="organization">Comparative International Education Society</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Toronto, Canada</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.cies.us/2014/" target="_blank">http://www.cies.us/2014/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>This year's theme, "Revisioning Education for All" will highlight cutting edge research on issues of equity and the right to education at all levels of learning. Held in Toronto, Canada – home to one of the most cosmopolitan populations of any major city in the world – this year’s program will include exciting keynote addresses and a range of events that will highlight the conference theme and engage all of our membership.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">3/13 - 3/14</span><span class="organization">IIE Best Practices</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;New York, New York, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.iie.org/bestpracticesconference2014" target="_blank">http://www.iie.org/bestpracticesconference2014</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p><strong>"Lead your Campus to the Top: Best Practices in Internationalizing the Campus"</strong><br />
                                                Please join us for the Annual IIE Best Practices in International Education Conference on March 13-14, 2014, in New York City. This event will cover many exciting keynote, plenary, and session themes, and will feature high-level experts, including presidents, provosts, and international education administrators from institutions around the world. In addition, a special awards portion of the conference will honor the winners of the 2014 IIE Andrew Heiskell Awards for Innovation in International Education.</p>
                                            <p>This year, AIEA members Steve Hanson (William & Mary) and Jeff Peck (Baruch) will be hosting a roundtable discussion on the “Impact of Globalization on International Education”, which will coincide with the publication of the Spring 2014 edition of IIENetworker magazine, also co-edited by Steve and Jeff.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   	 	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">3/17 - 3/20</span><span class="organization">APAIE</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp; TBA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp; TBA</div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp; TBA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">3/19 - 3/21</span><span class="organization">IAU-AIU</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Iquitos, Peru</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.iau-aiu.net/civicrm/event/info?reset=1&id=353" target="_blank">http://www.iau-aiu.net/civicrm/event/info?reset=1&amp;id=353</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>Organized in collaboration with the Universidad Científica del Perú located in Iquitos, Peru, it will focus on the theme:<br />
                                                <strong>Blending Higher Education and Traditional Knowledge for Sustainable Development.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date home_date">April 2014</div>
                    <div class="event_item_info home_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">04/02 - 04/05</span><span class="organization">Forum on Education Abroad</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;San Diego, California, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.forumea.org/SanDiego2014.cfm" target="_blank">http://www.forumea.org/SanDiego2014.cfm</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p><strong>"New and Emerging Paradigms for Education Abroad"</strong><br />
                                                Collegial..dynamic...challenging..focused...The Forum's annual conference is charged by an intellectual energy and a passion for ideas that advance the field of education abroad.</p>
                                            <p>This year's sessions address a range of topics that balance theory and practice, and promise to encourage rigorous reflection, stimulate lively dialogue and explore the new and emerging paradigms shaping education abroad.</p>
                                            <p>As the premier gathering for education abroad professionals and faculty, the annual conference brings together colleagues who value critical thinking, enrichingconversation, and a strong committment to the Standards of Good Practice for Education Abroad.</p>
                                            <p>New features this year include: The Big Think, additional sessions on Friday afternoon, expanded Exhibit Hall hours, and a closing Celebration Toast.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">4/13 - 4/16</span><span class="organization">FAUBAI</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Joinville, State of Santa Caterina, Brazil</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://faubai.org.br/conf/2014/" target="_blank">http://faubai.org.br/conf/2014/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>The FAUBAI Conference & Exhibition 2014 will be held from 13 to 16 April 2014 in Joinville , State of Santa Catarina, Brazil, with the central theme "Brazilian Higher Education: Building strategic partnerships"</p>
                                            <p>The main objectives of the event are to host discussions on policies for international education; facilitate contact between Brazilian and foreign institutions and share good practices.</p>
                                            <p>The event program includes workshops, lectures, plenary and parallel sessions and institutional matchmaking .</p>
                                            <p>FAUBAI - the Brazilian Association for International Education, founded in 1988, is a non-profit organization. With 250 institutional members, it is dedicated to help the internationalization of Brazilian higher education; to promote the diversity and potential of the Brazilian higher education system abroad and to the training of its members through:</p>
                                            <ul>
                                                <li>Exchange of experiences and information</li>
                                                <li>Conferences , seminars, workshops, courses and meetings</li>
                                                <li>Consultancy to higher education institutions</li>
                                                <li>Advocacy</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date home_date">May 2014</div>
                    <div class="event_item_info home_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">05/23 - 05/30</span><span class="organization">NAFSA</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;San Diego, California, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.nafsa.org/Attend_Events/Annual_Conference/" target="_blank">http://www.nafsa.org/Attend_Events/Annual_Conference/</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>The NAFSA annual conference brings together more than 8,400 professionals in the field of international education for five packed days of training workshops, educational sessions, networking opportunities, and special events.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="event_date home_date">June 2014</div>
                    <div class="event_item_info home_info">                    	
                    	<div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;<span class="range">06/12 - 06/13</span><span class="organization">IEAA &amp; APAIE: Internationalisation of Higher Education in the Asia-Pacific Symposium</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Hong Kong, China</div>
                                    <div class="event_url"><strong>Conference Website: </strong>&nbsp;<a href="http://www.ieaa.org.au/professional-development/event/internationalisation-of-higher-education-in-the-asia-pacific-symposium-12-13-june-2014" target="_blank">http://www.ieaa.org.au/professional-development/event/internationalisation-of-higher-education-in-the-asia-pacific-symposium-12-13-june-2014</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>Hosted by IEAA in partnership with the Asia-Pacific Association for International Education (APAIE), this two-day symposium will be a uniquely collaborative forum aimed at developing mutual, long-term engagement between institutions in Australia and the Asia-Pacific.</p>
                                            <p>It will bring together university academics and professional staff, government representatives, business leaders and students for an open discussion on the two key themes of enhancing student mobility and fostering research collaboration.</p>
                                            <p>These key themes will cover:</p>
                                            <p><strong>Research collaboration</strong></p>
                                            <ul>
                                                <li>Ethics in research and the impact of funding</li>
                                                <li>Research support across different fields in the region</li>
                                                <li>Research collaboration between Australia and Asia – what is happening, what are the opportunities, why do we need to collaborate?</li>
                                            </ul>
                                            <p><strong>Student mobility</strong></p>
                                            <ul>
                                                <li>The current state of play in staff and student mobility across Australia and the Asia-Pacific</li>
                                                <li>The impact of short-term mobility versus long-term mobility</li>
                                                <li>Internships and business connections, preparing students for placements and employer perspectives.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>   
                <div class="view_all">
                    <div class="sub_feature_more"><span class="en"><a href="conferences.php">View All Conferences&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>              
            </div>
            
        </div>
    </div>
</div>
<?php
}
function printCalendarOld() 
{
?>
<div class="left_row_wrapper">
    <div id="events">
        <div class="events_wrapper">
            <div class="label">
                <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Upcoming Conferences</a></span></div>
            </div>
            <div class="content">
                <div class="event_container">
                    <div class="event_date">January 2014</div>
                    <div class="event_item">
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;01/10 - 01/15</div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_day">01/10</div>
                                <div class="event_detail">
                                    <div class="event_organization">NAFSA</div>
                                    <div class="event_description">
                                        <div class="event_brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>
                                        <div class="event_url">Event URL: www.url.org</div>
                                    </div>
                                </div>
                                <div style="clear:left"></div>
                            </div>
                            <div class="detail_item">
                                <div class="event_day">01/15</div>
                                <div class="event_detail">
                                    <div class="event_organization">EAIE</div>
                                    <div class="event_description">
                                        <div class="event_brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>
                                        <div class="event_url">Event URL: www.url.org</div>
                                    </div>
                                </div>
                                <div style="clear:left"></div>
                            </div>
                        </div>
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;01/20 - 01/25</div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_day">01/10</div>
                                <div class="event_detail">
                                    <div class="event_organization">NAFSA</div>
                                    <div class="event_description">
                                        <div class="event_brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>
                                        <div class="event_url">Event URL: www.url.org</div>
                                    </div>
                                </div>
                                <div style="clear:left"></div>
                            </div>
                            <div class="detail_item">
                                <div class="event_day">01/15</div>
                                <div class="event_detail">
                                    <div class="event_organization">EAIE</div>
                                    <div class="event_description">
                                        <div class="event_brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>
                                        <div class="event_url">Event URL: www.url.org</div>
                                    </div>
                                </div>
                                <div style="clear:left"></div>
                            </div>
                        </div>
                        <div class="event_span"><span class="icon">&#xf133;</span>&nbsp;01/26 - 01/31</div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_day">01/10</div>
                                <div class="event_detail">
                                    <div class="event_organization">NAFSA</div>
                                    <div class="event_description">
                                        <div class="event_brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>
                                        <div class="event_url">Event URL: www.url.org</div>
                                    </div>
                                </div>
                                <div style="clear:left"></div>
                            </div>
                            <div class="detail_item">
                                <div class="event_day">01/15</div>
                                <div class="event_detail">
                                    <div class="event_organization">EAIE</div>
                                    <div class="event_description">
                                        <div class="event_brief">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</div>
                                        <div class="event_url">Event URL: www.url.org</div>
                                    </div>
                                    <div style="clear:left"></div>
                                </div>
                                <div style="clear:left"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_all">
                    <div class="sub_feature_more"><span class="en"><a href="#">View All Events&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
function printResearchTraining()
{
?>
<div class="left_row_wrapper2">
    <div class="left_col">
        <div class="left_col_wrapper1">
            <div id="training">
                <div class="training_wrapper">
                    <div class="label">
                        <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Degree Training</a></span></div>
                    </div>
                    <div class="content">
                        <div class="content_wrapper">
                            <div class="photo"><img src="images/photo/get-involved.png" /></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="sub_feature_more"><span class="en"><a href="#">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left_col">
        <div class="left_col_wrapper2">
            <div id="research">
                <div class="research_wrapper">
                    <div class="label">
                        <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Research</a></span></div>
                    </div>
                    <div class="content">
                        <div class="content_wrapper">
                            <div class="photo"><img src="images/photo/get-involved.png" /></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="sub_feature_more"><span class="en"><a href="#">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
//end of printResearchTraining
function printGetInvolved() {
?>
<div class="right_row_top">
    <div class="right_row_wrapper">
        <div class="right_content_top">
            <div class="label">
                <div class="label_wrapper">Get Involved!</div>
            </div>
        </div>
        <div class="right_content_middle">
            <div class="col_box">
                <div class="col_bar">
                    <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold"> Make a Difference</span> </div>
                </div>
                <div class="col_content">
                    <div class="get_involved">
                        <div class="photo"><img src="images/photo/get-involved.png" /></div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="sub_feature_more"> <span class="en"> <a href="#">Act Now&nbsp;<img src="images/arrow_blue.gif"></a> </span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
//this function can wrap a sentence appropriately based on the max length given
function wrapper($sentence, $max_length)
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