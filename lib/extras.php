<?php

namespace Roots\myTemplate\Extras;

use Roots\myTemplate\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
    // Add page slug if it doesn't exist
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    // Add class if sidebar is active
    if (is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right')) {
        $classes[] = 'sidebar-left-right';
    } else if (is_active_sidebar('sidebar-left')) {
        $classes[] = 'sidebar-left';
    } else if (is_active_sidebar('sidebar-right')) {
        $classes[] = 'sidebar-right';
    }

    return $classes;
}

add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'mytemplate') . '</a>';
}

add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');
