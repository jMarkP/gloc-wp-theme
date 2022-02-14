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
  <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@0,600;1,200&display=swap"
    rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gloc-2022'); ?></a>

  <header class="header-bar hero-image">

    <div class="site-logo">
      <?php 
    the_custom_logo(); 
    ?>
    </div>
    <div class="header-rows">
      <div class="site-title header-row">
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        <h3 class="site-description"><?php bloginfo( 'description' );?></h3>
      </div>

      <div class="header-row">
        <nav id="site-navigation" class="main-navigation">
          <button class="menu-toggle" aria-controls="primary-menu"
            aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gloc-2022' ); ?></button>
          <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
        </nav><!-- #site-navigation -->
      </div>
    </div>
  </header>


  <div id="page" class="site">