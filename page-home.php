<!-- Give the name to the template -->
<?php
  // Template name: Home
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Section Hero -->
<section class="s-hero">
  <div class="container">
    <div class="heading" data-aos="fade-right">
      <h2>Cheapest Insurance Guaranteed</h2>
      <h1>One Sure Insurance.</h1>
    </div>
    <ul class="card-hero">
      <li class="item-card" data-aos="fade-left" data-aos-delay="120">
        <a href="<?php echo get_permalink(get_page_by_title('Motor Trade')) ?>">
          <i class="fa-solid fa-key fa-2x"></i>
          <span>Motor Trade</span>
        </a>
      </li>
      <li class="item-card" data-aos="fade-left" data-aos-delay="60">
        <a href="<?php echo get_permalink(get_page_by_title('Van Insurance')) ?>">
          <i class="fa-solid fa-van-shuttle fa-2x"></i>
          <span>Van Insurance</span>
        </a>
      </li>
      <li class="item-card" data-aos="fade-left" data-aos-delay="30">
        <a href="<?php echo get_permalink(get_page_by_title('HGV Insurance')) ?>">
          <i class="fa-solid fa-truck-front fa-2x"></i>
          <span>HGV & Lorry Insurance</span>
        </a>
      </li>
      <li class="item-card"  data-aos="fade-left" data-aos-delay="10">
        <a href="<?php echo get_permalink(get_page_by_title('Car Insurance')) ?>">
          <i class="fa-solid fa-car fa-2x"></i>
          <span>Car Insurance</span>
        </a>
      </li>
      <li class="item-card" data-aos="fade-left" data-aos-delay="180">
        <a href="#s-insurance">
          <i class="fa-solid fa-arrow-up-right-from-square fa-2x"></i>
          <span>Others ...</span>
        </a>
      </li>
    </ul>
  </div>
</section>
  
<!-- Section Trust pilot -->
<section class="s-trustpilot">
  <div class="container">
    Section trustpilot to be developed later
  </div>
</section>

<!-- Section Call Us Now -->
<section class="s-call">
  <div class="container">
    <div class="title">
      <h2>GIVE US A CALL NOW 
        FOR OUR BEST PRICE
      </h2>
    </div>
    <div class="all-cards">
      <div class="card-01" data-aos="fade-up" data-aos-delay="0">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-lg.svg" alt="icon phone" title="icon phone" loading="lazy">
        <div class="text">
          <h3>Call Now</h3>
          <p>0800 081 5113</p>
        </div>
      </div>
      <div class="card-02" data-aos="fade-up" data-aos-delay="100">
        <h3>We can call you at anytime</h3>
        <button class="btn btn-primary-lg">
          <i class="fa-solid fa-phone"></i>
          CALL ME BACK
        </button>
      </div>
      <div class="card-03" data-aos="fade-up" data-aos-delay="200">
        <h3>It only takes a few minutes</h3>
        <button class="btn btn-primary-lg">
          <i class="fa-solid fa-envelope"></i>
          GET A QUOTE
        </button>
      </div>
    </div>
    
  </div>
</section>

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

<!-- Section Types of Insurance -->
<section class="s-insurance" id="s-insurance">
  <div class="container">
    <div class="title">
      <h6 data-aos="fade-right">All Types of Insurance</h6>
      <h2 data-aos="fade-right">Better Insurance For Everyone</h2>
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy" data-aos="zoom-in">
      <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur. Tincidunt mattis convallis in dolor urna faucibus nec egestas. Nisl proin. </p>
    </div>
    <div class="all-cards-type" data-aos="fade-up">
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-car"></i>
        </div>
        <div class="info">
            <h4>Car Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-key"></i>
        </div>
        <div class="info">
            <h4>Motor Trade Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-van-shuttle"></i>
        </div>
        <div class="info">
            <h4>Van Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-motorcycle"></i>
        </div>
        <div class="info">
            <h4>Motorbike Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-truck-front"></i>
        </div>
        <div class="info">
            <h4>HGV & Lorry Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-house"></i>
        </div>
        <div class="info">
            <h4>Home Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-person-biking"></i>
        </div>
        <div class="info">
            <h4>Scooter Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
      <a href="#" class="card-type-default">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/bitmap-image.webp" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
        </div>
        <div class="icon">
          <i class="fa-solid fa-caravan"></i>
        </div>
        <div class="info">
            <h4>Caravan Insurance</h4>
            <p>Lorem ipsum dolor sit amet. Lor em ipsum dolor sit amet.</p>
            <span class="small-text">Lorem ipsum dolor sit amet consectetur</span>
        </div>
      </a>
    </div>
    <button class="btn btn-outline" id="btn-outline">
      <i class="fa-solid fa-arrows-rotate"></i>
      LOAD MORE
    </button>
  </div>
