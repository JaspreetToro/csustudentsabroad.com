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
	$country_name = "Worldwide";
?>

<div id="wrapper">
<div id="main-content">
    <div id="scroller"> <?php printSlider() ?>
        <div class="featured">
            <div class="wrapper">
                <div class="student-handbook sh-gradient sh-corner"><a href="student-handbook.php" class="icon5">View Student Handbooks</a></div>
            </div>
            <div class="wrapper">
                <div class="program-search  ps-gradient ps-corner"><a href="program-search.php" class="icon6">Use Program Search</a></div>
            </div>
        </div>
        <div id="sponsor"> <?php printBannerSponsor() ?>
            <?php //printSponsor() ?>
        </div>
        <!-- End of mainnavigation -->
        <div class="highlight">
            <div class="student-handbook">
                <div class="title sh-gradient sh-corner-top">
                    <div class="country"><span class="label"><?php echo $country_name?></span> </div>
                    <div class="country-sh">Student Handbook</div>
                </div>
            </div>
        </div>
        <div class="sub-navigation-wrapper"> <?php printHomeNav("General"); ?> </div>
        <div id="featured-sponsor">
        	<?php 
				$main_box_count = 1;
				$main_count_MAX = 3;//MAX count Boxes
				printSponsor($country_name, $main_box_count, $main_count_MAX);
			?>
        </div>
    </div>
</div>
<?php
}
?>
