<?php get_header(); ?>

<section id="main">
  <div id="no-slide">
    <?php include TEMPLATEPATH.'/slideshow.php'; ?>
  </div>


  <section id="articles_list">

    <?php query_posts("paged=$paged"); ?>

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
          <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2></hgroup>
        <div class="date"> <?php the_date(); ?> en <span><?php the_category();?></span> </div>
        <div class="extract"> <?php the_excerpt(); ?></div>

      </article>

    <?php endwhile; else: ?>
      <h1>No se encontraron artículos</h1>
    <?php endif; ?>

    <div id="pagination">
      <p><?php previous_posts_link('Post Anterories') ?> <?php next_posts_link('Post Siguientes') ?></a></p>
    </div>
  </section>

<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>
