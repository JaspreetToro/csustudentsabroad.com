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
                        <div id="left_content_top_upper2">SAN JOSE STATE UNIVERSITY
                        </div> 
                    </div>
            <div id="new_nonav_subpage_content" >
                <script language="javascript">renderDiv(20);</script>
                <div>
                    
                    <div class="subpage_full_text">
                        <div id="subpage_text_title"><a href="http://stage.sjsu.edu/gei/flp/programs/index.html">Study Abroad Support</a></div></br>
                        <div id="subpage_text1"><p>TThe College of Professional and Global Education is contributes to the internationalization of San José State University, by providing students the opportunity to study abroad on short-term programs, and designing other globally focused opportunities. The Study Abroad and Away Office has a wide variety of options to help students join the global community and support its mission. With different options, students have the opportunity to find the program of their choice. Currently, there are faculty-led programs that offer you the chance to visit a global destination and study onsite with SJSU faculty and a cohort of your peers. Additionally, there is the Summer School Abroad Program (SSA) that provide students the opportunity to study abroad for two to four weeks during the summer break. You will have the chance to study alongside college students from around the world on these international programs, making cross-cultural connections that will last a lifetime. </p>
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
                    <div id="subpage_image" style="background:url(../images/jose1.jpg);">
                    </div>
                    <!-- end of inage division-->
                    <div id="subpage_text2">
                        <p><div id="subpage_text_title"><a href="http://www.sjsu.edu/">About San Jose State</a></div> </br>  
                            <div>San Jose State provides a comprehensive university education and offers 145 areas of study with an additional 108 concentrations. Quality teaching and small classes are a priority at SJSU, where tenured professors teach introductory as well as advanced courses. One of the 200 top research universities in the nation, SJSU offers rigorous coursework and research opportunities to more than 30,000 undergraduate and graduate students in eight colleges.
                            </div>
                        </p>
                        
                    </div>
                    <!-- end text2 divsion-->
                    <div id="subpage_image" style="background:url(../images/jose2.jpg) ;">
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

                    <h2>Office of the Chancellor</h2>

                        <ul>

                            <li><a href="http://test.csustudentsabroad.com/Chancellor_Office.php" target="_blank" aria-label="Cal State">The California State University</a></li>

                        </ul>

                    </section>

                    <section class="col-sm-4 col-md-3 col-lg-3 list">

                        <h2>Study Abroad Programs</h2>

                        <ul>

                            <li><a href="http://csuip.calstate.edu/index.cfm?FuseAction=Abroad.Home" target="_blank" aria-label="CSU IP">

                            CSU International Programs</a></li>

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

                            <form name="pch_searchForm" method="get" action="" onsubmit="return validateCountrySM();" class="pch_form">

                                <div class="pch_select_container">

                                    <div class="pch_country">

                                        <div class="pch_label">

                                            <label for="pch_selProgCntry">Select A Country</label>

                                        </div>

                                        <div class="pch_list">

                                            <select name="country" id="pch_selProgCntry">

                                                [@country_option_menu]

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

                   <!-- <div id="sponsors">

                        <div id="sponsors_title_container">

                            <div class="sponsors_title"> Sponsors </div>

                        </div>

                        <div id="sponsors1_container">

                            [@main_sponsors]

                        </div>

                        <!-- NOTE: if have more sponsor, insert here-->

                    <!--    <div id="sponsors_bar"></div>

                    <!--    <div id="sponsors2">

                            <div id="main_sub_sponsors_featured">

                                <!-- sponsors text list -->

                    <!--            <div id="sponsors_list">

                                    <ul>[@subsponsors1]</ul>

                                </div>                         

                            </div>

                        </div>





                    </div> -->

                    <!--<div style="padding: 5px 0 0 0;"></div>-->

                    <div id="study_abroad_resources">

                        <div id="student_handbook_title_container">

                            <div id="student_handbook_title">Study Abroad <!-- Study Abroad--> <br />Student Handbook</div>

                        </div>

                        <div class="student_handbook_menu">

                            <ul class="student_handbook_container">

        <li class="menu">

            <ul>

                <li class="button">

                    <a href="#" class="dropdown_button">Understanding Study Abroad

                    <span>

                    </span>

                    </a>

                </li>

                <li class="dropdown">

                    <ul>

                        <li>

                            <a href="/handbook/introduction.php?country=[@country_link]">Introduction</a>

                        </li>

                        <li>

                            <a href="/handbook/why-study-abroad.php?country=[@country_link]">Why Study Abroad?</a>

                        </li>

                        <li>

                            <a href="/handbook/why-learn-a-language.php?country=[@country_link]">Why Learn a Language?</a>

                        </li>

                        <li class="last">

                            <a href="/handbook/advice-for-parents.php?country=[@country_link]">Advice for Parents</a>

                        </li>

                    </ul>

                </li>

            </ul>

        </li>

        <li class="menu">

            <ul>

                <li class="button">

                    <a href="#" class="dropdown_button">Choosing a Program

                    <span>

                    </span>

                    </a>

                </li>

                <li class="dropdown">

                    <ul>

                        <li>

                            <a href="/handbook/begin-program-search.php?country=[@country_link]">Begin Program Search</a>

                        </li>

                        <li>

                            <a href="/handbook/select-the-right-program.php?country=[@country_link]">Selecting the Right Program for You</a>

                        </li>

                        <li>

                            <a href="/handbook/who-runs-your-program.php?country=[@country_link]">Who Runs Your Program</a>

                        </li>

                        <li>

                            <a href="/handbook/">Financing Study Abroad</a>

                        </li>

                        <li class="last">

                            <a href="/handbook/application-process.php?country=[@country_link]">Application Process</a>

                        </li>

                    </ul>

                </li>

            </ul>

        </li>

        <li class="menu">

            <ul>

                <li class="button">

                    <a href="#" class="dropdown_button">Practical Information

                    <span>

                    </span>

                    </a>

                </li>

                <li class="dropdown">

                    

                    <ul>

                        <li>

                            <a href="/handbook/pre-departure-planning.php?country=[@country_link]">Pre-Departure Planning</a>

                        </li>

                        <li>

                            <a href="/handbook/how-foreign-laws-apply-to-you.php?country=[@country_link]">How Foreign Law Apply to You</a>

                        </li>

                        <li>

                            <a href="/handbook/communication-while-abroad.php?country=[@country_link]">Communication While Abroad</a>

                        </li>

                        <li>

                            <a href="/handbook/housing.php?country=[@country_link]">Housing Arrangements</a>

                        </li>

                        <li>

                            <a href="/handbook/packing.php?country=[@country_link]">Packing</a>

                        </li>

                        <li class="last">

                            <a href="/handbook/expectations.php?country=[@country_link]">Expectations</a>

                        </li>

                    </ul>

                    

                </li>

            </ul>

        </li>

        <li class="menu">

            <ul>

                <li class="button">

                    <a href="#" class="dropdown_button">Health and Safety

                    <span>

                    </span>

                    </a>

                </li>

                <li class="dropdown">

                    <ul>

                        <li>

                            <a href="/handbook/basic-health-and-safety.php?country=[@country_link]">Basic Health and Safety</a>

                        </li>

                        <li>

                            <a href="/handbook/top-10-health-and-safety-issues.php?country=[@country_link]">Top 10 Health and Safety Issues</a>

                        </li>

                        <li>

                            <a href="/handbook/medical-care-and-insurance.php?country=[@country_link]">Medical Care and Insurance</a>

                        </li>

                        

                        

                        <li>

                            <a href="/handbook/strategies-to-reduce-risk.php?country=[@country_link]">Risk Factors and Strategies to Reduce Risk</a>

                        </li>

                        <li>

                            <a href="/handbook/special-issues.php?country=[@country_link]">Special Issues</a>

                        </li>

                        <li>

                            <a href="/handbook/crisis-management.php?country=[@country_link]">Crisis Management</a>

                        </li>

                        <li class="last">

                            <a href="/handbook/adjustments-and-culture-shock.php?country=[@country_link]">Adjustments and Culture Shock</a>

                        </li>

                    </ul>

                </li>

            </ul>

        </li>

        <li class="menu">

            <ul>

                <li class="button">

                    <a href="#" class="dropdown_button">Coming Home

                    <span>

                    </span>

                    </a>

                </li>

                <li class="dropdown">

                    <ul>

                        <li>

                            <a href="/handbook/airport-procedures.php?country=[@country_link]">Airport Safety, Duties and Customs</a>

                        </li>

                        <li>

                            <a href="/handbook/reverse-culture-shock.php?country=[@country_link]">Reverse Culture Shock</a>

                        </li>

                        <li class="last">

                            <a href="/handbook/continuing-benefits-of-study-abroad.php?country=[@country_link]">Continuing Benefits of Study Abroad</a>

                        </li>

                    </ul>

                </li>

            </ul>

        </li>

        <li class="menu">

            <ul>

                <li class="button">

                    <a href="#" class="dropdown_button">Tools for Planning

                    <span>

                    </span>

                    </a>

                </li>

                <li class="dropdown">

                    <div class="submenu_title">Resources Tools</div>

                    <ul>

                        <li>

                            <a href="/handbook/questions.php?country=[@country_link]">Questions</a>

                        </li>

                        <li>

                            <a href="/handbook/checklist.php?country=[@country_link]">Checklist</a>

                        </li>

                        <li>

                            <a href="/handbook/resources.php?country=[@country_link]">Resources</a>

                        </li>

                        <li>

                            <a href="/handbook/top-10-health-and-safety-issues.php?=[@country_link]">Top 10 Health and Safety Issues</a>

                        </li>

                    </ul>

                    <div class="submenu_title">Communication Tools</div>

                    <ul>

                        <li>

                            <a href="/handbook/communication-info-sheets.php?country=[@country_link]">Communication Info Sheets</a>

                        </li>

                        <li>

                            <a href="/handbook/words-to-know.php?country=[@country_link]">Words to Know</a>

                        </li>

                        <li>

                            <a href="/handbook/phrases-to-know.php?country=[@country_link]">Phrases to Know</a>

                        </li>

                        <li>

                            <a href="/handbook/help-images.php?country=[@country_link]">Help Images</a>

                        </li>

                    </ul>

                    <div class="submenu_title">Emergency Tools</div>

                    <ul>

                        <li>

                            <a href="/handbook/emergency-planning.php?country=[@country_link]">Emergency Planning</a>

                        </li>

                        <li>

                            <a href="/handbook/emergency-action-plan-steps.php?country=[@country_link]">Emergency Action Plan Steps</a>

                        </li>

                        <li>

                            <a href="/handbook/personal-emergency-action-plan.php?country=[@country_link]">Personal Emergency Action Plan</a>

                        </li>

                        <li class="last">

                            <a href="/handbook/emergency-card.php?country=[@country_link]">Emergency Card</a>

                        </li>

                    </ul>

                </li>

            </ul>

        </li>

    </ul>

                            <div class="clear"></div>

                        </div>

                    </div>

                </div>

                <!-- end of right_content_middle -->

                <div style="padding: 4px 0 0 0;"></div>

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

                        <div id="program_search_middle">

                            <div id="program_search_form">

                                  <form method="post" action="../../search.php">

            <div class="box_left_form">

                        <input id="rdoTypeID_0" name="Program_Type_ID" value="1" type="hidden"/>

                        <div class="ps_country" style="position:relative;display:inline-block;">

                <div class="ps_label">

                    <label for="selProgCntry">Select A Country</label>

                </div>

                <div class="ps_list">

                    <select name="pc" id="selProgCntry" class="form-control" onchange="document.forms['searchForm'].elements['pi'].selectedIndex = 0; document.forms['searchForm'].elements['pr'].selectedIndex = 0;">

                        <option value="" selected="selected">Any/All Countries</option>

                        <option value="Argentina">Argentina</option>

                        <option value="Atlantic Ocean">Atlantic Ocean</option>

                        <option value="Australia">Australia</option>

                        <option value="Austria">Austria</option>

                        <option value="Bahamas">Bahamas</option>

                        <option value="Bangladesh">Bangladesh</option>

                        <option value="Belgium">Belgium</option>

                        <option value="Belize">Belize</option>

                        <option value="Bermuda">Bermuda</option>

                        <option value="Bhutan">Bhutan</option>

                        <option value="Bolivia">Bolivia</option>

                        <option value="Botswana">Botswana</option>

                        <option value="Brazil">Brazil</option>

                        <option value="Bulgaria">Bulgaria</option>

                        <option value="Burkina Faso">Burkina Faso</option>

                        <option value="Cambodia">Cambodia</option>

                        <option value="Cameroon">Cameroon</option>

                        <option value="Canada">Canada</option>

                        <option value="Cayman Islands">Cayman Islands</option>

                        <option value="Chile">Chile</option>

                        <option value="China">China</option>

                        <option value="Colombia">Colombia</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia">Croatia</option>

                        <option value="Croatia, Republic of">Croatia, Republic of</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="Ecuador">Ecuador</option>

                        <option value="Egypt">Egypt</option>

                        <option value="El Salvador">El Salvador</option>

                        <option value="Equatorial Guinea">Equatorial Guinea</option>

                        <option value="Estonia">Estonia</option>

                        <option value="Ethiopia">Ethiopia</option>



                        <option value="Fiji">Fiji</option>

                        <option value="Finland">Finland</option>

                        <option value="France">France</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Greece">Greece</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Korea, South">Korea, South</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Macedonia">Macedonia</option>

                        <option value="Madagascar">Madagascar</option>

                        <option value="Malaysia">Malaysia</option>

                        <option value="Mali">Mali</option>

                        <option value="Malta">Malta</option>

                        <option value="Martinique">Martinique</option>

                        <option value="Mexico">Mexico</option>

                        <option value="Mongolia">Mongolia</option>

                        <option value="Montenegro">Montenegro</option>

                        <option value="Montserrat">Montserrat</option>

                        <option value="Morocco">Morocco</option>

                        <option value="Multiple">Multiple</option>

                        <option value="Namibia">Namibia</option>

                        <option value="Nepal">Nepal</option>

                        <option value="Netherlands">Netherlands</option>

                        <option value="Netherlands Antilles">Netherlands Antilles</option>

                        <option value="New Zealand">New Zealand</option>

                        <option value="Nicaragua">Nicaragua</option>

                        <option value="Niger">Niger</option>

                        <option value="Norway">Norway</option>

                        <option value="Oman">Oman</option>

                        <option value="Palestinian Territories">Palestinian Territories</option>

                        <option value="Panama">Panama</option>

                        <option value="Paraguay">Paraguay</option>

                        <option value="Peru">Peru</option>

                        <option value="Philippines">Philippines</option>

                        <option value="Poland">Poland</option>

                        <option value="Portugal">Portugal</option>

                        <option value="Puerto Rico">Puerto Rico</option>

                        <option value="Qatar">Qatar</option>

                        <option value="Russia">Russia</option>

                        <option value="Russian Federation">Russian Federation</option>

                        <option value="Rwanda">Rwanda</option>

                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>

                        <option value="Samoa">Samoa</option>

                        <option value="Senegal">Senegal</option>

                        <option value="Serbia">Serbia</option>

                        <option value="Singapore">Singapore</option>

                        <option value="Slovenia">Slovenia</option>

                        <option value="South Africa">South Africa</option>

                        <option value="South Korea">South Korea</option>

                        <option value="Spain">Spain</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syria">Syria</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tanzania">Tanzania</option>

                        <option value="Thailand">Thailand</option>

                        <option value="Tibet">Tibet</option>

                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>

                        <option value="Tunisia">Tunisia</option>

                        <option value="Turkey">Turkey</option>

                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>

                        <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>

                        <option value="Uganda">Uganda</option>

                        <option value="Ukraine">Ukraine</option>

                        <option value="United Arab Emirates">United Arab Emirates</option>

                        <option value="United Kingdom">United Kingdom</option>

                        <option value="United States">United States</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Various">Various</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                    </select>

                </div>

            </div><br />

            <div class="ps_term" style="position:relative;display:inline-block;">

                <div class="ps_label">

                    <label for="selProgTerm">Select A Term</label>

                </div>

                <div class="ps_list">

                    <select name="pt" id="selProgTerm" class="form-control">

                    <option value="" selected="selected">Any/All Terms</option>



                        <option value="Academic Year">Academic Year</option>

                        

                            <option value="Calendar Year">Calendar Year</option>

                        

                            <option value="Fall">Fall</option>

                        

                            <option value="J-Term">J-Term</option>

                        

                            <option value="Jan Term">Jan Term</option>

                        

                            <option value="Janterm">Janterm</option>

                        

                            <option value="May Term">May Term</option>

                        

                            <option value="Semester">Semester</option>

                        

                            <option value="Spring">Spring</option>

                        

                            <option value="Summer">Summer</option>

                        

                            <option value="Summer I">Summer I</option>

                        

                            <option value="Summer II">Summer II</option>

                        

                            <option value="Summer III">Summer III</option>

                        

                            <option value="Summer IV">Summer IV</option>

                        

                            <option value="Trimester">Trimester</option>

                        

                            <option value="Winter">Winter</option>



                    </select>

                </div>

            </div>                        

                

            

