<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <div class="row units-row">
        <header class="col col-12">
            <div class="shadow">
                <?php wp_nav_menu(array(
                    'theme_location' => 'meta',
                    'container_class' => 'menu meta unit-100',
                    'container' => 'nav',
                    'menu_class' => '',
                    'menu_id' => ''
                )); ?>
            </div>
        

            <div class="units-row">
                <h1 class="unit-100"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?> - Création de designs de qualité</a></h1>
            </div>

            <div class="shadow">
                <?php wp_nav_menu(array(
                    'theme_location' => 'principal',
                    'container_class' => 'menu principal unit-100',
                    'container' => 'nav',
                    'menu_class' => '',
                    'menu_id' => ''
            )); ?>
            </div>
        </header>
    </div>

    <div id="contenu" class="units-row">