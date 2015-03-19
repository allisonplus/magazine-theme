<?php get_header();  

/* 
* Template Name: About Page
*/
?>


<div class="headerAbout">
<?php 
// $thumb_id = get_post_thumbnail_id(37);
  the_post_thumbnail('header');
// $thumb_url = $thumb_url_array[0];

 ?>
 </div>

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
    </div>
    <!-- end postHead -->
  </div>
  <!-- End postInfo -->

    <div class="entry-content">
      <?php the_content(); ?>


      <?php if( have_rows('staff') ) : // if have content in repeater field?>

          <?php while( have_rows('staff') ) : the_row(); // if we have the content get the rows ?>

            <?php  // image field begins here ok

            $image = get_sub_field('image');

            $imagr_url = $image['sizes']['about-circle'];

            if( !empty($image) ): ?>
            <div class="aboutStaff">
                <img class='aboutImage' src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; // image field ends ?>
            <div class="aboutInfo">

            <p class="name">  <?php the_sub_field('name'); ?></p>
             <p class="job">  <?php the_sub_field('job_title'); ?></p>
            </div>
          <!-- end aboutInfo -->
          </div>
          <!-- end about staff -->


          <?php endwhile; // end while for staff repeater field?>
      <?php endif;  // end if for repeater field woohoo the end ?>

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