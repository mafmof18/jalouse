<?php
global $dir, $site;

$dir = [];
$dir['theme'] = get_bloginfo('template_directory', 'display');
$dir['img'] = get_bloginfo('template_directory', 'display') . '/images';

$site = [];
$site['title'] = get_bloginfo('name');
$site['description'] = get_bloginfo('description');
$site['url'] = get_bloginfo('url');

// 多言語ファイルの読み込み
// https://www.webcreatorbox.com/tech/import-qtranslate-wpml
load_theme_textdomain('jalouse', get_template_directory() . '/languages');

// アイキャッチ画像を有効にする。
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    // class を削除する
    $html = preg_replace('/class=".*\w+"\s/', '', $html);
    return $html;
}
?>