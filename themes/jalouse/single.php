<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ){
    the_post();
    ?>
    <article>
      <h2>
        <?php the_title(); ?>
      </h2>
      <p>
        <?php the_content(); ?>
      </p>
    </article>
    <?php
  }
}
?>

<?php get_footer(); ?>