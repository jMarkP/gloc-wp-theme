<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gloc_2022
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@0,600;1,200&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<nav id="site-navigation" class="main-navigation">
			<input id="menu-toggle" type="checkbox" aria-controls="primary-menu" aria-expanded="false" />
			<label class='menu-button-container' for="menu-toggle">
				<div class='menu-button'></div>
			</label>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'gloc-2022'); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gloc-2022'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
				<div class="site-name">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php
				$gloc_2022_description = get_bloginfo('description', 'display');
				if ($gloc_2022_description || is_customize_preview()) :
				?>
					<h3 class="site-description"><?php echo $gloc_2022_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></h3>
				<?php endif; ?>
				</div>
			</div><!-- .site-branding -->
			<div class="highlight-gallery">
			<?php
			echo do_shortcode('[slider_pro id=899]');
			?>
			</div>
		</header><!-- #masthead -->
