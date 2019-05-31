<?php 
include "lib/common.php";

//***************************************************main function***************************************************************
$pageTitle = "Conferences";
printHeader(5, $pageTitle);
printBody();
printFooter(1);

//***************************************************end of main function*******************************************************
function printContent()
{
?>
<div class="left_row">
    <div class="left_row_wrapper">
        <?php printCalendarMain() ?>
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
