
<footer class="site-footer content-info">

    <div class="site-footer-container container">

        <div class="site-footer-widgets">
            <?php get_template_part('templates/sidebar-footer'); ?>
        </div><!-- /footer-widgets -->

        <div class="site-footer-navigation">
            <?php
            if (has_nav_menu('footer_navigation')) :
                wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
            endif;
            ?>
        </div><!-- /footer-navigation -->

        <div class="site-info">

            <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

        </div><!-- .site-info -->

    </div><!-- .site-footer-container -->

</footer><!-- .site-footer -->
