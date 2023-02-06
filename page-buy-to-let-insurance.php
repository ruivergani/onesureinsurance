<?php
  // Template name: buy-to-let-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1>Buy to let Insurance Page</h1>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>