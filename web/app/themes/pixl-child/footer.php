<?php
/**
 * Footer minimal pour éviter l'erreur de WordPress.
 */
?>
<?php
// Charge le footer de Full Site Editing
if ( function_exists( 'block_template_part' ) ) {
    block_template_part( 'footer' );
}
?>
<?php wp_footer(); ?>
</body>
</html>