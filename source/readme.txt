=== Enhanced Body Class ===
Contributors: revnoah
Donate link: https://noahjstewart.com/
Tags: body class style
Requires at least: 4.6
Tested up to: 5.0.3
Stable tag: 5.0.3
Requires PHP: 5.6.40
License: ISC
License URI: https://opensource.org/licenses/ISC

WordPress plugin to adds user-related classes to body tag, allowing you to easily customize styling by role or specific user.

== Description ==

WordPress plugin to adds user-related classes to the body tag. This can be enabled on the frontend and backend of the site. 
The css classes allow you to easily customize styling by role or a specific user.

Features

*   Toggle display on frontend and admin pages
*   Toggle classes for role, user name and user id
*   Template hinting to load custom theme css files for frontend and admin

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/enhanced-body-class` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Enhanced Body Class screen to configure the plugin
4. Customize output by adding the two files below or updating your theme's css file

== Stylesheets ==

*   Add to theme folder: enhanced-body-class-frontend.css 
*   Add to theme folder: enhanced-body-class-admin.css

== Styles ==

*   .user-role-{rolename}
*   .user-name-{username}
*   .user-id-{ID}

== Usage ==

After activating the class on the body tag, it will be up to you to use css or javascript to customize the display.

1. Activate 'User Role' on 'Admin Pages' in plugin settings
2. Observe classes on BODY tag by viewing the webpage source. You may need to refresh the page to see the updated class.
3. Navigate to current theme and create file `enhanced-body-class-admin.css`
4. Edit `enhanced-body-class-admin.css` and add the following:

`body.user-role-administrator { background-color: cyan; }`

Refresh the page. You should now see a cyan background.

== Frequently Asked Questions ==

= Which options should I enable? =

Only enable the options you need to use.

= Do I need to create and use the new stylesheet files? =

No, the stylesheets are available for your convenience. If you prefer to use other stylesheets, go ahead.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

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

= 1.0.4 =
Initial release of plugin to the WordPress community

== About This Plugin ==

This plugin was created by Noah J. Stewart in response to a specific problem. In January 2019, 
Noah Stewart was contacted by his father Jim Stewart regarding a WordPress plugin that the
[Saint John Astronomy Club](http://sjastronomy.ca/) was using. They were having trouble 
customizing a few of the role-based options in a popular gallery plugin. Like any good graphic 
artist, Jim was trying to improve the interface for the site users. The simplest 
approach to the problem was to use css to selectively hide certain elements, ie. invisible content 
users with the **author** role that should be visible to users with the **administrator** role. 