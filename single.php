<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Create ranking of views post -->
<?php setPostViews(get_the_ID()); ?> 

  <!-- Section Breadcrumbs -->
  <section class="s-breadcrumbs">
    <div class="container">
        <ul>
            <li>
                <a href="<?php echo get_home_url(); ?>" aria-label="home page">
                    <i class="fa-solid fa-house"></i>
                </a>
            </li>
            <li>
              <!-- Category Section -->
              <?php
                $category = get_the_category($post -> ID); // return ID post
                if(!empty($category)){
                  foreach($category as $nameCategory){
                    echo '<a href="'.get_category_link($category[0]).'">' .$nameCategory -> name.'</a>'; 
                  }
                }
              ?>
            </li>
            <li>
                <a href="" aria-label="current page">
                  <?php the_title(); ?>
                </a>
            </li>
        </ul>
        <a href="<?php echo get_home_url(); ?>" class="back" aria-label="return page">
          <i class="fa-solid fa-chevron-left"></i>
          Go Back to Home
        </a>
    </div>
  </section>

  <!-- Section Information Post -->
  <section class="s-post-info">
    <div class="container">
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-user-blog.svg" alt="icon user blog" title="icon user blog">
          <span>
            <?php echo get_the_author_meta('display_name'); ?>
          </span>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-clock-blog-post.svg" alt="icon clock blog" title="icon clock blog">
          <span><?php echo get_the_date('j, F Y'); ?></span>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-timer-post.svg" alt="icon timer blog" title="icon timer blog">
          <span><?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?> of read</span>
        </li>
      </ul>
    </div>
  </section>

  <!-- Section Info Post Geral -->
  <section class="info-post-general">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="info-post-bottom">
        <!-- Left Content -->
        <div class="left-content">
          <div class="image">
            <img src="<?php the_field('image_post_details_highlight') ?>" alt="main image blog" title="main image blog">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet.
              Maecenas a nulla sit amet. </p>
          </div>
          <!-- Blog Structure based on WordPress -->
          <div class="content-post">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
            </blockquote>
            <h2>Ambulance covers of fire on insurance serving?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
            <h3>Lorem ipsum dolot sit amet, consectetur adispiscing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
            <h2>Lorem ipsum dolot sit amet?</h2>
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
            <ul>
              <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
              <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
              <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
              <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
            </ul>
            <h4>Conclusion</h4>
            <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
          </div>
        </div>
        <!-- Right Content -->
        <div class="right-content">
          <form action="" class="search">
            <input type="text" placeholder="Search for article or theme">
            <button type="submit">
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-search-input.svg" alt="icon search" title="icon search">
            </button>
          </form>
          <!-- Table of Content -->
          <div class="t-content">
            <h5 class="title-contents">Table of contents</h5>
            <ul class="js-nav-blog-post">
              <li>
                <a href="" class="active">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
            </ul>
            <button>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-share-arrow.svg" alt="icon share arrow" title="icon share arrow">
              <span>Share</span>
            </button>
          </div>
          <!-- Related Articles -->
          <div class="related-articles">
            <h5 class="title-articles">Related Articles</h5>
            <ul>
              <li>
                <a href="">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span>Ambulance covers of fire on insurance serving?</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>
 
<!-- Include Footer -->
<?php get_footer(); ?>