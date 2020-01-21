<?php
/**
 * Headless Theme for Shifter functions and definitions
 * Copied from HeadlessThemeForShifter
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Headless_Theme_for_Shifter
 * @since 0.1
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function headless_theme_for_shifter_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
//	add_theme_support(
//		'custom-background',
//		array(
//			'default-color' => 'f5efe0',
//		)
//	);

	// Set content-width.	add_theme_support(
//		'custom-background',
//		array(
//			'default-color' => 'f5efe0',
//		)
//	);
//	global $content_width;
//	if ( ! isset( $content_width ) ) {
//		$content_width = 580;
//	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'headless_theme_for_shifter-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'headless_theme_for_shifter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'headless_theme_for_shifter' );

	// Add support for full and wide align images.
//	add_theme_support( 'align-wide' );

	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
//	if ( is_customize_preview() ) {
//		require get_template_directory() . '/inc/starter-content.php';
//		add_theme_support( 'starter-content', headless_theme_for_shifter_get_starter_content() );
//	}

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
//	$loader = new HeadlessThemeForShifter_Script_Loader();
//	add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action( 'after_setup_theme', 'headless_theme_for_shifter_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */
//require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
//require get_template_directory() . '/classes/class-headless_theme_for_shifter-svg-icons.php';
//require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
//require get_template_directory() . '/classes/class-headless_theme_for_shifter-customize.php';

// Require Separator Control class.
//require get_template_directory() . '/classes/class-headless_theme_for_shifter-separator-control.php';

// Custom comment walker.
//require get_template_directory() . '/classes/class-headless_theme_for_shifter-walker-comment.php';

// Custom page walker.
//require get_template_directory() . '/classes/class-headless_theme_for_shifter-walker-page.php';

// Custom script loader class.
//require get_template_directory() . '/classes/class-headless_theme_for_shifter-script-loader.php';

// Non-latin language handling.
//require get_template_directory() . '/classes/class-headless_theme_for_shifter-non-latin-languages.php';

// Custom CSS.
//require get_template_directory() . '/inc/custom-css.php';

/**
 * Register and Enqueue Styles.
 */
//function headless_theme_for_shifter_register_styles() {
//
//	$theme_version = wp_get_theme()->get( 'Version' );
//
//	wp_enqueue_style( 'headless_theme_for_shifter-style', get_stylesheet_uri(), array(), $theme_version );
//	wp_style_add_data( 'headless_theme_for_shifter-style', 'rtl', 'replace' );
//
//	// Add output of Customizer settings as inline style.
//	wp_add_inline_style( 'headless_theme_for_shifter-style', headless_theme_for_shifter_get_customizer_css( 'front-end' ) );
//
//	// Add print CSS.
//	wp_enqueue_style( 'headless_theme_for_shifter-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );
//
//}
//
//add_action( 'wp_enqueue_scripts', 'headless_theme_for_shifter_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
//function headless_theme_for_shifter_register_scripts() {
//
//	$theme_version = wp_get_theme()->get( 'Version' );
//
//	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
//
//	wp_enqueue_script( 'headless_theme_for_shifter-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
//	wp_script_add_data( 'headless_theme_for_shifter-js', 'async', true );
//
//}

//add_action( 'wp_enqueue_scripts', 'headless_theme_for_shifter_register_scripts' );

/** Enqueue non-latin language styles
 *
 * @since 1.0.0
 *
 * @return void
 */
//function headless_theme_for_shifter_non_latin_languages() {
//	$custom_css = HeadlessThemeForShifter_Non_Latin_Languages::get_non_latin_css( 'front-end' );
//
//	if ( $custom_css ) {
//		wp_add_inline_style( 'headless_theme_for_shifter-style', $custom_css );
//	}
//}
//
//add_action( 'wp_enqueue_scripts', 'headless_theme_for_shifter_non_latin_languages' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
//function headless_theme_for_shifter_menus() {
//
//	$locations = array(
//		'primary'  => __( 'Desktop Horizontal Menu', 'headless_theme_for_shifter' ),
//		'expanded' => __( 'Desktop Expanded Menu', 'headless_theme_for_shifter' ),
//		'mobile'   => __( 'Mobile Menu', 'headless_theme_for_shifter' ),
//		'footer'   => __( 'Footer Menu', 'headless_theme_for_shifter' ),
//		'social'   => __( 'Social Menu', 'headless_theme_for_shifter' ),
//	);
//
//	register_nav_menus( $locations );
//}
//
//add_action( 'init', 'headless_theme_for_shifter_menus' );

