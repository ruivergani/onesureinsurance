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
            <!-- === CARD INSURANCE 01 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-key"></i>
                  <h3>Motor Trade Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 02 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-van-shuttle"></i>
                  <h3>Van Insurance </h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 03 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-motorcycle"></i>
                  <h3>Motorbike Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 04 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck-front"></i>
                  <h3>HGV &amp; Lorry Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 05 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-car"></i>
                  <h3>Car Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 06 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-house"></i>
                  <h3>Home Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 07 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-person-biking"></i>
                  <h3>Scooter Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 08 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-caravan"></i>
                  <h3>Caravan Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 09 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-suitcase"></i>
                  <h3>Travel Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 10 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-user-tie"></i>
                  <h3>Salon Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 11 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-utensils"></i>
                  <h3>Restaurant & Pub Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 12 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck"></i>
                  <h3>Valeters Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 13 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-brands fa-artstation"></i>
                  <h3>Tattoo Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 14 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-brands fa-print"></i>
                  <h3>Office Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 15 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-regular fa-clipboard"></i>
                  <h3>MOT Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="right-column">
            <!-- === CARD INSURANCE 01 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-taxi"></i>
                  <h3>Taxi Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 02 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck-fast"></i>
                  <h3>Courier Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 03 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-trailer"></i>
                  <h3>Motorhome Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 04 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-boxes-stacked"></i>
                  <h3>Goods Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 05 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-screwdriver-wrench"></i>
                  <h3>Special Types Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 06 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-road"></i>
                  <h3>Convicted Car Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 07 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-ticket"></i>
                  <h3>Convicted Van Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 08 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-gavel"></i>
                  <h3>Liability Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 09 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-van-shuttle"></i>
                  <h3>Fleet Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 10 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-shop"></i>
                  <h3>Shop Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 11 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-hotel"></i>
                  <h3>Hotel Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 12 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-gear"></i>
                  <h3>Mechanic Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 13 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck-moving"></i>
                  <h3>Plant & Machinery Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 14 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-user-check"></i>
                  <h3>Employer Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 15 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-dumpster"></i>
                  <h3>Commercial Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
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

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>
  
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
      <div class="s-about-us-text-left">
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
      <div class="image-right">
        <img src="<?php the_field('image_section_content_about_us') ?>" alt="about us image" title="about us image">
      </div>
    </div>
  </section>

  <!-- Section Newsletter -->
  <section class="s-card-blue">
    <div class="container">
      <div class="card-dark-blue">
        <h3>Learn in seconds which types of insurance match your business</h3>
        <button class="btn btn-primary js-open-modal-insurance">
          <i class="fa-solid fa-envelope"></i>
          GET A QUOTE
        </button>
      </div>
    </div>
  </section>

  <!-- Section Protect Business -->
  <section class="s-protect-business">
    <div class="container">
      <h3><?php the_field('title_section_protect_about_us') ?></h3>
      <p><?php the_field('subtitle_section_protect_about_us') ?></p>
      <ul>
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

<!-- End loop -->
<?php endwhile; else: endif; ?>
 
<!-- Include Footer -->
<?php get_footer(); ?>