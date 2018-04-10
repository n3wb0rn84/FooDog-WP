<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();?>
  <article class="archives">
    <h2><? the_title(); ?></h2>
    <p><? the_content(); ?></p>
  </article>
  <? endwhile;
  endif;

get_footer();

 ?>
