<?php
/**
 * Single Post Template: Project
 **/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="project-container">
  <div class="project-header" data-bg="<?php header_image(); ?>"></div>
  <div class="project-content">
    <div class="project-header-txt">
      <div class="project-header-txt-inner">
        <h1 class="project-title"><?php echo the_title(); ?></h1>
        <h4 class="project-type"><?php echo get_post_meta( get_the_ID(), 'meta-type', true ); ?></h4>
      </div>
    </div>
    <div class="project-content-inner">
      <div class="row">
        <div class="col-xs-12 col-sm-12 project-description"><?php// echo the_content(); ?></div>
      </div>

      <?php echo the_content(); ?>
      
    </div>
  </div>
  <nav class="project-navigation" role="navigation">
    <span>
      <?php if ( get_next_post() ) { next_post_link('%link', '<i class="fa fa-caret-left"></i>'); }else{ ?>
      <i class="fa fa-caret-left inactive"></i><?php } ?>
    </span>
    <span>
      <a href="<?php echo get_site_url(); ?>#work">
        <i class="fa fa-th"></i>
      </a>
    </span>
    <span>
      <?php if ( get_previous_post() ) { previous_post_link('%link', '<i class="fa fa-caret-right"></i>'); }else{ ?>
      <i class="fa fa-caret-right inactive"></i><?php } ?>
    </span>
  </nav>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
