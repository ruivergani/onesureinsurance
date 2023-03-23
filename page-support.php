<?php
  // Template name: support
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<!-- Section Hero -->
<section class="s-hero-support">
  <div class="container">
      <h1>Need help?</h1>
      <p>Don’t worry - we’re here for you! Seach for help by typing your question in the box, or scroll down to pick the topic you need.</p>
      <!-- Section Include Search Code Blog -->
      <?php include(TEMPLATEPATH .'/includes/section-search-blog.php') ?> 
  </div>
</section>



<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>