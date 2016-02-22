<?php get_header(); ?>

<section id="main">

  <section id="articles_list">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article>
        <div class="thumb"  >
          <a href="<?php the_permalink();?>">
            <?php if (has_post_thumbnail()) {
    the_post_thumbnail('articles_list_thumbs');
} ?>
          </a>
        </div>

        <hgroup>
          <h2><?php the_title(); ?></h2></hgroup>
        <div class="extract"> <?php the_content(); ?></div>

      </article>

    <?php endwhile; else: ?>
      <h1>No se encontraron artículos</h1>
    <?php endif; ?>

    <div id="comments">
      <h3>Comentarios</h3>
      <div id="comments_box">
        <?php comments_template(); ?>
      </div>
    </div>
  </section>

<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>
