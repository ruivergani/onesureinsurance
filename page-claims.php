<?php
  // Template name: claims
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-claims">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-hero-claims.jpg" alt="hero claims" title="hero claims">
    <h1 class="title-hero">Making a Claim</h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-claims">
    <div class="container">
      <a href="#claims-content">
        <p>Need assistance? Check our guides below</p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <section class="claims-content" id="claims-content">
    <div class="container">
      content will be here
    </div>
  </section>




<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>