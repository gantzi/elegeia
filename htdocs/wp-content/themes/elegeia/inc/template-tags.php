<?php
/**
 * Custom elegeia template tags
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Elegeia
 * @since Elegeia 1.0
 */

function elegeia_the_custom_logo(){
	if(function_exists('the_custom_logo') ) {
		the_custom_logo();
	}

}

