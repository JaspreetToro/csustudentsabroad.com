<?php 
include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$sub_page_name = "Study Abroad";
$page_name = "Program Search";
$menu = 1;

printHeader($page_name, $menu, "");
printBody();
printFooter();

//***************************************************end of main function*******************************************************
function printBody() {
global $page_name, $sub_page_name;

?>
<div id="wrapper">
	<div id="main-content">
            <div class="highlight">
                <div class="program-search">
                    <div class="title ps-gradient ps-corner-top">
                        <div class="country"><span class="label"><?php echo $sub_page_name?></span> </div>
                        <div class="country-sh"><?php echo $page_name?></div>
                    </div>
                </div>
            </div>    
        <!-- <div class="highlight">
        	<div class="program-search">
            	<div class="title ps-gradient ps-top-corner"><?php echo $page_name;?></div>
            </div>    
        </div> -->
        <div id="scroller">      
            <div class="main-form">
                <div id="preloader"></div>
                <div id="mainformcontainer"></div>
                <div><?php printAPI(); ?></div>
            </div>
            <!-- End of mainnavigation -->
        </div>
        <div id="sponsor">
            <?php printBannerSponsor() ?>
        </div> 
    </div>
<?php
}
?>
<?php
function printAPI() {
?>
<script language="JavaScript" type="text/javascript">
    <!--
    // <![CDATA[

    <!--Domain name, API url and site url-->
    <!--Base url can be modified corresponding to the University/School--> 
    var baseapiurl = 'http://directory.studioabroad.com/api/index.cfm';
    //var baseapiurl = 'http://directory.studentsabroad.com/api/index.cfm';

    var basicsearchcontent='<div id="basicsearchcontainer"><div class="program-search-form"><form action="results.php" class="ps_form" id="searchForm" method="get"name="searchForm"><div class="box_left_form"><div class="ps_program_name"><div class="ps_label"><label for="selProgName">Program Name</label></div><div class="pn_list">{PROGRAM_NAME}</div></div><div class="ps_city"><div class="ps_label"><label for="selProgCity">Select a city</label></div><div class="ps_list">{PROGRAM_CITY}</div></div><div class="ps_country"><div class="ps_label"><label for="selProgCountry">Select a country</label></div><div class="ps_list">{PROGRAM_COUNTRY}</div></div><div class="ps_region"><div class="ps_label"><label for="selProgRegion">Select a region</label></div><div class="ps_list">{PROGRAM_REGION}</div></div><div class="ps_term"><div class="ps_label"><label for="selProgTerm">Select a term</label></div><div class="ps_list">{PROGRAM_TERMS}</div></div></div><div class="box_right_form"><div class="box_button"><input align="middle" alt="Search" class="btnSubmit" id="button" name="button" onclick="Search()" title="Search"type="button" value="Search"></div><div class="box_advanced"><a class="small_dark_blue_bold" href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.AdvancedSearch">Advanced Search<br/><span class="full_site">(Full Site)</span></a></div></div><div class="box_bottom_form"><a href="http://terradotta.com/"><img alt="Terradotta Logo"border="0" height="45" src="images/poweredbyterradotta.png" width="198"></a></div></form></div></div>';        function callApi() {
            var url = baseapiurl + "?callname=getProgramSearchElements&city=yes&country=yes&terms=yes&region=yes&ResponseEncoding=json";
            var head = document.getElementsByTagName("head")[0];
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = url;
            head.appendChild(script);
        }

        function _cb_getProgramSearchElements(root) {
            basicsearch = basicsearchcontent;
            if (root.RECORDCOUNT > 0) {
                var prg_elements = root.ELEMENT;
                var appendterms = "<option value=''>Any</option>";
                var appendcity = "<option value=''>Any</option>";
                var appendcountry = "<option value=''>Any</option>";
                var appendregion = "<option value=''>Any</option>";
                var frm_term_name = "";
                var frm_city_name = "";
                var frm_country_name = "";
                var frm_region_name = "";
                if (prg_elements) {
                    for (var key in prg_elements) {
                        //alert (key);
                        var obj = prg_elements[key];

                        if (key == "1") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var terms = objoptions[proper];
                                        for (var termproper in terms) {
                                            var termsopt = terms[termproper];
                                            for (var t in termsopt) {
                                                if (t == "VALUE") {
                                                    if (termsopt[t] != "") {
                                                        if (appendterms != "") {
                                                            appendterms = appendterms + ("<option value='" + termsopt[t] + "'>" + termsopt[t] + "</option>");
                                                        } else {
                                                            appendterms = "<option value='" + termsopt[t] + "'>" + termsopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_term_name = obj[prop];
                                }
                            }
                        }
                        if (key == "2") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var city = objoptions[proper];
                                        for (var cityproper in city) {
                                            var cityopt = city[cityproper];
                                            for (var t in cityopt) {
                                                if (t == "VALUE") {
                                                    if (cityopt[t] != "") {
                                                        if (appendcity != "") {
                                                            appendcity = appendcity + ("<option value='" + cityopt[t] + "'>" + cityopt[t] + "</option>");
                                                        } else {
                                                            appendcity = "<option value='" + cityopt[t] + "'>" + cityopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_city_name = obj[prop];
                                }
                            }
                        }
                        if (key == "3") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var country = objoptions[proper];
                                        for (var countryproper in country) {
                                            var countryopt = country[countryproper];
                                            for (var t in countryopt) {
                                                if (t == "VALUE") {
                                                    if (countryopt[t] != "") {
                                                        if (appendcountry != "") {
                                                            appendcountry = appendcountry + ("<option value='" + countryopt[t] + "'>" + countryopt[t] + "</option>");
                                                        } else {
                                                            appendcountry = "<option value='" + countryopt[t] + "'>" + countryopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_country_name = obj[prop];
                                }
                            }
                        }
                        if (key == "4") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var region = objoptions[proper];
                                        for (var regionproper in region) {
                                            var regionopt = region[regionproper];
                                            for (var t in regionopt) {
                                                if (t == "VALUE") {
                                                    if (regionopt[t] != "") {
                                                        if (appendregion != "") {
                                                            appendregion = appendregion + ("<option value='" + regionopt[t] + "'>" + regionopt[t] + "</option>");
                                                        } else {
                                                            appendregion = "<option value='" + regionopt[t] + "'>" + regionopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_region_name = obj[prop];
                                }
                            }
                        }
                    }
                }
            }
            basicsearch = basicsearch.replace("{PROGRAM_NAME}", "<input name=\"FORM_PROGRAM_NAME\" id=\"FORM_PROGRAM_NAME\" type=\"text\">");
            basicsearch = basicsearch.replace("{PROGRAM_TERMS}", "<select name=\"FORM_TERM_NAME\" id=\"FORM_TERM_NAME\">" + appendterms + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_CITY}", "<select name=\"FORM_CITY_NAME\" id=\"FORM_CITY_NAME\" >" + appendcity + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_COUNTRY}", "<select name=\"FORM_COUNTRY_NAME\" id=\"FORM_COUNTRY_NAME\">" + appendcountry + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_REGION}", "<select name=\"FORM_REGION_NAME\" id=\"FORM_REGION_NAME\">" + appendregion + "</select>");
            basicsearch = basicsearch.replace(/FORM_PROGRAM_NAME/g, "Program_Name");
            basicsearch = basicsearch.replace(/FORM_CITY_NAME/g, frm_city_name);
            basicsearch = basicsearch.replace(/FORM_TERM_NAME/g, frm_term_name);
            basicsearch = basicsearch.replace(/FORM_COUNTRY_NAME/g, frm_country_name);
            basicsearch = basicsearch.replace(/FORM_REGION_NAME/g, frm_region_name);
            //document.body.innerHTML = document.body.innerHTML + basicsearch;
            document.getElementById('mainformcontainer').innerHTML = document.getElementById('mainformcontainer').innerHTML + basicsearch;
        }

        function Search() {
            /*
            alert("Submit button clicked!");
             var sel_program_name = document.searchForm.Program_Name.value
            var sel_country = document.searchForm.pc.value;
            var sel_term = document.searchForm.pt.value;
            var sel_city = document.searchForm.pi.value;
            var sel_region = document.searchForm.pr.value;           
            alert("Submitting the following values: \nprogram:" + sel_program_name + "\ncountry: " + sel_country + "\nterm: " + sel_term + "\ncity: " + sel_city + "\nregion: " + sel_region);
            */
            document.getElementById("searchForm").submit();
        }

        // ]]>
        //-->
</script>
<script language="JavaScript" type="text/javascript">
    callApi();
</script>    
<?php }?>
