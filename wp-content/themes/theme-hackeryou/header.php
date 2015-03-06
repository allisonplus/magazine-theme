<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic|Josefin+Sans' rel='stylesheet' type='text/css'>


  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<?php if( is_front_page() ) {

$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
$url = $thumb['0'];
   ?>

    <img src="<?php echo $url ?>" alt="">

     <div id='nav'>

   <?php 


  }?>
    <div class="navigation">
      <div class="logo">
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
          </a>
        </h1>
      </div>  <!-- /.container -->
      <div class="nav">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'primary'
        )); ?>

         <?php wp_nav_menu(array(
           'container' => false,
           'menu'=>'Social'
           )); ?>
      </div> 
      <!-- end nav -->
    </div>
  </div>
  <!-- end id nav -->
</header><!--/.header-->

