<?php
/**
 * Functions
 *
 * My First Blog
 *
 */

if(!function_exists('my_first_blog_register_scripts')) {

	function my_first_blog_register_scripts() {

		$theme_version = wp_get_theme()->get('Version');

		// Style Css
		wp_enqueue_style('styleCss', get_stylesheet_uri(), [], $theme_version, 'all');

		// Browser Js
		wp_enqueue_script('browserJs',get_template_directory_uri() . '/assets/js/browser.min.js',['jquery'], $theme_version, true);

		// Breakpoints Js
		wp_enqueue_script('breakpointsJs',get_template_directory_uri() . '/assets/js/breakpoints.min.js',['jquery'], $theme_version, true);

		// Util Js
		wp_enqueue_script('utilJs',get_template_directory_uri() . '/assets/js/util.js',['jquery'], $theme_version, true);

		// Main Js
		wp_enqueue_script('mainJs',get_template_directory_uri() . '/assets/js/main.js',['jquery'], $theme_version, true);

	}
	add_action('wp_enqueue_scripts','my_first_blog_register_scripts');


}