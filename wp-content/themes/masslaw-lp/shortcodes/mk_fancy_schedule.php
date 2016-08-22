<?php
$output = $el_class = '';
extract(shortcode_atts(array(
	'visibility' => '',
    'el_class' => '',
), $atts));


$output = '';
$output .= '<div class="'.$el_class.' '.$visibility.' ">'
	if(get_field('mslaw_schedule_list', 'option')):
		while(has_sub_field('mslaw_schedule_list', 'option')):
			$output .= '<div class="semester">'
				$semester = get_sub_field('mslaw_schedule_list_semester');
				$output .= '<h2 >'. $semester .'</h2>';
				if( get_sub_field('mslaw_schedule_dates_list') ):
					$output .= '<div class="schedule_list">'
					while ( has_sub_field('mslaw_schedule_dates_list') ) {
						$attendance = get_sub_field('mslaw_schedule_date');
						$output .= '<p >' . $attendance . '</p>';
					}
					$output .= '</div>';
				endif;
			$output .= '</div>';
		endwhile;
	endif;
$output .= '</div>';

echo $output;