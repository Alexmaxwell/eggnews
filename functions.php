<?php
/**
 * Eggnews functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme Egg
 * @subpackage Eggnews
 * @since 1.0.0
 */

if ( ! function_exists( 'eggnews_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function eggnews_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Eggnews, use a find and replace
	 * to change 'eggnews' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'eggnews', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height' => 175,
		'width'  => 400,
		'flex-width' => true,
		'flex-height' => true
	) );

	add_image_size( 'eggnews-slider-large', 1020, 731, true );
	add_image_size( 'eggnews-featured-medium', 420, 307, true );
	add_image_size( 'eggnews-featured-long', 300, 443, true );
	add_image_size( 'eggnews-block-medium', 464, 290, true );
	add_image_size( 'eggnews-block-thumb', 322, 230, true );
	add_image_size( 'eggnews-single-large', 1210, 642, true );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'eggnews' ),
		'top-header' => esc_html__( 'Top Header Menu', 'eggnews' ),
		'footer' => esc_html__( 'Footer Menu', 'eggnews' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'eggnews_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'eggnews_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eggnews_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eggnews_content_width', 640 );
}
add_action( 'after_setup_theme', 'eggnews_content_width', 0 );

/**
 * define theme version variable
 * @since 1.1.3
 */
function eggnews_theme_version() {
	$eggnews_theme_info = wp_get_theme();
	$GLOBALS['eggnews_version'] = $eggnews_theme_info->get( 'Version' );
}
add_action( 'after_setup_theme', 'eggnews_theme_version', 0 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Eggnews custom functions
 */
require get_template_directory() . '/inc/eggnews-functions.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load widgets areas
 */
require get_template_directory() . '/inc/widgets/eggnews-widgets-area.php';

/**
 * Load metabox
 */
require get_template_directory() . '/inc/admin/assets/metaboxes/eggnews-post-metabox.php';

/**
 * Load customizer custom classes
 */
require get_template_directory() . '/inc/admin/assets/eggnews-custom-classes.php'; //custom classes

/**
 * Load customizer sanitize
 */
require get_template_directory() . '/inc/admin/assets/eggnews-sanitize.php'; //custom classes