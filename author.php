<!-- todo: page 3 : "Le fichier home.php" -->
<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<main id="articles" class="unit-70">
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
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php endif; ?>
</main>

<aside class="unit-30">
    <h2>A propos de l'auteur</h2>
    <p class="auteur-nom"><?php echo get_the_author(); ?></p>
    <p class="auteur-description"><?php the_author_meta('description'); ?></p>
    <p>
        <span class="libelle">Son courriel</span>
        <?php echo the_author_meta('user_email'); ?>
    </p>
    <p>
        <span class="libelle">Son site web</span>
        <?php echo the_author_meta('user_url') ?>
    </p>
    <p><?php the_author(); ?> a écrit <?php echo get_the_author_posts(); ?> article dans le site.</p>
</aside>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->