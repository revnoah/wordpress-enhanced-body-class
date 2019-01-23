<?php
/**
 * @package EnhancedBodyClass
 * @version 1.0.2
 */

/*
Plugin Name: Enhanced Body Class
Plugin URI: http://noahjstewart.com/
Description: Plugin to add user-related classes to the body tag on admin pages
Author: Noah Stewart
Version: 1.0.2
Author URI: http://noahjstewart.com/
*/

require_once realpath(__DIR__) . '/includes/helpers.inc.php';
require_once realpath(__DIR__) . '/includes/admin.inc.php';

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
		$new_classes = enhanced_body_class_get_classes();

		$classes .= implode(' ', $new_classes);
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
		$new_classes = enhanced_body_class_get_classes();

		$classes = array_merge($classes, $new_classes);
	}

	return $classes;
}