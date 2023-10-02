<?php
	get_header();
?>

<?php
	foodsy_core_featured_area();
?>

<div id="main" class="site-main">
	<div class="layout-medium">
		<div id="primary" class="content-area <?php foodsy_blog_sidebar_class(); ?>">
			<div id="content" class="site-content" role="main">
				<?php
					foodsy_archive_title();
				?>
				
				<?php
					$foodsy_1st_full = foodsy_1st_full_yes_no();
				?>
				
				<div class="blog-grid-wrap">
					<div class="blog-stream blog-grid blog-small masonry <?php if ($foodsy_1st_full == 'Yes') { echo 'first-full'; } ?>" data-layout="<?php echo foodsy_blog_grid_type(); ?>" data-item-width="<?php foodsy_blog_grid_post_width(); ?>">
						<?php
							if (have_posts()) :
								
								while (have_posts()) : the_post();
									?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<div class="hentry-wrap">
												<?php
													if ($foodsy_1st_full == 'Yes')
													{
														foodsy_featured_media__layout_grid($first_full = 'Yes', foodsy_blog_grid_type());
														$foodsy_1st_full = 'No';
													}
													else
													{
														foodsy_featured_media__layout_grid($first_full = 'No', foodsy_blog_grid_type());
													}
												?>
												<div class="hentry-middle">
													<header class="entry-header">
														<?php
															foodsy_meta('above_title');
														?>
														<h2 class="entry-title">
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</h2>
														<?php
															foodsy_meta('below_title');
														?>
													</header> <!-- .entry-header -->
													<div class="entry-content">
														<?php
															foodsy_content();
														?>
													</div> <!-- .entry-content -->
													<?php
														foodsy_meta('below_content');
													?>
												</div> <!-- .hentry-middle -->
											</div> <!-- .hentry-wrap -->
										</article>
									<?php
								endwhile;
							else :
							
								foodsy_content_none();
							
							endif;
						?>
					</div> <!-- .blog-stream .blog-grid .blog-small .masonry -->
				</div> <!-- .blog-grid-wrap -->
				<?php
					foodsy_blog_navigation();
				?>
			</div> <!-- #content .site-content -->
		</div> <!-- #primary .content-area -->
		
		<?php
			foodsy_blog_sidebar();
		?>
	</div> <!-- .layout-medium -->
</div> <!-- #main .site-main -->

<?php
	get_footer();
?>