<?php /* Template Name: aniversario */ ?>
<?php get_header(); ?>
  <main class="page-main">
    <section class="timeline">
      <div class="timeline__top gradient-bg">
        <div class="title-box-small center-title">
          <h1 class="title white">6TH Aniversario NPI</h1>
          <p class="white mt-1">Conoce nuestra trayectoria y los eventos representativos de NPI Molding Solutions.</p>
        </div>
      </div>
      <div class="timeline__bottom">
        <div class="img-overlay"></div>
        <div class="glass">
          <div class="content__container">
            <div class="content__container-left">
              <img id="aniversario__image" src="<?php echo get_theme_file_uri('img/aniversario/2015.png'); ?>" alt="">
            </div>
            <div class="content__container-right">
              <p class="content__copy">
                En el 2015 comenzamos con la representación de la marca Jinlong como oferta de Moldes para la Inyección de Plástico.
                Comenzamos en un pequeño cuarto como oficinas y con un equipo sólido de ventas e ingeniería.
              </p>
            </div>
          </div>
        </div>
        <div class="flex-parent">
          <div class="input-flex-container">
            <div class="input active">
              <span data-year="2015" data-info="headset"></span>
            </div>
            <div class="input">
              <span data-year="2016" data-info="headset"></span>
            </div>
            <div class="input">
              <span data-year="2017" data-info="headset"></span>
            </div>
            <div class="input">
              <span data-year="2018" data-info="headset"></span>
            </div>
            <div class="input">
              <span data-year="2019" data-info="headset"></span>
            </div>
            <div class="input">
              <span data-year="2020" data-info="headset"></span>
            </div>
            <div class="input">
              <span data-year="2021" data-info="headset"></span>
            </div>
        </div>
        </div>
      </div>
      
    </section>
    <section class="wallpapers gradient-bg">
      <div class="wallpapers__container">
        <div class="title-box center-title">
          <h1 class="title white">Fondos de Pantalla</h1>
          <p class="wallpaper-copy white mt-3 text-center">Lleva tu pasión en el celular: El Moldeo por Inyección, con nuestros fondos de pantalla conmemorativos para IOS y Android.
            <br>¡Descarga tu favorito ya mismo!</p>
        </div>
        <div class="wallpapers__bottom">
          <div class="wallpaper__card">
            <img src="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/01.png')?>" alt="">
            <div class="button__container">
              <a class="btn btn-border btn-anniversary btn-wide" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/ios/01.png'); ?>" download>Descarga para IOS</a>
              <a class="btn btn-border btn-anniversary btn-wide mt-1" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/01.png'); ?>">Descarga para Android</a> 
            </div>
          </div>
          <div class="wallpaper__card">
            <img src="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/02.png')?>" alt="">
            <div class="button__container">
              <a class="btn btn-border btn-anniversary btn-wide" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/ios/02.png'); ?>" download>Descarga para IOS</a>
              <a class="btn btn-border btn-anniversary btn-wide mt-1" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/02.png'); ?>" download>Descarga para Android</a> 
            </div>
          </div>
          <div class="wallpaper__card">
            <img src="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/03.png')?>" alt="">
            <div class="button__container">
              <a class="btn btn-border btn-anniversary btn-wide" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/ios/03.png'); ?>" download>Descarga para IOS</a>
              <a class="btn btn-border btn-anniversary btn-wide mt-1" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/03.png'); ?>" download>Descarga para Android</a> 
            </div>
          </div>
          <div class="wallpaper__card">
            <img src="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/04.png')?>" alt="">
            <div class="button__container">
              <a class="btn btn-border btn-anniversary btn-wide" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/ios/04.png'); ?>" download>Descarga para IOS</a>
              <a class="btn btn-border btn-anniversary btn-wide mt-1" href="<?php echo get_theme_file_uri('img/aniversario/wallpapers/android/04.png'); ?>" download>Descarga para Android</a> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="aniversario__testimoniales">
      <div class="aniversario__container">
        <div class="title-box center-title pt-5">
          <h1 class="title white">Testimoniales</h1>
          <p class="white mt-1">Conoce la opinión de nuestros clientes y colaboradores a lo largo de estos 6 años. Una trayectoria llena de aprendizajes, experiencias únicas y personas increíbles que han sido parte de este proyecto tan especial.</p>
        </div>
        <div class="video__container">
          <iframe class="mr-5" src="https://www.youtube.com/embed/dpdWEcBRcRQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe class="mr-5"  src="https://www.youtube.com/embed/HiX-5wAEYdU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe class="mr-5"  src="https://www.youtube.com/embed/4-kwx2vihLU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe  src="https://www.youtube.com/embed/ZHTR-hEwBpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="img-overlay"></div>
    </section>
  </main>
<?php get_footer(); ?>