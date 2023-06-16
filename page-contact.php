<?php
  // Template name: contact
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- === Section Breadcrumbs === -->
  <?php breadcrumbs(); ?>

  <!-- === MODAL INSURANCE TYPES === -->
  <section class="modal-list-insurance">
    <div class="overlay">
    </div>
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- === HEADER MODAL === -->
        <div class="modal-header">
          <button class="close js-close-insurance">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-modal.svg" alt="close button"  title="close button">
          </button>
          <h2 class="modal-title">Select an Insurance Type!</h2>
        </div>
        <!-- === BODY MODAL === -->
        <div class="modal-body">
          <ul class="left-column">
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-car"></i>
                  <h3>Motor Trade Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-van-shuttle"></i>
                  <h3>Van Insurance </h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-motorcycle"></i>
                  <h3>Motorbike Insurance 01</h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-motorcycle"></i>
                  <h3>Motorbike Insurance 02</h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="right-column">
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck-front"></i>
                  <h3>HGV & Lorry Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-house"></i>
                  <h3>Home Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-person-biking"></i>
                  <h3>Scooter Insurance 01</h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-person-biking"></i>
                  <h3>Scooter Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <a href="" class="btn-get-quote">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </a>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- === SECTION HERO === -->
  <section class="s-hero-contact">
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/contact-us-hero.jpg" alt="contact us image" title="contact us image">
    <h1 class="title-hero">Contact Us</h1>
  </section>

  <!-- === SECTION LINK == -->
  <section class="s-breadcrumbs-claims">
    <div class="container">
      <a href="#s-content-contact">
        <p>Need assistance? Send us a message</p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-down-keyboard.svg" alt="icon arrow down" title="arrow down">
      </a>
    </div>
  </section>

  <!-- === SECTION CONTENT == -->
  <section class="s-content-contact" id="s-content-contact">
    <div class="container">
      <div class="s-content-contact-left">
        <h2>Contact Us</h2>
        <ul>
          <li>
            <a href="" class="active">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Customer Service</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Renewals</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Sales Department</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-contact.svg" alt="arrow right" title="arrow right">
              <p>Claims</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="s-content-contact-right">
        <div class="form-contact">
          <!-- === FORM === -->
          <form action="" method="post">
            <div class="form-group">
              <label for="reference_number">Your Reference Number</label><br>
              <input type="number" name="reference_number" id="reference_number" placeholder="Type here..." required>
            </div>
            <div class="form-group">
              <label for="name_contact">Your Name</label><br>
              <input type="text" name="name_contact" id="name_contact" required>
            </div>
            <div class="form-group">
              <label for="company_name">Company Name</label><br>
              <input type="text" name="company_name" id="company_name" required>
            </div>
            <div class="form-group">
              <label for="landline_phone_number_contact">Landline Phone Number</label><br>
              <input type="phone" name="landline_phone_number_contact" id="landline_phone_number_contact">
            </div>
            <div class="form-group">
              <label for="mobile_phone_number_contact">Mobile Phone Number </label><br>
              <input type="phone" name="mobile_phone_number_contact" id="mobile_phone_number_contact">
            </div>
            <div class="form-group">
              <label for="mobile_phone_number_contact">Mobile Phone Number </label><br>
              <input type="phone" name="mobile_phone_number_contact" id="mobile_phone_number_contact" required>
            </div>
            <div class="form-group">
              <label for="message_contact">Message </label><br>
              <textarea id="message_contact" name="message_contact" rows="5">
              </textarea>
            </div>
            <!-- === END OF HIDDEN INPUT === -->
            <button class="btn btn-primary" type="submit">
              SUBMIT DETAILS
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>