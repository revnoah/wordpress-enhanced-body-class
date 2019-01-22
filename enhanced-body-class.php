<?php
/**
 * @package EnhancedBodyClass
 * @version 1.0.0
 */

/*
Plugin Name: Enhanced Body Class
Plugin URI: http://noahjstewart.com/
Description: Plugin to add user-related classes to the body tag on admin pages
Author: Noah Stewart
Version: 1.0.0
Author URI: http://noahjstewart.com/
*/

require_once 'includes/helpers.inc.php';
require_once 'includes/admin.inc.php';

register_activation_hook( __FILE__, 'enhanced_body_class_rewrite_activation' );
register_deactivation_hook( __FILE__, 'enhanced_body_class_rewrite_activation' );
function enhanced_body_class_rewrite_activation() {
    flush_rewrite_rules();
}

add_filter( 'admin_body_class', 'enhanced_body_class_admin_body_class' );
function enhanced_body_class_admin_body_class($classes)
{
    $classes = enhanced_body_class_add_body($classes);

    return $classes;
}