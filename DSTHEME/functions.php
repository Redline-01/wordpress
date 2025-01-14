<?php

   function add_script(){

    wp_enqueue_style("style", get_template_directory_uri()."./style.css" , false , "1.0" , "all");

    wp_enqueue_script("bootstrap.bundle.min", get_template_directory_uri()."/js/bootstrap.bundle.min.js" , array('jquery') , "1.0");
    wp_enqueue_script("main", get_template_directory_uri()."/js/main.js" , array('jquery') , "1.0");

    wp_enqueue_style("bootstrap.min", get_template_directory_uri()."/css/bootstrap.min.css" , false , "1.0" , "all");
    wp_enqueue_style("main", get_template_directory_uri()."/css/main.css" , false , "1.0", "all");
    


 

   }

   add_action("wp_enqueue_scripts","add_script");


      function ds_menu(){
         add_theme_support('menus');
         register_nav_menu('primary', "Primary menu");
      }

      add_action("init", "ds_menu");

      add_theme_support("post-thumbnails");
   




?>