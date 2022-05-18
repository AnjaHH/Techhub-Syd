<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href

    <title> <?php bloginfo("name") ?> </title>
    <?php wp_head() ?>
</head>
<body>

<header>
 <div class="navbar">
     <?php the_custom_logo() ?>
     <div class="menulocations">
 <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
     </div>
</div>


</header>