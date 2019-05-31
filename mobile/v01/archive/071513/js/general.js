

var selected_banner = "banner1";
var number_banner = 0;
var revertFlip;
var active_showcase = 1;
var number_showcase = 0;
var period = 700;
var auto_period = 10000;
var timer;
var timer2;
var current_timeline = 1;
var timeline_period = 1000;



$(document).ready(function() {
	
	
	//to solve TinyMCE table align issue
	
		
	//-------------------------------------main nav hover-------------------------------------------------
	
	$('#search_icon').toggle(function() 
	{
	  	$('#search_bar').show();
	}, function() 
		{
			$('#search_bar').hide();
		});
	
	$('#menu_icon').toggle(function() 
	{
	  	$('#navigation_tier2').show();
	}, function() 
		{
			$('#navigation_tier2').hide();
		});
	
	
	$('#goto_fullsite').click(function() 
	{
	  	var currenturl = $(location).attr('href');
		currenturl = currenturl.substring( (currenturl.indexOf("http://", 0) + 7))//delete the http://
		currenturl = currenturl.substring( (currenturl.indexOf("/", 0) + 1))//delete the domain name
		last_post_directtory = currenturl.indexOf("/", 0);
		var first_directory = currenturl.substring( 0, last_post_directtory);
		var full_site_directory = currenturl.substring( (currenturl.indexOf("/", 0) + 1))//delete the first directory
		
		var full_site_url = "http://" + first_directory + ".lmu.edu/" + full_site_directory;
		window.location = full_site_url;
	});
	
	$('#content img').after("<BR>");
	
	
	
	//-------------------------------------Home banner-------------------------------------------------
	
  	number_banner = $("#banners").children().length;
  
	$("#banner1_link").css("background-position", "0 -11px");
	
	timer = setInterval( "NextSlide()", auto_period );
	
	//banner effect
	$(".banner_link").click(
		function () {
			
			//pause the auto-slide
		   	clearInterval(timer);
			clearInterval(timer2);
					
			//restart
			timer2 = setInterval( "startSlide()", period + 500 );	
			
			selected_id = ($(this).attr("id")).replace("_link","");
		    if( selected_id != selected_banner)
			{
			$("#" + selected_banner + "_link").css("background-position", "0 0");
			selected_banner = selected_id;
			$("#" + selected_banner + "_link").css("background-position", "0 -11px");
			
				
				
					if(selected_id == "banner1")
					{	
						if ($.browser.msie && jQuery.browser.version >= 8.0)
						{
							$('#banners .banner_item img').animate({'opacity':'.4'},250);
							revertFlip = setInterval( "reverseOpacity()", period + 100);
						}
						$('#banners').animate({'opacity':'.4'},250).animate({'left':'0px'},period).animate({'opacity':'1'},250);
					}
					else if(selected_id == "banner2")
					{	
						if ($.browser.msie && jQuery.browser.version >= 8.0)
						{
							$('#banners .banner_item img').animate({'opacity':'.4'},250);
							revertFlip = setInterval( "reverseOpacity()", period + 100);
						}
						$('#banners').animate({'opacity':'.4'},250).animate({'left':'-311px'},period).animate({'opacity':'1'},250);
						
					}
					else if(selected_id == "banner3")
					{
						if ($.browser.msie && jQuery.browser.version >= 8.0)
						{
							$('#banners .banner_item img').animate({'opacity':'.4'},250);
							revertFlip = setInterval( "reverseOpacity()", period + 100);
						}
						$('#banners').animate({'opacity':'.4'},250).animate({'left':'-622px'},period).animate({'opacity':'1'},250);
					}
					
		}
			
			

		}
		
    );
	
	
});// end doc ready



function reverseOpacity()
{
	$('#banners .banner_item img').animate({'opacity':'1'},250);
	clearInterval(revertFlip);
}

function reverseOpacity()
{
	$('#banners .banner_item img').animate({'opacity':'1'},250);
	clearInterval(revertFlip);
}

function NextSlide() 
{
			if(selected_banner == "banner1")
				selected_id = "banner2";
		    	else if(selected_banner == "banner2" )
				selected_id = "banner3";
			else if(selected_banner == "banner3")
			{	
				if( number_banner > 3)
					selected_id = "banner4";
				else
					selected_id = "banner1";	
			}
			else if(selected_banner == "banner4")
			{	
				if( number_banner > 4)
					selected_id = "banner5";
				else
					selected_id = "banner1";	
			}
			else if(selected_banner == "banner5" )
				selected_id = "banner1";		
			
			//pause the auto-slide
		   clearInterval(timer);
					
			//restart
			timer2 = setInterval( "startSlide()", period + 500 );	
		
		   
		   if( selected_id != selected_banner)
			{
				$("#" + selected_banner + "_link").css("background-position", "0 0");
				selected_banner = selected_id;
				$("#" + selected_banner + "_link").css("background-position", "0 -11px");
				
				
				
					if(selected_id == "banner1")
					{	
						if ($.browser.msie && jQuery.browser.version >= 8.0)
						{
							$('#banners .banner_item img').animate({'opacity':'.4'},250);
							revertFlip = setInterval( "reverseOpacity()", period + 100);
						}
						$('#banners').animate({'opacity':'.4'},250).animate({'left':'0px'},period).animate({'opacity':'1'},250);
					}
					else if(selected_id == "banner2")
					{	
						if ($.browser.msie && jQuery.browser.version >= 8.0)
						{
							$('#banners .banner_item img').animate({'opacity':'.4'},250);
							revertFlip = setInterval( "reverseOpacity()", period + 100);
						}
						$('#banners').animate({'opacity':'.4'},250).animate({'left':'-311px'},period).animate({'opacity':'1'},250);
						
					}
					else if(selected_id == "banner3")
					{
						if ($.browser.msie && jQuery.browser.version >= 8.0)
						{
							$('#banners .banner_item img').animate({'opacity':'.4'},250);
							revertFlip = setInterval( "reverseOpacity()", period + 100);
						}
						$('#banners').animate({'opacity':'.4'},250).animate({'left':'-622px'},period).animate({'opacity':'1'},250);
					}
					
		}
		
				
		   	

}

function startSlide()
{
	//pause the start-slide
	clearInterval(timer2);
	timer = setInterval( "NextSlide()", auto_period );
}

function getCookie(c_name)
{
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++)
	  {
	  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
	  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
	  x=x.replace(/^\s+|\s+$/g,"");
	  if (x==c_name)
		{
		return unescape(y);
		}
	  }
}

function setCookie(c_name,value,exdays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

function checkCookie()
{
	var username=getCookie("browser");
	if (username!=null && username!="")
	{
		 
	}
	else
	{
	 	window.location.href = "http://www.lmu.edu/about/services/wnmd/Policies/Web_Browser_not_Supported.htm";	
	}
}

function getInternetExplorerVersion() {

    var rv = -1; // Return value assumes failure.

    if (navigator.appName == 'Microsoft Internet Explorer') {

        var ua = navigator.userAgent;

        var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");

        if (re.exec(ua) != null)

            rv = parseFloat(RegExp.$1);

    }

    return rv;

}

function checkVersion() {

    var msg = "You're not using Windows Internet Explorer.";

    var ver = getInternetExplorerVersion();

    if (ver > -1) {

        if (ver >= 8.0)

            msg = "You're using a recent copy of Windows Internet Explorer."

        else

            msg = "You should upgrade your copy of Windows Internet Explorer.";

    }

    //alert(msg);

}
