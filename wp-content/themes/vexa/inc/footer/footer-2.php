<?php 
    global $vexatheme_option;
    $preloader_img = get_template_directory_uri().'/assets/img/loading-1.svg' ;

?>


<!-- preloader -->
<?php if($vexatheme_option['vexatheme_preloader'] == '1'){ ?>
<div class="vexa-preloader">
    <div class="logo">
        <img src="<?php echo esc_url($preloader_img) ; ?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>">
    </div>
</div>
<?php } ?>

<!-- end preloader -->
