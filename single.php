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
            <!-- The Excerpt Message -->
            <p><?php the_excerpt(); ?></p>
          </div>
          <!-- Blog Structure based on WordPress -->
          <div class="content-post">
            <?php the_content(); ?>
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
            <!-- Top Navigation -->
            <ul class="js-nav-blog-post">
            </ul>
            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
              <button>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-share-arrow.svg" alt="icon share arrow" title="icon share arrow">
                <span>Share</span>
              </button>
            </a>
          </div>
          <!-- Related Articles -->
          <?php
            $categories = get_the_category();
            $args = array(
              'post_type' => 'post',
              'order' => 'DESC',
              'posts_per_page' => 3,
              'cat' => $categories[0]->cat_ID, // return the first category of the post
              'post__not_in' => array(get_the_ID()),
            );
            $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <div class="related-articles">
              <h5 class="title-articles">Related Articles</h5>
              <ul>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <span><?php the_title(); ?></span>
                    </a>
                  </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>
 
<!-- Include Footer -->
<?php get_footer(); ?>