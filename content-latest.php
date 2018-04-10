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
