<?php
  get_header();
?>

<main>
  <section class="hero">
    <div class="video-container">
      <div class="overlay"></div>
      <video autoplay muted loop>
        <source src=<?php echo get_theme_file_uri('video/bg.mov')?>>
      </video>
    </div>
    <div class="hero__text">
      <h1 class="text-blue hero__title">NPI Molding Solutions</h1>
      <p class="hero__copy">Es una empresa 100% mexicana que ofrece soluciones integrales para tu negocio de Moldeo por Inyección.</p>
      <hr class="break break-light mt-3 mb-3">
      <a class="btn btn-primary btn-big mt-2" href="<?php echo site_url('/nosotros'); ?>">Conoce más <i class="button-icon fas fa-chevron-right"></i></a>
    </div>
  </section>

  <section class="nosotros">
    <div class="nosotros__izq">
      <a class="nosotros__link" href="<?php echo site_url('/nosotros'); ?>">NPI Molding Solutions</a>
      <h2 class="title">Acerca de Nosotros</h2>
      <hr class="break break-dark mt-2 mb-2">
      <p class="nosotros__copy">En NPI Molding Solutions ofrecemos la fabricación de moldes, servicios de taller, automatizaciones, sistema de coladas calientes,
         maquila de piezas, refaccionamiento para máquinas - moldes y cursos:
          brindando soluciones integrales para tu empresa de Moldeo por Inyección.
      </p>
    </div>
    <div class="nosotros__derecha">
      <img class="nosotros__imagen" src="<?php echo get_theme_file_uri('img/nosotros.jpeg')?>" alt="Nosotros">
    </div>
  </section>

  <section class="blog">
    <div class="blog__header">
      <h2 class="title mtb-1"><a href="<?php echo site_url('/blog'); ?>">Blog</a></h2>
      <hr class="break break-dark mt-1 mb-1">
      <p class="nosotros__copy mt-1">Ingresa aquí para leer nuestro BLOG: Una herramienta útil para tu negocio de Moldeo por Inyección.</p>
      <a class="btn btn-primary btn-big mt-2" href="<?php echo site_url('/blog'); ?>">Ir al Blog <i class="button-icon fas fa-chevron-right"></i></a>
    </div>
    <?php
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 4,
      )); ?>
    <div class="blog__section-container">
      <?php while ($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); ?>
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
      <?php } wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="cursos">
    <div class="img-overlay"></div>
    <div class="cursos__left">
      <h2 class="title text-white mtb-1">Conoce nuestros cursos</h2>
      <hr class="break break-light mt-2 mb-2">
      <p class="cursos__copy text-white mt-1">
        Con nuestros cursos aprenderás de elementos de control para la administración y calidad operativa a través de indicadores en el proceso de inyección,
         dirigidos a mantener en forma documental y eficiente los pasos productivos, eficiencia, control de calidad de producto y proceso, desperdicios, seguridad, orden y limpieza.
      </p>
      <a class="btn btn-primary btn-big mt-2" href="<?php echo site_url('/cursos'); ?>">Ir a los cursos <i class="button-icon fas fa-chevron-right"></i></a>
    </div>

  </section>

  <section class="clientes">
    <div class="clientes__text-container">
      <h2 class="title mtb-1">Comentarios de nuestros clientes</h2>
      <hr class="break break-dark mt-2 mb-2">
      <p class="clientes__copy">
      Opiniones de nuestros clientes satisfechos por los resultados rentables.
       Únete a las empresas y negocios que han logrado aumentar sus ventas gracias a las soluciones integrales para el Moldeo por Inyección que ofrecemos.
      </p>
    </div>
    <div class="slider__container">
      <div class="prev">
        <svg class="prev__icon" width="35" height="67" viewBox="0 0 35 67" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="1.35355" y1="33.6464" x2="34.3535" y2="66.6465" stroke="#303030"/>
          <line x1="0.646447" y1="33.6464" x2="33.6464" y2="0.646447" stroke="#303030"/>
        </svg>
      </div>
      <div class="carousel__container">
        <div class="carousel__slide">
          <img id="lastClone" src="<?php echo get_theme_file_uri('img/Testimonial03.png') ?>" alt="">  
          <img src="<?php echo get_theme_file_uri('img/Testimonial01.png') ?>" alt="">
          <img src="<?php echo get_theme_file_uri('img/Testimonial02.png') ?>" alt="">
          <img src="<?php echo get_theme_file_uri('img/Testimonial03.png') ?>" alt="">
          <img id="firstClone" src="<?php echo get_theme_file_uri('img/Testimonial01.png') ?>" alt="">
        </div>
      </div>
      <div class="next">
        <svg class="next__icon" width="35" height="67" viewBox="0 0 35 67" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="33.6464" y1="33.3536" x2="0.646452" y2="0.353548" stroke="#303030"/>
          <line x1="34.3536" y1="33.3536" x2="1.35355" y2="66.3536" stroke="#303030"/>
        </svg>
      </div>
    </div>
  </section>
</main>

<?php
  get_footer();
?>