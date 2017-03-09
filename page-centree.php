<?php
/*
 * Template name: Page centrée
 */
?>

<?php get_header(); ?> <!-- Appel de l'entête -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="unit-70 centered">
            <header>
                <h2><?php the_title(); ?></h2>
            </header>

            <?php the_content(); ?>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?> <!-- Appel du pied de page -->
