<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
<title>StudyUS.org/studentsabroad/ - Program Search: Discover your Options</title>
<link rel="icon" href="http://studyus.org/studentsabroad/favicon.png" type="image/png">
<link type="text/css" href="http://studyus.org/studentsabroad/styles/styles.css" rel="stylesheet" >
<!--<script type="text/javascript" src="javascript/analytics.js"></script>-->
<script type="text/javascript" src="http://studyus.org/studentsabroad/javascript/general.js"></script>
<!--[if IE]>
<style type="text/css">
p.iepara{ /*Conditional CSS- For IE (inc IE7), create 1em spacing between menu and paragraph that follows*/
padding-top: 1em;
}
</style>
<![endif]-->
<link rel="stylesheet" href="http://studyus.org/studentsabroad/styles/orbit-1.2.3.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://studyus.org/studentsabroad/javascript/jquery.orbit-1.2.3.min.js"></script>
<link rel="stylesheet" href="http://studyus.org/studentsabroad/styles/easing.accordion.css">

<script type="text/javascript" src="http://studyus.org/studentsabroad/javascript/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="http://studyus.org/studentsabroad/javascript/jquery.accordion.js"></script>


<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="http://studyus.org/studentsabroad/styles/iestyles.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="http://studyus.org/studentsabroad/styles/ie7styles.css" />
<![endif]-->
<script type="text/javascript">

	$(document).ready(function(){ 						   
					   
		$('#featured').orbit({
			  //timer: false,
              bullets: false
         });
		
		setTimeout(function(){
            $('#main_sponsors_featured').orbit({
				//timer: false,
				directionalNav: false
			});
        }, 1000);
		
		/*********************************************************/
		// Equalizing height for two columns
		
		// get both columns height
		var left_col_height = $('#left_content').height();
		var right_col_height = $('#right_content').height();
		
		// make the content height equals to the max height to push footer down
		$('#content').css('height', Math.max(left_col_height, right_col_height) + 'px');
		
		
		if (left_col_height < right_col_height) {
			// make parent
			$('#left_content').css('height', right_col_height + 'px');
			// Left content bottom height	
			var left_content_bottom_height = $('#left_content_bottom').height();
			var left_content_top_height = $('#left_content_top').height();
			var left_content_sponsor_height = $('#left_content_sponsor').height();
			var sum = left_content_bottom_height + left_content_top_height + left_content_sponsor_height;
			
			var new_height = right_col_height -  sum;
			$('#left_content_middle').css('height', new_height + 'px');	
		}
		
		/*********************************************************/
		// Convert class into our class
		$('#data-container .data-table .title-bg-color').removeClass().removeAttr('style').addClass('LightSolidBorder title-color');		
		
	});
			
