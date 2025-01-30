<?php
 
    get_header();

?>

 <div class="row">

  <!-- <?php echo get_search_query(); ?>  shows what we typed in search --> 

  <?php

  if(have_posts()):
    while(have_posts()): the_post();

  ?>
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
  <hr>
  <small><?php the_time(); ?> </small>


<?php
  
  endwhile;
endif;

?>
</div>




<?php
 
    get_footer();

?>