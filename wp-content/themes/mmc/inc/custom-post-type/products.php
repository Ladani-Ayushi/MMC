
<?php

function custom_post_type() {
  
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Products', 'Post Type General Name', 'mmc' ),
          'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'mmc' ),
          'menu_name'           => __( 'Products', 'mmc' ),
          'parent_item_colon'   => __( 'Parent Products', 'mmc' ),
          'all_items'           => __( 'All Products', 'mmc' ),
          'view_item'           => __( 'View Products', 'mmc' ),
          'add_new_item'        => __( 'Add New Products', 'mmc' ),
          'add_new'             => __( 'Add Products', 'mmc' ),
          'edit_item'           => __( 'Edit Products', 'mmc' ),
          'update_item'         => __( 'Update Products', 'mmc' ),
          'search_items'        => __( 'Search Products', 'mmc' ),
          'not_found'           => __( 'Not Found', 'mmc' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'mmc' ),
      );
        
  // Set other options for Custom Post Type
        
      $args = array(
          'label'               => __( 'Products', 'mmc' ),
          'description'         => __( 'Products news and reviews', 'mmc' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
        //   'taxonomies'          => array( 'genres' ),    
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
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
      register_post_type( 'products', $args );
    
  }
    
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
    
  add_action( 'init', 'custom_post_type', 0 );
?>