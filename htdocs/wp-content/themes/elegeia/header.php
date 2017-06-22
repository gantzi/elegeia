<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Aeidia
 * @since Aeidia 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head

<body <?php body_class(); ?>>
	
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				
			  <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

				<?php if ( has_nav_menu( 'primary' )) :?>
					<div id="site-header-menu" class="site-header-menu">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' );?>

					</div><!-- .site-header-menu -->
				
				<?php endif; ?>
			</div><!-- .site-header-main -->
		</header>