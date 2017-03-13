<?php
/*
 * Template name: Page "A propos"
 */
?>

<?php get_header(); ?> <!-- Appel de l'entête -->

<div class="units-row">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <main class="unit-80 centered">
                <header>
                    <h2><?php the_title(); ?></h2>
                </header>
                <?php the_post_thumbnail( medium, attr ) ?>
                <?php the_content(); ?>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?> <!-- Appel du pied de page -->
