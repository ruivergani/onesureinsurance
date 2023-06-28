<?php
  // Template name: complaints
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

  <!-- === SECTION HERO === -->
  <section class="s-hero-complaints">
    <div class="container">
      <div class="title-s-hero-complaints">
        <h1 class="title-hero"><?php the_field('title_section_hero_complaints_page') ?></h1>
        <p><?php the_field('subtitle_section_hero_complaints_page') ?></p>
      </div>
    </div>
  </section>

  <!-- === SECTION LINK === -->
  <section class="s-breadcrumbs-complaints">
    <div class="container">
      <a href="#s-content-complaints">
        <p><?php the_field('link_text_section_hero_complaints_page') ?></p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CONTENT === -->
  <section class="s-content-complaints" id="s-content-complaints">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </section>

  <!-- === SECTION HELP CONTACT == -->
  <section class="s-help-contact">
    <div class="container">
      <h3><?php the_field('title_section_contact_help_us_complaints_page') ?></h3>
      <div class="s-help-description">
        <p><?php the_field('subtitle_section_contact_help_us_complaints_page') ?></p>
      </div>
      <!-- === END OF HIDDEN INPUT === -->
      <a class="btn btn-primary" type="submit" href="<?php the_field('link_section_contact_help_us_complaints_page') ?>">
        SUBMIT REQUEST
      </a>
    </div>
  </section>

  <!-- === SECTION CONTACT ONE SURE === -->
  <section class="s-contact-complaints">
    <div class="container">
      <h2><?php the_field('title_section_complaints_contact') ?></h2>
      <div class="s-contact-content">
        <div class="s-contact-section-left">
          <ul>
            <li>
              <span>Telephone:</span>
              <p><?php the_field('telephone_text_complaints') ?></p>
            </li>
            <li>
              <span>From abroad:</span>
              <p><?php the_field('telephone_abroad_text_complaints') ?></p>
            </li>
            <li>
              <span>Email:</span>
              <p><?php the_field('email_text_complaints') ?></p>
            </li>
            <li>
              <span>Website:</span>
              <p><?php the_field('website_text_complaints') ?></p>
            </li>
          </ul>
        </div>
        <div class="s-contact-section-right">
          <p>
            <?php the_field('address_text_complaints') ?>
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>