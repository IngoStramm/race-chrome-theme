<?php
/**
 * race-chrome WooCommerce hooks
 *
 * @package race-chrome
 */

/**
 * Remove native styles
 *
 */
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Content wrapper before and after
 * @see  race_chrome_before_content()
 * @see  race_chrome_after_content()
 * @since  2.2.6
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_before_main_content', 'race_chrome_before_content', 10 );
add_action( 'woocommerce_after_main_content', 'race_chrome_after_content', 10 );

/**
 * Remove sidebar
 *
 * Tip:
 * Case you use this action, change template page for full-width style in inc/woocommerce/functions.php
 *
 * @see woocommerce_sidebars
 * @since  2.2.6
 */
// remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * Breadcrumb
 *
 * Use:
 * do_action( 'race_chrome_content_top' ); on anywhere for show the breadcrumb
 *
 * @see woocommerce_breadcrumb
 * @since  2.2.6
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_action( 'race_chrome_content_top', 'woocommerce_breadcrumb', 10 );

/**
 * Filters
 * @see  race_chrome_thumbnail_columns()
 * @see  race_chrome_products_per_page()
 * @see  race_chrome_loop_columns()
 * @since  2.2.6
 */
add_filter( 'woocommerce_product_thumbnails_columns', 	'race_chrome_thumbnail_columns' );
add_filter( 'loop_shop_per_page', 						'race_chrome_products_per_page' );
add_filter( 'loop_shop_columns', 						'race_chrome_loop_columns' );
