<?php
  // Template name: blog
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Include the Page Reference -->
<?php
  $blog_page = get_page_by_title('Blog');
?>
<!-- Section Hero -->
<section class="s-blog-hero">
  <div class="container">
      <div class="s-blog-hero-title">
          <h1><?php the_field('blog_section_hero_title', $blog_page) ?></h1>
          <p><?php the_field('blog_section_hero_subtitle', $blog_page) ?></p>
      </div>
      <div class="s-blog-hero-search">
          <form class="search-secondary">
              <input type="text" placeholder="Search name or code" id="js-input-search">
              <button type="button" id="js-btn-search">
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-search-input-blue.svg" alt="icon search" title="icon search">
              </button>
          </form>
      </div>
  </div>
</section>

<!-- Section Links -->
<section class="s-blog-links">
  <div class="container">
      <ul>
          <li data-aos="fade-up">
              <a href="<?php echo get_permalink(get_page_by_title('Guides')) ?>">
                  <i class="fa-solid fa-newspaper"></i>
                  <p>Check our Guides</p>
              </a>
          </li>
          <li data-aos="fade-up" data-aos-delay="50">
              <a href="<?php echo get_permalink(get_page_by_title('Renewals')) ?>">
                  <i class="fa-regular fa-message"></i>
                  <p>Find our Blog Resources</p>
              </a>
          </li>
          <li data-aos="fade-up" data-aos-delay="150">
              <a href="<?php echo get_permalink(get_page_by_title('FAQ')) ?>">
                  <i class="fa-solid fa-question"></i>
                  <p>Check our FAQs</p>
              </a>
          </li>
      </ul>
  </div>
</section>

<!-- Section Main Content -->
<section class="s-main-content">
  <div class="container">
      <!-- Main Tab Category -->
      <div class="side-category" data-aos="fade-right">
          <ul>
              <li>
                  <a href="<?php echo get_template_directory_uri()?>">
                      <p>Software & Systems</p>
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
                  </a>
              </li>
              <li>
                  <a href="<?php echo get_template_directory_uri()?>">
                      <p>Leading Service</p>
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
                  </a>
              </li>
              <li>
                  <a href="<?php echo get_template_directory_uri()?>">
                      <p>Tips & Templates</p>
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
                  </a>
              </li>
              <li>
                  <a href="<?php echo get_template_directory_uri()?>">
                      <p>Support Careers</p>
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
                  </a>
              </li>
              <li>
                  <a href="<?php echo get_template_directory_uri()?>">
                      <p>Scaling Service</p>
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
                  </a>
              </li>
              <li>
                  <a href="<?php echo get_template_directory_uri()?>">
                      <p>The Supportive</p>
                      <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
                  </a>
              </li>
          </ul>
      </div>
      <!-- List all posts -->
      <div class="s-all" data-aos="fade-left">
          <div class="all">
            <!-- Begin Posts --> 
            <?php
              $config = array(
                'posts_per_page' => '9',
                'post_type' => 'post',
                'order' => 'DESC'
              );
              $query_posts = new WP_Query($config);
            ?>
            <!-- Repeater to get the variable query_posts -->
            <?php if(have_posts()) : while ($query_posts -> have_posts()) : $query_posts -> the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="card-post-default">
                  <div class="image">
                      <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="info">
                      <!-- Category Section -->
                      <?php
                        $category = get_the_category($post -> ID); // return ID post
                        if(!empty($category)){
                          foreach($category as $nameCategory){
                            echo '<span class="categorie">' .$nameCategory -> name.'</span>'; 
                          }
                        }
                      ?>
                      <!-- End of Category Section -->
                      <h6><?php the_title(); ?></h6>
                      <ul>
                        <li>
                          <span><?php echo get_the_date('j, F'); ?></span>
                        </li>
                        <li>
                          <span><?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?> of read</span>
                        </li>
                      </ul>
                  </div>
              </a>
            <?php endwhile; else : endif; wp_reset_query(); ?>
            <!-- End Of Most Recent Posts -->
          </div>
          <button class="btn btn-outline" id="btn-outline">
              <i class="fa-solid fa-arrows-rotate"></i>
              LOAD MORE
          </button>
      </div>
  </div>
</section>

<!-- Section Logos Slide -->
<section class="s-logos" id="s-logos">
  <div class="container">
    <div class="title" data-aos="fade-right">
      <h6>Lorem ipsum is simply</h6>
      <h5>Our Accreditations</h5>
    </div>
    <!-- Swipper -->
    <div class="slide-logos" data-aos="fade-left">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card-image">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-company01.svg" alt="logo company" title="logo company" loading="lazy">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-image">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-company02.svg" alt="logo company" title="logo company" loading="lazy">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-image">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-company03.svg" alt="logo company" title="logo company" loading="lazy">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-image">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-company04.svg" alt="logo company" title="logo company" loading="lazy">
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!-- Section Resources Blog -->
<section class="s-resources-blog">
  <div class="container">
    <div class="resources-blog-left">
      <h4>Other Resources</h4>
      <ul data-aos="fade-up">
        <li>
          <a href="<?php echo get_template_directory_uri()?>">
            <p>How to Scale Customer Support Without Compromising Service</p>
          </a>
        </li>
        <li>
          <a href="<?php echo get_template_directory_uri()?>">
            <p>
              Lorem ipsum dolor sit amet consectetur. Ornare id augue fames dui varius vitae lacinia.
            </p>
          </a>
        </li>
        <li>
          <a href="<?php echo get_template_directory_uri()?>">
            <p>
              Lorem ipsum dolor sit amet consectetur. Ornare id augue fames dui varius vitae lacinia.
            </p>
          </a>
        </li>
      </ul>
      <a href="<?php echo get_template_directory_uri()?>" class="small-cta" data-aos="zoom-in">
        <div class="text">
            <h3>We Are Britains Cheapest Motor Trade Insurer* </h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward-black.svg" alt="icon forward arrow black" title="icon forward arrow black">
            Check here
        </button>
      </a>
    </div>
    <div class="resources-blog-right" data-aos="fade-left">
      <h5>Get our best content in your inbox (CTA)</h5>
      <form class="form-subscribe">
        <input type="text" placeholder="Email address *" id="js-input-address">
        <button type="button" id="js-btn-address">
          Subscribe
        </button>
      </form>
      <ul>
        <li>
          <p>
            Lorem ipsum dolor sit amet consectetur.
          </p>
        </li>
        <li>
          <p>
            Lorem ipsum dolor sit amet consectetur.
          </p>
        </li>
        <li>
          <p>
            Lorem ipsum dolor sit amet consectetur.
          </p>
        </li>
      </ul>
      <p>Lorem ipsum dolor sit amet consectetur. Ut etiam amet arcu donec placerat eu egestas amet eget.</p>
    </div>
  </div>
</section>

<!-- Include Footer -->
<?php get_footer(); ?>