<?php

$error = array();
$data = array();

?>
<html>
<head>

</head>
<body>
<?php 

$program_name = filter_var($_GET['Program_Name'], FILTER_SANITIZE_STRING);
$city = filter_var_array($_GET['pi'], FILTER_SANITIZE_STRING);
$country = filter_var_array($_GET['pc'], FILTER_SANITIZE_STRING);
$region = filter_var_array($_GET['pr'], FILTER_SANITIZE_STRING);
$term = filter_var_array($_GET['pt'], FILTER_SANITIZE_STRING);

$language_of_instruction = filter_var_array($_GET['p_10000'], FILTER_SANITIZE_STRING);
$class_status = filter_var_array($_GET['p_10001'], FILTER_SANITIZE_STRING);
$housing_options = filter_var_array($_GET['p_10002'], FILTER_SANITIZE_STRING);
$areas_of_study = filter_var_array($_GET['p_10003'], FILTER_SANITIZE_STRING);
$program_type = filter_var_array($_GET['p_10004'], FILTER_SANITIZE_STRING);
$minimum_gpa = filter_var($_GET['p_10005'], FILTER_SANITIZE_STRING);
$language_gpa = filter_var($_GET['p_10006'], FILTER_SANITIZE_STRING);
$program = filter_var_array($_GET['p_10007'], FILTER_SANITIZE_STRING);

echo "<h1>Testing<span id='loadingDots'></span></h1>";
echo "<div id='php-testing'>";
echo "<p id='program_name'>program name: ".$program_name."</p>";

echo "<p>--LOCATION / TERM--</p>";
echo "<p>city: "; print_r($city);
echo "<p>--end city--</p>";
echo "<p>country: "; print_r($country);
echo "<p>--end country--</p>";
echo "<p>region: "; print_r($region);
echo "<p>--end region--</p>";
echo "<p>term: "; print_r($term);
echo "<p>--end term--</p>";
echo "<p>--PARAMETERS--</p>";
echo "<p>language of instruction: "; print_r($language_of_instruction);
echo "<p>--end city--</p>";
echo "<p>class status: "; print_r($class_status);
echo "<p>--end city--</p>";
echo "<p>housing options: "; print_r($housing_options);
echo "<p>--end city--</p>";
echo "<p>areas of study: "; print_r($areas_of_study);
echo "<p>--end city--</p>";
echo "<p>program type: "; print_r($program_type);
echo "<p>--end city--</p>";
echo "<p>minimum GPA: "; print_r($minimum_gpa);
echo "<p>--end city--</p>";
echo "<p>language GPA: "; print_r($language_gpa);
echo "<p>--end city--</p>";
echo "<p>program: "; print_r($program);
echo "<p>--end city--</p>";
echo "</div>";
echo "<p>--RESULTS--</p>";
echo "<div id='results'></div>";
?>

