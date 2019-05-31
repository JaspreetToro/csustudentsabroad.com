<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<title>StudentsAbroad.us - Program Search: Explore your Options</title>
<link rel="icon" href="http://studentsabroad.us/favicon.png" type="image/png" />
<link type="text/css" href="http://studentsabroad.us/styles/styles.css" rel="stylesheet" />
<!--<script type="text/javascript" src="javascript/analytics.js"></script>-->
<script type="text/javascript" src="http://studentsabroad.us/javascript/general.js"></script>
<!--[if IE]>
<style type="text/css">
p.iepara{ /*Conditional CSS- For IE (inc IE7), create 1em spacing between menu and paragraph that follows*/
padding-top: 1em;
}
</style>
<![endif]-->
<link rel="stylesheet" href="http://studentsabroad.us/styles/orbit-1.2.3.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://studentsabroad.us/javascript/jquery.orbit-1.2.3.min.js"></script>
<link rel="stylesheet" href="http://studentsabroad.us/styles/easing.accordion.css" />
<script type="text/javascript" src="http://studentsabroad.us/javascript/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="http://studentsabroad.us/javascript/jquery.accordion.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="http://studentsabroad.us/styles/iestyles.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="http://studentsabroad.us/styles/ie7styles.css" />
<![endif]-->
</head>
<body>
<div id="background_top">
    <div id="maincontainer_top">
        <div id="header">
            <div id="left_header">
                <script language="javascript">renderDiv(6);</script>
                <div id="left_header_logo"><a href="http://StudyUS.org/studentsabroad/"><img src="http://studentsabroad.us/images/studentsabroad-logo.jpg"></a></div>
                <script language="javascript">renderDiv(10);</script>
                <div id="left_header_menu">
                    <div id="glowingtabs">
                        <ul>
                            <li>
                                <div>
                                    <div>
                                        <div class="padding13"><a href="index.php" title="Home: Welcome to StudenstAbroad.com" id="home_link">Home</a></div>
                                        <div class="menu_subtitle"><a href="index.php" title="Home: Welcome to StudenstAbroad.com" id="home_link">The Main Page</a></div>
                                    </div>
                                </div>
                            </li>
                            <li id="current">
                                <div><div>
                                    <div class="padding13"><a href="http://studentsabroad-dev.terradotta.com/index.cfm?FuseAction=Programs.SimpleSearch" title="Program Search: Explore Your Options" id="why_us_subnav_link">Program Search</a></div>
                                    <div class="menu_subtitle"><a href="http://studentsabroad-dev.terradotta.com/index.cfm?FuseAction=Programs.SimpleSearch" title="Program Search: Explore Your Options" id="why_us_subnav_link">Explore Your Options</a></div>
                                </div></div>
                            </li>
                            <li>
                                <div><div>
                                    <div class="padding13"><a href="handbook/introduction.php?country=General" title="Student Handbooks: How to Get There and Back" id="apply_subnav_link">Student Handbooks</a></div>
                                    <div class="menu_subtitle"><a href="handbook/introduction.php?country=General" title="Student Handbooks: How to Get There and Back" id="apply_subnav_link">How to Get There and Back</a></div>
                                </div></div>
                            </li>
                            <li>
                                <div><div>
                                    <div class="padding13"><a href="featured-programs.php" title="Featured Programs: Options Around the World" id="finance_subnav_link">Featured Programs</a></div>
                                    <div class="menu_subtitle"><a href="featured-programs.php" title="Featured Programs: Options Around the World" id="finance_subnav_link">Options Around the World</a></div>
                                </div></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of left_header_menu -->
            </div>
            <!-- end of left_header -->
            <div id="middle_header"></div>
            <div id="right_header">
                <script language="javascript">renderDiv(20);</script>
                <div id="right_header_center_logo"><img src="http://studentsabroad.us/images/cge-logo.jpg"></div>
                <script language="javascript">renderDiv(37);</script>
                <div id="right_header_bottom">
                    <div id="community_tab">
                        <div id="glowingtabs_orange">
                            <li>
                                    <div>
                                        <div class="padding13"><a href="about_us.php" title="About Us" target="_blank">About Us</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="padding13"><a href="contact_us.php" title="Contact Us" target="_blank">Contact Us</a></div>
                                    </div>
                                </li>
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
            <div id="content_wrapper">
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
                        <div id="right_content_text_container1">
                            <div id="right_content_text">
                                <cfif IsDefined("url.pc") or isDefined("url.pi")>
                                    <cfset myCountry=URLEncodedFormat(url.pc) />
                                    <cfset myCountryVar=Replace(myCountry,'%7F','','All') />
                                    <cfset myPcVar=Replace(myCountryVar,'%20','','All') />
                                    <cfset myCity=URLEncodedFormat(url.pi) />
                                    <cfset myCityVar=Replace(myCity,'%7F','','All') />
                                    <cfset myPiVar=Replace(myCityVar,'%20','','All') />
                                    <cfif myPcVar eq "Argentina" or myPiVar eq "BuenosAires" or myPiVar eq "Cairns" or myPiVar eq "Mendoza">
                                        Prepare to Study Abroad in Argentina. Read the Argentina Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Australia" or myPiVar eq "Adelaide" or myPiVar eq "Brisbane" or myPiVar eq "GoldCoast" or myPiVar eq "Hobart" or myPiVar eq "Lismore" or myPiVar eq "Melbourne" or myPiVar eq "NorthRyde" or myPiVar eq "Perth" or myPiVar eq "Sydney" or myPiVar eq "Wollongong">
                                        Prepare to Study Abroad in Australia. Read the Australia Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Austria" or myPiVar eq "Vienna">
                                        Prepare to Study Abroad in Austria. Read the Austria Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Belgium" or myPiVar eq "Brussels" or myPiVar eq "Fora">
                                        Prepare to Study Abroad in Belgium. Read the Belgium Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Brazil" or myPiVar eq "Brasilia" or myPiVar eq "RiodeJaneiro" or myPiVar eq "SaoPaulo">
                                        Prepare to Study Abroad in Brazil. Read the Brazil Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Bulgaria" or myPiVar eq "Blagoevgrad">
                                        Prepare to Study Abroad in Bulgaria. Read the Bulgaria Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Chile" or myPiVar eq "Valparaiso" or myPiVar eq "VinadelMar">
                                        Prepare to Study Abroad in Chile. Read the Chile Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "China" or myPiVar eq "Beijing" or myPiVar eq "Chengdu" or myPiVar eq "HongKong" or myPiVar eq "Nanjing" or myPiVar eq "Shanghai">
                                        Prepare to Study Abroad in China. Read the China Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "CostaRica" or myPiVar eq "SanJose">
                                        Prepare to Study Abroad in Costa Rica. Read the Costa Rica Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "CzechRepublic" or myPiVar eq "Prague">
                                        Prepare to Study Abroad in Czech Republic. Read the Czech Republic Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Denmark" or myPiVar eq "Copenhagen">
                                        Prepare to Study Abroad in Demark. Read the Denmark Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Ecuador" or myPiVar eq "Quito">
                                        Prepare to Study Abroad in Ecuador. Read the Ecuador Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Egypt" or myPiVar eq "Alexandria" or myPiVar eq "Cairo">
                                        Prepare to Study Abroad in Egypt. Read the Egypt Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Fiji" or myPiVar eq "Suva">
                                        Prepare to Study Abroad in Fiji. Read the Fiji Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Finland" or myPiVar eq "Helsinki">
                                        Prepare to Study Abroad in Finland. Read the Fiji Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "France" or myPiVar eq "Aix-en-Provence" or myPiVar eq "Nice" or myPiVar eq "France">
                                        Prepare to Study Abroad in France. Read the France Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Germany" or myPiVar eq "Berlin" or myPiVar eq "Bielefeld" or myPiVar eq "Hamburg" or myPiVar eq "Hannover" or myPiVar eq "Marburg">
                                        Prepare to Study Abroad in Germany. Read the Germany Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Ghana" or myPiVar eq "Accra">
                                        Prepare to Study Abroad in Ghanga. Read the Ghana Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Greece" or myPiVar eq "Athens">
                                        Prepare to Study Abroad in Greece. Read the Greece Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Guatemala" or myPiVar eq "PuertoQuetzal">
                                        Prepare to Study Abroad in Guatemala. Read the Guatemala Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Hungary" or myPiVar eq "Budapest">
                                        Prepare to Study Abroad in Hungary. Read the Hungary Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "India" or myPiVar eq "Hyderabad" or myPiVar eq "Kolkata" or myPiVar eq "Pune">
                                        Prepare to Study Abroad in India. Read the India Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Ireland" or myPiVar eq "Ballyvaughan" or myPiVar eq "Belfast" or myPiVar eq "Cork" or myPiVar eq "Dublin" or myPiVar eq "Galway" or myPiVar eq "Limerick">
                                        Prepare to Study Abroad in Ireland. Read the Ireland Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Italy" or myPiVar eq "Florence" or myPiVar eq "Milan" or myPiVar eq "Italy" or myPiVar eq "Syracuse" or myPiVar eq "Venice">
                                        Prepare to Study Abroad in Italy. Read the Italy Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Japan" or myPiVar eq "Beppu" or myPiVar eq "Tokyo">
                                        Prepare to Study Abroad in Japan. Read the Japan Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "KenyaCoastRepublic" or myPiVar eq "KilimanjaroBushCamp" or myPiVar eq "Nairobi">
                                        Prepare to Study Abroad in Kenya Coast Republic. Read the Kenya Coast Republic Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Korea,South" or myPiVar eq "Seoul">
                                        Prepare to Study Abroad in South Korea. Read the South Korea Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Malaysia" or myPiVar eq "KualaLumpur" or myPiVar eq "Kuching">
                                        Prepare to Study Abroad in Malaysia. Read the Malaysia Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Mexico" or myPiVar eq "BahiaMagdalena" or myPiVar eq "Guadalajara" or myPiVar eq "Merida" or myPiVar eq "MexicoCity" or myPiVar eq "PueblaCity">
                                        Prepare to Study Abroad in Mexico. Read the Mexico Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Nepal" or myPiVar eq "Kathmandu">
                                        Prepare to Study Abroad in Nepal. Read the Nepal Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Netherlands" or myPiVar eq "Amsterdam" or myPiVar eq "Utrecht">
                                        Prepare to Study Abroad in Netherlands. Read the Netherlands Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "NewZealand" or myPiVar eq "Auckland" or myPiVar eq "Aukland" or myPiVar eq "Christchurch" or myPiVar eq "Hamilton" or myPiVar eq "Wellington">
                                        Prepare to Study Abroad in New Zealand. Read the New Zealand Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Peru" or myPiVar eq "Cusco" or myPiVar eq "Lima">
                                        Prepare to Study Abroad in Peru. Read the Peru Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Poland" or myPiVar eq "Krakow" or myPiVar eq "Wroclaw">
                                        Prepare to Study Abroad in Poland. Read the Poland Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Portugal" or myPiVar eq "Lisbon">
                                        Prepare to Study Abroad in Portugal. Read the Portugal Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "ProgramsatSea" or myPiVar eq "Multiple">
                                        Prepare to Study Abroad in Programs at Sea. Read the Programs at Sea Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "RussianFederation" or myPiVar eq "Moscow" or myPiVar eq "StPetersburg">
                                        Prepare to Study Abroad in Russian Federation. Read the Russian Federation Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Singapore" or myPiVar eq "Singapore">
                                        Prepare to Study Abroad in Singapore. Read the Singapore Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "SouthAfrica" or myPiVar eq "CapeTown" or myPiVar eq "Grahamstown">
                                        Prepare to Study Abroad in South Africa. Read the South Africa Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Spain" or myPiVar eq "Barcelona" or myPiVar eq "Spain" or myPiVar eq "Madrid" or myPiVar eq "Seville">
                                        Prepare to Study Abroad in Spain. Read the Spain Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Sweden" or myPiVar eq "Sweden">
                                        Prepare to Study Abroad in Sweden. Read the Sweden Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Tanzania" or myPiVar eq "Arusha">
                                        Prepare to Study Abroad in Tanzania. Read the Tanzania Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Thailand" or myPiVar eq "Bangkok" or myPiVar eq "KhonKaen">
                                        Prepare to Study Abroad in Thailand. Read the Thailand Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Turkey" or myPiVar eq "Ankara" or myPiVar eq "Turkey">
                                        Prepare to Study Abroad in Turkey. Read the Turkey Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "TurksandCaicosIslands" or myPiVar eq "SouthCaicos">
                                        Prepare to Study Abroad in Turks &amp; Caicos Islands. Read the Turks &amp; Caicos Islands Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Uganda" or myPiVar eq "Kampala">
                                        Prepare to Study Abroad in Uganda. Read the Uganda Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "UnitedArabEmirates" or myPiVar eq "Dubai">
                                        Prepare to Study Abroad in United Arab Emirates. Read the United Arab Emirates Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "UnitedKingdom" or myPiVar eq "Edinburgh" or myPiVar eq "Glasglow" or myPiVar eq "Leeds" or myPiVar eq "London" or myPiVar eq "Oxford" or myPiVar eq "St.Andrews" or myPiVar eq "Stirling" or myPiVar eq "Swansea">
                                        Prepare to Study Abroad in United Kingdom. Read the United Kingdom Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "UnitedStates" or myPiVar eq "ChapelHill,NC" or myPiVar eq "ChapmanUniversity" or myPiVar eq "Cornell College" or myPiVar eq "MiltonCollege">
                                        Prepare to Study Abroad in United States. Read the United States Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelseif myPcVar eq "Vietnam" or myPiVar eq "HoChiMinhCity">
                                        Prepare to Study Abroad in Vietnam. Read the Vietnam Student Handbook. <span style="color: #FFFFFF">It's Free!</span>
                                        <cfelse>
                                        <div class="right_content_text">Prepare to Study Abroad. Read the Student Handbook. <span style="color: #FFFFFF">It's Free!</span></div>
                                    </cfif>
                                    <cfelse>
                                    <div class="right_content_text">Prepare to Study Abroad. Read the Student Handbook. <span style="color: #FFFFFF">It's Free!</span></div>
                                </cfif>
                            </div>
                        </div>
                    </div>
                    <div id="right_content_middle">
                        <div id="sponsors">
                            <div id="sponsors_title_container">
                                <div class="sponsors_title"> Sponsors </div>
                            </div>
                            <div class="sponsors1">
                                <div id="main_sponsors_featured">
                                    <!--<a href="http://www.aguglobal.com/" target="_blank"><img src="http://studentsabroad.us/images/dummy-images/studio_abroad_logo.jpg"/></a>
                      <a href="http://studiesabroad.com/" target="_blank"><img src="http://studentsabroad.us/images/dummy-images/International-Studies-Abroad-ISA-Logo.jpg"/></a>-->
                                    <!--<div class="content">-->
                                    <cfif IsDefined("url.pc") or isDefined("url.pi")>
                                        <cfset myCountry=URLEncodedFormat(url.pc) />
                                        <cfset myCountryVar=Replace(myCountry,'%7F','','All') />
                                        <cfset myPcVar=Replace(myCountryVar,'%20','','All') />
                                        <cfset myCity=URLEncodedFormat(url.pi) />
                                        <cfset myCityVar=Replace(myCity,'%7F','','All') />
                                        <cfset myPiVar=Replace(myCityVar,'%20','','All') />
                                        <cfif myPcVar eq "Argentina" or myPiVar eq "BuenosAires" or myPiVar eq "Cairns" or myPiVar eq "Mendoza">
                                            <div class="content">Argentina Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Australia" or myPiVar eq "Adelaide" or myPiVar eq "Brisbane" or myPiVar eq "GoldCoast" or myPiVar eq "Hobart" or myPiVar eq "Lismore" or myPiVar eq "Melbourne" or myPiVar eq "NorthRyde" or myPiVar eq "Perth" or myPiVar eq "Sydney" or myPiVar eq "Wollongong">
                                            <a href="http://www.globalinksabroad.org/" alt="GlobaLinksAbroad.com" title="GlobaLinksAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/GlobalLinks-logo.jpg" alt="GlobaLinksAbroad.com" /></a> <a href="http://studyabroad.com" alt="StudyAbroad.com" title="StudyAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg" alt="StudyAbroad.com" /></a>
                                            <cfelseif myPcVar eq "Austria" or myPiVar eq "Vienna">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Belgium" or myPiVar eq "Brussels" or myPiVar eq "Fora">
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a>
                                            <cfelseif myPcVar eq "Brazil" or myPiVar eq "Brasilia" or myPiVar eq "RiodeJaneiro" or myPiVar eq "SaoPaulo">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Bulgaria" or myPiVar eq "Blagoevgrad">
                                            <div class="content">Bulgaria Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Chile" or myPiVar eq "Valparaiso" or myPiVar eq "VinadelMar">
                                            <a href="http://studiesabroad.com/" alt="International Studies Abroad" title="International Studies Abroad" target="_blank"><img src="images/logo/International-Studies-Abroad-ISA-logo.jpg"/></a>
                                            <cfelseif myPcVar eq "China" or myPiVar eq "Beijing" or myPiVar eq "Chengdu" or myPiVar eq "HongKong" or myPiVar eq "Nanjing" or myPiVar eq "Shanghai">
                                            <a href="http://studyabroad.com" alt="StudyAbroad.com" title="StudyAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg" alt="StudyAbroad.com" /></a>
                                            <cfelseif myPcVar eq "CostaRica" or myPiVar eq "SanJose">
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a>
                                            <cfelseif myPcVar eq "CzechRepublic" or myPiVar eq "Prague">
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a>
                                            <cfelseif myPcVar eq "Denmark" or myPiVar eq "Copenhagen">
                                            <a href="http://www.dis.dk/" alt="Danish Institute for Study Abroad" title="Danish Institute for Study Abroad" target="_blank"><img src="http://studentsabroad.us/images/logo/Danish-Institute-for-Study-Abroad-logo.jpg" alt="Danish Institute for Study Abroad" /></a>
                                            <cfelseif myPcVar eq "Ecuador" or myPiVar eq "Quito">
                                            <div class="content">Ecuador Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Egypt" or myPiVar eq "Alexandria" or myPiVar eq "Cairo">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Fiji" or myPiVar eq "Suva">
                                            <div class="content">Fiji Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Finland" or myPiVar eq "Helsinki">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "France" or myPiVar eq "Aix-en-Provence" or myPiVar eq "Nice" or myPiVar eq "France">
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a> <a href="http://studyabroad.com" alt="StudyAbroad.com" title="StudyAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg" alt="StudyAbroad.com" /></a>
                                            <cfelseif myPcVar eq "Germany" or myPiVar eq "Berlin" or myPiVar eq "Bielefeld" or myPiVar eq "Hamburg" or myPiVar eq "Hannover" or myPiVar eq "Marburg">
                                            <a href="http://studyabroad.com" alt="StudyAbroad.com" title="StudyAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg" alt="StudyAbroad.com" /></a>
                                            <cfelseif myPcVar eq "Ghana" or myPiVar eq "Accra">
                                            <div class="content">Ghana Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Greece" or myPiVar eq "Athens">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Guatemala" or myPiVar eq "PuertoQuetzal">
                                            <div class="content">Guatemala Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Hungary" or myPiVar eq "Budapest">
                                            <div class="content">Hungary Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "India" or myPiVar eq "Hyderabad" or myPiVar eq "Kolkata" or myPiVar eq "Pune">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Ireland" or myPiVar eq "Ballyvaughan" or myPiVar eq "Belfast" or myPiVar eq "Cork" or myPiVar eq "Dublin" or myPiVar eq "Galway" or myPiVar eq "Limerick">
                                            <img src="http://studentsabroad.us/images/logo/CIEE-logo.jpg"/>
                                            <cfelseif myPcVar eq "Italy" or myPiVar eq "Florence" or myPiVar eq "Milan" or myPiVar eq "Italy" or myPiVar eq "Syracuse" or myPiVar eq "Venice">
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a> <a href="http://studyabroad.com" alt="StudyAbroad.com" title="StudyAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg" alt="StudyAbroad.com" /></a>
                                            <cfelseif myPcVar eq "Japan" or myPiVar eq "Beppu" or myPiVar eq "Tokyo">
                                            <a href="http://studyabroad.com" alt="StudyAbroad.com" title="StudyAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg" alt="StudyAbroad.com" /></a>
                                            <cfelseif myPcVar eq "KenyaCoastRepublic" or myPiVar eq "KilimanjaroBushCamp" or myPiVar eq "Nairobi">
                                            <div class="content">Kenya Coast Republic Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Korea,South" or myPiVar eq "Seoul">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Malaysia" or myPiVar eq "KualaLumpur" or myPiVar eq "Kuching">
                                            <div class="content">Malaysia Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Mexico" or myPiVar eq "BahiaMagdalena" or myPiVar eq "Guadalajara" or myPiVar eq "Merida" or myPiVar eq "MexicoCity" or myPiVar eq "PueblaCity">
                                            <img src="http://studentsabroad.us/images/logo/CIEE-logo.jpg"/> <img src="http://studentsabroad.us/images/logo/CONAHEC-logo.jpg"/>
                                            <cfelseif myPcVar eq "Nepal" or myPiVar eq "Kathmandu">
                                            <div class="content">Nepal Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Netherlands" or myPiVar eq "Amsterdam" or myPiVar eq "Utrecht">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "NewZealand" or myPiVar eq "Auckland" or myPiVar eq "Aukland" or myPiVar eq "Christchurch" or myPiVar eq "Hamilton" or myPiVar eq "Wellington">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Peru" or myPiVar eq "Cusco" or myPiVar eq "Lima">
                                            <div class="content">Peru Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Poland" or myPiVar eq "Krakow" or myPiVar eq "Wroclaw">
                                            <div class="content">Poland Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Portugal" or myPiVar eq "Lisbon">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "ProgramsatSea" or myPiVar eq "Multiple">
                                            <div class="content">Programs at Sea Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "RussianFederation" or myPiVar eq "Moscow" or myPiVar eq "StPetersburg">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Singapore" or myPiVar eq "Singapore">
                                            <div class="content">Singapore Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "SouthAfrica" or myPiVar eq "CapeTown" or myPiVar eq "Grahamstown">
                                            <div class="content">South Africa Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Spain" or myPiVar eq "Barcelona" or myPiVar eq "Spain" or myPiVar eq "Madrid" or myPiVar eq "Seville">
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a>
                                            <cfelseif myPcVar eq "Sweden" or myPiVar eq "Sweden">
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <!--<img src="http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg" alt="GlobalScholar.us" />-->
                                            <a href="http://allabroad.us" alt="AllAbroad.us" title="AllAbroad.us" target="_blank"><img src="http://studentsabroad.us/images/logo/AllAbroad-logo.jpg" alt="AllAbroad.us"/></a>
                                            <cfelseif myPcVar eq "Tanzania" or myPiVar eq "Arusha">
                                            <div class="content">Tanzania Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Thailand" or myPiVar eq "Bangkok" or myPiVar eq "KhonKaen">
                                            <div class="content">Thailand Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Turkey" or myPiVar eq "Ankara" or myPiVar eq "Turkey">
                                            <div class="content">Turkey Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "TurksandCaicosIslands" or myPiVar eq "SouthCaicos">
                                            <div class="content">Turks and Caicos Islands Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "Uganda" or myPiVar eq "Kampala">
                                            <div class="content">Uganda Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "UnitedArabEmirates" or myPiVar eq "Dubai">
                                            <div class="content">United Arab Emirates Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelseif myPcVar eq "UnitedKingdom" or myPiVar eq "Edinburgh" or myPiVar eq "Glasglow" or myPiVar eq "Leeds" or myPiVar eq "London" or myPiVar eq "Oxford" or myPiVar eq "St.Andrews" or myPiVar eq "Stirling" or myPiVar eq "Swansea">
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a> <a href="http://studyabroad.com" alt="StudyAbroad.com" title="StudyAbroad.com" target="_blank"><img src="http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg" alt="StudyAbroad.com" /></a>
                                            <cfelseif myPcVar eq "UnitedStates" or myPiVar eq "ChapelHill,NC" or myPiVar eq "ChapmanUniversity" or myPiVar eq "Cornell College" or myPiVar eq "MiltonCollege">
                                            <a href="http://uStudy.us/" alt="uStudy.us" title="uStudy.us" target="_blank"><img src="http://studentsabroad.us/images/logo/uStudy-logo.jpg" alt="uStudy.us" /></a> <a href="http://globaled.us/PLUS/" alt="PLUS: The Project for Learning in the United States" title="PLUS: The Project for Learning in the United States" target="_blank"><img src="http://studentsabroad.us/images/logo/PLUS-logo.jpg" alt="PLUS: The Project for Learning in the United States" /></a>
                                            <cfelseif myPcVar eq "Vietnam" or myPiVar eq "HoChiMinhCity">
                                            <div class="content">Vietnam Sponsor logo here</div>
                                            <img src="http://studentsabroad.us/images/logo/default-logo.jpg"/>
                                            <cfelse>
                                            <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a>
                                        </cfif>
                                        <!--<cfoutput><div>#myPcVar#</div><div>#myPiVar#</div></cfoutput>-->
                                        <cfelse>
                                        <a href="http://www.iaufrance.org/" alt="Institute for American Universities" title="Institute for American Universities" target="_blank"><img src="http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg" alt="Institute for American Universities" /></a>
                                    </cfif>
                                    <!--</div>-->
                                </div>
                            </div>
                            <div id="sponsors_list">
                                <div>
                                    <cfif IsDefined("url.pc") or isDefined("url.pi")>
                                        <cfset myCountry=URLEncodedFormat(url.pc) />
                                        <cfset myCountryVar=Replace(myCountry,'%7F','','All') />
                                        <cfset myPcVar=Replace(myCountryVar,'%20','','All') />
                                        <cfset myCity=URLEncodedFormat(url.pi) />
                                        <cfset myCityVar=Replace(myCity,'%7F','','All') />
                                        <cfset myPiVar=Replace(myCityVar,'%20','','All') />
                                        <cfif myPcVar eq "Argentina" or myPiVar eq "BuenosAires" or myPiVar eq "Cairns" or myPiVar eq "Mendoza">
                                            Argentina Sponsors list here
                                            <cfelseif myPcVar eq "Australia" or myPiVar eq "Adelaide" or myPiVar eq "Brisbane" or myPiVar eq "GoldCoast" or myPiVar eq "Hobart" or myPiVar eq "Lismore" or myPiVar eq "Melbourne" or myPiVar eq "NorthRyde" or myPiVar eq "Perth" or myPiVar eq "Sydney" or myPiVar eq "Wollongong">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Austria" or myPiVar eq "Vienna">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Belgium" or myPiVar eq "Brussels" or myPiVar eq "Fora">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Brazil" or myPiVar eq "Brasilia" or myPiVar eq "RiodeJaneiro" or myPiVar eq "SaoPaulo">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Bulgaria" or myPiVar eq "Blagoevgrad">
                                            Bulgaria Sponsors list here
                                            <cfelseif myPcVar eq "Chile" or myPiVar eq "Valparaiso" or myPiVar eq "VinadelMar">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "China" or myPiVar eq "Beijing" or myPiVar eq "Chengdu" or myPiVar eq "HongKong" or myPiVar eq "Nanjing" or myPiVar eq "Shanghai">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "CostaRica" or myPiVar eq "SanJose">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "CzechRepublic" or myPiVar eq "Prague">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Denmark" or myPiVar eq "Copenhagen">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Ecuador" or myPiVar eq "Quito">
                                            Ecuador Sponsors list here
                                            <cfelseif myPcVar eq "Egypt" or myPiVar eq "Alexandria" or myPiVar eq "Cairo">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Fiji" or myPiVar eq "Suva">
                                            Fiji Sponsors list here
                                            <cfelseif myPcVar eq "Finland" or myPiVar eq "Helsinki">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "France" or myPiVar eq "Aix-en-Provence" or myPiVar eq "Nice" or myPiVar eq "France">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Germany" or myPiVar eq "Berlin" or myPiVar eq "Bielefeld" or myPiVar eq "Hamburg" or myPiVar eq "Hannover" or myPiVar eq "Marburg">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Ghana" or myPiVar eq "Accra">
                                            Ghana Sponsors list here
                                            <cfelseif myPcVar eq "Greece" or myPiVar eq "Athens">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Guatemala" or myPiVar eq "PuertoQuetzal">
                                            Guatemala Sponsors list here
                                            <cfelseif myPcVar eq "Hungary" or myPiVar eq "Budapest">
                                            Hungary Sponsors list here
                                            <cfelseif myPcVar eq "India" or myPiVar eq "Hyderabad" or myPiVar eq "Kolkata" or myPiVar eq "Pune">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Ireland" or myPiVar eq "Ballyvaughan" or myPiVar eq "Belfast" or myPiVar eq "Cork" or myPiVar eq "Dublin" or myPiVar eq "Galway" or myPiVar eq "Limerick">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Italy" or myPiVar eq "Florence" or myPiVar eq "Milan" or myPiVar eq "Italy" or myPiVar eq "Syracuse" or myPiVar eq "Venice">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Japan" or myPiVar eq "Beppu" or myPiVar eq "Tokyo">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "KenyaCoastRepublic" or myPiVar eq "KilimanjaroBushCamp" or myPiVar eq "Nairobi">
                                            Kenya Coast Republic Sponsors list here
                                            <cfelseif myPcVar eq "Korea,South" or myPiVar eq "Seoul">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Malaysia" or myPiVar eq "KualaLumpur" or myPiVar eq "Kuching">
                                            Malaysia Sponsors list here
                                            <cfelseif myPcVar eq "Mexico" or myPiVar eq "BahiaMagdalena" or myPiVar eq "Guadalajara" or myPiVar eq "Merida" or myPiVar eq "MexicoCity" or myPiVar eq "PueblaCity">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Nepal" or myPiVar eq "Kathmandu">
                                            Nepal Sponsors list here
                                            <cfelseif myPcVar eq "Netherlands" or myPiVar eq "Amsterdam" or myPiVar eq "Utrecht">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "NewZealand" or myPiVar eq "Auckland" or myPiVar eq "Aukland" or myPiVar eq "Christchurch" or myPiVar eq "Hamilton" or myPiVar eq "Wellington">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Peru" or myPiVar eq "Cusco" or myPiVar eq "Lima">
                                            Peru Sponsors list here
                                            <cfelseif myPcVar eq "Poland" or myPiVar eq "Krakow" or myPiVar eq "Wroclaw">
                                            Poland Sponsors list here
                                            <cfelseif myPcVar eq "Portugal" or myPiVar eq "Lisbon">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "ProgramsatSea" or myPiVar eq "Multiple">
                                            Programs at Sea Sponsors list here
                                            <cfelseif myPcVar eq "RussianFederation" or myPiVar eq "Moscow" or myPiVar eq "StPetersburg">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Singapore" or myPiVar eq "Singapore">
                                            Singapore Sponsors list here
                                            <cfelseif myPcVar eq "SouthAfrica" or myPiVar eq "CapeTown" or myPiVar eq "Grahamstown">
                                            South Africa Sponsors list here
                                            <cfelseif myPcVar eq "Spain" or myPiVar eq "Barcelona" or myPiVar eq "Spain" or myPiVar eq "Madrid" or myPiVar eq "Seville">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Sweden" or myPiVar eq "Sweden">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Tanzania" or myPiVar eq "Arusha">
                                            Tanzania Sponsors list here
                                            <cfelseif myPcVar eq "Thailand" or myPiVar eq "Bangkok" or myPiVar eq "KhonKaen">
                                            Thailand Sponsors list here
                                            <cfelseif myPcVar eq "Turkey" or myPiVar eq "Ankara" or myPiVar eq "Turkey">
                                            Turkey Sponsors list here
                                            <cfelseif myPcVar eq "TurksandCaicosIslands" or myPiVar eq "SouthCaicos">
                                            Turks and Caicos Islands Sponsors list here
                                            <cfelseif myPcVar eq "Uganda" or myPiVar eq "Kampala">
                                            Uganda Sponsors list here
                                            <cfelseif myPcVar eq "UnitedArabEmirates" or myPiVar eq "Dubai">
                                            United Arab Emirates Sponsors list here
                                            <cfelseif myPcVar eq "UnitedKingdom" or myPiVar eq "Edinburgh" or myPiVar eq "Glasglow" or myPiVar eq "Leeds" or myPiVar eq "London" or myPiVar eq "Oxford" or myPiVar eq "St.Andrews" or myPiVar eq "Stirling" or myPiVar eq "Swansea">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "UnitedStates" or myPiVar eq "ChapelHill,NC" or myPiVar eq "ChapmanUniversity" or myPiVar eq "Cornell College" or myPiVar eq "MiltonCollege">
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                            </ul>
                                            <cfelseif myPcVar eq "Vietnam" or myPiVar eq "HoChiMinhCity">
                                            Vietnam Sponsors list here
                                            <cfelse>
                                            <div>
                                                <ul>
                                                    <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                    <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                    <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                                    <li><a href="http://www.ciee.org/"  alt="CIEE" title="CIEE" target="_blank">CIEE</a></li>
                                                </ul>
                                            </div>
                                        </cfif>
                                        <!--<cfoutput><div>#myPcVar#</div><div>#myPiVar#</div></cfoutput>-->
                                        <cfelse>
                                        <div>
                                            <ul>
                                                <li><a href="http://www.hthworldwide.com/" alt="HTH Worldwide" title="HTH Worldwide" target="_blank">HTH Worldwide</a></li>
                                                <li><a href="http://www.internationalsos.com/en/" alt="International SOS" title="International SOS" target="_blank">International SOS</a></li>
                                                <li><a href="http://www.isic.org/"  alt="ISIC" title="ISIC" target="_blank">ISIC</a>/<a href="http://www.statravel.com/" alt="STA Travel" title="STA Travel" target="_blank">STA Travel</a></li>
                                                <li><a href="http://www.ciee.org/"  alt="CIEE" title="CIEE" target="_blank">CIEE</a></li>
                                            </ul>
                                        </div>
                                    </cfif>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 10px 0 0 0;"></div>                       
                        <div id="study_abroad_resources">
                            <div id="student_handbook_title_container">
                                <div id="student_handbook_title">Student Handbook</div>
                            </div>
                            <div class="student_handbook_menu">
                                <ul class="student_handbook_container">
                                    <li class="menu">
                                        <ul>
                                            <li class="button"><a href="#" class="dropdown_button">Understanding Study Abroad<span></span></a></li>
                                            <li class="dropdown">
                                                <ul>
                                                    <li><a href="http://studentsabroad.us/handbook/introduction.php?country=General">Introduction</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/why-study-abroad.php?country=general">Why Study Abroad?</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/why-learn-a-language.php?country=general">Why Learn a Language?</a></li>
                                                    <li class="last"><a href="http://studentsabroad.us/handbook/advice-for-parents.php?country=general">Advice for Parents</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu">
                                        <ul>
                                            <li class="button"><a href="#" class="dropdown_button">Choosing a Program<span></span></a></li>
                                            <li class="dropdown">
                                                <ul>
                                                    <li><a href="http://studentsabroad.us/handbook/finding-quality-program.php?country=general">Finding a Quality Program</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/select-the-right-program.php?country=general">Selecting the Right Program for You</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/who-runs-your-program.php?country=general">Who Runs Your Program</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/">Financing Study Abroad</a></li>
                                                    <li class="last"><a href="http://studentsabroad.us/handbook/application-process.php?country=general">Application Process</a></li>
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
                                                        <li><a href="http://studentsabroad.us/handbook/pre-departure-planning.php?country=general">Pre-Departure Planning</a></li>
                                                        <li><a href="http://studentsabroad.us/handbook/how-foreign-laws-apply-to-you.php?country=general">How Foreign Law Apply to You</a></li>
                                                        <li><a href="http://studentsabroad.us/handbook/communication-while-abroad.php?country=general">Communication While Abroad</a></li>
                                                        <li><a href="http://studentsabroad.us/handbook/housing.php?country=general">Housing</a></li>
                                                        <li><a href="http://studentsabroad.us/handbook/packing.php?country=general">Packing</a></li>
                                                        <li class="last"><a href="http://studentsabroad.us/handbook/expectations.php?country=general">Expectations</a></li>
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
                                                    <li><a href="http://studentsabroad.us/handbook/medical-care-and-insurance.php?country=general">Medical Care and Insurance</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/basic-health-and-safety.php?country=general">Basic Health and Safety</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/strategies-to-reduce-risk.php?country=general">Risk Factors and Strategies to Reduce Risk</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/special-issues.php?country=general">Special Issues</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/crisis-management.php?country=general">Crisis Management</a></li>
                                                    <li class="last"><a href="http://studentsabroad.us/handbook/adjustments-and-culture-shock.php?country=general">Adjustments and Culture Shock</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu">
                                        <ul>
                                            <li class="button"><a href="#" class="dropdown_button">Coming Home<span></span></a></li>
                                            <li class="dropdown">
                                                <ul>
                                                    <li><a href="http://studentsabroad.us/handbook/airport-procedures.php?country=general">Airport Safety, Duties, and Customs</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/reverse-culture-shock.php?country=general">Reverse Culture Shock</a></li>
                                                    <li class="last"><a href="http://studentsabroad.us/handbook/continuing-benefits-of-study-abroad.php?country=general">Continuing Benefits of Study Abroad</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu">
                                        <ul>
                                            <li class="button"><a href="#" class="dropdown_button">Tools for Planning<span></span></a></li>
                                            <li class="dropdown">
                                                <div class="submenu_title">Study Abroad Handbook</div>
                                                <ul>
                                                    <li><a href="http://studentsabroad.us/handbook/questions.php?country=general">Questions</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/checklist.php?country=general">Checklist</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/resources.php?country=general">Resources</a></li>
                                                </ul>
                                                <div class="submenu_title">Communication</div>
                                                <ul>
                                                    <li><a href="http://studentsabroad.us/handbook/communication-info-sheets.php?country=general">Communication Info Sheet</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/words-to-know.php?country=general">Words to Know</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/phrases-to-know.php?country=general">Phrases to Know</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/help-images.php?country=general">Help Images</a></li>
                                                </ul>
                                                <div class="submenu_title">Emergency</div>
                                                <ul>
                                                    <li><a href="http://studentsabroad.us/handbook/emergency-planning.php?country=general">Emergency Planning</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/emergency-action-plan-steps.php?country=general">Emergency Action Plan Steps</a></li>
                                                    <li><a href="http://studentsabroad.us/handbook/personal-emergency-action-plan.php?country=general">Personal Emergency Action Plan</a></li>
                                                    <li class="last"><a href="http://studentsabroad.us/handbook/emergency-card.php?country=general">Emergency Card</a></li>
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
                    <div id="right_content_bottom"></div>
                </div>
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
	<!--
	// <![CDATA[
	$(document).ready(function(){ 			
		$('#main_sponsors_featured').orbit({
			/*timer: false,*/
			animation: 'fade',
			animationSpeed: 600,
			bullets: false,
			directionalNav: false
		});		
	});
	// ]]>
	//-->
