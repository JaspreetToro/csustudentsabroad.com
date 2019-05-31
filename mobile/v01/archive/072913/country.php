<?php		
include "lib/common.php";
include "lib/conn_data.php";

// get country name
$country_name = ucwords($_GET['name']);	
$page_name = "Study Abroad Student Handbook";
$menu = 1;

if (empty($country_name)) {
	$country_name = "General";		  
}
	
if ($country_name == "General") {
	$country_title = "Worldwide";
	$page_name = $country_title." ".$page_name;
} elseif ($country_name == "Worldwide") {
	$country_name = "General";
	$country_title = "Worldwide";
	$page_name = $country_title." ".$page_name;
} else {
	$country_title = $country_name;	
	$page_name = $country_title ." ".$page_name;
}

//***************************************************main function**************************************************************

//$page_name = $country_name." "."Study Abroad Student Handbook";

printHeader($page_name, $menu, "");
printBody();
printFooter();

//***************************************************end of main function*******************************************************	
function printBody() {
global $page_name;
global $country_name, $country_title;
?>
<div id="wrapper">
	<div id="main-content">
		<div class="country">
            <span class="flag"><img class="country-flag" width="47px" height="26px" alt="<?php echo $country_title; ?>" src="/handbook/images/country-flag/<?php echo $country_title; ?>-flag.gif" /></span> &nbsp;<span class="label"><?php echo $country_title; ?></span>
        </div>
        <div class="highlight">
        	<div class="student-handbook">
            	<div class="title sh-gradient sh-top-corner">Study Abroad Student Handbook</div>
            </div>
        </div>
        <div id="scroller">      
            <div class="sub-navigation-wrapper">
                <?php printSubNav($country_name); ?>
            </div>
            <!-- End of mainnavigation -->
        </div>
        <div id="sponsor">
            <?php printBannerSponsor() ?>
        </div> 
    </div>
<?php
}

function printMainMenu($country_name) {
global $country_name;	
?>
<ul>
    <li><a href="handbook/introduction.php?country=<?php echo $country_name?>">Understanding Study Abroad</a></li>
    <li><a href="handbook/begin-program-search.php?country=<?php echo $country_name?>">Choosing a Program</a></li>
    <li><a href="handbook/pre-departure-planning.php?country=<?php echo $country_name?>">Practical Information</a></li>
    <li><a href="handbook/basic-health-and-safety.php?country=<?php echo $country_name?>">Health and Safety</a></li>
    <li><a href="handbook/airport-procedures.php?country=<?php echo $country_name?>">Coming Home</a></li>
    <li><a href="handbook/questions.php?country=<?php echo $country_name?>">Tools for Planning</a></li>
</ul>
<?php } ?>

