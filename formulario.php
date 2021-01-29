<?php /* Template Name: formulario */ ?>
<?php get_header(); ?>
<?php 
    $parent_page = wp_get_post_parent_id(get_the_ID());
    $parent_title = get_the_title($post->post_parent);
?>
<main class="page-main">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <div class="formulario-container">
        <h1 class="formulario__title"><?php echo $parent_title; ?></h1>
        <?php the_content(); ?>
      </div>
    <?php } ?>
</main>
<?php get_footer(); ?>