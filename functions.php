<?php

/*=============
カスタム投稿の追加
===============*/
function create_post_type() {
    register_post_type( //投稿タイプを作成
        'news',
        array( //オプション
            'label' => 'ニュース',   //管理画面での投稿タイプの名前
            'public' => true,   //投稿タイプの管理画面上の表示有効化
            'has_archive' => true,  //カスタム投稿タイプの一覧ページを作成
            'menu_position' => 5,   //管理画面左のメニューのどの位置に表示するか '5' '10' '20' '4'
            'show_in_rest' => true, //ブロックエディタの有効化
            'supports' => array(    //編集画面で使用できる項目の追加
                'title',    
                'editor',
                'thumbnail',    //アイキャッチ画像
                'revisions',    //投稿の変更の自動保存
            ),
        ),
    );
}

add_action('init', 'create_post_type');

/*=============
カスタムタクソノミーの追加
===============*/
function custom_taxonomy_cat() {
    register_taxonomy(  //カスタムタクソノミーの追加
        'news-cat', //カテゴリーの名前
        'news', //カテゴリーを追加したいカスタム投稿タイプ名
        array(
            'label' => 'ニュースのカテゴリー', //表示名
            'public' => true,   //管理画面に表示するか
            'hierarchical' => true, //階層を持たせるか。trueだとカテゴリー、falseだとタグのようになる
            'show_in_rest' => true, //ブロックエディタの有効化
        ),
    );
}
    
add_action('init', 'custom_taxonomy_cat');

/*=============
タグのカスタムタクソノミーの追加
===============*/
function custom_taxonomy_tag() {
    register_taxonomy(
        'news-tag', //タグの名前
        'news', //タグを追加したいカスタム投稿タイプ名
        array(
            'label' => 'ニュースタグ', //表示名
            'public' => true,   //管理画面に表示するか
            'hierarchical' => false, //階層を持たせるか。trueだとカテゴリー、falseだとタグのようになる
            'show_in_rest' => true, //ブロックエディタの有効化
            'update_count_callback' => '_update_post_term_count',   //カスタムタクソノミーをタグで使う場合、必ず記述する！
        )
    );
}

add_action('init', 'custom_taxonomy_tag');

/*=============
ファイル読み込み
===============*/
function add_files() {
    // メインのCSSファイル
    wp_enqueue_style('main-style', get_theme_file_uri('/dist/assets/css/style.css'));
    // メイン以外のCSSファイル
    wp_enqueue_style('swiper-style', get_theme_file_uri('/dist/assets/css/swiper.css'));
    // JavaScriptファイル
    wp_enqueue_script('main-script', get_theme_file_uri('/dist/assets/js/main.js'), array(), '', true);
}

add_action('wp_enqueue_scripts', 'add_files');

/*=============
テーマ設定
===============*/
function theme_setup(){
    // titleタグ
    add_theme_support('title-tag');

    // アイキャッチ画像
    add_theme_support('post-thumbnails');

    // メニュー
    register_nav_menus(
        array(
            'header-nav' => 'ヘッダーのナビゲーション',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');