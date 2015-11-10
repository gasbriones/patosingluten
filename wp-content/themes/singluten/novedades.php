<?php
/*
Template Name: novedades
*/

$month = spanish_months(date("F"));
$year = date("Y");

$args = array(
    'cat' => 6,
    'tag' => $_GET["tag"] != '' ? $_GET["tag"] : $month . '+' . $year,
    'orderby' => 'ASC'
);

$query = new WP_Query($args);



?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="site">
    <div id="main" class="wrapper">
        <section class="block news clearfix">
            <h4 class="page-title wow bounceInDown">Novedades</h4>

            <aside>
                <ul class="years">
                    <?php
                    $tags = get_tags('order=DESC');
                    foreach ($tags as $tag):
                        if ($tag->name != '2015'):?>
                            <li>
                                <?php echo $tag->name; ?>
                            </li>
                        <?php endif;endforeach; ?>
                </ul>
            </aside>
            <div class="decoration-pic-1 wow fadeInDown"></div>
            <div class="white-board">
                <div class="decoration-pic-2 wow bounceInRight"></div>
                <h3 class="title">
                    <?php echo $month . ' ' . $year ?>
                </h3>
                <?php
                if ($query->have_posts()):
                    while ($query->have_posts()):$query->the_post(); ?>
                        <article>
                            <?php the_content(); ?>
                        </article>
                        <?php
                        $fields = get_fields($post_id);
                           if ($fields):
                            ?>
                            <div class="carrousel">
                                <ul>
                                    <?php
                                    foreach ($fields as $field):?>
                                        <li><img src="<?php echo $field; ?>"/></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif;endwhile;
                else:
                    echo '<li class="error">No se encontraron novedades</li>';
                endif;
                ?>
        </section>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<?php wp_footer(); ?>
</body>
</html>