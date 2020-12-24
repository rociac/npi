<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-185505940-1">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-185505940-1');
  </script>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <nav class="nav m-1">
      <div class="image-container">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('img/logo.png')?>" alt="NPI Logo"></a>
      </div>
      <ul class="nav__list">
        <li><a class="header__list header__hover" href="<?php echo site_url('/blog')?>">Blog</a></li>
        <li class="hidden"><a class="header__hover" href="#">Nosotros</a></li>
        <li class="hidden"><a class="header__hover" href="#">Multimedia</a></li>
        <li class="hidden"><a class="header__hover" href="#">Cursos</a></li>
        <li class="hidden"><a class="header__hover" href="#">Recursos</a></li>
        <li><a class="nav__button" href="<?php echo site_url('/contacto')?>">Contáctanos</a></li>
      </ul>
    </nav>
  </header>

  