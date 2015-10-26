<?php query_posts('page_id=6'); ?>
<?php while (have_posts()) : the_post(); ?>
    <h4 class="page-title">
        <?php the_title(); ?>
    </h4>
    <?php the_content(); ?>
<?php endwhile;?>