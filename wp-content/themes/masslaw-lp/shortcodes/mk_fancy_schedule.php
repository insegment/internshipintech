<?php
$output = $visibility = $el_class = '';
extract(shortcode_atts(array(
	'visibility' => '',
    'el_class' => '',
), $atts));



$output .= '<div class="'.$el_class.' '.$visibility.' ">';
	if(get_field('acfmslaw_semester_list', 'option')):
		while(has_sub_field('acfmslaw_semester_list', 'option')):
			if( get_sub_field('acfmslaw_display_in_schedule_time_outline_') ):
				$output .= '<div class="semester">';
					$semester = get_sub_field('acfmslaw_schedule_time_outline_title');
					$output .= '<h2 class="text-center">'. $semester .'</h2>';
					if( get_sub_field('acfmslaw_time_outline_dates') ):
						$output .= '<div class="schedule_list">';
						while ( has_sub_field('acfmslaw_time_outline_dates') ) {
							$attendance = get_sub_field('acfmslaw_time_outline_date');
							$output .= '<p class="text-center">' . $attendance . '</p>';
						}
						$output .= '</div>';
					endif;
				$output .= '</div>';
			endif;
		endwhile;
	endif;
$output .= '</div>';

echo $output;