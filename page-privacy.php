<?php
  // Template name: privacy
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Loop in the template -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

 <!-- Section Breadcrumbs -->
 <?php breadcrumbs(); ?>

 <section class="s-title">
    <div class="container">
      <h1><?php wp_title('') ?></h1>
    </div>
 </section>

 <section class="s-page-text">
  <div class="container">
    <div class="left-page-text">
      <!-- Blog Structure based on WordPress -->
      <div class="content-post">
        <blockquote>
          <p>A gestora do Vedacit Labs, Rita Gabriela Rezende Oliveira, ao lado dos CEOs e Founders da Prevision, Paula Lunardelli e Francisco Deppermann Fortes, que participaram do segundo ciclo de aceleração do Labs, e do co-founder e diretor da Liga Ventures, Guilherme Massa, promove um bate-papo sobre a jornada de crescimento durante...</p>
        </blockquote>
        <h2>Por que acelerar sua startup?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
        <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
        <h2>Sobre o nosso programa de Inovação Aberta</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur elit id sapien porta mollis. Maecenas a nulla sit amet est ultrices volutpat. Suspendisse potenti. Nulla sit amet dui turpis. Sed fermentum tincidunt orci a laoreet. Duis egestas ligula vitae consequat rhoncus. Proin tempor risus ac nunc dapibus tincidunt.</p>
        <h2>Como vai funcionar o evento?</h2>
        <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
        <ul>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
          <li>Donec vitae interdum nisl. Proin tincidunt malesuada viverra.</li>
        </ul>
        <h2>Conclusão:</h2>
        <p>Donec vitae interdum nisl. Proin tincidunt malesuada viverra. Fusce porttitor lorem ut est cursus, et sollicitudin sapien pretium. Mauris placerat eros massa, quis semper mauris faucibus et.</p>
      </div>
    </div>
    <div class="right-page-text">
      <!-- Table of Content -->
      <div class="table-of-content">
        <h5 class="table-of-content-title">Policy Content</h5>
        <!-- Top Navigation -->
        <ul class="js-nav-blog-post">
          <li>
            <a href="">
              <span>What information do we collect about you?</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>Why we use the information about you?</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>How will we use the information about you?</span>
            </a>
          </li>
        </ul>
        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
          <button>
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-share-arrow.svg" alt="icon share arrow" title="icon share arrow">
            <span>Share</span>
          </button>
        </a>
      </div>
      <!-- Card Download PDF -->
      <div class="card-download">
        <div class="download-text">
          <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-file.svg" alt="icon file" title="icon file">
          <p>Group Privacy Policy [PDF: 116KB]</p>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/icon-download.svg" alt="icon download" title="icon download">
      </div>
    </div>
  </div>
 </section>


<!-- End loop -->
<?php endwhile; else: endif; ?>

<!-- Include Footer -->
<?php get_footer(); ?>