<?php

	/*-----------------------------------------------------------------------------------*/
	#  List Layout
	/*-----------------------------------------------------------------------------------*/
 	function vexatheme_list_layout() {
 		?>



<!-- Blog item -->
<div id="post-<?php the_ID(); ?>" class="vexa-blog-entry layout-2 margin-bottom-35px clearfix">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="img-in">
        <?php the_post_thumbnail('vexatheme_500x500'); ?>
        <?php if(function_exists('vexatheme_share_post')) { vexatheme_share_post_2(); } ?>
    </div>
    <?php } ?>
    <div class="post-info">
        <div class="cats"><i class="fa fa-folder-open-o"></i>
            <?php $cats = get_the_category(); ?>
            <a href="<?php echo get_category_link($cats[0]->cat_ID); ?>">
                <?php echo esc_html($cats[0]->name); ?>
            </a>
        </div>
        <a href="<?php the_permalink(); ?>" class="title margin-bottom-0px">
            <?php the_title(); ?>
        </a>
        <div class="excerpt excerpt-35 margin-tb-25px">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="read_more">
            <?php esc_html_e('Read More', 'vexa'); ?>
        </a>
    </div>
</div>
<!-- END Blog item -->


<?php
 	}

	/*-----------------------------------------------------------------------------------*/
	#   Post Grid
	/*-----------------------------------------------------------------------------------*/
 	function vexatheme_grid_layout() {
 		?>
<!-- Post item -->
<div id="post-<?php the_ID(); ?>" class="col-lg-6 col-md-6">
    <div class="vexa-blog-entry layout-1 margin-bottom-35px">
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="img-in">
            <?php the_post_thumbnail('vexatheme_500x300'); ?>
            <?php if(function_exists('vexatheme_share_post')) { vexatheme_share_post_2(); } ?>
        </div>
        <?php } ?>
        <div class="out">
            <div class="cats">
                <i class="fa fa-folder-open-o"></i>
                <?php $cats = get_the_category(); ?>
                <a href="<?php echo get_category_link($cats[0]->cat_ID); ?>">
                    <?php echo esc_html($cats[0]->name); ?>
                </a>
            </div>
            <a href="<?php the_permalink(); ?>" class="title">
                <?php the_title(); ?>
            </a>
            <div class="excerpt excerpt-50">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="read_more">
                <?php esc_html_e('Read More', 'vexa'); ?>
            </a>
        </div>
    </div>
</div>
<!-- End Post -->

