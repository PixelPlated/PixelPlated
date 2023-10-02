<?php

	// For single portfolio posts.
	
	function foodsy_portfolio_item__short_description()
	{
		if (has_excerpt())
		{
			?>
				<p>
					<?php
						echo get_the_excerpt();
					?>
				</p>
			<?php
		}
	}
	
	
	function foodsy_portfolio_item__feat_img($linked_url = "")
	{
		if (! empty($linked_url))
		{
			$image_big = $linked_url;
			
			?>
				<figure class="wp-caption aligncenter">
					<a href="<?php echo esc_url($image_big); ?>">
						<?php
							the_post_thumbnail('foodsy_image_size_7');
						?>
					</a>
					<?php
						if (has_excerpt())
						{
							?>
								<figcaption class="wp-caption-text">
									<?php
										echo get_the_excerpt();
									?>
								</figcaption>
							<?php
						}
					?>
				</figure>
			<?php
		}
		else
		{
			if (has_post_thumbnail())
			{
				?>
					<p>
						<?php
							the_post_thumbnail('foodsy_image_size_7');
						?>
					</p>
				<?php
			}
		}
	}
	
	
	function foodsy_portfolio_item__format_image()
	{
		if (has_post_thumbnail())
		{
			$image_big 				 = "";
			$feat_img_id 			 = get_post_thumbnail_id();
			$image_big_width_cropped = wp_get_attachment_image_src($feat_img_id, 'foodsy_image_size_7'); // magnific-popup-width
			
			if ($image_big_width_cropped[1] > $image_big_width_cropped[2])
			{
				$image_big = $image_big_width_cropped[0];
			}
			else
			{
				$image_big_height_cropped = wp_get_attachment_image_src($feat_img_id, 'foodsy_image_size_8'); // magnific-popup-height
				$image_big 				  = $image_big_height_cropped[0];
			}
			
			foodsy_portfolio_item__feat_img($linked_url = $image_big);
		}
	}
	
	
	function foodsy_portfolio_item__format_link()
	{
		$direct_url = foodsy_core_featured_media__url();
		
		if (! empty($direct_url))
		{
			$new_tab = foodsy_core_featured_media__new_tab();
			
			?>
				<p>
					<a class="button" <?php if ($new_tab != false) { echo 'target="_blank"'; } ?> href="<?php echo esc_url($direct_url); ?>">
						<?php
							esc_html_e('Go To Link', 'foodsy');
						?>
					</a>
				</p>
			<?php
		}
	}
	
	
	function foodsy_portfolio_item__format_audio_video()
	{
		$browser_address_url = foodsy_core_featured_media__url();
		
		if (! empty($browser_address_url))
		{
			echo foodsy_iframe_from_xml($browser_address_url);
		}
	}
	
	
	function foodsy_portfolio_item__format_chooser()
	{
		if (is_singular('portfolio'))
		{
			if (has_post_format('audio') || has_post_format('video'))
			{
				foodsy_portfolio_item__format_audio_video();
				foodsy_portfolio_item__short_description();
			}
			elseif (has_post_format('link'))
			{
				foodsy_portfolio_item__format_link();
				foodsy_portfolio_item__short_description();
				foodsy_portfolio_item__feat_img();
			}
			elseif (has_post_format('image'))
			{
				foodsy_portfolio_item__format_image();
			}
			elseif (has_post_format('gallery'))
			{
				foodsy_portfolio_item__short_description();
			}
		}
	}

?>