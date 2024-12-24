<?php

    get_header();

?>


<?php

    if(have_posts() ):
        while(have_posts()): the_post();

?>

  <h1>Ketu do te vendosen postet</h1>

<?php
    
    endwhile;
    endif;
?>



<?php
    get_footer();


?>