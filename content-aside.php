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
