<?php
/*
 * Plugin Name: Scalpel Source Code Cleaner
 * Plugin URI:        https://github.com/LauPld/wp-scalpel
 * Description:       Remove Gutenberg styles, media elements, and emoji
 * Version:           1.0 
 * Author:            Laurent Poulard
 * Author URI:        https://laurentpoulard.online/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html 
 * Text Domain:       scalpel-source-code-cleaner 
 */

function scalpel_source_code_cleaner_activate()
{

    add_option('scalpel_source_code_cleaner_activated', 'scalpel-source-code-cleaner');

    /* activation code here */
}
register_activation_hook(__FILE__, 'scalpel_source_code_cleaner_activate');

function load_plugin()
{

    if (is_admin() && get_option('scalpel_source_code_cleaner_activated') == 'wp-scalpel') {

        delete_option('scalpel_source_code_cleaner_activated');
    }
}
add_action('admin_init', 'load_plugin');


function scalpel_source_code_cleaner_includes()
{
    require_once plugin_dir_path(__FILE__) . 'includes/disable-gutenberg.php';
    require_once plugin_dir_path(__FILE__) . 'includes/disable-emoji.php';
    require_once plugin_dir_path(__FILE__) . 'includes/disable-mediaelement.php';
    require_once plugin_dir_path(__FILE__) . 'includes/disable-theme-styles.php';
}
scalpel_source_code_cleaner_includes();
