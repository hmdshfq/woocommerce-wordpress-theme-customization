<?php get_header(); ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sticky-top" style="top:50px;">
                    <?php get_sidebar(  ); ?>
                </div>
            </div>
            <div class="col-lg-9">
                <?php 
                    if(have_posts(  )){
                        while(have_posts(  )){ 
                            the_post(  );
                            if(has_post_thumbnail(  )){ ?>
                            <img src="<?php the_post_thumbnail_url( 'post-image' ); ?>" class='img-fluid' alt="<?php the_title(); ?>">
                            <?php } ?>
                            <a href="<?php the_permalink(  ); ?>"><h1><?php the_title(); ?></h1></a>
                            <?php  
                            the_content(  );
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>