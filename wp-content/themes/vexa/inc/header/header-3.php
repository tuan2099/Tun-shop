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
<header id="layout-1" class="small-padding layout-3">
    <div class="header-top background-2">
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

        <div class="padding-tb-15px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"> <img src="<?php if(is_page() && !empty($vexatheme_meta['custom_header'])){ echo esc_url($vexatheme_meta['main_logo']['url']); } else{ echo esc_url($vexatheme_option['main_logo']['url']); }?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>"> </a>

                        <ul class="tools in-small">
                            <li class="search-btn"><a><i class="fa fa-search"></i></a>
                                <div class="search-box">
                                    <?php get_search_form(); ?>
                                </div>
                            </li>
                            <li><a class="btn-shopping-basket"><i class="fa fa-shopping-basket"></i></a></li>
                            <li><a class="sidebar-var-link"><i class="fa fa-th-large"></i></a></li>
                            <li><a class="btn-mobile-menu mobile-menu-show"><i class="fa fa-bars"></i></a></li>
                        </ul>

                    </div>
                    <div class="col-lg-9 mobile-none">
                        <div class=" contact-info">
                            <ul class="contact-list">
                                <li><a href="<?php echo esc_url( ($vexatheme_option['email']) ); ?>"><i class="glyph-icon flaticon-interface"></i> <?php echo esc_html($vexatheme_option['email']); ?><span><?php esc_html_e( 'Email Address ', 'vexa' ) ?></span></a>
                                    <div class="clearfix"></div>
                                </li>
                                <li><a href="<?php echo esc_url( ($vexatheme_option['location_url']) ); ?>"><i class="glyph-icon flaticon-maps-and-flags"></i> <?php echo esc_html($vexatheme_option['location']); ?><span><?php esc_html_e( 'Office Address', 'vexa' ) ?></span> </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li><a href="<?php echo esc_url( ($vexatheme_option['telphone']) ); ?>"><i class="glyph-icon flaticon-communications"></i> <?php echo esc_html($vexatheme_option['telphone']); ?><span><?php esc_html_e( 'Call us free', 'vexa' ) ?></span> </a>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="clearfix"></div>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'  => 'mobile-menu', 'menu_class' => 'nav-mobile-menu' , 'container' => false,'fallback_cb'=> false ) ); ?>

            </div>
        </div>

        <!-- Mobile menu -->

        <div class="container mobile-none">
            <div class="menu-navbar header-body">
                <!-- Primary menu -->
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'  => 'menu-main', 'menu_class' => 'nav-menu' , 'container' => false, 'fallback_cb'=> false ) ); ?>
            </div>
        </div>

    </div>

</header>
<!-- ==================== End Header ======================= -->
