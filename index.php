<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();?>

  <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
  <p><? the_content(); ?></p>
  <? endwhile;
  else :
    echo '<p>no content</p>';

  endif;

get_footer();

 ?>
