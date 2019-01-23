# Enhanced Body Class

## A WordPress Plugin

**Enhanced Body Class** is a WordPress plugin that adds user-related classes to the body tag.
You can then use these classes in your css to customize the display.

## Installing The Plugin

The plugin is stored in the build folder.

[build/enhanced-body-class.zip](build/enhanced-body-class.zip)

Install the zip file or extract the zip file and copy its contents to the `wp-content/plugins` folder. 
Activate the plugin.

## Settings

The plugin adds a menu item to the Settings menu. It is advisable to review and, if desired, update 
these settings after activating the plugin.

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
Noah Stewart was contacted by his father Jim Stewart regarding a WordPress plugin that the
[Saint John Astronomy Club](http://sjastronomy.ca/) was using. They were having trouble 
customizing a few of the role-based options in a popular gallery plugin. Like any good graphic 
artist, Jim was trying to improve the interface for the site users. The simplest 
approach to the problem was to use css to selectively hide certain elements, ie. invisible content 
users with the **author** role that should be visible to users with the **administrator** role. 

## License

The WordPress plugin **Enhanced Body Class** is open-sourced software licensed under the ISC license.
