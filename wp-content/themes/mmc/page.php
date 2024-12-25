<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-demo
 */


 get_header();
 ?>



            <div class="slider page_title">
            <div class="wrapper">
                <div class="page_area">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            </div>

            <div class="middle">
            <div class="wrapper">
                <div class="product">
                    <div class="product_right">
                        <div class="site_content">

                        <?php
                        if (has_post_thumbnail()) {
                            echo '<div class="featured-image">';
                            the_post_thumbnail();
                            echo '</div>';
                        }
                                while (have_posts()) :
                                    the_post();
                                    the_content();          
                                    
                                endwhile;
                                ?>
                            <br>
                        
                            </div>
                        </div>


		 <!-- Display the left Products -->

           <div class="product_left">    
                <div class="product_area">

                    <?php get_sidebar( '' ); ?>

                   
                     </div>   

               
             </div>   	
		 </div>
	 </div>
 </div>
</div>



<?php

 get_footer();
 ?>