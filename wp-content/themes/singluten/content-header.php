<header id="header" class="block wrapper clearfix">
    <div class="search">
        <form action="/sarch">
            <input type="text" placeholder="buscar recetas" value=""/>
            <input type="submit" src="<?php echo get_site_url();?>/images/lupa.png">
        </form>

    </div>
    <div class="logo-wrapper center">
        <a href="<?php echo get_site_url();?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
    </div>
    <ul class="social">
        <li class="hvr-float-shadow"><a href="<?php echo get_field('facebook', 'user_2'); ?>" class="socicon socicon-facebook "></a></li>
        <li class="hvr-float-shadow"><a href="<?php echo get_field('twitter', 'user_2'); ?>" class="socicon socicon-twitter"></a></li>
        <li class="hvr-float-shadow"><a href="<?php echo get_field('instagram', 'user_2'); ?>" class="socicon socicon-instagram"></a></li>
    </ul>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</header>