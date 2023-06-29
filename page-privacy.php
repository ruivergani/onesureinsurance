<?php
  // Template name: privacy
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

 <!-- Section Breadcrumbs -->
 <?php breadcrumbs(); ?>

  <!-- === MODAL INSURANCE TYPES === -->
  <?php echo do_shortcode('[merlin-dialler-modal-list]'); ?> 

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>

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
      <h1>Privacy Notice and Cookie Policy</h1>
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
        <h5 class="table-of-content-title">Policy Content</h5>
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
      <!-- Repeater Card Download --> 
      <?php if( have_rows('card_download') ): while ( have_rows('card_download') ) : the_row(); ?>
        <!-- Card Download PDF -->
        <div class="card-download">
          <div class="download-text">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-file.svg" alt="icon file" title="icon file">
            <p><?php the_sub_field('title_card_download'); ?></p>
          </div>
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-download.svg" alt="icon download" title="icon download" class="icon-download">
        </div>
      <?php endwhile; else : endif;?>
    </div>
  </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>