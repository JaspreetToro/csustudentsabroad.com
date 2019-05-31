<?php 
include "lib/common.php";
//include "lib/conn_data.php";
//include "lib/tag_cloud.php";
//include "lib/stemmer.php";

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

//print_r($user->data);

//***************************************************main function***************************************************************
printHeader(3, "Student Handbooks: How to Get There and Back");
printBody();
printFooter();

//***************************************************end of main function*******************************************************


function printBody()
{
		global $user;
?>

<div id="content">
  <div id="top_header_container">
    <div class="student_handbook_header_container">
      <div class="student_handbook_header">
        <div class="country_specific">
          <div class="country_specific_content"> </div>
        </div>
      </div>
    </div>
  </div>
  <div id="left_content">
    <!-- height: need to be fixed once you got the graphic, now it is overflow -->
    <div id="left_content_top"></div>
    <div id="left_content_middle">
    	<div id="left_content_main_top">
            <div id="glowingtab_handbook_container">
                <?php printHandbookNavBar() ?>
            </div>
        </div>
      <!-- quick links must be in with title and content in order to make the look -->
      <!-- change width by going to style.css -->
        <div id="left_content_main_bottom">
        	<?php
    			if($_SERVER['QUERY_STRING']!=''){
     		?>
        	<div id="template_test">
            	<?php include "template/alpha/introduction.php"; ?>
            </div>
        	<?php
				}else{
     		?>
            <div id="quick_links">
                <ul id="quick_links_list">
                    <li class="quick_links_item"><a href="#">U.S. Department of State Consular Information Sheet</a></li>
                    <li class="quick_links_item"><a href="#">Embassies are Fun</a></li>
                    <li class="quick_links_item"><a href="#">Happy Links</a></li>
                    <li class="quick_links_item"><a href="#">Fun Links</a></li>
                </ul>
            </div>
            <div id="actual_content">
                <h1 id="title" style="">Introduction</h1>      
                <p>When preparing to study abroad, it is important to gain a balance perspective. Safety is a global, nationa, regional, and local phenomenon. As Americans have come to realize, the United States is no more immune to acts of crime or violence than other parts of the world.</p>
                <p>Internet research is one of easiest ways to find more information about where you would like to study. The Center for Global Education compiled a condensed list of information and helpful Internet resources for students considering study abroad. In creating this site, the Center's goals are to help educate and inform students so that they can enjoy</p> 
            </div> 
            <?php
				}
     		?> 
        </div>  
    </div>    
    <div id="left_content_bottom"></div>
  </div>
  <!-- end of left_content -->
  <div id="middle_content"></div>
  <div id="right_content">
    <div id="right_content_top">
    	<div id="right_content_text_container1">	
            <div id="right_content_text">Prepare to Study Abroad. Read the Student Handbook. <span style="color: #FFFFFF">It's Free!</span> </div>
        </div>
    </div>        
    <div id="right_content_middle">
      <div id="study_abroad_resources">
        <div id="student_handbook_title_container">
          <div id="student_handbook_title">Student Handbook</div>
        </div>
        <div class="student_handbook_menu"> <?php printStudentHandbookMenu()?> </div>
      </div>
      <div style="height:5px; font-size: 1px;"></div>
      <div id="program_search">
        <div id="program_search_top" title="STUDY ABROAD PROGRAM SEARCH"> <span class="program_search_title">STUDY ABROAD PROGRAM SEARCH</span> </div>
        <div id="program_search_middle"> <?php printProgramSearchForm()?> </div>
        <div id="program_search_bottom"></div>
      </div>
      <div id="sponsors">
        <div id="sponsors_title_container">
          <div class="sponsors_title"> Sponsors </div>
        </div>
        <div class="sponsors1">
          <div id="main_sponsors_featured"> <a href="http://www.aguglobal.com/" target="_blank"><img src="images/dummy-images/studio_abroad_logo.jpg"/></a> <a href="http://studiesabroad.com/" target="_blank"><img src="images/dummy-images/International-Studies-Abroad-ISA-Logo.jpg"/></a> </div>
        </div>
        <!--
					NOTE: if have more sponsor, insert here
				<div class="sponsors2">
					
				</div>
				-->
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

function printHandbookNavBar()
{
?> 
<div id="nav-bar" class="droplinebar">
	<ul>
		<li><a onclick="return false"><span>Introduction</span></a>
			<div class="introduction_mega_menu">
				<div>
					<h1>Look</h1>
					These menu of different length because they belong to different class.
					The width is calculate dynamically upon the parent ul.
				</div>
			</div>
		</li>
		<li><a onclick="return false"><span>Choosing A Program</span></a> 
			<div class="choosing_mega_menu">
				<div>
					<h1>You can put anything in here I hope</h1>
					<ul>
						<li>Sample</li>
						<li>List</li>
					</ul>
				</div>
			</div>									
		</li>
		<li><a onclick="return false"><span>Practical Information</span></a>
			<div class="practical_mega_menu">
				<div>
					<h1>You can put anything in here I hope</h1>
					<ul>
						<li>Sample</li>
						<li>List</li>
					</ul>
				</div>
			</div>
		</li>
		<li> <a onclick="return false"><span>Health &amp; Safety</span></a> 
			<div class="health_mega_menu">
				<div>
					<h1>You can put anything in here I hope</h1>
					<ul>
						<li>Sample</li>
						<li>List</li>
					</ul>
				</div>
			</div>
		</li>
		<li><a onclick="return false"><span>Coming Home</span></a>
			<div class="comming_mega_menu">
				<div>
					<h1>You can put anything in here I hope</h1>
					<ul>
						<li>Sample</li>
						<li>List</li>
					</ul>
				</div>
			</div>									
		</li>
		<li><a><span>Tools For Planning</span></a>
			<div class="tool_mega_menu">
				<div>
					<h1>You can put anything in here I hope</h1>
					<ul>
						<li>Sample</li>
						<li>List</li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
</div>	
<?
}

function printProgramSearchForm()
{
?>
<div id="program_search_form">
  <form name="searchForm" method="post" action="http://directory.studioabroad.com/index.cfm" class="ps_form">
    <div class="box_left_form">
      <input id="rdoTypeID_0" name="Program_Type_ID" value="O" type="hidden">
      <div class="ps_country">
        <select name="pc" id="selProgCntry">
          <option selected="selected" value="choose">Choose a Country</option>
          <option value="">Any Country</option>
          <option value="Argentina">Argentina</option>
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
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
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
          <option value="Lithuania">Lithuania</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Martinique">Martinique</option>
          <option value="Mexico">Mexico</option>
          <option value="Mongolia">Mongolia</option>
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
          <option value="Samoa">Samoa</option>
          <option value="Senegal">Senegal</option>
          <option value="Serbia">Serbia</option>
          <option value="Singapore">Singapore</option>
          <option value="South Africa">South Africa</option>
          <option value="South Korea">South Korea</option>
          <option value="Spain">Spain</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syria">Syria</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
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
      <div class="ps_term">
        <select name="pt" id="selProgTerm">
          <option selected="selected" value="choose">Choose a Term</option>
          <option value="">Any/All Terms</option>
          <option value="Summer IV">Summer IV</option>
          <option value="Summer I">Summer I</option>
          <option value="Summer III">Summer III</option>
          <option value="Winter">Winter</option>
          <option value="Summer">Summer</option>
          <option value="Semester">Semester</option>
          <option value="Trimester">Trimester</option>
          <option value="Spring">Spring</option>
          <option value="Jan Term">Jan Term</option>
          <option value="Academic Year">Academic Year</option>
          <option value="Summer II">Summer II</option>
          <option value="Fall">Fall</option>
          <option value="May Term">May Term</option>
          <option value="Calendar Year">Calendar Year</option>
        </select>
      </div>
      <div class="ps_region">
        <select name="pr" id="selProgRegion">
          <option selected="selected" value="choose">Choose a Region</option>
          <option value="">Any/All Regions</option>
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
      <div class="ps_area">
        <select id="selProg49" name="p_10003">
          <option selected="selected" value="choose">Choose an Area of Study</option>
          <option value="">Any/All Areas of Study</option>
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
          <option value="Arabic Language &amp; Literature">Arabic Language &amp; Literature</option>
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
          <option value="Catalan Language &amp; Literature">Catalan Language &amp; Literature</option>
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
          <option value="Czech Language &amp; Literature">Czech Language &amp; Literature</option>
          <option value="Dance">Dance</option>
          <option value="Developmental Sciences">Developmental Sciences</option>
          <option value="Dietetics &amp; Nutrition">Dietetics &amp; Nutrition</option>
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
          <option value="Graphic Design">Graphic Design</option>
          <option value="Greek">Greek</option>
          <option value="Hausa">Hausa</option>
          <option value="Health &amp; Human Services">Health &amp; Human Services</option>
          <option value="Hebrew">Hebrew</option>
          <option value="History">History</option>
          <option value="Hospitality Management">Hospitality Management</option>
          <option value="Human Resources Management">Human Resources Management</option>
          <option value="Humanities">Humanities</option>
          <option value="Hungarian Language &amp; Literature">Hungarian Language &amp; Literature</option>
          <option value="Iberian Studies">Iberian Studies</option>
          <option value="Independent Study">Independent Study</option>
          <option value="Interdisciplinary Design">Interdisciplinary Design</option>
          <option value="Interior Architecture">Interior Architecture</option>
          <option value="Interior Design">Interior Design</option>
          <option value="International Business">International Business</option>
          <option value="International Relations">International Relations</option>
          <option value="International Studies">International Studies</option>
          <option value="Internships">Internships</option>
          <option value="Italian">Italian</option>
          <option value="Italian Language &amp; Literature">Italian Language &amp; Literature</option>
          <option value="Japanese">Japanese</option>
          <option value="Jewish Studies">Jewish Studies</option>
          <option value="Journalism">Journalism</option>
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
          <option value="Mathematics &amp; Statistics">Mathematics &amp; Statistics</option>
          <option value="Media Studies">Media Studies</option>
          <option value="Middle Eastern Studies">Middle Eastern Studies</option>
          <option value="Minority Studies">Minority Studies</option>
          <option value="Molecular Biology">Molecular Biology</option>
          <option value="Music">Music</option>
          <option value="Music Studio Art">Music Studio Art</option>
          <option value="Nigerian Studies">Nigerian Studies</option>
          <option value="Other Language &amp; Literature">Other Language &amp; Literature</option>
          <option value="Peace &amp; Conflict Studies">Peace &amp; Conflict Studies</option>
          <option value="Peace Studies">Peace Studies</option>
          <option value="Philosophy">Philosophy</option>
          <option value="Photography">Photography</option>
          <option value="Physics">Physics</option>
          <option value="Polish Language &amp; Literature">Polish Language &amp; Literature</option>
          <option value="Political Science">Political Science</option>
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
          <option value="Social Policy &amp; Administration">Social Policy &amp; Administration</option>
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
          <option value="Tourism">Tourism</option>
          <option value="Ukrainian">Ukrainian</option>
          <option value="Ukrainian Language &amp; Culture">Ukrainian Language &amp; Culture</option>
          <option value="Urban Studies">Urban Studies</option>
          <option value="Vietnamese Language &amp; Culture">Vietnamese Language &amp; Culture</option>
          <option value="Women's Studies">Women's Studies</option>
          <option value="Writing">Writing</option>
          <option value="Zarma">Zarma</option>
          <option value="Zoology">Zoology</option>
        </select>
      </div>
    </div>
    <div class="box_right_form">
      <div class="box_button">
        <input name="Program_Name" id="txtProgramName" value="" type="hidden">
        <input type="hidden" name="pi" value="" />
        <input type="image" name="btnSubmit" src="images/search_button_blue.gif" alt="Search" align="absmiddle" title="Search">
        <input type="hidden" name="FuseAction" value="Programs.SearchResults">
        <input type="hidden" name="SimpleSearch" value="1">
      </div>
      <div class="box_advanced"> <a href="#" class="small_dark_blue_bold">Advanced Search</a> </div>
    </div>
    <div class="box_bottom_form"> <a href="http://terradotta.com/"><img src="images/poweredbyterradotta.png" width="198" height="45" border="0"/></a> </div>
  </form>
</div>
<?php                     	
}
function printCountryHandbooks()
{
?>
<div id="handbooks_search_form">
  <div class="handbooks_search_select_container">
    <div class="handbooks_search_country">
      <select name="pch_country" id="pch_selProgCntry">
        <option selected="selected">Choose Country</option>
        <option value="Argentina">Argentina</option>
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
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
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
        <option value="Lithuania">Lithuania</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Martinique">Martinique</option>
        <option value="Mexico">Mexico</option>
        <option value="Mongolia">Mongolia</option>
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
        <option value="Samoa">Samoa</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia">Serbia</option>
        <option value="Singapore">Singapore</option>
        <option value="South Africa">South Africa</option>
        <option value="South Korea">South Korea</option>
        <option value="Spain">Spain</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syria">Syria</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Thailand">Thailand</option>
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
    <div class="handbooks_search_button">
      <input type="image" name="btnSubmit" src="http://studyus.org/studentsabroad/images/search_button_gold.gif" alt="Search" align="absmiddle" title="Search">
    </div>
  </div>
</div>
<?php
}

function printFeaturedPrograms()
{
?>
<div id="main_header_container">
  <div id="main_header"> <span class="box_title">FEATURED PROGRAMS</span>
    <div id="featured">
      <!--<div class="content" style="">
                <h1>Orbit does content now.</h1>
                <h3>Highlight me...I'm text.</h3>
            </div>-->
      <img src="images/dummy-images/captions.jpg" data-caption="#htmlCaption1" alt="Featured Program 1" /> <img src="images/dummy-images/features.jpg" data-caption="#htmlCaption2" alt="Featured Program 2" /> <img src="images/dummy-images/coffee.jpg" data-caption="#htmlCaption3" alt="Featured Program 3" /> </div>
    <!-- Captions for Orbit -->
    <span class="orbit-caption" id="htmlCaption1"><strong>Caption 1:</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;<br />
    <a href="#">Read Full Story</a></span> <span class="orbit-caption" id="htmlCaption2"><strong>Caption 2:</strong> <em>Black box</em> is the same size with image :)<br />
    <a href="#">Read Full Story</a></span> <span class="orbit-caption" id="htmlCaption3"><strong>Caption 3:</strong> <em>style</em> or anything that is valid markup :)<br />
    <a href="#">Read Full Story</a></span> </div>
