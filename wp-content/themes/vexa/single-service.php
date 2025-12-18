<?php get_header(); ?>

<?php
    $service_id = get_queried_object_id();
    $service_title = get_the_title( $service_id );
    $hero_bg = get_the_post_thumbnail_url( $service_id, 'full' );
    $services_archive_url = get_post_type_archive_link( 'service' );
    if ( empty( $services_archive_url ) ) {
        $services_archive_url = home_url( '/' );
    }
?>

<!-- Banner  -->
<div class="pb-12 overflow-hidden">
    <div class="relative overflow-hidden rounded-2xl bg-gray-900">
        <?php if ( ! empty( $hero_bg ) ) : ?>
            <div class="absolute inset-0 bg-top bg-cover" style="background-image: url('<?php echo esc_url( $hero_bg ); ?>');"></div>
        <?php endif; ?>
        <div class="absolute inset-0"></div>
        <div class="relative max-w-7xl mx-auto h-[600px] flex flex-col items-center justify-center text-center px-4">
            <nav class="text-sm text-white/80" aria-label="Breadcrumb">
                <ol class="flex flex-wrap items-center justify-center gap-x-2 gap-y-1">
                    <li>
                        <a class="hover:text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a>
                    </li>
                    <li class="opacity-60">/</li>
                    <li>
                        <a class="hover:text-white" href="<?php echo esc_url( $services_archive_url ); ?>">Dịch vụ</a>
                    </li>
                    <li class="opacity-60">/</li>
                    <li class="text-white font-semibold">
                        <?php echo esc_html( $service_title ); ?>
                    </li>
                </ol>
            </nav>

            <h1 class="mt-4 text-3xl font-black tracking-tight text-white sm:text-4xl">
                <?php echo esc_html( $service_title ); ?>
            </h1>
        </div>
    </div>
</div>


