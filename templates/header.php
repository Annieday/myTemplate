<header class="banner">

    <nav class="navbar navbar-custom sticky-header nav-primary" role="navigation">
        <div class="container-fluid nav-container">
            <div class="brand navbar-header">
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <div id="cssmenu">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(array(
                                'container'       => '',
                                'container_class' => false,
                                'theme_location'    => 'primary_navigation',
                                )
                               );
                endif;
                ?>
            </div>
        </div>
    </nav>

</header>