<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<div class="row gutters">
    <main id="articles" class="col col-8">
        <?php if(have_posts()) : ?>
            <div class="titre">
                <?php the_archive_title(); ?>
            </div>
            <p><?php the_archive_description(); ?></p>

            <?php while(have_posts()) : the_post(); ?>
                <article>
                    <header class="titre-article">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Lire la suite</a>
                </article>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>
        <?php endif; ?>
    </main>

    <aside class="col col-4">
        <?php get_sidebar(); ?> <!-- Appel de la sidebar (fichier sidebar.php) -->
    </aside>
</div>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->