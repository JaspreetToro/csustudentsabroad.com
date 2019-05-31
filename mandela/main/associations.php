<?php 
include "lib/common.php";

//***************************************************main function***************************************************************

printHeader(6, "Associations");
printBody();
printFooter(1);

//***************************************************end of main function*******************************************************
function printContent()
{
?>
<div class="left_row">
    <div class="left_row_wrapper">
        <div id="about_associations">
        	<h2 class="ribbon">International Higher Education Associations</h2>
            <div class="about_wrapper">
                <!-- <div class="label">
                    <div class="label_wrapper"><span>International Higher Education Associations</span></div>
                </div> -->
                <div class="content">
                    <div class="about_description">
                        <p>The following associations support international higher education collaboration</p>
                    </div>
                    <div class="association_list"> <?php echo getAssociation("current") ?> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="left_row">
    <div class="left_row_wrapper">
        <div id="about_organizations">
        	<h2 class="ribbon">International Higher Education Associations</h2>
            <div class="about_wrapper">
                <!-- <div class="label">
                    <div class="label_wrapper"><span>International Higher Education Organizations</span></div>
                </div> -->
                <div class="content">
                    <div class="about_description">
                        <p>The following organizations support international higher education collaboration</p>
                    </div>
                    <div class="association_list"> <?php echo getAssociation("others") ?> </div>
                </div>
            </div>
        </div>
    </div>
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
                    <h1 class="home">UniWorldWide: International Higher Education Collaboration</h1>
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
            <?php printRightContent() ?>
        </div>
    </div>
</div>
<!-- end of content -->
<?php
}
//end of printBody
?>
