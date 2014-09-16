<?php
/**
 * Hey Lisa functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage heylisa
 * @since Hey Lisa 1.0
 */

add_action('wp_enqueue_scripts', 'include_custom_styles');
//add_action('init', 'custom_event');

//Include Custom Styles
function include_custom_styles(){
	wp_register_style('custom-style', get_template_directory_uri(). '/css/main.css', array(), 20140507, all);
	wp_enqueue_style('custom-style');
}

function custom_event(){
	register_post_type('events',array(
		'lables' => array(
				'name' => __('events'),
				'singular_name' => __('event')
			),
		'public' => 'true',
		'has_archive' => 'true',
		'rewrite' => array('slug' => 'events')
	));
}

