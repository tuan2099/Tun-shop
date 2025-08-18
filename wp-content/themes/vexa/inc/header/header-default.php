<?php 
    $logo_url = get_template_directory_uri().'/assets/img/logo.svg' ;
?>

<!-- Back to top button -->
<a id="vexa-go-top"></a>
<!-- // Back to top button -->

<!-- ==================== Header ======================= -->
<header id="layout-1" class="default">
    <div class="header-body">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"> <img src="<?php echo esc_url($logo_url) ; ?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>"> </a>

            <a class="mobile-toggle-default mobile-menu-show"><i class="fa fa-bars"></i></a>

            <!-- Primary menu -->
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'  => 'menu-main', 'menu_class' => 'nav-menu' , 'container' => false, 'fallback_cb'=> false ) ); ?>

            <!-- Mobile menu -->
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id'  => 'mobile-menu', 'menu_class' => 'nav-mobile-menu' , 'container' => false,'fallback_cb'=> false ) ); ?>

        </div>
        <div class="clearfix"></div>
    </div>
</header>
<!-- ==================== End Header ======================= -->
