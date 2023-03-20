<?php
  // Template name: code-of-conduct
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

 <!-- Section Breadcrumbs -->
 <?php breadcrumbs(); ?>

 <section class="s-title">
    <div class="container">
      <h1><?php wp_title('') ?></h1>
    </div>
 </section>

 <section class="s-page-text">
  <div class="container">
    <div class="left-page-text">
      <!-- Blog Structure based on WordPress -->
      <div class="content-post">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="right-page-text">
      <!-- Table of Content -->
      <div class="table-of-content">
        <h5 class="table-of-content-title">Table of Content</h5>
        <!-- Top Navigation -->
        <ul class="js-nav-template-text">
        </ul>
        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
          <button>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-share-arrow.svg" alt="icon share arrow" title="icon share arrow">
            <span>Share</span>
          </button>
        </a>
      </div>
    </div>
  </div>
 </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>