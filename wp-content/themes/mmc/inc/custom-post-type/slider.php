<?php



function create_slider_post_type() {
    // Set UI labels for Custom Post Type
    $labels = array(
      'name'                => _x( 'Slider', 'Post Type General Name', 'mmc' ),
      'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'mmc' ),
      'menu_name'           => __( 'Slider', 'mmc' ),
      'parent_item_colon'   => __( 'Parent Slider', 'mmc' ),
      'all_items'           => __( 'All Slider', 'mmc' ),
      'view_item'           => __( 'View Slider', 'mmc' ),
      'add_new_item'        => __( 'Add New Slider', 'mmc' ),
      'add_new'             => __( 'Add Slider', 'mmc' ),
      'edit_item'           => __( 'Edit Slider', 'mmc' ),
      'update_item'         => __( 'Update Slider', 'mmc' ),
      'search_items'        => __( 'Search Slider', 'mmc' ),
      'not_found'           => __( 'Not Found', 'mmc' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'mmc' ),
    );
  
    // Set other options for Custom Post Type
    $args = array(
      'label'               => __( 'Slider', 'mmc' ),
      'description'         => __( 'Slider news and reviews', 'mmc' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'thumbnail' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'show_in_rest' => true,
    );
  
    // Registering your Custom Post Type
    register_post_type( 'Slider', $args );
  }
  add_action( 'init', 'create_slider_post_type' );

  

?>