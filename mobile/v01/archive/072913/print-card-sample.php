<?php 
//session_start();

include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$country_name = ucwords($_GET['country']);	
$page_name = "Emergency Card";
$parent_name = "Study Abroad Student Handbook";
$menu = 2;

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

printHeader($page_name." - ".$parent_name, $menu, $country_name);
printBody();
printFooter();

function printBody() {
	global $country_title;
?>

<div id="wrapper_tier2">
    <div id="main-content">
        <div class="country"> <span class="flag"><img class="country-flag" width="47px" height="26px" alt="<?php echo $country_title?>" src="handbook/images/country-flag/<?php echo $country_title?>-flag.gif" /></span> &nbsp;<span class="label"><?php echo $country_title?></span> </div>
        <div class="highlight">
            <div class="student-handbook">
                <div class="title sh-gradient sh-corner-top">Study Abroad<br />
                    Student Handbook</div>
            </div>
        </div>
        <div id="scroller">
            <div id="content">
                <div>
                    <div id="actual_content">
                        <h1 id="title">Emergency Card</h1>
                        <div id="content_container">
                            <p>Print out the Emergency Card. Fill it in. Leave a copy with your U.S. emergency contacts, with your abroad emergency contacts, and keep a copy with you at all times.</p>
                            <p>* Required information</p>
                            <div id="emergency-card">
                                <div class="form-step"> </div>
                                <div class="form-instruction"> </div>
                                <div class="emergency-card-form">
                                    <div class="card-container">
                                        <img src="step1-card.php" alt="Student Information" />
                                    </div>
                                    <div class="card-container">
                                        <img src="step2-card.php" alt="Medical and Primary Contact Information" />
                                    </div>
                                    <div class="card-container">
                                        <img src="step3-card.php" alt="Secondary Contact Information" />
                                    </div>
                                    <div class="card-container">
                                        <img src="step4-card.php" alt="Insurance and Abroad/On-site Program Information" />
                                    </div>
                                    <div class="card-container">
                                        <img src="step5-card.php" alt="Home Campus and U.S. Embassy Information" />
                                    </div>
                                    <div class="card-container">
                                        <img src="step6-card.php" alt="Nearest Hospital and Abroad Housing Information" />
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
<?php } ?>
