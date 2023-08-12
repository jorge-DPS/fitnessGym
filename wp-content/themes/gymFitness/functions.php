<?php
function gymfitness_setup()
{
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'gymfitness_setup');

function gymfitness_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'gymfitness')
    ));
}

// hook son acciones que se ejucutan despues de haber hecho alguna modificacion en pluggon  o menus
add_action('init', 'gymfitness_menus');


/* agragar hoja de etilos */
function gymfitness_scripts_styles()
{
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/normalize.css', [], '8.0.1', 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
