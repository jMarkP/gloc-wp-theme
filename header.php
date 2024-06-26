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
  
  <script src="https://kit.fontawesome.com/f45f8c0350.js" crossorigin="anonymous"></script>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '130044594394198');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=130044594394198&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

  <?php wp_head(); ?>

  <?php echo the_hero_style(); ?>
</head>

<body <?php body_class('clear-header'); ?>>
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
        <a class="hero-home-link" href="<?php echo home_url() ?>">
          <div class="site-branding header-row">
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <h3 class="site-description"><?php bloginfo( 'description' );?></h3>
          </div>
        </a>
      </div>
      <div class="call-to-action">
        <a class="call-to-action-button" href="<?php the_join_us_link() ?>">
          Join us!
        </a>
      </div>
    </div>
  </header>



  <div id="page" class="site">

  <div class="top-matter">
  <?php
  $upcoming_show_enabled = get_theme_mod('upcoming-show-enabled');
  if ($upcoming_show_enabled) {
  ?>
    <a class="show-ticket-link" href="<?php  echo get_permalink( get_theme_mod ( 'upcoming-show-internal-page' ) ); ?>">
      <div class="show-banner ticket-and-image">

        <img src="<?php echo get_theme_mod('upcoming-show-banner') ?>" class="banner-image"></img>
    
        <div class="ticket">
          <div class="details">
            <span class="show-name"><?php echo get_theme_mod('upcoming-show-name') ?></span>
            <span class="show-dates"><?php the_show_dates() ?></span>
            <span class="show-location"><?php echo get_theme_mod('upcoming-show-location') ?></span>
          </div>
          <a class="buy-now" href="<?php the_ticket_link() ?>">
            <span>
              <i class="fa-solid fa-ticket"></i> Click here to buy tickets!
            </span>
          </a>
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

  </div>
