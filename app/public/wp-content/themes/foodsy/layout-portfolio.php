<?php
	get_header();
?>

<?php
	foodsy_core_featured_area();
?>

<div id="main" class="site-main">
	<div class="<?php foodsy_portfolio_layout_class(); ?>">
		<div id="primary" class="content-area <?php foodsy_portfolio_sidebar_class(); ?>">
			<div id="content" class="site-content" role="main">
				<div class="post-header post-header-classic portfolio-header">
					<header class="entry-header" <?php foodsy_core_title_visibility(); ?>>
						<h1 class="entry-title">
							<?php
								if (is_tax('portfolio-category'))
								{
									single_cat_title();
								}
								else
								{
									single_post_title();
								}
							?>
						</h1> <!-- .entry-title -->
					</header> <!-- .entry-header -->
				</div> <!-- .post-header .post-header-classic .portfolio-header -->
				
				<ul id="filters" class="filters">
					<?php
						$foodsy_categories_parent = 0; // Get top level categories.
						
						if (is_tax('portfolio-category'))
						{
							$foodsy_queried_category_id = get_queried_object_id();  // Get categories under the queried category.
							$foodsy_categories_parent   = $foodsy_queried_category_id;
						}
						
						$foodsy_categories = get_categories(
							array(
								'type'     => 'portfolio',
								'taxonomy' => 'portfolio-category',
								'parent'   => $foodsy_categories_parent
							)
						);
						
						if (count($foodsy_categories) >= 1)
						{
							?>
								<li class="current">
									<a data-filter="*" href="#">
										<?php
											esc_html_e('all', 'foodsy');
										?>
									</a>
								</li>
							<?php
						}
						
						foreach ($foodsy_categories as $category)
						{
							?>
								<li>
									<a data-filter=".<?php echo esc_attr($category->slug); ?>" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
										<?php
											echo esc_html($category->name);
										?>
									</a>
								</li>
							<?php
						}
					?>
				</ul> <!-- #filters .filters -->
				
				<?php
					$foodsy_portfolio_page_post_width = get_theme_mod('foodsy_setting_portfolio_page_post_width', '320');
				?>
				
				<?php
					$foodsy_portfolio_page_grid_type_layout = 'masonry';
					$foodsy_portfolio_page_grid_type 		= get_theme_mod('foodsy_setting_portfolio_page_grid_type', 'masonry'); // Also used for feat-img below.
					
					if (($foodsy_portfolio_page_grid_type == 'fitRows_square') || ($foodsy_portfolio_page_grid_type == 'fitRows_wide'))
					{
						$foodsy_portfolio_page_grid_type_layout = 'fitRows';
					}
				?>
				
				<div class="blog-grid-wrap">
					<div class="blog-stream blog-grid blog-small portfolio-grid masonry" data-layout="<?php echo esc_attr($foodsy_portfolio_page_grid_type_layout); ?>" data-item-width="<?php echo esc_attr($foodsy_portfolio_page_post_width); ?>">
						<?php
							function foodsy_portfolio_item_feat_img($foodsy_portfolio_page_grid_type)
							{
								if ($foodsy_portfolio_page_grid_type == 'fitRows_square')
								{
									the_post_thumbnail('foodsy_image_size_3');
								}
								elseif ($foodsy_portfolio_page_grid_type == 'fitRows_wide')
								{
									the_post_thumbnail('foodsy_image_size_4');
								}
								else
								{
									the_post_thumbnail('foodsy_image_size_2');
								}
							}
							
							function foodsy_portfolio_item_feat_img__lightbox_gallery($foodsy_portfolio_page_grid_type)
							{
								if ($foodsy_portfolio_page_grid_type == 'fitRows_square')
								{
									return get_the_post_thumbnail(null, 'foodsy_image_size_3');
								}
								elseif ($foodsy_portfolio_page_grid_type == 'fitRows_wide')
								{
									return get_the_post_thumbnail(null, 'foodsy_image_size_4');
								}
								else
								{
									return get_the_post_thumbnail(null, 'foodsy_image_size_2');
								}
							}
						?>
						
						<?php
							function foodsy_portfolio_item_type_content__standard($feat_img, $foodsy_portfolio_page_grid_type)
							{
								?>
									<a href="<?php the_permalink(); ?>">
										<?php
											if ($feat_img)
											{
												foodsy_portfolio_item_feat_img($foodsy_portfolio_page_grid_type);
											}
											else
											{
												the_title();
											}
										?>
									</a>
								<?php
							}
						?>
						
						<?php
							function foodsy_portfolio_item_type_content__lightbox_feat_img($feat_img, $foodsy_portfolio_page_grid_type)
							{
								$feat_img_url = "";
								$feat_img_id  = get_post_thumbnail_id();
								$feat_img_url_width_cropped = wp_get_attachment_image_src($feat_img_id, 'foodsy_image_size_7');  // magnific-popup-width
								
								if ($feat_img_url_width_cropped[1] > $feat_img_url_width_cropped[2])
								{
									$feat_img_url = $feat_img_url_width_cropped[0];
								}
								else
								{
									$feat_img_url_height_cropped = wp_get_attachment_image_src($feat_img_id, 'foodsy_image_size_8'); // magnific-popup-height
									$feat_img_url = $feat_img_url_height_cropped[0];
								}
								
								?>
									<a class="lightbox" title="<?php the_title_attribute(); ?>" href="<?php echo esc_url($feat_img_url); ?>">
										<?php
											if ($feat_img)
											{
												foodsy_portfolio_item_feat_img($foodsy_portfolio_page_grid_type);
											}
											else
											{
												the_title();
											}
										?>
									</a>
								<?php
							}
						?>
						
						<?php
							global $foodsy_portfolio_item_has_feat_img;
							global $foodsy_portfolio_page_grid_type__lightbox_gallery;
							
							function foodsy_portfolio_item_type_content__lightbox_gallery($feat_img, $foodsy_portfolio_page_grid_type)
							{
								the_content();
							}
						?>
						
						<?php
							function foodsy_portfolio_item_type_content__lightbox_audio($feat_img, $foodsy_portfolio_page_grid_type)
							{
								$browser_address_url = foodsy_core_featured_media__url();
								
								if (! empty($browser_address_url))
								{
									$xml_url 	   = 'http://soundcloud.com/oembed?url=' . $browser_address_url;
									$xml_content   = simplexml_load_file($xml_url);
									$xml_attribute = $xml_content->html; // Get iframe.
									preg_match_all('#src=([\'"])(.+?)\1#is', $xml_attribute, $out); // Split iframe.
									$url = $out[2][0]; // Get url.
									
									?>
										<a class="lightbox mfp-iframe" title="<?php the_title_attribute(); ?>" href="<?php echo esc_url($url); ?>">
											<?php
												if ($feat_img)
												{
													foodsy_portfolio_item_feat_img($foodsy_portfolio_page_grid_type);
												}
												else
												{
													the_title();
												}
											?>
										</a>
									<?php
								}
							}
						?>
						
						<?php
							function foodsy_portfolio_item_type_content__lightbox_video($feat_img, $foodsy_portfolio_page_grid_type)
							{
								$browser_address_url = foodsy_core_featured_media__url();
								
								if (! empty($browser_address_url))
								{
									?>
										<a class="lightbox mfp-iframe" title="<?php the_title_attribute(); ?>" href="<?php echo esc_url($browser_address_url); ?>">
											<?php
												if ($feat_img)
												{
													foodsy_portfolio_item_feat_img($foodsy_portfolio_page_grid_type);
												}
												else
												{
													the_title();
												}
											?>
										</a>
									<?php
								}
							}
						?>
						
						<?php
							function foodsy_portfolio_item_type_content__direct_url($feat_img, $foodsy_portfolio_page_grid_type)
							{
								$direct_url = foodsy_core_featured_media__url();
								
								if (! empty($direct_url))
								{
									$new_tab = foodsy_core_featured_media__new_tab();
									
									?>
										<a <?php if ($new_tab != false) { echo 'target="_blank"'; } ?> href="<?php echo esc_url($direct_url); ?>">
											<?php
												if ($feat_img)
												{
													foodsy_portfolio_item_feat_img($foodsy_portfolio_page_grid_type);
												}
												else
												{
													the_title();
												}
											?>
										</a>
									<?php
								}
							}
						?>
						
						<?php
							function foodsy_portfolio_item_type_content_selector($portfolio_item_format, $feat_img, $foodsy_portfolio_page_grid_type)
							{
								if ($portfolio_item_format == 'image')
								{
									foodsy_portfolio_item_type_content__lightbox_feat_img($feat_img, $foodsy_portfolio_page_grid_type);
								}
								elseif ($portfolio_item_format == 'gallery')
								{
									foodsy_portfolio_item_type_content__lightbox_gallery($feat_img, $foodsy_portfolio_page_grid_type);
								}
								elseif ($portfolio_item_format == 'audio')
								{
									foodsy_portfolio_item_type_content__lightbox_audio($feat_img, $foodsy_portfolio_page_grid_type);
								}
								elseif ($portfolio_item_format == 'video')
								{
									foodsy_portfolio_item_type_content__lightbox_video($feat_img, $foodsy_portfolio_page_grid_type);
								}
								elseif ($portfolio_item_format == 'link')
								{
									foodsy_portfolio_item_type_content__direct_url($feat_img, $foodsy_portfolio_page_grid_type);
								}
								else
								{
									foodsy_portfolio_item_type_content__standard($feat_img, $foodsy_portfolio_page_grid_type);
								}
							}
						?>
						
						<?php
							function foodsy_query_args()
							{
								if (is_tax('portfolio-category'))
								{
									$queried_category_slug = get_query_var('term');
									
									return array(
										'post_type'          => 'portfolio',
										'portfolio-category' => $queried_category_slug,
										'posts_per_page'     => -1
									);
								}
								else
								{
									return array(
										'post_type'      => 'portfolio',
										'posts_per_page' => -1
									);
								}
							}
							
							$foodsy_query = new WP_Query(
								foodsy_query_args()
							);
							
							if ($foodsy_query->have_posts()) :
								while ($foodsy_query->have_posts()) : $foodsy_query->the_post();
									?>
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<div class="hentry-wrap">
												<?php
													$portfolio_item_format = get_post_format();
												?>
												<?php
													if (has_post_thumbnail())
													{
														?>
															<div class="featured-image">
																<?php
																	$foodsy_portfolio_item_has_feat_img = true;
																	$foodsy_portfolio_page_grid_type__lightbox_gallery = $foodsy_portfolio_page_grid_type;
																	foodsy_portfolio_item_type_content_selector($portfolio_item_format, $feat_img = true, $foodsy_portfolio_page_grid_type);
																?>
															</div> <!-- .featured-image -->
														<?php
													}
												?>
												<div class="hentry-middle">
													<header class="entry-header">
														<h2 class="entry-title">
															<?php
																$foodsy_portfolio_item_has_feat_img = false;
																$foodsy_portfolio_page_grid_type__lightbox_gallery = $foodsy_portfolio_page_grid_type;
																foodsy_portfolio_item_type_content_selector($portfolio_item_format, $feat_img = false, $foodsy_portfolio_page_grid_type);
															?>
														</h2> <!-- .entry-title -->
														<?php
															if (has_excerpt())
															{
																?>
																	<div class="entry-meta">
																		<span class="portfolio-excerpt">
																			<?php
																				echo get_the_excerpt();
																			?>
																		</span> <!-- .portfolio-excerpt -->
																	</div> <!-- .entry-meta -->
																<?php
															}
														?>
													</header> <!-- .entry-header -->
												</div> <!-- .hentry-middle -->
											</div> <!-- .hentry-wrap -->
										</div> <!-- .hentry -->
									<?php
								endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div> <!-- .blog-stream .blog-grid .blog-small .portfolio-grid .masonry -->
				</div> <!-- .blog-grid-wrap -->
				
				<?php
					if (is_tax('portfolio-category'))
					{
						$category_description = category_description();
						
						if (! empty($category_description))
						{
							?>
								<article>
									<div class="entry-content">
										<?php
											echo esc_html($category_description);
										?>
									</div> <!-- .entry-content -->
								</article> <!-- Category Description -->
							<?php
						}
					}
					else
					{
						while (have_posts()) : the_post();
						
							$page_content = get_the_content();
							
							if (! empty($page_content))
							{
								?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="entry-content">
											<?php
												foodsy_content();
											?>
										</div> <!-- .entry-content -->
									</article> <!-- Page Content -->
									<?php
										comments_template("", true);
									?>
								<?php
							}
						
						endwhile;
					}
				?>
			</div> <!-- #content .site-content -->
		</div> <!-- #primary .content-area -->
		
		<?php
			if (is_tax('portfolio-category'))
			{
				$portfolio_category_sidebar = get_theme_mod('foodsy_setting_sidebar_portfolio_category', 'No');
				
				if ($portfolio_category_sidebar == 'Yes')
				{
					foodsy_blog_sidebar();
				}
			}
			else
			{
				foodsy_singular_sidebar();
			}
		?>
	</div> <!-- layout -->
</div> <!-- #main .site-main -->

<?php
	get_footer();
?>