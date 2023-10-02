<?php

	// TGM Plugin Activation.
	
	require_once get_template_directory() . '/admin/admin--class-tgm-plugin-activation.php';


/* ============================================================================================================================================= */


	function foodsy_plugins()
	{
		$message = "";
		
		if (isset($_GET['plugin']))
		{
			if ($_GET['plugin'] == 'one-click-demo-import')
			{
				// Plugin activated.
				
				$message .= '<div class="notice notice-info foodsy-install-plugins-notice">';
				$message .= 	'<h3>' . esc_html__('One Click Demo Import', 'foodsy') . ' </h3>';
				$message .= 	'<p>' . esc_html__('Importing demo data is the quickest and easiest way to set up your new theme.', 'foodsy') . ' </p>';
				$message .= 	'<p><a class="button button-primary" href="' . esc_url(admin_url('themes.php?page=foodsy-import-theme-demos')) . '">' . esc_html__('Run Importer', 'foodsy') . '</a></p>';
				$message .= '</div>';
			}
		}
		else
		{
			$message .= '<div class="notice notice-warning foodsy-install-plugins-notice">';
			$message .= 	'<h3>' . esc_html__('Important', 'foodsy') . ' </h3>';
			$message .= 	'<p>' . esc_html__('Install/Activate ', 'foodsy') . ' <b><u>' . esc_html__('One Click Demo Import', 'foodsy') . '</u></b> ' . esc_html__('plugin to import theme demos.', 'foodsy') . '</p>';
			$message .= '</div>';
		}
		
		$config = array(
			'id'           => 'foodsy_tgmpa',
			'default_path' => "",
			'menu'         => 'foodsy-install-update-theme-plugins',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'is_automatic' => true,
			'has_notices'  => false,
			'dismissable'  => true,
			'dismiss_msg'  => '<h2>' . esc_html__('Theme Plugins', 'foodsy') . '</h2>',
			'message'      => $message,
			'strings'      => array(
				'menu_title' => esc_html__('Install Theme Plugins', 'foodsy'),
				'page_title' => esc_html__('Install/Update Theme Plugins', 'foodsy'),
			)
		);
		
		$plugins = array(
			array(
				'name'               => esc_html__('Pixelwars Core', 'foodsy'),
				'slug'               => 'pixelwars-core',
				'source'             => get_template_directory() . '/admin/plugins/pixelwars-core.zip',
				'version'            => '5.0.0',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => "",
				'is_callable'        => ""
			),
			array(
				'name'     => esc_html__('One Click Demo Import', 'foodsy'),
				'slug'     => 'one-click-demo-import',
				'required' => false
			)
		);
		
		tgmpa($plugins, $config);
	}
	
	add_action('tgmpa_register', 'foodsy_plugins');


/* ============================================================================================================================================= */
/* ============================================================================================================================================= */


	// Plugin: "One Click Demo Import".
	
	function foodsy_ocdi_plugin_page_setup($default_settings)
	{
		$default_settings['capability']  = 'import';
		$default_settings['parent_slug'] = 'themes.php';
		$default_settings['menu_slug']   = 'foodsy-import-theme-demos';
		$default_settings['menu_title']  = esc_html__('Import Theme Demo' , 'foodsy');
		$default_settings['page_title']  = esc_html__('One Click Demo Import' , 'foodsy');
		
		return $default_settings;
	}

	add_filter('ocdi/plugin_page_setup', 'foodsy_ocdi_plugin_page_setup');


/* ============================================================================================================================================= */


	function foodsy_ocdi_plugin_intro_text($default_text)
	{
		$default_text .= '<div class="notice notice-warning">';
		$default_text .= 	'<p>';
		$default_text .= 		'<b>' . esc_html__('Warning: ', 'foodsy') . '<a target="_blank" href="https://elementor.com/help/requirements/">' . esc_html__('Please check out here for the system requirements you need in order to import demo data.', 'foodsy') . '</a> ' . esc_html__('(If you are not sure whether or not your server support this, contact your host.)', 'foodsy') . '</b>';
		$default_text .= 	'</p>';
		$default_text .= '</div>';
		
		return $default_text;
	}
	
	add_filter('ocdi/plugin_intro_text', 'foodsy_ocdi_plugin_intro_text');


