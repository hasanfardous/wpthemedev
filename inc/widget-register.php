<?php


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