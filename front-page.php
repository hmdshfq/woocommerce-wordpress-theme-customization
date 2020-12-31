<?php get_header(); ?>
<div id="hero">
    <div class="opacity">
        <div class="container">
            <h1>Welcome to my shop</h1>
        </div>
    </div>
</div>
<div class="content">
    <?php 
        //if(have_posts(  )): while(have_posts(  )): the_post(  ); 
    ?>
    <?php //the_content( ); ?>
    <?php //endwhile; else: endif; ?>

    <?php //if(have_posts(  )):
            //while (have_posts(  )) :
              //  the_post(  );
                //the_content(  );
            //endwhile;
        //else:
        // endif;
    ?>
    <div class="container">
        <?php 
            if(have_posts(  )){
                while(have_posts(  )){
                    the_post(  );
                    the_content(  );
                }
            }
        ?>
    </div>
</div>
<?php get_footer(); ?>