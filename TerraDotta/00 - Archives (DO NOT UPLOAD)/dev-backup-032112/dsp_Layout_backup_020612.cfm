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
<script type="text/javascript" src="http://studyus.org/studentsabroad/javascript/jquery-1.5.1.min.js"></script>
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
          </cfoutput> </div>
        <div id="left_content_bottom"></div>
      </div>
      <!-- end of left_content -->
      <div id="middle_content"></div>
      <div id="right_content">
      	<div id="right_content_top"> 
        	<div id="right_content_text_container2">	
            <div id="right_content_text">
            <cfif IsDefined("url.pc")>
                <cfset myString=URLEncodedFormat(url.pc) />
                <cfset myVar1=Replace(myString,'%7F','','All') />
                <cfset myVar=Replace(myVar1,'%20','','All') />
                <cfif myVar eq "Argentina">
                    Prepare to Study Abroad in Argentina. Read the Argentina Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Australia">
                    Prepare to Study Abroad in Australia. Read the Australia Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Austria">
                    Prepare to Study Abroad in Austria. Read the Austria Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Belgium">
                    Prepare to Study Abroad in Belgium. Read the Belgium Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Brazil">
                    Prepare to Study Abroad in Brazil. Read the Brazil Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Bulgaria">
                    Prepare to Study Abroad in Bulgaria. Read the Bulgaria Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Chile">
                    Prepare to Study Abroad in Chile. Read the Chile Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "China">
                    Prepare to Study Abroad in China. Read the China Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "CostaRica">
                    Prepare to Study Abroad in Costa Rica. Read the Costa Rica Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "CzechRepublic">
                    Prepare to Study Abroad in Czech Republic. Read the Czech Republic Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Denmark">
                    Prepare to Study Abroad in Demark. Read the Denmark Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Ecuador">
                    Prepare to Study Abroad in Ecuador. Read the Ecuador Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Egypt">
                    Prepare to Study Abroad in Egypt. Read the Egypt Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Fiji">
                    Prepare to Study Abroad in Fiji. Read the Fiji Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Finland">
                    Prepare to Study Abroad in Finland. Read the Fiji Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "France">
                    Prepare to Study Abroad in France. Read the France Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Germany">
                    Prepare to Study Abroad in Germany. Read the Germany Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Ghana">
                    Prepare to Study Abroad in Ghanga. Read the Ghana Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Greece">
                    Prepare to Study Abroad in Greece. Read the Greece Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Guatemala">
                    Prepare to Study Abroad in Guatemala. Read the Guatemala Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Hungary">
                    Prepare to Study Abroad in Hungary. Read the Hungary Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "India">
                    Prepare to Study Abroad in India. Read the India Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Ireland">
                    Prepare to Study Abroad in Ireland. Read the Ireland Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Italy">
                    Prepare to Study Abroad in Italy. Read the Italy Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Japan">
                    Prepare to Study Abroad in Japan. Read the Japan Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "KenyaCoastRepublic">
                    Prepare to Study Abroad in Kenya Coast Republic. Read the Kenya Coast Republic Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Korea,South">
                    Prepare to Study Abroad in South Korea. Read the South Korea Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Malaysia">
                    Prepare to Study Abroad in Malaysia. Read the Malaysia Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Mexico">
                    Prepare to Study Abroad in Mexico. Read the Mexico Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Nepal">
                    Prepare to Study Abroad in Nepal. Read the Nepal Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Netherlands">
                    Prepare to Study Abroad in Netherlands. Read the Netherlands Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "NewZealand">
                    Prepare to Study Abroad in New Zealand. Read the New Zealand Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Peru">
                    Prepare to Study Abroad in Peru. Read the Peru Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Poland">
                    Prepare to Study Abroad in Poland. Read the Poland Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Portugal">
                    Prepare to Study Abroad in Portugal. Read the Portugal Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "ProgramsatSea">
                    Prepare to Study Abroad in Programs at Sea. Read the Programs at Sea Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Russian+Federation">
                    Prepare to Study Abroad in Russian Federation. Read the Russian Federation Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Singapore">
                    Prepare to Study Abroad in Singapore. Read the Singapore Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "SouthAfrica">
                    Prepare to Study Abroad in South Africa. Read the South Africa Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Spain">
                    Prepare to Study Abroad in Spain. Read the Spain Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Sweden">
                    Prepare to Study Abroad in Sweden. Read the Sweden Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Tanzania">
                    Prepare to Study Abroad in Tanzania. Read the Tanzania Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Thailand">
                    Prepare to Study Abroad in Thailand. Read the Thailand Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Turkey">
                    Prepare to Study Abroad in Turkey. Read the Turkey Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "TurksandCaicosIslands">
                    Prepare to Study Abroad in Turks and Caicos Islands. Read the Turks and Caicos Islands Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Uganda">
                    Prepare to Study Abroad in Uganda. Read the Uganda Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "UnitedAra Emirates">
                    Prepare to Study Abroad in United Arab Emirates. Read the United Arab Emirates Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "UnitedKingdom">
                    Prepare to Study Abroad in United Kingdom. Read the United Kingdom Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "UnitedStates">
                    Prepare to Study Abroad in United States. Read the United States Student Handbook. <span style="color: #FFFFFF">It's Free!</span> 
                <cfelseif myVar eq "Vietnam">
                    Prepare to Study Abroad in Vietnam. Read the Vietnam Student Handbook. <span style="color: #FFFFFF">It's Free!</span>   
                <cfelse>
                    <div style="padding-left: 5px; padding-top: 5px;">Prepare to Study Abroad. Read the Student Handbook. <span style="color: #FFFFFF">It's Free!</span></div> 
                </cfif>
               
			<cfelse>
            	<div style="padding-left: 5px; padding-top: 5px;">Prepare to Study Abroad. Read the Student Handbook. <span style="color: #FFFFFF">It's Free!</span></div>      
            </cfif> 

            </div>
            </div>
        </div>    
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
          <div style="height:4px; font-size: 1px;"></div>
          <!--<div id="country_specific_handbook">
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
          </div>-->
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
            <div id="country_specific_sponsors">
				<div style="text-align:center;"><strong>Country Specific Sponsor</strong></div>
				<div>		
				<cfif IsDefined("url.pc")>
					<cfset myString=URLEncodedFormat(url.pc) />
                    <cfset myVar1=Replace(myString,'%7F','','All') />
                    <cfset myVar=Replace(myVar1,'%20','','All') />
                    <cfif myVar eq "Argentina">
                    	<div>Argentina</div>
                    <cfelseif myVar eq "Australia">
                    	<div>Australia</div>
                    <cfelseif myVar eq "Austria">
                    	<div>Austria</div>
                    <cfelseif myVar eq "Belgium">
                    	<div>Belgium</div>
                    <cfelseif myVar eq "Brazil">
                    	<div>Brazil</div>
                    <cfelseif myVar eq "Bulgaria">
                    	<div>Bulgaria</div>
                    <cfelseif myVar eq "Chile">
                    	<div>Chile</div>
                    <cfelseif myVar eq "China">
                    	<div>China</div>
                    <cfelseif myVar eq "Costa Rica">
                    	<div>Costa Rica</div>
                    <cfelseif myVar eq "Czech Republic">
                    	<div>Czech Republic</div>
                    <cfelseif myVar eq "Denmark">
                    	<div>Denmark</div>
                    <cfelseif myVar eq "Ecuador">
                    	<div>Ecuador</div>
                    <cfelseif myVar eq "Egypt">
                    	<div>Egypt</div>
                    <cfelseif myVar eq "Fiji">
                    	<div>Fiji</div>
                    <cfelseif myVar eq "Finland">
                    	<div>Finland</div>
                    <cfelseif myVar eq "France">
                    	<div>France</div>
                    <cfelseif myVar eq "Germany">
                    	<div>Germany</div>
                    <cfelseif myVar eq "Ghana">
                    	<div>Ghana</div>
                    <cfelseif myVar eq "Greece">
                    	<div>Greece</div>
                    <cfelseif myVar eq "Guatemala">
                    	<div>Guatemala</div>
                    <cfelseif myVar eq "Hungary">
                    	<div>Hungary</div>
                    <cfelseif myVar eq "India">
                    	<div>India</div>
                    <cfelseif myVar eq "Ireland">
                    	<div>Ireland</div>
                    <cfelseif myVar eq "Italy">
                    	<div>Italy</div>
                    <cfelseif myVar eq "Japan">
                    	<div>Japan</div>
                    <cfelseif myVar eq "Kenya Coast Republic">
                    	<div>Kenya Coast Republic</div>
                    <cfelseif myVar eq "Korea, South">
                    	<div>Korea, South</div>
                    <cfelseif myVar eq "Malaysia">
                    	<div>Malaysia</div>
                    <cfelseif myVar eq "Mexico">
                    	<div>Mexico</div>
                    <cfelseif myVar eq "Nepal">
                    	<div>Nepal</div>
                    <cfelseif myVar eq "Netherlands">
                    	<div>Netherlands</div>
                    <cfelseif myVar eq "New Zealand">
                    	<div>New Zealand</div>
                    <cfelseif myVar eq "Peru">
                    	<div>Peru</div>
                    <cfelseif myVar eq "Poland">
                    	<div>Poland</div>
                    <cfelseif myVar eq "Portugal">
                    	<div>Portugal</div>
                    <cfelseif myVar eq "Programs at Sea">
                    	<div>Programs at Sea</div>
                    <cfelseif myVar eq "Russian Federation">
                    	<div>Russian Federation</div>
                    <cfelseif myVar eq "Singapore">
                    	<div>Singapore</div>
                    <cfelseif myVar eq "South Africa">
                    	<div>South Africa</div>
                    <cfelseif myVar eq "Spain">
                    	<div>Spain</div>
                    <cfelseif myVar eq "Sweden">
                    	<div>Sweden</div>
                    <cfelseif myVar eq "Tanzania">
                    	<div>Tanzania</div>
                    <cfelseif myVar eq "Thailand">
                    	<div>Thailand</div>
                    <cfelseif myVar eq "Turkey">
                    	<div>Turkey</div>
                    <cfelseif myVar eq "Turks and Caicos Islands">
                    	<div>Turks and Caicos Islands</div>
                    <cfelseif myVar eq "Uganda">
                    	<div>Uganda</div>
                    <cfelseif myVar eq "United Arab Emirates">
                    	<div>United Arab Emirates
                    <cfelseif myVar eq "United Kingdom">
                    	<div>United Kingdom</div>
                    <cfelseif myVar eq "United States">
                    	<div>United States</div>
                    <cfelseif myVar eq "Vietnam">
                    	<div>Vietnam  </div>         
                    <cfelse>
                        <div>All Sponsors</div>
                    </cfif>
                    <!--<cfoutput><div>#myVar#</div></cfoutput>-->
                </cfif>
                </div>
            </div>
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
<script type="text/javascript">
	$(document).ready(function(){ 			
		
		setTimeout(function(){
            $('#main_sponsors_featured').orbit({
				//timer: false,
				directionalNav: false
			});
        }, 1000);
		
	});
</script>
</body>
</html>