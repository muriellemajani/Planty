<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_filter('wp_nav_menu_items', 'planty_admin_nav');
function planty_admin_nav($items)
{
    if (is_user_logged_in()) {
        $newItem = '<li class="lienAdmin menu-item menu-item-48"><a href="' . get_admin_url() . '">Admin</a></li>';
        $adminItem = '</li>' . $newItem . '<li>';
        $items = preg_replace('</li>', $adminItem,  $items, 1);
    }
    return $items;
}
