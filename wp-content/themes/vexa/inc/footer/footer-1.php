<?php 
    global $vexatheme_option;
    $preloader_img = get_template_directory_uri().'/assets/img/loading-1.svg' ;

?>

<?php if($vexatheme_option['action_footer'] == '1') { ?>
<div class="footer-action">
    <div class="container">
        <div class="icon"><img src="<?php echo esc_url($vexatheme_option['action_icon']['url']); ?>"></div>
        <h2><?php echo esc_html( ($vexatheme_option['action_text']) ); ?></h2>
        <a href="<?php echo esc_url( ($vexatheme_option['action_link']) ); ?>" class="more"><?php echo esc_html( ($vexatheme_option['action_text_link']) ); ?></a>
        <div class="clearfix"></div>

    </div>
</div>
<?php } ?>
<div class="top-footer">
    <div class="container">

        <div class="contact-info">
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
                <li><a href="<?php echo esc_url( ($vexatheme_option['location_url']) ); ?>"><i class="glyph-icon flaticon-time"></i> <?php echo esc_html($vexatheme_option['work_time']); ?><span><?php esc_html_e( 'Work Hours', 'vexa' ) ?></span> </a>
                    <div class="clearfix"></div>
                </li>
            </ul>
        </div>

    </div>
</div>
<!-- ====================   Footer ======================= -->
<footer class="layout-1">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="space-y-3">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>

            <div class="space-y-3">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>

            <div class="space-y-3">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>

            <div class="space-y-3">
                <?php dynamic_sidebar('footer-4'); ?>
            </div>
        </div>
    </div>


    <div class="container mx-auto px-4">
        <div class="copy-right py-4 border-t border-gray-200">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                
                <div class="text-copy text-sm text-gray-600">
                    <?php echo wp_kses_post($vexatheme_option['_copyright']); ?>
                </div>
                
                <div>
                    <ul class="social flex justify-start md:justify-end space-x-4">
                        <?php vexatheme_social_links(); ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</footer>
<!-- ====================   End Footer ======================= -->





<!-- ====================  Sidebar ======================= -->
<div class="close-vexa-sidebar"></div>
<div id="vexa-sidebar" class="vexa-sidebar widget-area vexa-widget-area">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>
<!-- ====================  End Sidebar ======================= -->


