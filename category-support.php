<!-- Include Header -->
<?php get_header(); ?>

<!-- === MODAL INSURANCE TYPES === -->
<?php echo do_shortcode('[merlin-dialler-modal-list]'); ?>

<!-- === FORM  === -->
<?php echo do_shortcode('[merlin-dialler-form]'); ?>

<!-- Section Hero Resources --> 
<section class="s-hero-resources">
  <div class="container">
    <div class="s-hero-resources-title">
      <h1><?php echo single_cat_title(); ?></h1>
      <p><?php the_field('support_hero_description_page_support', 234) ?></p>
    </div>
    <!-- Section Include Search Code Blog -->
    <?php include(TEMPLATEPATH . '/includes/section-search-blog.php') ?>
  </div>
</section>

<!-- Section Navigation Resources -->
<section class="s-navigation-resources">
  <div class="container">
    <ul class="s-navigation-resources-list">
      <li>
        <a href="<?php echo get_permalink(get_page_by_title('Resources')) ?>">
          <i class="fa-solid fa-book"></i>
          <p>All Resources</p>
        </a>
      </li>
      <li>
      <a href="<?php echo get_category_link(59); ?>">
          <i class="fa-solid fa-pager"></i>
          <p>Blog</p>
        </a>
      </li>
      <li>
        <a href="<?php echo get_category_link(15); ?>" class="active">
          <i class="fa-solid fa-circle-info"></i>
          <p>Support</p>
        </a>
      </li>
    </ul>
  </div>
</section>

