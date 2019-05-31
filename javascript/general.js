// JavaScript Document

function update_num_checked(object)
{
	if(object.checked)
	{
		document.getElementById('num_check').value = parseInt(document.getElementById('num_check').value) - 1;
	}
	else
	{
		document.getElementById('num_check').value = parseInt(document.getElementById('num_check').value) + 1;
	}
	
	
}


//this function renders a div with a specific height
function renderDiv(height)
{
	document.write("<div style=\"height:"+ height +"px; font-size: 1px;\"></div>");
}
//end of function

function showsubnav(id)
{
	
	document.getElementById(id).className = "subnav_show_"+id;	
	document.getElementById(id +'_link').className = "mouseover"; 
}
//end of function

function hidesubnav(id)
{
	document.getElementById(id).className = "subnav_noshow";	
	document.getElementById(id +'_link').className = "";
}
//end of function


function showsubnav_subpage(id)
{
	//close the other link first
	for (i=0;i<main_nav.length;i++)
	{
		if(main_nav[i] != id)
		{
			document.getElementById(main_nav[i]).className = "subnav_noshow";	
			document.getElementById(main_nav[i] +'_link').className = "";	
		}
		
	}
	document.getElementById(id).className = "subnav_show_long";	
	document.getElementById(id +'_link').className = "mouseover"; 
}
//end of function

function hidesubnav_subpage(id)
{
	document.getElementById(id).className = "subnav_noshow_long";	
	document.getElementById(id +'_link').className = "";
	
	//set thhe navigation to the current page
	for (i=0;i<main_nav.length;i++)
	{
		if(document.getElementById(main_nav[i] +'_link').rel == "current")
		{
			document.getElementById(main_nav[i]).className = "subnav_show_long";	
			document.getElementById(main_nav[i] +'_link').className = "mouseover"; 
			i = main_nav.length; //break off the loop	
		}
	}
}
//end of function

//----------------------------------make it equal column ---------------------------------------------------------------//

/* 
  ------------------------------------------------
  PVII Equal CSS Columns scripts -Version 2
  Copyright (c) 2005 Project Seven Development
  www.projectseven.com
  Version: 2.1.0
  ------------------------------------------------
*/
function P7_colH2(){ //v2.1.0 by PVII-www.projectseven.com
 var i,oh,h=0,tg,el,np,dA=document.p7eqc,an=document.p7eqa;if(dA&&dA.length){
 for(i=1;i<dA.length;i+=2){dA[i+1].style.paddingBottom='';}for(i=1;i<dA.length;i+=2){
 oh=dA[i].offsetHeight;h=(oh>h)?oh:h;}for(i=1;i<dA.length;i+=2){oh=dA[i].offsetHeight;
 if(oh<h){np=h-oh;if(!an&&dA[0]==1){P7_eqA2(dA[i+1].id,0,np);}else{
 dA[i+1].style.paddingBottom=np+"px";}}}document.p7eqa=1;
 document.p7eqth=document.body.offsetHeight;
 document.p7eqtw=document.body.offsetWidth;}
}
function P7_eqT2(){ //v2.1.0 by PVII-www.projectseven.com
 if(document.p7eqth!=document.body.offsetHeight||document.p7eqtw!=document.body.offsetWidth){P7_colH2();}
}
function P7_equalCols2(){ //v2.1.0 by PVII-www.projectseven.com
 var c,e,el;if(document.getElementById){document.p7eqc=new Array();
 document.p7eqc[0]=arguments[0];for(i=1;i<arguments.length;i+=2){el=null;
 c=document.getElementById(arguments[i]);if(c){e=c.getElementsByTagName(arguments[i+1]);
 if(e){el=e[e.length-1];if(!el.id){el.id="p7eq"+i;}}}if(c&&el){
 document.p7eqc[document.p7eqc.length]=c;document.p7eqc[document.p7eqc.length]=el}}
 setInterval("P7_eqT2()",10);}
}
function P7_eqA2(el,p,pt){ //v2.1.0 by PVII-www.projectseven.com
 var sp=10,inc=20,g=document.getElementById(el);np=(p>=pt)?pt:p;
 g.style.paddingBottom=np+"px";if(np<pt){np+=inc;
 setTimeout("P7_eqA2('"+el+"',"+np+","+pt+")",sp);}
}

//------------------------------------end of make it equal column------------------------------------------------//


//********************************************************AJAX function starts********************************************************

function createXMLHttpRequest() {
    try {return new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {}
    try {return new ActiveXObject("Microsoft.XMLHTTP");} catch (e) {}
    try {return new XMLHttpRequest();} catch(e) {}
    return null;
}//end of function 

function postAndFetchXml(url, content, handler) 
{
   
	
	var xmlhttp = createXMLHttpRequest();
	if (xmlhttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	} 

   xmlhttp.onreadystatechange = function() 
   {
        
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            handler(xmlhttp.responseXML);
        }
    };
	//alert(url);
	//alert(content);

    xmlhttp.open('POST', url);	
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(content);
	
}//end of function 


