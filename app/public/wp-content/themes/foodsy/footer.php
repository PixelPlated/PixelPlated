        <footer id="colophon" class="site-footer" role="contentinfo">
			<?php
				if (is_active_sidebar('foodsy_sidebar_5'))
				{
					?>
						<div class="footer-subscribe">
							<div class="layout-medium">
								<?php
									dynamic_sidebar('foodsy_sidebar_5');
								?>
							</div> <!-- .layout-medium -->
						</div> <!-- .footer-subscribe -->
					<?php
				}
			?>
			
			<?php
				if (is_active_sidebar('foodsy_sidebar_6'))
				{
					?>
						<div class="footer-insta">
							<?php
								dynamic_sidebar('foodsy_sidebar_6');
							?>
						</div> <!-- .footer-insta -->
					<?php
				}
			?>
			
			<?php
				if (is_active_sidebar('foodsy_sidebar_9') || 
					is_active_sidebar('foodsy_sidebar_10') || 
					is_active_sidebar('foodsy_sidebar_11') || 
					is_active_sidebar('foodsy_sidebar_12'))
				{
					?>
						<div class="footer-widgets widget-area">
							<div class="layout-medium">
								<div class="row">
									<?php
										function foodsy_footer_columns_3()
										{
											?>
												<div class="col-md-4">
													<?php
														dynamic_sidebar('foodsy_sidebar_9');
													?>
												</div> <!-- .col-md-4 -->
												<div class="col-md-4">
													<?php
														dynamic_sidebar('foodsy_sidebar_10');
													?>
												</div> <!-- .col-md-4 -->
												<div class="col-md-4">
													<?php
														dynamic_sidebar('foodsy_sidebar_11');
													?>
												</div> <!-- .col-md-4 -->
											<?php
										}
									?>
									<?php
										function foodsy_footer_columns_4()
										{
											?>
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('foodsy_sidebar_9');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('foodsy_sidebar_10');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('foodsy_sidebar_11');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('foodsy_sidebar_12');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
											<?php
										}
									?>
									<?php
										$foodsy_footer_columns = get_theme_mod('foodsy_setting_footer_columns', '4');
										
										if ($foodsy_footer_columns == '3')
										{
											foodsy_footer_columns_3();
										}
										else
										{
											foodsy_footer_columns_4();
										}
									?>
								</div> <!-- .row -->
							</div> <!-- .layout-medium -->
						</div> <!-- .footer-widgets .widget-area -->
					<?php
				}
			?>
			
			<?php
				if (is_active_sidebar('foodsy_sidebar_7'))
				{
					?>
						<div class="site-info">
							<?php
								dynamic_sidebar('foodsy_sidebar_7');
							?>
						</div> <!-- .site-info -->
					<?php
				}
			?>
		</footer> <!-- #colophon .site-footer -->
	</div>
    
	<?php
		wp_footer();
	?>
</body>
</html>