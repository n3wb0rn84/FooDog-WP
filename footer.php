<footer class="site-footer">
  <nav class="site-nav footer-nav">
    <legend>Catégories</legend>
    <? $args = array(
      'theme_location' => 'footer'
    );
    ?>
    <? wp_nav_menu( $args ); ?>
  </nav>
  <div class="pop-posts">
    <legend>Popular posts</legend>
    <?php
    $my_query4 = new WP_Query( 'tag="popular"&posts_per_page=3' );
    if ( $my_query4->have_posts() ) {
      while ( $my_query4->have_posts() ) {
        $my_query4->the_post();?>
        <div class="img-pop">
          <? the_post_thumbnail('foot-img');?>
        </div>
        <p><? the_title(); ?></p>
        <?php
      }
      }
    wp_reset_postdata();
    ?>
  </div>
  <p class="copyR"><? echo date('Y'); ?> - &copy; <? bloginfo('name'); ?></p>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
