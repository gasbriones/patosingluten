<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="site">
    <?php get_template_part('content-header'); ?>
    <?php get_template_part('content-main');?>
    <?php get_footer();?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<?php wp_footer(); ?>
</body>
</html>