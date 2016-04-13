<?php
/*
Template Name: recetas
*/


$post_id = get_the_ID();
$get_post_id = $_GET['receta'];
$next_prev  = array();

switch ($post_id) {
    case 42:
        $tag = 'dulces-para-el-te';
        break;
    case 44:
        $tag = 'panes-y-snacks';
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

$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$args = array(
    'cat' => 28,
    'tag' => $tag,
    'paged' => $paged,
    'orderby' => 'title',
    'order' => 'ASC',
    'showposts' => '1'
);

$query = new WP_Query($args);

$args_menu = array(
    'cat' => 28,
    'tag' => $tag,
    'showposts' => '8',
    'paged' => $paged,
    'orderby' => 'title',
    'order' => 'ASC'
);

$menu_query = new WP_Query($args_menu);

$current_url =  $_SERVER['REQUEST_URI'];
$post_url = explode("?",$current_url);


?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="site">
    <?php include 'sticky.php' ?>
    <div id="main" class="wrapper">
        <section class="block recipes-view clearfix">
            <h4 class="page-title wow bounceInDown"><?php echo get_the_title(); ?></h4>
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
                                    ?>
                                    <li>
                                        <a class="<?php echo $post->ID == $get_post_id || ($get_post_id == '' && $i == 0) ? 'active' : ''; ?>"
                                           href="<?php echo $post_url[0] . "?receta=" . $post->ID ?>"><?php the_title(); ?></a>
                                    </li>
                                    <?php $i++; array_push($next_prev,$post->ID); endwhile;

                                $e=0;
                                $currentRecipe = $get_post_id != '' ? $get_post_id : $next_prev[0];
                                foreach ($next_prev as $page){
                                    if ($currentRecipe == $page){
                                        $next = $next_prev[$e+1];
                                        $prev = $next_prev[$e-1];
                                    }
                                    $e++;
                                }
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
                                'total' => $menu_query->max_num_pages
                            ));
                            ?>
                        </div>

                    </aside>
                    <div class="white-board">
                        <?php if($prev): ?>
                        <a class="arrow-recipe prev" href="<?php echo $post_url[0] . "?receta=" . $prev ?>" title="Ir a receta anterior"></a>
                        <?php endif; ?>

                        <?php if($next): ?>
                        <a class="arrow-recipe next" href="<?php echo $post_url[0] . "?receta=" . $next ?>" title="Ir a receta próxima"></a>
                        <?php endif; ?>

                        <?php
                        if ($get_post_id != '') {
                            $query = new WP_Query(array('p' => $get_post_id));
                        }
                        if ($query->have_posts()):
                        while ($query->have_posts()):
                        $query->the_post(); ?>
                        <?php the_title('<h3 class="title">', '</h3>'); ?>
                        <article id="printer">
                            <?php if (get_field('recetas_imagen')): ?>
                                <div class="recipe-img">
                                    <figure><img src="<?php echo the_field('recetas_imagen') ?>"/></figure></div>
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
                        <div class="options">
                            <ul class="options-items social">
                                <li class="shared"><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_site_url().$post_url[0] . "?receta=" . $post->ID ?>">Compartir</a></li>
                                <li class="print"><a href="#">Imprimir</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    (function ($) {

        function printTextArea() {
            var prtContent = $('.white-board');
            var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write(prtContent.html());
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }

        $('.print a').click(function(){
            printTextArea();
            return false;
        });

    })(jQuery);
</script>
<?php wp_footer(); ?>
</body>
</html>