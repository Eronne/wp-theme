<?php get_header(); ?> <!-- Appel de l'entête -->

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="unit-70">
            <header>
                <h2><?php the_title(); ?></h2>
            </header>

            <?php the_content(); ?>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<aside class="unit-30">
    <?php the_post_thumbnail(); ?>
    <?php get_sidebar(); ?> <!-- Appel de la sidebar -->
</aside>

<?php get_footer(); ?> <!-- Appel du footer -->