</script>
<div class="hidden">
    <script type="text/javascript">
	<!--
	// <![CDATA[

			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"http://studentsabroad.us/images/logo/AllAbroad-logo.jpg",
				"http://studentsabroad.us/images/logo/CIEE-logo.jpg",
				"http://studentsabroad.us/images/logo/CONAHEC-logo.jpg",
				"http://studentsabroad.us/images/logo/GlobalLinks-logo.jpg",
				"http://studentsabroad.us/images/logo/Institute-for-American-Universities-logo.jpg",
				"http://studentsabroad.us/images/logo/ISA-logo.jpg",
				"http://studentsabroad.us/images/logo/International-Studies-Abroad-ISA-logo.jpg",
				"http://studentsabroad.us/images/logo/StudyAbroad-logo.jpg",
				//"http://studentsabroad.us/images/logo/GlobalScholar-logo.jpg",
				//"http://studentsabroad.us/images/logo/Danish-Intsitute-for-Study-Abroad-logo.jpg",
				//"http://studentsabroad.us/images/logo/uStudy-logo.jpg",
				//"http://studentsabroad.us/images/logo/PLUS-logo.jpg",
				"http://studentsabroad.us/images/logo/default-logo.jpg"
			)
	// ]]>
	//-->
	</script>
</div>
</body>
</html>