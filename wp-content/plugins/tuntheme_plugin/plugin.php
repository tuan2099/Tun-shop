<?php
/*
Plugin Name: Vexa Plugin
Plugin URI:
Description: This plugin Only competible With Vexa Theme By VexaTheme.
Version: 1.1.3
Author: VexaTheme (Hoang Anh Tuan)
Author Email: hoangtuam09@gmail.com

  Copyright 2025 VexaTheme
*/

/* inc redux framework */
require_once plugin_dir_path( __FILE__ ).'frameworks/ReduxCore/framework.php';

/* inc redux meta framework */
require_once plugin_dir_path( __FILE__ ).'frameworks/Metacore/framework.php';

require_once plugin_dir_path( __FILE__ ).'inc/options/functions.php';

/* post type */
require plugin_dir_path( __FILE__ ).'inc/post_type.php';
require plugin_dir_path( __FILE__ ).'inc/tuntheme_function.php';