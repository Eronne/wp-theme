<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> | <?php
        bloginfo('description'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width,
initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');
    ?>"/>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <h1><?php bloginfo('name'); ?></h1>
</header>
<nav>
    <?php wp_nav_menu(array(
        'theme_location' => 'principal'
    )); ?>
</nav>
<div id="contenu">