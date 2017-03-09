<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<main class="unit-70">
    <?php if(have_posts()) : ?>
        <?php the_post(); ?>
            <article>
                <header class="titre-page">
                    <h1><?php the_title() ?></h1>
                </header>
                <?php the_content(); ?>
            </article>
    <?php endif; ?>
</main>

<aside class="unit-30">
    <?php get_sidebar(); ?> <!-- Appel de la sidebar (fichier sidebar.php) -->
</aside>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->