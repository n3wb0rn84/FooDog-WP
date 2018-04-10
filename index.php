<?php

get_header();?>

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
  <article class="site-aside">
    <div class="aside fb">
      <!-- icone - follower - follow -->
      <i class="fab fa-facebook-f"></i>
      <p>200.000 Fans</p>
      <p><a href="#">Like</a></p>
    </div>
    <div class="aside tw">
      <i class="fab fa-twitter"></i>
      <p>200.000 Followers</p>
      <p><a href="#">Follow</a></p>
    </div>
    <div class="aside inst">
      <i class="fab fa-instagram"></i>
      <p>200.000 Followers</p>
      <p><a href="#">Follow</a></p>
    </div>
    <div class="aside-pub">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          if (has_tag('pub')){?>
          <article class="pub">
            <? the_post_thumbnail('pub-article'); ?>
          </article>
          <?php
        }
        endwhile;
      endif;?>
    </div>
  </article>
</div>
<div class="post latest-post">
  <caption>Latest posts</caption>
  <?php
    $currentPage = get_query_var('paged');

    $latestposts = new WP_Query(array(
      'category_name' => 'article-blog',
      'posts_per_page' => 3,
      'paged' => $currentPage
    ));

    if ($latestposts->have_posts()) :
      while ($latestposts->have_posts()) :
        $latestposts->the_post();?>
          <div class="latest-img"><?php the_post_thumbnail('feat-article'); ?></div>
          <article class="latest-articles">
            <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
            <p><?php the_content(); ?></p>
          </article>
  <?
    endwhile;

      echo paginate_links(array(
        'total' => $latestposts->max_num_pages
      ));

    endif;?>
</div>
<?php
get_footer();
 ?>
