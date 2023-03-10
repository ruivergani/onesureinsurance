<!-- Give the name to the template -->
<?php
  // Template name: Home
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Section Hero -->
  <section class="s-hero">
    <div class="container">
      <div class="heading" data-aos="fade-right">
        <h2><?php the_field('subtitle_section_hero') ?></h2>
        <h1><?php the_field('title_section_hero') ?></h1>
      </div>
      <ul class="card-hero">
        <li class="item-card" data-aos="fade-left" data-aos-delay="120">
          <a href="<?php echo get_permalink(get_page_by_title('Motor Trade Insurance')) ?>">
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
        <h2><?php the_field('title_section_call') ?></h2>
      </div>
      <div class="all-cards">
        <div class="card-01" data-aos="fade-up" data-aos-delay="0">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-lg.svg" alt="icon phone" title="icon phone" loading="lazy">
          <div class="text">
            <h3><?php the_field('title_card_01_section_call') ?></h3>
            <p><?php the_field('phone_number_section_call') ?></p>
          </div>
        </div>
        <div class="card-02" data-aos="fade-up" data-aos-delay="100">
          <h3><?php the_field('title_card_02_section_call') ?></h3>
          <button class="btn btn-primary-lg">
            <i class="fa-solid fa-phone"></i>
            CALL ME BACK
          </button>
        </div>
        <div class="card-03" data-aos="fade-up" data-aos-delay="200">
          <h3><?php the_field('title_card_03_section_call') ?></h3>
          <button class="btn btn-primary-lg">
            <i class="fa-solid fa-envelope"></i>
            GET A QUOTE
          </button>
        </div>
      </div>
      
    </div>
  </section>

  <!-- Section Company Logos -->
  <?php include(TEMPLATEPATH .'/includes/section-company-logos.php') ?>

  <!-- Section Types of Insurance -->
  <section class="s-insurance" id="s-insurance">
    <div class="container">
      <div class="title">
        <h6 data-aos="fade-right"><?php the_field('mobile_subtitle_section_all_types_insurance') ?></h6>
        <h2 data-aos="fade-right"><?php the_field('title_section_all_types_insurance') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy" data-aos="zoom-in">
        <p data-aos="fade-left"><?php the_field('subtitle_section_all_types_insurance') ?></p>
      </div>
      <div class="all-cards-type" data-aos="fade-up">
        <!-- Repeater Insurance Types --> 
        <?php if( have_rows('register_insurance_types') ): while ( have_rows('register_insurance_types') ) : the_row(); ?>
          <a href="<?php the_sub_field('page_insurance_type') ?>" class="card-type-default">
            <div class="image">
                <img src="<?php the_sub_field('image_card_insurance_type') ?>" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
            </div>
            <div class="icon">
              <i class="<?php the_sub_field('icon_card_insurance_type')?>"></i>
            </div>
            <div class="info">
                <h4><?php the_sub_field('title_card_insurance_type') ?></h4>
                <p><?php the_sub_field('subtitle_card_insurance_type') ?></p>
                <span class="small-text">
                  <?php the_sub_field('description_card_insurance_type') ?>
                </span>
            </div>
          </a>
        <?php endwhile; else : endif;?>
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
        <h6 data-aos="fade-right"><?php the_field('mobile_subtitle_section_about_us') ?></h6>
        <h2 data-aos="fade-right"><?php the_field('title_section_about_us') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy" data-aos="zoom-in">
        <p data-aos="fade-left"><?php the_field('subtitle_section_about_us') ?></p>
      </div>
      <div class="main">
        <div class="image" >
          <img src="<?php the_field('image_section_about_us') ?>" alt="about us image" title="about us image" loading="lazy" data-aos="fade-right">
        </div>
        <div class="text" data-aos="fade-left">
            <p><?php the_field('description_section_about_us') ?></p>
            <ul>
              <!-- Repeater Section About Us -->
              <?php if( have_rows('repeater_section_about_us') ): while ( have_rows('repeater_section_about_us') ) : the_row(); ?>
                <li>
                  <img src="<?php the_sub_field('icon_section_about_us') ?>" alt="icon checked" title="icon checked" loading="lazy">
                  <p><?php the_sub_field('text_section_about_us') ?></p>
                </li>
              <?php endwhile; else : endif;?>
            </ul>
            <p class="none"><?php the_field('second_description_section_about_us') ?></p>
            <a href="<?php echo get_permalink(get_page_by_title('About Us')) ?>">
              <button class="btn btn-primary">
                <i class="fa-solid fa-chevron-right"></i>
                Learn More
              </button> 
            </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Articles -->
  <section class="s-main-articles">
    <div class="container">
      <div class="title">
        <h6 data-aos="fade-right"><?php the_field('mobile_subtitle_section_popular_articles') ?></h6>
        <h2 data-aos="fade-right"><?php the_field('title_section_popular_articles') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" data-aos="zoom-in">
        <p data-aos="fade-left"><?php the_field('subtitle_section_popular_articles') ?></p>
      </div>
      <!-- All 3 Latest Blog Posts -->
      <div class="posts" data-aos="fade-up">
          <?php 
            // the query
            $the_query = new WP_Query(array(
              'posts_per_page' => 3,
            )); 
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <!-- Card Post Blog Default --> 
              <a href="<?php the_permalink();?>" class="card-post-blog">
                <div class="image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="categories">
                  <!-- Category Section -->
                  <?php
                    $category = get_the_category($post -> ID); // return ID post
                    if(!empty($category)){
                      foreach($category as $nameCategory){
                        echo '<span>' .$nameCategory -> name.'</span>'; 
                      }
                    }
                  ?>
                </div>
                <div class="info">
                  <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-calendar-blog.svg" alt="icon calendar" title="icon calendar" loading="lazy">
                        <span><?php echo get_the_date('j, F'); ?></span>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-blog.svg" alt="icon clock" title="icon clock" loading="lazy">
                        <span>
                          <?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?>
                        </span>
                    </li>
                  </ul>
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_excerpt(); ?></p>
                  <span class="read-more">Read More</span>
                </div>
              </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p><?php __('No Recent Posts'); ?></p>
          <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Section CTA Desktop -->
  <?php include(TEMPLATEPATH .'/includes/section-cta-desktop.php') ?>

<!-- End loop -->
<?php endwhile; else: endif; ?>
 
<!-- Include Footer -->
<?php get_footer(); ?>