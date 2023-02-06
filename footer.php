 <!-- Footer -->
 <footer class="footer">
    <div class="container">
      <!-- Top Section -->
      <div class="top-footer">
        <a href="<?php echo get_home_url(); ?>" class="logo-footer">
          <img src="<?php echo get_template_directory_uri()?>/assets/logo-onesure.svg" alt="logo one sure insurance" title="one sure insurance" loading="lazy">
        </a>
        <div class="share">
          <span>Check our social media</span>
          <ul>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-youtube.svg" alt="icon youtube" title="icon youtube" loading="lazy">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-linkedin.svg" alt="icon linkedin" title="icon linkedin" loading="lazy">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-facebook.svg" alt="icon facebook" title="icon facebook" loading="lazy">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-instagram.svg" alt="icon instagram" title="icon instagram" loading="lazy">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-twitter.svg" alt="icon twitter" title="icon twitter">
              </a>
            </li>
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
            <!-- <ul>
              <li><a href="#">Resources</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Claims</a></li>
              <li><a href="#">Renewals</a></li>
            </ul> -->
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
            <!-- <ul>
              <li><a href="#">Motor Trade Insurance</a></li>
              <li><a href="#">Motorbike Insurance</a></li>
              <li><a href="#">Van Insurance</a></li>
              <li><a href="#">HGV Insurance</a></li>
              <li><a href="#">Car Insurance</a></li>
            </ul> -->
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
            <!-- <ul>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Cookie Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Modern Slavery Act</a></li>
              <li><a href="#">Press</a></li>
            </ul> -->
          </div>
        </nav>
        <div class="item-contact">
          <strong>Contact Us</strong>
          <ul>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mail-footer.svg" alt="icon email footer" title="icon email footer" loading="lazy">
                <span>needhelp@company.com</span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-location-footer.svg" alt="icon location footer" title="icon location footer" loading="lazy">
                <span>Spitfire House, 142-154 Congleton Road, Talke, Stoke on Trent, ST7 1LX</span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-footer.svg" alt="icon footer clock" title="icon footer clock" loading="lazy">
                <span>Terms & Conditions</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Bottom Section -->
      <div class="bottom-footer">
        <p>© 2022 One Sure Insurance Limited. All Rights Reserved. One Sure Insurance Limited is authorised and regulated by the Financial Conduct Authority,under firm reference number 447730. You may check this on the FCA register by visiting theFCA website www.fca.org.uk/register</p>
        <button id="js-support" class="js-support" type="button">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-support-footer.svg" alt="icon support footer" title="icon support footer" loading="lazy">
          <span>Support</span>
        </button>
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
    AOS.init();
  </script>
  <?php wp_footer(); ?>
</body>
</html>
