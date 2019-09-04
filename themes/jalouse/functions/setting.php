<?php
global $dir, $url, $site;

$dir = [];
$dir['theme'] = get_bloginfo('template_directory', 'display');
$dir['img'] = get_bloginfo('template_directory', 'display') . '/images';
$dir['audio'] = get_bloginfo('template_directory', 'display') . '/audio';

$site = [];
$site['title'] = get_bloginfo('name', 'display');
$site['description'] = get_bloginfo('description', 'display');
$site['url'] = get_bloginfo('url', 'display');

$url = [];
$language = wpm_get_user_language();
$url['home_language'] = '';
if ($language !== 'ja') {
  $url['home_language'] = '/' . $language;
}


// 多言語ファイルの読み込み
// https://www.webcreatorbox.com/tech/import-qtranslate-wpml
load_theme_textdomain('jalouse', get_template_directory() . '/languages');

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
  // width height を削除する
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  // class を削除する
  $html = preg_replace('/class=".*\w+"\s/', '', $html);
  return $html;
}

// 投稿を使うための設定
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'information'; // アーカイブページのスラッグ
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>