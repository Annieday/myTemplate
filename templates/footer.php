<?php
?>
<footer class="site-footer content-info">
    
    <div class="site-footer-container container">
        <div class="row">
            <div class="site-footer-widgets col-sm-12">
                <div class="container">
                    <div class="row">
                        <?php get_template_part('templates/sidebar-footer'); ?>
                    </div>
                </div>
            </div>
            <!-- /footer-widgets -->

            <nav class="site-nav-footer navbar navbar-custom col-sm-12" role="navigation">
                <div class="cssmenu footer-menu">
                    <div class="menu-button"></div>
                    <?php
                        if (has_nav_menu('footer_navigation')) :
                        wp_nav_menu(array(
                                    'container'       => '',
                                    'container_class' => false,
                                    'theme_location' => 'footer_navigation',
                                    ));
                    endif;
                    ?>
                </div>
            </nav>
            <!-- /footer-navigation -->

            <div class="site-info col-sm-12">

                <p>
                    <?php bloginfo('name'); ?> - &copy;
                        <?php echo date('Y'); ?>
                </p>

            </div>
            <!-- .site-info -->
        </div>
        <!-- .row -->
    </div>
    <!-- .site-footer-container -->

</footer>
<!-- .site-footer -->