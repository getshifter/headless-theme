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

/**
 * Assign Nav Menu Locations
 * 
 * Creates nav menu locations from
 * registered nav menus and assigns them.
 */
function assign_nav_menu_location(string $slug = '', int $term_id = 0, string $name)
{
	$locations = get_theme_mod('nav_menu_locations');
	$locations[$slug] = $term_id;
	register_nav_menu($slug, __($name, 'headless-theme'));
	set_theme_mod('nav_menu_locations', $locations);
}

array_map(
	fn ($menu) =>
	assign_nav_menu_location($menu->slug, $menu->term_id, $menu->name),
	wp_get_nav_menus()
);
