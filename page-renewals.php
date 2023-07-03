<?php
  // Template name: page-renewals
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
  <section class="s-hero-renewals">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-subpages.jpg" alt="background renewals" title="background renewals">
    <h1 class="title-hero"><?php the_field('title_page_renewal') ?></h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-renewals">
    <div class="container">
      <a href="#renewals-content">
        <p><?php the_field('title_link_page_renewal') ?></p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CARDS == -->
  <section class="s-renewals-content" id="renewals-content">
    <div class="container">
      <div class="card-left-renewal">
        <div class="image-card-renewal">
          <img src="<?php the_field('image_card_renewals_feedback') ?>">
        </div>
        <div class="text-card-renewal">
          <h2><?php the_field('title_card_renewals_feedback') ?></h2>
          <p><?php the_field('subtitle_card_renewals_feedback_01') ?></p>
          <p><?php the_field('subtitle_card_renewals_feedback_02') ?></p>
          <a href="<?php the_field('link_card_renewals_feedback') ?>">
            <p>CALL US: </p>
            <p><?php the_field('phone_number_renewals') ?></p>
          </a>
        </div>
      </div>
      <div class="card-right-renewal">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-comments.svg" alt="icon comments" title="icon comments">
        <h3><?php the_field('title_card_make_complaint_renewal') ?></h3>
        <p><?php the_field('subtitle_card_make_complaint_renewal') ?></p>
        <!-- Action Button -->
        <a class="btn btn-primary btn-renewals" href="#s-forms-renewals">
          SEND US A MESSAGE
        </a>
      </div>
    </div>
  </section>

  <!-- === SECTION FORMS === --> 
  <section class="s-forms-support" id="s-forms-renewals">
    <div class="container">
      <h3>Send us a message</h3>
      <div class="form-support">
        <!-- === FORM === -->
        <?= do_shortcode('[contact-form-7 id="8137" title="Contact Form Renewals"]') ?>
      </div>
    </div>
  </section>

  <!-- === SECTION CONTENT FAQs === -->
  <section class="s-content-renewals-faq">
    <div class="container">
      <div class="title-content-renewals-faq">
        <h4><?php the_field('title_section_renewals') ?></h4>
      </div>
      <div class="all-renewals-faq">
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('card_repeater_renewals_faq') ): while ( have_rows('card_repeater_renewals_faq') ) : the_row(); ?>
          <!-- === EACH ACCORDION FAQ === -->
          <div class="accordion-plus-renewal">
            <div class="accordion-plus-item-renewal js-accordion-plus-item">
              <h3>
                <?php the_sub_field('title_card_renewal_faq') ?>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
              </h3>
              <div class="accordion-plus-content-renewal">
                <?php the_sub_field('description_card_renewal_faq') ?>
              </div>
            </div>
          </div>
        <?php endwhile; else : endif;?>
      </div>
    </div>
  </section>

  <!-- === Section CTA === -->
  <div class="s-newsletter s-renewals-newsletter">
    <div class="container">
      <button class="large-cta js-open-modal-insurance" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
          <span><?php the_field('subtitle_cta_renewals_page') ?></span>
          <h3><?php the_field('title_cta_renewals_page') ?></h3>
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
        <?php if( have_rows('content_section_log_in_renewal_page') ): while ( have_rows('content_section_log_in_renewal_page') ) : the_row(); ?>
          <li>
            <p><?php the_sub_field('paragraph_log_in_section_renewal_page') ?></p>
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