<?php
/**
 * Grey functions and definitions
 *
 * @package Grey
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'grey_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function grey_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Grey, use a find and replace
	 * to change 'grey' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'grey', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'grey' ),
		'mobile' => __( 'Mobile Menu', 'grey' ),
		'services' => __( 'Services', 'grey' ),
		'language' => __( 'Language selector', 'grey' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'grey_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // grey_setup
add_action( 'after_setup_theme', 'grey_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function grey_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'grey' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'sidebar-coworkers',
    'id' => 'sidebar-coworkers',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
  ));
}
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'sidebar-businessarea',
    'id' => 'sidebar-businessarea',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
  ));
}
add_action( 'widgets_init', 'grey_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function grey_scripts() {
	wp_enqueue_style( 'grey-style', get_stylesheet_uri() );

	wp_enqueue_script( 'grey-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'grey-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_deregister_script('jquery');
	wp_register_script('jquery','//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js');
	wp_enqueue_script('jquery');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function grey_posted_on() {
  printf( __( '<span class="sep">Posted on </span><time class="entry-date" datetime="%3$s" pubdate>%4$s</time><span class="by-author"> <span class="sep">'),
    esc_url( get_permalink() ),
    esc_attr( get_the_time() ),
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() ),
    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
    esc_attr( sprintf( __( 'View all posts by %s' ), get_the_author() ) ),
    get_the_author()
  );
}

add_action( 'wp_enqueue_scripts', 'grey_scripts' );

/**
 * Load fonts
 */

function load_fonts() {
        wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Roboto+Slab:300');
        wp_enqueue_style( 'googleFonts');
    }

add_action('wp_print_styles', 'load_fonts');

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