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

  <a href="#" class="menu-trigger">
    <i class="burger"></i>
  </a>
</section>
<!-- end branding section -->

<!-- work section -->
<section id="work">
  <a name="work"></a>
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1">
      <h1>Featured Work</h1>
    </div>
    <div class="col-1-1 mobile-col-1-1">
      <div class="masonry" id="work-container">
        <div class="grid-sizer"></div>
        <?php
          $args=array(
            'post_type' => 'project',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts'=> 1,
            'order' => 'DESC',
            'orderby' => 'date'
          );
          $query = new WP_Query($args);
          if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();
        ?>

        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="grid-item work-item grid-item--half">
          <div class="work-overlay"><h3><?php the_title(); ?></h3></div>
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists
              the_post_thumbnail('cover'); // Declare pixel size you need inside the array
          else: ?>
          <img src="http://placehold.it/450x450">
          <?php endif; ?>
        </a>
            <?php endwhile; wp_reset_query(); ?>
        <?php else: ?>
        </div> <!-- end project grid -->
          <h2 style="background-color:#1D1D1F; color:#eee;" class="text-center"><?php _e( 'Sorry, nothing to display yet.'); ?></h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- <section id="work">
  <div class="grid grid-pad">
    <div class="col-1-1 mobile-col-1-1">
      <h1>Featured Work</h1>
    </div>
    <div class="col-1-1 mobile-col-1-1">
      <div class="masonry" id="work-container">
        <div class="grid-sizer"></div>
        <a href class="grid-item  work-item grid-item--width3">
          <div class="work-overlay"><h3>Dope Project</h3></div>
          <img src="<?php echo get_template_directory_uri() . '/images/work/02.jpg' ?>" alt />
        </a>
        <a href class="grid-item work-item grid-item--width3">
          <div class="work-overlay"><h3>Dope Project</h3></div>
          <img src="<?php echo get_template_directory_uri() . '/images/work/04.jpg' ?>" alt />
        </a>
        <a href class="grid-item work-item grid-item--width2">
          <div class="work-overlay"><h3>Dope Project</h3></div>
          <img src="<?php echo get_template_directory_uri() . '/images/work/03.jpg' ?>" alt />
        </a>
        <a href class="grid-item work-item grid-item--width2">
          <div class="work-overlay"><h3>Dope Project</h3></div>
          <img src="<?php echo get_template_directory_uri() . '/images/work/05.jpg' ?>" alt />
        </a>
        <a href class="grid-item work-item grid-item--width3">
          <div class="work-overlay"><h3>Dope Project</h3></div>
          <img src="<?php echo get_template_directory_uri() . '/images/work/06.jpg' ?>" alt />
        </a>
        <a href class="grid-item work-item grid-item--width2">
          <div class="work-overlay"><h3>Long Ass Name Project That No One Gives A Shit!</h3></div>
          <img src="<?php echo get_template_directory_uri() . '/images/work/01.jpg' ?>" alt />
        </a>
      </div>
  </div>
  </div>
</section> -->
<!-- end work section -->

<!-- services section -->
<section id="services">
  <a name="services"></a>
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
  <a name="team"></a>
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
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/pj_01.jpg' ?>">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/crew/pj_02.jpg' ?>">
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

  <div class="grid grid-pad" id="we-are">
    <div class="col-1-3 block clearfix">
      <div class="text-right">
        <h4>We are</h4>
      </div>
      <div class="col-1-2 mobile-col-1-2">
        <h4 class="strike">Lazy</h4>
        <h4>Efficient</h4>
        <br>
        <h4 class="strike">Crazy</h4>
        <h4>Creative</h4>
        <br>
        <h4 class="strike">Sentimental</h4>
        <h4>Empathetic</h4>
      </div>
    </div>

    <div class="col-1-3 block clearfix">
      <div class="text-right">
        <h4>We make</h4>
      </div>
      <div class="col-1-2 mobile-col-1-2">
        <h4 class="strike">Coffee</h4>
        <h4>Conversation</h4>
        <br>
        <h4 class="strike">Prints</h4>
        <h4>Visual experience</h4>
        <br>
        <h4 class="strike">Rock</h4>
        <h4>Interaction</h4>
      </div>
    </div>

    <div class="col-1-3 block clearfix">
      <div class="text-right">
        <h4>We love</h4>
      </div>
      <div class="col-1-2 mobile-col-1-2">
        <h4 class="strike">Travelling</h4>
        <h4>Exploration</h4>
        <br>
        <h4 class="strike">Crafting</h4>
        <h4>Innovation</h4>
        <br>
        <h4 class="strike">Ourselves</h4>
        <h4 style="text-transform:none;font-style:italic;">and You.</h4>
      </div>
    </div>
  </div>
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
