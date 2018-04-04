<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
  <meta charset="<? bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  <title><? bloginfo('name'); ?></title>
  <? wp_head(); ?>
</head>
<body <? body_class(); ?>>
  <div class="container">
    <!-- site-header -->
    <header class="site-header">
      <h1><a href="<? echo home_url(); ?>"><? bloginfo('name'); ?></a></h1>
      <nav class="site-nav">

        <? $args = array(
          'theme_location' => 'primary'
        );
        ?>
        <? wp_nav_menu( $args ); ?>
      </nav>
    </header><!-- end site-header -->
