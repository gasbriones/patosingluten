<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="site">
    <div class="nav-vert-top">
        <a href="#">
            <img width="80" height="21" alt="Subir" src="<?php echo get_template_directory_uri(); ?>/images/arrow-top.png">
        </a>
    </div>
    <div class="nav-vert-bottom">
        <a href="#">
            <img width="80" height="21" alt="Bajar" src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.png">
        </a>
    </div>
    <?php get_template_part('content-header'); ?>
    <?php get_template_part('content-main');?>
    <?php get_footer();?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.scrollify.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<?php wp_footer(); ?>
</body>
</html>