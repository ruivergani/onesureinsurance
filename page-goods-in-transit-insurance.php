<?php
  // Template name: goods-in-transit-insurance
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
          <span class="sm-text-product"><?php the_field('get_quote_sub_title_goods_insurance') ?></span>
          <h1><?php the_field('get_quote_title_goods_insurance') ?></h1>
          <ul>
            <!-- Repeater List Section Hero --> 
            <?php if( have_rows('list_get_quote_goods_insurance') ): while ( have_rows('list_get_quote_goods_insurance') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('icon_checked_goods_insurance') ?>" alt="icon green checked" title="icon green checked">
                <p><?php the_sub_field('text_goods_insurance') ?></p>
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
          <span class="sm-text-product"><?php the_field('call_us_subtitle_goods_insurance') ?></span>
          <h2><?php the_field('call_us_title_goods_insurance') ?></h2>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="icon phone" title="icon phone">
              <p>Call our landline at <span><?php the_field('landline_phone_goods_insurance') ?></span></p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="icon mobile phone" title="icon mobile phone">
              <p>Call your mobile at <span><?php the_field('mobile_phone_goods_insurance') ?></span></p>
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
        <h6><?php the_field('mobile_title_section_product_slide_goods_insurance') ?></h6>
        <h4><?php the_field('title_section_product_slide_goods_insurance') ?></h4>
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
          <?php if( have_rows('card_product_slide_goods_insurance') ): while ( have_rows('card_product_slide_goods_insurance') ) : the_row(); ?>
            <div class="swiper-slide">
              <!-- Card Product Type -->
              <a href="<?php the_sub_field('card_link_goods_insurance') ?>" class="card-product">
                <div class="image">
                    <img src="<?php the_sub_field('image_card_goods_insurance') ?>" alt="card product page" title="card product page">
                </div>
                <div class="info">
                    <h6><?php the_sub_field('card_title_goods_insurance') ?></h6>
                    <p><?php the_sub_field('subtitle_card_goods_insurance') ?></p>
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
  <div class="s-newsletter">
      <div class="container">
        <a href="<?php the_field('link_cta_goods_insurance') ?>" class="large-cta" data-aos="zoom-in">
          <div class="text">
              <span><?php the_field('subtitle_cta_goods_insurance') ?></span>
              <h3><?php the_field('title_cta_goods_insurance') ?></h3>
          </div>
          <button class="btn btn-primary">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
              get a quote
          </button>
        </a>
      </div>
  </div>

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
          <a href="#s-content" title="benefits section">
            <p>Personal</p>
          </a>
        </li>
        <li class="js-item-content">
          <a href="#s-content" title="commercial section">
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
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Bespoke -->
  <section class="s-bespoke" id="s-why-us">
      <div class="container">
        <div class="text-top">
          <h6><?php the_field('mobile_title_section_why_us_goods_insurance') ?></h6>
          <h4 data-aos="fade-right"><?php the_field('title_section_why_us_goods_insurance') ?></h4>
          <p data-aos="fade-left"><?php the_field('subtitle_section_why_us_goods_insurance') ?></p>
        </div>
        <div class="main-bespoke">
          <div class="text-bottom" data-aos="fade-right">
            <ul>
              <!-- Repeater Slide Cards --> 
              <?php if( have_rows('cards_section_why_us_goods_insurance') ): while ( have_rows('cards_section_why_us_goods_insurance') ) : the_row(); ?>
                <!-- Card -->
                <li>
                  <img src="<?php the_sub_field('icon_card_goods_insurance'); ?>" alt="icon house" title="icon house">
                  <h5><?php the_sub_field('title_why_us_card_goods_insurance'); ?></h5>
                  <p><?php the_sub_field('description_why_us_card_goods_insurance'); ?></p>
                </li>
              <?php endwhile; else : endif;?>
            </ul>
          </div>
          <img src="<?php the_field('image_section_why_us_goods_insurance') ?>" alt="bespoke image" title="bespoke image" class="bespoke-img" data-aos="fade-left">
        </div>
      </div>
  </section>

  <!-- Section Optional Extras -->
  <section class="s-extras-opt" id="s-extras-opt" data-aos="fade-up">
    <div class="container">
      <h6><?php the_field('mobile_title_section_optional_extras_goods_insurance') ?></h6>
      <h4><?php the_field('title_section_optional_extras_goods_insurance') ?></h4>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_optional_extras_cards_goods_insurance') ): while ( have_rows('section_optional_extras_cards_goods_insurance') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_card_optional_extras_goods_insurance') ?>">
              <i class="fa-solid fa-house"></i>
              <div class="text">
                <h5><?php the_sub_field('title_card_optional_extras_goods_insurance') ?></h5>
                <p>Find Out More <i class="fa-solid fa-arrow-right"></i></p>
              </div>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </section>

  <!-- Section FAQs -->
  <section class="s-faqs padding-bottom" id="s-faqs" data-aos="fade-up">
    <div class="container">
      <h4><?php the_field('title_section_goods_insurance') ?></h4>
      <div class="b-container">
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_faq_goods_insurance') ): while ( have_rows('section_faq_goods_insurance') ) : the_row(); ?>
          <!-- Question Card -->
          <div class="question">
            <div class="title js-question">
              <strong><?php the_sub_field('title_faq_goods_insurance'); ?></strong>
              <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="question-content">
              <?php the_sub_field('description_faq_goods_insurance'); ?>
            </div>
          </div>
        <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>

  <!-- Section Top Vans -->
  <section class="s-slide-van">
    <div class="container">
      <div class="top">
        <h6><?php the_field('mobile_title_section_slides_goods_insurance'); ?></h6>
        <h4><?php the_field('title_section_slides_goods_insurance'); ?></h4>
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
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('section_slides_cards_goods_insurance') ): while ( have_rows('section_slides_cards_goods_insurance') ) : the_row(); ?>
            <div class="swiper-slide">
              <!-- Card Van Type -->
              <a href="<?php the_sub_field('link_slide_card_goods_insurance'); ?>" class="card-van">
                <div class="image">
                  <img src="<?php the_sub_field('image_slide_card_goods_insurance'); ?>" alt="card product page" title="card product page">
                </div>
                <div class="info">
                  <h6><?php the_sub_field('text_slide_card_goods_insurance'); ?></h6>
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
        <a href="<?php the_field('link_cta_goods_insurance') ?>" class="large-cta" data-aos="zoom-in">
          <div class="text">
              <span><?php the_field('subtitle_cta_goods_insurance') ?></span>
              <h3><?php the_field('title_cta_goods_insurance') ?></h3>
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
        'tag_id' => 38,
    );
    $the_query = new WP_Query($args);
  ?>
  <?php if ($the_query->have_posts()) : ?>
    <section class="s-articles" id="s-articles">
      <div class="container">
        <div class="text-top">
          <h6><?php the_field('mobile_title_section_articles_goods_insurance'); ?></h6>
          <h4><?php the_field('title_section_articles_goods_insurance'); ?></h4>
          <p><?php the_field('description_section_articles_goods_insurance'); ?></p>
        </div>
        <div class="article-cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="card-post-default">
              <div class="image">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="info">
                <!-- Category Section -->
                <?php
                  $category = get_the_category($post -> ID); // return ID post
                  if(!empty($category)){
                    foreach($category as $nameCategory){
                      echo '<span class="categorie">' .$nameCategory -> name.'</span>'; 
                    }
                  }
                ?>
                <h6><?php the_title(); ?></h6>
                <ul>
                    <li>
                        <span><?php echo get_the_date('j, F'); ?></span>
                    </li>
                    <li>
                        <span><?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?> of read</span>
                    </li>
                </ul>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>