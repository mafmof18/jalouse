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