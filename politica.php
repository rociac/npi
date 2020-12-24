<?php /* Template Name: politica */ ?>
<?php get_header(); ?>

<main>
  <div class="privacy__container">
    <?php 
      while(have_posts()) {
        the_post(); ?>
        <h1 class="post__title"><?php the_title(); ?></h1>
        <div class="post__text">
          <?php the_content(); ?>
          <a class="blog__link" href="<?php echo site_url(); ?>"><i class="fas fa-chevron-left"></i>Volver al inicio</a>
        </div>
      <?php } ?>
  </div>
</main>

<?php get_footer(); ?>