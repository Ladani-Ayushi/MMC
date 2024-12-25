<?php
/* Template Name:   Products */
get_header(); 
?>


        <div class="slider page_title">
            <div class="wrapper">
                <div class="page_area">
                    <h2><?php the_title();?></h2>
                </div>
            </div>
        </div>

        <div class="slider page_title">
            <div class="middle">
                <div class="wrapper">
                    <div class="product">
                        <div class="product_right" style="color: white;">
                            <ul class="product_section">

                                <?php
                        $paged = (get_query_var('paged'))? get_query_var('paged') : 1;
                        $args = array(
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'post_type' => 'products',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                            'paged' => $paged
                        );
                        $products_query = new WP_Query($args);

                        if ($products_query->have_posts()) {
                            while ($products_query->have_posts()) {
                                $products_query->the_post();
                               ?>
                                <li>
                                    <div class="product_image">
                                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
                                    </div>
                                    <h2 class="product_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    <span class="cv2"><img src="<?php echo get_template_directory_uri();?>/images/cv2.jpg"></span>
                                </li>
                                <?php
                            }
                            wp_reset_postdata();
                        } else {
                            echo 'No products found.';
                        }

                        $total_pages = $products_query->max_num_pages;
                        if ($paged == $total_pages) {
                            for ($i = 0; $i < 1; $i++) {
                               ?>
                                <li>
                                    <div class="product_image">
                                        <a href="#"></a>
                                    </div>
                                    <h2 class="product_title"><a href="#">Coming soon</a></h2>
                                    <span class="cv2"><img src="<?php echo get_template_directory_uri();?>/images/cv2.jpg"></span>
                                </li>
                                <?php
                            }
                        }
                       ?>

                    </ul>

                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total' => $products_query->max_num_pages,
                            '! current' => $paged,
                            'prev_text' => __('« Previous'),
                            'next_text' => __('Next »'),
                        ));
                       ?>
                    </div>

                    <div class="site_content">

                        <!-- <?php
                        $editor_content = get_field('editor');
                        if ($editor_content) {
                            echo $editor_content;
                        }
                       ?> -->

                    </div>
                </div>

               

               <!-- Display the left Products -->

       <div class="product_left">    
                <div class="product_area">

                    <?php get_sidebar(); ?>

                     </div>   

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>