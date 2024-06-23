<?php

function gabecode_enqueue_cb() {

    // Google Fonts - Inter
    wp_enqueue_style('gabecode-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', [], GABECODE_THEME_VERSION);

    // Font Awesome
    wp_enqueue_style('gabecode-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], GABECODE_THEME_VERSION);

    // Theme Files
    wp_enqueue_style( 'gabecode-theme', GABECODE_THEME_URI . '/assets/css/theme.css', [], GABECODE_THEME_VERSION, 'all' );
    wp_enqueue_style( 'gabecode-theme-helper', GABECODE_THEME_URI . '/assets/css/helper.css', [], GABECODE_THEME_VERSION );
}