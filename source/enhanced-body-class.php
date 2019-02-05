<?php
/**
 * @package EnhancedBodyClass
 * @version 1.0.6
 */

/*
Plugin Name: Enhanced Body Class
Plugin URI: https://github.com/revnoah/wordpress-enhanced-body-class#readme
Description: Plugin to add user-related classes to the body tag.
Author: Noah Stewart
Version: 1.0.6
Author URI: http://noahjstewart.com/
*/

//load required includes
require_once realpath(__DIR__) . '/includes/helpers.inc.php';
require_once realpath(__DIR__) . '/includes/form.inc.php';
require_once realpath(__DIR__) . '/includes/admin.inc.php';

//register rewrite hook
register_activation_hook(__FILE__, 'enhanced_body_class_rewrite_activation');
register_deactivation_hook(__FILE__, 'enhanced_body_class_rewrite_activation');

/**
 * Handle rewrite rules
 *
 * @return void
 */
function enhanced_body_class_rewrite_activation(){
	flush_rewrite_rules();
}

/**
 * Initiate filter for body class on frontend and backend
 */
add_filter('admin_body_class', 'enhanced_body_class_admin_body_class');
add_filter('body_class', 'enhanced_body_class_frontend_body_class');

/**
 * Add class to body tag on admin pages
 *
 * @param string $classes Space-delimited list of classes
 * @return string
 */
function enhanced_body_class_admin_body_class($classes){
	$enhanced_body_class_active_admin = get_option(
		'enhanced_body_class_active_admin', true
	);

	if ($enhanced_body_class_active_admin) {
		//load and concatenate imploded classes
		$new_classes = enhanced_body_class_get_classes();
		$classes .= implode(' ', $new_classes);

		//defined css template and load
		$template_name = 'enhanced-body-class-admin';
		enhanced_body_class_load_css($template_name);
		enhanced_body_class_load_script($template_name);
	}

	return $classes;
}

/**
 * Add class to body tag on frontend themes
 *
 * @param array $classes Array of classes
 * @return array
 */
function enhanced_body_class_frontend_body_class($classes) {
	$enhanced_body_class_active_frontend = get_option(
		'enhanced_body_class_active_frontend', false
	);

	if ($enhanced_body_class_active_frontend) {
		//load and merge classes
		$new_classes = enhanced_body_class_get_classes();
		$classes = array_merge($classes, $new_classes);

		//defined css template and load
		$template_name = 'enhanced-body-class-frontend';
		enhanced_body_class_load_css($template_name);
		enhanced_body_class_load_script($template_name);
	}

	return $classes;
}
