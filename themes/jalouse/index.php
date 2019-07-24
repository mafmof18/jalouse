<?php global $dir;
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
          <h2><?php _e('純文学レズビアン 恋愛ADV', 'jalouse'); ?></h2>
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
          <a href ="<?php echo get_post_meta($post->ID , 'link' ,true); ?>" target="_blank">
            <?php the_post_thumbnail(); ?>
            <dl>
              <dt><?php the_title(); ?></dt>
              <dd><time><?php echo get_the_date('Y.m.d'); ?></time></dd>
            </dl>
          </a>
        </li>
        <?php } else { ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <dl>
              <dt><?php the_title(); ?></dt>
              <dd><time><?php echo get_the_date('Y.m.d'); ?></time></dd>
            </dl>
          </a>
        </li>
        <?php } ?>
        <?php
          endforeach; // ループ終わり
          wp_reset_postdata(); // 直前のクエリを復元する
        ?>
        </ul>
        <p><a href="">一覧へ</a></p>
      </div>
    </div>
  </section>

  <section id="introduction" class="introduction">
    <div class="frame">
      <div class="inner">
        <h1>INTRODUCTION</h1>
        <div class="content">
          <dl>
            <dt>『少女と罪 栞編 ～jalouse～』とは</dt>
            <dd>繊細な感情を描く、新進気鋭のインディーノベルゲームブランド『PurePurple』処女作<br>純文学“風”百合ビジュアルノベルゲーム『少女と罪』シリーズの第1作。</dd>
            <dt>豪華声優陣による、”完全”フルボイス</dt>
            <dd>本作は、台詞だけでなく、地の文まで全ての文章にボイスが付いております。<br>まるでラヂオドラマのような雰囲気を、豪華声優による読み上げと共にお楽しみください。<br>（メインキャスト　草壁栞：鈴香夏目/茅ヶ崎美姫：一色ヒカル/シスター：北都南）</dd>
            <dt>本作専用のサウンドトラック</dt>
            <dd>BGMは既存の素材を使わず、全て本作オリジナルのものをプロの作曲家に作っていただきました。<br>美麗イラスト、ボイスと共に、本作の唯一無二の雰囲気を醸成します。（作曲：光田晋哉）</dd>
            <dt>豊富な美麗イラスト</dt>
            <dd>製品版には60ものイベントCG、30ものオリジナル背景画が収録される予定です。</dd>
          </dl>
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
              <legend>SHIORI<span>草壁 栞</span></legend>
            </figure>
          </li>
          <li class="modal_btn">
            <figure>
              <img src="<?php echo $dir['img']; ?>/common/chara_miki.png">
              <legend>MIKI<span>茅ヶ崎 美姫</span></legend>
            </figure>
          </li>
          <li class="modal_btn">
            <figure>
              <img src="<?php echo $dir['img']; ?>/common/chara_sister.png">
              <legend>SISTER<span>シスター</span></legend>
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
        <a class="swipebox" href="https://www.youtube.com/watch?v=r2UKYBNSRaI">Play Movie</a>
      </div>
    </div>
  </section>

  <section class="special">
    <div class="frame">
      <div class="inner">
        <h1>SPECIAL</h1>
          <?php if(function_exists('wp_bannerize')) wp_bannerize(); ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
