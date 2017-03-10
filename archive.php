<!-- todo: page 3 : "Le fichier home.php" -->
<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<main id="articles" class="unit-70">
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
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php endif; ?>
</main>

<aside class="unit-30">
    <?php get_sidebar(); ?> <!-- Appel de la sidebar (fichier sidebar.php) -->
</aside>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->