<script language="javascript" type="text/javascript">
var pagelimit = 10;
var pagenumber = 1;
var numberofpages = '';
var orderby = 'asc';
var fieldname = '';
var searchresultpagecontent = '<div id="programlistcontainer"><div id="container"><div id="main-content"><div class="one-col-row"><div class="c1"><div class="program-block"><div class="list-block"><!--FEATUREDPROGRAM LIST ROWSTART--><div class="featured-programs"><div class="overview"><div class="left"><a href="javascript:void(0)" onclick="getProgrambrochure({FEATUREDPROGRAM_ID})"><!--{FEATUREDPROGRAM_NAME}--></a><br /> <!--{FEATUREDPROGRAM_CITY}-->, <!--{FEATUREDPROGRAM_COUNTRY}--></div><div class="right"><span>Terms:</span> <!--{FEATUREDPROGRAM_TERM}--><br /><span>Partner(s):</span> <!--{FEATUREDPROGRAM_PARTNER}--></div></div><div class="description"><span>Description:</span> <!--{FEATUREDPROGRAM_DESCRIPTION}--></div></div><!--FEATUREDPROGRAM LIST ROWEND--><!--</div>--><div class="list-info">Currently, the listing is showing Outgoing Programs, sorted by <span>Name</span>.</div><!--<div class="list-buttons"><ul><li class="selected"><a href="#">Outgoing</a></li><li><a href="#">Scholarships</a></li></ul></div>--><div class="legend">(F) Featured Programs  (Inactive) Program Not Active</div><div class="list-all"><table width="903" border="0" cellspacing="0" cellpadding="2"><thead class="table-head"><tr><th align="left" class="first">Program Name <a href="javascript:void(0)" onclick="sortbyPrgName()">SortByName</a></th><th align="left" valign="middle">City <a href="javascript:void(0)" onclick="sortbyPrgCity()">SortByCity</a></th><th align="left">Country <a href="javascript:void(0)" onclick="sortbyPrgCountry()">SortByCountry</a></th><th align="left">Region <a href="javascript:void(0)" onclick="sortbyPrgRegion()">SortByRegion</a></th></tr></thead><!--PROGRAM LIST ROWSTART--><tr><td align="left" class="{CLASS_NAME}"><a href="javascript:void(0)" onclick="getProgrambrochure({PROGRAM_ID})" title="<!--{PROGRAM_NAME}-->"><!--{PROGRAM_NAME}--></a> <!--{BIT_FEATURED}--></td><td align="left" class="{CLASS_NAME}"><!--{PROGRAM_CITY}--></td><td align="left" class="{CLASS_NAME}"><!--{PROGRAM_COUNTRY}--></td><td align="left" class="{CLASS_NAME}"><!--{PROGRAM_REGION}--></td></tr><!--PROGRAM LIST ROWEND--></table></div></div><!--</div>--><!--</div>--><!--</div>--></div></div></div></div><div id="footer" align="center"> By Terra Dotta. Technology for educating the world. Copyright Terra Dotta, LLC. All Rights Reserved. </div></div></div>';
<!--Domain name, API url and site url-->
<!--Base url can be modified corresponding to the University/School-->
//var domainname = '<cfoutput>#variables.settings.getValue('_sAuthHostDomain',StorefrontId)#</cfoutput>';
//var baseapiurl = '<cfoutput>#_sAuthHostProtocol#://</cfoutput>'+domainname+'<cfoutput>#_sAuthHostPort##_sAuthHostRelativeRoot#</cfoutput>api/index.cfm';
//var basesiteurl = '<cfoutput>#_sAuthHostProtocol#://</cfoutput>'+domainname+'<cfoutput>#_sAuthHostPort##_sAuthHostRelativeRoot#</cfoutput>index.cfm';

//var baseapiurl = 'http://broncosabroad.international.wmich.edu/api/index.cfm';
//var basesiteurl = 'http://broncosabroad.international.wmich.edu/api/index.cfm';

/*var baseapiurl = 'http://directory.studioabroad.com/api/index.cfm';
var basesiteurl = 'http://directory.studioabroad.com/api/index.cfm';*/

/*var baseapiurl = 'http://directory.studentsabroad.com/api/index.cfm';
var basesiteurl = 'http://directory.studentsabroad.com/api/index.cfm';*/

//var domainname = 'directory.studentsabroad.com';
var domainname = 'directory.studioabroad.com';
var baseapiurl = 'http://'+domainname+'/api/index.cfm';
var basesiteurl = 'http://'+domainname+'/api/index.cfm';
var siteurl = 'https://'+domainname+'/';
	
var programlist ='';
<!--Function used to get url values-->
function getUrlVarsSingle()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
	
}
function getUrlVars()
{
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; i++)
	{
		hash = hashes[i].split('=');

		if($.inArray(hash[0], vars)>-1)
		{
			vars[hash[0]]+="%2C"+hash[1]+"%7F";
		}
		else
		{
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
	}
	return vars;
}

