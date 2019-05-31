<?php 
include "lib/common.php";

//***************************************************main function***************************************************************

printHeader(4, "Events");
printBody();
printFooter(1);

//***************************************************end of main function*******************************************************


function printBody()
{
		global $user;
?>

<div id="content">
    <div id="featured_content">
        <div class="left_content">
            <div>
                <div class="left_content_top">
                    <h1 class="home">UniWorldWide: International Higher Education Association</h1>
                </div>
                <div class="left_content_middle">
                    <div class="left_row_home">
                        <div class="left_row_wrapper">
                            <?php printBanner() ?>
                        </div>
                    </div>
                    <div class="left_row">
                        <div class="left_row_wrapper">
                            <?php printCalendarMain() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle_content"></div>
        <div class="right_content">
            <div>
                <?php printGetInvolved() ?>
                <div class="right_row">
                    <div class="right_row_wrapper">
                        <div class="right_content_top">
                            <div class="label">
                                <div class="label_wrapper">Our Key Partners</div>
                            </div>
                        </div>
                        <div class="right_content_middle">
                            <div class="col_box">
                                <div class="col_bar">
                                    <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold"> International Higher Education Associations</span> </div>
                                </div>
                                <div class="col_content">
                                    <?php echo getAssociation("current")?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of content -->
<?php
}
//end of printBody
?>
