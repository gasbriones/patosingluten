<div id="main" class="wrapper">
    <section class="block home clearfix">
        <div class="carrousel">
            <?php if( function_exists('bxslider') ) bxslider('home-slider'); ?>
        </div>
        <div class="main-menu margin center">
            <?php wp_nav_menu( array( 'theme_location' => 'category-menu','menu_class' => 'menu category-nav clearfix')); ?>
        <div>
    </section>
    <section class="block about clearfix">
        <?php query_posts('page_id=6'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
        <?php endwhile;?>
    </section>
    <section class="block recipe clearfix">
        recetas
    </section>
    <section class="block news clearfix">
        novedades
    </section>
</div>