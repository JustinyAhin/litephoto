<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lite_Photo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<header id="masthead" class="site-header">

		<nav id="site-navigation" class="col-md-4 main-navigation main-navigation-left">
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'menu-1',
                'depth'	          => 2,
                'menu_id'         => 'right-menu',
                'menu_class'      => 'navbar-nav mr-auto right-menu',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
		</nav><!-- #site-navigation -->

		<div class="col-md-4 site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="col-md-4 main-navigation main-navigation-right">
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'menu-2',
                'depth'	          => 2,
                'menu_id'         => 'right-menu',
                'menu_class'      => 'navbar-nav mr-auto left-menu',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
