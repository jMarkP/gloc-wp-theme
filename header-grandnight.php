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

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  

  <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet"> 
  
  
  
  
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arima+Madurai:wght@300&family=Courgette&family=Poiret+One&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/f45f8c0350.js" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
  <?php echo the_hero_featured_image_style(); ?>
</head>

<body <?php body_class('clear-header'); ?>>
  <?php wp_body_open(); ?>

  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gloc-2022'); ?></a>

  <header class="grandnight-hero hero">
    <div class="header-bar">
      <div class="header-rows">
        <a href="<?php echo get_home_url() ?>">
          <div class="site-branding header-row">
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
          </div>     
        </a> 
      </div>
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
      </nav>
    </div>

  </header>

  <div id="grandnight-page">