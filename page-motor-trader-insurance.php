<?php
  // Template name: motor-trader-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

  <!-- Section Breadcrumbs -->
  <section class="s-breadcrumbs">
    <div class="container">
        <ul>
            <li>
                <a href="<?php echo get_home_url(); ?>" aria-label="home page">
                    <i class="fa-solid fa-house"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo get_home_url(); ?>" aria-label="home page">
                    Home
                </a>
            </li>
            <li>
                <a href="#" aria-label="current page">
                    Motor Trade Insurance
                </a>
            </li>
        </ul>
        <a href="<?php echo get_home_url(); ?>" class="back" aria-label="return page">
          <i class="fa-solid fa-chevron-left"></i>
          Go Back to Home
        </a>
    </div>
  </section>

  <!-- Section Hero -->
  <section class="s-hero-product">
    <div class="container">
      <div class="product">
        <!-- Left Text Area -->
        <div class="left-text" data-aos="fade-right">
          <span class="sm-text-product">get a quote</span>
          <h1>Motor Trade Insurance. 
            Find the right cover to suit you.</h1>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon green checked" title="icon green checked">
              <p>We Offer Road Risk Policies!</p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon green checked" title="icon green checked">
              <p>Road Risks + Combined Premises</p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon green checked" title="icon green checked">
              <p>Prices From Just £50.40 Per Month</p>
            </li>
          </ul>
          <button class="btn btn-primary-lg">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white">
            GET A QUOTE
          </button>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-line.svg" alt="icon line" title="icon line" class="img-line" data-aos="zoom-in">
        <!-- Right Text Area -->
        <div class="right-text" data-aos="fade-left">
          <span class="sm-text-product">Call Us Today</span>
          <h2>You can get a Traders Policy From Just <span>£50.40 Per Month</span></h2>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="icon phone" title="icon phone">
              <p>Call our landline at <span>0800 081 5113</span></p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="icon mobile phone" title="icon mobile phone">
              <p>Call your mobile at <span>03303139373</span></p>
            </li>
          </ul>
          <button class="btn btn-outline">
            <i class="fa-solid fa-phone"></i>
            Call For Our Best Price
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Trustpilot -->
  <section class="s-trustpilot-product">
    <div class="container">
      <h3>We pay out on 99% of Car Insurance claims.</h3>
      <div class="t-pilot">
        Section to be developed later
      </div>
    </div>
  </section>

  <!-- Section Product -->
  <section class="s-slide-product">
    <div class="container">
      <div class="top">
        <h6>All Types of Insurance</h6>
        <h4>We Cover The Majority Of Motor Trade Industries</h4>
        <div class="ctrl-slide">
          <!-- Swipper pagination structure -->
          <div class="swiper-pagination"></div>
          <div class="ctrl">
            <button class="btn-prev">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-slide.svg" alt="arrow prev" title="arrow prev">
            </button>
            <button class="btn-next">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-slide.svg" alt="arrow next" title="arrow next">
            </button>
          </div>
        </div>
      </div>
      <!-- Swiper slide structure -->
      <div class="slide-product">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!-- Card Product Type -->
            <a href="#" class="card-product">
              <div class="image">
                  <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-product-page.webp" alt="card product page" title="card product page">
              </div>
              <div class="info">
                  <h6>Mechanics Insurance</h6>
                  <p>The most basic level of cover for those who buy, sell and trade cars and motorbikes from home.</p>
                  <div class="learn-more">
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-circle-right-rounded.svg" alt="arrow right rounded" title="arrow right rounded">
                      <span>Learn more</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Card Product Type -->
            <a href="#" class="card-product">
              <div class="image">
                  <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-product-page.webp" alt="card product page" title="card product page">
              </div>
              <div class="info">
                  <h6>Mechanics Insurance</h6>
                  <p>The most basic level of cover for those who buy, sell and trade cars and motorbikes from home.</p>
                  <div class="learn-more">
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-circle-right-rounded.svg" alt="arrow right rounded" title="arrow right rounded">
                      <span>Learn more</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Card Product Type -->
            <a href="#" class="card-product">
              <div class="image">
                  <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-product-page.webp" alt="card product page" title="card product page">
              </div>
              <div class="info">
                  <h6>Mechanics Insurance</h6>
                  <p>The most basic level of cover for those who buy, sell and trade cars and motorbikes from home.</p>
                  <div class="learn-more">
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-circle-right-rounded.svg" alt="arrow right rounded" title="arrow right rounded">
                      <span>Learn more</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Card Product Type -->
            <a href="#" class="card-product">
              <div class="image">
                  <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-product-page.webp" alt="card product page" title="card product page">
              </div>
              <div class="info">
                  <h6>Mechanics Insurance</h6>
                  <p>The most basic level of cover for those who buy, sell and trade cars and motorbikes from home.</p>
                  <div class="learn-more">
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-circle-right-rounded.svg" alt="arrow right rounded" title="arrow right rounded">
                      <span>Learn more</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Card Product Type -->
            <a href="#" class="card-product">
              <div class="image">
                  <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-product-page.webp" alt="card product page" title="card product page">
              </div>
              <div class="info">
                  <h6>Mechanics Insurance</h6>
                  <p>The most basic level of cover for those who buy, sell and trade cars and motorbikes from home.</p>
                  <div class="learn-more">
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-circle-right-rounded.svg" alt="arrow right rounded" title="arrow right rounded">
                      <span>Learn more</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Card Product Type -->
            <a href="#" class="card-product">
              <div class="image">
                  <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-product-page.webp" alt="card product page" title="card product page">
              </div>
              <div class="info">
                  <h6>Mechanics Insurance</h6>
                  <p>The most basic level of cover for those who buy, sell and trade cars and motorbikes from home.</p>
                  <div class="learn-more">
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-circle-right-rounded.svg" alt="arrow right rounded" title="arrow right rounded">
                      <span>Learn more</span>
                  </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Newsletter -->
  <div class="s-newsletter">
    <div class="container">
      <a href="#" class="large-cta" data-aos="zoom-in">
        <div class="text">
            <span>We Are Confident Of Our Pricing That We Challenge You To Beat Our Guarantee</span>
            <h3>We Are Britains Cheapest Motor Trade Insurer* </h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
            get a quote
        </button>
      </a>
    </div>
  </div>

  <!-- Section Logos Slide -->
  <section class="s-logos" id="s-logos">
    <div class="container">
      <div class="title" data-aos="fade-right">
        <h6>Lorem ipsum is simply</h6>
        <h5>Our Accreditations</h5>
      </div>
      <!-- Swipper -->
      <div class="slide-logos" data-aos="fade-left">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri()?>/assets/logo-company01.svg" alt="logo company" title="logo company" loading="lazy">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri()?>/assets/logo-company02.svg" alt="logo company" title="logo company" loading="lazy">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri()?>/assets/logo-company03.svg" alt="logo company" title="logo company" loading="lazy">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-image">
                <img src="<?php echo get_template_directory_uri()?>/assets/logo-company04.svg" alt="logo company" title="logo company" loading="lazy">
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <!-- Table of Contents -->
  <section class="s-table-contents">
    <div class="container">
      <!-- Navbar Tab -->
      <ul class="js-nav-product">
        <li class="js-item-content">
          <a href="#s-content" class="active" title="content section">
            <p>Insurance overview</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#s-content" title="cover section">
            <p>Types of Insurance</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#s-cover" title="cover section">
            <p>Compare our cover</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#s-extras-opt" title="extra section">
            <p>Optional Extras</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#s-bespoke" title="why section">
            <p>Why choose us?</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#s-faqs" title="faq section">
            <p>FAQs</p>
          </a>
        </li>
      </ul>
      <!-- Mobile Configuration -->
      <div class="select-custom">
        <!-- item selected -->
        <button class="item-selected js-open-select-custom">
          <span>Select an </span>
          <strong>item</strong>
        </button>
        <!-- Dropdown List -->
        <ul class="dropdown-select">
          <li>
            <a href="#s-content" class="active">
              <p>Insurance overview</p>
            </a>
          </li>
          <li>
            <a href="#s-cover">
              <p>Compare our cover</p>
            </a>
          </li>
          <li>
            <a href="#s-why">
              <p>Why choose us?</p>
            </a>
          </li>
          <li>
            <a href="#s-extras-opt">
              <p>Optional Extras</p>
            </a>
          </li>
          <li>
            <a href="#s-faqs">
              <p>FAQs</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section Text Content -->
  <section class="s-content" id="s-content" data-aos="fade-up">
    <div class="container">
      <!-- Content Tab -->
      <div class="tab-product-content">
        <div class="text-content active">
          <h2>Lorem ipsum dolor sit amet, consectetur?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
          <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
          <h2>Lorem ipsum dolor sit amet, consectetur?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
          <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
          <h2>Lorem ipsum dolor sit amet, consectetur?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
          <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section What to Cover -->
  <section class="s-cover" id="s-cover">
    <div class="container">
      <div class="cover-on" data-aos="fade-right">
        <h6>What we can cover you for:</h6>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
        </ul>
      </div>
      <div class="cover-off" data-aos="fade-left">
        <h6>What's not included:</h6>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-circle.svg" alt="icon not checked" title="icon not checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-circle.svg" alt="icon not checked" title="icon not checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-circle.svg" alt="icon not checked" title="icon not checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-circle.svg" alt="icon not checked" title="icon not checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-circle.svg" alt="icon not checked" title="icon not checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-circle.svg" alt="icon not checked" title="icon not checked">
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium.</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section Optional Extras -->
  <section class="s-extras-opt" id="s-extras-opt" data-aos="fade-up">
    <div class="container">
      <h6>Lorem ipsum is simply</h6>
      <h4>Optional Extras Insurance</h4>
      <ul>
        <li>
          <a href="#">
            <i class="fa-solid fa-house"></i>
            <div class="text">
              <h5>Home assistance</h5>
              <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-house"></i>
            <div class="text">
              <h5>Home assistance</h5>
              <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-house"></i>
            <div class="text">
              <h5>Home assistance</h5>
              <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-house"></i>
            <div class="text">
              <h5>Home assistance</h5>
              <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-house"></i>
            <div class="text">
              <h5>Home assistance</h5>
              <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
              
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-house"></i>
            <div class="text">
              <h5>Home assistance</h5>
              <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <!-- Section Bespoke -->
  <section class="s-bespoke">
      <div class="container">
        <div class="text-top">
          <h6>Lorem ipsum is simply</h6>
          <h4 data-aos="fade-right">Bespoke Motor Traders Insurance Policies</h4>
          <p data-aos="fade-left">Custom-tailored to the individual needs and requirements of your business</p>
        </div>
        <div class="main-bespoke">
          <div class="text-bottom" data-aos="fade-right">
            <ul >
              <!-- Card -->
              <li>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-house-bespoke.svg" alt="icon house" title="icon house">
                <h5>Trusted Panel of Underwriters</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
              </li>
              <!-- Card -->
              <li>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-store-bespoke.svg" alt="icon store" title="icon store">
                <h5>Make Changes When you Need To</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
              </li>
              <!-- Card -->
              <li>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-finance-bespoke.svg" alt="icon finance" title="icon finance">
                <h5>Renewals Made Hassle Free</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
              </li>
              <!-- Card -->
              <li>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-policies-bespoke.svg" alt="icon policies" title="icon policies">
                <h5>Policies From Just £450</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
              </li>
            </ul>
          </div>
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/bespoke-image.webp" alt="bespoke image" title="bespoke image" class="bespoke-img" data-aos="fade-left">
        </div>
      </div>
  </section>

  <!-- Section FAQs -->
  <section class="s-faqs padding-bottom padding-top" id="s-faqs" data-aos="fade-up">
    <div class="container">
      <h4>Frequently Asked Questions</h4>
      <div class="b-container">
        <!-- Question Card -->
        <div class="question">
          <div class="title js-question">
            <strong>Do I need car insurance?</strong>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <p>Car insurance is a legal requirement in the UK. Unless your car is SORN’d, you must at least have third-party only car insurance – this still applies if you don’t drive the car and keep it parked on a road, driveway or garage.</p>
        </div>
        <!-- Question Card -->
        <div class="question">
          <div class="title js-question">
            <strong>Question 02</strong>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <p>Car insurance is a legal requirement in the UK. Unless your car is SORN’d, you must at least have third-party only car insurance – this still applies if you don’t drive the car and keep it parked on a road, driveway or garage.</p>
        </div>
        <!-- Question Card -->
        <div class="question">
          <div class="title js-question">
            <strong>Question 03</strong>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <p>Car insurance is a legal requirement in the UK. Unless your car is SORN’d, you must at least have third-party only car insurance – this still applies if you don’t drive the car and keep it parked on a road, driveway or garage.</p>
        </div>
        <!-- Question Card -->
        <div class="question">
          <div class="title js-question">
            <strong>Question 04</strong>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <p>Car insurance is a legal requirement in the UK. Unless your car is SORN’d, you must at least have third-party only car insurance – this still applies if you don’t drive the car and keep it parked on a road, driveway or garage.</p>
        </div>
        <!-- Question Card -->
        <div class="question">
          <div class="title js-question">
            <strong>Question 05</strong>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <p>Car insurance is a legal requirement in the UK. Unless your car is SORN’d, you must at least have third-party only car insurance – this still applies if you don’t drive the car and keep it parked on a road, driveway or garage.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Articles -->
  <section class="s-articles" id="s-articles">
    <div class="container">
      <div class="text-top">
        <h6>Check below some</h6>
        <h4>Related Articles</h4>
        <p>Check similar articles below 🚀</p>
      </div>
      <div class="article-cards">
        <a href="#" class="card-post-default">
          <div class="image">
              <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-default.webp" alt="image post default" title="image post default">
          </div>
          <div class="info">
              <span class="categorie">Car Insurance</span>
              <h6>The Benefits of choosing One Sure as your Local Insurance Broker</h6>
              <ul>
                  <li>
                      <span>16, Fev</span>
                  </li>
                  <li>
                      <span>12min of read</span>
                  </li>
              </ul>
          </div>
        </a>
        <a href="motor-trade.html" class="card-post-default">
          <div class="image">
              <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-default.webp" alt="image post default" title="image post default">
          </div>
          <div class="info">
              <span class="categorie">Car Insurance</span>
              <h6>The Benefits of choosing One Sure as your Local Insurance Broker</h6>
              <ul>
                  <li>
                      <span>16, Fev</span>
                  </li>
                  <li>
                      <span>12min of read</span>
                  </li>
              </ul>
          </div>
        </a>
        <a href="motor-trade.html" class="card-post-default">
          <div class="image">
              <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-default.webp" alt="image post default" title="image post default">
          </div>
          <div class="info">
              <span class="categorie">Car Insurance</span>
              <h6>The Benefits of choosing One Sure as your Local Insurance Broker</h6>
              <ul>
                  <li>
                      <span>16, Fev</span>
                  </li>
                  <li>
                      <span>12min of read</span>
                  </li>
              </ul>
          </div>
        </a>
      </div>
    </div>
  </section>
 
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>