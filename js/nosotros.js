const templateUrl = path.templateUrl;

const containerServicios = document.querySelector('.servicios-dynamic-image__container');
const servicios = document.querySelectorAll('.servicios__list li');
const imageServicios = document.querySelector('.servicios-dynamic-image__container img');
const iconsServicios = document.querySelectorAll('.servicios__list-title i');

const containerCursos = document.querySelector('.cursos-dynamic-image__container');
const cursos = document.querySelectorAll('.cursos__list li');
const imageCursos = document.querySelector('.cursos-dynamic-image__container img');
const iconsCursos = document.querySelectorAll('.cursos__list-title i');

servicios.forEach((servicio, i) => {
  servicio.addEventListener('click', () => {
    if (servicio.className === 'servicios-active') {
      servicio.classList.remove('servicios-active');
      imageServicios.classList.remove('fade-in');
      iconsServicios[i].classList.remove('rotate');
    } else {
      const active = document.querySelector('.servicios-active');
      const rotate = document.querySelector('.rotate');
      if (active && active !== servicio) {
        active.classList.remove('servicios-active');
        rotate.classList.remove('rotate');
        servicio.classList.add('servicios-active');
        imageServicios.classList.remove('fade-in');
        iconsServicios[i].classList.remove('rotate');
        setTimeout(() => {
          imageServicios.src = `${templateUrl}/img/servicios/servicios${i}.png`;
          imageServicios.classList.add('fade-in');
          iconsServicios[i].classList.add('rotate');
        }, 200);
      } else {
        servicio.classList.add('servicios-active');
        iconsServicios[i].classList.add('rotate');
        imageServicios.src = `${templateUrl}/img/servicios/servicios${i}.png`;
        imageServicios.classList.add('fade-in');
      }
    }
  });
});

cursos.forEach((curso, i) => {
  curso.addEventListener('click', () => {
    if (curso.className === 'cursos-active') {
      curso.classList.remove('cursos-active');
      imageCursos.classList.remove('fade-in');
      iconsCursos[i].classList.remove('rotate');
    } else {
      const active = document.querySelector('.cursos-active');
      const rotate = document.querySelector('.rotate');
      if (active && active !== curso) {
        active.classList.remove('cursos-active');
        rotate.classList.remove('rotate');
        curso.classList.add('cursos-active');
        imageCursos.classList.remove('fade-in');
        iconsCursos[i].classList.remove('rotate');
        setTimeout(() => {
          imageCursos.src = `${templateUrl}/img/cursos/cursos${i}.png`;
          imageCursos.classList.add('fade-in');
          iconsCursos[i].classList.add('rotate');
          copy.classList.add('fade-in');
        }, 200);
      } else {
        curso.classList.add('cursos-active');
        iconsCursos[i].classList.add('rotate');
        imageCursos.src = `${templateUrl}/img/cursos/cursos${i}.png`;
        imageCursos.classList.add('fade-in');
      }
    }
  });
});