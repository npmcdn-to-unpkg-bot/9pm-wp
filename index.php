<?php get_header(); ?>
<!-- branding section -->
<section id="branding">
  <div class="bg"></div>
  <div class="overlay">
    <div class="grid grid-pad">
      <div class="push-1-4 col-1-2 mobile-col-1-1">
        <h1>9PM Studio</h1>
        <h6>Simplicity is not style,<br>it is a state of harmony.</h6>
      </div>
    </div>
  </div>
</section>
<!-- end branding section -->

<!-- work section -->
<section id="work">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1">
      <h1>Featured Work</h1>
    </div>
    <div class="col-1-1 mobile-col-1-1">
      <div class="masonry">
        <div class="grid-sizer"></div>
        <div class="grid-item grid-item--width3">
          <img src="<?php echo get_template_directory_uri() . '/images/work/02.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width3">
          <img src="<?php echo get_template_directory_uri() . '/images/work/04.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width2">
          <img src="<?php echo get_template_directory_uri() . '/images/work/03.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width2">
          <img src="<?php echo get_template_directory_uri() . '/images/work/05.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width3">
          <img src="<?php echo get_template_directory_uri() . '/images/work/06.jpg' ?>" alt />
        </div>
        <div class="grid-item grid-item--width2">
          <img src="<?php echo get_template_directory_uri() . '/images/work/01.jpg' ?>" alt />
        </div>
      </div>
  </div>
  </div>
</section>
<!-- end work section -->

<!-- services section -->
<section id="services">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1">
      <h1>What We Do</h1>
    </div>
  </div>
  <div class="grid grid-pad">
    <div class="col-1-3 mobile-col-1-1 services-item">
      <h2>print.</h2>
      <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea, vis adipisci complectitur ne. Lorem ipsum dolor sit amet, sed mutat oport- ere ea, laudem graece tibique ut mea. Quo ex definiebas complectitur.</p>
    </div>
    <div class="col-1-3 mobile-col-1-1 services-item">
      <h2>web.</h2>
      <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea, vis adipisci complectitur ne. Lorem ipsum dolor sit amet, sed mutat oport- ere ea, laudem graece tibique ut mea. Quo ex definiebas complectitur.</p>
    </div>
    <div class="col-1-3 mobile-col-1-1 services-item">
      <h2>branding.</h2>
      <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea, vis adipisci complectitur ne. Lorem ipsum dolor sit amet, sed mutat oport- ere ea, laudem graece tibique ut mea. Quo ex definiebas complectitur.</p>
    </div>
  </div>
</section>
<!-- end services section -->

<!-- crew section -->
<section id="crew">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1">
      <h1>Our Crew</h1>
    </div>
  </div>

  <ul class="grid grid-pad" id="crew-list">
    <li class="col-1-5 mobile-col-1-2 crew-member">
      <div class="overlay-container">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/zac_01.jpg' ?>">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/zac_02.jpg' ?>">
      </div>
      <div class="blurb">
        <h6>Zachary</h6>
        <h6>Creative Director</h6>
        <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea.</p>
      </div>
    </li>
    <li class="col-1-5 mobile-col-1-2 crew-member">
      <div class="overlay-container">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/yuki_01.jpg' ?>">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/yuki_02.jpg' ?>">
      </div>
      <div class="blurb">
        <h6>Yuki</h6>
        <h6>Creative Director</h6>
        <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea.</p>
      </div>
    </li>
    <li class="col-1-5 mobile-col-1-2 crew-member">
      <div class="overlay-container">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/aries_01.jpg' ?>">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/aries_02.jpg' ?>">
      </div>
      <div class="blurb">
        <h6>Aries</h6>
        <h6>Creative Director</h6>
        <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea.</p>
      </div>
    </li>
    <li class="col-1-5 mobile-col-1-2 crew-member">
      <div class="overlay-container">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/zac_01.jpg' ?>">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/zac_02.jpg' ?>">
      </div>
      <div class="blurb">
        <h6>Patrick</h6>
        <h6>Creative Director</h6>
        <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea.</p>
      </div>
    </li>
    <li class="col-1-5 mobile-col-1-2 crew-member">
      <div class="overlay-container">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/yao_01.jpg' ?>">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/yao_02.jpg' ?>">
      </div>
      <div class="blurb">
        <h6>Yan</h6>
        <h6>Creative Director</h6>
        <p>Voluptaria vix ut. Dicat philosophia vel te, vix amet laoreet ea.</p>
      </div>
    </li>
  </ul>
</section>


<?php get_header(); ?>
<?php get_footer(); ?>
<!-- <section id="content" role="main">  -->
<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php //get_template_part( 'entry' ); ?>
<?php //comments_template(); ?>
<?php //endwhile; endif; ?>
<?php //get_template_part( 'nav', 'below' ); ?>
<!-- </section> -->
<?php //get_sidebar(); ?>
