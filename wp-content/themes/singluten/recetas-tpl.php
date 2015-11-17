<?php
/*
Template Name: recetas
*/


$post_id = get_the_ID();
$get_post_id = $_GET['receta'];

switch ($post_id) {
    case 42:
        $tag = 'dulces-para-el-te';
        break;
    case 44:
        $tag = 'panes-snacks';
        break;
    case 46:
        $tag = 'platos-principales';
        break;
    case 48:
        $tag = 'postres';
        break;
    case 50:
        $tag = 'para-festejar';
        break;
    case 52:
        $tag = 'tortas';
        break;
}

$args = array(
    'cat' => 28,
    'tag' => $tag,
    'orderby' => 'ASC',
    'showposts' => '1'
);

$args_menu = array(
    'cat' => 28,
    'tag' => $tag,
    'orderby' => 'ASC'
);

$query = new WP_Query($args);
$menu_query = new WP_Query($args_menu);

?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="site">
    <div id="main" class="wrapper">
        <section class="block recipes-view clearfix">
            <h4 class="page-title wow bounceInDown"><?php echo get_the_title(); ?></h4>
            <a class="back-to-site hvr-float-shadow" href="<?php echo site_url()."#recetas" ; ?>">Volver al <span>home</span></a>

            <aside>
                <ul class="recipes-list">
                    <?php
                    if ($menu_query->have_posts()):
                        $i = 0;
                        while ($menu_query->have_posts()):$menu_query->the_post();
                            ?>
                            <li>
                                <a  class="<?php echo $i == 0 ? 'active' : ''; ?>" href="<?php echo post_permalink($post_id) . "?receta=" . $post->ID ?>"><?php the_title(); ?></a>
                            </li>
                        <?php $i++; endwhile;
                    endif;
                    ?>
                </ul>
            </aside>
            <div class="white-board">
                <?php
                if ($get_post_id != '') {
                    $query = new WP_Query(array('p' => $get_post_id));
                }

                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();?>
                    <?php the_title('<h3 class="title">', '</h3>'); ?>
                    <article>
                        <?php if (get_field('recetas_imagen')):?>
                            <div class="recipe-img"><img src="<?php echo the_field('recetas_imagen') ?>" /></div>
                        <?php endif; ?>

                        <h3 class="sub-title">Ingredientes</h3>
                        <?php the_content(); ?>

                        <?php if (get_field('recetas_procedimiento')):?>
                            <h3 class="sub-title">Procedimiento</h3>
                            <p><?php echo the_field('recetas_procedimiento') ?></p>
                        <?php endif; ?>

                        <?php if (get_field('recetas_nota')):?>
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

        </section>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>