<header class="banner">

    <nav class="navbar navbar-custom nav-primary" role="navigation">
        <div class="container-fluid nav-container">
            <div class="brand navbar-header">
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <div class="cssmenu header-menu">
                <div id='menu-line'></div>
                <div class="menu-button"></div>
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