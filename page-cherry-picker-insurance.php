<?php
  // Template name: cherry-picker-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
  
  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(1636); ?>

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-insurance">
    <div class="container">
      <div class="s-hero-insurance__left">
        <div class="s-hero-insurance__left__title">
          <span class="s-hero-insurance__span"><?php the_field('subtitle_left_cherry_picker_insurance') ?></span>
          <h1><?php the_field('title_left_cherry_picker_insurance') ?></h1>
        </div>
        <div class="s-hero-insurance__left__list">
          <ul>
            <?php if( have_rows('list_left_cherry_picker_insurance') ): while ( have_rows('list_left_cherry_picker_insurance') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('icon_checked_cherry_picker_insurance') ?>" alt="icon checked" title="icon checked">
                <p><?php the_sub_field('text_cherry_picker_insurance') ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
        </div>
        <div class="s-hero-insurance__numbers">
          <span class="s-hero-insurance__span__text">Call Today for Our Best Price</span>
          <ul>
            <li class="mobile">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="">
              <a class="text__numbers" href="">
                <span>MOBILE FRIENDLY</span>
                <p><?php the_field('mobile_phone_cherry_picker_insurance') ?></p>
              </a>
            </li>
            <li class="landline">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="">
              <a class="text__numbers" href="">
                <span>TELEPHONE</span>
                <p><?php the_field('landline_phone_cherry_picker_insurance') ?></p>
              </a>
            </li>
          </ul>
          <button class="btn btn-primary-lg cta-mobile js-open-modal ">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white">
            GET A QUOTE
          </button>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/line-section-hero.svg" alt="" class="line-middle">
      <div class="s-hero-insurance__right">
        <div class="s-hero-insurance__right__title">
          <span class="s-hero-insurance__span"><?php the_field('subtitle_right_cherry_picker_insurance') ?></span>
          <h2><?php the_field('title_right_cherry_picker_insurance') ?></h2>
        </div>
        <div class="s-hero-insurance__right_content">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/line-section-hero.jpg" alt="" class="line-right-hero">
          <div class="s-hero-insurance__right__list">
            <ul>
              <li>
                <p><?php the_field('title_01_cherry_picker_insurance') ?></p>
                <span><?php the_field('subtitle_01_cherry_picker_insurance') ?></span>
              </li>
              <li>
                <p><?php the_field('title_02_cherry_picker_insurance') ?></p>
                <span><?php the_field('subtitle_02_cherry_picker_insurance') ?></span>
              </li>
              <li>
                <p><?php the_field('title_03_cherry_picker_insurance') ?></p>
                <span><?php the_field('subtitle_03_cherry_picker_insurance') ?></span>
              </li>
            </ul>
          </div>
        </div>
        <button class="btn btn-primary-lg js-open-modal">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white">
          GET A QUOTE
        </button>
      </div>
    </div>
  </section>

  <!-- Section TrustPilot -->
  <section class="s-trustpilot-insurance" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <?php include(TEMPLATEPATH .'/includes/section-trustpilot-insurance.php') ?>
    </div>
  </section>

  <!-- === SECTION ACCREDITATIONS === -->
  <section class="s-logos-insurance" id="s-logos" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <div class="title">
        <h6>Have a look</h6>
        <h5>Our Accreditations</h5>
      </div>
      <!-- Swipper -->
      <div class="slide-logos">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card-image">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-company01.svg" alt="logo company" title="logo company" loading="lazy">
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
   <section class="s-table-contents" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <!-- Navbar Tab -->
      <ul class="js-nav-product" id="js-nav-product">
        <li class="js-item-content">
          <a href="#overview" class="anchor">
            <p>Overview</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#extras" class="anchor">
            <p>Optional Extras</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#why" class="anchor">
            <p>Why Choose Us?</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#price" class="anchor">
            <p>Price</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#faqs" class="anchor">
            <p>FAQs</p>
          </a>
        </li>
      </ul>
      <!-- Mobile Configuration -->
      <div class="select-custom">
        <!-- item selected -->
        <button class="item-selected js-open-select-custom">
          <span>Select an <strong>item</strong></span>
        </button>
        <!-- Dropdown List -->
        <ul class="dropdown-select" id="dropdown-select">
          <li class="active">
            <a href="#overview">
              <p>Overview</p>
            </a>
          </li>
          <li>
            <a href="#extras">
              <p>Optional Extras</p>
            </a>
          </li>
          <li>
            <a href="#why">
              <p>Why Choose Us?</p>
            </a>
          </li>
          <li>
            <a href="#price">
              <p>Price</p>
            </a>
          </li>
          <li>
            <a href="#faqs">
              <p>FAQs</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section Content -->
  <section class="s-content" id="overview" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <!-- Content Tab -->
      <div class="tab-product-content">
        <div class="text-content active">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Optional Extras -->
  <section class="s-extras-opt" id="extras" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <h6><?php the_field('mobile_title_section_optional_extras_cherry_picker_insurance') ?></h6>
      <h4><?php the_field('title_section_optional_extras_cherry_picker_insurance') ?></h4>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_optional_extras_cards_cherry_picker_insurance') ): while ( have_rows('section_optional_extras_cards_cherry_picker_insurance') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_card_optional_extras_cherry_picker_insurance') ?>">
            <img src="<?php the_sub_field('image_card_optional_extras_cherry_picker_insurance') ?>" alt="">
              <div class="text">
                <h5><?php the_sub_field('title_card_optional_extras_cherry_picker_insurance') ?></h5>
                <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
              </div>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </section>

  <!-- Section Product -->
  <section class="s-slide-product" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <div class="top">
        <h6><?php the_field('mobile_title_section_product_slide_cherry_picker_insurance') ?></h6>
        <h4><?php the_field('title_section_product_slide_cherry_picker_insurance') ?></h4>
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
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('card_product_slide_cherry_picker_insurance') ): while ( have_rows('card_product_slide_cherry_picker_insurance') ) : the_row(); ?>
            <div class="swiper-slide">
              <!-- Card Product Type -->
              <a href="<?php the_sub_field('card_link_cherry_picker_insurance') ?>" class="card-product">
                <div class="image">
                    <img src="<?php the_sub_field('image_card_cherry_picker_insurance') ?>" alt="card product page" title="card product page">
                </div>
                <div class="info">
                    <h6><?php the_sub_field('card_title_cherry_picker_insurance') ?></h6>
                    <p><?php the_sub_field('subtitle_card_cherry_picker_insurance') ?></p>
                    <div class="learn-more">
                        <span>Learn more</span>
                        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrowdown.svg" alt="arrow right rounded" title="arrow right rounded">
                    </div>
                </div>
              </a>
            </div>
          <?php endwhile; else : endif;?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section CTA Desktop -->
  <div class="s-newsletter">
    <div class="container">
      <a href="<?php the_field('link_cta_cherry_picker_insurance') ?>" class="large-cta js-open-modal" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
            <span><?php the_field('subtitle_cta_cherry_picker_insurance') ?></span>
            <h3><?php the_field('title_cta_cherry_picker_insurance') ?></h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
            get a quote
        </button>
      </a>
    </div>
  </div>

  <!-- Section Bespoke -->
  <section class="s-bespoke" id="why">
    <div class="container">
      <div class="text-top">
        <h6><?php the_field('mobile_title_section_why_us_cherry_picker_insurance') ?></h6>
        <h4 data-aos="fade-right" data-aos-once="true"><?php the_field('title_section_why_us_cherry_picker_insurance') ?></h4>
        <p data-aos="fade-left" data-aos-once="true"><?php the_field('subtitle_section_why_us_cherry_picker_insurance') ?></p>
      </div>
      <div class="main-bespoke">
        <div class="text-bottom" data-aos="fade-right" data-aos-once="true">
          <ul>
            <!-- Repeater Slide Cards --> 
            <?php if( have_rows('cards_section_why_us_cherry_picker_insurance') ): while ( have_rows('cards_section_why_us_cherry_picker_insurance') ) : the_row(); ?>
              <!-- Card -->
              <li>
                <img src="<?php the_sub_field('icon_card_cherry_picker_insurance'); ?>" alt="icon house" title="icon house">
                <h5><?php the_sub_field('title_why_us_card_cherry_picker_insurance'); ?></h5>
                <p><?php the_sub_field('description_why_us_card_cherry_picker_insurance'); ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
        </div>
        <img src="<?php the_field('image_section_why_us_cherry_picker_insurance') ?>" alt="bespoke image" title="bespoke image" class="bespoke-img" data-aos="fade-left">
      </div>
      <p class="terms-conditions-why-us"><?php the_field('terms_conditions_why_us_cherry_picker_insurance') ?></p>
    </div>
  </section>

  <!-- Section FAQs -->
  <section class="s-faqs padding-bottom" id="faqs" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <h4><?php the_field('title_section_cherry_picker_insurance') ?></h4>
      <div class="b-container">
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_faq_cherry_picker_insurance') ): while ( have_rows('section_faq_cherry_picker_insurance') ) : the_row(); ?>
          <!-- Question Card -->
          <div class="question">
            <div class="title js-question">
              <strong><?php the_sub_field('title_faq_cherry_picker_insurance'); ?></strong>
              <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="question-content">
              <?php the_sub_field('description_faq_cherry_picker_insurance'); ?>
            </div>
          </div>
        <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>

  <!-- Section CTA Desktop -->
  <div class="s-newsletter">
    <div class="container">
      <a href="<?php the_field('link_cta_cherry_picker_insurance') ?>" class="large-cta js-open-modal" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
            <span><?php the_field('subtitle_cta_cherry_picker_insurance') ?></span>
            <h3><?php the_field('title_cta_cherry_picker_insurance') ?></h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
            get a quote
        </button>
      </a>
    </div>
  </div>

  <!-- Section Related Articles Filter By Tag -->
  <?php   
    $tag = get_queried_object();
    $args = array(
      'post_type' => 'post',
      'order' => 'DESC',
      'posts_per_page' => 3,
      'tag_id' => 61,
    );
    $the_query = new WP_Query($args);
  ?>
  <?php if ($the_query->have_posts()) : ?>
    <section class="s-articles" id="s-articles">
      <div class="container">
        <div class="text-top">
          <h6><?php the_field('mobile_title_section_articles_cherry_picker_insurance'); ?></h6>
          <h4><?php the_field('title_section_articles_cherry_picker_insurance'); ?></h4>
          <p><?php the_field('description_section_articles_cherry_picker_insurance'); ?></p>
        </div>
        <!-- Section Article Cards -->
        <?php include(TEMPLATEPATH .'/includes/page-insurance-article-cards.php') ?>
      </div>
    </section>
  <?php endif; ?>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>