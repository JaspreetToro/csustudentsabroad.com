<?php 
include "lib/common.php";

//***************************************************main function***************************************************************
$pageTitle = "About UniWorldWide.org";

printHeader(2, $pageTitle);
printBody();
printFooter(1);

//***************************************************end of main function*******************************************************
function printContent()
{
	global $pageTitle;	
?>
<div class="left_row">
    <div class="left_row_wrapper">
        <div id="about">
        	<h2 class="ribbon"><?php echo $pageTitle; ?></h2>
            <div class="about_wrapper">
                <!-- <div class="label">
                    <div class="label_wrapper"><span><?php echo $pageTitle; ?></span></div>
                </div> -->
                <div class="content">
                    <h2>Why UniWorldWide.org</h2>
                    <div>
                        <p><a href="http://uniworldwide.org">UniWorldWide.org</a> has been developed to help carry out the mission of the Global Dialogue on the Future of Internationalisation of Higher Education which took place in January 2014 at Nelson Mandela Bay in South Africa. This resource supports the desire of participants to be more inclusive and expand the discussion to representatives of higher education associations around the world to support information sharing and develop common goals and methods for internationalisation. </p>
                        <p>The participants, representing international <a href="associations.php#higher-education-associations">higher education associations</a> and <a href="associations.php#higher-education-organizations">organizations</a> as noted in the full proceedings of the <a href="about.php#global-dialogue">Global Dialogue</a> suggested that a first step was to look at two (2) key documents, translate them to additional languages, and obtain feedback from higher education associations around the world to support future collaboration. The documents are:</p>
                        <ul>
                            <li><em><a target="_blank" href="http://www.iau-aiu.net/sites/all/files/Affirming_Academic_Values_in_Internationalization_of_Higher_Education.pdf">Affirming Academic Values in Internationalization of Higher Education: A Call for Action</a></em>, adopted by the &lsquo;International Association of Universities&rsquo; (IAU), April 2012.
                                </li>
                            <li><em><a target="_blank" href="http://www.eaie.org/home/in-the-field/policy-advocacy/international-student-mobility-charter">International Student Mobility Charter</a></em>, adopted by the &lsquo;European Association for International Education&rsquo; (EAIE) and the &lsquo;International Education Association of Australia&rsquo; (IEAA) in association with other like-minded associations around the world, September 2012.
                                </li>
                        </ul>
                        <p>We are asking colleagues at higher education associations around the world to review these two documents to expand the dialogue on the future or international higher education. We hope that colleauges can also provide translated versions of these documents, so that can be reviewed in the first language of those interested in international higher education collaboration. On the top right corner of this website, you can "Select a Language" to view the website content in a variety of other languages.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                 
<div class="left_row">
    <?php printAboutGlobalDialogue() ?>
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
