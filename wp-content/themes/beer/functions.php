<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );

function beer_assets() {

    // Déclarer jQuery
    wp_enqueue_script('jquery' );

    // Déclarer le JS
    wp_enqueue_script( 
        'beer', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'beer',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'mainStyleSheet', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );

    // Déclaration de bootstrap style
    wp_enqueue_style(
        'bootstarp',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css',
        false,
        '5.1.1'
    );

    // Déclaration de bootstrap script
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js',
        false,
        '5.1.1'
    );

}

register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
) );

add_action( 'wp_enqueue_scripts', 'beer_assets' );

// Déclaration du menu de l'entête et du pied de page
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );