<?php

/*-----------------------------------------------------------------------------------*/
/*	About Box
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_about_box'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'std' => 'star',
			'type' => 'text',
			'label' => __('Icon', 'textdomain'),
			'desc' => __(' http://fortawesome.github.io/Font-Awesome/icons/">Fontawesome Icon name (Without fa-) ', 'textdomain')
		),
		'background' => array(
			'std' => '8ecfc2',
			'type' => 'text',
			'label' => __('Icon Background Color', 'textdomain'),
			'desc' => __('Add the Background Color', 'textdomain'),
		),
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Please Box Title ', 'textdomain')
		),			
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Box\'s Text', 'textdomain'),
			'desc' => __('Add the Box\'s Text', 'textdomain'),
		),
	), 
	'shortcode' => '[about_box icon="{{icon}}" background="{{background}}" title="{{title}}"] {{content}} [/about_box]',
	'popup_title' => __('Insert Box', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Button
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_button'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'type' => 'select',
			'label' => __('Background Image', 'textdomain'),
			'desc' => __('', 'textdomain'),
			'options' => array(
				'True' => 'True',
				'' => 'False',
			)
		),
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __('Title', 'textdomain'),
		),
		'color' => array(
			'std' => '#',
			'type' => 'text',
			'label' => __('Button Background', 'textdomain'),
			'desc' => __('Button Background', 'textdomain'),
		),	
		'text_color' => array(
			'std' => '#',
			'type' => 'text',
			'label' => __('Text Color', 'textdomain'),
			'desc' => __('Text Color', 'textdomain'),
		),	
		'url' => array(
			'std' => 'http://',
			'type' => 'text',
			'label' => __('Button URl', 'textdomain'),
			'desc' => __('Button URl. Example : #more, http://google.com etc...', 'textdomain'),
		),					
	), 
	'shortcode' => '[button background="{{background}}" title="{{title}}" color="{{color}}" text_color="{{text_color}}" url="{{url}}"][/button]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Small Title
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_small_title'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __('Title', 'textdomain'),
		),					
	), 
	'shortcode' => '[small_title] {{title}} [/small_title]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Skill Box
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_skill_box'] = array(
	'no_preview' => true,
	'params' => array(
		'percent' => array(
			'std' => '85',
			'type' => 'text',
			'label' => __('Percent', 'textdomain'),
			'desc' => __('Percent', 'textdomain'),
		),	
		'color' => array(
			'std' => '#',
			'type' => 'text',
			'label' => __('Color', 'textdomain'),
			'desc' => __('Color', 'textdomain'),
		),					
	), 
	'shortcode' => '[skill_box percent="{{percent}}" color="{{color}}" ]  [/skill_box]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Text Slider
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_text_slider_item'] = array(
	'no_preview' => true,
	'params' => array(
		'text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Text', 'textdomain'),
			'desc' => __('Text', 'textdomain'),
		),					
	), 
	'shortcode' => '[text_slider_item] {{text}} [/text_slider_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Features Tabs
/*-----------------------------------------------------------------------------------*/
 


$zilla_shortcodes['Theme2035_tab_item'] = array(
	'no_preview' => true,
	'params' => array(			
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Title', 'textdomain'),
			'desc' => __(' Icon Box Title', 'textdomain')
		),
		'desc' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Description', 'textdomain'),
			'desc' => __('Description', 'textdomain')
		),
		'active' => array(
			'type' => 'select',
			'label' => __('Active / Passive', 'textdomain'),
			'desc' => __('Active Tab select', 'textdomain'),
			'options' => array(
				'active' => 'Active',
				'' => 'Passive',
			)
		),	
		'icon' => array(
			'std' => 'magic',
			'type' => 'text',
			'label' => __('icon', 'textdomain'),
			'desc' => __(' Please write a font awesome font name. Not use fa- ', 'textdomain')
		),					
		'tabnumber' => array(
			'std' => 'tab1',
			'type' => 'text',
			'label' => __('Tab Number', 'textdomain'),
			'desc' => __(' Tab Number Example : tab1, tab2...', 'textdomain')
		),								
	),
	'shortcode' => '[tab_item title="{{title}}" desc="{{desc}}"  id="{{tabnumber}}" icon="{{icon}}" active="{{active}}"] Tab Content [/tab_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Background Color
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_bcolor'] = array(
	'no_preview' => true,
	'params' => array(
		'color' => array(
			'std' => '#',
			'type' => 'text',
			'label' => __('Background Color', 'textdomain'),
			'desc' => __('Background Color', 'textdomain'),
		),					
	), 
	'shortcode' => '[bcolor color="{{color}}"]  [/bcolor]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Image Box
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_image_box'] = array(
	'no_preview' => true,
	'params' => array(
		'image' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('image url', 'textdomain'),
			'desc' => __('image url', 'textdomain'),
		),	
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),		
		'desc' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Descriptions', 'textdomain'),
			'desc' => __('Descriptions', 'textdomain'),
		),					
	), 
	'shortcode' => '[image_box image="{{image}}" title="{{title}}" desc="{{desc}}"]  [/image_box]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Price List
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_price_list'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),	
		'desc' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Description', 'textdomain'),
			'desc' => __('Description', 'textdomain'),
		),		
		'price' => array(
			'std' => '65$',
			'type' => 'text',
			'label' => __('price', 'textdomain'),
			'desc' => __('price', 'textdomain'),
		),	
		'price' => array(
			'std' => '65$',
			'type' => 'text',
			'label' => __('price', 'textdomain'),
			'desc' => __('price', 'textdomain'),
		),			
		'period' => array(
			'std' => ' / Month',
			'type' => 'text',
			'label' => __('period', 'textdomain'),
			'desc' => __('period', 'textdomain'),
		),	
		'content' => array(
			'std' => '<ul><li>Item 1</li><li>Item 2</li></ul>',
			'type' => 'text',
			'label' => __('content', 'textdomain'),
			'desc' => __('content', 'textdomain'),
		),
		'url' => array(
			'std' => 'http://',
			'type' => 'text',
			'label' => __('url', 'textdomain'),
			'desc' => __(' url', 'textdomain')
		),										
	), 

	'shortcode' => '[price_list title="{{title}}" desc="{{desc}}" price="{{price}}" period="{{period}}" url="{{url}}"] {{content}} [/price_list]',
	'popup_title' => __('Insert Box', 'textdomain')
);




