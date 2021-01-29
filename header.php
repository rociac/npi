<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-459925964"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);} 
    gtag('js', new Date());
    gtag('config', 'AW-459925964');
  </script>
  <?php wp_head(); ?>
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '805228940040356'); 
  fbq('track', 'PageView');
  </script>
  <noscript>
  <img height="1" width="1" 
  src="https://www.facebook.com/tr?id=805228940040356&ev=PageView
  &noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <nav class="nav m-1">
      <div class="image-container">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('img/logo.png')?>" alt="NPI Logo"></a>
      </div>
      <i class="fas fa-bars nav__icon"></i>
      <ul class="nav__list">
        <li><a class="header__list header__hover link-aniversario" href="<?php echo site_url('/aniversario'); ?>">Aniversario</a></li>
        <li><a class="header__list header__hover" href="<?php echo site_url(''); ?>">Inicio</a></li>
        <li><a class="header__list header__hover" href="<?php echo site_url('/blog'); ?>">Blog</a></li>
        <li><a class="header__list header__hover" href="<?php echo site_url('/nosotros'); ?>">Nosotros</a></li>
        <li><a class="header__list header__hover" href="<?php echo site_url('/cursos'); ?>">Cursos</a></li>
        <li><a class="header__list header__hover" href="<?php echo site_url('/servicios'); ?>">Servicios</a></li>
        <li><a class="header__list header__hover" href="<?php echo site_url('/newsletter'); ?>">Newsletter</a></li>
        <li><a class="btn btn-primary btn-big center small" href="<?php echo site_url('/contacto'); ?>">Contacto <i class="button-icon far fa-envelope"></i></a></li>
      </ul>
    </nav>
  </header>

  