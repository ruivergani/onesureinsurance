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
      <!-- List all Tags by post -->
      <div class="side-category" data-aos="fade-right">
        <ul>
          <li>
            <a href="<?php echo get_template_directory_uri()?>">
              <p>Software & Systems</p>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
            </a>
          </li>
        </ul>
      </div>
      <!-- List all posts -->
      <div class="s-all" data-aos="fade-left">
          <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="6" scroll="false" transition_container="false" button_loading_label="Loading Posts..." button_done_label="No Posts remain..."]') ?>
      </div>
  </div>
</section>

<!-- Section Company Logos -->
<?php include(TEMPLATEPATH .'/includes/section-company-logos.php') ?>

<!-- Section Resources Blog -->
<section class="s-resources-blog">
  <div class="container">
    <div class="resources-blog-left">
      <h4><?php the_field('title_resources', $blog_page) ?></h4>
      <ul data-aos="fade-up">
        <!-- Repeater List --> 
        <?php if(have_rows('list_resources', $blog_page)): while (have_rows('list_resources', $blog_page)) : the_row(); ?>
          <li>
            <a href="<?php the_sub_field('link_to_the_page') ?>">
              <p><?php the_sub_field('text_resources_list') ?></p>
            </a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <a href="<?php the_field('link_cta', $blog_page) ?>" class="small-cta" data-aos="zoom-in">
        <div class="text">
            <h3><?php the_field('title_cta', $blog_page) ?></h3>
        </div>
        <button class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-arrow-forward-black.svg" alt="icon forward arrow black" title="icon forward arrow black">
            Check here
        </button>
      </a>
    </div>
    <div class="resources-blog-right" data-aos="fade-left">
      <h5><?php the_field('title_right_cta', $blog_page) ?></h5>
      <form class="form-subscribe">
        <input type="text" placeholder="Email address *" id="js-input-address">
        <button type="button" id="js-btn-address">
          Subscribe
        </button>
      </form>
      <ul>
        <!-- Repeater List --> 
        <?php if(have_rows('list_right_cta', $blog_page)): while (have_rows('list_right_cta', $blog_page)) : the_row(); ?>
          <li>
            <p>
              <?php the_sub_field('text_list_right_cta') ?>
            </p>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <p><?php the_field('description_right_cta', $blog_page) ?></p>
    </div>
  </div>
</section>

<!-- Include Footer -->
<?php get_footer(); ?>