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