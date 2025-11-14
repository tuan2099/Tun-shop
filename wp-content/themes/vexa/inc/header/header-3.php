<?php
global $vexatheme_option, $vexatheme_meta;
?>


<!-- Back to top button -->
<?php
if (!empty($vexatheme_option['vexatheme_scroll_top'])) : ?>
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="fixed bottom-8 right-8 w-12 h-12 bg-lime-400 text-black rounded-full flex items-center justify-center hover:bg-lime-500 transition shadow-lg">
        <i class="fas fa-arrow-up"></i>
    </button>
<?php endif; ?>
<!-- // Back to top button -->

<!-- ==================== Header ======================= -->

<nav
        class="fixed top-0 w-full bg-black/80 backdrop-blur-md z-50 border-b border-gray-800"
>
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"> <img
                            src="<?php if (is_page() && !empty($vexatheme_meta['custom_header'])) {
                                echo esc_url($vexatheme_meta['main_logo']['url']);
                            } else {
                                echo esc_url($vexatheme_option['main_logo']['url']);
                            } ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"> </a>
            </div>

            <!-- Menu Items -->
            <div class="hidden lg:flex items-center gap-8">
                <?php
                wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'hidden lg:flex items-center gap-8',
                'menu_class' => '',
                'items_wrap' => '%3$s',
                'link_before' => '',
                'link_after' => '',
                'fallback_cb' => false,
                'walker' => new Vexa_Nav_Walker(),
                ));
                ?>
            </div>

            <!-- Right Side -->
            <div class="flex items-center gap-4">
                <button class="text-white hover:text-lime-400 transition">
                    <i class="fas fa-search text-xl"></i>
                </button>
                <button
                        class="px-6 py-3 bg-lime-400 text-black font-semibold rounded-full hover:bg-lime-500 transition"
                >
                    Contact Us
                </button>
                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- ==================== End Header ======================= -->
