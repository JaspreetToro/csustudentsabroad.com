<?php 
include "lib/common.php";

//***************************************************main function***************************************************************

printHeader(1, "Home");
printBody();
printFooter(0);

//***************************************************end of main function*******************************************************
function printContent()
{
?>
<div class="left_row">
    <div class="left_row_wrapper">
        <div id="about">
        	<h2 class="ribbon">Welcome to UniWorldWide.org</h2>
            <div class="about_wrapper">
                <!-- <div class="label">
                    <div class="label_wrapper"><span>Welcome to UniWorldWide</span></div>
                </div> -->
                
                <div class="content">
                    <div class="about_description">
                        <p><a href="http://uniworldwide.org">UniWorldWide.org</a> has been developed to help carry out the mission of the Global Dialogue on the Future of Internationalisation of Higher Education which took place in January 2014 at Nelson Mandela Bay in South Africa. This resource supports the desire of participants to be more inclusive and expand the discussion to representatives of higher education associations around the world to support information sharing and develop common goals and methods for internationalisation.</p>
                    </div>
                    <div class="sub_feature_more"> <span class="en"> <a href="about.php">Why UniWorldWide&nbsp;<img src="images/arrow_blue.gif"></a> </span> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="left_row">
    <?php printStatements() ?>
</div>
<div class="left_row">
    <?php printGlobalDialogue() ?>
</div>
<div class="left_row">
    <?php printCalendarHome() ?>
</div>
<div class="left_row">
    <?php printResourcesHome() ?>
</div>
<?php
}

function printBody()
{
		global $user;
?>

<div id="content">
    <div id="featured_content">
        <div class="left_content">
            <div>
                <div class="left_content_top">
                    <h1 class="home_quote"><?=WEBNAME?></h1>
                </div>
                <div class="left_content_middle">
                    <div class="left_row_home">
                        <div class="left_row_wrapper">
                            <?php printBanner() ?>
                        </div>
                    </div>
                    <?php printContent() ?>
                </div>
            </div>
        </div>
        <div class="middle_content"></div>
        <div class="right_content">
            <?php printRightContentHome() ?>
        </div>
    </div>
</div>
<!-- end of content -->
<?php
}
//end of printBody
?>