/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 *
 * @return string $html
 */
function headless_theme_for_shifter_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( strpos( $html, ' style=' ) === false ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;

}

//add_filter( 'get_custom_logo', 'headless_theme_for_shifter_get_custom_logo' );
//
//if ( ! function_exists( 'wp_body_open' ) ) {
//
//	/**
//	 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
//	 */
//	function wp_body_open() {
//		do_action( 'wp_body_open' );
//	}
//}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
//function headless_theme_for_shifter_skip_link() {
//	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'headless_theme_for_shifter' ) . '</a>';
//}
//
//add_action( 'wp_body_open', 'headless_theme_for_shifter_skip_link', 5 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function headless_theme_for_shifter_sidebar_registration() {
//
//	// Arguments used in all register_sidebar() calls.
//	$shared_args = array(
//		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
//		'after_title'   => '</h2>',
//		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
//		'after_widget'  => '</div></div>',
//	);
//
//	// Footer #1.
//	register_sidebar(
//		array_merge(
//			$shared_args,
//			array(
//				'name'        => __( 'Footer #1', 'headless_theme_for_shifter' ),
//				'id'          => 'sidebar-1',
//				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'headless_theme_for_shifter' ),
//			)
//		)
//	);
//
//	// Footer #2.
//	register_sidebar(
//		array_merge(
//			$shared_args,
//			array(
//				'name'        => __( 'Footer #2', 'headless_theme_for_shifter' ),
//				'id'          => 'sidebar-2',
//				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'headless_theme_for_shifter' ),
//			)
//		)
//	);
//
//}
//
//add_action( 'widgets_init', 'headless_theme_for_shifter_sidebar_registration' );

/**
 * Enqueue supplemental block editor styles.
 */
//function headless_theme_for_shifter_block_editor_styles() {
//
//	$css_dependencies = array();
//
//	// Enqueue the editor styles.
//	wp_enqueue_style( 'headless_theme_for_shifter-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );
//	wp_style_add_data( 'headless_theme_for_shifter-block-editor-styles', 'rtl', 'replace' );
//
//	// Add inline style from the Customizer.
//	wp_add_inline_style( 'headless_theme_for_shifter-block-editor-styles', headless_theme_for_shifter_get_customizer_css( 'block-editor' ) );
//
//	// Add inline style for non-latin fonts.
//	wp_add_inline_style( 'headless_theme_for_shifter-block-editor-styles', HeadlessThemeForShifter_Non_Latin_Languages::get_non_latin_css( 'block-editor' ) );
//
//	// Enqueue the editor script.
//	wp_enqueue_script( 'headless_theme_for_shifter-block-editor-script', get_theme_file_uri( '/assets/js/editor-script-block.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
//}
//
//add_action( 'enqueue_block_editor_assets', 'headless_theme_for_shifter_block_editor_styles', 1, 1 );

/**
 * Enqueue classic editor styles.
 */
function headless_theme_for_shifter_classic_editor_styles() {

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
	);

	add_editor_style( $classic_editor_styles );

}

add_action( 'init', 'headless_theme_for_shifter_classic_editor_styles' );

/**
 * Output Customizer settings in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 *
 * @return array $mce_init TinyMCE styles.
 */
//function headless_theme_for_shifter_add_classic_editor_customizer_styles( $mce_init ) {
//
//	$styles = headless_theme_for_shifter_get_customizer_css( 'classic-editor' );
//
//	if ( ! isset( $mce_init['content_style'] ) ) {
//		$mce_init['content_style'] = $styles . ' ';
//	} else {
//		$mce_init['content_style'] .= ' ' . $styles . ' ';
//	}
//
//	return $mce_init;
//
//}

//add_filter( 'tiny_mce_before_init', 'headless_theme_for_shifter_add_classic_editor_customizer_styles' );

/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 *
 * @return array $mce_init TinyMCE styles.
 */
