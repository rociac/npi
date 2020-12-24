<?php get_header(); ?>
<main>
  <div class="post__container">
    <?php 
      while(have_posts()) { 
        the_post(); ?>
        <img class="post__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="post__title"><?php the_title(); ?></h1>
        <div class="post__text">
          <?php the_content(); ?>
          <a class="blog__link" href="<?php echo site_url('/blog'); ?>"><i class="fas fa-chevron-left"></i>Volver al menú</a>
        </div>
      <?php } ?>
  </div>
</main>
<?php get_footer(); ?>