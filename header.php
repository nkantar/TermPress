<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="/wp-content/themes/termpress/normalize.css" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!-- <script src="/wp-content/themes/nk4c/script.js"></script> -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class($class); ?>>
        <div id="wrapper">

            <header>
                <h1><a href="/">nkantar.com</a></h1>
                <span>Web development with a side of design.</span>
            </header>

            <?php // wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
