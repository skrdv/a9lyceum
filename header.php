<?php
/**
 * Theme Header
 *
 * @package understrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<meta name="viewport" content="width=620">-->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
  <link rel="shortcut icon" type="image/png" sizes="16x16" href="http://area9lyceum.com/wp-content/uploads/2018/01/index.png" />
	<link rel="shortcut icon" type="image/png" sizes="32x32" href="http://area9lyceum.com/wp-content/uploads/2018/01/index.png" />
</head>

<body <?php body_class(); ?>>
  <div class="siteHeader" id="header">
    <div id="logo" class="siteHeader-logo">
      <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php //echo file_get_contents(get_theme_file_uri().'/svg/lyceum-logo.svg'); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lyceum-logo.png'); ?>"></a>
    </div>
  
    <div class="mobile-toggle"></div>
   	 <ul id="menu" class="siteHeader-menu">
          <li><a class="nav-link" id="welcome-link" onClick="jQuery.scrollTo('#welcome',800); jQuery('.siteHeader-menu').removeClass('is__open');"><?php the_field('menu-welcome'); ?></a></li>
          <li><a class="nav-link" id="about-link" onClick="jQuery.scrollTo('#about',800); jQuery('.siteHeader-menu').removeClass('is__open');"><?php the_field('menu-about'); ?></a></li>
          <li><a class="nav-link" id="names-link" onClick="jQuery.scrollTo('#names',800); jQuery('.siteHeader-menu').removeClass('is__open');"><?php the_field('menu-lyceum'); ?></a></li>
          <li><a class="nav-link" id="press-link" onClick="jQuery.scrollTo('#press',800); jQuery('.siteHeader-menu').removeClass('is__open');"><?php the_field('menu-press'); ?></a></li>
          <li><a class="nav-link" id="team-link" onClick="jQuery.scrollTo('#team',800); jQuery('.siteHeader-menu').removeClass('is__open');"><?php the_field('menu-team'); ?></a></li>
          <li><a class="nav-link" id="contact-link" onClick="jQuery.scrollTo('#contact',800); jQuery('.siteHeader-menu').removeClass('is__open');"><?php the_field('menu-contact'); ?></a></li>
         
          <?php if (function_exists('qtrans_getLanguage')): ?>
             <div class="siteHeader-lang" id="lang">
                <?php $currentLang = qtranxf_generateLanguageSelectCode(); ?>
             </div>
          <?php endif; ?>

     </ul>    
    <div class="siteHeader-cloack"></div>
  </div>

