<?php
get_header();
?>

<main class="homepage">
    <section class="realisation">
        <h2>Mes Réalisations</h2>
        <div class="realisation-grid">
            <?php
            $projects = get_field('meilleures_realisations');
            if ($projects) :
                foreach ($projects as $post) :
                    setup_postdata($post); ?>
                    <div class="realisation-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="realisation-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
            else :
                echo '<p>Aucune réalisation à afficher.</p>';
            endif;
            ?>
        </div>
    </section>

    <section class="competences">
        <h2>Mes Compétences</h2>
        <ul>
            <?php if (have_rows('competences')) : ?>
                <?php while (have_rows('competences')) : the_row(); ?>
                    <li><?php the_sub_field('competence'); ?></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </section>



    <section class="presentation">
        <h1>À propos de moi</h1>
        <p><?php the_field('presentation'); ?></p>
    </section>
</main>

<?php get_footer(); ?>