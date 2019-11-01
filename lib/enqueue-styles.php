<?php

function basic_theme_enqueue_styles()
{
    wp_enqueue_style('w3_stylesheet', '//www.w3schools.com/w3css/4/w3.css');
}
add_action('wp_enqueue_scripts', 'basic_theme_enqueue_styles');
