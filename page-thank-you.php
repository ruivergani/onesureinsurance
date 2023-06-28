<?php
  // Template name: thankyou
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- === Section Breadcrumbs === -->
  <?php breadcrumbs(); ?>

  <section class="s-thankyou">
    <div class="container">
        <div class="s-thankyoutitle">
          <span><?php the_field('small_subtitle_thankyou_page') ?></span>
          <h1><?php the_field('title_thankyou_page') ?></h1>
          <p><?php the_field('subtitle_thankyou_page') ?></p>
        </div>
        <div class="s-thankyou-bullet">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/line-section-hero.jpg" alt="" class="line-right-hero">
          <div class="s-thankyou-bullet__list">
            <ul>
              <li>
                <p><?php the_field('list_title_01_thankyou_page') ?></p>
                <span><?php the_field('list_subtitle_01_thankyou_page') ?></span>
              </li>
              <li>
                <p><?php the_field('list_title_02_thankyou_page') ?></p>
                <span><?php the_field('list_subtitle_02_thankyou_page') ?></span>
              </li> 
              <li>
                <p><?php the_field('list_title_03_thankyou_page') ?></p>
                <span><?php the_field('list_subtitle_03_thankyou_page') ?></span>
              </li>
            </ul>
          </div>
        </div>
        <!-- === END OF HIDDEN INPUT === -->
        <a class="btn btn-primary" type="submit" href="">
            SAVE OUR NUMBER
        </a>
    </div>
  </section>
  
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>