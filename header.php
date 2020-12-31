<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title(''); ?></title>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <!-- The hyperlink will take us to homepage when the logo is clicked -->
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid logo" alt="">
            </a>
            <?php wp_nav_menu( 
                array(
                    'theme-location' => 'top-menu'
                )
             )?>
        </div>
    </header>
