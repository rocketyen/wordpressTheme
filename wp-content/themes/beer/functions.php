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
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css'
    );

    // Déclaration de bootstrap script
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js',
        array(), 
        '5.1.1', 
        true
    );

}

register_sidebar( array(
  'id' => 'blog-sidebar',
  'name' => 'Blog',
  'before_widget'  => '<div class="site__sidebar__widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<p class="site__sidebar__widget__title">',
  'after_title' => '</p>',
) );

add_action( 'wp_enqueue_scripts', 'beer_assets' );

// Déclaration du menu de l'entête et du pied de page
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

function capitaine_register_post_types() {

    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); // Le hook init lance la fonction