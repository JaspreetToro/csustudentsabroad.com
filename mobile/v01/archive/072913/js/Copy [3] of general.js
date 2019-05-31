$(document).ready(function () {														
	/* main navigation */	
	$("#navigation_tier2").hide();
    $("#menu_icon").click(function() {
        $("#navigation_tier2").slideToggle(500);
    });	
	
	/* sub navigation */
    $("a.category").click(function(e) {
      e.preventDefault();
	  
      var $div = $(this).next('.dropdown');
      $(".dropdown").not($div).hide();
        if ($div.is(":visible")) {
            $div.hide();
        }  else {
           $div.show();
        }
    });
	
    $(document).click(function(e){
        var p = $(e.target).closest('.menu').length
        if (!p) {
              $(".dropdown").hide();
        }
    });		
	
	/*$('#goto_fullsite').click(function () {
        var currenturl = $(location).attr('href');
        currenturl = currenturl.substring((currenturl.indexOf("http://", 0) + 7)) //delete the http://
        currenturl = currenturl.substring((currenturl.indexOf("/", 0) + 1)) //delete the domain name
        last_post_directtory = currenturl.indexOf("/", 0);
        var first_directory = currenturl.substring(0, last_post_directtory);
        var full_site_directory = currenturl.substring((currenturl.indexOf("/", 0) + 1)) //delete the first directory
        var full_site_url = "http://" + first_directory + ".studentsabroad.com/" + full_site_directory;
        window.location = full_site_url;
    });*/
		
    $('#content img').after("<BR>");
	
	if(!Modernizr.input.required) {
		$('form').find('input[required]').each(function () {
			// add a class to each required field with "required" & the input type
			// using the normal "getAttribute" method because jQuery's attr always returns "text"
			$(this).attr('class', 'required ' + this.getAttribute('type')).removeAttr('required');
		});		
	}
		$('#myEmergencyCardForm1').each(function () {	
			$('#myEmergencyCardForm1').validate({
				rules: {
					full_name: {
						required: true
					},
					birth: {
						required: true
					},
					citizenship: {
						required: true
					},
					passport_number: {
						required: true
					},
					program_name: {
						required: true
					},
					wishes: {
						required: true
					},
					wishes_tel: {
						required: true
					},
					insurance_company: {
						required: true
					},
					policy_number: {
						required: true
					},
					emergency_phone: {
						required: true
					},
					abroad_program_contact: {
						required: true
					},
					abroad_program_tel: {
						required: true
					},
					home_campus_contact: {
						required: true
					},
					home_campus_tel: {
						required: true
					},
					embassy_consulate: {
						required: true
					},
					embassy_consulate_tel: {
						required: true
					},
					equivalent_911_abroad: {
						required: true
					},
					family_contact: {
						required: true
					},
					family_contact_tel: {
						required: true
					}/*,
					personal_email: {
						required: true
					},
					confirm_personal_email: {
						required: true
					}*/
				},
				messages: {
					full_name: {
						required: "Please enter full name",
					},
					birth: {
						required: "Please enter valid date",
					},
					citizenship: {
						required: "Please enter citizenship",
					},
					passport_number: {
						required: "Please enter passport number",
					},
					program_name: {
						required: "Please enter program name",
					},
					wishes: {
						required: "Please enter primary contact name",
					},
					wishes_tel: {
						required: "Please enter primary contact phone number",
					},
					insurance_company: {
						required: "Please enter insurance company",
					},
					policy_number: {
						required: "Please enter policy number",
					},
					emergency_phone: {
						required: "Please enter insurance company 24 hour emergency phone",
					},
					home_campus_contact: {
						required: "Please enter home campus emergency contact",
					},
					home_campus_tel: {
						required: "Please enter home campus phone number",
					},
					embassy_consulate: {
						required: "Please enter embassy/consulate",
					},
					embassy_consulate_tel: {
						required: "Please enter embassy/consulate phone number",
					},
					equivalent_911_abroad: {
						required: "Please enter equivalent of 911 emergency abroad",
					},
					family_contact: {
						required: "Please enter secondary contact name",
					},
					family_contact_tel: {
						required: "Please enter secondary contact phone number",
					}/*,
					personal_email: {
						required: "Please enter valid personal email",
					},
					confirm_personal_email: {
						required: "Please enter valid personal email",
					}*/
				},
				 highlight: function(element, errorClass) {
					$(element).fadeOut(function() {
					$(element).fadeIn();
					});
				},
				submitHandler: function (form) { // for demo
					//alert('valid form submitted'); // for demo
					//return false; // for demo
					form.submit(getResults('myEmergencyCardForm1', 'step1'));
				}
			});	
		});
		$('#myEmergencyCardForm2').each(function () {
			$('#myEmergencyCardForm2').validate({
				rules: {
					full_name: {
						required: true
					},
					birth: {
						required: true
					},
					citizenship: {
						required: true
					},
					passport_number: {
						required: true
					},
					program_name: {
						required: true
					},
					wishes: {
						required: true
					},
					wishes_tel: {
						required: true
					},
					insurance_company: {
						required: true
					},
					policy_number: {
						required: true
					},
					emergency_phone: {
						required: true
					},
					abroad_program_contact: {
						required: true
					},
					abroad_program_tel: {
						required: true
					},
					home_campus_contact: {
						required: true
					},
					home_campus_tel: {
						required: true
					},
					embassy_consulate: {
						required: true
					},
					embassy_consulate_tel: {
						required: true
					},
					equivalent_911_abroad: {
						required: true
					},
					family_contact: {
						required: true
					},
					family_contact_tel: {
						required: true
					},
					personal_email: {
						required: true
					},
					confirm_personal_email: {
						required: true,
						equalTo: "#personal_email"
					}
				},
				messages: {
					full_name: {
						required: "Please enter full name",
					},
					birth: {
						required: "Please enter valid date",
					},
					citizenship: {
						required: "Please enter citizenship",
					},
					passport_number: {
						required: "Please enter passport number",
					},
					program_name: {
						required: "Please enter program name",
					},
					wishes: {
						required: "Please enter primary contact name",
					},
					wishes_tel: {
						required: "Please enter primary contact phone number",
					},
					insurance_company: {
						required: "Please enter insurance company",
					},
					policy_number: {
						required: "Please enter policy number",
					},
					emergency_phone: {
						required: "Please enter insurance company 24 hour emergency phone",
					},
					home_campus_contact: {
						required: "Please enter home campus emergency contact",
					},
					home_campus_tel: {
						required: "Please enter home campus phone number",
					},
					embassy_consulate: {
						required: "Please enter embassy/consulate",
					},
					embassy_consulate_tel: {
						required: "Please enter embassy/consulate phone number",
					},
					equivalent_911_abroad: {
						required: "Please enter equivalent of 911 emergency abroad",
					},
					family_contact: {
						required: "Please enter secondary contact name",
					},
					family_contact_tel: {
						required: "Please enter secondary contact phone number",
					},
					personal_email: {
						required: "Please enter valid personal email",
					},
					confirm_personal_email: {
						required: "Please enter valid personal email",
						equalTo: "Please enter the email as above"
					}
				},
				 highlight: function(element, errorClass) {
					$(element).fadeOut(function() {
					$(element).fadeIn();
					});
				},
				submitHandler: function (form) { // for demo
					//alert('valid form submitted'); // for demo
					//return false; // for demo
					form.submit(getResults('myEmergencyCardForm2', 'step2'));
				}
			});			
		});
});

