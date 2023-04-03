<?php
  // Template name: faq
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Section Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- Section Content Main -->
  <section class="s-faq-content">
    <div class="container">
      <div class="table-of-content-faq">
        <h3>Help Centre</h3>
        <ul>
          <li>
            <a href="">
              <p>Software & Systems</p>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-side-category.svg" alt="arrow right" title="arrow right">
            </a>
          </li>
          <li>
            <a href="">
              <p>Software & Systems</p>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-side-category.svg" alt="arrow right" title="arrow right">
            </a>
          </li>
          <li>
            <a href="">
              <p>Software & Systems</p>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-side-category.svg" alt="arrow right" title="arrow right">
            </a>
          </li>
        </ul>
      </div>
      <div class="main-content-faq">
        <!-- Title main content FAQs -->
        <div class="title-main-content-faq">
          <h1>Frequently Asked Questions</h1>
          <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
          <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
        </div>
        <!-- All FAQs -->
        <div class="all-faqs-section">
          <!-- Each FAQ section -->
          <div class="faq-box">
            <h2>What is Lorem Ipsum?</h2>
            <div class="accordion-plus">
              <div class="accordion-plus-item">
                <h3>
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                </h3>
                <div class="accordion-plus-content">
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End of FAQ each -->
        </div>
      </div>
    </div>
  </section>
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>