/* ============================================================================================================================================= */


	function foodsy_ocdi_register_plugins($plugins)
	{
		$theme_plugins = array(
			array(
				'name'        => 'Pixelwars Core',
				'slug'        => 'pixelwars-core',
				'description' => esc_html__('Advanced features for Pixelwars themes.', 'foodsy'),
				'source'      => get_template_directory_uri() . '/admin/plugins/pixelwars-core.zip',
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'Elementor Page Builder',
				'slug'        => 'elementor',
				'description' => esc_html__('Instant drag & drop lets you easily place every element on the page.', 'foodsy'),
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'Ultimate Post Kit - Addon for Elementor Page Builder',
				'slug'        => 'ultimate-post-kit',
				'description' => esc_html__('Provides fine-tuned post interface having the all-famous drag-n-drop editing feature of Elementor.', 'foodsy'),
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'Delicious Recipes',
				'slug'        => 'delicious-recipes',
				'description' => esc_html__('It is a feature-rich plugin that creates and displays recipes from your WordPress Dashboard.', 'foodsy'),
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'MC4WP - MailChimp for WordPress',
				'slug'        => 'mailchimp-for-wp',
				'description' => esc_html__('Allowing your visitors to subscribe to your newsletter should be easy. With this plugin, it finally is.', 'foodsy'),
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'Instagram Feed Gallery',
				'slug'        => 'insta-gallery',
				'description' => esc_html__('Instagram Feed Gallery is the most user-friendly Instagram plugin for WordPress.', 'foodsy'),
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'WPForms Lite',
				'slug'        => 'wpforms',
				'description' => esc_html__('WPForms allows you to create beautiful contact forms for your site in minutes, not hours!', 'foodsy'),
				'source'      => get_template_directory_uri() . '/admin/plugins/wpforms-lite.1.7.5.3.zip',
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'I Recommend This',
				'slug'        => 'i-recommend-this',
				'description' => esc_html__('This plugin allows your visitors to simply like/recommend your posts.', 'foodsy'),
				'source'      => get_template_directory_uri() . '/admin/plugins/i-recommend-this.zip',
				'required'    => false,
				'preselected' => true,
			),
			array(
				'name'        => 'Envato Market',
				'slug'        => 'envato-market',
				'description' => esc_html__('This plugin will periodically check for updates, so keeping your theme up to date is as simple as a few clicks.', 'foodsy'),
				'source'      => get_template_directory_uri() . '/admin/plugins/envato-market.zip',
				'required'    => false,
				'preselected' => true,
			)
		);
		
		return array_merge($plugins, $theme_plugins);
	}
	
	add_filter('ocdi/register_plugins', 'foodsy_ocdi_register_plugins');


/* ============================================================================================================================================= */


	function foodsy_ocdi_import_files()
	{
		$theme_directory     = trailingslashit(get_template_directory());
		$theme_directory_url = trailingslashit(get_template_directory_uri());
		
		return array(
			array(
				'import_file_name'             => esc_html__('Theme Demo', 'foodsy'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/01/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/01/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/01/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/01/screenshot.jpg',
				'preview_url'                  => 'https://themes.pixelwars.org/foodsy/demo-01/'
			),
			array(
				'import_file_name'             => esc_html__('Theme Demo Helper', 'foodsy'),
				'local_import_file'            => $theme_directory     . 'admin/demo-data/01/content.xml',
				'local_import_widget_file'     => $theme_directory     . 'admin/demo-data/01/widgets.wie',
				'local_import_customizer_file' => $theme_directory     . 'admin/demo-data/01/customizer.dat',
				'import_preview_image_url'     => $theme_directory_url . 'admin/demo-data/01/screenshot.jpg',
				'preview_url'                  => 'https://themes.pixelwars.org/foodsy/demo-01/'
			)
		);
	}
	
	add_filter('ocdi/import_files', 'foodsy_ocdi_import_files');


/* ============================================================================================================================================= */


	function foodsy_ocdi_after_import()
	{
		// Assign menus to their locations.
		
		$main_menu = get_term_by('name', 'MyMenu', 'nav_menu');
		
		set_theme_mod(
			'nav_menu_locations',
			array(
				'foodsy_theme_menu_location' => $main_menu->term_id,
			)
		);
		
		// Assign Homepage and Blog page.
		
		$homepage  = get_page_by_title('Home 01'); // Get homepage.
		$blog_page = get_page_by_title('News'); // Get blog page.
		
		update_option('show_on_front', 'page');
		update_option('page_on_front', $homepage->ID); // Set homepage.
		update_option('page_for_posts', $blog_page->ID); // Set blog page.
	}
	
	add_action('ocdi/after_import', 'foodsy_ocdi_after_import');
