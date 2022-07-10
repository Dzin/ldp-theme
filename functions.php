<?php

/**
 * Load styles
 */
function ldp_load_styles()
{
    wp_enqueue_style('ldp-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'lpd_load_styles');

/**
 * Load scripts
 */
function ldp_load_scripts()
{
}
add_action('wp_enqueue_scripts', 'ldp_load_scripts');
