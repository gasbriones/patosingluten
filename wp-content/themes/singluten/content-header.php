<section id="header" class="block wrapper clearfix">
    <div class="margin center">
        <div class="search">
            <form role="search" method="get" action="<?php echo home_url( '/busqueda' ); ?>">
                <input type="text" placeholder="buscar recetas" value="" name="receta" id="s"/>
                <input type="submit" src="<?php echo get_site_url();?>/images/lupa.png">
            </form>


        </div>
        <div class="logo-wrapper center">
            <a href="<?php echo get_site_url();?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
        </div>
        <ul class="social">
            <li class="hvr-float-shadow"><a href="<?php echo get_field('facebook', 'user_2'); ?>" class="socicon socicon-facebook" target="_blank"></a></li>
            <li class="hvr-float-shadow"><a href="<?php echo get_field('twitter', 'user_2'); ?>" class="socicon socicon-twitter" target="_blank"></a></li>
            <li class="hvr-float-shadow"><a href="<?php echo get_field('instagram', 'user_2'); ?>" class="socicon socicon-instagram" target="_blank"></a></li>
        </ul>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
    <div class="block home clearfix">
        <div class="carrousel">
            <?php include 'carousel.php' ?>
        </div>
        <div class="main-menu margin center">
            <?php wp_nav_menu( array( 'theme_location' => 'category-menu','menu_class' => 'menu category-nav clearfix')); ?>
        </div>
    </div>
</section>