<!--Function used to call program search results API-->
function callApi(pnumber) {
  pagenumber = pnumber;
  var startrow = (pnumber - 1) * pagelimit;
  var endrow = startrow + pagelimit;
  <!--Variable contains the program search result content block-->
  programlist = searchresultpagecontent;
  var url = baseapiurl + '?callName=getProgramSearchResults';
  var str_encoding = '&ResponseEncoding=JSON';
  var hash = getUrlVars()
  var program_name = '';
  var city = '';
  var country = '';
  var region = '';
  var term = '';
  var p_language_of_instruction = '';
  var p_class_status = '';
  var p_housing_options = '';
  var p_areas_of_study = '';
  var p_program_type = '';
  var p_minimum_gpa = '';
  var p_language_gpa = '';
  var p_program = '';
  
  if (hash['Program_Name']) program_name = hash['Program_Name'];
  if (hash['pi%5B%5D']) city = hash['pi%5B%5D'];
  
  if (hash['pc%5B%5D']) country = hash['pc%5B%5D'];
  if (hash['pr%5B%5D']) region = hash['pr%5B%5D'];
  if (hash['pt%5B%5D']) term = hash['pt%5B%5D'];

  if (hash['p_10000%5B%5D']) p_language_of_instruction = hash['p_10000%5B%5D'];
  if (hash['p_10001%5B%5D']) p_class_status = hash['p_10001%5B%5D'];
  if (hash['p_10002%5B%5D']) p_housing_options = hash['p_10002%5B%5D'];
  if (hash['p_10003%5B%5D']) p_areas_of_study = hash['p_10003%5B%5D'];
  if (hash['p_10004%5B%5D']) p_program_type = hash['p_10004%5B%5D'];
  if (hash['p_10005%5B%5D']) p_minimum_gpa = hash['p_10005%5B%5D'];
  if (hash['p_10006%5B%5D']) p_language_gpa = hash['p_10006%5B%5D'];
  if (hash['p_10007%5B%5D']) p_program = hash['p_10007%5B%5D'];

  var script;
  
	  var head = document.getElementsByTagName('head')[0];
	  var script = document.createElement('script');
	  script.type = 'text/javascript';
	  script.language = 'javascript';

//'&p_10000=' + p_language_of_instruction + '&p_10001=' + p_class_status + '&p_10002=' + p_housing_options + '&p_10003=' + p_areas_of_study + '&p_10004=' + p_program_type + '&p_10005=' + p_minimum_gpa + '&p_10006=' + p_language_gpa + '&p_10007=' + p_program;

	/*if (program_name != '' && city ==='' && country === '' && region === '' && term === '' && p_10000 === '' && p_10001 === '' && p_10002 === '' && p_10003 === '' && p_10004 === '' && p_10005 === '' && p_10006 === '' && p_10007 === '') {  
		script.src = url + '&ProgramName=' + program_name;    
		alert("1A: " + script.src);   				
	} else if (program_name != '') {
		script.src = url + '&ProgramName=' + program_name + '&city=' + city + '&country=' + country + '&region=' + region + '&term=' + term + '&p_10000=' + p_language_of_instruction + '&p_10001=' + p_class_status + '&p_10002=' + p_housing_options + '&p_10003=' + p_areas_of_study + '&p_10004=' + p_program_type + '&p_10005=' + p_minimum_gpa + '&p_10006=' + p_language_gpa + '&p_10007=' + p_program;	    
		alert("1B: " + script.src);   

	} else {
		script.src = url + '&city=' + city + '&country=' + country + '&region=' + region + '&term=' + term + '&p_10000=' + p_language_of_instruction + '&p_10001=' + p_class_status + '&p_10002=' + p_housing_options + '&p_10003=' + p_areas_of_study + '&p_10004=' + p_program_type + '&p_10005=' + p_minimum_gpa + '&p_10006=' + p_language_gpa + '&p_10007=' + p_program;
		alert("2nd: " + script.src);
	}*/
	

	script.src = url + <?php if($program_name !== "") { ?>'&ProgramName=' + program_name + <?php } ?> <?php if(!empty($city[0])) { ?>'&city=' + city + <?php } ?> <?php if (!empty($country[0])) {?>'&country=' + country + <?php } ?> <?php if(!empty($region[0])) { ?>'&region=' + region +<?php } ?> <?php if (!empty($term[0])) { ?>'&term=' + term + <?php } ?> <?php if (!empty($language_of_instruction[0])) { ?>'&p_10000=' + p_language_of_instruction + <?php } ?> <?php if (!empty($class_status[0])) { ?>'&p_10001=' + p_class_status + <?php } ?> <?php if (!empty($housing_options[0])) { ?>'&p_10002=' + p_housing_options + <?php }?> <?php if (!empty($areas_of_study[0])) { ?>'&p_10003=' + p_areas_of_study +<?php } ?> <?php if (!empty($program_type[0])) { ?> '&p_10004=' + p_program_type + <?php } ?><?php if(!empty($minimum_gpa)) { ?>'&p_10005=' + p_minimum_gpa + <?php } ?> <?php if(!empty($language_gpa)) { ?>'&p_10006=' + p_language_gpa + <?php } ?><?php if(!empty($program[0])) { ?>'&p_10007=' + p_program + <?php } ?> str_encoding;
	alert ("script.src: " + script.src);

	if (fieldname != '') {
		script.src = url + '&ProgramName=' + program_name + '&city=' + city + '&country=' + country + '&region=' + region + '&term=' + term + '&p_10000=' + p_language_of_instruction + '&p_10001=' + p_class_status + '&p_10002=' + p_housing_options + '&p_10003=' + p_areas_of_study + '&p_10004=' + p_program_type + '&p_10005=' + p_minimum_gpa + '&p_10006=' + p_language_gpa + '&p_10007=' + p_program  + str_encoding + '&itemSort=' + fieldname + '&sortOrder=' + orderby;
		alert("3rd: " + script.src);
	}



	head.appendChild(script);

}

