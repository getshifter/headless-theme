<?php

/**
 * Headless Theme for Shifter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Headless_Theme
 * @since 0.1
 */

function headless_theme_for_shifter_theme_support()
{
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
}

add_action('after_setup_theme', 'headless_theme_for_shifter_theme_support');
