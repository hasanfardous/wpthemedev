<?php
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
?>