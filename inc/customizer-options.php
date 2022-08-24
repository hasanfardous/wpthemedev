<?php


Kirki::add_config( 'wpthemedev_customizer_opt', array(
    'priority' => 0,
    'title'    => 'Theme settings',
    'description' => 'Our theme settings'
) );

Kirki::add_panel( 'wpthemedev_first_panel', array(
    'title' => 'First Panel',
    'description' => 'First Panel Description',
) );

Kirki::add_section( 'wpthemedev_first_section', array(
    'title' => 'First Section',
    'panel' => 'wpthemedev_first_panel',
) );

Kirki::add_field( 'wpthemedev_customizer_opt', array(
    'type' => 'text',
    'settings' => 'wpthemedev_site_title',
    'label' => 'Site Title',
    'section' => 'wpthemedev_first_section',
    'default' => 'WP Theme Dev',
) );

Kirki::add_field( 'wpthemedev_customizer_opt', array(
    'type' => 'color',
    'settings' => 'wpthemedev_site_color',
    'label' => 'Site Title Color',
    'section' => 'wpthemedev_first_section',
    // 'default' => '#000000',
) );
Kirki::add_field( 'wpthemedev_customizer_opt', array(
    'type' => 'switch',
    'settings' => 'wpthemedev_site_header_show',
    'label' => 'Site Header Show?',
    'section' => 'wpthemedev_first_section',
    'default' => '1',
) );
Kirki::add_field( 'wpthemedev_customizer_opt', array(
    'type' => 'slider',
    'settings' => 'wpthemedev_site_title_size',
    'label' => 'Site Title Size',
    'section' => 'wpthemedev_first_section',
    // 'default' => '1',
    'choices' => [
        'min'   => 1,
        'max'   => 100,
        'step'   => 1,
    ]
) );
Kirki::add_field( 'wpthemedev_customizer_opt', array(
    'type' => 'background',
    'settings' => 'wpthemedev_footer_img',
    'label' => 'Footer Image',
    'section' => 'wpthemedev_first_section',
) );