<?php


/**
 * Register Custom Navigation Walker
 */

function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/* Add the CSS and Js Files*/

function gt_setup(){
  wp_enqueue_style('bootstrap-resoponsive', get_template_directory_uri() . '/css/bootstrap-resoponsive.min.css');
  wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap');
	wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main2.css');
	wp_enqueue_style('style', get_stylesheet_uri(), Null, microtime(), all);
  wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.min.css');

  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'gt_setup');

/* Adding Theme Support */

function gt_init(){
	add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
	add_theme_support('title-tag');
	add_theme_support('html5', 
     array('comment-list', 'comment-form', 'search-form')
     );
}

add_action('after_setup_theme', 'gt_init');

/* Projects Post Type */

function gt_custom_post_type(){
	register_post_type('project',
      array(
      	'rewrite' => array('slug' => 'projects'),
      	'labels' => array(
      		'name' => 'Projects',
      		'singular_name' => 'Project',
      		'add_new_item' => 'Add New Project',
      		'edit_item' => 'Edit Project'
      	),
      	'menu-icon' => 'dashicons-clipboard',
      	'public' => true,
      	'has_archive' => true,
      	'supports' => array(
      		'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      	)
      )
     );
}

add_action('init', gt_custom_post_type);

/* Lead Generation Post Type */

function gt_lead_post_type(){
  register_post_type('Lead Generation',
      array(
        'rewrite' => array('slug' => 'lead_generation'),
        'labels' => array(
          'name' => 'Lead Generation',
          'singular_name' => 'Lead Generation',
          'add_new_item' => 'Add New Lead Generation',
          'edit_item' => 'Edit Lead Generation'
        ),
        'menu-icon' => 'dashicons-admin-customizer',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
     );
}

add_action('init', gt_lead_post_type);

/* Web Services Post Type */

function web_post_type(){
  register_post_type('Web Development',
      array(
        'rewrite' => array('slug' => 'Web Development'),
        'labels' => array(
          'name' => 'Web Development',
          'singular_name' => 'Web Development',
          'add_new_item' => 'Add New Web Development',
          'edit_item' => 'Edit Web Development'
        ),
        'menu-icon' => 'dashicons-editor-removeformatting',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
     );
}

add_action('init', web_post_type);


/* Work Post Type */

function work_post_type(){
  register_post_type('Work',
      array(
        'rewrite' => array('slug' => 'Work'),
        'labels' => array(
          'name' => 'Work',
          'singular_name' => 'Work',
          'add_new_item' => 'Add New Work',
          'edit_item' => 'Edit Work'
        ),
        'menu-icon' => 'dashicons-editor-removeformatting',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
     );
}

add_action('init', work_post_type);


/* Portfolio Post Type */

function portfolio_post_type(){
  register_post_type('Portfolio',
      array(
        'rewrite' => array('slug' => 'Portfolio'),
        'labels' => array(
          'name' => 'Portfolio',
          'singular_name' => 'Portfolio',
          'add_new_item' => 'Add New Portfolio',
          'edit_item' => 'Edit Portfolio'
        ),
        'menu-icon' => 'dashicons-editor-removeformatting',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
      )
     );
}

add_action('init', portfolio_post_type);



/* Sidebar */

function gt_widgets(){
  register_sidebar(
    array(
      'name' => 'Main Sidebar',
      'id' => 'main sidebar',
      'before_title' => '<h3>',
      'after_title' => '<h3>'
    )
  );
}

add_action('widgets_init', 'gt_widgets');

/* Register Menu */

function register_profotech_theme(){
 register_nav_menus(array(
  'primary-menu' => __('Primary Menu'),
  'footer-menu' => __('Footer Menu')
)
);
}

add_action('after_setup_theme', 'register_profotech_theme');


/* Filters */

function search_filter($query){
  if($query->is_search()){
    $query->set('post_type', array('post', 'project'));
  }
}

add_filter('pre_get_posts', 'search_filter');

















