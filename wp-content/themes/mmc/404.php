<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-demo
 */

get_header();
?>

<div class="slider page_title">
            <div class="wrapper">
                <div class="page_area">
                    <h2>404</h2>
                </div>
            </div>
            </div>

            <div class="middle">
            <div class="wrapper">
                <div class="product">
                    <div class="product_right">
                        <div class="site_content">
                               <b> Page not found. </b>
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

<?php get_footer();?>