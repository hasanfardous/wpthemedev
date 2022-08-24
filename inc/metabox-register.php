<?php


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
            array(
                'id'    => $meta_prefix . 'post_feature_img',
                'type'    => 'switch',
                'std'    => 'Show',
                'name'    => 'Show Feature Image?',
                'on_label'    => 'Show',
                'off_label'    => 'Hide',
            ),
        ),

    );

    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'wpfirsttheme_post_meta_box');