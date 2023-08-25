<?php
// Template name: Resources
?>

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
      <h1><?php the_field('title_page_resources', 234) ?></h1>
      <p><?php the_field('subtitle_page_resources', 234) ?></p>
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
        <a href="<?php echo get_permalink(get_page_by_title('Resources')) ?>" class="active">
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
        <a href="<?php echo get_category_link(15); ?>">
          <i class="fa-solid fa-circle-info"></i>
          <p>Support</p>
        </a>
      </li>
    </ul>
  </div>
</section>

<!-- Section Main Resources -->
<section class="s-main-resources">
  <div class="container">
    <div class="s-main-resources-left">
      <h3>QUICK LINKS</h3>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('links_list_page_resources',234) ): while ( have_rows('links_list_page_resources',234) ) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_item_page_resources',234) ?>">
              <i class="fa-solid fa-arrow-right"></i>
              <p><?php the_sub_field('link_text_item_page_resources',234) ?></p>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
    <div class="s-main-resources-right">
      <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="6" scroll="false" transition_container="false" button_loading_label="Loading Posts..." button_done_label="No Posts remain..."]') ?>
    </div>
  </div>
</section>

<!-- Section Resources Blog -->
<section class="s-resources-blog">
  <div class="container">
    <div class="resources-blog-left">
      <h4>
        <?php the_field('title_resources', 234) ?>
      </h4>
      <ul>
        <!-- Repeater List -->
        <?php if (have_rows('list_resources', 234)):
          while (have_rows('list_resources', 234)):
            the_row(); ?>
            <li>
              <a href="<?php the_sub_field('link_to_the_page') ?>">
                <p>
                  <?php the_sub_field('text_resources_list') ?>
                </p>
              </a>
            </li>
          <?php endwhile; else: endif; ?>
      </ul>
    </div>
    <div class="resources-blog-right">
      <h5>
        <?php the_field('title_right_cta', 234) ?>
      </h5>
      <form class="form-subscribe">
        <input type="text" placeholder="Email address *" id="js-input-address">
        <button type="button" id="js-btn-address">
          Subscribe
        </button>
      </form>
      <ul>
        <!-- Repeater List -->
        <?php if (have_rows('list_right_cta', 234)):
          while (have_rows('list_right_cta', 234)):
            the_row(); ?>
            <li>
              <p>
                <?php the_sub_field('text_list_right_cta') ?>
              </p>
            </li>
          <?php endwhile; else: endif; ?>
      </ul>
      <p>
        <?php the_field('description_right_cta', 234) ?>
      </p>
    </div>
  </div>
</section>

<!-- Section CTA Desktop -->
<div class="s-newsletter">
  <div class="container">
    <span class="large-cta js-open-modal">
      <div class="text">
        <span><?php the_field('subtitle_cta_page_resources',234) ?></span>
        <h3><?php the_field('title_cta_page_resources',234) ?></h3>
      </div>
      <button class="btn btn-primary">
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward.svg" alt="icon forward arrow white" title="icon forward arrow white" loading="lazy">
          get a quote
      </button>
    </span>
  </div>
</div>

<!-- Include Footer -->
<?php get_footer(); ?>