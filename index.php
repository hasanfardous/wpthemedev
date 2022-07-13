<?php

wp_nav_menu(
    array(
        'theme_location' => 'main-menu',
        'menu_id'       => 'hasan',
        'menu_class'       => 'hasanfardous'
    )
);

$args = array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 2,
);
$query = new WP_Query( $args );

// echo '<pre>';
// print_r( $query );

while ($query->have_posts()) {
    $query->the_post();
    the_title();
    the_content();
    the_post_thumbnail('thumbnail');
    echo '<hr>';
}

// wp_nav_menu(
//     array(
//         'theme_location' => 'footer-menu'
//     )
// );

?>

<div class="single-widget">
    <?php dynamic_sidebar( 'footer-1' );?>
</div>

<div class="single-widget">
    <?php dynamic_sidebar( 'footer-2' );?>
</div>

<div class="single-widget">
    <?php dynamic_sidebar( 'footer-3' );?>
</div>

<div class="single-widget">
    <?php dynamic_sidebar( 'footer-4' );?>
</div>