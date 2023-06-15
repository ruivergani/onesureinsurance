<?php
  // Template name: contact
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-contact">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/contact-us-hero.jpg" alt="contact us image" title="contact us image">
    <h1 class="title-hero">Contact Us</h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-claims">
    <div class="container">
      <a href="#s-content-contact">
        <p>Need assistance? Send us a message</p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CONTENT == -->
  <section class="s-content-contact" id="s-content-contact">
    <div class="container">
      
    </div>
  </section>
  



<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>