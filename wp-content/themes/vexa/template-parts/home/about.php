<?php
    // Get About section data from ACF group field
    $about = get_field( 'about_section' );
    if ( ! is_array( $about ) ) {
        $about = [];
    }

    $badge_text    = $about['badge_text'] ?? 'WHY CHOOSE US';
    $heading_line1 = $about['heading_line_1'] ?? "Why We're the Right";
    $heading_line2 = $about['heading_line_2'] ?? 'Choice for Your Business';
    $button_text   = $about['button_text'] ?? 'Work With Us';
    $button_link   = $about['button_link'] ?? '#';

    $about_image   = $about['main_image'] ?? null;

    // Repeater: features
    $features = [];
    if ( isset( $about['features'] ) && is_array( $about['features'] ) ) {
        $features = $about['features'];
    }
?>

<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12"
        >
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div
                        class="w-6 h-6 rounded-full border-2 border-dashed border-gray-800"
                    ></div>
                    <span
                        class="text-gray-800 font-semibold uppercase tracking-wide text-sm"
                    ><?php echo esc_html( $badge_text ); ?></span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                    <?php echo esc_html( $heading_line1 ); ?><br />
                    <?php echo esc_html( $heading_line2 ); ?>
                </h2>
            </div>
            <?php if ( ! empty( $button_text ) ) : ?>
                <a
                    href="<?php echo esc_url( $button_link ); ?>"
                    class="mt-6 md:mt-0 px-8 py-4 bg-lime-400 text-black font-semibold rounded-full hover:bg-lime-500 transition shadow-lg inline-flex items-center justify-center"
                >
                    <?php echo esc_html( $button_text ); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Side - Image with Decorative Element -->
            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-xl">
                    <?php if ( ! empty( $about_image ) ) : ?>
                        <img
                            src="<?php echo esc_url( is_array( $about_image ) ? $about_image['url'] : $about_image ); ?>"
                            alt="<?php echo esc_attr( is_array( $about_image ) && ! empty( $about_image['alt'] ) ? $about_image['alt'] : 'Company Growth Dashboard' ); ?>"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        />
                    <?php else : ?>
                        <img
                            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop"
                            alt="Company Growth Dashboard"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        />
                    <?php endif; ?>
                </div>

                <!-- Decorative Rocket Icon -->
                <div
                    class="absolute -top-6 -left-6 w-30 h-30 animate-bounce"
                    aria-hidden="true"
                    style="animation-duration: 5s"

                >
                    <img
                            src="https://unifato.com/seox/assets/img/shapes/hero1-image-shape1.png"
                            alt=""
                            aria-hidden="true"
                            loading="lazy"
                        />
                </div>
            </div>

            <!-- Right Side - Feature Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <?php if ( ! empty( $features ) ) : ?>
                    <?php
                        $feature_index = 1;
                        foreach ( $features as $feature ) :
                            $number      = isset( $feature['number'] ) ? $feature['number'] : $feature_index;
                            $title       = isset( $feature['title'] ) ? $feature['title'] : '';
                            $description = isset( $feature['description'] ) ? $feature['description'] : '';
                            if ( $title === '' && $description === '' ) {
                                $feature_index++;
                                continue;
                            }
                    ?>
                        <article class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition h-full">
                            <header class="flex items-start gap-4 mb-3">
                                <div
                                    class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 font-bold text-lg flex-shrink-0 shadow-sm"
                                >
                                    <?php echo esc_html( $number ); ?>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mt-1">
                                    <?php echo esc_html( $title ); ?>
                                </h3>
                            </header>
                            <p class="text-gray-600 leading-relaxed">
                                <?php echo esc_html( $description ); ?>
                            </p>
                        </article>
                    <?php
                            $feature_index++;
                        endforeach;
                    ?>
                <?php else : ?>
                    <article class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition">
                        <header class="flex items-start gap-4 mb-3">
                            <div
                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 font-bold text-lg flex-shrink-0 shadow-sm"
                            >
                                1
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mt-1">
                                Proven Track Record
                            </h3>
                        </header>
                        <p class="text-gray-600 leading-relaxed">
                            Hundreds Of Successful Campaigns And Satisfied Clients.
                        </p>
                    </article>

                    <article class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition">
                        <header class="flex items-start gap-4 mb-3">
                            <div
                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 font-bold text-lg flex-shrink-0 shadow-sm"
                            >
                                2
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mt-1">
                                Customized Strategies
                            </h3>
                        </header>
                        <p class="text-gray-600 leading-relaxed">
                            Tailored SEO And Marketing Plans That Align With Your Unique.
                        </p>
                    </article>

                    <article class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition">
                        <header class="flex items-start gap-4 mb-3">
                            <div
                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 font-bold text-lg flex-shrink-0 shadow-sm"
                            >
                                3
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mt-1">
                                Expert Team
                            </h3>
                        </header>
                        <p class="text-gray-600 leading-relaxed">
                            Certified Professionals With Extensive Industry Experience.
                        </p>
                    </article>

                    <article class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition">
                        <header class="flex items-start gap-4 mb-3">
                            <div
                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 font-bold text-lg flex-shrink-0 shadow-sm"
                            >
                                4
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mt-1">
                                Transparent Reporting
                            </h3>
                        </header>
                        <p class="text-gray-600 leading-relaxed">
                            Clear, Detailed Reports To Keep You Informed Every Step Of The
                            Way.
                        </p>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>