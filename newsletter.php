<?php /* Template Name: newsletter */ ?>
<?php get_header(); ?>
<main class="page-main">
  <?php while(have_posts()) {
    the_post(); ?>
  <section class="newsletter__header">
    <div class="img-overlay"></div>
    <h1 class="newsletter__title">¿Quieres mantenerte actualizado en la Industria del Plástico?</h1>
    <p class="newsletter__subtitle">
    Suscríbete a nuestra newsletter y accede a contenidos exclusivos para la Solución de Defectos en tus Piezas Plásticas, Prácticas para mejorar tu Maquila de Piezas Plásticas, Optimización del Proceso de Trabajo y mucho más. 
    </p>
  </section>
  <section class="newsletter__body">
    <h2 class="newsletter__body-title">Recibirás de inmediato en tu correo:</h2>
    <div class="newsletter__list">
      <div class="newsletter__list-top">
        <div class="newsletter__list-element">
          <i class="fas fa-check"></i><p>Artículos de nuestro Blog.</p>
        </div>
        <div class="newsletter__list-element">
          <i class="fas fa-check"></i><p>Videos donde nuestros profesionales te explican ¿Por qué aparecen defectos en tu pieza plástica? Y ¿Cómo solucionarlos?</p>
        </div>
      </div>
      <div class="newsletter__list-bottom">
        <div class="newsletter__list-element">
          <i class="fas fa-check"></i><p>Información de valor generada por nuestros profesionales del plástico.</p>
        </div>
        <div class="newsletter__list-element">
          <i class="fas fa-check"></i><p>Boletines informativos de lo que está pasando en el mundo del plástico actualmente.</p>
        </div>
      </div>
    </div>
    <div class="newsletter__form">
      <?php the_content(); ?>
    </div>
  </section>
  <?php } ?>
</main>
<?php get_footer(); ?>