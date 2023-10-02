<?php

	function foodsy_customize_register__sections($wp_customize)
	{
		$wp_customize->add_panel(
			'foodsy_panel_general',
			array(
				'title'       => esc_html__('General', 'foodsy'),
				'description' => esc_html__('General options.', 'foodsy'),
				'priority'    => 1
			)
		);
		
				$wp_customize->add_section(
					'foodsy_section_layout',
					array(
						'title'       => esc_html__('Layout', 'foodsy'),
						'description' => esc_html__('Theme layout settings.', 'foodsy'),
						'panel'       => 'foodsy_panel_general',
						'priority'    => 2
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_fonts',
					array(
						'title'       => esc_html__('Fonts', 'foodsy'),
						'description' => esc_html__('Theme font settings.', 'foodsy'),
						'panel'       => 'foodsy_panel_general',
						'priority'    => 3
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_chars',
					array(
						'title'       => esc_html__('Characters', 'foodsy'),
						'description' => esc_html__('Set character sets.', 'foodsy'),
						'panel'       => 'foodsy_panel_general',
						'priority'    => 4
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_colors',
					array(
						'title'       => esc_html__('Colors', 'foodsy'),
						'description' => esc_html__('Select theme colors.', 'foodsy'),
						'panel'       => 'foodsy_panel_general',
						'priority'    => 5
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_buttons',
					array(
						'title'       => esc_html__('Buttons', 'foodsy'),
						'description' => esc_html__('Theme buttons settings.', 'foodsy'),
						'panel'       => 'foodsy_panel_general',
						'priority'    => 6
					)
				);
		
		/* ================================================== */
		
		$wp_customize->add_panel(
			'foodsy_panel_header',
			array(
				'title'       => esc_html__('Header', 'foodsy'),
				'description' => esc_html__('Theme header settings.', 'foodsy'),
				'priority'    => 21
			)
		);
		
				$wp_customize->add_section(
					'foodsy_section_header_general',
					array(
						'title'       => esc_html__('General', 'foodsy'),
						'description' => esc_html__('General header options.', 'foodsy'),
						'panel'       => 'foodsy_panel_header',
						'priority'    => 22
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_header_menu',
					array(
						'title'       => esc_html__('Menu', 'foodsy'),
						'description' => esc_html__('Navigation menu options.', 'foodsy'),
						'panel'       => 'foodsy_panel_header',
						'priority'    => 23
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_header_top_bar',
					array(
						'title'       => esc_html__('Top Bar', 'foodsy'),
						'description' => esc_html__('Theme top bar settings.', 'foodsy'),
						'panel'       => 'foodsy_panel_header',
						'priority'    => 24
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_header_icon_box',
					array(
						'title'       => esc_html__('Icon Box', 'foodsy'),
						'description' => esc_html__('Theme icon box settings.', 'foodsy'),
						'panel'       => 'foodsy_panel_header',
						'priority'    => 25
					)
				);
		
		/* ================================================== */
		
		$wp_customize->add_section(
			'foodsy_section_footer',
			array(
				'title'       => esc_html__('Footer', 'foodsy'),
				'description' => esc_html__('Theme footer settings.', 'foodsy'),
				'priority'    => 26
			)
		);
		
		/* ================================================== */
		
		$wp_customize->add_panel(
			'foodsy_panel_featured_area',
			array(
				'title'       => esc_html__('Featured Area', 'foodsy'),
				'description' => esc_html__('Theme featured area settings.', 'foodsy'),
				'priority'    => 27
			)
		);
		
				$wp_customize->add_section(
					'foodsy_section_featured_area_general',
					array(
						'title'       => esc_html__('General', 'foodsy'),
						'description' => esc_html__('Theme general featured area settings.', 'foodsy'),
						'panel'       => 'foodsy_panel_featured_area',
						'priority'    => 28
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_featured_area_slider',
					array(
						'title'       => esc_html__('Slider', 'foodsy'),
						'description' => esc_html__('Go to Widgets section and add Main Slider widget to any Featured Area.', 'foodsy'),
						'panel'       => 'foodsy_panel_featured_area',
						'priority'    => 29
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_featured_area_link_box',
					array(
						'title'       => esc_html__('Link Box', 'foodsy'),
						'description' => esc_html__('Go to Widgets section and drag and drop Link Box widgets to Blog/Page Featured Area.', 'foodsy'),
						'panel'       => 'foodsy_panel_featured_area',
						'priority'    => 30
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_featured_area_intro',
					array(
						'title'       => esc_html__('Intro', 'foodsy'),
						'description' => esc_html__('Go to Widgets section and drag and drop Intro widget to Blog/Page Featured Area.', 'foodsy'),
						'panel'       => 'foodsy_panel_featured_area',
						'priority'    => 31
					)
				);
		
		/* ================================================== */
		
		$wp_customize->add_section(
			'foodsy_section_pages',
			array(
				'title'       => esc_html__('Pages', 'foodsy'),
				'description' => esc_html__('Default page options.', 'foodsy'),
				'priority'    => 32
			)
		);
		
		$wp_customize->add_section(
			'foodsy_section_blog',
			array(
				'title'       => esc_html__('Blog', 'foodsy'),
				'description' => esc_html__('Blog page options.', 'foodsy'),
				'priority'    => 33
			)
		);
		
		$wp_customize->add_section(
			'foodsy_section_post',
			array(
				'title'       => esc_html__('Single Post', 'foodsy'),
				'description' => esc_html__('Individual post options.', 'foodsy'),
				'priority'    => 34
			)
		);
		
		/* ================================================== */
		
		$wp_customize->add_panel(
			'foodsy_panel_meta',
			array(
				'title'       => esc_html__('Meta', 'foodsy'),
				'description' => esc_html__('Meta options.', 'foodsy'),
				'priority'    => 35
			)
		);
		
				$wp_customize->add_section(
					'foodsy_section_meta_style',
					array(
						'title'       => esc_html__('Style', 'foodsy'),
						'description' => esc_html__('Meta style options.', 'foodsy'),
						'panel'       => 'foodsy_panel_meta',
						'priority'    => 36
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_meta_blog',
					array(
						'title'       => esc_html__('Blog Meta', 'foodsy'),
						'description' => esc_html__('Blog meta options.', 'foodsy'),
						'panel'       => 'foodsy_panel_meta',
						'priority'    => 37
					)
				);
				
				$wp_customize->add_section(
					'foodsy_section_meta_post',
					array(
						'title'       => esc_html__('Single Post Meta', 'foodsy'),
						'description' => esc_html__('Post meta options.', 'foodsy'),
						'panel'       => 'foodsy_panel_meta',
						'priority'    => 38
					)
				);
		
		/* ================================================== */
		
		$wp_customize->add_section(
			'foodsy_section_sidebar',
			array(
				'title'       => esc_html__('Sidebar', 'foodsy'),
				'description' => esc_html__('Theme sidebar settings.', 'foodsy'),
				'priority'    => 39
			)
		);
		
		$wp_customize->add_section(
			'foodsy_section_portfolio',
			array(
				'title'       => esc_html__('Portfolio', 'foodsy'),
				'description' => esc_html__('Portfolio page options.', 'foodsy'),
				'priority'    => 40
			)
		);
		
		$wp_customize->add_section(
			'foodsy_section_shop',
			array(
				'title'       => esc_html__('Shop', 'foodsy'),
				'description' => esc_html__('Shop page options.', 'foodsy'),
				'priority'    => 41
			)
		);
		
		/* ================================================== */
		
		$wp_customize->add_panel(
			'widgets',
			array(
				'title'       => esc_html__('Widgets', 'foodsy'),
				'description' => esc_html__('Widgets are independent sections of content that can be placed into widgetized areas provided by your theme (commonly called sidebars).', 'foodsy'),
				'priority'    => 99
			)
		);
	}
	
	add_action('customize_register', 'foodsy_customize_register__sections');
	
	
	function foodsy_sanitize($value)
	{
		return $value;
	}

?>