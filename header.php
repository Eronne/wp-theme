<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <div class="row units-row">
        <header class="col col-12">
            <?php wp_nav_menu(array(
                'theme_location' => 'meta',
                'container_class' => 'menu meta unit-100',
                'container' => 'nav',
                'menu_class' => '',
                'menu_id' => ''
            )); ?>

            <div class="units-row">
                <h1 class="unit-100"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>

            <?php wp_nav_menu(array(
                'theme_location' => 'principal',
                'container_class' => 'menu principal unit-100',
                'container' => 'nav',
                'menu_class' => '',
                'menu_id' => ''
            )); ?>
        </header>
    </div>

    <div id="contenu" class="units-row">