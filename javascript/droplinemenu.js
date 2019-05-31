/*********************
//* jQuery Drop Line Menu- By Dynamic Drive: http://www.dynamicdrive.com/
//* Last updated: May 9th, 11'
//* Menu avaiable at DD CSS Library: http://www.dynamicdrive.com/style/
*********************/

var droplinemenu = {
	buildmenu:function(menuid){
		var menu = $("#"+menuid+">ul");
		var menu_items = menu.find("li");
		//.droplinebar > ul > li > a:hover
		
		menu_items.each(function(i){
			var menu_item = $(this);
			var submenu = menu_item.find('div:eq(0)');
						                               
            menu_item.mouseleave(function(e){                                      
                // chain removing id to after slide up
                //submenu.slideUp(800);
				submenu.fadeOut('fast');
                menu_item.removeAttr('id');
            });
            
            var menu_fake_click = menu_item.find('a:eq(0)');            
            var menu_height = menu_fake_click.outerHeight();
            
            // Mouseover instead of click, uncomment this line and comment next line
			menu_fake_click.mouseover(function() {	
				//$('.droplinebar > ul > li > a:hover').css({'background-image' : 'url(/images/menu-arrow.gif)'});		
                // calculate position of submenu
                var menu_pos = menu.position();             
                submenu.css({left: menu_pos.left, top: menu_pos.top + menu_height});

                // set this menu to be selected and slide submenu down                  
                menu_item.attr('id', 'nav-bar-select'); 
                submenu.slideDown('400'); 								
			});
			/*
			menu_fake_click.click(function() {			    			    
			    // calculate position of submenu
			    var menu_pos = menu.position();			    
			    submenu.css({left: menu_pos.left, top: menu_pos.top + menu_height});
			    
				if (submenu.is(':hidden')) {
				    // get selected menu and slide up submenu up
				    var selected_menu = $('#nav-bar-select');
				    if (selected_menu) {
					   selected_menu.find('div:eq(0)').slideUp(800);
					   selected_menu.removeAttr('id');
					}
					
					// set this menu to be selected and slide submenu down					
					menu_item.attr('id', 'nav-bar-select');
					submenu.slideDown(650);													
				} else {		
					submenu.slideUp(800);
					menu_item.removeAttr('id');
				}
			});
			*/
		});		
	}
}