<?php
 	}

	/*-----------------------------------------------------------------------------------*/
	#   Post Grid 3 Colm
	/*-----------------------------------------------------------------------------------*/
 	function vexatheme_grid_3col_layout() {
 		?>
<div id="post-<?php the_ID(); ?>" class="post col-lg-4">
    <div class="post-grid">
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="thum">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('vexatheme_500x400'); ?>
            </a>
            <?php if(is_sticky()) : ?>
            <div class="icon"><span class="icon_documents_alt"></span></div>
            <?php elseif(has_post_format('gallery')) : ?>
            <div class="icon"><span class="icon_camera_alt"></span></div>
            <?php elseif(has_post_format('video')) : ?>
            <div class="icon"><span class="icon_film"></span></div>
            <?php elseif(has_post_format('audio')) : ?>
            <div class="icon"><span class="icon_volume-high_alt"></span></div>
            <?php else : ?>
            <div class="icon"><span class="icon_documents_alt"></span></div>
            <?php endif; ?>
        </div>
        <?php } ?>
        <div class="post-info">
            <div class="cats">
                <?php vexatheme_post_category(' '); ?>
            </div>
            <a class="title" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <ul class="meta">
                <li> <span class="icon_clock_alt"></span>
                    <?php the_time( get_option('date_format') ); ?>
                </li>
                <li> <span class="icon_profile"></span>
                    <?php the_author_posts_link(); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
 	}


	/*-----------------------------------------------------------------------------------*/
	#   Post Grid 3 Colm Style (2)
	/*-----------------------------------------------------------------------------------*/
 	function vexatheme_grid_3col_layout_2() {
 		?>
<div id="post-<?php the_ID(); ?>" class="post col-lg-4">
    <div class="post-grid layout-2">
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="thum">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('vexatheme_600x480'); ?>
            </a>
            <?php if(is_sticky()) : ?>
            <div class="icon-in"><span class="icon_documents_alt"></span></div>
            <?php elseif(has_post_format('gallery')) : ?>
            <div class="icon-in"><span class="icon_camera_alt"></span></div>
            <?php elseif(has_post_format('video')) : ?>
            <div class="icon-in"><span class="icon_film"></span></div>
            <?php elseif(has_post_format('audio')) : ?>
            <div class="icon-in"><span class="icon_volume-high_alt"></span></div>
            <?php else : ?>
            <div class="icon-in"><span class="icon_documents_alt"></span></div>
            <?php endif; ?>
        </div>
        <?php } ?>
        <div class="post-info text-left">
            <div class="cats">
                <?php vexatheme_post_category(' '); ?>
            </div>
            <a class="title" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <div class="excerpt excerpt-25">
                <?php the_excerpt(); ?>
            </div>
            <ul class="meta">
                <li> <span class="icon_clock_alt"></span>
                    <?php the_time( get_option('date_format') ); ?>
                </li>
                <li> <span class="icon_profile"></span>
                    <?php the_author_posts_link(); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
}

    /*-----------------------------------------------------------------------------------*/
    #   Post Standard
    /*-----------------------------------------------------------------------------------*/
	function vexatheme_standard_layout() {
	global $vexatheme_meta;
		if ( is_sticky() ) { $stickyClass="sticky-post"; } 
		else {
			 $stickyClass=" ";
		}

	?>
<!-- Blog item -->
<div id="post-<?php the_ID(); ?>" class="vexa-blog-entry layout-3 margin-bottom-50px <?php echo esc_html($stickyClass) ?>">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="img-in">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('vexatheme_1000x480'); ?>
        </a>
    </div>
    <?php } ?>

    <div class="out">

        <!-- Single Meta -->
        <div class="single-meta">
            <ul class="meta">
                <li class="author">
                    <a class="author-img">
                        <?php echo get_avatar( get_the_author_meta('email'), '170' ); ?>
                    </a>
                    <span><?php esc_html_e('by', 'vexa'); ?> <?php the_author_posts_link(); ?></span>
                </li>
                <li class="date"> <span class="icon_clock_alt"></span>
                    <?php the_time( get_option('date_format') ); ?>
                </li>
                <li>
                    <span class="cats-loop">
                        <i class="fa fa-folder-open-o"></i>
                        <?php vexatheme_post_category(', '); ?>
                    </span>
                </li>
            </ul>

            <div class="clearfix"></div>

        </div>
        <!-- // Single Meta -->

        <a href="<?php the_permalink(); ?>" class="title">
            <?php the_title(); ?>
        </a>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="read_more">
            <?php esc_html_e('Read More', 'vexa'); ?>
        </a>
    </div>
</div>
<!-- END Blog item -->


<?php
 	}

	/*-----------------------------------------------------------------------------------*/
	#   Post Standard
	/*-----------------------------------------------------------------------------------*/
 	function vexatheme_posts_search_layout() {
 		global $vexatheme_meta;
		if ( is_sticky() ) { $stickyClass="sticky-post"; } 
		else {
			 $stickyClass=" ";
		}

	?>
<!-- Blog item -->
<div id="post-<?php the_ID(); ?>" class="vexa-blog-entry layout-3 margin-bottom-50px">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="img-in">
        <?php the_post_thumbnail('vexatheme_1000x480'); ?>
    </div>
    <?php } ?>

    <div class="out">
        <a href="<?php the_permalink(); ?>" class="title">
            <?php the_title(); ?>
        </a>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="read_more">
            <?php esc_html_e('Read More', 'vexa'); ?>
        </a>
    </div>
</div>
<!-- END Blog item -->


<?php
 	}

	
	/*-----------------------------------------------------------------------------------*/
	#   Post Grid 3 Colm Style (2)
	/*-----------------------------------------------------------------------------------*/
 	function vexatheme_video_post() {
 		?>
<div id="post-<?php the_ID(); ?>" class="post col-lg-4">
    <div class="video-post-layout thum-hover">
        <div class="item-thumbnail ba-black">
            <?php the_post_thumbnail('vexatheme_600x480'); ?>
        </div>
        <div class="tfassel">
            <a href="<?php the_permalink(); ?>" class="title font-2">
                <div class="icon"><span class="arrow_triangle-right_alt2"></span></div>
                <?php the_title(); ?>
            </a>
            <div class="date"><span class="icon_clock_alt"></span>
                <?php the_time( get_option('date_format') ); ?>
            </div>
        </div>
        <div class="bag"></div>
    </div>
</div>
<?php
 	}
 	function vexatheme_portfolio_layout_1() {
 		 get_template_part( 'template-parts/portfolio/portfolio-archive', get_post_type() ); 
 	}
 	function vexatheme_prevention_layout_1() {
 		 get_template_part( 'template-parts/post-types/service/service-archive', get_post_type() ); 
 	}
 	function vexatheme_team_layout_1() {
 		 get_template_part( 'template-parts/post-types/team/team-archive', get_post_type() ); 
 	}
