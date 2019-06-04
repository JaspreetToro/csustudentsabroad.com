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

<div id="subpage_container">
<div id="subpage_left_container">
    <div id="links_subpage_left_container_top">
        <div id="links_nonav_subpage_content" >
            <script language="javascript">renderDiv(20);</script>
            <div>
                <div class="huge_light_blue_bold">
                    <?=$title?>
                </div>
                <div class="subpage_full_text">
                    <script language="javascript">renderDiv(10);</script>
                    <div class="big_dark_blue_bold">What is CSUStudentsAbroad.com?</div>
                    <script language="javascript">renderDiv(8);</script>
                    <p>CSUStudentsAbroad.com is a resource for students at all California State University (CSU) campuses contemplating studying abroad. This website includes the study abroad programs offered by the CSU Chancellor's Office (CSU International Programs) which are all year-long programs.  It also provides information about other programs offered by the other 23 CSU campuses that are available for any CSU student.  Unlike other study abroad websites, along with providing program information, the information on CSUStudentsAbroad.com provides insights on the importance of health and safety awareness in general, and specifically for countries where we've developed a Country Handbook. Our website includes <a href="handbook/introduction.php?country=General">48 country-specific study abroad handbooks</a>, which give students the details necessary to hit the ground running and learn the ins and outs of their destination. While our <a href="handbook/introduction.php?country=General">general handbook</a> is designed as a global guide, it enriches all students&#39; understanding so they may safely and smoothly navigate their host country and become savvy travellers empowered to get the most out of their study abroad experience.</p>
                    <p>Although choosing an educational program, financing education, and applying to a university abroad can be confusing and sometimes overwhelming, CSUStudentsAbroad.com enables students to research program offerings and access resources that guide them each step of the way&mdash;from learning basic phrases to becoming acquainted with the local transportation system. </p>
                    <p>CSUStudentsAbroad.com facilitates not only students&#39;, but also parents&#39;, learning about the various challenges faced in the study abroad experience, which include culture shock, drug and alcohol abuse, and general mental health. In addition to these tools, the "<a href="search.php">Program Search</a>" option encourages students to explore the study abroad option best fitting their interests, especially in non-traditional study abroad countries, such as Thailand, Morocco, and Peru. Such search innovations make essential information accessible, which assist students in finding the program perfect for them!</p>
                    <script language="javascript">renderDiv(20);</script>
                    <div class="big_dark_blue_bold">Who's behind CSUStudentsAbroad.com?</div>
                    <script language="javascript">renderDiv(8);</script>
                    <p>This website was created with the help of staff, and returned study abroad students at the Center for Global Education at the CSUDH College of Extended & International Education. We hope this content will help you find a quality program, have a great study abroad experience, and then return home to integrate your international learning in the U.S. We are very enthusiastic about helping study abroad students and hope you can learn a lot from this website!</p>
                </div>
                <!-- end of  subpage_full_text-->
            </div>
            <!-- end of class small grey -->
            <div>&nbsp;</div>
            <p></p>
        </div>
        <!-- end of nonav_subpage_content -->
    </div>
    <!-- end of subpage_left_container_top  -->
    
</div>
<!-- end of subpage_left_container -->
<div id="subpage_middle_container">
    
</div>
<div id="subpage_right_container">
        <div id="right_content">
<div id="right_content_middle">

      <div id="sponsors">

                <div id="sponsors_title_container">

                    <div class="sponsors_title"> CSU Study Abroad Programs </div>

                </div>

                <div id="sponsors1">

                    <div>

                        <?php 
                        
                        printCSUschools()   ;               
    
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
<div id="quicklinks_middle">

              <div id="quicklinks">

                                <ul>

                                    <li><a href="handbook/top-10-health-and-safety-issues.php?country=General">Top 10 Health &amp; Safety Tips</a></li>

                                    <li><a href="handbook/communication-info-sheets.php?country=General">Communication Info Sheets</a></li>

                                    <li style="border-bottom:none;"><a href="handbook/emergency-planning.php?country=General">Emergency Planning</a></li>

                                </ul>

                            </div>

                        </div>
</div>

                </div>

            </div>

            <!-- end of right_content_middle -->
        </div>

        <!-- end of right_content -->

    </div>
    <!-- end of subpage_right_container -->
</div>
</div>
<!-- end of subpage_container -->
<?php
}
//end of printBody
?>