$(window).load(function () {
	/* slider */					 
    $('.flexslider').flexslider({
        animation: "slide",
		directionNav: false
    });
});
		
function createXMLHttpRequest() {
    try {return new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {}
    try {return new ActiveXObject("Microsoft.XMLHTTP");} catch (e) {}
    try {return new XMLHttpRequest();} catch(e) {}
    return null;
}

function getResults(formName, resultsType) {
	//alert(formName+resultsType);

	var str_full_name = document.forms[formName]["full_name"].value;	
	var str_birth = document.forms[formName]["birth"].value;	
	var str_citizenship = document.forms[formName]["citizenship"].value;
	var str_passport_number = document.forms[formName]["passport_number"].value;
	var str_program_name = document.forms[formName]["program_name"].value;

	var str_blood_type = document.forms[formName]["blood_type"].value;
	var str_medical_conditions = document.forms[formName]["medical_conditions"].value;
	
	var str_wishes = document.forms[formName]["wishes"].value;
	var str_wishes_address = document.forms[formName]["wishes_address"].value;
	var str_wishes_tel = document.forms[formName]["wishes_tel"].value;
	var str_wishes_mobile = document.forms[formName]["wishes_mobile"].value;
	var str_wishes_email = document.forms[formName]["wishes_email"].value;
	
	var str_family_contact = document.forms[formName]["family_contact"].value;
	var str_family_address = document.forms[formName]["family_address"].value;
	var str_family_tel = document.forms[formName]["family_tel"].value;
	var str_family_mobile = document.forms[formName]["family_mobile"].value;
	var str_family_email = document.forms[formName]["family_email"].value;

	var str_insurance_company = document.forms[formName]["insurance_company"].value;
	var str_policy_number = document.forms[formName]["policy_number"].value;
	var str_emergency_phone = document.forms[formName]["emergency_phone"].value;
	
	var str_abroad_program_contact = document.forms[formName]["abroad_program_contact"].value;
	var str_abroad_program_address = document.forms[formName]["abroad_program_address"].value;
	var str_abroad_program_tel = document.forms[formName]["abroad_program_tel"].value;
	var str_abroad_program_mobile = document.forms[formName]["abroad_program_mobile"].value;
	var str_abroad_program_email = document.forms[formName]["abroad_program_email"].value;

	var str_home_campus_contact = document.forms[formName]["home_campus_contact"].value;
	var str_home_campus_address = document.forms[formName]["home_campus_address"].value;
	var str_home_campus_tel = document.forms[formName]["home_campus_tel"].value;
	var str_home_campus_mobile = document.forms[formName]["home_campus_mobile"].value;
	var str_home_campus_email = document.forms[formName]["home_campus_email"].value;

	var str_embassy_consulate = document.forms[formName]["embassy_consulate"].value;
	var str_embassy_consulate_address = document.forms[formName]["embassy_consulate_address"].value;
	var str_embassy_consulate_tel = document.forms[formName]["embassy_consulate_tel"].value;
	var str_embassy_consulate_email = document.forms[formName]["embassy_consulate_email"].value;

	var str_nearest_hospital_abroad = document.forms[formName]["nearest_hospital_abroad"].value;
	var str_nearest_hospital_abroad_address = document.forms[formName]["nearest_hospital_abroad_address"].value;
	var str_nearest_hospital_abroad_tel = document.forms[formName]["nearest_hospital_abroad_tel"].value;
	var str_equivalent_911_abroad = document.forms[formName]["equivalent_911_abroad"].value;
	
	var str_abroad_housing_contact = document.forms[formName]["abroad_housing_contact"].value;
	var str_abroad_housing_address = document.forms[formName]["abroad_housing_address"].value;
	var str_abroad_housing_tel = document.forms[formName]["abroad_housing_tel"].value;
	var str_abroad_housing_mobile = document.forms[formName]["abroad_housing_mobile"].value;
	var str_abroad_housing_email = document.forms[formName]["abroad_housing_email"].value;
	var str_special_code = document.forms[formName]["special_code"].value;

	var parameters="full_name="+str_full_name+"&birth="+str_birth+"&citizenship="+str_citizenship+"&passport_number="+str_passport_number+"&program_name="+str_program_name+"&blood_type="+str_blood_type+"&medical_conditions="+str_medical_conditions+"&wishes="+str_wishes+"&wishes_address="+str_wishes_address+"&wishes_tel="+str_wishes_tel+"&wishes_mobile="+str_wishes_mobile+"&wishes_email="+str_wishes_email+"&family_contact="+str_family_contact+"&family_address="+str_family_address+"&family_tel="+str_family_tel+"&family_mobile="+str_family_mobile+"&family_email="+str_family_email+"&insurance_company="+str_insurance_company+"&policy_number="+str_policy_number+"&emergency_phone="+str_emergency_phone+"&abroad_program_contact="+str_abroad_program_contact+"&abroad_program_address="+str_abroad_program_address+"&abroad_program_tel="+str_abroad_program_tel+"&abroad_program_mobile="+str_abroad_program_mobile+"&abroad_program_email="+str_abroad_program_email+"&home_campus_contact="+str_home_campus_contact+"&home_campus_address="+str_home_campus_address+"&home_campus_tel="+str_home_campus_tel+"&home_campus_mobile="+str_home_campus_mobile+"&home_campus_email="+str_home_campus_email+"&embassy_consulate="+str_embassy_consulate+"&embassy_consulate_address="+str_embassy_consulate_address+"&embassy_consulate_tel="+str_embassy_consulate_tel+"&embassy_consulate_email="+str_embassy_consulate_email+"&nearest_hospital_abroad="+str_nearest_hospital_abroad+"&nearest_hospital_abroad_address="+str_nearest_hospital_abroad_address+"&nearest_hospital_abroad_tel="+str_nearest_hospital_abroad_tel+"&equivalent_911_abroad="+str_equivalent_911_abroad+"&abroad_housing_contact="+str_abroad_housing_contact+"&abroad_housing_address="+str_abroad_housing_address+"&abroad_housing_tel="+str_abroad_housing_tel+"&abroad_housing_mobile="+str_abroad_housing_mobile+"&abroad_housing_email="+str_abroad_housing_email+"&special_code="+str_special_code;
	
	//alert(parameters);
	
	var xmlhttp = createXMLHttpRequest();
	if (xmlhttp == null) {
		alert("Browser does not support HTTP Request")
		return
	}

	if (str_full_name != "") {
		var indicator = document.getElementById("emergency-card");
		indicator.innerHTML = "<div class='indicator'><img src='../images/indicator.gif'></div>";
	}
	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("emergency-card").innerHTML = xmlhttp.responseText;
		}
	};

	var file_path="../confirm-card.php?";
	//xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xmlhttp.open("GET", file_path+parameters, true);
	xmlhttp.send();
}

