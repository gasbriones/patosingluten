<?php
query_posts('page_id=6');
$fb = get_field('facebook', 'user_2');
$tw = get_field('twitter', 'user_2');
$inst = get_field('instagram', 'user_2');

?>

<footer id="footer" class="clearfix">
    <section id="contact" class="wrapper contact">
        <h4 class="page-title wow bounceInDown">
            Contacto
        </h4>
        <div class="decoration-1"></div>
        <ul class="social wow fadeIn">
            <li><a href="<?php echo $fb; ?>" class="socicon socicon-facebook "><span class="fb-url"><i>/</i><?php echo basename(parse_url($fb, PHP_URL_PATH)); ?></span></a></li>
            <li><a href="<?php echo $tw; ?>" class="socicon socicon-twitter"><span class="tw-url"><i>@</i><?php echo basename(parse_url($tw, PHP_URL_PATH)); ?></span></a></li>
            <li><a href="<?php echo $inst; ?>" class="socicon socicon-instagram"><span class="inst-url"><i>/</i><?php echo basename(parse_url($inst, PHP_URL_PATH)); ?></span></a></li>
        </ul>
        <div class="margin center">
            <div class="contact-board">
                <h3 class="title">Newsletter</h3>
                <form>
                    <div>
                        <label>Nombre</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label>Apellido</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label>Teléfono</label>
                        <input type="text"/>
                    </div>
                    <span class="msj">Gracias por estar en contacto<i>!</i></span>
                    <div>
                        <input type="submit" class="submit" value="ENVIAR">
                    </div>
                </form>
            </div>
    </section>
    <?php include 'plinth.php' ?>
</footer>
