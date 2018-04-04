<footer class="site-footer">
  <nav class="site-nav">

    <? $args = array(
      'theme_location' => 'footer'
    );
    ?>
    <? wp_nav_menu( $args ); ?>
  </nav>
  <p><? bloginfo('name'); ?> - &copy; <? echo date('Y'); ?></p>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