</div>
<?php
}

function printStudentHandbookMenu()
{
?>
<ul class="student_handbook_container">
  <li class="menu">
    <ul>
      <li class="button"><a href="#" class="dropdown_button">Introduction<span></span></a></li>
      <li class="dropdown">
        <ul>
          <li><a href="#">Why Study Abroad?</a></li>
          <li><a href="#">Why Learn a Language?</a></li>
          <li class="last"><a href="#">Advice for Parents</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li class="menu">
    <ul>
      <li class="button"><a href="#" class="dropdown_button">Choosing a Program<span></span></a></li>
      <li class="dropdown">
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li class="last"><a href="#">link 3</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li class="menu">
    <ul>
      <li class="button"><a href="#" class="dropdown_button">Practical Information<span></span></a></li>
      <li class="dropdown">
        <ul>
          <ul>
            <li><a href="#">link 1</a></li>
            <li><a href="#">link 2</a></li>
            <li class="last"><a href="#">link 3</a></li>
          </ul>
        </ul>
      </li>
    </ul>
  </li>
  <li class="menu">
    <ul>
      <li class="button"><a href="#" class="dropdown_button">Health and Security<span></span></a></li>
      <li class="dropdown">
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li class="last"><a href="#">link 3</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li class="menu">
    <ul>
      <li class="button"><a href="#" class="dropdown_button">Coming Home<span></span></a></li>
      <li class="dropdown">
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li class="last"><a href="#">link 3</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
<?php
}

