<?php
require get_stylesheet_directory() . '/cpt-portfolio.php';


function pixl_child_enqueue_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'pixl_child_enqueue_fonts' );

function pixl_child_enqueue_styles() {
    // On définit le "handle" (identifiant) du style parent
    $parent_style = 'pixl';

    // On charge d'abord le style parent
    wp_enqueue_style(
        $parent_style,
        get_template_directory_uri() . '/style.css'
    );

    // Puis on charge le style enfant, en précisant qu’il dépend du style parent
    wp_enqueue_style(
        'pixl-child',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style)
    );
}
add_action( 'wp_enqueue_scripts', 'pixl_child_enqueue_styles' );


function enqueue_owl_carousel() {
    wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/assets/owl-carousel/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/owl-carousel/owl.theme.default.min.css');
    wp_enqueue_script('jquery'); // J'ai besoin de JQuery pour faire fonctionner owl-carousel
    wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel');

function enqueue_custom_scripts() {
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery', 'owl-carousel-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});