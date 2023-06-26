<?php
  // Template name: modern-act-policy
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

 <!-- Section Breadcrumbs -->
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
            <!-- === CARD INSURANCE 01 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-key"></i>
                  <h3>Motor Trade Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 02 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-van-shuttle"></i>
                  <h3>Van Insurance </h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 03 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-motorcycle"></i>
                  <h3>Motorbike Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 04 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck-front"></i>
                  <h3>HGV &amp; Lorry Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 05 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-car"></i>
                  <h3>Car Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 06 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-house"></i>
                  <h3>Home Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 07 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-person-biking"></i>
                  <h3>Scooter Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 08 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-caravan"></i>
                  <h3>Caravan Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 09 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-suitcase"></i>
                  <h3>Travel Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 10 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-user-tie"></i>
                  <h3>Salon Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 11 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-utensils"></i>
                  <h3>Restaurant & Pub Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 12 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck"></i>
                  <h3>Valeters Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 13 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-brands fa-artstation"></i>
                  <h3>Tattoo Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 14 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-brands fa-print"></i>
                  <h3>Office Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 15 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-regular fa-clipboard"></i>
                  <h3>MOT Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="right-column">
            <!-- === CARD INSURANCE 01 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-taxi"></i>
                  <h3>Taxi Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 02 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck-fast"></i>
                  <h3>Courier Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 03 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-trailer"></i>
                  <h3>Motorhome Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 04 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-boxes-stacked"></i>
                  <h3>Goods Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 05 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-screwdriver-wrench"></i>
                  <h3>Special Types Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 06 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-road"></i>
                  <h3>Convicted Car Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 07 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-ticket"></i>
                  <h3>Convicted Van Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 08 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-gavel"></i>
                  <h3>Liability Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 09 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-van-shuttle"></i>
                  <h3>Fleet Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 10 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-shop"></i>
                  <h3>Shop Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 11 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-hotel"></i>
                  <h3>Hotel Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 12 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-gear"></i>
                  <h3>Mechanic Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 13 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck-moving"></i>
                  <h3>Plant & Machinery Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 14 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-user-check"></i>
                  <h3>Employer Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
                  <a href="" class="btn-call-us">
                    <i class="fa-solid fa-phone"></i>
                    <span>0800 081 5113</span>
                  </a>
                </div>
              </div>
            </li>
            <!-- === CARD INSURANCE 15 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-dumpster"></i>
                  <h3>Commercial Insurance</h3>
                </div>
                <div class="buttons-modal">
                  <button class="btn-get-quote js-open-modal">
                    <i class="fa-solid fa-envelope"></i>
                    <span>get a quote</span>
                  </button>
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

  <!-- === FORM  === -->
  <section class="modal">
    <div class="overlay">
    </div>
    <div class="box">
      <div class="box-content">
        <div class="box-content-title">
          <span>GET A QUOTE</span>
          <button class="close js-close">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-close-modal.svg" alt="close button"  title="close button">
          </button>
        </div>
        <h2>Find the right cover to suit you. Fill the form to get a quote!</h2>
        <div class="box-content-body">
          <!-- === FORM === -->
          <form action="" method="post">
            <div class="form-group">
              <label for="name">Name:</label><br>
              <input type="text" name="name" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="surname">Surname:</label><br>
              <input type="text" name="surname" id="surname" placeholder="Surname">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number:</label><br>
              <input type="number" name="phone" id="phone">
            </div>
            <div class="form-group-checkbox">
              <input type="checkbox"  name="conditions" id="checkbox_agree">
              <label for="checkbox_agree">
                <a href="<?php echo get_permalink(get_page_by_title('Terms of Business')) ?>">
                  Agree To All Terms & Conditions
                </a>
              </label>
            </div>
            <!-- === HIDDEN INPUT === -->
            <input type="hidden" name="utm_source" value="your-source-value">
            <input type="hidden" name="utm_medium" value="your-medium-value">
            <input type="hidden" name="utm_campaign" value="your-campaign-value">
            <!-- === END OF HIDDEN INPUT === -->
            <button class="btn btn-primary" type="submit">
              SEND
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="s-title">
    <div class="container">
      <h1>Modern Slavery Act</h1>
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
        <h5 class="table-of-content-title">Table of Content</h5>
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
    </div>
  </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>