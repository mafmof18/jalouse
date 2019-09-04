// spグロナビ
$("#menu-icon").on("click", function(){
  $("#header .inner").slideToggle();
  $(this).toggleClass("active");
  $("body").toggleClass("noscroll");

  // メニュー内のリンク押したらスライドが閉じる
  $("#header nav a").on("click", function(){
    $("#header .inner").slideUp('fast');
    $("#menu-icon").removeClass("active");
    $("body").removeClass("noscroll");
    return false;
  });
});

// スムーススクロール
$('a[href^="#"]').click(function(){
  var speed = 500;
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  // グロナビしか使ってないので、位置調整の為「-60」をセット
  var position = target.offset().top - 10;
  $("html, body").animate({scrollTop:position}, speed, "swing");
  return false;
});

// swipebox
$('.swipebox').swipebox();
/************************************************************
 * Confirm Modal Plugin V1.0
 * https://github.com/klutche/confirm_modal
 * Released under the MIT license
 ************************************************************/

$(function(){
  var modal = $(".certification");//モーダルウインドウのクラス
  var opacity = 1;//モーダル背景の透明度
  var button = $(".close_modal");//モーダル解除ボタンのクラス
  var limit = 120;//Cookieの有効期限(分)
  var cookie = $.cookie("modal");
  if(cookie !== "off"){
    var overlay = $("<div></div>");
    overlay.css({
      "position":"fixed",
      "z-index":100,
      "top":0,
      "left":0,
      "height":100+"%",
      "width":100+"%",
      "background":"#f7f7f7",
      "opacity":opacity
    });
    $("body").append(overlay);
    modal.css("display", "block");
  }
  button.click(function(){
    $(overlay).fadeOut("slow");
    $(modal).hide();
    var clearTime = new Date();
    clearTime.setTime(clearTime.getTime()+(limit*60*1000));
    $.cookie("modal", "off", {expires:clearTime, path:"/"});
  });
  $(".remove_cookie").click(function(){
    $.removeCookie("modal", {expires:-1, path:"/"});
    location.reload();
  });
});

$(function () {

  // モーダルのボタンをクリックした時
  $('.modal_trigger .modal_btn').on('click', function() {
    var btnIndex = $(this).index(); // 何番目のモーダルボタンかを取得
    $('.modal_area .modal_box').eq(btnIndex).fadeIn(); // クリックしたモーダルボタンと同じ番目のモーダルを表示する

    scrollPosition = $(window).scrollTop();
    $('body').addClass('noscroll').css({'top': -scrollPosition});
  });

  // ×やモーダルの背景をクリックした時
  $('.modal_close , .modal_bg').click(function(){
    $('.modal_box').fadeOut(); // モーダルを非表示にする

    $('body').removeClass('noscroll').css({'top': 0});
    window.scrollTo( 0 , scrollPosition );
  });
});
(function (window, $) {
  'use strict';

   var $prevVoice = '';
   var $bgm = $('#bgm').get(0);
   // フォーカスが外れたときのための判定
   var isBGM = false;

  $('.audio').on('click', function() {
    voicePause();
    // bgmが再生中なら音量を小さくする
    if (isBgm()) {
      $bgm.volume = 0.2;
    }
    $prevVoice = $(this).find('audio').get(0);
    $prevVoice.play();

    $prevVoice.addEventListener('ended', function(){
      $bgm.volume = 1;
    });

  });

  $('.bgm-on, .bgm-off').on('click', function() {
    voicePause();
    if (isBgm()) {
      $bgm.pause();
      $('.bgm-on').removeClass('active');
      $('.bgm-off').addClass('active');
      isBGM = false;
    } else {
      $bgm.volume = 1;
      $bgm.play();
      $('.bgm-off').removeClass('active');
      $('.bgm-on').addClass('active');
      isBGM = true;
    }
  });
/* フォーカスが外れたら再生を停止
  $(window).on('focus', function() {
    if (isBGM) {
      $bgm.volume = 1;
      $bgm.play();
    }
  }).on('blur', function() {
    voicePause();
    $bgm.pause();
  });
*/
  function isBgm() {
    return ($bgm.duration > 0 && ! $bgm.paused);
  }

  function voicePause() {
    if ($prevVoice !== '') {
      $prevVoice.pause();
      $prevVoice.currentTime = 0;
    }
  }

})(this, this.jQuery);

  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '360',
      width: '640',
      videoId: '69LwzS5rv_Y',
      events: {
        'onReady': onPlayerReady //プレイ準備完了時の動作
      },
      playerVars: {
        rel: 0,
        playlist: '69LwzS5rv_Y',
        loop: 1,
        controls: 0,
        autoplay: 1,
        showinfo: 0
      }
    });
  }

  function onPlayerReady(event) {
    event.target.playVideo();　// 動画再生
    event.target.mute();　// ミュートにする
}