<!-- List Services Package-->
<div class="max-w-7xl mx-auto">
    <div class="flex flex-col gap-4 mb-20">
    <div class="px-4 mb-10 text-center">
        <h2 class="mb-3 text-3xl font-bold text-gray-900 dark:text-white">Lựa Chọn Gói Dịch Vụ</h2>
        <p class="text-gray-500 dark:text-gray-400">Chọn giải pháp phù hợp nhất với quy mô và nhu cầu của bạn</p>
    </div>
    <div class="grid grid-cols-1 gap-6 px-4 md:grid-cols-2 lg:grid-cols-3">
        <?php
            $relation_field_candidates = array(
                'service_pricing',
                'service_pricings',
                'pricing',
                'pricings',
                'related_pricing',
                'related_pricings',
                'pricing_table',
                'pricing_tables',
            );

            $pricing_posts = array();

            foreach ( $relation_field_candidates as $field_name ) {
                if ( function_exists( 'get_field' ) ) {
                    $value = get_field( $field_name, $service_id );
                    if ( ! empty( $value ) ) {
                        $pricing_posts = $value;
                        break;
                    }
                }
            }

            if ( empty( $pricing_posts ) ) {
                foreach ( $relation_field_candidates as $field_name ) {
                    $q = new WP_Query(array(
                        'post_type' => 'pricing',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'orderby' => 'menu_order date',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => $field_name,
                                'value' => '"' . $service_id . '"',
                                'compare' => 'LIKE',
                            ),
                        ),
                    ));

                    if ( $q->have_posts() ) {
                        $pricing_posts = $q->posts;
                        wp_reset_postdata();
                        break;
                    }
                    wp_reset_postdata();
                }
            }

            if ( ! is_array( $pricing_posts ) ) {
                $pricing_posts = array();
            }

            $pricing_posts = array_values( array_filter( $pricing_posts ) );
            $pricing_posts = array_slice( $pricing_posts, 0, 3 );

            $normalized = array();
            foreach ( $pricing_posts as $p ) {
                $normalized[] = is_object( $p ) ? $p : get_post( $p );
            }
            $pricing_posts = array_values( array_filter( $normalized ) );

            $featured_index = -1;
            foreach ( $pricing_posts as $idx => $p ) {
                $is_featured = function_exists( 'get_field' ) ? get_field( 'pricing_feature', $p->ID ) : null;
                if ( $is_featured === null || $is_featured === '' ) {
                    $is_featured = get_post_meta( $p->ID, 'pricing_feature', true );
                }
                if ( $is_featured === '1' || $is_featured === 1 || $is_featured === true || $is_featured === 'true' ) {
                    $featured_index = $idx;
                    break;
                }
            }

            if ( $featured_index < 0 && count( $pricing_posts ) === 3 ) {
                $featured_index = 1;
            }
        ?>

        <?php foreach ( $pricing_posts as $idx => $pricing_post ) : ?>
            <?php
                $title = get_the_title( $pricing_post );
                $subtitle = function_exists( 'get_field' ) ? get_field( 'pricing_subtitle', $pricing_post->ID ) : null;
                if ( $subtitle === null || $subtitle === '' ) {
                    $subtitle = get_post_meta( $pricing_post->ID, 'pricing_subtitle', true );
                }
                $currency = function_exists( 'get_field' ) ? get_field( 'pricing_currency', $pricing_post->ID ) : null;
                if ( $currency === null || $currency === '' ) {
                    $currency = get_post_meta( $pricing_post->ID, 'pricing_currency', true );
                }
                $price = function_exists( 'get_field' ) ? get_field( 'pricing_price', $pricing_post->ID ) : null;
                if ( $price === null || $price === '' ) {
                    $price = get_post_meta( $pricing_post->ID, 'pricing_price', true );
                }
                $btn_text = function_exists( 'get_field' ) ? get_field( 'pricing_btn_text', $pricing_post->ID ) : null;
                if ( $btn_text === null || $btn_text === '' ) {
                    $btn_text = get_post_meta( $pricing_post->ID, 'pricing_btn_text', true );
                }
                $btn_link = function_exists( 'get_field' ) ? get_field( 'pricing_btn_link', $pricing_post->ID ) : null;
                if ( $btn_link === null || $btn_link === '' ) {
                    $btn_link = get_post_meta( $pricing_post->ID, 'pricing_btn_link', true );
                }

                $is_featured_card = ( $idx === $featured_index );
                $features_html = '';
                $features = function_exists( 'get_field' ) ? get_field( 'pricing_features', $pricing_post->ID ) : null;
                if ( is_array( $features ) ) {
                    foreach ( $features as $feature_row ) {
                        if ( ! is_array( $feature_row ) ) {
                            continue;
                        }
                        $feature_text = isset( $feature_row['text'] ) ? $feature_row['text'] : '';
                        $feature_text = trim( wp_strip_all_tags( (string) $feature_text ) );
                        if ( $feature_text === '' ) {
                            continue;
                        }

                        $features_html .= '<div class="flex gap-3 text-sm font-medium leading-normal text-gray-700 dark:text-gray-200">';
                        $features_html .= '<span class="text-primary w-[20px] h-[20px] inline-flex items-center justify-center">'
                            . '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-[20px] h-[20px] fill-current">'
                            . '<path d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM320 112C205.1 112 112 205.1 112 320C112 434.9 205.1 528 320 528C434.9 528 528 434.9 528 320C528 205.1 434.9 112 320 112zM390.7 233.9C398.5 223.2 413.5 220.8 424.2 228.6C434.9 236.4 437.3 251.4 429.5 262.1L307.4 430.1C303.3 435.8 296.9 439.4 289.9 439.9C282.9 440.4 276 437.9 271.1 433L215.2 377.1C205.8 367.7 205.8 352.5 215.2 343.2C224.6 333.9 239.8 333.8 249.1 343.2L285.1 379.2L390.7 234z"/>'
                            . '</svg>'
                            . '</span> ' . esc_html( $feature_text );
                        $features_html .= '</div>';
                    }
                }

                if ( empty( $btn_text ) ) {
                    $btn_text = $is_featured_card ? 'Chọn Gói Này' : 'Bắt Đầu Ngay';
                }
                if ( empty( $btn_link ) ) {
                    $btn_link = '#';
                }
            ?>

            <?php if ( $is_featured_card ) : ?>
                <div class="group relative flex flex-col gap-6 rounded-2xl border-2 border-lime-400 bg-white dark:bg-[#20321b] p-8 shadow-xl transition-all duration-300 hover:-translate-y-1 z-10 scale-[1.02] lg:scale-105">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-lime-400 text-[#152112] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider"> Phổ biến nhất </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold leading-tight text-gray-900 dark:text-white"><?php echo esc_html( $title ); ?></h3>
                        <?php if ( ! empty( $subtitle ) ) : ?>
                            <p class="text-sm text-gray-500 dark:text-gray-400"><?php echo esc_html( $subtitle ); ?></p>
                        <?php endif; ?>
                        <div class="flex items-baseline gap-1 mt-4">
                            <span class="text-gray-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]"><?php echo esc_html( trim( $currency . $price ) ); ?></span>
                            <span class="text-base font-medium text-gray-500 dark:text-gray-400">/dự án</span>
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 gap-4">
                        <?php echo $features_html; ?>
                    </div>
                    <a href="<?php echo esc_url( $btn_link ); ?>" class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-4 bg-lime-400 text-[#152112] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-lime-500 transition-all shadow-lg shadow-primary/20">
                        <span class="truncate"><?php echo esc_html( $btn_text ); ?></span>
                    </a>
                </div>
            <?php else : ?>
                <div class="group flex flex-col gap-6 rounded-2xl border border-gray-200 dark:border-[#406336] bg-white dark:bg-[#20321b] p-8 transition-all duration-300 hover:border-primary hover:shadow-lg hover:-translate-y-1">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-bold leading-tight text-gray-900 dark:text-white"><?php echo esc_html( $title ); ?></h3>
                        <?php if ( ! empty( $subtitle ) ) : ?>
                            <p class="text-sm text-gray-500 dark:text-gray-400"><?php echo esc_html( $subtitle ); ?></p>
                        <?php endif; ?>
                        <div class="flex items-baseline gap-1 mt-4">
                            <span class="text-gray-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]"><?php echo esc_html( trim( $currency . $price ) ); ?></span>
                            <span class="text-base font-medium text-gray-500 dark:text-gray-400">/dự án</span>
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 gap-4">
                        <?php echo $features_html; ?>
                    </div>
                    <a href="<?php echo esc_url( $btn_link ); ?>" class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-4 bg-lime-400 text-gray-900 text-sm font-bold leading-normal tracking-[0.015em] group-hover:bg-lime-500 group-hover:text-[#152112] transition-colors">
                        <span class="truncate"><?php echo esc_html( $btn_text ); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
</div>

<?php get_footer(); ?>