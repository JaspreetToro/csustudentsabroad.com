<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no; initial-scale=1.0; maximum-scale=1.0; width=device-width" />
<title>Mobile - Home</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script src="js/general.js" type="text/javascript"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="logo"><a href=""><img src="images/logo.png" border="0" width="234"></a></div>
    <p><a href="#" ><img src="images/contact-icon.png"></a></p>
</div>
<!-- End of header -->
<div id="search_bar">
    <div id="search_bar_div">
        <form name="IronPointForm" id="IronPointForm" action="http://www.lmu.edu/resources/LMU_Search.htm" .method="get">
            <script type="text/javascript">
                var googlehasfocus
                function SubmitGoogleForm()
                { 
                if (googlehasfocus){
                if (googlehasfocus.name=='q' || googlehasfocus.name=='googlesearchbutton')
                {
                document.forms[0].__VIEWSTATE.name='NOVIEWSTATE';
                document.forms.item('IronPointForm').method='get';
                document.forms.item('IronPointForm').action='http://www.lmu.edu/resources/LMU_Search.htm';
                document.forms.item('IronPointForm').submit(); 
                }
                }
                };
                </script>
            <input class="textfield" id="q" name="q" size="22" onFocus="if(this.value=='search')this.value='';javascript: googlehasfocus=this;" onKeyDown="javascript: if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {SubmitGoogleForm();};" value="search" />
            <input class="button-go" id="btnLMUSearch" onClick="JavaScript: SubmitGoogleForm();" src="images/transparent.gif" width="40" height="18" type="image"  />
            <input id="Hidden1" name="sitesearch" type="hidden" value="lmu.edu" />
        </form>
    </div>
</div>
<!-- End of search_bar -->
<div id="wrapper">
    <div id="scroller">
        <div id="banner_container">
            <div id="banner_window">
                <div id="banners">
                    <div id="banner1" class="banner_item"> <a href="#"><img src="images/SA-Slide-PS.png"  /></a> </div>
                    <!-- End of banner item -->
                    <div id="banner2" class="banner_item"> <a href="#"><img src="images/SA-Slide-GH.png"  /></a> </div>
                    <!-- End of banner item -->
                    <div id="banner3" class="banner_item"> <a href="#"><img src="images/SA-Slide-CSH.png" /></a> </div>
                    <!-- End of banner item -->
                </div>
                <!-- End of banner_window -->
            </div>
            <!-- End of banners -->
            <div id="banner_nav_container">
                <div style="clear:both"></div>
                <ul>
                    <li id="banner1_link" class="banner_link"></li>
                    <li id="banner2_link" class="banner_link"></li>
                    <li id="banner3_link" class="banner_link"></li>
                </ul>
            </div>
        </div>
        <!-- End of banner_container -->
        <div class="main-navigation">
            <ul>
                <li><a href="student-handbook.php">Country Specific Student Handbook</a></li>
                <li><a href="country.php?name=General">General Student Handbook</a></li>
                <li><a href="#">Program Search</a></li>
                <li><a href="#">Quick Links</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
        <!-- End of mainnavigation -->
    </div>
    <div id="sponsor"> <a href="#"><img src="images/sponsors/banner-ISA.gif"></a> </div>
    <div id="footer">
        <div id="footer_link"> <a href="#">&copy;2013 CGE</a>&nbsp;|&nbsp;<a href="#" id="goto_fullsite">Full Site</a>&nbsp;|&nbsp;<a href="#">Contact</a>&nbsp;|&nbsp;<a href="#">Support</a> </div>
        <div id="social_media_div">
            <div class="social_media_icon"> <a href="#" target="_blank"><img src="images/icon-facebook.png"></a> </div>
            <div class="social_media_icon"> <a href="#" target="_blank"><img src="images/icon-twitter.png"></a> </div>
        </div>
        <!-- end of social_media_div -->
    </div>
    <!-- End of footer -->
</div>
<!-- End of wrapper -->
</body>
</html>