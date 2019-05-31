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
        <div id="content">
        	<h1 id="title">Contact Us</h1>
            <p>Center for Global Education<br />
                UCLA Graduate School of Education &amp; Information Studies<br />
                8907 Math Sciences Building<br />
                BOX 951521<br />
                Los Angeles, California 90095-1521<br />
                Telephone: 310-206-5376<br />
                Fax: 310-206-6293<br />
                Email: grhodes@globaled.us</p>
        </div>
    </div>
    <div id="sponsor"> <?php printBannerSponsor() ?> </div>
</div>
<?php
}
?>
