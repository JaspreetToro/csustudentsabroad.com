<?php 
include "lib/common.php";
include "lib/common_array.php";
include "lib/sponsors_array.php";

//***************************************************main function***************************************************************
printHeader(4, "Featured Programs: Options Around the World");
printBody();
printFooter();

//***************************************************end of main function*******************************************************


function printBody()
{
global $user;
global $COUNTRY_SPONSORS;
global $SPONSORS;
global $COUNTRY_LEAD_SPONSOR;

global $main_sponsors;
global $sub_sponsors;
global $lead_sponsors;

global $banner;

global $country_status;
$country_status = $_GET["country"];

if ($country_status == "") {
	$country_status = "General";	
}

try {
	if (!isset($country_status)) {
		throw new Exception("country name is not specified");
	}
	
	$country_option = ucfirst($country_status);



?>

<div id="content">
<div id="top_header_container">
    <div class="student_handbook_header_container">
        <div class="sh_header_left_container">
            <div class="featured_program_header">
                <div class="featured_program_header_text">Featured Programs</div>
            </div>
        </div>
        <div class="sh_header_middle_container"></div>
        <div class="sh_header_right_container">
        <div class="sh_header_sponsor">
        <?php
		/* lead ponsors */
		$box_count = 1;
		//$count_MAX = 5;
		$count_MAX = 1;
		
		while ($box_count <= $count_MAX){
			get_lead_sponsor2("General", $box_count);
			echo $lead_sponsors[0];
			$box_count++;
		}
		?>
        </div>
    </div>
</div>
</div>
    
    <div id="left_content">
        <div id="left_content_top"></div>
        <div id="left_content_middle">
            <div id="fp_container">
                <div id="left_content_main_top">
                    <div class="fp_title">
                        <h1 class="huge_light_blue_bold">Featured Programs</h1>
                    </div>
                    <div class="fp_description">
                        <p> Below, you will find information about Center for Global Education sponsors who host study abroad programs or provide services for study abroad students in various countries around the world. In which of the countries below will you find a program that meets your needs? </p>
                    </div>
                </div>
                <div id="s_left_content_main_bottom">
                    <div id="sponsors_option">
                        <div id="sponsors_form_container">
                            <form name="sponsors_searchForm" method="get" action="" onsubmit="return validateFeaturedProgram();" class="sponsors_form">
                                <div class="sponsors_select_container">
                                    <div class="sponsors_country">
                                        <div class="sponsors_label">
                                            <label for="sponsors_selProgCntry">Select A Country</label>
                                        </div>
                                        <div class="sponsors_list">
                                            <select name="country" id="sponsors_selProgCntry">
                                              <?php getCountryOption(); ?>  
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="sponsors_search_button">
                                        <input type="image" name="btnSubmit" src="/images/search_button_lblue.gif" alt="Search" title="Search"/>
                                    </div>
                                    <div class="sponsors_bottom"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="sponsors_container">
                        <ul class="s_list">
                            <?php
							if (!empty($country_option)){
								foreach($COUNTRY_SPONSORS as $program){
									if ($program['country'] == $country_option) {
										printFeaturedProgramList($program);
									}
								} 
							} else {
                            	foreach($COUNTRY_SPONSORS as $program){
									if ($program['country'] == "General") {
										printFeaturedProgramList($program);
									}
								}
							}
							?>
                        </ul>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="left_content_bottom"></div>
    </div>
    <!-- end of left_content -->
    <div id="middle_content"></div>
    <div id="right_content">
        <div id="right_content_top_gold_sm"></div>
        <div id="right_content_middle_sm">
            <div id="box2_top_sm" title="COUNTRY SPECIFIC STUDENT HANDBOOKS">
                <span class="box_title">
                    COUNTRY SPECIFIC STUDENT HANDBOOKS
                </span>
                <div id="country_specific_title_container_sm">
                    <div class="country_specific_title1_sm">Country Specific</div>
                    <div class="country_specific_title2_sm">Student Handbooks</div>
                </div> 
            </div>
            <div id="student_handbooks_form_sm">
                <form name="pch_searchForm" method="get" action="" onsubmit="return validateCountry();" class="pch_form">
                    <div class="pch_select_container">
                        <div class="pch_country">
                            <div class="pch_label">
                                <label for="pch_selProgCntry">Select A Country</label>
                            </div>
                            <div class="pch_list">
                                <select name="country" id="pch_selProgCntry">
									<?php printCountryOption(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="pch_search_button">
                            <input type="image" name="btnSubmit" src="/images/search_button_gold.gif" alt="Search" title="Search"/>
                        </div>
                        <div class="pch_bottom"></div>
                    </div>
                </form>
            </div>
            <div id="sponsors">
                <div id="sponsors_title_container">
                    <div class="sponsors_title"> Sponsors </div>
                </div>
                <div id="sponsors1_container">
                    <div>
                    	<?php
						/* main sponsors */
						$box_count = 1;
						//$count_MAX = 5;
						$count_MAX = 2;
						
						while ($box_count <= $count_MAX){
						?>
                        <div id="main_sponsors_featured<?php echo $box_count;?>">	
                        <?php
							get_main_sponsor2("General_Featured", $box_count);
							echo $main_sponsors[0];
							$box_count++;
						?>
                        </div>
                        <?php
                        }
						?>
                    </div>
                </div>
                <div id="sponsors_bar"></div>
                <div id="sponsors2">
                    <div id="main_sub_sponsors_featured">
                    	<div id="sponsors_list">
                        <ul>
                        <?php
						/* subsponsors */
						$box_count = 1;
						//$count_MAX = 5;
						$count_MAX = 1;
						
						while ($box_count <= $count_MAX){
							get_sub_sponsor2("General", $box_count);
							echo $sub_sponsors[0];
							$box_count++;
                        }
						?>
                        </ul>
                        </div>                    
                    </div>
                </div>
            </div>
            
            <div id="program_search_sm">
                <div id="program_search_top" title="STUDY ABROAD PROGRAM SEARCH">
                    <span class="program_search_title">
                        STUDY ABROAD PROGRAM SEARCH
                    </span>
                    <div id="program_search_title_container_sm">
                        <div class="program_search_title1_sm">Study Abroad</div>
                        <div class="program_search_title2_sm">Program Search</div>
                    </div>
                </div>
                <div id="program_search_middle"> <?php printProgramSearchForm() ?> </div>
                <div id="program_search_bottom"></div>
            </div>
        </div>
        <!-- end of right_content_middle -->
        <div id="right_content_bottom"></div>
    </div>
    <!-- end of right_content -->
</div>
<!-- end of content -->

<?php
	} catch (Exception $ex) {
        redirect_to_general();
	}
}
//end of printBody

function printFeaturedProgramList(&$program){
global $SPONSORS;
?>
<li>
    <div class="s_box_container">
        <div class="s_box_top"></div>
        <div class="s_box_content">
            <div class="s_box_country">
                <?php if ($program['country'] == "General") {
					echo "Worldwide";
				} else {
					echo $program['country'];
				}?>
            </div>
            <div class="s_box_logo">
                <?php
				foreach($program['main_sponsors'] as $program_sponsor) {
				?>
                <div class="s_fp_logo_container">
                    <div class="s_fp_logo"><a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank"><img src="<?=$SPONSORS[$program_sponsor]['logo_m']?>" width="181px" height="72px" alt="<?=$SPONSORS[$program_sponsor]['title']?>" border="0" /></a></div>
                    <div class="s_fp_container">
                        <div class="s_fp_title">
                            <h3><a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank"><?=$SPONSORS[$program_sponsor]['title_desc']?></a></h3>
                        </div>
                        <div class="s_fp_description"><?=$SPONSORS[$program_sponsor]['description']?></div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <?php
				}
				?>
            </div>
            <!--<div class="s_box_list">
                <ul>
                    <?php
					foreach($program['sub_sponsors'] as $program_sponsor) {
						if ($program_sponsor == "ISIC") {
						?>
                    <li>
                        <a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank"><?=$SPONSORS[$program_sponsor]['title']?></a> /
                        <?php
						} elseif ($program_sponsor == "STA Travel") {
						?>
                        <a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank"><?=$SPONSORS[$program_sponsor]['title']?></a>
                    </li>
                    <?php
						} else {
						?>
                    <li>
                        <a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank"><?=$SPONSORS[$program_sponsor]['title']?></a>
                    </li>
                    <?php
						}
					}
					?>
                </ul>
            </div>-->
            <div style="clear:left;"></div>
        </div>
        <div class="s_box_bottom"></div>
    </div>
</li>
<?php	
}
?>
