<?php

	function foodsy__admin_head__add_help_tab_content()
	{
		$content  = '<div class="foodsy-admin-help-tab">';
		$content .= 	'<h3>' . esc_html__('Foodsy Theme by Pixelwars', 'foodsy') . '</h3>';
		
		$content .= 	'<h4>' . esc_html__('Need Help?', 'foodsy') . '</h4>';
		
		$content .= 	'<ul>';
		$content .= 		'<li><a target="_blank" href="https://themes.pixelwars.org/doc/foodsy/">' . esc_html__('Documentation', 'foodsy') . '</a></li>';
		
		$content .= 		'<li><a target="_blank" href="https://www.pixelwars.org/forums/">' . esc_html__('Get Support', 'foodsy') . '</a></li>';
		
		$content .= 		'<li><a target="_blank" href="https://themeforest.net/user/pixelwars/portfolio">' . esc_html__('Changelog', 'foodsy') . '</a></li>';
		$content .= 	'</ul>';
		
		$content .= 	'<h4>' . esc_html__('Follow Us', 'foodsy') . '</h4>';
		
		$content .= 	'<div class="foodsy-admin-help-tab--social-media-links">';
		$content .= 		'<p>';
		$content .= 			'<a target="_blank" href="https://www.facebook.com/pixelwarsdesign"><span class="dashicons dashicons-facebook-alt"></span></a>';
		
		$content .= 			'<a target="_blank" href="https://twitter.com/pixelwarsdesign"><span class="dashicons dashicons-twitter"></span></a>';
		
		$content .= 			'<a target="_blank" href="https://www.instagram.com/pixelwarsdesign/"><span class="dashicons dashicons-instagram"></span></a>';
		
		$content .= 			'<a target="_blank" href="https://www.youtube.com/c/pixelwarsdesign"><span class="dashicons dashicons-youtube"></span></a>';
		$content .= 		'</p>';
		$content .= 	'</div>';
		$content .= '</div>';
		
		return $content;
	}
	
	
	function foodsy__admin_head__add_help_tab()
	{
		$screen = get_current_screen();
		
		$screen->add_help_tab(
			array(
				'id'       => 'foodsy__help_tab',
				'title'    => esc_html__('Theme Help', 'foodsy'),
				'content'  => foodsy__admin_head__add_help_tab_content(),
				'priority' => 1,
			)
		);
	}
	
	add_action('admin_head', 'foodsy__admin_head__add_help_tab');
