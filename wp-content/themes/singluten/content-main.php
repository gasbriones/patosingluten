<div id="main" class="wrapper">
    <section class="block home clearfix">
        <?php query_posts('page_id=13'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;?>
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