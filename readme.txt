=== Vision - Image Map Builder ===
Contributors: Avirtum
Tags: image map, floor plan, real estate, visual presentation
Requires at least: 4.0
Tested up to: 6.4
Requires PHP: 7.0
Stable tag: 1.7.3
License: GPLv3

Create great interactive images for your site that empowers publishers and bloggers, the plugin provides an easy way for you to convert a static image into the interactive media brochures, booklets, infographic, visual maps, building plans and etc.

== Description ==

Vision Interactive is a lightweight and rich-feature plugin helps you enhance images with additional information and links. With this plugin you are able to easily annotate images with text, shapes and icons, draw attention to areas and features on images. You can then use them in posts that empower publishers and bloggers to create more engaging content. It provides an easy way for you to convert a static image into the online interactive media brochures or booklets, image maps, immersive storytelling in seconds. The plugin can be deployed easily and runs on all modern browsers and mobile devices.

Using **[vision id="123"]** shortcode, you can publish an interactive image on any Page or Post in your WordPress sites.

This is the **LITE version** of the official [Vision Interactive - Image Map Builder for WordPress](https://1.envato.market/getvision) plugin which comes with support and doesn't have some limitations.  You can get it by visiting the CodeCanyon website and [buy the pro version](https://1.envato.market/getvision).

= The sample of how to create an interactive infographics =
https://youtu.be/OPGzAZJuK54


= Features =
* **Markers** - add links, images or text
* **Tooltips** - small boxes for tiny information
* **Popovers** - popup boxes for large amounts of info (inbox & lightbox type)
* **Smart** - tooltips & popovers can occupy the best position 
* **Responsive** - automatically adjust elements to image size
* **Animations** - tooltips have over 100 show/hide effects
* **Powerful Interface** - many options & capabilities
* **AJAX saving** - save your config without page reloading
* **JSON config** - the config is served from the filesystem instead of the database for better performance
* **Code editors** - add extra css styles or js code with syntax highlighting
* **Customization** - create you own theme

You can place any markers by simply clicking on an image. Each marker can have its own tooltip and popover which gives an excellent opportunity for creating engaging visual stories & presentations.


The developer version is available [here](https://github.com/yalogica/vision).


== Installation ==
* From the WP admin panel, click "Plugins" -> "Add new"
* In the browser input box, type "Vision"
* Select the "Vision" plugin and click "Install"
* Activate the plugin

Alternatively, you can manually upload the plugin to your wp-content/plugins directory


== Screenshots ==
1. Manage interactive images
2. Create layers
3. Edit tooltips
4. Final result with tooltips
5. Edit popover (inbox type)
6. Final result with popover


== Frequently Asked Questions ==

= Installation =

You can download the plugin from wordpress.org. Once you have downloaded it, you can go to your dashboard, select plugins item and upload the file. Then activate the plugin. Once activated, on the left side under your dashboard, you will find the option Vision at the bottom.

= I'd like access to more features and support. How can I get them? =
You can get access to more features and support by visiting the CodeCanyon website and
[buy the pro version](https://1.envato.market/getvision). Purchasing the plugin gets you access to the full version of the Vision plugin, automatic updates and support.


= What is the difference between Lite and PRO =
The lite version has only two limits:
1) You can create and use only one item
2) Your published item will have a little icon
All other features are the same as PRO has.


== Changelog ==

= 1.7.3 =
* Fix: rest api endpoints of third-party plugins stop working

= 1.7.2 =
* Fix: unauthorized access to view deactivated items

= 1.7.1 =
* Fix: the plugin doesn't show items with empty titles

= 1.7.0 =
* Fix: constant FILTER_SANITIZE_STRING is deprecated

= 1.6.2 =
* Fix: missing feedback files

= 1.6.1 =
* Mod: returned to json files as item config
* New: feedback form

= 1.6.0 =
* Mod: cancel the use of json files to store the item config

= 1.5.7 =
* Mod: close popovers on esc

= 1.5.6 =
* Fix: $wpdb->prepare calls

= 1.5.5 =
* Fix: incorrect text field output

= 1.5.4 =
* Fix: prevent cross-site scripting (XSS) from shortcode
* Mod: polish the code

= 1.5.3 =
* Fix: unexpected output during activation

= 1.5.2 =
* Fix: prevent cross-site scripting (XSS) from input form

= 1.5.1 =
* Fix: layer triggers 'hover' & 'focus'

= 1.5.0 =
* New: 'nofollow' attribute for the layer link type

= 1.4.4 =
* New: shortcode attribute 'slug'
* Mod: frontend API

= 1.4.3 =
* Fix: website under HTTPS (secured with SSL certificate), but scene images are under HTTP (unsecured)
* New: search item box, trash support
* New: support Emoji

= 1.4.2 =
* New: auto width & height options
* New: the layer content data can be edited

= 1.4.1 =
* Fix: text layer type was not displayed

= 1.4.0 =
* Fix: loader is called only once on a page
* New: edit roles with access to the plugin
* Mod: items pagination view

= 1.3.0 =
* New: improved user interface
* New: changed markup for frontend

= 1.2.3 =
* Fix: cannot edit item due json parse error with double quotes

= 1.2.2 =
* Fix: links do not work on firefox

= 1.2.1 =
* Fix: tooltips do not show up sometimes

= 1.2.0 =
* New: users have access to items, depending on their privileges and roles
* Fix: popover inbox flickering on hover
* Fix: markup template for inbox & lightbox popover

= 1.1.1 =
* New: item last modified date in the config

= 1.1.0 =
* Fix: updated custom code editor (Ctrl + F)
* New: can set an url for each layer
* New: can set a userData for each layer
* New: preview mode
* New: color picker

= 1.0.2 =
* Fix: can't save a big config

= 1.0.1 =
* New: next & prev layer navigation
* Fix: light theme

= 1.0.0 =
* Initial release