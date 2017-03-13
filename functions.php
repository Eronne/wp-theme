<?php
    function montheme_setup(){
        // Wordpress prend en charge l'affichage du titre
        add_theme_support('title-tag');
        /* Activation des images à la une */
        add_theme_support('post-thumbnails');


        // Enregistrement des emplacements de menus
        if (function_exists('register_nav_menus')) {
            register_nav_menus(
                array(
                    'principal' => 'Menu principal',
                    'meta' => 'Menu méta'
                )
            );
        }


        // Ajout de l'utilisation de la sidebar
        if(function_exists('register_sidebar')) {
            register_sidebar(
                array(
                    'name' => 'Barre latérale',
                    'id' => 'barre-laterale'
                )
            );

            register_sidebar(
                array(
                    'name' => 'Pied de page',
                    'id' => 'pied-de-page'
                )
            );
        }
    }
    add_action('after_setup_theme', 'montheme_setup');





    /* Personnalisation du thème section "Personnaliser" dans espace admin */
    function montheme_personnalisation($wp_customize){
        // Ajout de la section
        $wp_customize->add_section('ma_section', array(
            'title' => 'Options de mon thème',
            'description' => 'Personnalisation de mon thème',
            'priority' => 200
        ));

        // Ajout du réglage
        $wp_customize->add_setting('couleur_liens', array(
            'default' => '000',
            'sanitize_callback' => 'sanitize_hex_color',
            'capability' => 'edit_theme_options',
            'type' => 'theme_mod',
            'transport' => 'refresh'
        ));

        // Ajout du contrôle
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
            'label' => 'Couleur des liens',
            'section' => 'ma_section',
            'settings' => 'couleur_liens'
        )));



        // Personnalisation de l'image d'entête
        $wp_customize->add_setting('charge_image');

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'charge_image', array(
            'label' => 'Arrière plan (1140x250px)',
            'section' => 'ma_section',
            'settings' => 'charge_image'
        )));
    }
    add_action('customize_register', 'montheme_personnalisation');

    function montheme_personnaliser_css(){ ?>
        <style type="text/css">
            body > .row > header{
                background-image: url(<?php echo get_theme_mod('charge_image', 'none'); ?>);
                height: <?php echo (get_theme_mod('charge_image')!=='' ? '250px' : 'auto'); ?>;
            }

            a{
                color: <?php echo get_theme_mod('couleur_liens', '#000000'); ?>;
            }
        </style>
    <?php }
    add_action('wp_head', 'montheme_personnaliser_css');





    function montheme_scripts(){
        // Chargement des feuilles de styles
        wp_enqueue_style('style', get_stylesheet_uri(), array('kube'));
        wp_enqueue_style('kube', get_template_directory_uri().'/css/kube.css');

        // Chargement des fichiers JavaScript
        wp_enqueue_script('kube', get_template_directory_uri().'/js/kube.min.js', array('jquery'), null, true);
    }
    add_action('wp_enqueue_scripts', 'montheme_scripts');
?>