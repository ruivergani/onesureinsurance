<?php
// Template name: Author
?>
<!-- Include Header -->
<?php get_header(); ?>

<!-- === MODAL INSURANCE TYPES === -->
<?php echo do_shortcode('[merlin-dialler-modal-list]'); ?>

<!-- === FORM  === -->
<?php echo do_shortcode('[merlin-dialler-form]'); ?>

<!-- Section Breadcrumbs -->
<section class="s-breadcrumbs">
  <div class="container">
    <ul>
      <li>
        <a href="<?php echo get_home_url(); ?>" aria-label="home page">
          <i class="fa-solid fa-house"></i>
        </a>
      </li>
      <?php
      // Get the author object
      $author = get_queried_object();
      // Get the author archive URL
      $author_archive_url = get_author_posts_url($author->ID);
      ?>
      <li>
        <a href="<?php echo esc_url($author_archive_url); ?>" aria-label="current page">
          <?php echo $author->display_name; ?>
        </a>
      </li>
    </ul>
    <a href="<?php echo get_home_url(); ?>" class="back" aria-label="return page">
      <i class="fa-solid fa-chevron-left"></i>
      Go Back to Home
    </a>
  </div>
</section>

<!-- Section Author -->
<section class="s-author">
  <div class="container">
    <img src="<?php echo get_template_directory_uri() ?>/assets/bg/ellipse.png" alt="" class="s-author-image">
    <div class="s-author-right">
      <h1>Chris Lear</h1>
      <span>Managing Director</span>
      <ul>
        <li>
          <a href="">
            <i class="fa-brands fa-square-twitter"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fa-brands fa-square-facebook"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fa-solid fa-up-right-from-square"></i>
          </a>
        </li>
      </ul>
      <p>Lorem ipsum dolor sit amet consectetur. Eget potenti nibh pretium id risus tellus blandit. Morbi donec nisi et
        sapien. Condimentum vestibulum convallis accumsan orci convallis. Lorem ipsum dolor sit amet consectetur. Eget
        potenti nibh pretium id risus tellus blandit. Morbi donec nisi et sapien. Condimentum vestibulum convallis
        accumsan orci convallis.</p>
    </div>
  </div>
</section>

<!-- Section Navbar -->
<section class="s-author-navbar">
  <div class="container">
    <h2>All Stories by Chris Lear</h2>
    <!-- Mobile Configuration -->
    <div class="select-custom">
      <!-- item selected -->
      <button class="item-selected js-open-select-custom">
        <span>Other Authors</span>
      </button>
      <!-- Dropdown List -->
      <ul class="dropdown-select" id="dropdown-select">
        <li class="active">
          <a href="">
            <p>Overview</p>
          </a>
        </li>
        <li>
          <a href="">
            <p>Cover Options</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Section Author Posts -->
<section class="s-author-posts">
  <div class="container">
    <?php
    $author_name = 'admin-onesure'; // Replace with the specific author name you want to filter by
    if ($tag) {
      $args = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'author_name' => $author_name, // Add author name parameter
      );
      $the_query = new WP_Query($args);
    }
    ?>
    <?php if (isset($the_query) && $the_query->have_posts()):
      while ($the_query->have_posts()):
        $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="card-author">
          <div class="image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="info">
            <ul class="info-list">
              <li>
                <span>
                  <?php echo get_the_author_meta('display_name'); ?>
                </span>
              </li>
              <li>
                <span>•</span>
              </li>
              <li>
                <span>
                  <?php echo get_the_date('j, F'); ?>
                </span>
              </li>
            </ul>
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
</section>

<!-- Other Blog Posts -->
<section class="s-template-support" id="section-other-blog-posts">
  <div class="container">
    <div class="s-template-support-title">
      <h2>Other Blog Posts</h2>
    </div>
    <div class="s-template-support-content">
      <?php   
        $tag = get_term_by('slug', 'featured', 'post_tag'); // Get the tag object by slug
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

<!-- Include Footer -->
<?php get_footer(); ?>