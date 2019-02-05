# Enhanced Body Class

## A WordPress Plugin

**Enhanced Body Class** is a plugin to add user-related classes to the body tag. 
This can be enabled on the frontend and backend of the site. The css classes 
allow you to easily customize styling by role or a specific user.

## Installing The Plugin

The plugin is stored in the build folder.

[build/enhanced-body-class.zip](build/enhanced-body-class.zip)

1. Upload the plugin files to the `/wp-content/plugins/enhanced-body-class` directory, or install the plugin through 
the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Enhanced Body Class screen to configure the plugin. You must choose either frontend or admin to see changes.
4. Customize output by adding any of the files below based on the front or admin settings you selected.

## Settings

The plugin adds a menu item to the Settings menu. It is advisable to review and, if desired, update 
these settings after activating the plugin.

## Using This Plugin

This plugin operates by adding classes to the body tag on pages. The classes are all related to the 
current user, and can be helpful in stlying based on roles and other characteristics.

### Stylesheets

*   Add to theme folder (optional): enhanced-body-class-frontend.css 
*   Add to theme folder (optional): enhanced-body-class-admin.css

### Scripts

*   Add to theme folder (optional): enhanced-body-class-frontend.js 
*   Add to theme folder (optional): enhanced-body-class-admin.js

### Classes

`.user-role-{role}` ex. `.user-role-author`

`.user-name-{name}` ex. `.user-name-bobdobbs`

`.user-id-{ID}` ex. `.user-id-123`

## Contributing

Please review the [CONTRIBUTING.md](CONTRIBUTING.md) file if you are interested in helping develop or 
maintain this plugin. Also, please be aware that contributors are expected to adhere to the 
[CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md) and use the [PULL_REQUEST_TEMPLATE.md](PULL_REQUEST_TEMPLATE.md) 
when submitting code.

## Development

You will need npm and phpcs to get started. Use `npm install` to install gulp and other libraries 
required to help package the plugin for publishing. Source files are in the `source` folder. The 
code style is defined in the `phpcs.xml` file and requires `phpcs` to validate the code.

## About This Plugin

This plugin was created by Noah J. Stewart in response to a specific problem. In January 2019, 
Noah Stewart was contacted by his father Jim Stewart regarding a WordPress photo gallery plugin 
that his astronomy club was using. They were having trouble customizing a few of the role-based 
options in a popular gallery plugin. Like any good graphic artist, Jim was trying to improve 
the interface for the site users. The simplest approach to the problem was to use css to 
selectively hide certain elements, ie. invisible content users with the **author** role that 
should be visible to users with the **administrator** role. 

## License

The WordPress plugin **Enhanced Body Class** is open-sourced software licensed under the ISC license.
