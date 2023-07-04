<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Jquery Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- TrustBox script --> 
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> 
  <!-- End TrustBox script -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Meta Tag -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/svg" href="<?php echo get_template_directory_uri()?>/favicon.png">
  <!-- Font Awesome Links -->
  <link href="<?php echo get_template_directory_uri()?>/assets/fontawesome/css/all.css" rel="stylesheet">
  <!-- CSS Links -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plugins.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">
  <title> 
    <?php bloginfo('name'); echo ' - '; is_front_page() ? bloginfo('description') : wp_title(''); ?>
  </title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php get_home_url(); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); echo ' - '; is_front_page() ? bloginfo('description') : wp_title(''); ?>">
  <meta property="og:description" content="<?php the_field('description_page'); ?>">
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php get_home_url(); ?>">
  <meta property="twitter:title" content="<?php bloginfo('name'); echo ' - '; is_front_page() ? bloginfo('description') : wp_title(''); ?>">
  <meta property="twitter:description" content="<?php the_field('description_page'); ?>">
  <meta property="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
  <!-- Function WP HEAD -->
  <?php wp_head(); ?>
</head>
<body>
  <!-- === Top Navigation === -->
  <div class="nav-top">
    <div class="container">
      <ul>
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-question.svg" alt="icon question" title="icon question" loading="lazy">
            <span>Support</span>
          </a>
        </li>
        <li>
          <a href="https://www.onesureinsurance.co.uk/existing-customers" target="_blank">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-user.svg" alt="icon user" title="icon user" loading="lazy">
            <span>My Account</span>
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Claims')) ?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-paper.svg" alt="icon paper" title="icon paper" loading="lazy">
            <span>Claims</span>
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Renewals')) ?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-autorenew.svg" alt="icon renewals"  title="icon renewals" loading="lazy">
            <span>Renewals</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- === Header === -->
  <header class="js-header" id="js-header">
    <div class="container">
      <!-- Logo -->
      <a href="<?php echo get_home_url(); ?>" class="logo" id="logo" title="Logo">
        <!-- Picture Tags -->
        <picture>
          <source media="(max-width: 668px)" srcset="<?php echo get_template_directory_uri()?>/assets/logo-mobile.svg" class="mobile-logo">
          <source media="" srcset="">
          <img src="<?php echo get_template_directory_uri()?>/assets/logo-onesure.svg" alt="Logo One Sure Insurance" title="Logo One Sure Insurance" loading="lazy">
        </picture>
      </a>
      <!-- Nav Section -->
      <nav id="nav">
        <!-- Menu List -->
        <ul>
          <!-- Personal Menu --> 
          <li>
            <button class="js-btn-menu" aria-label="Personal Menu">
              <span>Personal</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </button>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu js-menu">
              <div class="area-menu">
                <div class="container">
                  <div class="item">
                    <strong>Types of Insurance</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Personal',
                        'theme_location' => 'header-personal',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Business Menu -->
          <li>
            <button class="js-btn-menu" aria-label="Business Menu">
              <span>Business</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </button>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu business js-menu active">
              <div class="area-menu">
                <div class="container">
                  <div class="item">
                    <strong>Motor</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Business Motor',
                        'theme_location' => 'header-business-motor-trade',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                  <div class="item">
                    <strong>Commercial Vehicle</strong>
                     <!-- Dynamic Menu --> 
                     <?php
                      $args = array(
                        'menu' => 'Header Business Commercial',
                        'theme_location' => 'header-business-commercial',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                     ?>
                    <!-- <ul>
                      <li><a href="#">HGV | Lorry Insurance</a></li>
                      <li><a href="#">Courier Insurance</a></li>
                      <li><a href="#">Commercial Van Insurance</a></li>
                      <li><a href="#">Fleet Insurance</a></li>
                      <li><a href="#">Special Types Insurance</a></li>
                      <li><a href="#">Goods in Transit</a></li>
                      <li><a href="#">Taxi Insurance</a></li>
                    </ul> -->
                  </div>
                  <div class="item">
                    <strong>Other</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Business Other',
                        'theme_location' => 'header-business-commercial',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                     ?>
                    <!-- <ul>
                      <li><a href="#">Commercial Insurance</a></li>
                      <li><a href="#">Employer Insurance</a></li>
                      <li><a href="#">Shop Insurance</a></li>
                      <li><a href="#">Restaurant & Pub Insurancee</a></li>
                      <li><a href="#">Hotel Insurance</a></li>
                    </ul> -->
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Resources Menu -->
          <li class="hide">
            <button class="js-btn-menu" aria-label="Resources Menu">
              <span>Resources</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </button>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu resources js-menu">
              <div class="area-menu">
                <div class="container">
                  <div class="item">
                    <strong>Resources</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Resource Hub',
                        'theme_location' => 'header-resource-hub',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                  <div class="item">
                    <strong>Popular Articles</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Resource Articles',
                        'theme_location' => 'header-resource-articles',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                  <div class="item">
                    <strong>Useful Links</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Resource Links',
                        'theme_location' => 'header-resource-links',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Existing Customers -->
          <li>
            <button class="js-btn-menu" aria-label="Existing Customers Menu">
              <span>Existing Customers</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </button>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu existing js-menu">
              <div class="area-menu">
                <div class="container">
                  <div class="item">
                    <strong>Existing Customers</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Existing Customers',
                        'theme_location' => 'header-existing_customers',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                  <div class="item">
                    <strong>Help Section</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Existing Customers Contact',
                        'theme_location' => 'header-existing_contact_guide',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- About Us -->
          <li>
            <a href="<?php echo get_permalink(get_page_by_title('About Us')) ?>" class="js-btn-menu">
              <span>About Us</span>
            </a>
          </li>
          <!-- Contact Us -->
          <li>
            <a href="<?php echo get_permalink(get_page_by_title('Contact')) ?>" class="js-btn-menu">
              <span>Contact Us</span>
            </a>
          </li>
        </ul>
        <?php
          if(is_page('Home') || is_page('Support') || is_page('Claims') || is_page('Renewals') || is_page('Privacy Notice and Cookie Policy') || is_page('Terms of Business') || is_page('Modern Slavery Act') || is_page('About Us') || is_page('Contact') || is_page('Complaints')){
        ?>
          <!-- BUTTON LINKS TO THE FORM  -->
          <button class="btn btn-primary js-open-modal-insurance" aria-label="Get Quote Button">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white" loading="lazy">
            GET A QUOTE
          </button>
        <?php } else { ?>
          <!-- BUTTON LINKS TO THE FORM  -->
          <button class="btn btn-primary js-open-modal" aria-label="Get Quote Button">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white" loading="lazy">
            GET A QUOTE
          </button>
        <?php } ?>
        <!-- Hamburguer menu from lib -->
        <button class="hamburger hamburger--collapse" type="button" id="js-menu-button" loading="lazy" aria-label="Menu Button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </nav>
    </div>
    <!-- Menu Mobile -->
    <div class="menu-mobile">
      <!-- Top Navigation -->
      <div class="nav-top-mobile">
        <ul>
          <li>
            <a href="https://www.onesureinsurance.co.uk/existing-customers">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-user.svg" alt="icon user" title="icon user" loading="lazy">
              <span>My Account</span>
            </a>
          </li>
          <li>
            <a href="<?php echo get_permalink(get_page_by_title('Claims')) ?>">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-paper.svg" alt="icon paper" title="icon paper" loading="lazy">
              <span>Claims</span>
            </a>
          </li>
          <li>
            <a href="<?php echo get_permalink(get_page_by_title('Renewals')) ?>">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-autorenew.svg" alt="icon renewals"  title="icon renewals" loading="lazy">
              <span>Renewals</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- Menu List -->
      <ul class="mobile-menu-list">
        <!-- Personal Menu -->
        <li>
          <button class="js-mobile-menu-item" aria-label="Personal Menu">
            <span>Personal</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </button>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu -->
            <?php
              $args = array(
                'menu' => 'Mobile Menu - Personal',
                'theme_location' => 'mobile-personal',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
        </li>
        <!-- Business Menu -->
        <li>
          <button class="js-mobile-menu-item" aria-label="Business Menu">
            <span>Business</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </button>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu -->
            <?php
              $args = array(
                'menu' => 'Mobile Menu - Business',
                'theme_location' => 'mobile-business',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
        </li>
        <!-- Resources Menu -->
        <li>
          <button class="js-mobile-menu-item" aria-label="Resources Menu"> 
            <span>Resources</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </button>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu -->
            <?php
              $args = array(
                'menu' => 'Mobile Menu - Resources',
                'theme_location' => 'mobile-resources',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
        </li>
        <!-- Existing Customers Menu -->
        <li>
          <button class="js-mobile-menu-item" aria-label="Existing Customers Menu">
            <span>Existing Customers</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </button>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu -->
            <?php
              $args = array(
                'menu' => 'Mobile Menu - Existing Customers',
                'theme_location' => 'mobile-existing-customers',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
        </li>
        <!-- Contact Us Menu -->
        <li>
          <button class="js-mobile-menu-item" aria-label="Existing Contact Us Menu">
            <span>Contact Us</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </button>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu -->
            <?php
              $args = array(
                'menu' => 'Mobile Menu - Contact Us',
                'theme_location' => 'mobile-contact-us',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
        </li>
      </ul>
    </div>
  </header>