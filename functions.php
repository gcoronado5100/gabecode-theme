<?php

// Variables
define('GABECODE_THEME_URI', get_template_directory_uri());
define('GABECODE_THEME_DIR', get_template_directory());
define('GABECODE_THEME_VERSION', '1.0.0');

// Includes
$rootFiles = glob(GABECODE_THEME_DIR . '/includes/*.php');
$subdirectoryFiles = glob(GABECODE_THEME_DIR . '/includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach ($allFiles as $file) {
    include_once($file);
}

// Hooks
add_action('after_setup_theme', 'gabecode_after_theme_cb');
add_action('wp_head', 'gabecode_wp_head_cb');
add_action('wp_enqueue_scripts', 'gabecode_enqueue_cb');