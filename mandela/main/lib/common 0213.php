<?php

//define("WEBNAME", "UniWorldWide: International Higher Education Collaboration");
define("URLTITLE", "UniWorldWide.org");
define("WEBNAME", "Supporting International Higher Education Collaboration");
define("URLNAME", "http://UniWorldWide.org");
define("WEBQUOTE", "Inspired by the life &amp; work of Nelson Mandela");

function printHeader($tab, $title, $ext = "", $body = "")
{
	$id1 = "";
	$id2 = "";
	$id3 = "";
	$id4 = "";
	$id5 = "";
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1000, maximum-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>
<?php echo $title." | ". URLTITLE.": ".WEBNAME?>
</title>
<link rel="icon" href="/favicon.png" type="image/png" />
<script type="text/javascript" src="javascript/analytics.js"></script>
<script type="text/javascript" src="javascript/general.js"></script>
<link type="text/css" href="styles/styles.css" rel="stylesheet" />
<?=$ext?>
<!--[if lt IE 9]>
	<script type="text/javascript" src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
	<link rel="stylesheet" type="text/css" href="styles/iestyles.css" />    
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
<link rel="stylesheet" type="text/css" href="styles/ie6styles.css" />
<![endif]-->
</head>
<body <?=$body?>>
<div id="background_top">
    <div id="maincontainer_top">
        <div id="header">
            <div id="left_header">
                <script language="javascript">renderDiv(6);</script>
                <div id="left_header_logo"><a href="<?=URLNAME?>"><img src="images/uniworldwide-logo-lg.png" border="0" /></a></div>
                <script language="javascript">renderDiv(10);</script>
                <div id="left_header_menu" >
                    <div id="glowingtabs">
                        <ul>
                            <li <?php echo "id='".$id1."'"?>><a href="index.php" title="Home" id="home_link"><span>
                                <div class="padding13">Home</div>
                                </span></a></li>
                            <li <?php echo "id='".$id2."'"?>><a href="about.php"><span>
                                <div class="padding13">About</div>
                                </span></a></li>
                            <li <?php echo "id='".$id3."'"?>><a href="collaboration.php"><span>
                                <div class="padding13">Collaboration</div>
                                </span></a></li>
                            <li <?php echo "id='".$id4."'"?>><a href="resources.php"><span>
                                <div class="padding13">Resources</div>
                                </span></a></li>
                            <li <?php echo "id='".$id5."'"?>><a href="conferences.php"><span>
                                <div class="padding13">Conferences</div>
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
                    <div id="search_div"><div id="google_translate_element" style="text-align:right;"></div></div>
                </div>
            </div>
            <!-- end of right_header -->
        </div>
    </div>
    <!-- end of maincontainer_top -->
</div>
<!-- end of background_top -->
<div id="background_middle"></div>
<div id="background_bottom">
    <div id="maincontainer_bottom">
        <?php 
}
//end of printHeader function
function printFooter($id)
{
	
?>
        <div style="clear: left; height: 30px;"></div>
        <!-- end of footer -->
    </div>
    <!--end of  maincontainer_bottom -->
</div>
<!-- background bottom -->
<div id="background_footer">
	<div id="maincontainer_footer">
    	<div class="top_footer"></div>
        <div class="middle_footer">
        	<div class="footer_about">
            	<div class="footer_logo"><a href="<?=URLNAME?>"><img src="images/logo.jpg" width="182px" height="41px" border="0" /></a></div>
            	<div class="footer_brief"><p><strong>UniWorldWide.org</strong> has been developed to help carry the mission of the Global Dialogue on the Future of Internationalisation of Higher Education which took place in January 2014 at Nelson Mandela Bay in South Africa.</p></div>
            </div>
            <div class="footer_explore">
            	<div class="footer_title">Explore<br />UniWorldWide</div>
                <div class="footer_brief">
                	<ul>
                    	<li><a href="about.php">About Us</a></li>
                        <li><a href="collaboration.php">Collaboration</a>                        
                        <li><a href="conferences.php">Conferences</a></li>
                        <li><a href="resources.php">Resources</a></li>
                        <li><a href="associations.php">Associations</a></li>                        
                        
                    </ul>
                </div>
            </div>
            <div class="footer_resources">
            	<div class="footer_title">Collaboration</div>
            	<div class="footer_brief">
            		<ul>
                    	<li><a href="collaboration.php#statements">Statements on Internationalization</a></li>
                        <li><a href="about.php#global-dialogue">Global Dialogue</a></li>
                    </ul>
            	</div>    	    
            </div>
            <div class="footer_get_involved">
            	<div class="footer_title">Find Resources</div>
            	<div class="footer_brief">
            		<ul>
                    	<li><a href="resources.php#university-programs">University Programs</a></li>
                        <li><a href="resources.php#general-resources">General Resources</a></li>
                        <li><a href="resources.php#colleges-universities">Colleges and Universities</a></li>
                    </ul>
            	</div>  
            </div>
        </div>
        <div class="bottom_footer">&copy; Copyright 2014. <a href="http://globaled.us/">Center for Global Education</a>. All Rights Reserved. <a href="http://globaled.us/conditions.asp">Terms of Use</a> | <a href="http://globaled.us/contact.asp">Contact CGE</a> | <a href="http://globaled.us/giving.asp">Support CGE</a></div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript" src="javascript/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="javascript/form.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

$( document ).ready(function () {
	$(function() {
		$('.quotes_carousel').bxSlider({
		  auto: true,
		  controls: false,
		  mode: 'fade',
		  pause: 10000,
		  onSliderLoad: function(){
			$('.banner_wrapper').css("visibility", "visible");
		  }
		});
	});					  
							  

	$('.home_info:gt(0)').hide();
	$('.event_information').hide();
	$('.association .description').hide();
	$('.contact_form').hide();
	
	$('.home_date').click(function(e) {
		e.preventDefault();						   
    	$(this).next('.home_info').toggle();
	});	
	$('.event_span').click(function(e) {
		e.preventDefault();							
    	$(this).next('.event_information').toggle();
	});	
	
	$('div.association').each(function() {
		var $dropdown = $(this);
	
		$('.name', $dropdown).click(function(e) {
		  e.preventDefault();
		  $div = $('.description', $dropdown);
		  $div.toggle();
		  $('div.association .description').not($div).hide();
		  return false;
   		});
	});
	
	$('.contact_us').click(function(e) {
		e.preventDefault();								   
        $('.contact_form').slideToggle('slow');
    });  
	<?php
		if($id > 0) {
	?>
		$('.partners .col_box .col_content').hide();
		$('.partners .col_box .col_bar').css("cursor", "pointer");
		$('.partners .col_box .col_bar').click(function(e) {
			e.preventDefault();								   
			$(this).next('.partners .col_box .col_content').toggle();		
		});  	
	<?php
		}
	?>
});
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
        <div id="left_footer_content_right" class="small_white_bold">All rights reserved
            <?=date("Y")?>
            | CGE</div>
    </div>
    <!-- end of left_footer -->
    <div id="subpage_middlefooter"></div>
    <div id="subpage_right_footer"></div>
</div>
<!-- end of footer -->
</div>
<!--end of  maincontainer_bottom -->
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
						<div class=\"logo\"><a target=\"blank\" href=".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['url']."><img src=".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['logo']." border=\"0\"></a></div>\n
						<div class=\"brief\">\n
							<p>".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['description']."</p>\n
						</div>\n
						<div class=\"url\"></div>\n
						<div class=\"sub_feature_more\"><span class=\"en\"><a target=\"blank\" href=".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['url'].">Visit&nbsp;".$ASSOCIATION[$ASSOCIATION_INFO_STUDENT]['acronym']."&nbsp;Website&nbsp;<img src=\"images/arrow_blue.gif\"></a></span></div>\n
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
function printUniProgram ()
{
?>
<div class="right_row">
    <div class="right_row_wrapper">
        <div class="right_content_top">
            <div class="label">
                <div class="label_wrapper">Find your Program!</div>
            </div>
        </div>
        <div class="right_content_middle">
            <div class="col_box">
                <div class="col_bar">
                    <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold"> World Wide Colleges and Universities</span> </div>
                </div>
                <div class="col_content">
                    <div class="get_involved">
                        <div class="photo"><img src="images/photo/get-involved.png"></div>
                        <div>
                            <p>UniWorldWide.com provides web links to colleges and universities around the world as well as resources like the International Association of Universities (IAU)/UNESCO World Academic Database. UniWorldWide.com also provides a background on the system of higher education for each country around the world. </p>
                        </div>
                        <div class="sub_feature_more"> <span class="en"> <a href="http://uniworldwide.com">Visit UniWorldWide.com Website&nbsp;<img src="images/arrow_blue.gif"></a> </span> </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<?php
}
function printBanner() {
?>
<div id="banner">
	<div class="banner_wrapper">
        <ul class="quotes_carousel">
                        <li><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS909&txtstr=education%20is%20the%20most%20powerful' target='_blank'><img src="images/quotes/mandela-2-banner.png" width="652px" height="110px" alt="Education is the most powerful weapon which you can use to change the world. ~Nelson Mandela, July 16, 2003" /></a></li>
                        <li><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS675' target='blank'><img src="images/quotes/mandela-8-banner.png" width="652px" height="110px" alt="Until we reduce the wide gaps between the educated and the illiterate, the sheltered and the homeless, and very rich and the poor, we will continue to be deeply divided. ~Nelson Mandela, March 1, 1999" /></a></li>
                        <li><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS493&txtstr=language' target='_blank'><img src="images/quotes/mandela-3-banner.png" width="652px" height="110px" alt="Though our countries are separated by geography, language, and culture, we are partners in humanity's quest for it's most noble ideals. ~Nelson Mandela, July 17, 1997"/></a></li>
                        
                        <li><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS323&txtstr=international%20education' target='_blank'><img src="images/quotes/mandela-4-banner.png" width="652px" height="110px" alt="More children from disadvantaged backgrounds should be given the chance of this international education... ~Nelson Mandela, November 3, 1995" /></a></li>
                        
                        <li><a href='http://edition.cnn.com/2008/WORLD/africa/06/24/mandela.quotes/' target='_blank'><img src="images/quotes/mandela-6-banner.png" width="652px" height="110px" alt="More children from disadvantaged backgrounds should be given the chance of this international education... ~Nelson Mandela" /></a></li>
                    </ul>        	
    </div>
</div>
<?php	
}
function printBannerOldText()
{
?>
<div id="banner">
	<div class="banner_wrapper">
    	<div>
        	<ul class="quotes_carousel">
            	<li><blockquote><p>"Education is the most powerful weapon which you can use to change the world."</p>&nbsp;&ndash;&nbsp; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS909&txtstr=education%20is%20the%20most%20powerful' target='_blank'><cite>Nelson Mandela, July 16, 2003</cite></a></blockquote></li>
                <li><blockquote><p>Though our countries are separated by geography, language, and culture, we are partners in humanity's quest for it's most noble ideals."</p>&nbsp;&ndash;&nbsp; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS493&txtstr=language' target='_blank'><cite>Nelson Mandela, July 17, 1997</cite></a></blockquote></li>
                <li><blockquote><p>More children from disadvantaged backgrounds should be given the chance of this international education. In this regard we welcome your decision to establish a Fund named after the South African President to assist the integration of gifted disadvantaged children into international life."</p>&nbsp;&ndash;&nbsp; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS323&txtstr=international%20education' target='_blank'><cite>Nelson Mandela, November 3, 1995</cite></a></blockquote></li>
                <li><blockquote><p>The question is how we match those demands of the free market with the burning social issues of the world. Poverty and its related social phenomena are the major challenges humankind faces here at the beginning of the twenty-first century.<br /><br />
						The gap between the rich and the poor is widening rather than closing. We are producing enough to feed, clothe, shelter, educate and provide health care for all the people of the world. Yet, the poor are becoming poorer and more socially deprived."</p>&nbsp;&ndash;&nbsp; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS955&txtstr=university' target='_blank'><cite>Nelson Mandela, November 12, 2003</cite></a></blockquote></li>
				<li><blockquote><p>If you talk to a man in a language he understands, that goes to his head. If you talk to him in his language, that goes to his heart."</p>&nbsp;&ndash;&nbsp; <a href='#'><cite>Nelson Mandela</cite></a></blockquote></li>
            	<li><blockquote><p>It can be said that there are four basic and primary things that the mass of people in a society wish for: to live in a safe environment, to be able to work and provide for themselves, to have access to good public health and to have sound educational opportunities for their children. Currently we as a society may be struggling in each of those four areas, but we must remain confident that with the personal commitment of each and every one of us we can and will overcome the obstacles towards development."</p>&nbsp;&ndash;&nbsp; <a href=' http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS912&txtstr=health' target='blank'><cite>Nelson Mandela, January 2, 2007</cite></a></blockquote></li>            
            </ul>
        </div>
    </div>
</div>
<?php
}
function printBannerOld ()
{
?>
<div id="banner">
    <div class="banner_wrapper">
        <div class="bio">
            <div class="quote">
                <blockquote>
                    <?php
					$num = rand(1,5);
					switch($num)
					{
						case 1;
						echo "<p>Education is the most powerful weapon which you can use to change the world.&ndash; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS909&txtstr=education%20is%20the%20most%20powerful' target='_blank'><cite>Nelson Mandela</cite></a></p>";
						break;
						case 2:
						echo "<p>Though our countries are separated by geography, language, and culture, we are partners in humanity's quest for it's most noble ideals.&ndash; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS493&txtstr=language' target='_blank'><cite>Nelson Mandela</cite></a></p>";
						break;
						case 3:
						echo "<p>More children from disadvantaged backgrounds should be given the chance of this international education. In this regard we welcome your decision to establish a Fund named after the South African President to assist the integration of gifted disadvantaged children into international life.&ndash; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS323&txtstr=international%20education' target='_blank'><cite>Nelson Mandela</cite></a></p>";	
						break;
						case 4:
						echo "<p>The question is how we match those demands of the free market with the burning social issues of the world. Poverty and its related social phenomena are the major challenges humankind faces here at the beginning of the twenty-first century.<br /><br /> \n
						The gap between the rich and the poor is widening rather than closing. We are producing enough to feed, clothe, shelter, educate and provide health care for all the people of the world. Yet, the poor are becoming poorer and more socially deprived.&ndash; <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS955&txtstr=university' target='_blank'><cite>Nelson Mandela</cite></a></p>";
						break;
						case 5:
						echo "<p>If you talk to a man in a language he understands, that goes to his head. If you talk to him in his language, that goes to his heart.&ndash; <a href='#'><cite>Nelson Mandela</cite></a></p>";
						break;
						case 6:
						echo "<p>It can be said that there are four basic and primary things that the mass of people in a society wish for: to live in a safe environment, to be able to work and provide for themselves, to have access to good public health and to have sound educational opportunities for their children. Currently we as a society may be struggling in each of those four areas, but we must remain confident that with the personal commitment of each and every one of us we can and will overcome the obstacles towards development.&ndash; <a href=' http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS912&txtstr=health' target='blank'><cite>Nelson Mandela</cite></a></p>";
						break;
						
					}
				?>
                    </blockquote>
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
    	<h2 class="ribbon">Statements on Internationalization<a name="statements"></a></h2>
        <div class="statements_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span>Statements on Internationalization<a name="statements"></a></span></div>
            </div> -->            
            <div class="content">
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9</span><span class="title">Affirming Academic Values in Internationalization of Higher Education: A Call for Action</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>The internationalization of higher education is a dynamic process, continuously shaped and reshaped by the international context in which it occurs. As this context changes, so do the purpose, goals, meanings, and strategies of internationalization.</p>
                        </div>
                    </div>
                    <div class="sub_feature_more">
                        <div class="en">
                            <div class="read">Read article in</div>
                            <div class="read_lang">
                                <ul>
                                    <li><a href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=en">English&nbsp;<img src="images/arrow_blue.gif"></a></li>
                                    <li><a href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=fr">French&nbsp;<img src="images/arrow_blue.gif"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9</span><span class="title">The International Student Mobility Charter</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>According to UNESCO this number may rise to 8 million international higher education students by 2025. This globally mobile population of mainly young people seeking education represents an investment in crucial assets for sending countries, assets that are essential for future development, prosperity and welfare, when students return home with increased knowledge and skills prepared for global citizenship.</p>
                        </div>
                    </div>
                    <div class="sub_feature_more">
                        <div class="en">
                            <div class="read">Read article in</div>
                            <div class="read_lang">
                                <ul>
                                    <li><a href="international-student-mobility-charter.php">English&nbsp;<img src="images/arrow_blue.gif"></a></li>
                                </ul>
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
//end of printStatements
function printGlobalDialogue() 
{
?>
<div class="left_row_wrapper">
    <div id="statements">
    	<h2 class="ribbon">Global Dialogue<a name="global-dialogue"></a></h2>
        <div class="statements_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span>Global Dialogue<a name="global-dialogue"></a></span></div>
            </div> -->
            <div class="content">
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9;</span><span class="title">Global Dialogue 2014 Declaration</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>We, the participants in the Global Dialogue, hosted by the &lsquo;International Education Association of South Africa&rsquo; (IEASA) on 15 &ndash; 17 January 2014 in Port Elizabeth, representing nine national, six regional and nine other organisations from around the world, with national, regional and global responsibilities, declare our commitment to emphasise the importance of decision&ndash;making and practices in the development of internationalisation activities that are imbued with ethical considerations and inclusivity.</p>
                        </div>
                    </div>
                    <div class="sub_feature_more"><span class="en"><a href="global-dialogue-2014-declaration.php">Read More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9;</span><span class="title">International HE associations call for global equity</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>Twenty-four international education organisations from across the world &ndash; including the giants in America and Europe and groups from Mexico and Japan, Africa, the Middle East and Latin America &ndash; gathered in South Africa last week for a first inclusive Global Dialogue.</p>
                        </div>
                    </div>
                    <div class="sub_feature_more"><span class="en"><a href="international-HE-associations-call-for-global-equity.php">Read More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
//end of printAboutGlobalDialogue()
function printAboutGlobalDialogue() 
{
?>
<div class="left_row_wrapper">
    <div id="statements">
    	<h2 class="ribbon">Global Dialogue<a name="global-dialogue"></a></h2>
        <div class="statements_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span>Global Dialogue<a name="global-dialogue"></a></span></div>
            </div> -->
            <div class="content">
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9;</span><span class="title">Global Dialogue 2014 Declaration</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>We, the participants in the Global Dialogue, hosted by the &lsquo;International Education Association of South Africa&rsquo; (IEASA) on 15 &ndash; 17 January 2014 in Port Elizabeth, representing nine national, six regional and nine other organisations from around the world, with national, regional and global responsibilities, declare our commitment to emphasise the importance of decision&ndash;making and practices in the development of internationalisation activities that are imbued with ethical considerations and inclusivity.</p>
                        </div>
                    </div>
                    <div class="sub_feature_more"><span class="en"><a href="global-dialogue-2014-declaration.php">Read More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
                <div class="sub_feature1">
                    <div class="sub_feature_label"><span class="icon">&#xf0c9;</span><span class="title">International HE associations call for global equity</span></div>
                    <div class="sub_feature_content">
                        <div>
                            <p>Twenty-four international education organisations from across the world &ndash; including the giants in America and Europe and groups from Mexico and Japan, Africa, the Middle East and Latin America &ndash; gathered in South Africa last week for a first inclusive Global Dialogue.</p>
                        </div>
                    </div>
                    <div class="sub_feature_more"><span class="en"><a href="international-HE-associations-call-for-global-equity.php">Read More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                </div>
                <div class="sub_feature1">
                	<div class="sub_feature_content">
                    	<p style="padding: 10px 0 0 0; text-align: center"><img src="images/photo/Global-Dialogue-Participants-January-2014-South-Africa.png" width="630px"/></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
// printAboutGlobalDialogue
function printCalendarMain() 
{
?>
<div class="left_row_wrapper">
    <div id="events">
    	<h2 class="ribbon">Upcoming Conferences</h2>
        <div class="events_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span>Upcoming Conferences</span></div>
            </div> -->
            <div class="content">
                <div class="main_event_container">
                	<p>The following conferences may be useful for faculty, staff, and students interested in international higher education.</p>
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
    	<h2 class="ribbon">Upcoming Conferences</h2>
        <div class="events_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span>Upcoming Conferences</span></div>
            </div> -->
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
    	<h2 class="ribbon"><a class="big_dark_blue_bold" href="#">Upcoming Conferences</a></h2>
        <div class="events_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Upcoming Conferences</a></span></div>
            </div> -->
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
                        <div class="label_wrapper"><span>Degree Training</span></div>
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
                        <div class="label_wrapper"><span>Research</span></div>
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
function printResourcesHome() 
{
?>
<div class="left_row_wrapper">
    <div id="resources">
    	<h2 class="ribbon">Find Resources</h2>
        <div class="resources_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span>Find Resources</span></div>
            </div> -->
            <div class="content">
            	<div class="home_resources_container">
                    <div class="resources_column"> 
                    	<div class="resources_photo"><img src="images/photo/get-involved.png"></div>
                        <div class="resources_label">University Programs</div>
                        <div class="resources_brief"><p>Learn about university programs including research and teaching focused on international higher education</p></div>
                        <div class="sub_feature_more"><span class="en"><a href="resources.php#university-programs">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                    </div> 
                    <div class="resources_column">
                    	<div class="resources_photo"><img src="images/photo/get-involved.png"></div>
                        <div class="resources_label">General Resources</div>
                        <div class="resources_brief"><p>Learn about providing support for research and administration of international higher education programs</p></div>
                        <div class="sub_feature_more"><span class="en"><a href="resources.php#general-resources">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                    </div> 
                    <div class="resources_column">   
                    	<div class="resources_photo"><img src="images/photo/get-involved.png"></div>   
                        <div class="resources_label">Colleges and Universities</div>
                        <div class="resources_brief"><p>Learn about colleges and universities around the world as well as a background on the system of higher education in many countries</p></div>
                        <div class="sub_feature_more"><span class="en"><a href="resources.php#colleges-universities">Learn More&nbsp;<img src="images/arrow_blue.gif"></a></span></div>
                    </div>                      
                </div>
                <div style="clear: left;"></div> 
            </div>            
        </div>
    </div>
</div>
<?php
}
function printResources() 
{
?>
<div class="left_row_wrapper">
    <div id="resources">
    	<h2 class="ribbon">Find Resources</h2>
        <div class="resources_wrapper">
            <!-- <div class="label">
                <div class="label_wrapper"><span>Find Resources</span></div>
            </div>-->
            <div class="content">
            	<div class="main_resources_container">
                    <div class="resources_column"> 
                        <div class="resources_label">University Programs<a name="university-programs"></a></div>
                        <div class="resources_brief"><p>The following university programs include research and teaching focused on international higher education.</p></div>
                        
                        <div class="resources_list">
                                    <p class="resources_program">International/Comparative Education</p>
                                    <ul>
                                        <li><a href="http://www.american.edu/cas/seth/index.cfm" target="_blank">American University</a></a></li>
                                        <li><a href="http://www.bc.edu/schools/lsoe/" target="_blank">Boston College</a></a></li>
                                        <li><a href="http://www.bu.edu/sed/" target="_blank">Boston University</a></a></li>
                                        <li><a href="http://www.coe.fsu.edu/" target="_blank">Florida State University</a></li>
                                        <li><a href="http://gsehd.gwu.edu/" target="_blank">George Washington University</a></li>
                                        <li><a href="http://www.gse.harvard.edu/" target="_blank">Harvard University</a></li>
                                        <li><a href="https://education.indiana.edu/" target="_blank">Indiana University Bloomington</a></li>
                                        <li><a href="http://www.luc.edu/education/" target="_blank">Loyola University of Chicago</a></li>
                                        <li><a href="http://steinhardt.nyu.edu/" target="_blank">New York University</a></li>
                                        <li><a href="https://www.odu.edu/education" target="_blank">Old Dominion University</a></li>
                                        <li><a href="http://www.ed.psu.edu/educ/" target="_blank">Pennsylvania State University</a></li>
                                        <li><a href="https://ed.stanford.edu/" target="_blank">Stanford University</a></li>
                                        <li><a href="http://www.tc.columbia.edu/" target="_blank">Teachers College, Columbia University</a></li>
                                        <li><a href="http://ehe.osu.edu/" target="_blank">The Ohio State University</a></li>
                                        <li><a href="http://www.albany.edu/education/" target="_blank">University at Albany, State University of New York</a></li>
                                        <li><a href="http://gseis.ucla.edu/" class="medium_box_link" target="_blank">University of California Los Angeles</a></a></li>
                                        <li><a href="http://www.education.umd.edu/" target="_blank">University of Maryland</a></li>
                                        <li><a href="http://www.umass.edu/education/" target="_blank">University of Massachusetts Amherst</a></li>
                                        <li><a href="http://www.cehd.umn.edu/" target="_blank">University of Minnesota</a></li>
                                        <li><a href="http://www.education.pitt.edu/default.aspx" target="_blank">University of Pittsburgh</a></li>
                                        <li><a href="http://www.usfca.edu/soe/" target="_blank">University of San Francisco</a></li>
                                    </ul>
                                    
                                    <p class="resources_program">International Relations/Communication</p>
                                    <ul>
                                        <li><a href="http://www.lesley.edu/" target="_blank">Lesley University</a></li>
                                        <li><a href="http://www.sit.edu/" target="_blank">School for International Training</a></li>
                                        <li><a href="http://www.umaryland.edu/" target="_blank">University of Maryland, Baltimore County</a></li>
                                        <li><a href="http://www.pacific.edu/" target="_blank">University of the Pacific (International Communications Institute)</a></li>
                                    </ul>
                                </div>
                        <div class="divider"></div>
                    </div> 
                    
                    <div class="resources_column">
                        <div class="resources_label">General Resources<a name="general-resources"></a></div>
                        <div class="resources_brief"><p>The following resources provide support for research and administration of international higher education programs.</p></div>
                        <div class="divider"></div>
                    </div> 
                    
                    <div class="resources_column">   
                        <div class="resources_label">Colleges and Universities<a name="colleges-universities"></a></div>
                        <div class="resources_brief"><p><p><a href="http://uniworldwide.com">The Worldwide Colleges and Universities</a> website provides links to colleges and universities around the world as well as background on the system of higher education in many countries.</p></div>
                        <div class="resources_list">
                        </div>
                        
                    </div>                      
                </div>
            </div>            
        </div>
    </div>
</div>
<?php
}

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
                            <p>To move international higher education collaboration forward, we plan to include additional higher education associations and organizations representing additional countries and regions around the world.  Please contact us with suggestions for additional associations to include in this effort.</p>
                        </div>
                        <div class="sub_feature_more"> <span class="en"> <a href="#" class="contact_us">Contact Us&nbsp;<img src="images/arrow_blue.gif"></a> </span> </div>
                        
                        <div class="contact_form">
                        	<!-- <iframe class="contact_form_frame" src="form.php" scrolling="no" frameborder="0"></iframe> -->
                            <?php printForm() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
function printForm() {
?>
<div class="form_container">
	<div class="form_wrapper">
    	
        <form id="form" action="submit.php" method="post">
            <section>
                <div id="name-group" class="row_wrapper">
                    <label for="name"><span>Name*:</span></label>
                    <input placeholder="Your name" type="text" name="name" required>                    
                </div>
                <div id="email-group" class="row_wrapper">
                    <label for="email"><span>Email*:</span></label>
                    <input placeholder="Email address" type="email" name="email" required>
                    
                </div>
                <div id="institution-group" class="row_wrapper">
                    <label for="institition"><span>Institution:</span></label>
                    <input placeholder="Institution name" type="text" name="institution">                   
                </div>
                <div id="department-group" class="row_wrapper">
                    <label for="department"><span>Department:</span></label>
                    <input placeholder="Department name" type="text" name="department">                   
                </div>                
                <div id="message-group" class="row_wrapper">
                    <label for="comment"><span>Message*:</span></label>
                    <textarea placeholder="Send us a message" name="comment" recquired></textarea>                    
                </div>                
            </section>
            <section>
                <div class="row_wrapper">
                    <button name="submit" type="submit" id="submit">Submit</button>
                </div>
            </section>            
        </form>
        <div class="alert">Note: * Fields are required</div>
    </div>   
</div>
<?php	
}
function printRightContentHome() 
{
?>
<div>
	<?php printGetInvolved() ?>
    <div class="right_row partners_home">
        <div class="right_row_wrapper">
            <div class="right_content_top">
                <div class="label">
                    <div class="label_wrapper">Our Key Partners</div>
                </div>
            </div>
            <div class="right_content_middle">
                <div class="col_box">
                    <div class="col_bar">
                        <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold"> International Higher Education Associations<a name="higher-education-associations"></a></span> </div>
                    </div>
                    <div class="col_content">
                        <?php echo getAssociation("current")?>
                    </div>
                
                    <div class="col_bar">
                        <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold">International Higher Education Organizations</span> </div>
                    </div>
                    <div class="col_content">
                        <?php echo getAssociation("others")?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php printUniProgram() ?>
</div>

<?php
}
function printRightContent() 
{
?>
<div>
	<?php printGetInvolved() ?>
    <div class="right_row partners">
        <div class="right_row_wrapper">
            <div class="right_content_top">
                <div class="label">
                    <div class="label_wrapper">Our Key Partners</div>
                </div>
            </div>
            <div class="right_content_middle">
                <div class="col_box">
                    <div class="col_bar">
                        <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold"> International Higher Education Associations<a name="higher-education-organizations"></a></span> </div>
                    </div>
                    <div class="col_content">
                        <?php echo getAssociation("current")?>
                    </div>
                
                    <div class="col_bar">
                        <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold">International Higher Education Organizations</span> </div>
                    </div>
                    <div class="col_content">
                        <?php echo getAssociation("others")?>
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