<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>




        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

   <?php echo get_the_post_thumbnail( $post->ID, "large"); ?> 




  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>