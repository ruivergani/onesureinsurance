<!-- List all Tags by post -->
<div class="side-category" data-aos="fade-right">
    <ul>
        <?php
        $tags = get_tags(array(
            'hide_empty' => false
        ));
        foreach($tags as $tag){
        ?>
        <li>
            <a href="<?php echo get_tag_link($tag->term_id); ?>">
                <p><?php echo $tag->name; ?></p>
                <img src="<?php echo get_template_directory_uri()?>/assets/icons/arrow-right-blog-white.svg" alt="arrow right" title="arrow right">
            </a>
        </li>
        <?php 
        }
        ?>
    </ul>
</div>