//function headless_theme_for_shifter_add_classic_editor_non_latin_styles( $mce_init ) {
//
//	$styles = HeadlessThemeForShifter_Non_Latin_Languages::get_non_latin_css( 'classic-editor' );
//
//	// Return if there are no styles to add.
//	if ( ! $styles ) {
//		return $mce_init;
//	}
//
//	if ( ! isset( $mce_init['content_style'] ) ) {
//		$mce_init['content_style'] = $styles . ' ';
//	} else {
//		$mce_init['content_style'] .= ' ' . $styles . ' ';
//	}
//
//	return $mce_init;
//
//}
//
//add_filter( 'tiny_mce_before_init', 'headless_theme_for_shifter_add_classic_editor_non_latin_styles' );

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function headless_theme_for_shifter_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( 'Accent Color', 'headless_theme_for_shifter' ),
			'slug'  => 'accent',
			'color' => headless_theme_for_shifter_get_color_for_area( 'content', 'accent' ),
		),
		array(
			'name'  => __( 'Primary', 'headless_theme_for_shifter' ),
			'slug'  => 'primary',
			'color' => headless_theme_for_shifter_get_color_for_area( 'content', 'text' ),
		),
		array(
			'name'  => __( 'Secondary', 'headless_theme_for_shifter' ),
			'slug'  => 'secondary',
			'color' => headless_theme_for_shifter_get_color_for_area( 'content', 'secondary' ),
		),
		array(
			'name'  => __( 'Subtle Background', 'headless_theme_for_shifter' ),
			'slug'  => 'subtle-background',
			'color' => headless_theme_for_shifter_get_color_for_area( 'content', 'borders' ),
		),
	);

	// Add the background option.
//	$background_color = get_theme_mod( 'background_color' );
//	if ( ! $background_color ) {
//		$background_color_arr = get_theme_support( 'custom-background' );
//		$background_color     = $background_color_arr[0]['default-color'];
//	}
//	$editor_color_palette[] = array(
//		'name'  => __( 'Background Color', 'headless_theme_for_shifter' ),
//		'slug'  => 'background',
//		'color' => '#' . $background_color,
//	);

	// If we have accent colors, add them to the block editor palette.
	if ( $editor_color_palette ) {
		add_theme_support( 'editor-color-palette', $editor_color_palette );
	}

	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'headless_theme_for_shifter' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'headless_theme_for_shifter' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'headless_theme_for_shifter' ),
				'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'headless_theme_for_shifter' ),
				'size'      => 21,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'headless_theme_for_shifter' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'headless_theme_for_shifter' ),
				'size'      => 26.25,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'headless_theme_for_shifter' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'headless_theme_for_shifter' ),
				'size'      => 32,
				'slug'      => 'larger',
			),
		)
	);

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ( '#ffffff' === strtolower( headless_theme_for_shifter_get_color_for_area( 'content', 'text' ) ) ) {
		add_theme_support( 'dark-editor-style' );
	}

}

add_action( 'after_setup_theme', 'headless_theme_for_shifter_block_editor_settings' );

/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 *
 * @return string $html
 */
//function headless_theme_for_shifter_read_more_tag( $html ) {
//	return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
//}
//
//add_filter( 'the_content_more_link', 'headless_theme_for_shifter_read_more_tag' );

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since 1.0.0
 *
 * @return void
 */
//function headless_theme_for_shifter_customize_controls_enqueue_scripts() {
//	$theme_version = wp_get_theme()->get( 'Version' );
//
//	// Add main customizer js file.
//	wp_enqueue_script( 'headless_theme_for_shifter-customize', get_template_directory_uri() . '/assets/js/customize.js', array( 'jquery' ), $theme_version, false );
//
//	// Add script for color calculations.
//	wp_enqueue_script( 'headless_theme_for_shifter-color-calculations', get_template_directory_uri() . '/assets/js/color-calculations.js', array( 'wp-color-picker' ), $theme_version, false );
//
//	// Add script for controls.
//	wp_enqueue_script( 'headless_theme_for_shifter-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array( 'headless_theme_for_shifter-color-calculations', 'customize-controls', 'underscore', 'jquery' ), $theme_version, false );
//	wp_localize_script( 'headless_theme_for_shifter-customize-controls', 'twentyTwentyBgColors', headless_theme_for_shifter_get_customizer_color_vars() );
//}
//
//add_action( 'customize_controls_enqueue_scripts', 'headless_theme_for_shifter_customize_controls_enqueue_scripts' );

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since 1.0.0
 *
 * @return void
 */
