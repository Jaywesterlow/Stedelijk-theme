<?php

function stedelijk_theme_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main-theme.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/main-theme.js');
}

add_action('wp_enqueue_scripts', 'stedelijk_theme_assets');


function stedelijk_init_theme()
{
    register_nav_menu('main-menu',  __('Hoofdmenu'));
}

add_action('init', 'stedelijk_init_theme');   