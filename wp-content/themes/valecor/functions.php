<?php
// Adiciona suporte ao tema
function meu_tema_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'meu_tema_setup');

// Enfileira scripts e estilos
function meu_tema_scripts()
{
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

function my_function_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'my_function_admin_bar');

function custom_menu()
{
    register_nav_menu('MenuPrincipal', __('Menu Principal'));
}
add_action('init', 'custom_menu');



require_once get_template_directory() . '/inc/options.php';