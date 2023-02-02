<!-- Give the name to the template -->
<?php
  // Template name: hgv-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>
  
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
              <a href="van-product.html" aria-label="current page">
                  Truck, Lorry & HGV Insurance
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
        <h1>Truck, Lorry & HGV Insurance <br>
          Find the right cover to suit you.</h1>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon green checked" title="icon green checked">
            <p>Third-Party and comprehensive cover available.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon green checked" title="icon green checked">
            <p>Insurance cover for UK & EU transportation.</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon green checked" title="icon green checked">
            <p>Prices From Just £00.00* Per Month.</p>
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
        <h2>Get HGV insurance From Just <span>£0 Per Month</span></h2>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="icon phone" title="icon phone">
            <p>Landline: <span>0800 081 5113</span></p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="icon mobile phone" title="icon mobile phone">
            <p>Mobile: <span>03303139373</span></p>
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
      <h4>Find the best option for you!
        Specialist for vans and pick-ups.</h4>
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
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
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
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
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
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
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
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
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
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
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
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
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
        <a href="#s-benefits" title="benefits section">
          <p>Personal</p>
        </a>
      </li>
      <li class="js-item-content">
        <a href="" title="commercial section">
          <p>Commercial</p>
        </a>
      </li>
      <li class="js-item-content">
        <a href="#s-why-us" title="why us section">
          <p>Why Choose Us?</p>
        </a>
      </li>
      <li class="js-item-content">
        <a href="#s-extras-opt" title="extra section">
          <p>Optional Extras</p>
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
          <a href="#s-benefits">
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
        <h2>Overview</h2>
        <p>Ensuring you have the right cover in place will not only protect your livelihood but give you peace of mind during your shift. HGV insurance is what you’re looking for if you drive a heavy goods vehicle (HGV) as part of a business or drive your own lorry for work. On the other hand, if you own a large number of vehicles in operation, it may also be worth looking into whether fleet insurance could be a better option for your business.
        </p>
        <p>In a nutshell, HGV insurance can cover trucks, lorries, and loaded goods vehicles in the event of an accident that results in damage or injury. The level of cover needed will vary depending on the nature of your business, the vehicle you drive, your location, and the types of goods you carry.</p>
        <h2>What licence do I need to operate an HGV?</h2>
        <p>HGV operators with vehicles over 7.5 metric tonnes must have a class C+E commercial driving licence. If you passed your car driving test before 1st January 1997, we have good news: you can drive a category C1 vehicle up to 7.5 tonnes without further testing. 
          However, those who have passed on or after 1st January 1997 will only be able to drive a category B vehicle up to 3.5 tonnes.</p>
        <h2>What is an O licence?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
        <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
        <h2>What does Personal Van Insurance cover?</h2>
        <ul>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
        </ul>
        <h2>What does Personal Van Insurance cover?</h2>
        <ul>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
        </ul>

      </div>
    </div>
  </div>
</section>

<!-- Section Bespoke -->
<section class="s-bespoke" id="s-why-us">
    <div class="container">
      <div class="text-top">
        <h6>Lorem ipsum is simply</h6>
        <h4 data-aos="fade-right">Why Choose Us?</h4>
        <p data-aos="fade-left">Custom-tailored to the individual needs and requirements of your business</p>
      </div>
      <div class="main-bespoke">
        <div class="text-bottom" data-aos="fade-right">
          <ul >
            <!-- Card -->
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-house-bespoke.svg" alt="icon house" title="icon house">
              <h5>Trusted Panel of Underwriters</h5>
              <p>As one of the UK's leading insurance brokers, we will find the right policy to suit your business and vehicle with the help of a handful of trusted underwriters.</p>
            </li>
            <!-- Card -->
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-store-bespoke.svg" alt="icon store" title="icon store">
              <h5>Changes to Your Policy</h5>
              <p>If you need to change your policy, our friendly team is only a phone call away and happy to help. </p>
            </li>
            <!-- Card -->
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-finance-bespoke.svg" alt="icon finance" title="icon finance">
              <h5>Hassle-Free Renewals</h5>
              <p>You’ll be in safe hands with our dedicated renewal team. We pride ourselves on always being up-to-date on the latest offers. </p>
            </li>
            <!-- Card -->
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-policies-bespoke.svg" alt="icon policies" title="icon policies">
              <h5>Policies From Just £000* Per Year</h5>
              <p>Our insurance experts will always find you the cheapest price possible on the correct cover. And if you find a cheaper quote in 48 hours? You’ll get your money back.</p>
            </li>
          </ul>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/assets/bg/bespoke-image.webp" alt="bespoke image" title="bespoke image" class="bespoke-img" data-aos="fade-left">
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

<!-- Section FAQs -->
<section class="s-faqs padding-bottom" id="s-faqs" data-aos="fade-up">
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

<!-- Section Top Vans -->
<section class="s-slide-van">
  <div class="container">
    <div class="top">
      <h6>All Types of Insurance</h6>
      <h4>Personal & Commercial Van Insurance</h4>
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
    <div class="slide-van">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <!-- Card Van Type -->
          <a href="motor-trade.html" class="card-van">
            <div class="image">
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
            </div>
            <div class="info">
                <h6>Mechanics Insurance</h6>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card Van Type -->
          <a href="motor-trade.html" class="card-van">
            <div class="image">
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
            </div>
            <div class="info">
                <h6>Mechanics Insurance</h6>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card Van Type -->
          <a href="motor-trade.html" class="card-van">
            <div class="image">
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
            </div>
            <div class="info">
                <h6>Mechanics Insurance</h6>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card Van Type -->
          <a href="motor-trade.html" class="card-van">
            <div class="image">
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
            </div>
            <div class="info">
                <h6>Mechanics Insurance</h6>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card Van Type -->
          <a href="motor-trade.html" class="card-van">
            <div class="image">
                <img src="<?php echo get_template_directory_uri()?>/assets/bg/van-card.webp" alt="card product page" title="card product page">
            </div>
            <div class="info">
                <h6>Mechanics Insurance</h6>
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
    <a href="motor-trade.html" class="large-cta" data-aos="zoom-in">
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

<!-- Section Articles -->
<section class="s-articles" id="s-articles">
  <div class="container">
    <div class="text-top">
      <h6>Check below some</h6>
      <h4>Related Articles</h4>
      <p>Check similar articles below 🚀</p>
    </div>
    <div class="article-cards">
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
 
<!-- Include Footer -->
<?php get_footer(); ?>
