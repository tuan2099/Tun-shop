<?php

/**
 * Header Options
 *
 * @author Fox
 */
$this->sections[] = array(
    'title' => esc_html__('Header', 'vexa'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'title' => esc_html__('Logo', 'vexa'),
            'subtitle' => esc_html__('Select an image file for your logo.', 'vexa'),
            'id' => 'main_logo',
            'type' => 'media',
            'url' => false,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/img/logo.svg'
            )
        ),
        array(
            'id' => 'header_layout',
            'title' => esc_html__('Layouts', 'vexa'),
            'subtitle' => esc_html__('Select a layout for header', 'vexa'),
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
            'title' => esc_html__('Enable Header Tool Bar', 'vexa'),
            'subtitle' => esc_html__('Header Tool Bar : Telphone, Email, location & Social Media Links', 'vexa'),
            'id' => 'vexatheme-toolbar',
            'type' => 'switch',
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Search Button', 'vexa'),
            'id' => 'vexatheme-search-button',
            'type' => 'switch',
            'title' => esc_html__('Enable Search Button', 'vexa'),
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Hidden Sidebar', 'vexa'),
            'id' => 'vexatheme-sidebare-button',
            'type' => 'switch',
            'title' => esc_html__('Enable Hidden Sidebar Button', 'vexa'),
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Cart Button', 'vexa'),
            'id' => 'vexatheme-cart-button',
            'type' => 'switch',
            'title' => esc_html__('Enable Cart Button', 'vexa'),
            'default' => false,
        ),

		array(
            'subtitle' => esc_html__('Enable Quote Link', 'vexa'),
            'id' => 'vexatheme-header-quoteLink',
            'type' => 'switch',
            'title' => esc_html__('Enable Get A Quote Link', 'vexa'),
            'default' => false,
        ),


		array(
            'subtitle' => esc_html__('Enable Phone Number', 'vexa'),
            'id' => 'vexatheme-header-telphone',
            'type' => 'switch',
            'title' => esc_html__('Enable Phone Number', 'vexa'),
            'default' => false,
        ),
        array(
            'id' => 'welcome_message',
            'type' => 'text',
            'title' => esc_html__('Welcome message in header 3 only', 'vexa'),
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
    'title' => esc_html__('General Options', 'vexa'),
    'icon' => 'el-icon-compass',
    'fields' => array(
        
		array(
            'subtitle' => esc_html__('Preloader Options', 'vexa'),
            'id' => 'vexatheme_preloader',
            'type' => 'switch',
            'title' => esc_html__('Enable Preloader', 'vexa'),
            'default' => false,
        ),
		array(
            'subtitle' => esc_html__('Scroll To Top', 'vexa'),
            'id' => 'vexatheme_scroll_top',
            'type' => 'switch',
            'title' => esc_html__('Enable Scroll To Top', 'vexa'),
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
    'title' => esc_html__('Page Title', 'vexa'),
    'icon' => 'el-icon-compass',
    'fields' => array(
        array(
            'title' => esc_html__('Page Title Ba Image', 'vexa'),
            'subtitle' => esc_html__('Select an image file for your Ba.', 'vexa'),
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
    'title' => esc_html__('Blog Options', 'vexa'),
    'icon' => 'el-icon-website',
    'fields' => array(
        array(
            'title' => esc_html__('Author Information', 'vexa'),
            'subtitle' => esc_html__('Select if you want to show author information on Blog Details Page.', 'vexa'),
            'id' => 'show-blog-author',
            'type' => 'switch',
            'default' => false,
        ),
        array(
            'title' => esc_html__('Share Post', 'vexa'),
            'subtitle' => esc_html__('Select if you want to show Share Post on Blog Details Page.', 'vexa'),
            'id' => 'show-share-post',
            'type' => 'switch',
            'default' => false,
        ),
        array(
            'title' => esc_html__('Comments', 'vexa'),
            'subtitle' => esc_html__('Select if you want to show comments on Blog Details Page.', 'vexa'),
            'id' => 'show-comments',
            'type' => 'switch',
            'default' => true,
        ),
        array(
            'title' => esc_html__('Navigation', 'vexa'),
            'subtitle' => esc_html__('Select if you want to show Navigation on Blog Details Page.', 'vexa'),
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
    'title' => esc_html__('Service Page', 'vexa'),
    'icon' => 'el-icon-compass',
    'fields' => array(
        
		array(
            'subtitle' => esc_html__('PDF Brochure', 'vexa'),
            'id' => 'vexatheme_PDF_Brochure',
            'type' => 'switch',
            'title' => esc_html__('Enable PDF Brochure', 'vexa'),
            'default' => false,
        ),
        array(
            'title' => esc_html__('PDF Brochure', 'vexa'),
            'id' => 'vexatheme_PDF_url',
            'type' => 'media',
            'url' => false,
            'required' => array( 'vexatheme_PDF_Brochure', '=', '1' )
        ),
        

        
		array(
            'subtitle' => esc_html__('Word Brochure', 'vexa'),
            'id' => 'vexatheme_Word_Brochure',
            'type' => 'switch',
            'title' => esc_html__('Enable Word Brochure', 'vexa'),
            'default' => false,
        ),
        array(
            'title' => esc_html__('Word Brochure', 'vexa'),
            'id' => 'vexatheme_Word_url',
            'type' => 'media',
            'url' => false,
            'required' => array( 'vexatheme_Word_Brochure', '=', '1' )
        ),
        
		array(
            'subtitle' => esc_html__('Contact Us', 'vexa'),
            'id' => 'vexatheme_servise_contact',
            'type' => 'switch',
            'title' => esc_html__('Enable Contact Us Block', 'vexa'),
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
    'title' => esc_html__('Footer', 'vexa'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        
        array(
            'id' => 'action_footer',
            'type' => 'button_set',
            'title' => esc_html__('Call to action', 'vexa') ,
            'options' => array(
                '1' =>  esc_html__('Yes', 'vexa') ,
                '' => esc_html__('No', 'vexa') ,
            ) ,
            'default' => ''
        ) ,
        
        array(
            'title' => esc_html__('Icon', 'vexa'),
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
            'title' => esc_html__('Call to action text', 'vexa'),
            'default' => 'Make a lasting impact on companies, industries, and society',
            'required' => array( 'action_footer', '=', '1' )
        ),
        array(
            'id' => 'action_text_link',
            'type' => 'text',
            'title' => esc_html__('Call to action Link text', 'vexa'),
            'default' => 'Discover More',
            'required' => array( 'action_footer', '=', '1' )
        ),
        array(
            'id' => 'action_link',
            'type' => 'text',
            'title' => esc_html__('Call to action Link URL', 'vexa'),
            'default' => '#',
            'required' => array( 'action_footer', '=', '1' )
        ),


        
        array(
            'id'=>'_copyright',
            'type' => 'textarea',
            'title' => esc_html__('Copyright', 'vexa'),
            'validate' => 'html_custom',
            'default' => '© 2020 vexatheme. All Rights Reserved With Love by <a href="#">vexa Theme</a>',
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
            'title' => esc_html__('Layouts', 'vexa'),
            'subtitle' => esc_html__('Select a layout for footer', 'vexa'),
            'default' => '1',
            'type' => 'image_select',
            'options' => array(
                '1' => get_template_directory_uri().'/inc/options/images/footer/footer1.jpg',
                '2' => get_template_directory_uri().'/inc/options/images/footer/footer2.jpg',
                '3' => get_template_directory_uri().'/inc/options/images/footer/footer3.jpg',
            )
        ),
		array(
            'subtitle' => esc_html__('Enable Widgets Area', 'vexa'),
            'id' => 'vexatheme-footer-widget',
            'type' => 'switch',
            'title' => esc_html__('Enable Widget Area in Footer ', 'vexa'),
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
    'title' => esc_html__('Styling', 'vexa'),
    'icon' => 'el-icon-adjust',
    'fields' => array(
        
        array(
            'subtitle' => esc_html__('Set primary color.', 'vexa'),
            'id' => 'primary_color',
            'type' => 'color',
            'title' => esc_html__('Primary Color', 'vexa'),
            'default' => '#0674a1'
        ),
        array(
            'subtitle' => esc_html__('Set Second color.', 'vexa'),
            'id' => 'second_color',
            'type' => 'color',
            'title' => esc_html__('Second Color', 'vexa'),
            'default' => '#f9a32a'
        ),
    )
);



/* Social Media */
$this->sections[] = array(
    'title' => esc_html__('Contact Info', 'vexa'),
    'icon' => 'el el-envelope',
    'subsection' => false,
    'fields' => array(
        array(
            'id' => 'telphone',
            'type' => 'text',
            'title' => esc_html__('Telphone', 'vexa'),
            'default' => '00222123333019',
        ),
        array(
            'id' => 'location',
            'type' => 'text',
            'title' => esc_html__('Location', 'vexa'),
            'default' => '12 Jaddah, SK, KSA',
        ),
        array(
            'id' => 'location_url',
            'type' => 'text',
            'title' => esc_html__('Location URL', 'vexa'),
            'default' => '#map',
        ),
        array(
            'id' => 'email',
            'type' => 'text',
            'title' => esc_html__('Email', 'vexa'),
            'default' => 'info@example.com',
        ),
		
        array(
            'id' => 'quote_link',
            'type' => 'text',
            'title' => esc_html__('Get A Quote Link', 'vexa'),
            'default' => '#',
        ),
		
        array(
            'id' => 'work_time',
            'type' => 'text',
            'title' => esc_html__('Work Hours', 'vexa'),
            'default' => 'Monday - Friday 08:00 - 22:00',
        ),
		
        array(
            'id'      => 'vexatheme_top_social',
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
            'title' => esc_html__('Facebook URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_twitter_url',
            'type' => 'text',
            'title' => esc_html__('Twitter URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_inkedin_url',
            'type' => 'text',
            'title' => esc_html__('Inkedin URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_rss_url',
            'type' => 'text',
            'title' => esc_html__('Rss URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_instagram_url',
            'type' => 'text',
            'title' => esc_html__('Instagram URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_google_url',
            'type' => 'text',
            'title' => esc_html__('Google URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_skype_url',
            'type' => 'text',
            'title' => esc_html__('Skype URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_pinterest_url',
            'type' => 'text',
            'title' => esc_html__('Pinterest URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_vimeo_url',
            'type' => 'text',
            'title' => esc_html__('Vimeo URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_youtube_url',
            'type' => 'text',
            'title' => esc_html__('Youtube URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_whatsapp_url',
            'type' => 'text',
            'title' => esc_html__('Whatsapp URL', 'vexa'),
            'default' => '#',
        ),
        array(
            'id' => 'social_tumblr_url',
            'type' => 'text',
            'title' => esc_html__('Tumblr URL', 'vexa'),
            'default' => '#',
        ),

    )
);
