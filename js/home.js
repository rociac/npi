const carouselSlide = document.querySelector('.carousel__slide');
const carouselImages = document.querySelectorAll('.carousel__slide img');

const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

let counter = 1;
const size = 700;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

nextBtn.addEventListener('click', () => {
  if(counter >= carouselImages.length - 1) return;
  if (counter <= 0) return;
  carouselSlide.style.transition = 'transform 0.6s ease-in-out';
  counter += 1;
  carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click', () => {
  if (counter <= 0) return;
  carouselSlide.style.transition = "transform 0.6s ease-in-out";
  counter -= 1;
  carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

carouselSlide.addEventListener('transitionend', () => {
  if (carouselImages[counter].id === 'lastClone') {
    carouselSlide.style.transition = 'none';
    counter = carouselImages.length - 2;
    carouselSlide.style.transform = 'translateX' + (-size * counter) + 'px)';
  }
  if (carouselImages[counter].id === 'firstClone') {
    carouselSlide.style.transition = 'none';
    counter = carouselImages.length - counter;
    carouselSlide.style.transform = 'translateX' + (-size * counter) + 'px)';
  }
});