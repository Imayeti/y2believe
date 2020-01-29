<?php
/**
 * ytobelieve functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ytobelieve
 */
if ( ! function_exists( 'ytobelieve_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ytobelieve_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ytobelieve, use a find and replace
		 * to change 'ytobelieve' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ytobelieve', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ytobelieve' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ytobelieve_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ytobelieve_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ytobelieve_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ytobelieve_content_width', 640 );
}
add_action( 'after_setup_theme', 'ytobelieve_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ytobelieve_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ytobelieve' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ytobelieve' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ytobelieve_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 function ytobelieve_scripts() {


 wp_enqueue_script( 'ytobelieve-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

 wp_enqueue_script( 'ytobelieve-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

 wp_enqueue_script( 'ytobelieve-jQuery', 'https://code.jquery.com/jquery-1.10.2.js', array(), '20151215', true );
 wp_enqueue_script( 'ytobelieve-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '20151215', true );
 wp_enqueue_script( 'ytobelieve-bootstrap',  'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '20151215', true );
 wp_enqueue_script( 'ytobelieve-AOS',  'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '20151215', true );

 wp_enqueue_script( 'ytobelieve_main_js', get_template_directory_uri() . '/js/ytobelieve.js', array(), microtime(), true );

 wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Khula&display=swap');

 wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
 wp_enqueue_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

 wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');


 wp_enqueue_style( 'ytobelieve-style', get_stylesheet_uri(), NULL, microtime() );



 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
 		wp_enqueue_script( 'comment-reply' );
 	}
 }
 add_action( 'wp_enqueue_scripts', 'ytobelieve_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


require get_theme_file_path('/inc/googleMapAPI.php');


// function universityMapKey($api) {
//   $api['key'] = 'AIzaSyBJ5lxj8t0vjhHUJTjr_68MF2qt-Lks8lY';
//   return $api;
// }
//
// add_filter('acf/fields/google_map/api', 'universityMapKey');





/* ==================================================
										CUSTOM POST TYPES
=================================================== */
function generate_labels($singular, $plural){
	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'add_new' => 'Add New ' . $singular,
		'add_new_item' => 'Add New ' . $singular,
		'edit_item' => 'Edit ' . $singular,
		'new_item' => 'New ' . $singular,
		'view_item' => 'View ' . $singular,
		'view_items' => 'View ' . $plural,
		'search_items' => 'Search ' . $plural,
		'not_found' => 'No ' . $plural . " found",
		'not_found_in_trash' => 'No ' . $plural  . ' found in Trash',
		'parent_item_colon' => 'Parent ' . $singular,
		'all_items' => 'All ' . $plural,
		'archives' => $singular . ' Archives',
		'attributes' => $singular . ' Attributes',
		'insert_into_item' => 'Insert into ' . $singular,
		'upload_to_this_item' => 'Upload to this ' . $singular,
	);
	return $labels;
}

function register_all_custom_post_types(){
	$singular = 'Pin';
	$plural = 'Google Map Pins';
	$labels = generate_labels($singular, $plural);

	/* Register the People Post Type */
	register_post_type('googleMapPins', array(
		'supports' => array( 'title', 'page-attributes'),
		'labels' => $labels,
		'description' => 'This is a custom post type for adding pins to the google map',
		'public' => true,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-star-filled',
		'capability_type' => 'post',
		'has_archive' => true

	));


  	// remove_post_type_support('stallions', 'editor');


	}
	add_action('init', 'register_all_custom_post_types');



	
