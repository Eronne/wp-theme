<?php
    function montheme_setup(){
        /* Wordpress prend en charge l'affichage du titre */
        add_theme_support('title-tag');
        /* Activation des images à la une */
        add_theme_support('post-thumbnails');


        /* Enregistrement des emplacements de menus */
        if (function_exists('register_nav_menus')) {
            register_nav_menus(
                array(
                    'principal' => 'Menu principal',
                    'meta' => 'Menu méta'
                )
            );
        }


        /* Ajout de l'utilisation de la sidebar */
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





    function montheme_scripts(){
        /* Chargement des feuilles de styles */
        wp_enqueue_style('style', get_stylesheet_uri(), array('kube'));
        wp_enqueue_style('kube', get_template_directory_uri().'/css/kube.min.css');

        /* Chargement des fichiers JavaScript */
        wp_enqueue_script('kube', get_template_directory_uri().'/js/kube.min.js', array('jquery'), null, true);
    }
    add_action('wp_enqueue_scripts', 'montheme_scripts');
?>