</script>
</head>
<body>
<div id="background_top">
  <div id="maincontainer_top">
    <div id="header">
      <div id="left_header">
        <script language="javascript">renderDiv(6);</script>
        <div id="left_header_logo"><a href="http://StudyUS.org/studentsabroad/"><img src="http://studyus.org/studentsabroad/images/studentsabroad-logo.jpg"></a></div>
        <script language="javascript">renderDiv(10);</script>
        <div id="left_header_menu">
          <div id="glowingtabs">
            <ul>
              <li id=""><a id="home_link" title="Home: Welcome to StudenstAbroad.com" href="http://StudyUS.org/studentsabroad/"><span>
                <div class="padding13">Home</div>
                <div class="menu_subtitle">The Main Page</div>
                </span></a></li>
              <li id="current"><a id="why_us_subnav_link" title="Program Search: Discover Your Options" href="http://studentsabroad-dev.terradotta.com/index.cfm?FuseAction=Programs.SimpleSearch"><span>
                <div class="padding13">Program Search</div>
                <div class="menu_subtitle">Discover Your Options</div>
                </span></a></li>
              <li id=""><a id="apply_subnav_link" title="Student Handbooks: How to Get There and Back" href="#"><span>
                <div class="padding13">Student Handbooks</div>
                <div class="menu_subtitle">How to Get There and Back</div>
                </span></a></li>
              <li id=""><a id="finance_subnav_link" title="Featured Programs: Options Around the World" href="#"><span>
                <div class="padding13">Featured Programs</div>
                <div class="menu_subtitle">Options Around the World</div>
                </span></a></li>
            </ul>
          </div>
          <div onMouseOut="hidesubnav('apply_subnav');" onMouseOver="showsubnav('apply_subnav');" class="subnav_noshow" id="apply_subnav">
            <script language="javascript">renderDiv(10);</script>
            <div class="inner_subnav_apply_subnav"> </div>
            <div class="inner_subnav_bottom"> </div>
          </div>
          <!-- end of apply_subnav -->
          <div onMouseOut="hidesubnav('why_us_subnav');" onMouseOver="showsubnav('why_us_subnav');" class="subnav_noshow" id="why_us_subnav">
            <script language="javascript">renderDiv(10);</script>
            <div class="inner_subnav_why_us_subnav"> </div>
            <div class="inner_subnav_bottom"> </div>
          </div>
          <!-- end of why_us_subnav -->
          <div onMouseOut="hidesubnav('finance_subnav');" onMouseOver="showsubnav('finance_subnav');" class="subnav_noshow" id="finance_subnav">
            <script language="javascript">renderDiv(10);</script>
            <div class="inner_subnav_finance_subnav"> </div>
            <div class="inner_subnav_bottom"> </div>
          </div>
          <!-- end of finance_subnav -->
          <div onMouseOut="hidesubnav('resource_subnav');" onMouseOver="showsubnav('resource_subnav');" class="subnav_noshow" id="resource_subnav">
            <script language="javascript">renderDiv(10);</script>
            <div class="inner_subnav_resource_subnav"> </div>
            <div class="inner_subnav_bottom"> </div>
          </div>
          <!-- end of resource_subnav -->
        </div>
        <!-- end of left_header_menu -->
      </div>
      <!-- end of left_header -->
      <div id="middle_header"></div>
      <div id="right_header">
        <script language="javascript">renderDiv(20);</script>
        <div id="right_header_center_logo"><img src="http://studyus.org/studentsabroad/images/cge-logo.jpg"></div>
        <script language="javascript">renderDiv(37);</script>
        <div id="right_header_bottom">
          <div id="community_tab">
            <div id="glowingtabs_orange">
              <ul>
                <li><a target="_blank" title="About Us" href="#"><span>
                  <div class="padding13">About Us</div>
                  </span></a></li>
                <li><a target="_blank" title="Contact Us" href="#"><span>
                  <div class="padding13">Contact Us</div>
                  </span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end of right_header -->
    </div>
  </div>
  <!-- end of maincontainer_top -->
</div>
<!-- end of background_top -->
<div id="background_bottom">
  <div id="maincontainer_bottom">
    <div id="content">
      <div id="left_content">
        <div id="left_content_top"> </div>
        <div id="left_content_middle">
          <cfset AccountLinks = saObj.getAccountLinks() />
          <cfset queryAddColumn(AccountLinks, "NEW_XFA", arrayNew(1)) />
          <cfmodule template="#_sPubHostRelativeRoot#_customtags/ct_MakeTree.cfm" query="#AccountLinks#" result="AccountLinks" unique="Link_ID" parent="Parent_ID">
          <cfhtmlhead text='
	<script type="text/javascript" language="javascript" src="#_sPubHostRelativeRoot#_themes/#_sLayout#links.js"></script>
	<script type="text/javascript" language="javascript" src="#_sPubHostRelativeRoot#_themes/#_sLayout#plugin.js"></script>
	<script type="text/javascript" language="javascript">
	<!--
	// <![CDATA[
		// this variable determines if menu options that have children
		// are allowed to have links
              //test
		var allowParentLinks = true;
		var i18n = new Array("#jsStringFormat_sa(i18n(1268))#","#jsStringFormat_sa(i18n(4283))#","#jsStringFormat_sa(i18n(13261))#");
	// ]]>
	//-->
	</script>
	<script type="text/javascript" language="javascript" src="#_sPubHostRelativeRoot#_themes/#_sLayout#getAnnouncements.js"></script>
