<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();?>
  <article class="single-page">
    <?php the_post_thumbnail('feat-article'); ?>  
    <h2><? the_title(); ?></h2>
    <p><? the_content(); ?></p>
  </article>
  <? endwhile;
  endif;

get_footer();

 ?>