function _cb_getProgramSearchResults(root) {
  <!--Variables rwString and frwString used to get specific content block-->
  rwString = programlist.substring(programlist.indexOf('<!--PROGRAM LIST ROWSTART-->') + 28, programlist.indexOf('<!--PROGRAM LIST ROWEND-->'));
  frwString = programlist.substring(programlist.indexOf('<!--FEATUREDPROGRAM LIST ROWSTART-->') + 36, programlist.indexOf('<!--FEATUREDPROGRAM LIST ROWEND-->'));
  previousnextString = programlist.substring(programlist.indexOf('<!--PREVIOUS START-->') + 22, programlist.indexOf('<!--PREVIOUS END-->'));
  pagingString = programlist.substring(programlist.indexOf('<!--PAGES START-->') + 18, programlist.indexOf('<!--PAGES END-->'));
  <!--Variable used to store featured image-->
  featuredimage = '(F)';
  <!--Below variables used to get program details-->
  var progname = '';
  var progcity = '';
  var progcountry = '';
  var progregion = '';
  var progid = 0;
  var programfeatured = 0;
  <!--Variable to append all programs list-->
  var appendlist = '';
  <!--Variable to append all featured programs-->
  var appendfeatured = '';
  <!--Variable to append all page numbers-->
  var appendpaging = '';
  if (root.RECORDCOUNT > 0) {
    <!--To get all programs list-->

    var rs = root.PROGRAM;
    if (rs) {
      for (var key in rs) {
        var obj = rs[key];
        progname = '';
        progcity = '';
        progcountry = '';
        progregion = '';
        for (var prop in obj) {
          if (prop == 'PROGRAM_NAME') progname = obj[prop];
          if (prop == 'PROGRAM_CITY') progcity = obj[prop];
          if (prop == 'PROGRAM_COUNTRY') progcountry = obj[prop];
          if (prop == 'PROGRAM_REGION') progregion = obj[prop];
          if (prop == 'PROGRAM_ID') progid = obj[prop];
          if (prop == 'PROGRAM_FEATURED') programfeatured = obj[prop];
        }
        <!--Replace the custom keywords used in the html content with corresponding values-->
        rplcedRow = rwString.replace(/<!--{PROGRAM_NAME}-->/g, progname);
        rplcedRow = rplcedRow.replace('<!--{PROGRAM_CITY}-->', progcity);
        rplcedRow = rplcedRow.replace('<!--{PROGRAM_COUNTRY}-->', progcountry);
        rplcedRow = rplcedRow.replace('<!--{PROGRAM_REGION}-->', progregion);
        rplcedRow = rplcedRow.replace('{PROGRAM_ID}', progid);
        if (programfeatured == 1) rplcedRow = rplcedRow.replace('<!--{BIT_FEATURED}-->', featuredimage);
        else rplcedRow = rplcedRow.replace('<!--{BIT_FEATURED}-->', '');
        if (key % 2 == 0) rplcedRow = rplcedRow.replace(/{CLASS_NAME}/g, 'listing-cell');
        else rplcedRow = rplcedRow.replace(/{CLASS_NAME}/g, 'listing-cell alternate-row');
        appendlist = appendlist + rplcedRow;
      }
    }
    if (root.FEATURED) {
      <!--To get all featured programs-->
      if (root.FEATURED.FEATUREDRECORDCOUNT > 0) {
        <!--Below variables used to get featured program details-->
        var featuredprogid = 0;
        var featuredprogname = '';
        var featuredprogcity = '';
        var featuredprogcountry = '';
        var featuredprogdesc = '';
        var featuredprogterm = '';
        var featuredprogpartner = '';
        var featuredprogexchange = '';
        var progterm = '';
        var progpartner = '';
        var singleprogterm = '';
        var singleprogpartner = '';
        var prevprgid = '';
        var rs_featured = root.FEATURED.PROGRAM;
        if (root.FEATURED.FEATUREDRECORDCOUNT > 1) {
          if (rs_featured) {
            for (var key in rs_featured) {
              if (!rs_featured[key].length) {
                var obj = rs_featured[key];
                for (var prop in obj) {
                  if (prop == 'PROGRAM_ID') {
                    featuredprogid = obj[prop];
                  }
                  if (!obj[prop].length) {
                    if (prop && typeof obj[prop] == 'object') {
                      var obj1 = obj[prop];
                      for (var prop1 in obj1) {
                        var obj2 = obj1[prop1];
                        for (var prop2 in obj2) {
                          var obj3 = obj2[prop2];
                          if (obj2[prop2].length) {
                            if (prop2 == 'PROGRAM_TERM') {
                              singleprogterm = obj2[prop2];
                              featuredprogterm = singleprogterm;
                            }
                            if (prop2 == 'PROGRAM_PARTNER') {
                              singleprogpartner = obj2[prop2];
                              featuredprogpartner = singleprogpartner;
                            }
                          } else {
                            var progterm = '';
                            var progpartner = '';
                            for (var prop3 in obj3) {
                              if (prop3 == 'PROGRAM_TERM') {
                                progterm = obj3[prop3];
                              }
                              if (prop3 == 'PROGRAM_PARTNER') {
                                progpartner = obj3[prop3];
                              }
                            }
                            if (featuredprogterm != '') featuredprogterm = featuredprogterm + ',' + progterm;
                            else featuredprogterm = progterm;
                            if (featuredprogpartner != '') featuredprogpartner = featuredprogpartner + ',' + progpartner;
                            else featuredprogpartner = progpartner;
                          }
                        }
                      }
                    }
                  } else {
                    if (prop == 'PROGRAM_NAME') featuredprogname = obj[prop];
                    if (prop == 'PROGRAM_CITY') featuredprogcity = obj[prop];
                    if (prop == 'PROGRAM_COUNTRY') featuredprogcountry = obj[prop];
                    if (prop == 'BEXCHANGEAVAILABLE') featuredprogexchange = obj[prop];
                    if (prop == 'PROGRAM_DESCRIPTION') featuredprogdesc = obj[prop];
                  }
                }
              }
              <!--Replace the custom keywords used in the html content with corresponding values-->
              frplcedRow = frwString.replace('<!--{FEATUREDPROGRAM_NAME}-->', featuredprogname);
              frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_CITY}-->', featuredprogcity);
              frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_COUNTRY}-->', featuredprogcountry);
              frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_TERM}-->', featuredprogterm);
              frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_PARTNER}-->', featuredprogpartner);
              frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_DESCRIPTION}-->', featuredprogdesc);
              frplcedRow = frplcedRow.replace('{FEATUREDPROGRAM_ID}', featuredprogid);
              appendfeatured = appendfeatured + frplcedRow;
              featuredprogterm = '';
              featuredprogpartner = '';
            }
          }
        } else {
          if (rs_featured) {
            for (var key in rs_featured) {
              if (key == 'PROGRAM_ID') featuredprogid = rs_featured[key];
              if (!rs_featured[key].length) {
                var obj = rs_featured[key];
                for (var prop in obj) {
                  if (prop && typeof obj[prop] == 'object') {
                    var obj1 = obj[prop];
                    for (var prop1 in obj1) {
                      var obj2 = obj1[prop1];
                      for (var prop2 in obj2) {
                        if (prop2 == 'PROGRAM_TERM') {
                          progterm = obj2[prop2];
                        }
                        if (prop2 == 'PROGRAM_PARTNER') {
                          progpartner = obj2[prop2];
                        }
                      }
                      if (featuredprogterm != '') featuredprogterm = featuredprogterm + ',' + progterm;
                      else featuredprogterm = progterm;
                      if (featuredprogpartner != '') featuredprogpartner = featuredprogpartner + ',' + progpartner;
                      else featuredprogpartner = progpartner;
                    }
                  }
                }
              } else {
                if (key == 'PROGRAM_NAME') featuredprogname = rs_featured[key];
                if (key == 'PROGRAM_CITY') featuredprogcity = rs_featured[key];
                if (key == 'PROGRAM_COUNTRY') featuredprogcountry = rs_featured[key];
                if (key == 'BEXCHANGEAVAILABLE') featuredprogexchange = rs_featured[key];
                if (key == 'PROGRAM_DESCRIPTION') featuredprogdesc = rs_featured[key];
              }
            }
            <!--Replace the custom keywords used in the html content with corresponding values-->
            frplcedRow = frwString.replace('<!--{FEATUREDPROGRAM_NAME}-->', featuredprogname);
            frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_CITY}-->', featuredprogcity);
            frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_COUNTRY}-->', featuredprogcountry);
            frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_TERM}-->', featuredprogterm);
            frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_PARTNER}-->', featuredprogpartner);
            frplcedRow = frplcedRow.replace('<!--{FEATUREDPROGRAM_DESCRIPTION}-->', featuredprogdesc);
            frplcedRow = frplcedRow.replace('{FEATUREDPROGRAM_ID}', featuredprogid);
            appendfeatured = appendfeatured + frplcedRow;
          }
        }
      }
    }
    <!--Variable to get total number of records-->
    var totalrecords = root.RECORDCOUNT;
    <!--Variable to get total number of pages-->
    //numberofpages = Math.round(totalrecords / pagelimit);<br />
	
	numberofpages = Math.round(totalrecords);
	
    for (i = 1; i <= numberofpages; i++) {
      rplcedPageNumber = pagingString.replace('<!--{PAGES}-->', i);
      if (pagenumber == i) rplcedPageNumber = rplcedPageNumber.replace('{PAGING_CLASS_NAME}', 'selected');
      else rplcedPageNumber = rplcedPageNumber.replace('{PAGING_CLASS_NAME}', '');
      appendpaging = appendpaging + rplcedPageNumber;
    }	
  }
  <!--Variables tobereplaced , ftobereplaced and pagingStringtobereplaced used to replace specific content block with corresponding values-->
  tobereplaced = programlist.substring(programlist.indexOf('<!--PROGRAM LIST ROWSTART-->'), programlist.indexOf('<!--PROGRAM LIST ROWEND-->') + 26);
  ftobereplaced = programlist.substring(programlist.indexOf('<!--FEATUREDPROGRAM LIST ROWSTART-->'), programlist.indexOf('<!--FEATUREDPROGRAM LIST ROWEND-->') + 34);
  pagingStringtobereplaced = programlist.substring(programlist.indexOf('<!--PAGES START-->'), programlist.indexOf('<!--PAGES END-->') + 16);
  programlist = programlist.replace(tobereplaced, appendlist);
  programlist = programlist.replace(ftobereplaced, appendfeatured);
  programlist = programlist.replace(pagingStringtobereplaced, appendpaging);
  //programlist = programlist.replace('<!--{SEARCHVERBIAGE}-->', root.SEARCHVERBIAGE);
  document.getElementById('results').innerHTML = programlist;
}
<!--Function used to get the selected page-->
function gotopage(pnum) {
  callApi(pnum);
}
<!--Function used to get the next page-->
function gotonextpage() {
  if (pagenumber != numberofpages) pagenumber = pagenumber + 1;
  else pagenumber = pagenumber;
  callApi(pagenumber);
}
<!--Function used to get the previous page-->
function gotoprevpage() {
  if (pagenumber != 1) pagenumber = pagenumber - 1;
  else pagenumber = pagenumber;
  callApi(pagenumber);
}
<!--Function used to sort programs by program name-->
function sortbyPrgName() {
  fieldname = 'Program_Name';
  if (orderby == 'asc') orderby = 'desc';
  else orderby = 'asc';
  callApi(pagenumber);
}
<!--Function used to sort programs by program city-->
function sortbyPrgCity() {
  fieldname = 'Program_City';
  if (orderby == 'asc') orderby = 'desc';
  else orderby = 'asc';
  callApi(pagenumber);
}
<!--Function used to sort programs by program country-->
function sortbyPrgCountry() {
  fieldname = 'Program_Country';
  if (orderby == 'asc') orderby = 'desc';
  else orderby = 'asc';
  callApi(pagenumber);
}
<!--Function used to sort programs by program region-->
function sortbyPrgRegion() {
  fieldname = 'Program_Region';
  if (orderby == 'asc') orderby = 'desc';
  else orderby = 'asc';
  callApi(pagenumber);
}
<!--Function used to get program brochure-->
function getProgrambrochure(prgid) {
  /* if (prgid != '') location.href = basesiteurl + '?FuseAction=Programs.ViewProgram&program_id=' + prgid; */
  if (prgid != '') {
  	//var programbrochureurl = basesiteurl + '?callName=getProgramBrochure&ResponseEncoding=JSON&Program_ID=' +prgid;
	//alert (programbrochureurl);
	window.location = 'brochure-adv.php?program_id=' +prgid;	
  }
  
  //alert (programbrochureurl);
}

</script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script language="javascript" type="text/javascript">
	
    callApi(1);
	
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
		$('h1').click(function() {							
    		$("#php-testing").toggle();
		});
	});
	$(window).load(function(){
		$("#php-testing").slideUp();
		$('h1:contains("Testing")').text('Search Results');
		$("#results:empty").text('Results empty/ Did not load');
	});
</script>
</body>
</html>
