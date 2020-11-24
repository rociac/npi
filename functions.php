<?php 
  function npi_files() {
    wp_enqueue_style('Montserrat-custom-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap');
    wp_enqueue_style('Bebas-neue-custom-font', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_style('npi_main_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'npi_files');

  function npi_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'npi_features');
?>