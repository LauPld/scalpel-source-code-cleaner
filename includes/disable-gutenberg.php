<?php

// Remove block library CSS
function dequeue_gutenberg_styles()
{
    wp_dequeue_style('wp-block-library');             // Frontend block styles
    wp_dequeue_style('wp-block-library-theme');       // Theme styles
    wp_dequeue_style('global-styles');                // Gutenberg theme.json
}
add_action('wp_enqueue_scripts', 'dequeue_gutenberg_styles', 100);
add_filter('use_block_editor_for_post', '__return_false');
remove_theme_support('core-block-patterns');
