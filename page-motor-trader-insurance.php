<?php
  // Template name: motor-trader-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- Section Hero -->
  <section class="s-hero-product">
    <div class="container">
      <div class="product">
        <!-- Left Text Area -->
        <div class="left-text" data-aos="fade-right">
          <span class="sm-text-product"><?php the_field('get_quote_subtitle') ?></span>
          <h1><?php the_field('get_quote_title') ?></h1>
          <ul>
            <!-- Repeater Insurance Types --> 
            <?php if( have_rows('get_quote_list') ): while ( have_rows('get_quote_list') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('icon_get_quote') ?>" alt="icon green checked" title="icon green checked">
                <p><?php the_sub_field('text_get_quote') ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
          <button class="btn btn-primary-lg">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white">
            GET A QUOTE
          </button>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-line.svg" alt="icon line" title="icon line" class="img-line" data-aos="zoom-in">
        <!-- Right Text Area -->
        <div class="right-text" data-aos="fade-left">
          <span class="sm-text-product"><?php the_field('call_us_subtitle') ?></span>
          <h2><?php the_field('call_us_title') ?></h2>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="icon phone" title="icon phone">
              <p>Call our landline at <span><?php the_field('landline_phone_call_us') ?></span></p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="icon mobile phone" title="icon mobile phone">
              <p>Call your mobile at <span><?php the_field('mobile_phone_call_us') ?></span></p>
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
  <section class="s-slide-product" id="s-slide-product">
    <div class="container">
      <div class="top">
        <h6><?php the_field('section_product_slide_title_mobile') ?></h6>
        <h4><?php the_field('section_product_slide_title') ?></h4>
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
          <?php if( have_rows('cards_product_slide_motortrade') ): while ( have_rows('cards_product_slide_motortrade') ) : the_row(); ?>
            <div class="swiper-slide">
              <!-- Card Product Type -->
              <a href="<?php the_sub_field('card_link') ?>" class="card-product">
                <div class="image">
                    <img src="<?php the_sub_field('image_card') ?>" alt="card product page" title="card product page">
                </div>
                <div class="info">
                    <h6><?php the_sub_field('card_title') ?></h6>
                    <p><?php the_sub_field('subtitle_card') ?></p>
                    <div class="learn-more">
                        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-circle-right-rounded.svg" alt="arrow right rounded" title="arrow right rounded">
                        <span>Learn more</span>
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
  <?php include(TEMPLATEPATH .'/includes/section-cta-desktop.php') ?>

   <!-- Section Company Logos -->
   <?php include(TEMPLATEPATH .'/includes/section-company-logos.php') ?>

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

  <!-- Section Text Content -->
  <section class="s-content" id="s-content" data-aos="fade-up">
    <div class="container">
      <!-- Content Tab -->
      <div class="tab-product-content">
        <div class="text-content active">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section What to Cover -->
  <section class="s-cover" id="s-cover">
    <div class="container">
      <div class="cover-on" data-aos="fade-right">
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
      <div class="cover-off" data-aos="fade-left">
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

  <!-- Section Optional Extras -->
  <section class="s-extras-opt" id="s-extras-opt" data-aos="fade-up">
    <div class="container">
      <h6><?php the_field('mobile_title_optional_extras') ?></h6>
      <h4><?php the_field('title_optional_extras') ?></h4>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_optional_extras_cards') ): while ( have_rows('section_optional_extras_cards') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_for_card') ?>">
              <i class="fa-solid fa-house"></i>
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

  <!-- Section Why Us  -->
  <section class="s-bespoke" id="s-bespoke">
      <div class="container">
        <div class="text-top">
          <h6><?php the_field('mobile_title_why_us_motortrade') ?></h6>
          <h4 data-aos="fade-right"><?php the_field('title_why_us_motortrade') ?></h4>
          <p data-aos="fade-left"><?php the_field('subtitle_why_us_motortrade') ?></p>
        </div>
        <div class="main-bespoke">
          <div class="text-bottom" data-aos="fade-right">
            <ul >
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
          <img src="<?php the_field('image_why_us_motortrade') ?>" alt="bespoke image" title="bespoke image" class="bespoke-img" data-aos="fade-left">
        </div>
      </div>
  </section>

  <!-- Section FAQs -->
  <section class="s-faqs padding-bottom padding-top" id="s-faqs" data-aos="fade-up">
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
            <p><?php the_sub_field('description_faq_motortrade'); ?></p>
          </div>
        <?php endwhile; else : endif;?>
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