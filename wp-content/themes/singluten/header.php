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
$get_post_id = $_GET['receta'];
$current_url =  $_SERVER['REQUEST_URI'];
$post_url = explode("?",$current_url);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="<?php bloginfo( 'description'); ?>" />

    <!-- Facebook -->

    <?php if (is_single() || is_page()): ?>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo get_the_title( $get_post_id); ?>"/>
        <meta property="og:image" content="<?php echo the_field('recetas_imagen',$get_post_id,'thumbnail') ?>"/>
        <meta property="og:url" content="<?php echo get_site_url(). $post_url[0] . "?receta=" . $get_post_id ?>" />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
        <meta property="og:description" content="<?php echo custom_excerpt($get_post_id);?>"/>

    <?php else: ?>
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php bloginfo('name'); ?>" />
        <meta property="og:description" content="<?php bloginfo( 'description'); ?>" />
        <meta property="og:url" content="<?php bloginfo('url'); ?>" />
    <?php endif;?>

    <meta name="og:region" content="Buenos Aires" />
    <meta name="og:country-name" content="Argentina" />

    <!-- twitter -->
    <meta name="twitter:card" content="summary"/>

    <?php if (is_single() || is_page()): ?>
        <meta name="twitter:title" content="<?php echo get_the_title( $get_post_id); ?>" />
        <meta name="twitter:description" content="<?php echo custom_excerpt($get_post_id);?>"/>
        <meta name="twitter:url" content="<?php echo get_site_url(). $post_url[0] . "?receta=" . $get_post_id ?>" />
    <?php else: ?>
        <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
        <meta name="twitter:description" content="<?php bloginfo( 'description'); ?>" />
        <meta name="twitter:url" content="<?php bloginfo('url'); ?>" />
    <?php endif;?>



    <meta name="twitter:site" content="@patosingluten" />
    <meta name="twitter:creator" content="@gasbriones" />
    <!-- Links -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/socicon.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/mediaqueries.css" rel="stylesheet" type="text/css">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
    <?php wp_head(); ?>
</head>

