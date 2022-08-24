<?php

add_theme_support('post-thumbnails');

if ( ! defined( 'WPTHEMEDEV_BASE_URI' ) ) {
    define('WPTHEMEDEV_BASE_URI', get_template_directory_uri() . '/');
}

if ( ! defined( 'WPTHEMEDEV_CSS_DIR_URI' ) ) {
    define('WPTHEMEDEV_CSS_DIR_URI', WPTHEMEDEV_BASE_URI . 'css/');
}

if ( ! defined( 'WPTHEMEDEV_PATH_URI' ) ) {
    define('WPTHEMEDEV_PATH_URI', get_theme_file_path() . '/');
}

if ( ! defined( 'WPTHEMEDEV_INC' ) ) {
    define('WPTHEMEDEV_INC', WPTHEMEDEV_PATH_URI . 'inc/');
}

// Get theme files
require_once( WPTHEMEDEV_INC . 'menu-register.php' );
require_once( WPTHEMEDEV_INC . 'widget-register.php' );
require_once( WPTHEMEDEV_INC . 'metabox-register.php' );
require_once( WPTHEMEDEV_INC . 'customizer-options.php' );


// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

?>