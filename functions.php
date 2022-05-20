<?php 
   function techhub_register_stylesheet() {
       wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
       wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
       wp_enqueue_style( 'abel-font', 'https://fonts.googleapis.com/css2?family=Abel&display=swap');
       wp_enqueue_style( 'orbitron-font','https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');
    }
   add_action("wp_enqueue_scripts", "techhub_register_stylesheet"); 

   function techhub_register_menu_location() {
       register_nav_menu("header-menu-location", "Header Menu Location");
   }
   add_action("after_setup_theme", "techhub_register_menu_location");

   function techhub_setup_custom_logo() {
       $config = array(
           "height" => 100,
           "width" => 216,7996 
       );
       add_theme_support( "custom-logo", $config );
   }
   add_action("after_setup_theme", "techhub_setup_custom_logo");