//function headless_theme_for_shifter_customize_preview_init() {
//	$theme_version = wp_get_theme()->get( 'Version' );
//
//	wp_enqueue_script( 'headless_theme_for_shifter-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview', 'customize-selective-refresh', 'jquery' ), $theme_version, true );
//	wp_localize_script( 'headless_theme_for_shifter-customize-preview', 'twentyTwentyBgColors', headless_theme_for_shifter_get_customizer_color_vars() );
//	wp_localize_script( 'headless_theme_for_shifter-customize-preview', 'twentyTwentyPreviewEls', headless_theme_for_shifter_get_elements_array() );
//
//	wp_add_inline_script(
//		'headless_theme_for_shifter-customize-preview',
//		sprintf(
//			'wp.customize.selectiveRefresh.partialConstructor[ %1$s ].prototype.attrs = %2$s;',
//			wp_json_encode( 'cover_opacity' ),
//			wp_json_encode( headless_theme_for_shifter_customize_opacity_range() )
//		)
//	);
//}
//
//add_action( 'customize_preview_init', 'headless_theme_for_shifter_customize_preview_init' );

/**
 * Get accessible color for an area.
 *
 * @since 1.0.0
 *
 * @param string $area The area we want to get the colors for.
 * @param string $context Can be 'text' or 'accent'.
 * @return string Returns a HEX color.
 */
function headless_theme_for_shifter_get_color_for_area( $area = 'content', $context = 'text' ) {

	// Get the value from the theme-mod.
	$settings = get_theme_mod(
		'accent_accessible_colors',
		array(
			'content'       => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
			'header-footer' => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
		)
	);

	// If we have a value return it.
	if ( isset( $settings[ $area ] ) && isset( $settings[ $area ][ $context ] ) ) {
		return $settings[ $area ][ $context ];
	}

	// Return false if the option doesn't exist.
	return false;
}

/**
 * Returns an array of variables for the customizer preview.
 *
 * @since 1.0.0
 *
 * @return array
 */
//function headless_theme_for_shifter_get_customizer_color_vars() {
//	$colors = array(
//		'content'       => array(
//			'setting' => 'background_color',
//		),
//		'header-footer' => array(
//			'setting' => 'header_footer_background_color',
//		),
//	);
//	return $colors;
//}

/**
 * Get an array of elements.
 *
 * @since 1.0
 *
 * @return array
 */
