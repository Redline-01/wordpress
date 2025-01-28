<?php
 
  get_haeder();

?>


<div class="container">

     
      <?php

      if(have_posts()):
        while(have_posts()):the_post();


      ?>

      

      <?php
      endwhile;
      endif;

      ?>



</div>







<?php

   get_footer();

?>   