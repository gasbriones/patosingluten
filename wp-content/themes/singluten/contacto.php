<?php
include("lang/prepend.php");
$_SESSION['active'] = "contacto";
/*
Template Name: contacto
*/
?>

<?php get_header(); ?>
<body class="contacto">
<?php get_template_part('header-part') ?>
<?php get_template_part('mobile-menu') ?>
<div class="main wrapper">
    <section class="content clearfix">
        <article>
            <div class="contact-main">
                <h4><?php echo CONTACTO_TITULO;?></h4>
                <div>
                    E-mail:<br/> <a href="mailto:franciscospeicher@hotmail.com">franciscospeicher@hotmail.com</a>
                </div>
                <ul class="social-micro">
                    <li>
                        <a href="https://www.facebook.com/pages/FRANCISCO-SPEICHER-Artista-Plastico/110291662394677" target="_blank" class="fb"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/franspeicher" class="tw" target="_blank"></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/speicherfrancisco" target="_blank" class="ins"></a>
                    </li>
                </ul>

                <div class="contact-form" id="contact-form">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post();  ?>
                            <?php  if($_SESSION["lang"] == "es"){
                                the_content();
                            }else{
                                the_field('eng_text_pages');
                            } ?>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
            </div>

        </article>
    </section>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</body>
</html>