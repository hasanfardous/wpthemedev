<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Bootstrap demo</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="<?php echo get_template_directory_uri()?>/css/style.css" rel="stylesheet">
  </head>
  <body>
        
    <?php

    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_id'       => 'hasan',
            'menu_class'       => 'hasanfardous'
        )
    );