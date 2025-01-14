
<?php

   /* Template Name: Index  */


?>




<?php

    get_header();

?>
<h1>This is index file</h1>


<?php

    if(have_posts() ):
        while(have_posts()): the_post();
    

?>


  <h1> <?php  the_title(); ?></h1>

  <p> <?php the_content(); the_time(); ?></p>
  <hr>

<?php
    
    endwhile;
    endif;
?>



<?php
    get_footer();


?>