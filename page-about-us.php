<!-- Give the name to the template -->
<?php
  // Template name: about-us
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Section Hero -->
<section class="s-hero-about">
  <div class="container">
      <div class="s-hero-about-title">
          <h1>About Us</h1>
          <ul>
              <li>
                  <a href="<?php echo get_home_url(); ?>">
                      Home
                  </a>
              </li>
              <li>
                  <a href="">
                      About
                  </a>
              </li>
          </ul>
      </div>
  </div>
</section>

<!-- Section About Us -->
<section class="s-about-us-text">
  <div class="container">
      <div class="s-about-us-text-left" data-aos="fade-right">
          <h2>One Sure Insurance are one of the UK’s fastest growing independently owned insurance</h2>
          <p>One Sure Insurance are one of the UK's fastest growing independently owned insurance intermediaries
          </p>
          <ul>
              <li>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon checked green" title="icon checked green">
                  <p>Duis aute irure dolor in reprehenderit in vele cillum.</p>
              </li>
              <li>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon checked green" title="icon checked green">
                  <p>Duis aute irure dolor in reprehenderit in vele cillum.</p>
              </li>
              <li>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-checked-green.svg" alt="icon checked green" title="icon checked green">
                  <p>Duis aute irure dolor in reprehenderit in vele cillum.</p>
              </li>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur. Mauris a nascetur dui at sed amet scelerisque amet faucibus. Volutpat sed malesuada interdum in lectus congue pellentesque.</p>
          <button class="btn btn-primary">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="icon arrow white" title="icon arrow white">
              LEARN MORE
          </button>
      </div>
      <div class="image-right" data-aos="fade-left">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/about-us-image.jpg" alt="about us image" title="about us image">
      </div>
  </div>
</section>

<!-- Section Newsletter -->
<section class="s-card-blue" data-aos="zoom-in">
  <div class="container">
    <div class="card-dark-blue">
      <h3>Learn in seconds which types of insurance match your business</h3>
      <button class="btn btn-primary">
        <i class="fa-solid fa-envelope"></i>
        GET A QUOTE
      </button>
    </div>
  </div>
</section>

<!-- Section Protect Business -->
<section class="s-protect-business">
  <div class="container">
    <h3 data-aos="fade-up">Protecting you is our business</h3>
    <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur. Massa molestie massa dictum rutrum senectus laoreet facilisi risus eget. </p>
    <ul data-aos="fade-up">
      <li>
        <h4>LIFE INSURANCE</h4>
        <div class="text-bottom">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/about01.png" alt="about image" title="about image">
          <p>Lorem ipsum dolor sit amet consectetur. Massa molestie massa dictum rutrum senectus laoreet facilisi risus eget. </p>
        </div>
      </li>
      <li>
        <h4>CAR INSURANCE</h4>
        <div class="text-bottom">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/about02.png" alt="about image" title="about image">
          <p>Lorem ipsum dolor sit amet consectetur. Massa molestie massa dictum rutrum senectus laoreet facilisi risus eget. </p>
        </div>
      </li>
      <li>
        <h4>HOME INSURANCE</h4>
        <div class="text-bottom">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/about03.png" alt="about image" title="about image">
          <p>Lorem ipsum dolor sit amet consectetur. Massa molestie massa dictum rutrum senectus laoreet facilisi risus eget. </p>
        </div>
      </li>
      <li>
        <h4>HEALTH INSURANCE</h4>
        <div class="text-bottom">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/about04.png" alt="about image" title="about image">
          <p>Lorem ipsum dolor sit amet consectetur. Massa molestie massa dictum rutrum senectus laoreet facilisi risus eget. </p>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- Section Images Card -->
<section class="s-slide-about">
  <div class="container">
    <div class="top">
      <h4>All Our Lovely Staff</h4>
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
    <div class="slide-about">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <!-- Card About Type -->
          <a href="" class="card-about">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/about-card-bitmap.png" alt="image bitmap" title="image bitmap">
            <h6>Rafal Gemza</h6>
            <p>Marketing Ex.</p>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card About Type -->
          <a href="" class="card-about">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/about-card-bitmap.png" alt="image bitmap" title="image bitmap">
            <h6>Rafal Gemza</h6>
            <p>Marketing Ex.</p>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card About Type -->
          <a href="" class="card-about">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/about-card-bitmap.png" alt="image bitmap" title="image bitmap">
            <h6>Rafal Gemza</h6>
            <p>Marketing Ex.</p>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card About Type -->
          <a href="" class="card-about">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/about-card-bitmap.png" alt="image bitmap" title="image bitmap">
            <h6>Rafal Gemza</h6>
            <p>Marketing Ex.</p>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card About Type -->
          <a href="" class="card-about">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/about-card-bitmap.png" alt="image bitmap" title="image bitmap">
            <h6>Rafal Gemza</h6>
            <p>Marketing Ex.</p>
          </a>
        </div>
        <div class="swiper-slide">
          <!-- Card About Type -->
          <a href="" class="card-about">
            <img src="<?php echo get_template_directory_uri()?>/assets/bg/about-card-bitmap.png" alt="image bitmap" title="image bitmap">
            <h6>Rafal Gemza</h6>
            <p>Marketing Ex.</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
  
<!-- Include Footer -->
<?php get_footer(); ?>