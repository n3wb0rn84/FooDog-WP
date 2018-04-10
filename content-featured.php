<div class="site-middle">
  <div class="site-featured">
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        if (has_category('Featured')){?>
          <div class="featured-img"><?php the_post_thumbnail('feat-article'); ?></div>
          <article class="featured-articles">
            <span><?php the_category(); ?></span>
            <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
            <p><?php the_content('READ MORE'); ?></p>
            <i class="far fa-arrow-alt-circle-right fa-3x"></i>
          </article>
  <?}
    endwhile;
    endif;?>
  </div>
  <? get_template_part('content-aside'); ?>
</div>
