<?php
/**
 * Functions
 *
 * My First Blog
 *
 */

if(!function_exists('my_first_blog_supports')) {

	function my_first_blog_supports() {

		add_theme_support('custom-logo');

	}
	add_action('after_setup_theme','my_first_blog_supports');


}



if(!function_exists('my_first_blog_register_menus')) {

	function my_first_blog_register_menus() {

		register_nav_menus([
			'header_menu' => esc_html__('Header Menu', 'my-first-blog'),
			'footer_menu' => esc_html__('Footer Menu','my-first-blog')
		]);

	}
	add_action('init','my_first_blog_register_menus');
}




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