<?php

function dequeue_mediaelement_script() {
    // Default handle for this script in WordPress is 'mediaelement'
    wp_dequeue_script('mediaelement');
    wp_deregister_script('mediaelement');
}
add_action('wp_enqueue_scripts', 'dequeue_mediaelement_script', 20);

// Uncomment the following function to use an external stylesheet for video element styles
/*
function custom_video_external_stylesheet() {
    // Enqueue the external stylesheet
    wp_enqueue_style(
        'custom-video-style', // Handle for the stylesheet
        plugins_url('../css/custom-video.css', __FILE__), // Path to the stylesheet
        array(), // Dependencies (if any)
        '1.0.0', // Version number for the stylesheet
        'all' // Media type (all, screen, print, etc.)
    );
}
// add_action('wp_enqueue_scripts', 'custom_video_external_stylesheet');
*/

// Uncomment the following function to use inline styles for video element styles
function custom_video_inline_styles() {
    // Add custom CSS for videos with the class wp-video-shortcode
    $custom_css = "
        video.wp-video-shortcode{height:auto}
    ";
    wp_add_inline_style('wp-mediaelement', $custom_css);
}
add_action('wp_enqueue_scripts', 'custom_video_inline_styles');

// Developers can choose to use either the external stylesheet by uncommenting the
// custom_video_external_stylesheet function and commenting out the custom_video_inline_styles
// function, or use inline styles for better performance.