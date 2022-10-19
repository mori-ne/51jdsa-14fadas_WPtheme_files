<?php

// js,スタイルシート読み込み
function add_css()
{
    //全てのページにstyle.cssを読み込み
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('script_jquery', get_template_directory_uri() . '/js/jquery-3.6.1.min.js', array(), '3.6.1', true);
}
add_action('wp_enqueue_scripts', 'add_css');



// メニューバー追加
register_nav_menu('globalMenu', 'グローバルメニュー');



// titleタグ動的生成
function setup_my_theme()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'setup_my_theme');



// titleセパレータ変更
function title_separator_change($sep)
{
    $sep = '|';
    return $sep;
}

add_filter('document_title_separator', 'title_separator_change');



// ウィジェットエリア生成
register_sidebar(array(
    'name' => 'バナーエリア',
    'id' => 'widget-01',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));
