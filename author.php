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
    <img src="<?php echo get_template_directory_uri()?>/assets/bg/ellipse.png" alt="" class="s-author-image">
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
      <p>Lorem ipsum dolor sit amet consectetur. Eget potenti nibh pretium id risus tellus blandit. Morbi donec nisi et sapien. Condimentum vestibulum convallis accumsan orci convallis. Lorem ipsum dolor sit amet consectetur. Eget potenti nibh pretium id risus tellus blandit. Morbi donec nisi et sapien. Condimentum vestibulum convallis accumsan orci convallis.</p>
    </div>
  </div>
</section>





<!-- Include Footer -->
<?php get_footer(); ?>