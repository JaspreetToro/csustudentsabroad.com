<?php 
include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$page_name = "About";
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
        <div id="content">
        	<h1 id="title">Support</h1>
            <div class="sponsors"><img src="../sponsor/images/Sponsorship-v010813.jpg" alt="Support StudentsAbroad.com" /></div>
        </div>
    </div>
    <div id="sponsor"> <?php printBannerSponsor() ?> </div>
</div>
<?php
}
?>
