<?php get_header(); ?> <!-- Appel de l'entête -->

<div class="row gutters">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="col col-8">
            <header>
                <h2><?php the_title(); ?></h2>
            </header>

            <?php the_content(); ?>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<aside class="col col-4">
    <?php the_post_thumbnail(); ?>
    <?php get_sidebar(); ?> <!-- Appel de la sidebar -->
</aside>
</div>

<?php get_footer(); ?> <!-- Appel du footer -->