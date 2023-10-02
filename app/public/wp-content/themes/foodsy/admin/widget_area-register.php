<?php

	function foodsy_widgets_init()
	{
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_1',
				'name'          => esc_html__('Blog Sidebar', 'foodsy'),
				'description'   => esc_html__('Add widgets.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_2',
				'name'          => esc_html__('Post Sidebar', 'foodsy'),
				'description'   => esc_html__('Add widgets.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_3',
				'name'          => esc_html__('Page Sidebar', 'foodsy'),
				'description'   => esc_html__('- Add widgets. - Select this sidebar in edit screen of a page to display it with this sidebar.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_15',
				'name'          => esc_html__('Portfolio Sidebar', 'foodsy'),
				'description'   => esc_html__('Select this sidebar in edit screen of your portfolio page. Also this sidebar can be used for portfolio categories and portfolio posts when activated from Customizer.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_16',
				'name'          => esc_html__('Shop Sidebar', 'foodsy'),
				'description'   => esc_html__('Enable sidebar for shop category page and single product page from Customizer > Sidebar.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_course',
				'name'          => esc_html__('Course Sidebar', 'foodsy'),
				'description'   => esc_html__('Enable sidebar for courses from Customizer > Sidebar > Course Sidebar. (Use with LearnPress plugin.)', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_13',
				'name'          => esc_html__('Blog Featured Area', 'foodsy'),
				'description'   => esc_html__('Add Main Slider/Link Box/Intro widgets.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_14',
				'name'          => esc_html__('Page Featured Area', 'foodsy'),
				'description'   => esc_html__('Add Main Slider/Link Box/Intro widgets.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_17',
				'name'          => esc_html__('Portfolio Featured Area', 'foodsy'),
				'description'   => esc_html__('Add Main Slider/Link Box/Intro widgets.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_18',
				'name'          => esc_html__('Shop Featured Area', 'foodsy'),
				'description'   => esc_html__('Add Main Slider/Link Box/Intro widgets.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_4',
				'name'          => esc_html__('Header Social Media Icons', 'foodsy'),
				'description'   => esc_html__('Add Social Media Icon widget per icon.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_8',
				'name'          => esc_html__('Author Social Media Icons', 'foodsy'),
				'description'   => esc_html__('Add Social Media Icon widget per icon.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar__top_bar_left',
				'name'          => esc_html__('Top Bar Left', 'foodsy'),
				'description'   => esc_html__('Add widget.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar__top_bar_right',
				'name'          => esc_html__('Top Bar Right', 'foodsy'),
				'description'   => esc_html__('Add widget.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar__logo_before',
				'name'          => esc_html__('Logo Before', 'foodsy'),
				'description'   => esc_html__('Add widget.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar__logo_after',
				'name'          => esc_html__('Logo After', 'foodsy'),
				'description'   => esc_html__('Add widget.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_5',
				'name'          => esc_html__('Footer Subscribe', 'foodsy'),
				'description'   => esc_html__('Add widget.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_6',
				'name'          => esc_html__('Footer Instagram', 'foodsy'),
				'description'   => esc_html__('Add widget.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_9',
				'name'          => esc_html__('Footer 1', 'foodsy'),
				'description'   => esc_html__('Add widgets.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_10',
				'name'          => esc_html__('Footer 2', 'foodsy'),
				'description'   => esc_html__('Add widgets.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_11',
				'name'          => esc_html__('Footer 3', 'foodsy'),
				'description'   => esc_html__('Add widgets.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_12',
				'name'          => esc_html__('Footer 4', 'foodsy'),
				'description'   => esc_html__('Add widgets.', 'foodsy'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title"><span>',
				'after_title'   => '</span></h3>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'foodsy_sidebar_7',
				'name'          => esc_html__('Footer Copyright Text', 'foodsy'),
				'description'   => esc_html__('Add Text widget.', 'foodsy'),
				'before_widget' => "",
				'after_widget'  => "",
				'before_title'  => '<span style="display: none;">',
				'after_title'   => '</span>'
			)
		);
		
		
		$foodsy_sidebars_with_commas = get_option('foodsy_sidebars_with_commas');
		
		if ($foodsy_sidebars_with_commas != "")
		{
			$sidebars = preg_split("/[\s]*[,][\s]*/", $foodsy_sidebars_with_commas);
			
			foreach ($sidebars as $sidebar)
			{
				$sidebar_lowercase = strtolower($sidebar);
				$sidebar_id        = str_replace(" ", '_', $sidebar_lowercase); // Parameters: Old value, New value, String.
				
				register_sidebar(
					array(
						'id'            => $sidebar_id,
						'name'          => $sidebar,
						'description'   => esc_html__('Add widgets.', 'foodsy'),
						'before_widget' => '<aside id="%1$s" class="widget %2$s">',
						'after_widget'  => '</aside>',
						'before_title'  => '<h3 class="widget-title"><span>',
						'after_title'   => '</span></h3>'
					)
				);
			}
		}
	}
	
	add_action('widgets_init', 'foodsy_widgets_init');

?>