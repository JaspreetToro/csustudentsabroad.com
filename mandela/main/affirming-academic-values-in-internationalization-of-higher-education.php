<?php 
include "lib/common.php";

//***************************************************main function***************************************************************
$pageTitle = "Collaboration";
$subPageTitle = "Statements on Internationalization";

printHeader(3, $pageTitle. " - " . $subPageTitle);
printBody();
printFooter(1);

//***************************************************end of main function*******************************************************
function printContent() 	
{
	global $pageTitle, $subPageTitle;
?>
<div class="left_row">
    <div class="left_row_wrapper">
        <div id="global">
        	<h2 class="ribbon"><a href="about.php"><?php echo $pageTitle; ?></a> | <?php echo $subPageTitle; ?></h2>
            <div class="global_wrapper">
                <!-- <div class="label">
                    <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="about.php"><?php //echo $pageTitle; ?></a> | <a class="big_dark_blue_bold" href="#"><?php //echo $subPageTitle; ?></a></span></div>
                </div> -->
                <div class="content">
                    <div>
                        <div class="sub_feature_more">
                            <div class="en">
                                <div class="read">Read in &nbsp;<img src="images/arrow_blue.gif"> </div>
                                <div class="read_lang">
                                    <ul>
                                        <li><a href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=en">English</a></li>
                                        <li><a href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=fr">French</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
						$language = htmlspecialchars($_GET["lang"]);
						
						if ($language == "en") {
							include "articles/IAU-en.html";
						} elseif ($language == "fr"){	
							include "articles/IAU-fr.html";
						} else {
							include "articles/IAU-en.html";
						}
						?>
                    </div>
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
