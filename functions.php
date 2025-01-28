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


// ウェルカムパネル削除
function remove_welcome_panel()
{
    remove_action('welcome_panel', 'wp_welcome_panel');
}
add_action('admin_head', 'remove_welcome_panel');

// ダッシュボードの編集
function remove_dashboard_widgets() {
    // 「クイックドラフト」ウィジェットを削除
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    // 「WordPressニュース」ウィジェットを削除
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    // 「アクティビティ」ウィジェットを削除
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

function remove_yoast_dashboard_widgets() {
    // Yoast SEOのダッシュボードウィジェットを削除
    remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'remove_yoast_dashboard_widgets');


// サイドバーの編集
function remove_admin_menu_items() {
    // 「投稿」を非表示にする
    remove_menu_page('edit.php');
    // 「コメント」を非表示にする
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_admin_menu_items');


function add_manual_pdf_widget()
{
    wp_add_dashboard_widget(
        'custom_manual_widget', // ウィジェットID（ユニークにする必要があります）
        '操作マニュアル', // ウィジェットのタイトル
        'display_manual_pdf_widget' // ウィジェットの内容を表示する関数
    );
}

function display_manual_pdf_widget()
{
    // PDFリンクを表示
    echo '<p>こちらは操作マニュアルです。ご不明な点があればこちらをご覧ください。</p>';
    echo '<p>操作マニュアルはPDF形式です。</p>';
    echo '<p>ログイン方法<a href="https://example.com/manual.pdf" target="_blank" style="font-weight: bold; text-decoration: none; color: #0073aa;">操作マニュアルを閲覧する</a></p>';
    echo '<p>何かご不明点があれば、管理者にお問い合わせください。</p>';
}

add_action('wp_dashboard_setup', 'add_manual_pdf_widget');
?>
