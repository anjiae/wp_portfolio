<?php

define('ANGIEPORTFOLIO', get_stylesheet_directory_uri());
define('IMAGES', ANGIEPORTFOLIO . '/images');
define('CSS', ANGIEPORTFOLIO . '/css');
define('JS', ANGIEPORTFOLIO . '/js');

/* THEME SETUP */
if (!function_exists('angie_theme_setup')) {
  function angie_theme_setup()
  {

    /* thumbnails */
    add_theme_support('post-thumbnails');

    /* menu */
    register_nav_menus(array(
      'main-menu' => __('Main Menu', 'angie'),
      'portfolio-menu' => __('Portfolio Menu', 'angie')
    ));
  }
  add_action('after_setup_theme', 'angie_theme_setup');
}

/* Script && CSS */
if (!function_exists('angie_scripts')) {
  function angie_scripts()
  {
    /* Register script */
    wp_register_script('modernizr-js', JS . '/modernizr.min.js', false, false, false);
    wp_register_script('isotope', JS . '/isotope.pkgd.min.js', true, false, false);
    wp_register_script('main-js', JS . '/main.js', true, false, false);
    wp_register_script('jquery-js', JS . '/jquery.js', false, false, true);


    // load script
    wp_enqueue_script('modernizr-js');
    wp_enqueue_script('isotope');
    wp_enqueue_script('main-js');
    wp_enqueue_script('jquery-js');

    // Css load
    wp_enqueue_style('common-css', CSS . '/common.css');
    wp_enqueue_style('main-css', CSS . '/main.css');
    wp_enqueue_style('page-css', CSS . '/page.css');
    wp_enqueue_style('responsive-css', CSS . '/responsive.css');
  }
  add_action('wp_enqueue_scripts', 'angie_scripts');
}


// Custom My Pagination
if (!function_exists('myPagination')) {
  function myPagination()
  {
    global $wp_query;
    $current = get_query_var('paged') ? (int) get_query_var('paged') : 1;
    $total_pages = $wp_query->max_num_pages;
    $args = array(
      'current' => $current,
      'prev_next' => true,
      'prev_text' => '<i class="fas fa-long-arrow-alt-left"></i>',
      'next_text' => '<i class="fas fa-long-arrow-alt-right"></i>',
      'type' => 'array',
      'total' => $total_pages
    );
    $pagination = paginate_links($args);
    if (is_array($pagination)) {
      echo '<div class="myPagination">';
      foreach ($pagination as $page) {
        if (strpos($page, 'current')) {
          echo '<span class="active">' . $page . '</span>';
        } else {
          echo '<span>' . $page . '</span>';
        }
      }
      echo '</div>';
    }
  }
}
