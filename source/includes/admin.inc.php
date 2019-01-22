<?php

add_action('admin_menu', 'enhanced_body_class_create_menu');

/**
 * Create admin menu item
 *
 * @return void
 */
function enhanced_body_class_create_menu() {
	add_submenu_page(
		'options-general.php',
		'Enhanced Body Class',
		'Enhanced Body Class',
		'administrator',
		__FILE__,
		'enhanced_body_class_admin',
		plugins_url('/images/icon.png', __FILE__)
	);
}

add_action('admin_init', 'enhanced_body_class_settings');

/**
 * Get settings fields
 *
 * @return array
 */
function _enhanced_body_class_settings_fields() {
	$settings = [
		'enhanced_body_class_add_roles',
		'enhanced_body_class_add_user_name',
		'enhanced_body_class_add_user_id',
		'enhanced_body_class_add_text'
	];

	return $settings;
}

/**
 * Register custom settings
 *
 * @return void
 */
function enhanced_body_class_settings() {
	$settings = _enhanced_body_class_settings_fields();

	//register settings
	foreach ($settings as $setting) {
		register_setting('enhanced-body-class-settings-group', $setting);
	}
}

/**
 * Admin settings
 *
 * @return void
 */
function enhanced_body_class_admin() {
	//load admin plugin
	$plugin_path = plugins_url('js/admin.js', __FILE__);
	wp_enqueue_script('admin-js', $plugin_path, array('jquery'));

	//load user settings
	$enhanced_body_class_add_roles = get_option(
		'enhanced_body_class_add_roles', true
	);
	$enhanced_body_class_add_user_name = get_option(
		'enhanced_body_class_add_user_name', false
	);
	$enhanced_body_class_add_user_id = get_option(
		'enhanced_body_class_add_user_id', false
	);
	?>
	<div class="wrap">
	<h1><?php echo __('Enhanced Body Class'); ?></h1>

	<form method="post" action="options.php">
		<?php settings_fields( 'enhanced-body-class-settings-group' ); ?>
		<?php do_settings_sections( 'enhanced-body-class-settings-group' ); ?>

		<table class="form-table">
		<tr valign="top">
				<th scope="row"><?php echo __('Add User Role'); ?></th>
				<td>
					<input type="checkbox" 
						id="enhanced_body_class_add_roles" 
						name="enhanced_body_class_add_roles" 
						<?php echo ($enhanced_body_class_add_roles === 'on') ? 'checked' : ''; ?> 
					/>
					<br /><small><?php 
						echo __('Add a class to the body tag for the current user\'s role'); 
					?></small>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php echo __('Add Username'); ?></th>
				<td>
					<input type="checkbox" 
						id="enhanced_body_class_add_user_name" 
						name="enhanced_body_class_add_user_name" 
						<?php 
							echo ($enhanced_body_class_add_user_name === 'on') 
								? 'checked' 
								: ''; 
						?>
					/>
					<br /><small><?php 
						echo __('Add a class to the body tag for the current user\'s username'); 
					?></small>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php echo __('Add User ID'); ?></th>
				<td>
					<input type="checkbox" 
						id="enhanced_body_class_add_user_id" 
						name="enhanced_body_class_add_user_id" 
						<?php 
							echo ($enhanced_body_class_add_user_id === 'on') 
								? 'checked' 
								: ''; 
						?> 
					/>
					<br /><small><?php 
						echo __('Add a class to the body tag for the current user\'s ID'); 
					?></small>
				</td>
			</tr>
		</table>

		<?php submit_button(); ?>
	</form>

</div>
<?php
}
