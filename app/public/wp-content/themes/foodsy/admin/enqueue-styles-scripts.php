<?php

	function foodsy_font_subsets()
	{
		$font_subsets = "";
		
		if (get_theme_mod('foodsy_setting_font_char_sets_latin'))        { $font_subsets .= 'latin,'; }
		if (get_theme_mod('foodsy_setting_font_char_sets_latin_ext'))    { $font_subsets .= 'latin-ext,'; }
		if (get_theme_mod('foodsy_setting_font_char_sets_cyrillic'))     { $font_subsets .= 'cyrillic,'; }
		if (get_theme_mod('foodsy_setting_font_char_sets_cyrillic_ext')) { $font_subsets .= 'cyrillic-ext,'; }
		if (get_theme_mod('foodsy_setting_font_char_sets_greek'))        { $font_subsets .= 'greek,'; }
		if (get_theme_mod('foodsy_setting_font_char_sets_greek_ext'))    { $font_subsets .= 'greek-ext,'; }
		if (get_theme_mod('foodsy_setting_font_char_sets_vietnamese'))   { $font_subsets .= 'vietnamese,'; }
		
		if (! empty($font_subsets))
		{
			$font_subsets = substr($font_subsets, 0, -1); // Remove the last "," character. (Parameters: String, Start, Length.)
			$font_subsets = '&subset=' . $font_subsets;
		}
		
		return $font_subsets;
	}
	
	
	function foodsy_font_styles()
	{
		$font_styles 	 = ':400,400i,700,700i'; // Default font styles.
		$all_font_styles = get_theme_mod('foodsy_setting_font_styles', 'Yes');
		
		if ($all_font_styles == 'Yes')
		{
			$font_styles = ':100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
		}
		
		return $font_styles;
	}
	
	
	function foodsy_theme_fonts()
	{
		$theme_fonts  = "";
		$font_styles  = foodsy_font_styles();
		$font_subsets = foodsy_font_subsets();
		
		$customizer_fonts = array(
			get_theme_mod('foodsy_setting_font_text_logo',      foodsy_default_fonts('text_logo')),
			get_theme_mod('foodsy_setting_font_menu',           foodsy_default_fonts('menu')),
			get_theme_mod('foodsy_setting_font_widget_title',   foodsy_default_fonts('widget_title')),
			get_theme_mod('foodsy_setting_font_h1',             foodsy_default_fonts('h1')),
			get_theme_mod('foodsy_setting_font_h2_h6',          foodsy_default_fonts('h2_h6')),
			get_theme_mod('foodsy_setting_font_slider_title',   foodsy_default_fonts('slider_title')),
			get_theme_mod('foodsy_setting_font_body',           foodsy_default_fonts('body')),
			get_theme_mod('foodsy_setting_intro_font',          foodsy_default_fonts('intro')),
			get_theme_mod('foodsy_setting_font_link_box_title', foodsy_default_fonts('link_box_title')),
			get_theme_mod('foodsy_setting_font_buttons',        foodsy_default_fonts('buttons')),
			get_theme_mod('foodsy_setting_font_tagline',        foodsy_default_fonts('tagline')),
			get_theme_mod('foodsy_setting_font_top_bar',        foodsy_default_fonts('top_bar')),
			get_theme_mod('foodsy_setting_font_icon_box_title', foodsy_default_fonts('icon_box_title'))
		);
		
		$customizer_fonts = array_unique($customizer_fonts);
		
		foreach ($customizer_fonts as $font)
		{
			if (! empty($font))
			{
				$font_local = strpos($font, 'FONT_LOCAL_'); // Check for local font.
				
				if (($font != "") && ($font_local === false))
				{
					// This is a Google font.
					$theme_fonts .= $font . $font_styles . '|'; // Include font styles.
				}
			}
		}
		
		if (! empty($theme_fonts))
		{
			$theme_fonts  = substr($theme_fonts, 0, -1); // Remove the last "|" character. (Parameters: String, Start, Length.)
			$theme_fonts .= $font_subsets;
		}
		
		return $theme_fonts;
	}
	
	
	function foodsy_fonts_url()
	{
		$font_url = "";
		$fonts    = foodsy_theme_fonts();
		
		/*
		 * Translators: If there are characters in your language that are not supported
		 * by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		
		if (('off' !== _x('on', 'Google font: on or off', 'foodsy')) && (! empty($fonts)))
		{
			$font_url = add_query_arg('family', urlencode($fonts), '//fonts.googleapis.com/css');
		}
		
		return $font_url;
	}


/* ============================================================================================================================================= */


	function foodsy_fonts_local()
	{
		$customizer_fonts = array(
			get_theme_mod('foodsy_setting_font_text_logo',      foodsy_default_fonts('text_logo')),
			get_theme_mod('foodsy_setting_font_menu',           foodsy_default_fonts('menu')),
			get_theme_mod('foodsy_setting_font_widget_title',   foodsy_default_fonts('widget_title')),
			get_theme_mod('foodsy_setting_font_h1',             foodsy_default_fonts('h1')),
			get_theme_mod('foodsy_setting_font_h2_h6',          foodsy_default_fonts('h2_h6')),
			get_theme_mod('foodsy_setting_font_slider_title',   foodsy_default_fonts('slider_title')),
			get_theme_mod('foodsy_setting_font_body',           foodsy_default_fonts('body')),
			get_theme_mod('foodsy_setting_intro_font',          foodsy_default_fonts('font')),
			get_theme_mod('foodsy_setting_font_link_box_title', foodsy_default_fonts('link_box_title')),
			get_theme_mod('foodsy_setting_font_buttons',        foodsy_default_fonts('buttons')),
			get_theme_mod('foodsy_setting_font_tagline',        foodsy_default_fonts('tagline')),
			get_theme_mod('foodsy_setting_font_top_bar',        foodsy_default_fonts('top_bar')),
			get_theme_mod('foodsy_setting_font_icon_box_title', foodsy_default_fonts('icon_box_title'))
		);
		
		$customizer_fonts = array_unique($customizer_fonts);
		
		foreach ($customizer_fonts as $font)
		{
			if (! empty($font))
			{
				$font_local = strpos($font, 'FONT_LOCAL_'); // Check for local font.
				
				if ($font_local !== false)
				{
					$local_font_name   = substr($font, 11); //  Remove: FONT_LOCAL_
					$local_font_name   = strtolower($local_font_name);
					$local_font_folder = str_replace(' ', '-', $local_font_name); // Parameters: Old value, New value, String.
					$local_font_url    = get_template_directory_uri() . '/css/fonts/' . $local_font_folder . '/stylesheet.css';
					
					wp_enqueue_style('foodsy-font-' . $local_font_folder, esc_url($local_font_url));
				}
			}
		}
	}


/* ============================================================================================================================================= */


	function foodsy_enqueue_scripts__theme_styles()
	{
		$theme_directory_url = get_template_directory_uri();
		
		foodsy_fonts_local();
		wp_enqueue_style('foodsy-fonts',  foodsy_fonts_url());
		wp_enqueue_style('normalize',      $theme_directory_url . '/css/normalize.css');
		wp_enqueue_style('bootstrap',      $theme_directory_url . '/css/bootstrap.css');
		wp_enqueue_style('fluidbox',       $theme_directory_url . '/js/fluidbox/fluidbox.css');
		wp_enqueue_style('fontello',       $theme_directory_url . '/css/fonts/fontello/css/fontello.css');
		wp_enqueue_style('magnific-popup', $theme_directory_url . '/js/jquery.magnific-popup/magnific-popup.css');
		wp_enqueue_style('owl-carousel',   $theme_directory_url . '/js/owl-carousel/owl.carousel.css');
		wp_enqueue_style('foodsy-main',   $theme_directory_url . '/css/main.css');
		wp_enqueue_style('foodsy-768',    $theme_directory_url . '/css/768.css');
		wp_enqueue_style('foodsy-992',    $theme_directory_url . '/css/992.css');
		
		if (class_exists('LearnPress'))
		{
			wp_enqueue_style('foodsy-learnpress', $theme_directory_url . '/css/learnpress.css');
		}
		
		wp_enqueue_style('foodsy-tutor', $theme_directory_url . '/css/tutor.css', array('tutor-frontend'));
		
		if (function_exists('delicious_recipes_fs'))
		{
			wp_enqueue_style('foodsy-delicious-recipes', $theme_directory_url . '/css/delicious-recipes.css');
		}
		
		wp_enqueue_style('foodsy-style', get_stylesheet_uri());
	}
	
	
	function foodsy_enqueue_scripts__theme_scripts()
	{
		$theme_directory_url = get_template_directory_uri();
		
		if (is_singular() && comments_open() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
		
		wp_enqueue_script('fitvids',          $theme_directory_url . '/js/jquery.fitvids.js',                                  array('jquery'), null, true);
		wp_enqueue_script('jarallax',         $theme_directory_url . '/js/jarallax.min.js',                                    array('jquery'), null, true);
		wp_enqueue_script('jarallax-video',   $theme_directory_url . '/js/jarallax-video.min.js',                              array('jquery'), null, true);
		wp_enqueue_script('fluidbox',         $theme_directory_url . '/js/fluidbox/jquery.fluidbox.min.js',                    array('jquery'), null, true);
		wp_enqueue_script('jqueryvalidation', $theme_directory_url . '/js/jquery-validation/jquery.validate.js',               array('jquery'), null, true);
		wp_enqueue_script('isotope',          $theme_directory_url . '/js/isotope.pkgd.min.js',                                array('jquery'), null, true);
		wp_enqueue_script('magnific-popup',   $theme_directory_url . '/js/jquery.magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true);
		wp_enqueue_script('owl-carousel',     $theme_directory_url . '/js/owl-carousel/owl.carousel.min.js',                   array('jquery'), null, true);
		wp_enqueue_script('imagesloaded',     null, null, null, true);
		wp_enqueue_script('collagePlus',      $theme_directory_url . '/js/jquery.collagePlus.min.js',                          array('jquery'), null, true);
		wp_enqueue_script('fittext',          $theme_directory_url . '/js/jquery.fittext.js',                                  array('jquery'), null, true);
		wp_enqueue_script('resize-sensor',    $theme_directory_url . '/js/resize-sensor.js',                                   array('jquery'), null, true);
		wp_enqueue_script('sticky-sidebar',   $theme_directory_url . '/js/jquery.sticky-sidebar.min.js',                       array('jquery'), null, true);
		wp_enqueue_script('foodsy-main',     $theme_directory_url . '/js/main.js',                                            array('jquery'), null, true);
		
		$smooth_scroll = get_theme_mod('foodsy_setting_smooth_scroll', 'no');
		
		if ($smooth_scroll == 'yes')
		{
			wp_enqueue_script('smooth-scroll', $theme_directory_url . '/js/smooth-scroll.js', array('jquery'), null, true);
		}
	}
	
	
	function foodsy_after_setup_theme__enqueue_scripts()
	{
		add_action('wp_enqueue_scripts', 'foodsy_enqueue_scripts__theme_styles');
		add_action('wp_enqueue_scripts', 'foodsy_enqueue_scripts__theme_scripts');
	}
	
	add_action('after_setup_theme', 'foodsy_after_setup_theme__enqueue_scripts');


/* ============================================================================================================================================= */


	function foodsy_enqueue_admin()
	{
		$theme_directory_url = get_template_directory_uri();
		
		wp_enqueue_style('foodsy-admin',  $theme_directory_url . '/admin/css/admin.css');
		wp_enqueue_script('foodsy-admin', $theme_directory_url . '/admin/js/admin.js', array('jquery'), null, true);
		wp_enqueue_media();
	}
	
	add_action('admin_enqueue_scripts', 'foodsy_enqueue_admin');
	
	add_action('elementor/editor/before_enqueue_scripts', 'foodsy_enqueue_admin');


/* ============================================================================================================================================= */


	function foodsy_customize_preview()
	{
		wp_enqueue_script('foodsy-customize-preview', get_template_directory_uri() . '/admin/js/customize-preview.js', array('customize-preview'), null, true);
	}
	
	add_action('customize_preview_init', 'foodsy_customize_preview');
