<?php
    // Get hero section data from ACF group field
    $hero = get_field('hero_section');
    if ( ! is_array( $hero ) ) {
        $hero = [];
    }

    $bg_image        = $hero['background_image'] ?? null;
    $badge_text      = $hero['badge_text'] ?? 'SEO MARKETING AGENCY';
    $title_line_1    = $hero['title_line_1'] ?? 'Boost Your Online';
    $title_line_2    = $hero['title_line_2'] ?? 'Presence With SEO';
    $description     = $hero['description'] ?? 'Drive More Traffic, Increase Visibility, And Boost Revenue With SEOX – Your Trusted SEO & Digital Marketing Partner.';
    $audit_placeholder = $hero['audit_placeholder'] ?? 'Audit Your Website';
    $audit_button_text = $hero['audit_button_text'] ?? 'Audit';

    // Stats repeater inside hero_section group
    $stats = [];
    if ( isset( $hero['stats'] ) && is_array( $hero['stats'] ) ) {
        $stats = $hero['stats'];
    }

    $main_image      = $hero['main_image'] ?? null;
    $rocket_image    = $hero['rocket_image'] ?? null;
    $target_image    = $hero['target_image'] ?? null;
?>

<!-- Hero Section -->
<div
    class=""
    style="
        <?php if ( ! empty( $bg_image ) ) : ?>
            background-image: url('<?php echo esc_url( is_array( $bg_image ) ? $bg_image['url'] : $bg_image ); ?>');
        <?php else : ?>
            background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/image/hero1-bg-min.jpg' ); ?>');
        <?php endif; ?>
        "
>
<section
    class="hero-gradient diagonal-lines min-h-screen pt-24 pb-16 px-4"
>
    <div class="max-w-7xl mx-auto">
        <div
            class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[calc(100vh-6rem)]"
        >
            <!-- Left Content -->
            <div class="text-white space-y-6">
                <div class="flex items-center gap-2">
                    <div
                        class="w-6 h-6 rounded-full border-2 border-dashed border-lime-400"
                    ></div>
                    <span
                        class="text-lime-400 font-semibold uppercase tracking-wide text-sm"
                    ><?php echo esc_html( $badge_text ); ?></span>
                </div>

                <h1
                    class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight"
                >
                    <?php echo esc_html( $title_line_1 ); ?><br/>
                    <?php echo esc_html( $title_line_2 ); ?>
                </h1>

                <p class="text-gray-300 text-lg leading-relaxed max-w-xl">
                    <?php echo esc_html( $description ); ?>
                </p>

                <!-- Audit Form -->
                <form
                    class="flex flex-col sm:flex-row gap-3 max-w-2xl pt-4"
                    action=""
                    method="get"
                >
                    <label class="sr-only" for="hero-audit-url">
                        <?php echo esc_html__( 'Website URL', 'vexa' ); ?>
                    </label>
                    <input
                        id="hero-audit-url"
                        name="url"
                        type="url"
                        placeholder="<?php echo esc_attr( $audit_placeholder ); ?>"
                        class="flex-1 px-6 py-4 rounded-full bg-gray-800/50 text-white placeholder-gray-500 border border-gray-700 focus:outline-none focus:border-lime-400 transition backdrop-blur-sm"
                    />
                    <button
                        type="submit"
                        class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-lime-400 transition"
                    >
                        <?php echo esc_html( $audit_button_text ); ?>
                    </button>
                </form>

                <!-- Stats -->
                <ul class="flex flex-wrap gap-8 pt-8">
                    <?php if ( ! empty( $stats ) ) : ?>
                        <?php foreach ( $stats as $stat ) :
                            $number = isset( $stat['number'] ) ? $stat['number'] : '';
                            $label  = isset( $stat['label'] ) ? $stat['label'] : '';
                            if ( $number === '' && $label === '' ) {
                                continue;
                            }
                        ?>
                            <li>
                                <div class="text-4xl md:text-5xl font-bold"><?php echo esc_html( $number ); ?></div>
                                <div class="text-gray-400 text-sm mt-1"><?php echo esc_html( $label ); ?></div>
                            </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li>
                            <div class="text-4xl md:text-5xl font-bold">24</div>
                            <div class="text-gray-400 text-sm mt-1">Countries</div>
                        </li>
                        <li>
                            <div class="text-4xl md:text-5xl font-bold">11k</div>
                            <div class="text-gray-400 text-sm mt-1">Websites Done</div>
                        </li>
                        <li>
                            <div class="text-4xl md:text-5xl font-bold">10k</div>
                            <div class="text-gray-400 text-sm mt-1">Satisfied Client</div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <div class="relative">
                    <?php if ( ! empty( $main_image ) ) : ?>
                        <img
                            src="<?php echo esc_url( is_array( $main_image ) ? $main_image['url'] : $main_image ); ?>"
                            alt="<?php echo esc_attr( is_array( $main_image ) && ! empty( $main_image['alt'] ) ? $main_image['alt'] : 'Hero image' ); ?>"
                            class="w-full max-w-md mx-auto rounded-3xl"
                            loading="lazy"
                        />
                    <?php else : ?>
                        <img
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=600&h=700&fit=crop"
                            alt="Marketing professional with megaphone"
                            class="w-full max-w-md mx-auto rounded-3xl"
                            loading="lazy"
                        />
                    <?php endif; ?>
                </div>

                <!-- Decorative Elements -->
                <!-- Rocket -->
                <div
                    class="absolute top-10 right-0 animate-bounce"
                    style="animation-duration: 7s"
                >
                    <?php if ( ! empty( $rocket_image ) ) : ?>
                        <img
                            src="<?php echo esc_url( is_array( $rocket_image ) ? $rocket_image['url'] : $rocket_image ); ?>"
                            alt="<?php echo esc_attr( is_array( $rocket_image ) && ! empty( $rocket_image['alt'] ) ? $rocket_image['alt'] : '' ); ?>"
                            aria-hidden="true"
                            loading="lazy"
                        />
                    <?php else : ?>
                        <img
                            src="https://unifato.com/seox/assets/img/shapes/hero1-image-shape1.png"
                            alt=""
                            aria-hidden="true"
                            loading="lazy"
                        />
                    <?php endif; ?>
                </div>

                <!-- Target Icon -->
                <div
                    class="absolute bottom-20 left-0 transform -translate-x-12 animate-bounce"
                    style="animation-duration: 5s"
                >
                    <div class="relative">
                        <?php if ( ! empty( $target_image ) ) : ?>
                            <img
                                src="<?php echo esc_url( is_array( $target_image ) ? $target_image['url'] : $target_image ); ?>"
                                alt="<?php echo esc_attr( is_array( $target_image ) && ! empty( $target_image['alt'] ) ? $target_image['alt'] : '' ); ?>"
                                aria-hidden="true"
                                loading="lazy"
                            />
                        <?php else : ?>
                            <img
                                src="https://unifato.com/seox/assets/img/shapes/hero1-image-shape2.png"
                                alt=""
                                aria-hidden="true"
                                loading="lazy"
                            />
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Background Circle Decoration -->
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full -z-10"
                ></div>
            </div>
        </div>
    </div>
</section>
</div>