<?php
/*
Template Name: Search Page
*/


$post_id = get_the_ID();
$get_post_search = $_GET['receta'];



$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$args = array(
    'cat' => 28,
    'paged' => $paged,
    'orderby' => 'ASC',
    'showposts' => '1',
    's' => $get_post_search,
);

$query = new WP_Query($args);

$args_menu = array(
    'cat' => 28,
    'showposts' => '8',
    'paged' => $paged,
    'orderby' => 'ASC',
    's' => $get_post_search
);

$menu_query = new WP_Query($args_menu);

?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="site">
    <div id="main" class="wrapper">
        <section class="block recipes-view clearfix">
            <h4 class="page-title wow bounceInDown"><?php echo get_the_title(); ?></h4>
            <a class="back-to-site hvr-float-shadow" href="<?php echo site_url(); ?>">Volver al home</a>

            <div class="main-menu margin center">
                <?php
                $cleaner_menu = wp_nav_menu(array('theme_location' => 'category-menu', 'menu_class' => 'menu category-nav clearfix'));
                ?>
                <div>
                    <aside>
                        <ul class="recipes-list">
                            <?php
                            if ($menu_query->have_posts()):
                                $i = 0;
                                while ($menu_query->have_posts()):$menu_query->the_post();
                                    $post_tag = wp_get_post_tags($post->ID);
                                    ?>
                                    <li>
                                        <a class="<?php echo $post->ID == $get_post_id || ($get_post_id == '' && $i == 0) ? 'active' : ''; ?>"
                                           href="<?php echo '../'.$post_tag[0]-> slug . "/?receta=" . $post->ID ?>"><?php the_title(); ?></a>
                                    </li>

                                    <?php $i++; endwhile;
                            endif;
                            ?>
                        </ul>
                        <div class="paginator">
                            <?php
                            $big = 999999999; // need an unlikely integer

                            echo paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total' => $menu_query->max_num_pages,
                                'prev_next' => false,
                            ));
                            ?>
                        </div>
                    </aside>
                    <div class="white-board">
                        <?php
                        if ($get_post_id != '') {
                            $query = new WP_Query(array('p' => $get_post_id));
                        }
                        if ($query->have_posts()):
                        while ($query->have_posts()):
                        $query->the_post(); ?>
                        <?php the_title('<h3 class="title">', '</h3>'); ?>
                        <article>
                            <?php if (get_field('recetas_imagen')): ?>
                                <div class="recipe-img"><img src="<?php echo the_field('recetas_imagen') ?>"/></div>
                            <?php endif; ?>

                            <h3 class="sub-title">Ingredientes</h3>
                            <?php the_content(); ?>

                            <?php if (get_field('recetas_procedimiento')): ?>
                                <h3 class="sub-title">Procedimiento</h3>
                                <p><?php echo the_field('recetas_procedimiento') ?></p>
                            <?php endif; ?>

                            <?php if (get_field('recetas_nota')): ?>
                                <h3 class="sub-title">Nota</h3>
                                <p><?php echo the_field('recetas_nota') ?></p>
                            <?php endif; ?>

                            <?php endwhile;
                            else:
                                echo '<span class="error">No se encontraron recetas</span>';
                            endif;
                            ?>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>