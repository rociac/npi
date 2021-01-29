<?php wp_footer(); ?>
<footer class="footer">
  <nav class="footer__nav">
    <a class="image-container" href="<?php echo site_url(); ?>">
      <img src="<?php echo get_theme_file_uri('img/logo-white.png')?>" alt="NPI Logo">
    </a>
    <ul class="footer-nav__list footer__list">
      <li><a class="text-light footer__hover" href="<?php echo site_url('/blog'); ?>">Blog</a></li>
      <li><a class="text-light footer__hover" href="<?php echo site_url('/nosotros'); ?>">Nosotros</a></li>
      <li><a class="text-light footer__hover" href="<?php echo site_url('/servicios'); ?>">Servicios</a></li>
      <li class="hidden"><a class="text-light footer__hover" href="#">Multimedia</a></li>
      <li><a class="text-light footer__hover" href="<?php echo site_url('/cursos'); ?>">Cursos</a></li>
      <li class="hidden"><a class="text-light footer__hover" href="#">Recursos</a></li>
    </ul>
  </nav>
  <hr class="footer__break">
  <div class="footer__bottom">
  <div class="footer__left">
    <p class="footer__copy">&copy; 2020 NPI Molding Solutions</p>
    <a class="footer__left-link" href="<?php echo site_url('/politica-de-privacidad'); ?>">Política de Privacidad</a>
  </div>
    <div class="footer__social">
      <p>Siguenos en:</p>
      <a class="footer__list footer__hover" href="https://www.facebook.com/npimoldingsolutions" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
      <a class="footer__list footer__hover" href="https://www.instagram.com/npimolding" target="_blank" rel="noopener noreferrer"><i class="social-icon fab fa-instagram"></i></a>
      <a class="footer__list footer__hover" href="https://twitter.com/MoldingNpi" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
      <a class="footer__list footer__hover" href="https://linkedin.com/company/npi-molding-solutions" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
      <a class="footer__list footer__hover" href="https://www.youtube.com/channel/UChImXlchM4Q8Nm-JpEp5urA/featured" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</footer>
</body>
</html>