<?php
//コンテンツ部分の最大幅をセット
if (! isset( $content_width)) {
    $content_width = 723;
}
function custom_theme_setup() {
    //head内にフィードリンクを出力
    add_theme_support('automatic-feed-links');

    //タイトルタグを動的に出力 head のtitleタグ不要
    add_theme_support( 'title-tag');

    //ブロックエディタ用CSSの有効化
    add_theme_support( 'wp-block-styles' );

    //埋め込みコンテンツをレスポンシブ対応に
    add_theme_support( 'wp-block-styles' );

    //アイキャッチ画像を有効化
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(231, 177, false );

    //カスタムメニューの有効化、メニューの位置を設定
    register_nav_menus(
        array(
            'globalnav' => 'グローバルナビゲーション',
        )
    );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function myportfolio_scripts() {
    wp_enqueue_style(
        'base-style',           //ハンドル名
        get_stylesheet_uri(),   //CSSファイルのパス
        array(),                //依存関係
        '1.0',                  //バージョン指定
        'all'                   //メディアタイプ
    );
}
add_action( 'wp_enqueue_scripts','myportfolio_scripts' );

//ウィジェットエリアの登録
function custom_widget_register() {
    register_sidebar( array(
        'name'          => 'サイドバーウィジェットエリア',
        'id'            => 'sidebar-widget',
        'description'   => 'ブログページのサイドバーに表示されます。',
        'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="c-widget__title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_widget_register');

/* AMPページ用設定 */
//フォント設定
function my_fonts( $data ){
    //Googleフォント syncopateの設定追加
    $data['font_urls']['syncopate'] = 'https://fonts.googleapis.com/css?family=Syncopate:700';
    //Font Awesome のアイコンフォントの設定を追加
    $data['font_urls']['font-awesome'] = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
    //Googleフォントmerriweatherの設定を削除
    unset($data['font_urls']['merriweather']);

    return $data;
}
add_filter( 'amp_post_template_data', 'my_fonts');
