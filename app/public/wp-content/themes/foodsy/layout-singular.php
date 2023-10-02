<?php
	get_header();
?>

<?php
	foodsy_core_featured_area();
?>

<?php
	while (have_posts()) : the_post();
?>

<?php
	foodsy_post_header($post_header_top = true); // Top header.
?>

<div id="main" class="site-main">
	<div class="<?php foodsy_singular_layout_class(); ?>">
		<div id="primary" class="content-area <?php foodsy_singular_sidebar_class(); ?>">
			<div id="content" class="site-content" role="main">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="hentry-wrap">
						<?php
							foodsy_post_header($post_header_top = false); // Inline header.
						?>
						<div class="entry-content">
							<?php
								foodsy_portfolio_item__format_chooser();
								foodsy_content();
							?>
						</div> <!-- .entry-content -->
					</div> <!-- .hentry-wrap -->
					<?php
						if (is_singular('post'))
						{
							foodsy_post_tags();
							foodsy_meta('below_content');
							foodsy_core_share_links();
						}
						
						if (is_singular('post') || is_singular('portfolio'))
						{
							foodsy_single_navigation();
						}
						
						if (is_singular('post'))
						{
							foodsy_about_author();
							foodsy_core_related_posts();
						}
					?>
				</article> <!-- .post -->
				<?php
					comments_template("", true);
				?>
			</div> <!-- #content .site-content -->
		</div> <!-- #primary .content-area -->
<?php
	endwhile;
?>

		<?php
			foodsy_singular_sidebar();
		?>
	</div> <!-- layout -->
</div> <!-- #main .site-main -->

<?php
	get_footer();
?>