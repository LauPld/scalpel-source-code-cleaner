<?php // Uninstall Plugin

if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) exit();

// Delete options
delete_option('scalpel_source_code_cleaner_activated');
