<?php
  // Template name: motor-trader-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-insurance">
    <div class="container">
      <div class="s-hero-insurance__left">
        <div class="s-hero-insurance__left__title">
          <span class="s-hero-insurance__span"><?php the_field('subtitle_left_motortrade_insurance') ?></span>
          <h1><?php the_field('title_left_motortrade_insurance') ?></h1>
        </div>
        <div class="s-hero-insurance__left__list">
          <ul>
            <?php if( have_rows('list_left_motortrade_insurance') ): while ( have_rows('list_left_motortrade_insurance') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('icon_checked_motortrade_insurance') ?>" alt="icon checked" title="icon checked">
                <p><?php the_sub_field('text_motortrade_insurance') ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
        </div>
        <div class="s-hero-insurance__numbers">
          <ul>
            <li class="mobile">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="">
              <a class="text__numbers" href="">
                <span>MOBILE FRIENDLY</span>
                <p><?php the_field('mobile_phone_motortrade_insurance') ?></p>
              </a>
            </li>
            <li class="landline">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="">
              <a class="text__numbers" href="">
                <span>TELEPHONE</span>
                <p><?php the_field('landline_phone_motortrade_insurance') ?></p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/line-section-hero.svg" alt="" class="line-middle">
      <div class="s-hero-insurance__right">
        <div class="s-hero-insurance__right__title">
          <span class="s-hero-insurance__span"><?php the_field('subtitle_right_motortrade_insurance') ?></span>
          <h2><?php the_field('title_right_motortrade_insurance') ?></h2>
        </div>
        <div class="s-hero-insurance__right_content">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/line-section-hero.jpg" alt="" class="line-right-hero">
          <div class="s-hero-insurance__right__list">
            <ul>
              <li>
                <p><?php the_field('title_01_motortrade_insurance') ?></p>
                <span><?php the_field('subtitle_01_motortrade_insurance') ?></span>
              </li>
              <li>
                <p><?php the_field('title_02_motortrade_insurance') ?></p>
                <span><?php the_field('subtitle_02_motortrade_insurance') ?></span>
              </li>
              <li>
                <p><?php the_field('title_03_motortrade_insurance') ?></p>
                <span><?php the_field('subtitle_03_motortrade_insurance') ?></span>
              </li>
            </ul>
          </div>
        </div>
        <a href="<?php the_field('link_right_motortrade_insurance') ?>" class="btn btn-primary-lg">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white">
          GET A QUOTE
        </a>
      </div>
    </div>
  </section>

  <!-- Section TrustPilot -->
  <section class="s-trustpilot-insurance" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <?php include(TEMPLATEPATH .'/includes/section-trustpilot-insurance.php') ?>
    </div>
  </section>

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
      <ul class="js-nav-product">
        <li class="js-item-content">
          <a href="#s-content" class="active" title="content section">
            <p>Insurance overview</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#s-slide-product" title="cover section">
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

  <!-- Section Featured Content -->
  <section class="s-featured-content">
    <div class="container">
      <div class="s-featured-content__left" data-aos="fade-right" data-aos-once="true">
        <h4><?php the_field('title_featured_content_motortrade_insurance') ?></h4>
        <div class="s-featured-content__text">
          <?php the_field('description_featured_content_motortrade_insurance') ?>
        </div>
      </div>
      <div class="s-featured-content__right" data-aos="fade-left" data-aos-once="true">
        <img src="<?php the_field('image_featured_content_motortrade_insurance') ?>" alt="">
      </div>
    </div>
  </section>

  <!-- Section Featured Secondary Content -->
  <section class="s-featured-secondary-content">
    <div class="container">
      <div class="s-featured-content__right" data-aos="fade-right" data-aos-once="true">
        <img src="<?php the_field('image_featured_content_secondary_motortrade_insurance') ?>" alt="">
      </div>
      <div class="s-featured-content__left" data-aos="fade-left" data-aos-once="true">
        <h4><?php the_field('title_featured_content_secondary_motortrade_insurance') ?></h4>
        <div class="s-featured-content__text">
          <?php the_field('description_featured_content_secondary_motortrade_insurance') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Column Content -->
  <section class="s-column-content">
    <div class="container">
      <div class="s-column-content-card" data-aos="fade-right" data-aos-once="true">
        <div class="s-column-content-card-image">
          <img src="<?php the_field('image_left_column_motortrade_insurance') ?>" alt="">
        </div>
        <h4><?php the_field('title_left_column_motortrade_insurance') ?></h4>
        <div class="s-column-content-card-text">
          <?php the_field('description_left_column_motortrade_insurance') ?>
        </div>
      </div>
      <div class="s-column-content-card" data-aos="fade-left" data-aos-once="true">
        <div class="s-column-content-card-image">
          <img src="<?php the_field('image_right_column_motortrade_insurance') ?>" alt="">
        </div>
        <h4><?php the_field('title_right_column_motortrade_insurance') ?></h4>
        <div class="s-column-content-card-text">
          <?php the_field('description_right_column_motortrade_insurance') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Optional Extras -->
  <section class="s-extras-opt" id="s-extras-opt" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <h6><?php the_field('mobile_title_optional_extras') ?></h6>
      <h4><?php the_field('title_optional_extras') ?></h4>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_optional_extras_cards') ): while ( have_rows('section_optional_extras_cards') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_for_card') ?>">
              <img src="<?php the_sub_field('image_card_optional_extras_motortrade_insurance') ?>" alt="">
              <div class="text">
                <h5><?php the_sub_field('title_for_card') ?></h5>
                <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
              </div>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </section>

  <!-- Section COVER / DO NOT COVER -->
  <section class="s-cover" id="s-cover">
    <div class="container">
      <div class="cover-on" data-aos="fade-right" data-aos-once="true">
        <h6><?php the_field('section_cover_motortrade_title'); ?></h6>
        <ul>
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('section_cover_on') ): while ( have_rows('section_cover_on') ) : the_row(); ?>
            <li>
              <img src="<?php the_sub_field('icon_checked_cover_on'); ?>" alt="icon checked" title="icon checked">
              <p><?php the_sub_field('text_cover_on'); ?></p>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
      </div>
      <div class="cover-off" data-aos="fade-left" data-aos-once="true">
        <h6>What's not included:</h6>
        <ul>
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('section_cover_off') ): while ( have_rows('section_cover_off') ) : the_row(); ?>
            <li>
              <img src="<?php the_sub_field('icon_checked_cover_off'); ?>" alt="icon not checked" title="icon not checked">
              <p><?php the_sub_field('text_cover_off'); ?></p>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section CTA Newsletter -->
  <div class="s-newsletter" style="padding-top: 0px !important;">
    <div class="container">
      <a href="<?php the_field('link_cta_desktop_motor_trade_insurance') ?>" class="large-cta" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
            <span><?php the_field('subtitle_cta_desktop_motor_trade_insurance') ?></span>
            <h3><?php the_field('title_cta_desktop_motor_trade_insurance') ?> </h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
            get a quote
        </button>
      </a>
    </div>
  </div>

  <!-- Section Why Us  -->
  <section class="s-bespoke" id="s-bespoke">
    <div class="container">
      <div class="text-top">
        <h6><?php the_field('mobile_title_why_us_motortrade') ?></h6>
        <h4 data-aos="fade-right" data-aos-once="true"><?php the_field('title_why_us_motortrade') ?></h4>
        <p data-aos="fade-left" data-aos-once="true"><?php the_field('subtitle_why_us_motortrade') ?></p>
      </div>
      <div class="main-bespoke">
        <div class="text-bottom" data-aos="fade-right" data-aos-once="true">
          <ul>
            <!-- Repeater Slide Cards --> 
            <?php if( have_rows('create_cards_section_about_us_motortrade') ): while ( have_rows('create_cards_section_about_us_motortrade') ) : the_row(); ?>
              <!-- Card -->
              <li>
                <img src="<?php the_sub_field('icon_card_motortrade'); ?>" alt="icon house" title="icon house">
                <h5><?php the_sub_field('title_card_motortrade'); ?></h5>
                <p><?php the_sub_field('description_card_motortrade'); ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
        </div>
        <img src="<?php the_field('image_why_us_motortrade') ?>" alt="bespoke image" title="bespoke image" class="bespoke-img" data-aos="fade-left" data-aos-once="true">
      </div>
    </div>
  </section>

  <!-- Section Price -->
  <section class="s-price-insurance">
    <div class="container">
      <h4 data-aos="fade-up" data-aos-once="true"><?php the_field('title_section_price_motortrade_insurance') ?></h4>
      <div class="s-price-insurance-text" data-aos="fade-up" data-aos-once="true">
        <?php the_field('description_section_price_motortrade_insurance') ?>
      </div>
      <div class="s-price-insurance__card" data-aos="fade-up" data-aos-once="true">
        <h5><?php the_field('title_card_section_price_motortrade_insurance') ?></h5>
        <p><?php the_field('description_card_section_price_motortrade_insurance') ?></p>
      </div>
      <div class="s-price-insurance__card-quote" data-aos="fade-up" data-aos-once="true">
        <p><?php the_field('title_secondary_card_section_price_motortrade_insurance') ?></p>
        <a class="btn btn-primary" href="<?php the_field('link_secondary_card_section_price_motortrade_insurance') ?>">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
          get a quote
        </a>
      </div>
      <span data-aos="fade-up" data-aos-once="true"><?php the_field('span_section_price_motortrade_insurance') ?></span>
    </div>
  </section>

  <!-- Section FAQs -->
  <section class="s-faqs padding-bottom padding-top" id="s-faqs" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <h4><?php the_field('section_faqs_copy'); ?></h4>
      <div class="b-container">
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_faqs_repeater') ): while ( have_rows('section_faqs_repeater') ) : the_row(); ?>
          <!-- Question Card -->
          <div class="question">
            <div class="title js-question">
              <strong><?php the_sub_field('title_faq_motortrade'); ?></strong>
              <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="question-content">
              <?php the_sub_field('description_faq_motortrade'); ?>
            </div>
          </div>
        <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>

  <!-- Section CTA  -->
  <div class="s-newsletter" id="cta">
    <div class="container">
      <a href="<?php the_field('link_cta_motortrade_insurance') ?>" class="large-cta" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
            <span><?php the_field('subtitle_cta_motortrade_insurance') ?></span>
            <h3><?php the_field('title_cta_motortrade_insurance') ?></h3>
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
        'tag_id' => 20,
    );
    $the_query = new WP_Query($args);
  ?>
  <?php if ($the_query->have_posts()) : ?>
    <section class="s-articles" id="s-articles">
      <div class="container">
        <div class="text-top">
          <h6><?php the_field('mobile_title_articles_motortrade'); ?></h6>
          <h4><?php the_field('title_section_articles_motortrade'); ?></h4>
          <p><?php the_field('description_articles_motortrade'); ?></p>
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