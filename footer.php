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
    if (have_posts()) :
      while (have_posts()) : the_post();
        if (has_tag('popular')){?>
          <div class="img-pop">
            <? the_post_thumbnail('foot-img');?>
          </div>
          <p><? the_title(); ?></p>
        <?}
      endwhile;
    endif;
    rewind_posts();
    ?>
  </div>
  <p class="copyR"><? echo date('Y'); ?> - &copy; <? bloginfo('name'); ?></p>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
