<?php
    $services_query = new WP_Query([
        'post_type'      => 'service',
        'posts_per_page' => 6,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);
?>

<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Left Content -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div
                        class="w-6 h-6 rounded-full border-2 border-dashed border-gray-800"
                    ></div>
                    <span
                        class="text-gray-800 font-semibold uppercase tracking-wide text-sm"
                    >OUR SERVICES</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Results-Driven SEO & Digital Marketing Services
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    At SEOX, We Provide Tailored SEO And Digital Marketing Solutions
                    Designed To Boost Your Online Visibility, Drive Targeted Traffic,
                    And Maximize Conversions.
                </p>

                <a
                    href="<?php echo esc_url( get_post_type_archive_link( 'service' ) ); ?>"
                    class="inline-flex items-center px-8 py-4 bg-lime-400 text-black font-semibold rounded-full hover:bg-lime-500 transition shadow-lg"
                >
                    View All Services
                </a>
            </div>

            <!-- Right Image -->
            <div class="rounded-3xl overflow-hidden shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=500&fit=crop"
                    alt="Team working on laptops"
                    class="w-full h-full object-cover"
                    loading="lazy"
                />
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php if ( $services_query->have_posts() ) : ?>
                <?php
                    $index = 1;
                    while ( $services_query->have_posts() ) :
                        $services_query->the_post();
                        $service_number = $index < 10 ? $index : '';
                        $excerpt_raw   = get_the_excerpt();
                        if ( ! $excerpt_raw ) {
                            $excerpt_raw = wp_strip_all_tags( get_the_content() );
                        }
                        $excerpt = wp_trim_words( $excerpt_raw, 25, '...' );
                ?>
                    <article
                        class="bg-white rounded-2xl p-8 hover:shadow-lg transition group h-full flex flex-col"
                    >
                        <header class="flex items-start gap-4 mb-4">
                            <div
                                class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center text-lime-400 font-bold text-xl flex-shrink-0 group-hover:bg-lime-400 group-hover:text-gray-900 transition"
                            >
                                <?php echo esc_html( $service_number ); ?>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mt-2">
                                <a
                                    href="<?php the_permalink(); ?>"
                                    class="hover:text-lime-500 transition"
                                >
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </header>
                        <div class="text-gray-600 leading-relaxed flex-1">
                            <?php echo esc_html( $excerpt ); ?>
                        </div>
                        <div class="mt-4">
                            <a
                                href="<?php the_permalink(); ?>"
                                class="text-sm font-semibold text-gray-900 hover:text-lime-500 inline-flex items-center gap-1"
                                aria-label="<?php echo esc_attr( sprintf( __( 'Read more about %s', 'vexa' ), get_the_title() ) ); ?>"
                            >
                                Read More
                                <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </article>
                <?php
                        $index++;
                    endwhile;
                    wp_reset_postdata();
                ?>
            <?php else : ?>
                <p class="text-gray-600 col-span-full">
                    <?php esc_html_e( 'No services found. Please add some service posts.', 'vexa' ); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>