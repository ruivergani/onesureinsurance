<?php
  // Template name: faq
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- Section Content Main -->
  <section class="s-faq-content">
    <div class="container">
      <div class="table-of-content-faq">
        <h3><?php the_field('title_section_hero_about_us_page') ?></h3>
        <!-- Navigation FAQs -->
        <ul class="js-nav-faq-post">
        </ul>
      </div>
      <div class="main-content-faq">
        <!-- Title main content FAQs -->
        <div class="title-main-content-faq">
          <h1><?php wp_title('') ?></h1>
          <?php the_content(); ?>
        </div>
        <div class="mobile-faq-tags">
          <!-- Mobile Configuration -->
          <div class="select-custom">
            <!-- item selected -->
            <button class="item-selected js-open-select-custom">
              <span>Select an </span>
              <strong>item</strong>
            </button>
            <!-- Dropdown List -->
            <ul class="dropdown-select js-dropdown-select">
            </ul>
          </div>
        </div>
        <!-- All FAQs -->
        <div class="all-faqs-section">
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('all_faqs_section') ): while ( have_rows('all_faqs_section') ) : the_row(); ?>
            <!-- Each FAQ section -->
            <div class="faq-box">
              <h2><?php the_sub_field('title_of_the_faq_section') ?></h2>
              <!-- Repeater --> 
              <?php if( have_rows('each_faq') ): while ( have_rows('each_faq') ) : the_row(); ?>
                <!-- Individual FAQ question -->
                <div class="accordion-plus">
                  <div class="accordion-plus-item js-accordion-plus-item">
                    <h3>
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                      <span><?php the_sub_field('title_of_individual_faq') ?></span>
                    </h3>
                    <div class="accordion-plus-content">
                      <?php the_sub_field('description_individual_faq') ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; else : endif;?>
            </div>
            <!-- End of FAQ each -->
          <?php endwhile; else : endif;?>
        </div>
      </div>
    </div>
  </section>

  <!-- Section FAQ Links -->
  <div class="s-faq-link">
    <div class="container">
      <div class="f-top">
        <!-- Repeater --> 
        <?php if( have_rows('repeater_top_section_link_faq') ): while ( have_rows('repeater_top_section_link_faq') ) : the_row(); ?>
          <div class="f-item">
            <h4><?php the_sub_field('title_faq_link') ?></h4>
            <ul>
              <!-- Repeater --> 
              <?php if( have_rows('card_link_text_faq') ): while ( have_rows('card_link_text_faq') ) : the_row(); ?>
                <li>
                  <a href="<?php the_sub_field('link_card_faq') ?>">
                    <?php the_sub_field('text_card_faq') ?>
                  </a>
                </li>
              <?php endwhile; else : endif;?>
            </ul>
          </div>
        <?php endwhile; else : endif;?>
      </div>
      <div class="f-bottom">
        <!-- Repeater --> 
        <?php if( have_rows('repeater_bottom_section_link_faq') ): while ( have_rows('repeater_bottom_section_link_faq') ) : the_row(); ?>
          <div class="f-item">
            <h4><?php the_sub_field('title_faq_link_bottom') ?></h4>
            <ul>
              <?php if( have_rows('card_link_text_faq_bottom') ): while ( have_rows('card_link_text_faq_bottom') ) : the_row(); ?>
                <li>
                  <a href="<?php the_sub_field('link_card_faq_bottom') ?>">
                    <?php the_sub_field('text_card_faq_bottom') ?>
                  </a>
                </li>
              <?php endwhile; else : endif;?>
            </ul>
          </div>
        <?php endwhile; else : endif;?>
      </div>
    </div>
  </div>

  <!-- Section Newsletter -->
  <section class="s-newsletter-faq">
    <div class="container">
      <h3><?php the_field('section_newsletter_faq') ?></h3>
      <p><?php the_field('subtitle_section_newsletter_faq') ?></p>
      <span>Enter your email address</span>
      <form class="form-newsletter">
        <input type="text" placeholder="Email address *" id="js-input-newsletter">
        <button type="button" id="js-btn-newsletter">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-right-white.svg" alt="arrow right white" title="arrow right white">
        </button>
      </form>
    </div>
  </section>
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>