<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<main id="articles" class="row">
    <div class="col col-8">
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
    </div>

    <aside class="col col-4">
        <?php get_sidebar(); ?> <!-- Appel de la sidebar (fichier sidebar.php) -->
    </aside>
</main>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->