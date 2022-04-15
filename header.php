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
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <?php echo the_hero_style(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gloc-2022'); ?></a>

  <header class="hero">
    <div class="header-bar">

      <div class="site-logo">
        <?php 
        the_custom_logo(); 
        ?>
      </div>
      <div class="header-rows">
        <div class="site-branding header-row">
          <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
          <h3 class="site-description"><?php bloginfo( 'description' );?></h3>
        </div>

        <!-- <div class="header-row nav-row">
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
        </div> -->
      </div>
      <?php
      $upcoming_show_enabled = get_theme_mod('upcoming-show-enabled');
      if ($upcoming_show_enabled) {
      ?>
      <div class="call-to-action">
        <a class="tickets-call-to-action" href="<?php the_ticket_link() ?>">
          <?php buy_tickets_text() ?>
        </a>
      </div>
      <?php
      }
      ?>
    </div>
  </header>

  <?php
  if ($upcoming_show_enabled) {
  ?>
  <div class="show-banner">
    <a href="<?php the_ticket_link() ?>">
    <div class="label">
      Come see our next show, <strong><?php echo get_theme_mod('upcoming-show-name') ?></strong>.
      From <?php echo get_theme_mod('upcoming-show-start-date') ?> to <?php echo get_theme_mod('upcoming-show-end-date') ?>.
    </div>
      <img src="<?php echo get_theme_mod('upcoming-show-banner') ?>" class="banner-image"></img>
    </a>
  </div>

  <?php
  }
  ?>

  <div id="page" class="site">