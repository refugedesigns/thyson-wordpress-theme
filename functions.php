<?php

/**
 * Theme Functions
 * 
 * @package thyson
 */

if(!defined('THYSON_DIR_PATH')) {
    define('THYSON_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('THYSON_DIR_URI')) {
    define('THYSON_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require THYSON_DIR_PATH . '/inc/helpers/autoloader.php';

function thyson_get_theme_instance() {
    \THYSON\Inc\THYSON_THEME::get_instance();
}

thyson_get_theme_instance();