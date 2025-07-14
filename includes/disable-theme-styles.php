<?php

if (! defined('ABSPATH')) exit;

function scalsoco_dequeue_styles()
{
    wp_dequeue_style('classic-theme-styles'); // Dequeue classic theme styles
    wp_dequeue_style('parent-style');         // Dequeue parent theme styles
    wp_deregister_style('parent-style');      // Deregister parent theme styles
}

add_action('wp_enqueue_scripts', 'scalsoco_dequeue_styles', 20);
