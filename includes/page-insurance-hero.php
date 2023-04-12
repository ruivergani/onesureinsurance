<?php
    $title = get_field('');
    
?>

<!-- Section Hero -->
<section class="s-hero-product">  
    <div class="container">
      <div class="product">
        <!-- Left Text Area -->
        <div class="left-text" data-aos="fade-right">
          <span class="sm-text-product"><?php the_field('get_quote_sub_title_van_insurance') ?></span>
          <h1><?php the_field('get_quote_title_van_insurance') ?></h1>
          <ul>
            <!-- Repeater List Section Hero --> 
            <?php if( have_rows('list_get_quote_van_insurance') ): while ( have_rows('list_get_quote_van_insurance') ) : the_row(); ?>
              <li>
                <img src="<?php the_sub_field('icon_checked_van_insurance') ?>" alt="icon green checked" title="icon green checked">
                <p><?php the_sub_field('text_van_insurance') ?></p>
              </li>
            <?php endwhile; else : endif;?>
          </ul>
          <button class="btn btn-primary-lg">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-email-white.svg" alt="icon email white" title="icon email white">
            GET A QUOTE
          </button>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-line.svg" alt="icon line" title="icon line" class="img-line" data-aos="zoom-in">
        <!-- Right Text Area -->
        <div class="right-text" data-aos="fade-left">
          <span class="sm-text-product"><?php the_field('call_us_subtitle_van_insurance') ?></span>
          <h2><?php the_field('call_us_title_van_insurance') ?></h2>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-phone-blue.svg" alt="icon phone" title="icon phone">
              <p>Call our landline at <span><?php the_field('landline_phone_van_insurance') ?></span></p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-mobile-blue.svg" alt="icon mobile phone" title="icon mobile phone">
              <p>Call your mobile at <span><?php the_field('mobile_phone_van_insurance') ?></span></p>
            </li>
          </ul>
          <button class="btn btn-outline">
            <i class="fa-solid fa-phone"></i>
            Call For Our Best Price
          </button>
        </div>
      </div>
    </div>
  </section>