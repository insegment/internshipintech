<?php

vc_map(array(
    "name" => __("Fancy Title", 'rentexwp') ,
    "base" => "mk_fancy_title",
    'icon' => 'icon-mk-fancy-title vc_mk_element-icon',
    "category" => __('Typography', 'rentexwp') ,
    'description' => __('Advanced headings with cool styles.', 'rentexwp') ,
    "params" => array(
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Content.", 'rentexwp') ,
            "param_name" => "content",
            "value" => __("", 'rentexwp') ,
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Tag Name", 'rentexwp') ,
            "param_name" => "tag_name",
            "value" => array(
                "h1" => "h1",
                "h2" => "h2",
                "h3" => "h3",
                "h4" => "h4",
                "h5" => "h5",
                "h6" => "h6"
            ) ,
            "description" => __("For SEO reasons you might need to define your titles tag names according to priority. Please note that H1 can only be used only once in a page due to the SEO reasons. So try to use lower than H2 to meet SEO best practices.", 'rentexwp')
        ) ,
        array(
            "type" => "colorpicker",
            "heading" => __("Text Color", 'rentexwp') ,
            "param_name" => "color",
            "value" => "#393836",
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Font Size", 'rentexwp') ,
            "param_name" => "size",
            "value" => "30",
            "description" => __("Font Size in pixels ( px )", 'rentexwp')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Font Weight", 'rentexwp') ,
            "param_name" => "font_weight",
            "value" => array(
                __('Default', 'rentexwp') => "inherit",
                __('Light', 'rentexwp') => "300",
                __('Normal', 'rentexwp') => "normal",
                __('Bold', 'rentexwp') => "bold",
                __('Bolder', 'rentexwp') => "bolder",
                __('Extra Bold', 'rentexwp') => "900",
            ) ,
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Font Style", 'rentexwp') ,
            "param_name" => "font_style",
            "value" => array(
                __('Default', 'rentexwp') => "inhert",
                __('Normal', 'rentexwp') => "normal",
                __('Italic', 'rentexwp') => "italic",
            ) ,
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Text Transform", 'rentexwp') ,
            "param_name" => "txt_transform",
            "value" => array(
                __('Default', 'rentexwp') => "",
                __('None', 'rentexwp') => "none",
                __('Uppercase', 'rentexwp') => "uppercase",
                __('Lowercase', 'rentexwp') => "lowercase",
                __('Capitalize', 'rentexwp') => "capitalize"
            ) ,
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Letter Spacing", 'rentexwp') ,
            "param_name" => "letter_spacing",
            "value" => "0",
            "description" => __("Space between each character.", 'rentexwp')
        ) ,
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Margin Top", 'rentexwp') ,
            "param_name" => "margin_top",
            "value" => "0",
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __("Margin Bottom", 'rentexwp') ,
            "param_name" => "margin_bottom",
            "value" => "0",
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Align", 'rentexwp') ,
            "param_name" => "align",
            "width" => 150,
            "value" => array(
                __('Left', 'rentexwp') => "left",
                __('Right', 'rentexwp') => "right",
                __('Center', 'rentexwp') => "center"
            ) ,
            "description" => __("", 'rentexwp')
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'rentexwp') ,
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", 'rentexwp')
        ),
        $add_device_visibility
    )
));




vc_map(array(
    "name" => __("Fancy Schedule", 'rentexwp') ,
    "base" => "mk_fancy_schedule",
    'icon' => 'icon-mk-fancy-title vc_mk_element-icon',
    "category" => __('Typography', 'rentexwp') ,
    'description' => __('Display fancy schedule list.', 'rentexwp') ,
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'rentexwp') ,
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", 'rentexwp')
        ),
        $add_device_visibility
    )
));