<br />

            <div class="ps_region" style="position:relative;display:inline-block;">

                <div class="ps_label">

                    <label for="selProgRegion">Select A Region</label>

                </div>

                <div class="ps_list">

                    <select name="pr" id="selProgRegion" class="form-control" onchange="document.forms['searchForm'].elements['pc'].selectedIndex = 0; document.forms['searchForm'].elements['pi'].selectedIndex = 0;">

                        <option value="" selected="selected">Any/All Regions</option>

                        <option value="Africa">Africa</option>

                        <option value="Asia">Asia</option>

                        <option value="At Sea">At Sea</option>

                        <option value="Australia/Pacific Islands">Australia/Pacific Islands</option>

                        <option value="Caribbean">Caribbean</option>

                        <option value="Central America">Central America</option>

                        <option value="Europe">Europe</option>

                        <option value="Latin America">Latin America</option>

                        <option value="Middle East">Middle East</option>

                        <option value="Multiple">Multiple</option>

                        <option value="North America">North America</option>

                        <option value="South America">South America</option>

                        <option value="Various">Various</option>

                        <option value="West Indies">West Indies</option>

                    </select>

                </div>

          

           <div class="ps_region" style="position:relative;display:inline-block;">

                    <div class="ps_label" style="margin:10px 0px 0px 0px">

                        <label for="selProgCity">Select An Area Of Study</label>

                    </div>

            <div class="ps_list" style="margin:0px 0px 10px 0px" >

                    <select id="selProg51" name="p_10003" class="form-control" ><option value="" selected="selected">Any/All Areas of Study</option>

                                                

                                                    <option value="Aboriginal Studies">Aboriginal Studies</option>

                                                

                                                    <option value="Accessories Design">Accessories Design</option>

                                                

                                                    <option value="Accounting">Accounting</option>

                                                

                                                    <option value="Acting/Performance Art">Acting/Performance Art</option>

                                                

                                                    <option value="Advertising">Advertising</option>

                                                

                                                    <option value="African Studies">African Studies</option>

                                                

                                                    <option value="Agriculture">Agriculture</option>

                                                

                                                    <option value="American Studies">American Studies</option>

                                                

                                                    <option value="Anthropology">Anthropology</option>

                                                

                                                    <option value="Arabic">Arabic</option>

                                                

                                                    <option value="Arabic Language & Literature">Arabic Language & Literature</option>

                                                

                                                    <option value="Archaeology">Archaeology</option>

                                                

                                                    <option value="Architectural History">Architectural History</option>

                                                

                                                    <option value="Architecture">Architecture</option>

                                                

                                                    <option value="Art">Art</option>

                                                

                                                    <option value="Art History">Art History</option>

                                                

                                                    <option value="Arts">Arts</option>

                                                

                                                    <option value="Asian Studies">Asian Studies</option>

                                                

                                                    <option value="Astronomy">Astronomy</option>

                                                

                                                    <option value="Biochemistry">Biochemistry</option>

                                                

                                                    <option value="Biology">Biology</option>

                                                

                                                    <option value="Botany">Botany</option>

                                                

                                                    <option value="Business">Business</option>

                                                

                                                    <option value="Business Design">Business Design</option>

                                                

                                                    <option value="Business Information Systems">Business Information Systems</option>

                                                

                                                    <option value="Caribbean Studies">Caribbean Studies</option>

                                                

                                                    <option value="Catalan Language & Literature">Catalan Language & Literature</option>

                                                

                                                    <option value="Celtic/Irish Studies">Celtic/Irish Studies</option>

                                                

                                                    <option value="Central Asian Studies">Central Asian Studies</option>

                                                

                                                    <option value="Chemistry">Chemistry</option>

                                                

                                                    <option value="Child Development">Child Development</option>

                                                

                                                    <option value="Chinese">Chinese</option>

                                                

                                                    <option value="Classical Studies">Classical Studies</option>

                                                

                                                    <option value="Communication">Communication</option>

                                                

                                                    <option value="Communication Design">Communication Design</option>

                                                

                                                    <option value="Communications">Communications</option>

                                                

                                                    <option value="Computer Science">Computer Science</option>

                                                

                                                    <option value="Creative Writing">Creative Writing</option>

                                                

                                                    <option value="Criminology">Criminology</option>

                                                

                                                    <option value="Culinary Arts">Culinary Arts</option>

                                                

                                                    <option value="Culture">Culture</option>

                                                

                                                    <option value="Culture,">Culture,</option>

                                                

                                                    <option value="Czech Language & Literature">Czech Language & Literature</option>

                                                

                                                    <option value="Dance">Dance</option>

                                                

                                                    <option value="Design">Design</option>

                                                

                                                    <option value="Developmental Sciences">Developmental Sciences</option>

                                                

                                                    <option value="Dietetics & Nutrition">Dietetics & Nutrition</option>

                                                

                                                    <option value="Earth Science">Earth Science</option>

                                                

                                                    <option value="Eastern European Studies">Eastern European Studies</option>

                                                

                                                    <option value="Ecology">Ecology</option>

                                                

                                                    <option value="Economics">Economics</option>

                                                

                                                    <option value="Education">Education</option>

                                                

                                                    <option value="Educational Administration">Educational Administration</option>

                                                

                                                    <option value="Engineering">Engineering</option>

                                                

                                                    <option value="English">English</option>

                                                

                                                    <option value="Enology">Enology</option>

                                                

                                                    <option value="Entrepreneurship">Entrepreneurship</option>

                                                

                                                    <option value="Environmental Studies">Environmental Studies</option>

                                                

                                                    <option value="European Studies">European Studies</option>

                                                

                                                    <option value="Fashion Design">Fashion Design</option>

                                                

                                                    <option value="Fashion Merchandising">Fashion Merchandising</option>

                                                

                                                    <option value="Film">Film</option>

                                                

                                                    <option value="Finance">Finance</option>

                                                

                                                    <option value="Fine Art">Fine Art</option>

                                                

                                                    <option value="Food Communications">Food Communications</option>

                                                

                                                    <option value="Food Technology and Management">Food Technology and Management</option>

                                                

                                                    <option value="Foresty">Foresty</option>

                                                

                                                    <option value="French">French</option>

                                                

                                                    <option value="Gastronomy">Gastronomy</option>

                                                

                                                    <option value="Gender Studies">Gender Studies</option>

                                                

                                                    <option value="Geography">Geography</option>

                                                

                                                    <option value="Geology">Geology</option>

                                                

                                                    <option value="German">German</option>

                                                

                                                    <option value="Government">Government</option>

                                                

                                                    <option value="Graphic Design">Graphic Design</option>

                                                

                                                    <option value="Greek">Greek</option>

                                                

                                                    <option value="Hausa">Hausa</option>

                                                

                                                    <option value="Health & Human Services">Health & Human Services</option>

                                                

                                                    <option value="Health Science">Health Science</option>

                                                

                                                    <option value="Hebrew">Hebrew</option>

                                                

                                                    <option value="Hindi">Hindi</option>

                                                

                                                    <option value="History">History</option>

                                                

                                                    <option value="Hospitality Management">Hospitality Management</option>

                                                

                                                    <option value="Human Resources Management">Human Resources Management</option>

                                                

                                                    <option value="Human Rights">Human Rights</option>

                                                

                                                    <option value="Humanities">Humanities</option>

                                                

                                                    <option value="Hungarian Language & Literature">Hungarian Language & Literature</option>

                                                

                                                    <option value="Iberian Studies">Iberian Studies</option>

                                                

                                                    <option value="Independent Study">Independent Study</option>

                                                

                                                    <option value="Information Design">Information Design</option>

                                                

                                                    <option value="Interdisciplinary Design">Interdisciplinary Design</option>

                                                

                                                    <option value="Interior Architecture">Interior Architecture</option>

                                                

                                                    <option value="Interior Design">Interior Design</option>

                                                

                                                    <option value="International Business">International Business</option>

                                                

                                                    <option value="International Relations">International Relations</option>

                                                

                                                    <option value="International Studies">International Studies</option>

                                                

                                                    <option value="Internships">Internships</option>

                                                

                                                    <option value="Italian">Italian</option>

                                                

                                                    <option value="Italian Language & Literature">Italian Language & Literature</option>

                                                

                                                    <option value="Japanese">Japanese</option>

                                                

                                                    <option value="Jewish Studies">Jewish Studies</option>

                                                

                                                    <option value="Journalism">Journalism</option>

                                                

                                                    <option value="Kinesiology">Kinesiology</option>

                                                

                                                    <option value="Korean">Korean</option>

                                                

                                                    <option value="Latin">Latin</option>

                                                

                                                    <option value="Latin American Studies">Latin American Studies</option>

                                                

                                                    <option value="Law">Law</option>

                                                

                                                    <option value="Liberal Arts">Liberal Arts</option>

                                                

                                                    <option value="Linguistics">Linguistics</option>

                                                

                                                    <option value="Literature">Literature</option>

                                                

                                                    <option value="Management">Management</option>

                                                

                                                    <option value="Mandarin">Mandarin</option>

                                                

                                                    <option value="Maori Studies">Maori Studies</option>

                                                

                                                    <option value="Marine Science">Marine Science</option>

                                                

                                                    <option value="Marketing">Marketing</option>

                                                

                                                    <option value="Mass Communications">Mass Communications</option>

                                                

                                                    <option value="Math/Statistics">Math/Statistics</option>

                                                

                                                    <option value="Mathematics & Statistics">Mathematics & Statistics</option>

                                                

                                                    <option value="Media Studies">Media Studies</option>

                                                

                                                    <option value="Middle Eastern Studies">Middle Eastern Studies</option>

                                                

                                                    <option value="Minority Studies">Minority Studies</option>

                                                

                                                    <option value="Molecular Biology">Molecular Biology</option>

                                                

                                                    <option value="Music">Music</option>

                                                

                                                    <option value="Music Studio Art">Music Studio Art</option>

                                                

                                                    <option value="Neuroscience">Neuroscience</option>

                                                

                                                    <option value="Nigerian Studies">Nigerian Studies</option>

                                                

                                                    <option value="Other Language & Literature">Other Language & Literature</option>

                                                

                                                    <option value="Peace & Conflict Studies">Peace & Conflict Studies</option>

                                                

                                                    <option value="Peace Studies">Peace Studies</option>

                                                

                                                    <option value="Philosophy">Philosophy</option>

                                                

                                                    <option value="Photography">Photography</option>

                                                

                                                    <option value="Physical Therapy/Rehabilitation">Physical Therapy/Rehabilitation</option>

                                                

                                                    <option value="Physics">Physics</option>

                                                

                                                    <option value="Polish Language & Literature">Polish Language & Literature</option>

                                                

                                                    <option value="Political Science">Political Science</option>

                                                

                                                    <option value="Politics">Politics</option>

                                                

                                                    <option value="Portuguese">Portuguese</option>

                                                

                                                    <option value="Pre-Health">Pre-Health</option>

                                                

                                                    <option value="Pre-Law">Pre-Law</option>

                                                

                                                    <option value="Print Making">Print Making</option>

                                                

                                                    <option value="Product Design">Product Design</option>

                                                

                                                    <option value="Psychology">Psychology</option>

                                                

                                                    <option value="Public Health">Public Health</option>

                                                

                                                    <option value="Public Relations">Public Relations</option>

                                                

                                                    <option value="Religion/Theology">Religion/Theology</option>

                                                

                                                    <option value="Russian">Russian</option>

                                                

                                                    <option value="Russian Literature">Russian Literature</option>

                                                

                                                    <option value="Russian Studies">Russian Studies</option>

                                                

                                                    <option value="Sciences">Sciences</option>

                                                

                                                    <option value="Serbo-Croatian">Serbo-Croatian</option>

                                                

                                                    <option value="Service Learning">Service Learning</option>

                                                

                                                    <option value="Shoe Design">Shoe Design</option>

                                                

                                                    <option value="Siberian Studies">Siberian Studies</option>

                                                

                                                    <option value="Social Policy & Administration">Social Policy & Administration</option>

                                                

                                                    <option value="Social Work">Social Work</option>

                                                

                                                    <option value="Sociology">Sociology</option>

                                                

                                                    <option value="Spanish">Spanish</option>

                                                

                                                    <option value="Sports">Sports</option>

                                                

                                                    <option value="Sports Science">Sports Science</option>

                                                

                                                    <option value="Studio Art">Studio Art</option>

                                                

                                                    <option value="Studio Arts">Studio Arts</option>

                                                

                                                    <option value="Tagalog">Tagalog</option>

                                                

                                                    <option value="Textile Design">Textile Design</option>

                                                

                                                    <option value="Thai">Thai</option>

                                                

                                                    <option value="Theater/Drama">Theater/Drama</option>

                                                

                                                    <option value="Tibetan">Tibetan</option>

                                                

                                                    <option value="Tourism">Tourism</option>

                                                

                                                    <option value="Ukrainian">Ukrainian</option>

                                                

                                                    <option value="Ukrainian Language & Culture">Ukrainian Language & Culture</option>

                                                

                                                    <option value="Urban Design">Urban Design</option>

                                                

                                                    <option value="Urban Studies">Urban Studies</option>

                                                

                                                    <option value="Vietnamese Language & Culture">Vietnamese Language & Culture</option>

                                                

                                                    <option value="Women\'s Studies">Women's Studies</option>

                                                

                                                    <option value="Womens Studies">Womens Studies</option>

                                                

                                                    <option value="Writing">Writing</option>

                                                

                                                    <option value="Zarma">Zarma</option>

                                                

                                                    <option value="Zoology">Zoology</option>

                                                

                                            </select>

            </div>

                </div><br /></div>   

                

                

                

              

                

                                      

                </div>

          <div class="box_right_form">

          <div class="box_button">

           <input type="image" name="submit" src="../images/search_button_blue.gif" alt="Search" title="Search" value="submit"/>

              </div>

        <div style="margin:0px 0px -10px 0px;" class="small_dark_blue_bold"><a href="/advancedsearch.php">Advanced Search</a></div>

        </div>

        <br /> <div class="box_bottom_form" style="margin:0px 0px -5px 0px; float:right;"><a href="http://terradotta.com/"><img alt="Terradotta Logo" src="../images/poweredbyterradotta.png" width="198" height="45" border="0"/></a></div>

        </form>

                            </div>

                        </div>

                        <!-- <div id="program_search_bottom"></div> -->

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
