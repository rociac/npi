const hamburguerIcon = document.querySelector('.nav__icon');
const list = document.querySelector('.nav__list');
const header = document.querySelector('.header');

hamburguerIcon.addEventListener('click', () => {
  list.classList.toggle('show');
  header.classList.toggle('header__responsive');
});