/*-----------------------------------------------------------------------------------*/
/*	Social Icon Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_social_icon_item'] = array(
	'no_preview' => true,
	'params' => array(
		'social' => array(
			'std' => 'facebook',
			'type' => 'text',
			'label' => __('Social Website', 'textdomain'),
			'desc' => __('Social Website name', 'textdomain'),
		),
		'username' => array(
			'std' => '2035themes',
			'type' => 'text',
			'label' => __('username', 'textdomain'),
			'desc' => __('username', 'textdomain'),
		),							
	), 
	'shortcode' => '[social_icon_item social="{{social}}" username="{{username}}"]  [/social_icon_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Contact Icon
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_social_icon_item'] = array(
	'no_preview' => true,
	'params' => array(
		'social' => array(
			'std' => 'facebook',
			'type' => 'text',
			'label' => __('Social Website', 'textdomain'),
			'desc' => __('Social Website name', 'textdomain'),
		),
		'username' => array(
			'std' => '2035themes',
			'type' => 'text',
			'label' => __('username', 'textdomain'),
			'desc' => __('username', 'textdomain'),
		),							
	), 
	'shortcode' => '[social_icon_item social="{{social}}" username="{{username}}"]  [/social_icon_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Right Icon
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_right_icon'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),
		'desc' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Description', 'textdomain'),
			'desc' => __('Description', 'textdomain'),
		),							
	), 
	'shortcode' => '[right_icon title="{{title}}" desc="{{desc}}"]  [/right_icon]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Right Icon Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_right_icon_item'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('icon', 'textdomain'),
			'desc' => __('Fontawesome Icon name. Without fa-.', 'textdomain'),
		),
		'text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('text', 'textdomain'),
			'desc' => __('text', 'textdomain'),
		),							
	), 
	'shortcode' => '[right_icon_item icon="{{icon}}" text="{{text}}"]  [/right_icon_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Services Without icon
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_services_without_icon'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),
		'button' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button', 'textdomain'),
			'desc' => __('Button Text', 'textdomain'),
		),	
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button url', 'textdomain'),
			'desc' => __('Button url', 'textdomain'),
		),	
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('Content', 'textdomain'),
			'desc' => __('Content', 'textdomain'),
		),							
	), 
	'shortcode' => '[services_without_icon title="{{title}}" button="{{button}}" url="{{url}}"] {{content}} [/services_without_icon]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Stats Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_stats_item'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'std' => 'star',
			'type' => 'text',
			'label' => __('icon', 'textdomain'),
			'desc' => __('icon', 'textdomain'),
		),
		'number' => array(
			'std' => '10',
			'type' => 'text',
			'label' => __('Start Number', 'textdomain'),
			'desc' => __('Start Number', 'textdomain'),
		),
		'targetnumber' => array(
			'std' => '25',
			'type' => 'text',
			'label' => __('Target Number', 'textdomain'),
			'desc' => __('Target Number', 'textdomain'),
		),
		'text' => array(
			'std' => 'Awards',
			'type' => 'text',
			'label' => __('Text', 'textdomain'),
			'desc' => __('Text', 'textdomain'),
		),												
	), 
	'shortcode' => '[stats_item icon="{{icon}}" number="{{number}}" targetnumber="{{targetnumber}}" text="{{text}}"][/stats_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Stats Item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_numbers'] = array(
	'no_preview' => true,
	'params' => array(
		'number' => array(
			'std' => '10',
			'type' => 'text',
			'label' => __('Start Number', 'textdomain'),
			'desc' => __('Start Number', 'textdomain'),
		),
		'targetnumber' => array(
			'std' => '25',
			'type' => 'text',
			'label' => __('Target Number', 'textdomain'),
			'desc' => __('Target Number', 'textdomain'),
		),
		'text' => array(
			'std' => 'Awards',
			'type' => 'text',
			'label' => __('Text', 'textdomain'),
			'desc' => __('Text', 'textdomain'),
		),	
		'icon' => array(
			'std' => 'star',
			'type' => 'text',
			'label' => __('Icon', 'textdomain'),
			'desc' => __('Icon', 'textdomain'),
		),														
	), 
	'shortcode' => '[numbers number="{{number}}" targetnumber="{{targetnumber}}" text="{{text}}" icon="{{icon}}" ][/numbers]',
	'popup_title' => __('Insert Box', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Features Tabs
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_big_tabs_item'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),
		'id' => array(
			'std' => 'tab1',
			'type' => 'text',
			'label' => __('id', 'textdomain'),
			'desc' => __('id', 'textdomain'),
		),	
		'active' => array(
			'type' => 'select',
			'label' => __('Active / Passive', 'textdomain'),
			'desc' => __('Active Tab select', 'textdomain'),
			'options' => array(
				'active' => 'Active',
				'' => 'Passive',
			)
		),								
	), 
	'shortcode' => '[big_tabs_item title="{{title}}" id="{{id}}" active="{{active}}"][/big_tabs_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Button
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_button_style'] = array(
	'no_preview' => true,
	'params' => array(
		'color' => array(
			'std' => '#',
			'type' => 'text',
			'label' => __('Color', 'textdomain'),
			'desc' => __('Color', 'textdomain'),
		),	
		'style' => array(
			'std' => '1',
			'type' => 'text',
			'label' => __('style', 'textdomain'),
			'desc' => __('style', 'textdomain'),
		),	
		'icon' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('icon', 'textdomain'),
			'desc' => __('icon', 'textdomain'),
		),	
		'content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button text', 'textdomain'),
			'desc' => __('Button text', 'textdomain'),
		),								
	), 
	'shortcode' => '[button_style color="{{color}}" style="{{style}}" icon="{{icon}}"] {{content}} [/button_style]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	list item
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_list_item'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('icon', 'textdomain'),
			'desc' => __('icon', 'textdomain'),
		),	
		'text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('text', 'textdomain'),
			'desc' => __('text', 'textdomain'),
		),	
		'icon' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('icon', 'textdomain'),
			'desc' => __('icon', 'textdomain'),
		),	
		'color' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('color', 'textdomain'),
			'desc' => __('color', 'textdomain'),
		),								
	), 
	'shortcode' => '[list_item icon="{{icon}}" text="{{text}}" icon="{{icon}}" color="{{color}}"] [/list_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Quotes
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_quotes'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('content', 'textdomain'),
			'desc' => __('content', 'textdomain'),
		),								
	), 
	'shortcode' => '[quotes] {{content}} [/quotes]',
	'popup_title' => __('Insert Box', 'textdomain')
);


/*-----------------------------------------------------------------------------------*/
/*	Dropcap
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_dropcap'] = array(
	'no_preview' => true,
	'params' => array(
		'content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('content', 'textdomain'),
			'desc' => __('content', 'textdomain'),
		),								
	), 
	'shortcode' => '[dropcap] {{content}} [/dropcap]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Skills Bar
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_skill_bar'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),	
		'percent' => array(
			'std' => '%50',
			'type' => 'text',
			'label' => __('percent', 'textdomain'),
			'desc' => __('percent', 'textdomain'),
		),								
	), 
	'shortcode' => '[skill_bar title="{{title}}" percent="{{percent}}" ][/skill_bar]',
	'popup_title' => __('Insert Box', 'textdomain')
);




/*-----------------------------------------------------------------------------------*/
/*	Skills Bar
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_accordion_item'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),	
		'active' => array(
			'type' => 'select',
			'label' => __('Active / Passive', 'textdomain'),
			'desc' => __('Active Tab select', 'textdomain'),
			'options' => array(
				'yes' => 'Active',
				'' => 'Passive',
			)
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __('content', 'textdomain'),
			'desc' => __('content', 'textdomain'),
		),										
	), 
	'shortcode' => '[accordion_item title="{{title}}" active="{{active}}" ] {{content}} [/accordion_item]',
	'popup_title' => __('Insert Box', 'textdomain')
);




/*-----------------------------------------------------------------------------------*/
/*	Space
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_space'] = array(
	'no_preview' => true,
	'params' => array(
		'space' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('space', 'textdomain'),
			'desc' => __('space', 'textdomain'),
		),								
	), 
	'shortcode' => '[space space="{{space}}" ][/space]',
	'popup_title' => __('Insert Box', 'textdomain')
);



/*-----------------------------------------------------------------------------------*/
/*	Title Underline
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_underline'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('title', 'textdomain'),
			'desc' => __('title', 'textdomain'),
		),
		'icon' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('icon', 'textdomain'),
			'desc' => __('icon', 'textdomain'),
		),								
	), 
	'shortcode' => '[underline title="{{title}}" icon="{{icon}}" ][/underline]',
	'popup_title' => __('Insert Box', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Animation Type
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['Theme2035_animation'] = array(
	'no_preview' => true,
	'params' => array(	
		'type' => array(
			'type' => 'select',
			'label' => __('Animation Type', 'textdomain'),
			'desc' => __('Animation Type. Please Visit for animation Preview <a href="https://daneden.me/animate/">https://daneden.me/animate/</a> ', 'textdomain'),
			'options' => array(
				'flash' => 'flash',
				'bounce' => 'bounce',
				'shake' => 'shake',
				'tada' => 'tada',
				'swing' => 'swing',
				'wobble' => 'wobble',
				'pulse' => 'pulse',
				'flip' => 'flip',
				'flipInX' => 'flipInX',
				'flipOutX' => 'flipOutX',
				'flipInY' => 'flipInY',
				'flipOutY' => 'flipOutY',
				'fadeIn' => 'fadeIn',
				'fadeInUp' => 'fadeInUp',
				'fadeInDown' => 'fadeInDown',
				'fadeInLeft' => 'fadeInLeft',
				'fadeInRight' => 'fadeInRight',
				'fadeInUpBig' => 'fadeInUpBig',
				'fadeInDownBig' => 'fadeInDownBig',
				'fadeInLeftBig' => 'fadeInLeftBig',
				'fadeInRightBig' => 'fadeInRightBig',
				'fadeOut' => 'fadeOut',
				'fadeOutUp' => 'fadeOutUp',
				'fadeOutDown' => 'fadeOutDown',
				'fadeOutLeft' => 'fadeOutLeft',
				'fadeOutRight' => 'fadeOutRight',
				'fadeOutUpBig' => 'fadeOutUpBig',
				'fadeOutDownBig' => 'fadeOutDownBig',
				'fadeOutLeftBig' => 'fadeOutLeftBig',
				'fadeOutRightBig' => 'fadeOutRightBig',
				'slideInDown' => 'slideInDown',
				'slideInLeft' => 'slideInLeft',
				'slideInRight' => 'slideInRight',
				'slideOutUp' => 'slideOutUp',
				'slideOutLeft' => 'slideOutLeft',
				'slideOutRight' => 'slideOutRight',
				'bounceIn' => 'bounceIn',
				'bounceInDown' => 'bounceInDown',
				'bounceInUp' => 'bounceInUp',
				'bounceInLeft' => 'bounceInLeft',
				'bounceInRight' => 'bounceInRight',
				'bounceOut' => 'bounceOut',
				'bounceOutDown' => 'bounceOutDown',
				'bounceOutUp' => 'bounceOutUp',
				'bounceOutLeft' => 'bounceOutLeft',
				'bounceOutRight' => 'bounceOutRight',
				'rotateIn' => 'rotateIn',
				'rotateInDownLeft' => 'rotateInDownLeft',
				'rotateInDownRight' => 'rotateInDownRight',
				'rotateInUpLeft' => 'rotateInUpLeft',
				'rotateInUpRight' => 'rotateInUpRight',
				'rotateOut' => 'rotateOut',
				'rotateOutDownLeft' => 'rotateOutDownLeft',
				'rotateOutDownRight' => 'rotateOutDownRight',
				'rotateOutUpLeft' => 'rotateOutUpLeft',
				'rotateOutUpRight' => 'rotateOutUpRight',
				'lightSpeedIn' => 'lightSpeedIn',
				'lightSpeedOut' => 'lightSpeedOut',
				'hinge' => 'hinge',
				'rollIn' => 'rollIn',
				'rollOut' => 'rollOut',
			)
		),				
		'delay' => array(
			'std' => '0.3s',
			'type' => 'text',
			'label' => __('Animation Time (Delay)', 'theme2035-fm'),
			'desc' => __('Animation Time (Delay) Example : 0.3s, 0.6s, 1.2s etc...', 'theme2035-fm')
		),							
	),
	'shortcode' => '[animation type="{{type}}" delay="{{delay}}"] Content [/animation]',
	'popup_title' => __('Insert Box', 'textdomain')
);





?>