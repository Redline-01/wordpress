<?php
    /*
        Template Name: Portfolio
    */
?>
<?php get_header();?>
<h1>This Is Portfolio Template</h1>
<?php
if( have_posts() ):
    while( have_posts() ): the_post();?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content();?></p>
        <br>
    <?php endwhile;
endif;
?>

<?php get_footer(); ?>