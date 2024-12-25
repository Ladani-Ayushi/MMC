<?php
if( function_exists('acf_add_options_page') ) {

acf_add_options_sub_page(array(
    'page_title'    => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'menu_slug'     => 'theme-header-settings',
    'capability'    => 'edit_posts',
));

acf_add_options_sub_page(array(
    'page_title'    => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'menu_slug'     => 'theme-footer-settings',
    'capability'    => 'edit_posts',
));

}
?>