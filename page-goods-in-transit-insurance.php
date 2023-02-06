<?php
  // Template name: goods-in-transit-insurance
?>

<!-- Include Header -->
<?php get_header(); ?>


<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1>Good In Transit INSURANCE PAGE</h1>
  
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>