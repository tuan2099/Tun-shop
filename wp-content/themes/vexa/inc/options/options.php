<?php

/**
 * Header Options
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Header', 'majed'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'title' => esc_html__('Logo', 'majed'),
            'subtitle' => esc_html__('Select an image file for your logo.', 'majed'),
            'id' => 'main_logo',
            'type' => 'media',
            'url' => false,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/img/logo.svg'
            )
        ),
        array(
            'id' => 'header_layout',
            'title' => esc_html__('Layouts', 'majed'),
            'subtitle' => esc_html__('Select a layout for header', 'majed'),
            'default' => '1',
            'type' => 'image_select',
            'options' => array(
                '1' => get_template_directory_uri().'/inc/options/images/header/header1.jpg',
                '2' => get_template_directory_uri().'/inc/options/images/header/header2.jpg',
                '3' => get_template_directory_uri().'/inc/options/images/header/header3.jpg',
                '4' => get_template_directory_uri().'/inc/options/images/header/header4.jpg',
            )
        ),
		array(
            'title' => esc_html__('Enable Header Tool Bar', 'majed'),
            'subtitle' => esc_html__('Header Tool Bar : Telphone, Email, location & Social Media Links', 'majed'),
            'id' => 'niletheme-toolbar',
            'type' => 'switch',
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Search Button', 'majed'),
            'id' => 'niletheme-search-button',
            'type' => 'switch',
            'title' => esc_html__('Enable Search Button', 'majed'),
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Hidden Sidebar', 'majed'),
            'id' => 'niletheme-sidebare-button',
            'type' => 'switch',
            'title' => esc_html__('Enable Hidden Sidebar Button', 'majed'),
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Cart Button', 'majed'),
            'id' => 'niletheme-cart-button',
            'type' => 'switch',
            'title' => esc_html__('Enable Cart Button', 'majed'),
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Enable Quote Link', 'majed'),
            'id' => 'niletheme-header-quoteLink',
            'type' => 'switch',
            'title' => esc_html__('Enable Get A Quote Link', 'majed'),
            'default' => false,
        ),


		array(
            'subtitle' => esc_html__('Enable Phone Number', 'majed'),
            'id' => 'niletheme-header-telphone',
            'type' => 'switch',
            'title' => esc_html__('Enable Phone Number', 'majed'),
            'default' => false,
        ),
        array(
            'id' => 'welcome_message',
            'type' => 'text',
            'title' => esc_html__('Welcome message in header 3 only', 'majed'),
            'default' => 'Please stay at home .. thanks',
        ),

		
    )
);




/**
 * General Options
 *
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('General Options', 'majed'),
    'icon' => 'el-icon-compass',
    'fields' => array(
        
		array(
            'subtitle' => esc_html__('Preloader Options', 'majed'),
            'id' => 'niletheme_preloader',
            'type' => 'switch',
            'title' => esc_html__('Enable Preloader', 'majed'),
            'default' => false,
        ),
		array(
            'subtitle' => esc_html__('Scroll To Top', 'majed'),
            'id' => 'niletheme_scroll_top',
            'type' => 'switch',
            'title' => esc_html__('Enable Scroll To Top', 'majed'),
            'default' => false,
        ),
        
    )
);


/**
 * Page Title
 *
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Page Title', 'majed'),
    'icon' => 'el-icon-compass',
    'fields' => array(
        array(
            'title' => esc_html__('Page Title Ba Image', 'majed'),
            'subtitle' => esc_html__('Select an image file for your Ba.', 'majed'),
            'id' => 'page_title_ba',
            'type' => 'media',
            'url' => false,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/img/page-title.jpg'
            )
        ),
    )
);

/**
 * Blog Options

 *
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Blog Options', 'majed'),
    'icon' => 'el-icon-website',
    'fields' => array(
        array(
            'title' => esc_html__('Author Information', 'majed'),
            'subtitle' => esc_html__('Select if you want to show author information on Blog Details Page.', 'majed'),
            'id' => 'show-blog-author',
            'type' => 'switch',
            'default' => false,
        ),
        array(
            'title' => esc_html__('Share Post', 'majed'),
            'subtitle' => esc_html__('Select if you want to show Share Post on Blog Details Page.', 'majed'),
            'id' => 'show-share-post',
            'type' => 'switch',
            'default' => false,
        ),
        array(
            'title' => esc_html__('Comments', 'majed'),
            'subtitle' => esc_html__('Select if you want to show comments on Blog Details Page.', 'majed'),
            'id' => 'show-comments',
            'type' => 'switch',
            'default' => true,
        ),
        array(
            'title' => esc_html__('Navigation', 'majed'),
            'subtitle' => esc_html__('Select if you want to show Navigation on Blog Details Page.', 'majed'),
            'id' => 'show-navigation',
            'type' => 'switch',
            'default' => true,
        ),
    )
);

/**
 * General Options
 *
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Service Page', 'majed'),
    'icon' => 'el-icon-compass',
    'fields' => array(
        
		array(
            'subtitle' => esc_html__('PDF Brochure', 'majed'),
            'id' => 'niletheme_PDF_Brochure',
            'type' => 'switch',
            'title' => esc_html__('Enable PDF Brochure', 'majed'),
            'default' => false,
        ),
        array(
            'title' => esc_html__('PDF Brochure', 'majed'),
            'id' => 'niletheme_PDF_url',
            'type' => 'media',
            'url' => false,
            'required' => array( 'niletheme_PDF_Brochure', '=', '1' )
        ),
        

        
		array(
            'subtitle' => esc_html__('Word Brochure', 'majed'),
            'id' => 'niletheme_Word_Brochure',
            'type' => 'switch',
            'title' => esc_html__('Enable Word Brochure', 'majed'),
            'default' => false,
        ),
        array(
            'title' => esc_html__('Word Brochure', 'majed'),
            'id' => 'niletheme_Word_url',
            'type' => 'media',
            'url' => false,
            'required' => array( 'niletheme_Word_Brochure', '=', '1' )
        ),
        
		array(
            'subtitle' => esc_html__('Contact Us', 'majed'),
            'id' => 'niletheme_servise_contact',
            'type' => 'switch',
            'title' => esc_html__('Enable Contact Us Block', 'majed'),
            'default' => false,
        ),
        
    )
);

/**
 * Footer
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Footer', 'majed'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        
        array(
            'id' => 'action_footer',
            'type' => 'button_set',
            'title' => esc_html__('Call to action', 'majed') ,
            'options' => array(
                '1' =>  esc_html__('Yes', 'majed') ,
                '' => esc_html__('No', 'majed') ,
            ) ,
            'default' => ''
        ) ,
        
        array(
            'title' => esc_html__('Icon', 'majed'),
            'id' => 'action_icon',
            'type' => 'media',
            'url' => false,
            'required' => array( 'action_footer', '=', '1' ),
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/img/rocket-icon.svg'
            )
        ),

        array(
            'id' => 'action_text',
            'type' => 'text',
            'title' => esc_html__('Call to action text', 'majed'),
            'default' => 'Make a lasting impact on companies, industries, and society',
            'required' => array( 'action_footer', '=', '1' )
        ),
        array(
            'id' => 'action_text_link',
            'type' => 'text',
            'title' => esc_html__('Call to action Link text', 'majed'),
            'default' => 'Discover More',
            'required' => array( 'action_footer', '=', '1' )
        ),
        array(
            'id' => 'action_link',
            'type' => 'text',
            'title' => esc_html__('Call to action Link URL', 'majed'),
            'default' => '#',
            'required' => array( 'action_footer', '=', '1' )
        ),


        
        array(
            'id'=>'_copyright',
            'type' => 'textarea',
            'title' => esc_html__('Copyright', 'majed'),
            'validate' => 'html_custom',
            'default' => '© 2020 niletheme. All Rights Reserved With Love by <a href="#">Nile Theme</a>',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array()
            )
        ),

        array(
            'id' => 'footer_layout',
            'title' => esc_html__('Layouts', 'majed'),
            'subtitle' => esc_html__('Select a layout for footer', 'majed'),
            'default' => '1',
            'type' => 'image_select',
            'options' => array(
                '1' => get_template_directory_uri().'/inc/options/images/footer/footer1.jpg',
                '2' => get_template_directory_uri().'/inc/options/images/footer/footer2.jpg',
                '3' => get_template_directory_uri().'/inc/options/images/footer/footer3.jpg',
            )
        ),
		array(
            'subtitle' => esc_html__('Enable Widgets Area', 'majed'),
            'id' => 'niletheme-footer-widget',
            'type' => 'switch',
            'title' => esc_html__('Enable Widget Area in Footer ', 'majed'),
            'default' => false,
        ),

    )
);

/**
 * Styling
 *
 * css color.
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Styling', 'majed'),
    'icon' => 'el-icon-adjust',
    'fields' => array(
        
        array(
            'subtitle' => esc_html__('Set primary color.', 'majed'),
            'id' => 'primary_color',
            'type' => 'color',
            'title' => esc_html__('Primary Color', 'majed'),
            'default' => '#0674a1'
        ),
        array(
            'subtitle' => esc_html__('Set Second color.', 'majed'),
            'id' => 'second_color',
            'type' => 'color',
            'title' => esc_html__('Second Color', 'majed'),
            'default' => '#f9a32a'
        ),
    )
);



/* Social Media */
$this->sections[] = array(
    'title' => esc_html__('Contact Info', 'majed'),
    'icon' => 'el el-envelope',
    'subsection' => false,
    'fields' => array(
        array(
            'id' => 'telphone',
            'type' => 'text',
            'title' => esc_html__('Telphone', 'majed'),
            'default' => '00222123333019',
        ),
        array(
            'id' => 'location',
            'type' => 'text',
            'title' => esc_html__('Location', 'majed'),
            'default' => '12 Jaddah, SK, KSA',
        ),
        array(
            'id' => 'location_url',
            'type' => 'text',
            'title' => esc_html__('Location URL', 'majed'),
            'default' => '#map',
        ),
        array(
            'id' => 'email',
            'type' => 'text',
            'title' => esc_html__('Email', 'majed'),
            'default' => 'info@example.com',
        ),
		
        array(
            'id' => 'quote_link',
            'type' => 'text',
            'title' => esc_html__('Get A Quote Link', 'majed'),
            'default' => '#',
        ),
		
        array(
            'id' => 'work_time',
            'type' => 'text',
            'title' => esc_html__('Work Hours', 'majed'),
            'default' => 'Monday - Friday 08:00 - 22:00',
        ),
		
        array(
            'id'      => 'niletheme_top_social',
            'type'    => 'sorter',
            'title'   => 'Social',
            'desc'    => 'Choose which social networks are displayed and edit where they link to.',
            'options' => array(
                'enabled'  => array(
                    'facebook'  => 'Facebook',
                    'twitter'   => 'Twitter',
                    'linkedin'  => 'inkedin',
                    'rss'       => 'RSS',
                ),
                'disabled' => array(
                    'youtube'   => 'Youtube',
                    'vimeo'     => 'Vimeo',
                    'tumblr'    => 'Tumblr',
                    'skype'     => 'Skype',
                    'google'    => 'Google',
                    'pinterest' => 'Pinterest',
                    'instagram' => 'Instagram',
                    'whatsapp'      => 'Whatsapp'
                )
            ),
        ),
        array(
            'id' => 'social_facebook_url',
            'type' => 'text',
            'title' => esc_html__('Facebook URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_twitter_url',
            'type' => 'text',
            'title' => esc_html__('Twitter URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_inkedin_url',
            'type' => 'text',
            'title' => esc_html__('Inkedin URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_rss_url',
            'type' => 'text',
            'title' => esc_html__('Rss URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_instagram_url',
            'type' => 'text',
            'title' => esc_html__('Instagram URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_google_url',
            'type' => 'text',
            'title' => esc_html__('Google URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_skype_url',
            'type' => 'text',
            'title' => esc_html__('Skype URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_pinterest_url',
            'type' => 'text',
            'title' => esc_html__('Pinterest URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_vimeo_url',
            'type' => 'text',
            'title' => esc_html__('Vimeo URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_youtube_url',
            'type' => 'text',
            'title' => esc_html__('Youtube URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_whatsapp_url',
            'type' => 'text',
            'title' => esc_html__('Whatsapp URL', 'majed'),
            'default' => '#',
        ),
        array(
            'id' => 'social_tumblr_url',
            'type' => 'text',
            'title' => esc_html__('Tumblr URL', 'majed'),
            'default' => '#',
        ),

    )
);
