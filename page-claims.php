<?php
  // Template name: claims
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- === SECTION HERO === -->
  <section class="s-hero-claims">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/bg-hero-claims.jpg" alt="hero claims" title="hero claims">
    <h1 class="title-hero">Making a Claim</h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-claims">
    <div class="container">
      <a href="#claims-content">
        <p>Need assistance? Check our guides below</p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CARDS CLAIMS PAGE == -->
  <section class="s-claims-content" id="claims-content">
    <div class="container">
      <div class="card-left-claim">
        <div class="image-card-claim">
          <img src="<?php echo get_template_directory_uri()?>/assets/bg/card-claims-feedback.jpg" alt="card claims" title="card claims">
        </div>
        <div class="text-card-claim">
          <h2>Your Claims Feedback</h2>
          <p>Your claims feedback is important to us, it helps us to understand what’s important to you and how we’re delivering on our promises.</p>
          <p>Read broker and policyholder claims testimonials along with some claims case studies.</p>
          <a href="">
            <p>YOUR CLAIMS FEEDBACK</p>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-right-outline.svg" alt="icon right outline" title="icon right outline">
          </a>
        </div>
      </div>
      <div class="card-right-claim">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-comments.svg" alt="icon commets" title="icon comments">
        <h3>Tell us if you’re not happy with our service</h3>
        <p>We’ll do our best to put things right.</p>
        <!-- Action Button -->
        <button class="btn btn-primary btn-claims">
          Make a complaint
        </button>
      </div>
    </div>
  </section>

  <!-- === SECTION CONTENT FAQs === -->
  <section class="s-content-claims-faq">
    <div class="container">
      <div class="title-content-claims-faq">
        <h4>We’re here for you 24/7</h4>
      </div>
      <div class="content-highlight-claims-faq">
        <!-- === HIGHLIGHT ACCORDION FAQ === -->
        <div class="accordion-plus-claim">
          <div class="accordion-plus-item-claim">
            <h3>
              What is Lorem Ipsum?
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
            </h3>
            <div class="accordion-plus-content-claim">
              <h2>Lorem Ipsum is simply dummy text of the printing</h2>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
              <h2>Lorem Ipsum is simply dummy text of the printing</h2>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="all-claims-faq">
        <!-- === EACH ACCORDION FAQ === -->
        <div class="accordion-plus-claim">
          <div class="accordion-plus-item-claim js-accordion-plus-item">
            <h3>
              What is Lorem Ipsum?
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
            </h3>
            <div class="accordion-plus-content-claim">
              <h4>Lorem Ipsum is simply dummy text of the printing</h4>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
              <h4>Lorem Ipsum is simply dummy text of the printing</h4>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
            </div>
          </div>
        </div>
        <!-- === EACH ACCORDION FAQ === -->
        <div class="accordion-plus-claim">
          <div class="accordion-plus-item-claim js-accordion-plus-item">
            <h3>
              What is Lorem Ipsum?
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
            </h3>
            <div class="accordion-plus-content-claim">
              <h4>Lorem Ipsum is simply dummy text of the printing</h4>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
              <h4>Lorem Ipsum is simply dummy text of the printing</h4>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
            </div>
          </div>
        </div>
        <!-- === EACH ACCORDION FAQ === -->
        <div class="accordion-plus-claim">
          <div class="accordion-plus-item-claim js-accordion-plus-item">
            <h3>
              What is Lorem Ipsum?
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-accordion-claim-faq.svg" alt="arrow down" title="arrow down">
            </h3>
            <div class="accordion-plus-content-claim">
              <h4>Lorem Ipsum is simply dummy text of the printing</h4>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
              <h4>Lorem Ipsum is simply dummy text of the printing</h4>
              <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- === Section CTA Desktop === -->
  <div class="s-newsletter s-claims-newsletter">
    <div class="container">
      <a href="#" class="large-cta" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
            <span>We Are Confident Of Our Pricing That We Challenge You To Beat Our Guarantee</span>
            <h3>We Are Britains Cheapest Insurer* </h3>
        </div>
        <button class="btn btn-primary">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
          get a quote
        </button>
      </a>
    </div>
  </div>

  <!-- === Section Policy === -->
  <section class="s-policy-support">
    <div class="container">
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-invoice-support-page.svg" alt="icon policy" title="icon policy" class="policy">
      <h2>Log In To Your Account</h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('') ): while ( have_rows('') ) : the_row(); ?>
          <li>
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
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