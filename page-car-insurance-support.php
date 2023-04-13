<?php
  // Template name: car-insurance-support
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<!-- Modal Support Page -->
<section class="modal-support">
  <div class="overlay-support">
  </div>
  <div class="box-support">
    <button class="close-support js-close-support">
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-modal.svg" alt="close button"  title="close button">
    </button>
    <span>GET IN TOUCH WITH US</span>
    <h2><?php the_field('title_car_support_modal_car') ?></h2>
    <p class="subtitle-p"><?php the_field('subtitle_car_support_modal_car') ?></p>
    <ul>
      <!-- Repeater Slide Cards --> 
      <?php if( have_rows('emergency_support_list_car') ): while ( have_rows('emergency_support_list_car') ) : the_row(); ?>
        <li>
          <p><?php the_sub_field('text_emergency_modal_support_car') ?></p>
          <span><?php the_sub_field('phone_emergency_modal_support_car') ?></span>
        </li>
      <?php endwhile; else : endif;?>
    </ul>
  </div>
</section>

<!-- Section Hero -->
<section class="s-hero-support-page">
  <div class="container">
    <div class="title-support-page">
      <h1><?php the_field('title_emergency_car_support_car') ?></h1>
    </div>
    <!-- Section Include Search Code Blog -->
    <?php include(TEMPLATEPATH .'/includes/section-search-blog.php') ?> 
  </div>
</section>

<!-- Section Cards Squared -->
<section class="s-squared-cards">
  <div class="container">
    <ul>
      <li>
        <div class="cards-squared">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-support-page.svg" alt="icon phone" title="icon phone">
          <a href="" class="js-open-modal-support">Emergency Contact</a>
        </div>
      </li>
      <!-- Repeater Slide Cards --> 
      <?php if( have_rows('section_cards_support_page_car') ): while ( have_rows('section_cards_support_page_car') ) : the_row(); ?>
        <li>
          <div class="cards-squared">
            <img src="<?php the_sub_field('card_image_support_car') ?>">
            <a href="<?php the_sub_field('link_card_support_car') ?>"><?php the_sub_field('card_text_support_car') ?></a>
          </div>
        </li>
      <?php endwhile; else : endif;?>
    </ul>
  </div>
</section>

<!-- Section Text -->
<section class="s-text-support">
  <div class="container">
    <div class="left-text-support">
      <h2><?php the_field('title_trending_questions_support_car') ?></h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_trending_questions_support_car') ): while ( have_rows('section_trending_questions_support_car') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_trending_questions') ?>">
              <?php the_sub_field('text_trending_questions') ?>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
    <div class="right-text-support">
      <h2><?php the_field('title_featured_questions_support_car') ?></h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('section_featured_questions_support_car') ): while ( have_rows('section_featured_questions_support_car') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_featured_questions') ?>">
              <?php the_sub_field('text_featured_questions') ?>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </div>
</section>

<!-- Section Policy -->
<section class="s-policy-support">
  <div class="container">
    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-invoice-support-page.svg" alt="icon policy" title="icon policy" class="policy">
    <h2><?php the_field('title_policy_support_car') ?></h2>
    <ul>
      <!-- Repeater Slide Cards --> 
      <?php if( have_rows('subtitle_policy_support_car') ): while ( have_rows('subtitle_policy_support_car') ) : the_row(); ?>
        <li>
          <p><?php the_sub_field('subtitle_p_support_car') ?></p>
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