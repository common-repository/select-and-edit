=== Select and Edit ===
Contributors: zapotech, linkedbinary900
Donate link: https://squareup.com/store/zapotech
Tags: select, edit, post, page, admin, metabox, list
Requires at least: 3.0.1
Tested up to: 4.9
Stable tag: 1.0.1
License: GPLv2 or later

Choose the Post or Page to edit next with less clicks & page loads! Select and Edit appears above the Publish box, expanding when hovered.

== Description ==

Choose the Post or Page to edit next with less clicks & page loads--*exactly 1 click and 1 page load*, actually!

The Select and Edit lists appears above the Publish box, expanding on mouse hover to display the list of Posts and Pages in your Wordpress Site.

**Select and Edit also:**

* Displays a count of both the number of Posts and number of Pages in its "resting" state.
* Displays the Publish Status ahead of the Title, i.e. [draft], [private], if NOT Publicly published.

== Brief History ==

*Select and Edit* was created to combine the code of two plugins I developed in 2012, **[Jump to - Post Edit](http://www.wordpress.org/plugins/jump-to-post-edit)** and **[Jump to - Page Edit](http://www.wordpress.org/plugins/jump-to-page-edit)**, under the WP user alias of *linkedbinary900*.  Select and Edit comes closer to being the plugin I envisioned then, and it will continue to be improved upon as additional features are explored and adopted.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/select-and-edit` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= Do you have a question about this plugin? =

Please direct questions related to *Select and Edit* to **inquiry@zapo.tech** or use the Support forum.

== Screenshots ==

1. Select and Edit, as it is collapsed.
2. Here is the Select and Edit Post and Page lists as it is when the container is hovered.

== Changelog ==

= 1.0.1 =
* 01/24/2017:  Corrected path to background image, set `max-height` CSS value (removed `height` CSS value) for `.selectandedit-post-list`.

= 1.0 =
* 01/10/2017:  Screenshots to /assets
* 01/09/2017:  Edited code in **select-and-edit.php**, utilizing the `admin_enqueue_scripts` and `wp_enqueue_style` hooks to include the plugin CSS in the Admin pages (only in Post and Page editing screens).
* 01/07/2017:  Used the `__FILE__` parameter for use with the `plugins_url()` function instead of hardcoding the plugin's directory name, as per recommendation.
* 01/06/2017: Submitted Select and Edit for hosting at WordPress.org. This release combines the functionality of its parent plugins, *Jump to - Post Edit* and *Jump to - Page Edit*, and adds further functionality and aesthetic considerations.

= Parent Plugin Changelogs =
> ## 'Jump to - Post Edit' Changelog 
> * 02/12/2013: Stable with WordPress v 3.5.1
> * 01/25/2012: Version 1.0.5 - Changed a bit in the CSS file, jump-to-post-edit.css which will allow for a scrolling post-list, and moves the list out of the way a bit from the UPDATE button in the post-edit screen.
> * 12/19/2012: Version 1.0.4 - Fixed conditional php statement in jump-to-post-edit.php for post_type so that this feature only appears on your Edit Post screen.
> * 12/19/2012: Version 1.0.3 - Added condition to jump-to-post-edit.php for post_type so that this feature only appears on your Edit Post screen.
> * 12/18/2012: Version 1.0.2 - Instead of creating a new custom meta box to perform this action, this plugin now adds a section to the "Publish" area of the "Edit Post" screen. ~ This update fixes the problems occurring with use of the previous versions (custom meta data and permalink information, etc. is now read/write accessible again) ~ There is now a Stylesheet file included with this plugin, jump-to-post-edit.css. Feel free to customize the color-scheme, etc. to your liking!
> * 11/28/2012: Version 1.0.1 - Updated plugin to fix problems occurring upon Posts being saved. ~ Custom Meta info was being altered. ~ My apologies. ~ "Jump to - Post Edit" will use a Custom Meta Field, jump_to_post_edit. ~ Because the selection of an option from the "Jump to - Post Edit" list does not actually require data to be saved to the current Post, the value of the Custom Meta Key 'jump_to_post_edit' does not need to be altered.
> * 11/24/2012: Version 1.0 submission to WordPress.org

> ## 'Jump to - Page Edit' Changelog
> * 02/12/2013: Version 2.0 - Updating readme.txt and is cleared for WordPress v. 3.5.1 // also adding screenshot!
> * 11/28/2012: Version 1.0.1 - Updated plugin to fix problems occurring upon Pages being saved. ~ Custom Meta info was being altered. ~ My apologies. ~ "Jump to - Page Edit" will use a Custom Meta Field, jump_to_page_edit. ~ Because the selection of an option from the "Jump to - Page Edit" list does not actually require data to be saved to the current Page, the value of the Custom Meta Key 'jump_to_page_edit' does not need to be altered.
> * 11/24/2012: Version 1.0 submission to WordPress.org

== Upgrade Notice ==

= 1.0 =
This release combines the functionality of its parent plugins, *Jump to - Post Edit* and *Jump to - Page Edit*, and adds further functionality and aesthetic considerations.

