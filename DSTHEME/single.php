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

     <div>
        <?php the_post_thumbnail(array(200,200)); ?> <!-- array(width,height) or 'medium' , 'small'..  -->
     </div>

      </article>





      <?php
      endwhile;
      endif;

      ?>



</div>







<?php

   get_footer();

?>   