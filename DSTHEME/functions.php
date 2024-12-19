<?php

   function add_script(){

    wp_enqueue_style("style", get_template_directory_uri()."./style.css" , false , "1.0" , "all");
    wp_enqueue_script("main", get_template_directory_uri()."/js/main.js" , array('jquery') , "1.0");
    wp_enqueue_style("main", get_template_directory_uri()."/css/main.css" , false , "1.0", "all");

   }

   add_action("wp_enqueue_scripts","add_script");
   




?>