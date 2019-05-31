// JavaScript Document

//-----------------------------------------Jquery functions--------------------------------------------------------------//


$(document).ready(function() 
{
   $(".left_nav_unselected").hover(
      function () {
        $(this).removeClass("left_nav_unselected");
		$(this).addClass("left_nav_selected");
      },
	   function () {
        $(this).removeClass("left_nav_selected");
		$(this).addClass("left_nav_unselected");
      }
    );
   
   $(".left_nav_unselected").click(function () 
	{ 
      window.location = $(this).attr("title"); 
    });
   
   
});


//-------------------------------end of Jquery functions-----------------------------------------------------------------//


