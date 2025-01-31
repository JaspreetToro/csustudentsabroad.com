<?php 
include "lib/commonc2.php";
include "lib/conn_data.php";

//***************************************************main function***************************************************************

	

printHeader(1, "Home");
printBody();
printFooter();

//***************************************************end of main function*******************************************************
function printBody()
{
global $user;
global $SPONSORS;
global $COUNTRY_SPONSORS;	
global $SPONSORS_BANNER;

global $main_sponsors;
global $banner;

?>

<div id="content">
    <div id="left_content">
        <div id="left_content_quicksearch_container">
            <div id="left_content_handbooks_search">
                <div id="box1_top" title="STUDY ABROAD PROGRAM SEARCH">
                    <span class="box_title">
                        STUDY ABROAD PROGRAM SEARCH
                    </span>
                    <div id="program_search_title_container">
                        <div class="program_search_title1">Study Abroad</div>
                        <div class="program_search_title2">Program Search</div>
                    </div>
                </div>
                <div id="box1_middle"><?php printProgramSearchForm(); ?></div>
                <div id="box1_bottom"></div>
            </div>
            <div id="left_content_program_search">
                <div id="box2_top" title="COUNTRY SPECIFIC STUDENT HANDBOOKS">
                    <span class="box_title">
                        COUNTRY SPECIFIC STUDENT HANDBOOKS
                    </span>
                    <div id="country_specific_title_container">
                        <div class="country_specific_title1">Country Specific</div>
                        <div class="country_specific_title2">Student Handbooks</div>
                    </div>
                </div>
                <div id="box2_middle"> <?php printCountryHandbooks() ?> </div>
                <div id="box2_bottom"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <script type="text/javascript" language="javascript">renderDiv(4);</script>
        <!-- <div class="sponsors_banner_container">
            <div class="sponsors_banner_top"></div>
            <div class="sponsors_banner_middle">
                <div class="sponsors_banner">
                    <?php
					/* sponsors banner
					*/
					$box_count = 1;
					//$count_MAX = 3;
					$count_MAX = 1;
					
					while ($box_count <= $count_MAX){
						get_banner_sponsor2("General", $box_count);
						echo $banner[0];
						$box_count++;
					}
					?>
                </div>
            </div>
            <div class="sponsors_banner_bottom"></div>
        </div> -->
        <div style="clear:both;"></div>
        <script type="text/javascript" language="javascript">renderDiv(4);</script>
        <div id="left_content_top"></div>
        <div id="left_content_middle">
            <div class="left_content_main_bottom"> <?php printFeaturedPrograms()?> </div>
        </div>
        <div id="left_content_bottom"></div>
        <div style="clear:both;"></div>
    </div>
    <!-- end of left_content -->
    <div id="middle_content"></div>
    <div id="right_content">
        <div id="right_content_top_sm"></div>
        <div id="right_content_middle">
            <div id="sponsors">
                <div id="sponsors_title_container">
                    <div class="sponsors_title"> CSU Study Abroad Programs </div>
                </div>
                <div id="sponsors1">
                    <div>
                      
                        <?php
                        printCSUschools();
						?> 
                    </div>
                </div>
                <div id="study_abroad_resources">
                    <div id="student_handbook_title_container">
                        <div id="student_handbook_title">Study Abroad <br />
                            Student Handbook</div>
                    </div>
                    <div class="student_handbook_menu"> <?php printStudentHandbookMenu()?> </div>
                </div>
                <div id="quicklinks_container">
                    <div id="quicklinks_title_container">
                        <div class="quicklinks_title">Quick Links</div>
                    </div>
                    <div id="quicklinks_content">
                        <div id="quicklinks_top"></div>
                        <div id="quicklinks_middle">
                            <div id="quicklinks">
                                <ul>
                                    <li><a href="handbook/top-10-health-and-safety-issues.php?country=General">Top 10 Health &amp; Safety Tips</a></li>
                                    <li><a href="handbook/communication-info-sheets.php?country=General">Communication Info Sheets</a></li>
                                    <li style="border-bottom:none;"><a href="handbook/emergency-planning.php?country=General">Emergency Planning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="quicklinks_bottom"></div>
                    </div>
                </div>
            </div>
            <!-- end of right_content_middle -->
            <div id="right_content_bottom"></div>
        </div>
        <!-- end of right_content -->
    </div>
    <!-- end of content -->
</div>
<?php
}
//end of printBody

function printFeaturedPrograms()
{
?>

           
           <div id="main_header_container">
    <div id="main_header" >
        <div>
            <span class="box_title">
                FEATURED PROGRAMS
            </span>
        </div>
        <div id="featured" > <img src="images/slide-program-search.jpg" data-caption="#htmlCaption1" alt="Featured Program 1" /> <img src="images/slide-general-handbook.jpg" data-caption="#htmlCaption2" alt="Featured Program 2" /> <img src="images/slide-country-specific-handbook.jpg" data-caption="#htmlCaption3" alt="Featured Program 3" /> </div>
        <!-- Captions for Orbit -->
        <div class="orbit-caption" id="htmlCaption1">
            <div class="caption-title">
                <div class="ctitle1">Program Search</div>
            </div>
            <div class="caption-content-wrapper">Explore your options for exploring the world. Our study abroad program search allows you to choose the location and subjects you want to study and to find the perfect program for you!<br />
                <br />
                <a href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SimpleSearch">Find a Program</a></div>
        </div>
        <div class="orbit-caption" id="htmlCaption2">
            <div class="caption-title">
                <div class="ctitle2">General Handbook</div>
            </div>
            <div class="caption-content-wrapper">Our study abroad student handbook helps you get where you are going safely and smoothly. We want you to be a savvy traveller and to get the most out of your experience.<br />
                <br />
                <a href="handbook/introduction.php?country=General">Read More</a> </div>
        </div>
        <div class="orbit-caption" id="htmlCaption3">
            <div class="caption-title">
                <div class="ctitle3">Country-Specific Handbooks</div>
            </div>
            <div class="caption-content-wrapper">Our 48 country-specific study abroad handbooks give you the details so that you can hit the ground running. Learn the ins and outs for your destination.<br />
                <br />
                <div style="color: 
#73A6CE; font-weight:bold;">Select a Country&ndash;Specific Handbook from the menu above</div>
            </div>
        </div>
    </div>
</div>
   
           <style>

table { border: 1pt solid #000; border-collapse: collapse; }

table td { border-left: 1px solid #000; }

table td:first-child { border-left: none; }

table td {padding:5px;}

	table th { border-bottom:2pt solid #000;}
	
	a:visited{color:#cc0b2a}
	a:hover{color:darkmagenta}
	
	.panel-heading{font-size:15pt;color:white;background-color:burlywood;padding:10px}

</style> 
          
          
          <style>
			  #maincontainer_bottom{min-height:1500px;}

</style>
<?php
}
?>






