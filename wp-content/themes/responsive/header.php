<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
* Header Template
*
*
* @file header.php
* @package Responsive
* @author Emil Uzelac
* @copyright 2003 - 2012 ThemeID
* @license license.txt
* @version Release: 1.0
* @filesource wp-content/themes/responsive/header.php
* @link http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
* @since available since Release 1.0
*/
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.5.9');?>
<base href="<?php bloginfo('template_directory');?>/" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php responsive_container(); ?>
<div id="container" class="hfeed">
         
    <?php responsive_header();  ?>
    <div id="header">
    
        <?php if (has_nav_menu('top-menu', 'responsive')) { ?>
<?php wp_nav_menu(array(
'container' => '',
'fallback_cb'	=> false,
'menu_class' => 'top-menu',
'theme_location' => 'top-menu')
);
?>
<?php } ?>
<?php responsive_in_header();?>
   

<div id="logo">
<a href="<?php echo home_url('/'); ?>"><img src="images/default-logo.png"  alt="field 2 is great" /></a>
</div><!-- end of #logo -->


   
<?php wp_nav_menu(array(
'container' => '',
'theme_location' => 'header-menu')
);
?>
<?php if (has_nav_menu('sub-header-menu', 'responsive')) { ?>
<?php wp_nav_menu(array(
'container' => '',
'menu_class' => 'sub-header-menu',
'theme_location' => 'sub-header-menu')
);
?>
<?php } ?>
</div><!-- end of #header -->
<?php responsive_header_end(); ?>
    
<?php responsive_wrapper(); ?>
    <div id="wrapper" class="clearfix">
    <?php responsive_in_wrapper(); ?>