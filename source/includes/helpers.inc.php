<?php

/**
 * Added classes based on settings
 *
 * @param string $classes Space-delimited string
 * @return string
 */
function enhanced_body_class_add_body($classes) {
	$current_user = wp_get_current_user();

	$classes .= _enhanced_body_class_add_role($current_user);
	$classes .= _enhanced_body_class_add_user_name($current_user);
	$classes .= _enhanced_body_class_add_user_id($current_user);

	return $classes;
}

/**
 * Add role
 *
 * @param WP_User $current_user WordPress user returned from current_user()
 * @return string
 */
function _enhanced_body_class_add_role($current_user) {
	$classes = '';
	$enhanced_body_class_add_roles 
		= get_option('enhanced_body_class_add_roles', true);

	if($enhanced_body_class_add_roles) {
		foreach ($current_user->roles as $role) {
			$classes .= ' user-role-' . $role;
		}
	}

	return $classes;
}

/**
 * Add user name
 *
 * @param WP_User $current_user WordPress user returned from current_user()
 * @return string
 */
function _enhanced_body_class_add_user_name($current_user) {
	$classes = '';
	$enhanced_body_class_add_user_name 
		= get_option('enhanced_body_class_add_user_name', false);

	if ($enhanced_body_class_add_user_name) {
		$classes = ' user-name-' . $current_user->display_name;
	}
	
	return $classes;
}

/**
 * Add user ID
 *
 * @param WP_User $current_user WordPress user returned from current_user()
 * @return string
 */
function _enhanced_body_class_add_user_id($current_user) {
	$classes = '';
	$enhanced_body_class_add_user_id 
		= get_option('enhanced_body_class_add_user_id', false);

	if ($enhanced_body_class_add_user_id) {
		$classes = ' user-id-' . $current_user->ID;
	}
	
	return $classes;
}
