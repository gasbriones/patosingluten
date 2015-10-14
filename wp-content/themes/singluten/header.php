<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage SinGluten
 * @since SinGluten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <meta content="Arte pop, latinoamérica-Arte, pop, Argentina-Art pop, Argentina-Arte pop, Salta-Art pop, Salta-Pintura pop, Argentina-Pintura pop, Buenos Aires-Pintura pop, Salta-Cuadros pop, Argentina-Dibujos pop, Argentina-artista, plástico, Argentina-artista plástico, Buenos Aires-artista, plástico Salta-artista, visual, Argentina-artista visual, Buenos Aires-Artista visual, Salta-pop, drawing-pop, painting-Arte, contemporaneo, Argentina-Arte contemporaneo, Salta-Estilo, pop-Serie, Pop-Muestra, pop-Exposición, arte, pop-Mural, pop-Mural Buenos Aires-colores, saturados-dibujo, oriental-oriental, drawing-dibujo, zen-Dibujo, geisha-objetos, intervenidos, pop-Contraste-arte, mujer-arte, imagen mujer-arte, extravagante-arte, geisha" name="keywords">

    <meta content="Descripcion" name="description">
    <!-- Facebook -->
    <meta name="og:type" content="website"/>
    <meta name="og:title" content="Francisco Speicher"/>
    <meta name="og:description" content="Descripcion"/>
    <meta name="og:url" content="url"/>
    <meta content="Francisco Speicher" name="og:site_name">
    <meta content="Buenos Aires" name="og:region">
    <meta content="Argentina" name="og:country-name">
    <!-- twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content="url"/>
    <meta name="twitter:title" content="Francisco Speicher"/>
    <meta name="twitter:description" content="Descripcion"/>
    <meta content="@franspeicher" name="twitter:site">
    <meta content="@gasbriones" name="twitter:creator">
    <!-- Links -->

    <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/mediaqueries.css" rel="stylesheet" type="text/css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

