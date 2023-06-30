<?php
  // Template name: contact
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
  <section class="s-hero-contact">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-subpages.jpg" alt="contact us image" title="contact us image">
    <h1 class="title-hero"><?php the_field('title_section_hero_page_contact') ?></h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-claims">
    <div class="container">
      <a href="#s-content-contact">
        <p><?php the_field('link_text_section_hero_page_contact') ?></p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CONTENT == -->
  <section class="s-content-contact" id="s-content-contact">
    <div class="container">
      <div class="s-content-contact-left">
        <h2><?php the_field('title_navigation_section_form_contact_page') ?></h2>
        <ul>
          <li>
            <a href="<?php the_field('link_customer_service_contact_page') ?>" class="active">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Customer Service</p>
            </a>
          </li>
          <li>
            <a href="<?php the_field('link_renewals_contact_page') ?>">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Renewals</p>
            </a>
          </li>
          <li>
            <a href="<?php the_field('link_sales_department_contact_page') ?>">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Sales Department</p>
            </a>
          </li>
          <li>
            <a href="<?php the_field('link_claims_contact_page') ?>">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Claims</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="s-content-contact-right">
        <div class="form-contact">
          <!-- === FORM === -->
          <?= do_shortcode('[contact-form-7 id="4521" title="Contact Form Default"]') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- === SECTION HELP CONTACT == -->
  <section class="s-help-contact">
    <div class="container">
      <h3><?php the_field('title_help_contact_page') ?></h3>
      <div class="s-help-description"> 
        <?php the_field('description_help_contact_page') ?>
      </div>
      <!-- === END OF HIDDEN INPUT === -->
      <a class="btn btn-primary" type="submit" href="<?php the_field('link_button_help_contact_page') ?>">
        SUBMIT REQUEST
      </a>
    </div>
  </section>

  <!-- === SECTION MAP CONTACT == -->
  <section class="s-map-contact">
    <div class="container">
      <div class="s-map-contact-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2396.339631649307!2d-2.2619363223603006!3d53.086135094160234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a42dc78ebec17%3A0xd30519b5b926b92b!2sOne%20Sure%20Insurance!5e0!3m2!1sen!2suk!4v1686911354330!5m2!1sen!2suk" width="592" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="s-map-contact-right">
        <h4><?php the_field('title_section_map_contact_page') ?></h4>
        <p>
          <?php the_field('address_section_map_contact_page') ?>
        </p>
        <ul>
          <li>
            <a href="<?php the_field('link_customer_services_card_section_map_contact_page') ?>">
              <p>Customer Services</p>
              <span><?php the_field('phone_customer_services_card_section_map_contact_page') ?></span>
            </a>
          </li>
          <li>
            <a href="<?php the_field('link_sales_card_section_map_contact_page') ?>">
              <p>Sales Number</p>
              <span><?php the_field('phone_sales_card_section_map_contact_page') ?></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- === SECTION EXTRA INFO CONTACT === -->
  <section class="s-extra-info-contact">
    <div class="container">
      <h2>More Information</h2>
      <ul>
        <div class="info-01">
          <div class="info-01-hours">
            <h5>Business Opening Hours:</h5>
            <p><?php the_field('business_hours_contact_page') ?></p>
          </div>
          <div class="info-01-content">
            <h5>Claims Department:</h5>
            <p>For our full list of claim numbers please <a href="<?php the_field('claims_link_contact_page') ?>">click here.</a>
            Available 24hrs a day.</p>
          </div>
        </div>
        <div class="info-02">
          <div class="info-02-hours">
            <h5>Sales Opening Hours:</h5>
            <p><?php the_field('sales_hours_contact_page') ?></p>
          </div>
          <div class="info-02-content">
            <h5>Call Sales: <a href="<?php the_field('') ?>"><?php the_field('sales_number_contact_page') ?></a></h5>
          </div>
        </div>
        <div class="info-03">
          <div class="info-03-hours">
            <h5>Renewals Opening Hours:</h5>
            <p><?php the_field('renewals_hours_contact_page') ?></p>
          </div>
          <div class="info-03-content">
            <h5>Call Renewals: <a href="<?php the_field('') ?>"><?php the_field('renewals_number_contact_page') ?></a></h5>
          </div>
        </div>
      </ul>
      <p class="message-info">Send us an email fill out the form found above. Required fields are highlighted in red.</p>
      <span>* Take out an insurance policy, or renew an insurance policy with One Sure Insurance, and if you find a cheaper quotation within 48 hours that is on a like for like basis that you can provide written proof of, we will cancel your insurance policy and issue a full refund. Subject to terms and conditions.</span>
    </div>
  </section>
  
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>