<?php 
include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$page_name = "Country&ndash;Specific Student Handbooks";
$menu = 1;

printHeader($page_name, $menu, "");
printBody();
printFooter();

//***************************************************end of main function*******************************************************
function printBody() {
global $page_name;

?>
<div id="wrapper">
	<div id="main-content">
        <div class="highlight">
        	<div class="student-handbook">
            	<div class="title sh-gradient sh-top-corner">Country&ndash;Specific<br />Student Handbooks</div>
            </div>
        </div>
        <div id="scroller">      
            <div class="main-navigation nav-corner-bottom">
                <?php printCountryMenu() ?>
            </div>
            <!-- End of mainnavigation -->
        </div>
        <div id="sponsor">
            <?php printBannerSponsor() ?>
        </div> 
    </div>
<?php
}
?>
<?php
function printCountryMenu() {
?>
<ul>
    <li><a href="country.php?name=General">Worldwide</a></li>
    <li><a href="country.php?name=Argentina">Argentina</a></li>
    <li><a href="country.php?name=Australia">Australia</a></li>
    <li><a href="country.php?name=Austria">Austria</a></li>
    <li><a href="country.php?name=Belgium">Belgium</a></li>
    <li><a href="country.php?name=Belize">Belize</a></li>
    <li><a href="country.php?name=Botswana">Botswana</a></li>
    <li><a href="country.php?name=Brazil">Brazil</a></li>
    <li><a href="country.php?name=Canada">Canada</a></li>
    <li><a href="country.php?name=Chile">Chile</a></li>
    <li><a href="country.php?name=China">China</a></li>
    <li><a href="country.php?name=Costa Rica">Costa Rica</a></li>
    <li><a href="country.php?name=Cuba">Cuba</a></li>
    <li><a href="country.php?name=Czech Republic">Czech Republic</a></li>
    <li><a href="country.php?name=Denmark">Denmark</a></li>
    <li><a href="country.php?name=Dominican Republic">Dominican Republic</a></li>
    <li><a href="country.php?name=Ecuador">Ecuador</a></li>
    <li><a href="country.php?name=Egypt">Egypt</a></li>
    <li><a href="country.php?name=Finland">Finland</a></li>
    <li><a href="country.php?name=France">France</a></li>
    <li><a href="country.php?name=Germany">Germany</a></li>
    <li><a href="country.php?name=Ghana">Ghana</a></li>
    <li><a href="country.php?name=Greece">Greece</a></li>
    <li><a href="country.php?name=Guatemala">Guatemala</a></li>
    <li><a href="country.php?name=Hungary">Hungary</a></li>
    <li><a href="country.php?name=India">India</a></li>
    <li><a href="country.php?name=Ireland">Ireland</a></li>
    <li><a href="country.php?name=Israel">Israel</a></li>
    <li><a href="country.php?name=Italy">Italy</a></li>
    <li><a href="country.php?name=Japan">Japan</a></li>
    <li><a href="country.php?name=Jordan">Jordan</a></li>
    <li><a href="country.php?name=Kenya">Kenya</a></li>
    <li><a href="country.php?name=Mexico">Mexico</a></li>
    <li><a href="country.php?name=Morocco">Morocco</a></li>
    <li><a href="country.php?name=Netherlands">Netherlands</a></li>
    <li><a href="country.php?name=New Zealand">New Zealand</a></li>
    <li><a href="country.php?name=Nicaragua">Nicaragua</a></li>
    <li><a href="country.php?name=Norway">Norway</a></li>
    <li><a href="country.php?name=Peru">Peru</a></li>
    <li><a href="country.php?name=Portugal">Portugal</a></li>
    <li><a href="country.php?name=Russia">Russia</a></li>
    <li><a href="country.php?name=South Africa">South Africa</a></li>
    <li><a href="country.php?name=South Korea">South Korea</a></li>
    <li><a href="country.php?name=Spain">Spain</a></li>
    <li><a href="country.php?name=Sweden">Sweden</a></li>
    <li><a href="country.php?name=Switzerland">Switzerland</a></li>
    <li><a href="country.php?name=Thailand">Thailand</a></li>
    <li><a href="country.php?name=Turkey">Turkey</a></li>
    <li><a href="country.php?name=United Kingdom">United Kingdom</a></li>
    <li class="last"><a href="country.php?name=United States">United States</a></li>
</ul>
<?php }?>