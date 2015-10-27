<?php query_posts('page_id=6'); ?>
<?php while (have_posts()) : the_post(); ?>
    <h4 class="page-title">
        <?php the_title(); ?>
    </h4>
    <figure class="pic-one">
        <img src="<?php echo the_field('sobre_pato_imagen_1') ?>">
    </figure>
    <figure class="pic-two">
        <img src="<?php echo the_field('sobre_pato_imagen_2') ?>">
    </figure>

    <div class="white-board">
        <article >
            <?php the_content(); ?>
        </article>
    </div>


<?php endwhile;?>