function headless_theme_for_shifter_get_elements_array() {

	// The array is formatted like this:
	// [key-in-saved-setting][sub-key-in-setting][css-property] = [elements].
	$elements = array(
		'content'       => array(
			'accent'     => array(
				'color'            => array( '.color-accent', '.color-accent-hover:hover', '.color-accent-hover:focus', ':root .has-accent-color', '.has-drop-cap:not(:focus):first-letter', '.wp-block-button.is-style-outline', 'a' ),
				'border-color'     => array( 'blockquote', '.border-color-accent', '.border-color-accent-hover:hover', '.border-color-accent-hover:focus' ),
				'background-color' => array( 'button:not(.toggle)', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file .wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.bg-accent', '.bg-accent-hover:hover', '.bg-accent-hover:focus', ':root .has-accent-background-color', '.comment-reply-link' ),
				'fill'             => array( '.fill-children-accent', '.fill-children-accent *' ),
			),
			'background' => array(
				'color'            => array( ':root .has-background-color', 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.wp-block-button', '.comment-reply-link', '.has-background.has-primary-background-color:not(.has-text-color)', '.has-background.has-primary-background-color *:not(.has-text-color)', '.has-background.has-accent-background-color:not(.has-text-color)', '.has-background.has-accent-background-color *:not(.has-text-color)' ),
				'background-color' => array( ':root .has-background-background-color' ),
			),
			'text'       => array(
				'color'            => array( 'body', '.entry-title a', ':root .has-primary-color' ),
				'background-color' => array( ':root .has-primary-background-color' ),
			),
			'secondary'  => array(
				'color'            => array( 'cite', 'figcaption', '.wp-caption-text', '.post-meta', '.entry-content .wp-block-archives li', '.entry-content .wp-block-categories li', '.entry-content .wp-block-latest-posts li', '.wp-block-latest-comments__comment-date', '.wp-block-latest-posts__post-date', '.wp-block-embed figcaption', '.wp-block-image figcaption', '.wp-block-pullquote cite', '.comment-metadata', '.comment-respond .comment-notes', '.comment-respond .logged-in-as', '.pagination .dots', '.entry-content hr:not(.has-background)', 'hr.styled-separator', ':root .has-secondary-color' ),
				'background-color' => array( ':root .has-secondary-background-color' ),
			),
			'borders'    => array(
				'border-color'        => array( 'pre', 'fieldset', 'input', 'textarea', 'table', 'table *', 'hr' ),
				'background-color'    => array( 'caption', 'code', 'code', 'kbd', 'samp', '.wp-block-table.is-style-stripes tbody tr:nth-child(odd)', ':root .has-subtle-background-background-color' ),
				'border-bottom-color' => array( '.wp-block-table.is-style-stripes' ),
				'border-top-color'    => array( '.wp-block-latest-posts.is-grid li' ),
				'color'               => array( ':root .has-subtle-background-color' ),
			),
		),
		'header-footer' => array(
			'accent'     => array(
				'color'            => array( 'body:not(.overlay-header) .primary-menu > li > a', 'body:not(.overlay-header) .primary-menu > li > .icon', '.modal-menu a', '.footer-menu a, .footer-widgets a', '#site-footer .wp-block-button.is-style-outline', '.wp-block-pullquote:before', '.singular:not(.overlay-header) .entry-header a', '.archive-header a', '.header-footer-group .color-accent', '.header-footer-group .color-accent-hover:hover' ),
				'background-color' => array( '.social-icons a', '#site-footer button:not(.toggle)', '#site-footer .button', '#site-footer .faux-button', '#site-footer .wp-block-button__link', '#site-footer .wp-block-file__button', '#site-footer input[type="button"]', '#site-footer input[type="reset"]', '#site-footer input[type="submit"]' ),
			),
			'background' => array(
				'color'            => array( '.social-icons a', 'body:not(.overlay-header) .primary-menu ul', '.header-footer-group button', '.header-footer-group .button', '.header-footer-group .faux-button', '.header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link', '.header-footer-group .wp-block-file__button', '.header-footer-group input[type="button"]', '.header-footer-group input[type="reset"]', '.header-footer-group input[type="submit"]' ),
				'background-color' => array( '#site-header', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal', '.menu-modal-inner', '.search-modal-inner', '.archive-header', '.singular .entry-header', '.singular .featured-media:before', '.wp-block-pullquote:before' ),
			),
			'text'       => array(
				'color'               => array( '.header-footer-group', 'body:not(.overlay-header) #site-header .toggle', '.menu-modal .toggle' ),
				'background-color'    => array( 'body:not(.overlay-header) .primary-menu ul' ),
				'border-bottom-color' => array( 'body:not(.overlay-header) .primary-menu > li > ul:after' ),
				'border-left-color'   => array( 'body:not(.overlay-header) .primary-menu ul ul:after' ),
			),
			'secondary'  => array(
				'color' => array( '.site-description', 'body:not(.overlay-header) .toggle-inner .toggle-text', '.widget .post-date', '.widget .rss-date', '.widget_archive li', '.widget_categories li', '.widget cite', '.widget_pages li', '.widget_meta li', '.widget_nav_menu li', '.powered-by-wordpress', '.to-the-top', '.singular .entry-header .post-meta', '.singular:not(.overlay-header) .entry-header .post-meta a' ),
			),
			'borders'    => array(
				'border-color'     => array( '.header-footer-group pre', '.header-footer-group fieldset', '.header-footer-group input', '.header-footer-group textarea', '.header-footer-group table', '.header-footer-group table *', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal nav *', '.footer-widgets-outer-wrapper', '.footer-top' ),
				'background-color' => array( '.header-footer-group table caption', 'body:not(.overlay-header) .header-inner .toggle-wrapper::before' ),
			),
		),
	);

	/**
	* Filters Twenty Twenty theme elements
	*
	* @since 1.0.0
	*
	* @param array Array of elements
	*/
	return apply_filters( 'headless_theme_for_shifter_get_elements_array', $elements );
}
