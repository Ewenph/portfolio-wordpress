<?php
// Enregistrement du Custom Post Type Portfolio
function register_portfolio_post_type() {
    $labels = array(
        'name'                  => 'Portfolios',
        'singular_name'         => 'Portfolio',
        'menu_name'             => 'Portfolios',
        'name_admin_bar'        => 'Portfolio',
        'add_new'               => 'Ajouter',
        'add_new_item'          => 'Ajouter une réalisation',
        'new_item'              => 'Nouvelle réalisation',
        'edit_item'             => 'Modifier la réalisation',
        'view_item'             => 'Voir la réalisation',
        'all_items'             => 'Toutes les réalisations',
        'search_items'          => 'Rechercher une réalisation',
        'not_found'             => 'Aucune réalisation trouvée',
        'not_found_in_trash'    => 'Aucune réalisation dans la corbeille',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'portfolio'), // Permalien : /portfolio/nom-de-la-réalisation/
        'supports'              => array('title', 'editor', 'thumbnail'),
        'show_in_rest'          => true, // Pour l'éditeur Gutenberg
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'register_portfolio_post_type');


// Enregistrement de la taxonomie personnalisée pour les catégories de portfolio
function register_portfolio_taxonomy() {
    $labels = array(
        'name'              => 'Catégories Portfolio',
        'singular_name'     => 'Catégorie Portfolio',
        'search_items'      => 'Rechercher des catégories',
        'all_items'         => 'Toutes les catégories',
        'parent_item'       => 'Catégorie parente',
        'parent_item_colon' => 'Catégorie parente :',
        'edit_item'         => 'Modifier la catégorie',
        'update_item'       => 'Mettre à jour la catégorie',
        'add_new_item'      => 'Ajouter une nouvelle catégorie',
        'new_item_name'     => 'Nom de la nouvelle catégorie',
        'menu_name'         => 'Catégories',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-categorie'),
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'register_portfolio_taxonomy');
