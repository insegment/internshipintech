(function($) {
"use strict";   
 


 			//Shortcodes
            tinymce.PluginManager.add( 'zillaShortcodes', function( editor, url ) {

				editor.addCommand("zillaPopup", function ( a, params )
				{
					var popup = params.identifier;
					tb_show("Insert Zilla Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
				});
     
                editor.addButton( 'zilla_button', {
                    type: 'splitbutton',                
                    icon: 'icon mce-i-bell',
					title:  'Zilla Shortcodes',
					onclick : function(e) {},
					menu: [

					{text: 'One Half (1/2)',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_half]Put Your Content![/one_half]')
					}},

					{text: 'One Third Column (1/3)',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_third]Put Your Content![/one_third]')
					}},					

					{text: 'Two Thirds Column (2/3)',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[two_third]Put Your Content![/two_third]')
					}},

					{text: 'One Fourth Column (1/4) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[two_third]Put Your Content![/two_third]')
					}},

					{text: 'Three Fourths Column (3/4) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_fourth]Put Your Content![/one_fourth]')
					}},

					{text: 'One Sixth Column (1/6) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_sixth]Put Your Content![/one_sixth]')
					}},

					{text: 'Five Sixths Column (5/6) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[five_sixths]Put Your Content![/five_sixths]')
					}},

					{text: 'One Whole Column (1/1) ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[one_whole]Put Your Content![/one_whole]')
					}},

					{text: 'About Box',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_about_box',identifier: 'Theme2035_about_box'})
					}},	

					{text: 'Skill Box',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_skill_box',identifier: 'Theme2035_skill_box'})
					}},																									

					{text: 'Text Slider Container ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[home_text_slider]Put Your Content![/home_text_slider]')
					}},
	
					{text: 'Text Slider Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_text_slider_item',identifier: 'Theme2035_text_slider_item'})
					}},																																																																													

					{text: 'Tab Container ',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[tab]Put Your Content![/tab]')
					}},																											

					{text: 'Tab Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_tab_item',identifier: 'Theme2035_tab_item'})
					}},	

					{text: 'Price List',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_price_list',identifier: 'Theme2035_price_list'})
					}},							
																								

					{text: 'Right Icon Container',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_right_icon',identifier: 'Theme2035_right_icon'})
					}},	

					{text: 'Right Icon Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_right_icon_item',identifier: 'Theme2035_right_icon_item'})
					}},	
																																																			
					{text: 'Services Without Icon',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_services_without_icon',identifier: 'Theme2035_services_without_icon'})
					}},																										
		
					{text: 'Big Tabs Container',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[big_tabs]Put Your Content![/big_tabs]')
					}},																												
																										
					{text: 'Big Tabs Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_big_tabs_item',identifier: 'Theme2035_big_tabs_item'})
					}},	

					{text: 'Button Style',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_button_style',identifier: 'Theme2035_button_style'})
					}},																											

					{text: 'Accordion Container',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[accordion]Put Your Content![/accordion]')
					}},	

					{text: 'Accordion Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_accordion_item',identifier: 'Theme2035_accordion_item'})
					}},	
																										
					{text: 'Animation Numbers Container',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[stats]Put Your Content![/stats]')
					}},	

					{text: 'Big Numbers Item',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_numbers',identifier: 'Theme2035_numbers'})
					}},																											

					{text: 'Animation Container',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[animation_container]Put Your Content![/animation_container]')
					}},	

					{text: 'Animation',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_animation',identifier: 'Theme2035_animation'})
					}},																										

					{text: 'Twitter',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[twitter]Put Your Content![/twitter]')
					}},	

					{text: 'Map',onclick:function(){
					    editor.execCommand("mceInsertContent", false, '[map]Put Your Content![/map]')
					}},						

					{text: 'Background color',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_bcolor',identifier: 'Theme2035_bcolor'})
					}},	

					{text: 'Image Box',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_image_box',identifier: 'Theme2035_image_box'})
					}},	

					{text: 'Small Title',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_small_title',identifier: 'Theme2035_small_title'})
					}},	

					{text: 'Button',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_button',identifier: 'Theme2035_button'})
					}},	

					{text: 'Underline',onclick:function(){
						editor.execCommand("zillaPopup", false, {title: 'Theme2035_underline',identifier: 'Theme2035_underline'})
					}},					

					//List your shortcodes like this
					]

                
        	  });
         
          });
         

 
})(jQuery);