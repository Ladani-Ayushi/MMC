<?php get_header(); ?>

        <div class="slider page_title">
            <div class="wrapper">
                <div class="page_area">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="middle">
            <div class="wrapper">
                <div class="product">
                    <div class="product_right">
                        <div class="product_single">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="product_single_image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-detailr.jpg" id="zoom_image" class="zoom_it">
                                    <span class="cv3"><img src="<?php echo get_template_directory_uri(); ?>/images/cv3.png"></span>
                                </div>
                            <?php endif; ?>
                        </div>

                <div class="site_content">
                    <h2>Details</h2>
                    <br>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile;
                    else : ?>
                        <p>No product details found</p>
                    <?php endif; ?>
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

<?php get_footer(); ?>



<script src="wp-content/themes/mmc/js/product-page.js"></script>





<!-- <script>
    $(function () {
        var options = {
            height: 150,
            width: 150
        };
        $(".zoom_it").each(function () {
            $(this).image_zoomer(options);
        });
    });
</script> -->
