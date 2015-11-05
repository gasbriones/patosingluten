<?php
query_posts('page_id=98');
?>
<?php while (have_posts()) : the_post(); ?>
    <h4 class="page-title">
        <?php the_title(); ?>
    </h4>
    <div class="main-menu margin center">
    <?php wp_nav_menu(array('theme_location' => 'category-menu', 'menu_class' => 'menu category-nav clearfix')); ?>
    <div>
<?php endwhile; ?>