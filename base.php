<?php

use Roots\myTemplate\Setup;
use Roots\myTemplate\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <?php do_action('__before_body'); ?>
    <body <?php body_class(); ?>>
        <!--[if IE]>
          <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'mytemplate'); ?>
          </div>
        <![endif]-->
        <?php
        do_action('__before_header');
        do_action('get_header');
        get_template_part('templates/header');
        do_action('__after_header');
        ?>
        <?php do_action( '__before_main_wrapper' ); ?>
        <div class="main-wrapper">
            <div class="container" role="main">

                <div class="column-content-wrapper row">

                    <?php if (Setup\display_left_sidebar()) : ?>
                        <?php if (is_active_sidebar('sidebar-left')) : ?>
                            <aside class="sidebar left">
                                <?php include Wrapper\sidebar_left_path(); ?>
                            </aside><!-- /.sidebar .left-->
                        <?php endif; ?>
                    <?php endif; ?>

                    <main class="main">
                        <?php do_action( '__before_article_container'); ?>

                            <div id="content" class="article-container">
                                <?php do_action ('__before_loop'); ?>
                                <?php do_action ('__before_article'); ?>
                                   <article>
                                       <?php include Wrapper\template_path(); ?>
                                   </article>
                                <?php do_action ('__after_article'); ?>
                                <?php do_action ('__after_loop'); ?>

                            </div>
                            <?php do_action( '__after_article_container'); ?>
                    </main>
                    <!-- /.main -->
                    
                    <?php if (Setup\display_right_sidebar()) : ?>
                        <?php if (is_active_sidebar('sidebar-right')) : ?>
                            <aside class="sidebar right">
                                <?php include Wrapper\sidebar_right_path(); ?>
                            </aside><!-- /.sidebar .right-->
                        <?php endif; ?>
                    <?php endif; ?>

                </div><!-- /.row-->
                
            </div><!--/.container role: main-->
            
        </div><!-- /.main-wrapper -->
        <?php do_action( '__after_page_wrapper' ); ?>
        <?php
        do_action( '__before_footer' );
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
        do_action( '__after_footer' );
        ?>
    </body>
    <?php do_action( '__after_body' ); ?>
</html>
