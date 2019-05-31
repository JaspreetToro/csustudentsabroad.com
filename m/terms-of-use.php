<?php 
include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$page_name = "Conditions of Use";
$pageTitle = "";
$menu = 1;

printHeader($page_name, $menu, "");
printBody();
printFooter();

//***************************************************end of main function*******************************************************
function printBody() {
?>

<div id="wrapper">
<div id="main-content">
    <div id="scroller">
        <div id="content">
                    <h1 id="title">
                        <?=$title ?>
                    </h1>
                    <div class="subpage_full_text">
                        <p><strong>ATTENTION: PLEASE READ THESE TERMS CAREFULLY BEFORE USING THE WEB SITE. USING THIS WEB SITE INDICATES THAT YOU ACCEPT THESE TERMS. IF YOU DO NOT ACCEPT THESE TERMS, DO NOT USE THIS WEB SITE.</strong> </p>
                        <p><strong>Use of Site.</strong> The Center for Global Education ("CGE") Web Site ("Site") has been created as an Academic Curricular Tool by Gary Rhodes, Ph.D and the staffs at the Center for Global Education. It is only for your personal, non-commercial use, provided that you retain all copyright and other proprietary notices contained in the original materials and any copies of the materials. You may not modify the materials at this Site in any way or reproduce or publicly display, perform, or distribute or otherwise use them for any public or commercial use without prior approval by Prof. Rhodes. The materials at this site are copyrighted and any unauthorized use of any materials at this Site may violate copyright, trademark, and other laws. ALL INFORMATION PUBLISHED ON THIS SITE IS INTENDED ONLY TO SERVE AS AN ACADEMIC FORUM FOR SHARING RESOURCES TO PROVIDE BACKGROUND INFORMATION AND NOT TO BE USED "AS IS" TO DEVELOP ANY POLICIES, PROCEDURES, OR OTHER RESOURCES. </p>
                        <p><strong>User Submissions.</strong> Any material, information, sample forms or policies, articles, or other communication you transmit or post to this Site will be considered non-confidential and non-proprietary ("Communications"). CGE will have no obligations with respect to the Communications. CGE and its designees will be free to copy, disclose, distribute, incorporate, and otherwise use the Communications and all data, images, sounds, text, and other things embodied therein for any and all academic, commercial, or non-commercial purposes. You are prohibited from posting or transmitting to or from this Site any unlawful, threatening, libelous, defamatory, obscene, pornographic, or other material that would violate any law. </p>
                        <p><strong>Links to Other Web Sites:</strong> Links to third party Web sites on this Site are provided solely as a convenience to you. If you use these links, you will leave this Site. CGE has not reviewed all of these third party sites (and if CGE has, it has no control of revisions or modifications of these sites) and does not control and is not responsible for any of these sites or their content. Thus, CGE does not endorse or make any representation about them, or any information, software or other products or materials found there, or any results that may be obtained from using them. If you decide to access any of the third party sites linked to this Site, you do this entirely at your own risk. </p>
                        <p><strong>Disclaimer.</strong> THE MATERIALS PROVIDED AT THIS SITE ARE PROVIDED "AS IS" WITHOUT ANY WARRANTIES OF ANY KIND INCLUDING WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT OF INTELLECTUAL PROPERTY. CGE further does not warrant the accuracy and completeness of the materials at this Site. CGE may make changes to the materials at this Site, at any time, and without notice. The materials at this Site may be out of date, and CGE makes no commitment to update the materials at this Site. Information published at this Site may refer to information, materials, programs, and services that are not available in your country. </p>
                        <p><strong>Limitation of Liability.</strong> ALL INFORMATION PUBLISHED ON THIS SITE IS INTENDED ONLY TO SERVE AS AN ACADEMIC FORUM FOR SHARING RESOURCES TO PROVIDE BACKGROUND INFORMATION AND NOT TO BE USED "AS IS" TO DEVELOP ANY POLICIES, PROCEDURES, OR OTHER RESOURCES. IN NO EVENT WILL CGE, OR ANY OF THOSE WHO PROVIDE RESOURCES WHICH ARE PUBLISHED ON THE CGE SITE, CONSORTIUM MEMBERS, OR THIRD PARTIES MENTIONED AT THIS SITE BE LIABLE FOR ANY DAMAGES WHATSOEVER (INCLUDING, WITHOUT LIMITATION, THOSE RESULTING FROM LOST PROFITS, LOST DATA OR BUSINESS INTERRUPTION, ANY DATA ABOUT HEALTH OR SAFETY IN THE UNITED STATES OR ANY OTHER PART OF THE WORLD) ARISING OUT OF THE USE, INABILITY TO USE, OR THE RESULTS OF USE OF THIS SITE, ANY WEB SITES LINKED OT THIS SITE, OR THE MATERIALS OR INFORMATION CONTAINED AT ANY OR ALL SUCH SITES, WHETHER BASED ON WARRANTY, CONTRACT, TORT, OR ANY OTHER LEGAL THEORY AND WHETHER OR NOT ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. IF YOUR USE OF THE MATERIALS OR INFORMATION
                            FORM THIS SITE RESULTS IN THE NEED FOR SERVICING, REPAIR OR CORRECTION OF EQUIPMENT OR DATA, YOU ASSUME ALL COSTS THEREOF. </p>
                        <p><strong>General.</strong> CGE may revise these Terms at any time by updating this posting. You should visit this page from time to time to review Then-current Terms because they are binding on you. Certain provisions of these Terms may be superseded by expressly designated legal notices or terms located on particular pages at this site. </p>
                    </div>
        </div>
    </div>
    <div id="sponsor"> <?php printBannerSponsor() ?> </div>
</div>
<?php
}
?>
