<?php
/**
 * Single Post Template: Project
 **/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="project-container">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1">
      <h1><?php echo the_title(); ?></h1>
      <div class="project-description"><?php echo the_content(); ?></div>
    </div>

</section>

  
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
