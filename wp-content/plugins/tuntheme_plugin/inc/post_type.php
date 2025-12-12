<?php
// Register Custom Post Type

function custom_post_type() {

		$labels = array(
			'name'                  => __( 'Portfolio', 'vexa' ),
			'singular_name'         => __( 'Portfolios', 'vexa' ),
			'menu_name'             => __( 'Portfolio', 'vexa' ),
		);
		$rewrite = array(
			'slug'                => 'portfolio',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);
		$args = array(
			'labels'              => $labels,
			'supports'              => array( 'title', 'thumbnail', 'excerpt', 'editor','comments' ),
			'taxonomies'          => array( 'portfolio_category' ),
			'menu_icon'           => 'dashicons-portfolio',
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 4,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);
		register_post_type( 'portfolio', $args );

	$labels = array(
		'name'                  => _x( 'Services', 'engineer' ),
		'singular_name'         => _x( 'Service', 'engineer' ),
		'menu_name'             => __( 'Services', 'engineer' ),
		'featured_image'             => __( 'Service Image', 'engineer' ),
	);
	$args = array(
		'label'                 => __( 'Services', 'engineer' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' , 'excerpt' ),
		'menu_icon'             => 'dashicons-hammer',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

	
	# Pricing Table
			$labels = array(
				'name'                  => _x( 'Pricing Table', 'engineer' ),
				'singular_name'         => _x( 'Pricing Table', 'engineer' ),
				'menu_name'             => __( 'Pricing Tables', 'engineer' ),
			);
			$args = array(
				'label'                 => __( 'Pricing Table', 'engineer' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'thumbnail'  ),
				'menu_icon'             => 'dashicons-money-alt',
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 6,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
			);
			register_post_type( 'pricing', $args );

	# Testimonial
		$labels = array(
			'name'                  => _x( 'Testimonial', 'engineer' ),
			'singular_name'         => _x( 'Testimonial', 'engineer' ),
			'menu_name'             => __( 'Testimonial', 'engineer' ),
			'featured_image'             => __( 'Clint Image', 'engineer' ),
		);
		$args = array(
			'label'                 => __( 'Testimonial', 'engineer' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' , 'excerpt' ),
			'menu_icon'             => 'dashicons-format-quote',
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 6,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'testimonial', $args );

		# Team
			$labels = array(
				'name'                  => _x( 'Team', 'engineer' ),
				'singular_name'         => _x( 'Team', 'engineer' ),
				'menu_name'             => __( 'Team', 'engineer' ),
				'featured_image'             => __( 'Team Image', 'engineer' ),
			);
			$args = array(
				'label'                 => __( 'Team', 'engineer' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'thumbnail' , 'excerpt' ),
				'menu_icon'             => 'dashicons-groups',
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 6,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
			);
			register_post_type( 'team', $args );

					# Clients
						$labels = array(
							'name'                  => _x( 'Clients', 'engineer' ),
							'singular_name'         => _x( 'Client', 'engineer' ),
							'menu_name'             => __( 'Clients', 'engineer' ),
							'featured_image'             => __( 'Client Image', 'engineer' ),
						);
						$args = array(
							'label'                 => __( 'Clients', 'engineer' ),
							'labels'                => $labels,
							'supports'              => array( 'title', 'thumbnail' ),
							'menu_icon'             => 'dashicons-businessperson',
							'hierarchical'          => false,
							'public'                => true,
							'show_ui'               => true,
							'show_in_menu'          => true,
							'menu_position'         => 5,
							'show_in_admin_bar'     => true,
							'show_in_nav_menus'     => true,
							'can_export'            => true,
							'has_archive'           => true,
							'exclude_from_search'   => false,
							'publicly_queryable'    => true,
							'capability_type'       => 'page',
						);
						register_post_type( 'clients', $args );



}
add_action( 'init', 'custom_post_type', 0 );

// Register Custom Taxonomy
function custom_taxonomy() {

		$labels = array(
			'menu_name'              => __( 'Portfolio Category', 'vexa' ),
		);
		$rewrite = array(
			'slug'                       => 'portfolio_cat',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );


}
add_action( 'init', 'custom_taxonomy', 0 );
