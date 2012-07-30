<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="featured" class="grid col-940">
        
       


                           
      <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="images/callout1.png" />
    </li>
    <li>
      <img src="images/callout2.png"" />
    </li>
    <li>
      <img src="images/callout3.png"" />
    </li>
  </ul>
</div>
                                   
     
        
        </div><!-- end of #featured -->
               
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>