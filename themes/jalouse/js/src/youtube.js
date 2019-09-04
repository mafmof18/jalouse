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