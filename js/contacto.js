const button = document.querySelector('#wpforms-submit-38');

const carouselSlide = document.querySelector('.contact__carousel-container');
const carouselImages = document.querySelectorAll('.contact__carousel-container img');

const nextBtn = document.querySelector('.contact__next');
const prevBtn = document.querySelector('.contact__prev');

let counter = 1;
const size = 350;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

console.log(size);

nextBtn.addEventListener('click', () => {
  if(counter >= carouselImages.length - 1) return;
  if (counter <= 0) return;
  carouselSlide.style.transition = 'transform 0.6s ease-in-out';
  counter += 1;
  carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
  console.log(counter);
});

prevBtn.addEventListener('click', () => {
  if (counter <= 0) return;
  carouselSlide.style.transition = "transform 0.6s ease-in-out";
  counter -= 1;
  carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
  console.log(counter);
});

carouselSlide.addEventListener('transitionend', () => {
  if (carouselImages[counter].id === 'lastContactClone') {
    carouselSlide.style.transition = 'none';
    counter = carouselImages.length - 2;
    carouselSlide.style.transform = 'translateX' + (-size * counter) + 'px)';
  }
  if (carouselImages[counter].id === 'firstContactClone') {
    carouselSlide.style.transition = 'none';
    counter = carouselImages.length - counter;
    carouselSlide.style.transform = 'translateX' + (-size * counter) + 'px)';
  }
  console.log(counter);
});

button.addEventListener('click', () => {
  return gtag_report_conversion('https://npimoldingsolutions.com/contacto');
});