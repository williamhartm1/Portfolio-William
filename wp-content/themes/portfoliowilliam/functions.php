<?php
/*
 * Let WordPress manage the document title.
 * This theme does not use a * hard-coded <title> tag in the document head, WordPress provides it.
 */
add_theme_support('title-tag');

//menu options
add_theme_support('menus');

//search
add_theme_support('html5', array('search-form'));

//featured image
add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 180, 120, true);
add_image_size('normal-thumbnail', 600, 600, true);
add_image_size('banner-image', 1500, 400, true);
add_image_size('medium-image', 267, 200, true);

function theme_register_js()
{
    // jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', false, '3.3.1');
    wp_enqueue_script('jquery');

    // Font awesome
    wp_register_script('font_awesome', get_template_directory_uri() . '/js/fontawesome-all.min.js', 'jquery');
    wp_enqueue_script('font_awesome');

    // jQuery Popper
    wp_register_script('jquery_popper', get_template_directory_uri() . '/js/popper.min.js', 'jquery');
    wp_enqueue_script('jquery_popper');

    // Bootstrap
    wp_register_script('jquery_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery_bootstrap');
}

function theme_register_css()
{
    // Bootstrap CSS
    wp_register_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-min');

    // Bootstrap grid CSS
    wp_register_style('bootstrap_grid_min', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap_grid_min');

    // Custom style CSS
    wp_register_style('style_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style_css');
}

add_action('init', 'theme_register_js');
add_action('wp_enqueue_scripts', 'theme_register_css');

// file exists... require it.
require_once('bs4navwalker.php');


//register menu's
function set_menu_areas()
{
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'set_menu_areas');

//sidebar
register_sidebar(array(
    'id' => 'right-sidebar',
    'name' => 'Right Sidebar',
    'before_widget' => '<div class="the-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar hw-1
register_sidebar(array(
    'id' => 'hw-1',
    'name' => 'Home pagina Widget 1 (links)',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar hw-2
register_sidebar(array(
    'id' => 'hw-2',
    'name' => 'Home pagina Widget 2 (rechts)',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar hw-3
register_sidebar(array(
    'id' => 'hw-3',
    'name' => 'Widget 3 ( )',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar hw-4
register_sidebar(array(
    'id' => 'hw-4',
    'name' => 'Widget 4 ( )',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));


//sidebar project-1
register_sidebar(array(
    'id' => 'project-1',
    'name' => 'Project Widget 1',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar project-2
register_sidebar(array(
    'id' => 'project-2',
    'name' => 'Project Widget 2',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar project-3
register_sidebar(array(
    'id' => 'project-3',
    'name' => 'Project Widget 3',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar project-4
register_sidebar(array(
    'id' => 'project-4',
    'name' => 'Project Widget 4',
    'before_widget' => '<div class="home-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//sidebar Footer widget
register_sidebar(array(
    'id' => 'fw-1',
    'name' => 'Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//custom excerpt length
function custom_excerpt_length()
{
    return 40;
}

function custom_excerpt_more($more)
{
    return ' ...';
}

add_filter('excerpt_more', 'custom_excerpt_more');

add_filter('excerpt_length', 'custom_excerpt_length');

?>
