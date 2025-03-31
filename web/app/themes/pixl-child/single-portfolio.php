<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="portfolio-item">
            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="portfolio-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="portfolio-content">
                <?php the_content(); ?>

                <div class="portfolio-details">
                    <p><strong>Client :</strong> <?php the_field('client'); ?></p>
                    <p><strong>Date de réalisation :</strong> <?php the_field('date_de_realisation'); ?></p>

                    <?php if (get_field('lien_du_projet')) : ?>
                        <p><strong>Lien du projet :</strong>
                            <a href="<?php the_field('lien_du_projet'); ?>" target="_blank">
                                Voir le projet
                            </a>
                        </p>
                    <?php endif; ?>

                    <?php if (have_rows('galerie_repeater')) : ?>
                        <div class="portfolio-gallery">
                            <?php while (have_rows('galerie_repeater')) : the_row(); ?>
                                <img src="<?php the_sub_field('image'); ?>" alt="Image du projet">
                            <?php endwhile; ?>
                        </div>
                    <?php elseif (get_field('galerie')) : ?>
                        <div class="portfolio-gallery">
                            <?php
                            $images = get_field('galerie'); // Assure-toi que ce champ retourne un tableau
                            if ($images) : ?>
                                <div class="owl-carousel owl-theme">
                                    <?php foreach ($images as $image) : ?>
                                        <div class="item">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    <?php endwhile;
endif;

get_footer();
?>