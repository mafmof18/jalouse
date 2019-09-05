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
