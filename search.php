<?php get_header(); ?>  <!-- Récupération de l'entête -->

<main class="unit-100">
    <?php if (have_posts()) : ?>
        <h1>Résultats de recherche pour : <?php echo get_search_query(); ?></h1>

        <ul>
            <?php while(have_posts()) : the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="extrait">
                        <?php the_excerpt(); ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>Malheureusement, aucun contenu n'a été trouvé.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>  <!-- Récupération du pied de page -->