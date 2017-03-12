<!-- todo: page 3 : "Le fichier home.php" -->
<?php get_header(); ?> <!-- Appel de l'en-tête (fichier header.php) -->
<div class="row">
    <main id="articles" class="col col-8">    
        <h1><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article>
                    <div class="article">
                        <header class="titre-article">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><strong><?php the_date(); ?></strong></p>
                        </header>
                        <?php the_post_thumbnail( medium, attr ) ?>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Lire la suite</a>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>
        <?php endif; ?>
    </main>

    <aside class="col col-4">
        <h2>3 articles aléatoires</h2>
        <?php $requete = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'ignore_sticky_posts' => true,
            'orderby' => 'rand'
        )) ?>

        <?php if ($requete->have_posts()) : ?>
            <?php while($requete->have_posts()) : $requete->the_post(); ?>
                <ul>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                </ul>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        
        <?php get_sidebar(); ?> <!-- Appel de la sidebar (fichier sidebar.php) -->
    </aside>
</div>

<?php get_footer(); ?> <!-- Appel du pied de page (fichier footer.php) -->