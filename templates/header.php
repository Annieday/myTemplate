<header id="header" class="banner">

    <nav class="navbar navbar-custom nav-primary" role="navigation">
        <div class="header-nav-container container">
            <div class="row">
                <div class="brand navbar-header col-sm-3">
                    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>
                <div class="cssmenu header-menu col-sm-9">
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
        </div>
    </nav>

</header>