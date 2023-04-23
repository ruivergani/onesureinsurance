<!-- Include Header -->
<?php get_header(); ?>

<!-- Section Hero -->
<section class="s-blog-hero">
  <div class="container">
      <div class="s-blog-hero-title">
          <h1>Our <?php echo single_cat_title(); ?> Articles</h1>
          <p><?php the_field('blog_section_hero_subtitle', 234) ?></p>
      </div>
      <!-- Section Include Search Code Blog -->
      <?php include(TEMPLATEPATH .'/includes/section-search-blog.php') ?>
  </div>
</section>

<!-- Section Links -->
<section class="s-blog-links">
  <div class="container">
      <ul>
          <li data-aos="fade-up" data-aos-once="true">
            <a href="<?php echo get_permalink(234) ?>">
                <i class="fa-solid fa-border-all"></i>
                <p>All Posts</p>
            </a>
          </li>
          <?php
            if(is_category('Guides')){
          ?>
            <li data-aos="fade-up" data-aos-once="true" class="active">
              <a href="<?php echo get_category_link('16'); ?>">
                  <i class="fa-solid fa-newspaper"></i>
                  <p>Check our Guides</p>
              </a>
            </li>
            <li data-aos="fade-up" data-aos-once="true" data-aos-delay="50">
              <a href="<?php echo get_category_link('15'); ?>">
                  <i class="fa-regular fa-message"></i>
                  <p>Find our Blog Articles</p>
              </a>
            </li>
          <?php } ?>

          <?php
            if(is_category('Blog')){
          ?>
            <li data-aos="fade-up" data-aos-once="true">
              <a href="<?php echo get_category_link('16'); ?>">
                  <i class="fa-solid fa-newspaper"></i>
                  <p>Check our Guides</p>
              </a>
            </li>
            <li data-aos="fade-up" data-aos-delay="50" data-aos-once="true" class="active">
              <a href="<?php echo get_category_link('15'); ?>">
                  <i class="fa-regular fa-message"></i>
                  <p>Find our Blog Articles</p>
              </a>
            </li>
          <?php } ?>
          <li data-aos="fade-up" data-aos-delay="150" data-aos-once="true">
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
      <!-- Section Include Side Tags -->
      <?php include(TEMPLATEPATH .'/includes/section-side-tags.php') ?>
      <!-- List all posts -->
      <div class="s-all" data-aos="fade-left" data-aos-once="true">
          <div class="alm-listing">
            <?php   
                $category = get_queried_object();
                $args = array(
                    'post_type' => 'post',
                    'order' => 'DESC',
                    'cat' => $category->term_id
                );
                $the_query = new WP_Query($args);
            ?>
            <?php if(have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
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
            <?php endwhile; else: endif; ?>
          </div>
      </div>
  </div>
</section>

<!-- Section Company Logos -->
<?php include(TEMPLATEPATH .'/includes/section-company-logos.php') ?>

<!-- Section Resources Blog -->
<section class="s-resources-blog">
  <div class="container">
    <div class="resources-blog-left">
      <h4><?php the_field('title_resources', 234) ?></h4>
      <ul data-aos="fade-up" data-aos-once="true">
        <!-- Repeater List --> 
        <?php if(have_rows('list_resources', 234)): while (have_rows('list_resources', 234)) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_to_the_page') ?>">
              <p><?php the_sub_field('text_resources_list') ?></p>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <a href="<?php the_field('link_cta', 234) ?>" class="small-cta" data-aos="zoom-in" data-aos-once="true">
        <div class="text">
            <h3><?php the_field('title_cta', 234) ?></h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward-black.svg" alt="icon forward arrow black" title="icon forward arrow black">
            Check here
        </button>
      </a>
    </div>
    <div class="resources-blog-right" data-aos="fade-left" data-aos-once="true">
      <h5><?php the_field('title_right_cta', 234) ?></h5>
      <form class="form-subscribe">
        <input type="text" placeholder="Email address *" id="js-input-address">
        <button type="button" id="js-btn-address">
          Subscribe
        </button>
      </form>
      <ul>
        <!-- Repeater List --> 
        <?php if(have_rows('list_right_cta', 234)): while (have_rows('list_right_cta', 234)) : the_row(); ?>
          <li>
            <p>
              <?php the_sub_field('text_list_right_cta') ?>
            </p>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <p><?php the_field('description_right_cta', 234) ?></p>
    </div>
  </div>
</section>

<!-- Include Footer -->
<?php get_footer(); ?>