<?php 

include "lib/common.php";
include "lib/subpage_common.php";
include "lib/common_array.php";
include "lib/conn_data.php";

//define('PHPBB_ROOT_PATH', "forum/");
//define('IN_PHPBB', true);

//$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
//$phpEx = substr(strrchr(__FILE__, '.'), 1);
//include($phpbb_root_path . 'common.' . $phpEx);
//include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
//$user->session_begin();
//$auth->acl($user->data);
//$user->setup('viewforum');

//***************************************************main function***************************************************************

global $title;
$title = "About Us";

    

printHeader(6, $title, "<script type=\"text/javascript\" src=\"javascript/jquery.js\"></script>\n
            <script type=\"text/javascript\" src=\"javascript/jquery-functions.js\"></script>\n", 
            "onLoad=\"P7_equalCols2(0,'left_navigation','P','subpage_content','P'); \"");
printBody();
printSubpageFooter();


//***************************************************end of main function*******************************************************



function printBody()
{
    global $title;
?>

<div id="new_subpage_container">
    <span class="new_subpage_left_container">
        <div id="new_subpage_left_container_top">
            <div id="left_content_top_upper">
                        <div id="left_content_top_upper1">STUDY ABROAD
                        </div>
                        <div id="left_content_top_upper2">CSU SAN MARCOS
                        </div> 
                    </div>
            <div id="new_nonav_subpage_content" >
                <script language="javascript">renderDiv(20);</script>
                <div>
                    
                    <div class="subpage_full_text">
                        <div id="subpage_text_title"><a href="http://go.sdsu.edu/student_affairs/isc/studyabroad.aspx">Study Abroad Support
                        </a></div></br>
                        <div id="subpage_text1"><p>Students have the opportunity to study abroad for different durations in the year through a wide range of programs. The Office of Global Education maintains an up-to-date information center on a wide variety of study abroad opportunities. You can find program options that suit your needs, get information about financial aid, learn about credit transfer, and make direct contact with the school or center you want to attend all in one place. Study Abroad Advisors provide an invaluable resource and can help you find the right program. There are six different programs including Summer and January Terms in Europe, Central America, and Australia with a specific academic focus. </p>
                        </div>


                </div>
                <!-- end of class small grey -->
                <div>&nbsp;</div>
                <p></p>
            </div>
            <!-- end of nonav_subpage_content -->
        </div>
        <!-- end of subpage_left_container_top  -->
     </div>
                    <!-- end of  subpage_full_text-->
                    <div id="addition_links"></div>
                    <div id="subpage_image" style="background:url(../images/sanmarcos1.jpg);">
                    </div>
                    <!-- end of inage division-->
                    <div id="subpage_text2">
                        <p><div id="subpage_text_title"><a href="https://www.csusm.edu/">About CSU San Marcos</a></div> </br> 
                            <div>Based on an innovative 28-year history, California State University San Marcos is a forward-focused institution, dedicated to preparing future leaders, building great communities and solving critical issues. CSUSM students work closely with a faculty whose commitment to sustained excellence in teaching, research, and community partnership enhances student learning. The university offers rigorous undergraduate and graduate programs distinguished by exemplary teaching, innovative curricula, and the application of new technologies. CSUSM provides a range of services that respond to the needs of a student body with diverse backgrounds, expanding student access to an excellent and affordable education. </p>
                            </div>
                        
                    </div>
                    <!-- end text2 divsion-->
                    <div id="subpage_image" style="background:url(../images/sanmarcos2.jpg) ;">
                    </div>   
    </span>
    <!-- end of subpage_left_container -->
    <span class="new_subpage_middle_container"></span>
    <span class="new_subpage_right_container">
                    <div id="right_content">

               

                <div id="right_content_middle" style="width:300px;background-color: #fff;">

                <div class="sponsors_title" style="background: #737173 url(../images/student-handbook-bar2.gif) no-repeat;

    height: 28px;font: 400 20px 'Oswald', 'Century Gothic', Avant Garde, Arial, Helvetica, Sans-Serif;

    text-transform: uppercase;

    padding: 0 0 0 28px;

    color: #FFFFFF;"> CSU Study Abroad Programs </div>

                <img width="290px" src="../../images/csu_map.gif" alt="Map of California State Universities"><br />

        <div style="padding:20px">

                <div class="col-sm-12 col-md-12 col-lg-12">

                <section class="col-sm-4 col-md-3 col-lg-3 list">

                    <h1>Study Abroad programs</h1></br>
                        
                    </section>

                    <section class="col-sm-4 col-md-3 col-lg-3 list">

                        <h2>CSU Chancellor's Office</h2>

                        <ul>

                           <li><a href="http://test.csustudentsabroad.com/Chancellor_Office.php" target="_blank" aria-label="Cal State">The California State University</a></li>

                        </ul>

                    </section>

                    <section class="col-sm-4 col-md-3 col-lg-3 list">

                        <h2>Northern Campuses</h2>

                        <ul>

                            <li><a href="http://test.csustudentsabroad.com/Chico_State.php" target="_blank" aria-label="Chico Campus">

                            Chico State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/East_Bay.php" target="_blank" aria-label="East Bay Campus">

                            CSU East Bay</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Humboldt.php" target="_blank" aria-label="Humboldt Campus">

                            Humboldt State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Maritime.php" target="_blank" aria-label="Maritime Academy Campus">

                            Cal Maritime</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Sacramento_State.php" target="_blank" aria-label="Sacramento Campus">

                            Sacramento State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/San_Francisco_State.php" target="_blank" aria-label="San Francisco Campus">

                            San Francisco State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/San_Jose_State.php" target="_blank" aria-label="San Jos&eacute; Campus">

                            San José State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Sonoma_State.php" target="_blank" aria-label="Sonoma Campus">

                            Sonoma State</a></li>

                        </ul>

                    </section>



                    <section class="col-sm-4 col-md-3 col-lg-3 list">

                        <h2>Central Campuses</h2>

                        <ul>

                            <li><a href="http://test.csustudentsabroad.com/Bakersfield.php" target="_blank" aria-label="Bakersfield Campus">

                            CSU Bakersfield</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Fresno_State.php" target="_blank" aria-label="Fresno Campus">

                            Fresno State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Monterey_Bay.php" target="_blank" aria-label="Monterey Bay Campus">

                            CSU Monterey Bay</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Poly_San_Luis_Obispo.php" target="_blank" aria-label="San Luis Obispo Campus">

                            Cal Poly San Luis Obispo</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Stanislaus.php" target="_blank" aria-label="Stanislaus Campus">

                            CSU Stanislaus</a></li>

                        </ul>

                    </section>



                    <section class="col-sm-4 col-md-6 col-lg-6 list-single">

                        <h2>Southern Campuses</h2>

                        <ul class="no-space">

                            <li><a href="http://test.csustudentsabroad.com/Channel_Islands.php" target="_blank" aria-label="Channel Islands Campus">

                            CSU Channel Islands</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Dominguez_Hills.php" target="_blank" aria-label="Dominguez Hills Campus">

                            CSU Dominguez Hills</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Fullerton.php" target="_blank" aria-label="Fullerton Campus">

                            CSU Fullerton</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Long_Beach_State.php" target="_blank" aria-label="Long Beach Campus">

                            Long Beach State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Los_Angeles.php" target="_blank" aria-label="Los Angeles Campus">

                            CSU Los Angeles</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Northridge.php" target="_blank" aria-label="Northridge Campus">

                            CSU Northridge</a></li>

                            <li><a href="http://test.csustudentsabroad.com/Poly_Pomona.php" target="_blank" aria-label="Pomona Campus">

                            Cal Poly Pomona</a></li>

                            <li><a href="http://test.csustudentsabroad.com/San_Bernardino.php" target="_blank" aria-label="San Bernardino Campus">

                            CSU San Bernardino</a></li>

                            <li><a href="http://test.csustudentsabroad.com/San_Diego_State.php" target="_blank" aria-label="San Diego Campus">

                            San Diego State</a></li>

                            <li><a href="http://test.csustudentsabroad.com/San_Marcos.php" target="_blank" aria-label="San Marcos Campus">

                            CSU San Marcos</a></li>

                        </ul>

                    </section>

                </div>

            </div>

                <div id="right_content_top_gold_sm"></div>

                <div id="right_content_middle_sm">

                    <div id="box2_top_sm" title="COUNTRY SPECIFIC STUDENT HANDBOOKS">

                        <span class="box_title">

                            <strong>COUNTRY SPECIFIC STUDENT HANDBOOKS</strong>

                        </span>

                        <div id="country_specific_title_container_sm">

                            <div class="country_specific_title1_sm">Country Specific</div>

                            <div class="country_specific_title2_sm">Student Handbooks</div>

                        </div>                       

                    </div>

                    <div id="student_handbooks_form_sm">
                        <?php printCountryHandbooks() ?>

                    </div>   

                   <div id="study_abroad_resources" style="padding-top: 50px;">
                        <div id="student_handbook_title_container">
                            <div id="student_handbook_title">Study Abroad <br />
                                Student Handbook
                            </div>
                        </div>
                        <div class="student_handbook_menu"> <?php printStudentHandbookMenu()?> 
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

                            <div id="program_search_middle"> <?php printProgramSearchForm()?> </div>
                        </div>

                    </div>

                <div id="right_content_bottom"></div>

            </div></div>
    </span>

    </div>
</div>
<!-- end of subpage_container -->
<?php
}
//end of printBody
?>
