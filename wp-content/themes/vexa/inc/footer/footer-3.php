<?php 
    global $vexatheme_option;
?>
<div class="min-h-screen flex flex-col justify-between">
    <!-- Hero Section -->
    <?php get_template_part('template-parts/contact-section'); ?>

    <!-- Footer Section -->
    <footer class="px-4 py-12" style="background: linear-gradient(180deg, #1a0a1a 0%, #0a0a0a 100%);">
        <div class="max-w-7xl mx-auto">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div>
                    <div class="gap-2 mb-4">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"> <img src="<?php if(is_page() && !empty($vexatheme_meta['custom_header'])){ echo esc_url($vexatheme_meta['main_logo']['url']); } else{ echo esc_url($vexatheme_option['main_logo']['url']); }?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>"> </a>
                    </div>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                        SEOX Is A Results-Driven SEO And Digital Marketing Agency Dedicated To Helping Businesses Thrive In The Digital Landscape.
                    </p>
                    <!-- Social Icons -->
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Menu</h3>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'footer_menu',
                            'container'      => false,          
                            'menu_class'     => 'space-y-3',
                            'fallback_cb'    => false,
                        ]);
                    ?>
                </div>

                <!-- Category List -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Dịch vụ</h3>
                    <ul class="space-y-3">
                        <?php
                        $services = new WP_Query([
                            'post_type'      => 'service',
                            'posts_per_page' => 6,
                            'orderby'        => 'menu_order',
                            'order'          => 'ASC',
                        ]);

                        if ( $services->have_posts() ) :
                            while ( $services->have_posts() ) : $services->the_post();
                                $service_link  = get_permalink();
                                $service_title = get_the_title();
                                ?>
                                <li>
                                    <a href="<?php echo esc_url( $service_link ); ?>"
                                    class="text-gray-400 hover:text-lime-400 transition">
                                        <?php echo esc_html( $service_title ); ?>
                                    </a>
                                </li>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Contact Information</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-envelope text-lime-400 mt-1"></i>
                            <a href="mailto:<?php echo esc_html($vexatheme_option['email']); ?>" class="text-gray-400 hover:text-lime-400 transition"><?php echo esc_html($vexatheme_option['email']); ?></a>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-lime-400 mt-1"></i>
                            <span class="text-gray-400"><?php echo esc_html($vexatheme_option['location']); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-phone-alt text-lime-400 mt-1"></i>
                            <a href="tel:<?php echo esc_html($vexatheme_option['telphone']); ?>" class="text-gray-400 hover:text-lime-400 transition"><?php echo esc_html($vexatheme_option['telphone']); ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm"><?php echo wp_kses_post($vexatheme_option['_copyright']); ?></p>
                <div class="flex gap-6">
                    <a href="#" class="text-gray-500 hover:text-lime-400 transition text-sm">Terms & Conditions</a>
                    <span class="text-gray-700">|</span>
                    <a href="#" class="text-gray-500 hover:text-lime-400 transition text-sm">Privacy Policy</a>
                </div>
            </div>
        </div>

        <!-- Scroll to Top Button -->
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-8 right-8 w-12 h-12 bg-lime-400 text-black rounded-full flex items-center justify-center hover:bg-lime-500 transition shadow-lg">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>
</div>