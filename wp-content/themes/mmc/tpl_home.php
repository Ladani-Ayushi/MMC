<?php
/* Template Name: Home */ 
get_header(); 
?>

<!-- Display the Slider -->
<div class="slider page_title">       
    <div class="wrapper">
        <div class="slider_area">
            <div id="metal-slider" class="owl-carousel owl-theme offer-carasol">
            <?php
                $args = array(
                    'posts_per_page' => get_option('posts_per_page'),
                    'order by' => 'date',
                    'post_type' =>'slider',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'suppress_filters' => true,
                    'paged' => $paged
                );
                
                $slider_posts = get_posts($args);
                
                for ($i = 0; $i < count($slider_posts); $i++) {
                    $slider_post = $slider_posts[$i];
                    $slider_image = get_the_post_thumbnail($slider_post->ID, 'full');
                    $slider_title = get_the_title($slider_post->ID);
                    $slider_link = get_field("slider",$slider_post->ID);
                    $slider_excerpt = get_the_excerpt($slider_post->ID);
                ?>
                <div class="item">
                    <div class="slider_image">
                        <span>
                            <a href="<?php echo $slider_link;?>"><?php echo $slider_image;?></a>
                        </span>
                    </div> 
                    <div class="slider_text">
                        <h2><?php echo $slider_title;?></h2>
                        <p><?php echo $slider_excerpt;?></p>
                        <a href="<?php echo $slider_link;?>">Read More</a>
                        <span class="cv"><img src="<?php echo get_template_directory_uri();?>/images/cv.jpg"></span>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</div>

<!-- Display the Products -->
<div class="middle">
    <div class="wrapper">
        <div class="product">
            <div class="product_right" style="color: white;">
                <ul class="product_section">
                <?php
                    $args = array(
                        'posts_per_page' => get_option('posts_per_page'),
                        'order by' => 'date',
                        'post_type' => 'products',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'suppress_filters' => true,
                        'paged' => $paged
                    );
                    $products_list = get_posts($args);
                    for ($i = 0; $i < count($products_list); $i++) {
                ?>
                    <li class="product_item">
                        <div class="product_image">
                            <a href="<?php echo get_permalink($products_list[$i]->ID); ?>"><?php echo get_the_post_thumbnail($products_list[$i]->ID, 'thumbnail'); ?></a>
                        </div>
                        <h2 class="product_title"><a href="<?php echo get_permalink($products_list[$i]->ID); ?>"><?php echo get_the_title($products_list[$i]->ID); ?></a></h2>
                        <span class="cv2"><img src="<?php echo get_template_directory_uri(); ?>/images/cv2.jpg"></span>
                    </li>
                <?php } ?>
                    <li class="product_item">
                        <div class="product_image">
                            <a href=""> </a>
                        </div>
                        <h2 class="product_title"><a href="">Coming soon</a></h2>
                        <span class="cv2"><img src="<?php echo get_template_directory_uri(); ?>/images/cv2.jpg"></span>
                    </li>
                </ul>
                <div class="site_content">
                    <?php
                        $editor_content = get_field('editor');
                        echo $editor_content;
                    ?>
                </div>
            </div>

            <!-- Display the left Products -->
            <div class="product_left">    
                <div class="product_area">
                    <?php get_sidebar(); ?>
                </div>   
            </div>

            <!-- Display the Contacts -->
            <div class="contact_list">
                <!-- <h2>Contact List</h2> -->
                <ul class="contact_section">
                <?php
                    $args = array(
                        'posts_per_page' => get_option('posts_per_page'),
                        'order by' => 'date',
                        'post_type' => 'contact',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'suppress_filters' => true,
                        'paged' => $paged
                    );
                    $contact_list = get_posts($args);
                    for ($i = 0; $i < count($contact_list); $i++) {
                ?>
                    <li class="contact_item">
                        <div class="contact_image">
                            <a href="<?php echo get_permalink($contact_list[$i]->ID); ?>"><?php echo get_the_post_thumbnail($contact_list[$i]->ID, 'thumbnail'); ?></a>
                        </div>
                        <h2 class="contact_title"><a href="<?php echo get_permalink($contact_list[$i]->ID); ?>"><?php echo get_the_title($contact_list[$i]->ID); ?></a></h2>
                        <div class="contact_content"><?php echo get_the_excerpt($contact_list[$i]->ID); ?></div>
                    </li>
                <?php } ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
