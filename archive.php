<?php
get_header();

  if (is_category() || has_tag('pub')){
    ?>
    <article class="pages title">
      <h2><? single_cat_title(); ?></h2>
    </article>
    <div class="pages-container">
      <div class="articles-wrapper">
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            ?>
              <div class="featured-img"><?php the_post_thumbnail('feat-article'); ?></div>
              <article class="featured-articles">
                <span><?php the_category(); ?></span>
                <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
                <p><?php the_content('READ MORE'); ?></p>
                <i class="far fa-arrow-alt-circle-right fa-3x"></i>
              </article>
      <?
        endwhile;
        endif;?>
      </div>
      <?} get_template_part('content-aside'); ?>
    </div>
  <?
get_footer();
 ?>
