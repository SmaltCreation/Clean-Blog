<?php

function cleanblog_theme_customizer($wp_customize) {
	$wp_customize->add_section('cleanblog_header_section', array(
		'title'       => __('Header', 'cleanblog'),
		'priority'    => 30,
		'description' => __('Header to replace the default one', 'cleanblog'),
	));

	$wp_customize->add_setting('cleanblog_header');

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'themeslug_logo',
			array(
				'label'    => __('Header', 'cleanblog'),
				'section'  => 'cleanblog_header_section',
				'settings' => 'cleanblog_header',
			)
		)
	);
}

add_action('customize_register', 'cleanblog_theme_customizer');
