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
    <section class="block news clearfix">
        <h4 class="page-title wow bounceInDown">Novedades</h4>
        <aside>
            <ul class="years">
                <?php
                $tags = get_tags('order=DESC');
                foreach ($tags as $tag):
                    ?>
                    <li>
                        <?php
                        if ($tag->name != '2015') {
                            echo $tag->name;
                        }

                        ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <div class="white-board">
            <div class="decoration-pic-1 wow fadeInDown"></div>
            <div class="decoration-pic-2 wow bounceInRight"></div>
            <div class="decoration-pic-3 wow bounceInRight"></div>
            <h3 class="title">
                <?php echo $month .' '. $year?>
            </h3>
            <?php
            if ($query->have_posts()):
                while ($query->have_posts()):$query->the_post(); ?>
                    <article>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile;
            else:
                echo '<li class="error">No se encontraron novedades</li>';
            endif;
            ?>
    </section>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<?php wp_footer(); ?>
</body>
</html>