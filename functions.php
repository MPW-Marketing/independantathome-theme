<?php
/**
 * indep@home functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package indep@home
 */

if ( ! function_exists( 'independantathome_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function independantathome_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on indep@home, use a find and replace
	 * to change 'independantathome' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'independantathome', get_template_directory() . '/languages' );

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
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// additional image sizes
	add_image_size( 'logo-main', 266, 45 ); //1100 pixels wide (and unlimited height)

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'independantathome' ),
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
	add_theme_support( 'custom-background', apply_filters( 'independantathome_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	//add site logo
	add_theme_support( 'site-logo', array ( 'size' => 'full') );
}
endif;
add_action( 'after_setup_theme', 'independantathome_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function independantathome_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'independantathome_content_width', 640 );
}
add_action( 'after_setup_theme', 'independantathome_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function independantathome_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'independantathome' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'independantathome' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer Widget 1',
		'id' => 'footer_widget_1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Widget 2',
		'id' => 'footer_widget_2',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Widget 3',
		'id' => 'footer_widget_3',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Widget 4',
		'id' => 'footer_widget_4',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => 'Header Right Side',
		'id' => 'header_right_widget',
		'before_widget' => '<div class="header-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="header-widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => 'Footer Copyright Widget',
		'id' => 'footer_copyright',
		'before_widget' => '<div class="footer-copyright-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-copyright-widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'independantathome_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function independantathome_scripts() {
	wp_enqueue_style( 'independantathome-style', get_stylesheet_uri() );

	wp_enqueue_script( 'independantathome-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'independantathome-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'independantathome_scripts' );

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
