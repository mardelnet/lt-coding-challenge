<?php
/**
 * Plugin Name: Learning Tapestry Coding Challenge
 * Plugin URI: https://github.com/mardelnet/lt-coding-challenge
 * Description: Coding Challenge: create a custom WordPress plugin to manage and render a list of courses as shown on the provided designs.
 * Version: 1.0
 * Author: Pedro Figueroa
 * Author URI: https://www.linkedin.com/in/pedrofigueroa1989/
 */

define( 'LT_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'LT_PLUGIN_BASE', plugin_dir_url( __FILE__ ) );

require_once LT_PLUGIN_DIR . '/includes/require_acf.php';
require_once LT_PLUGIN_DIR . '/includes/courses_post_type.php';
require_once LT_PLUGIN_DIR . '/includes/courses_template.php';
require_once LT_PLUGIN_DIR . '/includes/custom_fields.php';
require_once LT_PLUGIN_DIR . '/includes/create_courses.php';
require_once LT_PLUGIN_DIR . '/includes/add_meta_to_api.php';