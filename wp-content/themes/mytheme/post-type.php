<?php
add_action('init', 'my_custom_init');
function my_custom_init()
{
  $labels = array(
    'name' => '新闻',
    'singular_name' => '新闻',
    'add_new' => '添加新闻',
    'add_new_item' => '添加新闻',
    'edit_item' => 'edit_item',
    'new_item' => 'new_item',
    'view_item' => '查看',
    'search_items' => 'search_items',
    'not_found' =>  'not_found',
    'not_found_in_trash' => 'not_found_in_trash',
    'parent_item_colon' => '',
    'menu_name' => '集团新闻'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  );
  register_post_type('news',$args);
}
?>