' />
          <cfoutput>
            <div id="mainContainer">
              <div id="rightColumnInside">
                <cfmodule template="#_sPubHostRelativeRoot#_customtags/ct_Tabs.cfm" tabs="#Tabs#">
                #trim(Fusebox.Layout)#
                </cfmodule>
              </div>
              <!--<div style="clear:both;"></div>-->
              <div id="footerTD">
                <div id="footerTopTD"> </div>
                <div id="footerBottomTD">
                  <cfif isDefined("_sStockLayoutFooterImage") and len(trim(_sStockLayoutFooterImage))>
                    <div align="#_sStockLayoutFooterOrentation#"><a href="index.cfm?FuseAction=Abroad.Home" title="#_sAccountName# - #_sAccountInstitution#"><img border="0" src="hosts/#_hostDir#/#_sStockLayoutFooterImage#" alt="#_sAccountName# - #_sAccountInstitution#" /></a></div>
                    <cfelse>
                    <a href="http://terradotta.com" target="_blank"><img src="#_sPubHostRelativeRoot#_themes/stock/poweredbyterradotta.png" alt="#i18n(12829)#" border="0" /></a>
                  </cfif>
                </div>
              </div>
            </div>
          </cfoutput></div>

        <div id="left_content_bottom"></div>
        <div>
	        <div id="left_content_sponsor"><CFOUTPUT>Country Sponsor HERE</CFOUTPUT></div>
		        <cfif structKeyExists(url, "pc") and url.pc eq "Australia"> 
		             <div class="testing"><CFOUTPUT>Country #URL.pc#</CFOUTPUT></div>
		        	<div class="sponsor_here">Australian Sponsors</div>           
		        </cfif>
	        </div>
      	</div>
      <!-- end of left_content -->
      <div id="middle_content"></div>
      <div id="right_content">
        <div id="right_content_top"> Prepare to Study Abroad. Read the Student Handbook. <span style="color: #FFFFFF">It's Free!</span> </div>
        <div id="right_content_middle">
          <div id="study_abroad_resources">
            <div id="student_handbook_title_container">
              <div id="student_handbook_title">Student Handbook</div>
            </div>
            <div class="student_handbook_menu">
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
            </div>
          </div>
          <div id="country_specific_handbook">
            <div id="handbooks_search_top" title="COUNTRY SPECIFIC HANDBOOKS"> <span class="handbooks_search_top_title">COUNTRY SPECIFIC HANDBOOKS</span> </div>
            <div id="handbooks_search_middle">
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
                      <option value="Kenya Coast Republic">Kenya Coast Republic</option>
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
            </div>
            <div id="handbooks_search_bottom"></div>
          </div>
          <div id="sponsors">
            <div id="sponsors_title_container">
              <div class="sponsors_title"> Sponsors </div>
            </div>
            <div class="sponsors1">
              <div id="main_sponsors_featured">
                  <a href="http://www.aguglobal.com/" target="_blank"><img src="http://studyus.org/studentsabroad/images/dummy-images/studio_abroad_logo.jpg"/></a>
                  <a href="http://studiesabroad.com/" target="_blank"><img src="http://studyus.org/studentsabroad/images/dummy-images/International-Studies-Abroad-ISA-Logo.jpg"/></a>
              </div>
            </div>
            <!--<img src="http://studyus.org/studentsabroad/images/dummy-images/studio_abroad_logo.jpg"/>
                 <img src="http://studyus.org/studentsabroad/images/dummy-images/International-Studies-Abroad-ISA-Logo.jpg"/>-->
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
    <div id="footer">
      <div id="left_footer">
        <div class="small_white_bold" id="left_footer_content_left"> <a class="small_white_bold" href="contact_us.php">Contact Us</a> | <a class="small_white_bold" href="about_us.php">About</a> | <a class="small_white_bold" href="http://globaled.us/giving.asp">Support CGE</a> | <a class="small_white_bold" href="http://globaled.us">Center for Global Education</a> </div>
        <div class="small_white_bold" id="left_footer_content_right"> All rights reserved 2012 | CGE </div>
      </div>
      <!-- end of left_footer -->
      <div id="middlefooter"></div>
      <div id="right_footer"></div>
    </div>
    <!-- end of footer -->
  </div>
  <!--end of  maincontainer_bottom -->
</div>
<!-- background bottom -->

</body>
</html>