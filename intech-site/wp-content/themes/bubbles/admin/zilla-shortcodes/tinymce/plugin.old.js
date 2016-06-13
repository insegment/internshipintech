(function ()
{
	// create zillaShortcodes plugin
	tinymce.create("tinymce.plugins.zillaShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("zillaPopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert Zilla Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "zilla_button" )
			{	
				var a = this;
				
				var btn = e.createSplitButton('zilla_button', {
                    title: "Insert Zilla Shortcode",
					image: ZillaShortcodes.plugin_folder +"/tinymce/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{	
					a.addImmediate( b, "Container", "[container][/container]" );								
					c=b.addMenu({title: "Columns"});	
					a.addImmediate( c, "One Half (1/2) ", "[one_half][/one_half]");													
					a.addImmediate( c, "One Third Column (1/3) ", "[one_third][/one_third]");													
					a.addImmediate( c, "Two Thirds Column (2/3) ", "[two_third][/two_third]");													
					a.addImmediate( c, "One Fourth Column (1/4) ", "[one_fourth][/one_fourth]");													
					a.addImmediate( c, "Three Fourths Column (3/4) ", "[three_fourths][/three_fourths]");													
					a.addImmediate( c, "One Sixth Column (1/6) ", "[one_sixth][/one_sixth]");													
					a.addImmediate( c, "Five Sixths Column (5/6) ", "[five_sixths][/five_sixths]");													
					a.addImmediate( c, "One Whole Column (1/1) ", "[one_whole][/one_whole]");
					a.addWithPopup( b, "About Box", "Theme2035_about_box" );																																																																												
					a.addWithPopup( b, "Skill Box", "Theme2035_skill_box" );
					a.addImmediate( b, "Text Slider Container", "[home_text_slider][/home_text_slider]");																											
					a.addWithPopup( b, "Text Slider Item", "Theme2035_text_slider_item" );	
					a.addImmediate( b, "Tab Container", "[tab][/tab]");																									
					a.addWithPopup( b, "Tab Item", "Theme2035_tab_item" );																																																				
					a.addWithPopup( b, "Price List", "Theme2035_price_list" );																										
					a.addWithPopup( b, "Right Icon Container", "Theme2035_right_icon" );																										
					a.addWithPopup( b, "Right Icon Item", "Theme2035_right_icon_item" );																										
					a.addWithPopup( b, "Services Without Icon", "Theme2035_services_without_icon" );
					a.addImmediate( b, "Big Tabs Container", "[big_tabs][/big_tabs]");																											
					a.addWithPopup( b, "Big Tabs Item", "Theme2035_big_tabs_item" );																										
					a.addWithPopup( b, "Button Style", "Theme2035_button_style" );																										
					a.addImmediate( b, "Accordion Container", "[accordion][/accordion]");																									
					a.addWithPopup( b, "Accordion Item", "Theme2035_accordion_item" );
					a.addImmediate( b, "Animation Numbers Container", "[stats][/stats]");																									
					a.addWithPopup( b, "Animation Numbers Item", "Theme2035_stats_item" );					
					a.addWithPopup( b, "Big Numbers Item", "Theme2035_numbers" );					
					a.addImmediate( b, "Animation Container", "[animation_container][/animation_container]");											
					a.addWithPopup( b, "animation", "Theme2035_animation");		
					a.addImmediate( b, "Twitter", "[twitter][/twitter]");										
					a.addImmediate( b, "Map", "[map][/map]");										
					a.addWithPopup( b, "Background color", "Theme2035_bcolor" );																										
					a.addWithPopup( b, "Image Box", "Theme2035_image_box" );	
					a.addWithPopup( b, "Small Title", "Theme2035_small_title" );	
					a.addWithPopup( b, "Button", "Theme2035_button" );																										
					a.addWithPopup( b, "Underline", "Theme2035_underline" );																										
			});
                
                return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("zillaPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'Zilla Shortcodes',
				author: 'Orman Clark',
				authorurl: 'http://themeforest.net/user/ormanclark/',
				infourl: 'http://wiki.moxiecode.com/',
				version: "1.0"
			}
		}
	});
	
	// add zillaShortcodes plugin
	tinymce.PluginManager.add("zillaShortcodes", tinymce.plugins.zillaShortcodes);
})();