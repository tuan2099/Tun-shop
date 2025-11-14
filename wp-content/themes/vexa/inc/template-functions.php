<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package vexa
 */


/*-----------------------------------------------------------------------------------*/
# Adds custom classes to the array of body classes.
/*-----------------------------------------------------------------------------------*/
function vexatheme_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'vexatheme_body_classes' );

function vexatheme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'vexatheme_pingback_header' );


/*-----------------------------------------------------------------------------------*/
 # Change number of related products output
/*-----------------------------------------------------------------------------------*/
function vexatheme_woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'vexatheme_related_products_args' );
  function vexatheme_related_products_args( $args ) {
	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 4; // arranged in 2 columns
	return $args;
}



/*-----------------------------------------------------------------------------------*/
# Excerpt More
/*-----------------------------------------------------------------------------------*/
function vexatheme_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'vexatheme_excerpt_more');


function vexatheme_custom_excerpt_length( $length ) {
    return 32;
}
add_filter( 'excerpt_length', 'vexatheme_custom_excerpt_length', 999 );

/*-----------------------------------------------------------------------------------*/
# google fonts url
/*-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
# google fonts url
/*-----------------------------------------------------------------------------------*/
function vexatheme_fonts_url() {
	$fonts_url = '';
	$muli = _x( 'on', 'Fira: on or off', 'vexa' );
    $poppins = _x( 'on', 'Poppins: on or off', 'vexa' );

	if ( 'off' !== $muli || 'off' !== $poppins ) {
		$font_families = array();

        if ( 'off' !== $muli ) {
			$font_families[] = 'Fira Sans:300,400,500,600,700,900';
        }

		if ( 'off' !== $poppins ) {
			$font_families[] = 'Poppins:100,200,100i,300,300i,400,400i,500,500i,600,600i,700,700i,900,900i';
		}
		

		$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/*-----------------------------------------------------------------------------------*/
# Sub Menu  Class
/*-----------------------------------------------------------------------------------*/
add_filter( 'wp_nav_menu_objects', 'vexatheme_add_menu_parent_class' );
function vexatheme_add_menu_parent_class( $items ) {
	$parents = array();
	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}
	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'has-dropdown';
		}
	}
	return $items;
}


/*-----------------------------------------------------------------------------------*/
# Nav Menu Active Class
/*-----------------------------------------------------------------------------------*/
function vexatheme_special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'vexatheme_special_nav_class' , 10 , 2);


/*-----------------------------------------------------------------------------------*/
# Footer
/*-----------------------------------------------------------------------------------*/
function vexatheme_footer() {
    global $vexatheme_option, $vexatheme_meta;
	if(is_page() && !empty($vexatheme_meta['custom_footer'])){
		get_template_part('inc/footer/footer', $vexatheme_meta['footer_layout']);
	}
	else{
		get_template_part('inc/footer/footer', $vexatheme_option['footer_layout']);
	}
}




/*-----------------------------------------------------------------------------------*/
# Links  Category of Posts
/*-----------------------------------------------------------------------------------*/
 function vexatheme_post_category($separator) {

 		$first_time = 1;
 		foreach((get_the_category()) as $category) {
 			if ($first_time == 1) {
 				echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . sprintf( esc_attr__( "View all posts in %s", 'vexa' ), $category->name ) . '" ' . '>'  . $category->name.'</a>';
 				$first_time = 0;
 			} else {
 				echo esc_html($separator). '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . sprintf( esc_attr__( "View all posts in %s", 'vexa' ), $category->name ) . '" ' . '>' . $category->name.'</a>';
 			}
 		}

 }


