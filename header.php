<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta Tag -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Jquery Link -->
  <script src="<?php echo get_template_directory_uri()?>/js/scripts/jquery-3.6.4.min.js"></script>
  <!-- Trustpilot script --> 
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> 
  <!-- End Trustpilot script -->
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/svg" href="<?php echo get_template_directory_uri()?>/favicon.png">
  <!-- Font Awesome Links -->
  <link href="<?php echo get_template_directory_uri()?>/assets/fontawesome/css/all.min.css" rel="stylesheet">
  <!-- CSS Links -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plugins.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">
  <title> <?php wp_title(''); ?></title>
  <!-- Function WP HEAD -->
  <?php wp_head(); ?>
</head>
<body>
  <!-- === Top Navigation === -->
  <div class="nav-top" role="banner">
    <div class="container">
      <ul>
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-question.svg" alt="icon question" title="icon question" loading="lazy" width="20" height="20">
            <span>Support</span>
          </a>
        </li>
        <li>
          <a href="https://www.onesureinsurance.co.uk/existing-customers" target="_blank">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-user.svg" alt="icon user" title="icon user" loading="lazy" width="21" height="21">
            <span>My Account</span>
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Claims')) ?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-paper.svg" alt="icon paper" title="icon paper" loading="lazy" width="20" height="20">
            <span>Claims</span>
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Renewals')) ?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-autorenew.svg" alt="icon renewals"  title="icon renewals" loading="lazy" width="20" height="20">
            <span>Renewals</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- === Header === -->
  <header class="js-header" id="js-header" role="banner">
    <div class="container">
      <!-- Logo -->
      <a href="<?php echo get_home_url(); ?>" class="logo" id="logo" title="logo">
        <!-- Picture Tags -->
        <picture>
          <source media="(max-width: 668px)" srcset="<?php echo get_template_directory_uri()?>/assets/logo-official.png" class="mobile-logo">
          <img src="<?php echo get_template_directory_uri()?>/assets/logo-onesure.svg" alt="Logo One Sure Insurance" title="Logo One Sure Insurance">
        </picture>
      </a>
      <!-- Nav Section -->
      <nav id="nav">
        <!-- Menu List -->
        <ul>
          <!-- Personal Menu --> 
          <li>
            <button class="js-btn-menu" aria-label="Personal Menu" tabindex="0">
              <span>Personal</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy" width="" width="22" height="22">
            </button>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu js-menu">
              <div class="area-menu">
                <h2>Types of Insurance</h2>
                <ul class="container-list">
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Car Insurance')) ?>">
                      <i class="fa-solid fa-car"></i>
                      <div class="item-text">
                        <h3>Car Insurance</h3>
                        <p>Find quality cover for your vehicle.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Motorbike Insurance')) ?>">
                      <i class="fa-solid fa-motorcycle"></i>
                      <div class="item-text">
                        <h3>Motorbike Insurance</h3>
                        <p>Find quality cover for your bike here.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Motorbike Insurance')) ?>">
                      <i class="fa-solid fa-bicycle"></i>
                      <div class="item-text">
                        <h3>Scooter Insurance</h3>
                        <p>Go from A to B with the right cover.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Convicted Car Insurance')) ?>">
                      <i class="fa-solid fa-car"></i>
                      <div class="item-text">
                        <h3>Convicted Car Insurance</h3>
                        <p>Insurance for motorists with driving offences.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Caravan Insurance')) ?>">
                      <i class="fa-solid fa-van-shuttle"></i>
                      <div class="item-text">
                        <h3>Caravan Insurance</h3>
                        <p>Enjoy your holiday, knowing you’re covered.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Home Insurance')) ?>">
                      <i class="fa-solid fa-house"></i>
                      <div class="item-text">
                        <h3>Home Insurance</h3>
                        <p>Protect your contents and property.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Travel Insurance')) ?>">
                      <i class="fa-solid fa-suitcase"></i>
                      <div class="item-text">
                        <h3>Travel Insurance</h3>
                        <p>Discover the cover you need for your destination.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Convicted Van Insurance')) ?>">
                      <i class="fa-solid fa-van-shuttle"></i>
                      <div class="item-text">
                        <h3>Convicted Van Insurance</h3>
                        <p>Get insured after a motoring conviction.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Convicted Van Insurance')) ?>">
                      <i class="fa-solid fa-caravan"></i>
                      <div class="item-text">
                        <h3>Motorhome Insurance</h3>
                        <p>From RVs to campers, we’ll cover it.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink(get_page_by_title('Van Insurance')) ?>">
                      <i class="fa-solid fa-truck-front"></i>
                      <div class="item-text">
                        <h3>Van Insurance</h3>
                        <p>Personal and commercial cover available.</p>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="bottom-contact">
                  <ul class="bottom-contact-list">
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Contact')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Contact Us</p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Support</p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Claims')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Claims</p>
                      </a>
                    </li>
                  </ul>
                  <!-- BUTTON LINKS TO THE FORM  -->
                  <button class="btn btn-primary-rounded js-open-modal" aria-label="Get Quote Button">
                    GET A QUOTE
                  </button>
                </div>
              </div>
            </div>
          </li>
          <!-- Business Menu --> 
          <li>
            <button class="js-btn-menu" aria-label="Business Menu" tabindex="0">
              <span>Business</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy" width="" width="22" height="22">
            </button>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu js-menu">
              <div class="area-menu-business">
                <div class="area-menu-business-items">
                  <!-- Area Menu Item 01 -->
                  <div class="area-menu-item">
                    <h2>MOTOR</h2>
                    <ul class="container-list-01">
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Motor Trade Insurance')) ?>">
                          <div class="item-text">
                            <h3>Motor Trade Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Mechanic Insurance')) ?>">
                          <div class="item-text">
                            <h3>Mechanic Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Motor Trade Combined Insurance')) ?>">
                          <div class="item-text">
                            <h3>Motor Trade Combined Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Valeters Insurance')) ?>">
                          <div class="item-text">
                            <h3>Valeters Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Area Menu Item 01 -->
                  <div class="area-menu-item-02">
                    <h2>COMMERCIAL VEHICLE</h2>
                    <ul class="container-list-01">
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('HGV Insurance')) ?>">
                          <div class="item-text">
                            <h3>HGV Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Goods In Transit')) ?>">
                          <div class="item-text">
                            <h3>Goods In Transit</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Taxi Insurance')) ?>">
                          <div class="item-text">
                            <h3>Taxi Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Special Types Insurance')) ?>">
                          <div class="item-text">
                            <h3>Special Types Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Fleet Insurance')) ?>">
                          <div class="item-text">
                            <h3>Fleet Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Courier Insurance')) ?>">
                          <div class="item-text">
                            <h3>Courier Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Van Insurance')) ?>">
                          <div class="item-text">
                            <h3>Van Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Area Menu Item 01 -->
                  <div class="area-menu-item">
                    <h2>OTHER</h2>
                    <ul class="container-list-01">
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Commercial Insurance')) ?>">
                          <div class="item-text">
                            <h3>Commercial Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Hotel Insurance')) ?>">
                          <div class="item-text">
                            <h3>Hotel Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Pub & Restaurant Insurance')) ?>">
                          <div class="item-text">
                            <h3>Pub & Restaurant Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Employers’ & Public Liability Insurance')) ?>">
                          <div class="item-text">
                            <h3>Employers’ & Public Liability Insurance</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="bottom-contact">
                  <ul class="bottom-contact-list">
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Contact')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Contact Us</p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Support</p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Claims')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Claims</p>
                      </a>
                    </li>
                  </ul>
                  <!-- BUTTON LINKS TO THE FORM  -->
                  <button class="btn btn-primary-rounded js-open-modal" aria-label="Get Quote Button">
                    GET A QUOTE
                  </button>
                </div>
              </div>
            </div>
          </li>
          <!-- Existing Customers Menu --> 
          <li>
            <button class="js-btn-menu" aria-label="Existing Customers Menu" tabindex="0">
              <span>Existing Customers</span>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="icon arrow down" title="icon arrow down" loading="lazy" width="" width="22" height="22">
            </button>
            <!-- Static Menu Dropdown -->
            <div class="dropdown-sub-menu js-menu">
              <div class="area-menu-business">
                <div class="area-menu-business-items">
                  <!-- Area Menu Item 01 -->
                  <div class="area-menu-item-02">
                    <h2>Current Customers</h2>
                    <ul class="container-list-01">
                      <li>
                        <a href="https://www.onesureinsurance.co.uk/existing-customers" target="_blank">
                          <div class="item-text">
                            <h3>My Account</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Renewals')) ?>">
                          <div class="item-text">
                            <h3>Renewals</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Claims')) ?>">
                          <div class="item-text">
                            <h3>Claims</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Payments')) ?>">
                          <div class="item-text">
                            <h3>Payments</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Area Menu Item 01 -->
                  <div class="area-menu-item-02">
                    <h2>HELP SECTION</h2>
                    <ul class="container-list-01">
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Complaints')) ?>">
                          <div class="item-text">
                            <h3>Complaints</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Contact')) ?>">
                          <div class="item-text">
                            <h3>Contact</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>">
                          <div class="item-text">
                            <h3>Support</h3>
                            <p>Lorem Ipsum is simply dummy</p>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="bottom-contact">
                  <ul class="bottom-contact-list">
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Contact')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Contact Us</p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Support</p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_title('Claims')) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <p>Claims</p>
                      </a>
                    </li>
                  </ul>
                  <!-- BUTTON LINKS TO THE FORM  -->
                  <button class="btn btn-primary-rounded js-open-modal" aria-label="Get Quote Button">
                    GET A QUOTE
                  </button>
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
        <!-- Support Menu -->
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>" aria-label="Support Menu"> 
            <span>Support</span>
          </a>
        </li>
        <!-- Contact Us Menu -->
        <li>
          <a href="<?php echo get_permalink(get_page_by_title('Contact')) ?>" aria-label="Contact Menu"> 
            <span>Contact Us</span>
          </a>
        </li>
        <!-- About Us Menu -->
        <li style="margin-bottom: 3rem;">
          <a href="<?php echo get_permalink(get_page_by_title('About Us')) ?>" aria-label="About Us Menu"> 
            <span>About Us</span>
          </a>
        </li>
        <!-- BUTTON LINKS TO THE FORM  -->
        <button class="btn btn-primary btn-cta-mobile js-open-modal-insurance" aria-label="Get Quote Button">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white" loading="lazy">
          GET A QUOTE
        </button>
      </ul>
      
    </div>
  </header>
  <main role="main">