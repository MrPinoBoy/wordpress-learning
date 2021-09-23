<?php
function pediluve_assets_getter() {
    wp_enqueue_style('style', get_stylesheet_uri(),null,microtime(),'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'),null,microtime(),true);
}

add_action('wp_enqueue_scripts', 'pediluve_assets_getter');
