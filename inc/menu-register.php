<?php
function wpthemedev_menu_function () {
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu',
        )
    );
}

add_action('init', 'wpthemedev_menu_function');