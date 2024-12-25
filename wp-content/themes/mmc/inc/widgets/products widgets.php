<?php

class Products_Widget extends WP_Widget {

    // Constructor
    function __construct() {
        parent::__construct(
            'products_widget',
            __( 'Products Widget', 'textdomain' ),
            [ 'description' => __( 'A widget that displays a list of products.', 'textdomain' ) ]
        );
    }

    // Display the widget on the front-end
    public function widget( $args, $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : __( 'Products', 'textdomain' );
        $title = apply_filters( 'widget_title', $title );

        echo $args['before_widget'];
        if ( !empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // Query for products
        $products_args = array(
            'post_type' => 'products',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        $products_query = new WP_Query( $products_args );

        if ( $products_query->have_posts() ) {
            echo '<ul class="product_side">';
            while ( $products_query->have_posts() ) {
                $products_query->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
            wp_reset_postdata();
        } else {
            echo '<p>' . __( 'No products found', 'textdomain' ) . '</p>';
        }

        echo $args['after_widget'];
    }

    // Widget form in admin
    public function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : __( 'Products', 'textdomain' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'textdomain' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    // Update widget settings
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}

// Register the widget
function register_products_widget() {
    register_widget( 'Products_Widget' );
}
add_action( 'widgets_init', 'register_products_widget' );

?>
