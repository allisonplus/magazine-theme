<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/square.png" />
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic|Port+Lligat+Sans' rel='stylesheet' type='text/css'>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
<?php if( is_front_page() ) {

$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
$url = $thumb['0'];
   ?>
  <div class="headContainer">

    <div class="viewHeight hero" style="background-image: url(<?= $url ?>)">


    <?php 
    }?>
    <div id='nav'class="notFront">
        <div class="nav clearfix">
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>

           <?php wp_nav_menu(array(
             'container' => false,
             'menu'=>'Social'
             )); ?>
        </div> 
        <!-- end nav -->
    </div>
      <!-- end id nav -->
  </div>
  <!-- end viewHeight -->
</div> 
<!-- End headContainer -->
      

