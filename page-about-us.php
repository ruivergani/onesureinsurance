<!-- Give the name to the template -->
<?php
  // Template name: about-us
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

  <!-- Section Hero -->
  <section class="s-hero-about">
    <div class="container">
      <div class="s-hero-about-title">
        <h1><?php the_field('title_section_hero_about_us_page') ?></h1>
      </div>
    </div>
  </section>

  <!-- === SECTION CONTENT === -->
  <section class="s-content-about-us">
    <div class="container">
      <div class="s-content-about-us-text">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <!-- === SECTION ACCREDITATIONS === -->
  <section class="s-logos-brands">
    <div class="container">
      <h2><?php the_field('title_section_logos_about_us') ?></h2>
      <ul class="s-logos-brands-list">
        <!-- Repeater --> 
        <?php if( have_rows('logos_brands_about_us') ): while ( have_rows('logos_brands_about_us') ) : the_row(); ?>
          <li>
            <img src="<?php the_sub_field('image_card_logo_about_us') ?>" alt="">
          </li>
        <?php endwhile; else : endif;?>
        <!-- End Repeater --> 
      </ul>
    </div>
  </section>

  <!-- Section About Us -->
  <section class="s-about-us-text">
    <div class="container">
      <div class="s-about-us-text-left">
        <h2><?php the_field('title_section_content_about_us') ?></h2>
        <p><?php the_field('subtitle_section_content_about_us') ?></p>
        <ul>
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('list_section_content_about_us') ): while ( have_rows('list_section_content_about_us') ) : the_row(); ?>
            <li>
              <img src="<?php the_sub_field('icon_list_about_us') ?>" alt="icon checked green" title="icon checked green">
              <p><?php the_sub_field('text_list_about_us') ?></p>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
        <p><?php the_field('description_section_content_about_us') ?></p>
        <button class="btn btn-primary">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="icon arrow white" title="icon arrow white">
          LEARN MORE
        </button>
      </div>
      <div class="image-right">
        <img src="<?php the_field('image_section_content_about_us') ?>" alt="about us image" title="about us image">
      </div>
    </div>
  </section>

  <!-- Section Newsletter -->
  <section class="s-card-blue">
    <div class="container">
      <div class="card-dark-blue">
        <h3>Learn in seconds which types of insurance match your business</h3>
        <button class="btn btn-primary js-open-modal-insurance">
          <i class="fa-solid fa-envelope"></i>
          GET A QUOTE
        </button>
      </div>
    </div>
  </section>

  <!-- Section Protect Business -->
  <section class="s-protect-business">
    <div class="container">
      <h3><?php the_field('title_section_protect_about_us') ?></h3>
      <p><?php the_field('subtitle_section_protect_about_us') ?></p>
      <ul>
        <!-- Repeater --> 
        <?php if( have_rows('cards_section_protect_about_us') ): while ( have_rows('cards_section_protect_about_us') ) : the_row(); ?>
          <li>
            <h4><?php the_sub_field('title_card_about_us') ?></h4>
            <div class="text-bottom">
              <img src="<?php the_sub_field('image_card_about_us') ?>" alt="about image" title="about image">
              <p><?php the_sub_field('subtitle_card_about_us') ?> </p>
            </div>
          </li>
        <?php endwhile; else : endif;?>
        <!-- End Repeater --> 
      </ul>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>
 
<!-- Include Footer -->
<?php get_footer(); ?>