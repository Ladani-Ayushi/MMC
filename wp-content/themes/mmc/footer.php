<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-demo
 */

?>

		<div class="footer">
            <div class="wrapper">
                <div class="footer_upper">
                    <div class="footer_logo">
                


                <?php 
                    $logo_type  = get_field('logo_type', 'option');
                    $logo_image = get_field('footer_logo', 'option');
                    $logo_text  = get_field('logo_text', 'option');

                    if($logo_type == 'image') {
                        $footer_logo_is = '<img src="'.$logo_image.'" width="218" height="26" />';
                    }
                    else {
                        $footer_logo_is = $logo_text;
                    }
                    ?>

                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo $footer_logo_is; ?></a>


                
                    </div>
                    <div class="footer_menu"><?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'menu_class' => 'footer_nav',
                        ) ); ?>
                    </div>
                </div>
                <div class="footer_bottom">
                    

             <?php
                $copyright_text = get_field('copyright_text', 'option');
                if ($copyright_text) {
                    echo '<p>' . esc_html($copyright_text) . '</p>';
                } 
                ?>


                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'copyright_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'presite',
                    ) );  ?>
                        </div>
                    </div>
                </div>
            </body>
        </html>


        
<?php 
wp_footer(); ?>

</body>
</html>
