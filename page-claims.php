<?php
  // Template name: page-claim
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- === Section Breadcrumbs === -->
  <?php breadcrumbs(); ?>

  <!-- === MODAL INSURANCE TYPES === -->
  <?php echo do_shortcode('[merlin-dialler-modal-list]'); ?> 

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-claims">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-hero-claims.webp" alt="hero claims" title="hero claims">
    <h1 class="title-hero"><?php the_field('title_page_claim') ?></h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-claims">
    <div class="container">
      <a href="#claims-content">
        <p><?php the_field('title_link_page_claim') ?></p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CARDS CLAIMS PAGE == -->
  <section class="s-claims-content" id="claims-content">
    <div class="container">
      <div class="card-left-claim">
        <div class="image-card-claim">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-claims-feedback.webp" alt="card claims" title="card claims">
        </div>
        <div class="text-card-claim">
          <h2><?php the_field('title_card_claims_feedback') ?></h2>
          <p><?php the_field('subtitle_card_claims_feedback_01') ?></p>
          <p><?php the_field('subtitle_card_claims_feedback_02') ?></p>
          <a href="<?php the_field('link_card_claims_feedback') ?>">
            <p>YOUR CLAIMS FEEDBACK</p>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-right-outline.svg" alt="icon right outline" title="icon right outline">
          </a>
        </div>
      </div>
      <div class="card-right-claim">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-comments.svg" alt="icon commets" title="icon comments">
        <h3><?php the_field('title_card_make_complaint') ?></h3>
        <p><?php the_field('subtitle_card_make_complaint') ?></p>
        <!-- Action Button -->
        <a class="btn btn-primary btn-claims" href="<?php the_field('link_card_make_complaint') ?>">
          Make a complaint
        </a>
      </div>
    </div>
  </section>

  <!-- === SECTION CONTENT FAQs === -->
  <section class="s-content-claims-faq">
    <div class="container">
      <div class="title-content-claims-faq">
        <h4><?php the_field('title_section_claims') ?></h4>
      </div>
      <div class="content-highlight-claims-faq">
        <!-- === HIGHLIGHT ACCORDION FAQ === -->
        <div class="accordion-plus-claim">
          <div class="accordion-plus-item-claim">
            <h3>
              <?php the_field('title_highlight_section_claims') ?>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
            </h3>
            <div class="accordion-plus-content-claim pt-3">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="all-claims-faq">
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('card_repeater_claims_faq') ): while ( have_rows('card_repeater_claims_faq') ) : the_row(); ?>
          <!-- === EACH ACCORDION FAQ === -->
          <div class="accordion-plus-claim">
            <div class="accordion-plus-item-claim js-accordion-plus-item">
              <h3>
                <?php the_sub_field('title_card_claim_faq') ?>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
              </h3>
              <div class="accordion-plus-content-claim">
                <?php the_sub_field('description_card_claim_faq') ?>
              </div>
            </div>
          </div>
        <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>

  <!-- === Section CTA === -->
  <div class="s-newsletter s-claims-newsletter">
    <div class="container">
      <button class="large-cta js-open-modal-insurance" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
          <span><?php the_field('subtitle_cta_claims_page') ?></span>
          <h3><?php the_field('title_cta_claims_page') ?></h3>
        </div>
        <a class="btn btn-primary">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
          get a quote
        </a>
      </button>
    </div>
  </div>

  <!-- === SECTION CARDS === -->
  <section class="s-cards-claims">
    <div class="container">
      <ul>
        <!-- SECTION REPEATER -->
        <?php if( have_rows('cards_repeater_claim_page') ): while ( have_rows('cards_repeater_claim_page') ) : the_row(); ?>
          <li>
            <div class="s-card-claim">
              <div class="s-card-claim-title">
                <h2><?php the_sub_field('title_insurance_card_claim_page') ?></h2>
              </div>
              <div class="s-card-claim-image">
                <img src="<?php the_sub_field('image_insurance_card_claim_page') ?>" alt="">
              </div>
              <div class="s-card-claim-button">
                <a class="btn btn-primary" href="<?php the_sub_field('link_insurance_card_claim_page') ?>">
                  MAKE A CLAIM
                </a>
              </div>
            </div>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </section>

  <!-- === Section CTA === -->
  <div class="s-newsletter s-claims-newsletter">
    <div class="container">
      <button class="large-cta js-open-modal-insurance" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
          <span><?php the_field('subtitle_cta_claims_page') ?></span>
          <h3><?php the_field('title_cta_claims_page') ?></h3>
        </div>
        <a class="btn btn-primary">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
          get a quote
        </a>
      </button>
    </div>
  </div>

  <!-- === Section Policy === -->
  <section class="s-policy-support">
    <div class="container">
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-invoice-support-page.svg" alt="icon policy" title="icon policy" class="policy">
      <h2>Log In To Your Account</h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('content_section_log_in_claim_page') ): while ( have_rows('content_section_log_in_claim_page') ) : the_row(); ?>
          <li>
            <p><?php the_sub_field('paragraph_log_in_section_claim_page') ?></p>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <a class="btn btn-primary" href="">
        Log in to your account
      </a>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>