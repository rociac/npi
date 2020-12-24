<?php 
  function npi_files() {
    wp_enqueue_script('FontAwesome-kit', 'https://kit.fontawesome.com/7d379ae637.js', NULL, '1.0', false);
    wp_enqueue_style('Montserrat-custom-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap');
    wp_enqueue_style('Bebas-neue-custom-font', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_style('npi_main_styles', get_stylesheet_uri());
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/queries.css',false,'1.1','all');
  }

  add_action('wp_enqueue_scripts', 'npi_files');

  function npi_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
  }

  function tn_custom_excerpt_length( $length ) {
    return 25;
  }

  function load_scripts() {
    global $post;

    if ( is_page() || is_single()) {
      switch($post->post_name) {
        case 'home':
          wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', NULL, '1.0', true );
          break;
        case 'contacto':
          wp_enqueue_script('contacto', get_template_directory_uri() . '/js/contacto.js', NULL, '1.0', true );
          break;
        case 'gracias':
          wp_enqueue_script('google', get_template_directory_uri() . '/js/google.js', NULL, '1.0', false);
          break;
      }
    }
  }

  add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 25 );
  add_action('after_setup_theme', 'npi_features');
  add_action('wp_enqueue_scripts', 'load_scripts');
?>