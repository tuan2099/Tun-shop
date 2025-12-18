<?php global $post;
/**
 * Template name: Contact
 * @author : Hoang Anh Tuan
 */
get_header();

$page_id = get_queried_object_id();
$page_title = get_the_title( $page_id );
$hero_bg = get_the_post_thumbnail_url( $page_id, 'full' );
?>

<!-- Banner  -->
<div class="pb-12 overflow-hidden">
    <div class="relative overflow-hidden rounded-2xl bg-gray-900">
        <?php if ( ! empty( $hero_bg ) ) : ?>
            <div class="absolute inset-0 bg-top bg-cover" style="background-image: url('<?php echo esc_url( $hero_bg ); ?>');"></div>
        <?php endif; ?>
        <div class="absolute inset-0"></div>
        <div class="relative h-[600px] flex flex-col items-center justify-center text-center px-4">
            <nav class="text-sm text-white/80" aria-label="Breadcrumb">
                <ol class="flex flex-wrap items-center justify-center gap-x-2 gap-y-1">
                    <li>
                        <a class="hover:text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a>
                    </li>
                    <li class="opacity-60">/</li>
                    <li class="text-white font-semibold">
                        <?php echo esc_html( $page_title ); ?>
                    </li>
                </ol>
            </nav>

            <h1 class="mt-4 text-3xl font-black tracking-tight text-white sm:text-4xl">
                <?php echo esc_html( $page_title ); ?>
            </h1>
        </div>
    </div>
</div>

<?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>