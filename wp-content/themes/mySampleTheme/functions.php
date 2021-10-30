<?php

function load_stylesheets()
{

    wp_register_style('font',get_template_directory_uri(  ). './resources.css', array(), 1, 'all');
    //wp_register_style( $handle:string, $src:string|boolean, $deps:array, $ver:string|boolean|null, $media:string )
    wp_enqueue_style( 'font');
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets');
?>