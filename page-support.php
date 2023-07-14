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
  <?php echo do_shortcode('[merlin-dialler-modal-list]'); ?> 

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-supports">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-subpages.jpg" alt="support image background" title="support image background">
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
          <img src="<?php the_field('image_card_make_complaint_support') ?>">
        </div>
        <div class="text-card-support">
          <h2><?php the_field('title_card_supports_feedback') ?></h2>
          <p><?php the_field('subtitle_card_supports_feedback_01') ?></p>
          <p><?php the_field('subtitle_card_supports_feedback_02') ?></p>
          <a href="">
            <p>CALL US: </p>
            <p><?php the_field('phone_number_support') ?></p>
          </a>
        </div>
      </div>
      <div class="card-right-support">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-comments.svg" alt="icon comments" title="icon comments">
        <h3><?php the_field('title_card_make_complaint_support') ?></h3>
        <p><?php the_field('subtitle_card_make_complaint_support') ?></p>
        <!-- Action Button -->
        <a class="btn btn-primary btn-supports" href="#s-forms-support">
          SEND US A MESSAGE
        </a>
      </div>
    </div>
  </section>

  <!-- === SECTION FORMS === --> 
  <section class="s-forms-support" id="s-forms-support">
    <div class="container">
      <h3>Send us a message</h3>
      <div class="form-support">
        <!-- === FORM === -->
        <?= do_shortcode('[contact-form-7 id="8135" title="Contact Form Support"]') ?>
      </div>
    </div>
  </section>

  <!-- === SECTION CONTENT FAQs === -->
  <section class="s-content-supports-faq">
    <div class="container">
      <div class="title-content-supports-faq">
        <h4><?php the_field('title_section_support') ?></h4>
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
      <button class="large-cta js-open-modal-insurance">
        <div class="text">
          <span><?php the_field('subtitle_cta_supports_page') ?></span>
          <h3><?php the_field('title_cta_supports_page') ?></h3>
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
      <h2><?php the_field('title_section_log_in_support_page') ?></h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('content_section_log_in_support_page') ): while ( have_rows('content_section_log_in_support_page') ) : the_row(); ?>
          <li>
            <p><?php the_sub_field('paragraph_log_in_section_support_page') ?></p>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <a class="btn btn-primary" href="<?php the_field('link_section_log_in_support_page') ?>">
        Log in to your account
      </a>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>