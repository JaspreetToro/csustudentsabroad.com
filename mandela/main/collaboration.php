<?php 
include "lib/common.php";

//***************************************************main function***************************************************************
$pageTitle = "Collaboration";

printHeader(3, $pageTitle);
printBody();
printFooter(1);

//***************************************************end of main function*******************************************************
function printContent() 
{
	global $pageTitle;
?>
<div class="left_row">
    <div class="left_row_wrapper">
        <div id="about">
        	<h2 class="ribbon"><?php echo $pageTitle ?></h2>
            <div class="about_wrapper">
                <!-- <div class="label">
                    <div class="label_wrapper"><span><?php echo $pageTitle ?></span></div>
                </div> -->
                <div class="content">
                    <div>
                        <p>We are asking colleagues at higher education associations around the world to review both of the following documents to expand the dialogue on the future or international higher education.  We hope that colleagues can also provide translated versions of these documents, so that they can be reviewed in the first language of those interested in international higher education collaboration. On the top right corner of this website, you can "Select a Language" to view the website content in a variety of other languages. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="left_row"> <?php printStatements() ?> </div>
<?php
}

function printBody()
{
		global $user;
		global $pageTitle;
?>

<div id="content">
    <div id="featured_content">
        <div class="left_content">
            <div>
                <div class="left_content_top">
                    <h1 class="home"><?=WEBNAME?></h1>
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
