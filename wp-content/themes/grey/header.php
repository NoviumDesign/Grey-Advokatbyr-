<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Grey
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'grey' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="menu-toggle-wrapper">
      <button class="menu-toggle"><?php _e( 'Menu', 'grey' ); ?></button>
    </div>
    <nav id="mobile-navigation">
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
        <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="search" id="search" placeholder="Sök">
      </form>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      <?php wp_nav_menu( array( 'theme_location' => 'language' ) ); ?>    
    </nav>  
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>

    <div class="site-branding">
      <div class="site-title">
        <?php if ( get_header_image() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php header_image(); ?>" alt="Logo">
        </a>
        <?php endif; // End header image check. ?>
      </div>
    </div>

  </header>

  <div id="content" class="site-content">