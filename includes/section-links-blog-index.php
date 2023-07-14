<!-- Section Links -->
<section class="s-blog-links">
  <div class="container">
      <ul>
          <li>
            <a href="<?php echo get_permalink(234) ?>">
                <i class="fa-solid fa-border-all"></i>
                <p>All Posts</p>
            </a>
          </li>
          <li>
              <a href="<?php echo get_category_link('16'); ?>">
                  <i class="fa-solid fa-newspaper"></i>
                  <p>Check our Guides</p>
              </a>
          </li>
          <li>
              <a href="<?php echo get_category_link('15'); ?>">
                  <i class="fa-regular fa-message"></i>
                  <p>Find our News Articles</p>
              </a>
          </li>
          <li>
              <a href="<?php echo get_permalink(get_page_by_title('Support')) ?>">
                  <i class="fa-solid fa-question"></i>
                  <p>Support</p>
              </a>
          </li>
      </ul>
  </div>
</section>