<?php
/**
 * General functions used to integrate this theme with WooCommerce.
 *
 * @package race-chrome
 */

if ( ! function_exists( 'race_chrome_before_content' ) ) {
	/**
	 * Before Content
	 * Wraps all WooCommerce content in wrappers which match the theme markup
	 * @since   2.2.6
	 * @return  void
	 */
	function race_chrome_before_content() {
		?>
		<main id="content" class="<?php echo race_chrome_classes_page_sidebar(); ?>" tabindex="-1" role="main">
		<?php
	}
}

if ( ! function_exists( 'race_chrome_after_content' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 * @since   2.2.6
	 * @return  void
	 */
	function race_chrome_after_content() {
		?>
		</main><!-- #main -->
		<?php
	}
}

/**
 * Default loop columns on product archives
 * @return integer products per row
 * @since  2.2.6
 */
function race_chrome_loop_columns() {
	return apply_filters( 'race_chrome_loop_columns', 4 ); // 4 products per row
}

/**
 * Product gallery thumnail columns
 * @return integer number of columns
 * @since  2.2.6
 */
function race_chrome_thumbnail_columns() {
	return intval( apply_filters( 'race_chrome_product_thumbnail_columns', 4 ) );
}

/**
 * Products per page
 * @return integer number of products
 * @since  2.2.6
 */
function race_chrome_products_per_page() {
	return intval( apply_filters( 'race_chrome_products_per_page', 12 ) );
}
