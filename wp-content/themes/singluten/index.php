<?php get_header(); ?>
<body class="home">
<?php get_template_part('header-part') ?>
<div class="main wrapper">
    <section class="content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post();  ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif;?>
    </section>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</body>
</html>