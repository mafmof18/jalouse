<?php global $dir, $site; ?>
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="utf-8">
<meta name="description" content="<?php echo $site['description'] ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no, viewport-fit=cover" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $site['title'] ?></title>
<?php // fb ogp ?>
<meta property="og:title" content="<?php echo $site['title'] ?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php echo $site['description'] ?>" />
<meta property="og:url" content="<?php echo $site['url'] ?>" />
<meta property="og:image" content="<?php echo $dir['img'] ?>/common/ogp.jpg" />
<meta property="og:site_name" content="<?php echo $site['title'] ?>" />
<meta property="og:locale" content="ja_JP" />
<?php // iconfont 読み込み?>
<style>
@font-face {
  font-family: "svgfont";
  src: url('/wp-content/themes/jalouse/fonts/svgfont/files/svgfont.eot');
  src: url('/wp-content/themes/jalouse/fonts/svgfont/files/svgfont.eot?#iefix') format('eot'),
    url('/wp-content/themes/jalouse/fonts/svgfont/files/svgfont.woff') format('woff'),
    url('/wp-content/themes/jalouse/fonts/svgfont/files/svgfont.ttf') format('truetype'),
    url('/wp-content/themes/jalouse/fonts/svgfont/files/svgfont.svg#svgfont') format('svg');
  font-weight: normal;
  font-style: normal;
}
</style>
<link rel="shortcut icon" href="<?php echo $dir['img'] ?>/common/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="<?php echo $dir['img'] ?>/common/favicon.ico" type="image/vnd.microsoft.icon" />
<?php wp_head(); ?>
<?php get_template_part('partials/analytics'); ?>

</head>

<body>

<audio id="bgm" preload="auto" loop>
  <source src="<?php echo $dir['audio'] ?>/bgm/jalouse_crossfade.mp3" loop type="audio/mp3">
</audio>

<header id="header">
  <div class="frame">
  <?php  if ( is_front_page() && is_home() ) { ?>
    <ul class="list">
      <li id="menu-icon" class="menu"></li>
    </ul>
  <?php } ?>
  </div>

  <nav class="inner">
    <ul class="menu">
      <li><a href="#information">WHAT'S NEW</a></li>
      <li><a href="#introduction">INTRODUCTION</a></li>
      <li><a href="#story">STORY</a></li>
      <li><a href="#character">CHARACTER</a></li>
      <li><a href="#gallery">GALLERY</a></li>
      <li><a href="#movie">MOVIE</a></li>
      <li><a href="#special">SPECIAL</a></li>
    </ul>

    <dl class="sound">
      <dt>SOUND</dt>
      <dd>
        <ul>
          <li id="bgm-on" class="on"></li>
          <li id="bgm-off" class="off active"></li>
        </ul>
      </dd>
    </dl>
  </nav>
</header>