<!-- Section Tags -->
<section class="s-navigation-tags">
  <div class="container">
    <ul class="js-nav-product" id="js-nav-product">
      <li class="js-nav-item-tag active">
        <a href="#section-frequently-asked-questions" class="anchor">
          Frequently Asked Questions
        </a>
      </li>
      <li class="js-nav-item-tag">
        <a href="#section-making-changes" class="anchor">
          Making Changes
        </a>
      </li>
      <li class="js-nav-item-tag">
        <a href="#section-contact" class="anchor">
          Contact
        </a>
      </li>
      <li class="js-nav-item-tag">
        <a href="#section-claims" class="anchor">
          Claims
        </a>
      </li>
      <li class="js-nav-item-tag">
        <a href="#section-fraud-prevention" class="anchor">
          Fraud Prevention
        </a>
      </li>
      <li class="js-nav-item-tag">
        <a href="#section-payments" class="anchor">
          Payments
        </a>
      </li>
      <li class="js-nav-item-tag">
        <a href="#section-my-details" class="anchor">
          My Details
        </a>
      </li>
      <li class="js-nav-item-tag">
        <a href="#section-accessibility-support" class="anchor">
          Accessibility & Support
        </a>
      </li>
    </ul>
    <!-- Mobile Configuration -->
    <div class="select-custom">
      <!-- item selected -->
      <button class="item-selected js-open-select-custom">
        <span>Select an <strong>item</strong></span>
      </button>
      <!-- Dropdown List -->
      <ul class="dropdown-select" id="dropdown-select">
        <li class="active">
          <a href="#section-frequently-asked-questions" class="anchor">
            Frequently Asked Questions
          </a>
        </li>
        <li class="">
          <a href="#section-making-changes" class="anchor">
            Making Changes
          </a>
        </li>
        <li class="">
          <a href="#section-contact" class="anchor">
            Contact
          </a>
        </li>
        <li class="">
          <a href="#section-claims" class="anchor">
            Claims
          </a>
        </li>
        <li class="">
          <a href="#section-fraud-prevention" class="anchor">
            Fraud Prevention
          </a>
        </li>
        <li class="">
          <a href="#section-payments" class="anchor">
            Payments
          </a>
        </li>
        <li class="">
          <a href="#section-my-details" class="anchor">
            My Details
          </a>
        </li>
        <li class="">
          <a href="#section-accessibility-support" class="anchor">
            Accessibility & Support
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Frenquently Asked Questions -->
<section class="s-template-support" id="section-frequently-asked-questions">
  <div class="container">
    <div class="s-template-support-title">
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="s-template-support-content">
      <?php   
        $tag = get_term_by('slug', 'frequently-asked-questions', 'post_tag'); // Get the tag object by slug
        if ($tag) {
          $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'tag__in' => $tag->term_id, // Use tag ID in 'tag__in' parameter
          );
          $the_query = new WP_Query($args);
        }
      ?>
      <?php if(isset($the_query) && $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- Card post SM -->
        <a href="<?php the_permalink(); ?>" class="card-blog-post-xs">
          <div class="image">
            <!-- WordPress image de destaque -->
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="info">
            <h6>
              <?php
                $the_title = get_the_title(); // get the title of the post
                $char_limit = 40; // Change this value to your desired character limit
                if (strlen($the_title) > $char_limit) {
                  $trimmed_the_title = substr($the_title, 0, $char_limit) . '...';
                  echo $trimmed_the_title;
                } else {
                  echo $the_title;
                }
              ?>
            </h6>
            <p>
              <?php
                $description = get_field('description_post_general');
                $char_limit = 51; // Change this value to your desired character limit
                if (strlen($description) > $char_limit) {
                  $trimmed_description = substr($description, 0, $char_limit) . '...';
                  echo $trimmed_description;
                } else {
                  echo $description;
                }
              ?>
            </p>
          </div>
        </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<!-- Making Changes -->
<section class="s-template-support" id="section-making-changes">
  <div class="container">
    <div class="s-template-support-title">
      <h2>Making Changes</h2>
    </div>
    <div class="s-template-support-content">
      <?php   
        $tag = get_term_by('slug', 'making-changes', 'post_tag'); // Get the tag object by slug
        if ($tag) {
          $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'tag__in' => $tag->term_id, // Use tag ID in 'tag__in' parameter
          );
          $the_query = new WP_Query($args);
        }
      ?>
      <?php if(isset($the_query) && $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- Card post SM -->
        <a href="<?php the_permalink(); ?>" class="card-blog-post-xs">
          <div class="image">
            <!-- WordPress image de destaque -->
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="info">
            <h6>
              <?php
                $the_title = get_the_title(); // get the title of the post
                $char_limit = 40; // Change this value to your desired character limit
                if (strlen($the_title) > $char_limit) {
                  $trimmed_the_title = substr($the_title, 0, $char_limit) . '...';
                  echo $trimmed_the_title;
                } else {
                  echo $the_title;
                }
              ?>
            </h6>
            <p>
              <?php
                $description = get_field('description_post_general');
                $char_limit = 51; // Change this value to your desired character limit
                if (strlen($description) > $char_limit) {
                  $trimmed_description = substr($description, 0, $char_limit) . '...';
                  echo $trimmed_description;
                } else {
                  echo $description;
                }
              ?>
            </p>
          </div>
        </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="s-template-support" id="section-contact">
  <div class="container">
    <div class="s-template-support-title">
      <h2>Contact</h2>
    </div>
    <div class="s-template-support-content">
      <?php   
        $tag = get_term_by('slug', 'contact', 'post_tag'); // Get the tag object by slug
        if ($tag) {
          $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'tag__in' => $tag->term_id, // Use tag ID in 'tag__in' parameter
          );
          $the_query = new WP_Query($args);
        }
      ?>
      <?php if(isset($the_query) && $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- Card post SM -->
        <a href="<?php the_permalink(); ?>" class="card-blog-post-xs">
          <div class="image">
            <!-- WordPress image de destaque -->
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="info">
            <h6>
              <?php
                $the_title = get_the_title(); // get the title of the post
                $char_limit = 40; // Change this value to your desired character limit
                if (strlen($the_title) > $char_limit) {
                  $trimmed_the_title = substr($the_title, 0, $char_limit) . '...';
                  echo $trimmed_the_title;
                } else {
                  echo $the_title;
                }
              ?>
            </h6>
            <p>
              <?php
                $description = get_field('description_post_general');
                $char_limit = 51; // Change this value to your desired character limit
                if (strlen($description) > $char_limit) {
                  $trimmed_description = substr($description, 0, $char_limit) . '...';
                  echo $trimmed_description;
                } else {
                  echo $description;
                }
              ?>
            </p>
          </div>
        </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<!-- Claims -->
<section class="s-template-support" id="section-claims">
  <div class="container">
    <div class="s-template-support-title">
      <h2>Claims</h2>
    </div>
    <div class="s-template-support-content">
      <?php   
        $tag = get_term_by('slug', 'claims', 'post_tag'); // Get the tag object by slug
        if ($tag) {
          $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'tag__in' => $tag->term_id, // Use tag ID in 'tag__in' parameter
          );
          $the_query = new WP_Query($args);
        }
      ?>
      <?php if(isset($the_query) && $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- Card post SM -->
        <a href="<?php the_permalink(); ?>" class="card-blog-post-xs">
          <div class="image">
            <!-- WordPress image de destaque -->
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="info">
            <h6>
              <?php
                $the_title = get_the_title(); // get the title of the post
                $char_limit = 40; // Change this value to your desired character limit
                if (strlen($the_title) > $char_limit) {
                  $trimmed_the_title = substr($the_title, 0, $char_limit) . '...';
                  echo $trimmed_the_title;
                } else {
                  echo $the_title;
                }
              ?>
            </h6>
            <p>
              <?php
                $description = get_field('description_post_general');
                $char_limit = 51; // Change this value to your desired character limit
                if (strlen($description) > $char_limit) {
                  $trimmed_description = substr($description, 0, $char_limit) . '...';
                  echo $trimmed_description;
                } else {
                  echo $description;
                }
              ?>
            </p>
          </div>
        </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<!-- Support -->
<section class="s-template-support" id="section-support-need">
  <div class="container">
    <div class="s-template-support-title">
      <h2>Can’t find the support you need?</h2>
    </div>
    <!-- === SECTION CARDS == -->
    <section class="s-template-support-content-cards">
      <div class="container">
        <div class="card-left-support">
          <div class="image-card-support">
            <img src="<?php the_field('image_card_support_left_page_support',234) ?>">
          </div>
          <div class="text-card-support">
            <h2><?php the_field('title_card_support_left_page_support', 234) ?></h2>
            <p><?php the_field('subtitle_01_card_support_left_page_support', 234) ?></p>
            <p><?php the_field('subtitle_02_card_support_left_page_support', 234) ?></p>
            <a href="tel:<?php the_field('phone_number_link_card_support_left_page_support', 234) ?>">
              <span>CALL US: </span>
              <p><?php the_field('phone_number_card_support_left_page_support', 234) ?></p>
            </a>
          </div>
        </div>
        <div class="card-right-support">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-comments.svg" alt="icon comments" title="icon comments">
          <h3><?php the_field('title_card_support_right_page_support', 234) ?></h3>
          <p><?php the_field('subtitle_card_support_right_page_support', 234) ?></p>
          <!-- Action Button -->
          <a class="btn btn-primary btn-supports" href="">
            SEND US A MESSAGE
          </a>
        </div>
      </div>
    </section>
  </div>
</section>

<!-- Include Footer -->
<?php get_footer(); ?>