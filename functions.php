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
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

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
function register_footer_about_menu() {
    register_nav_menu('footer-about',__('Footer About One Sure'));
}

// Mobile Menu
function register_mobile_personal_menu() {
    register_nav_menu('mobile-personal',__('Mobile Menu - Personal'));
}
function register_mobile_resources_menu() {
    register_nav_menu('mobile-resources',__('Mobile Menu - Resources'));
}
function register_mobile_existing_customers_menu() {
    register_nav_menu('mobile-existing-customers',__('Mobile Menu - Existing Customers'));
}
function register_mobile_contact_us_menu() {
    register_nav_menu('mobile-contact-us',__('Mobile Menu - Contact Us'));
}
function register_mobile_business_menu() {
    register_nav_menu('mobile-business',__('Mobile Menu - Business'));
}
function register_mobile_business_commercial_insurance_menu() {
    register_nav_menu('mobile-business-commercial-insurance',__('Mobile Menu - Business Commercial Insurance'));
}
function register_mobile_business_special_types_insurance_menu() {
    register_nav_menu('mobile-business-special-types-insurance',__('Mobile Menu - Business Special Types Insurance'));
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
add_action('init', 'register_footer_about_menu');
add_action('init', 'register_mobile_personal_menu');
add_action('init', 'register_mobile_resources_menu');
add_action('init', 'register_mobile_existing_customers_menu');
add_action('init', 'register_mobile_contact_us_menu');
add_action('init', 'register_mobile_business_menu');
add_action('init', 'register_mobile_business_commercial_insurance_menu');
add_action('init', 'register_mobile_business_special_types_insurance_menu');

// Function to enable the Footer edit options in the WordPress acf_add_options_page
acf_add_options_page(array(
	'page_title' 	=> 'Edit Footer',
	'menu_title'	=> 'Edit Footer',
	'menu_slug' 	=> 'edit-footer',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));

// Add theme to support thumbnails
add_theme_support('post-thumbnails');

// function to view post accessed the most
function setPostViews($postID){
    // return ranking most clicked post
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }
    else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

// Section to crate the breadcrumbs
function breadcrumbs($id = null){
    ?>
    <section class="s-breadcrumbs">
        <div class="container">
            <ul>
                <li>
                    <a href="<?php echo get_home_url(); ?>" aria-label="home page">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <?php if(!empty($id)): ?>
                    <li>
                        <a href="<?php echo get_permalink( $id ); ?>" aria-label="previous page">
                            <?php echo get_the_title( $id ); ?>
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="#" aria-label="current page">
                    <?php the_title(); ?>
                    </a>
                </li>
            </ul>
            <a href="<?php echo get_home_url(); ?>" class="back" aria-label="return page">
                <i class="fa-solid fa-chevron-left"></i>
                Go Back to Home
            </a>
        </div>
    </section>
<?php }

?>