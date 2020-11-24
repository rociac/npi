<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__image-container">
      <img src="<?php echo get_theme_file_uri('img/logo.png')?>" alt="npi">
    </div>
    <nav class="nav">
      <ul class="nav__list">
        <li><a href="#"></a>Blog</li>
        <li><a href="#"></a>Nosotros</li>
        <li><a href="#"></a>Multimedia</li>
        <li><a href="#"></a>Cursos</li>
        <li><a href="#"></a>Recursos</li>
        <li><a href="#"></a>Contáctanos</li>
      </ul>
    </nav>
  </header>

  