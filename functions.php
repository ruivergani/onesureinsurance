<?php 
// Functions to clean the header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Support Menu
add_theme_support('menus');

// Header Menu
function register_my_personal_menu() {
    register_nav_menu('header-personal',__('Header Personal'));
}
function register_my_business_motortrade_menu() {
    register_nav_menu('header-business-motor-trade',__('Header Business Motor Trade'));
}
function register_my_business_commercial_menu() {
    register_nav_menu('header-business-commercial',__('Header Business Commercial'));
}
function register_my_business_other_menu() {
    register_nav_menu('header-business-other',__('Header Business Other'));
}
function register_my_resource_links_menu() {
    register_nav_menu('header-resource-links',__('Header Resource Links'));
}
function register_my_resource_articles_menu() {
    register_nav_menu('header-resource-articles',__('Header Resource Articles'));
}
function register_my_resource_faq_menu() {
    register_nav_menu('header-resource-faq',__('Header Resource Faq'));
}
function register_my_existing_customers_menu() {
    register_nav_menu('header-existing_customers',__('Header Existing Customers'));
}
function register_my_existing_customers_guide_menu() {
    register_nav_menu('header-existing_customers_guide',__('Header Existing Customers Guide'));
}
function register_my_existing_customers_contact_menu() {
    register_nav_menu('header-existing_contact_guide',__('Header Existing Customers Contact'));
}

// Footer Menu
function register_footer_useful_links_menu() {
    register_nav_menu('footer-useful-links',__('Footer Useful Links'));
}
function register_footer_insurance_types_menu() {
    register_nav_menu('footer-insurance-types',__('Footer Insurance Types'));
}
function register_footer_corporate_menu() {
    register_nav_menu('footer-corporate',__('Footer Corporate Info'));
}

add_action('init', 'register_my_personal_menu');
add_action('init', 'register_my_business_motortrade_menu');
add_action('init', 'register_my_business_commercial_menu');
add_action('init', 'register_my_business_other_menu');
add_action('init', 'register_my_resource_links_menu');
add_action('init', 'register_my_resource_articles_menu');
add_action('init', 'register_my_resource_faq_menu');
add_action('init', 'register_my_existing_customers_menu');
add_action('init', 'register_my_existing_customers_guide_menu');
add_action('init', 'register_my_existing_customers_contact_menu');
add_action('init', 'register_footer_useful_links_menu');
add_action('init', 'register_footer_insurance_types_menu');
add_action('init', 'register_footer_corporate_menu');

?>