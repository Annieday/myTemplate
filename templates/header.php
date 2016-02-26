<header class="banner">

    <nav class="navbar navbar-custom sticky-header nav-primary" role="navigation">
        <div class="container">
            <div class="brand navbar-header">
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation',
                                 'container_class' => 'collapse navbar-collapse',
                                 'menu_class' => 'nav pull-right']);
                endif;
                ?>
        </div>
    </nav>

</header>