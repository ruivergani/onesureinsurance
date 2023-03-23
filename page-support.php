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
    <div class="title-support">
      <h1>Need help?</h1>
      <p>Don’t worry - we’re here for you! Seach for help by typing your question in the box, or scroll down to pick the topic you need.</p>
    </div>
    <!-- Section Include Search Code Blog -->
    <?php include(TEMPLATEPATH .'/includes/section-search-blog.php') ?> 
  </div>
</section>

<section class="s-rounded-cards">
  <div class="container">
    <ul>
      <li>
        <div class="cards-rounded">
          <div class="circle-rounded">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-car-rounded.svg" alt="car rounded icon" title="car rounded icon">
          </div>
        </div>
        <a href="">Car Insurance</a>
      </li>
      <li>
        <div class="cards-rounded">
          <div class="circle-rounded">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-lorry-rounded.svg" alt="lorry rounded icon" title="lorry rounded icon">
          </div>
        </div>
        <a href="">HGV & Lorry Insurance</a>
      </li>
      <li>
        <div class="cards-rounded">
          <div class="circle-rounded">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-scooter-rounded.svg" alt="scooter rounded icon" title="scooter rounded icon">
          </div>
        </div>
        <a href="">Scooter Insurance</a>
      </li>
      <li>
        <div class="cards-rounded">
          <div class="circle-rounded">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-van-rounded.svg" alt="van rounded icon" title="van rounded icon">
          </div>
        </div>
        <a href="">Van Insurance</a>
      </li>
      <li>
        <div class="cards-rounded">
          <div class="circle-rounded">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-house-rounded.svg" alt="home rounded icon" title="home rounded icon">
          </div>
        </div>
        <a href="">Home Insurance</a>
      </li>
      <li>
        <div class="cards-rounded">
          <div class="circle-rounded">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-motorcycle-rounded.svg" alt="motorbike rounded icon" title="motorbike rounded icon">
          </div>
        </div>
        <a href="">Motorbike Insurance</a>
      </li>
      <li>
        <div class="cards-rounded">
          <div class="circle-rounded">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-caravan-rounded.svg" alt="caravan rounded icon" title="caravan rounded icon">
          </div>
        </div>
        <a href="">Caravan Insurance</a>
      </li>
    </ul>
  </div>
</section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>