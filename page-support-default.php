<?php
  // Template name: support-default
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

  <!-- Section Hero -->
  <section class="s-hero-support">
    <div class="container">
      <div class="title-support">
        <h1><?php the_field('title_page_support') ?></h1>
        <p><?php the_field('subtitle_page_support') ?></p>
      </div>
      <!-- Section Include Search Code Blog -->
      <?php include(TEMPLATEPATH .'/includes/section-search-blog.php') ?> 
    </div>
  </section>

  <!-- Section Cards Rounded -->
  <section class="s-rounded-cards">
    <div class="container">
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('cards_page_support') ): while ( have_rows('cards_page_support') ) : the_row(); ?>
          <li>
            <div class="cards-rounded">
              <div class="circle-rounded">
                <img src="<?php the_sub_field('card_image_support') ?>">
              </div>
            </div>
            <a href="<?php the_sub_field('card_link_support') ?>"><?php the_sub_field('card_title_support') ?></a>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
    </div>
  </section>

  <!-- Section Text -->
  <section class="s-text-support">
    <div class="container">
      <div class="left-text-support">
        <h2>Trending questions</h2>
        <ul>
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('text_left_support') ): while ( have_rows('text_left_support') ) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('link_left_support') ?>">
                <?php the_sub_field('text_left_support_01') ?>
              </a>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
      </div>
      <div class="right-text-support">
        <h2>Featured Questions</h2>
        <ul>
          <!-- Repeater Slide Cards --> 
          <?php if( have_rows('text_right_support') ): while ( have_rows('text_right_support') ) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('link_right_support') ?>">
                <?php the_sub_field('text_right_support_01') ?>
              </a>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section Policy -->
  <section class="s-policy-support">
    <div class="container">
      <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-invoice-support-page.svg" alt="icon policy" title="icon policy" class="policy">
      <h2><?php the_field('title_policy_support') ?></h2>
      <ul>
        <!-- Repeater Slide Cards --> 
        <?php if( have_rows('text_policy_support') ): while ( have_rows('text_policy_support') ) : the_row(); ?>
          <li>
            <p><?php the_sub_field('paragraph_support') ?></p>
          </li>
        <?php endwhile; else : endif;?>
      </ul>
      <a class="btn btn-primary" href="">
        Log in to your account
      </a>
    </div>
  </section>

<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>