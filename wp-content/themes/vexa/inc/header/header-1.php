<?php 
    global $vexatheme_option , $vexatheme_meta ; 
?>


<!-- Back to top button -->
<?php 
if ( !empty($vexatheme_option['vexatheme_scroll_top']) ) : ?>
  <a id="vexa-go-top" class="fixed bottom-6 right-6 z-50 p-3 rounded-full bg-indigo-600 text-white shadow-lg hover:bg-indigo-700"><i class="fa-solid fa-arrow-up"></i></a>
<?php endif; ?>
<!-- // Back to top button -->

<!-- ==================== Header ======================= -->
<header id="layout-1">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <ul class="contact">
                        <li><a href="<?php echo esc_url( ($vexatheme_option['email']) ); ?>"><i class="fa fa-envelope-open-o"></i> <span><?php esc_attr_e( 'Email Address :', 'vexa' ) ?></span> <?php echo esc_html($vexatheme_option['email']); ?></a></li>
                        <li><a href="<?php echo esc_url( ($vexatheme_option['location_url']) ); ?>"><i class="fa fa-map-marker"></i> <span><?php esc_attr_e( 'Office Address :', 'vexa' ) ?></span> <?php echo esc_html($vexatheme_option['location']); ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="social">
                        <?php vexatheme_social_links(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="header-body">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"> <img src="<?php if(is_page() && !empty($vexatheme_meta['custom_header'])){ echo esc_url($vexatheme_meta['main_logo']['url']); } else{ echo esc_url($vexatheme_option['main_logo']['url']); }?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>"> </a>
            <ul class="tools">
                <li class="search-btn"><a><i class="fa fa-search"></i></a>
                    <div class="search-box">
                        <?php get_search_form(); ?>
                    </div>
                </li>
                <li><a class="btn-shopping-basket"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a class="sidebar-var-link"><i class="fa fa-th-large"></i></a></li>
                <li><a class="btn-mobile-menu mobile-menu-show"><i class="fa fa-bars"></i></a></li>
            </ul>
            <div class="call_us">
                <div class="icon-phone"></div>
                <h3><?php esc_attr_e( 'Have any Questions?', 'vexa' ) ?></h3>
                <h3 class="nub"><a href="<?php echo esc_url( ($vexatheme_option['telphone']) ); ?>"><?php echo esc_html($vexatheme_option['telphone']); ?></a></h3>
            </div>
            <!-- Primary menu -->
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'  => 'menu-main', 'menu_class' => 'nav-menu' , 'container' => false, 'fallback_cb'=> false ) ); ?>

            <!-- Mobile menu -->
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'  => 'mobile-menu', 'menu_class' => 'nav-mobile-menu' , 'container' => false,'fallback_cb'=> false ) ); ?>

        </div>
    </div>
</header>
<!-- ==================== End Header ======================= -->





<!-- ====================  Mobile Menu ======================= -->
<div class="close-vexa-header-menu"></div>
<div id="vexa-header-menu" class="vexa-header-menu">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"> <img src="<?php if(is_page() && !empty($vexatheme_meta['custom_header'])){ echo esc_url($vexatheme_meta['main_logo']['url']); } else{ echo esc_url($vexatheme_option['main_logo']['url']); }?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>"> </a>

    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'  => 'menu-main-mobile', 'menu_class' => 'nav-menu-mobile' , 'container' => false, 'fallback_cb'=> false ) ); ?>


</div>
<!-- ====================  End Mobile Menu ======================= -->
