<div id="main" class="wrapper">
    <section class="block home clearfix">
        <div class="carrousel">
            <?php include 'carousel.php' ?>
        </div>
        <div class="main-menu margin center">
            <?php wp_nav_menu( array( 'theme_location' => 'category-menu','menu_class' => 'menu category-nav clearfix')); ?>
        </div>
    </section>
    <section id="about" class="block about clearfix">
        <?php include 'sobre-pato.php' ?>
    </section>
    <?php include 'plinth.php' ?>
    <section id="recipe" class="block recipe clearfix">
        <div class="decoration-pic-8 wow fadeIn" data-wow-delay="750ms"></div>
        <?php include 'recetas.php' ?>
    </section>
</div>