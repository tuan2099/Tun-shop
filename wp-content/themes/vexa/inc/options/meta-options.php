<?php
/**
 * Meta box config file
 */

if (!class_exists('MetaFramework'))
	{
	return;
	}

$args = array(

	// TYPICAL -> Change these values as you need/desire

	'opt_name' => apply_filters('opt_meta', 'vexatheme_meta') ,

	// Set a different name for your global variable other than the opt_name

	'dev_mode' => false,

	// Allow you to start the panel in an expanded way initially.

	'open_expanded' => false,

	// Disable the save warning when a user changes a field

	'disable_save_warn' => true,

	// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided

	'save_defaults' => false,
	'output' => false,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output

	'output_tag' => false,

	// Show the time the page took to load, etc

	'update_notice' => false,

	// 'disable_google_fonts_link' => true, // Disable this in case you want to create your own google fonts loader

	'admin_bar' => false,

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)

	'allow_sub_menu' => false,

	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo

	'customizer' => false,

	// What to print by the field's title if the value shown is default. Suggested: *

	'show_import_export' => false,

	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

	'use_cdn' => false,

	// save meta to multiple keys.

	'meta_mode' => 'multiple'
);

// -> Set Option To Panel.

MetaFramework::setArgs($args);
add_action('admin_init', 'vexatheme_meta_boxs');
MetaFramework::init();

