=== Scalpel Source Code Cleaner ===
Contributors: l0pld579
Tags: gutenberg, disable, emojis, media elements, performance
Requires at least: 4.0
Tested up to: 6.8
Stable tag: 1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: scalpel-source-code-cleaner

Scalpel Source Code Cleaner is a WordPress plugin designed to deactivate most default libraries from your WordPress website.

== Description ==

Scalpel Source Code Cleaner simplifies your WordPress site by disabling several default features that may not be necessary for all users. By deactivating Gutenberg, the plugin reverts the editor to the classic TinyMCE, providing a more streamlined and traditional editing experience. Additionally, it removes inline styles, emojis, and media element libraries to clean up the source code, which can lead to improved performance and page speed.

== Installation ==

1. Upload the `wp-scalpel` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. No configuration is necessary; Scalpel Source Code Cleaner is a plug-and-play plugin.

== Usage ==

Upon activation, Scalpel Source Code Cleaner will automatically disable the following functionalities:

- Gutenberg editor (falls back to the TinyMCE editor)
- WordPress emoji library
- Theme styles
- Media element library

It also provides additional CSS to style video elements appropriately. Ensure that your content does not depend on Gutenberg before deactivating it.

== Frequently Asked Questions ==

= Why are there no updates available in the WordPress panel? =

The plugin is currently in beta testing and may not have regular updates through the WordPress panel. Please check the GitHub repository for the latest changes and updates.

== Changelog ==

= 1.0.0 =
- Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial release.

== License ==

Scalpel Source Code Cleaner is released under the GNU General Public License v2 (GPL2). For more details, see the LICENSE file included with the plugin or visit the [GNU General Public License v2](https://www.gnu.org/licenses/gpl-2.0.html) page.

== Additional Notes ==

If you would like to contribute to the development of this plugin, please contact the repository owner through the GitHub project page.
