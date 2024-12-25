<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-demo
 */

?>

     <html  <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <title><?php bloginfo('name'); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="handheldfriendly" content="true">
        <meta name="MobileOptimized" content="width">
        <?php wp_head(); ?>
     </head>

         <body <?php body_class(); ?>>
            <?php wp_body_open(); ?>

          
          <div class="header">
          <div class="wrapper">
          <div class="header_upper">
          <div class="logo">


             <?php 
                $logo_type  = get_field('logo_type', 'option');
                $logo_image = get_field('site_logo', 'option');
                $logo_text  = get_field('logo_text', 'option');

                if($logo_type == 'image') {
                    $site_logo_is = '<img src="'.$logo_image.'" width="302" height="64" />';
                }
                else {
                    $site_logo_is = $logo_text;
                }
            ?>

                <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo $site_logo_is; ?></a>

                </div>
                <div class="header_contact">


             <?php 
                $mail_address = get_field('mail_address', 'option'); 
                $phone_no_ = get_field('phone_no_', 'option');
             ?>


                    <?php if (!empty($mail_address)): ?>
                    <a href="mailto:<?php echo $mail_address; ?>" class="header_mail">
                        <span class="mmc-letter-mail-1"></span> <?php echo $mail_address; ?>
                    </a>
                    <?php endif; ?>

                   <span class="header_phone">
                    <?php if (!empty($phone_no_)): ?>
                     <a href="tel:<?php echo $phone_no_; ?>">
                    <span class="mmc-telephone"></span><?php echo $phone_no_; ?>
                     </a>
                    <?php endif; ?>
                </span>
                    
                </div>
            </div>

                    

            <div class="header_bottom">

                <div class="search search_menu">
                    <form  name="myForm" action="" method="get" onsubmit="return validateForm()" >
                        <input class="searchText" type="text" name="s" placeholder="Search..."  value="<?php echo get_search_query() ?>" />
                        <input type="hidden" name="post_type" value="product" />
                        <div class="search-btn2">
                            <input class="searchBtn " type="submit"  value="" name="" onclick="validateForm()"/>
                        </div>
                        <script>
                            function validateForm() {
                                var x = document.forms["myForm"]["s"].value;
                                if (x == null || x == "") {
                                    
                                    return false;
                                };
                            };
                        </script>
                        <div class="clear"></div>
                    </form>
                </div>
                <div class="header_menu">
                    <a class="toggleMenu" href="#">MENU<span class="icon-elusive-icons">&nbsp;</span></a><?php
                    wp_nav_menu( array(
                        'theme_location' => 'header_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'nav',
                    ) ); ?>
                </div>
            </div>
        </div>
    </div>


   