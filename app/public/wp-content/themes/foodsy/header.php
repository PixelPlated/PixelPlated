<!doctype html>
<html <?php language_attributes(); ?> <?php foodsy_html_class(); ?> <?php echo foodsy_html_data_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php
		$foodsy_mobile_zoom = get_theme_mod('foodsy_setting_mobile_zoom', 'Yes');
		
		if ($foodsy_mobile_zoom == 'No')
		{
			?>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<?php
		}
		else
		{
			?>
				<meta name="viewport" content="width=device-width, initial-scale=1">
			<?php
		}
	?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>
	<?php
		wp_body_open();
	?>
    <div id="page" class="hfeed site">
		<?php
			if (is_active_sidebar('foodsy_sidebar__top_bar_left') || is_active_sidebar('foodsy_sidebar__top_bar_right'))
			{
				?>
					<div class="top-bar">
						<div class="top-bar-wrap">
							<div class="top-bar-left">
								<?php
									dynamic_sidebar('foodsy_sidebar__top_bar_left');
								?>
							</div> <!-- .top-bar-left -->
							<div class="top-bar-right">
								<?php
									dynamic_sidebar('foodsy_sidebar__top_bar_right');
								?>
							</div> <!-- .top-bar-right -->
						</div> <!-- .top-bar-wrap -->
					</div> <!-- .top-bar -->
				<?php
			}
		?>
		
        <header id="masthead" class="site-header" role="banner">
			<?php
				$foodsy_header_bg_video = get_theme_mod('foodsy_setting_header_bg_video', "");
			?>
			<div class="header-wrap" data-parallax-video="<?php echo esc_url($foodsy_header_bg_video); ?>">
				<div class="header-wrap-inner">
					<div class="site-branding">
						<div class="site-branding-wrap">
							<div class="site-branding-left">
								<?php
									dynamic_sidebar('foodsy_sidebar__logo_before');
								?>
							</div> <!-- .site-branding-left -->
							
							<div class="site-branding-center">
								<?php
									$foodsy_image_logo_id          = get_theme_mod('foodsy_setting_image_logo', "");
									$foodsy_image_logo_negative_id = get_theme_mod('foodsy_setting_image_logo_negative', "");
									
									if ((! empty($foodsy_image_logo_id)) || (! empty($foodsy_image_logo_negative_id)))
									{
										?>
											<h1 class="site-title">
												<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
													<span class="screen-reader-text"><?php bloginfo('name'); ?></span>
													
													<?php
														if (! empty($foodsy_image_logo_id))
														{
															$image_logo_url = wp_get_attachment_image_url($foodsy_image_logo_id , 'foodsy_image_size_6');
															
															?>
																<img alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url($image_logo_url); ?>">
															<?php
														}
													?>
													
													<?php
														if (! empty($foodsy_image_logo_negative_id))
														{
															$image_logo_negative_url = wp_get_attachment_image_url($foodsy_image_logo_negative_id , 'foodsy_image_size_6');
															
															?>
																<img class="logo-negative" alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url($image_logo_negative_url); ?>">
															<?php
														}
													?>
												</a>
											</h1> <!-- .site-title -->
										<?php
									}
									else
									{
										$site_title = get_bloginfo('name');
										
										if ($site_title != "")
										{
											?>
												<h1 class="site-title">
													<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
														<span class="screen-reader-text">
															<?php
																echo esc_html($site_title);
															?>
														</span>
														<span class="site-title-text">
															<?php
																echo esc_html($site_title);
															?>
														</span>
													</a>
												</h1> <!-- .site-title -->
											<?php
										}
									}
								?>
								
								<p class="site-description">
									<?php
										$foodsy_tagline = get_bloginfo('description');
										echo esc_html($foodsy_tagline);
									?>
								</p> <!-- .site-description -->
							</div> <!-- .site-branding-center -->
							
							<div class="site-branding-right">
								<?php
									dynamic_sidebar('foodsy_sidebar__logo_after');
								?>
							</div> <!-- .site-branding-right -->
						</div> <!-- .site-branding-wrap -->
					</div> <!-- .site-branding -->
					
					<nav id="site-navigation" class="main-navigation site-navigation" role="navigation">
						<div class="menu-wrap">
							<div class="layout-medium">
								<a class="menu-toggle">
									<span class="lines"></span>
								</a> <!-- .menu-toggle -->
								
								<?php
									do_action('foodsy_header_cart_icon');
								?>
								
								<?php
									wp_nav_menu(
										array(
											'theme_location'  => 'foodsy_theme_menu_location',
											'menu'            => 'foodsy_theme_menu_location',
											'menu_class'      => "",
											'container'       => 'div',
											'container_class' => 'nav-menu',
											'fallback_cb'     => false
										)
									);
								?>
								
								<?php
									$foodsy_header_search = get_theme_mod('foodsy_setting_header_search', "");
									
									if ($foodsy_header_search != 'is-header-search-disabled')
									{
										?>
											<a class="search-toggle toggle-link"></a>
											
											<div class="search-container">
												<div class="search-box">
													<form class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
														<label>
															<span>
																<?php
																	esc_html_e('Search for', 'foodsy');
																?>
															</span>
															<input type="search" id="search-field" name="s" placeholder="<?php esc_attr_e('type and hit enter', 'foodsy'); ?>">
														</label>
														<input type="submit" class="search-submit" value="<?php esc_attr_e('Search', 'foodsy'); ?>">
													</form> <!-- .search-form -->
												</div> <!-- .search-box -->
											</div> <!-- .search-container -->
										<?php
									}
								?>
								
								<?php
									if (is_active_sidebar('foodsy_sidebar_4'))
									{
										?>
											<div class="social-container widget-area">
												<?php
													dynamic_sidebar('foodsy_sidebar_4');
												?>
											</div> <!-- .social-container -->
										<?php
									}
								?>
							</div> <!-- .layout-medium -->
						</div> <!-- .menu-wrap -->
					</nav> <!-- #site-navigation .main-navigation .site-navigation -->
				</div> <!-- .header-wrap-inner -->
			</div> <!-- .header-wrap -->
        </header> <!-- #masthead .site-header -->