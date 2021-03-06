<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<main class="row-units">
    <div class="row">
        <div class="col col-12">
        <h1>Rechercher :</h1>
        <?php get_search_form() ?>

        <h1>Articles récents :</h1>
        <?php $requete = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'ignore_sticky_posts' => true
        )) ?>

        <?php if ($requete->have_posts()) : ?>
            <?php while($requete->have_posts()) : $requete->the_post(); ?>
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
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    </div>
</main>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->