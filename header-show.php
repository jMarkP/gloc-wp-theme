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

  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arima+Madurai:wght@300&family=Courgette&family=Poiret+One&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">

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
  <?php echo the_show_hero_image_style(); ?>
</head>

<body <?php body_class('clear-header show-page'); ?> id="<?php echo get_post_field( 'post_name', get_post() ); ?>">
  <?php wp_body_open(); ?>

  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gloc-2022'); ?></a>

  <header class="hero">
  <div class="header-bar">
      <div class="header-rows">
        <a href="<?php echo get_home_url() ?>">
          <div class="site-branding header-row">
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <h3>Present</h3>
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

  <div id="page">