<?php
  // Template name: privacy
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
        <h5 class="table-of-content-title">Policy Content</h5>
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
      <!-- Repeater Card Download --> 
      <?php if( have_rows('card_download') ): while ( have_rows('card_download') ) : the_row(); ?>
        <!-- Card Download PDF -->
        <div class="card-download">
          <div class="download-text">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-file.svg" alt="icon file" title="icon file">
            <p><?php the_sub_field('title_card_download'); ?></p>
          </div>
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-download.svg" alt="icon download" title="icon download" class="icon-download">
        </div>
      <?php endwhile; else : endif;?>
    </div>
  </div>
 </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>