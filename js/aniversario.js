const templateUrl = path.templateUrl;

const copy2015 = 'En el 2015 comenzamos con la representación de la marca Jinlong como oferta de Moldes para la Inyección de Plástico. Comenzamos en un pequeño cuarto como oficinas y con un equipo sólido de ventas e ingeniería.'
const copy2016 = 'Para el 2016 arrancamos con nuestro Servicio Post Venta y Reparaciones de Moldes para la Inyección de Plástico. Así, ofrecimos mayor confianza a nuestros clientes para trabajar con nosotros.';
const copy2017 = 'En el año 2017 nos cambiamos a nuestras instalaciones actuales, esto nos ha permitido dar un mejor servicio de Reparación y Mantenimiento para Moldes de Inyección de Plástico: En menor tiempo y con mayor control.';
const copy2018 = 'En el año 2018 consolidamos proyectos con la Industria Automotriz: Un período de aprendizaje, mejoras constantes y oportunidades únicas.'
const copy2019 = 'Para el año 2019 nos aventuramos con el proyecto de la Academia NPI. Una serie de cursos y certificaciones que ayudan a los profesionales del plástico a impulsar su carrera profesional y consolidar sus conocimientos.';
const copy2020 = 'En el año 2020 nos convertimos en NPI Molding Solutions: Soluciones Integrales para empresas de Moldeo por Inyección. Apoyando a nuestros clientes a materializar sus sueños a través de servicios que van desde cursos hasta maquinados de alta precisión.'
const copy2021 = 'Para este 2021 nos depara el desarrollo de herramientas digitales de apoyo para el trabajo diario: App NPI Molding Solutions. Así, queremos ayudar a miles de profesionales del plástico a simplificar el trabajo y mejorar sus resultados.';


const years = document.querySelectorAll('.input');
const glass = document.querySelector('.glass');
const image = document.querySelector('#aniversario__image');
const copyContainer = document.querySelector('.content__copy');

years.forEach(year => {
  year.addEventListener('click', () => {
    const active = document.querySelector('.input.active');
    const yearNumber = parseInt(year.children[0].dataset.year, 10);
    active.classList.remove('active');
    year.classList.add('active');
    glass.classList.add('slide-out');
    glass.addEventListener('transitionend', () => {
      image.src = `${templateUrl}/img/aniversario/${year.children[0].dataset.year}.png`;
      switch(yearNumber) {
        case 2015:
          copyContainer.innerHTML = copy2015;
          break;
        case 2016:
          copyContainer.innerHTML = copy2016;
          break;
        case 2017:
          copyContainer.innerHTML = copy2017;
          break;
        case 2018:
          copyContainer.innerHTML = copy2018;
          break;
        case 2019:
          copyContainer.innerHTML = copy2019;
          break;
        case 2020:
          copyContainer.innerHTML = copy2020;
          break;
        case 2021:
          copyContainer.innerHTML = copy2021;
          break;
      }
      glass.classList.remove('slide-out');
      glass.classList.add('fade-glass');
    });
  });
});

