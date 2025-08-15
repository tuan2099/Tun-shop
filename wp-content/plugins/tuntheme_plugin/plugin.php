<?php
/*
Plugin Name: Tun Plugin
Plugin URI:
Description: This plugin Only competible With Tun Theme By TunTheme.
Version: 1.1.3
Author: TunTheme (Rabie Elkheir)
Author Email: support@Tunthemes.com

  Copyright 2018 TunTheme
*/

/* inc redux framework */
require_once plugin_dir_path( __FILE__ ).'frameworks/ReduxCore/framework.php';

/* inc redux meta framework */
require_once plugin_dir_path( __FILE__ ).'frameworks/Metacore/framework.php';

require_once plugin_dir_path( __FILE__ ).'inc/options/functions.php';

/* post type */
require plugin_dir_path( __FILE__ ).'inc/post_type.php';
require plugin_dir_path( __FILE__ ).'inc/tuntheme_function.php';