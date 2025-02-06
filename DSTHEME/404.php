
<?php

get_header();

?>



    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Not found', 'twentythirteen' ) ?></h1>
            </header>

            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is awesome', 'twentythirteen' ) ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location.Maybe try a search?', 'twentythirteen' ) ?></p>
                </div>
                <?php get_search_form(); ?>

            </div>
        </div>
    </div>

<?php

get_footer();


?>