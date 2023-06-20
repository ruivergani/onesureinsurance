<?php
  // Template name: page-support
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

  <!-- === SECTION HERO === -->
  <section class="s-hero-supports">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-support-03.jpg" alt="hero supports" title="hero supports">
    <h1 class="title-hero"><?php the_field('title_page_support') ?></h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-supports">
    <div class="container">
      <a href="#supports-content">
        <p><?php the_field('title_link_page_support') ?></p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CARDS == -->
  <section class="s-supports-content" id="supports-content">
    <div class="container">
      <div class="card-left-support">
        <div class="image-card-support">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-claims-feedback.jpg" alt="card supports" title="card supports">
        </div>
        <div class="text-card-support">
          <h2><?php the_field('title_card_supports_feedback') ?></h2>
          <p><?php the_field('subtitle_card_supports_feedback_01') ?></p>
          <p><?php the_field('subtitle_card_supports_feedback_02') ?></p>
          <a href="<?php the_field('link_card_supports_feedback') ?>">
            <p>YOUR SUPPORT FEEDBACK</p>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-right-outline.svg" alt="icon right outline" title="icon right outline">
          </a>
        </div>
      </div>
      <div class="card-right-support">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-comments.svg" alt="icon comments" title="icon comments">
        <h3><?php the_field('title_card_make_complaint_support') ?></h3>
        <p><?php the_field('subtitle_card_make_complaint_support') ?></p>
        <!-- Action Button -->
        <a class="btn btn-primary btn-supports" href="<?php the_field('link_card_make_complaint_support') ?>">
          Make a complaint
        </a>
      </div>
    </div>
  </section>

  <!-- === SECTION CONTENT FAQs === -->
  <section class="s-content-supports-faq">
    <div class="container">
      <div class="title-content-supports-faq">
        <h4><?php the_field('title_section_support') ?></h4>
      </div>
      <div class="content-highlight-supports-faq">
        <!-- === HIGHLIGHT ACCORDION FAQ === -->
        <div class="accordion-plus-support">
          <div class="accordion-plus-item-support">
            <h3>
              <?php the_field('title_highlight_section_supports') ?>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
            </h3>
            <div class="accordion-plus-content-support pt-3">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="all-supports-faq">
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('card_repeater_supports_faq') ): while ( have_rows('card_repeater_supports_faq') ) : the_row(); ?>
          <!-- === EACH ACCORDION FAQ === -->
          <div class="accordion-plus-support">
            <div class="accordion-plus-item-support js-accordion-plus-item">
              <h3>
                <?php the_sub_field('title_card_support_faq') ?>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
              </h3>
              <div class="accordion-plus-content-support">
                <?php the_sub_field('description_card_support_faq') ?>
              </div>
            </div>
          </div>
        <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>

  <!-- === Section CTA === -->
  <div class="s-newsletter s-supports-newsletter">
    <div class="container">
      <a href="<?php the_field('link_cta_supports_page') ?>" class="large-cta" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
          <span><?php the_field('subtitle_cta_supports_page') ?></span>
          <h3><?php the_field('title_cta_supports_page') ?></h3>
        </div>
        <button class="btn btn-primary">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
          get a quote
        </button>
      </a>
    </div>
  </div>

  <!-- === Section Policy === -->
  <section class="s-policy-support">
    <div class="container">
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-invoice-support-page.svg" alt="icon policy" title="icon policy" class="policy">
      <h2><?php the_field('title_section_log_in_support_page') ?></h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('content_section_log_in_support_page') ): while ( have_rows('content_section_log_in_support_page') ) : the_row(); ?>
          <li>
            <p><?php the_sub_field('paragraph_log_in_section_support_page') ?></p>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <a class="btn btn-primary" href="<?php the_field('content_section_log_in_support_page') ?>">
        Log in to your account
      </a>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>