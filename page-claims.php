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
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-subpages.jpg" alt="background image claims" title="background image claims">
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

  <!-- === SECTION CARDS === -->
  <section class="s-cards-claims" id="claims-content">
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

  <!-- === SECTION CONTENT FAQs === -->
  <section class="s-content-claims-faq">
    <div class="container">
      <div class="title-content-claims-faq">
        <h4><?php the_field('title_section_claims') ?></h4>
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

  <!-- === Section Policy === -->
  <section class="s-policy-support-claim">
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