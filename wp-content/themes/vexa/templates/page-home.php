<?php global $post;
/**
 * Template name: Home
 * @author : Hoang Anh Tuan
 */
get_header();?>

<?php get_template_part('template-parts/home/heroslider'); ?>

<?php get_template_part('template-parts/home/services'); ?>

<?php get_template_part('template-parts/home/about'); ?>

<div class="mx-auto">
    <img
        src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/new.gif' ); ?>"
        alt="Mô tả ngắn cho gif"
        loading="lazy"
    />
</div>
<?php 
get_footer();