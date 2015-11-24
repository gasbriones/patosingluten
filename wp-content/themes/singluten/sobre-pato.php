<?php
    query_posts('page_id=6');
    $fb = get_field('facebook', 'user_2');
    $tw = get_field('twitter', 'user_2');
    $inst = get_field('instagram', 'user_2');

?>
<?php while (have_posts()) : the_post(); ?>
    <div class="about-pato clearfix">
        <h4 class="page-title wow bounceInDown">
            <?php the_title(); ?>
        </h4>
        <figure class="pic-one wow swing" data-wow-delay="500ms">
            <img src="<?php echo the_field('sobre_pato_imagen_1') ?>">
        </figure>
        <figure class="pic-two wow swing" data-wow-delay="750ms">
            <img src="<?php echo the_field('sobre_pato_imagen_2') ?>">
        </figure>
        <ul class="social wow fadeIn">
            <li><a href="<?php echo $fb; ?>" class="socicon socicon-facebook" target="_blank"><i>/</i><span class="fb-url hvr-pop"><?php echo basename(parse_url($fb, PHP_URL_PATH)); ?></span></a></li>
            <li><a href="<?php echo $tw; ?>" class="socicon socicon-twitter" target="_blank"><i>@</i><span class="tw-url hvr-pop"><?php echo basename(parse_url($tw, PHP_URL_PATH)); ?></span></a></li>
            <li><a href="<?php echo $inst; ?>" class="socicon socicon-instagram" target="_blank"><i>/</i><span class="inst-url hvr-pop"><?php echo basename(parse_url($inst, PHP_URL_PATH)); ?></span></a></li>
        </ul>

        <div class="white-board">
            <div class="decoration-pic-1 wow fadeInDown"></div>
            <div class="decoration-pic-2 wow bounceInRight"></div>
            <div class="decoration-pic-3 wow bounceInRight"></div>
            <article>
                <?php the_content(); ?>
            </article>
        </div>
    </div>

    <div class="desire">
        <div class="decoration-pic-4 wow bounceInLeft"></div>
        <div class="decoration-pic-5 wow fadeIn" data-wow-duration="2s"></div>
        <div class="decoration-pic-6 wow fadeInUp"></div>
        <div class="decoration-pic-7 wow bounceInLeft"></div>
        <article>
            <?php echo the_field('sobre_pato_deseo') ?>
        </article>
    </div>
<?php endwhile;?>