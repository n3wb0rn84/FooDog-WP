<?php

get_header('single');

if (have_posts()) :
  while (have_posts()) : the_post();?>
  <article class="single-page">
    <? the_category(); ?>
    <h2><? the_title(); ?></h2>
    <div class="single-img">
      <?php the_post_thumbnail('feat-article'); ?>
    </div>
    <div class="single-img-footer">
      <div class="sp-img-foot">
        <img src="http://localhost/wordpress/wp-content/uploads/2018/04/30430085_10156046670370169_867604558_n.png" alt="FooDog's logo">
      </div>
      <p>by : <? the_author(); ?> </p>
      <div class="sif-right-side">
        <a href="#"><i class="fas fa-comment"></i><p>0 COMMENT</p></a>
        <p>SHARE</p>
        <div class="soc-img-foot">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
      </div>
    </div>
    <div class="single-content">
      <? the_content(); ?>
    </div>
    <div class="single-share">
      <p class="pSing-share">SHARE</p>
      <div class="soc-content-foot">
        <a href="#"><i class="fas fa-comment"></i><p>0 COMMENT</p></a>
        <a href="#"><i class="fab fa-facebook-f"></i><p>SHARE</p></a>
        <a href="#"><i class="fab fa-twitter"></i><p>TWEET</p></a>
        <a href="#"><i class="fab fa-pinterest"></i><p>PIN IT</p></a>
      </div>
    </div>
    <div class="single-subscribe">
      <h2>Subscribe to The Digest Newsletter</h2>
      <p>Get health and welness tips about your dog delivered to your inbox</p>
      <input type="email" name="sub-mail" placeholder="Your email">
      <input id="submit-sub" type="submit" name="submit-mail" value="SIGN UP">
    </div>
    <div class="other-articles">
      <div class="previous-art-sing">
        <!-- Rajouter condition si oui ou non il y a un post avant ou apres !!! -->
        <? // FOR PREVIOUS POST
        $prev_post = get_previous_post();
        $id = $prev_post->ID ;
        $permalink = get_permalink( $id );
        ?>
        <a href="<? echo $permalink; ?>"><? previous_post_link('&laquo Previous article', '', TRUE);?></a>
        <h2><? echo $prev_post->post_title; ?></h2>
      </div>
      <div class="next-art-sing">
        <?
        $next_post = get_next_post();
        $id1 = $next_post->ID ;
          $permalink1 = get_permalink( $id1 );
         ?>
         <a href="<? echo $permalink1; ?>"><? next_post_link('Next article &raquo', '', TRUE);?></a>
        <h2><? echo $next_post->post_title; ?></h2>
      </div>
    </div>
    <div class="single-brand-article">
      <img src="http://localhost/wordpress/wp-content/uploads/2018/04/30430085_10156046670370169_867604558_n.png" alt="FooDog's logo">
      <div class="sba-content">
        <h2>The FooDog's</h2>
        <p>the foodog is Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="also-like">
      <legend>You might also like</legend>

        <?php
        $my_query10 = new WP_Query( 'posts_per_page=3' );
        if ( $my_query10->have_posts() ) {
          while ( $my_query10->have_posts() ) {
            $my_query10->the_post();?>
          <div class="also-like-wrapper">
            <div class="alsoLike-img">
              <?php the_post_thumbnail(); ?>
            </div>
            <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
          </div>
            <?php
          }
          }
        wp_reset_postdata();
        ?>
    </div>
    <div class="comment-single">
      <legend>Leave a response</legend>
      <textarea name="comment-area" placeholder="Write your comment here ..." rows="10" cols="65"></textarea>
      <input type="text" name="user-name" placeholder="Name ...">
      <input type="email" name="user-email" placeholder="Email ...">
      <input type="url" name="user-url" placeholder="Website ...">
      <input id="comm-sub" type="submit" name="user-submit" value="Leave a comment">
    </div>

  </article>
  <? endwhile;
endif;
get_template_part('content-aside-single');
get_footer();

 ?>
