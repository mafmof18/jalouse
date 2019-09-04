<footer>
  <div class="frame">
    <div class="inner">
      <section class="game-info">
        <h1 class="logo">
          <span>jalouse</span>
        </h1>
        <dl class="detail">
          <dt><?php _e('タイトル', 'jalouse'); ?></dt>
          <dd><?php _e('少女と罪 栞編 ~jalouse~', 'jalouse'); ?></dd>
          <dt><?php _e('ジャンル', 'jalouse'); ?></dt>
          <dd><?php _e('フルボイス純愛百合ADV', 'jalouse'); ?></dd>
          <dt><?php _e('価格', 'jalouse'); ?></dt>
          <dd><?php _e('3,000円（予定）<br>※価格は変更となる場合があります', 'jalouse'); ?></dd>
          <dt><?php _e('対象', 'jalouse'); ?></dt>
          <dd><?php _e('全年齢対象（予定）', 'jalouse'); ?></dd>
        </dl>
        <?php /*
        <dl class="dl">
          <dt>製品版購入</dt>
          <dd>
            <ul>
              <li><a href="#"><span>DLsite</span></a></li>
              <li><a href="#"><span>Steam</span></a></li>
            </ul>
          </dd>
        </dl>
        */ ?>
      </section>

      <section class="staff">
        <h2>STAFF CREDITS</h2>
        <dl>
          <dt><?php _e('企画・監督・シナリオ・イラスト・スクリプト・その他諸々', 'jalouse'); ?></dt>
          <dd><?php _e('おちょこ口 @ochokokuchi', 'jalouse'); ?></dd>
          <dt><?php _e('キャスト', 'jalouse'); ?></dt>
          <dd>
            <ul>
              <li><?php _e('草壁 栞：鈴香夏目 @Eselletis', 'jalouse'); ?></li>
              <li><?php _e('茅ヶ崎 美姫：田中涼子 @tanakaryoko_koe', 'jalouse'); ?></li>
              <li><?php _e('シスター：ひと美 @hitomityan', 'jalouse'); ?></li>
            </ul>
          </dd>
          <dt><?php _e('音楽', 'jalouse'); ?></dt>
          <dd><?php _e('光田晋哉 @musicpandora', 'jalouse'); ?></dd>
          <dt><?php _e('主題歌', 'jalouse'); ?></dt>
          <dd>nayuta @7utauta</dd>
        </dl>
      </section>
    </div>
      <p class="copylight"><?php _e('このホームページに掲載されている文書・図版・写真等の無断転載を禁じます。', 'jalouse'); ?><br>
      <small><?php _e('COPYRIGHT &copy;おちょこ口', 'jalouse'); ?></small></p>
  </div>
</footer>

<?php get_template_part('partials/modal-certification'); ?>
<?php get_template_part('partials/modal-character'); ?>
<?php wp_footer(); ?>
<?php /* 年齢確認モーダル用 クッキー削除
<a class="remove_cookie">クッキー削除</a>
*/ ?>

</body>
</html>
