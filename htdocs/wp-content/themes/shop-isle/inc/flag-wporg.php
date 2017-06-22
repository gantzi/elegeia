<?php
/**
 * WordPress.org flag setup and frontpage template filter.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */


/**
 * Function used for transition to PRO
 */
function shop_isle_option_used_for_pro() {
	$current_theme = get_stylesheet();

	if ( $current_theme != 'shop-isle-pro' ) {
		update_option( 'shop_isle_wporg_flag', 'true' );
	}
}

add_action( 'init','shop_isle_option_used_for_pro' );
