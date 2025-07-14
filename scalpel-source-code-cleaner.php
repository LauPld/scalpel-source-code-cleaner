<?php
/*
 * Plugin Name: Scalpel Source Code Cleaner
 * Plugin URI:        https://github.com/LauPld/scalpel-source-code-cleaner
 * Description:       Remove Gutenberg styles, media elements, and emoji
 * Version:           1.0.1 
 * Author:            Laurent Poulard
 * Author URI:        https://laurentpoulard.online/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html 
 * Text Domain:       scalpel-source-code-cleaner 
 * Requires PHP:      7.0
 */

if (! defined('ABSPATH')) exit; 
function salsoco_activate()
{

    add_option('scalsoco_activated', 'scalpel-source-code-cleaner');

    /* activation code here */
}
register_activation_hook(__FILE__, 'scalsoco_activate');

function scalsoco_load_plugin()
{

    if (is_admin() && get_option('scalsoco_activated') == 'scalpel-source-code-cleaner') {

        delete_option('scalsoco_activated');
    }
}
add_action('admin_init', 'scalsoco_load_plugin');


function scalsoco_includes()
{
    require_once plugin_dir_path(__FILE__) . 'includes/disable-gutenberg.php';
    require_once plugin_dir_path(__FILE__) . 'includes/disable-emoji.php';
    require_once plugin_dir_path(__FILE__) . 'includes/disable-mediaelement.php';
    require_once plugin_dir_path(__FILE__) . 'includes/disable-theme-styles.php';
}
scalsoco_includes();
