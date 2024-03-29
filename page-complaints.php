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
  <?php echo do_shortcode('[merlin-dialler-modal-list]'); ?> 

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
      <a href="#s-help-contact">
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
  <section class="s-help-contact" id="s-help-contact">
    <div class="container">
      <h3><?php the_field('title_section_contact_help_us_complaints_page') ?></h3>
      <div class="s-help-description">
        <p><?php the_field('subtitle_section_contact_help_us_complaints_page') ?></p>
      </div>
      <!-- === END OF HIDDEN INPUT === -->
      <a class="btn btn-primary" type="submit" href="<?php the_field('link_section_contact_help_us_complaints_page') ?>">
        <?php the_field('text_button_section_contact_help_us_complaints_page') ?>
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
              <span><?php the_field('title_telephone_abroad_text_complaints') ?></span>
              <p><?php the_field('telephone_text_complaints') ?></p>
            </li>
            <li>
              <span><?php the_field('title_email_abroad_text_complaints') ?></span>
              <p><?php the_field('email_text_complaints') ?></p>
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