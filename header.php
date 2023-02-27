<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Meta Tag -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php the_field('description_page'); ?>">
  <meta name="googlebot" content="notranslate">
  <meta name="google" content="nositelinkssearchbox">
  <meta name="google" content="nopagereadaloud">
  <meta name="robots" content="noindex,nofollow">
  <link rel="canonical" href="https://www.onesureinsurance.co.uk/"/>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/svg" href="<?php echo get_template_directory_uri()?>/favicon.png">
  <!-- Font Awesome Links -->
  <link href="<?php echo get_template_directory_uri()?>/assets/fontawesome/css/all.css" rel="stylesheet">
  <!-- CSS Links -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plugins.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">
  <title> 
    <?php bloginfo('name')?> <?php wp_title('|') ?>
  </title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php get_home_url(); ?>">
  <meta property="og:title" content="<?php bloginfo('name')?> <?php wp_title('|') ?>">
  <meta property="og:description" content="<?php the_field('description_page'); ?>">
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php get_home_url(); ?>">
  <meta property="twitter:title" content="<?php bloginfo('name')?> <?php wp_title('|') ?>">
  <meta property="twitter:description" content="<?php the_field('description_page'); ?>">
  <meta property="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
  <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Function WP HEAD -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- Modal -->
  <section class="modal">
    <div class="overlay">
    </div>
    <div class="box">
        <button class="close js-close">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-modal.svg" alt="close button"  title="close button">
        </button>
        <span>GET A QUOTE</span>
        <h2>Find the right cover to suit you. Fill the form to get a quote!</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label><br>
                <input type="text" name="name" placeholder="Name" id="name">
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label><br>
                <input type="text" name="surname" placeholder="Surname" id="surname">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label><br>
                <input type="number" name="phone" id="phone">
            </div>
            <button class="btn btn-primary">
                NEXT STEPS
            </button>
        </form>
    </div>
  </section>
  <!-- Top Navigation -->
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
          <a href="#">
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
  <!-- Header -->
  <header class="js-header" id="js-header">
    <div class="container">
      <!-- Logo -->
      <a href="<?php echo get_home_url(); ?>" class="logo" id="logo">
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
            <a href="#" class="js-btn-menu">
              <span>Personal</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </a>
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
            <a href="#" class="js-btn-menu">
              <span>Business</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </a>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu business js-menu">
              <div class="area-menu">
                <div class="container">
                  <div class="item">
                    <strong>Motor Trade</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Business Motor Trade',
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
          <li>
            <a href="#" class="js-btn-menu">
              <span>Resources</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </a>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu resources js-menu">
              <div class="area-menu">
                <div class="container">
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
                    <strong>Frequently Asked Questions</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Resource Faq',
                        'theme_location' => 'header-resource-faq',
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
            <a href="#" class="js-btn-menu">
              <span>Existing Customers</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
            </a>
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
                    <strong>Guides</strong>
                    <!-- Dynamic Menu --> 
                    <?php
                      $args = array(
                        'menu' => 'Header Existing Customers Guide',
                        'theme_location' => 'header-existing_customers_guide',
                        'container' => false
                      );
                      wp_nav_menu( $args );
                    ?>
                  </div>
                  <div class="item">
                    <strong>Lorem ipsum ...</strong>
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
          <!-- Contact Us -->
          <li>
            <a href="<?php echo get_permalink(get_page_by_title('Contact')) ?>" class="js-btn-menu">
              <span>Contact Us</span>
            </a>
          </li>
        </ul>
        <!-- Action Button -->
        <button class="btn btn-primary js-open-modal">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white" loading="lazy">
          GET A QUOTE
        </button>
        <!-- Hamburguer menu from lib -->
        <button class="hamburger hamburger--collapse" type="button" id="js-menu-button" loading="lazy">
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
              <a href="#">
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
          <a href="" class="js-mobile-menu-item">
            <span>Personal</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </a>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu --> 
            <ul>
              <li><a href="#">Car Insurance</a></li>
              <li><a href="#">Motorbike Insurance</a></li>
              <li><a href="#">Scooter Insurance</a></li>
              <li><a href="#">Van Insurance</a></li>
              <li><a href="#">Caravan Insurance</a></li>
              <li><a href="#">Motorhome Insurance</a></li>
              <li><a href="#">Home Insurance</a></li>
              <li><a href="#">Travel Insurance</a></li>
              <li><a href="#">Convicted Car Insurance</a></li>
              <li><a href="#">Convicted Van Insurance</a></li>
            </ul> 
          </div>
        </li>
        <!-- Business Menu -->
        <li>
          <a href="" class="js-mobile-menu-item">
            <span>Business</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </a>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu --> 
            <ul>
              <li><a href="#">Motor Trade Insurance</a></li>
              <li><a href="#">Motor Trade Combined</a></li>
              <li><a href="#">Mechanic Insurance</a></li>
              <li><a href="#">Valeters Insurance</a></li>
              <li><a href="#">MOT Service Insurance</a></li>
              <li class="sub-item-menu">
                <a href="#">
                  <span>Commercial Insurance</span>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
                </a>

                
              </li>
            </ul>
          </div>
        </li>
        <!-- Resources Menu -->
        <li>
          <a href="" class="js-mobile-menu-item"> 
            <span>Resources</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </a>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu --> 
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Code of Conduct</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Insurance Dictionary</a></li>
              <li><a href="#">Our Community</a></li>
              <li><a href="#">Existing Customers Guides</a></li>
            </ul> 
          </div>
        </li>
        <!-- Existing Customers Menu -->
        <li>
          <a href="" class="js-mobile-menu-item">
            <span>Existing Customers</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </a>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu --> 
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Claims</a></li>
              <li><a href="#">Renewals</a></li>
              <li><a href="#">Payments</a></li>
            </ul>
          </div>
        </li>
        <!-- Contact Us Menu -->
        <li>
          <a href="">
            <span>Contact Us</span>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-mobile.svg" alt="icon arrow down" title="icon arrow down" loading="lazy">
          </a>
          <!-- Sub Menu Dropdown Mobile -->
          <div class="dropdown-sub-menu-mobile js-menu-dropdown-mobile">
            <!-- Dynamic Menu --> 
            <ul>
              <li><a href="#">Lorem Ipsum</a></li>
            </ul> 
          </div>
        </li>
      </ul>
    </div>
  </header>