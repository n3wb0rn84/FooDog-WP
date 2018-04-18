<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
  <meta charset="<? bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <title><? bloginfo('name'); ?></title>
  <? wp_head(); ?>
  <link rel="stylesheet" href="style.css">
</head>
<body <? body_class(); ?>>
  <div class="container archive-pages">
    <!-- site-header -->
    <header class="site-header">
      <article class="header-wrap">
      <h1><a href="<? echo home_url(); ?>"><? bloginfo('name'); ?></a></h1>
      <nav class="site-nav">

        <? $args = array(
          'theme_location' => 'primary'
        );
        ?>
        <? wp_nav_menu( $args ); ?>
      </nav>
      </article>
    </header><!-- end site-header -->
