<?php
/**
* Functions for Maping custom visual composer shortcodes
*/

$add_device_visibility = array(
    "type" => "dropdown",
    "heading" => __("Visibility For devices", "rentexwp"),
    "param_name" => "visibility",
    "value" => array(
        "All" => '',
        "Hidden on Phones (Screens smaller than 765px of width)" => "hidden-xs",
        "Hidden on Tablets (Screens in the range of 768px and 1024px)" => "hidden-sm hidden-xs",
        "Hidden on Desktops (Screens wider than 1224px of width)" => "hidden-sm hidden-xs hidden-md"
    ),
    "description" => __("You can make this element invisible for a particular device (screen resolution) or set it to All to be visible for all devices.<br> <span style='color:red'>Important : Device detection is based on <strong>Device Screen Width</strong> and we can not clearly define the sort of device whether its a tablet or small laptop. This option mostly helps to organise your content on smaller devices (e.g. remove large content for mobiles) and it does not specifically help you to determine the type of device.</span>", "rentexwp")
);
vc_map(
    array(
        "name" => __("Row", "rentexwp") ,
        'base' => 'vc_row',
        'is_container' => true,
        'icon' => 'icon-mk-row vc_mk_element-icon',
        'show_settings_on_create' => false,
        'category' => __('Content', 'rentexwp') ,
        'description' => __('Place content elements inside the row', 'rentexwp') ,
        "params" => array(
            array(
                "type" => "toggle",
                "heading" => __("Fullwidth Row", 'rentexwp') ,
                "param_name" => "fullwidth",
                "value" => "false",
                "description" => __("When enabled, this row will no longer follow the main grid width and will stretch 100% to screen width.", 'rentexwp')
            ) ,
            array(
                "type" => "colorpicker",
                "heading" => __("Color Picker", 'rentexwp') ,
                "param_name" => "background_color",
                "value" => "false",
                "description" => __("color picker", 'rentexwp')
            ) ,
            array(
                "type" => "toggle",
                "heading" => __("Border", 'rentexwp') ,
                "param_name" => "border_activate",
                "value" => "false",
                "description" => __("When enabled, this row will have a top and bottom border", 'rentexwp')
            ) ,
            array(
                "type" => "colorpicker",
                "heading" => __("Border Color Picker", 'rentexwp') ,
                "param_name" => "border_color",
                "value" => "#000",
                "description" => __("Only works if border is toggled picker", 'rentexwp')
            ) ,
            array(
                "type" => "textfield",
                "heading" => __("Border size", 'rentexwp') ,
                "param_name" => "border_size",
                "description" => __("Set border size. Only works if border is toggled picker.", 'rentexwp')
            ) ,
            array(
                "type" => "textfield",
                "heading" => __("Row ID", 'rentexwp') ,
                "param_name" => "id",
                "description" => __("This option comes handy when you are creating One page scroll website and here you can set ID which you used in your navigation anchor tag.", 'rentexwp')
            ) ,
            $add_device_visibility,
            array(
                "type" => "textfield",
                "heading" => __("Extra class name", 'rentexwp') ,
                "param_name" => "el_class",
                "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'rentexwp')
            ) ,
        ) ,
        "js_view" => 'VcRowView'
    )
);
vc_map(array(
    "name" => __("Row", 'rentexwp') ,
    'base' => 'vc_row_inner',
    'content_element' => false,
    'is_container' => true,
    'icon' => 'icon-wpb-row',
    'weight' => 1000,
    'show_settings_on_create' => false,
    'description' => __('Place content elements inside the row', 'rentexwp') ,
    "params" => array(
        $add_device_visibility,
        array(
            "type" => "colorpicker",
            "heading" => __("Color Picker", 'rentexwp') ,
            "param_name" => "background_color",
            "value" => "false",
            "description" => __("color picker", 'rentexwp')
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'rentexwp') ,
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'rentexwp')
        )
    ) ,
    "js_view" => 'VcRowView'
));


