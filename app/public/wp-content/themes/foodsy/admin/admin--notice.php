<?php

	function foodsy__admin_notices_html($current_screen, $plugin_status__pixelwars_core, $plugin_status__one_click_demo_import)
	{
		?>
			<div class="notice foodsy-admin-notice">
				<div class="foodsy-admin-notice--header">
					<h1 class="foodsy-admin-notice--title"><?php esc_html_e('Welcome to Foodsy Theme', 'foodsy'); ?></h1>
					
					<p><?php esc_html_e('Thank you for choosing our theme!', 'foodsy'); ?></p>
				</div>
				
				<?php
					if (isset($_GET['pixelwars_core']))
					{
						if ($_GET['pixelwars_core'] == 'activate')
						{
							activate_plugin('pixelwars-core/pixelwars-core.php'); // Activate Plugin: "Pixelwars Core".
						}
					}
					else
					{
						if (($plugin_status__pixelwars_core == 'installed') && ($plugin_status__pixelwars_core != 'activated')) // Plugin: Installed but not activated.
						{
							?>
								<div class="foodsy-admin-notice--activate-pixelwars-core-plugin">
									<p>
										<?php esc_html_e('Activate Pixelwars Core plugin for advanced features.', 'foodsy'); ?>
										
										[<a href="<?php echo esc_url(admin_url('index.php?pixelwars_core=activate')); ?>"><?php esc_html_e('Activate Pixelwars Core', 'foodsy'); ?></a>]
									</p>
								</div>
							<?php
						}
					}
				?>
				
				<div class="foodsy-admin-notice--helpful-links">
					<div class="foodsy-admin-notice--column">
						<h3 class="foodsy-admin-notice--column-title"><?php esc_html_e('Customizer', 'foodsy'); ?></h3>
						
						<p>
							<?php esc_html_e('The Customizer allows you to preview changes to your site before publishing them.', 'foodsy'); ?>
						</p>
						
						<p>
							<a class="foodsy-admin-notice--button foodsy-admin-notice--button-primary" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php esc_html_e('Customize Your Site', 'foodsy'); ?></a>
						</p>
					</div>
					
					<div class="foodsy-admin-notice--column">
						<h3 class="foodsy-admin-notice--column-title"><?php esc_html_e('Theme Demo', 'foodsy'); ?></h3>
						
						<p>
							<?php
								esc_html_e('Importing demo data is the quickest and easiest way to set up your new theme.', 'foodsy');
							?>
						</p>
						<p>
							<?php
								if (isset($_GET['one_click_demo_import']))
								{
									if ($_GET['one_click_demo_import'] == 'activate')
									{
										activate_plugin('one-click-demo-import/one-click-demo-import.php'); // Activate Plugin: "One Click Demo Import".
										
										?>
											<a class="foodsy-admin-notice--button" href="<?php echo esc_url(admin_url('themes.php?page=foodsy-import-theme-demos')); ?>"><?php esc_html_e('Run Importer', 'foodsy'); ?></a>
										<?php
									}
								}
								else
								{
									if ($plugin_status__one_click_demo_import == 'activated') // Plugin: Activated.
									{
										?>
											<a class="foodsy-admin-notice--button" href="<?php echo esc_url(admin_url('themes.php?page=foodsy-import-theme-demos')); ?>"><?php esc_html_e('Run Importer', 'foodsy'); ?></a>
										<?php
									}
									elseif (($plugin_status__one_click_demo_import == 'installed') && ($plugin_status__one_click_demo_import != 'activated')) // Plugin: Installed but not activated.
									{
										?>
											<a class="foodsy-admin-notice--button" href="<?php echo esc_url(admin_url('index.php?one_click_demo_import=activate')); ?>"><?php esc_html_e('Activate Importer', 'foodsy'); ?></a>
										<?php
									}
									else // Plugin: Not installed.
									{
										?>
											<a class="foodsy-admin-notice--button" href="<?php echo esc_url(admin_url('themes.php?page=foodsy-install-update-theme-plugins')); ?>"><?php esc_html_e('Install Importer', 'foodsy'); ?></a>
										<?php
									}
								}
							?>
							
							<a target="_blank" href="https://elementor.com/help/requirements/" title="<?php esc_attr_e('The system requirements you need in order to import demo data', 'foodsy'); ?>"><?php esc_html_e('Requirements', 'foodsy'); ?></a>
						</p>
					</div>
					
					<div class="foodsy-admin-notice--column">
						<h3 class="foodsy-admin-notice--column-title"><?php esc_html_e('Need Help?', 'foodsy'); ?></h3>
						
						<ul>
							<li>
								<a target="_blank" href="https://themes.pixelwars.org/doc/foodsy/"><?php esc_html_e('Documentation', 'foodsy'); ?></a>
							</li>
							<li>
								<a target="_blank" href="https://www.pixelwars.org/forums/"><?php esc_html_e('Get Support', 'foodsy'); ?></a>
							</li>
							<li>
								<a target="_blank" href="https://themeforest.net/user/pixelwars/portfolio"><?php esc_html_e('Changelog', 'foodsy'); ?></a>
							</li>
							<li>
								<a href="<?php echo esc_url(admin_url('site-health.php')); ?>"><?php esc_html_e('Site Health', 'foodsy'); ?></a>
							</li>
						</ul>
					</div>
					
					<div class="foodsy-admin-notice--column">
						<h3 class="foodsy-admin-notice--column-title"><?php esc_html_e('Rate Theme', 'foodsy'); ?></h3>
						
						<ul>
							<li>
								<a target="_blank" href="https://themeforest.net/downloads"><?php esc_html_e('Rate on ThemeForest', 'foodsy'); ?></a>
							</li>
							<li>
								<a target="_blank" href="https://www.pixelwars.org/themes/"><?php esc_html_e('More Themes', 'foodsy'); ?></a>
							</li>
							<li>
								<a target="_blank" href="https://www.pixelwars.org/newsletter/"><?php esc_html_e('Newsletter', 'foodsy'); ?></a>
							</li>
							<li>
								<a target="_blank" href="https://themeforest.net/licenses"><?php esc_html_e('License', 'foodsy'); ?></a>
							</li>
						</ul>
					</div>
					
					<div class="foodsy-admin-notice--column">
						<h3 class="foodsy-admin-notice--column-title"><?php esc_html_e('Follow Us', 'foodsy'); ?></h3>
						
						<div class="foodsy-admin-notice--social-media-links">
							<p>
								<a title="Follow us on Facebook" target="_blank" href="https://www.facebook.com/pixelwarsdesign"><span class="dashicons dashicons-facebook-alt"></span></a>
								
								<a title="Follow us on Twitter" target="_blank" href="https://twitter.com/pixelwarsdesign"><span class="dashicons dashicons-twitter"></span></a>
							</p>
							<p>
								<a title="Follow us on Instagram" target="_blank" href="https://www.instagram.com/pixelwarsdesign/"><span class="dashicons dashicons-instagram"></span></a>
								
								<a title="Follow us on YouTube" target="_blank" href="https://www.youtube.com/c/pixelwarsdesign"><span class="dashicons dashicons-youtube"></span></a>
							</p>
						</div>
					</div>
				</div>
				
				<div class="foodsy-admin-notice--footer">
					<p>
						<?php esc_html_e('Could you please give it a 5-star rating on', 'foodsy'); ?> <a target="_blank" href="https://themeforest.net/downloads"><?php esc_html_e('ThemeForest', 'foodsy'); ?></a><?php esc_html_e('? Your feedback will boost our motivation and help us continue to improve this theme :)', 'foodsy'); ?>
					</p>
					<p>
						&#x2014; <?php esc_html_e('Pixelwars Team', 'foodsy'); ?>
					</p>
				</div>
			</div>
		<?php
	}


