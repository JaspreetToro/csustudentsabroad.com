<?php 
include "lib/common.php";
include "lib/common_array.php";
include "lib/sponsors_array.php";
include "lib/conn_data.php";

//***************************************************main function***************************************************************
printHeader(0, "Site Map");
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

$country_option = ucfirst($_REQUEST["country"]);
?>

<div id="content">
    <div id="top_header_container">
        <div class="student_handbook_header_container">
            <div class="sh_header_left_container">
                <div class="featured_program_header">
                    <div class="featured_program_header_text">Site Map</div>
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
                        <h1 class="huge_light_blue_bold">Site Map</h1>
                    </div>
                    <div class="fp_description"> </div>
                </div>
                <div id="s_left_content_main_bottom">
                    <div id="sitemap">
                        <h2 class="big_dark_blue_bold">StudentsAbroad.com Info</h2>
                        <ul>
                            <li><a href="http://studentsabroad.com/about_us.php">About Us</a></li>
                            <li><a href="http://studentsabroad.com/contact_us.php">Contact Us</a></li>
                            <li><a href="http://studentsabroad.com/sponsor">Support</a></li>
                        </ul>
                        <h2 class="big_dark_blue_bold">StudentsAbroad.com Resources</h2>
                        <ul>
                            <li><a href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SimpleSearch">Program Search</a></li>
                            <li>Study Abroad Student Handbook
                                <ul>
                                    <?php echo getSiteMapList("General") ?>
                                </ul>
                            </li>
                            <li>Country&ndash;Specific Student Handbook
                                <ul>
                                    <?php echo getSiteMapList("All") ?>
                                </ul>
                            </li>
                        </ul>
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
            <div id="box2_top_sm" title="COUNTRY SPECIFIC STUDENT HANDBOOKS"> <span class="box_title"> COUNTRY SPECIFIC STUDENT HANDBOOKS </span>
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
                <div id="program_search_top" title="STUDY ABROAD PROGRAM SEARCH"> <span class="program_search_title"> STUDY ABROAD PROGRAM SEARCH </span>
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
function  getSiteMapList($set_country)
{
	$conn = connectDatabase(); // connect to database
	if(!$conn)
	{
		echo "ERROR, Datababase Connection failed!\n";
		exit;
	}
	
	if ($set_country == "General") {
		$sql = "SELECT * FROM country_map WHERE country_name = 'General'";
	} else {
		$sql = "SELECT * FROM country_map WHERE country_name <> 'General' ORDER BY country_name";	
	}
	
	$result = queryDatabase($sql);
	
	if($result)
	{
		$counter = 0;
		while($country_item = fetchDatabase($result))
		{
			$country_list[$counter] = $country_item;
			$counter++;
		}
	}

	//print_r($country_list);
	foreach ($country_list as $key => $value) {
?>
<li>
    <?php 
			if ($value['country_name'] == "General") { 
				echo "Worldwide Student Handbook"; 
			} else { 
				echo $value['country_name']." Student Handbook"; 
			}?>
    <ul>
        <li>Understanding Study Abroad
            <ul>
                <li><a href="handbook/introduction.php?country=<?php echo $value['country_name']; ?>">Introduction</a></li>
                <li><a href="handbook/why-study-abroad.php?country=<?php echo $value['country_name']; ?>">Why Study Abroad?</a></li>
                <li><a href="handbook/why-learn-a-language.php?country=<?php echo $value['country_name']; ?>">Why Learn a Language?</a></li>
                <li><a href="handbook/advice-for-parents.php?country=<?php echo $value['country_name']; ?>">Advice for Parents</a></li>
            </ul>
        </li>
        <li>Choosing a Program
            <ul>
                <li><a href="handbook/finding-quality-program.php?country=<?php echo $value['country_name']; ?>">Finding a Quality Program</a></li>
                <li><a href="handbook/select-the-right-program.php?country=<?php echo $value['country_name']; ?>">Selecting the Right Program for You</a></li>
                <li><a href="handbook/who-runs-your-program.php?country=<?php echo $value['country_name']; ?>">Who Runs Your Program</a></li>
                <li><a href="handbook/financing-study-abroad-program.php?country=<?php echo $value['country_name']; ?>">Financing Study Abroad</a></li>
                <li><a href="handbook/application-process.php?country=<?php echo $value['country_name']; ?>">Application Process</a></li>
            </ul>
        </li>
        <li>Practical Information
            <ul>
                <li><a href="handbook/pre-departure-planning.php?country=<?php echo $value['country_name']; ?>">Pre-Departure Planning</a></li>
                <li><a href="handbook/how-foreign-laws-apply-to-you.php?country=<?php echo $value['country_name']; ?>">How Foreign Law Apply to You</a></li>
                <li><a href="handbook/communication-while-abroad.php?country=<?php echo $value['country_name']; ?>">Communication While Abroad</a></li>
                <li><a href="handbook/housing.php?country=<?php echo $value['country_name']; ?>">Housing Arrangements</a></li>
                <li><a href="handbook/packing.php?country=<?php echo $value['country_name']; ?>">Packing</a></li>
                <li><a href="handbook/expectations.php?country=<?php echo $value['country_name']; ?>">Expectations</a></li>
            </ul>
        </li>
        <li>Health and Safety
            <ul>
                <li><a href="handbook/basic-health-and-safety.php?country=<?php echo $value['country_name']; ?>">Basic Health and Safety</a></li>
                <li><a href="handbook/top-10-health-and-safety-issues.php?country=<?php echo $value['country_name']; ?>">Top 10 Health and Safety Issues</a></li>
                <li><a href="handbook/medical-care-and-insurance.php?country=<?php echo $value['country_name']; ?>">Medical Care and Insurance</a></li>
                <li><a href="handbook/strategies-to-reduce-risk.php?country=<?php echo $value['country_name']; ?>">Risk Factors and Strategies to Reduce Risk</a></li>
                <li><a href="handbook/special-issues.php?country=<?php echo $value['country_name']; ?>">Special Issues</a></li>
                <li><a href="handbook/crisis-management.php?country=<?php echo $value['country_name']; ?>">Crisis Management</a></li>
                <li><a href="handbook/adjustments-and-culture-shock.php?country=<?php echo $value['country_name']; ?>">Adjustments and Culture Shock</a></li>
            </ul>
        </li>
        <li>Coming Home
            <ul>
                <li><a href="handbook/airport-procedures.php?country=<?php echo $value['country_name']; ?>">Airport Safety, Duties and Customs</a></li>
                <li><a href="handbook/reverse-culture-shock.php?country=<?php echo $value['country_name']; ?>">Reverse Culture Shock</a></li>
                <li><a href="handbook/continuing-benefits-of-study-abroad.php?country=<?php echo $value['country_name']; ?>">Continuing Benefits of Study Abroad</a></li>
            </ul>
        </li>
        <li>Tools for Planning
            <ul>
                <li>Resources Tools
                    <ul>
                        <li><a href="handbook/questions.php?country=<?php echo $value['country_name']; ?>">Questions</a></li>
                        <li><a href="handbook/checklist.php?country=<?php echo $value['country_name']; ?>">Checklist</a></li>
                        <li><a href="handbook/resources.php?country=<?php echo $value['country_name']; ?>">Resources</a></li>
                        <li><a href="handbook/top-10-health-and-safety-issues.php?country=<?php echo $value['country_name']; ?>">Top 10 Health and Safety Issues</a></li>
                    </ul>
                </li>
                <li>Communication Tools
                    <ul>
                        <li><a href="handbook/communication-info-sheets.php?country=<?php echo $value['country_name']; ?>">Communication Info Sheets</a></li>
                        <li><a href="handbook/words-to-know.php?country=<?php echo $value['country_name']; ?>">Words to Know</a></li>
                        <li><a href="handbook/phrases-to-know.php?country=<?php echo $value['country_name']; ?>">Phrases to Know</a></li>
                        <li><a href="handbook/help-images.php?country=<?php echo $value['country_name']; ?>">Help Images</a></li>
                    </ul>
                </li>
                <li>Emergency Tools
                    <ul>
                        <li><a href="handbook/emergency-planning.php?country=<?php echo $value['country_name']; ?>">Emergency Planning</a></li>
                        <li><a href="handbook/emergency-action-plan-steps.php?country=<?php echo $value['country_name']; ?>">Emergency Action Plan Steps</a></li>
                        <li><a href="handbook/personal-emergency-action-plan.php?country=<?php echo $value['country_name']; ?>">Personal Emergency Action Plan</a></li>
                        <li><a href="handbook/emergency-card.php?country=<?php echo $value['country_name']; ?>">Emergency Card</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li>
<?php
	}
	disconnectDatabase($conn);
}//end of function

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
                            <h3><a href="<?=$SPONSORS[$program_sponsor]['url']?>" target="_blank">
                                <?=$SPONSORS[$program_sponsor]['title_desc']?>
                                </a></h3>
                        </div>
                        <div class="s_fp_description">
                            <?=$SPONSORS[$program_sponsor]['description']?>
                        </div>
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
