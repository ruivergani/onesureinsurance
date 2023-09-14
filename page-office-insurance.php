<?php
  // Template name: office-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
  
  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>

  <!-- === FAQ SCHEMA === -->
  <?php
    $faq_items = get_field('faq_items');
    if ($faq_items) {
      echo '<script type="application/ld+json">';
      echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($item) {
          return [
            '@type' => 'Question',
            'name' => $item['question'],
            'acceptedAnswer' => [
              '@type' => 'Answer',
              'text' => $item['answer'],
            ],
          ];
        }, $faq_items),
      ]);
      echo '</script>';
    }
  ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-insurance">
    <div class="container">
      <div class="s-hero-insurance__left">
        <div class="s-hero-insurance__left__title">
          <span class="s-hero-insurance__span"><?php the_field('subtitle_left_office_insurance') ?></span>
          <h1><?php the_field('title_left_office_insurance') ?></h1>
        </div>
        <div class="s-hero-insurance__left__list">
          <ul>
            <?php if( have_rows('list_left_office_insurance') ): while ( have_rows('list_left_office_insurance') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('icon_checked_office_insurance') ?>" alt="icon checked" title="icon checked" width="18" height="18">
                <p><?php the_sub_field('text_office_insurance') ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
        </div>
        <div class="s-hero-insurance__numbers">
          <span class="s-hero-insurance__span__text">Call Today for Our Best Price</span>
          <ul>
            <li class="mobile">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="" width="40" height="40">
              <a class="text__numbers" href="<?php the_field('link_text_mobile_phone_office_insurance') ?>">
                <span>MOBILE FRIENDLY</span>
                <p><?php the_field('mobile_phone_office_insurance') ?></p>
              </a>
            </li>
            <li class="landline">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="" width="40" height="40">
              <a class="text__numbers" href="<?php the_field('link_text_landline_phone_office_insurance') ?>">
                <span>TELEPHONE</span>
                <p><?php the_field('landline_phone_office_insurance') ?></p>
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
        <!-- Section TrustPilot -->
        <div class="s-trustpilot-insurance-mobile">
          <?php include(TEMPLATEPATH .'/includes/section-trustpilot-insurance.php') ?>
        </div>
        <!-- End Trustpilot -->
        <div class="s-hero-insurance__right__title">
          <span class="s-hero-insurance__span"><?php the_field('subtitle_right_office_insurance') ?></span>
          <h2><?php the_field('title_right_office_insurance') ?></h2>
        </div>
        <div class="s-hero-insurance__right_content">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/line-section-hero.webp" alt="" class="line-right-hero" width="30" height="160">
          <div class="s-hero-insurance__right__list">
            <ul>
              <li>
                <p><?php the_field('title_01_office_insurance') ?></p>
                <span><?php the_field('subtitle_01_office_insurance') ?></span>
              </li>
              <li>
                <p><?php the_field('title_02_office_insurance') ?></p>
                <span><?php the_field('subtitle_02_office_insurance') ?></span>
              </li>
              <li>
                <p><?php the_field('title_03_office_insurance') ?></p>
                <span><?php the_field('subtitle_03_office_insurance') ?></span>
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
  <section class="s-trustpilot-insurance">
    <div class="container">
      <?php include(TEMPLATEPATH .'/includes/section-trustpilot-insurance.php') ?>
    </div>
  </section>

  <!-- === SECTION ACCREDITATIONS === -->
  <?php include(TEMPLATEPATH .'/includes/section-company-logos-insurance.php') ?>

  <!-- Table of Contents -->
  <section class="s-table-contents">
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
      </ul>
      <!-- Mobile Configuration -->
      <div class="custom-select-content">
        <select id="dropdown-select-content" class="select-mobile-config">
          <option value="">
            <p>Select an item</p>
          </option>
          <option value="#overview">
            <p>Overview</p>
          </option>
          <option value="#extras">
            <p>Optional Extras</p>
          </option>
          <option value="#why">
            <p>Why Choose Us?</p>
          </option>
          <!-- Add more options as needed -->
        </select>
      </div>
    </div>
  </section>

  <!-- Section Content -->
  <section class="s-content" id="overview">
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
      <div class="s-featured-content__left">
        <h4><?php the_field('title_featured_content_office_insurance') ?></h4>
        <div class="s-featured-content__text">
          <?php the_field('description_featured_content_office_insurance') ?>
        </div>
      </div>
      <div class="s-featured-content__right">
        <img src="<?php the_field('image_featured_content_office_insurance') ?>" alt="">
      </div>
    </div>
  </section>

  <!-- Section Featured Secondary Content -->
  <section class="s-featured-secondary-content">
    <div class="container">
      <div class="s-featured-content__right">
        <img src="<?php the_field('image_featured_content_secondary_office_insurance') ?>" alt="">
      </div>
      <div class="s-featured-content__left">
        <h4><?php the_field('title_featured_content_secondary_office_insurance') ?></h4>
        <div class="s-featured-content__text">
          <?php the_field('description_featured_content_secondary_office_insurance') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Column Content -->
  <section class="s-column-content">
    <div class="container">
      <div class="s-column-content-card">
        <div class="s-column-content-card-image">
          <img src="<?php the_field('image_left_column_office_insurance') ?>" alt="">
        </div>
        <h4><?php the_field('title_left_column_office_insurance') ?></h4>
        <div class="s-column-content-card-text">
          <?php the_field('description_left_column_office_insurance') ?>
        </div>
      </div>
      <div class="s-column-content-card">
        <div class="s-column-content-card-image">
          <img src="<?php the_field('image_right_column_office_insurance') ?>" alt="">
        </div>
        <h4><?php the_field('title_right_column_office_insurance') ?></h4>
        <div class="s-column-content-card-text">
          <?php the_field('description_right_column_office_insurance') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Optional Extras -->
  <section class="s-extras-opt" id="extras">
    <div class="container">
      <h6><?php the_field('mobile_title_section_optional_extras_office_insurance') ?></h6>
      <h4><?php the_field('title_section_optional_extras_office_insurance') ?></h4>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_optional_extras_cards_office_insurance') ): while ( have_rows('section_optional_extras_cards_office_insurance') ) : the_row(); ?>
          <li>
            <div class="extra-button">
              <img src="<?php the_sub_field('image_card_optional_extras_office_insurance') ?>" height="45" width="45" alt="">
              <div class="text">
                <h5><?php the_sub_field('title_card_optional_extras_office_insurance') ?></h5>
                <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
              </div>
            </div>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </section>

  <!-- Section Product -->
  <section class="s-slide-product">
    <div class="container">
      <div class="top">
        <h6><?php the_field('mobile_title_section_product_slide_office_insurance') ?></h6>
        <h4><?php the_field('title_section_product_slide_office_insurance') ?></h4>
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
          <?php if( have_rows('card_product_slide_office_insurance') ): while ( have_rows('card_product_slide_office_insurance') ) : the_row(); ?>
            <div class="swiper-slide">
              <!-- Card Product Type -->
              <a href="<?php the_sub_field('card_link_office_insurance') ?>" class="card-product">
                <div class="image">
                    <img src="<?php the_sub_field('image_card_office_insurance') ?>" alt="card product page" title="card product page">
                </div>
                <div class="info">
                    <h6><?php the_sub_field('card_title_office_insurance') ?></h6>
                    <p><?php the_sub_field('subtitle_card_office_insurance') ?></p>
                    <div class="learn-more">
                        <span><?php the_sub_field('link_card_title_office_insurance') ?></span>
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

  <!-- Section CTA  -->
  <div class="s-newsletter">
    <div class="container">
      <span class="large-cta js-open-modal">
        <div class="text">
            <span><?php the_field('subtitle_cta_office_insurance') ?></span>
            <h3><?php the_field('title_cta_office_insurance') ?></h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
            get a quote
        </button>
      </span>
    </div>
  </div>

  <!-- Section Bespoke -->
  <section class="s-bespoke" id="why">
    <div class="container">
      <div class="text-top">
        <h6><?php the_field('mobile_title_section_why_us_office_insurance') ?></h6>
        <h4><?php the_field('title_section_why_us_office_insurance') ?></h4>
        <p><?php the_field('subtitle_section_why_us_office_insurance') ?></p>
      </div>
      <div class="main-bespoke">
        <div class="text-bottom">
          <ul>
            <!-- Repeater Slide Cards --> 
            <?php if( have_rows('cards_section_why_us_office_insurance') ): while ( have_rows('cards_section_why_us_office_insurance') ) : the_row(); ?>
              <!-- Card -->
              <li>
                <img src="<?php the_sub_field('icon_card_office_insurance'); ?>" alt="icon house" title="icon house">
                <h5><?php the_sub_field('title_why_us_card_office_insurance'); ?></h5>
                <p><?php the_sub_field('description_why_us_card_office_insurance'); ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
        </div>
        <img src="<?php the_field('image_section_why_us_office_insurance') ?>" alt="bespoke image" title="bespoke image" class="bespoke-img">
      </div>
      <p class="terms-conditions-why-us"><?php the_field('terms_conditions_why_us_office_insurance') ?></p>
    </div>
  </section>

  <!-- Section Banner CTA 02 -->
  <section class="s-banner-cta" style="padding-top: 0px;"> 
    <div class="container">
      <img src="<?php the_field('image_01_banner_office_insurance') ?>" alt="" class="img-banner">
      <img src="<?php the_field('image_02_banner_office_insurance') ?>" alt="" class="img-banner">
      <div class="s-banner-cta-text">
        <h2><?php the_field('title_banner_office_insurance') ?></h2>
        <p><?php the_field('subtitle_banner_office_insurance') ?></p>
        <!-- BUTTON LINKS TO THE FORM  -->
        <button class="btn btn-primary js-open-modal-insurance" aria-label="Get Quote Button">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white" loading="lazy">
          GET A QUOTE
        </button>
      </div>
    </div>
  </section>

  <!-- Section Related Articles Filter By Tag -->
  <?php   
    $tag = get_queried_object();
    $args = array(
      'post_type' => 'post',
      'order' => 'DESC',
      'posts_per_page' => 3,
      'tag_id' => 59,
    );
    $the_query = new WP_Query($args);
  ?>
  <?php if ($the_query->have_posts()) : ?>
    <section class="s-articles" id="s-articles">
      <div class="container">
        <div class="text-top">
          <h6><?php the_field('mobile_title_section_articles_office_insurance'); ?></h6>
          <h4><?php the_field('title_section_articles_office_insurance'); ?></h4>
          <p><?php the_field('description_section_articles_office_insurance'); ?></p>
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