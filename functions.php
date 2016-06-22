<?php
/**
 * Use this snippet in you active theme's functions.php file or plugin file to do the magic.
 *
 * @package WordPress
 */


/**
 * Unset/remove the non required default image sizes
 *
 * @param array $sizes the array of default sizes
 *
 * @return array $sizes the modified array
 */
function se_remove_default_image_sizes( $sizes ) {
	unset( $sizes['thumbnail'] );
	unset( $sizes['medium'] );
	unset( $sizes['large'] );
	
	return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'se_remove_default_image_sizes' );

/**
 * Test function to display the available additional image sizes.
 *
 * @param void
 *
 * @return void
 */
function se_test_function() {
	global $_wp_additional_image_sizes;
	var_dump( $_wp_additional_image_sizes );
}
add_action( 'admin_init', 'se_test_function' );

/**
 * Unset/remove the non required additional image sizes
 *
 * @param void
 *
 * @return void
 */
function se_remove_additional_image_sizes() {
	remove_image_size( 'shop_single' );
}
add_action( 'init', 'se_remove_additional_image_sizes' );
