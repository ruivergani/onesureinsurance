<?php
  // Template name: car-insurance-support
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<!-- Modal Support Page -->
<section class="modal-support">
  <div class="overlay-support">
  </div>
  <div class="box-support">
    <button class="close-support js-close-support">
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-modal.svg" alt="close button"  title="close button">
    </button>
    <span>GET IN TOUCH WITH US</span>
    <h2>Emergency Contact</h2>
    <p class="subtitle-p">If you need 24/7 emergency help at the roadside:</p>
    <ul>
      <li>
        <p>After an accident in the UK - Call us on</p>
        <span>0800 081 5113</span>
      </li>
      <li>
        <p>Outside of the UK</p>
        <span>0800 081 5113</span>
      </li>
      <li>
        <p>If your car has broken down</p>
        <span>0800 081 5113</span>
      </li>
    </ul>
  </div>
</section>

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
<section class="s-squared-cards">
  <div class="container">
    <ul>
      <li>
        <div class="cards-squared">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-support-page.svg" alt="icon phone" title="icon phone">
          <a href="" class="js-open-modal-support">Emergency Contact</a>
        </div>
      </li>
      <li>
        <div class="cards-squared">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-newspaper-support.svg" alt="icon policy newspaper" title="icon policy newspaper">
          <a href="">All abour your Policy</a>
        </div>
      </li>
      <li>
        <div class="cards-squared">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-wrench-support.svg" alt="icon wrench" title="icon wrench">
          <a href="">Change or renew your policy</a>
        </div>
      </li>
      <li>
        <div class="cards-squared">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-policy-support.svg" alt="icon policy" title="icon policy">
          <a href="">Our benefits and optional extras</a>
        </div>
      </li>
      <li>
        <div class="cards-squared">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-pen-support.svg" alt="icon pen" title="icon pen">
          <a href="">Acidents and making claim</a>
        </div>
      </li>
      <li>
        <div class="cards-squared">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-handshake-support.svg" alt="icon handshake" title="icon handshake">
          <a href="">Extra Support</a>
        </div>
      </li>
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