<?php
    query_posts('page_id=6');

    $fb = get_field('facebook', 'user_2');
    $tw = get_field('twitter', 'user_2');
    $inst = get_field('instagram', 'user_2');

?>
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
    <ul class="social">
        <li><a href="<?php echo $fb; ?>" class="socicon socicon-facebook "><span class="fb-url">/<?php echo basename(parse_url($fb, PHP_URL_PATH)); ?></span></a></li>
        <li><a href="<?php echo $tw; ?>" class="socicon socicon-twitter"><span class="tw-url">@<?php echo basename(parse_url($tw, PHP_URL_PATH)); ?></span></a></li>
        <li><a href="<?php echo $inst; ?>" class="socicon socicon-instagram"><span class="inst-url"><?php echo basename(parse_url($inst, PHP_URL_PATH)); ?></span></a></li>
    </ul>

    <div class="white-board">
        <article >
            <?php the_content(); ?>
        </article>
    </div>


<?php endwhile;?>