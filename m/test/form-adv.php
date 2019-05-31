<html>
<head></head>
<body>
<p><a href="form-test.php">Simple Search</a> | <a href="form-adv.php">Advanced Search</a></p>
<h1>Loading<span id="loadingDots"></span></h1>
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

	//var domainname = 'directory.studentsabroad.com';
	var domainname = 'directory.studioabroad.com';
	var baseapiurl = 'http://'+domainname+'/api/index.cfm';
	var basesiteurl = 'http://'+domainname+'/api/index.cfm';
	var siteurl = 'https://'+domainname+'/';

    var basicsearchcontent = '<div id="basicsearchcontainer"><div><p>DEMO: Advanced Search</p></div><form name="frm" id="frm" enctype="multipart/form-data" action="results-adv.php" method="get"><div class="location-term-container"><table width="230" border="1" rules="cols"><tr><th width="208" height="25" align="left" bgcolor="#CCCC99">LOCATION / TERM:</th></tr><tr><td>Program Name <br /> {PROGRAM_NAME}</td></tr><tr><td align="left"  >City<br />{PROGRAM_CITY}</td></tr><tr><td align="left"  >Country<br />{PROGRAM_COUNTRY}</td></tr><tr><td align="left">Region<br />{PROGRAM_REGION}</td></tr><tr><td align="left">Term<br />{PROGRAM_TERMS}</td></tr ></table></div><div class="parameters-container"><table width="230" border="1" rules="cols"><tr><th width="208" height="25" align="left" bgcolor="#CCCC99">PARAMETERS:</th></tr><tr><td>Language of Instruction<br />{PARAMETER_LANGUAGEOFINSTRUCTION}</td></tr><tr><td>Class Status<br />{PARAMETER_CLASSSTATUS}</td></tr><tr><td>Housing Options<br />{PARAMETER_HOUSINGOPTIONS}</td></tr><tr><td>Areas of Study<br />{PARAMETER_AREASOFSTUDY}</td></tr><tr><td>Program Type<br />{PARAMETER_PROGRAMTYPE}</td></tr><tr><td>Minimum GPA<br />{PARAMETER_MINIMUMGPA}</td></tr><tr><td>Language GPA<br />{PARAMETER_LANGUAGEGPA}</td></tr><tr><td>Program<br />{PARAMETER_PROGRAM}</td></tr></table></div><div class="submit-container"><table><tr><td align="center"><input type="button" name="button" id="button" value="-Search-" onclick="Search()" /></td></tr></table></div></form></div>'

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
				<!-- declare Parameters -->
				var appendlanguageofinstruction = "<option value='' selected='selected'>Any</option>";
				var appendclassstatus = "<option value='' selected='selected'>Any</option>";
				var appendhousingoptions = "<option value='' selected='selected'>Any</option>";
				var appendareasofstudy = "<option value='' selected='selected'>Any</option>";
				var appendprogramtype = "<option value='' selected='selected'>Any</option>";
				var appendminimumgpa = "<option value='' selected='selected'>Any</option>";
				var appendlanguagegpa = "<option value='' selected='selected'>Any</option>";
				var appendprogram = "<option value='' selected='selected'>Any</option>"; 
				
				var frm_languageofinstruction_name = "";
				var frm_classstatus_name = "";
				var frm_housingoptions_name = "";
				var frm_areasofstudy_name = "";
				var frm_programtype_name = "";
				var frm_minimumgpa_name = "";
				var frm_languagegpa_name = "";
				var frm_program_name = ""; 
				<!-- end declare Parameters -->
                if (prg_elements) {
                    for (var key in prg_elements) {
                        //alert (key);
                        var obj = prg_elements[key];
						
						<!-- start Location/Term -->
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
						<!-- end Location/Term -->
						<!-- start Parameters -->
						<!--Language of Instruction-->
						 if (key == "5") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var languageofinstruction = objoptions[proper];
                                        for (var languageofinstructionproper in languageofinstruction) {
                                            var languageofinstructionopt = languageofinstruction[languageofinstructionproper];
                                            for (var t in languageofinstructionopt) {
                                                if (t == "VALUE") {
                                                    if (languageofinstructionopt[t] != "") {
                                                        if (appendlanguageofinstruction != "") {
                                                            appendlanguageofinstruction = appendlanguageofinstruction + ("<option value='" + languageofinstructionopt[t] + "'>" + languageofinstructionopt[t] + "</option>");
                                                        } else {
                                                            appendlanguageofinstruction = "<option value='" + languageofinstructionopt[t] + "'>" + languageofinstructionopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_languageofinstruction_name = obj[prop];
                                }
                            }
                        }
						<!--end Language of Instruction-->
						<!--Class Status-->
						 if (key == "6") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var classstatus = objoptions[proper];
                                        for (var classstatusproper in classstatus) {
                                            var classstatusopt = classstatus[classstatusproper];
                                            for (var t in classstatusopt) {
                                                if (t == "VALUE") {
                                                    if (classstatusopt[t] != "") {
                                                        if (appendclassstatus != "") {
                                                            appendclassstatus = appendclassstatus + ("<option value='" + classstatusopt[t] + "'>" + classstatusopt[t] + "</option>");
                                                        } else {
                                                            appendclassstatus = "<option value='" + classstatusopt[t] + "'>" + classstatusopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_classstatus_name = obj[prop];
                                }
                            }
                        }
						<!--end Class Status-->
						<!--Housing Options-->
						 if (key == "7") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var housingoptions = objoptions[proper];
                                        for (var housingoptionsproper in housingoptions) {
                                            var housingoptionsopt = housingoptions[housingoptionsproper];
                                            for (var t in housingoptionsopt) {
                                                if (t == "VALUE") {
                                                    if (housingoptionsopt[t] != "") {
                                                        if (appendhousingoptions != "") {
                                                            appendhousingoptions = appendhousingoptions + ("<option value='" + housingoptionsopt[t] + "'>" + housingoptionsopt[t] + "</option>");
                                                        } else {
                                                            appendhousingoptions = "<option value='" + housingoptionsopt[t] + "'>" + housingoptionsopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_housingoptions_name = obj[prop];
                                }
                            }
                        }
						<!--end Housing Options-->
						<!--Areas of Study-->
						 if (key == "8") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var areasofstudy = objoptions[proper];
                                        for (var areasofstudyproper in areasofstudy) {
                                            var areasofstudyopt = areasofstudy[areasofstudyproper];
                                            for (var t in areasofstudyopt) {
                                                if (t == "VALUE") {
                                                    if (areasofstudyopt[t] != "") {
                                                        if (appendareasofstudy != "") {
                                                            appendareasofstudy = appendareasofstudy + ("<option value='" + areasofstudyopt[t] + "'>" + areasofstudyopt[t] + "</option>");
                                                        } else {
                                                            appendareasofstudy = "<option value='" + areasofstudyopt[t] + "'>" + areasofstudyopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_areasofstudy_name = obj[prop];
                                }
                            }
                        }
						<!--end Areas of Study-->
						<!--Program Type-->
						 if (key == "9") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var programtype = objoptions[proper];
                                        for (var programtypeproper in programtype) {
                                            var programtypeopt = programtype[programtypeproper];
                                            for (var t in programtypeopt) {
                                                if (t == "VALUE") {
                                                    if (programtypeopt[t] != "") {
                                                        if (appendprogramtype != "") {
                                                            appendprogramtype = appendprogramtype + ("<option value='" + programtypeopt[t] + "'>" + programtypeopt[t] + "</option>");
                                                        } else {
                                                            appendprogramtype = "<option value='" + programtypeopt[t] + "'>" + programtypeopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_programtype_name = obj[prop];
                                }
                            }
                        }
						<!--end Program Type-->
						<!--Minimum GPA-->
						 if (key == "10") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var minimumgpa = objoptions[proper];
                                        for (var minimumgpaproper in minimumgpa) {
                                            var minimumgpaopt = minimumgpa[minimumgpaproper];
                                            for (var t in minimumgpaopt) {
                                                if (t == "VALUE") {
                                                    if (minimumgpaopt[t] != "") {
                                                        if (appendminimumgpa != "") {
                                                            appendminimumgpa = appendminimumgpa + ("<option value='" + minimumgpaopt[t] + "'>" + minimumgpaopt[t] + "</option>");
                                                        } else {
                                                            appendminimumgpa = "<option value='" + minimumgpaopt[t] + "'>" + minimumgpaopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_minimumgpa_name = obj[prop];
                                }
                            }
                        }
						<!--end Minimum GPA-->
						<!--Language GPA-->
						 if (key == "11") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var languagegpa = objoptions[proper];
                                        for (var languagegpaproper in languagegpa) {
                                            var languagegpaopt = languagegpa[languagegpaproper];
                                            for (var t in languagegpaopt) {
                                                if (t == "VALUE") {
                                                    if (languagegpaopt[t] != "") {
                                                        if (appendlanguagegpa != "") {
                                                            appendlanguagegpa = appendlanguagegpa + ("<option value='" + languagegpaopt[t] + "'>" + languagegpaopt[t] + "</option>");
                                                        } else {
                                                            appendlanguagegpa = "<option value='" + languagegpaopt[t] + "'>" + languagegpaopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_languagegpa_name = obj[prop];
                                }
                            }
                        }
						<!--end Language GPA-->
						<!--Program-->
						 if (key == "12") {
                            for (var prop in obj) {
                                if (prop == "OPTIONS") {
                                    var objoptions = obj[prop];
                                    for (var proper in objoptions) {
                                        var program = objoptions[proper];
                                        for (var programproper in program) {
                                            var programopt = program[programproper];
                                            for (var t in programopt) {
                                                if (t == "VALUE") {
                                                    if (programopt[t] != "") {
                                                        if (appendprogram != "") {
                                                            appendprogram = appendprogram + ("<option value='" + programopt[t] + "'>" + programopt[t] + "</option>");
                                                        } else {
                                                            appendprogram = "<option value='" + programopt[t] + "'>" + programopt[t] + "</option>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (prop == "FORM_NAME") {
                                    frm_program_name = obj[prop];
                                }
                            }
                        }
						<!--end Program-->
						<!-- end Parameters -->
                    }
                }
            }
            basicsearch = basicsearch.replace("{PROGRAM_NAME}", "<input name=\"FORM_PROGRAM_NAME\" id=\"FORM_PROGRAM_NAME\" type=\"text\">");
            basicsearch = basicsearch.replace("{PROGRAM_TERMS}", "<select name=\"FORM_TERM_NAME[]\" id=\"FORM_TERM_NAME\" multiple=\"multiple\">" + appendterms + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_CITY}", "<select name=\"FORM_CITY_NAME[]\" id=\"FORM_CITY_NAME\" multiple=\"multiple\">" + appendcity + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_COUNTRY}", "<select name=\"FORM_COUNTRY_NAME[]\" id=\"FORM_COUNTRY_NAME\" multiple=\"multiple\">" + appendcountry + "</select>");
            basicsearch = basicsearch.replace("{PROGRAM_REGION}", "<select name=\"FORM_REGION_NAME[]\" id=\"FORM_REGION_NAME\" multiple=\"multiple\">" + appendregion + "</select>");
			
			basicsearch = basicsearch.replace("{PARAMETER_LANGUAGEOFINSTRUCTION}", "<select name=\"FORM_PARAMETER_LANGUAGEOFINSTRUCTION_NAME[]\" id=\"FORM_PARAMETER_LANGUAGEOFINSTRUCTION_NAME\" multiple=\"multiple\">" + appendlanguageofinstruction + "</select>");
			basicsearch = basicsearch.replace("{PARAMETER_CLASSSTATUS}", "<select name=\"FORM_PARAMETER_CLASSSTATUS_NAME[]\" id=\"FORM_PARAMETER_CLASSSTATUS_NAME\" multiple=\"multiple\">" + appendclassstatus + "</select>");
			basicsearch = basicsearch.replace("{PARAMETER_HOUSINGOPTIONS}", "<select name=\"FORM_PARAMETER_HOUSINGOPTIONS_NAME[]\" id=\"FORM_PARAMETER_HOUSINGOPTIONS_NAME\" multiple=\"multiple\">" + appendhousingoptions + "</select>");
			basicsearch = basicsearch.replace("{PARAMETER_AREASOFSTUDY}", "<select name=\"FORM_PARAMETER_AREASOFSTUDY_NAME[]\" id=\"FORM_PARAMETER_AREASOFSTUDY_NAME\" multiple=\"multiple\">" + appendareasofstudy + "</select>");
			basicsearch = basicsearch.replace("{PARAMETER_PROGRAMTYPE}", "<select name=\"FORM_PARAMETER_PROGRAMTYPE_NAME[]\" id=\"FORM_PARAMETER_PROGRAMTYPE_NAME\" multiple=\"multiple\">" + appendprogramtype + "</select>");
			basicsearch = basicsearch.replace("{PARAMETER_MINIMUMGPA}", "<select name=\"FORM_PARAMETER_MINIMUMGPA_NAME\" id=\"FORM_PARAMETER_MINIMUMGPA_NAME\" >" + appendminimumgpa + "</select>");
			basicsearch = basicsearch.replace("{PARAMETER_LANGUAGEGPA}", "<select name=\"FORM_PARAMETER_LANGUAGEGPA_NAME\" id=\"FORM_PARAMETER_LANGUAGEGPA_NAME\" >" + appendlanguagegpa + "</select>");
			basicsearch = basicsearch.replace("{PARAMETER_PROGRAM}", "<select name=\"FORM_PARAMETER_PROGRAM_NAME[]\" id=\"FORM_PARAMETER_PROGRAM_NAME\" multiple=\"multiple\">" + appendprogram + "</select>");
			
            basicsearch = basicsearch.replace(/FORM_PROGRAM_NAME/g, "Program_Name");
            basicsearch = basicsearch.replace(/FORM_CITY_NAME/g, frm_city_name);
            basicsearch = basicsearch.replace(/FORM_TERM_NAME/g, frm_term_name);
            basicsearch = basicsearch.replace(/FORM_COUNTRY_NAME/g, frm_country_name);
            basicsearch = basicsearch.replace(/FORM_REGION_NAME/g, frm_region_name);
			
			basicsearch = basicsearch.replace(/FORM_PARAMETER_LANGUAGEOFINSTRUCTION_NAME/g, frm_languageofinstruction_name);
			basicsearch = basicsearch.replace(/FORM_PARAMETER_CLASSSTATUS_NAME/g, frm_classstatus_name);
			basicsearch = basicsearch.replace(/FORM_PARAMETER_HOUSINGOPTIONS_NAME/g, frm_housingoptions_name);
			basicsearch = basicsearch.replace(/FORM_PARAMETER_AREASOFSTUDY_NAME/g, frm_areasofstudy_name);
			basicsearch = basicsearch.replace(/FORM_PARAMETER_PROGRAMTYPE_NAME/g, frm_programtype_name);
			basicsearch = basicsearch.replace(/FORM_PARAMETER_MINIMUMGPA_NAME/g, frm_minimumgpa_name);
			basicsearch = basicsearch.replace(/FORM_PARAMETER_LANGUAGEGPA_NAME/g, frm_languagegpa_name);
			basicsearch = basicsearch.replace(/FORM_PARAMETER_PROGRAM_NAME/g, frm_program_name);
            document.body.innerHTML = document.body.innerHTML + basicsearch;
        }

        function Search() {
            alert("Submit button clicked!");


            /*var sel_program_name = document.frm.Program_Name.value
            var sel_country = document.frm.pc.value;
            var sel_term = document.frm.pt.value;
            var sel_city = document.frm.pi.value;
            var sel_region = document.frm.pr.value;*/

			
            //alert("Submitting the following values: \nprogram:" + sel_program_name + "\ncountry: " + sel_country + "\nterm: " + sel_term + "\ncity: " + sel_city + "\nregion: " + sel_region);

            document.getElementById("frm").submit();
        }

        // ]]>
        //-->
</script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script language="JavaScript" type="text/javascript">
    callApi();
	
	var showLoadingDots = function() {
    /**If element not found, do nothing*/
    if (!$("#loadingDots").length>0) return false;

    var showDots = setInterval(function(){            
        //Thanks to roXon, StackOverflow
			var d = $("#loadingDots");
			d.text().length >= 3 ? d.text('') : d.append('.');
		},300);
	}
	$(document).ready(function () {
		showLoadingDots();		
	});	
	$(window).load(function(){
		$('h1:contains("Loading")').hide();
		$("#basicsearchcontainer").fadeIn(4000);
	});	
</script>


</body>
</html>
