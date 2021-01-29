<?php 
  function npi_files() {
    wp_enqueue_script('FontAwesome-kit', 'https://kit.fontawesome.com/7d379ae637.js', NULL, '1.0', false);
    wp_enqueue_style('Montserrat-custom-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;900&display=swap');
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
    wp_enqueue_script('index', get_template_directory_uri() . '/js/index.js', NULL, '1.0', true );
    if ( is_page() || is_single()) {
      switch($post->post_name) {
        case 'home':
          wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', NULL, '1.0', true );
          break;
        case 'contacto':
          wp_enqueue_script('contacto-conversion', get_template_directory_uri() . '/js/conversion/contactoConversion.js', NULL, '1.0' , false );
          wp_enqueue_script('contacto', get_template_directory_uri() . '/js/contacto.js', NULL, '1.0', true );
          break;
        case 'gracias':
          wp_enqueue_script('google', get_template_directory_uri() . '/js/google.js', NULL, '1.0', false);
          break;
        case 'nosotros':
          wp_enqueue_script('nosotros', get_template_directory_uri() . '/js/nosotros.js', NULL, '1.0', true);
          $translation_array = array('templateUrl' => get_stylesheet_directory_uri());
          wp_localize_script('nosotros', 'path', $translation_array);
          break;
        case 'aniversario';
          wp_enqueue_script('aniversario', get_template_directory_uri() . '/js/aniversario.js', NULL, '1.0', true);
          $translation_array = array('templateUrl' => get_stylesheet_directory_uri());
          wp_localize_script('aniversario', 'path', $translation_array);
          break;
        case 'fabricacion-de-moldes':
          wp_enqueue_script('fabricacion-conversion', get_template_directory_uri() . '/js/conversion/fabricacionConversion.js', NULL, '1.0' , false );
          wp_enqueue_script('fabricacion-moldes', get_template_directory_uri() . '/js/fabMoldes.js', NULL, '1.0' , true );
          break;
        case 'servicio-de-taller':
          wp_enqueue_script('taller-conversion', get_template_directory_uri() . '/js/conversion/tallerConversion.js', NULL, '1.0' , false );
          wp_enqueue_script('servicio-taller', get_template_directory_uri() . '/js/servTaller.js', NULL, '1.0' , true );
          break;
        case 'servicios-contacto':
          wp_enqueue_script('servicios-conversion', get_template_directory_uri() . '/js/conversion/serviciosConversion.js', NULL, '1.0' , false );
          wp_enqueue_script('servicios-contacto', get_template_directory_uri() . '/js/contactoServicios.js', NULL, '1.0' , true );
          break;
        case 'newsletter':
          wp_enqueue_script('newsletter-conversion', get_template_directory_uri() . '/js/conversion/newsletterConversion.js', NULL, '1.0' , false );
          wp_enqueue_script('newsletter', get_template_directory_uri() . '/js/newsletter.js', NULL, '1.0' , true );
          break;
        case 'cursos-contacto':
          wp_enqueue_script('cursos-conversion', get_template_directory_uri() . '/js/conversion/cursosConversion.js', NULL, '1.0' , false );
          wp_enqueue_script('cursos-contacto', get_template_directory_uri() . '/js/contactoCursos.js', NULL, '1.0' , true );
          break;

      }
    }
  }

  add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 25 );
  add_action('after_setup_theme', 'npi_features');
  add_action('wp_enqueue_scripts', 'load_scripts');
?>