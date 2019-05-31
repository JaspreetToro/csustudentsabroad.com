$(document).ready(function(){
	/* This code is executed after the DOM has been completely loaded */

	/* Changing thedefault easing effect - will affect the slideUp/slideDown methods: */
	/*$.easing.def = "easeOutBounce";*/	
	
	/* Binding a click event handler to the links: */
	
	
	$('li.button a').click(function(e){
		/* Finding the drop down list that corresponds to the current section: */

		$('#select_active').attr('id', '');		
		
		$(this).attr('id', 'select_active');;
		
		var dropDown = $(this).parent().next();
		
		/* Closing all other drop down sections, except the current one */
		$('.dropdown').not(dropDown).stop().slideUp(0);
		dropDown.stop().slideToggle(0);
		/*$('li.button a').eq(0).click().addClass('select_active');
		//active element
		$('li.button a').click(function() {
			$('li.button a').removeClass('active');
			$(this).addClass('active');
		});*/
		/* Preventing the default event (which would be to navigate the browser to the link's address) */
		e.preventDefault();
	})
	
	$('li.info_title_button a').click(function(e){
		/* Finding the drop down list that corresponds to the current section: */		
		var dropDown = $(this).parent().next();
		
		/* Closing all other drop down sections, except the current one */
		$('.info_list').not(dropDown).stop().slideUp(0);
		dropDown.stop().slideToggle(0);
		/* Preventing the default event (which would be to navigate the browser to the link's address) */
		e.preventDefault();
	})
	
});