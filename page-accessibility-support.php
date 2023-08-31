<?php
// Template name: accessibility-and-support
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if (have_posts()):while (have_posts()):the_post(); ?>

    <!-- === MODAL INSURANCE TYPES === -->
    <?php echo do_shortcode('[merlin-dialler-modal-list]'); ?>

    <!-- === FORM  === -->
    <?php echo do_shortcode('[merlin-dialler-form]'); ?>

    <!-- Section Breadcrumbs -->
    <?php breadcrumbs(); ?>

    <section class="s-hero-supports">
      <img src="<?php echo get_template_directory_uri() ?>/assets/bg/bg-subpages.jpg" alt="support image background"
        title="support image background">
      <h1 class="title-hero">Accessibility and Support</h1>
    </section>

    <section class="s-table-contents">
      <div class="container">
        <!-- Navbar Tab -->
        <ul class="js-nav-product overflow-x" id="js-nav-product">
          <li class="js-item-content">
            <a href="#visual-audio" class="anchor" aria-label="Visual and Audio Support" title="Visual and Audio Support">
              <p>Visual and Audio Support</p>
            </a>
          </li>
          <li class="js-item-content">
            <a href="#alternative-content" class="anchor" aria-label="Alternative Document Format"
              title="Alternative Document Format">
              <p>Alternative Document Format</p>
            </a>
          </li>
          <li class="js-item-content">
            <a href="#disability-support" class="anchor" aria-label="Disability Support" title="Disability Support">
              <p>Disability Support</p>
            </a>
          </li>
          <li class="js-item-content">
            <a href="#mental-health" class="anchor" aria-label="Mental Health Support" title="Mental Health Support">
              <p>Mental Health Support</p>
            </a>
          </li>
          <li class="js-item-content">
            <a href="#money-worries" class="anchor" aria-label="Money Worries" title="Money Worries">
              <p>Money Worries</p>
            </a>
          </li>
          <li class="js-item-content">
            <a href="#trusted-alternative" class="anchor" aria-label="Trusted Alternative Contact"
              title="Trusted Alternative Contact">
              <p>Trusted Alternative Contact</p>
            </a>
          </li>
          <li class="js-item-content">
            <a href="#contact-us" class="anchor" aria-label="Contact Us" title="Contact Us">
              <p>Contact Us</p>
            </a>
          </li>
        </ul>
        <!-- Mobile Configuration -->
        <div class="select-custom">
          <!-- item selected -->
          <button class="item-selected js-open-select-custom">
            <span>Select an <strong>item</strong></span>
          </button>
          <!-- Dropdown List -->
          <ul class="dropdown-select" id="dropdown-select">
            <li class="active">
              <a href="#visual-audio">
                <p>Visual and Audio Support</p>
              </a>
            </li>
            <li>
              <a href="#alternative-content">
                <p>Alternative Document Format</p>
              </a>
            </li>
            <li>
              <a href="#disability-support">
                <p>Disability Support</p>
              </a>
            </li>
            <li>
              <a href="#mental-health">
                <p>Mental Health Support</p>
              </a>
            </li>
            <li>
              <a href="#money-worries">
                <p>Money Worries</p>
              </a>
            </li>
            <li>
              <a href="#trusted-alternative">
                <p>Trusted Alternative Contact</p>
              </a>
            </li>
            <li>
              <a href="#contact-us">
                <p>Contact Us</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="s-accessibility-support" id="visual-audio" style="padding-top: 6rem;">
      <div class="container">
        <div class="s-accessibility-support-title">
          <h2>
            <?php the_field('title_visual_audio_and_support_page_accessibility') ?>
          </h2>
        </div>
        <div class="s-accessibility-support-content">
          <?php the_field('content_visual_audio_and_support_page_accessibility') ?>
        </div>
      </div>
    </section>

    <section class="s-accessibility-support" id="alternative-content">
      <div class="container">
        <div class="s-accessibility-support-title">
          <h2>
            <?php the_field('title_alternative_document_page_accessibility') ?>
          </h2>
        </div>
        <div class="s-accessibility-support-content">
          <?php the_field('content_alternative_document_page_accessibility') ?>
        </div>
      </div>
    </section>

    <section class="s-accessibility-support" id="disability-support">
      <div class="container">
        <div class="s-accessibility-support-title">
          <h2>
            <?php the_field('title_disability_support_page_accessibility') ?>
          </h2>
        </div>
        <div class="s-accessibility-support-content">
          <?php the_field('content_disability_support_page_accessibility') ?>
        </div>
      </div>
    </section>

    <section class="s-accessibility-support" id="mental-health">
      <div class="container">
        <div class="s-accessibility-support-title">
          <h2>
            <?php the_field('title_mental_health_page_accessibility') ?>
          </h2>
        </div>
        <div class="s-accessibility-support-content">
          <?php the_field('content_mental_health_page_accessibility') ?>
        </div>
      </div>
    </section>

    <section class="s-accessibility-support" id="money-worries">
      <div class="container">
        <div class="s-accessibility-support-title">
          <h2>
            <?php the_field('title_money_worries_page_accessibility') ?>
          </h2>
        </div>
        <div class="s-accessibility-support-content">
          <?php the_field('content_money_worries_page_accessibility') ?>
        </div>
      </div>
    </section>

    <section class="s-accessibility-support" id="trusted-alternative">
      <div class="container">
        <div class="s-accessibility-support-title">
          <h2>
            <?php the_field('title_trusted_alternative_page_accessibility') ?>
          </h2>
        </div>
        <div class="s-accessibility-support-content">
          <?php the_field('content_trusted_alternative_page_accessibility') ?>
        </div>
      </div>
    </section>

    <section class="s-accessibility-support" id="contact-us">
      <div class="container">
        <div class="s-accessibility-support-title">
          <h2>
            <?php the_field('title_contact_us_page_accessibility') ?>
          </h2>
        </div>
        <div class="s-accessibility-support-content">
          <p>
            <?php the_field('content_contact_us_page_accessibility') ?>
          </p>
        </div>
        <div class="s-accessibility-support-contact-us">
          <div class="card-left-support">
            <div class="image-card-support">
              <img src="<?php the_field('image_card_left_contact_us_accessibility_page') ?>">
            </div>
            <div class="text-card-support">
              <h2>
                <?php the_field('title_card_left_contact_us_accessibility_page') ?>
              </h2>
              <p>
                <?php the_field('subtitle_card_left_contact_us_accessibility_page') ?>
              </p>
              <a href="tel:<?php the_field('phone_number_card_left_contact_us_accessibility_page') ?>">
                <span>CALL US: </span>
                <p>
                  <?php the_field('phone_number_card_left_contact_us_accessibility_page') ?>
                </p>
              </a>
            </div>
          </div>
          <div class="card-right-support">
            <img src="<?php echo get_template_directory_uri() ?>/assets/icons/icon-comments.svg" alt="icon comments"
              title="icon comments">
            <h3>
              <?php the_field('title_card_right_contact_us_accessibility_page') ?>
            </h3>
            <p>
              <?php the_field('subtitle_card_right_contact_us_accessibility_page') ?>
            </p>
            <!-- Action Button -->
            <a class="btn btn-primary btn-supports"
              href="<?php the_field('link_card_right_contact_us_accessibility_page') ?>">
              SEND US A MESSAGE
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- End loop -->
  <?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>