<?php
  // Template name: Blog
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Section Hero -->
<section class="s-blog-hero">
  <div class="container">
      <div class="s-blog-hero-title">
        <h1><?php the_field('blog_section_hero_title', 234) ?></h1>
        <p><?php the_field('blog_section_hero_subtitle', 234) ?></p>
      </div>
      <!-- Section Include Search Code Blog -->
      <?php include(TEMPLATEPATH .'/includes/section-search-blog.php') ?>
  </div>
</section>

<!-- Section Include Links Blog -->
<?php include(TEMPLATEPATH .'/includes/section-links-blog-index.php') ?>

<!-- Section Main Content -->
<section class="s-main-content">
  <div class="container">
      <!-- Section Include Side Tags -->
      <?php include(TEMPLATEPATH .'/includes/section-side-tags.php') ?>
      <!-- List all posts -->
      <div class="s-all" data-aos="fade-left">
        <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="9" scroll="false" transition_container="false" button_loading_label="Loading Posts..." button_done_label="No Posts remain..."]') ?>
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
      <ul data-aos="fade-up">
        <!-- Repeater List --> 
        <?php if(have_rows('list_resources', 234)): while (have_rows('list_resources', 234)) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_to_the_page') ?>">
              <p><?php the_sub_field('text_resources_list') ?></p>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <a href="<?php the_field('link_cta', 234) ?>" class="small-cta" data-aos="zoom-in">
        <div class="text">
            <h3><?php the_field('title_cta', 234) ?></h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward-black.svg" alt="icon forward arrow black" title="icon forward arrow black">
            Check here
        </button>
      </a>
    </div>
    <div class="resources-blog-right" data-aos="fade-left">
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