function postAndFetch(url, content, handler, area_id) 
{
	
	var xmlhttp = createXMLHttpRequest();
	if (xmlhttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	} 

   if(area_id != "")
   {
   		var indicator = document.getElementById(area_id);
		indicator.innerHTML="<div><img src='images/indicator.gif'></div>";
   }
   xmlhttp.onreadystatechange = function() 
   {
        
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
            handler(xmlhttp.responseText, area_id);
        }
    };

    xmlhttp.open('POST', url, true);	
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(content);
	
}//end of function 

function postAndFetchForm(url, formId, handler, area_id) 
{
	
	var xmlhttp = createXMLHttpRequest();
	if (xmlhttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	} 
	
	content = ""
	//grab all the element value of this document
	var x=document.getElementById(formId);
	for (var i=0;i<x.length;i++)
  	{
  		if(i == 0)
			content =  x.elements[i].name + "=" +  x.elements[i].value ;
  		else
			content += "&" + x.elements[i].name + "=" +  x.elements[i].value ;
		
  	}

   
   var indicator = document.getElementById(area_id);
	indicator.innerHTML="<div><img src='images/indicator.gif'></div>";
   
   xmlhttp.onreadystatechange = function() 
   {
        
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
            handler(xmlhttp.responseText, area_id);
        }
    };

    xmlhttp.open('POST', url, true);	
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(content);
	
}//end of function 


function generalHandler(Text, area_id)
{
	
	//alert(Text);
	var str= Text;
	
	var content = Text
	//alert(holder);
	
	if(area_id != "")
	{
		var updateform = document.getElementById(area_id);
		   updateform.innerHTML=content;
	}

}//end of function

function generalHandler_equal_column(Text, area_id)
{
	
	//alert(Text);
	var str= Text;
	
	var content = Text
	//alert(holder);
	
	if(area_id != "")
	{
		var updateform = document.getElementById(area_id);
		   updateform.innerHTML=content;
	}
	
	P7_equalCols2(0,'main_content_text','P','main_content_photo','P'); 
		
}//end of function

//********************************************************AJAX functions ends*********************************************************


//*******************************************************validation functions******************************************************

function CheckEmail(email)
{
    var firstchunk,indx,secondchunk

    if (email == ""){
        alert("Please make sure you have entered a valid email before submitting the info.")

        return false
    }

    //get the zero-based index of the "@" character
    indx = email.indexOf("@")

    //if the string does not contain an @ then then return true
    if (indx == -1 ){

        alert("Please make sure you have entered a valid email before submitting the info.")

        return false
    }

    //if the first part of email is < 2 chars and second part < 7 chars
    //(arbitrary but workable criteria) then reject the input address

    firstchunk = email.substr(0,indx) //up to but not including the "@"

    //start at char following the "@" and include up to end of email addr
    secondchunk = email.substr(indx + 1) 

    //if the part  following the "@" does not include a period "." then
    //also return false
    if ((firstchunk.length < 2 ) || 
    (secondchunk.indexOf(".") == -1)){ 

    alert("Please make sure you have entered a valid email before submitting the info.")

    return false
	}

	//the email was okay; at least it had a @, more than 1 username chars,
	//more than 6 chars after the "@", and the substring after the "@"
	// contained a "." char
	
	return true

}

//Validate contact us form
function ContactSubmitvalidate()
{
	x=document.myform
	
	fullname=document.getElementById("fullname").value
	
	email = document.getElementById("email").value
	country = document.getElementById("country").value
	
	//security_code = document.getElementById("security_code").value
	
	if (fullname.length < 1)
	{
	 	
		document.getElementById("fullname").focus();
		alert("Name is required")
	 	return false;
	}
	
	if (!CheckEmail(email))
	{
	 	document.getElementById("email").focus();
		return false;
	}
	
	if (country == "ZZ")
	{
	 	
		document.getElementById("country").focus();
		alert("Please specify your home country")
	 	return false;
	}
	/*
	if (security_code.length < 1)
	{
	 	
		document.getElementById("security_code").focus();
		alert("Security characters are required")
	 	return false;
	}
	*/
	
	
	
	 
	return true;
}//end of function

function validateContactUs()
{
	
	fullname = document.getElementById("fullname");
	institution = document.getElementById("institution");
	email = document.getElementById("email");
	phone = document.getElementById("phone");
	security_code = document.getElementById("security_code");
	
	if(fullname.value.length < 1)
	{
		alert("Name required");	
		fullname.focus();
		return false;	
	}
	
	if(institution.value.length < 1)
	{
		alert("Institution Name required");	
		institution.focus();
		return false;	
	}
	
	if(email.value.length < 1)
	{
		alert("Email required");	
		email.focus();
		return false;	
	}
	
	if(phone.value.length < 1)
	{
		alert("Phone required");	
		phone.focus();
		return false;	
	}
	
	if(security_code.value.length < 1)
	{
		alert("Please enter the security characters");	
		security_code.focus();
		return false;	
	}
	
	return true;


}

