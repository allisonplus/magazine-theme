<?php get_header();  ?>


<!-- close main -->
<?php 
$thumb_id = get_post_thumbnail_id(37);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'background', true);
$thumb_url = $thumb_url_array[0];

 ?>

<div class="homeImage" style="background:url(<?= $thumb_url ?>); background-repeat:no-repeat; background-size: cover; ">
  <div class="homeTitle">
   <h2><?php the_title(); ?></h2>
  </div>
  <!-- homeTitle -->
</div>
<!-- homeImage -->

<div class="instagramFeed">
  <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
  <i class="fa fa-instagram"></i>
</div>

<div class="main">
  <?php $i = 1; ?>

  <?php $args = array( 'numberposts' => 2 );
        $lastposts = get_posts( $args );
       foreach($lastposts as $post) : setup_postdata($post);

       if ( 1 == $i ) { $firstclass="firstpost"; };
       $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
      $url = $thumb['0'];

      $title = get_the_title($post ->ID); 
     ?>

     <div class="clearfix blogHome blogHome<?php echo $i++; ?>">
        <img src="<?php echo $url ?>" alt="">

        <div class="blogContent">
          <h2><a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php echo $title ?></a></h2>
        </div> <!--/.blogContent-->
    </div> <!--/.blogHome-->

          <div class="readMore">
          <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">Read More <span>></span></a>
          </div>
          <!-- readMore -->
          

      <?php endforeach; ?> 
</div>


<?php get_footer(); ?>