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
        <!-- Navigation FAQs -->
        <ul class="js-nav-faq-post">
        </ul>
      </div>
      <div class="main-content-faq">
        <!-- Title main content FAQs -->
        <div class="title-main-content-faq">
          <h1>Frequently Asked Questions</h1>
          <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
          <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
        </div>
        <div class="mobile-faq-tags">
          <!-- Mobile Configuration -->
          <div class="select-custom">
            <!-- item selected -->
            <button class="item-selected js-open-select-custom">
              <span>Select an </span>
              <strong>item</strong>
            </button>
            <!-- Dropdown List -->
            <ul class="dropdown-select">
              <li>
                <a href="" class="active">
                  <p>teste</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- All FAQs -->
        <div class="all-faqs-section">
          <!-- Each FAQ section -->
          <div class="faq-box">
            <h2>What is Lorem Ipsum?</h2>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item" >
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
                </h3>
                <div class="accordion-plus-content">
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
                </div>
              </div>
            </div>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item">
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
                </h3>
                <div class="accordion-plus-content">
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
                </div>
              </div>
            </div>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item">
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
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
          <!-- Each FAQ section -->
          <div class="faq-box">
            <h2>What is Lorem Ipsum?</h2>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item" >
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
                </h3>
                <div class="accordion-plus-content">
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
                </div>
              </div>
            </div>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item">
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
                </h3>
                <div class="accordion-plus-content">
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
                </div>
              </div>
            </div>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item">
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
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
          <!-- Each FAQ section -->
          <div class="faq-box">
            <h2>What is Lorem Ipsum?</h2>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item" >
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
                </h3>
                <div class="accordion-plus-content">
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
                </div>
              </div>
            </div>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item">
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
                </h3>
                <div class="accordion-plus-content">
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>Need some help with your order or got a burning question that you need answered pronto? Just click on one of the sections below to find the answer...</p>
                  <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                  <p>If you still can’t find an answer to your question, why not try our virtual assistant? Click the icon in the bottom right corner of your screen to start chatting! Alternatively, you can give our Customer Experience Team a call on +44 (0)330 124 0000 or drop us an email at customerservices@onesureinsurance.co.uk</p>
                </div>
              </div>
            </div>
            <!-- Individual FAQ question -->
            <div class="accordion-plus">
              <div class="accordion-plus-item js-accordion-plus-item">
                <h3>
                  <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-right-arrow-accordion.svg" alt="right arrow" title="right arrow" class="accordion-plus-arrow">
                  <span>Lorem Ipsum is simply dummy text of the printing?</span>
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

  <!-- Section FAQ Links -->
  <div class="s-faq-link">
    <div class="container">
      <div class="f-top">
        <div class="f-item">
          <h4>Trending questions</h4>
          <ul>
            <li>
              <a href="">
              How do I contact One Sure Insurance?
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
          </ul>
        </div>
        <div class="f-item">
          <h4>Trending questions</h4>
          <ul>
            <li>
              <a href="">
                How do I contact One Sure Insurance?
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
          </ul>
        </div>
        <div class="f-item">
          <h4>Trending questions</h4>
          <ul>
            <li>
              <a href="">
                How do I contact One Sure Insurance?
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="f-bottom">
        <div class="f-item">
          <h4>Trending questions</h4>
          <ul>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
          </ul>
        </div>
        <div class="f-item">
          <h4>Trending questions</h4>
          <ul>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
          </ul>
        </div>
        <div class="f-item">
          <h4>Trending questions</h4>
          <ul>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
            <li>
              <a href="">
                Lorem ipsum dolor sit.
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Section Newsletter -->
  <section class="s-newsletter-faq">
    <div class="container">
      <h3>Well, hello there!</h3>
      <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
      <span>Enter your email address</span>
      <form class="form-newsletter">
        <input type="text" placeholder="Email address *" id="js-input-newsletter">
        <button type="button" id="js-btn-newsletter">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-right-white.svg" alt="arrow right white" title="arrow right white">
        </button>
      </form>
    </div>
  </section>
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>