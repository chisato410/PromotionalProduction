<?php
// 初期設定
function my_theme_support()
{
    //アイキャッチ画像の設定
    add_theme_support('post-thumbnails');
    //タイトルタグの出力
    add_theme_support('title-tag');
    // RSSフィールドの出力
    add_theme_support('automatic-feed-links');
    // HTML5に変換
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
};

add_action('after_setup_theme', 'my_theme_support');

// 余分な画像の生成を防ぐ
add_image_size('medium_large', 0, 0);
add_image_size('1536x1536', 0, 0);
add_image_size('2048x2048', 0, 0);

#区切り文字の変更
function change_title_separator($sep)
{
    $sep = ' | ';
    return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

//jsを追加
function my_script_output()
{
    wp_enqueue_script('my-script', get_theme_file_uri('/script.js'), array(''), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_output');

//cssを追加
function my_style_output()
{
    // Reset CSS
    wp_enqueue_style('reset', 'https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css');

    // Font Awesome5
    wp_enqueue_style('icon-font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css');

    // google font
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet');

    // style.css
    wp_enqueue_style('style-name', get_template_directory_uri() . '/css/style.min.css', array(), date('YmdGis', filemtime(get_theme_file_path() . '/css/style.min.css')), 'all');
}
add_action('wp_enqueue_scripts', 'my_style_output');

//jsにasync属性を付与
if (!(is_admin() )) {
function add_async_to_enqueue_script( $url ) {
if ( FALSE === strpos( $url, '.js' ) ) return $url;
if ( strpos( $url, 'jquery.js' ) ) return $url; //対象外
if ( strpos( $url, 'jquery.min.js' ) ) return $url;
if ( strpos( $url, 'jquery-colorbox-wrapper-min.js' ) ) return $url;
if ( strpos( $url, 'jquery.flexslider.min.js' ) ) return $url;
return "$url' async charset='UTF-8"; // async属性を付与
}
add_filter( 'clean_url', 'add_async_to_enqueue_script', 11, 1 );
}


// ダッシュボードの編集
function remove_dashboard_widgets() {
    // 「クイックドラフト」ウィジェットを削除
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    // 「WordPressニュース」ウィジェットを削除
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    // 「アクティビティ」ウィジェットを削除
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    // その他の不要なウィジェットを追加で削除できます
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
?>
