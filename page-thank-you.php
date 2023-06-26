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
            <span>I WILL GET BACK TO YOU!</span>
            <h1>We Need More Information.</h1>
            <p>Don’t worry - we will call you soon. It won’t take long!</p>
        </div>
        <div class="s-thankyou-bullet">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/line-section-hero.jpg" alt="" class="line-right-hero">
          <div class="s-thankyou-bullet__list">
            <ul>
              <li>
                <p>Prepare.</p>
                <span>Prepare all the required information & documents.</span>
              </li>
              <li>
                <p>Talk to our team.</p>
                <span>We’ll call you from 01782 880300</span>
              </li> 
              <li>
                <p>Get insured today.</p>
                <span>Pick a policy, and we’ll sort everything. </span>
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