<?php
/**
 * Header minimal pour éviter l'erreur de WordPress.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('•', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="wp-block-template-part">
    <?php
    if ( function_exists( 'block_template_part' ) ) {
        block_template_part( 'header' );
    } else {
        get_template_part( 'template-parts/header' );
    }
    ?>
    </header>
