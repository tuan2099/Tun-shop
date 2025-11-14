<?php 

// share button with icon 
// tuntheme_share_post();
function tuntheme_share_post() {?>
  <a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php  the_permalink(); ?>"><span class="share-box"><i class="fa fa-facebook"></i></span> facebook</a>
	<a class="twitter" target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php echo urlencode( get_the_title() ); ?>%20-%20<?php the_permalink(); ?>"><span class="share-box"><i class="fa fa-twitter"></i></span> twitter</a>
	<a class="google" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><span class="share-box"><i class="fa fa-google-plus"></i> google +</span></a>
<?php
}

// sharebutton no icon 
// tuntheme_share_post2();
function tuntheme_share_post_2() {?>
  <!--  Social -->
  <ul class="social-media">
      <li><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php  the_permalink(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a class="google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
      <li><a class="twitter" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php echo urlencode( get_the_title() ); ?>%20-%20<?php the_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  </ul>
  <!-- // Social -->
<?php
}

function vexa_header_layout() {
  global $vexatheme_option, $vexatheme_meta;

  if(is_page() && !empty($vexatheme_meta['custom_header'])){
   get_template_part('inc/header/header', $vexatheme_meta['header_layout']);
  }
  else{ get_template_part('inc/header/header', $vexatheme_option['header_layout']);
  }
}

// Add basic widget
function vexa_footer_widgets() {
  register_sidebar( array(
    'name'          => esc_html__( 'Footer widgets One', 'vexa' ),
    'id'            => 'footer-1',
    'description'   => esc_html__( 'Add widgets here.', 'vexa' ),
    'before_widget' => '<div  id="%1$s"  class="block-footer layout-1 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title"><span>',
    'after_title'   => '</span></h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer widgets Two', 'vexa' ),
    'id'            => 'footer-2',
    'description'   => esc_html__( 'Add widgets here.', 'vexa' ),
    'before_widget' => '<div  id="%1$s"  class="block-footer layout-1 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title"><span>',
    'after_title'   => '</span></h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer widgets Three', 'vexa' ),
    'id'            => 'footer-3',
    'description'   => esc_html__( 'Add widgets here.', 'vexa' ),
    'before_widget' => '<div  id="%1$s"  class="block-footer layout-1 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title"><span>',
    'after_title'   => '</span></h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer widgets Four', 'vexa' ),
    'id'            => 'footer-4',
    'description'   => esc_html__( 'Add widgets here.', 'vexa' ),
    'before_widget' => '<div  id="%1$s"  class="block-footer layout-1 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="block-title"><span>',
    'after_title'   => '</span></h3>',
  ) );
}