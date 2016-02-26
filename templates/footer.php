<footer class="site-footer content-info">

    <div class="site-footer-container container">

        <div class="site-footer-widgets row">
            <?php get_template_part('templates/sidebar-footer'); ?>
        </div>
        <!-- /footer-widgets -->

        <nav class="navbar navbar-custom nav-footer" role="navigation">
            <div class="container">
                <?php
                if (has_nav_menu('footer_navigation')) :
                    wp_nav_menu(['theme_location' => 'footer_navigation',
                                 'container_class' => 'collapse navbar-collapse',
                                 'menu_class' => 'nav pull-left']);
                endif;
                ?>
            </div>
        </nav>
        <!-- /footer-navigation -->

        <div class="site-info">

            <p>
                <?php bloginfo('name'); ?> - &copy;
                    <?php echo date('Y'); ?>
            </p>

        </div>
        <!-- .site-info -->

    </div>
    <!-- .site-footer-container -->

</footer>
<!-- .site-footer -->