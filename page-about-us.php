<!-- Give the name to the template -->
<?php
  // Template name: about-us
?>

<!-- Include Header -->
<?php get_header(); ?>

  <!-- Loop in the template -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- === Section Breadcrumbs === -->
    <?php breadcrumbs(); ?>

    <!-- === MODAL INSURANCE TYPES === -->
    <section class="modal-list-insurance">
      <div class="overlay">
      </div>
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- === HEADER MODAL === -->
          <div class="modal-header">
            <button class="close js-close-insurance">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-modal.svg" alt="close button"  title="close button">
            </button>
            <h2 class="modal-title">Select an Insurance Type!</h2>
          </div>
          <!-- === BODY MODAL === -->
          <div class="modal-body">
            <ul class="left-column">
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-car"></i>
                    <h3>Motor Trade Insurance</h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-van-shuttle"></i>
                    <h3>Van Insurance </h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-motorcycle"></i>
                    <h3>Motorbike Insurance 01</h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-motorcycle"></i>
                    <h3>Motorbike Insurance 02</h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="right-column">
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-truck-front"></i>
                    <h3>HGV & Lorry Insurance</h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-house"></i>
                    <h3>Home Insurance</h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-person-biking"></i>
                    <h3>Scooter Insurance 01</h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
              <!-- === CARD INSURANCE === -->
              <li>
                <div class="card-insurance-modal">
                  <div class="card-header-modal">
                    <i class="fa-solid fa-person-biking"></i>
                    <h3>Scooter Insurance</h3>
                  </div>
                  <div class="buttons-modal">
                    <a href="" class="btn-get-quote">
                      <i class="fa-solid fa-envelope"></i>
                      <span>get a quote</span>
                    </a>
                    <a href="" class="btn-call-us">
                      <i class="fa-solid fa-phone"></i>
                      <span>0800 081 5113</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section Hero -->
    <section class="s-hero-about">
      <div class="container">
          <div class="s-hero-about-title">
            <h1><?php the_field('title_section_hero_about_us_page') ?></h1>
          </div>
      </div>
    </section>

    <!-- Section About Us -->
    <section class="s-about-us-text">
      <div class="container">
          <div class="s-about-us-text-left" data-aos="fade-right" data-aos-once="true">
            <h2><?php the_field('title_section_content_about_us') ?></h2>
            <p><?php the_field('subtitle_section_content_about_us') ?></p>
            <ul>
              <!-- Repeater Slide Cards --> 
              <?php if( have_rows('list_section_content_about_us') ): while ( have_rows('list_section_content_about_us') ) : the_row(); ?>
                <li>
                  <img src="<?php the_sub_field('icon_list_about_us') ?>" alt="icon checked green" title="icon checked green">
                  <p><?php the_sub_field('text_list_about_us') ?></p>
                </li>
              <?php endwhile; else : endif;?>
            </ul>
            <p><?php the_field('description_section_content_about_us') ?></p>
            <button class="btn btn-primary">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="icon arrow white" title="icon arrow white">
              LEARN MORE
            </button>
          </div>
          <div class="image-right" data-aos="fade-left" data-aos-once="true">
            <img src="<?php the_field('image_section_content_about_us') ?>" alt="about us image" title="about us image">
          </div>
      </div>
    </section>

    <!-- Section Newsletter -->
    <section class="s-card-blue" data-aos="zoom-in" data-aos-once="true">
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
        <h3 data-aos="fade-up" data-aos-once="true"><?php the_field('title_section_protect_about_us') ?></h3>
        <p data-aos="fade-up" data-aos-once="true"><?php the_field('subtitle_section_protect_about_us') ?></p>
        <ul data-aos="fade-up" data-aos-once="true">
          <!-- Repeater --> 
          <?php if( have_rows('cards_section_protect_about_us') ): while ( have_rows('cards_section_protect_about_us') ) : the_row(); ?>
            <li>
              <h4><?php the_sub_field('title_card_about_us') ?></h4>
              <div class="text-bottom">
                <img src="<?php the_sub_field('image_card_about_us') ?>" alt="about image" title="about image">
                <p><?php the_sub_field('subtitle_card_about_us') ?> </p>
              </div>
            </li>
          <?php endwhile; else : endif;?>
          <!-- End Repeater --> 
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
            <!-- Repeater --> 
            <?php if( have_rows('cards_staff_about_us') ): while ( have_rows('cards_staff_about_us') ) : the_row(); ?>
              <div class="swiper-slide">
                <!-- Card About Type -->
                <a href="" class="card-about">
                  <img src="<?php the_sub_field('image_staff_about_us') ?>" alt="image bitmap" title="image bitmap">
                  <h6><?php the_sub_field('name_staff_about_us') ?></h6>
                  <p><?php the_sub_field('position_staff_about_us') ?></p>
                </a>
              </div>
            <?php endwhile; else : endif;?>
            <!-- End Repeater --> 
          </div>
        </div>
      </div>
    </section>
    
  <!-- End loop -->
  <?php endwhile; else: endif; ?>
 
<!-- Include Footer -->
<?php get_footer(); ?>