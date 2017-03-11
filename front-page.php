<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->

<main class="row gutters">
    <div class="col col-8">
        <?php if(have_posts()) : ?>
            <?php the_post(); ?>
            <article>
                <header class="titre-page">
                    <h1><?php the_title() ?></h1>
                </header>
                <?php the_content(); ?>
            </article>
        <?php endif; ?>
    </div>

    <aside class="col col-4">
        <h2>Articles récents</h2>
        <?php $requete = new WP_Query(array(
            'post_type' => 'post',
            'post_per_page' => 5
        )) ?>

        <?php if ($requete->have_posts()) : ?>
            <ul>
                <?php while($requete->have_posts()) : $requete->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </aside>
</main>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->