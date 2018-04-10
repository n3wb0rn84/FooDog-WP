<div class="site-top">
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    if (has_tag('bigarticle')){?>
    <article class="post big-article">
      <?php the_post_thumbnail('big-article');?>
      <h3><a href="<? the_permalink(); ?>">
        <?php
        $categories = get_the_category();
        $separator = ' ';
        $output = '';

        if ($categories){
          foreach($categories as $category){
            $output .= $category->cat_name . $separator;
          }
          echo $output;
        }
       ?>
     </a></h3>
      <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
    </article>
    <?php
  }
  endwhile;
endif;?>
  <div class="small-wrapper">
    <? if (have_posts()) :
          while (have_posts()) : the_post();
            if (has_tag('smallarticle')){?>
              <article class="post small-article">
                <?php the_post_thumbnail('small-article'); ?>
                <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
              </article>
    <?php } ?>

    <?
  endwhile;
endif;?>
</div>
</div>
