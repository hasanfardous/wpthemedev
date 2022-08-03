<?php
    // Get header content
    get_header();

    $args = array(
        'post_type' => 'post',
        'order' => 'ASC',
        // 'posts_per_page' => 2,
    );
    $query = new WP_Query( $args );
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="post-area">
                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();
                        if ( $query->current_post % 2 == 0 ) {
                        ?>
                        <div id="<?php echo $query->current_post?>" class="d-flex justify-content-between single-post">
                            <div class="post-thumbnail">
                                <h2><?php the_title()?></h2>
                                <p>
                                    <?php echo rwmb_meta( '_wpthemedev_post_reading_time' ) ?> | 
                                    <?php echo rwmb_meta( '_wpthemedev_post_extra_field' ) ?>
                                </p>
                                <?php the_content()?>
                            </div>

                            <div class="post-content">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>
                        </div>
                        <?php
                        } else {
                        ?>
                        <div id="<?php echo $query->current_post?>" class="d-flex justify-content-between single-post">
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>

                            <div class="post-content">
                                <h2><?php the_title()?></h2>
                                <p>
                                    <?php echo rwmb_meta( '_wpthemedev_post_reading_time' ) ?> | 
                                    <?php echo rwmb_meta( '_wpthemedev_post_extra_field' ) ?>
                                </p>
                                <?php the_content()?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        
                        <?php
                    }?>
                </div>
            </div>

            <div class="col-sm-4">
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
    <?php

    // Get footer content
    get_footer();
?>