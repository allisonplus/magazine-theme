<?php get_header();  

/* 
* Template Name: About Page
*/
?>


<!-- close main -->
<?php 
$thumb_id = get_post_thumbnail_id(37);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'background', true);
$thumb_url = $thumb_url_array[0];

 ?>

<div class="homeImage" style="background:url(<?= $thumb_url ?>); background-repeat:no-repeat; height:70vh; background-size: cover; ">
  <div class="homeTitle">
  </div>
  <!-- homeTitle -->
</div>
<!-- homeImage -->

<div class="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class='clearfix' id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="postInfo">
     <div class="postHead">
      <h1 class="entry-title"><?php the_title(); ?></h1>

      <div class="entry-meta">
        <?php echo get_the_date(); ?>
      </div><!-- .entry-meta -->
    </div>
    <!-- end postHead -->
  </div>
  <!-- End postInfo -->

    <div class="entry-content">
      <?php the_content(); ?>

      <?php wp_link_pages(array(
        'before' => '<div class="page-link"> Pages: ',
        'after' => '</div>'
      )); ?>

    </div><!-- .entry-content -->
  </div>
  <!-- end Post ID -->


<?php endwhile; // end of the loop. ?>
</div>


<?php get_footer(); ?>