function printLatestMemberPhotos()
{
	$conn = connectDatabase(); // connect to database
	if(!$conn)
	{
		echo "ERROR, Datababase Connection failed!\n";
		exit;
	}
	
	$num_latest_member = 6;
	
	$sql = "SELECT *
			FROM phpbb_users U
			WHERE user_avatar <> '' AND user_inactive_reason = 0
			ORDER BY user_regdate DESC
			LIMIT 0, ".$num_latest_member ;

	//echo "sql: $sql<BR>";
	$result = queryDatabase($sql);
		
	disconnectDatabase($conn);
?>
<script language="javascript">
	sts_bs("jwscroller5b67",[20080214,"","","blank.gif",3,1,0,50,"300px","left",0,1,90,80,1],["none",1,"#454545","#FFFFFF","","repeat"]);
	sts_sca(["center","middle","center","middle"],["images/arrowl_gray.gif","images/arrowl_over.gif","images/arrowl_gray.gif",13,13,"images/arrowr_gray.gif","images/arrowr_over.gif","images/arrowr_gray.gif",13,13]);
	sts_tbd([1],["solid",1,"#454545",5,"round_tl.gif","round_tr.gif","round_br.gif","round_bl.gif","transparent","round_t.gif","repeat","transparent","round_r.gif","repeat","transparent","round_b.gif","repeat","transparent","round_l.gif","repeat"]);
	
	<?php
	$i = 0;
	
	while($member = fetchDatabase($result))
	{
	?>
		sts_ai("i<?=$i?>",[0,"<?=$member['username']?>","/forum/memberlist.php?mode=viewprofile&u=<?=$member['user_id']?>","_self","forum/download/file.php?avatar=<?=$member['user_avatar']?>",90,72,"center"],["transparent","11px Verdana,Arial","#1f88bf","none","11px Verdana,Arial","#666666","none"]);
		/*
		sts_ai("i0",[0,"London","http://inter.it","_self","images/photo_1.jpg",90,72,"center"],["transparent","11px Verdana,Arial","#1f88bf","none","11px Verdana,Arial","#666666","none"]);
		sts_ai("i1",[0,"Jakarta","http://inter.it","_self","images/photo_2.jpg",90,72,"center"],["transparent","11px Verdana,Arial","#1f88bf","none","11px Verdana,Arial","#333333","none"]);
		sts_ai("i2",[0,"Los Angeles","http://inter.it","_self","images/photo_3.jpg",90,72,"center"],["transparent","11px Verdana,Arial","#1f88bf","none","11px Verdana,Arial","#333333","none"]);
		sts_ai("i3",[0,"Surabaya","http://inter.it","_self","images/photo_1.jpg",90,72,"center"],["transparent","11px Verdana,Arial","#1f88bf","none","11px Verdana,Arial","#333333","none"]);
		sts_ai("i4",[0,"Bangkok","http://inter.it","_self","images/photo_2.jpg",90,72,"center"],["transparent","11px Verdana,Arial","#1f88bf","none","11px Verdana,Arial","#333333","none"]);
		sts_ai("i5",[0,"Hell","http://inter.it","_self","images/photo_3.jpg",90,72,"center"],["transparent","11px Verdana,Arial","#1f88bf","none","11px Verdana,Arial","#333333","none"]);
		*/
	<?php
		$i++;
	}
	?>
	
	sts_es();
	</script>
<?php	

	
	
}
//end of function

