<?php 
   function hotelcms_register_stylesheet() {
       wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
   }
   add_action("wp_enqueue_scripts", "hotelcms_register_stylesheet"); 

   function hotelcms_register_menu_location() {
       register_nav_menu("header-menu-location", "Header Menu Location");
   }
   add_action("after_setup_theme", "hotelcms_register_menu_location");

   function hotelcms_setup_custom_logo() {
       $config = array(
           "height" => 100,
           "width" => 100
       );
       add_theme_support( "custom-logo", $config );
   }
   add_action("after_setup_theme", "hotelcms_setup_custom_logo");