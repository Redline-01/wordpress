<?php

  /*  Template Name: About me */
 
  get_header();

?>

<?php

$title = get_field("page_name");

$area = get_field("page_area");

?>


<div class="container">

     
      <?php

      if(have_posts()):
        while(have_posts()):the_post();


      ?>

    

     <h2> <?php echo $title; ?> </h2>
     <p> <?php echo $area; ?> </p>

     





      <?php
      endwhile;
      endif;

      ?>



</div>




<?php

   get_footer();

?>   