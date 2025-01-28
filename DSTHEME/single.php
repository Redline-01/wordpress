<?php
 
  get_header();

?>


<div class="container">

     
      <?php

      if(have_posts()):
        while(have_posts()):the_post();


      ?>

      <article id="post" <?php the_ID(); ?> class=<?php post_class(); ?> >

     <h2> <?php the_title(); ?> </h2>
     <p> <?php the_content(); ?> </p>

      </article>





      <?php
      endwhile;
      endif;

      ?>



</div>







<?php

   get_footer();

?>   