// spグロナビ
$("#menu-icon").on("click", function(){
  $("#header .inner").slideToggle();
  $(this).toggleClass("active");

  // メニュー内のリンク押したらスライドが閉じる
  $("#header nav a").on("click", function(){
    $("#header .inner").slideUp('fast');
    $("#menu-icon").removeClass("active");
    return false;
  });
});

// スムーススクロール
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    // グロナビしか使ってないので、位置調整の為「-60」をセット
    var position = target.offset().top - 10;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

// swipebox
$(function(){
  $('.swipebox').swipebox();
});
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
/*
var sound = new Howl({
  src: ['/wp-content/themes/jalouse/sound/bgm/jalouse_crossfade.mp3'],
  autoplay: true,
  loop: true,
  volume: 0.1,
});

play.addEventListener("click", e => {
  sound.play(); // 一時停止したところから再生
  sound.fade(1, 0, 10000);
});

pause.addEventListener("click", e => {
  sound.pause(); // 一時停止
});
// voice 再生
(function (window, $) {
  'use strict';

  $.fn.useSound = function (_event, _id) {
    var se = $(_id);
    this.on(_event, function(){
      se[0].currentTime = 0;
      se[0].play();
    });
    return this;
  };

})(this, this.jQuery);

$('#voice1').useSound('mousedown touchstart', '#sound');
$('#voice2').useSound('mousedown touchstart', '#sound2');
*/
(function (window, $) {
  'use strict';

  $.fn.useSound = function (_event, _id) {
    var se = $(_id);
    this.on(_event, function(){
      se[0].currentTime = 0;
      se[0].play();
    });
    return this;
  };

})(this, this.jQuery);

$('#btn').useSound('mousedown touchstart', '#btnsound');
$('#btn2').useSound('mousedown touchstart', '#btnsound2');