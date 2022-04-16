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


  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Kalam:wght@300;400;700&family=Patua+One&family=Square+Peg&family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arima+Madurai:wght@300&family=Courgette&family=Poiret+One&display=swap" rel="stylesheet">

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
    <a class="show-ticket-link" href="<?php the_ticket_link() ?>">
      <div class="show-banner ticket-and-image">

        <img src="<?php echo get_theme_mod('upcoming-show-banner') ?>" class="banner-image"></img>
    
        <div class="ticket">
          <div class="details">
            <span class="show-name"><?php echo get_theme_mod('upcoming-show-name') ?></span>
            <span class="show-dates"><?php echo get_theme_mod('upcoming-show-start-date') ?> &ndash; <?php echo get_theme_mod('upcoming-show-end-date') ?></span>
            <span class="show-location"><?php echo get_theme_mod('upcoming-show-location') ?></span>
          </div>
          <div class="buy-now">
            Click here to buy tickets!
          </div>
        </div>
      </div>
    </a>



  <?php
  }
  ?>


        <div class="nav-row">
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

  <div id="page" class="site">