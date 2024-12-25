<?php

class Contact_Us_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'contact_us_widget',
            __( 'Contact Us Widget', 'textdomain' ),
            [ 'description' => __( 'Widget for displaying contact information', 'textdomain' ) ]
        );
    }

    public function widget( $args, $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : __( 'Contact Us', 'textdomain' );
        $title = apply_filters( 'widget_title', $title );

        echo $args['before_widget'];
        if ( !empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $location_address = get_field('location_address', 'option');
        $mail_address = get_field('mail_address', 'option');
        $phone_no_ = get_field('phone_no_', 'option');
        ?>

        <div class="contact_area">
            <ul class="contact_side">
                <?php if ( !empty( $location_address ) ) : ?>
                    <li><span class="mmc-marker"></span><p><?php echo esc_html( $location_address ); ?></p></li>
                <?php endif; ?>
                <?php if ( !empty( $mail_address ) ) : ?>
                    <li><span class="mmc-letter-mail-1"></span><p><a href="mailto:<?php echo esc_attr( $mail_address ); ?>"><?php echo esc_html( $mail_address ); ?></a></p></li>
                <?php endif; ?>
                <?php if ( !empty( $phone_no_ ) ) : ?>
                    <li><span class="mmc-telephone"></span><p><?php echo esc_html( $phone_no_ ); ?></p></li>
                <?php endif; ?>
            </ul>
            <div class="cn_link"><span><a href="#">Contact Us</a></span></div>
        </div>

        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : __( 'Contact Us', 'textdomain' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'textdomain' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}

function register_contact_us_widget() {
    register_widget( 'Contact_Us_Widget' );
}
add_action( 'widgets_init', 'register_contact_us_widget' );

?>
