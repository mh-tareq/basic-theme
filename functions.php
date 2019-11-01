<?php
//require_once('/lib/enqueue-styles.php');

function basic_theme_enqueue_styles()
{
    wp_enqueue_style('w3_stylesheet', '//www.w3schools.com/w3css/4/w3.css');
    wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Raleway');
    wp_enqueue_style('main_stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'basic_theme_enqueue_styles');

//sidebar
function basic_theme_registering_sidebar()
{
    register_sidebar(array(
        'name'          => __('Primary Sidebar', '_themename'),
        'id'            => 'primary-sidebar',    // ID should be LOWERCASE  ! ! !
        'description'   => 'primary sidebar',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="%2$s margin-bottom">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="w3-container w3-padding"><h4>',
        'after_title'   => '</h4></div>'
    ));
}
add_action('widgets_init', 'basic_theme_registering_sidebar');
