<?php
// enqueue styles and scripts
function themeslug_enqueue_style() {
    wp_enqueue_style('font-style', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300', array(), '', false);
    wp_enqueue_style('font-google-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700', array(), '', false);
    wp_enqueue_style('mmc-icon-styles', get_template_directory_uri() . '/css/mmc-icon-styles.css', array(), '', false);
    wp_enqueue_style('custom-menu-font', get_template_directory_uri() . '/css/custom-menu-font.css', array(), '', false);
    wp_enqueue_style('menu-style', get_template_directory_uri() . '/css/menu-style.css', array(), '', false);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl-carousel.css', array(), '', false);
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl-theme.css', array(), '', false);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '', false);


    wp_enqueue_script( 'jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl-carousel.js', array(), '1.0.0', true );
    wp_enqueue_script( 'placeholder-oldbrowe', get_template_directory_uri() . '/js/placeholder-oldbrowe.js', array(), '1.0.0', true );    
    wp_enqueue_script( 'okzoom.js', get_template_directory_uri() . '/js/okzoom.js', array(), '1.0.0', true );    
    wp_enqueue_script( 'evenZoom.js', get_template_directory_uri() . '/js/evenZoom.js', array(), '1.0.0', true );
    wp_enqueue_script( 'menu_script.js', get_template_directory_uri() . '/js/menu_script.js', array(), time(), true ); 
    wp_enqueue_script( 'image_zoomer.js', get_template_directory_uri() . '/js/image_zoomer.js', array(), time(), true ); 
   

   



    wp_enqueue_style( 'wp-demo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wp-demo-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wp-demo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}




}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );