<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$template = wc_get_theme_slug_for_templates();

switch ( $template ) {
	case 'twentyten' :
		echo '</div></div>';
		break;
	case 'twentyeleven' :
		echo '</div>';
		get_sidebar( 'shop' );
		echo '</div>';
		break;
	case 'twentytwelve' :
		echo '</div></div>';
		break;
	case 'twentythirteen' :
		echo '</div></div>';
		break;
	case 'twentyfourteen' :
		echo '</div></div></div>';
		get_sidebar( 'content' );
		break;
	case 'twentyfifteen' :
		echo '</div></div>';
		break;
	case 'twentysixteen' :
		echo '</main></div>';
		break;
	default :
		// echo '</main></div>';
		break;
}
?>

			</div> <!-- #content .site-content -->
		</div> <!-- #primary .content-area -->
		<?php
			$foodsy_sidebar_shop = 'No';
			
			$foodsy_shop_page_id        = get_option('woocommerce_shop_page_id');
			$foodsy_select_page_sidebar = get_option('foodsy_select_page_sidebar' . '__' . $foodsy_shop_page_id, 'No Sidebar');
			
			if (is_active_sidebar($foodsy_select_page_sidebar))
			{
				$foodsy_sidebar_shop = 'Yes';
			}
			
			$foodsy_sidebar_product_category = get_theme_mod('foodsy_setting_sidebar_product_category', 'No');
			$foodsy_sidebar_single_product 	 = get_theme_mod('foodsy_setting_sidebar_single_product', 'No');
			
			if ((is_post_type_archive('product') && ($foodsy_sidebar_shop == 'Yes')) || 
				(is_tax('product_cat') && ($foodsy_sidebar_shop == 'Yes') && ($foodsy_sidebar_product_category == 'Yes')) || 
				(is_singular('product') && ($foodsy_sidebar_shop == 'Yes') && ($foodsy_sidebar_single_product == 'Yes')))
				{
					foodsy_sidebar();
				}
		?>
	</div> <!-- .layout-medium -->
</div> <!-- #main .site-main -->
