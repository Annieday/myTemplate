<?php

namespace Roots\myTemplate\Setup;

use Roots\myTemplate\Assets;

/**
 * Theme setup
 */
function setup() {
    // Make theme available for translation

    load_theme_textdomain('mytemplate', get_template_directory() . '/lang');

    // Enable plugins to manage the document title
    // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
    add_theme_support('title-tag');

    // Register wp_nav_menu() menus
    // http://codex.wordpress.org/Function_Reference/register_nav_menus
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'mytemplate'),
        'footer_navigation' => __('Footer Navigation', 'mytemplate')
    ]);

    // Enable post thumbnails
    // http://codex.wordpress.org/Post_Thumbnails
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    add_theme_support('post-thumbnails');
    add_image_size('w800', 800);
    add_image_size('w640', 640);
    add_image_size('w360', 360);
    // Enable post formats
    // http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

    // Enable HTML5 markup support
    // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    // Use main stylesheet for visual editor
    // To add custom styles edit /assets/styles/layouts/_tinymce.scss
    add_editor_style(Assets\asset_path('styles/main.css'));
}

add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
    register_sidebar([
        'name' => __('Sidebar Right', 'mytemplate'),
        'id' => 'sidebar-right',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ]);
    register_sidebar([
        'name' => __('Sidebar Left', 'mytemplate'),
        'id' => 'sidebar-left',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ]);

    register_sidebars(3, [
        'name' => __('Sidebar Footer %d', 'mytemplate'),
        'id' => 'sidebar-footer',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ]);
}

add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should display the right sidebar
 */
function display_right_sidebar() {
    static $display;

    isset($display) || $display = in_array(false, [
        // The sidebar will NOT be displayed if ANY of the following return true.
        // @link https://codex.wordpress.org/Conditional_Tags
        is_home(),
    ]);

    return apply_filters('mytemplate/display_right_sidebar', $display);
}

/**
 * Determine which pages should display the sidebar
 */
function display_left_sidebar() {
    static $display;

    isset($display) || $display = in_array(false, [
        // The sidebar will NOT be displayed if ANY of the following return true.
        // @link https://codex.wordpress.org/Conditional_Tags
        is_home(),
    ]);

    return apply_filters('mytemplate/display_left_sidebar', $display);
}

    add_theme_support('menus');
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'top-menu' => 'Top Menu'
            )
        );
    }
/**
 * Theme assets
 */
function assets() {
    wp_enqueue_style('mytemplate/css', Assets\asset_path('styles/main.css'), false, null);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('mytemplate/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
    wp_enqueue_script('mytemplate/js/navigation', Assets\asset_path('scripts/components/navigation.js'), ['jquery'], null, true);
    wp_enqueue_script('mytemplate/js/skip-link-focus', Assets\asset_path('scripts/common/skip-link-focus-fix.js'), ['jquery'], null, true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
