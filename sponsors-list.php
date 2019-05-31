<?php 
include "lib/common.php";
include "lib/common_array.php";
include "lib/sponsors_array.php";

//***************************************************main function***************************************************************
printHeader(1, "Sponsors Listing");
printBody();
printFooter();

//***************************************************end of main function*******************************************************

function printBody()
{
global $user;
global $country_list;
global $COUNTRY_SPONSORS;
global $SPONSORS;
global $SPONSORS_BANNER;
global $COUNTRY_LEAD_SPONSOR;

global $main_sponsors;
global $sub_sponsors;
global $lead_sponsors;

global $banner;

$country_option = ucfirst($_REQUEST["country"]);
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
                        <h1 class="huge_light_blue_bold">Sponsors Listing by Country</h1>
                    </div>
                    <div class="fp_description">
                    </div>
                </div>
                <div id="s_left_content_main_bottom">
                    <div id="sponsors_option">
                        <div id="sponsors_form_container">
                        	<a href="sponsors-list.php?view=graphics_text">View Sponsors by Graphics/Text</a>
                            <br />
                            <a href="sponsors-list.php?view=lead_sponsor">View by Lead Sponsors</a>
                            <br />
                            <a href="sponsors-list.php?view=banner_sponsor">View Home page sponsor</a>
                        </div>
                    </div>
                    <div id="sponsors_container">
                        <ul class="s_list">
                            <?php			
							$view = $_REQUEST["view"];
							
							$counter = 0;
							if ($view == "graphics_text") {
							foreach($COUNTRY_SPONSORS as $key => $program){
								/*echo $program['country']."<br />";
								echo "<br>end</b><br/>";
								echo $country_list[$key]."<br />";
								echo "<br>end of key</b> <br />";
								echo $country_list[$counter]."<br />";
								echo "<br>end of counter</b> <br />";*/
								//if ($program['country'] == $country_list[$counter]) {
										printFeaturedProgramList($program);
										$counter++;
									//}
								
								} 
							}
							else if($view == "lead_sponsor") {
							foreach($COUNTRY_LEAD_SPONSOR as $key => $program){
								/*echo $program['country']."<br />";
								echo "<br>end</b><br/>";
								echo $country_list[$key]."<br />";
								echo "<br>end of key</b> <br />";
								echo $country_list[$counter]."<br />";
								echo "<br>end of counter</b> <br />";*/
								//if ($program['country'] == $country_list[$counter]) {
										printLeadSponsor($program);
										$counter++;
									//}
								
								} 	
							}
							else if($view == "banner_sponsor") {
							foreach($SPONSORS_BANNER as $key => $program){
								/*echo $program['country']."<br />";
								echo "<br>end</b><br/>";
								echo $country_list[$key]."<br />";
								echo "<br>end of key</b> <br />";
								echo $country_list[$counter]."<br />";
								echo "<br>end of counter</b> <br />";*/
								//if ($program['country'] == $country_list[$counter]) {
										printBannerSponsor($program);
										$counter++;
									//}
								
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
						$count_MAX = 3;
						
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
            <div class="s_box_list">
                <ul>
                    <?php
					foreach($program['sub_sponsors1'] as $program_sponsor) {
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
            </div>
            <div style="clear:left;"></div>
        </div>
        <div class="s_box_bottom"></div>
    </div>
</li>
<?php	
}

function printBannerSponsor(&$program){
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
				foreach($program['main_sponsors1'] as $program_sponsor) {
				?>
                <div class="s_fp_logo_container">
                    <div class="s_fp_logo"><a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank"><img src="<?=$SPONSORS[$program_sponsor]['banner_1']?>" width="620px" height="116px" alt="<?=$SPONSORS[$program_sponsor]['title']?>" border="0" /></a></div>
                    <div style="clear:both;"></div>
                </div>
                <?php
				}
				?>
            </div>
            
            <div style="clear:left;"></div>
        </div>
        <div class="s_box_bottom"></div>
    </div>
</li>
<?php	
}

function printLeadSponsor(&$program){
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
				foreach($program['main_sponsors1'] as $program_sponsor) {
				?>
                <div class="s_fp_logo_container">
                    <div class="s_fp_logo"><a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank"><img src="<?=$SPONSORS[$program_sponsor]['logo_ls']?>" width="292px" height="104px" alt="<?=$SPONSORS[$program_sponsor]['title']?>" border="0" /></a></div>
                    <div style="clear:both;"></div>
                </div>
                <?php
				}
				?>
            </div>
            
            <div style="clear:left;"></div>
        </div>
        <div class="s_box_bottom"></div>
    </div>
</li>
<?php	
}
?>
