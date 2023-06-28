<?php
  // Template name: page-404
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- === FORM  === -->
<?php echo do_shortcode('[merlin-dialler-form]'); ?>

<section class="page-not-found">
    <div class="container">
        <h1>Page Not Found</h1>
        <p>Click on the button below to return to the home page</p>
        <a href="<?php echo get_home_url() ?>">
            <button class="btn btn-outline">
                <i class="fa-solid fa-rotate-left"></i>
                BACK TO HOME
            </button>
        </a>
    </div>
</section>
  
<!-- Include Footer -->
<?php get_footer(); ?>