<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();?>
  <article class="pages">
    <h2><? the_title(); ?></h2>
    <p><? the_content(); ?></p>
  </article>
  <? endwhile;
  else :
    echo '<p>no content</p>';

  endif;

get_footer();

 ?>
