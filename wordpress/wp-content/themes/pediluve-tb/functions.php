<?php 

//function declaration
function pediluvetb_register_assets(){
    wp_register_style('style', 'insérer/lien/vers/stylesheet');
    wp_enqueue_style('style');
}

//function calling
add_theme_support('title-tag');

//adding an action after the first parameter is called
//add_action('after_setup_theme', 'pediluvetb_register_assets');