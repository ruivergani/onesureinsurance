<?php
  // Template name: car-insurance-support
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<!-- Section Hero -->
<section class="s-hero-support-page">
  <div class="container">
    <div class="title-support-page">
      <h1>Car Insurance Support</h1>
    </div>
    <!-- Section Include Search Code Blog -->
    <?php include(TEMPLATEPATH .'/includes/section-search-blog.php') ?> 
  </div>
</section>

<!-- Section Cards Squared -->
<section class="s-rounded-cards">
  <div class="container">
    <ul>
      <li>
        <div class="cards-squared">

        </div>
      </li>


      <!-- Repeater Slide Cards --> 
      <?php if( have_rows('') ): while ( have_rows('') ) : the_row(); ?>
        <li>
          <div class="cards-rounded">
            <div class="circle-rounded">
              <img src="<?php the_sub_field('card_image_support') ?>">
            </div>
          </div>
          <a href="<?php the_sub_field('') ?>"><?php the_sub_field('') ?></a>
        </li>
      <?php endwhile; else : endif;?>
    </ul>
  </div>
</section>

<!-- Section Text -->
<section class="s-text-support">
  <div class="container">
    <div class="left-text-support">
      <h2>Trending questions</h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('') ): while ( have_rows('') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('') ?>">
              <?php the_sub_field('') ?>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
    <div class="right-text-support">
      <h2>Featured Questions</h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('') ): while ( have_rows('') ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('') ?>">
              <?php the_sub_field('') ?>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </div>
</section>

<!-- Section Policy -->
<section class="s-policy-support">
  <div class="container">
    <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-invoice-support-page.svg" alt="icon policy" title="icon policy" class="policy">
    <h2><?php the_field('') ?></h2>
    <ul>
      <!-- Repeater Slide Cards --> 
      <?php if( have_rows('') ): while ( have_rows('') ) : the_row(); ?>
        <li>
          <p><?php the_sub_field('') ?></p>
        </li>
      <?php endwhile; else : endif;?>
    </ul>
    <a class="btn btn-primary" href="">
      Log in to your account
    </a>
  </div>
</section>
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>