// Category Style Field
add_filter('category_edit_form_fields', 'vexatheme_category_fields');
add_filter('category_add_form_fields', 'vexatheme_category_fields');
function vexatheme_category_fields($tag) {
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
    ?>
<div class="form-table">
    <div class="form-field">
        <div scope="row" valign="top"><label for="Cat_meta[layout]"><?php esc_html_e('Category Layout', 'vexa'); ?></label></div>
        <div>
            <select name="Cat_meta[layout]" id="Cat_meta[layout]">
                <option value="standard_layout" <?php echo (esc_html($cat_meta['layout']) == "standard_layout") ? 'selected="selected"': ''; ?>><?php esc_html_e('Standard Layout (Right Sidebar)', 'vexa'); ?></option>

                <option value="left_sidebar" <?php echo (esc_html($cat_meta['layout']) == "left_sidebar") ? 'selected="selected"': ''; ?>><?php esc_html_e('Left Sidebar', 'vexa'); ?></option>

                <option value="no_sidebar" <?php echo (esc_html($cat_meta['layout']) == "no_sidebar") ? 'selected="selected"': ''; ?>><?php esc_html_e('No Sidebar', 'vexa'); ?></option>

            </select>
            <p class="description">
                <?php esc_html_e( 'Select Category Layout', 'vexa' ); ?>
            </p>
        </div>
    </div>
</div>
<?php
}
add_action ( 'edited_category', 'vexatheme_save_extra_category_fileds');
add_action ( 'create_category', 'vexatheme_save_extra_category_fileds');
function vexatheme_save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'vexatheme_new_loop_shop_per_page', 20 );

function vexatheme_new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}


/*-----------------------------------------------------------------------------------*/
# Social Media Links
/*-----------------------------------------------------------------------------------*/
function vexatheme_social_links() {
    global $vexatheme_option;
    $header_social = $vexatheme_option['vexatheme_top_social']['enabled'];
    if ($header_social): foreach ($header_social as $key=>$value) {
        switch($key) {

            case 'facebook': echo '<li class="list-inline-item facebook"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_facebook_url']).'"><i class="fa-brands fa-facebook"></i></a></li>';
            break;

            case 'twitter': echo '<li class="list-inline-item twitter"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition"  href="'.esc_url($vexatheme_option['social_twitter_url']).'"><i class="fa-brands fa-twitter"></i></a></li>';
            break;

            case 'google': echo '<li class="list-inline-item google"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_google_url']).'"><i class="fa-brands fa-google"></i></a></li>';
            break;

            case 'linkedin': echo '<li class="list-inline-item linkedin"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_inkedin_url']).'"><i class="fa-brands fa-linkedin-in"></i></i></a></li>';
            break;

            case 'rss': echo '<li class="list-inline-item"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_rss_url']).'"><i class="fa-solid fa-rss"></i></a></li>';
            break;

            case 'instagram': echo '<li class="list-inline-item instagram"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_instagram_url']).'"><i class="fa-brands fa-instagram"></i></a></li>';
            break;

            case 'skype': echo '<li class="list-inline-item"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_skype_url']).'"><i class="fa-brands fa-skype"></i></a></li>';
            break;

            case 'pinterest': echo '<li class="list-inline-item"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_pinterest_url']).'"><i class="fa-brands fa-pinterest"></i></a></li>';
            break;

            case 'vimeo': echo '<li class="list-inline-item"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition"  href="'.esc_url($vexatheme_option['social_vimeo_url']).'"><i class="fa-brands fa-vimeo"></i></a></li>';
            break;

            case 'youtube': echo '<li class="list-inline-item"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition"  href="'.esc_url($vexatheme_option['social_youtube_url']).'"><i class="fa-brands fa-youtube"></i></a></li>';
            break;

            case 'whatsapp': echo '<li class="list-inline-item whatsapp"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition"  href="'.esc_url($vexatheme_option['social_whatsapp_url']).'"><i class="fa-brands fa-whatsapp"></i></a></li>';
            break;

            case 'tumblr': echo '<li class="list-inline-item"><a class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-lime-400 transition" href="'.esc_url($vexatheme_option['social_tumblr_url']).'"><i class="fa-brands fa-tumblr"></i></a></li>';
            break;

        }
    }
    endif;
}
 /**
 * Page Title
 */
function vexatheme_page_title() {
    global $vexatheme_option , $vexatheme_meta ; 

     if(function_exists('bcn_display')) { ?>
style="background-image: url(<?php echo esc_url($vexatheme_option['page_title_ba']['url']); ?>)"

<?php }
}

 /**
 * Pagination
 */
function vexatheme_pagination() {
	global $wp_query;

	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="margin-top-60px clearfix"><ul class="pagination pagination-md pagination-style-1 color">' . "\n";

	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('«') );
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li><a>...</a></li>';
	}

	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li><a>...</a></li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('»') );

	echo '</ul><div class="clearfix"></div></div>' . "\n";

}



