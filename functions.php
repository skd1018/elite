<?php

/**
 * ADMHouseTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ADMHouseTheme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function admhousetheme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ADMHouseTheme, use a find and replace
		* to change 'admhousetheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('admhousetheme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'admhousetheme'),
			'footer-menu' => esc_html__('Secondary', 'admhoustheme'),
			'mobile-menu' => esc_html__('Mobile', 'admhoustheme'),
			'top-menu' => esc_html__('Top', 'admhousetheme'),
			'logout-menu' => esc_html__('Logout Menu', 'admhousetheme'),
			'ps-menu-main' => esc_html__('Pro Service Main Menu', 'admhousetheme'),
			'ts-menu-main' => esc_html__('Top Shop Main Menu', 'admhousetheme'),
			'resource-navigation' => esc_html__('Resource Menu', 'admhousetheme'),
		)
	);
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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'admhousetheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'admhousetheme_setup');

//* Declare WooCommerce support */
function admhousetheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'admhousetheme_add_woocommerce_support');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function admhousetheme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('admhousetheme_content_width', 640);
}
add_action('after_setup_theme', 'admhousetheme_content_width', 0);



// Register custom post types

function admhousetheme_custom_posts()
{
	register_post_type(
		'resources',
		array(
			'labels' => array(
				'name' => _('Resources'),
				'singular_name' => ('Resource'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'resource'),
			'menu_icon' => 'dashicons-media-document',
			'show_in_rest' => true,
		)
	);
	register_post_type(
		'directory',
		array(
			'labels' => array(
				'name' => _('Directory'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'directory'),
			'menu_icon' => 'dashicons-open-folder',
			'show_in_rest' => true,
		)
	);
	register_post_type(
		'coaches',
		array(
			'labels' => array(
				'name' => _('Coaches'),
				'singular_name' => _('Coach'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'coaches'),
			'menu_icon' => 'dashicons-admin-users',
			'show_in_rest' => true,
		)
	);
}

add_action('init', 'admhousetheme_custom_posts', 0);


//Register custom roles


function admhousetheme_custom_roles()
{
	add_role(
		'pro_service',
		'Pro Service',
		array(
			'read' => true,
			'read_proservice' => true,
		)
	);
	add_role(
		'top_shop',
		'Top Shop 360',
		array(
			'read' => true,
			'read_topshop' => true,
		)
	);
}
add_action('init', 'admhousetheme_custom_roles', 0);


function admhousetheme_custom_cap()
{
	$ps = get_role('pro_service');
	$ts = get_role('top_shop');

	$ps->add_cap('read_proservice', true);
	$ts->add_cap('read_topshop', true);
}

add_action('init', 'admhousetheme_custom_cap',);

//Redirect users at log in depending on user type

function admhousetheme_get_roles()
{

	if (is_user_logged_in() && is_account_page()) {
		//Top Shop cannot go to the directory page...
		if (is_user_logged_in() && is_account_page()) {
			//Top Shop cannot go to the directory page...
			if (current_user_can('read_proservice')) {
				wp_redirect(get_bloginfo('url') . '/pro-service-home/', 301);
				exit;
			} else {
				wp_redirect(get_bloginfo('url') . '/top-shop-home/', 301);
				exit;
			}
		}
	}
}
add_action('template_redirect', 'admhousetheme_get_roles');


//Restrict post type access based on user role login
function admhousetheme_restrict_access($redirect)
{
	global $post;
	if ($post->post_type == 'resources') {
		if (!is_user_logged_in()) {
			$redirect = '
			<div class="cbm">
			<div class="contianer text-center py-5">
			<h2>This Content is for Elite Members!</h2>
			<p> Want to learn more about joining Elite? </p>
			<a class="btn btn-lg btn-cta  href="">Learn More</a>
			<a class="btn btn-lg btn-cta  href="">User Login</a>
			</div>
			</div>
			';
		}
	}
	return $redirect;
}

add_filter('the_content', 'admhousetheme_restrict_access');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function admhousetheme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'admhousetheme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'admhousetheme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'admhousetheme_widgets_init');





/**
 * Enqueue scripts and styles.
 */
function admhousetheme_scripts()
{
	wp_enqueue_style('admhousetheme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('admhousetheme-style', 'rtl', 'replace');
	wp_enqueue_script("bs-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js");
	wp_enqueue_script('admhousetheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('admhousetheme-animation', get_template_directory_uri() . '/js/animations.js', array(), _S_VERSION, true);
	wp_enqueue_script('admhousetheme-print', get_template_directory_uri() . '/js/print.js', array(), _S_VERSION, true);
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/main.css',);
	wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/custom.css',);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'admhousetheme_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
add_filter('wp_nav_menu_objects', 'add_menu_parent_class');
function add_menu_parent_class($items)
{
	$parents = array();
	foreach ($items as $item) {
		//Check if the item is a parent item
		if ($item->menu_item_parent && $item->menu_item_parent > 0) {
			$parents[] = $item->menu_item_parent;
		}
	}

	foreach ($items as $item) {
		if (in_array($item->ID, $parents)) {
			//Add "menu-parent-item" class to parents
			$item->classes[] = 'menu-parent-item';
		}
	}

	return $items;
}


// Include ACF
define('MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/');

// Include the ACF plugin.
include_once(MY_ACF_PATH . 'acf.php');

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url($url)
{
	return MY_ACF_URL;
}



// When including the PRO plugin, hide the ACF Updates menu
add_filter('acf/settings/show_updates', '__return_false', 100);
