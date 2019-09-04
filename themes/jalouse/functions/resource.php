<?php
global $dir;

// stylesheets 登録
function add_stylesheet(){
  global $dir;
  wp_register_style('style', $dir['theme'] . '/css/min/style.css');
  wp_register_style('fontawesome', '//use.fontawesome.com/releases/v5.3.0/css/all.css');
  wp_register_style('googlefont', '//fonts.googleapis.com/css?family=EB+Garamond|Noto+Sans+JP:400,700,900&display=swap');
  // 読み込み
  wp_enqueue_style('style');
  wp_enqueue_style('googlefont');
  wp_enqueue_style('fontawesome');
}

// javascripts 登録
function add_javascripts(){
  global $dir;
  wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js');
  wp_register_script('cookie', '//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js');
  wp_register_script('swipebox', '//cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.4.4/js/jquery.swipebox.min.js');
  wp_register_script('main', $dir['theme'] . '/js/min/main.js');
  // 読み込み
  wp_enqueue_script('jquery');
  wp_enqueue_script('cookie');
  wp_enqueue_script('swipebox');
  wp_enqueue_script('main');
}

// 読み込み
add_action('wp_head', 'add_stylesheet', 1);
add_action('wp_footer', 'add_javascripts');

?>