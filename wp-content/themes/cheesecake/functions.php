<?php

function my_setup() {
    /**
     * 不要記述削除
     */
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    /**
     * サムネイルサイズ定義
     */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'thumb_small', 350, 350 );
    add_image_size( 'thumb_medium', 500, 500 );
    add_image_size( 'thumb_large', 640, 640 );
    /**
     * 投稿フォーマット定義
     */
    // add_theme_support( 'post-formats', array( 'aside' ) );
    // add_post_type_support( 'blog', 'post-formats' );
    /**
     * タイトルタグ生成
     */
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'my_setup' );


function new_excerpt_more($more) {
    return '（続きを読む）';
}
add_filter('excerpt_more', 'new_excerpt_more');