function printLatestPost()
{
	$conn = connectDatabase(); // connect to database
	if(!$conn)
	{
		echo "ERROR, Datababase Connection failed!\n";
		exit;
	}
	
	$num_latest_post = 4;
	
	$sql = "SELECT distinct P.topic_id as topic_id, P.post_id as post_id,  P.forum_id as forum_id, U.user_id as user_id, U.username as username, T.topic_title as topic_title
			FROM phpbb_posts P, phpbb_users U, phpbb_topics T
			WHERE U.user_id = P.poster_id AND T.topic_id = P.topic_id
			GROUP BY P.topic_id
			ORDER BY post_time DESC
			LIMIT 0, ".$num_latest_post ;

	//echo "sql: $sql<BR>";
	$result = queryDatabase($sql);
		
	
	disconnectDatabase($conn);
	
	$i = 0;
	
	while($post = fetchDatabase($result))
	{
		if(($i % 2) == 0)
			$class = "thread_row_white"; 
		else
			$class = "thread_row_gray"; 
		?>
<div class="<?=$class?>">
  <table cellpadding="2" cellspacing="2" border="0" width="100%">
    <TR>
      <TD colspan=2><a href="/forum/viewtopic.php?f=<?=$post['forum_id']?>&t=<?=$post['topic_id']?>" class="small_dark_blue_bold" target="_blank">
        <?=wraper($post['topic_title'], 100)?>
        </a></TD>
    </TR>
    <TR>
      <TD width="50%">by <a href="/forum/memberlist.php?mode=viewprofile&u=<?=$post['user_id']?>" class="small_dark_blue" target="_blank"><i>
        <?=$post['username']?>
        </i></a></TD>
      <!-- TD align="right">(<a href="#test" class="small_dark_blue">1</a> <a href="#test" class="small_dark_blue">2</a> <a href="#test" class="small_dark_blue">3</a> ... <a href="#test" class="small_dark_blue">Last Page</a>)</TD -->
    </TR>
  </table>
</div>
<?php
		
		$i++;
	}
	
	
}
//end of printLatestPost() function 


