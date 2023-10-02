<?php

	function foodsy_customize_register__settings($wp_customize)
	{
		$foodsy_font_weights = array(
			'100' => '100',
			'200' => '200',
			'300' => '300',
			'400' => '400',
			'500' => '500',
			'600' => '600',
			'700' => '700',
			'800' => '800',
			'900' => '900'
		);
		
		
		$foodsy_setting_yes_no = array(
			'Yes' => esc_html__('Yes', 'foodsy'),
			'No'  => esc_html__('No', 'foodsy')
		);
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_link',
			array(
				'default'           => '#d84156',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_link',
				array(
					'label'    => esc_html__('Link Color', 'foodsy'),
					'section'  => 'foodsy_section_colors',
					'settings' => 'foodsy_setting_color_link'
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_link_hover',
			array(
				'default'           => '#c60035',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_link_hover',
				array(
					'label'    => esc_html__('Link Hover Color', 'foodsy'),
					'section'  => 'foodsy_section_colors',
					'settings' => 'foodsy_setting_color_link_hover'
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_headings_text',
			array(
				'default'           => '#222222',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_headings_text',
				array(
					'label'    => esc_html__('Headings Text Color', 'foodsy'),
					'section'  => 'foodsy_section_colors',
					'settings' => 'foodsy_setting_color_headings_text'
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_body_text',
			array(
				'default'           => '#444444',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_body_text',
				array(
					'label'    => esc_html__('Body Text Color', 'foodsy'),
					'section'  => 'foodsy_section_colors',
					'settings' => 'foodsy_setting_color_body_text'
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_body_bg',
			array(
				'default'           => '#ffffff',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_body_bg',
				array(
					'label'    => esc_html__('Body Background Color', 'foodsy'),
					'section'  => 'foodsy_section_colors',
					'settings' => 'foodsy_setting_color_body_bg'
				)
			)
		);
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_buttons__generic_buttons_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_buttons__generic_buttons_style',
								   array('label'    => esc_html__('Generic Buttons Style', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_buttons__generic_buttons_style',
										 'type'     => 'select',
										 'choices'  => array(""                => esc_html__('Line', 'foodsy'),
															 'is-underline'    => esc_html__('Underline', 'foodsy'),
															 'is-solid'        => esc_html__('Solid', 'foodsy'),
															 'is-solid-light'  => esc_html__('Solid Light', 'foodsy'),
															 'is-3d'           => esc_html__('3D', 'foodsy'),
															 'is-shadow'       => esc_html__('Shadow', 'foodsy'),
															 'is-shadow-light' => esc_html__('Shadow Light', 'foodsy'),
															 'is-paper'        => esc_html__('Paper', 'foodsy'),
															 'is-shift'        => esc_html__('Shift', 'foodsy'),
															 'is-circle'       => esc_html__('Circle', 'foodsy'),
															 'is-naked'        => esc_html__('Naked', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_buttons',
								   array('default'           => foodsy_default_fonts('buttons'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_buttons',
								   array('label'    => esc_html__('Buttons Font', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_font_buttons',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_buttons',
								   array('default'           => '12',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_buttons',
								   array('label'    => esc_html__('Buttons Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_font_size_buttons',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 300,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_buttons',
								   array('default'           => '500',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_buttons',
								   array('label'    => esc_html__('Buttons Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_font_weight_buttons',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_buttons',
								   array('default'           => '1',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_buttons',
								   array('label'    => esc_html__('Buttons Letter Spacing (px)', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_letter_spacing_buttons',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 50,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_buttons',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_buttons',
								   array('label'    => esc_html__('Buttons Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_text_transform_buttons',
										 'type'     => 'select',
										 'choices'  => array(""                     => esc_html__('Uppercase', 'foodsy'),
															 'is-buttons-lowercase' => esc_html__('None', 'foodsy'))));
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_primary_button',
			array(
				'default'           => '#222222',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_primary_button',
				array(
					'label'    => esc_html__('Primary Button Color', 'foodsy'),
					'section'  => 'foodsy_section_buttons',
					'settings' => 'foodsy_setting_color_primary_button'
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_primary_button_hover',
			array(
				'default'           => '#89a2c5',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_primary_button_hover',
				array(
					'label'    => esc_html__('Primary Button Hover Color', 'foodsy'),
					'section'  => 'foodsy_section_buttons',
					'settings' => 'foodsy_setting_color_primary_button_hover'
				)
			)
		);
		
		
		$wp_customize->add_setting('foodsy_setting_buttons__primary_button_border_radius',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_buttons__primary_button_border_radius',
								   array('label'    => esc_html__('Primary Button Border Radius (px)', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_buttons__primary_button_border_radius',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 100,
																'step' => 1)));
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_secondary_button',
			array(
				'default'           => '#f05365',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_secondary_button',
				array(
					'label'    => esc_html__('Secondary Button Color', 'foodsy'),
					'section'  => 'foodsy_section_buttons',
					'settings' => 'foodsy_setting_color_secondary_button'
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_secondary_button_hover',
			array(
				'default'           => '#8a797b',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_secondary_button_hover',
				array(
					'label'    => esc_html__('Secondary Button Hover Color', 'foodsy'),
					'section'  => 'foodsy_section_buttons',
					'settings' => 'foodsy_setting_color_secondary_button_hover'
				)
			)
		);
		
		
		$wp_customize->add_setting('foodsy_setting_buttons__secondary_button_border_radius',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_buttons__secondary_button_border_radius',
								   array('label'    => esc_html__('Secondary Button Border Radius (px)', 'foodsy'),
										 'section'  => 'foodsy_section_buttons',
										 'settings' => 'foodsy_setting_buttons__secondary_button_border_radius',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 100,
																'step' => 1)));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_image_logo',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
																  'foodsy_control_image_logo',
																  array('label'       => esc_html__('Image Logo', 'foodsy'),
																		'description' => esc_html__('Upload a logo or choose an image from your media library.', 'foodsy'),
																		'section'     => 'title_tagline',
																		'settings'    => 'foodsy_setting_image_logo',
																		'mime_type'   => 'image')));
		
		
		$wp_customize->add_setting('foodsy_setting_image_logo_negative',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
																  'foodsy_control_image_logo_negative',
																  array('label'       => esc_html__('Image Logo Negative', 'foodsy'),
																		'description' => esc_html__('Upload a logo or choose an image from your media library. Only needed when your header color is in contrast with your header transparent color.', 'foodsy'),
																		'section'     => 'title_tagline',
																		'settings'    => 'foodsy_setting_image_logo_negative',
																		'mime_type'   => 'image')));
		
		
		$wp_customize->add_setting('foodsy_setting_font_text_logo',
								   array('default'           => foodsy_default_fonts('text_logo'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_text_logo',
								   array('label'    => esc_html__('Text Logo Font', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_text_logo',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_text_logo',
								   array('default'           => '36',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_text_logo',
								   array('label'    => esc_html__('Text Logo Font Size (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_size_text_logo',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 300,
																'step' => 4)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_text_logo_sticky',
								   array('default'           => '28',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_text_logo_sticky',
								   array('label'    => esc_html__('Text Logo Sticky Font Size (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_size_text_logo_sticky',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 300,
																'step' => 4)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_text_logo_mobile',
								   array('default'           => '22',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_text_logo_mobile',
								   array('label'    => esc_html__('Text Logo Font Size Mobile (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_size_text_logo_mobile',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 300,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_text_logo',
								   array('default'           => '400',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_text_logo',
								   array('label'    => esc_html__('Text Logo Font Weight', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_weight_text_logo',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_text_logo',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_text_logo',
								   array('label'    => esc_html__('Text Logo Text Transform', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_text_transform_text_logo',
										 'type'     => 'select',
										 'choices'  => array(""                        => esc_html__('None', 'foodsy'),
															 'is-site-title-uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_tagline',
								   array('default'           => foodsy_default_fonts('tagline'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_tagline',
								   array('label'    => esc_html__('Tagline Font', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_tagline',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_tagline',
								   array('default'           => '12',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_tagline',
								   array('label'    => esc_html__('Tagline Font Size (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_size_tagline',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 300,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_tagline',
								   array('default'           => '400',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_tagline',
								   array('label'    => esc_html__('Tagline Font Weight', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_font_weight_tagline',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_tagline',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_tagline',
								   array('label'       => esc_html__('Tagline Letter Spacing (px)', 'foodsy'),
										 'section'     => 'title_tagline',
										 'settings'    => 'foodsy_setting_letter_spacing_tagline',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => -5,
																'max'  => 20,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_tagline',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_tagline',
								   array('label'    => esc_html__('Tagline Text Transform', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_text_transform_tagline',
										 'type'     => 'select',
										 'choices'  => array(""                     => esc_html__('None', 'foodsy'),
															 'is-tagline-uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_tagline_visibility',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_tagline_visibility',
								   array('label'    => esc_html__('Tagline Visibility', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_tagline_visibility',
										 'type'     => 'select',
										 'choices'  => array(""                  => esc_html__('Show', 'foodsy'),
															 'is-tagline-hidden' => esc_html__('Hide', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_height',
								   array('default'           => '36',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_height',
								   array('label'    => esc_html__('Image Logo Height (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_height',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 10,
																'max'  => 300,
																'step' => 2)));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_height_mobile',
								   array('default'           => '26',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_height_mobile',
								   array('label'    => esc_html__('Image Logo Height Mobile (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_height_mobile',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 10,
																'max'  => 300,
																'step' => 2)));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_height_sticky',
								   array('default'           => '30',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_height_sticky',
								   array('label'    => esc_html__('Image Logo Sticky Height (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_height_sticky',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 10,
																'max'  => 300,
																'step' => 2)));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_margin',
								   array('default'           => '50',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_margin',
								   array('label'    => esc_html__('Logo Margin (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_margin',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 500,
																'step' => 5)));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_margin_mobile',
								   array('default'           => '14',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_margin_mobile',
								   array('label'    => esc_html__('Logo Margin Mobile (px)', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_margin_mobile',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 500,
																'step' => 5)));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_container_width',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_container_width',
								   array('label'    => esc_html__('Logo Container Width', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_container_width',
										 'type'     => 'select',
										 'choices'  => array(""                       => esc_html__('Fixed', 'foodsy'),
															 'is-logo-container-full' => esc_html__('Full', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_logo_text',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_logo_text',
																  array('label'    => esc_html__('Logo Text Color', 'foodsy'),
																		'section'  => 'title_tagline',
																		'settings' => 'foodsy_setting_color_logo_text')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_logo_bg',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_logo_bg',
																  array('label'    => esc_html__('Logo Bg Color', 'foodsy'),
																		'section'  => 'title_tagline',
																		'settings' => 'foodsy_setting_color_logo_bg')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_logo_bg_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_logo_bg_gradient',
																  array('label'    => esc_html__('Logo Bg Gradient Color', 'foodsy'),
																		'section'  => 'title_tagline',
																		'settings' => 'foodsy_setting_color_logo_bg_gradient')));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_bg_stretch_left',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_bg_stretch_left',
								   array('label'       => esc_html__('Logo Bg Stretch Left', 'foodsy'),
										 'description' => esc_html__('Only available with header small layouts.', 'foodsy'),
										 'section'     => 'title_tagline',
										 'settings'    => 'foodsy_setting_logo_bg_stretch_left',
										 'type'        => 'select',
										 'choices'     => array(""                        => esc_html__('No', 'foodsy'),
															    'is-logo-bg-stretch-left' => esc_html__('Yes', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_padding',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_padding',
								   array('label'       => esc_html__('Logo Padding (px)', 'foodsy'),
										 'section'     => 'title_tagline',
										 'settings'    => 'foodsy_setting_logo_padding',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 500,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_border_radius',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_border_radius',
								   array('label'       => esc_html__('Logo Border Radius (px)', 'foodsy'),
										 'section'     => 'title_tagline',
										 'settings'    => 'foodsy_setting_logo_border_radius',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 100,
																'step' => 2)));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_behaviour',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_logo_behaviour',
								   array('label'    => esc_html__('Logo Behaviour', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_behaviour',
										 'type'     => 'select',
										 'choices'  => array(""                        => esc_html__('Default', 'foodsy'),
															 'is-logo-stick-with-menu' => esc_html__('Stick with Menu', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_logo_hover_effect',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_logo_hover_effect',
								   array('label'    => esc_html__('Logo Hover Effect', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_logo_hover_effect',
										 'type'     => 'select',
										 'choices'  => array(""                          => esc_html__('None', 'foodsy'),
															 'is-logo-hover-shine'       => esc_html__('Shine', 'foodsy'),
															 'is-logo-hover-zoom'        => esc_html__('Zoom', 'foodsy'),
															 'is-logo-hover-zoom-rotate' => esc_html__('Zoom Rotate', 'foodsy'),
															 'is-logo-hover-drop-shadow' => esc_html__('Drop Shadow', 'foodsy'),
															 'is-logo-hover-skew'        => esc_html__('Skew', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_before_logo_area_visibility',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_before_logo_area_visibility',
								   array('label'    => esc_html__('Before Logo Area Visibility', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_before_logo_area_visibility',
										 'type'     => 'select',
										 'choices'  => array(""                           => esc_html__('Show on desktop only', 'foodsy'),
															 'is-site-branding-left-show' => esc_html__('Show on any device', 'foodsy'),
															 'is-site-branding-left-hide' => esc_html__('Hide', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_after_logo_area_visibility',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_after_logo_area_visibility',
								   array('label'    => esc_html__('After Logo Area Visibility', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_after_logo_area_visibility',
										 'type'     => 'select',
										 'choices'  => array(""                            => esc_html__('Show on desktop only', 'foodsy'),
															 'is-site-branding-right-show' => esc_html__('Show on any device', 'foodsy'),
															 'is-site-branding-right-hide' => esc_html__('Hide', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_before_logo_area_items_align',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_before_logo_area_items_align',
								   array('label'    => esc_html__('Before Logo Area Items Align', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_before_logo_area_items_align',
										 'type'     => 'select',
										 'choices'  => array(""                                        => esc_html__('Center', 'foodsy'),
															 'is-site-branding-left-align-items-left'  => esc_html__('Left', 'foodsy'),
															 'is-site-branding-left-align-items-right' => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_after_logo_area_items_align',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_after_logo_area_items_align',
								   array('label'    => esc_html__('After Logo Area Items Align', 'foodsy'),
										 'section'  => 'title_tagline',
										 'settings' => 'foodsy_setting_after_logo_area_items_align',
										 'type'     => 'select',
										 'choices'  => array(""                                         => esc_html__('Center', 'foodsy'),
															 'is-site-branding-right-align-items-left'  => esc_html__('Left', 'foodsy'),
															 'is-site-branding-right-align-items-right' => esc_html__('Right', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_font_h1',
								   array('default'           => foodsy_default_fonts('h1'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_h1',
								   array('label'    => esc_html__('Heading Font (H1)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_h1',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_h1',
								   array('default'           => '66',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_h1',
								   array('label'    => esc_html__('Heading (H1) Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_size_h1',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_h1',
								   array('default'           => '400',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_h1',
								   array('label'    => esc_html__('Heading Font Weight (H1)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_weight_h1',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_h1',
								   array('default'           => 'none',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_h1',
								   array('label'    => esc_html__('Heading Font Text Transform (H1)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_text_transform_h1',
										 'type'     => 'select',
										 'choices'  => array('none'      => esc_html__('None', 'foodsy'),
															 'uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_h2_h6',
								   array('default'           => foodsy_default_fonts('h2_h6'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_h2_h6',
								   array('label'    => esc_html__('Sub Heading Font (H2-H6)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_h2_h6',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_h2_h6',
								   array('default'           => '500',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_h2_h6',
								   array('label'    => esc_html__('Sub Heading Font Weight (H2-H6)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_weight_h2_h6',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_h2_h6',
								   array('default'           => 'none',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_h2_h6',
								   array('label'    => esc_html__('Sub Heading Font Text Transform (H2-H6)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_text_transform_h2_h6',
										 'type'     => 'select',
										 'choices'  => array('none'      => esc_html__('None', 'foodsy'),
															 'uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_body',
								   array('default'           => foodsy_default_fonts('body'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_body',
								   array('label'    => esc_html__('Body Font', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_body',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_body',
								   array('default'           => '16',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_body',
								   array('label'    => esc_html__('Body Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_size_body',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_body_mobile',
								   array('default'           => '14',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_body_mobile',
								   array('label'    => esc_html__('Body Font Size Mobile (px)', 'foodsy'),
										 'section'  => 'foodsy_section_fonts',
										 'settings' => 'foodsy_setting_font_size_body_mobile',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_body_line_height',
								   array('default'           => '1.7',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_body_line_height',
								   array('label'       => esc_html__('Body Line Height', 'foodsy'),
										 'section'     => 'foodsy_section_fonts',
										 'settings'    => 'foodsy_setting_body_line_height',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 1,
																'max'  => 3,
																'step' => 0.1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_styles',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_styles',
								   array('label'       => esc_html__('Include All Font Weights (100-900)', 'foodsy'),
										 'description' => esc_html__('Bold/italic styles.', 'foodsy'),
										 'section'     => 'foodsy_section_fonts',
										 'settings'    => 'foodsy_setting_font_styles',
										 'type'        => 'select',
										 'choices'     => array('No'  => esc_html__('No', 'foodsy'),
																'Yes' => esc_html__('Yes', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_char_sets_latin',
								   array('default'   		 => 1,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_char_sets_latin',
								   array('label'    => esc_html__('Latin Characters', 'foodsy'),
										 'section'  => 'foodsy_section_chars',
										 'settings' => 'foodsy_setting_font_char_sets_latin',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_font_char_sets_latin_ext',
								   array('default'   		 => 0,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_char_sets_latin_ext',
								   array('label'    => esc_html__('Latin Characters (extended)', 'foodsy'),
										 'section'  => 'foodsy_section_chars',
										 'settings' => 'foodsy_setting_font_char_sets_latin_ext',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_font_char_sets_cyrillic',
								   array('default'   	     => 0,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_char_sets_cyrillic',
								   array('label'    => esc_html__('Cyrillic Characters', 'foodsy'),
										 'section'  => 'foodsy_section_chars',
										 'settings' => 'foodsy_setting_font_char_sets_cyrillic',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_font_char_sets_cyrillic_ext',
								   array('default'      	 => 0,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_char_sets_cyrillic_ext',
								   array('label'    => esc_html__('Cyrillic Characters (extended)', 'foodsy'),
										 'section'  => 'foodsy_section_chars',
										 'settings' => 'foodsy_setting_font_char_sets_cyrillic_ext',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_font_char_sets_greek',
								   array('default'   		 => 0,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_char_sets_greek',
								   array('label'    => esc_html__('Greek Characters', 'foodsy'),
										 'section'  => 'foodsy_section_chars',
										 'settings' => 'foodsy_setting_font_char_sets_greek',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_font_char_sets_greek_ext',
								   array('default'   		 => 0,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_char_sets_greek_ext',
								   array('label'    => esc_html__('Greek Characters (extended)', 'foodsy'),
										 'section'  => 'foodsy_section_chars',
										 'settings' => 'foodsy_setting_font_char_sets_greek_ext',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_font_char_sets_vietnamese',
								   array('default'   		 => 0,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_char_sets_vietnamese',
								   array('label'    => esc_html__('Vietnamese Characters', 'foodsy'),
										 'section'  => 'foodsy_section_chars',
										 'settings' => 'foodsy_setting_font_char_sets_vietnamese',
										 'type'     => 'checkbox'));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_body_layout',
								   array('default'           => 'is-body-full-width',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_body_layout',
								   array('label'    => esc_html__('Body Layout', 'foodsy'),
										 'section'  => 'foodsy_section_layout',
										 'settings' => 'foodsy_setting_body_layout',
										 'type'     => 'select',
										 'choices'  => array('is-body-full-width' => esc_html__('Full-width', 'foodsy'),
															 'is-body-boxed' 	  => esc_html__('Boxed', 'foodsy'),
															 'is-middle-boxed' 	  => esc_html__('Middle Boxed', 'foodsy'),
															 'is-posts-boxed' 	  => esc_html__('Posts Boxed', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_body_top_bottom_margin',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_body_top_bottom_margin',
								   array('label'       => esc_html__('Body Top-Bottom Margin', 'foodsy'),
										 'section'     => 'foodsy_section_layout',
										 'settings'    => 'foodsy_setting_body_top_bottom_margin',
										 'type'        => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 400,
																'step' => 20)));
		
		
		$wp_customize->add_setting('foodsy_setting_content_width',
								   array('default'           => '1180',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_content_width',
								   array('label'       => esc_html__('Content Width (px)', 'foodsy'),
										 'section'     => 'foodsy_section_layout',
										 'settings'    => 'foodsy_setting_content_width',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 500,
																'max'  => 5000,
																'step' => 10)));
		
		
		$wp_customize->add_setting('foodsy_setting_page_post_content_width',
								   array('default'           => '800',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_page_post_content_width',
								   array('label'       => esc_html__('Page/Post Content Width (px)', 'foodsy'),
										 'section'     => 'foodsy_section_layout',
										 'settings'    => 'foodsy_setting_page_post_content_width',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 320,
																'max'  => 2000,
																'step' => 10)));
		
		
		$wp_customize->add_setting('foodsy_setting_mobile_zoom',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_mobile_zoom',
								   array('label'    => esc_html__('Mobile Zoom', 'foodsy'),
										 'section'  => 'foodsy_section_layout',
										 'settings' => 'foodsy_setting_mobile_zoom',
										 'type'     => 'select',
										 'choices'  => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_smooth_scroll',
								   array('default'           => 'no',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_smooth_scroll',
								   array('label'    => esc_html__('Smooth Scroll', 'foodsy'),
										 'section'  => 'foodsy_section_layout',
										 'settings' => 'foodsy_setting_smooth_scroll',
										 'type'     => 'select',
										 'choices'  => array('no'  => esc_html__('No', 'foodsy'),
															 'yes' => esc_html__('Yes', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_header_layout',
								   array('default'           => 'is-header-small',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_header_layout',
								   array('label'    => esc_html__('Header Layout', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_layout',
										 'type'     => 'select',
										 'choices'  => array('is-menu-top is-menu-bar'                            => esc_html__('Menu Top', 'foodsy'),
															 'is-menu-top is-menu-bar is-logo-overflow'           => esc_html__('Menu Top Logo Overflow', 'foodsy'),
															 'is-menu-bottom is-menu-bar'                         => esc_html__('Menu Bottom', 'foodsy'),
															 'is-menu-bottom is-menu-bar is-menu-bottom-overflow' => esc_html__('Menu Bottom Overflow', 'foodsy'),
															 'is-header-row'                                      => esc_html__('Header One Row', 'foodsy'),
															 'is-header-small'                                    => esc_html__('Header Small', 'foodsy'),
															 'is-header-small is-header-logo-center'              => esc_html__('Header Small Logo Center', 'foodsy'),
															 'is-header-vertical is-header-vertical-left'         => esc_html__('Header Vertical Left', 'foodsy'),
															 'is-header-vertical is-header-vertical-right'        => esc_html__('Header Vertical Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_width',
								   array('default'           => 'is-header-full-width',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_width',
								   array('label'    => esc_html__('Header Width', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_width',
										 'type'     => 'select',
										 'choices'  => array('is-header-full-width'        => esc_html__('Full', 'foodsy'),
															 'is-header-fixed-width'       => esc_html__('Fixed', 'foodsy'),
															 'is-header-full-with-margins' => esc_html__('Full with Margins', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_padding',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_padding',
								   array('label'    => esc_html__('Header Padding', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_padding',
										 'type'     => 'select',
										 'choices'  => array(""                        => esc_html__('Left and Right', 'foodsy'),
															 'is-header-padding-left'  => esc_html__('Left Only', 'foodsy'),
															 'is-header-padding-right' => esc_html__('Right Only', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_bg_img',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,
																  'foodsy_control_header_bg_img',
																  array('label'       => esc_html__('Header Background Image', 'foodsy'),
																		'description' => esc_html__('Upload an image or choose from your media library.', 'foodsy'),
																		'section'     => 'foodsy_section_header_general',
																		'settings'    => 'foodsy_setting_header_bg_img')));
		
		
		$wp_customize->add_setting('foodsy_setting_header_parallax_effect',
								   array('default'           => 'is-header-parallax-no',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_header_parallax_effect',
								   array('label'    => esc_html__('Header Parallax Effect', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_parallax_effect',
										 'type'     => 'select',
										 'choices'  => array('is-header-parallax-no' => esc_html__('No', 'foodsy'),
															 'is-header-parallax' 	 => esc_html__('Yes', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_shadow',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_shadow',
								   array('label'    => esc_html__('Header Shadow', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_shadow',
										 'type'     => 'select',
										 'choices'  => array(''                              => esc_html__('None', 'foodsy'),
															 'is-header-shadow-soft'         => esc_html__('Soft', 'foodsy'),
															 'is-header-shadow-soft-short'   => esc_html__('Soft Short', 'foodsy'),
															 'is-header-shadow-soft-shorter' => esc_html__('Soft Shorter', 'foodsy'),
															 'is-header-shadow-soft-long'    => esc_html__('Soft Long', 'foodsy'),
															 'is-header-shadow-offset'       => esc_html__('Offset', 'foodsy'),
															 'is-header-shadow-sides'        => esc_html__('Sides', 'foodsy'),
															 'is-header-shadow-layers'       => esc_html__('Layers', 'foodsy'),
															 'is-header-shadow-inset'        => esc_html__('Inset', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_sticky_shadow',
								   array('default'           => 'is-header-sticky-shadow-soft-short',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_sticky_shadow',
								   array('label'    => esc_html__('Header Sticky Shadow', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_sticky_shadow',
										 'type'     => 'select',
										 'choices'  => array(''                                     => esc_html__('Inherit', 'foodsy'),
															 'is-header-sticky-shadow-soft'         => esc_html__('Soft', 'foodsy'),
															 'is-header-sticky-shadow-soft-short'   => esc_html__('Soft Short', 'foodsy'),
															 'is-header-sticky-shadow-soft-shorter' => esc_html__('Soft Shorter', 'foodsy'),
															 'is-header-sticky-shadow-soft-long'    => esc_html__('Soft Long', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_inner_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_inner_style',
								   array('label'    => esc_html__('Header Inner Style', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_inner_style',
										 'type'     => 'select',
										 'choices'  => array(''                                                        => esc_html__('Minimal', 'foodsy'),
															 'is-header-inline-borders'                                => esc_html__('Inline Borders', 'foodsy'),
															 'is-header-inline-borders is-header-inline-borders-light' => esc_html__('Inline Borders Light', 'foodsy'),
															 'is-header-inline-borders is-header-inline-borders-bold'  => esc_html__('Inline Borders Bold', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_transparent_style',
								   array('default'           => 'is-header-border-fixed',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_transparent_style',
								   array('label'    => esc_html__('Header Transparent Style', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_transparent_style',
										 'type'     => 'select',
										 'choices'  => array(''                                    => esc_html__('Minimal', 'foodsy'),
															 'is-header-transparent-border-bottom' => esc_html__('Border Bottom', 'foodsy'),
															 'is-header-border-fixed'              => esc_html__('Border Bottom Fixed', 'foodsy'),
															 'is-header-transparent-border-all'    => esc_html__('Border All', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_bg_blur',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_bg_blur',
								   array('label'       => esc_html__('Header Bg Blur (Experimental)', 'foodsy'),
										 'description' => esc_html__('Incompatible with header smart sticky.', 'foodsy'),
										 'section'     => 'foodsy_section_header_general',
										 'settings'    => 'foodsy_setting_header_bg_blur',
										 'type'        => 'select',
										 'choices'     => array(''                           => esc_html__('None', 'foodsy'),
																'is-header-bg-blur-slightly' => esc_html__('Slightly', 'foodsy'),
																'is-header-bg-blur-medium'   => esc_html__('Medium', 'foodsy'),
																'is-header-bg-blur-more'     => esc_html__('More', 'foodsy'),
																'is-header-bg-blur-intense'  => esc_html__('Intense', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_bg_video',
								   array('default' 			 => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_header_bg_video',
								   array('label'       => esc_html__('Header Background Video', 'foodsy'),
										 'description' => esc_html__('YouTube, Vimeo page url.', 'foodsy'),
										 'section'     => 'foodsy_section_header_general',
										 'settings'    => 'foodsy_setting_header_bg_video',
										 'type'        => 'text'));
		
		
		$wp_customize->add_setting('foodsy_setting_header_mask_style',
								   array('default'           => 'horizontal',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_mask_style',
								   array('label'    => esc_html__('Header Mask Style', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_mask_style',
										 'type'     => 'select',
										 'choices'  => array('horizontal' => esc_html__('Horizontal Gradient', 'foodsy'),
															 'vertical'   => esc_html__('Vertical Gradient', 'foodsy'),
															 'radial' 	  => esc_html__('Radial Gradient', 'foodsy'),
															 'solid'      => esc_html__('Solid Color', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_header_mask_1',
								   array('default'           => '#2f00a2',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_header_mask_1',
																  array('label'    => esc_html__('Header Mask Color 1', 'foodsy'),
																		'section'  => 'foodsy_section_header_general',
																		'settings' => 'foodsy_setting_color_header_mask_1')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_header_mask_2',
								   array('default'           => '#cc8b47',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_header_mask_2',
																  array('label'    => esc_html__('Header Mask Color 2', 'foodsy'),
																		'section'  => 'foodsy_section_header_general',
																		'settings' => 'foodsy_setting_color_header_mask_2')));
		
		
		$wp_customize->add_setting('foodsy_setting_header_mask_opacity',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_mask_opacity',
								   array('label'       => esc_html__('Header Mask Opacity', 'foodsy'),
										 'section'     => 'foodsy_section_header_general',
										 'settings'    => 'foodsy_setting_header_mask_opacity',
										 'type'        => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 1,
																'step' => 0.05)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_half_transparent_bg_opacity',
								   array('default'           => '0.6',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_half_transparent_bg_opacity',
								   array('label'       => esc_html__('Header Half Transparent Bg Opacity', 'foodsy'),
										 'section'     => 'foodsy_section_header_general',
										 'settings'    => 'foodsy_setting_header_half_transparent_bg_opacity',
										 'type'        => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 1,
																'step' => 0.05)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_text_color',
								   array('default'           => 'is-header-light',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_text_color',
								   array('label'    => esc_html__('Header Text Color', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_text_color',
										 'type'     => 'select',
										 'choices'  => array('is-header-light' => esc_html__('Dark', 'foodsy'),
															 'is-header-dark'  => esc_html__('Light', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_header_text_custom',
								   array('default'           => '#222222',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_header_text_custom',
																  array('label'    => esc_html__('Header Text Custom Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_general',
																		'settings' => 'foodsy_setting_color_header_text_custom')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_header_border',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_header_border',
																  array('label'    => esc_html__('Header Border Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_general',
																		'settings' => 'foodsy_setting_color_header_border')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_header_border_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_header_border_gradient',
																  array('label'    => esc_html__('Header Border Gradient Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_general',
																		'settings' => 'foodsy_setting_color_header_border_gradient')));
		
		
		$wp_customize->add_setting('foodsy_setting_header_border_opacity',
								   array('default'           => '0.08',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_border_opacity',
								   array('label'    => esc_html__('Header Border Opacity', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_border_opacity',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 1,
																'step' => 0.04)));
		
		
		$wp_customize->add_setting('foodsy_setting_color_header_bg',
								   array('default'           => '#ffffff',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_header_bg',
																  array('label'    => esc_html__('Header Background Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_general',
																		'settings' => 'foodsy_setting_color_header_bg')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_header_background_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_header_background_gradient',
																  array('label'    => esc_html__('Header Background Gradient Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_general',
																		'settings' => 'foodsy_setting_color_header_background_gradient')));
		
		
		$wp_customize->add_setting('foodsy_setting_header_search',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_header_search',
								   array('label'    => esc_html__('Header Search', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_search',
										 'type'     => 'select',
										 'choices'  => array(""                          => esc_html__('Yes', 'foodsy'),
										                     'is-header-search-disabled' => esc_html__('No', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_row_padding',
								   array('default'           => '12',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_row_padding',
								   array('label'    => esc_html__('Header Row Padding (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_row_padding',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 500,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_vertical_width',
								   array('default'           => '260',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_vertical_width',
								   array('label'    => esc_html__('Header Vertical Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_vertical_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 100,
																'max'  => 600,
																'step' => 10)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_bg_shape',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_header_bg_shape',
								   array('label'    => esc_html__('Header Bg Shape', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_bg_shape',
										 'type'     => 'select',
										 'choices'  => array(""                => esc_html__('None', 'foodsy'),
															 'round'           => esc_html__('Round', 'foodsy'),
															 'round_layers'    => esc_html__('Round Layers', 'foodsy'),
															 'curtain'         => esc_html__('Curtain', 'foodsy'),
															 'chevron'         => esc_html__('Chevron', 'foodsy'),
															 'cut_left'        => esc_html__('Cut Left', 'foodsy'),
															 'cut_left_round'  => esc_html__('Cut Left Round', 'foodsy'),
															 'cut_right'       => esc_html__('Cut Right', 'foodsy'),
															 'cut_right_round' => esc_html__('Cut Right Round', 'foodsy'),
															 'wave_1'          => esc_html__('Wave 1', 'foodsy'),
															 'wave_2'          => esc_html__('Wave 2', 'foodsy'),
															 'wave_3'          => esc_html__('Wave 3', 'foodsy'),
															 'ribbon'          => esc_html__('Ribbon', 'foodsy'),
															 'ribbon_round'    => esc_html__('Ribbon Round', 'foodsy'),
															 'lines'           => esc_html__('Lines', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_bg_shape_height',
								   array('default'           => '30',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_bg_shape_height',
								   array('label'    => esc_html__('Header Bg Shape Height (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_bg_shape_height',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 100,
																'step' => 5)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_border_top_width',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_border_top_width',
								   array('label'    => esc_html__('Header Border Top Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_border_top_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_border_bottom_width',
								   array('default'           => '1',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_border_bottom_width',
								   array('label'    => esc_html__('Header Border Bottom Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_border_bottom_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_border_left_width',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_border_left_width',
								   array('label'    => esc_html__('Header Border Left Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_border_left_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_border_right_width',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_border_right_width',
								   array('label'    => esc_html__('Header Border Right Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_border_right_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_border_top_radius',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_border_top_radius',
								   array('label'    => esc_html__('Header Border Top Radius (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_border_top_radius',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 200,
																'step' => 2)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_border_bottom_radius',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_border_bottom_radius',
								   array('label'    => esc_html__('Header Border Bottom Radius (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_general',
										 'settings' => 'foodsy_setting_header_border_bottom_radius',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 200,
																'step' => 2)));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_menu_behaviour',
								   array('default'       	 => 'is-menu-sticky',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_menu_behaviour',
								   array('label'    => esc_html__('Menu Behaviour', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_behaviour',
										 'type'     => 'select',
										 'choices'  => array('is-menu-sticky' 					   => esc_html__('Sticky', 'foodsy'),
														     'is-menu-sticky is-menu-smart-sticky' => esc_html__('Smart Sticky', 'foodsy'),
														     'is-menu-static' 					   => esc_html__('Static', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_width',
								   array('default'       	 => 'is-menu-fixed-width',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_menu_width',
								   array('label'    => esc_html__('Menu Width', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_width',
										 'type'     => 'select',
										 'choices'  => array('is-menu-fixed-width' => esc_html__('Fixed', 'foodsy'),
														     'is-menu-fixed-bg'    => esc_html__('Fixed Bg', 'foodsy'),
														     'is-menu-full'        => esc_html__('Full', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_height',
								   array('default'           => '64',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_menu_height',
								   array('label'    => esc_html__('Menu Height (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_height',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 10,
																'max'  => 200,
																'step' => 5)));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_sticky_height',
								   array('default'           => '64',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_menu_sticky_height',
								   array('label'    => esc_html__('Menu Sticky Height (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_sticky_height',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 10,
																'max'  => 200,
																'step' => 5)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_align',
								   array('default'           => 'is-menu-align-right',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_align',
								   array('label'    => esc_html__('Menu Align', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_align',
										 'type'     => 'select',
										 'choices'  => array('is-menu-align-center' => esc_html__('Center', 'foodsy'),
															 'is-menu-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-menu-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_shadow',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_shadow',
								   array('label'    => esc_html__('Menu Shadow', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_shadow',
										 'type'     => 'select',
										 'choices'  => array(''                            => esc_html__('None', 'foodsy'),
															 'is-menu-shadow-soft'         => esc_html__('Soft', 'foodsy'),
															 'is-menu-shadow-soft-short'   => esc_html__('Soft Short', 'foodsy'),
															 'is-menu-shadow-soft-shorter' => esc_html__('Soft Shorter', 'foodsy'),
															 'is-menu-shadow-soft-long'    => esc_html__('Soft Long', 'foodsy'),
															 'is-menu-shadow-offset'       => esc_html__('Offset', 'foodsy'),
															 'is-menu-shadow-sides'        => esc_html__('Sides', 'foodsy'),
															 'is-menu-shadow-layers'       => esc_html__('Layers', 'foodsy'),
															 'is-menu-shadow-inset'        => esc_html__('Inset', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_sticky_shadow',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_sticky_shadow',
								   array('label'    => esc_html__('Menu Sticky Shadow', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_sticky_shadow',
										 'type'     => 'select',
										 'choices'  => array(''                                   => esc_html__('Inherit', 'foodsy'),
															 'is-menu-sticky-shadow-soft'         => esc_html__('Soft', 'foodsy'),
															 'is-menu-sticky-shadow-soft-short'   => esc_html__('Soft Short', 'foodsy'),
															 'is-menu-sticky-shadow-soft-shorter' => esc_html__('Soft Shorter', 'foodsy'),
															 'is-menu-sticky-shadow-soft-long'    => esc_html__('Soft Long', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_menu',
								   array('default'           => foodsy_default_fonts('menu'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_menu',
								   array('label'       => esc_html__('Menu Font', 'foodsy'),
										 'description' => "",
										 'section'     => 'foodsy_section_header_menu',
										 'settings'    => 'foodsy_setting_font_menu',
										 'type'        => 'select',
										 'choices'     => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_nav_menu',
								   array('default'           => '16',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_nav_menu',
								   array('label'    => esc_html__('Menu Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_font_size_nav_menu',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_nav_menu',
								   array('default'           => '400',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_nav_menu',
								   array('label'    => esc_html__('Menu Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_font_weight_nav_menu',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_nav_menu',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_nav_menu',
								   array('label'    => esc_html__('Menu Letter Spacing (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_letter_spacing_nav_menu',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -5,
																'max'  => 20,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_text_transform',
								   array('default'           => 'is-menu-none-uppercase',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_text_transform',
								   array('label'    => esc_html__('Menu Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_text_transform',
										 'type'     => 'select',
										 'choices'  => array('is-menu-uppercase'      => esc_html__('Uppercase', 'foodsy'),
															 'is-menu-none-uppercase' => esc_html__('None', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_border_top_width',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_border_top_width',
								   array('label'    => esc_html__('Menu Border Top Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_border_top_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_border_bottom_width',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_border_bottom_width',
								   array('label'    => esc_html__('Menu Border Bottom Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_border_bottom_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_border_left_width',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_border_left_width',
								   array('label'    => esc_html__('Menu Border Left Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_border_left_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_border_right_width',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_border_right_width',
								   array('label'    => esc_html__('Menu Border Right Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_border_right_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -30,
																'max'  => 30,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_border_top_radius',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_border_top_radius',
								   array('label'    => esc_html__('Menu Border Top Radius (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_border_top_radius',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 200,
																'step' => 2)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_border_bottom_radius',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_border_bottom_radius',
								   array('label'    => esc_html__('Menu Border Bottom Radius (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_border_bottom_radius',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 200,
																'step' => 2)));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_links_borders',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_links_borders',
								   array('label'    => esc_html__('Menu Links Borders', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_links_borders',
										 'type'     => 'select',
										 'choices'  => array(''                                                     => esc_html__('None', 'foodsy'),
															 'is-menu-inline-borders'                               => esc_html__('Side', 'foodsy'),
															 'is-menu-inline-borders is-menu-inline-borders-top'    => esc_html__('Side and Top', 'foodsy'),
															 'is-menu-inline-borders is-menu-inline-borders-bottom' => esc_html__('Side and Bottom', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_links_borders_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_links_borders_style',
								   array('label'    => esc_html__('Menu Links Borders Style', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_links_borders_style',
										 'type'     => 'select',
										 'choices'  => array(''                             => esc_html__('Thin', 'foodsy'),
															 'is-menu-inline-borders-bold'  => esc_html__('Bold', 'foodsy'),
															 'is-menu-inline-borders-light' => esc_html__('Light', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_link_hover_style',
								   array('default'           => 'is-menu-hover-badge is-menu-hover-badge-round',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_link_hover_style',
								   array('label'    => esc_html__('Menu Link Hover Style', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_link_hover_style',
										 'type'     => 'select',
										 'choices'  => array(""                                                                               => esc_html__('Legacy', 'foodsy'),
															 'is-menu-hover-underline'                                                        => esc_html__('Underline', 'foodsy'),
															 'is-menu-hover-underline is-menu-hover-underline-bold'                           => esc_html__('Underline Bold', 'foodsy'),
															 'is-menu-hover-overline'                                                         => esc_html__('Overline', 'foodsy'),
															 'is-menu-hover-badge'                                                            => esc_html__('Badge', 'foodsy'),
															 'is-menu-hover-badge is-menu-hover-badge-horizontal'                             => esc_html__('Badge Horizontal', 'foodsy'),
															 'is-menu-hover-badge is-menu-hover-badge-center'                                 => esc_html__('Badge Center', 'foodsy'),
															 'is-menu-hover-badge is-menu-hover-badge-round'                                  => esc_html__('Badge Round', 'foodsy'),
															 'is-menu-hover-solid'                                                            => esc_html__('Solid', 'foodsy'),
															 'is-menu-hover-solid-horizontal is-menu-hover-solid'                             => esc_html__('Solid Horizontal', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-skew'                                         => esc_html__('Solid Skew', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-skew is-menu-hover-solid-horizontal'          => esc_html__('Solid Skew Horizontal', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow'                                     => esc_html__('Solid Overflow', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-arrow'                 => esc_html__('Solid Arrow', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-arrow-left'            => esc_html__('Solid Arrow Left', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-arrow-right'           => esc_html__('Solid Arrow Right', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-cut-left'              => esc_html__('Solid Cut Left', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-cut-right'             => esc_html__('Solid Cut Right', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-chat-box'              => esc_html__('Solid Chat Box', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-ribbon'                => esc_html__('Ribbon', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-chevron'               => esc_html__('Chevron', 'foodsy'),
															 'is-menu-hover-solid is-menu-hover-overflow is-menu-hover-paper-tear'            => esc_html__('Paper Tear', 'foodsy'),
															 'is-menu-hover-borders'                                                          => esc_html__('Borders', 'foodsy'),
															 'is-menu-hover-borders is-menu-hover-borders-bold'                               => esc_html__('Borders Bold', 'foodsy'),
															 'is-menu-hover-borders is-menu-hover-borders-round'                              => esc_html__('Borders Round', 'foodsy'),
															 'is-menu-hover-borders is-menu-hover-borders-round is-menu-hover-borders-bold'   => esc_html__('Borders Round Bold', 'foodsy'),
															 'is-menu-hover-border-top'                                                       => esc_html__('Border Top', 'foodsy'),
															 'is-menu-hover-border-bottom'                                                    => esc_html__('Border Bottom', 'foodsy'),
															 'is-menu-hover-marker'                                                           => esc_html__('Marker', 'foodsy'),
															 'is-menu-hover-marker is-menu-hover-marker-bold'                                 => esc_html__('Marker Bold', 'foodsy'),
															 'is-menu-hover-marker is-menu-hover-marker-horizontal'                           => esc_html__('Marker Horizontal', 'foodsy'),
															 'is-menu-hover-marker is-menu-hover-marker-horizontal is-menu-hover-marker-bold' => esc_html__('Marker Horizontal Bold', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_menu_style',
								   array('default'           => 'is-menu-light',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_menu_style',
								   array('label'    => esc_html__('Menu Text Color', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_menu_style',
										 'type'     => 'select',
										 'choices'  => array('is-menu-light' => esc_html__('Dark', 'foodsy'),
															 'is-menu-dark'  => esc_html__('Light', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_menu_active_link_text',
								   array('default'           => '#ffffff',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_active_link_text',
																  array('label'    => esc_html__('Menu Active Link Text Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_active_link_text')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_menu_active_link_bg_border',
								   array('default'           => '#b5a67b',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_active_link_bg_border',
																  array('label'    => esc_html__('Menu Active Link Bg-Border Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_active_link_bg_border')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_menu_link_hover_text',
								   array('default'           => '#ffffff',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_link_hover_text',
																  array('label'    => esc_html__('Menu Link Hover Text Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_link_hover_text')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_menu_link_hover_bg_border',
								   array('default'           => '#b5a67b',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_link_hover_bg_border',
																  array('label'    => esc_html__('Menu Link Hover Bg-Border Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_link_hover_bg_border')));
		
		$wp_customize->add_setting('foodsy_setting_color_menu_bg',
								   array('default'           => '#ffffff',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_bg',
																  array('label'    => esc_html__('Menu Background Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_bg')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_menu_background_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_background_gradient',
																  array('label'    => esc_html__('Menu Background Gradient Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_background_gradient')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_menu_border',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_border',
																  array('label'    => esc_html__('Menu Border Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_border')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_menu_border_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_menu_border_gradient',
																  array('label'    => esc_html__('Menu Border Gradient Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_menu',
																		'settings' => 'foodsy_setting_color_menu_border_gradient')));
		
		
		$wp_customize->add_setting('foodsy_setting_menu_border_opacity',
								   array('default'           => '1',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_menu_border_opacity',
								   array('label'    => esc_html__('Menu Border Opacity', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_menu_border_opacity',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 1,
																'step' => 0.04)));
		
		
		$wp_customize->add_setting('foodsy_setting_header_sub_menu_style',
								   array('default'           => 'is-submenu-light',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_sub_menu_style',
								   array('label'    => esc_html__('Sub Menu Style', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_sub_menu_style',
										 'type'     => 'select',
										 'choices'  => array('is-submenu-light'        => esc_html__('Light', 'foodsy'),
															 'is-submenu-light-border' => esc_html__('Light Border', 'foodsy'),
															 'is-submenu-dark'         => esc_html__('Dark', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_sub_menu_align',
								   array('default'           => 'is-submenu-align-left',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_sub_menu_align',
								   array('label'    => esc_html__('Sub Menu Align', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_sub_menu_align',
										 'type'     => 'select',
										 'choices'  => array('is-submenu-align-center' => esc_html__('Center', 'foodsy'),
															 'is-submenu-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-submenu-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_sub_menu_animation',
								   array('default'           => 'is-sub-menu-ani-fade-in-up',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_sub_menu_animation',
								   array('label'    => esc_html__('Sub Menu Animation', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_sub_menu_animation',
										 'type'     => 'select',
										 'choices'  => array(""                              => esc_html__('Fade In', 'foodsy'),
															 'is-sub-menu-ani-fade-in-left'  => esc_html__('Fade In Left', 'foodsy'),
															 'is-sub-menu-ani-fade-in-right' => esc_html__('Fade In Right', 'foodsy'),
															 'is-sub-menu-ani-fade-in-up'    => esc_html__('Fade In Up', 'foodsy'),
															 'is-sub-menu-ani-fade-in-down'  => esc_html__('Fade In Down', 'foodsy'),
															 'is-sub-menu-ani-zoom-in'       => esc_html__('Zoom In', 'foodsy'),
															 'is-sub-menu-ani-blur-in'       => esc_html__('Blur In', 'foodsy'),
															 'is-sub-menu-ani-blur-in-left'  => esc_html__('Blur In Left', 'foodsy'),
															 'is-sub-menu-ani-blur-in-right' => esc_html__('Blur In Right', 'foodsy'),
															 'is-sub-menu-ani-blur-in-up'    => esc_html__('Blur In Up', 'foodsy'),
															 'is-sub-menu-ani-blur-in-down'  => esc_html__('Blur In Down', 'foodsy'),
															 'is-sub-menu-ani-slide-down'    => esc_html__('Slide Down', 'foodsy'),
															 'is-sub-menu-ani-flip-in'       => esc_html__('Flip In', 'foodsy'),
															 'is-sub-menu-ani-flip-in-half'  => esc_html__('Flip In Half', 'foodsy'),
															 'is-sub-menu-ani-rotate-in'     => esc_html__('Rotate In', 'foodsy'),
															 'is-sub-menu-ani-fly-in'        => esc_html__('Fly In', 'foodsy'),
															 'is-sub-menu-ani-tilt-in'       => esc_html__('Tilt In', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_sub_menu_animation_duration',
								   array('default'           => '0.15',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_sub_menu_animation_duration',
								   array('label'    => esc_html__('Sub Menu Animation Duration', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_header_sub_menu_animation_duration',
										 'type'     => 'range',
										 'input_attrs' => array('min'  => 0.05,
																'max'  => 1,
																'step' => 0.05)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_nav_sub_menu',
								   array('default'           => '15',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_nav_sub_menu',
								   array('label'    => esc_html__('Sub Menu Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_font_size_nav_sub_menu',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_nav_sub_menu',
								   array('default'           => '400',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_nav_sub_menu',
								   array('label'    => esc_html__('Sub Menu Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_font_weight_nav_sub_menu',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_nav_sub_menu',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_nav_sub_menu',
								   array('label'    => esc_html__('Sub Menu Letter Spacing (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_letter_spacing_nav_sub_menu',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -5,
																'max'  => 20,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_make_sticky_header_menu_width_always_full',
								   array('default'   		 => 0,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_make_sticky_header_menu_width_always_full',
								   array('label'    => esc_html__('Make sticky Header/Menu width always full even the Header/Menu layout is fixed width', 'foodsy'),
										 'section'  => 'foodsy_section_header_menu',
										 'settings' => 'foodsy_setting_make_sticky_header_menu_width_always_full',
										 'type'     => 'checkbox'));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_header_top_bar_mobile_visibility',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_top_bar_mobile_visibility',
								   array('label'    => esc_html__('Top Bar Mobile Visibility', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_header_top_bar_mobile_visibility',
										 'type'     => 'select',
										 'choices'  => array(""                                => esc_html__('Show All', 'foodsy'),
															 'is-top-bar-mobile-left-visible'  => esc_html__('Show Left', 'foodsy'),
															 'is-top-bar-mobile-right-visible' => esc_html__('Show Right', 'foodsy'),
															 'is-top-bar-mobile-hidden'        => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_top_bar_text_color',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_top_bar_text_color',
								   array('label'    => esc_html__('Top Bar Text Color', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_header_top_bar_text_color',
										 'type'     => 'select',
										 'choices'  => array(""                 => esc_html__('Light', 'foodsy'),
															 'is-top-bar-light' => esc_html__('Dark', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_top_bar_text_transform',
								   array('default'           => 'is-top-bar-uppercase',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_top_bar_text_transform',
								   array('label'    => esc_html__('Top Bar Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_header_top_bar_text_transform',
										 'type'     => 'select',
										 'choices'  => array(""                     => esc_html__('None', 'foodsy'),
															 'is-top-bar-uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_top_bar_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_top_bar_style',
								   array('label'    => esc_html__('Top Bar Style', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_header_top_bar_style',
										 'type'     => 'select',
										 'choices'  => array(""                              => esc_html__('Minimal', 'foodsy'),
															 'is-top-bar-transparent'        => esc_html__('Transparent', 'foodsy'),
															 'is-top-bar-shadow'             => esc_html__('Shadow', 'foodsy'),
															 'is-top-bar-shadow-inset'       => esc_html__('Shadow Inset', 'foodsy'),
															 'is-top-bar-border-bottom'      => esc_html__('Border Bottom', 'foodsy'),
															 'is-top-bar-border-bottom-bold' => esc_html__('Border Bottom Bold', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_header_top_bar_width',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_top_bar_width',
								   array('label'    => esc_html__('Top Bar Width', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_header_top_bar_width',
										 'type'     => 'select',
										 'choices'  => array('is-top-bar-full'     => esc_html__('Full', 'foodsy'),
															 ""                    => esc_html__('Fixed Content', 'foodsy'),
															 'is-top-bar-fixed'    => esc_html__('Fixed', 'foodsy'),
															 'is-top-bar-fixed-bg' => esc_html__('Fixed BG', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_top_bar',
								   array('default'           => foodsy_default_fonts('top_bar'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_top_bar',
								   array('label'    => esc_html__('Top Bar Font', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_font_top_bar',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_top_bar',
								   array('default'           => '12',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_top_bar',
								   array('label'    => esc_html__('Top Bar Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_font_size_top_bar',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 300,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_top_bar',
								   array('default'           => '500',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_top_bar',
								   array('label'    => esc_html__('Top Bar Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_font_weight_top_bar',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_header_top_bar_height',
								   array('default'           => '36',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_header_top_bar_height',
								   array('label'    => esc_html__('Top Bar Height (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_top_bar',
										 'settings' => 'foodsy_setting_header_top_bar_height',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 10,
																'max'  => 500,
																'step' => 1)));
		
		
		$wp_customize->add_setting(
			'foodsy_setting_color_top_bar_background',
			array(
				'default'           => '#495149',
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'postMessage'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'foodsy_control_color_top_bar_background',
				array(
					'label'    => esc_html__('Top Bar Background Color', 'foodsy'),
					'section'  => 'foodsy_section_header_top_bar',
					'settings' => 'foodsy_setting_color_top_bar_background'
				)
			)
		);
		
		
		$wp_customize->add_setting('foodsy_setting_color_top_bar_background_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_top_bar_background_gradient',
																  array('label'    => esc_html__('Top Bar Background Gradient Color', 'foodsy'),
																		'section'  => 'foodsy_section_header_top_bar',
																		'settings' => 'foodsy_setting_color_top_bar_background_gradient')));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_font_icon_box_title',
								   array('default'           => foodsy_default_fonts('icon_box_title'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_icon_box_title',
								   array('label'       => esc_html__('Icon Box Title Font', 'foodsy'),
										 'description' => "",
										 'section'     => 'foodsy_section_header_icon_box',
										 'settings'    => 'foodsy_setting_font_icon_box_title',
										 'type'        => 'select',
										 'choices'     => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_icon_box_title',
								   array('default'           => '15',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_icon_box_title',
								   array('label'    => esc_html__('Icon Box Title Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_icon_box',
										 'settings' => 'foodsy_setting_font_size_icon_box_title',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_icon_box_title',
								   array('default'           => '500',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_icon_box_title',
								   array('label'    => esc_html__('Icon Box Title Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_header_icon_box',
										 'settings' => 'foodsy_setting_font_weight_icon_box_title',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_icon_box_title',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_icon_box_title',
								   array('label'    => esc_html__('Icon Box Title Letter Spacing (px)', 'foodsy'),
										 'section'  => 'foodsy_section_header_icon_box',
										 'settings' => 'foodsy_setting_letter_spacing_icon_box_title',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 10,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_icon_box_title',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_icon_box_title',
								   array('label'    => esc_html__('Icon Box Title Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_header_icon_box',
										 'settings' => 'foodsy_setting_text_transform_icon_box_title',
										 'type'     => 'select',
										 'choices'  => array(''                            => esc_html__('None', 'foodsy'),
															 'is-icon-box-title-uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_footer_layout',
								   array('default'           => 'is-footer-full-width',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_footer_layout',
								   array('label'    => esc_html__('Footer Layout', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_footer_layout',
										 'type'     => 'select',
										 'choices'  => array('is-footer-full-width' => esc_html__('Full-width', 'foodsy'),
															 'is-footer-boxed'  	=> esc_html__('Boxed', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_footer_columns',
								   array('default'           => '4',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_footer_columns',
								   array('label'       => esc_html__('Footer Columns', 'foodsy'),
										 'description' => esc_html__('Footer widget areas.', 'foodsy'),
										 'section'     => 'foodsy_section_footer',
										 'settings'    => 'foodsy_setting_footer_columns',
										 'type'        => 'select',
										 'choices'     => array('4' => esc_html__('4 Columns', 'foodsy'),
																'3' => esc_html__('3 Columns', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_footer_bg',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_footer_bg',
																  array('label'    => esc_html__('Footer Background Color', 'foodsy'),
																		'section'  => 'foodsy_section_footer',
																		'settings' => 'foodsy_setting_color_footer_bg')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_footer_background_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_footer_background_gradient',
																  array('label'    => esc_html__('Footer Background Gradient Color', 'foodsy'),
																		'section'  => 'foodsy_section_footer',
																		'settings' => 'foodsy_setting_color_footer_background_gradient')));
		
		
		$wp_customize->add_setting('foodsy_setting_footer_borders',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_footer_borders',
								   array('label'    => esc_html__('Footer Borders', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_footer_borders',
										 'type'     => 'select',
										 'choices'  => array(''                     => esc_html__('None', 'foodsy'),
															 'is-footer-border-top' => esc_html__('Border Top', 'foodsy'),
															 'is-footer-border-all' => esc_html__('Border All', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_footer_border_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_footer_border_style',
								   array('label'    => esc_html__('Footer Border Style', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_footer_border_style',
										 'type'     => 'select',
										 'choices'  => array(''                                             => esc_html__('Thin', 'foodsy'),
															 'is-footer-border-light'                       => esc_html__('Thin Light', 'foodsy'),
															 'is-footer-border-bold'                        => esc_html__('Bold', 'foodsy'),
															 'is-footer-border-bold is-footer-border-light' => esc_html__('Bold Light', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_footer_subscribe_style',
								   array('default'           => 'is-footer-subscribe-light',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_footer_subscribe_style',
								   array('label'    => esc_html__('Footer Subscribe Style', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_footer_subscribe_style',
										 'type'     => 'select',
										 'choices'  => array('is-footer-subscribe-light' => esc_html__('Light', 'foodsy'),
															 'is-footer-subscribe-dark'  => esc_html__('Dark', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_footer_subscribe_bg',
								   array('default'           => '#ebe6da',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_footer_subscribe_bg',
																  array('label'    => esc_html__('Footer Subscribe Background Color', 'foodsy'),
																		'section'  => 'foodsy_section_footer',
																		'settings' => 'foodsy_setting_color_footer_subscribe_bg')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_footer_subscribe_background_gradient',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_footer_subscribe_background_gradient',
																  array('label'    => esc_html__('Footer Subscribe Background Gradient Color', 'foodsy'),
																		'section'  => 'foodsy_section_footer',
																		'settings' => 'foodsy_setting_color_footer_subscribe_background_gradient')));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_copyright',
								   array('default'           => '13',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_copyright',
								   array('label'    => esc_html__('Copyright Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_font_size_copyright',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 300,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_copyright',
								   array('default'           => '400',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_copyright',
								   array('label'    => esc_html__('Copyright Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_font_weight_copyright',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_copyright',
								   array('default'           => '1',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_copyright',
								   array('label'    => esc_html__('Copyright Letter Spacing (px)', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_letter_spacing_copyright',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 50,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_copyright',
								   array('default'           => 'is-copyright-uppercase',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_copyright',
								   array('label'    => esc_html__('Copyright Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_text_transform_copyright',
										 'type'     => 'select',
										 'choices'  => array(""                       => esc_html__('None', 'foodsy'),
															 'is-copyright-uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_copyright_border_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_copyright_border_style',
								   array('label'    => esc_html__('Copyright Border Style', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_copyright_border_style',
										 'type'     => 'select',
										 'choices'  => array(''                                                                           => esc_html__('None', 'foodsy'),
															 'is-copyright-border-top'                                                    => esc_html__('Border Top', 'foodsy'),
															 'is-copyright-border-top is-copyright-border-bold'                           => esc_html__('Border Top Bold', 'foodsy'),
															 'is-copyright-border-top is-copyright-border-light'                          => esc_html__('Border Top Light', 'foodsy'),
															 'is-copyright-border-top is-copyright-border-bold is-copyright-border-light' => esc_html__('Border Top Bold Light', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_copyright_bar_bg',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_copyright_bar_bg',
																  array('label'    => esc_html__('Copyright Bar Background Color', 'foodsy'),
																		'section'  => 'foodsy_section_footer',
																		'settings' => 'foodsy_setting_color_copyright_bar_bg')));
		
		
		$wp_customize->add_setting('foodsy_setting_color_copyright_bar_text',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_copyright_bar_text',
																  array('label'    => esc_html__('Copyright Bar Text Color', 'foodsy'),
																		'section'  => 'foodsy_section_footer',
																		'settings' => 'foodsy_setting_color_copyright_bar_text')));
		
		
		$wp_customize->add_setting('foodsy_setting_footer_widget_text_align',
								   array('default'           => 'is-footer-widgets-align-left',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_footer_widget_text_align',
								   array('label'    => esc_html__('Footer Widgets Text Align', 'foodsy'),
										 'section'  => 'foodsy_section_footer',
										 'settings' => 'foodsy_setting_footer_widget_text_align',
										 'type'     => 'select',
										 'choices'  => array('is-footer-widgets-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-footer-widgets-align-center' => esc_html__('Center', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_footer_text',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_footer_text',
																  array('label'    => esc_html__('Footer Text Color', 'foodsy'),
																		'section'  => 'foodsy_section_footer',
																		'settings' => 'foodsy_setting_color_footer_text')));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_blog',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_blog',
								   array('label'       => esc_html__('Blog Sidebar', 'foodsy'),
										 'description' => esc_html__('Activate sidebar area for blog page.', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_blog',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_archive',
								   array('default'           => 'No',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_archive',
								   array('label'       => esc_html__('Blog Archive Sidebar', 'foodsy'),
										 'description' => esc_html__('Applies to category/tag/author/date/search archives.', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_archive',
										 'type'        => 'select',
										 'choices'     => array('No'  => esc_html__('No', 'foodsy'),
																'Yes' => esc_html__('Yes', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_post',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_post',
								   array('label'       => esc_html__('Post Sidebar', 'foodsy'),
										 'description' => esc_html__('Activate sidebar area for single posts.', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_post',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_portfolio_category',
								   array('default'           => 'No',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_portfolio_category',
								   array('label'       => esc_html__('Portfolio Category Sidebar', 'foodsy'),
										 'description' => esc_html__('Activate sidebar area for portfolio category pages.', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_portfolio_category',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_portfolio_post',
								   array('default'           => 'No',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_portfolio_post',
								   array('label'       => esc_html__('Portfolio Post Sidebar', 'foodsy'),
										 'description' => esc_html__('Activate sidebar area for single portfolio posts.', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_portfolio_post',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_product_category',
								   array('default'           => 'No',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_product_category',
								   array('label'       => esc_html__('Product Category Sidebar', 'foodsy'),
										 'description' => esc_html__('Activate sidebar area for shop categories. (for WooCommerce plugin)', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_product_category',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_single_product',
								   array('default'           => 'No',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_single_product',
								   array('label'       => esc_html__('Single Product Sidebar', 'foodsy'),
										 'description' => esc_html__('Activate sidebar area for individual product page. (for WooCommerce plugin)', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_single_product',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_course',
								   array('default'           => 'No',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_course',
								   array('label'       => esc_html__('Course Sidebar', 'foodsy'),
										 'description' => esc_html__('Activate sidebar area for courses. (for LearnPress plugin)', 'foodsy'),
										 'section'     => 'foodsy_section_sidebar',
										 'settings'    => 'foodsy_setting_sidebar_course',
										 'type'        => 'select',
										 'choices'     => array(
															'No'  => esc_html__('No', 'foodsy'),
															'Yes' => esc_html__('Yes', 'foodsy')
														)));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_position',
								   array('default'           => 'is-sidebar-right',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_sidebar_position',
								   array('label'    => esc_html__('Sidebar Position', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_sidebar_position',
										 'type'     => 'select',
										 'choices'  => array('is-sidebar-right' => esc_html__('Right', 'foodsy'),
															 'is-sidebar-left'  => esc_html__('Left', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_sticky',
								   array('default'           => 'is-sidebar-sticky',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sidebar_sticky',
								   array('label'    => esc_html__('Sticky Sidebar', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_sidebar_sticky',
										 'type'     => 'select',
										 'choices'  => array('is-sidebar-sticky' 	=> esc_html__('Yes', 'foodsy'),
															 'is-sidebar-sticky-no' => esc_html__('No', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_sidebar',
								   array('default'           => '13',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_sidebar',
								   array('label'    => esc_html__('Sidebar Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_font_size_sidebar',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_widget_text_align',
								   array('default'           => 'is-sidebar-align-left',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_sidebar_widget_text_align',
								   array('label'    => esc_html__('Sidebar Widgets Text Align', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_sidebar_widget_text_align',
										 'type'     => 'select',
										 'choices'  => array('is-sidebar-align-center' => esc_html__('Center', 'foodsy'),
															 'is-sidebar-align-left'   => esc_html__('Left', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_widget_title_align',
								   array('default'           => 'is-widget-title-align-left',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_sidebar_widget_title_align',
								   array('label'    => esc_html__('Widget Title Align', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_sidebar_widget_title_align',
										 'type'     => 'select',
										 'choices'  => array('is-widget-title-align-center' => esc_html__('Center', 'foodsy'),
															 'is-widget-title-align-left'   => esc_html__('Left', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_widget_title_style',
								   array('default'           => 'is-widget-bottomline',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_sidebar_widget_title_style',
								   array('label'    => esc_html__('Widget Title Style', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_sidebar_widget_title_style',
										 'type'     => 'select',
										 'choices'  => array('is-widget-minimal'             => esc_html__('Minimal', 'foodsy'),
															 'is-widget-ribbon'              => esc_html__('Ribbon', 'foodsy'),
															 'is-widget-border'              => esc_html__('Border', 'foodsy'),
															 'is-widget-border-arrow'        => esc_html__('Border Arrow', 'foodsy'),
															 'is-widget-solid'               => esc_html__('Solid', 'foodsy'),
															 'is-widget-solid-arrow'         => esc_html__('Solid Arrow', 'foodsy'),
															 'is-widget-underline'           => esc_html__('Underline', 'foodsy'),
															 'is-widget-bottomline'          => esc_html__('Bottomline', 'foodsy'),
															 'is-widget-first-letter-border' => esc_html__('First Letter Border', 'foodsy'),
															 'is-widget-first-letter-solid'  => esc_html__('First Letter Solid', 'foodsy'),
															 'is-widget-line-cut'            => esc_html__('Line Cut', 'foodsy'),
															 'is-widget-line-cut-center'     => esc_html__('Line Cut Center', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_widget_title',
								   array('default'           => foodsy_default_fonts('widget_title'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_widget_title',
								   array('label'    => esc_html__('Widget Title Font', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_font_widget_title',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_sidebar_widget_title',
								   array('default'           => '13',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_sidebar_widget_title',
								   array('label'    => esc_html__('Widget Title Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_font_size_sidebar_widget_title',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_sidebar_widget_title',
								   array('default'           => '700',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_sidebar_widget_title',
								   array('label'    => esc_html__('Widget Title Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_font_weight_sidebar_widget_title',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_sidebar_widget_title',
								   array('default'           => '3',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_sidebar_widget_title',
								   array('label'    => esc_html__('Widget Title Letter Spacing (px)', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_letter_spacing_sidebar_widget_title',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -5,
																'max'  => 20,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_color_widget_witle_bg_border',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_widget_witle_bg_border',
																  array('label'    => esc_html__('Widget Title Bg/Border Color', 'foodsy'),
																		'section'  => 'foodsy_section_sidebar',
																		'settings' => 'foodsy_setting_color_widget_witle_bg_border')));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_trending_posts_style',
								   array('default'           => 'is-trending-posts-default',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_sidebar_trending_posts_style',
								   array('label'    => esc_html__('Trending Posts Style', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_sidebar_trending_posts_style',
										 'type'     => 'select',
										 'choices'  => array('is-trending-posts-default' => esc_html__('Default', 'foodsy'),
															 'is-trending-posts-rounded' => esc_html__('Rounded', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_sidebar_width',
								   array('default'           => '280',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_sidebar_width',
								   array('label'    => esc_html__('Sidebar Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_sidebar',
										 'settings' => 'foodsy_setting_sidebar_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 100,
																'max'  => 600,
																'step' => 5)));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_custom_post_style_global',
								   array('default'           => 'is-top-content-single-full with-overlay',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_custom_post_style_global',
								   array('label'       => esc_html__('Post Style', 'foodsy'),
										 'description' => esc_html__('For portfolio posts and other custom post types. This setting may be overridden for individual posts.', 'foodsy'),
										 'section'     => 'foodsy_section_portfolio',
										 'settings'    => 'foodsy_setting_custom_post_style_global',
										 'type'        => 'select',
										 'choices'     => array('post-header-classic' 						 	  			  => esc_html__('Classic', 'foodsy'),
																'is-top-content-single-medium' 	  						   	  => esc_html__('Classic Medium', 'foodsy'),
																'is-top-content-single-medium with-parallax' 	  			  => esc_html__('Classic Medium Parallax', 'foodsy'),
																'is-top-content-single-full' 		  						  => esc_html__('Classic Full', 'foodsy'),
																'is-top-content-single-full with-parallax' 				   	  => esc_html__('Classic Full Parallax', 'foodsy'),
																'is-top-content-single-full-margins' 						  => esc_html__('Classic Full with Margins', 'foodsy'),
																'is-top-content-single-full-margins with-parallax' 		   	  => esc_html__('Classic Full with Margins Parallax', 'foodsy'),
																'post-header-overlay post-header-overlay-inline is-post-dark' => esc_html__('Overlay', 'foodsy'),
																'is-top-content-single-medium with-overlay' 				  => esc_html__('Overlay Medium', 'foodsy'),
																'is-top-content-single-full with-overlay' 					  => esc_html__('Overlay Full', 'foodsy'),
																'is-top-content-single-full-margins with-overlay' 			  => esc_html__('Overlay Full with Margins', 'foodsy'),
																'is-top-content-single-full-screen with-overlay' 			  => esc_html__('Overlay Fullscreen', 'foodsy'),
																'is-top-content-single-medium with-title-full' 			   	  => esc_html__('Title Full', 'foodsy'),
																'post-header-classic is-featured-image-left' 				  => esc_html__('Image Left', 'foodsy'),
																'post-header-classic is-featured-image-right' 				  => esc_html__('Image Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_custom_post_header_style_global',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_custom_post_header_style_global',
								   array('label'       => esc_html__('Post Header Style', 'foodsy'),
										 'description' => esc_html__('For portfolio posts and other custom post types. This setting may be overridden for individual posts.', 'foodsy'),
										 'section'     => 'foodsy_section_portfolio',
										 'settings'    => 'foodsy_setting_custom_post_header_style_global',
										 'type'        => 'select',
										 'choices'     => array(
											""                                                                                                            => esc_html__('Default', 'foodsy'),
											'is-header-float is-header-transparent'                                                                       => esc_html__('Transparent', 'foodsy'),
											'is-header-float is-header-transparent is-header-float-margin'                                                => esc_html__('Transparent Margin', 'foodsy'),
											'is-header-float is-header-transparent is-header-half-transparent'                                            => esc_html__('Half Transparent', 'foodsy'),
											'is-header-float is-header-transparent is-header-half-transparent is-header-float-box is-header-float-margin' => esc_html__('Half Transparent Margin', 'foodsy'),
											'is-header-float is-header-transparent-light'                                                                 => esc_html__('Transparent Light', 'foodsy'),
											'is-header-float is-header-transparent-light is-header-float-margin'                                          => esc_html__('Transparent Light Margin', 'foodsy'),
											'is-header-float is-header-float-box'                                                                         => esc_html__('Floating Box', 'foodsy'),
											'is-header-float is-header-float-box is-header-float-margin'                                                  => esc_html__('Floating Box Margin', 'foodsy'),
											'is-header-float is-header-float-box is-header-float-box-menu'                                                => esc_html__('Floating Box Menu', 'foodsy')
										)));
		
		
		$wp_customize->add_setting('foodsy_setting_portfolio_page_layout',
								   array('default'           => 'layout-medium',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_portfolio_page_layout',
								   array('label' 	   => esc_html__('Page Layout', 'foodsy'),
										 'description' => esc_html__('For portfolio page template and portfolio category page.', 'foodsy'),
										 'section' 	   => 'foodsy_section_portfolio',
										 'settings'    => 'foodsy_setting_portfolio_page_layout',
										 'type' 	   => 'select',
										 'choices' 	   => array('layout-medium' => esc_html__('Default', 'foodsy'),
																'layout-fixed'  => esc_html__('Narrow', 'foodsy'),
																'layout-full' 	=> esc_html__('Full Width', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_portfolio_page_grid_type',
								   array('default'           => 'masonry',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_portfolio_page_grid_type',
								   array('label'    => esc_html__('Grid Type', 'foodsy'),
										 'section'  => 'foodsy_section_portfolio',
										 'settings' => 'foodsy_setting_portfolio_page_grid_type',
										 'type'     => 'select',
										 'choices'  => array('masonry' 		  => esc_html__('Masonry', 'foodsy'),
															 'fitRows_square' => esc_html__('Fit Rows - (Square)', 'foodsy'),
															 'fitRows_wide'   => esc_html__('Fit Rows - (Wide)', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_portfolio_page_post_width',
								   array('default'           => '320',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_portfolio_page_post_width',
								   array('label' 	   => esc_html__('Grid Post Width (px)', 'foodsy'),
										 'description' => esc_html__('Default: 320', 'foodsy'),
										 'section' 	   => 'foodsy_section_portfolio',
										 'settings'    => 'foodsy_setting_portfolio_page_post_width',
										 'type' 	   => 'number',
										 'input_attrs' => array('min'  => 120,
																'max'  => 1200,
																'step' => 10)));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_shop_grid_type',
								   array('default'           => 'masonry',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_shop_grid_type',
								   array('label'    => esc_html__('Grid Type', 'foodsy'),
										 'section'  => 'foodsy_section_shop',
										 'settings' => 'foodsy_setting_shop_grid_type',
										 'type'     => 'select',
										 'choices'  => array('masonry' 		  => esc_html__('Masonry', 'foodsy'),
															 'fitRows_square' => esc_html__('Fit Rows - (Square)', 'foodsy'),
															 'fitRows_wide'   => esc_html__('Fit Rows - (Wide)', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_shop_grid_item_width',
								   array('default'           => '360',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_shop_grid_item_width',
								   array('label' 	   => esc_html__('Grid Item Width (px)', 'foodsy'),
										 'description' => esc_html__('Default: 360', 'foodsy'),
										 'section' 	   => 'foodsy_section_shop',
										 'settings'    => 'foodsy_setting_shop_grid_item_width',
										 'type' 	   => 'number',
										 'input_attrs' => array('min'  => 100,
																'max'  => 700,
																'step' => 10)));
		
		
		$wp_customize->add_setting(
			'foodsy_setting_products_per_page',
			array(
				'default'           => 8,
				'sanitize_callback' => 'foodsy_sanitize',
				'transport'         => 'refresh'
			)
		);
		
		$wp_customize->add_control(
			'foodsy_control_products_per_page',
			array(
				'label'       => esc_html__('Products Per Page', 'foodsy'),
				'description' => esc_html__('Number of products displayed per page.', 'foodsy'),
				'section'     => 'foodsy_section_shop',
				'settings'    => 'foodsy_setting_products_per_page',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1
				)
			)
		);
		
		
		$wp_customize->add_setting(
			'foodsy_setting_related_products_count',
			array(
				'default'           => 3,
				'sanitize_callback' => 'foodsy_sanitize',
				'transport'         => 'refresh'
			)
		);
		
		$wp_customize->add_control(
			'foodsy_control_related_products_count',
			array(
				'label'       => esc_html__('Related Products Count', 'foodsy'),
				'description' => esc_html__('Number of products to show.', 'foodsy'),
				'section'     => 'foodsy_section_shop',
				'settings'    => 'foodsy_setting_related_products_count',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 1,
					'max'  => 15,
					'step' => 1
				)
			)
		);
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_feat_area_width',
								   array('default'           => 'is-featured-area-fixed',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_feat_area_width',
								   array('label'    => esc_html__('Featured Area Width', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_general',
										 'settings' => 'foodsy_setting_feat_area_width',
										 'type'     => 'select',
										 'choices'  => array('is-featured-area-fixed'        => esc_html__('Fixed', 'foodsy'),
															 'is-featured-area-full'         => esc_html__('Full', 'foodsy'),
															 'is-featured-area-full-margins' => esc_html__('Full With Margins', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_featured_area_top_padding',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_featured_area_top_padding',
								   array('label'       => esc_html__('Featured Area Top Padding (px)', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_general',
										 'settings'    => 'foodsy_setting_featured_area_top_padding',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 100,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_featured_area_grid_spacing',
								   array('default'           => '5',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_featured_area_grid_spacing',
								   array('label'       => esc_html__('Grid Spacing (px)', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_general',
										 'settings'    => 'foodsy_setting_featured_area_grid_spacing',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 0,
																'max'  => 50,
																'step' => 1)));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_nav_position',
								   array('default'           => 'is-slider-buttons-center-margin',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_nav_position',
								   array('label'    => esc_html__('Slider Nav Position', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_nav_position',
										 'type'     => 'select',
										 'choices'  => array('is-slider-buttons-stick-to-edges' => esc_html__('Stick To Edges', 'foodsy'),
															 'is-slider-buttons-center-margin'  => esc_html__('Center Margin', 'foodsy'),
															 'is-slider-buttons-overflow'       => esc_html__('Overflow', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_nav_shape',
								   array('default'           => 'is-slider-buttons-rounded',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_nav_shape',
								   array('label'    => esc_html__('Slider Nav Shape', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_nav_shape',
										 'type'     => 'select',
										 'choices'  => array('is-slider-buttons-rounded'     => esc_html__('Rounded', 'foodsy'),
															 'is-slider-buttons-sharp-edges' => esc_html__('Sharp Edges', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_nav_style',
								   array('default'           => 'is-slider-buttons-dark',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_nav_style',
								   array('label'    => esc_html__('Slider Nav Style', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_nav_style',
										 'type'     => 'select',
										 'choices'  => array('is-slider-buttons-dark'   => esc_html__('Dark', 'foodsy'),
															 'is-slider-buttons-light'  => esc_html__('Light', 'foodsy'),
															 'is-slider-buttons-border' => esc_html__('Border', 'foodsy'),
															 'is-slider-buttons-darker' => esc_html__('Darker', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_title_style',
								   array('default'           => 'is-slider-title-default',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_title_style',
								   array('label'    => esc_html__('Slider Title Style', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_title_style',
										 'type'     => 'select',
										 'choices'  => array('is-slider-title-default'        				 => esc_html__('Default', 'foodsy'),
															 'is-slider-title-label' 		  				 => esc_html__('Label', 'foodsy'),
															 'is-slider-title-label is-slider-title-rotated' => esc_html__('Label Rotated', 'foodsy'),
															 'is-slider-title-inline-borders' 				 => esc_html__('Inline Borders', 'foodsy'),
															 'is-slider-title-stamp'         				 => esc_html__('Stamp', 'foodsy'),
															 'is-slider-title-border-bottom' 				 => esc_html__('Border Bottom', 'foodsy'),
															 'is-slider-title-3d-shadow' 					 => esc_html__('3D Shadow', 'foodsy'),
															 'is-slider-title-3d-hard-shadow' 				 => esc_html__('3D Hard Shadow', 'foodsy'),
															 'is-slider-title-dark-shadow' 					 => esc_html__('Dark Shadow', 'foodsy'),
															 'is-slider-title-retro-shadow' 				 => esc_html__('Retro Shadow', 'foodsy'),
															 'is-slider-title-retro-skew' 				     => esc_html__('Retro Skew', 'foodsy'),
															 'is-slider-title-comic-shadow' 				 => esc_html__('Comic Shadow', 'foodsy'),
															 'is-slider-title-futurist-shadow' 				 => esc_html__('Futurist Shadow', 'foodsy'),
															 'is-slider-title-outline' 				         => esc_html__('Outline', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_parallax_effect',
								   array('default'           => 'is-slider-parallax',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_main_slider_parallax_effect',
								   array('label'    => esc_html__('Slider Parallax Effect', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_parallax_effect',
										 'type'     => 'select',
										 'choices'  => array('is-slider-parallax' 	 => esc_html__('Yes', 'foodsy'),
															 'is-slider-parallax-no' => esc_html__('No', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_slider_title',
								   array('default'           => foodsy_default_fonts('slider_title'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_slider_title',
								   array('label'    => esc_html__('Slider Title Font', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_font_slider_title',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_slider_title',
								   array('default'           => '700',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_slider_title',
								   array('label'    => esc_html__('Slider Title Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_font_weight_slider_title',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_main_slider_title',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_main_slider_title',
								   array('label'       => esc_html__('Slider Title Letter Spacing (px)', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_slider',
										 'settings'    => 'foodsy_setting_letter_spacing_main_slider_title',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => -5,
																'max'  => 20,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_title_ratio',
								   array('default'           => '0.5',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_title_ratio',
								   array('label'       => esc_html__('Slider Title Text Ratio', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_slider',
										 'settings'    => 'foodsy_setting_font_title_ratio',
										 'type'        => 'range',
										 'input_attrs' => array('min'  => 0.1,
																'max'  => 2,
																'step' => 0.05)));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_title_text_transform',
								   array('default'           => 'is-slider-title-none-uppercase',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_title_text_transform',
								   array('label'    => esc_html__('Slider Title Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_title_text_transform',
										 'type'     => 'select',
										 'choices'  => array('is-slider-title-none-uppercase' => esc_html__('None', 'foodsy'),
															 'is-slider-title-uppercase'      => esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_meta_style',
								   array('default'           => 'is-cat-link-ribbon-left',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_meta_style',
								   array('label'    => esc_html__('Slider Meta Style', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_meta_style',
										 'type'     => 'select',
										 'choices'  => array('is-cat-link-default' 								=> esc_html__('Default', 'foodsy'),
															 'is-cat-link-borders' 								=> esc_html__('Borders', 'foodsy'),
															 'is-cat-link-borders is-cat-link-rounded' 	        => esc_html__('Borders Rounded', 'foodsy'),
															 'is-cat-link-borders-light' 						=> esc_html__('Borders Light', 'foodsy'),
															 'is-cat-link-borders-light is-cat-link-rounded'    => esc_html__('Borders Light Rounded', 'foodsy'),
															 'is-cat-link-solid' 								=> esc_html__('Solid', 'foodsy'),
															 'is-cat-link-solid is-cat-link-rounded' 		    => esc_html__('Solid Rounded', 'foodsy'),
															 'is-cat-link-solid-light' 							=> esc_html__('Solid Light', 'foodsy'),
															 'is-cat-link-solid-light is-cat-link-rounded'      => esc_html__('Solid Light Rounded', 'foodsy'),
															 'is-cat-link-ribbon' 								=> esc_html__('Ribbon', 'foodsy'),
															 'is-cat-link-ribbon-left' 							=> esc_html__('Ribbon Left', 'foodsy'),
															 'is-cat-link-ribbon-right' 						=> esc_html__('Ribbon Right', 'foodsy'),
															 'is-cat-link-ribbon is-cat-link-ribbon-dark' 		=> esc_html__('Ribbon Dark', 'foodsy'),
															 'is-cat-link-ribbon-left is-cat-link-ribbon-dark' 	=> esc_html__('Ribbon Dark Left', 'foodsy'),
															 'is-cat-link-ribbon-right is-cat-link-ribbon-dark' => esc_html__('Ribbon Dark Right', 'foodsy'),
															 'is-cat-link-border-bottom'					    => esc_html__('Border Bottom', 'foodsy'),
															 'is-cat-link-line-before' 							=> esc_html__('Line Before', 'foodsy'),
															 'is-cat-link-dots-bottom' 							=> esc_html__('Dots Bottom', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_slider_meta_bg_border',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_slider_meta_bg_border',
																  array('label'    => esc_html__('Slider Meta Bg/Border Color', 'foodsy'),
																		'section'  => 'foodsy_section_featured_area_slider',
																		'settings' => 'foodsy_setting_color_slider_meta_bg_border')));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_more_link_visibility',
								   array('default'           => 'is-slider-more-link-show',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_more_link_visibility',
								   array('label'    => esc_html__('Slider More Link Visibility', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_more_link_visibility',
										 'type'     => 'select',
										 'choices'  => array('is-slider-more-link-show' 		 => esc_html__('Show', 'foodsy'),
															 'is-slider-more-link-show-on-hover' => esc_html__('Show on Hover', 'foodsy'),
															 'is-slider-more-link-hidden' 		 => esc_html__('Hide', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_more_link_style',
								   array('default'           => 'is-slider-more-link-button-style',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_more_link_style',
								   array('label'    => esc_html__('Slider More Link Style', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_more_link_style',
										 'type'     => 'select',
										 'choices'  => array('is-slider-more-link-minimal' 		 => esc_html__('Minimal', 'foodsy'),
															 'is-slider-more-link-button-style'  => esc_html__('Button Like', 'foodsy'),
															 'is-slider-more-link-border-bottom' => esc_html__('Border Bottom', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_text_align',
								   array('default'           => 'is-slider-text-align-center',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_text_align',
								   array('label'    => esc_html__('Slider Text Align', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_text_align',
										 'type'     => 'select',
										 'choices'  => array('is-slider-text-align-center' => esc_html__('Center', 'foodsy'),
															 'is-slider-text-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-slider-text-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_vertical_align',
								   array('default'           => 'is-slider-v-align-center',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_vertical_align',
								   array('label'    => esc_html__('Slider Vertical Align', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_vertical_align',
										 'type'     => 'select',
										 'choices'  => array('is-slider-v-align-center' => esc_html__('Center', 'foodsy'),
															 'is-slider-v-align-top'    => esc_html__('Top', 'foodsy'),
															 'is-slider-v-align-bottom' => esc_html__('Bottom', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_horizontal_align',
								   array('default'           => 'is-slider-h-align-center',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_horizontal_align',
								   array('label'    => esc_html__('Slider Horizontal Align', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_horizontal_align',
										 'type'     => 'select',
										 'choices'  => array('is-slider-h-align-center' => esc_html__('Center', 'foodsy'),
															 'is-slider-h-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-slider-h-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_main_slider_dots_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_main_slider_dots_style',
								   array('label'    => esc_html__('Slider Dots Style', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_slider',
										 'settings' => 'foodsy_setting_main_slider_dots_style',
										 'type'     => 'select',
										 'choices'  => array(""                                 => esc_html__('Circle Grow', 'foodsy'),
															 'is-slider-dots-rounded-line-grow' => esc_html__('Rounded Line Grow', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_link_box_title_style',
								   array('default'           => 'is-link-box-title-default',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_link_box_title_style',
								   array('label'    => esc_html__('Link Box Title Style', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_link_box',
										 'settings' => 'foodsy_setting_link_box_title_style',
										 'type'     => 'select',
										 'choices'  => array('is-link-box-title-default' 						 => esc_html__('Default', 'foodsy'),
															 'is-link-box-title-label' 							 => esc_html__('Label', 'foodsy'),
															 'is-link-box-title-label is-link-box-title-rotated' => esc_html__('Label Rotated', 'foodsy'),
															 'is-link-box-title-inline-borders' 				 => esc_html__('Inline Borders', 'foodsy'),
															 'is-link-box-title-border-bottom' 					 => esc_html__('Border Bottom', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_link_box_title',
								   array('default'           => foodsy_default_fonts('link_box_title'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_link_box_title',
								   array('label'    => esc_html__('Link Box Title Font', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_link_box',
										 'settings' => 'foodsy_setting_font_link_box_title',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_link_box_title',
								   array('default'           => '700',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_link_box_title',
								   array('label'    => esc_html__('Link Box Title Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_link_box',
										 'settings' => 'foodsy_setting_font_weight_link_box_title',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_letter_spacing_link_box_title',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_letter_spacing_link_box_title',
								   array('label'       => esc_html__('Link Box Title Letter Spacing (px)', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_link_box',
										 'settings'    => 'foodsy_setting_letter_spacing_link_box_title',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => -5,
																'max'  => 20,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_title_ratio_link_box',
								   array('default'           => '0.5',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_font_title_ratio_link_box',
								   array('label'       => esc_html__('Link Box Title Text Ratio', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_link_box',
										 'settings'    => 'foodsy_setting_font_title_ratio_link_box',
										 'type'        => 'range',
										 'input_attrs' => array('min'  => 0.1,
																'max'  => 2,
																'step' => 0.05)));
		
		
		$wp_customize->add_setting('foodsy_setting_link_box_text_transform',
								   array('default'           => 'is-link-box-title-transform-none',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_link_box_text_transform',
								   array('label'    => esc_html__('Link Box Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_link_box',
										 'settings' => 'foodsy_setting_link_box_text_transform',
										 'type'     => 'select',
										 'choices'  => array('is-link-box-title-transform-none' => esc_html__('None', 'foodsy'),
															 'is-link-box-title-uppercase' 		=> esc_html__('Uppercase', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_link_box_text_align',
								   array('default'           => 'is-link-box-text-align-center',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_link_box_text_align',
								   array('label'    => esc_html__('Link Box Text Align', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_link_box',
										 'settings' => 'foodsy_setting_link_box_text_align',
										 'type'     => 'select',
										 'choices'  => array('is-link-box-text-align-center' => esc_html__('Center', 'foodsy'),
															 'is-link-box-text-align-left' 	 => esc_html__('Left', 'foodsy'),
															 'is-link-box-text-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_link_box_vertical_align',
								   array('default'           => 'is-link-box-v-align-center',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_link_box_vertical_align',
								   array('label'    => esc_html__('Link Box Vertical Align', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_link_box',
										 'settings' => 'foodsy_setting_link_box_vertical_align',
										 'type'     => 'select',
										 'choices'  => array('is-link-box-v-align-center' => esc_html__('Center', 'foodsy'),
															 'is-link-box-v-align-top' 	  => esc_html__('Top', 'foodsy'),
															 'is-link-box-v-align-bottom' => esc_html__('Bottom', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_link_box_parallax_effect',
								   array('default'           => 'is-link-box-parallax',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_link_box_parallax_effect',
								   array('label'    => esc_html__('Link Box Parallax Effect', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_link_box',
										 'settings' => 'foodsy_setting_link_box_parallax_effect',
										 'type'     => 'select',
										 'choices'  => array('is-link-box-parallax-no' => esc_html__('No', 'foodsy'),
															 'is-link-box-parallax' => esc_html__('Yes', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_intro_text_align',
								   array('default'           => 'is-intro-align-center',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_text_align',
								   array('label'    => esc_html__('Intro Text Align', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_text_align',
										 'type'     => 'select',
										 'choices'  => array('is-intro-align-center' => esc_html__('Center', 'foodsy'),
															 'is-intro-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-intro-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_text_color',
								   array('default'           => 'is-intro-text-dark',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_text_color',
								   array('label'    => esc_html__('Intro Text Color', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_text_color',
										 'type'     => 'select',
										 'choices'  => array('is-intro-text-dark'  => esc_html__('Dark', 'foodsy'),
															 'is-intro-text-light' => esc_html__('Light', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_top_bottom_padding',
								   array('default'           => '50',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_top_bottom_padding',
								   array('label'       => esc_html__('Intro Top-Bottom Padding', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_intro',
										 'settings'    => 'foodsy_setting_intro_top_bottom_padding',
										 'type'        => 'range',
										 'input_attrs' => array('min'  => 20,
																'max'  => 400,
																'step' => 10)));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_mask_color',
								   array('default'           => '#25262e',
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_intro_mask_color',
																  array('label'    => esc_html__('Intro Mask Color', 'foodsy'),
																		'section'  => 'foodsy_section_featured_area_intro',
																		'settings' => 'foodsy_setting_intro_mask_color')));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_mask_opacity',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_mask_opacity',
								   array('label'       => esc_html__('Intro Mask Opacity', 'foodsy'),
										 'section'     => 'foodsy_section_featured_area_intro',
										 'settings'    => 'foodsy_setting_intro_mask_opacity',
										 'type'        => 'range',
										 'input_attrs' => array('min'  => 0,
																'max'  => 1,
																'step' => 0.1)));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_parallax_bg_img',
								   array('default'           => 'is-intro-parallax-no',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_intro_parallax_bg_img',
								   array('label'    => esc_html__('Parallax Background Image', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_parallax_bg_img',
										 'type'     => 'select',
										 'choices'  => array('is-intro-parallax-no' => esc_html__('No', 'foodsy'),
															 'is-intro-parallax' 	=> esc_html__('Yes', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_font_size',
								   array('default'           => '38',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_font_size',
								   array('label'    => esc_html__('Intro Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_font_size',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_font',
								   array('default'           => foodsy_default_fonts('intro'),
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_font',
								   array('label'    => esc_html__('Intro Font', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_font',
										 'type'     => 'select',
										 'choices'  => foodsy_core_fonts()));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_font_weight',
								   array('default'           => '400',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_font_weight',
								   array('label'    => esc_html__('Intro Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_font_weight',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_letter_spacing',
								   array('default'           => '0',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_letter_spacing',
								   array('label'    => esc_html__('Intro Letter Spacing (px)', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_letter_spacing',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => -10,
																'max'  => 50,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_intro_text_transform',
								   array('default'           => 'none',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_intro_text_transform',
								   array('label'    => esc_html__('Intro Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_featured_area_intro',
										 'settings' => 'foodsy_setting_intro_text_transform',
										 'type'     => 'select',
										 'choices'  => array('none' 	 => esc_html__('None', 'foodsy'),
															 'uppercase' => esc_html__('Uppercase', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_page_style_global',
								   array('default'           => 'post-header-classic',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_page_style_global',
								   array('label'       => esc_html__('Page Style', 'foodsy'),
										 'description' => esc_html__('This setting may be overridden for individual pages.', 'foodsy'),
										 'section'     => 'foodsy_section_pages',
										 'settings'    => 'foodsy_setting_page_style_global',
										 'type'        => 'select',
										 'choices'     => array('post-header-classic' 						 	  			  => esc_html__('Classic', 'foodsy'),
																'is-top-content-single-medium' 	  						   	  => esc_html__('Classic Medium', 'foodsy'),
																'is-top-content-single-medium with-parallax' 	  			  => esc_html__('Classic Medium Parallax', 'foodsy'),
																'is-top-content-single-full' 		  						  => esc_html__('Classic Full', 'foodsy'),
																'is-top-content-single-full with-parallax' 				   	  => esc_html__('Classic Full Parallax', 'foodsy'),
																'is-top-content-single-full-margins' 						  => esc_html__('Classic Full with Margins', 'foodsy'),
																'is-top-content-single-full-margins with-parallax' 		   	  => esc_html__('Classic Full with Margins Parallax', 'foodsy'),
																'post-header-overlay post-header-overlay-inline is-post-dark' => esc_html__('Overlay', 'foodsy'),
																'is-top-content-single-medium with-overlay' 				  => esc_html__('Overlay Medium', 'foodsy'),
																'is-top-content-single-full with-overlay' 					  => esc_html__('Overlay Full', 'foodsy'),
																'is-top-content-single-full-margins with-overlay' 			  => esc_html__('Overlay Full with Margins', 'foodsy'),
																'is-top-content-single-full-screen with-overlay' 			  => esc_html__('Overlay Fullscreen', 'foodsy'),
																'is-top-content-single-medium with-title-full' 			   	  => esc_html__('Title Full', 'foodsy'),
																'post-header-classic is-featured-image-left' 				  => esc_html__('Image Left', 'foodsy'),
																'post-header-classic is-featured-image-right' 				  => esc_html__('Image Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_page_header_style_global',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_page_header_style_global',
								   array('label'       => esc_html__('Page Header Style', 'foodsy'),
										 'description' => esc_html__('This setting may be overridden for individual pages.', 'foodsy'),
										 'section'     => 'foodsy_section_pages',
										 'settings'    => 'foodsy_setting_page_header_style_global',
										 'type'        => 'select',
										 'choices'     => array(
											""                                                                                                            => esc_html__('Default', 'foodsy'),
											'is-header-float is-header-transparent'                                                                       => esc_html__('Transparent', 'foodsy'),
											'is-header-float is-header-transparent is-header-float-margin'                                                => esc_html__('Transparent Margin', 'foodsy'),
											'is-header-float is-header-transparent is-header-half-transparent'                                            => esc_html__('Half Transparent', 'foodsy'),
											'is-header-float is-header-transparent is-header-half-transparent is-header-float-box is-header-float-margin' => esc_html__('Half Transparent Margin', 'foodsy'),
											'is-header-float is-header-transparent-light'                                                                 => esc_html__('Transparent Light', 'foodsy'),
											'is-header-float is-header-transparent-light is-header-float-margin'                                          => esc_html__('Transparent Light Margin', 'foodsy'),
											'is-header-float is-header-float-box'                                                                         => esc_html__('Floating Box', 'foodsy'),
											'is-header-float is-header-float-box is-header-float-margin'                                                  => esc_html__('Floating Box Margin', 'foodsy'),
											'is-header-float is-header-float-box is-header-float-box-menu'                                                => esc_html__('Floating Box Menu', 'foodsy')
										)));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_blog_homepage_header_style',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_blog_homepage_header_style',
			array(
				'label'       => esc_html__('Blog Homepage Header Style', 'foodsy'),
				'description' => esc_html__('Select header style if you have set latest posts as your homepage, otherwise you can select header style in single page edit screen.', 'foodsy'),
				'section'     => 'foodsy_section_blog',
				'settings'    => 'foodsy_setting_blog_homepage_header_style',
				'type'        => 'select',
				'choices'     => array(
					""                                                                                                            => esc_html__('Default', 'foodsy'),
					'is-header-float is-header-transparent'                                                                       => esc_html__('Transparent', 'foodsy'),
					'is-header-float is-header-transparent is-header-float-margin'                                                => esc_html__('Transparent Margin', 'foodsy'),
					'is-header-float is-header-transparent is-header-half-transparent'                                            => esc_html__('Half Transparent', 'foodsy'),
					'is-header-float is-header-transparent is-header-half-transparent is-header-float-box is-header-float-margin' => esc_html__('Half Transparent Margin', 'foodsy'),
					'is-header-float is-header-transparent-light'                                                                 => esc_html__('Transparent Light', 'foodsy'),
					'is-header-float is-header-transparent-light is-header-float-margin'                                          => esc_html__('Transparent Light Margin', 'foodsy'),
					'is-header-float is-header-float-box'                                                                         => esc_html__('Floating Box', 'foodsy'),
					'is-header-float is-header-float-box is-header-float-margin'                                                  => esc_html__('Floating Box Margin', 'foodsy'),
					'is-header-float is-header-float-box is-header-float-box-menu'                                                => esc_html__('Floating Box Menu', 'foodsy')
				)
			)
		);
		
		
		$foodsy_layouts = array(
			'Regular'         => esc_html__('Regular', 'foodsy'),
			'Grid'            => esc_html__('Grid', 'foodsy'),
			'List'            => esc_html__('List', 'foodsy'),
			'Circles'         => esc_html__('Circles', 'foodsy'),
			'1st Full + Grid' => esc_html__('1st Full + Grid', 'foodsy'),
			'1st Full + List' => esc_html__('1st Full + List', 'foodsy')
		);
		
		
		$wp_customize->add_setting('foodsy_setting_layout_blog',
								   array('default'           => 'List',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_layout_blog',
								   array('label'    => esc_html__('Blog', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_layout_blog',
										 'type'     => 'select',
										 'choices'  => $foodsy_layouts));
		
		
		$wp_customize->add_setting('foodsy_setting_layout_category',
								   array('default'           => 'List',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_layout_category',
								   array('label'    => esc_html__('Category Archive', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_layout_category',
										 'type'     => 'select',
										 'choices'  => $foodsy_layouts));
		
		
		$wp_customize->add_setting('foodsy_setting_layout_tag',
								   array('default'           => 'List',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_layout_tag',
								   array('label'    => esc_html__('Tag Archive', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_layout_tag',
										 'type'     => 'select',
										 'choices'  => $foodsy_layouts));
		
		
		$wp_customize->add_setting('foodsy_setting_layout_author',
								   array('default'           => 'List',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_layout_author',
								   array('label'    => esc_html__('Author Archive', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_layout_author',
										 'type'     => 'select',
										 'choices'  => $foodsy_layouts));
		
		
		$wp_customize->add_setting('foodsy_setting_layout_date',
								   array('default'           => 'List',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_layout_date',
								   array('label'    => esc_html__('Date Archive', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_layout_date',
										 'type'     => 'select',
										 'choices'  => $foodsy_layouts));
		
		
		$wp_customize->add_setting('foodsy_setting_layout_search',
								   array('default'           => 'Grid',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_layout_search',
								   array('label'    => esc_html__('Search Results', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_layout_search',
										 'type'     => 'select',
										 'choices'  => $foodsy_layouts));
		
		
		$wp_customize->add_setting('foodsy_setting_blog_text_align',
								   array('default'           => 'is-blog-text-align-left',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_blog_text_align',
								   array('label'    => esc_html__('Blog Text Align', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_blog_text_align',
										 'type'     => 'select',
										 'choices'  => array('is-blog-text-align-center' => esc_html__('Center', 'foodsy'),
															 'is-blog-text-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-blog-text-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_grid_type',
								   array('default'           => 'masonry',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_grid_type',
								   array('label'    => esc_html__('Grid Type', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_grid_type',
										 'type'     => 'select',
										 'choices'  => array('masonry' => esc_html__('Masonry', 'foodsy'),
															 'fitRows' => esc_html__('Fit Rows', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_grid_post_width',
								   array('default'           => '340',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_grid_post_width',
								   array('label'    => esc_html__('Grid Post Width (px)', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_grid_post_width',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 120,
																'max'  => 1200,
																'step' => 10)));
		
		
		$wp_customize->add_setting('foodsy_setting_sticky_posts',
								   array('default'           => 'include',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_sticky_posts',
								   array('label'    => esc_html__('Sticky Posts', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_sticky_posts',
										 'type'     => 'select',
										 'choices'  => array('include' => esc_html__('Include to blog', 'foodsy'),
															 'exclude' => esc_html__('Exclude from blog', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_more_link_style',
								   array('default'           => 'is-more-link-button-style',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_more_link_style',
								   array('label'    => esc_html__('More Link Style', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_more_link_style',
										 'type'     => 'select',
										 'choices'  => array('is-more-link-button-minimal' 		 => esc_html__('Minimal', 'foodsy'),
															 'is-more-link-button-style' 		 => esc_html__('Button Like', 'foodsy'),
															 'is-more-link-border-bottom' 		 => esc_html__('Border Bottom', 'foodsy'),
															 'is-more-link-border-bottom-light'  => esc_html__('Border Bottom Light', 'foodsy'),
															 'is-more-link-border-bottom-dotted' => esc_html__('Border Bottom Dotted', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_more_link_text',
								   array('default' 			 => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_more_link_text',
								   array('label'       => esc_html__('More Link Text', 'foodsy'),
										 'description' => esc_html__('Default: Read More', 'foodsy'),
										 'section'     => 'foodsy_section_blog',
										 'settings'    => 'foodsy_setting_more_link_text',
										 'type'        => 'text'));
		
		
		$wp_customize->add_setting('foodsy_setting_automatic_excerpt',
								   array('default'           => 'standard',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_automatic_excerpt',
								   array('label' 	   => esc_html__('Automatic Excerpt', 'foodsy'),
										 'description' => esc_html__('Generates an excerpt from the post content.', 'foodsy'),
										 'section' 	   => 'foodsy_section_blog',
										 'settings'    => 'foodsy_setting_automatic_excerpt',
										 'type' 	   => 'select',
										 'choices' 	   => array('standard' => esc_html__('Yes - Only for standard format', 'foodsy'),
																'Yes'      => esc_html__('Yes - For all post formats', 'foodsy'),
																'No'       => esc_html__('No', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_excerpt_length',
								   array('default'           => '65',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_excerpt_length',
								   array('label'       => esc_html__('Excerpt Length', 'foodsy'),
										 'description' => esc_html__('For regular layout. Default: 65 (words)', 'foodsy'),
										 'section'     => 'foodsy_section_blog',
										 'settings'    => 'foodsy_setting_excerpt_length',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 20,
																'max'  => 1000,
																'step' => 5)));
		
		
		$wp_customize->add_setting('foodsy_setting_excerpt_length_layout_grid',
								   array('default'           => '35',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_excerpt_length_layout_grid',
								   array('label'       => esc_html__('Blog Grid Excerpt Length', 'foodsy'),
										 'description' => esc_html__('For grid, list and circles layouts. Default: 35 (words)', 'foodsy'),
										 'section'     => 'foodsy_section_blog',
										 'settings'    => 'foodsy_setting_excerpt_length_layout_grid',
										 'type'        => 'number',
										 'input_attrs' => array('min'  => 20,
																'max'  => 1000,
																'step' => 5)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_excerpt',
								   array('default'           => '16',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_excerpt',
								   array('label'    => esc_html__('Excerpt Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_font_size_excerpt',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_blog_grid_excerpt',
								   array('default'           => '14',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_blog_grid_excerpt',
								   array('label'    => esc_html__('Blog Grid Excerpt Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_font_size_blog_grid_excerpt',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_blog_regular_post_title',
								   array('default'           => '34',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_blog_regular_post_title',
								   array('label'    => esc_html__('Blog Regular Post Title Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_font_size_blog_regular_post_title',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_blog_grid_post_title',
								   array('default'           => '22',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_blog_grid_post_title',
								   array('label'    => esc_html__('Blog Grid Post Title Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_font_size_blog_grid_post_title',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 9,
																'max'  => 200,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_numbered_pagination',
								   array('default'           => 'No',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_numbered_pagination',
								   array('label'    => esc_html__('Blog Navigation', 'foodsy'),
										 'section'  => 'foodsy_section_blog',
										 'settings' => 'foodsy_setting_numbered_pagination',
										 'type'     => 'select',
										 'choices'  => array('No'  => esc_html__('Older/Newer Links', 'foodsy'),
															 'Yes' => esc_html__('Numbered Pagination', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_post_style_global',
								   array('default'           => 'is-top-content-single-full with-parallax',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_post_style_global',
								   array('label'       => esc_html__('Post Style', 'foodsy'),
										 'description' => esc_html__('This setting may be overridden for individual posts.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_post_style_global',
										 'type'        => 'select',
										 'choices'     => array('post-header-classic' 						 	  			  => esc_html__('Classic', 'foodsy'),
																'is-top-content-single-medium' 	  						   	  => esc_html__('Classic Medium', 'foodsy'),
																'is-top-content-single-medium with-parallax' 	  			  => esc_html__('Classic Medium Parallax', 'foodsy'),
																'is-top-content-single-full' 		  						  => esc_html__('Classic Full', 'foodsy'),
																'is-top-content-single-full with-parallax' 				   	  => esc_html__('Classic Full Parallax', 'foodsy'),
																'is-top-content-single-full-margins' 						  => esc_html__('Classic Full with Margins', 'foodsy'),
																'is-top-content-single-full-margins with-parallax' 		   	  => esc_html__('Classic Full with Margins Parallax', 'foodsy'),
																'post-header-overlay post-header-overlay-inline is-post-dark' => esc_html__('Overlay', 'foodsy'),
																'is-top-content-single-medium with-overlay' 				  => esc_html__('Overlay Medium', 'foodsy'),
																'is-top-content-single-full with-overlay' 					  => esc_html__('Overlay Full', 'foodsy'),
																'is-top-content-single-full-margins with-overlay' 			  => esc_html__('Overlay Full with Margins', 'foodsy'),
																'is-top-content-single-full-screen with-overlay' 			  => esc_html__('Overlay Fullscreen', 'foodsy'),
																'is-top-content-single-medium with-title-full' 			   	  => esc_html__('Title Full', 'foodsy'),
																'post-header-classic is-featured-image-left' 				  => esc_html__('Image Left', 'foodsy'),
																'post-header-classic is-featured-image-right' 				  => esc_html__('Image Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_post_header_style_global',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_post_header_style_global',
								   array('label'       => esc_html__('Post Header Style', 'foodsy'),
										 'description' => esc_html__('This setting may be overridden for individual posts.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_post_header_style_global',
										 'type'        => 'select',
										 'choices'     => array(
											""                                                                                                            => esc_html__('Default', 'foodsy'),
											'is-header-float is-header-transparent'                                                                       => esc_html__('Transparent', 'foodsy'),
											'is-header-float is-header-transparent is-header-float-margin'                                                => esc_html__('Transparent Margin', 'foodsy'),
											'is-header-float is-header-transparent is-header-half-transparent'                                            => esc_html__('Half Transparent', 'foodsy'),
											'is-header-float is-header-transparent is-header-half-transparent is-header-float-box is-header-float-margin' => esc_html__('Half Transparent Margin', 'foodsy'),
											'is-header-float is-header-transparent-light'                                                                 => esc_html__('Transparent Light', 'foodsy'),
											'is-header-float is-header-transparent-light is-header-float-margin'                                          => esc_html__('Transparent Light Margin', 'foodsy'),
											'is-header-float is-header-float-box'                                                                         => esc_html__('Floating Box', 'foodsy'),
											'is-header-float is-header-float-box is-header-float-margin'                                                  => esc_html__('Floating Box Margin', 'foodsy'),
											'is-header-float is-header-float-box is-header-float-box-menu'                                                => esc_html__('Floating Box Menu', 'foodsy')
										)));
		
		
		$wp_customize->add_setting('foodsy_setting_post_title_style',
								   array('default'           => 'is-single-post-title-default',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_post_title_style',
								   array('label'    => esc_html__('Post Title Style', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_post_title_style',
										 'type'     => 'select',
										 'choices'  => array('is-single-post-title-default'      => esc_html__('Default', 'foodsy'),
															 'is-single-post-title-with-margins' => esc_html__('Post Title With Margins', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_post_page_title_text_align',
								   array('default'           => 'is-post-title-align-center',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_post_page_title_text_align',
								   array('label'    => esc_html__('Post-Page Title Text Align', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_post_page_title_text_align',
										 'type'     => 'select',
										 'choices'  => array('is-post-title-align-center' => esc_html__('Center', 'foodsy'),
															 'is-post-title-align-left'   => esc_html__('Left', 'foodsy'),
															 'is-post-title-align-right'  => esc_html__('Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_post_featured_image_position',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_post_featured_image_position',
								   array('label'       => esc_html__('Featured Image Position', 'foodsy'),
										 'description' => esc_html__('Also for featured videos.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_post_featured_image_position',
										 'type'        => 'select',
										 'choices'     => array('below_title' => esc_html__('Below Title', 'foodsy'),
																'above_title' => esc_html__('Above Title', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_post_media_width',
								   array('default'           => 'is-post-media-fixed',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_post_media_width',
								   array('label'       => esc_html__('Post Media Width', 'foodsy'),
										 'description' => esc_html__('For images and embed media like video in content.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_post_media_width',
										 'type'        => 'select',
										 'choices'     => array('is-post-media-fixed'    => esc_html__('Fixed', 'foodsy'),
																'is-post-media-overflow' => esc_html__('Overflow', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_tags',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_tags',
								   array('label'    => esc_html__('Tags', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_tags',
										 'type'     => 'select',
										 'choices'  => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_tag_cloud_style',
								   array('default'           => 'is-tagcloud-minimal',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_tag_cloud_style',
								   array('label'    => esc_html__('Tag Cloud Style', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_tag_cloud_style',
										 'type'     => 'select',
										 'choices'  => array('is-tagcloud-minimal' => esc_html__('Minimal', 'foodsy'),
															 'is-tagcloud-solid'   => esc_html__('Solid', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_share_links',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_share_links',
								   array('label'    => esc_html__('Share Links', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_share_links',
										 'type'     => 'select',
										 'choices'  => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_share_links_style',
								   array('default'           => 'is-share-links-boxed',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_share_links_style',
								   array('label'    => esc_html__('Share Links Style', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_share_links_style',
										 'type'     => 'select',
										 'choices'  => array('is-share-links-minimal'     => esc_html__('Minimal', 'foodsy'),
															 'is-share-links-boxed'       => esc_html__('Boxed', 'foodsy'),
															 'is-share-links-boxed-color' => esc_html__('Boxed Color', 'foodsy'),
															 'is-share-links-border'      => esc_html__('Border', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_share_links_align',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_share_links_align',
								   array('label'    => esc_html__('Share Links Align', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_share_links_align',
										 'type'     => 'select',
										 'choices'  => array(""                      => esc_html__('Left', 'foodsy'),
															 'is-share-links-center' => esc_html__('Center', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_post_navigation',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_post_navigation',
								   array('label'       => esc_html__('Post Navigation', 'foodsy'),
										 'description' => esc_html__('For previous post/next post.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_post_navigation',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_post_nav_image',
								   array('default'           => 'is-nav-single-rounded',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_post_nav_image',
								   array('label'    => esc_html__('Post Navigation Image', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_post_nav_image',
										 'type'     => 'select',
										 'choices'  => array('is-nav-single-rounded' => esc_html__('Rounded', 'foodsy'),
															 'is-nav-single-square'  => esc_html__('Square', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_post_nav_animated',
								   array('default'           => 'is-nav-single-no-animated',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_post_nav_animated',
								   array('label'    => esc_html__('Post Navigation Animated', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_post_nav_animated',
										 'type'     => 'select',
										 'choices'  => array('is-nav-single-no-animated' => esc_html__('No', 'foodsy'),
															 'is-nav-single-animated'    => esc_html__('Yes', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_author_info_box',
								   array('default'           => 'yes_with_bio_info',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_author_info_box',
								   array('label'       => esc_html__('Author Info Box', 'foodsy'),
										 'description' => esc_html__('About post author module under post content.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_author_info_box',
										 'type'        => 'select',
										 'choices'     => array('yes_with_bio_info' => esc_html__('Yes - If biographical info available', 'foodsy'),
																'yes'               => esc_html__('Yes - Always', 'foodsy'),
																'no'                => esc_html__('No', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_author_info_box_style',
								   array('default'           => 'is-about-author-minimal',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_author_info_box_style',
								   array('label'    => esc_html__('Author Info Box Style', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_author_info_box_style',
										 'type'     => 'select',
										 'choices'  => array('is-about-author-minimal'      => esc_html__('Minimal', 'foodsy'),
															 'is-about-author-boxed'        => esc_html__('Boxed', 'foodsy'),
															 'is-about-author-boxed-dark'   => esc_html__('Boxed Dark', 'foodsy'),
															 'is-about-author-border'       => esc_html__('Border', 'foodsy'),
															 'is-about-author-border-arrow' => esc_html__('Border Arrow', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_author_info_box_align',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_author_info_box_align',
								   array('label'    => esc_html__('Author Info Box Align', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_author_info_box_align',
										 'type'     => 'select',
										 'choices'  => array(""                       => esc_html__('Left', 'foodsy'),
															 'is-about-author-center' => esc_html__('Center', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_related_posts',
								   array('default'           => 'Yes',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_related_posts',
								   array('label'       => esc_html__('Related Posts', 'foodsy'),
										 'description' => esc_html__('Display related posts module.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_related_posts',
										 'type'        => 'select',
										 'choices'     => $foodsy_setting_yes_no));
		
		
		$wp_customize->add_setting('foodsy_setting_related_posts_style',
								   array('default'           => 'overlay',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_related_posts_style',
								   array('label'    => esc_html__('Related Posts Style', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_related_posts_style',
										 'type'     => 'select',
										 'choices'  => array('overlay' => esc_html__('Overlay', 'foodsy'),
															 'classic' => esc_html__('Classic', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_related_posts_parallax_effect',
								   array('default'           => 'is-related-posts-parallax',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_related_posts_parallax_effect',
								   array('label'    => esc_html__('Related Posts Parallax Effect', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_related_posts_parallax_effect',
										 'type'     => 'select',
										 'choices'  => array('is-related-posts-parallax' 	=> esc_html__('Yes', 'foodsy'),
															 'is-related-posts-parallax-no' => esc_html__('No', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_related_posts_width',
								   array('default'           => 'is-related-posts-overflow',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_related_posts_width',
								   array('label'    => esc_html__('Related Posts Width', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_related_posts_width',
										 'type'     => 'select',
										 'choices'  => array('is-related-posts-overflow' => esc_html__('Overflow', 'foodsy'),
															 'is-related-posts-fixed'    => esc_html__('Fixed', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_related_posts_category',
								   array('default'           => 'all',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_related_posts_category',
								   array('label'       => esc_html__('Related Posts Category', 'foodsy'),
										 'description' => esc_html__('Display posts from all categories or within same category of current post.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_related_posts_category',
										 'type'        => 'select',
										 'choices'     => array('all'  => esc_html__('All categories', 'foodsy'),
																'same' => esc_html__('Same category', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_related_posts_order',
								   array('default'           => 'rand',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_related_posts_order',
								   array('label'       => esc_html__('Related Posts Order', 'foodsy'),
										 'description' => esc_html__('Display posts order by.', 'foodsy'),
										 'section'     => 'foodsy_section_post',
										 'settings'    => 'foodsy_setting_related_posts_order',
										 'type'        => 'select',
										 'choices'     => array('rand'          => esc_html__('Random order', 'foodsy'),
																'date'          => esc_html__('Order by date', 'foodsy'),
																'comment_count' => esc_html__('Order by number of comments', 'foodsy'))));
		
		
		$wp_customize->add_setting(
			'foodsy_setting_related_posts_count',
			array(
				'default'           => 3,
				'sanitize_callback' => 'foodsy_sanitize',
				'transport'         => 'refresh'
			)
		);
		
		$wp_customize->add_control(
			'foodsy_control_related_posts_count',
			array(
				'label'       => esc_html__('Related Posts Count', 'foodsy'),
				'description' => esc_html__('Number of posts to show.', 'foodsy'),
				'section'     => 'foodsy_section_post',
				'settings'    => 'foodsy_setting_related_posts_count',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 1,
					'max'  => 15,
					'step' => 1
				)
			)
		);
		
		
		$wp_customize->add_setting('foodsy_setting_comments_style',
								   array('default'           => 'is-comments-minimal',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_comments_style',
								   array('label'    => esc_html__('Comments Style', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_comments_style',
										 'type'     => 'select',
										 'choices'  => array('is-comments-minimal'                                             => esc_html__('Minimal', 'foodsy'),
															 'is-comments-boxed is-comments-boxed-solid'                       => esc_html__('Boxed', 'foodsy'),
															 'is-comments-boxed is-comments-border'                            => esc_html__('Border', 'foodsy'),
															 'is-comments-boxed is-comments-boxed-solid is-comments-image-out' => esc_html__('Boxed Image Out', 'foodsy'),
															 'is-comments-boxed is-comments-border is-comments-image-out'      => esc_html__('Border Image Out', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_comment_image_shape',
								   array('default'           => 'is-comments-image-rounded',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_comment_image_shape',
								   array('label'    => esc_html__('Comment Image Shape', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_comment_image_shape',
										 'type'     => 'select',
										 'choices'  => array('is-comments-image-rounded'      => esc_html__('Circle', 'foodsy'),
															 'is-comments-image-soft-rounded' => esc_html__('Soft Rounded', 'foodsy'),
															 'is-comments-image-square'       => esc_html__('Square', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_comment_form_style',
								   array('default'           => 'is-comment-form-boxed is-comment-form-border',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_comment_form_style',
								   array('label'    => esc_html__('Comment Form Style', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_comment_form_style',
										 'type'     => 'select',
										 'choices'  => array('is-comment-form-minimal'                            => esc_html__('Minimal', 'foodsy'),
															 'is-comment-form-boxed is-comment-form-boxed-solid'  => esc_html__('Boxed', 'foodsy'),
															 'is-comment-form-boxed is-comment-form-border'       => esc_html__('Border', 'foodsy'),
															 'is-comment-form-boxed is-comment-form-border-arrow' => esc_html__('Border Arrow', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_audio_embeds_position',
								   array('default'           => "",
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_audio_embeds_position',
								   array('label'    => esc_html__('Audio Embeds Position', 'foodsy'),
										 'section'  => 'foodsy_section_post',
										 'settings' => 'foodsy_setting_audio_embeds_position',
										 'type'     => 'select',
										 'choices'  => array(""                       => esc_html__('Default', 'foodsy'),
															 'is-audio-embeds-sticky' => esc_html__('Sticky', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_meta_prefix_style',
								   array('default'           => 'is-meta-with-icons',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_meta_prefix_style',
								   array('label'    => esc_html__('Meta Prefix Style', 'foodsy'),
										 'section'  => 'foodsy_section_meta_style',
										 'settings' => 'foodsy_setting_meta_prefix_style',
										 'type'     => 'select',
										 'choices'  => array('is-meta-with-none'   => esc_html__('None', 'foodsy'),
															 'is-meta-with-icons'  => esc_html__('Icons', 'foodsy'),
															 'is-meta-with-prefix' => esc_html__('Prefix Text', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_cat_link_style',
								   array('default'           => 'is-cat-link-regular',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_meta_cat_link_style',
								   array('label'    => esc_html__('Category Link Style', 'foodsy'),
										 'section'  => 'foodsy_section_meta_style',
										 'settings' => 'foodsy_setting_meta_cat_link_style',
										 'type'     => 'select',
										 'choices'  => array('is-cat-link-link-style' 						  	=> esc_html__('Link Style', 'foodsy'),
															 'is-cat-link-regular' 							  	=> esc_html__('Regular Text', 'foodsy'),
															 'is-cat-link-border-bottom' 					  	=> esc_html__('Border Bottom', 'foodsy'),
															 'is-cat-link-borders' 							  	=> esc_html__('Borders', 'foodsy'),
															 'is-cat-link-borders is-cat-link-rounded' 		  	=> esc_html__('Borders Round', 'foodsy'),
															 'is-cat-link-borders-light' 					  	=> esc_html__('Borders Light', 'foodsy'),
															 'is-cat-link-borders-light is-cat-link-rounded'  	=> esc_html__('Borders Light Round', 'foodsy'),
															 'is-cat-link-solid' 							  	=> esc_html__('Solid', 'foodsy'),
															 'is-cat-link-solid is-cat-link-rounded' 		  	=> esc_html__('Solid Round', 'foodsy'),
															 'is-cat-link-solid-light' 						  	=> esc_html__('Solid Light', 'foodsy'),
															 'is-cat-link-solid-light is-cat-link-rounded' 	  	=> esc_html__('Solid Light Round', 'foodsy'),
															 'is-cat-link-underline' 						  	=> esc_html__('Underline', 'foodsy'),
															 'is-cat-link-line-before' 						  	=> esc_html__('Line Before', 'foodsy'),
															 'is-cat-link-ribbon' 						  	  	=> esc_html__('Ribbon', 'foodsy'),
															 'is-cat-link-ribbon-left' 						  	=> esc_html__('Ribbon Left', 'foodsy'),
															 'is-cat-link-ribbon-right' 					  	=> esc_html__('Ribbon Right', 'foodsy'),
															 'is-cat-link-ribbon is-cat-link-ribbon-dark' 	  	=> esc_html__('Ribbon Dark', 'foodsy'),
															 'is-cat-link-ribbon-left is-cat-link-ribbon-dark'  => esc_html__('Ribbon Dark Left', 'foodsy'),
															 'is-cat-link-ribbon-right is-cat-link-ribbon-dark' => esc_html__('Ribbon Dark Right', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_font_size_meta',
								   array('default'           => '11',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_size_meta',
								   array('label'    => esc_html__('Meta Font Size (px)', 'foodsy'),
										 'section'  => 'foodsy_section_meta_style',
										 'settings' => 'foodsy_setting_font_size_meta',
										 'type'     => 'number',
										 'input_attrs' => array('min'  => 8,
																'max'  => 24,
																'step' => 1)));
		
		
		$wp_customize->add_setting('foodsy_setting_font_weight_meta',
								   array('default'           => '700',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_font_weight_meta',
								   array('label'    => esc_html__('Meta Font Weight', 'foodsy'),
										 'section'  => 'foodsy_section_meta_style',
										 'settings' => 'foodsy_setting_font_weight_meta',
										 'type'     => 'select',
										 'choices'  => $foodsy_font_weights));
		
		
		$wp_customize->add_setting('foodsy_setting_text_transform_meta',
								   array('default'           => 'is-meta-uppercase',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control('foodsy_control_text_transform_meta',
								   array('label'    => esc_html__('Meta Text Transform', 'foodsy'),
										 'section'  => 'foodsy_section_meta_style',
										 'settings' => 'foodsy_setting_text_transform_meta',
										 'type'     => 'select',
										 'choices'  => array('is-meta-uppercase' => esc_html__('Uppercase', 'foodsy'),
															 ""                  => esc_html__('None', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_color_cat_link_bg_border',
								   array('default'           => "",
										 'sanitize_callback' => 'sanitize_hex_color',
										 'transport'         => 'postMessage'));
		
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
																  'foodsy_control_color_cat_link_bg_border',
																  array('label'    => esc_html__('Category Link Bg/Border Color', 'foodsy'),
																		'section'  => 'foodsy_section_meta_style',
																		'settings' => 'foodsy_setting_color_cat_link_bg_border')));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_cat',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_cat',
								   array('label'    => esc_html__('Category', 'foodsy'),
										 'section'  => 'foodsy_section_meta_blog',
										 'settings' => 'foodsy_setting_meta_blog_cat',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_date',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_date',
								   array('label'    => esc_html__('Date', 'foodsy'),
										 'section'  => 'foodsy_section_meta_blog',
										 'settings' => 'foodsy_setting_meta_blog_date',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_comment',
								   array('default'           => 'hidden',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_comment',
								   array('label'    => esc_html__('Comment', 'foodsy'),
										 'section'  => 'foodsy_section_meta_blog',
										 'settings' => 'foodsy_setting_meta_blog_comment',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_comment_hide_0',
								   array('default'   		 => 1,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_comment_hide_0',
								   array('label'    => esc_html__('Hide Comment if count is 0', 'foodsy'),
										 'section'  => 'foodsy_section_meta_blog',
										 'settings' => 'foodsy_setting_meta_blog_comment_hide_0',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_author',
								   array('default'           => 'hidden',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_author',
								   array('label'    => esc_html__('Author', 'foodsy'),
										 'section'  => 'foodsy_section_meta_blog',
										 'settings' => 'foodsy_setting_meta_blog_author',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_share',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_share',
								   array('label'    => esc_html__('Share', 'foodsy'),
										 'section'  => 'foodsy_section_meta_blog',
										 'settings' => 'foodsy_setting_meta_blog_share',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_like',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_like',
								   array('label'       => esc_html__('Like', 'foodsy'),
										 'description' => esc_html__('Install and activate "I Recommend This" plugin.', 'foodsy'),
										 'section'     => 'foodsy_section_meta_blog',
										 'settings'    => 'foodsy_setting_meta_blog_like',
										 'type'        => 'select',
										 'choices'     => array('above_title'   => esc_html__('Above Title', 'foodsy'),
																'below_title'   => esc_html__('Below Title', 'foodsy'),
																'below_content' => esc_html__('Below Content', 'foodsy'),
																'hidden' 		=> esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_views_count',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_views_count',
								   array('label'       => esc_html__('Views Count', 'foodsy'),
										 'description' => esc_html__('Install and activate "Top 10 - Popular Posts" plugin.', 'foodsy'),
										 'section'     => 'foodsy_section_meta_blog',
										 'settings'    => 'foodsy_setting_meta_blog_views_count',
										 'type'        => 'select',
										 'choices'     => array('above_title'   => esc_html__('Above Title', 'foodsy'),
																'below_title'   => esc_html__('Below Title', 'foodsy'),
																'below_content' => esc_html__('Below Content', 'foodsy'),
																'hidden' 		=> esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_blog_edit',
								   array('default'           => 'hidden',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_blog_edit',
								   array('label'    => esc_html__('Edit', 'foodsy'),
										 'section'  => 'foodsy_section_meta_blog',
										 'settings' => 'foodsy_setting_meta_blog_edit',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_cat',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_cat',
								   array('label'    => esc_html__('Category', 'foodsy'),
										 'section'  => 'foodsy_section_meta_post',
										 'settings' => 'foodsy_setting_meta_post_cat',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_date',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_date',
								   array('label'    => esc_html__('Date', 'foodsy'),
										 'section'  => 'foodsy_section_meta_post',
										 'settings' => 'foodsy_setting_meta_post_date',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_comment',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_comment',
								   array('label'    => esc_html__('Comment', 'foodsy'),
										 'section'  => 'foodsy_section_meta_post',
										 'settings' => 'foodsy_setting_meta_post_comment',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_comment_hide_0',
								   array('default'   		 => 1,
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport' 		 => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_comment_hide_0',
								   array('label'    => esc_html__('Hide Comment if count is 0', 'foodsy'),
										 'section'  => 'foodsy_section_meta_post',
										 'settings' => 'foodsy_setting_meta_post_comment_hide_0',
										 'type'     => 'checkbox'));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_author',
								   array('default'           => 'hidden',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_author',
								   array('label'    => esc_html__('Author', 'foodsy'),
										 'section'  => 'foodsy_section_meta_post',
										 'settings' => 'foodsy_setting_meta_post_author',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_share',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_share',
								   array('label'    => esc_html__('Share', 'foodsy'),
										 'section'  => 'foodsy_section_meta_post',
										 'settings' => 'foodsy_setting_meta_post_share',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_like',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_like',
								   array('label'       => esc_html__('Like', 'foodsy'),
										 'description' => esc_html__('Install and activate "I Recommend This" plugin.', 'foodsy'),
										 'section'     => 'foodsy_section_meta_post',
										 'settings'    => 'foodsy_setting_meta_post_like',
										 'type'        => 'select',
										 'choices'     => array('above_title'   => esc_html__('Above Title', 'foodsy'),
																'below_title'   => esc_html__('Below Title', 'foodsy'),
																'below_content' => esc_html__('Below Content', 'foodsy'),
																'hidden' 		=> esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_views_count',
								   array('default'           => 'below_title',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_views_count',
								   array('label'       => esc_html__('Views Count', 'foodsy'),
										 'description' => esc_html__('Install and activate "Top 10 - Popular Posts" plugin.', 'foodsy'),
										 'section'     => 'foodsy_section_meta_post',
										 'settings'    => 'foodsy_setting_meta_post_views_count',
										 'type'        => 'select',
										 'choices'     => array('above_title'   => esc_html__('Above Title', 'foodsy'),
																'below_title'   => esc_html__('Below Title', 'foodsy'),
																'below_content' => esc_html__('Below Content', 'foodsy'),
																'hidden' 		=> esc_html__('Hidden', 'foodsy'))));
		
		
		$wp_customize->add_setting('foodsy_setting_meta_post_edit',
								   array('default'           => 'hidden',
										 'sanitize_callback' => 'foodsy_sanitize',
										 'transport'         => 'refresh'));
		
		$wp_customize->add_control('foodsy_control_meta_post_edit',
								   array('label'    => esc_html__('Edit', 'foodsy'),
										 'section'  => 'foodsy_section_meta_post',
										 'settings' => 'foodsy_setting_meta_post_edit',
										 'type'     => 'select',
										 'choices'  => array('above_title'   => esc_html__('Above Title', 'foodsy'),
															 'below_title'   => esc_html__('Below Title', 'foodsy'),
															 'below_content' => esc_html__('Below Content', 'foodsy'),
															 'hidden' 		 => esc_html__('Hidden', 'foodsy'))));
		
		
		/* ================================================== */
		
		
		$wp_customize->get_setting('blogname')->transport 		 = 'postMessage';
		$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	}
	
	add_action('customize_register', 'foodsy_customize_register__settings');

?>