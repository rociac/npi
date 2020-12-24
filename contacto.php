<?php /* Template Name: contacto */ ?>
<?php get_header(); ?>
<main class="contact__main">

  <?php while(have_posts()) {
    the_post(); ?>
    <div class="contact__container">
      <div class="text__container">
        <p class="contact__title">Te ayudamos para que tu empresa de Moldeo por Inyección crezca a través de nuestras soluciones integrales.</p>
        <p class="contact__text">Nuestro equipo te asesorará para que encuentres la solución más rentable.</p>
        <p class="contact__subtext">¡Te contactaremos a la brevedad!</p>
      </div>
      <div class="form__container">
        <?php the_content(); ?>
      </div>
    </div>
    <aside class="contact__aside">
      <div class="contact__carousel">
        <div class="contact__prev">
          <svg class="contact__prev-icon" width="35" height="67" viewBox="0 0 35 67" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1.35355" y1="33.6464" x2="34.3535" y2="66.6465" stroke="#303030"/>
            <line x1="0.646447" y1="33.6464" x2="33.6464" y2="0.646447" stroke="#303030"/>
          </svg>
        </div>
        <div class="contact__slider-container">
          <div class="contact__carousel-container">
            <img id="lastContactClone" src="<?php echo get_theme_file_uri('img/carusel_contacto/img8.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img1.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img2.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img3.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img4.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img5.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img6.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img7.png')?>" alt="">
            <img src="<?php echo get_theme_file_uri('img/carusel_contacto/img8.png')?>" alt="">
            <img id="firstContactClone" src="<?php echo get_theme_file_uri('img/carusel_contacto/img1.png')?>" alt="">
          </div>
        </div>
        <div class="contact__next">
        <svg class="contact__next-icon" width="35" height="67" viewBox="0 0 35 67" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="33.6464" y1="33.3536" x2="0.646452" y2="0.353548" stroke="#303030"/>
          <line x1="34.3536" y1="33.3536" x2="1.35355" y2="66.3536" stroke="#303030"/>
        </svg>
      </div>
      </div>
      <div class="aside_text-container">
        <p class="aside__title">Nuestros Servicios: </p>
        <div class="text-box">
          <p>- Fabricación de Moldes para la Inyección de plástico.</p>
          <p>- Servicio de taller para tu Molde.</p>
          <p>- Refaccionamiento de Moldes y Máquinas.</p>
          <p>- Automatización de tu negocio.</p>
          <p>- Sistema de Colada Caliente.</p>
          <p>- Certificación IMS.</p>
          <p>- Cursos.</p>
        </div>
      </div>
    </aside>
 <?php } ?>
</main>
<?php get_footer(); ?>