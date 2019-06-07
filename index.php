<?php 
include "lib/common.php";
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
        
        <div id="left_content_top">
            <div id="left_content_top_upper">
                <div id="left_content_top_upper1">STUDY ABROAD
                </div>
                <div id="left_content_top_upper2">PROGRAM FOR CSU STUDENTS
                </div> 
            </div>
            <div id="left_content_top_lower">
                <div id="write_content" style="height: 50px;">CSU students can study abroad on programs through the Chancellor’s Office and other CSU Campuses. <br />Find programs across the California State University system:
                </div>
                <span class="xyz"><img src="caliglobe.gif" style="width: 100%; height: 270px"></span>
                <span class="xyz" style="padding-left: 18px;">
                    <ul style="padding-left:15px;">
                        <li><a href="Chancellor_Office.php">CSU Chancellor’s Office</a></li>
                        <li><a href="Channel_Islands.php">CSU Channel Islands</a></li>
                        <li><a href="Dominguez_Hills.php">CSU Dominguez Hills</a></li>
                        <li><a href="Fresno_State.php">Fresno State</a></li>
                        <li><a href="Humboldt.php">Humboldt State</a></li>
                        <li><a href="Los_Angeles.php">CSU Los Angeles</a></li>
                        <li><a href="Monterey_Bay.php">CSU Monterey Bay</a></li>
                        <li><a href="Poly_Pomona.php">Cal Poly Pomona</a></li>
                        <li><a href="San_Bernardino.php">CSU San Bernardino</a></li>
                        <li><a href="San_Francisco_State.php">San Francisco State</a></li>
                        <li><a href="Poly_San_Luis_Obispo.php">Cal Poly San Luis Obispo</a></li>
                        <li><a href="Stanislaus.php">CSU Stanislaus</a></li>
                        
                    </ul>
                        
                </span>
                
                <span class="xyz">
                    <ul style="padding-left: 25px;">
                        <li><a href="Bakersfield.php">CSU Bakersfield</a></li>
                        <li><a href="Chico_State.php">Chico State</a></li>
                        <li><a href="East_Bay.php">CSU East Bay</a></li>
                        <li><a href="Fullerton.php">CSU Fullerton</a></li>
                        <li><a href="Long_Beach_State.php">Long Beach State</a></li>
                        <li><a href="Maritime.php">Cal Maritime</a></li>
                        <li><a href="Northridge.php">CSU Northridge</a></li>
                        <li><a href="Sacramento_State.php">Sacramento State</a></li>
                        <li><a href="San_Diego_State.php">San Diego State</a></li>
                        <li><a href="San_Jose_State.php">San Jose State</a></li>
                        <li><a href="San_Marcos.php">CSU San Marcos</a></li>
                        <li><a href="Sonoma_State.php">Sonoma State</a></li>
                        
                    </ul>
                </span>
            </div>
        </div>
        <div id="spacing">
            
        </div>
        <div id="left_content_middle">
            <div class="left_content_main_bottom"> <?php printFeaturedPrograms()?> </div>
        </div> 
        
        <div style="clear:both;"></div>
    </div>
    <!-- end of left_content -->
    <div id="middle_content"></div>
    <div id="right_content">
        <div id="right_content_top_index">
        	
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
        <div id="spacing" style="background-color:#BFBFBF;">   
        </div>
        <div id="box2_top" title="COUNTRY SPECIFIC STUDENT HANDBOOKS">
                <span class="box_title">
                        COUNTRY SPECIFIC STUDENT HANDBOOKS
                </span>
                        <div id="country_specific_title_container">
                            <div class="country_specific_title1">Country Specific</div>
                            <div class="country_specific_title2">Student Handbooks</div>
                        </div>
        </div>
        <div id="student_handbooks_form_sm">

                            <form name="pch_searchForm" method="get" action="" onsubmit="return validateCountrySM();" class="pch_form">

                                <div class="pch_select_container">

                                    <div class="pch_country">

                                        <div class="pch_label">

                                            <label for="pch_selProgCntry">Select A Country</label>

                                        </div>

                                        <div class="pch_list">

                                            <select name="country" id="pch_selProgCntry">

                                                <option value="Choose">Choose One</option><option value="General" selected="selected">Choose One</option><option value="Argentina">Argentina</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Canada">Canada</option><option value="Chile">Chile</option><option value="China">China</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Guatemala">Guatemala</option><option value="Hungary">Hungary</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kenya">Kenya</option><option value="Mexico">Mexico</option><option value="Morocco">Morocco</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Norway">Norway</option><option value="Peru">Peru</option><option value="Portugal">Portugal</option><option value="Russia">Russia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Thailand">Thailand</option><option value="Turkey">Turkey</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="pch_search_button">

                                        <input type="image" name="btnSubmit" src="/images/search_button_gold.gif" alt="Search" title="Search">

                                    </div>

                                    <div class="pch_bottom"></div>

                                </div>

                            </form>

                        </div>
        <div id="right_content_middle">
            <div id="sponsors">
                
                
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






