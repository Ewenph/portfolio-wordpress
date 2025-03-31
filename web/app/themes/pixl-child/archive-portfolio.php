<?php
get_header();
?>

<main class="portfolio-archive">
    <h1>Nos Réalisations</h1>
    <div class="portfolio-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="portfolio-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="portfolio-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                    </a>
                </div>
            <?php endwhile;
        else :
            echo '<p>Aucune réalisation trouvée.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
