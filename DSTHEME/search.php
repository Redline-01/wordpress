<?php
 
    get_header();

?>

 <div class="row">

   <?php get_search_query(); ?> 

  <?php

  if(have_posts()):
    while(have_posts()): the_post();

  ?>
  <div class="card mb-3">

    <?php
      
      if(has_post_thumbnail()){ ?>

      <img style="width:200px; height:200px;" src="<?php wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">

      <?php
      } else{
      ?>

<img style="width:200px; height:200px;" src="<?php bloginfo("template_directory");?> ./images/1.png" alt="">



<?php
      }
?>

  </div>


 <!-- <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
  <hr>
  <small><?php the_time(); ?> </small> -->


<?php
  
  endwhile;
endif;

?>
</div>




<?php
 
    get_footer();

?>