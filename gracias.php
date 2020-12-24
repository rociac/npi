<?php /* Template Name: gracias */ ?>
<?php get_header(); ?>
  <main class="thanks">
    <div class="thanks__container">
      <h2 class="thanks__title">¡Enhorabuena!</h2>
      <p class="thanks__text">
        Ya tenemos tu información y a la brevedad nos comunicaremos contigo.
      </p>
      <img src="<?php echo get_theme_file_uri('img/gracias.png'); ?>" alt="">
      <p class="thanks__text">Si quieres conocer más ingresa aquí:</p>
      <div class="thanks__social">
        <a class="thanks__social-icons" href="https://www.facebook.com/npimoldingsolutions" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
        <a class="thanks__social-icons" href="https://www.instagram.com/npimolding" target="_blank" rel="noopener noreferrer"><i class="social-icon fab fa-instagram"></i></a>
        <a class="thanks__social-icons" href="https://twitter.com/MoldingNpi" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
        <a class="thanks__social-icons" href="https://linkedin.com/company/npi-molding-solutions" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <a class="thanks__link" href="<?php echo site_url(); ?>"><i class="fas fa-chevron-left"></i>Volver al inicio</a>
    </div>
  </main>
<?php get_footer(); ?>