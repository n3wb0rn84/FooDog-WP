<?php
get_header('pages'); ?>
<article class="pages-title">
  <h2><? $cat = single_cat_title();?></h2>
</article>
<div class="site-middle pages-container">
  <div class="pages-wrapper">
    <?

    $categories1 = get_the_category();
    foreach($categories1 as $category1){
        $output1 = $category1->cat_name;
    }

    $my_query8 = new WP_Query(array('category_name' => $output1,
                                    'posts_per_page' => 8,
                                    'paged' => $currentPage ));
    $args1 = array(
        'prev_text' => __('«'),
        'next_text' => __('»')
      );
    if ( $my_query8->have_posts() ) {
      while ( $my_query8->have_posts() ) {
        if (is_category()){
        $my_query8->the_post();?>
        <div class="featured-img"><?php the_post_thumbnail('feat-article'); ?></div>
        <article class="featured-articles">
          <span><?php the_category(); ?></span>
          <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
          <?php the_content('READ MORE'); ?>
          <i class="far fa-arrow-alt-circle-right fa-3x"></i>
        </article>
        <?php
      }
      }
    wp_reset_postdata();?>

      </div>

      <?} get_template_part('content-aside');
      ?>
    </div>
    <div class="pag-wrap">
      <? echo paginate_links($args1); ?>
    </div>
  <?
get_footer();
 ?>
