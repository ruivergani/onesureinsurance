<?php
  // Template name: Home
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- === MODAL INSURANCE TYPES === -->
  <?php echo do_shortcode('[merlin-dialler-modal-list]'); ?> 

  <!-- === FORM  === -->
  <?php echo do_shortcode('[merlin-dialler-form]'); ?>

  <!-- Section Hero -->
  <section class="s-hero">
    <div class="container">
      <div class="heading">
        <h2><?php the_field('subtitle_section_hero') ?></h2>
        <h1><?php the_field('title_section_hero') ?></h1>
      </div>
      <ul class="card-hero">
        <li class="item-card">
          <a href="<?php echo get_permalink(get_page_by_title('Motor Trade Insurance')) ?>">
            <i class="fa-solid fa-key fa-2x"></i>
            <span>Motor Trade</span>
          </a>
        </li>
        <li class="item-card">
          <a href="<?php echo get_permalink(get_page_by_title('Van Insurance')) ?>">
            <i class="fa-solid fa-van-shuttle fa-2x"></i>
            <span>Van Insurance</span>
          </a>
        </li>
        <li class="item-card">
          <a href="<?php echo get_permalink(get_page_by_title('HGV Insurance')) ?>">
            <i class="fa-solid fa-truck-front fa-2x"></i>
            <span>HGV & Lorry Insurance</span>
          </a>
        </li>
        <li class="item-card">
          <a href="<?php echo get_permalink(get_page_by_title('Car Insurance')) ?>">
            <i class="fa-solid fa-car fa-2x"></i>
            <span>Car Insurance</span>
          </a>
        </li>
        <li class="item-card">
          <a href="#s-insurance">
            <i class="fa-solid fa-arrow-up-right-from-square fa-2x"></i>
            <span>Find Your Insurance</span>
          </a>
        </li>
      </ul>
      <!-- BUTTON LINKS TO THE FORM  -->
      <button class="btn btn-primary btn-get-quote js-open-modal-insurance" aria-label="Get Quote Button">
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
        <div class="card-01">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-lg.svg" alt="icon phone" title="icon phone" loading="lazy">
          <div class="text">
            <h3><?php the_field('title_card_01_section_call') ?></h3>
            <a href="<?php the_field('phone_number_section_call_text') ?>" class="p_call">
              <p><?php the_field('phone_number_section_call') ?></p>
            </a>
          </div>
        </div>
        <div class="card-03">
          <h3><?php the_field('title_card_03_section_call') ?></h3>
          <button class="btn btn-primary-lg js-open-modal-insurance" aria-label="Get Quote Button">
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
        <h6><?php the_field('mobile_subtitle_section_all_types_insurance') ?></h6>
        <h2><?php the_field('title_section_all_types_insurance') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy">
        <p><?php the_field('subtitle_section_all_types_insurance') ?></p>
      </div>
      <div class="all-cards-type">
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
        <h6><?php the_field('mobile_subtitle_section_about_us') ?></h6>
        <h2><?php the_field('title_section_about_us') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border" loading="lazy">
        <p><?php the_field('subtitle_section_about_us') ?></p>
      </div>
      <div class="main">
        <div class="image">
          <img src="<?php the_field('image_section_about_us') ?>" alt="about us image" title="about us image" loading="lazy" >
        </div>
        <div class="text">
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
            <a href="<?php echo get_permalink(get_page_by_title('About Us')) ?>" title="about us link" alt="about us link" aria-label="About Us">
              <button class="btn btn-primary" aria-label="About Us Button">
                <i class="fa-solid fa-chevron-right"></i>
                About Us
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
        <h6><?php the_field('mobile_subtitle_section_popular_articles') ?></h6>
        <h2><?php the_field('title_section_popular_articles') ?></h2>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-border.webp" alt="icon border" title="icon border">
        <p><?php the_field('subtitle_section_popular_articles') ?></p>
      </div>
      <!-- All 3 Latest Blog Posts -->
      <div class="posts">
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
      <button class="large-cta js-open-modal-insurance" aria-label="Get Quote Button">
        <div class="text">
          <span><?php the_field('description_page_home_cta') ?></span>
          <h3><?php the_field('title_page_home_cta') ?></h3>
        </div>
        <a class="btn btn-primary" aria-label="Get Quote Button" >
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