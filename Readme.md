UFCLAS UFL 2015
================

(In development) Official UF template for Liberal Arts and Sciences. Based on template by 160over90. Maintained by UF CLAS IT.

Installation
-------------

Download and unzip files into a folder named 'ufclas-ufl-2015' in the themes directory. Activate theme in your site.


Requirements and Suggested Plugins
-----------------------------------

### Required

- WordPress 4.4
- Support for .svg files

### Recommended Plugins

- Advanced Custom Fields - visual interface for custom fields
- Shortcake (Shortcode UI) - visual interface for shortcodes
- List Category Posts - replacement for custom recent posts widget

### Supported Plugins

- Gravity Forms
- The Events Calendar
- IssueM
- Google Analytics ID
- WP Knowledgebase

Documentation
--------------

- [Documentation Wiki](https://github.com/ufclas/ufclas-ufl-2015/wiki)

- [Web Services UF 2015 Template](http://webservices.it.ufl.edu/terminalfour/uf-2015-template/)

Changelog
---------

### 0.9.x

- Fixes bug with prettyPhoto being added to non-image links
- Fixes the mobile menu display and adds styles to title text header
- Fixes horizontal scrollbar bug in browsers
- Makes widget styles more consistent on the homepage
- Removes WP Knowledgebase templates and code, migrates to a feature plugin (ufclas-knowledgebase)
- Adds accessibility improvements for keyboard navigation
- Adds config files to use Grunt to combine and minify CSS and JS files
- Adds option to use a text title as well as a logo image (Customize > Theme Options > Header)

### 0.8.x

- Adds support for [WP Knowledgebase](https://wordpress.org/plugins/wp-knowledgebase/) (Enigma Plugins)

### 0.7.x

- Adds header and submenu to newsletter pages
- Adds theme options for newsletter settings and makes the header opt-in
- Adds SASS variable to use local fonts, if available

### 0.6.x

- Updates Readme file
- Reorganizes functions.php, moves menu functions to a separate file
- Removes inline svg from header, adds prettyPhoto library, creates a media functions file

### 0.5.x

- Adds metaboxes on landing pages and articles, adds admin styles for ACF fields
- Fixes undefined index warnings
- Changes sidebar div IDs to be more specific
- Hides Page Left Sidebar content on mobile (workaround until better solution found)
- Adds Call to Action section in Theme Options, supports site-wide alert message

### 0.4.x

- Fixes landing page template margins, adds page sections sidebar to the default home page
- Adds widgets and better customizer support, renames shortcodes

