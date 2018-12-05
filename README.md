# Benenson Child
Basic Child Theme for [Benenson Theme](https://github.com/bigbitecreative/benenson).

## Stylesheets
Benenson Child theme unhooks the parent theme styles and imports them via the child theme SCSS files. Child theme styles are then hooked in using the enqueue method.
**Note:** If your Benenson parent theme is in a different directory to the normal `wp-content/themes/benenson` location, you may need to change file paths in the SCSS files.

## Requirements
- [WordPress](https://wordpress.org) >= 5.0
- [Benenson Theme](https://github.com/bigbitecreative/benenson) >= 1.0.0
- [PHP](https://php.net) >=  5.6
- [Node](https://nodejs.org) >= 8.9.* (_for development_)
- [Yarn](https://) (_for development_)

## Theme Development
Please refer to the [Benenson Github Wiki](https://github.com/bigbitecreative/benenson/wiki) for development details for child theme development.

## Building Assets
1. Run `yarn install` to install Node.js dependencies
2. Run build...
   1. `gulp watch` to start all watch tasks or 
   2. `gulp build --production` to build all production assets.
3. Customize the theme.