/* ============================================================================================================================================= */
/* ============================================================================================================================================= */


	function foodsy__is_plugin_installed($plugin)
	{
		$installed_plugins = get_plugins();
		
		return isset($installed_plugins[$plugin]);
	}
	
	
	function foodsy__is_plugin_activated($plugin)
	{
		return in_array($plugin, (array) get_option('active_plugins', array()), true ) || is_plugin_active_for_network($plugin);
	}
	
	
	function foodsy__get_plugin_status($plugin)
	{
		$plugin_status = 'not_installed';
		
		if (foodsy__is_plugin_activated($plugin))
		{
			$plugin_status = 'activated';
		}
		elseif (foodsy__is_plugin_installed($plugin))
		{
			$plugin_status = 'installed';
		}
		
		return $plugin_status;
	}


/* ============================================================================================================================================= */


	function foodsy__admin_notices()
	{
		$plugin_status__pixelwars_core        = foodsy__get_plugin_status('pixelwars-core/pixelwars-core.php');
		$plugin_status__one_click_demo_import = foodsy__get_plugin_status('one-click-demo-import/one-click-demo-import.php');
		
		$current_screen = get_current_screen();
		
		if ($current_screen->id === 'dashboard')
		{
			foodsy__admin_notices_html($current_screen, $plugin_status__pixelwars_core, $plugin_status__one_click_demo_import);
		}
	}
	
	add_action('admin_notices', 'foodsy__admin_notices', 1);