function getResults2(formName, resultsType) {
	//alert(formName+resultsType);
	
	var str_full_name = document.forms[formName]["full_name"].value;	
	var str_birth = document.forms[formName]["birth"].value;	
	var str_citizenship = document.forms[formName]["citizenship"].value;
	var str_passport_number = document.forms[formName]["passport_number"].value;
	var str_program_name = document.forms[formName]["program_name"].value;

	var str_blood_type = document.forms[formName]["blood_type"].value;
	var str_medical_conditions = document.forms[formName]["medical_conditions"].value;
	
	var str_wishes = document.forms[formName]["wishes"].value;
	var str_wishes_address = document.forms[formName]["wishes_address"].value;
	var str_wishes_tel = document.forms[formName]["wishes_tel"].value;
	var str_wishes_mobile = document.forms[formName]["wishes_mobile"].value;
	var str_wishes_email = document.forms[formName]["wishes_email"].value;
	
	var str_family_contact = document.forms[formName]["family_contact"].value;
	var str_family_address = document.forms[formName]["family_address"].value;
	var str_family_tel = document.forms[formName]["family_tel"].value;
	var str_family_mobile = document.forms[formName]["family_mobile"].value;
	var str_family_email = document.forms[formName]["family_email"].value;

	var str_insurance_company = document.forms[formName]["insurance_company"].value;
	var str_policy_number = document.forms[formName]["policy_number"].value;
	var str_emergency_phone = document.forms[formName]["emergency_phone"].value;
	
	var str_abroad_program_contact = document.forms[formName]["abroad_program_contact"].value;
	var str_abroad_program_address = document.forms[formName]["abroad_program_address"].value;
	var str_abroad_program_tel = document.forms[formName]["abroad_program_tel"].value;
	var str_abroad_program_mobile = document.forms[formName]["abroad_program_mobile"].value;
	var str_abroad_program_email = document.forms[formName]["abroad_program_email"].value;

	var str_home_campus_contact = document.forms[formName]["home_campus_contact"].value;
	var str_home_campus_address = document.forms[formName]["home_campus_address"].value;
	var str_home_campus_tel = document.forms[formName]["home_campus_tel"].value;
	var str_home_campus_mobile = document.forms[formName]["home_campus_mobile"].value;
	var str_home_campus_email = document.forms[formName]["home_campus_email"].value;

	var str_embassy_consulate = document.forms[formName]["embassy_consulate"].value;
	var str_embassy_consulate_address = document.forms[formName]["embassy_consulate_address"].value;
	var str_embassy_consulate_tel = document.forms[formName]["embassy_consulate_tel"].value;
	var str_embassy_consulate_email = document.forms[formName]["embassy_consulate_email"].value;

	var str_nearest_hospital_abroad = document.forms[formName]["nearest_hospital_abroad"].value;
	var str_nearest_hospital_abroad_address = document.forms[formName]["nearest_hospital_abroad_address"].value;
	var str_nearest_hospital_abroad_tel = document.forms[formName]["nearest_hospital_abroad_tel"].value;
	var str_equivalent_911_abroad = document.forms[formName]["equivalent_911_abroad"].value;
	
	var str_abroad_housing_contact = document.forms[formName]["abroad_housing_contact"].value;
	var str_abroad_housing_address = document.forms[formName]["abroad_housing_address"].value;
	var str_abroad_housing_tel = document.forms[formName]["abroad_housing_tel"].value;
	var str_abroad_housing_mobile = document.forms[formName]["abroad_housing_mobile"].value;
	var str_abroad_housing_email = document.forms[formName]["abroad_housing_email"].value;
	var str_special_code = document.forms[formName]["special_code"].value;
	
	var str_personal_email = document.forms[formName]["personal_email"].value;
	var str_confirm_personal_email = document.forms[formName]["confirm_personal_email"].value;

	/*if (str_confirm_personal_email != str_personal_email)
	{
		alert("Confirm Email: Please enter the same email as your personal email.");
		document.getElementById("confirm_personal_email").focus();
		return false;
	}*/
	
	var parameters="full_name="+str_full_name+"&birth="+str_birth+"&citizenship="+str_citizenship+"&passport_number="+str_passport_number+"&program_name="+str_program_name+"&blood_type="+str_blood_type+"&medical_conditions="+str_medical_conditions+"&wishes="+str_wishes+"&wishes_address="+str_wishes_address+"&wishes_tel="+str_wishes_tel+"&wishes_mobile="+str_wishes_mobile+"&wishes_email="+str_wishes_email+"&family_contact="+str_family_contact+"&family_address="+str_family_address+"&family_tel="+str_family_tel+"&family_mobile="+str_family_mobile+"&family_email="+str_family_email+"&insurance_company="+str_insurance_company+"&policy_number="+str_policy_number+"&emergency_phone="+str_emergency_phone+"&abroad_program_contact="+str_abroad_program_contact+"&abroad_program_address="+str_abroad_program_address+"&abroad_program_tel="+str_abroad_program_tel+"&abroad_program_mobile="+str_abroad_program_mobile+"&abroad_program_email="+str_abroad_program_email+"&home_campus_contact="+str_home_campus_contact+"&home_campus_address="+str_home_campus_address+"&home_campus_tel="+str_home_campus_tel+"&home_campus_mobile="+str_home_campus_mobile+"&home_campus_email="+str_home_campus_email+"&embassy_consulate="+str_embassy_consulate+"&embassy_consulate_address="+str_embassy_consulate_address+"&embassy_consulate_tel="+str_embassy_consulate_tel+"&embassy_consulate_email="+str_embassy_consulate_email+"&nearest_hospital_abroad="+str_nearest_hospital_abroad+"&nearest_hospital_abroad_address="+str_nearest_hospital_abroad_address+"&nearest_hospital_abroad_tel="+str_nearest_hospital_abroad_tel+"&equivalent_911_abroad="+str_equivalent_911_abroad+"&abroad_housing_contact="+str_abroad_housing_contact+"&abroad_housing_address="+str_abroad_housing_address+"&abroad_housing_tel="+str_abroad_housing_tel+"&abroad_housing_mobile="+str_abroad_housing_mobile+"&abroad_housing_email="+str_abroad_housing_email+"&personal_email="+str_personal_email+"&special_code="+str_special_code;
	
	//alert(parameters);
	
	var xmlhttp = createXMLHttpRequest();
	if (xmlhttp == null) {
		alert("Browser does not support HTTP Request")
		return
	}

	if (str_full_name != "") {
		var indicator = document.getElementById("content_container");
		indicator.innerHTML = "<div class='indicator'><img src='../images/indicator.gif'></div>";
	}
	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("content_container").innerHTML = xmlhttp.responseText;
		}
	};

	var file_path="../print-card.php?";
	//xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xmlhttp.open("GET", file_path+parameters, true);
	xmlhttp.send();
}

