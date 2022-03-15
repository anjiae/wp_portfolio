<?php get_header(); ?>
<section id="p-portfolio" class="section">
  <div class="section__bg">
    <div class="title">
      <h2 class="title-lg">Portfolios</h2>
    </div>
  </div>
  <div class="containerBox">
    <h3>아카이브 포트폴리오 페이지</h3>
    <ul class="portfolio__nav">
      <li><a href="#" class="btn-secondary selected" data-filter="*">All</a></li>
      <?php
      $terms = get_terms(array(
        'taxonomy' => 'pf_category',
        'oderby' => 'name',
        'exclude' => '3',
      ));
      foreach ($terms as $term) {
        printf(
          '<li><a href="#" class="btn-secondary" data-filter=".%1$s">%2$s</a></li>',
          esc_html($term->slug),
          esc_html($term->name)
        );
      }
      ?>


    </ul>
    <!-- portfolio lists -->
    <ul class="portfolio__lists">
      <?php

      $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 6,
        'paged' => $paged,
      );

      $portfolio = new WP_Query($args);

      while ($portfolio->have_posts()) {
        $portfolio->the_post();

        $termsArray = get_the_terms($post->ID, 'pf_category');
        $slugs = '';
        foreach ($termsArray as $term) {
          $slugs .= $term->slug . ' ';
        }

      ?>
        <li class="project <?php echo $slugs; ?>">
          <div class="imgBox">
            <?php
            if (has_post_thumbnail()) {

            ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
            <?php } ?>
          </div>
          <a href="<?php the_field('link'); ?>" class="list_info">
            <h3 class="font"><?php the_title(); ?><i class="fas fa-chevron-right"></i></h3>
            <p class="font-sm">Click to see project</p>
          </a>
        </li>
      <?php }
      wp_reset_postdata(); ?>
    </ul>
    <?php echo myPagination($args); ?>

  </div>
</section>
<?php get_footer(); ?>