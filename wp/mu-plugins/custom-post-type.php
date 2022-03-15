<?php
// custom post-type 
add_action('init', 'angie_mypost');
function angie_mypost()
{
  register_post_type('portfolio', array(
    'public' => true,
    'labels' => array(
      'name' => __('Portfolios'),
      'all_items' => __('All'),
      'add_new_item' => __('Add New Portfolio'),
      'name_admin_bar' => __('Portfolios'),
      'add_new' => __('Add New'),
      'edit_item' => __('Edit Portfolio'),
      'singlular_name' => __('portfolio')
    ),
    'supports' => array('title', 'editor', 'thumbnail'),
    'map_meta_cat' => true,
    'show_ui' => true,
    'has_archive' => true,
  ));
}

// custom category for portfolios
add_action('init', 'portfolio_category');
function portfolio_category()
{
  register_taxonomy(
    'pf_category',
    'portfolio',
    array(
      'label' => __('category'),
      'rewrite' => array('slug' => 'portfolios'),
      'hierarchical' => true
    )
  );
}
