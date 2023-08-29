<!-- Include Header -->
<?php get_header(); ?>

<!-- === MODAL INSURANCE TYPES === -->
<?php echo do_shortcode('[merlin-dialler-modal-list]'); ?>

<!-- === FORM  === -->
<?php echo do_shortcode('[merlin-dialler-form]'); ?>

<!-- Include the Page Reference -->
<?php
  $blog_page = get_page_by_title('Blog');
?>

<!-- Section Hero Resources -->
<section class="s-hero-resources">
  <div class="container">
    <div class="s-hero-resources-title">
      <h1>Results from your search</h1>
      <p>Word searched:&nbsp;<?php echo get_query_var('s') ?></p>
    </div>
  </div>
</section>

<!-- Section Main Content -->
<section class="s-main-content">
  <div class="container-fluid">
      <!-- List all posts -->
      <div class="s-all">
        <!-- Code to create query and search for posts -->
        <?php
            global $query_string;
            $query_args = explode("&", $query_string);
            $search_query = array();

            foreach($query_args as $key => $string) {
                $query_split = explode("=", $string);
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            }
            $the_query = new WP_Query($search_query);
            if ($the_query->have_posts()) : 
        ?>
            <div class="alm-listing">
                <?php if(have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endwhile; else : endif; ?>
            </div>
        <?php wp_reset_postdata(); ?>
        <!-- else -->
        <?php else: ?>
            <div class="empty-search">
                <h2>Result not found</h2>
                <p>It wasn't found any result based on your search.</p>
            </div>
        <?php endif; ?>
        <!-- End of IF statement -->
      </div>
  </div>
</section>

<!-- Include Footer -->
<?php get_footer(); ?>