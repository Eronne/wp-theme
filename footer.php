</div> <!-- fermeture de la boîte #contenu -->

<footer>
    <div class="units-row">
        <?php wp_nav_menu(array(
            'theme_location' => 'principal',
            'container_class' => 'piedpage unit-50',
            'container' => 'nav',
            'menu_class' => '',
            'menu_id' => ''
        )); ?>
    </div>

    <div class="col col-6">
        <?php
            if (function_exists('dynamic_sidebar')) {
                dynamic_sidebar('pied-de-page');
            }
        ?>
    </div>

    <div class="copyright units-row">
        <p class="col col-12"><?php bloginfo('description'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>