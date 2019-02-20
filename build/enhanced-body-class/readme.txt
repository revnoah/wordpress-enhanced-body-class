=== Enhanced Body Class ===
Contributors: revnoah
Donate link: https://donate.noahjstewart.com/
Tags: body class style
Requires at least: 4.6
Tested up to: 5.0.3
Stable tag: 5.0.3
Requires PHP: 5.6.40
License: ISC
License URI: https://opensource.org/licenses/ISC

WordPress plugin to add user-related classes to body tag, allowing you to easily customize styling by role or specific user.

== Description ==

WordPress plugin to add user-related classes to the body tag. This can be enabled on the frontend and backend of the site. 
The css classes allow you to easily customize styling by role or a specific user.

== Features ==

*   Toggle display on frontend and admin pages
*   Toggle classes for role, user name and user id
*   Template hinting to load custom theme css files for frontend and admin

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/enhanced-body-class` directory, or install the plugin through 
the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Enhanced Body Class screen to configure the plugin. You must choose either frontend or admin to see changes.
4. Customize output by adding any of the files below based on the front or admin settings you selected.

== Stylesheets ==

*   Add to theme folder (optional): enhanced-body-class-frontend.css 
*   Add to theme folder (optional): enhanced-body-class-admin.css

== Scripts ==

*   Add to theme folder (optional): enhanced-body-class-frontend.js 
*   Add to theme folder (optional): enhanced-body-class-admin.js

== Styles ==

*   .user-role-{rolename} ex: .user-role-author
*   .user-name-{username} ex: .user-name-bobdobbs
*   .user-id-{ID} ex: .user-id-1

== Usage ==

After activating the class on the body tag, it will be up to you to use css or javascript to customize the display.

1. Activate 'User Role' on 'Admin Pages' in plugin settings
2. Observe classes on BODY tag by viewing the webpage source. You may need to refresh the page to see the updated class.
3. Navigate to current theme and create file `enhanced-body-class-admin.css`
4. Edit `enhanced-body-class-admin.css` and add the following:

`body.user-role-administrator { background-color: cyan; }`

Refresh the page. You should now see a cyan background. You can now update the css to change the display of specific 
page elements.

== Real Usage ==

This plugin was developed to hide certain elements in a popular photo gallery from users with a specific role. 

Create the theme file `enhanced-body-class-admin.css`

```
body.user-role-contributor #updategallery #gallerydiv { display: none; }
```

Create the theme file `enhanced-body-class-admin.js`

```
jQuery(document).ready(function($) {
	$('body.user-role-contributor select#bulkaction option[value="copy_to"]').attr('disabled', 'disabled');
});
```

== Frequently Asked Questions ==

= Which options should I enable? =

Only enable the options you need to use.

= Do I need to create and use the new stylesheet files? =

No, the stylesheets are available for your convenience. If you prefer to use other stylesheets, go ahead.

= Will this plugin work with older versions of WordPress or PHP? =

Probably, but it may not function as expected.

== Screenshots ==

1. Testing installation

== Changelog ==

= 1.0.7 =
* removed underscore prefix from private function names
* removed redundant code for registering settings

= 1.0.6 =
* added support for javascript files
* updated readme

= 1.0.5 =
* added icon and banner assets
* added copy of license

= 1.0.4 =
* added readme.txt to plugin archive
* updates and cleanup

= 1.0.3 =
* added template hinting for frontend and backend stylesheets
* refactored code slightly to address code smell

= 1.0.2 =
* added action to add classes to frontend body class
* added settings for displaying on the frontend and backend
* updated phpcs profile
* updated helper function to return array
* fixed nested files in includes folder
* minor updates to readme

= 1.0.1 =
* updated structure
* added gulp and npm workflow
* added markdown files to help with collaboration
* scaffolded out phpunit.xml, tests and bootstrap.php files but tests incomplete
* added phpcs.xml file and customized style rules
* modified code to adhere to phpcs rules, eliminating errors and warnings
* removed general text field from settings

= 1.0.0 =
* Initial commit

== Upgrade Notice ==

= 1.0.5 =
Initial release of plugin to the WordPress community

== About This Plugin ==

This plugin was created by Noah J. Stewart in response to a specific problem. In January 2019, 
Noah Stewart was contacted by his father Jim Stewart regarding a WordPress photo gallery plugin 
that his astronomy club was using. They were having trouble customizing a few of the role-based 
options in a popular gallery plugin. Like any good graphic artist, Jim was trying to improve 
the interface for the site users. The simplest approach to the problem was to use css to 
selectively hide certain elements, ie. invisible content users with the **author** role that 
should be visible to users with the **administrator** role. 
