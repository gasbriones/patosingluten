<?php
/*
Template Name: novedades
*/

$years = array(
  '2015','2016','2017','2018','2019','2020'
);

$current_year = date("Y");
$year = $_GET["anio"] != '' ? $_GET["anio"]:  date("Y");
$month = $_GET["mes"] != '' ? $_GET["mes"] : spanish_months(date("F"));
$tag_l = $month . '+' . $year;

$args = array(
    'cat' => 6,
    'tag' => $tag_l,
    'orderby' => 'ASC'
);

$query = new WP_Query($args);

?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="site">
    <?php include 'sticky.php' ?>
    <div id="main" class="wrapper">
        <section class="block news clearfix">
            <h4 class="page-title wow bounceInDown">Novedades</h4>
            <aside>
                <ul class="years">
                    <li class="title">
                        <?php
                            foreach($years as $key => $value):
                                if($value <= $current_year): ?>
                                    <a class="<?php echo $value == $year ? 'active' : '' ?>" href="<?php echo post_permalink($post_id) . '?mes=' . $month.'&anio='.$value ?>"><?php echo $value; ?></a>
                                <?php endif; endforeach; ?>

                    </li>
                    <?php
                    $arrayMonths = months();

                    foreach ($arrayMonths as $row):
                        ?>
                        <li>
                            <a class="<?php echo $row == $month ? 'active' : '' ?>"
                               href="<?php echo post_permalink($post_id) . '?mes=' . $row.'&anio='.$year ?>"><?php echo $row; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </aside>
            <div class="decoration-pic-1 wow fadeInDown"></div>
            <div class="white-board">
                <div class="decoration-pic-2 wow bounceInRight"></div>
                <h3 class="title">
                    <?php echo $_GET["mes"] != '' ? $_GET["mes"] . ' ' . $year : $month . ' ' . $year ?>
                </h3>
                <ul class="news-list">
                    <?php
                    $i = 0;
                    if ($query->have_posts()):
                        while ($query->have_posts()):$query->the_post();
                            $i++;
                            ?>
                            <li data-slide="<?php echo get_the_ID(); ?>"
                                class="<?php echo $i == 1 ? ' active' : ''; ?>">
                                <?php the_content(); ?>
                            </li>
                        <?php endwhile;
                    else:
                        echo '<li class="error">No se encontraron novedades</li>';
                    endif;
                    ?>
                </ul>
                <div class="carousel-wrap">
                    <?php
                    $j = 0;
                    if ($query->have_posts()):
                        while ($query->have_posts()):$query->the_post(); ?>
                            <?php
                            $fields = get_fields($post_id);
                            $j++;
                            ?>
                            <div class="carousel <?php echo get_the_ID();
                            echo $j == 1 ? ' show' : ''; ?>">
                                <?php if (count(array_filter($fields))): ?>
                                    <ul class="slider">
                                        <?php
                                        foreach ($fields as $field => $value):
                                            if (trim($value) != ''):
                                                ?>
                                                <li><img src="<?php echo $value; ?>"/></li>
                                            <?php endif;endforeach; ?>
                                    </ul>
                                <?php
                                else:
                                    echo '<span class="error">No se encontraron imágenes disponibles</span>';
                                endif; ?>
                            </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    (function ($) {
        $('.slider').bxSlider({
            minSlides: 2,
            maxSlides: 2,
            slideWidth: 400,
            pager: false,
            infiniteLoop: false
        });

        $('.news-list li').click(function () {

            var id = $(this).data('slide');

            $('.news-list li').removeClass('active');
            $('.carousel').removeClass('show');
            $(this).addClass('active');
            $('.' + id).addClass('show');
        });

    })(jQuery);
</script>
<?php wp_footer(); ?>
</body>
</html>