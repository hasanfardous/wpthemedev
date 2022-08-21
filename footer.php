<?php
    // wp_nav_menu(
    //     array(
    //         'theme_location' => 'footer-menu'
    //     )
    // );

    // Get sidebar contents
    // get_sidebar();
    $site_footer_img = get_theme_mod( 'wpthemedev_footer_img' );

    // echo '<pre>';
    // print_r( $site_footer_img );

    // [background-color] => #dd9933
    // [background-image] => http://localhost:8888/wpthemedev/wp-content/uploads/2022/07/IMG_2056-scaled.jpg
    // [background-repeat] => no-repeat
    // [background-position] => center center
    // [background-size] => cover
    // [background-attachment] => fixed
?>

<div class="footer-img-wrap" style="height: 400px; background-image: url(<?php echo $site_footer_img['background-image']?>); background-position: <?php echo $site_footer_img['background-position']?>">
    <div class="container">
        <div class="row">
            <h2>Footer Image Area</h2>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php wp_footer()?>
</body>
</html>