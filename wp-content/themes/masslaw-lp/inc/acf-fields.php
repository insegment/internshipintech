<?php


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_schedule',
		'title' => 'Schedule',
		'fields' => array (
			array (
				'key' => 'field_57b717a94c478',
				'label' => 'Schedule list',
				'name' => 'mslaw_schedule_list',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_57b717b24c479',
						'label' => 'Semester',
						'name' => 'mslaw_schedule_list_semester',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57b718034c47a',
						'label' => 'Schedule Dates List',
						'name' => 'mslaw_schedule_dates_list',
						'type' => 'repeater',
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_57b718684c47b',
								'label' => 'Schedule Date',
								'name' => 'mslaw_schedule_date',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
						'row_min' => '',
						'row_limit' => '',
						'layout' => 'table',
						'button_label' => 'Add New Date',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add New Semester',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-general',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
