<script language="JavaScript" type="text/javascript">
    <!--
    // <![CDATA[

    <!--Domain name, API url and site url-->
    <!--Base url can be modified corresponding to the University/School--> 
    //var path=window.location.pathname.split('/');	
	//var baseapiurl=window.location.protocol+'//'+window.location.host+'/'+path[1]+'/api/index.cfm';    
	
	//var baseapiurl = 'http://directory.studioabroad.com/api/index.cfm';
    //var baseapiurl = 'http://broncosabroad.international.wmich.edu/api/index.cfm';
    //var baseapiurl = 'http://directory.studentsabroad.com/api/index.cfm';

	var domainname = 'directory.studentsabroad.com';
	var baseapiurl = 'http://'+domainname+'/api/index.cfm';
	var basesiteurl = 'http://'+domainname+'/api/index.cfm';
	var siteurl = 'https://'+domainname+'/';

    var basicsearchcontent = '<div id="basicsearchcontainer">&<form name="frm" id="frm" enctype="multipart/form-data" action="results-adv.php" method="get"><table width="218" border="1" rules="cols"><tr><th width="208" height="25" align="left" bgcolor="#CCCC99">DEMO: Adv Search</th></tr><tr><td>Program Name <br /> {PROGRAM_NAME}</td></tr><tr><td align="left"  >City<br />{PROGRAM_CITY}</td></tr><tr><td align="left"  >Country<br />{PROGRAM_COUNTRY}</td></tr><tr><td align="left">Region<br />{PROGRAM_REGION}</td></tr><tr><td align="left">Term<br />{PROGRAM_TERMS}</td></tr ><tr><td align="center"><input type="button" name="button" id="button" value="-Search-" onclick="Search()" /></td></tr></table></form></div>'

        function callApi() {
            var url = baseapiurl + "?callname=getProgramSearchElements&city=yes&country=yes&terms=yes&region=yes&parameters=yes&ResponseEncoding=json";
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
                var appendterms = "<option value='' selected='selected'>Any</option>";
                var appendcity = "<option value='' selected='selected'>Any</option>";
                var appendcountry = "<option value='' selected='selected'>Any</option>";
                var appendregion = "<option value='' selected='selected'>Any</option>";
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
            basicsearch = basicsearch.replace("{PROGRAM_TERMS}", "<select name=\"FORM_TERM_NAME[]\" id=\"FORM_TERM_NAME\" multiple=\"multiple\">" + appendterms + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_CITY}", "<select name=\"FORM_CITY_NAME[]\" id=\"FORM_CITY_NAME\" multiple=\"multiple\">" + appendcity + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_COUNTRY}", "<select name=\"FORM_COUNTRY_NAME[]\" id=\"FORM_COUNTRY_NAME\" multiple=\"multiple\">" + appendcountry + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_REGION}", "<select name=\"FORM_REGION_NAME[]\" id=\"FORM_REGION_NAME\" multiple=\"multiple\">" + appendregion + "</select>");
            basicsearch = basicsearch.replace(/FORM_PROGRAM_NAME/g, "Program_Name");
            basicsearch = basicsearch.replace(/FORM_CITY_NAME/g, frm_city_name);
            basicsearch = basicsearch.replace(/FORM_TERM_NAME/g, frm_term_name);
            basicsearch = basicsearch.replace(/FORM_COUNTRY_NAME/g, frm_country_name);
            basicsearch = basicsearch.replace(/FORM_REGION_NAME/g, frm_region_name);
            document.body.innerHTML = document.body.innerHTML + basicsearch;
        }

        function Search() {
            alert("Submit button clicked!");


            var sel_program_name = document.frm.Program_Name.value
            var sel_country = document.frm.pc.value;
            var sel_term = document.frm.pt.value;
            var sel_city = document.frm.pi.value;
            var sel_region = document.frm.pr.value;

			
            //alert("Submitting the following values: \nprogram:" + sel_program_name + "\ncountry: " + sel_country + "\nterm: " + sel_term + "\ncity: " + sel_city + "\nregion: " + sel_region);

            document.getElementById("frm").submit();
        }

        // ]]>
        //-->
</script>
<script language="JavaScript" type="text/javascript">
    callApi();
</script>
