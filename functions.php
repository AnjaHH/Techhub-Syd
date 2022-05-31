<?php 
   function techhub_register_stylesheet() {
       wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
       wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
       wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css");
       wp_enqueue_style( 'abel-font', 'https://fonts.googleapis.com/css2?family=Abel&display=swap');
       wp_enqueue_style( 'orbitron-font','https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');
       wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), null, true);
       wp_enqueue_script("typed", "https://cdn.jsdelivr.net/npm/typed.js@2.0.12", array(), null, true); // bruges til at indlæse i footeren, fortæller systemet at scriptet skal indlæses til sidst for bedre performance //
    }
   add_action("wp_enqueue_scripts", "techhub_register_stylesheet"); 

   function techhub_register_menu_location() {
       register_nav_menu("header-menu-location", "Header Menu Location");
   }
   add_action("after_setup_theme", "techhub_register_menu_location");




