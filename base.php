<?php

use Roots\myTemplate\Setup;
use Roots\myTemplate\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <body <?php body_class(); ?>>
        <!--[if IE]>
          <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'mytemplate'); ?>
          </div>
        <![endif]-->
        <?php
        do_action('get_header');
        get_template_part('templates/header');
        ?>
        <div class="wrap container" role="document">
            <div class="content row">
                <?php if (Setup\display_left_sidebar()) : ?>
                    <?php if (is_active_sidebar('sidebar-left')) : ?>
                        <aside class="sidebar left">
                            <?php include Wrapper\sidebar_left_path(); ?>
                        </aside><!-- /.sidebar .left-->
                    <?php endif; ?>
                <?php endif; ?>
                <main class="main">
                    <?php include Wrapper\template_path(); ?>
                </main><!-- /.main -->
                <?php if (Setup\display_right_sidebar()) : ?>
                    <?php if (is_active_sidebar('sidebar-right')) : ?>
                        <aside class="sidebar right">
                            <?php include Wrapper\sidebar_right_path(); ?>
                        </aside><!-- /.sidebar .right-->
                    <?php endif; ?>
                <?php endif; ?>
            </div><!-- /.content -->
        </div><!-- /.wrap -->
        <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
        ?>
    </body>
</html>
