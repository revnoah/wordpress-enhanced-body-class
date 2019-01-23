<?php

/**
 * action admin_menu
 */
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

/**
 * action admin_init
 */
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
		'enhanced_body_class_active_frontend',
		'enhanced_body_class_active_admin'
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
	$enhanced_body_class_active_frontend = get_option(
		'enhanced_body_class_active_frontend', false
	);
	$enhanced_body_class_active_admin = get_option(
		'enhanced_body_class_active_admin', true
	);
	?>
	<div class="wrap">
	<h1><?php echo __('Enhanced Body Class'); ?></h1>

	<form method="post" action="options.php">
		<?php settings_fields( 'enhanced-body-class-settings-group' ); ?>
		<?php do_settings_sections( 'enhanced-body-class-settings-group' ); ?>

		<h2><?php echo __('Enhanced Styles') ?></h2>
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

		<h2><?php echo __('Visibility') ?></h2>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php echo __('Front End'); ?></th>
				<td>
					<input type="checkbox" 
						id="enhanced_body_class_active_frontend" 
						name="enhanced_body_class_active_frontend" 
						<?php 
							echo ($enhanced_body_class_active_frontend === 'on') ? 'checked' : ''; 
						?> 
					/>
					<br /><small><?php 
						echo __('Visibility on the frontend can affect website caching'); 
					?></small>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php echo __('Admin'); ?></th>
				<td>
					<input type="checkbox" 
						id="enhanced_body_class_active_admin" 
						name="enhanced_body_class_active_admin" 
						<?php 
							echo ($enhanced_body_class_active_admin === 'on') 
								? 'checked' 
								: ''; 
						?> 
					/>
					<br /><small><?php 
						echo __('Visibility on the backend or admin pages'); 
					?></small>
				</td>
			</tr>
		</table>

		<?php submit_button(); ?>
	</form>

</div>
<?php
}
