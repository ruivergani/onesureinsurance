  </main>
  <!-- Footer -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <!-- Top Section -->
      <div class="top-footer">
        <a href="<?php echo get_home_url(); ?>" class="logo-footer">
          <img src="<?php echo get_template_directory_uri()?>/assets/logo-onesure.svg" alt="logo one sure insurance" title="one sure insurance" loading="lazy">
        </a>
        <div class="share">
          <span><?php the_field('title_social_media', 'options') ?></span>
          <ul>
            <?php if( have_rows('register_social_media', 'options') ): while ( have_rows('register_social_media', 'options') ) : the_row(); ?>
              <li>
                <a href="<?php the_sub_field('url_social_media') ?>">
                  <img src="<?php the_sub_field('icon_social_media') ?>" alt="icon youtube" title="icon youtube" loading="lazy">
                </a>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
        </div>
      </div>
      <!-- Main Navigation Section -->
      <div class="main-footer">
        <nav>
          <div class="item">
            <strong>Useful Links</strong>
            <!-- Dynamic Menu --> 
            <?php
              $args = array(
                'menu' => 'Footer Useful Links',
                'theme_location' => 'footer-useful-links',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
          <div class="item">
            <strong>Insurance Types</strong>
            <!-- Dynamic Menu --> 
            <?php
              $args = array(
                'menu' => 'Footer Insurance Types',
                'theme_location' => 'footer-insurance-types',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
          <div class="item">
            <strong>Corporate Info</strong>
            <!-- Dynamic Menu --> 
            <?php
              $args = array(
                'menu' => 'Footer Corporate Info',
                'theme_location' => 'footer-corporate',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
          <div class="item">
            <strong>About One Sure</strong>
            <!-- Dynamic Menu --> 
            <?php
              $args = array(
                'menu' => 'Footer About One Sure',
                'theme_location' => 'footer-about',
                'container' => false
              );
              wp_nav_menu( $args );
            ?>
          </div>
        </nav>
        <div class="item-contact">
          <strong>Contact Us</strong>
          <ul>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mail-footer.svg" alt="icon email footer" title="icon email footer" loading="lazy">
                <span><?php the_field('contact_us_email', 'options') ?></span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-location-footer.svg" alt="icon location footer" title="icon location footer" loading="lazy">
                <span><?php the_field('contact_us_address', 'options') ?></span>
              </a>
            </li>
            <li>
              <a href="<?php the_field('terms_and_conditions', 'options') ?>">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-footer.svg" alt="icon footer clock" title="icon footer clock" loading="lazy">
                <span>Terms and Conditions</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Bottom Section -->
      <div class="bottom-footer">
        <p><?php the_field('message_footer', 'options') ?></p>
        <a id="js-support" href="<?php the_field('link_footer', 'options') ?>" class="js-support" type="button">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-support-footer.svg" alt="icon support footer" title="icon support footer" loading="lazy">
          <span>Support</span>
        </a>
        <button id="js-btn-scroll-top" class="js-btn-scroll-top" type="button">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-up-footer.svg" alt="icon arrow up footer" title="icon arrow up footer" loading="lazy">
        </button>
      </div>
    </div>
  </footer>
  <!-- JavaScript Links -->
  <script src="<?php echo get_template_directory_uri()?>/js/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/all.js"></script>
  <script>
    AOS.init({
      disable: function() {
        var maxWidth = 800;
        return window.innerWidth < maxWidth;
      }
    });
  </script>
  <?php wp_footer(); ?>
</body>
</html>