</section>

<!-- Section About Us -->
<section class="s-about">
  <div class="container">
    <div class="title">
      <h6 data-aos="fade-right">About Us</h6>
      <h2 data-aos="fade-right">Award Winning Company</h2>
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy" data-aos="zoom-in">
      <p data-aos="fade-left">Since 1914, the New York Mutual Insurance Company has been serving policyholders.</p>
    </div>
    <div class="main">
      <div class="image" >
        <img src="<?php echo get_template_directory_uri()?>/assets/bg/about.webp" alt="about us image" title="about us image" loading="lazy" data-aos="fade-right">
      </div>
      <div class="text" data-aos="fade-left">
          <p>One Sure Insurance are one of the UK's fastest growing independently owned insurance intermediaries
          </p>
          <ul>
            <li>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked" loading="lazy">
                <p>Duis aute irure dolor in reprehenderit in vele cillum.</p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked" loading="lazy">
              <p>Duis aute irure dolor in reprehenderit in vele cillum.</p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked.svg" alt="icon checked" title="icon checked" loading="lazy">
              <p>Duis aute irure dolor in reprehenderit in vele cillum.</p>
            </li>
          </ul>
          <p class="none">Lorem ipsum dolor sit amet consectetur. Mauris a nascetur dui at sed amet scelerisque amet faucibus. Volutpat sed malesuada interdum in lectus congue pellentesque.</p>
          <button class="btn btn-primary">
          <i class="fa-solid fa-chevron-right"></i>
          Learn More
        </button> 
      </div>
    </div>
  </div>
</section>

<!-- Section Articles -->
<section class="s-main-articles">
  <div class="container">
    <div class="title">
      <h6 data-aos="fade-right">Check Our New Blog</h6>
      <h2 data-aos="fade-right">Latest News & Articles From The Blog</h2>
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" data-aos="zoom-in">
      <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur. Ut ultricies mattis dapibus tempus mauris .</p>
    </div>
    <div class="posts" data-aos="fade-up">
      <a href="#" class="card-post-blog">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/blog-post.webp" alt="blog post image example" title="blog post image example">
        </div>
        <div class="categories">
            <span>Car Insurance</span>
        </div>
        <div class="info">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-calendar-blog.svg" alt="icon calendar" title="icon calendar" loading="lazy">
                    <span>July,2,2022 </span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-blog.svg" alt="icon clock" title="icon clock" loading="lazy">
                    <span>4 min read </span>
                </li>
            </ul>
            <h5>The 8 best things about insurance. </h5>
            <p>Lorem ipsum dolor sit amet consectetur. Enim pellentesque eget sed tortor.</p>
            <span class="read-more">Read More</span>
        </div>
      </a>
      <a href="#" class="card-post-blog">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/blog-post.webp" alt="blog post image example" title="blog post image example" loading="lazy">
        </div>
        <div class="categories">
            <span>Car Insurance</span>
        </div>
        <div class="info">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-calendar-blog.svg" alt="icon calendar" title="icon calendar" loading="lazy">
                    <span>July,2,2022 </span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-blog.svg" alt="icon clock" title="icon clock" loading="lazy">
                    <span>4 min read </span>
                </li>
            </ul>
            <h5>The 8 best things about insurance. </h5>
            <p>Lorem ipsum dolor sit amet consectetur. Enim pellentesque eget sed tortor.</p>
            <span class="read-more">Read More</span>
        </div>
      </a>
      <a href="#" class="card-post-blog">
        <div class="image">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/blog-post.webp" alt="blog post image example" title="blog post image example" loading="lazy">
        </div>
        <div class="categories">
            <span>Car Insurance</span>
        </div>
        <div class="info">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-calendar-blog.svg" alt="icon calendar" title="icon calendar" loading="lazy">
                    <span>July,2,2022 </span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-blog.svg" alt="icon clock" title="icon clock" loading="lazy">
                    <span>4 min read </span>
                </li>
            </ul>
            <h5>The 8 best things about insurance. </h5>
            <p>Lorem ipsum dolor sit amet consectetur. Enim pellentesque eget sed tortor.</p>
            <span class="read-more">Read More</span>
        </div>
      </a>
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
 
<!-- Include Footer -->
<?php get_footer(); ?>