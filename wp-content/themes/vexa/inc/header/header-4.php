<?php 
    global $vexatheme_option , $vexatheme_meta ; 
?>


<!-- Back to top button -->
<?php 
if ( !empty($vexatheme_option['vexatheme_scroll_top']) ) : ?>
  <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-8 right-8 w-12 h-12 bg-lime-400 text-black rounded-full flex items-center justify-center hover:bg-lime-500 transition shadow-lg">
            <i class="fas fa-arrow-up"></i>
        </button>
<?php endif; ?>
<!-- // Back to top button -->
