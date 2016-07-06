<section id="branding">
  <div class="overlay">
    <div class="grid grid-pad">
      <div class="push-1-4 col-1-2 mobile-col-1-1">
        <h1>9PM Studio</h1>
        <h6>Simplicity is not style,<br>it is a state of harmony.</h6>
      </div>
    </div>
  </div>
</section>

<section id="work">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1">
      <h1>Featured Work</h1>
    </div>
    <div class="col-1-1 mobile-col-1-1">
      <div class="masonry">
        <div class="grid-sizer"></div>
        <div class="grid-item grid-item--width3">
          <img src="<?php echo get_template_directory_uri() . '/images/work/01.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width2">
          <img src="<?php echo get_template_directory_uri() . '/images/work/05.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width2">
          <img src="<?php echo get_template_directory_uri() . '/images/work/03.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width3">
          <img src="<?php echo get_template_directory_uri() . '/images/work/06.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width3">
          <img src="<?php echo get_template_directory_uri() . '/images/work/02.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width2">
          <img src="<?php echo get_template_directory_uri() . '/images/work/04.jpg' ?>" alt />
        </div>
      </div>
  </div>
  </div>
</section>


<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>