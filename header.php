<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body>

<div style=" z-index:99999; width:100%; position:fixed; top:0px;box-shadow: 1px 1px 10px #888888; background-color: #ffffff; display:flex ; flex-direction:row;" class="header ">
      <div style="padding:10px ;" class="container col-4">
        
        <a href="<?php echo site_url() ?>">
            <img class="logoimg" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png">
        </a>
        </div>
        <div class="col-8 d-flex align-items-center justify-content-end">
      <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
      </div>
</div>
    