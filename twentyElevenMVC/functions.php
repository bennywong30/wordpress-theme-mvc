<?php
/**
 * Twenty Eleven functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 584;

function mvc_include_all($pattern) {
    foreach (glob($pattern) as $file) { // remember the { and } are necessary!
        include $file;
    }
}

//includes default wordpress twentyeleven settings   
include(TEMPLATEPATH . '/functions/settings.php');

//All global helpers function
mvc_include_all(TEMPLATEPATH . '/helpers/*.php');