function isEmpty(value){
  return (value == null || value.length === 0);
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function checkCookie() {
    var username = getCookie("browser");
    if (username != null && username != "") {} else {
        window.location.href = "http://www.lmu.edu/about/services/wnmd/Policies/Web_Browser_not_Supported.htm";
    }
}

function getInternetExplorerVersion() {
    var rv = -1; // Return value assumes failure.
    if (navigator.appName == 'Microsoft Internet Explorer') {
        var ua = navigator.userAgent;
        var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null) rv = parseFloat(RegExp.$1);
    }
    return rv;
}

function checkVersion() {
    var msg = "You're not using Windows Internet Explorer.";
    var ver = getInternetExplorerVersion();
    if (ver > -1) {
        if (ver >= 8.0) msg = "You're using a recent copy of Windows Internet Explorer."
        else msg = "You should upgrade your copy of Windows Internet Explorer.";
    }
    //alert(msg);
}

/*
 * jQuery FlexSlider v2.1
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 */
(function(d){d.flexslider=function(j,l){var a=d(j),c=d.extend({},d.flexslider.defaults,l),e=c.namespace,q="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,u=q?"touchend":"click",m="vertical"===c.direction,n=c.reverse,h=0<c.itemWidth,s="fade"===c.animation,t=""!==c.asNavFor,f={};d.data(j,"flexslider",a);f={init:function(){a.animating=!1;a.currentSlide=c.startAt;a.animatingTo=a.currentSlide;a.atEnd=0===a.currentSlide||a.currentSlide===a.last;a.containerSelector=c.selector.substr(0,
c.selector.search(" "));a.slides=d(c.selector,a);a.container=d(a.containerSelector,a);a.count=a.slides.length;a.syncExists=0<d(c.sync).length;"slide"===c.animation&&(c.animation="swing");a.prop=m?"top":"marginLeft";a.args={};a.manualPause=!1;var b=a,g;if(g=!c.video)if(g=!s)if(g=c.useCSS)a:{g=document.createElement("div");var p=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"],e;for(e in p)if(void 0!==g.style[p[e]]){a.pfx=p[e].replace("Perspective","").toLowerCase();
a.prop="-"+a.pfx+"-transform";g=!0;break a}g=!1}b.transitions=g;""!==c.controlsContainer&&(a.controlsContainer=0<d(c.controlsContainer).length&&d(c.controlsContainer));""!==c.manualControls&&(a.manualControls=0<d(c.manualControls).length&&d(c.manualControls));c.randomize&&(a.slides.sort(function(){return Math.round(Math.random())-0.5}),a.container.empty().append(a.slides));a.doMath();t&&f.asNav.setup();a.setup("init");c.controlNav&&f.controlNav.setup();c.directionNav&&f.directionNav.setup();c.keyboard&&
(1===d(a.containerSelector).length||c.multipleKeyboard)&&d(document).bind("keyup",function(b){b=b.keyCode;if(!a.animating&&(39===b||37===b))b=39===b?a.getTarget("next"):37===b?a.getTarget("prev"):!1,a.flexAnimate(b,c.pauseOnAction)});c.mousewheel&&a.bind("mousewheel",function(b,g){b.preventDefault();var d=0>g?a.getTarget("next"):a.getTarget("prev");a.flexAnimate(d,c.pauseOnAction)});c.pausePlay&&f.pausePlay.setup();c.slideshow&&(c.pauseOnHover&&a.hover(function(){!a.manualPlay&&!a.manualPause&&a.pause()},
function(){!a.manualPause&&!a.manualPlay&&a.play()}),0<c.initDelay?setTimeout(a.play,c.initDelay):a.play());q&&c.touch&&f.touch();(!s||s&&c.smoothHeight)&&d(window).bind("resize focus",f.resize);setTimeout(function(){c.start(a)},200)},asNav:{setup:function(){a.asNav=!0;a.animatingTo=Math.floor(a.currentSlide/a.move);a.currentItem=a.currentSlide;a.slides.removeClass(e+"active-slide").eq(a.currentItem).addClass(e+"active-slide");a.slides.click(function(b){b.preventDefault();b=d(this);var g=b.index();
!d(c.asNavFor).data("flexslider").animating&&!b.hasClass("active")&&(a.direction=a.currentItem<g?"next":"prev",a.flexAnimate(g,c.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){a.manualControls?f.controlNav.setupManual():f.controlNav.setupPaging()},setupPaging:function(){var b=1,g;a.controlNavScaffold=d('<ol class="'+e+"control-nav "+e+("thumbnails"===c.controlNav?"control-thumbs":"control-paging")+'"></ol>');if(1<a.pagingCount)for(var p=0;p<a.pagingCount;p++)g="thumbnails"===c.controlNav?
'<img src="'+a.slides.eq(p).attr("data-thumb")+'"/>':"<a>"+b+"</a>",a.controlNavScaffold.append("<li>"+g+"</li>"),b++;a.controlsContainer?d(a.controlsContainer).append(a.controlNavScaffold):a.append(a.controlNavScaffold);f.controlNav.set();f.controlNav.active();a.controlNavScaffold.delegate("a, img",u,function(b){b.preventDefault();b=d(this);var g=a.controlNav.index(b);b.hasClass(e+"active")||(a.direction=g>a.currentSlide?"next":"prev",a.flexAnimate(g,c.pauseOnAction))});q&&a.controlNavScaffold.delegate("a",
"click touchstart",function(a){a.preventDefault()})},setupManual:function(){a.controlNav=a.manualControls;f.controlNav.active();a.controlNav.live(u,function(b){b.preventDefault();b=d(this);var g=a.controlNav.index(b);b.hasClass(e+"active")||(g>a.currentSlide?a.direction="next":a.direction="prev",a.flexAnimate(g,c.pauseOnAction))});q&&a.controlNav.live("click touchstart",function(a){a.preventDefault()})},set:function(){a.controlNav=d("."+e+"control-nav li "+("thumbnails"===c.controlNav?"img":"a"),
a.controlsContainer?a.controlsContainer:a)},active:function(){a.controlNav.removeClass(e+"active").eq(a.animatingTo).addClass(e+"active")},update:function(b,c){1<a.pagingCount&&"add"===b?a.controlNavScaffold.append(d("<li><a>"+a.count+"</a></li>")):1===a.pagingCount?a.controlNavScaffold.find("li").remove():a.controlNav.eq(c).closest("li").remove();f.controlNav.set();1<a.pagingCount&&a.pagingCount!==a.controlNav.length?a.update(c,b):f.controlNav.active()}},directionNav:{setup:function(){var b=d('<ul class="'+
e+'direction-nav"><li><a class="'+e+'prev" href="#">'+c.prevText+'</a></li><li><a class="'+e+'next" href="#">'+c.nextText+"</a></li></ul>");a.controlsContainer?(d(a.controlsContainer).append(b),a.directionNav=d("."+e+"direction-nav li a",a.controlsContainer)):(a.append(b),a.directionNav=d("."+e+"direction-nav li a",a));f.directionNav.update();a.directionNav.bind(u,function(b){b.preventDefault();b=d(this).hasClass(e+"next")?a.getTarget("next"):a.getTarget("prev");a.flexAnimate(b,c.pauseOnAction)});
q&&a.directionNav.bind("click touchstart",function(a){a.preventDefault()})},update:function(){var b=e+"disabled";1===a.pagingCount?a.directionNav.addClass(b):c.animationLoop?a.directionNav.removeClass(b):0===a.animatingTo?a.directionNav.removeClass(b).filter("."+e+"prev").addClass(b):a.animatingTo===a.last?a.directionNav.removeClass(b).filter("."+e+"next").addClass(b):a.directionNav.removeClass(b)}},pausePlay:{setup:function(){var b=d('<div class="'+e+'pauseplay"><a></a></div>');a.controlsContainer?
(a.controlsContainer.append(b),a.pausePlay=d("."+e+"pauseplay a",a.controlsContainer)):(a.append(b),a.pausePlay=d("."+e+"pauseplay a",a));f.pausePlay.update(c.slideshow?e+"pause":e+"play");a.pausePlay.bind(u,function(b){b.preventDefault();d(this).hasClass(e+"pause")?(a.manualPause=!0,a.manualPlay=!1,a.pause()):(a.manualPause=!1,a.manualPlay=!0,a.play())});q&&a.pausePlay.bind("click touchstart",function(a){a.preventDefault()})},update:function(b){"play"===b?a.pausePlay.removeClass(e+"pause").addClass(e+
"play").text(c.playText):a.pausePlay.removeClass(e+"play").addClass(e+"pause").text(c.pauseText)}},touch:function(){function b(b){k=m?d-b.touches[0].pageY:d-b.touches[0].pageX;q=m?Math.abs(k)<Math.abs(b.touches[0].pageX-e):Math.abs(k)<Math.abs(b.touches[0].pageY-e);if(!q||500<Number(new Date)-l)b.preventDefault(),!s&&a.transitions&&(c.animationLoop||(k/=0===a.currentSlide&&0>k||a.currentSlide===a.last&&0<k?Math.abs(k)/r+2:1),a.setProps(f+k,"setTouch"))}function g(){j.removeEventListener("touchmove",
b,!1);if(a.animatingTo===a.currentSlide&&!q&&null!==k){var h=n?-k:k,m=0<h?a.getTarget("next"):a.getTarget("prev");a.canAdvance(m)&&(550>Number(new Date)-l&&50<Math.abs(h)||Math.abs(h)>r/2)?a.flexAnimate(m,c.pauseOnAction):s||a.flexAnimate(a.currentSlide,c.pauseOnAction,!0)}j.removeEventListener("touchend",g,!1);f=k=e=d=null}var d,e,f,r,k,l,q=!1;j.addEventListener("touchstart",function(k){a.animating?k.preventDefault():1===k.touches.length&&(a.pause(),r=m?a.h:a.w,l=Number(new Date),f=h&&n&&a.animatingTo===
a.last?0:h&&n?a.limit-(a.itemW+c.itemMargin)*a.move*a.animatingTo:h&&a.currentSlide===a.last?a.limit:h?(a.itemW+c.itemMargin)*a.move*a.currentSlide:n?(a.last-a.currentSlide+a.cloneOffset)*r:(a.currentSlide+a.cloneOffset)*r,d=m?k.touches[0].pageY:k.touches[0].pageX,e=m?k.touches[0].pageX:k.touches[0].pageY,j.addEventListener("touchmove",b,!1),j.addEventListener("touchend",g,!1))},!1)},resize:function(){!a.animating&&a.is(":visible")&&(h||a.doMath(),s?f.smoothHeight():h?(a.slides.width(a.computedW),
a.update(a.pagingCount),a.setProps()):m?(a.viewport.height(a.h),a.setProps(a.h,"setTotal")):(c.smoothHeight&&f.smoothHeight(),a.newSlides.width(a.computedW),a.setProps(a.computedW,"setTotal")))},smoothHeight:function(b){if(!m||s){var c=s?a:a.viewport;b?c.animate({height:a.slides.eq(a.animatingTo).height()},b):c.height(a.slides.eq(a.animatingTo).height())}},sync:function(b){var g=d(c.sync).data("flexslider"),e=a.animatingTo;switch(b){case "animate":g.flexAnimate(e,c.pauseOnAction,!1,!0);break;case "play":!g.playing&&
!g.asNav&&g.play();break;case "pause":g.pause()}}};a.flexAnimate=function(b,g,p,j,l){t&&1===a.pagingCount&&(a.direction=a.currentItem<b?"next":"prev");if(!a.animating&&(a.canAdvance(b,l)||p)&&a.is(":visible")){if(t&&j)if(p=d(c.asNavFor).data("flexslider"),a.atEnd=0===b||b===a.count-1,p.flexAnimate(b,!0,!1,!0,l),a.direction=a.currentItem<b?"next":"prev",p.direction=a.direction,Math.ceil((b+1)/a.visible)-1!==a.currentSlide&&0!==b)a.currentItem=b,a.slides.removeClass(e+"active-slide").eq(b).addClass(e+
"active-slide"),b=Math.floor(b/a.visible);else return a.currentItem=b,a.slides.removeClass(e+"active-slide").eq(b).addClass(e+"active-slide"),!1;a.animating=!0;a.animatingTo=b;c.before(a);g&&a.pause();a.syncExists&&!l&&f.sync("animate");c.controlNav&&f.controlNav.active();h||a.slides.removeClass(e+"active-slide").eq(b).addClass(e+"active-slide");a.atEnd=0===b||b===a.last;c.directionNav&&f.directionNav.update();b===a.last&&(c.end(a),c.animationLoop||a.pause());if(s)q?(a.slides.eq(a.currentSlide).css({opacity:0,
zIndex:1}),a.slides.eq(b).css({opacity:1,zIndex:2}),a.slides.unbind("webkitTransitionEnd transitionend"),a.slides.eq(a.currentSlide).bind("webkitTransitionEnd transitionend",function(){c.after(a)}),a.animating=!1,a.currentSlide=a.animatingTo):(a.slides.eq(a.currentSlide).fadeOut(c.animationSpeed,c.easing),a.slides.eq(b).fadeIn(c.animationSpeed,c.easing,a.wrapup));else{var r=m?a.slides.filter(":first").height():a.computedW;h?(b=c.itemWidth>a.w?2*c.itemMargin:c.itemMargin,b=(a.itemW+b)*a.move*a.animatingTo,
b=b>a.limit&&1!==a.visible?a.limit:b):b=0===a.currentSlide&&b===a.count-1&&c.animationLoop&&"next"!==a.direction?n?(a.count+a.cloneOffset)*r:0:a.currentSlide===a.last&&0===b&&c.animationLoop&&"prev"!==a.direction?n?0:(a.count+1)*r:n?(a.count-1-b+a.cloneOffset)*r:(b+a.cloneOffset)*r;a.setProps(b,"",c.animationSpeed);if(a.transitions){if(!c.animationLoop||!a.atEnd)a.animating=!1,a.currentSlide=a.animatingTo;a.container.unbind("webkitTransitionEnd transitionend");a.container.bind("webkitTransitionEnd transitionend",
function(){a.wrapup(r)})}else a.container.animate(a.args,c.animationSpeed,c.easing,function(){a.wrapup(r)})}c.smoothHeight&&f.smoothHeight(c.animationSpeed)}};a.wrapup=function(b){!s&&!h&&(0===a.currentSlide&&a.animatingTo===a.last&&c.animationLoop?a.setProps(b,"jumpEnd"):a.currentSlide===a.last&&(0===a.animatingTo&&c.animationLoop)&&a.setProps(b,"jumpStart"));a.animating=!1;a.currentSlide=a.animatingTo;c.after(a)};a.animateSlides=function(){a.animating||a.flexAnimate(a.getTarget("next"))};a.pause=
function(){clearInterval(a.animatedSlides);a.playing=!1;c.pausePlay&&f.pausePlay.update("play");a.syncExists&&f.sync("pause")};a.play=function(){a.animatedSlides=setInterval(a.animateSlides,c.slideshowSpeed);a.playing=!0;c.pausePlay&&f.pausePlay.update("pause");a.syncExists&&f.sync("play")};a.canAdvance=function(b,g){var d=t?a.pagingCount-1:a.last;return g?!0:t&&a.currentItem===a.count-1&&0===b&&"prev"===a.direction?!0:t&&0===a.currentItem&&b===a.pagingCount-1&&"next"!==a.direction?!1:b===a.currentSlide&&
!t?!1:c.animationLoop?!0:a.atEnd&&0===a.currentSlide&&b===d&&"next"!==a.direction?!1:a.atEnd&&a.currentSlide===d&&0===b&&"next"===a.direction?!1:!0};a.getTarget=function(b){a.direction=b;return"next"===b?a.currentSlide===a.last?0:a.currentSlide+1:0===a.currentSlide?a.last:a.currentSlide-1};a.setProps=function(b,g,d){var e,f=b?b:(a.itemW+c.itemMargin)*a.move*a.animatingTo;e=-1*function(){if(h)return"setTouch"===g?b:n&&a.animatingTo===a.last?0:n?a.limit-(a.itemW+c.itemMargin)*a.move*a.animatingTo:a.animatingTo===
a.last?a.limit:f;switch(g){case "setTotal":return n?(a.count-1-a.currentSlide+a.cloneOffset)*b:(a.currentSlide+a.cloneOffset)*b;case "setTouch":return b;case "jumpEnd":return n?b:a.count*b;case "jumpStart":return n?a.count*b:b;default:return b}}()+"px";a.transitions&&(e=m?"translate3d(0,"+e+",0)":"translate3d("+e+",0,0)",d=void 0!==d?d/1E3+"s":"0s",a.container.css("-"+a.pfx+"-transition-duration",d));a.args[a.prop]=e;(a.transitions||void 0===d)&&a.container.css(a.args)};a.setup=function(b){if(s)a.slides.css({width:"100%",
"float":"left",marginRight:"-100%",position:"relative"}),"init"===b&&(q?a.slides.css({opacity:0,display:"block",webkitTransition:"opacity "+c.animationSpeed/1E3+"s ease",zIndex:1}).eq(a.currentSlide).css({opacity:1,zIndex:2}):a.slides.eq(a.currentSlide).fadeIn(c.animationSpeed,c.easing)),c.smoothHeight&&f.smoothHeight();else{var g,p;"init"===b&&(a.viewport=d('<div class="'+e+'viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(a).append(a.container),a.cloneCount=0,a.cloneOffset=
0,n&&(p=d.makeArray(a.slides).reverse(),a.slides=d(p),a.container.empty().append(a.slides)));c.animationLoop&&!h&&(a.cloneCount=2,a.cloneOffset=1,"init"!==b&&a.container.find(".clone").remove(),a.container.append(a.slides.first().clone().addClass("clone")).prepend(a.slides.last().clone().addClass("clone")));a.newSlides=d(c.selector,a);g=n?a.count-1-a.currentSlide+a.cloneOffset:a.currentSlide+a.cloneOffset;m&&!h?(a.container.height(200*(a.count+a.cloneCount)+"%").css("position","absolute").width("100%"),
setTimeout(function(){a.newSlides.css({display:"block"});a.doMath();a.viewport.height(a.h);a.setProps(g*a.h,"init")},"init"===b?100:0)):(a.container.width(200*(a.count+a.cloneCount)+"%"),a.setProps(g*a.computedW,"init"),setTimeout(function(){a.doMath();a.newSlides.css({width:a.computedW,"float":"left",display:"block"});c.smoothHeight&&f.smoothHeight()},"init"===b?100:0))}h||a.slides.removeClass(e+"active-slide").eq(a.currentSlide).addClass(e+"active-slide")};a.doMath=function(){var b=a.slides.first(),
d=c.itemMargin,e=c.minItems,f=c.maxItems;a.w=a.width();a.h=b.height();a.boxPadding=b.outerWidth()-b.width();h?(a.itemT=c.itemWidth+d,a.minW=e?e*a.itemT:a.w,a.maxW=f?f*a.itemT:a.w,a.itemW=a.minW>a.w?(a.w-d*e)/e:a.maxW<a.w?(a.w-d*f)/f:c.itemWidth>a.w?a.w:c.itemWidth,a.visible=Math.floor(a.w/(a.itemW+d)),a.move=0<c.move&&c.move<a.visible?c.move:a.visible,a.pagingCount=Math.ceil((a.count-a.visible)/a.move+1),a.last=a.pagingCount-1,a.limit=1===a.pagingCount?0:c.itemWidth>a.w?(a.itemW+2*d)*a.count-a.w-
d:(a.itemW+d)*a.count-a.w-d):(a.itemW=a.w,a.pagingCount=a.count,a.last=a.count-1);a.computedW=a.itemW-a.boxPadding};a.update=function(b,d){a.doMath();h||(b<a.currentSlide?a.currentSlide+=1:b<=a.currentSlide&&0!==b&&(a.currentSlide-=1),a.animatingTo=a.currentSlide);if(c.controlNav&&!a.manualControls)if("add"===d&&!h||a.pagingCount>a.controlNav.length)f.controlNav.update("add");else if("remove"===d&&!h||a.pagingCount<a.controlNav.length)h&&a.currentSlide>a.last&&(a.currentSlide-=1,a.animatingTo-=1),
f.controlNav.update("remove",a.last);c.directionNav&&f.directionNav.update()};a.addSlide=function(b,e){var f=d(b);a.count+=1;a.last=a.count-1;m&&n?void 0!==e?a.slides.eq(a.count-e).after(f):a.container.prepend(f):void 0!==e?a.slides.eq(e).before(f):a.container.append(f);a.update(e,"add");a.slides=d(c.selector+":not(.clone)",a);a.setup();c.added(a)};a.removeSlide=function(b){var e=isNaN(b)?a.slides.index(d(b)):b;a.count-=1;a.last=a.count-1;isNaN(b)?d(b,a.slides).remove():m&&n?a.slides.eq(a.last).remove():
a.slides.eq(b).remove();a.doMath();a.update(e,"remove");a.slides=d(c.selector+":not(.clone)",a);a.setup();c.removed(a)};f.init()};d.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:7E3,animationSpeed:600,initDelay:0,randomize:!1,pauseOnAction:!0,pauseOnHover:!1,useCSS:!0,touch:!0,video:!1,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next",
keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:0,maxItems:0,move:0,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){}};d.fn.flexslider=function(j){void 0===j&&(j={});if("object"===typeof j)return this.each(function(){var a=d(this),c=a.find(j.selector?j.selector:".slides > li");1===c.length?(c.fadeIn(400),
j.start&&j.start(a)):void 0==a.data("flexslider")&&new d.flexslider(this,j)});var l=d(this).data("flexslider");switch(j){case "play":l.play();break;case "pause":l.pause();break;case "next":l.flexAnimate(l.getTarget("next"),!0);break;case "prev":case "previous":l.flexAnimate(l.getTarget("prev"),!0);break;default:"number"===typeof j&&l.flexAnimate(j,!0)}}})(jQuery);