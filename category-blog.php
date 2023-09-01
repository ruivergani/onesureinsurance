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
      <p><?php the_field('blog_hero_description_page_blog', 234) ?></p>
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
      <a href="<?php echo get_category_link(59); ?>" class="active">
          <i class="fa-solid fa-pager"></i>
          <p>Blog</p>
        </a>
      </li>
      <li>
        <a href="<?php echo get_category_link(15); ?>">
          <i class="fa-solid fa-circle-info"></i>
          <p>Support</p>
        </a>
      </li>
    </ul>
  </div>
</section>

<!-- Featured Blog Posts -->
<section class="s-featured-blog-posts">
  <div class="container">
    <div class="s-featured-blog-posts-title">
      <h2>Featured Blog Posts</h2>
    </div>
    <div class="s-featured-blog-posts-content">
      <div class="s-featured-blog-top">
        <div class="s-featured-blog-left">
          <?php   
            $tag = get_term_by('slug', 'featured', 'post_tag'); // Get the tag object by slug
            if ($tag) {
              $args = array(
                'post_type' => 'post',
                'order' => 'DESC',
                'tag__in' => $tag->term_id, // Use tag ID in 'tag__in' parameter
                'posts_per_page' => 1, // Display only one post
              );
              $the_query = new WP_Query($args);
            }
          ?>
          <?php if(isset($the_query) && $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- Card post LG -->
            <a href="<?php the_permalink(); ?>" class="card-blog-post-lg">
              <div class="image">
                <!-- WordPress image de destaque -->
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="info">
                <ul class="info-list">
                  <li>
                    <span><?php echo get_the_author_meta('display_name'); ?></span>
                  </li>
                  <li>
                    <span>•</span>
                  </li>
                  <li>
                    <span><?php echo get_the_date('j, F'); ?></span>
                  </li>
                </ul>
                <h6><?php the_title(); ?></h6>
                <p>
                  <?php
                    $description = get_field('description_post_general');
                    $char_limit = 150; // Change this value to your desired character limit
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
        <div class="s-featured-blog-right">
          <?php   
            $tag = get_term_by('slug', 'featured', 'post_tag'); // Get the tag object by slug
            if ($tag) {
              $args = array(
                'post_type' => 'post',
                'order' => 'DESC',
                'tag__in' => $tag->term_id, // Use tag ID in 'tag__in' parameter
                'posts_per_page' => 2, // Display only one post
                'offset' => 1,
              );
              $the_query = new WP_Query($args);
            }
          ?>
          <?php if(isset($the_query) && $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- Card post SM -->
            <a href="<?php the_permalink(); ?>" class="card-blog-post-sm">
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
                    $char_limit = 90; // Change this value to your desired character limit
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
      <div class="s-featured-blog-bottom">
        <?php   
          $tag = get_term_by('slug', 'featured', 'post_tag'); // Get the tag object by slug
          if ($tag) {
            $args = array(
              'post_type' => 'post',
              'order' => 'DESC',
              'tag__in' => $tag->term_id, // Use tag ID in 'tag__in' parameter
              'posts_per_page' => 1, // Display only one post
              'offset' => 3,
            );
            $the_query = new WP_Query($args);
          }
        ?>
        <?php if(isset($the_query) && $the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
          <!-- Card post LG -->
          <a href="<?php the_permalink(); ?>" class="card-blog-post-lg-horizontal">
            <div class="image">
              <!-- WordPress image de destaque -->
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="info">
              <ul class="info-list">
                <li>
                  <span><?php echo get_the_author_meta('display_name'); ?></span>
                </li>
                <li>
                  <span>•</span>
                </li>
                <li>
                  <span><?php echo get_the_date('j, F'); ?></span>
                </li>
              </ul>
              <h6><?php the_title(); ?></h6>
              <p>
                <?php
                  $description = get_field('description_post_general');
                  $char_limit = 300; // Change this value to your desired character limit
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
  </div>
</section>

<!-- Latest Blog Posts -->
<section class="s-latest-blog-posts">
  <div class="container">
    <div class="s-latest-blog-posts-title">
      <h2>Latest Blog Posts</h2>
    </div>
    <div class="s-latest-blog-posts-content">
      <div class="alm-listing">
        <?php   
          $category = get_queried_object();
          $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'cat' => $category->term_id,
            //'offset' => 4,
          );
          $the_query = new WP_Query($args);
        ?>
        <?php if(have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="card-category-blog">
            <div class="image">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="info">
              <h6><?php the_title(); ?></h6>
              <p>
                <?php
                  $description = get_field('description_post_general');
                  $char_limit = 90; // Change this value to your desired character limit
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
        <?php endwhile; else: endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Include Footer -->
<?php get_footer(); ?>