function vexatheme_meta_boxs()
	{
	/** page options */
	MetaFramework::setMetabox(array(
		'id' => '_page_main_options',
		'label' => esc_html__('Page Setting', 'majed') ,
		'post_type' => 'page',
		'context' => 'advanced',
		'priority' => 'default',
		'open_expanded' => false,
		'sections' => array(
  			array(
  				'title' => esc_html__('Header', 'majed') ,
  				'id' => 'tab-page-header',
  				'icon' => 'el el-credit-card',
  				'fields' => array(
  					array(
  						'id' => 'custom_header',
  						'type' => 'button_set',
  						'title' => esc_html__('Custom', 'majed') ,
  						'options' => array(
  							'1' =>  esc_html__('Yes', 'majed') ,
  							'' => esc_html__('No', 'majed') ,
  						) ,
  						'default' => ''
  					) ,
  					array(
  						'title' => esc_html__('Logo', 'majed') ,
  						'subtitle' => esc_html__('Select an image file for your logo.', 'majed') ,
  						'id' => 'main_logo',
  						'type' => 'media',
  						'url' => false,
  						'default' => array(
                            'url'=>get_template_directory_uri().'/assets/images/logo-1.svg'
  						) ,
                        'required' => array( 'custom_header', '=', '1' )
  					) ,
  					array(
  						'id' => 'header_layout',
  						'title' => esc_html__('Layouts', 'majed') ,
  						'subtitle' => esc_html__('select a layout for header', 'majed') ,
  						'default' => '1',
  						'type' => 'image_select',
  						'options' => array(
                            '1' => get_template_directory_uri().'/inc/options/images/header/header1.jpg',
                            '2' => get_template_directory_uri().'/inc/options/images/header/header2.jpg',
                            '3' => get_template_directory_uri().'/inc/options/images/header/header3.jpg',
                            '4' => get_template_directory_uri().'/inc/options/images/header/header4.jpg',
  						) ,
                        'required' => array( 'custom_header', '=', '1' )
  					) ,
  				)
  			) ,
        array(
          'title' => esc_html__('Footer', 'majed') ,
          'id' => 'tab-page-footer',
          'icon' => 'el el-credit-card',
          'fields' => array(
            array(
              'id' => 'custom_footer',
              'type' => 'button_set',
              'title' => esc_html__('Custom', 'majed') ,
              'options' => array(
                '1' => 'Yes',
                '' => 'No',
              ) ,
              'default' => ''
            ) ,
            array(
              'id' => 'footer_layout',
              'title' => esc_html__('Layouts', 'majed') ,
              'subtitle' => esc_html__('select a layout for footer', 'majed') ,
              'default' => '1',
              'type' => 'image_select',
              'options' => array(
                '1' => get_template_directory_uri().'/inc/options/images/footer/footer1.jpg',
                '2' => get_template_directory_uri().'/inc/options/images/footer/footer2.jpg',
                '3' => get_template_directory_uri().'/inc/options/images/footer/footer3.jpg'
              ) ,
              'required' => array( 'custom_footer', '=', '1' )
            ) ,
          )
        ) ,
        array(
          'title' => esc_html__('Style', 'majed') ,
          'id' => 'tab-page-style',
          'icon' => 'el el-credit-card',
          'fields' => array(
            array(
              'id' => 'custom_style',
              'type' => 'button_set',
              'title' => esc_html__('Custom', 'majed') ,
              'options' => array(
                '1' => 'Yes',
                '' => 'No',
              ) ,
              'default' => ''
            ) ,
            array(
                'subtitle' => esc_html__('Set primary color.', 'majed'),
                'id' => 'primary_color',
                'type' => 'color',
                'title' => esc_html__('Primary Color', 'majed'),
                'default' => '#2b616d',
                'required' => array( 'custom_style', '=', '1' )
            ),
            array(
                'subtitle' => esc_html__('Set Second color.', 'majed'),
                'id' => 'second_color',
                'type' => 'color',
                'title' => esc_html__('Second Color', 'majed'),
                'default' => '#79ad5a',
                'required' => array( 'custom_style', '=', '1' )
            ),
          )
        ) ,

      )
	));
    
    

    /** Service options */
	MetaFramework::setMetabox(array(
		'id' => '_service_options',
		'label' => esc_html__('Service Options', 'majed') ,
		'post_type' => 'service',
		'context' => 'advanced',
		'priority' => 'default',
		'open_expanded' => false,
		'sections' => array(
			array(
				'title' => esc_html__('Information', 'majed') ,
				'id' => 'tab-service-bc',
				'icon' => 'el el-photo',
				'fields' => array(
					array(
  						'title' => esc_html__('Service cart image', 'majed') ,
  						'id' => 'service_cart_img',
  						'type' => 'media',
  						'url' => false,
					) ,
                    array(
  						'id' => 'service_number',
  						'type' => 'text',
  						'title' => esc_html__('Service Number', 'majed'),
  						'default' => '01',
                    ),
                    array(
  						'id' => 'service_class',
  						'type' => 'text',
  						'title' => esc_html__('HTML class', 'majed'),
  						'default' => ' ',
                    ),
				)
			) ,
		)
	));

    
        
 /** Portfolio options */
	MetaFramework::setMetabox(array(
		'id' => '_portfolio_options',
		'label' => esc_html__('Client Information', 'majed') ,
		'post_type' => 'portfolio',
		'context' => 'advanced',
		'priority' => 'default',
		'open_expanded' => false,
        'show_options_object' => false,
		'sections' => array(
       
            # Information
			array(
				'title' => esc_html__('Information', 'majed') ,
				'id' => 'tab-service-bc',
				'icon' => 'el el-photo',
				'fields' => array(
                    
                    array(
                        'id' => 'portfolio_client',
                        'type' => 'text',
                        'title' => esc_html__('Project Client', 'majed'),
                        'default' => 'Salim Co.',
                    ),
                    array(
                        'id' => 'portfolio_location',
                        'type' => 'text',
                        'title' => esc_html__('Project Location', 'majed'),
                        'default' => 'Washington',
                    ),
                    array(
                        'id' => 'portfolio_service_type',
                        'type' => 'text',
                        'title' => esc_html__('Service Type', 'majed'),
                        'default' => 'website design',
                    ),

                    
                )
			) ,
            # END Portfolio

            
		)
	));    
    /** END Portfolio options */
    
    
    
    /** Team options */
	MetaFramework::setMetabox(array(
		'id' => '_team_options',
		'label' => esc_html__('Personal Information', 'majed') ,
		'post_type' => 'team',
		'context' => 'advanced',
		'priority' => 'default',
		'open_expanded' => false,
        'show_options_object' => false,
		'sections' => array(

            # Social Media
			array(
				'title' => esc_html__('Social Media', 'majed') ,
				'id' => 'tab-service-bc',
				'icon' => 'el el-photo',
				'fields' => array(

                    array(
                        'id' => 'team_facebook_url',
                        'type' => 'text',
                        'title' => esc_html__('Facebook URL', 'majed'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'team_twitter_url',
                        'type' => 'text',
                        'title' => esc_html__('Twitter URL', 'majed'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'team_inkedin_url',
                        'type' => 'text',
                        'title' => esc_html__('Inkedin URL', 'majed'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'team_instagram_url',
                        'type' => 'text',
                        'title' => esc_html__('Instagram URL', 'majed'),
                        'default' => '#',
                    ),

                )
			) ,
            # END Social Media


            # Information
			array(
				'title' => esc_html__('Information', 'majed') ,
				'id' => 'tab-service-bc',
				'icon' => 'el el-photo',
				'fields' => array(

                    array(
                        'id' => 'team_qualification',
                        'type' => 'text',
                        'title' => esc_html__('Qualification', 'majed'),
                        'default' => 'CEO/Founder',
                    ),


                )
			) ,
            # END Information


		)
	));
    /** END Team options */

     /** Testimonial options */
	MetaFramework::setMetabox(array(
		'id' => '_testimonial_options',
		'label' => esc_html__('Client Information', 'majed') ,
		'post_type' => 'testimonial',
		'context' => 'advanced',
		'priority' => 'default',
		'open_expanded' => false,
        'show_options_object' => false,
		'sections' => array(

            # Information
			array(
				'title' => esc_html__('Information', 'majed') ,
				'id' => 'tab-service-bc',
				'icon' => 'el el-photo',
				'fields' => array(

                    array(
                        'id' => 'testimonial_qualification',
                        'type' => 'text',
                        'title' => esc_html__('Client Qualification', 'majed'),
                        'default' => ' ',
                    ),

                )
			) ,
            # END Information


		)
	));
    /** END Testimonial options */


     /** Clients options */
	MetaFramework::setMetabox(array(
		'id' => '_clients_options',
		'label' => esc_html__('Client Information', 'majed') ,
		'post_type' => 'clients',
		'context' => 'advanced',
		'priority' => 'default',
		'open_expanded' => false,
        'show_options_object' => false,
		'sections' => array(

            # Information
			array(
				'title' => esc_html__('Information', 'majed') ,
				'id' => 'tab-service-bc',
				'icon' => 'el el-photo',
				'fields' => array(

                    array(
                        'id' => 'client_url',
                        'type' => 'text',
                        'title' => esc_html__('Client URL', 'majed'),
                        'default' => ' ',
                    ),

                )
			) ,
            # END Clients


		)
	));
    /** END Clients options */



    /** pricing options */
    MetaFramework::setMetabox(array(
        'id' => '_pricing_options',
        'label' => esc_html__('Pricing Setting', 'majed'),
        'post_type' => 'pricing',
        'context' => 'advanced',
        'priority' => 'default',
        'open_expanded' => false,
        'sections' => array(
            array(
                'title' =>esc_html__('Pricing Subtitle', 'majed'),
                'id' => 'tab-pricing-st',
                'icon' => 'el el-photo',
                'fields' => array(
                    array(
                        'id' => 'pricing_subtitle',
                        'title' => esc_html__('Pricing subtitle','majed'),
                        'type' => 'text',
                    ),
                )
            ),
            array(
                'title' =>esc_html__('Pricing Price', 'majed'),
                'id' => 'tab-service-bc',
                'icon' => 'el el-photo',
                'fields' => array(
                    array(
                        'id' => 'pricing_currency',
                        'title' => esc_html__('Currency Unit','majed'),
                        'type' => 'text',
                        'placeholder' => '$'
                    ),
                    array(
                        'id' => 'pricing_price',
                        'title' => esc_html__('Price','majed'),
                        'type' => 'text',
                        'placeholder' => '199'
                    ),
                )
            ),
            array(
                'title' =>esc_html__('Pricing Button', 'majed'),
                'id' => 'tab-service-bc',
                'icon' => 'el el-photo',
                'fields' => array(
                    array(
                        'id' => 'pricing_btn_text',
                        'title' => esc_html__('Button Text','majed'),
                        'type' => 'text',
                        'placeholder' => 'Order now'
                    ),
                    array(
                        'id' => 'pricing_btn_link',
                        'title' => esc_html__('Button Url','majed'),
                        'type' => 'text',
                        'placeholder' => '#'
                    ),



                )
            ),
            array(
                'title' =>esc_html__('Pricing Feature', 'majed'),
                'id' => 'tab-pricing-feature',
                'icon' => 'el el-photo',
                'fields' => array(
                    array(
                        'id' => 'pricing_feature',
                        'title' => esc_html__('Pricing feature','majed'),
                        'type' => 'switch',
                        'default'=>false,
                    ),
                )
            ),


        )
    ));
    /** END pricing options */

}
