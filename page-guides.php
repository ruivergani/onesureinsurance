<?php
  // Template name: guides
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- === MODAL INSURANCE TYPES === -->
  <?php echo do_shortcode('[merlin-dialler-modal-list]'); ?> 

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>
  
  <h1>Page Guides</h1>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>