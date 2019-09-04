<?php global $dir, $url;
  get_header();
?>
<main>
  <section class="eyecatch">
    <div class="frame">
      <div class="inner">
        <div class="position-wrap">
          <h1 class="logo">
            <span>jalouse</span>
          </h1>
          <h2><?php _e('フルボイス純愛百合ADV', 'jalouse'); ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section id="information" class="information">
    <div class="frame">
      <div class="inner">
        <h1>WHAT'S NEW</h1>
        <ul>
        <?php
          $args = array(
            'posts_per_page' => 5 // 表示件数の指定
          );
          $posts = get_posts( $args );
          foreach ( $posts as $post ): // ループスタート
          setup_postdata( $post ); // 記事データ
        ?>
        <?php if(!empty(get_post_meta($post->ID , 'link' ,true))){ // カスタフィールド「link」が空か判定 ?>
        <li>
          <a href ="<?php echo get_post_meta($post->ID , 'link' ,true); ?>" class="list-frame" target="_blank">
            <?php the_post_thumbnail(); ?>
            <dl>
              <dt><?php the_title(); ?></dt>
              <dd><time><?php echo get_the_date('Y.m.d'); ?></time></dd>
            </dl>
          </a>
        </li>
        <?php } else { ?>
        <li>
          <div  class="list-frame">
            <?php the_post_thumbnail(); ?>
            <dl>
              <dt><?php the_title(); ?></dt>
              <dd><time><?php echo get_the_date('Y.m.d'); ?></time></dd>
            </dl>
          </div>
        </li>
        <?php } ?>
        <?php
          endforeach; // ループ終わり
          wp_reset_postdata(); // 直前のクエリを復元する
        ?>
        </ul>
        <p class="list">
          <a href="<?php echo $url['home_language']; ?>/information/"><?php _e('一覧', 'jalouse'); ?></a>
        </p>
      </div>
    </div>
  </section>

  <section id="introduction" class="introduction">
    <div class="frame">
      <div class="inner">
        <div class="content">
          <div class="layer">
            <h1>INTRODUCTION</h1>
            <dl>
              <dt><?php _e('『少女と罪 栞編 ～jalouse～』とは', 'jalouse'); ?></dt>
              <dd><?php _e('繊細な感情を描く、新進気鋭のインディーノベルゲームブランド『PurePurple』処女作<br>純文学“風”百合ビジュアルノベルゲーム『少女と罪』シリーズの第1作。', 'jalouse'); ?></dd>
              <dt><?php _e('豪華声優陣による、”完全”フルボイス', 'jalouse'); ?></dt>
              <dd><?php _e('本作は、台詞だけでなく、地の文まで全ての文章にボイスが付いております。<br>まるでラヂオドラマのような雰囲気を、豪華声優による読み上げと共にお楽しみください。<br>（メインキャスト：鈴香夏目/田中涼子/ひと美）', 'jalouse'); ?></dd>
              <dt><?php _e('本作専用のサウンドトラック', 'jalouse'); ?></dt>
              <dd><?php _e('BGMは既存の素材を使わず、全て本作オリジナルのものをプロの作曲家に作っていただきました。<br>美麗イラスト、ボイスと共に、本作の唯一無二の雰囲気を醸成します。（作曲：光田晋哉）<br>（右上のメニューからBGMのクロスフェードをご試聴いただけます）', 'jalouse'); ?></dd>
              <dt><?php _e('豊富な美麗イラスト', 'jalouse'); ?></dt>
              <dd><?php _e('24ものイベントCG（差分込み131枚）、30ものオリジナル背景画が収録されています。', 'jalouse'); ?></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="frame">
      <div class="inner">
        <div class="content">
          <div class="layer">
            <h1>STORY</h1>
            <p>
              <?php _e('長野県K町の山奥にひっそりと佇むミッションスクール、『聖純女学院』。<br>ここではこんな噂が囁かれていた。<br>”教会のマリア様にお願い事をすると、何でも一つ願いが叶う。<br>……と同時に、何か一つ、大切なものを失う”', 'jalouse'); ?>
            </p>
            <p>
              <?php _e('この学院に入学する『草壁　栞（くさかべ　しおり）』は、<br>美しい少女『茅ヶ崎　美姫（ちがさき　みき）』と同じ部屋で暮らすことになり、<br>次第に彼女の魅力に惹かれていく。', 'jalouse'); ?>
            </p>
            <p>
              <?php _e('しかしある日遭遇した美姫の”何か”は、<br>栞にある感情を抱かせる――', 'jalouse'); ?>
            </p>
            <p>
              <?php _e('―――これは、”欲望と代償”のお話―――', 'jalouse'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="character" class="character">
    <div class="frame">
      <div class="inner">
        <h1>CHARACTER</h1>
        <div class="bg"></div>
        <ul class="modal_trigger">
          <li class="modal_btn">
            <figure>
              <img src="<?php echo $dir['img']; ?>/common/chara_shiori.png">
              <legend>SHIORI<span>草壁 栞<br>(CV：鈴香夏目)</span></legend>
            </figure>
          </li>
          <li class="modal_btn">
            <figure>
              <img src="<?php echo $dir['img']; ?>/common/chara_miki.png">
              <legend>MIKI<span>茅ヶ崎 美姫<br>(CV：田中涼子)</span></legend>
            </figure>
          </li>
          <li class="modal_btn">
            <figure>
              <img src="<?php echo $dir['img']; ?>/common/chara_sister.png">
              <legend>SISTER<span>シスター<br>(CV：ひと美)</span></legend>
            </figure>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="frame">
      <div class="inner">
        <h1>GALLERY</h1>
        <div class="content">
          <ul>
            <li><a rel="gallery-1" href="<?php echo $dir['img']; ?>/common/gallery_01.jpg" class="swipebox"><img src="<?php echo $dir['img']; ?>/common/gallery_01.jpg"></a></li>
            <li><a rel="gallery-1" href="<?php echo $dir['img']; ?>/common/gallery_02.jpg" class="swipebox"><img src="<?php echo $dir['img']; ?>/common/gallery_02.jpg"></a></li>
            <li><a rel="gallery-1" href="<?php echo $dir['img']; ?>/common/gallery_03.jpg" class="swipebox"><img src="<?php echo $dir['img']; ?>/common/gallery_03.jpg"></a></li>
            <li><a rel="gallery-1" href="<?php echo $dir['img']; ?>/common/gallery_04.jpg" class="swipebox"><img src="<?php echo $dir['img']; ?>/common/gallery_04.jpg"></a></li>
            <li><a rel="gallery-1" href="<?php echo $dir['img']; ?>/common/gallery_05.jpg" class="swipebox"><img src="<?php echo $dir['img']; ?>/common/gallery_05.jpg"></a></li>
            <li><a rel="gallery-1" href="<?php echo $dir['img']; ?>/common/gallery_06.jpg" class="swipebox"><img src="<?php echo $dir['img']; ?>/common/gallery_06.jpg"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="movie" class="movie">
    <div class="frame">
      <div class="inner">
        <div id="ytplayer"></div>
        <div class="mask">
          <a class="swipebox" href="https://www.youtube.com/watch?v=69LwzS5rv_Y&feature=youtu.be">Play Movie</a>
        </div>
      </div>
    </div>
  </section>

  <section id="special" class="special">
    <div class="frame">
      <div class="inner">
        <h1>SPECIAL</h1>
          <?php if(function_exists('wp_bannerize')) wp_bannerize(); ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
