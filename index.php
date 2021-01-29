<?php
  get_header(); ?>
  <main class="bg-grey page-main">
    <div class="title-box__container">
      <div class="title-box">
        <h1 class="title">Blog</h1>
        <hr class="break break-dark mt-2 mb-2">
        <p>Descubre el blog de la Industria del Plástico creado por profesionales con más de 30 años de experiencia.
          Compartimos lo que sabemos de la A a la Z para ofrecerte recursos gratis y 100% funcionales que ayuden a mejorar tus procesos.</p>
      </div>
    </div>
    <div class="blog__container">
    <?php
      while(have_posts()) {
        the_post(); 
        $year = get_post_time('Y');
        $month = get_post_time('m');
        ?>
        <div class="post__card">
          <img class="post__thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
          <div class="card__content">
            <div class="card__meta-box">
              <a class="meta-box__link" href="<?php echo get_month_link($year, $month)?>"><?php the_date('M Y')?></a>
              &sdot;
              <?php echo get_the_category_list() ?>
            </div>
            <!-- <p class="card__meta-box"><?php the_date('M Y')?> &sdot;<?php echo get_the_category_list(); ?></p> -->
            <div class="card__content-top">
              <hr class="content-break break-blue">
              <h2 class="card__title"><?php the_title(); ?></h2>
            </div>
            <a href=""></a>
            <?php  echo '<p class="content__text">' . get_the_excerpt() . '</p>' ?>
            <a href="<?php the_permalink(); ?>" class="blog__button">Leer artículo</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>
  <?php get_footer(); ?>