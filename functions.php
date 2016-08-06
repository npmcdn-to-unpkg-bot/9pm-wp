<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
  load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  global $content_width;
  if ( ! isset( $content_width ) ) $content_width = 1140;
  register_nav_menus(
    array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
    );
}

add_action( 'wp_enqueue_scripts', 'blankslate_add_stylesheet' );
function blankslate_add_stylesheet()
{
  wp_enqueue_style( 'grid', get_stylesheet_directory_uri().'/grid.css', false );
  wp_enqueue_style( 'crimson', 'https://fonts.googleapis.com/css?family=Crimson+Text:400,700', false );
  wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,300,700', false );
}

add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
  wp_enqueue_script( 'jquery2', 'https://code.jquery.com/jquery-2.2.4.min.js' );
  wp_enqueue_script( 'masonry', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array('jquery2') );
  wp_enqueue_script( 'image-loaded', get_stylesheet_directory_uri().'/js/imagesloaded.js' );
  wp_register_script( 'app', get_stylesheet_directory_uri().'/js/app.js', array('jquery2', 'masonry', 'image-loaded'), true );
  wp_enqueue_script( 'app' );
}

add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
  if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
  if ( $title == '' ) {
    return '&rarr;';
  } else {
    return $title;
  }
}

add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
  return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
  register_sidebar( array (
    'name' => __( 'Sidebar Widget Area', 'blankslate' ),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}
function blankslate_custom_pings( $comment )
{
  $GLOBALS['comment'] = $comment;
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
  <?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
  if ( !is_admin() ) {
    global $id;
    $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
    return count( $comments_by_type['comment'] );
  } else {
    return $count;
  }
}

// custom post type
function project_init() {
    $args = array(
        'label' => 'Project',
        'public'    =>  true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'work' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 2,
        'menu_icon'          => 'dashicons-art',
        'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' ),
        'taxonomies'         => array( 'category' )
    );

    register_post_type( 'project', $args );
}
add_action( 'init', 'project_init' );

// custom gallery
function custom_post_gallery($output, $attr) {
  // Initialize
  global $post, $wp_locale;

  // Gallery instance counter
  static $instance = 0;
  $instance++;

  // Validate the author's orderby attribute
  if ( ! empty( $attr['ids'] ) ) {
    // 'ids' is explicitly ordered, unless you specify otherwise.
    if ( empty( $attr['orderby'] ) ) {
        $attr['orderby'] = 'post__in';
    }
    $attr['include'] = $attr['ids'];
  }

  extract( shortcode_atts( array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post->ID,
    'itemtag'    => 'ul',
    'icontag'    => 'li',
    'captiontag' => 'dd',
    'columns'    => 3,
    'size'       => 'full',
    'include'    => '',
    'exclude'    => ''
  ), $attr ) );

  // Initialize
  $id = intval( $id );
  $attachments = array();
  if ( $order == 'RAND' ) $orderby = 'none';

  if ( ! empty( $include ) ) {

      // Include attribute is present
      $include = preg_replace( '/[^0-9,]+/', '', $include );
      $_attachments = get_posts( array( 'include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ) );

      // Setup attachments array
      foreach ( $_attachments as $key => $val ) {
          $attachments[ $val->ID ] = $_attachments[ $key ];
      }

  } else if ( ! empty( $exclude ) ) {

      // Exclude attribute is present 
      $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );

      // Setup attachments array
      $attachments = get_children( array( 'post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ) );
  } else {
      // Setup attachments array
      $attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ) );
  }

  if ( empty( $attachments ) ) return '';

  // Filter gallery differently for feeds
  if ( is_feed() ) {
      $output = "\n";
      foreach ( $attachments as $att_id => $attachment ) $output .= wp_get_attachment_link( $att_id, $size, true ) . "\n";
      return $output;
  }

  // Filter tags and attributes
  $itemtag = tag_escape( $itemtag );
  $captiontag = tag_escape( $captiontag );
  $float = is_rtl() ? 'right' : 'left';
  $selector = "gallery-{$instance}";

  $output = "<div id='$selector'><{$itemtag} class='masonry'>";
  $output .= "<{$icontag} class='grid-sizer'></{$icontag}>";

  // Iterate through the attachments in this gallery instance
  $counter = 1;
  foreach ( $attachments as $id => $attachment ) {
      $img_width = wp_get_attachment_metadata( $id )["width"];
      $img_height = wp_get_attachment_metadata( $id )["height"];
      $img_class = '';

      if (($counter - 1) % 3 == 0) {
        $img_class = "grid-item--width3";
      } 
      else {
        $img_class = "grid-item--width2";
      }

      $counter++;

      // Image link
      $link = wp_get_attachment_image_src( $attachment->ID, $size );

      // icontag
      $output .= "
      <{$icontag} class='grid-item {$img_class}'>
          <img src={$link[0]}>
      </{$icontag}>";

      if ( $captiontag && trim( $attachment->post_excerpt ) ) {
          // captiontag
          $output .= "
          <{$captiontag} class='gallery-caption'>
              " . wptexturize($attachment->post_excerpt) . "
          </{$captiontag}>";
      }
  }
  // End itemtag
  $output .= "</{$itemtag}>";

  // End gallery output
  $output .= "</div>";

  return $output;
}

add_filter( 'post_gallery', 'custom_post_gallery', 10, 2 );