function validateCollegeQuiz()
{

	if(!document.getElementById("question1-1").checked && !document.getElementById("question1-2").checked && !document.getElementById("question1-3").checked )
	{
			alert("Question 1 must be answered.");	
			return false;	
	}	
		
	if(!document.getElementById("question2-1").checked && !document.getElementById("question2-2").checked && !document.getElementById("question2-3").checked )
	{
			alert("Question 2 must be answered.");	
			return false;	
	}	
		
	if(!document.getElementById("question3-1").checked && !document.getElementById("question3-2").checked )
	{
			alert("Question 3 must be answered.");	
			return false;	
	}	
	
	if(!document.getElementById("question4-1").checked && !document.getElementById("question4-2").checked && !document.getElementById("question4-3").checked )
	{
			alert("Question 4 must be answered.");	
			return false;	
	}	
		
	if(!document.getElementById("question5-1").checked && !document.getElementById("question5-2").checked && !document.getElementById("question5-3").checked && !document.getElementById("question5-4").checked )
	{
			alert("Question 5 must be answered.");	
			return false;	
	}
	
	if(!document.getElementById("question6-1").checked && !document.getElementById("question6-2").checked && !document.getElementById("question6-3").checked )
	{
			alert("Question 6 must be answered.");	
			return false;	
	}	
		
	if(!document.getElementById("question7-1").checked && !document.getElementById("question7-2").checked && !document.getElementById("question7-3").checked )
	{
			alert("Question 7 must be answered.");	
			return false;	
	}	
		
	if(!document.getElementById("question8-1").checked && !document.getElementById("question8-2").checked && !document.getElementById("question8-3").checked )
	{
			alert("Question 8 must be answered.");	
			return false;	
	}	
	
	if(!document.getElementById("question9-1").checked && !document.getElementById("question9-2").checked && !document.getElementById("question9-3").checked )
	{
			alert("Question 9 must be answered.");	
			return false;	
	}	
		
	if(!document.getElementById("question10-1").checked && !document.getElementById("question10-2").checked && !document.getElementById("question10-3").checked )
	{
			alert("Question 10 must be answered.");	
			return false;	
	}		
	
	return true;
}
//end of function


//**********************************************************validation functions******************************************************

function validateCountry()
{
	//var myIndex = document.forms.pch_searchForm.country.options[0].value
    var myIndex  = document.forms.pch_searchForm.country.selectedIndex;	
    var SelValue = document.pch_searchForm.country.options[myIndex].value;
	
	if (SelValue == "Choose") {
		alert("Please Select a Country.");
		return false;  
	}
	else {
		//http://studentsabroad.us/handbook/introduction.php
		//alert(SelValue);
		window.location.href = "handbook/introduction.php?country=" + SelValue;
		return false;
	}
}

function validateCountrySM()
{
	//var myIndex = document.forms.pch_searchForm.country.options[0].value
    var myIndex  = document.forms.pch_searchForm.country.selectedIndex;	
    var SelValue = document.pch_searchForm.country.options[myIndex].value;
	
	if (SelValue == "Choose") {
		alert("Please Select a Country.");
		return false;  
	}
	else {
		//http://studentsabroad.us/handbook/introduction.php
		//alert(SelValue);
		window.location.href = "introduction.php?country=" + SelValue;
		return false;
	}
}

function validateCountryURL()
{
	//var myIndex = document.forms.pch_searchForm.country.options[0].value
    var myIndex  = document.forms.pch_searchForm.country.selectedIndex;	
    var SelValue = document.pch_searchForm.country.options[myIndex].value;
	
	if (SelValue == "Choose") {
		alert("Please Select a Country.");
		return false;  
	}
	else {
		//http://studentsabroad.us/handbook/introduction.php
		//alert(SelValue);
		window.location.href = "http://studentsabroad.com/handbook/introduction.php?country=" + SelValue;
		return false;
	}
}

function validateHandbook()
{
	//var myIndex = document.forms.pch_searchForm.country.options[0].value
    var myIndex  = document.forms.pch_searchForm.country.selectedIndex;	
    var SelValue = document.pch_searchForm.country.options[myIndex].value;
	
	if (SelValue == "Choose") {
		alert("Please Select a Country.");
		return false;  
	}
	else {
		//http://studentsabroad.us/handbook/introduction.php
		//alert(SelValue);
		window.location.href = "introduction.php?country=" + SelValue;
		return false;
	}
}

function validateFeaturedProgram()
{
	//var myIndex = document.forms.pch_searchForm.country.options[0].value
    var myIndex  = document.forms.sponsors_searchForm.country.selectedIndex;	
    var SelValue = document.sponsors_searchForm.country.options[myIndex].value;
	
	if (SelValue == "Choose") {
		alert("Please Select a Country.");
		return false;  
	}
	else {
		//http://studentsabroad.us/handbook/introduction.php
		//alert(SelValue);
		window.location.href = "featured-programs.php?country=" + SelValue;
		return false;
	}
}
