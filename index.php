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
            <div class="col-sm-6">
                <div class="post-area">
                    <?php
                    $counter = 0;
                    while ($query->have_posts()) {
                        $query->the_post();
                        $counter++;
                        if ( $counter % 2 == 0 ) {
                        ?>
                        <div class="row single-post">
                            <div class="post-thumbnail col-sm-6">
                                <?php
                                    the_title();
                                    the_content();
                                ?>
                            </div>

                            <div class="post-content col-sm-6">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>
                        </div>
                        <?php
                        } else {
                        ?>
                        <div class="row single-post">
                            <div class="post-thumbnail col-sm-6">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>

                            <div class="post-content col-sm-6">
                                <?php
                                    the_title();
                                    the_content();
                                ?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        
                        <?php
                    }?>
                </div>
            </div>
        </div>
    </div>
    <?php

    // Get footer content
    get_footer();
?>