<?php

function enhanced_body_class_add_body($classes) {
    $enhanced_body_class_add_roles = get_option('enhanced_body_class_add_roles', true);
    $enhanced_body_class_add_user_name = get_option('enhanced_body_class_add_user_name', false);
    $enhanced_body_class_add_user_id = get_option('enhanced_body_class_add_user_id', false);
    $enhanced_body_class_add_text = get_option('enhanced_body_class_add_text', '');
    $current_user = wp_get_current_user();
 
    if($enhanced_body_class_add_roles) {
        foreach($current_user->roles as $role) {
            $classes .= ' user-role-' . $role;
        }
    }

    if($enhanced_body_class_add_user_name) {
        $classes .= ' user-id-' . $current_user->display_name;
    }

    if($enhanced_body_class_add_user_id) {
        $classes .= ' user-id-' . $current_user->ID;
    }

    if ($enhanced_body_class_add_text != '') {
        $classes .= ' ' . trim($enhanced_body_class_add_text);
    }

    return $classes;
}
