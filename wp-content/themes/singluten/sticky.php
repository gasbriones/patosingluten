<div class="sticky clearfix">
    <div class="sticky-content">
        <div class="logo">
            <a href="<?php echo get_site_url();?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sticky.png">
            </a>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'sticky-menu' ) ); ?>
    </div>
</div>