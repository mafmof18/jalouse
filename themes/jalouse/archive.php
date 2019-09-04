<?php get_header(); ?>

<main>
  <section id="information" class="information">
    <div class="frame">
      <h1 class="logo">
        <span>jalouse</span>
      </h1>
      <div class="inner">
        <h1>WHAT'S NEW</h1>
        <ul>
        <?php
          $args = array(
            'posts_per_page' => -1 // 全件表示
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
          <a href="/#information"><?php _e('戻る', 'jalouse'); ?></a>
        </p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>