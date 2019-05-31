<?php 
include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$page_name = "Home";
$pageTitle = "";
$menu = 1;

printHeader($page_name, $menu, "");
printBody();
printFooter();

//***************************************************end of main function*******************************************************
function printBody() {
?>
<div id="wrapper">
	<div id="main-content">
        <div id="scroller">     
            <?php printSlider() ?>   
            <div class="featured">
            	<div class="wrapper">
            		<div class="student-handbook sh-gradient sh-corner"><a href="student-handbook.php" class="icon5">Student Handbooks</a></div>
                </div>
                <div class="wrapper">
                	<div class="program-search  ps-gradient ps-corner"><a href="program-search.php" class="icon6">Program Search</a></div>
            	</div>
            </div>
            <!-- End of mainnavigation -->
            <div class="highlight">
                <div class="student-handbook">
                    <div class="title sh-gradient sh-top-corner">Worldwide Study Abroad<br />Student Handbook</div>
                </div>
            </div>
            <div class="sub-navigation-wrapper">
                
            	<?php printHomeNav("General"); ?>
			</div>
        </div>       
        <div id="sponsor">
            <?php printBannerSponsor() ?>
            <?php //printSponsor() ?>
        </div>
    </div>  
<?php
}
?>