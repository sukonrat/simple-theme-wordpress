<?php

function simple_theme_setup() {
    //Featured image support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simple_theme_setup');


// Excerpt length
function set_excerpt_length(){
    return 25;
}

add_filter('excerpt_length', 'set_excerpt_length');
?>