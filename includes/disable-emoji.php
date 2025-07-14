<?php

if (! defined('ABSPATH')) exit;

// Remove WP emoji script and styles
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

function scalsoco_remove_emoji_styles() {
    ob_start(function ($html) {
        // Kill the img:is(...) rule via regex
        return preg_replace(
            '#<style[^>]*>[^<]*img:is\(\[sizes="auto" i\], \[sizes\^="auto," i\]\)[^<]*</style>#',
            '',
            $html
        );
    });
}
add_action('template_redirect', 'scalsoco_remove_emoji_styles');
