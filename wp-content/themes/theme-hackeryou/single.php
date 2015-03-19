<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php

        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-index' );
        $url = $thumb['0'];
           ?>

          <img src="<?php echo $url ?>" alt="">

           <?php 
          ?>
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

            <?php echo wp_get_attachment_image_src( $post->ID, "square"); ?>

            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>

          </div><!-- .entry-content -->
        </div>
        <!-- end Post ID -->

        <div id="nav-below" class="blog-navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '<span> < </span> PREVIOUS POST'); ?></p>

          <p class="nav-next"><?php next_post_link('%link', 'NEXT POST <span> > </span>'); ?></p>
        </div><!-- #nav-below -->


      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>