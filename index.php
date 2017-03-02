<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<main id="articles">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <article>
                <header class="titre-article">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                </header>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?> <!-- Appel de la sidebar (fichier sidebar.php) -->
<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->