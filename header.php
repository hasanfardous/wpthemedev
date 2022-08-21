<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Bootstrap demo</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="<?php echo get_template_directory_uri()?>/css/style.css" rel="stylesheet"> 
    <?php wp_head()?>
  </head>
<body>
  <?php
  wp_body_open();

  $site_title = get_theme_mod( 'wpthemedev_site_title' );
  $site_title_color = get_theme_mod( 'wpthemedev_site_color' );
  $site_header_show = get_theme_mod( 'wpthemedev_site_header_show' );
  $site_title_size = get_theme_mod( 'wpthemedev_site_title_size' );

  if ( $site_header_show == 1 ) {
  ?>
  <div class="header-container-wrapper">
    <div class="container">
      <div class="row">
        <div class="header-container-area d-flex justify-content-between">
          <h3 style="color: <?php echo $site_title_color?>; font-size: <?php echo $site_title_size?>px"><?php echo $site_title;?></h3>

          <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_id'       => 'hasan',
                    'menu_class'       => 'hasanfardous'
                )
            );
          ?>
        </div>
      </div>
    </div>
  </div>
<?php
}
