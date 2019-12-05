<?php

// Adding the CSS and JS files

function lt_setup()
{
    // Styles
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('bootstrapcss', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('slickcss', get_theme_file_uri('/css/slick.css'));
    wp_enqueue_style('slickcss', get_theme_file_uri('/css/slick-theme.css'));
    wp_enqueue_style('slickcss', get_theme_file_uri('/css/pace.css'));
    wp_enqueue_style('style', get_stylesheet_uri());
    // Scripts
    wp_enqueue_script("slimjs", '//code.jquery.com/jquery-3.3.1.slim.min.js', null, '', true);
    wp_enqueue_script("popperjs", '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, '', true);
    wp_enqueue_script("bootstrapjs", '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, '', true);
    wp_enqueue_script("slickjs", get_theme_file_uri('/js/slick.min.js'), array('jquery'), '', true);
    wp_enqueue_script("pacejs", get_theme_file_uri('/js/pace.min.js'), null, '', true);
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), null, microtime(), true);
}

add_action('wp_enqueue_scripts', 'lt_setup');

// Ad Theme Support
function lt_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'lt_init');

// Projects Post Type

function lt_custom_post_type()
{
    register_post_type(
        'project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'All Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project',
            ),
            'menu_icon' => 'dashicons-archive',
            'public' => true,
            'has_archive' => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest' => true,
            'supports' => array(
                'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields',
            ),
            'taxonomies' => array('category'),
        )
    );
}

add_action('init', 'lt_custom_post_type');

// Sidebar
function lt_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'lt_widgets');

// Filters

function search_filter($query) {
    if ($query->is_search()) {
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');