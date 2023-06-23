<?php
  // Template name: Home
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
            <!-- === CARD INSURANCE 16 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck"></i>
                  <h3>Bulldozer Insurance</h3>
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
            <!-- === CARD INSURANCE 17 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck"></i>
                  <h3>Cherry Picker Insurance</h3>
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
            <!-- === CARD INSURANCE 18 === -->
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
                  <i class="fa-solid fa-truck"></i>
                  <h3>Crane Insurance</h3>
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
            <!-- === CARD INSURANCE 16 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck"></i>
                  <h3>Dump Truck Insurance</h3>
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
            <!-- === CARD INSURANCE 17 === -->
            <li>
              <div class="card-insurance-modal">
                <div class="card-header-modal">
                  <i class="fa-solid fa-truck"></i>
                  <h3>Mini Digger Insurance</h3>
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

  <!-- Section Hero -->
  <section class="s-hero">
    <div class="container">
      <div class="heading" data-aos="fade-right" data-aos-once="true">
        <h2><?php the_field('subtitle_section_hero') ?></h2>
        <h1><?php the_field('title_section_hero') ?></h1>
      </div>
      <ul class="card-hero">
        <li class="item-card" data-aos="fade-left" data-aos-delay="150" data-aos-once="true">
          <a href="<?php echo get_permalink(get_page_by_title('Motor Trade Insurance')) ?>">
            <i class="fa-solid fa-key fa-2x"></i>
            <span>Motor Trade</span>
          </a>
        </li>
        <li class="item-card" data-aos="fade-left" data-aos-delay="100" data-aos-once="true">
          <a href="<?php echo get_permalink(get_page_by_title('Van Insurance')) ?>">
            <i class="fa-solid fa-van-shuttle fa-2x"></i>
            <span>Van Insurance</span>
          </a>
        </li>
        <li class="item-card" data-aos="fade-left" data-aos-delay="50" data-aos-once="true">
          <a href="<?php echo get_permalink(get_page_by_title('HGV Insurance')) ?>">
            <i class="fa-solid fa-truck-front fa-2x"></i>
            <span>HGV & Lorry Insurance</span>
          </a>
        </li>
        <li class="item-card"  data-aos="fade-left" data-aos-delay="10" data-aos-once="true">
          <a href="<?php echo get_permalink(get_page_by_title('Car Insurance')) ?>">
            <i class="fa-solid fa-car fa-2x"></i>
            <span>Car Insurance</span>
          </a>
        </li>
        <li class="item-card" data-aos="fade-left" data-aos-delay="0" data-aos-once="true">
          <a href="#s-insurance">
            <i class="fa-solid fa-arrow-up-right-from-square fa-2x"></i>
            <span>Check Others</span>
          </a>
        </li>
      </ul>
      <!-- BUTTON LINKS TO THE FORM  -->
      <button class="btn btn-primary btn-get-quote js-open-modal ">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mail-footer.svg" alt="icon email" title="icon email" loading="lazy">
        GET A QUOTE
      </button>
    </div>
  </section>
    
  <!-- Section Trust pilot -->
  <section class="s-trustpilot">
    <div class="container">
      <!-- Section Company Logos -->
      <?php include(TEMPLATEPATH .'/includes/section-trustpilot-insurance.php') ?>
    </div>
  </section>

  <!-- Section Call Us Now -->
  <section class="s-call">
    <div class="container">
      <div class="title">
        <h2><?php the_field('title_section_call') ?></h2>
      </div>
      <div class="all-cards">
        <div class="card-01" data-aos="fade-up" data-aos-delay="0" data-aos-once="true">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-lg.svg" alt="icon phone" title="icon phone" loading="lazy">
          <div class="text">
            <h3><?php the_field('title_card_01_section_call') ?></h3>
            <p><?php the_field('phone_number_section_call') ?></p>
          </div>
        </div>
        <div class="card-02" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
          <h3><?php the_field('title_card_02_section_call') ?></h3>
          <button class="btn btn-primary-lg">
            <i class="fa-solid fa-phone"></i>
            CALL ME BACK
          </button>
        </div>
        <div class="card-03" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
          <h3><?php the_field('title_card_03_section_call') ?></h3>
          <button class="btn btn-primary-lg">
            <i class="fa-solid fa-envelope"></i>
            GET A QUOTE
          </button>
        </div>
      </div>
      
    </div>
  </section>

  <!-- Section Company Logos -->
  <?php include(TEMPLATEPATH .'/includes/section-company-logos.php') ?>

  <!-- Section Types of Insurance -->
  <section class="s-insurance" id="s-insurance">
    <div class="container">
      <div class="title">
        <h6 data-aos="fade-right" data-aos-once="true"><?php the_field('mobile_subtitle_section_all_types_insurance') ?></h6>
        <h2 data-aos="fade-right" data-aos-once="true"><?php the_field('title_section_all_types_insurance') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy" data-aos="zoom-in" data-aos-once="true">
        <p data-aos="fade-left" data-aos-once="true"><?php the_field('subtitle_section_all_types_insurance') ?></p>
      </div>
      <div class="all-cards-type" data-aos="fade-up" data-aos-once="true">
        <!-- Repeater Insurance Types with Load More functionality --> 
        <?php 
        if( have_rows('register_insurance_types') ):
          $total = count(get_field('register_insurance_types'));
          $count = 1;
          $number = 8;
          while ( have_rows('register_insurance_types') ) : the_row(); ?>
            <a href="<?php the_sub_field('page_insurance_type') ?>" class="card-type-default">
              <div class="image">
                <img src="<?php the_sub_field('image_card_insurance_type') ?>" alt="image type of insurance default" title="image type of insurance default" loading="lazy">
              </div>
              <div class="icon">
                <i class="<?php the_sub_field('icon_card_insurance_type')?>"></i>
              </div>
              <div class="info">
                <h4><?php the_sub_field('title_card_insurance_type') ?></h4>
                <p><?php the_sub_field('subtitle_card_insurance_type') ?></p>
                <span class="small-text">
                  <?php the_sub_field('description_card_insurance_type') ?>
                </span>
              </div>
            </a>
          <?php
          if ($count == $number){
            // we've shown the number, break out of loop
            break;
          } ?>
          <?php $count++; endwhile;
        else : endif;
        ?>
      </div>
      <a class="btn btn-outline load-more-button" id="cards-load-more" href="javascript: my_repeater_show_more();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>>
        <i class="fa-solid fa-arrows-rotate"></i>
        LOAD MORE
      </a>
    </div>
  </section>

  <!-- Section About Us -->
  <section class="s-about">
    <div class="container">
      <div class="title">
        <h6 data-aos="fade-right" data-aos-once="true"><?php the_field('mobile_subtitle_section_about_us') ?></h6>
        <h2 data-aos="fade-right" data-aos-once="true"><?php the_field('title_section_about_us') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy" data-aos="zoom-in" data-aos-once="true">
        <p data-aos="fade-left" data-aos-once="true"><?php the_field('subtitle_section_about_us') ?></p>
      </div>
      <div class="main">
        <div class="image" data-aos="fade-right" data-aos-once="true">
          <img src="<?php the_field('image_section_about_us') ?>" alt="about us image" title="about us image" loading="lazy" >
        </div>
        <div class="text" data-aos="fade-left"data-aos-once="true">
            <p><?php the_field('description_section_about_us') ?></p>
            <ul>
              <!-- Repeater Section About Us -->
              <?php if( have_rows('repeater_section_about_us') ): while ( have_rows('repeater_section_about_us') ) : the_row(); ?>
                <li>
                  <img src="<?php the_sub_field('icon_section_about_us') ?>" alt="icon checked" title="icon checked" loading="lazy">
                  <p><?php the_sub_field('text_section_about_us') ?></p>
                </li>
              <?php endwhile; else : endif;?>
            </ul>
            <p class="none"><?php the_field('second_description_section_about_us') ?></p>
            <a href="<?php echo get_permalink(get_page_by_title('About Us')) ?>">
              <button class="btn btn-primary">
                <i class="fa-solid fa-chevron-right"></i>
                Learn More
              </button> 
            </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Articles -->
  <section class="s-main-articles">
    <div class="container">
      <div class="title">
        <h6 data-aos="fade-right" data-aos-once="true"><?php the_field('mobile_subtitle_section_popular_articles') ?></h6>
        <h2 data-aos="fade-right" data-aos-once="true"><?php the_field('title_section_popular_articles') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" data-aos="zoom-in" data-aos-once="true">
        <p data-aos="fade-left" data-aos-once="true"><?php the_field('subtitle_section_popular_articles') ?></p>
      </div>
      <!-- All 3 Latest Blog Posts -->
      <div class="posts" data-aos="fade-up" data-aos-once="true">
          <?php 
            // the query
            $the_query = new WP_Query(array(
              'posts_per_page' => 3,
            )); 
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <!-- Card Post Blog Default --> 
              <a href="<?php the_permalink();?>" class="card-post-blog">
                <div class="image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="categories">
                  <!-- Category Section -->
                  <?php
                    $category = get_the_category($post -> ID); // return ID post
                    if(!empty($category)){
                      foreach($category as $nameCategory){
                        echo '<span>' .$nameCategory -> name.'</span>'; 
                      }
                    }
                  ?>
                </div>
                <div class="info">
                  <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-calendar-blog.svg" alt="icon calendar" title="icon calendar" loading="lazy">
                        <span><?php echo get_the_date('j, F'); ?></span>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-blog.svg" alt="icon clock" title="icon clock" loading="lazy">
                        <span>
                          <?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?>
                        </span>
                    </li>
                  </ul>
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_excerpt(); ?></p>
                  <span class="read-more">Read More</span>
                </div>
              </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p><?php __('No Recent Posts'); ?></p>
          <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Section CTA Desktop -->
  <div class="s-newsletter">
    <div class="container">
      <button class="large-cta js-open-modal-insurance" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
          <span><?php the_field('description_page_home_cta') ?></span>
          <h3><?php the_field('title_page_home_cta') ?></h3>
        </div>
        <a class="btn btn-primary">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
          get a quote
        </a>
      </button>
    </div>
  </div>
  
  <!-- === LOAD MORE FUNCTION == -->
  <script type="text/javascript">
    var my_repeater_field_post_id = <?php echo $post->ID; ?>;
    var my_repeater_field_offset = <?php echo $number + 1; ?>;
    var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
    var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
    var my_repeater_more = true;
    
    function my_repeater_show_more() {
      // make ajax request
      jQuery.post(
        my_repeater_ajax_url, {
          // this is the AJAX action we set up in PHP
          'action': 'my_repeater_show_more',
          'post_id': my_repeater_field_post_id,
          'offset': my_repeater_field_offset,
          'nonce': my_repeater_field_nonce
        },
        function (json) {
          // add content to container
          // this ID must match the containter 
          // you want to append content to
          jQuery('.all-cards-type').append(json['content']);
          // update offset
          my_repeater_field_offset = json['offset'];
          // see if there is more, if not then hide the more link
          if (!json['more']) {
            // this ID must match the id of the show more link
            jQuery('#cards-load-more').css('display', 'none');
          }
        },
        'json'
      );
    }
  </script>

<!-- End loop -->
<?php endwhile; else: endif; ?>
 
<!-- Include Footer -->
<?php get_footer(); ?>