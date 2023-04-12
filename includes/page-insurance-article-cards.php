<div class="article-cards">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>