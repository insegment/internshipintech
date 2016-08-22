<?php

if (!class_exists('WPBakeryShortCode'))
    return false;


function rentexwp_vc_mapper(){   
    require_once( get_template_directory()."/custom-vc/general.php");
    require_once( get_template_directory()."/custom-vc/typography.php");
}
add_action('vc_mapper_init_before', 'rentexwp_vc_mapper');

function rentexwp_set_vc_as_theme(){
  $child_dir = get_template_directory() . '/shortcodes';
  $parent_dir = get_template_directory() . '/shortcodes';
  vc_set_shortcodes_templates_dir($parent_dir);
  vc_set_shortcodes_templates_dir($child_dir);
}
add_action('vc_before_init', 'rentexwp_set_vc_as_theme');

/*
* Add custom params to visual composer
*/



if (function_exists('add_shortcode_param')) {
    add_shortcode_param('toggle', 'rentexwp_toggle_param_field');
}

function rentexwp_toggle_param_field($settings, $value){
    $dependency = vc_generate_dependencies_attributes($settings);
    $param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
    $type       = isset($settings['type']) ? $settings['type'] : '';
    $output     = '';
    $uniqeID    = uniqid();

    $output .= '<span class="mk-toggle-button mk-composer-toggle" id="toggle-switch-' . $uniqeID . '"><span class="toggle-handle"></span><input type="hidden" ' . $dependency . ' class="wpb_vc_param_value ' . $dependency . ' ' . $param_name . ' ' . $type . '" value="' . $value . '" name="' . $param_name . '"/></span>';
    $output .= "<style> .mk-toggle-button {display: block; background-color: #bbbbbb; width: 60px; height: 28px; cursor: pointer; position: relative; -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; } .mk-toggle-button .toggle-handle {width: 22px; height: 22px; background-color: #fff; position: relative; display: block; left: 3px; top: 3px; } .mk-toggle-button.mk-toggle-on {background-color: #14a5ed; } .mk-toggle-button.mk-toggle-on .toggle-handle {left: 34px; } .mk-toggle-button.mk-toggle-off {background-color: #bbbbbb; } .mk-toggle-button, .toggle-handle {-webkit-border-radius: 40px; -moz-border-radius: 40px; border-radius: 40px; background-clip: padding-box; -moz-background-clip: padding; -webkit-background-clip: padding-box; -webkit-transition: all 0.1s ease-in-out; -moz-transition: all 0.1s ease-in-out; -ms-transition: all 0.1s ease-in-out; -o-transition: all 0.1s ease-in-out; }</style>   "; 
    $output .= '<script type="text/javascript">

        var this_toggle_' . $uniqeID . ' = jQuery("#toggle-switch-' . $uniqeID . '"),
            this_input_' . $uniqeID . ' = this_toggle_' . $uniqeID . '.find("input");

        if(this_input_' . $uniqeID . '.val() == "true"){
            this_toggle_' . $uniqeID . '.addClass("mk-toggle-on");
        } else {
            this_toggle_' . $uniqeID . '.addClass("mk-toggle-off");
        }

        this_toggle_' . $uniqeID . '.click(function() {

            if(this_toggle_' . $uniqeID . '.hasClass("mk-toggle-on")) {
                    this_toggle_' . $uniqeID . '.removeClass("mk-toggle-on").addClass("mk-toggle-off");
                    this_input_' . $uniqeID . '.val("false");
            } else {
                    this_toggle_' . $uniqeID . '.removeClass("mk-toggle-off").addClass("mk-toggle-on");
                    this_input_' . $uniqeID . '.val("true");
            }
        });

    </script>';

    return $output;
}

class WPBakeryShortCode_mk_fancy_title extends WPBakeryShortCode
{
}

class WPBakeryShortCode_mk_fancy_schedule extends WPBakeryShortCode
{
}
