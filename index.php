<?php
    // Get header content
    get_header();

    $args = array(
        'post_type' => 'post',
        'order' => 'ASC',
        'posts_per_page' => 2,
    );
    $query = new WP_Query( $args );

    while ($query->have_posts()) {
        $query->the_post();
        the_title();
        the_content();
        the_post_thumbnail('thumbnail');
        echo '<hr>';
    }

    // Get footer content
    get_footer();
?>