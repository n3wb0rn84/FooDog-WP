<?php

get_header();?>

<div class="site-top">
<?php
$my_query = new WP_Query( 'tag="bigarticle"' );
if ( $my_query->have_posts() ) {
	while ( $my_query->have_posts() ) {
		$my_query->the_post();?>
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
	<?}
}
wp_reset_postdata();?>

  <div class="small-wrapper">
    <?php
    $my_query1 = new WP_Query( 'tag="smallarticle"' );
    if ( $my_query1->have_posts() ) {
    	while ( $my_query1->have_posts() ) {
    		$my_query1->the_post();?>
              <article class="post small-article">
                <?php the_post_thumbnail('small-article'); ?>
                <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
              </article>
        <?php
      }
      }
    wp_reset_postdata();
    ?>
  </div>
</div>
<div class="site-middle">
  <div class="site-featured">
    <?php
    $my_query1 = new WP_Query( 'category_name="featured"&posts_per_page=3' );
    if ( $my_query1->have_posts() ) {
      while ( $my_query1->have_posts() ) {
        $my_query1->the_post();?>
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
    wp_reset_postdata();
    ?>
  </div>
<?php get_template_part('content-aside'); ?>
</div>
<div class="latest-post">
  <!-- à ajouter en :before <legend>Latest posts</legend> -->
  <?php
    $currentPage = get_query_var('paged') ? get_query_var('paged') : 1;

    $latestposts = new WP_Query(array(
      'category_name' => 'nutrition,wellness,featured,community,lifestyle',
      'posts_per_page' => 6,
      'paged' => $currentPage
    ));

    $args = array(
      	'prev_text' => __('«'),
      	'next_text' => __('»')
      );

    // query_posts($latestposts);

    if ($latestposts->have_posts()) :
      while ($latestposts->have_posts()) :
        $latestposts->the_post();?>
          <div class="post latest-wrapper">
            <div class="latest-img"><?php the_post_thumbnail('feat-article'); ?></div>
            <article class="latest-articles">
              <span><?php the_category() ?></span>
              <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
              <p><?php the_content(''); ?></p>
            </article>
          </div>
  <?endwhile;
  wp_reset_postdata();?>
  </div>
    <div class="pag-wrap">
      <? echo paginate_links($args); ?>
    </div>
    <?

  endif;
    ?>

<?php
get_footer();
 ?>
