<?php
/**
 * wp-demo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-demo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}









/*
* Creating a function to create our CPT
*/
  
// function custom_post_type() {
  
// 	// Set UI labels for Custom Post Type
// 		$labels = array(
// 			'name'                => _x( 'Products', 'Post Type General Name', 'mmc' ),
// 			'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'mmc' ),
// 			'menu_name'           => __( 'Products', 'mmc' ),
// 			'parent_item_colon'   => __( 'Parent Products', 'mmc' ),
// 			'all_items'           => __( 'All Products', 'mmc' ),
// 			'view_item'           => __( 'View Products', 'mmc' ),
// 			'add_new_item'        => __( 'Add New Products', 'mmc' ),
// 			'add_new'             => __( 'Add Products', 'mmc' ),
// 			'edit_item'           => __( 'Edit Products', 'mmc' ),
// 			'update_item'         => __( 'Update Products', 'mmc' ),
// 			'search_items'        => __( 'Search Products', 'mmc' ),
// 			'not_found'           => __( 'Not Found', 'mmc' ),
// 			'not_found_in_trash'  => __( 'Not found in Trash', 'mmc' ),
// 		);
		  
// 	// Set other options for Custom Post Type
		  
// 		$args = array(
// 			'label'               => __( 'Products', 'mmc' ),
// 			'description'         => __( 'Products news and reviews', 'mmc' ),
// 			'labels'              => $labels,
// 			// Features this CPT supports in Post Editor
// 			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
// 			// You can associate this CPT with a taxonomy or custom taxonomy. 
// 			'taxonomies'          => array( 'genres' ),
// 			/* A hierarchical CPT is like Pages and can have
// 			* Parent and child items. A non-hierarchical CPT
// 			* is like Posts.
// 			*/
// 			'hierarchical'        => false,
// 			'public'              => true,
// 			'show_ui'             => true,
// 			'show_in_menu'        => true,
// 			'show_in_nav_menus'   => true,
// 			'show_in_admin_bar'   => true,
// 			'menu_position'       => 5,
// 			'can_export'          => true,
// 			'has_archive'         => true,
// 			'exclude_from_search' => false,
// 			'publicly_queryable'  => true,
// 			'capability_type'     => 'post',
// 			'show_in_rest' => true,
	  
// 		);
		  
// 		// Registering your Custom Post Type
// 		register_post_type( 'Products', $args );
	  
// 	}
	  
// 	/* Hook into the 'init' action so that the function
// 	* Containing our post type registration is not 
// 	* unnecessarily executed. 
// 	*/
	  
// 	add_action( 'init', 'custom_post_type', 0 );







	// function create_slider_post_type() {
	// 	// Set UI labels for Custom Post Type
	// 	$labels = array(
	// 	  'name'                => _x( 'Slider', 'Post Type General Name', 'mmc' ),
	// 	  'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'mmc' ),
	// 	  'menu_name'           => __( 'Slider', 'mmc' ),
	// 	  'parent_item_colon'   => __( 'Parent Slider', 'mmc' ),
	// 	  'all_items'           => __( 'All Slider', 'mmc' ),
	// 	  'view_item'           => __( 'View Slider', 'mmc' ),
	// 	  'add_new_item'        => __( 'Add New Slider', 'mmc' ),
	// 	  'add_new'             => __( 'Add Slider', 'mmc' ),
	// 	  'edit_item'           => __( 'Edit Slider', 'mmc' ),
	// 	  'update_item'         => __( 'Update Slider', 'mmc' ),
	// 	  'search_items'        => __( 'Search Slider', 'mmc' ),
	// 	  'not_found'           => __( 'Not Found', 'mmc' ),
	// 	  'not_found_in_trash'  => __( 'Not found in Trash', 'mmc' ),
	// 	);
	  
	// 	// Set other options for Custom Post Type
	// 	$args = array(
	// 	  'label'               => __( 'Slider', 'mmc' ),
	// 	  'description'         => __( 'Slider news and reviews', 'mmc' ),
	// 	  'labels'              => $labels,
	// 	  'supports'            => array( 'title', 'editor', 'thumbnail' ),
	// 	  'hierarchical'        => false,
	// 	  'public'              => true,
	// 	  'show_ui'             => true,
	// 	  'show_in_menu'        => true,
	// 	  'show_in_nav_menus'   => true,
	// 	  'show_in_admin_bar'   => true,
	// 	  'menu_position'       => 5,
	// 	  'can_export'          => true,
	// 	  'has_archive'         => true,
	// 	  'exclude_from_search' => false,
	// 	  'publicly_queryable'  => true,
	// 	  'capability_type'     => 'post',
	// 	  'show_in_rest' => true,
	// 	);
	  
	// 	// Registering your Custom Post Type
	// 	register_post_type( 'Slider', $args );
	//   }
	//   add_action( 'init', 'create_slider_post_type' );







/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_demo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wp-demo, use a find and replace
		* to change 'wp-demo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wp-demo', get_template_directory() . '/languages' );

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
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu',
		'copyright_menu' => 'Copyright Menu',
	) );

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
			'wp_demo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'wp_demo_setup' );






/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_demo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_demo_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_demo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_demo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-demo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp-demo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_demo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
// function wp_demo_scripts() {
// 	wp_enqueue_style( 'wp-demo-style', get_stylesheet_uri(), array(), _S_VERSION );
// 	wp_style_add_data( 'wp-demo-style', 'rtl', 'replace' );

// 	wp_enqueue_script( 'wp-demo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'wp_demo_scripts' );


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
 * Customizer additions.
 */
require get_template_directory() . '/inc/scripts.php';

require get_template_directory() . '/inc/acf-options.php';

require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


?>