/*-----------------------------------------------------------------------------------*/
# Archive Title
/*-----------------------------------------------------------------------------------*/

add_filter( 'vexatheme_get_the_archive_title', function ($title) {

    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;

});





/*-----------------------------------------------------------------------------------*/
# Customizer Css
/*-----------------------------------------------------------------------------------*/


	function vexatheme_customizer_css() {
            global $vexatheme_option, $vexatheme_meta;

    ?>
<style>
    .footer-action,
     {
        background-color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['primary_color']);
        }

        else {
            echo esc_attr($vexatheme_option['primary_color']);
        }

        ?> !important;
    }

    .service-item.layout-1 a .out .text span.more,
    footer.layout-1 .block-footer ul.contact li i,
    header#layout-1 .header-body .call_us h3.nub a {
        color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['primary_color']);
        }

        else {
            echo esc_attr($vexatheme_option['primary_color']);
        }

        ?> !important;
    }

    .tabs-filter ul li.active {
        border-color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['primary_color']);
        }

        else {
            echo esc_attr($vexatheme_option['primary_color']);
        }

        ?> !important;
    }

    .vexa-button.style-1,
    header#layout-1 .header-body ul.nav-menu li:hover>a:after,
    .team-item.layout-2:hover .out,
    .blog-item.layout-2 .img_in .date span.day_in,
    .service-item.layout-3 .icon,
    .service-item.layout-3:hover .out span.more,
    header#layout-1.small-padding .header-body ul.nav-menu li>a:hover,
    header#layout-1 .header-top.background-2,
    .portfolio-slider .owl-dots .owl-dot.active {
        background-color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['second_color']);
        }

        else {
            echo esc_attr($vexatheme_option['second_color']);
        }

        ?> !important;
    }

    .owl-theme .owl-controls .owl-page span,
    .service-item-effect.active .service-item.layout-1 a h2,
    .service-item-effect:hover .service-item.layout-1 a h2,
    #vexa-go-top,
    .blog-item.layout-1 .img_in .date span.day_in,
    .vexa-bottom.layout-2,
    .vexa-bottom.layout-1:hover,
    .vexa-portfolio.layout-2:hover .portfolio-info {
        background: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['second_color']);
        }

        else {
            echo esc_attr($vexatheme_option['second_color']);
        }

        ?> !important;
    }

    .vexa-portfolio.layout-2:hover .portfolio-info .info ul li a {
        color: #fff !important;
    }

    .service-item.layout-1 a .out .text span.more:after,
    .blog-item.layout-1 .out .date,
    footer.layout-1 .block-footer ul.contact li span,
    footer.layout-1 .block-footer ul.menu li a:before,
    header#layout-1 .header-body ul.tools li a:hover,
    .team-item.layout-1 .more ul li a,
    .icon-item.layout-1 .out-in .content a.more,
    ul.vexa-list.layout-1 li:before,
    .firo-pricing-table.layout-3 .table-head .dis,
    .vexa-portfolio.layout-2 .portfolio-info .info ul li a,
    footer.layout-1 .block-footer h3.block-title span:before {
        color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['second_color']);
        }

        else {
            echo esc_attr($vexatheme_option['second_color']);
        }

        ?> !important;
    }

    .border-colot,
    .team-item.layout-2:hover .out {
        border-color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['second_color']);
        }

        else {
            echo esc_attr($vexatheme_option['second_color']);
        }

        ?> !important;
    }


    .vexatheme-section-title a.title-link:hover {
        color: #fff !important;

        border-color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['second_color']);
        }

        else {
            echo esc_attr($vexatheme_option['second_color']);
        }

        ?> !important;

        background-color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
            echo esc_attr($vexatheme_meta['second_color']);
        }

        else {
            echo esc_attr($vexatheme_option['second_color']);
        }

        ?> !important;
    }

    @media only screen and (max-width: 991px) {

        #comments ol.comment-list li .comment-body .reply a {
            color: <?php if(is_page() && !empty($vexatheme_meta['custom_style'])) {
                echo esc_attr($vexatheme_meta['primary_color']);
            }

            else {
                echo esc_attr($vexatheme_option['primary_color']);
            }

            ?> !important;
        }
    }

</style>
<?php
}
add_action( 'wp_head', 'vexatheme_customizer_css' );