//This function prints randomly chosen fun fact
function  getFunFacts()
{
	$conn = connectDatabase(); // connect to database
	if(!$conn)
	{
		echo "ERROR, Datababase Connection failed!\n";
		exit;
	}
	
	$sql = "SELECT * FROM handbook_fun_fact ORDER BY RAND() LIMIT 1";
	$fun_result = queryDatabase($sql);
	
	if($fun_result)
	{
		$counter = 0;
		while($fun_fact = fetchDatabase($fun_result))
		{
			$fun_fact_list[$counter] = $fun_fact;
			$counter++;
		}
	}
	
	$sql = "SELECT * FROM handbook_fun_fact_picture WHERE fun_fact_id=".$fun_fact_list[0]['fun_fact_id'];
	$fun_result = queryDatabase($sql);
	
	if($fun_result)
	{
		
		while($fun_fact = fetchDatabase($fun_result))
		{
			$fun_fact_picture_id = $fun_fact['fun_fact_picture_id'];
			
		}
	}
	
	
	
		
		renderColumn(10, 120);
	echo"
		<div id=\"fun_fact_pic\" class=\"medium_dark_grey\">
			<img src=\"images/quickfacts.jpg\" width=100\" width=\"80px\" height=\40px\" alt=\"Did You Know?\">
		</div>
		<div id=\"fun_fact_content\" class=\"medium_dark_grey\">
			".$fun_fact_list[0]['content']."
		</div>
		
	";
	
	
	
	
	disconnectDatabase($conn);
}//end of function


//This function print popular keywords
function printPopularTags()
{
	
	$conn = connectDatabase(); // connect to database
	if(!$conn)
	{
		echo "ERROR, Datababase Connection failed!\n";
		exit;
	}
	
	//grab page data
	
	$sql = "SELECT word FROM handbook_page_index";
	$page_result = queryDatabase($sql);
	
	$temp = array();
	
	
	if($page_result)
	{
		while($page = fetchDatabase($page_result))
		{
			// Strip multiple whitespace
			$strip_query = strip_tags($page['word']);
	
			// Split text on whitespace
			$searchArray =  explode(",", $strip_query);
	
			foreach($searchArray as $tag)
				array_push($temp, trim($tag)); 
			
		}
	}
	
	
	$o = new Cal_TagCloud($temp);
	$o->setSpacer("&nbsp;&nbsp;&nbsp;   ")
	  ->setMaxTags(30)
	  ->setShowScore('score')
	  ->setLink("search_result.php?query=%s")
	  ->buildCloud();
	$y = $o->outputCloud;
	
	echo $y;
	
	disconnectDatabase($conn);
	
	
	
}//end of function

?>
