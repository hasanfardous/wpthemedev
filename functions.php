<?php

add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu',
    )
);


function our_widgets_func() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'textdomain' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in the footer 1.', 'textdomain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'textdomain' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in the footer 2.', 'textdomain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'textdomain' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in the footer 3.', 'textdomain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 4', 'textdomain' ),
        'id'            => 'footer-4',
        'description'   => __( 'Widgets in the footer 4.', 'textdomain' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}


add_action('widgets_init', 'our_widgets_func');


// Registering metabox
function wpfirsttheme_post_meta_box( $meta_boxes ) {
    $meta_prefix = '_wpthemedev_';
    $meta_boxes[] = array(
        'id'            => 'wpthemedev_post_meta',
        'title'         => 'Post Extra Options',
        'post_type'     => array('post'),
        'fields'        => array(
            array(
                'id'    => $meta_prefix . 'post_reading_time',
                'type'    => 'text',
                'name'    => 'Post Read Time',
            ),
            array(
                'id'    => $meta_prefix . 'post_extra_field',
                'type'    => 'text',
                'name'    => 'Post Extra Field',
            ),
        ),

    );

    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'wpfirsttheme_post_meta_box');

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
?>