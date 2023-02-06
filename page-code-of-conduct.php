<!-- Give the name to the template -->
<?php
  // Template name: code-of-conduct
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1>Page Code of Conduct</h1>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>